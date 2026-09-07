<?php
/**
 * Newsletter email subscription handler.
 * Saves the submitted email to MySQL database.
 * Can be called from any form on the site.
 */
header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

$email = trim($_POST['email'] ?? '');
$name  = trim($_POST['name'] ?? '');

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => '有効なメールアドレスを入力してください。']);
    exit;
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'acanadmin');
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'データベース接続エラー。']);
    exit;
}
$conn->set_charset('utf8mb4');

// Insert (ignore duplicates)
$stmt = $conn->prepare("INSERT IGNORE INTO subscribers (email, name, source, created_at) VALUES (?, ?, 'newsletter', NOW())");
$stmt->bind_param('ss', $email, $name);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    $response = ['success' => true, 'message' => 'メルマガ登録が完了しました。'];
} else {
    $response = ['success' => true, 'message' => 'このメールアドレスは既に登録されています。'];
}

$stmt->close();
$conn->close();

echo json_encode($response);
