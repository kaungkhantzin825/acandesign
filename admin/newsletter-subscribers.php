<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'bulk_delete' && !empty($_POST['ids'])) {
        $ids = array_map('intval', $_POST['ids']);
        $idList = implode(',', $ids);
        $conn->query("DELETE FROM subscribers WHERE id IN ($idList) AND source = 'newsletter'");
        header('Location: newsletter-subscribers.php?msg=deleted');
        exit;
    }
}

$perPage = 20;
$page = max(1, intval($_GET['page'] ?? 1));
$offset = ($page - 1) * $perPage;
$search = trim($_GET['q'] ?? '');
$where = "WHERE source = 'newsletter'";
$params = [];
$types = '';
if (!empty($search)) {
    $where .= " AND (email LIKE ? OR name LIKE ? OR company LIKE ? OR phone LIKE ?)";
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
$newsletterSubs = [];
while ($row = $result->fetch_assoc()) { $newsletterSubs[] = $row; }

$stats = $conn->query("SELECT COUNT(*) as total, DATE(MAX(created_at)) as latest_date FROM subscribers WHERE source = 'newsletter'")->fetch_assoc();

$monthStats = $conn->query("SELECT
    SUM(CASE WHEN DATE_FORMAT(created_at, '%Y-%m') = DATE_FORMAT(CURDATE(), '%Y-%m') THEN 1 ELSE 0 END) as this_month,
    SUM(CASE WHEN DATE_FORMAT(created_at, '%Y-%m') = DATE_FORMAT(CURDATE() - INTERVAL 1 MONTH, '%Y-%m') THEN 1 ELSE 0 END) as last_month
    FROM subscribers WHERE source = 'newsletter'")->fetch_assoc();
$thisMonthCount = (int)($monthStats['this_month'] ?? 0);
$lastMonthCount = (int)($monthStats['last_month'] ?? 0);
if ($lastMonthCount > 0) {
    $monthDelta = round((($thisMonthCount - $lastMonthCount) / $lastMonthCount) * 100);
} else {
    $monthDelta = $thisMonthCount > 0 ? 100 : 0;
}
?>
<?php
$pageTitle    = t('subs.title');
$pageSubtitle = t('subs.subtitle');
require __DIR__ . '/partials/header.php';
?>

        <?php if (($_GET['msg'] ?? '') === 'deleted'): ?>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="<?= te('common.close') ?>">&times;</button>
            <i class="icon fas fa-check"></i><?= te('common.deleted') ?>
          </div>
        <?php endif; ?>

        <!-- KPI tiles -->
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= (int)$stats['total'] ?></h3>
                <p><?= te('subs.total') ?></p>
              </div>
              <div class="icon"><i class="fas fa-users"></i></div>
              <a href="send-newsletter.php" class="small-box-footer"><?= te('subs.send') ?> <i class="fas fa-paper-plane"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?= $thisMonthCount ?>
                  <?php if ($monthDelta != 0): ?>
                    <span class="delta"><i class="fas fa-arrow-<?= $monthDelta > 0 ? 'up' : 'down' ?>"></i> <?= abs($monthDelta) ?>%</span>
                  <?php endif; ?>
                </h3>
                <p><?= te('dash.this_month') ?></p>
              </div>
              <div class="icon"><i class="fas fa-calendar-plus"></i></div>
              <span class="small-box-footer"><?= te('common.prev_month', ['n' => $lastMonthCount]) ?></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="is-date"><?= htmlspecialchars($stats['latest_date'] ?? '—') ?></h3>
                <p><?= te('dash.latest') ?></p>
              </div>
              <div class="icon"><i class="fas fa-clock"></i></div>
              <span class="small-box-footer">&nbsp;</span>
            </div>
          </div>
        </div>

        <!-- Subscriber list -->
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-users mr-1"></i><?= te('subs.title') ?><span class="badge badge-light ml-1"><?= te('common.items', ['n' => (int)$total]) ?></span></h3>
            <div class="card-tools">
              <a href="export.php?source=newsletter<?= $search !== '' ? '&q=' . urlencode($search) : '' ?>" class="btn btn-tool" title="<?= te('common.csv_export') ?>"><i class="fas fa-file-csv"></i> CSV</a>
            </div>
          </div>
          <div class="card-body border-bottom py-2">
            <form method="GET" class="admin-search">
              <div class="input-group input-group-sm">
                <input type="text" name="q" class="form-control" placeholder="<?= te('common.search_ph') ?>" value="<?= htmlspecialchars($search) ?>" />
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> <?= te('common.search') ?></button>
                  <?php if ($search !== ''): ?>
                    <a href="newsletter-subscribers.php" class="btn btn-default"><?= te('common.clear') ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </form>
          </div>

          <form method="POST" id="bulkForm">
            <input type="hidden" name="action" value="bulk_delete">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover table-striped admin-table mb-0">
                <thead>
                  <tr>
                    <th style="width:36px;"><input type="checkbox" id="selectAll" aria-label="<?= te('common.select_all') ?>"></th>
                    <th><?= te('col.email') ?></th>
                    <th><?= te('col.name') ?></th>
                    <th><?= te('col.company') ?></th>
                    <th><?= te('col.phone') ?></th>
                    <th><?= te('col.created') ?></th>
                    <th class="text-right"><?= te('col.actions') ?></th>
                  </tr>
                </thead>
                <tbody>
                <?php if (empty($newsletterSubs)): ?>
                  <tr><td colspan="7" class="empty-row"><i class="fas fa-inbox"></i><?= te('subs.empty') ?></td></tr>
                <?php else: foreach ($newsletterSubs as $s): ?>
                  <tr>
                    <td><input type="checkbox" name="ids[]" value="<?= (int)$s['id'] ?>" class="rowCheck"></td>
                    <td><?= htmlspecialchars($s['email']) ?></td>
                    <td class="wrap"><?= htmlspecialchars($s['name']) ?></td>
                    <td class="wrap"><?= htmlspecialchars($s['company']) ?></td>
                    <td><?= htmlspecialchars($s['phone']) ?></td>
                    <td><?= htmlspecialchars($s['created_at']) ?></td>
                    <td class="text-right">
                      <a href="delete.php?id=<?= (int)$s['id'] ?>&return=newsletter-subscribers.php" class="btn btn-xs btn-outline-danger" data-confirm="<?= te('common.delete_q') ?>"><i class="fas fa-trash-alt"></i> <?= te('common.delete') ?></a>
                    </td>
                  </tr>
                <?php endforeach; endif; ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer clearfix">
              <button type="submit" class="btn btn-sm btn-danger" id="bulkDeleteBtn" disabled data-confirm="<?= te('subs.bulk_q') ?>">
                <i class="fas fa-trash-alt"></i> <?= te('common.bulk_delete') ?> (<span id="bulkSelectedCount">0</span>)
              </button>

              <?php if ($totalPages > 1): ?>
                <ul class="pagination pagination-sm m-0 float-right">
                  <?php for ($p = 1; $p <= $totalPages; $p++): ?>
                    <li class="page-item<?= $p === $page ? ' active' : '' ?>">
                      <a class="page-link" href="?page=<?= $p ?><?= $search !== '' ? '&q=' . urlencode($search) : '' ?>"><?= $p ?></a>
                    </li>
                  <?php endfor; ?>
                </ul>
              <?php endif; ?>
            </div>
          </form>
        </div>

<?php require __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
