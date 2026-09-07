<?php
/**
 * Shared helpers: saves form submissions into the admin panel's
 * `subscribers` table (see db_setup.php / admin/db.php for the schema
 * and DB credentials — keep those in sync with this file).
 */

function subscriber_db_connect() {
    $conn = new mysqli('localhost', 'root', '', 'acanadmin');
    $conn->set_charset('utf8mb4');
    return $conn;
}

/**
 * Returns true if this email already has a row for the given source
 * (e.g. someone already subscribed to the newsletter with this address).
 */
function subscriber_email_exists($email, $source = 'newsletter') {
    $email = trim($email);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    try {
        $conn = subscriber_db_connect();
        $stmt = $conn->prepare("SELECT id FROM subscribers WHERE email = ? AND source = ? LIMIT 1");
        $stmt->bind_param('ss', $email, $source);
        $stmt->execute();
        $stmt->store_result();
        $exists = $stmt->num_rows > 0;
        $stmt->close();
        $conn->close();

        return $exists;
    } catch (mysqli_sql_exception $e) {
        error_log('subscriber-exists DB error: ' . $e->getMessage());
        return false;
    }
}

function save_subscriber_to_db($email, $name = '', $company = '', $phone = '', $message = '', $source = 'contact') {
    $email = trim($email);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    try {
        $conn = subscriber_db_connect();

        $stmt = $conn->prepare(
            "INSERT INTO subscribers (email, name, company, phone, message, source)
             VALUES (?, ?, ?, ?, ?, ?)
             ON DUPLICATE KEY UPDATE
                name = VALUES(name),
                company = VALUES(company),
                phone = VALUES(phone),
                message = VALUES(message),
                source = VALUES(source),
                created_at = CURRENT_TIMESTAMP"
        );
        $stmt->bind_param('ssssss', $email, $name, $company, $phone, $message, $source);
        $ok = $stmt->execute();
        $stmt->close();
        $conn->close();

        return $ok;
    } catch (mysqli_sql_exception $e) {
        error_log('subscriber-save DB error: ' . $e->getMessage());
        return false;
    }
}
