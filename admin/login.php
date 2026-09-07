<?php
session_start();

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
    $error = 'ユーザー名またはパスワードが正しくありません。';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ログイン | A CAN SOLUTIONS 管理画面</title>
  <link rel="icon" type="image/webp" href="../assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; }

    body {
      font-family: "Noto Sans JP", "Hiragino Kaku Gothic ProN", sans-serif;
      margin: 0;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #12499e 0%, #1a3a8a 50%, #0d2560 100%);
      padding: 20px;
    }

    .login-box { width: 100%; max-width: 380px; }

    .login-logo {
      text-align: center;
      color: #fff;
      margin-bottom: 1.5rem;
    }

    .login-logo img { width: 56px; height: 56px; margin-bottom: 0.5rem; }
    .login-logo strong { display: block; font-size: 1.15rem; font-weight: 900; }
    .login-logo span { display: block; font-size: 0.82rem; color: rgba(255,255,255,0.75); margin-top: 0.2rem; }

    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 10px 40px rgba(0,0,0,0.2);
      padding: 2rem 1.75rem;
    }

    .card p.msg {
      text-align: center;
      color: #6b7280;
      font-size: 0.9rem;
      margin: 0 0 1.5rem;
    }

    .alert-error {
      background: #fdecea;
      border: 1px solid #f5c6cb;
      color: #b42318;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      font-size: 0.85rem;
      margin-bottom: 1.25rem;
    }

    .field { margin-bottom: 1rem; }

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
  <div class="login-box">
    <div class="login-logo">
      <img src="../assets/img/logo.webp" alt="A CAN SOLUTIONS" />
      <strong>A CAN SOLUTIONS</strong>
      <span>管理画面</span>
    </div>
    <div class="card">
      <p class="msg">サインインしてください</p>

      <?php if (!empty($error)): ?>
        <div class="alert-error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="POST">
        <div class="field">
          <label for="username">ユーザー名</label>
          <input type="text" id="username" name="username" required autofocus value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" />
        </div>
        <div class="field">
          <label for="password">パスワード</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="btn-submit">ログイン</button>
      </form>
    </div>
  </div>
</body>
</html>
