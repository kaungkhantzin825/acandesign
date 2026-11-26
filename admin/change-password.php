<?php
require_once __DIR__ . '/db.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentPassword = $_POST['current_password'] ?? '';
    $newPassword     = $_POST['new_password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($currentPassword === '' || $newPassword === '' || $confirmPassword === '') {
        $error = t('pw.err_required');
    } elseif (mb_strlen($newPassword) < 8) {
        $error = t('pw.err_length');
    } elseif ($newPassword !== $confirmPassword) {
        $error = t('pw.err_mismatch');
    } else {
        $stmt = $conn->prepare("SELECT password FROM admin_users WHERE id = ?");
        $stmt->bind_param('i', $_SESSION['admin_id']);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_assoc();
        $stmt->close();

        if (!$row || !password_verify($currentPassword, $row['password'])) {
            $error = t('pw.err_current');
        } else {
            $newHash = password_hash($newPassword, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("UPDATE admin_users SET password = ? WHERE id = ?");
            $stmt->bind_param('si', $newHash, $_SESSION['admin_id']);
            $stmt->execute();
            $stmt->close();
            $success = t('pw.success');
        }
    }
}
?>
<?php
$pageTitle    = t('pw.title');
$pageSubtitle = t('pw.subtitle');
require __DIR__ . '/partials/header.php';
?>

        <div class="row">
          <div class="col-lg-6 col-md-8">

            <?php if ($success !== ''): ?>
              <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="<?= te('common.close') ?>">&times;</button>
                <i class="icon fas fa-check"></i><?= htmlspecialchars($success) ?>
              </div>
            <?php endif; ?>
            <?php if ($error !== ''): ?>
              <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="<?= te('common.close') ?>">&times;</button>
                <i class="icon fas fa-ban"></i><?= htmlspecialchars($error) ?>
              </div>
            <?php endif; ?>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-key mr-1"></i><?= te('pw.title') ?></h3>
              </div>
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="current_password"><?= te('pw.current') ?></label>
                    <div class="input-group">
                      <input type="password" id="current_password" name="current_password" class="form-control" required autofocus autocomplete="current-password" />
                      <div class="input-group-append"><span class="input-group-text"><i class="fas fa-lock"></i></span></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="new_password"><?= te('pw.new') ?></label>
                    <div class="input-group">
                      <input type="password" id="new_password" name="new_password" class="form-control" required minlength="8" autocomplete="new-password" />
                      <div class="input-group-append"><span class="input-group-text"><i class="fas fa-key"></i></span></div>
                    </div>
                    <small class="form-text text-muted"><?= te('pw.new_hint') ?></small>
                  </div>
                  <div class="form-group mb-0">
                    <label for="confirm_password"><?= te('pw.confirm') ?></label>
                    <div class="input-group">
                      <input type="password" id="confirm_password" name="confirm_password" class="form-control" required minlength="8" autocomplete="new-password" />
                      <div class="input-group-append"><span class="input-group-text"><i class="fas fa-check"></i></span></div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> <?= te('pw.submit') ?></button>
                </div>
              </form>
            </div>

          </div>
        </div>

<?php require __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
