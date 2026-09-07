<?php
/**
 * Database connection for Admin Panel
 */

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'acanadmin';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    http_response_code(500);
    die('Database connection failed. Please run db_setup.php first.');
}

$conn->set_charset('utf8mb4');

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if logged in (except on login page)
$page = basename($_SERVER['PHP_SELF']);
if ($page !== 'login.php' && empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
