<?php
require_once __DIR__ . '/db.php';

// Report tabs:
//   blog / download / myanmar  site analytics (analytics_events) — partials/report-*.php
//   clicks                     phone, e-mail and file clicks (click_events, log-event.php) — below
$tabs = [
    'blog'     => ['icon' => 'fas fa-blog',          'label' => t('ba.title'),       'subtitle' => t('ba.subtitle')],
    'download' => ['icon' => 'fas fa-file-download', 'label' => t('an.tab_download'), 'subtitle' => t('dl.subtitle')],
    'myanmar'  => ['icon' => 'fas fa-globe-asia',    'label' => t('an.tab_myanmar'),  'subtitle' => t('my.subtitle')],
    'clicks'   => ['icon' => 'fas fa-mouse-pointer', 'label' => t('an.tab_clicks'),   'subtitle' => t('an.subtitle')],
];
$tab = (string)($_GET['tab'] ?? 'blog');
if (!isset($tabs[$tab])) {
    $tab = 'blog';
}

if ($tab !== 'clicks') {
    $scope = $tab;
    require __DIR__ . '/partials/report-data.php'; // ?export=csv streams a file and exits
} else {
    $conn->query("CREATE TABLE IF NOT EXISTS click_events (
        id INT AUTO_INCREMENT PRIMARY KEY,
        event_name VARCHAR(100) NOT NULL,
        link_url VARCHAR(500) NOT NULL DEFAULT '',
        page_path VARCHAR(255) NOT NULL DEFAULT '',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX (event_name),
        INDEX (created_at)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

    $eventLabels = [
        'contact_submission'       => ['label' => t('event.contact_submission'),       'icon' => '📩'],
        'click_phone_number'       => ['label' => t('event.click_phone_number'),       'icon' => '📞'],
        'click_email_info'         => ['label' => t('event.click_email_info'),         'icon' => '✉️'],
        'download_bpo_guide'       => ['label' => t('event.download_bpo_guide'),       'icon' => '📦'],
        'download_myanmar_report'  => ['label' => t('event.download_myanmar_report'),  'icon' => '📰'],
        'download_company_profile' => ['label' => t('event.download_company_profile'), 'icon' => '🏢'],
        'file_download'            => ['label' => t('event.file_download'),            'icon' => '📄'],
    ];

    $period = $_GET['period'] ?? '30';
    $periodWhere = '';
    if ($period === '7') {
        $periodWhere = 'WHERE created_at >= NOW() - INTERVAL 7 DAY';
    } elseif ($period === '30') {
        $periodWhere = 'WHERE created_at >= NOW() - INTERVAL 30 DAY';
    } elseif ($period === '90') {
        $periodWhere = 'WHERE created_at >= NOW() - INTERVAL 90 DAY';
    }
    // 'all' -> no WHERE clause

    // Totals per event name (all-time, for the summary cards' grand total column)
    $totalsByEvent = [];
    $res = $conn->query("SELECT event_name, COUNT(*) as c FROM click_events GROUP BY event_name");
    while ($row = $res->fetch_assoc()) { $totalsByEvent[$row['event_name']] = (int)$row['c']; }

    // Totals per event name within the selected period
    $periodTotalsByEvent = [];
    $res = $conn->query("SELECT event_name, COUNT(*) as c FROM click_events $periodWhere GROUP BY event_name");
    while ($row = $res->fetch_assoc()) { $periodTotalsByEvent[$row['event_name']] = (int)$row['c']; }

    // Detailed breakdown per link, within the selected period
    $rows = [];
    $res = $conn->query("SELECT event_name, link_url, COUNT(*) as c, MAX(created_at) as last_at
        FROM click_events $periodWhere
        GROUP BY event_name, link_url
        ORDER BY c DESC
        LIMIT 100");
    while ($row = $res->fetch_assoc()) { $rows[] = $row; }

    $grandTotal = array_sum($periodTotalsByEvent);
}

function acan_link_title($linkUrl) {
    $name = basename(rawurldecode($linkUrl));
    $name = preg_replace('/\.pdf$/i', '', $name);
    return $name !== '' ? $name : $linkUrl;
}

$pageTitle    = t('an.title');
$pageSubtitle = $tabs[$tab]['subtitle'];
require __DIR__ . '/partials/header.php';
?>

        <ul class="nav nav-tabs an-tabs mb-3">
          <?php foreach ($tabs as $key => $info): ?>
            <li class="nav-item">
              <a class="nav-link<?= $tab === $key ? ' active' : '' ?>" href="analytics-report.php<?= $key === 'blog' ? '' : '?tab=' . $key ?>"<?= $tab === $key ? ' aria-current="page"' : '' ?>><i class="<?= $info['icon'] ?> mr-1"></i><?= htmlspecialchars($info['label']) ?></a>
            </li>
          <?php endforeach; ?>
        </ul>

<?php if ($tab !== 'clicks'): ?>
<?php require __DIR__ . '/partials/report-view.php'; ?>
<?php else:
// Font Awesome icon + AdminLTE colour for each event tile below
// (used instead of the emoji in $eventLabels).
$eventStyles = [
    'contact_submission'       => ['icon' => 'fas fa-paper-plane',   'bg' => 'bg-acan'],
    'click_phone_number'       => ['icon' => 'fas fa-phone-alt',     'bg' => 'bg-success'],
    'click_email_info'         => ['icon' => 'fas fa-envelope',      'bg' => 'bg-info'],
    'download_bpo_guide'       => ['icon' => 'fas fa-box-open',      'bg' => 'bg-warning'],
    'download_myanmar_report'  => ['icon' => 'fas fa-newspaper',     'bg' => 'bg-danger'],
    'download_company_profile' => ['icon' => 'fas fa-building',      'bg' => 'bg-indigo'],
    'file_download'            => ['icon' => 'fas fa-file-download', 'bg' => 'bg-secondary'],
];
$periodLabels = ['7' => t('an.period_7'), '30' => t('an.period_30'), '90' => t('an.period_90'), 'all' => t('an.period_all')];
?>

        <div class="d-flex justify-content-end mb-3">
          <div class="btn-group btn-group-sm" role="group" aria-label="<?= te('an.period') ?>">
            <?php foreach ($periodLabels as $key => $label): ?>
              <a href="?tab=clicks&amp;period=<?= $key ?>" class="btn <?= $period === (string)$key ? 'btn-primary' : 'btn-default' ?>"><?= htmlspecialchars($label) ?></a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Key-event tiles -->
        <div class="row">
          <?php foreach ($eventLabels as $key => $info):
            $style = $eventStyles[$key] ?? ['icon' => 'fas fa-mouse-pointer', 'bg' => 'bg-secondary'];
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="info-box">
                <span class="info-box-icon <?= $style['bg'] ?> elevation-1"><i class="<?= $style['icon'] ?>"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text text-wrap"><?= htmlspecialchars($info['label']) ?></span>
                  <span class="info-box-number"><?= (int)($periodTotalsByEvent[$key] ?? 0) ?> <small><?= te('common.unit') ?></small></span>
                  <span class="text-muted small"><?= te('an.cumulative', ['n' => (int)($totalsByEvent[$key] ?? 0)]) ?></span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Breakdown -->
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-table mr-1"></i><?= te('an.breakdown') ?></h3>
            <div class="card-tools">
              <span class="badge badge-acan"><?= te('an.total', ['n' => $grandTotal]) ?></span>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-striped text-nowrap mb-0">
              <thead>
                <tr>
                  <th><?= te('an.col_event') ?></th>
                  <th><?= te('an.col_link') ?></th>
                  <th class="text-right"><?= te('an.col_count') ?></th>
                  <th><?= te('an.col_last') ?></th>
                </tr>
              </thead>
              <tbody>
              <?php if (empty($rows)): ?>
                <tr><td colspan="4" class="empty-row"><i class="fas fa-chart-bar"></i><?= te('an.empty') ?></td></tr>
              <?php else: foreach ($rows as $r): ?>
                <tr>
                  <td><span class="badge badge-acan"><?= htmlspecialchars($eventLabels[$r['event_name']]['label'] ?? $r['event_name']) ?></span></td>
                  <td class="link-cell" title="<?= htmlspecialchars($r['link_url']) ?>"><?= htmlspecialchars(acan_link_title($r['link_url'])) ?></td>
                  <td class="count-cell text-right"><?= (int)$r['c'] ?></td>
                  <td><?= htmlspecialchars($r['last_at']) ?></td>
                </tr>
              <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>
<?php endif; ?>

<?php require __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
