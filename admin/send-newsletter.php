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
        $error = 'メール送信機能が利用できません（vendor/未インストール）。サーバー管理者にお問い合わせください。';
    } elseif ($subject === '' || $bodyIsEmpty) {
        $error = '件名と本文を入力してください。';
    } elseif (empty($ids)) {
        $error = '送信先を1件以上選択してください。';
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
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ニュースレター送信 | A CAN SOLUTIONS 管理画面</title>
  <link rel="icon" type="image/webp" href="../assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.snow.min.css" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; }

    body {
      font-family: "Noto Sans JP", "Hiragino Kaku Gothic ProN", sans-serif;
      margin: 0;
      background: #f5f7fb;
      color: #1a1a2e;
    }

    a { color: inherit; }

    .topbar {
      background: #12499e;
      color: #fff;
      padding: 0.9rem 1.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .topbar__brand {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-weight: 900;
      font-size: 1rem;
    }

    .topbar__brand img { width: 30px; height: 30px; }

    .topbar__right {
      display: flex;
      align-items: center;
      gap: 1.25rem;
      font-size: 0.85rem;
    }

    .topbar__right a {
      text-decoration: none;
      color: #fff;
      background: rgba(255,255,255,0.15);
      padding: 0.4rem 0.9rem;
      border-radius: 999px;
      transition: background 0.2s;
    }

    .topbar__right a:hover { background: rgba(255,255,255,0.28); }

    .wrap { max-width: 920px; margin: 0 auto; padding: 2.25rem 1.5rem 3.5rem; }

    .page-head {
      display: flex;
      align-items: center;
      gap: 1.1rem;
      flex-wrap: wrap;
      margin-bottom: 1.75rem;
    }
    .page-head__icon {
      width: 54px;
      height: 54px;
      border-radius: 16px;
      background: linear-gradient(135deg, #12499e, #1a5fd4);
      box-shadow: 0 6px 16px rgba(18,73,158,0.3);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      flex-shrink: 0;
    }
    .page-head__text { flex: 1; min-width: 200px; }
    .page-head h1 {
      font-size: 1.4rem;
      font-weight: 900;
      margin: 0 0 0.25rem;
      color: #0d2a63;
    }
    .page-head p {
      font-size: 0.85rem;
      color: #6b7280;
      margin: 0;
    }
    .page-head__stats {
      display: flex;
      gap: 0.6rem;
      flex-wrap: wrap;
    }
    .stat-chip {
      background: #fff;
      border: 1px solid #eef1f7;
      border-radius: 12px;
      padding: 0.5rem 1rem;
      text-align: center;
      min-width: 76px;
      box-shadow: 0 2px 8px rgba(18,73,158,0.05);
    }
    .stat-chip strong {
      display: block;
      font-size: 1.1rem;
      font-weight: 900;
      color: #12499e;
      line-height: 1.2;
    }
    .stat-chip span {
      font-size: 0.68rem;
      color: #9ca3af;
      font-weight: 700;
    }

    .alert-success,
    .alert-error {
      display: flex;
      align-items: flex-start;
      gap: 0.65rem;
      padding: 0.9rem 1.1rem;
      border-radius: 10px;
      font-size: 0.88rem;
      margin-bottom: 1.25rem;
      line-height: 1.7;
      border-left: 4px solid;
    }

    .alert-success {
      background: #eafaf1;
      border-color: #22a55a;
      color: #1e7e34;
    }

    .alert-error {
      background: #fdecea;
      border-color: #e5484d;
      color: #b42318;
    }

    .alert-icon { font-size: 1.1rem; flex-shrink: 0; line-height: 1.4; }

    .card {
      background: #fff;
      border: 1px solid #eef1f7;
      border-radius: 16px;
      box-shadow: 0 2px 12px rgba(18,73,158,0.06);
      padding: 1.75rem;
      margin-bottom: 1.5rem;
    }

    .card__title {
      font-size: 1rem;
      font-weight: 900;
      margin: 0 0 1.25rem;
      display: flex;
      align-items: center;
      gap: 0.65rem;
      color: #0d2a63;
    }

    .card__icon {
      width: 30px;
      height: 30px;
      border-radius: 9px;
      background: #eef3fc;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.95rem;
      flex-shrink: 0;
    }

    .field { margin-bottom: 1.1rem; }

    .field label {
      display: block;
      font-size: 0.82rem;
      font-weight: 700;
      color: #1a1a2e;
      margin-bottom: 0.4rem;
    }

    .field input[type="text"],
    .field textarea {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1.5px solid #d1d9e6;
      border-radius: 9px;
      font-size: 0.95rem;
      font-family: inherit;
      outline: none;
      transition: border-color 0.2s, box-shadow 0.2s;
      resize: vertical;
    }

    .field input[type="text"]:focus,
    .field textarea:focus {
      border-color: #12499e;
      box-shadow: 0 0 0 3px rgba(18,73,158,0.1);
    }

    .field__hint { font-size: 0.75rem; color: #9ca3af; margin-top: 0.3rem; }

    #editor {
      background: #fff;
      border-radius: 0 0 8px 8px;
      font-size: 0.92rem;
      font-family: inherit;
      min-height: 260px;
    }
    .ql-toolbar.ql-snow {
      border-color: #d1d9e6;
      border-radius: 8px 8px 0 0;
      font-family: inherit;
    }
    .ql-container.ql-snow { border-color: #d1d9e6; font-family: inherit; }
    .ql-editor { min-height: 260px; font-size: 0.92rem; }
    .ql-editor.ql-blank::before { font-style: normal; color: #9ca3af; }
    .ql-editor img {
      max-width: 280px;
      max-height: 200px;
      width: auto;
      height: auto;
      display: block;
      margin: 0.75rem 0;
      border-radius: 6px;
      object-fit: contain;
    }
    .ql-editor img.ql-image-selected { outline: 2px solid #12499e; }

    .recipients-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.9rem;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .recipients-count { font-size: 0.82rem; color: #6b7280; }
    .recipients-count strong { color: #12499e; font-weight: 900; }

    .recipients-list {
      border: 1px solid #eef1f7;
      border-radius: 12px;
      max-height: 320px;
      overflow-y: auto;
    }

    .recipient-row {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 0.7rem 1rem;
      border-bottom: 1px solid #f2f4f8;
      border-left: 3px solid transparent;
      font-size: 0.85rem;
      cursor: pointer;
      transition: background 0.15s, border-color 0.15s;
    }

    .recipient-row:last-child { border-bottom: none; }
    .recipient-row:hover { background: #f8faff; }
    .recipient-row:has(.recipientCheck:checked) {
      background: #eef5ff;
      border-left-color: #12499e;
    }

    .recipientCheck {
      width: 18px;
      height: 18px;
      accent-color: #12499e;
      cursor: pointer;
      flex-shrink: 0;
    }

    .recipient-avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: linear-gradient(135deg, #12499e, #1a5fd4);
      color: #fff;
      font-size: 0.74rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .recipient-text { min-width: 0; display: flex; flex-direction: column; gap: 0.1rem; }
    .recipient-email { font-weight: 700; color: #1a1a2e; }
    .recipient-name { color: #9ca3af; font-size: 0.78rem; }

    .empty-row {
      text-align: center;
      color: #9ca3af;
      padding: 2.5rem 1rem;
      font-size: 0.85rem;
    }
    .empty-row__icon { font-size: 1.6rem; display: block; margin-bottom: 0.5rem; opacity: 0.6; }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.7rem 1.5rem;
      border-radius: 999px;
      font-size: 0.88rem;
      font-weight: 700;
      font-family: inherit;
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: transform 0.15s, box-shadow 0.15s, opacity 0.15s, background 0.15s;
    }

    .btn:hover { opacity: 0.92; }
    .btn-primary {
      background: linear-gradient(135deg, #12499e, #1a5fd4);
      color: #fff;
      box-shadow: 0 4px 14px rgba(18,73,158,0.3);
    }
    .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 6px 18px rgba(18,73,158,0.38); }
    .btn-default { background: #eef1f7; color: #1a1a2e; border-radius: 999px; }
    .btn-default:hover { background: #e3e9f5; }
    .btn-sm { padding: 0.4rem 0.95rem; font-size: 0.78rem; }

    .form-actions {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 1rem;
      margin-top: 1rem;
    }

  </style>
</head>
<body>

  <div class="topbar">
    <div class="topbar__brand">
      <img src="../assets/img/logo.webp" alt="" />
      A CAN SOLUTIONS 管理画面
    </div>
    <div class="topbar__right">
      <a href="dashboard.php">ダッシュボードへ戻る</a>
      <a href="newsletter-history.php">送信履歴</a>
      <span><?= htmlspecialchars($_SESSION['admin_username'] ?? '') ?></span>
      <a href="logout.php">ログアウト</a>
    </div>
  </div>

  <div class="wrap">
    <div class="page-head">
      <div class="page-head__icon">📨</div>
      <div class="page-head__text">
        <h1>ニュースレター送信</h1>
        <p>メルマガ登録者へ、自由な内容のお知らせメールを作成して送信します。</p>
      </div>
      <div class="page-head__stats">
        <div class="stat-chip"><strong><?= count($subscribers) ?></strong><span>登録者</span></div>
        <a href="newsletter-history.php" class="stat-chip" style="text-decoration:none;"><strong><?= $historyCount ?></strong><span>送信履歴</span></a>
      </div>
    </div>

    <?php if ($results !== null): ?>
      <div class="<?= $results['failed'] > 0 ? 'alert-error' : 'alert-success' ?>">
        <span class="alert-icon"><?= $results['failed'] > 0 ? '⚠️' : '✅' ?></span>
        <div>
          送信完了：<?= (int)$results['sent'] ?>件成功<?php if ($results['failed'] > 0): ?>、<?= (int)$results['failed'] ?>件失敗<?php endif; ?>
          <?php if (!empty($results['failures'])): ?>
            <ul style="margin: 0.6rem 0 0; padding-left: 1.2rem;">
              <?php foreach ($results['failures'] as $failEmail => $reason): ?>
                <li><?= htmlspecialchars($failEmail) ?>：<?= htmlspecialchars($reason) ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($error !== ''): ?>
      <div class="alert-error"><span class="alert-icon">⚠️</span><div><?= htmlspecialchars($error) ?></div></div>
    <?php endif; ?>

    <form method="POST" id="newsletterForm">
      <div class="card">
        <p class="card__title"><span class="card__icon">📝</span>メール内容</p>
        <div class="field">
          <label for="subject">件名</label>
          <input type="text" id="subject" name="subject" required value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>" />
        </div>
        <div class="field">
          <label for="editor">本文</label>
          <div id="editor"></div>
          <textarea name="body" id="bodyField" style="display:none;"><?= $_POST['body'] ?? '' ?></textarea>
          <div class="field__hint">太字・リンク・画像などはツールバーで装飾できます。画像ボタンからアップロードすると、そのままメールに挿入されます。</div>
        </div>
      </div>

      <div class="card">
        <div class="recipients-head">
          <p class="card__title" style="margin:0;"><span class="card__icon">👥</span>送信先（メルマガ登録者）</p>
          <div style="display:flex; align-items:center; gap:0.75rem;">
            <span class="recipients-count"><?= count($subscribers) ?>件登録</span>
            <button type="button" class="btn btn-default btn-sm" id="toggleAll">全選択/解除</button>
          </div>
        </div>
        <div class="recipients-list">
          <?php if (empty($subscribers)): ?>
            <div class="empty-row"><span class="empty-row__icon">📭</span>メルマガ登録者が見つかりません。</div>
          <?php else: foreach ($subscribers as $s):
            $initial = mb_substr($s['name'] !== '' ? $s['name'] : $s['email'], 0, 1, 'UTF-8');
          ?>
            <label class="recipient-row">
              <input type="checkbox" name="ids[]" value="<?= (int)$s['id'] ?>" class="recipientCheck">
              <span class="recipient-avatar"><?= htmlspecialchars(mb_strtoupper($initial, 'UTF-8')) ?></span>
              <span class="recipient-text">
                <span class="recipient-email"><?= htmlspecialchars($s['email']) ?></span>
                <span class="recipient-name"><?= htmlspecialchars($s['name']) ?><?= $s['company'] !== '' ? '（' . htmlspecialchars($s['company']) . '）' : '' ?></span>
              </span>
            </label>
          <?php endforeach; endif; ?>
        </div>
      </div>

      <div class="form-actions">
        <span class="recipients-count"><strong id="selectedCount">0</strong>件に送信します</span>
        <button type="submit" class="btn btn-primary" onclick="return confirm('選択した送信先へメールを送信しますか？');">📤 送信する</button>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js"></script>
  <script>
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
      placeholder: 'メール本文を入力してください…',
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
        quill.insertText(range.index, 'アップロード中…', { italic: true });

        const formData = new FormData();
        formData.append('image', file);

        fetch('upload-newsletter-image.php', { method: 'POST', body: formData })
          .then(function (r) { return r.json(); })
          .then(function (data) {
            quill.deleteText(range.index, 'アップロード中…'.length);
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
              alert('画像のアップロードに失敗しました: ' + (data.error || ''));
            }
          })
          .catch(function () {
            quill.deleteText(range.index, 'アップロード中…'.length);
            alert('画像のアップロードに失敗しました。');
          });
      };
    }

    document.getElementById('newsletterForm').addEventListener('submit', function () {
      bodyField.value = quill.root.innerHTML;
    });
  </script>
</body>
</html>
