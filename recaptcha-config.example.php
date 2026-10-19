<?php
// Copy this file to recaptcha-config.php and fill in your keys.
// recaptcha-config.php is gitignored — never commit real keys.
//
// Setup:
//   1. Go to https://www.google.com/recaptcha/admin/create
//   2. reCAPTCHA type: "reCAPTCHA v2" -> "I'm not a robot" Checkbox
//   3. Add the domain(s) that will host the form (e.g. acan-sol.com)
//   4. Copy the Site key and Secret key below

define('RECAPTCHA_SITE_KEY',   'your-site-key-here');
define('RECAPTCHA_SECRET_KEY', 'your-secret-key-here');
