<?php
/**
 * Lightweight click/download logger for the in-admin "GA style" report.
 * Called via sendBeacon/fetch from footer.php's delegated click tracker.
 * Independent of GA4 — this is our own DB-backed counter.
 */
require_once __DIR__ . '/db-config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

$allowedEvents = [
    'click_phone_number',
    'click_email_info',
    'contact_submission',
    'download_bpo_guide',
    'download_myanmar_report',
    'download_company_profile',
    'file_download',
];

$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);
if (!is_array($data)) {
    $data = $_POST;
}

$eventName = isset($data['event_name']) ? trim((string)$data['event_name']) : '';
$linkUrl   = isset($data['link_url']) ? trim((string)$data['link_url']) : '';
$pagePath  = isset($data['page_path']) ? trim((string)$data['page_path']) : '';

if (!in_array($eventName, $allowedEvents, true)) {
    http_response_code(400);
    echo json_encode(['ok' => false]);
    exit;
}

$linkUrl  = mb_substr($linkUrl, 0, 500);
$pagePath = mb_substr($pagePath, 0, 255);

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $conn->set_charset('utf8mb4');

    $conn->query("CREATE TABLE IF NOT EXISTS click_events (
        id INT AUTO_INCREMENT PRIMARY KEY,
        event_name VARCHAR(100) NOT NULL,
        link_url VARCHAR(500) NOT NULL DEFAULT '',
        page_path VARCHAR(255) NOT NULL DEFAULT '',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX (event_name),
        INDEX (created_at)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

    $stmt = $conn->prepare("INSERT INTO click_events (event_name, link_url, page_path) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $eventName, $linkUrl, $pagePath);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo json_encode(['ok' => true]);
} catch (mysqli_sql_exception $e) {
    error_log('log-event DB error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['ok' => false]);
}
