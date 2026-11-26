<?php
/**
 * Report tabs of analytics-report.php — data.
 *
 * Set $scope first:  blog | download | myanmar
 *   blog      blog posts: views, reading time, blog-card clicks ("list clicks")
 *   download  /download page: page views + which documents were downloaded
 *   myanmar   /myanmar-situation: page views + which reports were downloaded
 *
 * Events come from /analytics-track.php (assets/js/site-tracker.js).
 * Filters — range, from/to, group, item (post or document), visitor — scope
 * every number on the tab; ?export=csv streams the matching events and exits.
 * Expects $conn (admin/db.php). Template: partials/report-view.php.
 */
if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { http_response_code(404); exit; }

require_once __DIR__ . '/../../analytics-lib.php';
analytics_prepare($conn);

$isBlog = $scope === 'blog';
$rf = [ // report filter, passed to rp_where()
    'kind'          => $scope,                          // page_kind
    'action'        => $isBlog ? 'list_click' : 'download',
    'item_col'      => $isBlog ? 'page_slug' : 'target',
    'item_on_views' => $isBlog,                         // a document filter can't narrow page views
    'item'          => '',
    'visitor'       => '',
    'own'           => false,                           // include the owner's own (admin-browser) events
];

// ── Helpers ──────────────────────────────────────────────────────────────

function rp_query(mysqli $conn, string $sql, array $params): array
{
    $stmt = $conn->prepare($sql);
    if ($params) {
        $stmt->bind_param(str_repeat('s', count($params)), ...$params);
    }
    $stmt->execute();
    $rows = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $rows;
}

/** WHERE clause + params: [$from, $to), this tab's page kind, event type and filters. */
function rp_where(array $f, DateTimeImmutable $from, DateTimeImmutable $to, ?string $type): array
{
    $sql = 'page_kind = ? AND created_at >= ? AND created_at < ?';
    $params = [$f['kind'], $from->format('Y-m-d H:i:s'), $to->format('Y-m-d H:i:s')];
    if ($type !== null) {
        $sql .= ' AND event_type = ?';
        $params[] = $type;
    }
    if ($f['item'] !== '') {
        if ($f['item_on_views'] || ($type !== null && $type !== 'view')) {
            $sql .= " AND {$f['item_col']} = ?";
            $params[] = $f['item'];
        } elseif ($type === null) { // event list filtered by document: just its downloads
            $sql .= " AND event_type <> 'view' AND {$f['item_col']} = ?";
            $params[] = $f['item'];
        }
    }
    if ($f['visitor'] !== '') {
        $sql .= ' AND visitor_id = ?';
        $params[] = $f['visitor'];
    }
    if (!$f['own']) {
        $sql .= ' AND is_admin = 0';
    }
    return [$sql, $params];
}

/** Link to this tab with some filters changed (null/'' removes one). */
function rp_url(array $state, array $changes = []): string
{
    $query = array_filter(array_merge($state, $changes), function ($v) { return $v !== null && $v !== ''; });
    if (($query['range'] ?? '') === '30') {
        unset($query['range']); // the default
    }
    return 'analytics-report.php' . ($query ? '?' . http_build_query($query) : '');
}

