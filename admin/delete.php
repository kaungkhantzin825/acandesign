<?php
require_once __DIR__ . '/db.php';

$id = intval($_GET['id'] ?? 0);
if ($id > 0) {
    $stmt = $conn->prepare("DELETE FROM subscribers WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
}

$allowedReturns = ['dashboard.php', 'contacts.php', 'newsletter-subscribers.php'];
$return = $_GET['return'] ?? 'dashboard.php';
if (!in_array($return, $allowedReturns, true)) {
    $return = 'dashboard.php';
}

header('Location: ' . $return . '?msg=deleted');
exit;
