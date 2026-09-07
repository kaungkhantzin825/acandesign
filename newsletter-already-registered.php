<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>登録済みのメールアドレスです | A CAN SOLUTIONS</title>
  <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <style>
    *, *::before, *::after { box-sizing: border-box; }

    .result-section {
      position: relative;
      min-height: calc(100vh - 60px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 80px 24px;
      background: linear-gradient(160deg, #f0f4ff 0%, #f8f9ff 45%, #fff8ef 100%);
      overflow: hidden;
    }

    .result-section::before,
    .result-section::after {
      content: '';
      position: absolute;
      border-radius: 50%;
      filter: blur(60px);
      z-index: 0;
    }

    .result-section::before {
      width: 340px;
      height: 340px;
      background: rgba(18, 73, 158, 0.10);
      top: -80px;
      left: -100px;
    }

    .result-section::after {
      width: 300px;
      height: 300px;
      background: rgba(245, 158, 11, 0.12);
      bottom: -90px;
      right: -80px;
    }

    .result-card {
      position: relative;
      z-index: 1;
      background: #fff;
      border-radius: 24px;
      box-shadow: 0 20px 60px rgba(18, 73, 158, 0.12), 0 2px 8px rgba(0,0,0,0.04);
      padding: 3.5rem 3rem;
      max-width: 560px;
      width: 100%;
      text-align: center;
      animation: result-pop 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    @keyframes result-pop {
      from { opacity: 0; transform: translateY(16px) scale(0.98); }
      to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    .result-icon {
      width: 92px;
      height: 92px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.75rem;
      background: linear-gradient(145deg, #fff3d9, #ffe4b3);
      box-shadow: 0 10px 26px rgba(245, 158, 11, 0.22);
    }

    .result-icon svg {
      width: 40px;
      height: 40px;
      stroke: #d97706;
      fill: none;
      stroke-width: 2.1;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .result-title {
      font-size: 1.55rem;
      font-weight: 900;
      margin: 0 0 0.9rem;
      color: #0a0f2e;
      letter-spacing: 0.01em;
    }

    .result-text {
      width: 100%;
      max-width: 400px;
      margin: 0 auto 1.5rem;
      font-size: 0.95rem;
      line-height: 1.9;
      color: #4b5563;
      word-break: normal;
      overflow-wrap: break-word;
      text-align: center;
    }

    .result-email {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.9rem;
      font-weight: 700;
      color: #12499e;
      background: #f0f4ff;
      border: 1px solid #dbe4f9;
      padding: 0.55rem 1.2rem;
      border-radius: 999px;
      margin-bottom: 2rem;
      word-break: break-all;
    }

    .result-email svg {
      width: 16px;
      height: 16px;
      stroke: #12499e;
      fill: none;
      stroke-width: 2.2;
      stroke-linecap: round;
      stroke-linejoin: round;
      flex-shrink: 0;
    }

    .result-note {
      font-size: 0.85rem;
      line-height: 1.85;
      color: #6b7280;
      background: #f9fafb;
      border-radius: 12px;
      padding: 1rem 1.25rem;
      margin: 0 0 2.25rem;
      text-align: center;
      word-break: keep-all;
    }

    .result-note a {
      color: #12499e;
      font-weight: 700;
      text-decoration: none;
      white-space: nowrap;
    }

    .result-note a:hover { text-decoration: underline; }

    .result-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
      justify-content: center;
    }

    .result-btn {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.85rem 2rem;
      border-radius: 999px;
      font-size: 0.92rem;
      font-weight: 700;
      text-decoration: none;
      transition: opacity 0.2s, transform 0.2s;
      font-family: inherit;
    }

    .result-btn:hover { opacity: 0.88; transform: translateY(-1px); }

    .result-btn--primary { background: #12499e; color: #fff; }
    .result-btn--ghost { background: #fff; color: #12499e; border: 1.5px solid #d1d9e6; }

    @media (max-width: 600px) {
      .result-card { width: calc(100% - 24px); padding: 2.25rem 1.5rem 2rem; }
      .result-title { font-size: 1.3rem; }
      .result-text { font-size: 0.85rem; line-height: 1.8; }
      .result-note { font-size: 0.78rem; }
    }
  </style>
</head>
<body>
  <?php include 'menu.php'; ?>

  <section class="result-section">
    <div class="result-card">
      <div class="result-icon">
        <svg viewBox="0 0 24 24"><path d="M12 9v4"></path><path d="M12 17h.01"></path><path d="M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"></path></svg>
      </div>
      <h1 class="result-title">登録済みのメールアドレスです</h1>
      <p class="result-text">
        このメールアドレスは、すでにメールマガジンにご登録<br />
        いただいています。重複してのご登録はできません。
      </p>
      <?php if (!empty($_GET['email'])): ?>
        <div class="result-email">
          <svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="m22 6-10 7L2 6"></path></svg>
          <?= htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8') ?>
        </div>
      <?php endif; ?>
      <p class="result-note">
        配信内容の変更やご登録の解除をご希望の場合は、<br />
        お手数ですが <a href="mailto:info@acan-sol.com">info@acan-sol.com</a> までご連絡ください。
      </p>
      <div class="result-actions">
        <a href="myanmar-situation.php" class="result-btn result-btn--primary">トップページへ戻る</a>
        <a href="mailto:info@acan-sol.com" class="result-btn result-btn--ghost">お問い合わせ</a>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</body>
</html>
