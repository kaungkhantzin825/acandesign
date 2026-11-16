<?php
require_once __DIR__ . '/db.php';

// Search filter
$search = trim($_GET['q'] ?? '');
$source = $_GET['source'] ?? '';
$conditions = [];
$params = [];
$types = '';

if (!empty($search)) {
    $conditions[] = "(email LIKE ? OR name LIKE ? OR company LIKE ? OR phone LIKE ?)";
    $term = "%$search%";
    $params = array_merge($params, [$term, $term, $term, $term]);
    $types .= 'ssss';
}

if (in_array($source, ['contact', 'newsletter'], true)) {
    $conditions[] = "source = ?";
    $params[] = $source;
    $types .= 's';
}

$where = !empty($conditions) ? 'WHERE ' . implode(' AND ', $conditions) : '';

$sql = "SELECT id, email, name, company, phone, message, source, created_at FROM subscribers $where ORDER BY created_at DESC";
if (!empty($types)) {
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
} else {
    $result = $conn->query($sql);
}

// Output CSV
header('Content-Type: text/csv; charset=UTF-8');
$filenamePrefix = $source === 'contact' ? 'contacts' : ($source === 'newsletter' ? 'newsletter' : 'subscribers');
header('Content-Disposition: attachment; filename="' . $filenamePrefix . '_' . date('Y-m-d') . '.csv"');

$fp = fopen('php://output', 'w');
// BOM for Excel UTF-8
fwrite($fp, "\xEF\xBB\xBF");

fputcsv($fp, ['ID', 'メールアドレス', '名前', '会社名', '電話番号', 'メッセージ', 'ソース', '登録日時']);

while ($row = $result->fetch_assoc()) {
    fputcsv($fp, [
        $row['id'],
        $row['email'],
        $row['name'],
        $row['company'],
        $row['phone'],
        $row['message'],
        $row['source'],
        $row['created_at']
    ]);
}

fclose($fp);
exit;
