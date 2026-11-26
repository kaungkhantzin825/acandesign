<?php
/**
 * Site analytics — shared table definition and request helpers.
 * Used by analytics-track.php (collector) and admin/partials/report-data.php
 * (the report tabs of admin/analytics-report.php).
 *
 * Tracked pages ("kinds"):
 *   blog      every blog post page (its <article> has class blog-post)
 *   download  /download            — resource library
 *   myanmar   /myanmar-situation   — Myanmar reports
 * Events: view (page opened; reading time + scroll added later), list_click
 * (a blog card was clicked), download (a document link was clicked).
 *
 * Titles of posts and documents are read from the page files on the server,
 * never taken from the browser. Times are stored and reported in Japan time:
 * both sides call analytics_prepare() on their connection first.
 */
if (realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) { http_response_code(404); exit; }

/** Non-blog pages that are tracked: slug => kind. */
const ANALYTICS_PAGES = ['download' => 'download', 'myanmar-situation' => 'myanmar'];

/**
 * Old IANA time-zone names that browsers still report (Chrome often says
 * Asia/Rangoon for Myanmar, Asia/Calcutta for India) => country. PHP knows the
 * names but can't give their country, so they are listed here.
 */
const ANALYTICS_LEGACY_TZ = [
    'Asia/Rangoon' => 'MM', 'Asia/Saigon' => 'VN', 'Asia/Calcutta' => 'IN', 'Asia/Katmandu' => 'NP',
    'Asia/Dacca' => 'BD', 'Asia/Thimbu' => 'BT', 'Asia/Ulan_Bator' => 'MN', 'Asia/Macao' => 'MO',
    'Asia/Chongqing' => 'CN', 'Asia/Chungking' => 'CN', 'Asia/Harbin' => 'CN', 'Asia/Kashgar' => 'CN',
    'Asia/Ujung_Pandang' => 'ID', 'Asia/Tel_Aviv' => 'IL', 'Asia/Istanbul' => 'TR', 'Asia/Ashkhabad' => 'TM',
    'Europe/Kiev' => 'UA', 'Europe/Uzhgorod' => 'UA', 'Europe/Zaporozhye' => 'UA', 'Europe/Belfast' => 'GB',
    'America/Buenos_Aires' => 'AR', 'America/Indianapolis' => 'US', 'America/Louisville' => 'US',
    'Atlantic/Faeroe' => 'FO', 'Pacific/Truk' => 'FM', 'Pacific/Ponape' => 'FM',
    'Japan' => 'JP', 'Singapore' => 'SG', 'Hongkong' => 'HK', 'PRC' => 'CN', 'ROK' => 'KR', 'ROC' => 'TW',
    'Israel' => 'IL', 'Turkey' => 'TR', 'Egypt' => 'EG', 'Iran' => 'IR', 'Eire' => 'IE', 'GB' => 'GB',
    'NZ' => 'NZ', 'Poland' => 'PL', 'Portugal' => 'PT', 'Iceland' => 'IS',
];

