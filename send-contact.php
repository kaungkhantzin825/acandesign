<?php
ini_set('display_errors', 0);
error_reporting(0);

require_once __DIR__ . '/newsletter-mail-config.php';
require_once __DIR__ . '/subscriber-save.php';
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Reject non-POST requests outright
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contectus.php');
    exit;
}

// Honeypot check
if (!empty($_POST['_honey'])) {
    header('Location: index.php');
    exit;
}

$company = strip_tags(trim($_POST['会社名'] ?? ''));
$name    = strip_tags(trim($_POST['ご担当者名'] ?? ''));
$email   = strip_tags(trim($_POST['メールアドレス'] ?? ''));
$tel     = strip_tags(trim($_POST['電話番号'] ?? ''));
$content = strip_tags(trim($_POST['お問い合わせ内容'] ?? ''));

// Required fields (whitespace-only input is treated as empty)
if ($company === '' || $name === '' || $email === '') {
    header('Location: contectus.php?error=required');
    exit;
}

// Strict email format check
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email || !preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)) {
    header('Location: contectus.php?error=email');
    exit;
}

// Phone is optional, but if provided must be digits only
if ($tel !== '' && !preg_match('/^[0-9]{9,11}$/', $tel)) {
    header('Location: contectus.php?error=phone');
    exit;
}

save_subscriber_to_db($email, $name, $company, $tel, $content, 'contact');

$to = 'acankado@gmail.com';

$subject = '【お問い合わせ】' . $company . ' / ' . $name;

$body  = "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\r\n";
$body .= "  A CAN SOLUTIONS お問い合わせフォーム\r\n";
$body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\r\n\r\n";
$body .= "【会社名】\r\n{$company}\r\n\r\n";
$body .= "【ご担当者名】\r\n{$name}\r\n\r\n";
$body .= "【メールアドレス】\r\n{$email}\r\n\r\n";
$body .= "【電話番号】\r\n{$tel}\r\n\r\n";
$body .= "【お問い合わせ内容】\r\n{$content}\r\n\r\n";
$body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\r\n";
$body .= "送信日時: " . date('Y年m月d日 H:i:s') . "\r\n";
$body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\r\n";

$sent = false;
try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = NEWSLETTER_SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = NEWSLETTER_SMTP_USERNAME;
    $mail->Password   = NEWSLETTER_SMTP_PASSWORD;
    $mail->SMTPSecure = NEWSLETTER_SMTP_SECURE;
    $mail->Port       = NEWSLETTER_SMTP_PORT;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom(NEWSLETTER_SMTP_USERNAME, 'A CAN SOLUTIONS');
    $mail->addAddress($to);
    $mail->addReplyTo($email, $name);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->send();
    $sent = true;
} catch (Exception $e) {
    error_log('send-contact mail failed: ' . $mail->ErrorInfo);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= $sent ? '送信完了 | A CAN SOLUTIONS' : '送信エラー | A CAN SOLUTIONS' ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/main.css">
<style>
  .result-section {
    min-height: calc(100vh - 60px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 80px 24px;
    background: #f8f9ff;
  }
  .result-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 40px rgba(26,95,212,.10);
    padding: 56px 48px;
    max-width: 560px;
    width: 100%;
    text-align: center;
  }
  .result-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 28px;
    font-size: 2.4rem;
  }
  .result-icon--success { background: #e8f5e9; }
  .result-icon--error   { background: #fff3e0; }
  .result-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 16px;
    color: #0a0f2e;
  }
  .result-text {
    font-size: 0.95rem;
    line-height: 1.8;
    color: #444;
    margin-bottom: 36px;
  }
  .result-btn {
    display: inline-block;
    padding: 14px 36px;
    border-radius: 50px;
    font-size: 0.95rem;
    font-weight: 700;
    text-decoration: none;
    transition: opacity .2s;
  }
  .result-btn--home { background: #1a5fd4; color: #fff; }
  .result-btn--back { background: #ea580c; color: #fff; }
  .result-btn:hover { opacity: .82; }
  @media (max-width: 768px) {
    .result-card { padding: 40px 24px; }
  }
</style>
</head>
<body>
<?php include 'menu.php'; ?>

<section class="result-section">
  <div class="result-card">
<?php if ($sent): ?>
    <div class="result-icon result-icon--success">✅</div>
    <h1 class="result-title">送信が完了しました</h1>
    <p class="result-text">
      お問い合わせありがとうございます。<br>
      内容確認の上、返信させて頂きます。<br>
      引き続きどうぞ宜しくお願い致します。
    </p>
    <a href="index.php" class="result-btn result-btn--home">トップページへ戻る</a>
<?php else: ?>
    <div class="result-icon result-icon--error">⚠️</div>
    <h1 class="result-title">送信に失敗しました</h1>
    <p class="result-text">
      申し訳ございません。メールの送信中にエラーが発生しました。<br>
      お手数ですが、もう一度お試しいただくか、<br>
      直接 <strong>info@acan-sol.com</strong> までご連絡ください。
    </p>
    <a href="contectus.php" class="result-btn result-btn--back">入力画面に戻る</a>
<?php endif; ?>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
