<?php
/**
 * Site analytics collector — receives JSON beacons from assets/js/site-tracker.js.
 *
 *   view        a tracked page was opened (blog post, /download, /myanmar-situation) -> new row
 *   engage      reading time / scroll depth for a view  -> updates that row (values only grow)
 *   list_click  a blog card was clicked                 -> new row
 *   download    a document link on /download or /myanmar-situation was clicked -> new row
 *
 * Privacy: no IP address, cookie, name or e-mail is stored. A visitor is an
 * anonymous random id kept in the browser's localStorage; the country comes
 * from a CDN country header when present, otherwise from the browser's time
 * zone. Bots are not recorded. Browsers logged in to the admin panel are
 * recorded with is_admin = 1, so the report can leave the owner's own visits
 * out (default) or show them for testing.
 * Report: admin/analytics-report.php. Helpers and table: analytics-lib.php.
 */
require_once __DIR__ . '/db-config.php';
require_once __DIR__ . '/seo-config.php';
require_once __DIR__ . '/analytics-lib.php';

header('Cache-Control: no-store');

function analytics_track_end(int $status = 204): void
{
    http_response_code($status);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    analytics_track_end(405);
}

$userAgent = (string)($_SERVER['HTTP_USER_AGENT'] ?? '');
if ($userAgent === '' || preg_match('/bot|crawl|spider|slurp|preview|headless|lighthouse|pingdom|uptime|monitor|curl|wget|python|scrapy|httpclient/i', $userAgent)) {
    analytics_track_end();
}

// The site owner's own browsing is marked, so it doesn't inflate the numbers.
$isAdmin = 0;
if (isset($_COOKIE[session_name()]) && preg_match('/^[A-Za-z0-9,-]{1,128}$/', (string)$_COOKIE[session_name()])) {
    session_start(['read_and_close' => true]);
    $isAdmin = !empty($_SESSION['admin_logged_in']) ? 1 : 0;
}

$data = json_decode((string)file_get_contents('php://input', false, null, 0, 8192), true);
if (!is_array($data)) {
    analytics_track_end(400);
}

$type  = (string)($data['type'] ?? '');
$hex32 = '/^[a-f0-9]{32}$/';

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $conn->set_charset('utf8mb4');
    analytics_prepare($conn);

    if ($type === 'engage') {
        $viewId  = (string)($data['view_id'] ?? '');
        $seconds = max(0, min(1800, (int)($data['seconds'] ?? 0)));
        $scroll  = max(0, min(100, (int)($data['scroll'] ?? 0)));
        if (!preg_match($hex32, $viewId)) {
            analytics_track_end(400);
        }
        // Time can't exceed how long ago the view started; only same-day views can be updated.
        $stmt = $conn->prepare("UPDATE analytics_events
            SET seconds_active = GREATEST(seconds_active, LEAST(?, TIMESTAMPDIFF(SECOND, created_at, NOW()) + 5)),
                scroll_pct     = GREATEST(scroll_pct, ?)
            WHERE view_uid = ? AND event_type = 'view' AND created_at >= NOW() - INTERVAL 1 DAY");
        $stmt->bind_param('iis', $seconds, $scroll, $viewId);
        $stmt->execute();
        $stmt->close();
        analytics_track_end();
    }

    if (!in_array($type, ['view', 'list_click', 'download'], true)) {
        analytics_track_end(400);
    }

    $visitorId = (string)($data['visitor_id'] ?? '');
    $page      = analytics_page((string)($data['slug'] ?? '')); // null = not a tracked page
    if (!preg_match($hex32, $visitorId) || $page === null || ($type === 'list_click' && $page['kind'] !== 'blog')) {
        analytics_track_end(400);
    }

    $slug     = (string)$data['slug'];
    $timeZone = (string)($data['tz'] ?? '');
    $timeZone = preg_match('#^[A-Za-z0-9_+/-]{1,64}$#', $timeZone) ? $timeZone : '';
    $language = substr(preg_replace('/[^A-Za-z-]/', '', (string)($data['lang'] ?? '')), 0, 16);
    $country  = analytics_country($timeZone);
    $device   = analytics_device($userAgent, !empty($data['touch']));
    [$refHost, $refType] = $type === 'list_click' ? ['', ''] : analytics_referrer(mb_substr((string)($data['referrer'] ?? ''), 0, 1000));

    $viewId = null;
    $isNew = 0;
    $target = $targetTitle = $sourcePage = '';

    if ($type === 'view') {
        $viewId = (string)($data['view_id'] ?? '');
        if (!preg_match($hex32, $viewId)) {
            analytics_track_end(400);
        }
        $isNew = !empty($data['first_view']) ? 1 : 0;
    } elseif ($type === 'download') {
        $file = $page['kind'] !== 'blog' ? analytics_download($page['html'], (string)($data['href'] ?? '')) : null;
        if ($file === null) {
            analytics_track_end(400);
        }
        $target = $file['path'];
        $targetTitle = $file['title'];
    } else { // list_click
        $sourcePage = (string)($data['page'] ?? '');
        $sourcePage = strpos($sourcePage, '/') === 0 ? mb_substr($sourcePage, 0, 255) : '';
    }

    $stmt = $conn->prepare("INSERT IGNORE INTO analytics_events
        (event_type, page_kind, page_slug, page_title, target, target_title, source_page, view_uid, visitor_id,
         is_new_visitor, is_admin, country, timezone, language, device, referrer_host, referrer_type, created_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param('sssssssssiissssss', $type, $page['kind'], $slug, $page['title'], $target, $targetTitle, $sourcePage,
        $viewId, $visitorId, $isNew, $isAdmin, $country, $timeZone, $language, $device, $refHost, $refType);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    analytics_track_end();
} catch (mysqli_sql_exception $e) {
    error_log('analytics-track DB error: ' . $e->getMessage());
    analytics_track_end(500);
}
