<?php
/**
 * Report tabs of analytics-report.php — template (data: partials/report-data.php).
 */
if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { http_response_code(404); exit; }

function rp_delta_html(?float $change, bool $points = false): string
{
    $label = '<span class="text-muted">' . te('ba.vs_prev') . '</span>';
    if ($change === null) {
        return '<span class="ba-delta"><span class="text-muted">—</span> ' . $label . '</span>';
    }
    if ($change == 0) {
        return '<span class="ba-delta"><span class="text-muted">±0' . ($points ? '' : '%') . '</span> ' . $label . '</span>';
    }
    $text = ($change > 0 ? '+' : '') . ($points ? t('ba.pt', ['n' => $change]) : $change . '%');
    return '<span class="ba-delta"><span class="' . ($change > 0 ? 'text-success' : 'text-danger') . '">'
        . '<i class="fas fa-arrow-' . ($change > 0 ? 'up' : 'down') . '" aria-hidden="true"></i> '
        . htmlspecialchars($text) . '</span> ' . $label . '</span>';
}

/** Ranked meter list — name, bar (share of $total), count and share. */
function rp_meter_list(array $rows, callable $name, int $total): string
{
    if (!$rows) {
        return '<p class="empty-row mb-0"><i class="fas fa-chart-bar"></i>' . te('ba.empty') . '</p>';
    }
    $html = '<ul class="ba-meter">';
    foreach ($rows as $row) {
        $n = (int)$row['n'];
        $share = $total > 0 ? $n / $total * 100 : 0;
        $label = htmlspecialchars($name((string)$row['k']));
        $html .= '<li><span class="ba-meter__name" title="' . $label . '">' . $label . '</span>'
            . '<span class="ba-meter__track"><span class="ba-meter__fill" style="width:' . number_format(min(100, $share), 1, '.', '') . '%"></span></span>'
            . '<span class="ba-meter__value">' . number_format($n)
            . '<small>' . number_format($share, $share > 0 && $share < 10 ? 1 : 0) . '%</small></span></li>';
    }
    return $html . '</ul>';
}

function rp_hidden(array $state, array $keys): string
{
    $html = '';
    foreach ($keys as $key) {
        if (($state[$key] ?? '') !== '') {
            $html .= '<input type="hidden" name="' . htmlspecialchars($key) . '" value="' . htmlspecialchars($state[$key]) . '">';
        }
    }
    return $html;
}

/** Info-box KPI tile. $value and $sub are plain text. */
function rp_tile(string $icon, string $bg, string $label, string $value, string $deltaHtml, string $sub = '', string $hint = ''): string
{
    return '<div class="col-xl col-md-4 col-sm-6"><div class="info-box"' . ($hint !== '' ? ' title="' . htmlspecialchars($hint) . '"' : '') . '>'
        . '<span class="info-box-icon ' . $bg . ' elevation-1"><i class="' . $icon . '"></i></span>'
        . '<div class="info-box-content"><span class="info-box-text">' . htmlspecialchars($label) . '</span>'
        . '<span class="info-box-number ba-kpi">' . htmlspecialchars($value) . '</span>'
        . ($sub !== '' ? '<span class="ba-kpi-sub">' . htmlspecialchars($sub) . '</span>' : '')
        . $deltaHtml . '</div></div></div>';
}

