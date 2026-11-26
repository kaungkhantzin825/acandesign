<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/../newsletter-mail-config.php';
require_once __DIR__ . '/../seo-config.php';

$hasMailer = is_file(__DIR__ . '/../vendor/autoload.php');
if ($hasMailer) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    error_log('send-newsletter: vendor/autoload.php missing — run composer install');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Wraps the editor's HTML in a branded email layout (logo header + footer).
// Table-based + inline CSS, since that's what actually renders consistently
// across email clients (no external stylesheet, no flexbox/grid). The logo is
// a PNG (not the site's .webp) because Outlook desktop's Word rendering
// engine doesn't support WebP in HTML email.
function build_newsletter_email_html($subject, $bodyHtml) {
    $logoUrl = rtrim(SEO_SITE_URL, '/') . '/assets/img/logo.webp';
    $siteUrl = rtrim(SEO_SITE_URL, '/');
    $year = date('Y');

    return '<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') . '</title>
</head>
<body style="margin:0; padding:0; background:#f0f3f9; font-family:\'Hiragino Kaku Gothic ProN\', \'Noto Sans JP\', sans-serif;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f0f3f9; padding:32px 16px;">
<tr><td align="center">
<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%; background:#ffffff; border-radius:14px; overflow:hidden; box-shadow:0 4px 20px rgba(18,73,158,0.08);">

<tr>
<td style="background:linear-gradient(135deg,#12499e,#1a5fd4); background-color:#12499e; padding:28px 32px; text-align:center;">
<img src="' . htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8') . '" alt="A CAN SOLUTIONS" width="48" height="48" style="display:block; margin:0 auto 10px; border:0;">
<span style="color:#ffffff; font-size:18px; font-weight:700; letter-spacing:0.02em;">A CAN SOLUTIONS</span>
</td>
</tr>

<tr>
<td style="padding:36px 32px; color:#1a1a2e; font-size:15px; line-height:1.8;">
' . $bodyHtml . '
</td>
</tr>

<tr>
<td style="background:#f5f7fb; padding:24px 32px; text-align:center; border-top:1px solid #eef1f7;">
<p style="margin:0 0 6px; font-size:13px; font-weight:700; color:#0d2a63;">A CAN SOLUTIONS Co.,Ltd.</p>
<p style="margin:0 0 14px; font-size:12px; color:#9ca3af;">ミャンマーと日本をつなぐITアウトソーシングパートナー</p>
<p style="margin:0; font-size:12px;">
<a href="' . htmlspecialchars($siteUrl, ENT_QUOTES, 'UTF-8') . '" style="color:#12499e; text-decoration:none; font-weight:700;">acan-sol.com</a>
</p>
<p style="margin:14px 0 0; font-size:11px; color:#c3c9d6;">&copy; ' . $year . ' A CAN SOLUTIONS Co.,Ltd. All rights reserved.</p>
</td>
</tr>

</table>
</td></tr>
</table>
</body>
</html>';
}

// Separate from the shared send_newsletter_mail() helper (newsletter-mailer.php)
// on purpose: that helper sends plain-text bodies for the signup auto-reply, and
// switching it to isHTML() would break that email's \r\n line breaks. This admin
// broadcast needs HTML rendering (so admin-entered <b>/<a> tags work), so it
// builds its own PHPMailer instance instead.
function send_newsletter_broadcast($to, $subject, $htmlBody) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host        = NEWSLETTER_SMTP_HOST;
        $mail->SMTPAuth    = true;
        $mail->Username    = NEWSLETTER_SMTP_USERNAME;
        $mail->Password    = NEWSLETTER_SMTP_PASSWORD;
        $mail->SMTPSecure  = NEWSLETTER_SMTP_SECURE;
        $mail->SMTPAutoTLS = NEWSLETTER_SMTP_SECURE !== '';
        $mail->Port        = NEWSLETTER_SMTP_PORT;
        $mail->CharSet     = 'UTF-8';
        $mail->Timeout     = 15;

        $mail->setFrom(NEWSLETTER_SMTP_USERNAME, 'A CAN SOLUTIONS');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $htmlBody;
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log('send-newsletter broadcast failed: ' . $e->getMessage());
        return $e->getMessage();
    }
}

