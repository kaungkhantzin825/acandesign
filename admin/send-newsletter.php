<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/../newsletter-mail-config.php';

$hasMailer = is_file(__DIR__ . '/../vendor/autoload.php');
if ($hasMailer) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    error_log('send-newsletter: vendor/autoload.php missing — run composer install');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
        // uploaded images with absolute URLs) — sent through as-is.
        $htmlBody = $body;

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
    }
}

$subscribers = [];
$res = $conn->query("SELECT id, email, name, company, created_at FROM subscribers WHERE source = 'newsletter' ORDER BY created_at DESC");
while ($row = $res->fetch_assoc()) { $subscribers[] = $row; }
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

    .wrap { max-width: 860px; margin: 0 auto; padding: 2rem 1.5rem 3.5rem; }

    .page-head { margin-bottom: 1.5rem; }
    .page-head h1 {
      font-size: 1.5rem;
      font-weight: 900;
      margin: 0 0 0.3rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .page-head p {
      font-size: 0.85rem;
      color: #6b7280;
      margin: 0;
    }

    .alert-success {
      background: #eafaf1;
      border: 1px solid #b7ebc6;
      color: #1e7e34;
      padding: 0.85rem 1rem;
      border-radius: 8px;
      font-size: 0.88rem;
      margin-bottom: 1.25rem;
      line-height: 1.7;
    }

    .alert-error {
      background: #fdecea;
      border: 1px solid #f5c6cb;
      color: #b42318;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      font-size: 0.88rem;
      margin-bottom: 1.25rem;
    }

    .card {
      background: #fff;
      border: 1px solid #eef1f7;
      border-radius: 14px;
      box-shadow: 0 2px 10px rgba(18,73,158,0.05);
      padding: 1.75rem;
      margin-bottom: 1.5rem;
    }

    .card__title {
      font-size: 1rem;
      font-weight: 900;
      margin: 0 0 1.1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #0d2a63;
    }

    .card__title .dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #12499e;
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
      margin-bottom: 0.75rem;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .recipients-count { font-size: 0.82rem; color: #6b7280; }

    .recipients-list {
      border: 1px solid #eef1f7;
      border-radius: 10px;
      max-height: 320px;
      overflow-y: auto;
    }

    .recipient-row {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 0.65rem 1rem;
      border-bottom: 1px solid #f2f4f8;
      font-size: 0.85rem;
      cursor: pointer;
      transition: background 0.15s;
    }

    .recipient-row:last-child { border-bottom: none; }
    .recipient-row:hover { background: #f8faff; }

    .recipientCheck {
      width: 17px;
      height: 17px;
      accent-color: #12499e;
      cursor: pointer;
      flex-shrink: 0;
    }

    .recipient-avatar {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: linear-gradient(135deg, #12499e, #1a5fd4);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .recipient-text { min-width: 0; display: flex; flex-direction: column; gap: 0.1rem; }
    .recipient-email { font-weight: 700; color: #1a1a2e; }
    .recipient-name { color: #9ca3af; font-size: 0.78rem; }

    .empty-row { text-align: center; color: #9ca3af; padding: 2rem 1rem; }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.65rem 1.4rem;
      border-radius: 999px;
      font-size: 0.88rem;
      font-weight: 700;
      font-family: inherit;
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: transform 0.15s, box-shadow 0.15s, opacity 0.15s;
    }

    .btn:hover { opacity: 0.92; }
    .btn-primary {
      background: linear-gradient(135deg, #12499e, #1a5fd4);
      color: #fff;
      box-shadow: 0 4px 14px rgba(18,73,158,0.3);
    }
    .btn-primary:hover { transform: translateY(-1px); box-shadow: 0 6px 18px rgba(18,73,158,0.38); }
    .btn-default { background: #eef1f7; color: #1a1a2e; border-radius: 8px; }
    .btn-sm { padding: 0.35rem 0.8rem; font-size: 0.78rem; }

    .form-actions {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 1.75rem;
      padding-top: 1.25rem;
      border-top: 1px solid #eef1f7;
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
      <span><?= htmlspecialchars($_SESSION['admin_username'] ?? '') ?></span>
      <a href="logout.php">ログアウト</a>
    </div>
  </div>

  <div class="wrap">
    <div class="page-head">
      <h1>📨 ニュースレター送信</h1>
      <p>メルマガ登録者へ、自由な内容のお知らせメールを作成して送信します。</p>
    </div>

    <?php if ($results !== null): ?>
      <div class="<?= $results['failed'] > 0 ? 'alert-error' : 'alert-success' ?>">
        送信完了：<?= (int)$results['sent'] ?>件成功<?php if ($results['failed'] > 0): ?>、<?= (int)$results['failed'] ?>件失敗<?php endif; ?>
        <?php if (!empty($results['failures'])): ?>
          <ul style="margin: 0.6rem 0 0; padding-left: 1.2rem;">
            <?php foreach ($results['failures'] as $failEmail => $reason): ?>
              <li><?= htmlspecialchars($failEmail) ?>：<?= htmlspecialchars($reason) ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($error !== ''): ?>
      <div class="alert-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" id="newsletterForm">
      <div class="card">
        <p class="card__title"><span class="dot"></span>メール内容</p>
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
          <p class="card__title" style="margin:0;"><span class="dot"></span>送信先（メルマガ登録者）</p>
          <div style="display:flex; align-items:center; gap:0.75rem;">
            <span class="recipients-count"><?= count($subscribers) ?>件登録</span>
            <button type="button" class="btn btn-default btn-sm" id="toggleAll">全選択/解除</button>
          </div>
        </div>
        <div class="recipients-list">
          <?php if (empty($subscribers)): ?>
            <div class="empty-row">メルマガ登録者が見つかりません。</div>
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
        <span class="recipients-count"><span id="selectedCount">0</span>件に送信します</span>
        <button type="submit" class="btn btn-primary" onclick="return confirm('選択した送信先へメールを送信しますか？');">送信する</button>
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

    // Default HTML starting layout — inline styles (not Quill's ql-align
    // classes) so the look survives into the actual sent email too.
    const DEFAULT_TEMPLATE = ''
      + '<p style="text-align:center;"><img src="https://acan-sol.com/assets/img/logo.webp" alt="A CAN SOLUTIONS" style="width:56px;height:56px;border-radius:12px;"></p>'
      + '<h1 style="text-align:center;color:#12499e;font-size:22px;margin:12px 0 4px;">ここにタイトルを入力</h1>'
      + '<p style="text-align:center;color:#6b7280;font-size:13px;margin:0 0 20px;">サブタイトルや日付を入力</p>'
      + '<p>いつもA CAN SOLUTIONSをご利用いただき、誠にありがとうございます。</p>'
      + '<p>ここに本文を入力してください。</p>'
      + '<p>今後ともよろしくお願いいたします。</p>'
      + '<p>――――――――――――――――<br>A CAN SOLUTIONS株式会社<br>Email: info@acan-sol.com<br>Web: https://acan-sol.com<br>――――――――――――――――</p>';

    const bodyField = document.getElementById('bodyField');
    quill.root.innerHTML = bodyField.value.trim() !== '' ? bodyField.value : DEFAULT_TEMPLATE;

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
