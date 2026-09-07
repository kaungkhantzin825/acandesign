<?php
/**
 * Email Configuration TEMPLATE
 * メール設定ファイル テンプレート
 * 
 * INSTRUCTIONS / 使い方:
 * 1. Copy this file and rename to: mail-config.php
 *    このファイルをコピーして mail-config.php にリネーム
 * 2. Update the values below with your actual settings
 *    下記の値を実際の設定に更新
 * 3. Never commit mail-config.php to Git!
 *    mail-config.php を Git にコミットしないでください！
 */

// Main recipient email (where form submissions will be sent)
// メイン受信先メールアドレス
define('MAIL_TO', 'info@acan-sol.com');

// From email address (sender)
// 送信元メールアドレス
define('MAIL_FROM', 'noreply@acan-sol.com');
define('MAIL_FROM_NAME', 'A CAN SOLUTIONS Website');

// Company name for auto-reply
// 自動返信用の会社名
define('COMPANY_NAME', 'A CAN SOLUTIONS Co.,Ltd.');

// Enable/Disable auto-reply to customers
// お客様への自動返信を有効/無効にする
define('AUTO_REPLY_ENABLED', true);

// Character encoding
// 文字エンコーディング
define('MAIL_ENCODING', 'UTF-8');

// Language for internal encoding
// 内部エンコーディング言語
mb_internal_encoding(MAIL_ENCODING);
mb_language('Japanese');

// ============================================
// SMTP Configuration (for reliable email sending)
// SMTP設定（信頼性の高いメール送信のため）
// ============================================

// Use SMTP instead of PHP mail() function
// PHP mail()関数の代わりにSMTPを使用
define('USE_SMTP', true);

// SMTP Settings / SMTP設定
// Replace with your actual SMTP credentials
// 実際のSMTP認証情報に置き換えてください

define('SMTP_HOST', 'smtp.gmail.com');              // SMTP server
define('SMTP_PORT', 587);                            // Port (587 for TLS, 465 for SSL)
define('SMTP_SECURE', 'tls');                        // 'tls' or 'ssl'
define('SMTP_AUTH', true);                           // Enable SMTP authentication
define('SMTP_USERNAME', 'YOUR-EMAIL@gmail.com');     // ← CHANGE THIS / ここを変更
define('SMTP_PASSWORD', 'YOUR-APP-PASSWORD');        // ← CHANGE THIS / ここを変更

// ============================================
// Gmail Setup Instructions / Gmail設定手順
// ============================================
// 
// 1. Go to: https://myaccount.google.com/security
//    アクセス: https://myaccount.google.com/security
// 
// 2. Enable "2-Step Verification"
//    「2段階認証」を有効にする
// 
// 3. Go to: https://myaccount.google.com/apppasswords
//    アクセス: https://myaccount.google.com/apppasswords
// 
// 4. Create "App Password" for "Mail"
//    「メール」用の「アプリパスワード」を作成
// 
// 5. Copy the 16-character password (remove spaces!)
//    16文字のパスワードをコピー（スペースを削除！）
//    Example: abcd efgh ijkl mnop → abcdefghijklmnop
// 
// 6. Paste it in SMTP_PASSWORD above
//    上記の SMTP_PASSWORD に貼り付け
//
// ============================================
// Other SMTP Providers / 他のSMTPプロバイダー
// ============================================
// 
// Outlook/Hotmail:
// define('SMTP_HOST', 'smtp.office365.com');
// define('SMTP_PORT', 587);
// define('SMTP_SECURE', 'tls');
//
// Yahoo Mail:
// define('SMTP_HOST', 'smtp.mail.yahoo.com');
// define('SMTP_PORT', 587);
// define('SMTP_SECURE', 'tls');
//
// SendGrid (Recommended for production):
// define('SMTP_HOST', 'smtp.sendgrid.net');
// define('SMTP_PORT', 587);
// define('SMTP_USERNAME', 'apikey');
// define('SMTP_PASSWORD', 'your-sendgrid-api-key');
//
// ============================================

?>