// Self-migrating: history table is created on first use, no manual DB step needed.
$conn->query("CREATE TABLE IF NOT EXISTS newsletter_sends (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(255) NOT NULL,
    body LONGTEXT,
    recipient_count INT DEFAULT 0,
    sent_count INT DEFAULT 0,
    failed_count INT DEFAULT 0,
    sent_by VARCHAR(100) DEFAULT '',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

$error = '';
$results = null; // ['sent' => int, 'failed' => int, 'failedEmails' => []]

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = trim($_POST['subject'] ?? '');
    $body    = trim($_POST['body'] ?? '');
    $ids     = array_map('intval', $_POST['ids'] ?? []);

    $bodyIsEmpty = trim(strip_tags($body)) === '' && stripos($body, '<img') === false;

    if (!$hasMailer) {
        $error = t('send.err_mailer');
    } elseif ($subject === '' || $bodyIsEmpty) {
        $error = t('send.err_empty');
    } elseif (empty($ids)) {
        $error = t('send.err_no_to');
    } else {
        $idList = implode(',', $ids);
        $res = $conn->query("SELECT email, name FROM subscribers WHERE source = 'newsletter' AND id IN ($idList)");

        $sent = 0;
        $failures = []; // email => error message
        // $body is the rich-text editor's HTML output (paragraphs, bold, links,
        // uploaded images with absolute URLs); wrap it in the branded template
        // (logo header + footer) before sending and saving to history, so the
        // history preview shows exactly what recipients received.
        $htmlBody = build_newsletter_email_html($subject, $body);

        while ($row = $res->fetch_assoc()) {
            $result = send_newsletter_broadcast($row['email'], $subject, $htmlBody);
            if ($result === true) {
                $sent++;
            } else {
                $failures[$row['email']] = $result;
            }
        }

        $results = [
            'sent'     => $sent,
            'failed'   => count($failures),
            'failures' => $failures,
        ];

        $stmt = $conn->prepare("INSERT INTO newsletter_sends (subject, body, recipient_count, sent_count, failed_count, sent_by) VALUES (?, ?, ?, ?, ?, ?)");
        $recipientCount = count($ids);
        $sentBy = $_SESSION['admin_username'] ?? '';
        $stmt->bind_param('ssiiis', $subject, $htmlBody, $recipientCount, $sent, $results['failed'], $sentBy);
        $stmt->execute();
        $stmt->close();
    }
}

$subscribers = [];
$res = $conn->query("SELECT id, email, name, company, created_at FROM subscribers WHERE source = 'newsletter' ORDER BY created_at DESC");
while ($row = $res->fetch_assoc()) { $subscribers[] = $row; }

$historyCount = 0;
$res = $conn->query("SELECT COUNT(*) AS c FROM newsletter_sends");
if ($res) { $historyCount = (int)$res->fetch_assoc()['c']; }
?>
<?php
$pageTitle    = t('send.title');
$pageSubtitle = t('send.subtitle');
$extraHead    = '<link href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.snow.min.css" rel="stylesheet" />';
require __DIR__ . '/partials/header.php';
?>

        <?php if ($results !== null): ?>
          <div class="alert <?= $results['failed'] > 0 ? 'alert-warning' : 'alert-success' ?> alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="<?= te('common.close') ?>">&times;</button>
            <h5 class="mb-1"><i class="icon fas <?= $results['failed'] > 0 ? 'fa-exclamation-triangle' : 'fa-check' ?>"></i><?= te('send.done') ?></h5>
            <?php if ($results['failed'] > 0): ?>
              <?= te('send.result_failed', ['sent' => (int)$results['sent'], 'failed' => (int)$results['failed']]) ?>
            <?php else: ?>
              <?= te('send.result', ['sent' => (int)$results['sent']]) ?>
            <?php endif; ?>
            <?php if (!empty($results['failures'])): ?>
              <ul class="mt-2 mb-0 pl-3">
                <?php foreach ($results['failures'] as $failEmail => $reason): ?>
                  <li><?= htmlspecialchars($failEmail) ?><?= te('common.colon') ?><?= htmlspecialchars($reason) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php if ($error !== ''): ?>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="<?= te('common.close') ?>">&times;</button>
            <i class="icon fas fa-ban"></i><?= htmlspecialchars($error) ?>
          </div>
        <?php endif; ?>

        <div class="row">
          <div class="col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><?= te('send.subscribers') ?></span>
                <span class="info-box-number"><?= count($subscribers) ?> <small><?= te('common.unit') ?></small></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <a href="newsletter-history.php" class="info-box text-reset">
              <span class="info-box-icon bg-acan elevation-1"><i class="fas fa-history"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><?= te('send.history') ?></span>
                <span class="info-box-number"><?= $historyCount ?> <small><?= te('common.unit') ?></small></span>
              </div>
            </a>
          </div>
        </div>

        <form method="POST" id="newsletterForm">
          <div class="row">
            <!-- Message -->
            <div class="col-lg-7">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title"><i class="fas fa-edit mr-1"></i><?= te('send.content') ?></h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="subject"><?= te('send.subject') ?></label>
                    <input type="text" id="subject" name="subject" class="form-control" required value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>" />
                  </div>
                  <div class="form-group mb-0">
                    <label for="editor"><?= te('send.body') ?></label>
                    <div id="editor"></div>
                    <textarea name="body" id="bodyField" class="d-none"><?= htmlspecialchars($_POST['body'] ?? '') ?></textarea>
                    <small class="form-text text-muted"><?= te('send.hint') ?></small>
                  </div>
                </div>
              </div>
            </div>

            <!-- Recipients -->
            <div class="col-lg-5">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title"><i class="fas fa-user-friends mr-1"></i><?= te('send.recipients') ?></h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" id="toggleAll"><i class="fas fa-check-double"></i> <?= te('send.toggle_all') ?></button>
                  </div>
                </div>
                <div class="card-body p-0 recipients-list">
                  <?php if (empty($subscribers)): ?>
                    <div class="empty-row"><i class="fas fa-inbox"></i><?= te('subs.empty') ?></div>
                  <?php else: ?>
                    <ul class="list-group list-group-flush">
                      <?php foreach ($subscribers as $s):
                        $initial = mb_substr($s['name'] !== '' ? $s['name'] : $s['email'], 0, 1, 'UTF-8');
                      ?>
                        <li class="list-group-item p-0">
                          <label class="recipient-row px-3 py-2">
                            <input type="checkbox" name="ids[]" value="<?= (int)$s['id'] ?>" class="recipientCheck">
                            <span class="recipient-avatar"><?= htmlspecialchars(mb_strtoupper($initial, 'UTF-8')) ?></span>
                            <span class="recipient-text">
                              <span class="recipient-email"><?= htmlspecialchars($s['email']) ?></span>
                              <span class="recipient-name"><?= htmlspecialchars($s['name']) ?><?= $s['company'] !== '' ? te('common.paren', ['x' => $s['company']]) : '' ?></span>
                            </span>
                          </label>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between flex-wrap">
                  <span class="text-muted"><?= th('send.will_send', ['n' => '<strong class="text-acan" id="selectedCount">0</strong>']) ?></span>
                  <button type="submit" class="btn btn-primary ml-auto" data-confirm="<?= te('send.confirm') ?>"><i class="fas fa-paper-plane"></i> <?= te('send.submit') ?></button>
                </div>
              </div>
            </div>
          </div>
        </form>

