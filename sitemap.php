<?php
/**
 * XML sitemap, served at /sitemap.xml (rewrite in .htaccess / router.php).
 *
 * Built from the $seo blocks at the top of each root-level page, so adding a
 * page with a $seo block lists it here automatically. Pages marked 'noindex'
 * or with a 'canonical' pointing elsewhere are left out.
 */

require_once __DIR__ . '/seo-config.php';

$urls = [];
foreach (glob(__DIR__ . '/*.php') as $file) {
    $head = file_get_contents($file, false, null, 0, 8192);
    if (!preg_match('/\$seo\s*=\s*\[(.*?)\];\s*include\s+\'seo-head\.php\'/s', $head, $m)) {
        continue;
    }
    $block = $m[1];
    if (preg_match("/'noindex'\s*=>\s*true/", $block) || strpos($block, "'canonical'") !== false) {
        continue;
    }
    if (!preg_match("/'path'\s*=>\s*'([^']+)'/", $block, $p)) {
        continue;
    }
    preg_match("/'published'\s*=>\s*'([0-9-]+)'/", $block, $d);
    $urls[$p[1]] = $d[1] ?? null;
}

// Home first, then service pages, then everything else alphabetically.
uksort($urls, static function ($a, $b) {
    $rank = static function ($u) {
        return $u === '/' ? 0 : (strpos($u, '/services') === 0 ? 1 : 2);
    };
    return [$rank($a), $a] <=> [$rank($b), $b];
});

header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $path => $lastmod): ?>
  <url>
    <loc><?= htmlspecialchars(SEO_SITE_URL . $path, ENT_XML1, 'UTF-8') ?></loc>
<?php if ($lastmod): ?>
    <lastmod><?= $lastmod ?></lastmod>
<?php endif; ?>
  </url>
<?php endforeach; ?>
</urlset>
