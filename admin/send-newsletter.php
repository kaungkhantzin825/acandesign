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
        error_log('send-newsletter broadcast failed: ' . $mail->ErrorInfo);
        return false;
    }
}

$error = '';
$results = null; // ['sent' => int, 'failed' => int, 'failedEmails' => []]

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = trim($_POST['subject'] ?? '');
    $body    = trim($_POST['body'] ?? '');
    $ids     = array_map('intval', $_POST['ids'] ?? []);

    if (!$hasMailer) {
        $error = 'メール送信機能が利用できません（vendor/未インストール）。サーバー管理者にお問い合わせください。';
    } elseif ($subject === '' || $body === '') {
        $error = '件名と本文を入力してください。';
    } elseif (empty($ids)) {
        $error = '送信先を1件以上選択してください。';
    } else {
        $idList = implode(',', $ids);
        $res = $conn->query("SELECT email, name FROM subscribers WHERE source = 'newsletter' AND id IN ($idList)");

        $sent = 0;
        $failedEmails = [];
        // Admin-only form: body is trusted input, so line breaks become <br>
        // but any HTML tags the admin writes (<b>, <a href="...">, ...) pass
        // through untouched and render in the sent email.
        $htmlBody = nl2br($body);

        while ($row = $res->fetch_assoc()) {
            $ok = send_newsletter_broadcast($row['email'], $subject, $htmlBody);
            if ($ok) {
                $sent++;
            } else {
                $failedEmails[] = $row['email'];
            }
        }

        $results = [
            'sent'         => $sent,
            'failed'       => count($failedEmails),
            'failedEmails' => $failedEmails,
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

    .wrap { max-width: 900px; margin: 0 auto; padding: 1.75rem 1.5rem 3rem; }

    h1 { font-size: 1.3rem; margin: 0 0 1.25rem; }

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
      border-radius: 10px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
      padding: 1.5rem;
      margin-bottom: 1.5rem;
    }

    .card__title {
      font-size: 1rem;
      font-weight: 700;
      margin: 0 0 1rem;
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
      padding: 0.7rem 0.9rem;
      border: 1.5px solid #d1d9e6;
      border-radius: 8px;
      font-size: 0.92rem;
      font-family: inherit;
      outline: none;
      transition: border-color 0.2s;
      resize: vertical;
    }

    .field input[type="text"]:focus,
    .field textarea:focus { border-color: #12499e; }

    .field__hint { font-size: 0.75rem; color: #9ca3af; margin-top: 0.3rem; }

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
      border-radius: 8px;
      max-height: 320px;
      overflow-y: auto;
    }

    .recipient-row {
      display: flex;
      align-items: center;
      gap: 0.7rem;
      padding: 0.6rem 0.9rem;
      border-bottom: 1px solid #f2f4f8;
      font-size: 0.85rem;
    }

    .recipient-row:last-child { border-bottom: none; }
    .recipient-row:hover { background: #fafbfe; }

    .recipient-email { font-weight: 700; color: #1a1a2e; }
    .recipient-name { color: #6b7280; }

    .empty-row { text-align: center; color: #9ca3af; padding: 2rem 1rem; }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.6rem 1.3rem;
      border-radius: 6px;
      font-size: 0.88rem;
      font-weight: 700;
      font-family: inherit;
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: opacity 0.2s;
    }

    .btn:hover { opacity: 0.85; }
    .btn-primary { background: #12499e; color: #fff; }
    .btn-default { background: #eef1f7; color: #1a1a2e; }
    .btn-sm { padding: 0.3rem 0.7rem; font-size: 0.78rem; }

    .form-actions {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 1.5rem;
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
    <h1>ニュースレター送信</h1>

    <?php if ($results !== null): ?>
      <div class="alert-success">
        送信完了：<?= (int)$results['sent'] ?>件成功<?php if ($results['failed'] > 0): ?>、<?= (int)$results['failed'] ?>件失敗<?php endif; ?>
        <?php if (!empty($results['failedEmails'])): ?>
          <br>失敗したアドレス：<?= htmlspecialchars(implode(', ', $results['failedEmails'])) ?>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($error !== ''): ?>
      <div class="alert-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" id="newsletterForm">
      <div class="card">
        <p class="card__title">メール内容</p>
        <div class="field">
          <label for="subject">件名</label>
          <input type="text" id="subject" name="subject" required value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>" />
        </div>
        <div class="field">
          <label for="body">本文</label>
          <textarea id="body" name="body" rows="10" required><?= htmlspecialchars($_POST['body'] ?? '') ?></textarea>
          <div class="field__hint">改行はそのまま反映されます。簡単なHTMLタグ（&lt;b&gt;、&lt;a href="..."&gt; など）も使用できます。</div>
        </div>
      </div>

      <div class="card">
        <div class="recipients-head">
          <p class="card__title" style="margin:0;">送信先（メルマガ登録者）</p>
          <div style="display:flex; align-items:center; gap:0.75rem;">
            <span class="recipients-count"><?= count($subscribers) ?>件登録</span>
            <button type="button" class="btn btn-default btn-sm" id="toggleAll">全選択/解除</button>
          </div>
        </div>
        <div class="recipients-list">
          <?php if (empty($subscribers)): ?>
            <div class="empty-row">メルマガ登録者が見つかりません。</div>
          <?php else: foreach ($subscribers as $s): ?>
            <label class="recipient-row">
              <input type="checkbox" name="ids[]" value="<?= (int)$s['id'] ?>" class="recipientCheck" checked>
              <span class="recipient-email"><?= htmlspecialchars($s['email']) ?></span>
              <span class="recipient-name"><?= htmlspecialchars($s['name']) ?><?= $s['company'] !== '' ? '（' . htmlspecialchars($s['company']) . '）' : '' ?></span>
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
  </script>
</body>
</html>
