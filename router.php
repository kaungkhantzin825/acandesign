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

// (2) /page.php -> /page   (POST is left alone, matching the Apache rules)
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
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
