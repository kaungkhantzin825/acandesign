<?php
// Copy this file to contact-config.php and fill in your credentials.
// contact-config.php is gitignored — never commit real credentials.
//
// Gmail setup:
//   1. Go to https://myaccount.google.com/apppasswords
//   2. Generate an App Password for "Mail"
//   3. Paste it as CONTACT_SMTP_PASSWORD below

define('CONTACT_SMTP_HOST',     'smtp.gmail.com');
define('CONTACT_SMTP_PORT',     587);
define('CONTACT_SMTP_USERNAME', 'your-gmail@gmail.com');   // Gmail address used to SEND
define('CONTACT_SMTP_PASSWORD', 'xxxx xxxx xxxx xxxx');   // Gmail App Password (16 chars)
define('CONTACT_MAIL_TO',       'acankado@gmail.com'); // Recipient
define('CONTACT_MAIL_FROM',     'your-gmail@gmail.com');   // Must match SMTP_USERNAME for Gmail
define('CONTACT_MAIL_FROM_NAME','A CAN SOLUTIONS');
