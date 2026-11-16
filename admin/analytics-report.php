<?php
require_once __DIR__ . '/db.php';

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
    'contact_submission'       => ['label' => 'お問い合わせ送信',           'icon' => '📩'],
    'click_phone_number'       => ['label' => '電話番号クリック',           'icon' => '📞'],
    'click_email_info'         => ['label' => 'メールクリック',             'icon' => '✉️'],
    'download_bpo_guide'       => ['label' => 'BPO/KPO資料ダウンロード',    'icon' => '📦'],
    'download_myanmar_report'  => ['label' => 'ミャンマーレポートDL',       'icon' => '📰'],
    'download_company_profile' => ['label' => '会社案内ダウンロード',        'icon' => '🏢'],
    'file_download'            => ['label' => '資料ダウンロード（一覧）',    'icon' => '📄'],
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

function acan_link_title($linkUrl) {
    $name = basename(rawurldecode($linkUrl));
    $name = preg_replace('/\.pdf$/i', '', $name);
    return $name !== '' ? $name : $linkUrl;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>クリック・ダウンロードレポート | A CAN SOLUTIONS 管理画面</title>
  <link rel="icon" type="image/webp" href="../assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; }

    body {
      font-family: "Noto Sans JP", "Hiragino Kaku Gothic ProN", sans-serif;
      margin: 0;
      background: #f5f7fb;
      color: #1a1a2e;
    }

    a { color: inherit; }

    .topbar {
      background: #12499e;
      color: #fff;
      padding: 0.9rem 1.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .topbar__brand {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-weight: 900;
      font-size: 1rem;
    }

    .topbar__brand img { width: 30px; height: 30px; }

    .topbar__right {
      display: flex;
      align-items: center;
      gap: 1.25rem;
      font-size: 0.85rem;
      flex-wrap: wrap;
    }

    .topbar__right a {
      text-decoration: none;
      color: #fff;
      background: rgba(255,255,255,0.15);
      padding: 0.4rem 0.9rem;
      border-radius: 999px;
      transition: background 0.2s;
    }

    .topbar__right a:hover { background: rgba(255,255,255,0.28); }
    .topbar__right a.active { background: rgba(255,255,255,0.4); }

    .wrap { max-width: 1200px; margin: 0 auto; padding: 1.75rem 1.5rem 3rem; }

    .page-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    h1 { font-size: 1.3rem; margin: 0; }
    .page-head__sub { font-size: 0.82rem; color: #6b7280; margin-top: 0.2rem; }

    .period-tabs { display: flex; gap: 0.4rem; }
    .period-tabs a {
      text-decoration: none;
      font-size: 0.82rem;
      font-weight: 700;
      color: #6b7280;
      background: #fff;
      padding: 0.45rem 0.9rem;
      border-radius: 999px;
      border: 1.5px solid #e5e9f2;
    }
    .period-tabs a.active { background: #12499e; color: #fff; border-color: #12499e; }

    /* ── Key-event cards (GA4 style) ── */
    .events-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .event-card {
      background: #fff;
      border-radius: 12px;
      padding: 1.1rem 1.25rem;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
      border-left: 4px solid #12499e;
    }

    .event-card__top {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.82rem;
      color: #6b7280;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .event-card__icon {
      width: 26px; height: 26px;
      display: inline-flex; align-items: center; justify-content: center;
      background: #eef3fd;
      border-radius: 7px;
      font-size: 0.9rem;
    }

    .event-card__value { font-size: 1.6rem; font-weight: 900; color: #1a1a2e; line-height: 1.2; }
    .event-card__all { font-size: 0.75rem; color: #9ca3af; margin-top: 0.15rem; }

    /* ── Breakdown table ── */
    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
      overflow: hidden;
    }

    .card__head {
      padding: 1rem 1.25rem;
      border-bottom: 1px solid #eef1f7;
      font-weight: 700;
      font-size: 0.95rem;
    }

    table { width: 100%; border-collapse: collapse; font-size: 0.85rem; }
    thead th {
      text-align: left;
      padding: 0.7rem 1rem;
      background: #f5f7fb;
      color: #6b7280;
      font-weight: 700;
      border-bottom: 1px solid #eef1f7;
      white-space: nowrap;
    }
    tbody td {
      padding: 0.7rem 1rem;
      border-bottom: 1px solid #f2f4f8;
      vertical-align: top;
    }
    tbody tr:hover { background: #fafbfe; }

    .badge {
      display: inline-block;
      padding: 0.2rem 0.65rem;
      border-radius: 999px;
      font-size: 0.72rem;
      font-weight: 700;
      color: #fff;
      background: #1a5fd4;
      white-space: nowrap;
    }

    .count-cell { font-weight: 900; font-size: 0.95rem; color: #12499e; }
    .link-cell { max-width: 360px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }

    .empty-row { text-align: center; color: #9ca3af; padding: 2.5rem 1rem; }

    @media (max-width: 700px) {
      table { display: block; overflow-x: auto; }
    }
  </style>
</head>
<body>

  <div class="topbar">
    <div class="topbar__brand">
      <img src="../assets/img/logo.webp" alt="" />
      A CAN SOLUTIONS 管理画面
    </div>
    <div class="topbar__right">
      <span><?= htmlspecialchars($_SESSION['admin_username'] ?? '') ?></span>
      <a href="dashboard.php">登録者一覧（全て）</a>
      <a href="contacts.php">お問い合わせ一覧</a>
      <a href="newsletter-subscribers.php">メルマガ登録一覧</a>
      <a href="analytics-report.php" class="active">クリック・DLレポート</a>
      <a href="send-newsletter.php">ニュースレター送信</a>
      <a href="change-password.php">パスワード変更</a>
      <a href="logout.php">ログアウト</a>
    </div>
  </div>

  <div class="wrap">
    <div class="page-head">
      <div>
        <h1>クリック・ダウンロードレポート</h1>
        <p class="page-head__sub">サイト全体の電話・メールクリックと資料ダウンロードを集計しています（GA4とは別に自社DBで記録）。</p>
      </div>
      <div class="period-tabs">
        <a href="?period=7" class="<?= $period === '7' ? 'active' : '' ?>">7日間</a>
        <a href="?period=30" class="<?= $period === '30' ? 'active' : '' ?>">30日間</a>
        <a href="?period=90" class="<?= $period === '90' ? 'active' : '' ?>">90日間</a>
        <a href="?period=all" class="<?= $period === 'all' ? 'active' : '' ?>">全期間</a>
      </div>
    </div>

    <div class="events-grid">
      <?php foreach ($eventLabels as $key => $info): ?>
        <div class="event-card">
          <div class="event-card__top">
            <span class="event-card__icon"><?= $info['icon'] ?></span>
            <?= htmlspecialchars($info['label']) ?>
          </div>
          <div class="event-card__value"><?= (int)($periodTotalsByEvent[$key] ?? 0) ?></div>
          <div class="event-card__all">累計 <?= (int)($totalsByEvent[$key] ?? 0) ?> 件</div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="card">
      <div class="card__head">リンク別の内訳（上位100件・合計<?= $grandTotal ?>件）</div>
      <div style="overflow-x:auto;">
        <table>
          <thead>
            <tr>
              <th>イベント</th>
              <th>リンク / 資料名</th>
              <th>回数</th>
              <th>最終発生日時</th>
            </tr>
          </thead>
          <tbody>
          <?php if (empty($rows)): ?>
            <tr><td colspan="4" class="empty-row">この期間のデータはまだありません。</td></tr>
          <?php else: foreach ($rows as $r): ?>
            <tr>
              <td><span class="badge"><?= htmlspecialchars($eventLabels[$r['event_name']]['label'] ?? $r['event_name']) ?></span></td>
              <td class="link-cell" title="<?= htmlspecialchars($r['link_url']) ?>"><?= htmlspecialchars(acan_link_title($r['link_url'])) ?></td>
              <td class="count-cell"><?= (int)$r['c'] ?></td>
              <td><?= htmlspecialchars($r['last_at']) ?></td>
            </tr>
          <?php endforeach; endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