$groupLabels  = ['day' => t('ba.group_day'), 'month' => t('ba.group_month'), 'year' => t('ba.group_year')];
$seriesNames  = [$isBlog ? t('ba.views') : t('dl.page_views'), $isBlog ? t('ba.visitors') : t('dl.downloads')];
$basisLabel   = $isBlog ? t('ba.basis_views') : t('dl.basis');
$itemLabel    = function (string $key) use ($itemTitles) { return $itemTitles[$key] ?? $key; };
$pct          = function (?float $v) { return $v === null ? '—' : number_format($v, 1) . '%'; };
?>

        <!-- Filters: scope everything below -->
        <div class="card ba-filters-card">
          <div class="card-body py-2">
            <div class="ba-filters">
              <div class="btn-group btn-group-sm flex-wrap" role="group" aria-label="<?= te('ba.range') ?>">
                <?php foreach ($rangeLabels as $key => $label): ?>
                  <a href="<?= htmlspecialchars(rp_url($rpState, ['range' => (string)$key, 'from' => null, 'to' => null, 'group' => null])) ?>"
                     class="btn <?= $range === (string)$key ? 'btn-primary' : 'btn-default' ?>"><?= htmlspecialchars($label) ?></a>
                <?php endforeach; ?>
              </div>

              <form method="GET" class="ba-custom" aria-label="<?= te('ba.custom') ?>">
                <input type="hidden" name="range" value="custom">
                <?= rp_hidden($rpState, ['tab', 'group', 'item', 'visitor', 'own']) ?>
                <label class="sr-only" for="rpFrom"><?= te('ba.from') ?></label>
                <input type="date" id="rpFrom" name="from" class="form-control form-control-sm" value="<?= $start->format('Y-m-d') ?>" max="<?= $today->format('Y-m-d') ?>" required>
                <span class="text-muted">–</span>
                <label class="sr-only" for="rpTo"><?= te('ba.to') ?></label>
                <input type="date" id="rpTo" name="to" class="form-control form-control-sm" value="<?= $lastDay->format('Y-m-d') ?>" max="<?= $today->format('Y-m-d') ?>" required>
                <button type="submit" class="btn btn-sm <?= $range === 'custom' ? 'btn-primary' : 'btn-default' ?>"><?= te('ba.apply') ?></button>
              </form>

              <div class="btn-group btn-group-sm" role="group" aria-label="<?= te('ba.group') ?>">
                <?php foreach ($groupLabels as $key => $label): ?>
                  <a href="<?= htmlspecialchars(rp_url($rpState, ['group' => $key])) ?>"
                     class="btn <?= $group === $key ? 'btn-primary' : 'btn-default' ?>"><?= htmlspecialchars($label) ?></a>
                <?php endforeach; ?>
              </div>

              <form method="GET" class="ba-post-form">
                <?= rp_hidden($rpState, ['tab', 'range', 'from', 'to', 'group', 'visitor', 'own']) ?>
                <label class="sr-only" for="rpItem"><?= $isBlog ? te('ba.post') : te('dl.col_file') ?></label>
                <select id="rpItem" name="item" class="custom-select custom-select-sm" data-autosubmit>
                  <option value=""><?= $isBlog ? te('ba.all_posts') : te('dl.all_files') ?></option>
                  <?php foreach ($itemOptions as $key => $title): ?>
                    <option value="<?= htmlspecialchars($key) ?>"<?= $rf['item'] === (string)$key ? ' selected' : '' ?>><?= htmlspecialchars(mb_strimwidth($title, 0, 60, '…', 'UTF-8')) ?></option>
                  <?php endforeach; ?>
                </select>
              </form>

              <a href="<?= htmlspecialchars(rp_url($rpState, ['export' => 'csv'])) ?>" class="btn btn-sm btn-outline-secondary ml-lg-auto"><i class="fas fa-file-csv"></i> <?= te('common.csv_export') ?></a>
            </div>
          </div>
        </div>
        <p class="small text-muted mt-n2 mb-2"><i class="fas fa-user-secret mr-1"></i><?= te('ba.privacy_note') ?></p>

        <!-- The owner's own (admin-browser) visits: counted by default, one click to leave them out -->
        <?php if ($ownCount > 0 && $rf['own']): ?>
          <div class="alert alert-light border py-2 d-flex align-items-center flex-wrap ba-own">
            <i class="fas fa-user-shield mr-2 text-warning"></i><?= te('ba.own_shown', ['n' => number_format($ownCount)]) ?>
            <a href="<?= htmlspecialchars(rp_url($rpState, ['own' => '0'])) ?>" class="btn btn-sm btn-light border ml-auto"><i class="fas fa-eye-slash"></i> <?= te('ba.own_hide') ?></a>
          </div>
        <?php elseif ($ownCount > 0): ?>
          <div class="alert alert-warning py-2 d-flex align-items-center flex-wrap ba-own">
            <i class="fas fa-user-shield mr-2"></i><?= te('ba.own_hidden', ['n' => number_format($ownCount)]) ?>
            <a href="<?= htmlspecialchars(rp_url($rpState, ['own' => '1'])) ?>" class="btn btn-sm btn-primary ml-auto"><i class="fas fa-eye"></i> <?= te('ba.own_show') ?></a>
          </div>
        <?php endif; ?>

        <?php if ($rf['visitor'] !== ''): ?>
          <div class="alert alert-info d-flex align-items-center">
            <i class="fas fa-user mr-2"></i><?= te('ba.visitor_filter', ['id' => substr($rf['visitor'], 0, 8)]) ?>
            <a href="<?= htmlspecialchars(rp_url($rpState, ['visitor' => null])) ?>" class="btn btn-sm btn-light ml-auto"><i class="fas fa-times"></i> <?= te('ba.clear_filter') ?></a>
          </div>
        <?php endif; ?>
        <?php if (!$isBlog && $rf['item'] !== ''): ?>
          <p class="small text-muted mb-3"><i class="fas fa-filter mr-1"></i><?= te('dl.file_filter_note') ?></p>
        <?php endif; ?>

        <!-- KPI row -->
        <div class="row ba-kpis">
          <?php if ($isBlog): ?>
            <?= rp_tile('fas fa-eye', 'bg-acan', t('ba.views'), number_format($kpi['views']), rp_delta_html($kpiChange['views'])) ?>
            <?= rp_tile('fas fa-user-friends', 'bg-info', t('ba.visitors'), number_format($kpi['visitors']), rp_delta_html($kpiChange['visitors']), t('ba.new_visitors', ['n' => number_format($kpi['new_visitors'])])) ?>
            <?= rp_tile('fas fa-mouse-pointer', 'bg-success', t('ba.list_clicks'), number_format($kpi['actions']), rp_delta_html($kpiChange['actions'])) ?>
            <?= rp_tile('fas fa-clock', 'bg-warning', t('ba.avg_time'), rp_duration($kpi['avg_sec']), rp_delta_html($kpiChange['avg_sec'])) ?>
            <?= rp_tile('fas fa-book-reader', 'bg-secondary', t('ba.read_rate'), $pct($kpi['read_rate']), rp_delta_html($kpiChange['read_rate'], true), '', t('ba.read_rate_hint')) ?>
          <?php else: ?>
            <?= rp_tile('fas fa-eye', 'bg-acan', t('dl.page_views'), number_format($kpi['views']), rp_delta_html($kpiChange['views'])) ?>
            <?= rp_tile('fas fa-user-friends', 'bg-info', t('ba.visitors'), number_format($kpi['visitors']), rp_delta_html($kpiChange['visitors']), t('ba.new_visitors', ['n' => number_format($kpi['new_visitors'])])) ?>
            <?= rp_tile('fas fa-file-download', 'bg-success', t('dl.downloads'), number_format($kpi['actions']), rp_delta_html($kpiChange['actions']), t('dl.people', ['n' => $kpi['people']])) ?>
            <?= rp_tile('fas fa-percentage', 'bg-secondary', t('dl.rate'), $pct($kpi['action_rate']), rp_delta_html($kpiChange['action_rate'], true), '', t('dl.rate_hint')) ?>
            <?= rp_tile('fas fa-clock', 'bg-warning', t('dl.avg_time'), rp_duration($kpi['avg_sec']), rp_delta_html($kpiChange['avg_sec'])) ?>
          <?php endif; ?>
        </div>

        <!-- Over time -->
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-chart-line mr-1"></i><?= $isBlog ? te('ba.trend') : te('dl.trend') ?> <span class="badge badge-light ml-1"><?= htmlspecialchars($groupLabels[$group]) ?></span></h3>
          </div>
          <div class="card-body">
            <?php if ($hasData): ?>
              <div class="ba-legend" aria-hidden="true">
                <span><i class="ba-legend__key" style="background:#1a5fd4"></i><?= htmlspecialchars($seriesNames[0]) ?></span>
                <span><i class="ba-legend__key" style="background:#f47230"></i><?= htmlspecialchars($seriesNames[1]) ?></span>
              </div>
              <div class="ba-chart">
                <canvas id="rpTrend" role="img" aria-label="<?= htmlspecialchars(($isBlog ? t('ba.trend') : t('dl.trend')) . ': ' . $seriesNames[0] . ' ' . number_format($kpi['views']) . ', ' . $seriesNames[1] . ' ' . number_format($isBlog ? $kpi['visitors'] : $kpi['actions'])) ?>"></canvas>
              </div>
              <details class="ba-table-twin mt-2">
                <summary><i class="fas fa-table mr-1"></i><?= te('ba.show_table') ?></summary>
                <div class="table-responsive mt-2">
                  <table class="table table-sm table-striped mb-0 ba-num-table">
                    <thead><tr><th><?= te('ba.col_period') ?></th><th class="text-right"><?= htmlspecialchars($seriesNames[0]) ?></th><th class="text-right"><?= htmlspecialchars($seriesNames[1]) ?></th></tr></thead>
                    <tbody>
                      <?php foreach ($trend as $point): ?>
                        <tr><td><?= htmlspecialchars($point['label']) ?></td><td class="text-right"><?= number_format($point['views']) ?></td><td class="text-right"><?= number_format($point['second']) ?></td></tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </details>
            <?php else: ?>
              <p class="empty-row mb-0"><i class="fas fa-chart-line"></i><?= te('ba.empty') ?></p>
            <?php endif; ?>
          </div>
        </div>

        <!-- Ranking -->
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-trophy mr-1"></i><?= $isBlog ? te('ba.posts') : te('dl.files') ?><span class="badge badge-light ml-1"><?= te('common.items', ['n' => count($ranking)]) ?></span></h3>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover mb-0 ba-num-table ba-posts">
              <thead>
                <tr>
                  <th style="width:2.5rem;">#</th>
                  <?php if ($isBlog): ?>
                    <th><?= te('ba.col_post') ?></th>
                    <th class="text-right"><?= te('ba.views') ?></th>
                    <th class="text-right"><?= te('ba.visitors') ?></th>
                    <th class="text-right"><?= te('ba.col_clicks') ?></th>
                    <th class="text-right"><?= te('ba.col_avg_time') ?></th>
                    <th class="text-right"><?= te('ba.col_scroll') ?></th>
                    <th><?= te('ba.col_last') ?></th>
                  <?php else: ?>
                    <th><?= te('dl.col_file') ?></th>
                    <th class="text-right"><?= te('dl.downloads') ?></th>
                    <th class="text-right"><?= te('dl.col_people') ?></th>
                    <th><?= te('dl.col_last') ?></th>
                  <?php endif; ?>
                </tr>
              </thead>
              <tbody>
              <?php if (!$ranking): ?>
                <tr><td colspan="<?= $isBlog ? 8 : 5 ?>" class="empty-row"><i class="fas fa-<?= $isBlog ? 'newspaper' : 'file-pdf' ?>"></i><?= te('ba.empty') ?></td></tr>
              <?php else: $rank = 0; foreach ($ranking as $key => $row): $rank++; $key = (string)$key; ?>
                <tr>
                  <td class="text-muted"><?= $rank ?></td>
                  <td class="ba-post-cell">
                    <a href="<?= htmlspecialchars(rp_url($rpState, ['item' => $key])) ?>" title="<?= $isBlog ? te('ba.filter_post') : te('dl.filter_file') ?>"><?= htmlspecialchars($itemLabel($key)) ?></a>
                    <a href="../<?= $isBlog ? htmlspecialchars($key) : htmlspecialchars(implode('/', array_map('rawurlencode', explode('/', $key)))) ?>" target="_blank" rel="noopener" class="text-muted ml-1"
                       title="<?= $isBlog ? te('ba.open_post') : te('dl.open_file') ?>" aria-label="<?= $isBlog ? te('ba.open_post') : te('dl.open_file') ?>"><i class="fas fa-external-link-alt fa-xs"></i></a>
                  </td>
                  <td class="text-right">
                    <span class="ba-inline">
                      <span class="ba-inline__track"><span class="ba-inline__bar" style="width:<?= number_format((int)$row['n'] / $maxRank * 100, 1, '.', '') ?>%"></span></span>
                      <strong><?= number_format((int)$row['n']) ?></strong>
                    </span>
                  </td>
                  <td class="text-right"><?= number_format((int)$row['people']) ?></td>
                  <?php if ($isBlog): ?>
                    <td class="text-right"><?= number_format((int)$row['clicks']) ?></td>
                    <td class="text-right"><?= htmlspecialchars(rp_duration($row['avg_sec'] !== null ? (float)$row['avg_sec'] : null)) ?></td>
                    <td class="text-right"><?= $row['avg_scroll'] !== null ? round((float)$row['avg_scroll']) . '%' : '—' ?></td>
                  <?php endif; ?>
                  <td class="text-nowrap"><?= $row['last_at'] ? htmlspecialchars(date('Y/m/d H:i', strtotime($row['last_at']))) : '—' ?></td>
                </tr>
              <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Breakdowns -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-header"><h3 class="card-title"><i class="fas fa-globe-asia mr-1"></i><?= te('ba.countries') ?> <span class="badge badge-light ml-1"><?= htmlspecialchars($basisLabel) ?></span></h3></div>
              <div class="card-body">
                <?= rp_meter_list($countries, function ($code) { return $code === '__other' ? t('ba.other') : rp_country_name($code); }, $basisTotal) ?>
                <p class="small text-muted mt-3 mb-0"><i class="fas fa-info-circle mr-1"></i><?= te('ba.country_note') ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-header"><h3 class="card-title"><i class="fas fa-mobile-alt mr-1"></i><?= te('ba.devices') ?> <span class="badge badge-light ml-1"><?= htmlspecialchars($basisLabel) ?></span></h3></div>
              <div class="card-body">
                <?= rp_meter_list($devices, function ($key) use ($deviceLabels) { return $deviceLabels[$key] ?? t('ba.unknown'); }, $basisTotal) ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-header"><h3 class="card-title"><i class="fas fa-sign-in-alt mr-1"></i><?= te('ba.sources') ?> <span class="badge badge-light ml-1"><?= htmlspecialchars($basisLabel) ?></span></h3></div>
              <div class="card-body">
                <?= rp_meter_list($sources, function ($key) use ($sourceLabels) { return $sourceLabels[$key] ?? t('ba.unknown'); }, $basisTotal) ?>
                <?php if ($refSites): ?>
                  <h4 class="ba-subhead"><?= te('ba.ref_sites') ?></h4>
                  <?= rp_meter_list($refSites, function ($host) { return $host; }, $basisTotal) ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent activity -->
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-stream mr-1"></i><?= te('ba.recent') ?></h3>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-striped table-sm mb-0 ba-recent">
              <thead>
                <tr>
                  <th><?= te('ba.col_time') ?></th>
                  <th><?= te('ba.col_event') ?></th>
                  <th><?= $isBlog ? te('ba.col_post') : te('dl.col_file') ?></th>
                  <th><?= te('ba.col_country') ?></th>
                  <th><?= te('ba.col_device') ?></th>
                  <th><?= te('ba.col_source') ?></th>
                  <th><?= te('ba.col_visitor') ?></th>
                  <th class="text-right"><?= te('ba.col_time_on_page') ?></th>
                  <th class="text-right"><?= te('ba.col_scroll') ?></th>
                </tr>
              </thead>
              <tbody>
              <?php if (!$recent): ?>
                <tr><td colspan="9" class="empty-row"><i class="fas fa-stream"></i><?= te('ba.empty') ?></td></tr>
              <?php else: foreach ($recent as $ev):
                $type = $ev['event_type'];
                $isView = $type === 'view';
                $badge = ['view' => ['badge-acan', t('ba.ev_view')], 'list_click' => ['badge-light', t('ba.ev_list_click')], 'download' => ['badge-success', t('ba.ev_download')]][$type] ?? ['badge-light', $type];
              ?>
                <tr>
                  <td class="text-nowrap"><?= htmlspecialchars(date('Y/m/d H:i', strtotime($ev['created_at']))) ?></td>
                  <td><span class="badge <?= $badge[0] ?>"><?= htmlspecialchars($badge[1]) ?></span></td>
                  <td class="ba-post-cell">
                    <?php if ($isBlog): ?>
                      <a href="<?= htmlspecialchars(rp_url($rpState, ['item' => $ev['page_slug']])) ?>" title="<?= te('ba.filter_post') ?>"><?= htmlspecialchars($itemLabel($ev['page_slug'])) ?></a>
                    <?php elseif ($type === 'download'): ?>
                      <a href="<?= htmlspecialchars(rp_url($rpState, ['item' => $ev['target']])) ?>" title="<?= te('dl.filter_file') ?>"><?= htmlspecialchars($ev['target_title'] !== '' ? $ev['target_title'] : $ev['target']) ?></a>
                    <?php else: ?>
                      <span class="text-muted"><?= htmlspecialchars($ev['page_title']) ?></span>
                    <?php endif; ?>
                  </td>
                  <td class="text-nowrap"><?= htmlspecialchars(rp_country_name($ev['country'])) ?></td>
                  <td class="text-nowrap"><?= htmlspecialchars($deviceLabels[$ev['device']] ?? t('ba.unknown')) ?></td>
                  <td class="text-nowrap">
                    <?php if ($type === 'list_click'): ?>
                      <small class="text-muted"><?= htmlspecialchars($ev['source_page']) ?></small>
                    <?php else: ?>
                      <?= htmlspecialchars($sourceLabels[$ev['referrer_type']] ?? '—') ?>
                      <?php if ($ev['referrer_host'] !== '' && $ev['referrer_type'] !== 'internal'): ?><br><small class="text-muted"><?= htmlspecialchars($ev['referrer_host']) ?></small><?php endif; ?>
                    <?php endif; ?>
                  </td>
                  <td class="text-nowrap">
                    <a href="<?= htmlspecialchars(rp_url($rpState, ['visitor' => $ev['visitor_id']])) ?>" class="ba-visitor" title="<?= te('ba.visitor_history') ?>"><code><?= htmlspecialchars(substr($ev['visitor_id'], 0, 8)) ?></code></a>
                    <?php if ($isView && (int)$ev['is_new_visitor'] === 1): ?><span class="badge badge-success ml-1"><?= te('ba.new') ?></span><?php endif; ?>
                    <?php if ((int)$ev['is_admin'] === 1): ?><span class="badge badge-warning ml-1"><?= te('ba.admin_badge') ?></span><?php endif; ?>
                  </td>
                  <td class="text-right"><?= $isView && (int)$ev['seconds_active'] > 0 ? htmlspecialchars(rp_duration((float)$ev['seconds_active'])) : '—' ?></td>
                  <td class="text-right"><?= $isView && ((int)$ev['scroll_pct'] > 0 || (int)$ev['seconds_active'] > 0) ? (int)$ev['scroll_pct'] . '%' : '—' ?></td>
                </tr>
              <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>