function analytics_prepare(mysqli $conn): void
{
    // Japan has no DST, so a fixed offset works without MySQL's time-zone tables.
    $conn->query("SET time_zone = '+09:00'");
    $conn->query("CREATE TABLE IF NOT EXISTS analytics_events (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        event_type VARCHAR(16) NOT NULL,              -- view | list_click | download
        page_kind VARCHAR(16) NOT NULL,               -- blog | download | myanmar
        page_slug VARCHAR(120) NOT NULL,              -- page viewed / post clicked / page downloaded from
        page_title VARCHAR(255) NOT NULL DEFAULT '',
        target VARCHAR(500) NOT NULL DEFAULT '',      -- download: file path, e.g. assets/pdf/x.pdf
        target_title VARCHAR(255) NOT NULL DEFAULT '',-- download: document name shown on the page
        source_page VARCHAR(255) NOT NULL DEFAULT '', -- list_click: page the card was on
        view_uid CHAR(32) NULL DEFAULT NULL,          -- view: browser-made id, lets 'engage' update it
        visitor_id CHAR(32) NOT NULL,                 -- anonymous random id from localStorage
        is_new_visitor TINYINT(1) NOT NULL DEFAULT 0, -- view: first view of this kind of page in this browser
        is_admin TINYINT(1) NOT NULL DEFAULT 0,       -- 1 = browser was logged in to the admin panel (the owner)
        country CHAR(2) NOT NULL DEFAULT '',          -- ISO 3166 code, '' = unknown
        timezone VARCHAR(64) NOT NULL DEFAULT '',
        language VARCHAR(16) NOT NULL DEFAULT '',
        device VARCHAR(10) NOT NULL DEFAULT '',       -- mobile | tablet | desktop
        referrer_host VARCHAR(255) NOT NULL DEFAULT '',
        referrer_type VARCHAR(16) NOT NULL DEFAULT '',-- direct | internal | search | social | ai | referral
        seconds_active SMALLINT UNSIGNED NOT NULL DEFAULT 0,
        scroll_pct TINYINT UNSIGNED NOT NULL DEFAULT 0,
        created_at DATETIME NOT NULL,
        UNIQUE KEY uq_view_uid (view_uid),
        KEY idx_kind_type_created (page_kind, event_type, created_at),
        KEY idx_slug_created (page_slug, created_at),
        KEY idx_created (created_at),
        KEY idx_visitor (visitor_id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
}

/**
 * The tracked page served at /$slug: ['kind', 'title', 'html'], or null when
 * the slug isn't a tracked page. Blog titles come from the post's first <h1>,
 * other pages' from their $seo title.
 */
function analytics_page(string $slug): ?array
{
    static $cache = [];
    if (array_key_exists($slug, $cache)) {
        return $cache[$slug];
    }
    // Exact file name, case included: on Windows is_file('OCR-DX.php') is true too,
    // which would split one post into two in the report.
    static $files = null;
    $files = $files ?? array_flip(scandir(__DIR__));
    if (!preg_match('/^[A-Za-z0-9_-]{1,120}$/', $slug) || !isset($files[$slug . '.php'])) {
        return $cache[$slug] = null;
    }
    $html = (string)file_get_contents(__DIR__ . '/' . $slug . '.php');

    if (isset(ANALYTICS_PAGES[$slug])) {
        $title = preg_match("/'title'\s*=>\s*'([^']*)'/", $html, $m) ? preg_replace('/\s*\|\s*A CAN SOLUTIONS\s*$/', '', $m[1]) : $slug;
        return $cache[$slug] = ['kind' => ANALYTICS_PAGES[$slug], 'title' => mb_substr($title, 0, 255), 'html' => $html];
    }

    $postMarker = '<article class="' . 'blog-post"'; // split so this file never matches itself
    if (strpos($html, $postMarker) === false || !preg_match('/<h1\b[^>]*>(.*?)<\/h1>/s', $html, $m)) {
        return $cache[$slug] = null;
    }
    $title = analytics_clean_text($m[1]);
    return $cache[$slug] = ['kind' => 'blog', 'title' => mb_substr($title !== '' ? $title : $slug, 0, 255), 'html' => $html];
}

/**
 * A document link that really is on the page: ['path', 'title'] or null.
 * $href is the link's href attribute exactly as written in the page. The title
 * is the link's own text (e.g. "ミャンマー状況 260507"), unless that is empty or
 * a generic button label like "ダウンロード" — then, as on /download's cards,
 * the nearest "…__title" element just before the link.
 */
function analytics_download(string $pageHtml, string $href): ?array
{
    $path = (string)parse_url($href, PHP_URL_PATH);
    if ($href === '' || strlen($href) > 500 || !preg_match('/\.(pdf|zip|docx?|xlsx?|pptx?)$/i', $path)) {
        return null;
    }
    $pos = strpos($pageHtml, 'href="' . $href . '"');
    if ($pos === false) {
        $pos = strpos($pageHtml, 'href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '"');
    }
    if ($pos === false) {
        return null;
    }
    $tagEnd = strpos($pageHtml, '>', $pos);
    $close  = strpos($pageHtml, '</a>', $pos);
    $title  = ($tagEnd !== false && $close !== false) ? analytics_clean_text(substr($pageHtml, $tagEnd + 1, $close - $tagEnd - 1)) : '';
    if ($title === '' || preg_match('/^(資料を?)?(ダウンロード|download|dl|pdf|こちら|開く|見る)(する)?$/iu', $title)) {
        $before = substr($pageHtml, max(0, $pos - 4000), min($pos, 4000));
        if (preg_match_all('/class="[^"]*__title[^"]*"[^>]*>(.*?)<\/(?:p|h[1-6]|div|span)>/s', $before, $m)) {
            $title = analytics_clean_text(end($m[1]));
        }
    }
    $file = rawurldecode(ltrim($path, '/'));
    return [
        'path'  => mb_substr($file, 0, 500),
        'title' => mb_substr($title !== '' ? $title : pathinfo($file, PATHINFO_FILENAME), 0, 255),
    ];
}

function analytics_clean_text(string $html): string
{
    return trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags($html), ENT_QUOTES, 'UTF-8')));
}

