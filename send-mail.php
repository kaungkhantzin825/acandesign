<?php
require_once 'mail-config.php';
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json; charset=UTF-8');
ini_set('display_errors', 0);

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method';
    echo json_encode($response);
    exit;
}

// Read form fields (Japanese field names matching index.php)
$company = trim($_POST['会社名']          ?? '');
$name    = trim($_POST['お名前']          ?? '');
$email   = trim($_POST['email']           ?? '');
$emailCf = trim($_POST['_email_confirm']  ?? '');
$tel     = trim($_POST['電話番号']        ?? '');
$address = trim($_POST['住所']            ?? '');
$message = trim($_POST['お問い合わせ内容'] ?? '');

// Validation
$errors = [];
if (empty($company)) $errors[] = '会社名を入力してください';
if (empty($name))    $errors[] = 'お名前を入力してください';
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
                     $errors[] = '有効なメールアドレスを入力してください';
if ($email !== $emailCf)
                     $errors[] = 'メールアドレスが一致しません';
if (empty($tel))     $errors[] = '連絡先電話番号を入力してください';
if (empty($address)) $errors[] = '連絡先住所を入力してください';
if (empty($message)) $errors[] = 'お問い合わせ内容を入力してください';

if (!empty($errors)) {
    $response['message'] = implode("\n", $errors);
    echo json_encode($response);
    exit;
}

// Build email body
$body  = "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
$body .= "  A CAN SOLUTIONS お問い合わせフォーム\n";
$body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
$body .= "【会社名】\n$company\n\n";
$body .= "【お名前】\n$name\n\n";
$body .= "【メールアドレス】\n$email\n\n";
$body .= "【連絡先電話番号】\n$tel\n\n";
$body .= "【連絡先住所】\n$address\n\n";
$body .= "【お問い合わせ内容】\n$message\n\n";
$body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
$body .= "送信日時: " . date('Y年m月d日 H:i:s') . "\n";
$body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";

$subject = '【Webサイトお問い合わせ】' . mb_substr($company, 0, 30) . '様より';

// Send main email via PHPMailer
try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = SMTP_AUTH;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_SECURE;
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'UTF-8';

    $mail->setFrom(SMTP_USERNAME, MAIL_FROM_NAME);
    $mail->addAddress(MAIL_TO);
    $mail->addReplyTo($email, $name);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->send();

    // Auto-reply to customer
    if (AUTO_REPLY_ENABLED) {
        $ar = new PHPMailer(true);
        $ar->isSMTP();
        $ar->Host       = SMTP_HOST;
        $ar->SMTPAuth   = SMTP_AUTH;
        $ar->Username   = SMTP_USERNAME;
        $ar->Password   = SMTP_PASSWORD;
        $ar->SMTPSecure = SMTP_SECURE;
        $ar->Port       = SMTP_PORT;
        $ar->CharSet    = 'UTF-8';

        $arBody  = "$name 様\n\n";
        $arBody .= "この度は" . COMPANY_NAME . "にお問い合わせいただき、誠にありがとうございます。\n\n";
        $arBody .= "以下の内容でお問い合わせを受け付けました。\n";
        $arBody .= "担当者より折り返しご連絡させていただきますので、今しばらくお待ちください。\n\n";
        $arBody .= "─────────────────────────\n";
        $arBody .= "【会社名】 $company\n";
        $arBody .= "【お名前】 $name\n";
        $arBody .= "【メールアドレス】 $email\n";
        $arBody .= "【お問い合わせ内容】\n$message\n";
        $arBody .= "─────────────────────────\n\n";
        $arBody .= "※このメールは自動送信されています。\n\n";
        $arBody .= COMPANY_NAME . "\n";
        $arBody .= "Email: " . MAIL_TO . "\n";
        $arBody .= "─────────────────────────\n";

        $ar->setFrom(SMTP_USERNAME, COMPANY_NAME);
        $ar->addAddress($email, $name);
        $ar->Subject = 'お問い合わせを受け付けました - ' . COMPANY_NAME;
        $ar->Body    = $arBody;
        $ar->send();
    }

    $response['success'] = true;
    $response['message'] = 'お問い合わせありがとうございます。担当者よりご連絡いたします。';

} catch (Exception $e) {
    error_log('PHPMailer Error: ' . $e->getMessage());
    $response['message'] = 'メールの送信に失敗しました。時間をおいて再度お試しください。(' . $e->getMessage() . ')';
}

echo json_encode($response);
exit;
?>
