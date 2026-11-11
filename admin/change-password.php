<?php
require_once __DIR__ . '/db.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentPassword = $_POST['current_password'] ?? '';
    $newPassword     = $_POST['new_password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($currentPassword === '' || $newPassword === '' || $confirmPassword === '') {
        $error = 'すべての項目を入力してください。';
    } elseif (mb_strlen($newPassword) < 8) {
        $error = '新しいパスワードは8文字以上で入力してください。';
    } elseif ($newPassword !== $confirmPassword) {
        $error = '新しいパスワードと確認用パスワードが一致しません。';
    } else {
        $stmt = $conn->prepare("SELECT password FROM admin_users WHERE id = ?");
        $stmt->bind_param('i', $_SESSION['admin_id']);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_assoc();
        $stmt->close();

        if (!$row || !password_verify($currentPassword, $row['password'])) {
            $error = '現在のパスワードが正しくありません。';
        } else {
            $newHash = password_hash($newPassword, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("UPDATE admin_users SET password = ? WHERE id = ?");
            $stmt->bind_param('si', $newHash, $_SESSION['admin_id']);
            $stmt->execute();
            $stmt->close();
            $success = 'パスワードを変更しました。';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>パスワード変更 | A CAN SOLUTIONS 管理画面</title>
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
    .wrap { max-width: 480px; margin: 0 auto; padding: 1.75rem 1.5rem 3rem; }

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

    .alert-error {
      background: #fdecea;
      border: 1px solid #f5c6cb;
      color: #b42318;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      font-size: 0.88rem;
      margin-bottom: 1.25rem;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
      padding: 1.5rem 1.5rem 1.75rem;
    }

    .field { margin-bottom: 1.1rem; }

    .field label {
      display: block;
      font-size: 0.82rem;
      font-weight: 700;
      color: #1a1a2e;
      margin-bottom: 0.4rem;
    }

    .field input {
      width: 100%;
      padding: 0.7rem 0.9rem;
      border: 1.5px solid #d1d9e6;
      border-radius: 8px;
      font-size: 0.92rem;
      font-family: inherit;
      outline: none;
      transition: border-color 0.2s;
    }

    .field input:focus { border-color: #12499e; }

    .field__hint { font-size: 0.75rem; color: #9ca3af; margin-top: 0.3rem; }

    .btn-submit {
      width: 100%;
      padding: 0.75rem;
      background: #12499e;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 0.95rem;
      font-weight: 700;
      font-family: inherit;
      cursor: pointer;
      transition: background 0.2s;
      margin-top: 0.5rem;
    }

    .btn-submit:hover { background: #0d3a80; }
  </style>
</head>
<body>

  <div class="topbar">
    <div class="topbar__brand">
      <img src="../assets/img/logo.webp" alt="" />
      A CAN SOLUTIONS 管理画面
    </div>
    <div class="topbar__right">
      <a href="dashboard.php">ダッシュボードへ戻る</a>
      <span><?= htmlspecialchars($_SESSION['admin_username'] ?? '') ?></span>
      <a href="logout.php">ログアウト</a>
    </div>
  </div>

  <div class="wrap">
    <h1>パスワード変更</h1>

    <?php if ($success !== ''): ?>
      <div class="alert-success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>
    <?php if ($error !== ''): ?>
      <div class="alert-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="card">
      <form method="POST">
        <div class="field">
          <label for="current_password">現在のパスワード</label>
          <input type="password" id="current_password" name="current_password" required autofocus />
        </div>
        <div class="field">
          <label for="new_password">新しいパスワード</label>
          <input type="password" id="new_password" name="new_password" required minlength="8" />
          <div class="field__hint">8文字以上で入力してください。</div>
        </div>
        <div class="field">
          <label for="confirm_password">新しいパスワード（確認）</label>
          <input type="password" id="confirm_password" name="confirm_password" required minlength="8" />
        </div>
        <button type="submit" class="btn-submit">パスワードを変更する</button>
      </form>
    </div>
  </div>
</body>
</html>
