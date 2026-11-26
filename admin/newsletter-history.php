<?php
require_once __DIR__ . '/db.php';

// Self-migrating: in case this page is opened before any newsletter has ever been sent.
$conn->query("CREATE TABLE IF NOT EXISTS newsletter_sends (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(255) NOT NULL,
    body LONGTEXT,
    recipient_count INT DEFAULT 0,
    sent_count INT DEFAULT 0,
    failed_count INT DEFAULT 0,
    sent_by VARCHAR(100) DEFAULT '',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

$history = [];
$res = $conn->query("SELECT id, subject, body, recipient_count, sent_count, failed_count, sent_by, created_at FROM newsletter_sends ORDER BY created_at DESC LIMIT 50");
while ($row = $res->fetch_assoc()) { $history[] = $row; }
?>
<?php
$pageTitle    = t('hist.title');
$pageSubtitle = t('hist.subtitle');
require __DIR__ . '/partials/header.php';
?>

        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-history mr-1"></i><?= te('hist.list') ?><span class="badge badge-light ml-1"><?= te('common.items', ['n' => count($history)]) ?></span></h3>
            <div class="card-tools">
              <a href="send-newsletter.php" class="btn btn-sm btn-primary"><i class="fas fa-paper-plane"></i> <?= te('hist.new') ?></a>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap mb-0">
              <thead>
                <tr>
                  <th><?= te('send.subject') ?></th>
                  <th><?= te('hist.col_sent_at') ?></th>
                  <th><?= te('hist.col_sender') ?></th>
                  <th><?= te('hist.col_result') ?></th>
                  <th class="text-right"><?= te('hist.col_content') ?></th>
                </tr>
              </thead>
              <tbody>
              <?php if (empty($history)): ?>
                <tr><td colspan="5" class="empty-row"><i class="fas fa-folder-open"></i><?= te('hist.empty') ?></td></tr>
              <?php else: foreach ($history as $h): ?>
                <tr>
                  <td><div class="history-subject" title="<?= htmlspecialchars($h['subject']) ?>"><?= htmlspecialchars($h['subject']) ?></div></td>
                  <td><?= htmlspecialchars(date('Y/m/d H:i', strtotime($h['created_at']))) ?></td>
                  <td><?= $h['sent_by'] !== '' ? htmlspecialchars($h['sent_by']) : '<span class="text-muted">—</span>' ?></td>
                  <td>
                    <span class="badge badge-success"><i class="fas fa-check"></i> <?= te('hist.sent', ['n' => (int)$h['sent_count']]) ?></span>
                    <?php if ($h['failed_count'] > 0): ?>
                      <span class="badge badge-danger"><i class="fas fa-exclamation-triangle"></i> <?= te('hist.failed', ['n' => (int)$h['failed_count']]) ?></span>
                    <?php endif; ?>
                    <span class="badge badge-light"><?= te('hist.targets', ['n' => (int)$h['recipient_count']]) ?></span>
                  </td>
                  <td class="text-right">
                    <button type="button" class="btn btn-xs btn-outline-primary history-preview"
                      data-subject="<?= htmlspecialchars($h['subject']) ?>"
                      data-meta="<?= htmlspecialchars(date('Y/m/d H:i', strtotime($h['created_at']))) ?><?= $h['sent_by'] !== '' ? te('common.dot') . htmlspecialchars($h['sent_by']) : '' ?>"
                      data-body="<?= base64_encode($h['body']) ?>"><i class="fas fa-eye"></i> <?= te('hist.preview') ?></button>
                  </td>
                </tr>
              <?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Preview modal -->
        <div class="modal fade" id="historyModal" tabindex="-1" role="dialog" aria-labelledby="historyModalSubject" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <div>
                  <small class="d-block text-white-50"><?= te('hist.preview_title') ?></small>
                  <h5 class="modal-title" id="historyModalSubject"></h5>
                  <small class="d-block" id="historyModalMeta"></small>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="<?= te('common.close') ?>"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body p-0">
                <iframe class="history-frame" id="historyModalFrame" title="<?= te('hist.preview_frame') ?>" sandbox=""></iframe>
              </div>
            </div>
          </div>
        </div>

<?php require __DIR__ . '/partials/footer.php'; ?>
<script>
  // Body is passed as base64 to avoid HTML-attribute escaping issues with
  // the stored rich-text markup.
  function b64DecodeUnicode(str) {
    return decodeURIComponent(atob(str).split('').map(function (c) {
      return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
  }

  const historyModalSubject = document.getElementById('historyModalSubject');
  const historyModalMeta = document.getElementById('historyModalMeta');
  const historyModalFrame = document.getElementById('historyModalFrame');

  document.querySelectorAll('.history-preview').forEach(function (btn) {
    btn.addEventListener('click', function () {
      historyModalSubject.textContent = btn.dataset.subject;
      historyModalMeta.textContent = btn.dataset.meta;
      // srcdoc (not innerHTML) so the full branded template — including the
      // gradient header and footer — renders exactly as it was sent, inside
      // its own isolated document rather than being flattened into this page.
      historyModalFrame.srcdoc = btn.dataset.body ? b64DecodeUnicode(btn.dataset.body) : '';
      $('#historyModal').modal('show');
    });
  });

  $('#historyModal').on('hidden.bs.modal', function () {
    historyModalFrame.srcdoc = '';
  });
</script>
</body>
</html>
