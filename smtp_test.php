<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host       = 'mail.acan-sol.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'info@acan-sol.com';
$mail->Password   = 'YOUR_EMAIL_PASSWORD'; // placeholder
$mail->SMTPSecure = 'ssl';
$mail->Port       = 465;
$mail->SMTPDebug  = 2;
$mail->Debugoutput = function($str, $level) {
    echo $str . "\n";
};

try {
    $mail->smtpConnect();
    echo "\n=== SMTP CONNECTION: SUCCESS ===\n";
} catch (Exception $e) {
    echo "\n=== SMTP CONNECTION FAILED ===\n";
    echo "Error: " . $e->getMessage() . "\n";
    echo "Details: " . $mail->ErrorInfo . "\n";
}
?>
