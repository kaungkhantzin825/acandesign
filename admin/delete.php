<?php
require_once __DIR__ . '/db.php';

$id = intval($_GET['id'] ?? 0);
if ($id > 0) {
    $stmt = $conn->prepare("DELETE FROM subscribers WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
}
header('Location: dashboard.php?msg=deleted');
exit;