<?php require __DIR__ . '/partials/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"></script>
<script>
  const i18n = {
    placeholder: <?= tj('send.placeholder') ?>,
    uploading: <?= tj('send.uploading') ?>,
    uploadFailed: <?= tj('send.upload_failed') ?>,
    uploadFailedReason: <?= tj('send.upload_failed_reason') ?>
  };

  const checks = document.querySelectorAll('.recipientCheck');
  const selectedCount = document.getElementById('selectedCount');
  const toggleAll = document.getElementById('toggleAll');

  function updateCount() {
    selectedCount.textContent = Array.from(checks).filter(c => c.checked).length;
  }

  checks.forEach(c => c.addEventListener('change', updateCount));
  updateCount();

  if (toggleAll) {
    toggleAll.addEventListener('click', function () {
      const anyUnchecked = Array.from(checks).some(c => !c.checked);
      checks.forEach(c => { c.checked = anyUnchecked; });
      updateCount();
    });
  }

  // Rich-text editor for the email body. Toolbar is limited to formats that
  // render reliably in email clients (semantic tags + inline-styled embeds) —
  // no alignment/indent/color, which Quill implements via CSS classes that
  // won't be available in a recipient's inbox.
  const quill = new Quill('#editor', {
    theme: 'snow',
    placeholder: i18n.placeholder,
    modules: {
      toolbar: {
        container: [
          ['bold', 'italic', 'underline'],
          [{ list: 'ordered' }, { list: 'bullet' }],
          ['blockquote', 'link', 'image'],
          ['clean']
        ],
        handlers: { image: imageHandler }
      }
    }
  });

  const bodyField = document.getElementById('bodyField');
  // dangerouslyPasteHTML (not quill.root.innerHTML) so Quill actually parses
  // this into its own Delta model — setting innerHTML directly bypasses that,
  // and Quill's own update cycle then silently drops anything it doesn't
  // recognize (e.g. bare <br> tags collapsed, no space left behind).
  if (bodyField.value.trim() !== '') {
    quill.clipboard.dangerouslyPasteHTML(bodyField.value);
  }

  function imageHandler() {
    const input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    input.click();

    input.onchange = function () {
      const file = input.files[0];
      if (!file) return;

      const range = quill.getSelection(true);
      quill.insertText(range.index, i18n.uploading, { italic: true });

      const formData = new FormData();
      formData.append('image', file);

      fetch('upload-newsletter-image.php', { method: 'POST', body: formData })
        .then(function (r) { return r.json(); })
        .then(function (data) {
          quill.deleteText(range.index, i18n.uploading.length);
          if (data.url) {
            quill.insertEmbed(range.index, 'image', data.url);
            quill.setSelection(range.index + 1);
            // Inline style (not a CSS class) so it survives into the sent
            // email and keeps the image from overflowing a narrow inbox.
            var img = quill.root.querySelector('img[src="' + data.url + '"]');
            if (img) {
              img.setAttribute('style', 'max-width:100%;height:auto;display:block;border-radius:6px;');
            }
          } else {
            alert(i18n.uploadFailedReason + (data.error || ''));
          }
        })
        .catch(function () {
          quill.deleteText(range.index, i18n.uploading.length);
          alert(i18n.uploadFailed);
        });
    };
  }

  document.getElementById('newsletterForm').addEventListener('submit', function () {
    bodyField.value = quill.root.innerHTML;
  });
</script>
</body>
</html>
