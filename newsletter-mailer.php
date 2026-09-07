<?php
/**
 * Shared newsletter mail sender (PHPMailer/SMTP via newsletter-mail-config.php).
 * Requires newsletter-mail-config.php and vendor/autoload.php to already be loaded.
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_newsletter_mail($to, $subject, $body) {
    $mail = new PHPMailer(true);
    try {
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
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log('newsletter mail failed: ' . $mail->ErrorInfo);
        return false;
    }
}
