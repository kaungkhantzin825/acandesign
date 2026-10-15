<?php
/**
 * Site-wide SEO / analytics settings, read by seo-head.php and sitemap.php.
 * サイト共通のSEO・アクセス解析設定
 *
 * Nothing in here is secret: the GA4 ID and the Search Console token are both
 * printed into every page's HTML anyway.
 */

// Canonical origin. Every canonical URL, og:url and sitemap entry is built from it.
define('SEO_SITE_URL', 'https://acan-sol.com');
define('SEO_SITE_NAME', 'A CAN SOLUTIONS');

// Share image used when a page does not set its own (1200x630 JPG).
define('SEO_DEFAULT_IMAGE', '/assets/img/og/og-default.jpg');

// Google Analytics 4 — paste the Measurement ID ("G-XXXXXXXXXX") from
// GA4 > Admin > Data streams. Leave empty to disable tracking.
define('GA4_MEASUREMENT_ID', '');

// Domains measured as one journey (GA4 cross-domain linker). Must also be
// listed in GA4 > Data streams > Configure tag settings > Configure your domains.
define('GA4_LINKER_DOMAINS', ['acan-sol.com', 'myanmar-bpo.jp']);

// Google Search Console "HTML tag" verification token — only the content="..."
// value. Leave empty if you verified via DNS (recommended).
define('GSC_VERIFICATION', '');
