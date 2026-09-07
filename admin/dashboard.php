<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'bulk_delete' && !empty($_POST['ids'])) {
        $ids = array_map('intval', $_POST['ids']);
        $idList = implode(',', $ids);
        $conn->query("DELETE FROM subscribers WHERE id IN ($idList)");
        header('Location: dashboard.php?msg=deleted');
        exit;
    }
}

$perPage = 20;
$page = max(1, intval($_GET['page'] ?? 1));
$offset = ($page - 1) * $perPage;
$search = trim($_GET['q'] ?? '');
$where = ''; $params = []; $types = '';
if (!empty($search)) {
    $where = "WHERE email LIKE ? OR name LIKE ? OR company LIKE ? OR phone LIKE ?";
    $term = "%$search%";
    $params = [$term, $term, $term, $term];
    $types = 'ssss';
}

$countSql = "SELECT COUNT(*) as total FROM subscribers $where";
if (!empty($types)) {
    $stmt = $conn->prepare($countSql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $total = $stmt->get_result()->fetch_assoc()['total'];
    $stmt->close();
} else {
    $total = $conn->query($countSql)->fetch_assoc()['total'];
}
$totalPages = max(1, ceil($total / $perPage));

$sql = "SELECT * FROM subscribers $where ORDER BY created_at DESC LIMIT $perPage OFFSET $offset";
if (!empty($types)) {
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
} else {
    $result = $conn->query($sql);
}
$subscribers = [];
while ($row = $result->fetch_assoc()) { $subscribers[] = $row; }

$stats = $conn->query("SELECT COUNT(*) as total,
    SUM(CASE WHEN source='contact' THEN 1 ELSE 0 END) as contact_count,
    SUM(CASE WHEN source='newsletter' THEN 1 ELSE 0 END) as newsletter_count,
    DATE(MAX(created_at)) as latest_date FROM subscribers")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ダッシュボード | A CAN SOLUTIONS 管理画面</title>
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

    /* ── Topbar ── */
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

    /* ── Layout ── */
    .wrap { max-width: 1200px; margin: 0 auto; padding: 1.75rem 1.5rem 3rem; }

    h1 { font-size: 1.3rem; margin: 0 0 1.25rem; }

    .alert-success {
      background: #eafaf1;
      border: 1px solid #b7ebc6;
      color: #1e7e34;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      font-size: 0.88rem;
      margin-bottom: 1.25rem;
    }

    /* ── Stats ── */
    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 1rem;
      margin-bottom: 1.75rem;
    }

    .stat-card {
      background: #fff;
      border-radius: 10px;
      padding: 1.1rem 1.25rem;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
      border-left: 4px solid #12499e;
    }

    .stat-card__value { font-size: 1.7rem; font-weight: 900; color: #1a1a2e; line-height: 1.2; }
    .stat-card__label { font-size: 0.82rem; color: #6b7280; margin-top: 0.2rem; }

    /* ── Card / table ── */
    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
      overflow: hidden;
    }

    .card__head {
      padding: 1rem 1.25rem;
      border-bottom: 1px solid #eef1f7;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .search-form { display: flex; gap: 0.5rem; }

    .search-form input[type="text"] {
      padding: 0.5rem 0.8rem;
      border: 1.5px solid #d1d9e6;
      border-radius: 6px;
      font-size: 0.85rem;
      font-family: inherit;
      width: 260px;
      max-width: 60vw;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.5rem 1rem;
      border-radius: 6px;
      font-size: 0.85rem;
      font-weight: 700;
      font-family: inherit;
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: opacity 0.2s;
    }

    .btn:hover { opacity: 0.85; }
    .btn-primary { background: #12499e; color: #fff; }
    .btn-default { background: #eef1f7; color: #1a1a2e; }
    .btn-danger { background: #dc2626; color: #fff; }
    .btn-danger:disabled { background: #f3a8a8; cursor: not-allowed; opacity: 1; }
    .btn-sm { padding: 0.35rem 0.7rem; font-size: 0.78rem; }

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

    .msg-cell {
      max-width: 240px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .badge {
      display: inline-block;
      padding: 0.2rem 0.65rem;
      border-radius: 999px;
      font-size: 0.72rem;
      font-weight: 700;
      color: #fff;
    }
    .badge-contact { background: #1a5fd4; }
    .badge-newsletter { background: #12499e; }

    .empty-row { text-align: center; color: #9ca3af; padding: 2.5rem 1rem; }

    .card__foot {
      padding: 0.9rem 1.25rem;
      border-top: 1px solid #eef1f7;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .pagination { display: flex; gap: 0.35rem; list-style: none; margin: 0; padding: 0; }
    .pagination a, .pagination span {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 30px;
      height: 30px;
      padding: 0 0.4rem;
      border-radius: 6px;
      font-size: 0.8rem;
      text-decoration: none;
      color: #1a1a2e;
      background: #f5f7fb;
    }
    .pagination .active span { background: #12499e; color: #fff; }

    @media (max-width: 700px) {
      .search-form input[type="text"] { width: 160px; }
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
      <a href="logout.php">ログアウト</a>
    </div>
  </div>

  <div class="wrap">
    <h1>登録者一覧</h1>

    <?php if (($_GET['msg'] ?? '') === 'deleted'): ?>
      <div class="alert-success">削除しました。</div>
    <?php endif; ?>

    <div class="stats">
      <div class="stat-card">
        <div class="stat-card__value"><?= (int)$stats['total'] ?></div>
        <div class="stat-card__label">総登録者数</div>
      </div>
      <div class="stat-card">
        <div class="stat-card__value"><?= (int)($stats['contact_count'] ?? 0) ?></div>
        <div class="stat-card__label">お問い合わせ</div>
      </div>
      <div class="stat-card">
        <div class="stat-card__value"><?= (int)($stats['newsletter_count'] ?? 0) ?></div>
        <div class="stat-card__label">メルマガ登録</div>
      </div>
      <div class="stat-card">
        <div class="stat-card__value" style="font-size:1.15rem;"><?= htmlspecialchars($stats['latest_date'] ?? '—') ?></div>
        <div class="stat-card__label">最新登録日</div>
      </div>
    </div>

    <div class="card">
      <div class="card__head">
        <form method="GET" class="search-form">
          <input type="text" name="q" placeholder="メール・名前・会社名・電話番号で検索" value="<?= htmlspecialchars($search) ?>" />
          <button type="submit" class="btn btn-primary">検索</button>
          <?php if ($search !== ''): ?>
            <a href="dashboard.php" class="btn btn-default">クリア</a>
          <?php endif; ?>
        </form>
        <a href="export.php<?= $search !== '' ? '?q=' . urlencode($search) : '' ?>" class="btn btn-default">CSVエクスポート</a>
      </div>

      <form method="POST" id="bulkForm">
        <input type="hidden" name="action" value="bulk_delete">
        <div style="overflow-x:auto;">
          <table>
            <thead>
              <tr>
                <th style="width:30px;"><input type="checkbox" id="selectAll"></th>
                <th>メールアドレス</th>
                <th>名前</th>
                <th>会社名</th>
                <th>電話番号</th>
                <th>メッセージ</th>
                <th>ソース</th>
                <th>登録日時</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
            <?php if (empty($subscribers)): ?>
              <tr><td colspan="9" class="empty-row">登録者が見つかりません。</td></tr>
            <?php else: foreach ($subscribers as $s): ?>
              <tr>
                <td><input type="checkbox" name="ids[]" value="<?= (int)$s['id'] ?>" class="rowCheck"></td>
                <td><?= htmlspecialchars($s['email']) ?></td>
                <td><?= htmlspecialchars($s['name']) ?></td>
                <td><?= htmlspecialchars($s['company']) ?></td>
                <td><?= htmlspecialchars($s['phone']) ?></td>
                <td class="msg-cell" title="<?= htmlspecialchars($s['message']) ?>"><?= htmlspecialchars($s['message']) ?></td>
                <td><span class="badge badge-<?= htmlspecialchars($s['source']) ?>"><?= htmlspecialchars($s['source']) ?></span></td>
                <td><?= htmlspecialchars($s['created_at']) ?></td>
                <td>
                  <a href="delete.php?id=<?= (int)$s['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('削除しますか？');">削除</a>
                </td>
              </tr>
            <?php endforeach; endif; ?>
            </tbody>
          </table>
        </div>
        <div class="card__foot">
          <button type="submit" class="btn btn-danger" id="bulkDeleteBtn" disabled onclick="return confirm('選択した登録者を削除しますか？');">選択項目を削除</button>

          <?php if ($totalPages > 1): ?>
            <ul class="pagination">
              <?php for ($p = 1; $p <= $totalPages; $p++): ?>
                <li class="<?= $p === $page ? 'active' : '' ?>">
                  <a href="?page=<?= $p ?><?= $search !== '' ? '&q=' . urlencode($search) : '' ?>"><span><?= $p ?></span></a>
                </li>
              <?php endfor; ?>
            </ul>
          <?php endif; ?>
        </div>
      </form>
    </div>
  </div>

  <script>
    const selectAll = document.getElementById('selectAll');
    const rowChecks = document.querySelectorAll('.rowCheck');
    const bulkDeleteBtn = document.getElementById('bulkDeleteBtn');

    function updateBulkBtn() {
      bulkDeleteBtn.disabled = !Array.from(rowChecks).some(c => c.checked);
    }

    if (selectAll) {
      selectAll.addEventListener('change', function () {
        rowChecks.forEach(c => { c.checked = selectAll.checked; });
        updateBulkBtn();
      });
    }
    rowChecks.forEach(c => c.addEventListener('change', updateBulkBtn));
  </script>
</body>
</html>
