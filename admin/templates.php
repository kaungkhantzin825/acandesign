<?php
require_once __DIR__ . '/db.php';

header('Content-Type: application/json; charset=UTF-8');

$conn->query("CREATE TABLE IF NOT EXISTS newsletter_templates (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    body LONGTEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

function fail($message) {
    http_response_code(400);
    echo json_encode(['error' => $message]);
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $res = $conn->query("SELECT id, name, subject, body, updated_at FROM newsletter_templates ORDER BY updated_at DESC");
    $templates = [];
    while ($row = $res->fetch_assoc()) { $templates[] = $row; }
    echo json_encode(['templates' => $templates]);
    exit;
}

if ($method === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'save') {
        $id      = (int) ($_POST['id'] ?? 0);
        $name    = trim($_POST['name'] ?? '');
        $subject = trim($_POST['subject'] ?? '');
        $body    = $_POST['body'] ?? '';

        if ($name === '' || $subject === '' || trim(strip_tags($body)) === '') {
            fail('テンプレート名・件名・本文を入力してください。');
        }

        if ($id > 0) {
            $stmt = $conn->prepare("UPDATE newsletter_templates SET name = ?, subject = ?, body = ? WHERE id = ?");
            $stmt->bind_param('sssi', $name, $subject, $body, $id);
        } else {
            $stmt = $conn->prepare("INSERT INTO newsletter_templates (name, subject, body) VALUES (?, ?, ?)");
            $stmt->bind_param('sss', $name, $subject, $body);
        }
        $stmt->execute();
        $newId = $id > 0 ? $id : $stmt->insert_id;
        $stmt->close();

        echo json_encode(['ok' => true, 'id' => $newId]);
        exit;
    }

    if ($action === 'delete') {
        $id = (int) ($_POST['id'] ?? 0);
        if ($id <= 0) {
            fail('無効なテンプレートです。');
        }
        $stmt = $conn->prepare("DELETE FROM newsletter_templates WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(['ok' => true]);
        exit;
    }

    fail('不明な操作です。');
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
