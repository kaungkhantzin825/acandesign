<?php
session_start();
require_once __DIR__ . '/lang.php';

// If already logged in, redirect to dashboard
if (!empty($_SESSION['admin_logged_in'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/db.php';

    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, username, password FROM admin_users WHERE username = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_username'] = $row['username'];
                header('Location: dashboard.php');
                exit;
            }
        }
        $stmt->close();
    }
    $error = t('login.error');
}
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars(admin_lang()) ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <title><?= te('login.title') ?> | <?= te('app.name') ?></title>
  <link rel="icon" type="image/webp" href="../assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css" />
  <link rel="stylesheet" href="css/admin.css?v=4" />
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary elevation-3">
      <div class="card-header text-center py-4">
        <a href="../" class="login-brand">
          <img src="../assets/img/logo.webp" alt="A CAN SOLUTIONS" />
          <strong>A CAN SOLUTIONS</strong>
          <span><?= te('app.admin') ?></span>
        </a>
      </div>
      <div class="card-body">
        <p class="login-box-msg"><?= te('login.prompt') ?></p>

        <?php if (!empty($error)): ?>
          <div class="alert alert-danger py-2 small"><i class="fas fa-exclamation-circle mr-1"></i><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST">
          <div class="input-group mb-3">
            <input type="text" id="username" name="username" class="form-control" placeholder="<?= te('login.username') ?>" aria-label="<?= te('login.username') ?>" required autofocus autocomplete="username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" />
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-user"></span></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" id="password" name="password" class="form-control" placeholder="<?= te('login.password') ?>" aria-label="<?= te('login.password') ?>" required autocomplete="current-password" />
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt mr-1"></i><?= te('login.submit') ?></button>
        </form>
      </div>
    </div>

    <nav class="login-lang" aria-label="Language">
      <i class="fas fa-globe mr-1 text-white-50"></i>
      <?php $first = true; foreach (ADMIN_LANGS as $code => $name): ?>
        <?php if (!$first): ?><span class="sep">|</span><?php endif; $first = false; ?>
        <a href="<?= htmlspecialchars(admin_lang_url($code)) ?>" lang="<?= $code ?>" class="<?= admin_lang() === $code ? 'is-active' : '' ?>"><?= htmlspecialchars($name) ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
</body>
</html>
