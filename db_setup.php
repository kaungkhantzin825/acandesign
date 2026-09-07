<?php
/**
 * One-time DB setup script.
 * Visit http://localhost:8000/db_setup.php once in your browser, then DELETE this file.
 */

$host   = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'acanadmin';

// Connect directly to the database already created via cPanel
// (shared hosting DB users generally can't CREATE DATABASE)
$conn = new mysqli($host, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
$conn->set_charset('utf8mb4');

// Create subscribers table
$conn->query("CREATE TABLE IF NOT EXISTS subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    name VARCHAR(255) DEFAULT '',
    company VARCHAR(255) DEFAULT '',
    phone VARCHAR(50) DEFAULT '',
    message TEXT,
    source VARCHAR(50) DEFAULT 'contact',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY unique_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

// Migrate: add double opt-in verification columns if they don't exist yet
// (safe to re-run — checks first, so this won't error on repeat visits)
$col = $conn->query("SHOW COLUMNS FROM subscribers LIKE 'verify_token'");
if ($col && $col->num_rows === 0) {
    $conn->query("ALTER TABLE subscribers
        ADD COLUMN verify_token VARCHAR(64) DEFAULT NULL,
        ADD COLUMN verified_at DATETIME DEFAULT NULL");
}

// Create admin_users table
$conn->query("CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

// Insert default admin (admin / admin123)
$hash = password_hash('admin123', PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT IGNORE INTO admin_users (username, password) VALUES (?, ?)");
$stmt->bind_param('ss', $admin_user, $admin_hash);
$admin_user = 'admin';
$admin_hash = $hash;
$stmt->execute();
$stmt->close();

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Setup Complete</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background: #f0f2f5; margin: 0; }
        .card { background: #fff; padding: 3rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,.1); text-align: center; max-width: 500px; }
        .icon { font-size: 3rem; margin-bottom: 1rem; }
        h1 { color: #1a1a2e; margin-bottom: 0.5rem; }
        p { color: #6b7280; line-height: 1.6; }
        .link { display: inline-block; margin-top: 1.5rem; padding: 12px 32px; background: #004AAD; color: #fff; text-decoration: none; border-radius: 8px; font-weight: 700; transition: background .2s; }
        .link:hover { background: #003080; }
        .warn { background: #fff3cd; border: 1px solid #ffc107; border-radius: 8px; padding: 1rem; margin-top: 1.5rem; color: #856404; font-size: 0.9rem; }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">✅</div>
        <h1>Database Setup Complete!</h1>
        <p>Database <strong>acanadmin</strong> and all tables have been created successfully.</p>
        <p><strong>Default login:</strong> admin / admin123</p>
        <a href="admin/login.php" class="link">Go to Admin Panel →</a>
        <div class="warn">
            ⚠️ <strong>Security:</strong> Delete this file (<code>db_setup.php</code>) from your server after setup.
        </div>
    </div>
</body>
</html>