<?php if ($hasData): ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script>
  (function () {
    "use strict";
    var canvas = document.getElementById("rpTrend");
    if (!canvas || !window.Chart) return;

    var d = <?= json_encode([
        'labels' => array_column($trend, 'label'),
        'first'  => array_column($trend, 'views'),
        'second' => array_column($trend, 'second'),
        'names'  => $seriesNames,
        'locale' => admin_lang() === 'en' ? 'en-US' : 'ja-JP',
    ], JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;

    // Validated pair (dataviz validate_palette.js): site blue + orange.
    var C = { first: "#1a5fd4", second: "#f47230", grid: "#eceff4", text: "#6b7280", ink: "#1f2937", surface: "#ffffff" };
    var fmt = new Intl.NumberFormat(d.locale);
    var showPoints = d.labels.length <= 14;

    Chart.defaults.font.family = '"Noto Sans JP", "Hiragino Kaku Gothic ProN", sans-serif';
    Chart.defaults.color = C.text;

    // Vertical hairline at the hovered date (crosshair).
    var crosshair = {
      id: "crosshair",
      beforeDatasetsDraw: function (chart) {
        var active = chart.tooltip && chart.tooltip.getActiveElements();
        if (!active || !active.length) return;
        var x = Math.round(active[0].element.x) + 0.5, area = chart.chartArea, ctx = chart.ctx;
        ctx.save();
        ctx.strokeStyle = "#c3c9d4";
        ctx.lineWidth = 1;
        ctx.beginPath(); ctx.moveTo(x, area.top); ctx.lineTo(x, area.bottom); ctx.stroke();
        ctx.restore();
      }
    };

    // Latest value at the end of each line; skipped when the two would collide.
    var endLabels = {
      id: "endLabels",
      afterDatasetsDraw: function (chart) {
        var points = [];
        chart.data.datasets.forEach(function (ds, i) {
          var meta = chart.getDatasetMeta(i);
          if (!chart.isDatasetVisible(i) || !meta.data.length) return;
          var p = meta.data[meta.data.length - 1];
          points.push({ x: p.x, y: p.y, text: fmt.format(ds.data[ds.data.length - 1]) });
        });
        if (points.length === 2 && Math.abs(points[0].y - points[1].y) < 14) return;
        var ctx = chart.ctx;
        ctx.save();
        ctx.font = "600 12px " + Chart.defaults.font.family;
        ctx.fillStyle = C.ink;
        ctx.textBaseline = "middle";
        points.forEach(function (pt) { ctx.fillText(pt.text, pt.x + 8, pt.y); });
        ctx.restore();
      }
    };

    function line(label, data, color, fill) {
      return {
        label: label,
        data: data,
        borderColor: color,
        backgroundColor: fill ? "rgba(26, 95, 212, 0.10)" : color,
        fill: fill ? "origin" : false,
        borderWidth: 2,
        borderCapStyle: "round",
        borderJoinStyle: "round",
        tension: 0,
        pointRadius: showPoints ? 4 : 0,
        pointBackgroundColor: color,
        pointBorderColor: C.surface,
        pointBorderWidth: 2,
        pointHoverRadius: 5,
        pointHoverBorderWidth: 2,
        pointHoverBorderColor: C.surface,
        pointHitRadius: 12
      };
    }

    new Chart(canvas, {
      type: "line",
      data: {
        labels: d.labels,
        datasets: [line(d.names[0], d.first, C.first, true), line(d.names[1], d.second, C.second, false)]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        animation: false,
        layout: { padding: { right: 40, top: 8 } },
        interaction: { mode: "index", intersect: false },
        scales: {
          x: { grid: { display: false }, border: { color: C.grid }, ticks: { maxRotation: 0, autoSkipPadding: 16 } },
          y: { beginAtZero: true, grid: { color: C.grid, lineWidth: 1 }, border: { display: false }, ticks: { precision: 0, callback: function (v) { return fmt.format(v); } } }
        },
        plugins: {
          legend: { display: false }, // HTML legend above the canvas (.ba-legend)
          tooltip: {
            backgroundColor: C.surface, borderColor: "#dfe3ea", borderWidth: 1,
            titleColor: C.text, bodyColor: C.ink, padding: 10, boxPadding: 6,
            usePointStyle: true,
            callbacks: {
              labelPointStyle: function () { return { pointStyle: "line", rotation: 0 }; },
              // Key in the line's colour (the default would use the points' white ring).
              labelColor: function (ctx) { return { borderColor: ctx.dataset.borderColor, backgroundColor: ctx.dataset.borderColor, borderWidth: 2 }; },
              label: function (ctx) { return " " + fmt.format(ctx.parsed.y) + "  " + ctx.dataset.label; }
            }
          }
        }
      },
      plugins: [crosshair, endLabels]
    });
  })();
</script>
<?php endif; ?>
