<?php
/**
 * Router for PHP's built-in development server.
 *
 * In production the site runs on Apache, where the .htaccess rules serve
 * /service from service.php and redirect /service.php to /service. PHP's
 * built-in server ignores .htaccess completely, so without this file every
 * clean URL would 404 locally.
 *
 * Start the dev server with:
 *
 *     php -S localhost:8000 router.php
 *
 * The behaviour here deliberately mirrors the Apache rules: root-level pages
 * only, POST requests never redirected, no trailing slash, /index.php -> /.
 */

$uri  = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($uri, PHP_URL_PATH);
if (!is_string($path) || $path === '') {
    $path = '/';
}

// (1) /index.php -> /
if ($path === '/index.php') {
    header('Location: /', true, 301);
    return true;
}

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// (S) Service pages: /services/<slug> => the flat page that holds it.
//     Keep this map in sync with the (S) / (S2) rules in .htaccess.
$services = [
    ''                => 'service',
    'ai'              => 'data-services',
    'bpo'             => 'bpohome',
    'kpo'             => 'kpo-page',
    'technology'      => 'acan-dev',
    'design'          => 'case-design',
    'myanmar-support' => 'consulting-services',
];

if ($method !== 'POST') {
    $query = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== ''
        ? '?' . $_SERVER['QUERY_STRING'] : '';

    // old flat URLs (/bpohome, /bpohome.php, ...) -> /services/<slug>
    if (preg_match('#^/([^/]+?)(\.php)?$#', $path, $m)) {
        $slug = array_search($m[1], $services, true);
        if ($slug !== false) {
            header('Location: /services' . ($slug === '' ? '' : '/' . $slug) . $query, true, 301);
            return true;
        }
    }

    // singular /service/<slug>, as written in the domain plan
    if (preg_match('#^/service/+([a-z-]+)/?$#i', $path, $m)) {
        header('Location: /services/' . $m[1] . $query, true, 301);
        return true;
    }

    // Old "contectus" typo'd URL -> /contactus
    if (preg_match('#^/contectus(\.php)?/?$#', $path)) {
        header('Location: /contactus' . $query, true, 301);
        return true;
    }
}

// (2) /page.php -> /page   (POST is left alone, matching the Apache rules)
if ($method !== 'POST' && preg_match('#^/([^/]+)\.php$#', $path, $m)) {
    header('Location: /' . $m[1], true, 301);
    return true;
}

// (3) drop a trailing slash so relative asset paths keep resolving from root
$trimmed = rtrim($path, '/');

// "/" -> let the server fall through to index.php
if ($trimmed === '') {
    return false;
}

if ($trimmed !== $path && $method !== 'POST' && !is_dir(__DIR__ . $trimmed)) {
    header('Location: ' . $trimmed, true, 301);
    return true;
}

// (S2) serve /services and /services/<slug> from the flat page
if (preg_match('#^/services(?:/([a-z-]+))?$#', $trimmed, $m)) {
    $slug = $m[1] ?? '';
    if (isset($services[$slug])) {
        require __DIR__ . '/' . $services[$slug] . '.php';
        return true;
    }
}

// (M) /sitemap.xml is generated from each page's $seo block
if ($trimmed === '/sitemap.xml') {
    require __DIR__ . '/sitemap.php';
    return true;
}

$target = __DIR__ . $trimmed;

// Real files and directories (assets, admin/*.php, ...) are served as-is.
if (is_file($target) || is_dir($target)) {
    return false;
}

// (4) serve /page from page.php — single-segment paths only, exactly like
//     the .htaccess rule, so /admin/... is never rewritten.
if (strpos(trim($trimmed, '/'), '/') !== false) {
    return false;
}

if (is_file($target . '.php')) {
    require $target . '.php';
    return true;
}

// Anything else: let the server return its normal 404.
return false;
