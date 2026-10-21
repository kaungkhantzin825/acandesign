<?php
/**
 * SMTP credentials for the newsletter auto-reply mailer.
 * Never commit real credentials to a public repo.
 *
 * The production cPanel host blocks outbound port 25 ("Connection refused"),
 * so use the submission port 587, which accepts AUTH without encryption.
 * SMTP_SECURE must be 'ssl', 'tls' or '' (none) — PHPMailer has no 'none' value.
 * With '', the mailers also disable SMTPAutoTLS so no STARTTLS is attempted.
 */

define('NEWSLETTER_SMTP_HOST', 'mailpro-03.zth.netdesignhost.com');
define('NEWSLETTER_SMTP_PORT', 587);
define('NEWSLETTER_SMTP_SECURE', '');
define('NEWSLETTER_SMTP_USERNAME', 'info@acan-sol.com');
define('NEWSLETTER_SMTP_PASSWORD', 'Pwd-acan123');

define('NEWSLETTER_ADMIN_EMAIL', 'acankado@gmail.com');