/**
 * Country code: a CDN's country header when the site sits behind one
 * (Cloudflare, CloudFront), otherwise the browser's time zone.
 */
function analytics_country(string $timeZone): string
{
    foreach (['HTTP_CF_IPCOUNTRY', 'HTTP_CLOUDFRONT_VIEWER_COUNTRY'] as $header) {
        $code = strtoupper(trim((string)($_SERVER[$header] ?? '')));
        if (preg_match('/^[A-Z]{2}$/', $code) && $code !== 'XX' && $code !== 'T1') {
            return $code;
        }
    }
    if ($timeZone !== '' && in_array($timeZone, DateTimeZone::listIdentifiers(), true)) {
        $code = (new DateTimeZone($timeZone))->getLocation()['country_code'] ?? '';
        if (preg_match('/^[A-Z]{2}$/', (string)$code)) {
            return $code;
        }
    }
    if (isset(ANALYTICS_LEGACY_TZ[$timeZone])) {
        return ANALYTICS_LEGACY_TZ[$timeZone];
    }
    foreach (['US/' => 'US', 'Canada/' => 'CA', 'Australia/' => 'AU', 'Brazil/' => 'BR', 'Mexico/' => 'MX', 'Chile/' => 'CL'] as $prefix => $code) {
        if (strpos($timeZone, $prefix) === 0) {
            return $code;
        }
    }
    return '';
}

function analytics_device(string $userAgent, bool $touch): string
{
    if (preg_match('/iPad|Tablet|PlayBook|Silk|Kindle/i', $userAgent)
        || (stripos($userAgent, 'Android') !== false && stripos($userAgent, 'Mobile') === false)
        || ($touch && stripos($userAgent, 'Macintosh') !== false)) { // iPadOS reports a Mac UA
        return 'tablet';
    }
    if (preg_match('/Mobi|iPhone|iPod|Android|Windows Phone/i', $userAgent)) {
        return 'mobile';
    }
    return 'desktop';
}

/** [host, type] for a document.referrer value. */
function analytics_referrer(string $referrer): array
{
    $host = strtolower((string)parse_url($referrer, PHP_URL_HOST));
    if ($host === '' || !preg_match('/^[a-z0-9.-]{1,253}$/', $host)) {
        return ['', 'direct'];
    }
    $host = preg_replace('/^www\./', '', $host);
    $self = preg_replace('/^www\./', '', strtolower(explode(':', (string)($_SERVER['HTTP_HOST'] ?? ''))[0]));
    $siteHost = preg_replace('/^www\./', '', strtolower((string)parse_url(defined('SEO_SITE_URL') ? SEO_SITE_URL : 'https://acan-sol.com', PHP_URL_HOST)));

    if ($host === $self || $host === $siteHost) {
        return [$host, 'internal'];
    }
    $groups = [
        'ai'     => '/(^|\.)(chatgpt\.com|chat\.openai\.com|perplexity\.ai|claude\.ai|gemini\.google\.com|copilot\.microsoft\.com)$/',
        'search' => '/(^|\.)(google\.[a-z.]+|bing\.com|yahoo\.[a-z.]+|duckduckgo\.com|baidu\.com|yandex\.[a-z.]+|naver\.com|ecosia\.org|search\.brave\.com)$/',
        'social' => '/(^|\.)(facebook\.com|fb\.com|instagram\.com|t\.co|twitter\.com|x\.com|linkedin\.com|lnkd\.in|line\.me|substack\.com|youtube\.com|reddit\.com|threads\.net|note\.com|tiktok\.com|pinterest\.[a-z.]+)$/',
    ];
    foreach ($groups as $type => $pattern) {
        if (preg_match($pattern, $host)) {
            return [$host, $type];
        }
    }
    return [$host, 'referral'];
}
