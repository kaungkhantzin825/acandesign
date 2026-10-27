<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/../seo-config.php';

header('Content-Type: application/json; charset=UTF-8');

function fail($message) {
    http_response_code(400);
    echo json_encode(['error' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_FILES['image'])) {
    fail('画像が送信されていません。');
}

$file = $_FILES['image'];
if ($file['error'] !== UPLOAD_ERR_OK) {
    fail('アップロードに失敗しました。');
}

// 5MB limit
if ($file['size'] > 5 * 1024 * 1024) {
    fail('画像サイズは5MB以下にしてください。');
}

$allowed = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/webp' => 'webp',
    'image/gif'  => 'gif',
];

$mime = mime_content_type($file['tmp_name']);
if (!isset($allowed[$mime])) {
    fail('対応していない画像形式です（JPEG, PNG, WebP, GIFのみ）。');
}

$ext = $allowed[$mime];
$dir = __DIR__ . '/../assets/img/newsletter';
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}

$filename = uniqid('nl_', true) . '.' . $ext;
$dest = $dir . '/' . $filename;

if (!move_uploaded_file($file['tmp_name'], $dest)) {
    fail('画像の保存に失敗しました。');
}

echo json_encode(['url' => rtrim(SEO_SITE_URL, '/') . '/assets/img/newsletter/' . $filename]);
