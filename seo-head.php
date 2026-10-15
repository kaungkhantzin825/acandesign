<?php
/**
 * Shared <head> SEO block — include inside <head> after setting $seo:
 *
 *   <?php $seo = [
 *     'title'       => 'ページ名 | A CAN SOLUTIONS',
 *     'description' => '120字前後の説明文',
 *     'path'        => '/page',             // clean URL, see CLAUDE.md
 *     'type'        => 'article',           // optional, default 'website'
 *     'published'   => '2026-07-06',        // articles only
 *     'image'       => '/assets/img/og/x.jpg', // optional, 1200x630 JPG
 *     'noindex'     => true,                // optional, utility pages
 *     'canonical'   => '/other-page',       // optional, duplicate content
 *   ]; include 'seo-head.php'; ?>
 *
 * Emits <title>, description, canonical, robots, Open Graph, Twitter card,
 * JSON-LD structured data, and (when configured) GA4 + Search Console tags.
 *
 * sitemap.php reads 'path' and 'noindex' from these arrays, so a page with a
 * $seo block is automatically listed in /sitemap.xml unless it is noindex
 * or canonicalised elsewhere.
 */

require_once __DIR__ . '/seo-config.php';

$seo = (isset($seo) && is_array($seo)) ? $seo : [];
$seo_e = static function ($s) {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
};

$seo_title = $seo['title'] ?? SEO_SITE_NAME;
$seo_desc  = $seo['description'] ?? '';
$seo_type  = $seo['type'] ?? 'website';
$seo_url   = SEO_SITE_URL . ($seo['canonical'] ?? $seo['path'] ?? '/');
$seo_image = SEO_SITE_URL . ($seo['image'] ?? SEO_DEFAULT_IMAGE);
?>
<title><?= $seo_e($seo_title) ?></title>
<?php if ($seo_desc !== ''): ?>
<meta name="description" content="<?= $seo_e($seo_desc) ?>" />
<?php endif; ?>
<?php if (!empty($seo['noindex'])): ?>
<meta name="robots" content="noindex, follow" />
<?php else: ?>
<link rel="canonical" href="<?= $seo_e($seo_url) ?>" />
<?php endif; ?>
<?php if (GSC_VERIFICATION !== ''): ?>
<meta name="google-site-verification" content="<?= $seo_e(GSC_VERIFICATION) ?>" />
<?php endif; ?>
<meta property="og:site_name" content="<?= $seo_e(SEO_SITE_NAME) ?>" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:type" content="<?= $seo_e($seo_type) ?>" />
<meta property="og:title" content="<?= $seo_e($seo_title) ?>" />
<?php if ($seo_desc !== ''): ?>
<meta property="og:description" content="<?= $seo_e($seo_desc) ?>" />
<?php endif; ?>
<meta property="og:url" content="<?= $seo_e($seo_url) ?>" />
<meta property="og:image" content="<?= $seo_e($seo_image) ?>" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta name="twitter:card" content="summary_large_image" />
<?php
// ── Structured data ─────────────────────────────────────────────
$seo_org = [
    '@type'     => 'Organization',
    '@id'       => SEO_SITE_URL . '/#organization',
    'name'      => 'A CAN SOLUTIONS 合同会社',
    'alternateName' => 'A CAN SOLUTIONS',
    'url'       => SEO_SITE_URL . '/',
    'logo'      => SEO_SITE_URL . '/assets/img/logo.webp',
    'address'   => [
        '@type'           => 'PostalAddress',
        'postalCode'      => '732-0052',
        'addressRegion'   => '広島県',
        'addressLocality' => '広島市東区',
        'streetAddress'   => '光町二丁目7番35-201',
        'addressCountry'  => 'JP',
    ],
    'subOrganization' => [
        '@type'   => 'Organization',
        'name'    => 'A CAN SOLUTIONS MYANMAR CO.,Ltd.',
        'address' => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'No.608, YADANER HOUSING, PYAY RD, 9MILE, MAYANGONE',
            'addressLocality' => 'Yangon',
            'addressCountry'  => 'MM',
        ],
    ],
];

$seo_graph = [];
if (($seo['path'] ?? '') === '/') {
    $seo_graph[] = $seo_org;
    $seo_graph[] = [
        '@type'      => 'WebSite',
        '@id'        => SEO_SITE_URL . '/#website',
        'url'        => SEO_SITE_URL . '/',
        'name'       => SEO_SITE_NAME,
        'inLanguage' => 'ja',
        'publisher'  => ['@id' => SEO_SITE_URL . '/#organization'],
    ];
} elseif ($seo_type === 'article' && empty($seo['noindex'])) {
    $seo_graph[] = array_filter([
        '@type'            => 'BlogPosting',
        'headline'         => preg_replace('/\s*\|\s*' . preg_quote(SEO_SITE_NAME, '/') . '$/u', '', $seo_title),
        'description'      => $seo_desc,
        'image'            => $seo_image,
        'datePublished'    => $seo['published'] ?? null,
        'inLanguage'       => 'ja',
        'mainEntityOfPage' => $seo_url,
        'author'           => ['@id' => SEO_SITE_URL . '/#organization'],
        'publisher'        => $seo_org,
    ], static function ($v) {
        return $v !== null && $v !== '';
    });
    $seo_graph[] = [
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'TOP',  'item' => SEO_SITE_URL . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'BLOG', 'item' => SEO_SITE_URL . '/blog-page'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => end($seo_graph)['headline']],
        ],
    ];
}
if ($seo_graph):
?>
<script type="application/ld+json"><?= json_encode(
    ['@context' => 'https://schema.org', '@graph' => $seo_graph],
    JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG
) ?></script>
<?php endif; ?>
<?php
// ── Google Analytics 4 ──────────────────────────────────────────
// Skipped on localhost so development traffic never pollutes the reports.
$seo_host = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ''));
if (GA4_MEASUREMENT_ID !== '' && !in_array($seo_host, ['localhost', '127.0.0.1', ''], true)):
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $seo_e(GA4_MEASUREMENT_ID) ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', <?= json_encode(GA4_MEASUREMENT_ID) ?>, {
    linker: { domains: <?= json_encode(GA4_LINKER_DOMAINS) ?> }
  });
</script>
<?php endif; ?>