function rp_kpis(mysqli $conn, array $f, DateTimeImmutable $from, DateTimeImmutable $to): array
{
    [$w, $p] = rp_where($f, $from, $to, 'view');
    $v = rp_query($conn, "SELECT COUNT(*) AS views, COUNT(DISTINCT visitor_id) AS visitors,
            COUNT(DISTINCT CASE WHEN is_new_visitor = 1 THEN visitor_id END) AS new_visitors,
            AVG(CASE WHEN seconds_active > 0 THEN seconds_active END) AS avg_sec,
            SUM(CASE WHEN seconds_active > 0 OR scroll_pct > 0 THEN 1 ELSE 0 END) AS engaged,
            SUM(CASE WHEN scroll_pct >= 90 THEN 1 ELSE 0 END) AS finished
        FROM analytics_events WHERE $w", $p)[0];
    [$w, $p] = rp_where($f, $from, $to, $f['action']);
    $a = rp_query($conn, "SELECT COUNT(*) AS n, COUNT(DISTINCT visitor_id) AS people FROM analytics_events WHERE $w", $p)[0];
    $visitors = (int)$v['visitors'];
    return [
        'views'        => (int)$v['views'],
        'visitors'     => $visitors,
        'new_visitors' => (int)$v['new_visitors'],
        'avg_sec'      => $v['avg_sec'] !== null ? (float)$v['avg_sec'] : null,
        'read_rate'    => (int)$v['engaged'] > 0 ? (int)$v['finished'] / (int)$v['engaged'] * 100 : null,
        'actions'      => (int)$a['n'],
        'people'       => (int)$a['people'],
        'action_rate'  => $visitors > 0 ? min(100, (int)$a['people'] / $visitors * 100) : null,
    ];
}

/** % change (or point change for rates); null when there's nothing to compare with. */
function rp_change(?float $current, ?float $previous, bool $points = false): ?float
{
    if ($current === null || $previous === null) {
        return null;
    }
    if ($points) {
        return round($current - $previous, 1);
    }
    return $previous > 0 ? round(($current - $previous) / $previous * 100) : null;
}

function rp_duration(?float $seconds): string
{
    if ($seconds === null) {
        return '—';
    }
    $s = (int)round($seconds);
    return $s >= 60 ? t('ba.dur_ms', ['m' => intdiv($s, 60), 's' => $s % 60]) : t('ba.dur_s', ['s' => $s]);
}

function rp_country_name(string $code): string
{
    if ($code === '') {
        return t('ba.unknown');
    }
    if (class_exists('Locale')) {
        $name = Locale::getDisplayRegion('-' . $code, admin_lang());
        if ($name !== '' && $name !== $code) {
            return preg_replace('/\s*[（(].*$/u', '', $name); // "ミャンマー (ビルマ)" -> "ミャンマー"
        }
    }
    $fallback = [ // used when PHP's intl extension isn't installed
        'JP' => ['日本', 'Japan'], 'MM' => ['ミャンマー', 'Myanmar'], 'US' => ['アメリカ合衆国', 'United States'],
        'TH' => ['タイ', 'Thailand'], 'VN' => ['ベトナム', 'Vietnam'], 'PH' => ['フィリピン', 'Philippines'],
        'SG' => ['シンガポール', 'Singapore'], 'MY' => ['マレーシア', 'Malaysia'], 'ID' => ['インドネシア', 'Indonesia'],
        'CN' => ['中国', 'China'], 'KR' => ['韓国', 'South Korea'], 'TW' => ['台湾', 'Taiwan'], 'HK' => ['香港', 'Hong Kong'],
        'IN' => ['インド', 'India'], 'GB' => ['イギリス', 'United Kingdom'], 'DE' => ['ドイツ', 'Germany'],
        'FR' => ['フランス', 'France'], 'AU' => ['オーストラリア', 'Australia'], 'CA' => ['カナダ', 'Canada'],
    ];
    return isset($fallback[$code]) ? $fallback[$code][admin_lang() === 'en' ? 1 : 0] : $code;
}

/** Spreadsheet apps run cells starting with = + - @ as formulas; neutralise them. */
function rp_csv_cell($value): string
{
    $value = (string)$value;
    return preg_match('/^[=+\-@\t\r]/', $value) ? "'" . $value : $value;
}

// ── Items this tab can be filtered by (all time): posts, or documents ────

$itemTitles = [];
$titleSql = $isBlog
    ? "SELECT e.page_slug AS k, e.page_title AS t FROM analytics_events e
       JOIN (SELECT MAX(id) AS id FROM analytics_events WHERE page_kind = 'blog' GROUP BY page_slug) latest ON latest.id = e.id"
    : "SELECT e.target AS k, e.target_title AS t FROM analytics_events e
       JOIN (SELECT MAX(id) AS id FROM analytics_events WHERE page_kind = ? AND event_type = 'download' GROUP BY target) latest ON latest.id = e.id";
foreach (rp_query($conn, $titleSql, $isBlog ? [] : [$scope]) as $row) {
    $itemTitles[$row['k']] = $row['t'] !== '' ? $row['t'] : $row['k'];
}
$itemOptions = $itemTitles;
asort($itemOptions, SORT_STRING);

// ── Filters ──────────────────────────────────────────────────────────────

$jst   = new DateTimeZone('Asia/Tokyo');
$today = new DateTimeImmutable('today', $jst);
$end   = $today->modify('+1 day');

$range = (string)($_GET['range'] ?? '30');
if (!in_array($range, ['today', '7', '30', '90', 'year', 'all', 'custom'], true)) {
    $range = '30';
}
$item = (string)($_GET['item'] ?? '');
$rf['item'] = isset($itemTitles[$item]) ? $item : '';
$visitor = (string)($_GET['visitor'] ?? '');
$rf['visitor'] = preg_match('/^[a-f0-9]{32}$/', $visitor) ? $visitor : '';
// The owner's own (admin-browser) events: shown by default; ?own=0 / ?own=1
// switches, and the choice is remembered in a cookie.
$ownParam = (string)($_GET['own'] ?? '');
if ($ownParam === '0' || $ownParam === '1') {
    setcookie('acan_report_own', $ownParam, [
        'expires'  => time() + 60 * 60 * 24 * 365,
        'path'     => rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/') . '/',
        'samesite' => 'Lax',
        'httponly' => true,
    ]);
    $rf['own'] = $ownParam === '1';
} else {
    $rf['own'] = ($_COOKIE['acan_report_own'] ?? '1') !== '0';
}

switch ($range) {
    case 'today': $start = $today; break;
    case '7':     $start = $today->modify('-6 days'); break;
    case '90':    $start = $today->modify('-89 days'); break;
    case 'year':  $start = $today->setDate((int)$today->format('Y'), 1, 1); break;
    case 'all':
        $firstAt = rp_query($conn, "SELECT MIN(created_at) AS first_at FROM analytics_events WHERE page_kind = ?", [$scope])[0]['first_at'];
        $start = $firstAt ? (new DateTimeImmutable($firstAt, $jst))->setTime(0, 0) : $today;
        break;
    case 'custom':
        $fromIn = (string)($_GET['from'] ?? '');
        $toIn   = (string)($_GET['to'] ?? '');
        $from = preg_match('/^\d{4}-\d{2}-\d{2}$/', $fromIn) ? DateTimeImmutable::createFromFormat('!Y-m-d', $fromIn, $jst) : false;
        $to   = preg_match('/^\d{4}-\d{2}-\d{2}$/', $toIn) ? DateTimeImmutable::createFromFormat('!Y-m-d', $toIn, $jst) : false;
        if ($from && $to) {
            if ($from > $to) {
                [$from, $to] = [$to, $from];
            }
            $start = $from;
            $end   = $to->modify('+1 day');
            break;
        }
        $range = '30';
        // invalid dates: fall through to the 30-day default
    default:
        $start = $today->modify('-29 days');
}
if ($start < $end->modify('-20 years')) {
    $start = $end->modify('-20 years');
}

$spanDays   = max(1, (int)$start->diff($end)->days);
$groupParam = (string)($_GET['group'] ?? '');
if (!in_array($groupParam, ['day', 'month', 'year'], true)) {
    $groupParam = '';
}
$group = $groupParam !== '' ? $groupParam : ($spanDays <= 92 ? 'day' : 'month');
if ($group === 'day' && $spanDays > 731) {
    $group = 'month';
}

$lastDay = $end->modify('-1 day');
$rpState = [
    'tab'     => $isBlog ? '' : $scope,
    'range'   => $range,
    'from'    => $range === 'custom' ? $start->format('Y-m-d') : '',
    'to'      => $range === 'custom' ? $lastDay->format('Y-m-d') : '',
    'group'   => $groupParam,
    'item'    => $rf['item'],
    'visitor' => $rf['visitor'],
    'own'     => '', // remembered in a cookie, not carried in links
];

// How many of this period's events are the owner's own (admin browser).
[$w, $p] = rp_where(['own' => true] + $rf, $start, $end, null);
$ownCount = (int)rp_query($conn, "SELECT COUNT(*) AS n FROM analytics_events WHERE $w AND is_admin = 1", $p)[0]['n'];

// ── CSV export (events for the current filters) ──────────────────────────

if (($_GET['export'] ?? '') === 'csv') {
    [$w, $p] = rp_where($rf, $start, $end, null);
    $rows = rp_query($conn, "SELECT * FROM analytics_events WHERE $w ORDER BY created_at, id", $p);
    $eventNames = ['view' => t('ba.ev_view'), 'list_click' => t('ba.ev_list_click'), 'download' => t('ba.ev_download')];

    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="analytics-' . $scope . '_' . $start->format('Ymd') . '-' . $lastDay->format('Ymd') . '.csv"');
    $fp = fopen('php://output', 'w');
    fwrite($fp, "\xEF\xBB\xBF"); // BOM so Excel reads UTF-8
    fputcsv($fp, [
        t('ba.col_time'), t('ba.csv_type'), t('ba.csv_slug'), t('ba.csv_title'), t('ba.csv_target'), t('ba.csv_target_title'),
        t('ba.csv_source_page'), t('ba.csv_visitor'), t('ba.csv_new'), t('ba.col_country'), t('ba.csv_tz'), t('ba.csv_lang'),
        t('ba.col_device'), t('ba.col_source'), t('ba.csv_ref_host'), t('ba.csv_seconds'), t('ba.csv_scroll'), t('ba.csv_admin'),
    ]);
    foreach ($rows as $r) {
        fputcsv($fp, array_map('rp_csv_cell', [
            $r['created_at'], $eventNames[$r['event_type']] ?? $r['event_type'], $r['page_slug'], $r['page_title'],
            $r['target'], $r['target_title'], $r['source_page'], $r['visitor_id'], $r['is_new_visitor'],
            $r['country'], $r['timezone'], $r['language'], $r['device'], $r['referrer_type'],
            $r['referrer_host'], $r['seconds_active'], $r['scroll_pct'], $r['is_admin'],
        ]));
    }
    fclose($fp);
    exit;
}

// ── Numbers ──────────────────────────────────────────────────────────────

$kpi  = rp_kpis($conn, $rf, $start, $end);
$prev = $range === 'all' ? null : rp_kpis($conn, $rf, $start->modify("-{$spanDays} days"), $start);
$kpiChange = [];
foreach (['views', 'visitors', 'actions', 'avg_sec'] as $key) {
    $kpiChange[$key] = $prev ? rp_change($kpi[$key], $prev[$key]) : null;
}
$kpiChange['read_rate']   = $prev ? rp_change($kpi['read_rate'], $prev['read_rate'], true) : null;
$kpiChange['action_rate'] = $prev ? rp_change($kpi['action_rate'], $prev['action_rate'], true) : null;

// Over time — every bucket present (zeros included). Blog: views + visitors; others: views + downloads.
$bucketSql = ['day' => '%Y-%m-%d', 'month' => '%Y-%m', 'year' => '%Y'][$group];
$bucketKey = ['day' => 'Y-m-d', 'month' => 'Y-m', 'year' => 'Y'][$group];
$bucketLabel = ['day' => $start->format('Y') === $lastDay->format('Y') ? 'n/j' : 'Y/n/j', 'month' => 'Y/n', 'year' => 'Y'][$group];
$byBucket = [];
[$w, $p] = rp_where($rf, $start, $end, 'view');
foreach (rp_query($conn, "SELECT DATE_FORMAT(created_at, '$bucketSql') AS b, COUNT(*) AS views, COUNT(DISTINCT visitor_id) AS visitors
        FROM analytics_events WHERE $w GROUP BY b", $p) as $row) {
    $byBucket[$row['b']] = ['views' => (int)$row['views'], 'second' => $isBlog ? (int)$row['visitors'] : 0];
}
if (!$isBlog) {
    [$w, $p] = rp_where($rf, $start, $end, 'download');
    foreach (rp_query($conn, "SELECT DATE_FORMAT(created_at, '$bucketSql') AS b, COUNT(*) AS n FROM analytics_events WHERE $w GROUP BY b", $p) as $row) {
        $byBucket[$row['b']] = ['views' => $byBucket[$row['b']]['views'] ?? 0, 'second' => (int)$row['n']];
    }
}
$cursor = ['day' => $start, 'month' => $start->modify('first day of this month'), 'year' => $start->setDate((int)$start->format('Y'), 1, 1)][$group];
$step   = ['day' => '+1 day', 'month' => '+1 month', 'year' => '+1 year'][$group];
$trend  = [];
while ($cursor < $end) {
    $key = $cursor->format($bucketKey);
    $trend[] = ['label' => $cursor->format($bucketLabel), 'views' => $byBucket[$key]['views'] ?? 0, 'second' => $byBucket[$key]['second'] ?? 0];
    $cursor = $cursor->modify($step);
}

// Ranking — blog: posts by views (+ list clicks); others: documents by downloads
$ranking = [];
if ($isBlog) {
    [$w, $p] = rp_where($rf, $start, $end, 'view');
    foreach (rp_query($conn, "SELECT page_slug AS k, COUNT(*) AS n, COUNT(DISTINCT visitor_id) AS people,
            AVG(CASE WHEN seconds_active > 0 THEN seconds_active END) AS avg_sec,
            AVG(CASE WHEN seconds_active > 0 OR scroll_pct > 0 THEN scroll_pct END) AS avg_scroll,
            MAX(created_at) AS last_at
            FROM analytics_events WHERE $w GROUP BY page_slug", $p) as $row) {
        $ranking[$row['k']] = $row + ['clicks' => 0];
    }
    [$w, $p] = rp_where($rf, $start, $end, 'list_click');
    foreach (rp_query($conn, "SELECT page_slug AS k, COUNT(*) AS clicks FROM analytics_events WHERE $w GROUP BY page_slug", $p) as $row) {
        $ranking[$row['k']] = ($ranking[$row['k']] ?? ['k' => $row['k'], 'n' => 0, 'people' => 0, 'avg_sec' => null, 'avg_scroll' => null, 'last_at' => null]);
        $ranking[$row['k']]['clicks'] = (int)$row['clicks'];
    }
    uasort($ranking, function ($a, $b) { return [(int)$b['n'], (int)$b['clicks']] <=> [(int)$a['n'], (int)$a['clicks']]; });
} else {
    [$w, $p] = rp_where($rf, $start, $end, 'download');
    foreach (rp_query($conn, "SELECT target AS k, COUNT(*) AS n, COUNT(DISTINCT visitor_id) AS people, MAX(created_at) AS last_at
            FROM analytics_events WHERE $w GROUP BY target ORDER BY n DESC, last_at DESC", $p) as $row) {
        $ranking[$row['k']] = $row;
    }
}
$maxRank = 1;
foreach ($ranking as $row) {
    $maxRank = max($maxRank, (int)$row['n']);
}

// Breakdowns — blog: of views; others: of downloads ("who downloaded")
$basisType  = $isBlog ? 'view' : 'download';
$basisTotal = $isBlog ? $kpi['views'] : $kpi['actions'];
[$w, $p] = rp_where($rf, $start, $end, $basisType);
$countries = rp_query($conn, "SELECT country AS k, COUNT(*) AS n FROM analytics_events WHERE $w GROUP BY country ORDER BY n DESC", $p);
if (count($countries) > 8) { // keep 7, fold the tail into "Other"
    $tail = array_slice($countries, 7);
    $countries = array_slice($countries, 0, 7);
    $countries[] = ['k' => '__other', 'n' => array_sum(array_column($tail, 'n'))];
}
$devices  = rp_query($conn, "SELECT device AS k, COUNT(*) AS n FROM analytics_events WHERE $w GROUP BY device ORDER BY n DESC", $p);
$sources  = rp_query($conn, "SELECT referrer_type AS k, COUNT(*) AS n FROM analytics_events WHERE $w GROUP BY referrer_type ORDER BY n DESC", $p);
$refSites = rp_query($conn, "SELECT referrer_host AS k, COUNT(*) AS n FROM analytics_events
    WHERE $w AND referrer_type IN ('search', 'social', 'ai', 'referral') GROUP BY referrer_host ORDER BY n DESC LIMIT 8", $p);

// Latest events
[$w, $p] = rp_where($rf, $start, $end, null);
$recent = rp_query($conn, "SELECT * FROM analytics_events WHERE $w ORDER BY created_at DESC, id DESC LIMIT 50", $p);

$deviceLabels = ['mobile' => t('ba.dev_mobile'), 'desktop' => t('ba.dev_desktop'), 'tablet' => t('ba.dev_tablet')];
$sourceLabels = [
    'direct' => t('ba.src_direct'), 'internal' => t('ba.src_internal'), 'search' => t('ba.src_search'),
    'social' => t('ba.src_social'), 'ai' => t('ba.src_ai'), 'referral' => t('ba.src_referral'),
];
$rangeLabels = [
    'today' => t('ba.range_today'), '7' => t('ba.range_7'), '30' => t('ba.range_30'),
    '90' => t('ba.range_90'), 'year' => t('ba.range_year'), 'all' => t('ba.range_all'),
];
$hasData = $kpi['views'] > 0 || $kpi['actions'] > 0;
