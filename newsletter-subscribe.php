<?php
require_once __DIR__ . '/newsletter-mail-config.php';
require_once __DIR__ . '/subscriber-save.php';
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/newsletter-mailer.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: myanmar-situation.php');
    exit;
}

// Honeypot check
if (!empty($_POST['_honey'])) {
    header('Location: myanmar-situation.php');
    exit;
}

$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);

if (!$email) {
    header('Location: myanmar-situation.php');
    exit;
}

// One signup per email — block if this address already exists at all,
// whether it was verified or is still sitting unconfirmed.
if (subscriber_email_exists($email, 'newsletter')) {
    header('Location: newsletter-already-registered.php?email=' . urlencode($email));
    exit;
}

save_subscriber_to_db($email, '', '', '', '', 'newsletter');

$subject = '【A CAN SOLUTIONS】メールマガジンご登録ありがとうございます';

$body  = "このたびは、A CAN SOLUTIONSのメールマガジンにご登録いただき、誠にありがとうございます。\r\n\r\n";
$body .= "メールマガジンへのご登録が完了いたしました。\r\n\r\n";
$body .= "今後、A CAN SOLUTIONSが拠点を構えるミャンマーの現地情報をはじめ、ビジネス環境や人材・労務に関する最新動向、AI・BPO・KPOの活用事例など、皆さまのビジネスにお役立ていただける情報を定期的にお届けいたします。\r\n\r\n";
$body .= "【主な配信内容】\r\n";
$body .= "・ミャンマーの最新ビジネス動向\r\n";
$body .= "・人材・労務に関する最新情報\r\n";
$body .= "・現地の経済・社会・ビジネス環境\r\n";
$body .= "・AI／BPO／KPOに関する情報\r\n";
$body .= "・A CAN SOLUTIONSのサービス・導入事例\r\n";
$body .= "・セミナー、イベント等のご案内\r\n\r\n";
$body .= "私たちは、ミャンマーでの活動を通じて得た現地の情報や経験を、できる限り分かりやすくお伝えしていきたいと考えています。\r\n\r\n";
$body .= "「ミャンマーの今を知りたい」\r\n";
$body .= "「海外人材やBPOの活用を検討している」\r\n";
$body .= "「AIと人を組み合わせた業務改革に興味がある」\r\n\r\n";
$body .= "そのような皆さまにとって、少しでもお役に立つ情報をお届けできれば幸いです。\r\n";
$body .= "今後ともA CAN SOLUTIONSをよろしくお願いいたします。\r\n\r\n";
$body .= "――――――――――――――――\r\n";
$body .= "A CAN SOLUTIONS株式会社\r\n";
$body .= "AI × Human = Beyond Outsourcing\r\n";
$body .= "Webサイト：A CAN SOLUTIONS\r\n";
$body .= "E-mail：info@acan-sol.com\r\n";
$body .= "――――――――――――――――\r\n\r\n";
$body .= "※本メールは、A CAN SOLUTIONSのメールマガジンにご登録いただいた方へ自動送信しています。\r\n";
$body .= "※お心当たりがない場合は、お手数ですが本メールを破棄してください。\r\n";

send_newsletter_mail($email, $subject, $body);
send_newsletter_mail(NEWSLETTER_ADMIN_EMAIL, $subject, $body);

header('Location: confirm-page.php');
exit;
