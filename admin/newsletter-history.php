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
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ニュースレター送信履歴 | A CAN SOLUTIONS 管理画面</title>
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

    .wrap { max-width: 920px; margin: 0 auto; padding: 2.25rem 1.5rem 3.5rem; }

    .page-head {
      display: flex;
      align-items: center;
      gap: 1.1rem;
      flex-wrap: wrap;
      margin-bottom: 1.75rem;
    }
    .page-head__icon {
      width: 54px;
      height: 54px;
      border-radius: 16px;
      background: linear-gradient(135deg, #12499e, #1a5fd4);
      box-shadow: 0 6px 16px rgba(18,73,158,0.3);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      flex-shrink: 0;
    }
    .page-head__text { flex: 1; min-width: 200px; }
    .page-head h1 {
      font-size: 1.4rem;
      font-weight: 900;
      margin: 0 0 0.25rem;
      color: #0d2a63;
    }
    .page-head p {
      font-size: 0.85rem;
      color: #6b7280;
      margin: 0;
    }
    .page-head__stats {
      display: flex;
      gap: 0.6rem;
      flex-wrap: wrap;
    }
    .stat-chip {
      background: #fff;
      border: 1px solid #eef1f7;
      border-radius: 12px;
      padding: 0.5rem 1rem;
      text-align: center;
      min-width: 76px;
      box-shadow: 0 2px 8px rgba(18,73,158,0.05);
    }
    .stat-chip strong {
      display: block;
      font-size: 1.1rem;
      font-weight: 900;
      color: #12499e;
      line-height: 1.2;
    }
    .stat-chip span {
      font-size: 0.68rem;
      color: #9ca3af;
      font-weight: 700;
    }

    .card {
      background: #fff;
      border: 1px solid #eef1f7;
      border-radius: 16px;
      box-shadow: 0 2px 12px rgba(18,73,158,0.06);
      padding: 1.75rem;
      margin-bottom: 1.5rem;
    }

    .card__title {
      font-size: 1rem;
      font-weight: 900;
      margin: 0 0 1.25rem;
      display: flex;
      align-items: center;
      gap: 0.65rem;
      color: #0d2a63;
    }

    .card__icon {
      width: 30px;
      height: 30px;
      border-radius: 9px;
      background: #eef3fc;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.95rem;
      flex-shrink: 0;
    }

    .empty-row {
      text-align: center;
      color: #9ca3af;
      padding: 2.5rem 1rem;
      font-size: 0.85rem;
    }
    .empty-row__icon { font-size: 1.6rem; display: block; margin-bottom: 0.5rem; opacity: 0.6; }

    .history-list {
      border: 1px solid #eef1f7;
      border-radius: 12px;
      max-height: none;
    }

    .history-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      padding: 0.95rem 1.1rem;
      border-bottom: 1px solid #f2f4f8;
      transition: background 0.15s;
    }

    .history-row:last-child { border-bottom: none; }
    .history-row:hover { background: #f8faff; }

    .history-meta { min-width: 0; display: flex; flex-direction: column; gap: 0.35rem; }
    .history-subject {
      font-weight: 700;
      color: #1a1a2e;
      font-size: 0.9rem;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 420px;
    }
    .history-date { font-size: 0.74rem; color: #9ca3af; }
    .history-badges { display: flex; gap: 0.4rem; flex-wrap: wrap; }

    .pill {
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      padding: 0.2rem 0.65rem;
      border-radius: 999px;
      font-size: 0.72rem;
      font-weight: 700;
    }
    .pill-success { background: #eafaf1; color: #1e7e34; }
    .pill-fail { background: #fdecea; color: #b42318; }
    .pill-neutral { background: #eef1f7; color: #6b7280; }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.7rem 1.5rem;
      border-radius: 999px;
      font-size: 0.88rem;
      font-weight: 700;
      font-family: inherit;
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: transform 0.15s, box-shadow 0.15s, opacity 0.15s, background 0.15s;
    }
    .btn:hover { opacity: 0.92; }
    .btn-default { background: #eef1f7; color: #1a1a2e; border-radius: 999px; }
    .btn-default:hover { background: #e3e9f5; }
    .btn-sm { padding: 0.4rem 0.95rem; font-size: 0.78rem; }

    .history-modal {
      position: fixed;
      inset: 0;
      background: rgba(13,42,99,0.5);
      backdrop-filter: blur(2px);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      z-index: 50;
    }

    .history-modal__inner {
      background: #fff;
      border-radius: 16px;
      max-width: 680px;
      width: 100%;
      max-height: 85vh;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    }

    .history-modal__head {
      background: linear-gradient(135deg, #12499e, #1a5fd4);
      color: #fff;
      padding: 1.25rem 1.75rem;
      position: relative;
      flex-shrink: 0;
    }

    .history-modal__eyebrow {
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      opacity: 0.75;
      margin: 0 0 0.35rem;
    }

    .history-modal__close {
      position: absolute;
      top: 1rem;
      right: 1rem;
      border: none;
      background: rgba(255,255,255,0.18);
      color: #fff;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.15s;
    }
    .history-modal__close:hover { background: rgba(255,255,255,0.3); }

    .history-modal__subject {
      font-size: 1.1rem;
      font-weight: 900;
      margin: 0 0 0.3rem;
      padding-right: 2.5rem;
    }

    .history-modal__meta {
      font-size: 0.78rem;
      opacity: 0.85;
      margin: 0;
    }

    .history-modal__body-wrap {
      padding: 0;
      background: #f5f7fb;
      flex: 1;
      min-height: 0;
    }

    .history-modal__frame {
      display: block;
      width: 100%;
      height: 100%;
      min-height: 420px;
      border: none;
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
      <a href="dashboard.php">ダッシュボードへ戻る</a>
      <a href="send-newsletter.php">ニュースレター送信</a>
      <span><?= htmlspecialchars($_SESSION['admin_username'] ?? '') ?></span>
      <a href="logout.php">ログアウト</a>
    </div>
  </div>

  <div class="wrap">
    <div class="page-head">
      <div class="page-head__icon">🕓</div>
      <div class="page-head__text">
        <h1>ニュースレター送信履歴</h1>
        <p>これまでに送信したニュースレターの件名・結果・本文を確認できます。</p>
      </div>
      <div class="page-head__stats">
        <div class="stat-chip"><strong><?= count($history) ?></strong><span>送信件数</span></div>
      </div>
    </div>

    <div class="card">
      <p class="card__title"><span class="card__icon">🕓</span>送信履歴</p>
      <div class="history-list">
        <?php if (empty($history)): ?>
          <div class="empty-row"><span class="empty-row__icon">🗂️</span>まだ送信履歴がありません。</div>
        <?php else: foreach ($history as $h): ?>
          <div class="history-row">
            <div class="history-meta">
              <span class="history-subject"><?= htmlspecialchars($h['subject']) ?></span>
              <span class="history-date"><?= htmlspecialchars(date('Y/m/d H:i', strtotime($h['created_at']))) ?><?= $h['sent_by'] !== '' ? '・' . htmlspecialchars($h['sent_by']) : '' ?></span>
              <div class="history-badges">
                <span class="pill pill-success">✅ 送信 <?= (int)$h['sent_count'] ?></span>
                <?php if ($h['failed_count'] > 0): ?>
                  <span class="pill pill-fail">⚠️ 失敗 <?= (int)$h['failed_count'] ?></span>
                <?php endif; ?>
                <span class="pill pill-neutral">対象 <?= (int)$h['recipient_count'] ?>件</span>
              </div>
            </div>
            <button type="button" class="btn btn-default btn-sm history-preview"
              data-subject="<?= htmlspecialchars($h['subject']) ?>"
              data-meta="<?= htmlspecialchars(date('Y/m/d H:i', strtotime($h['created_at']))) ?>"
              data-body="<?= base64_encode($h['body']) ?>">👁 プレビュー</button>
          </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </div>

  <div class="history-modal" id="historyModal" style="display:none;">
    <div class="history-modal__inner">
      <div class="history-modal__head">
        <button type="button" class="history-modal__close" id="historyModalClose">×</button>
        <p class="history-modal__eyebrow">送信済みメールのプレビュー</p>
        <p class="history-modal__subject" id="historyModalSubject"></p>
        <p class="history-modal__meta" id="historyModalMeta"></p>
      </div>
      <div class="history-modal__body-wrap">
        <iframe class="history-modal__frame" id="historyModalFrame" title="メールプレビュー" sandbox=""></iframe>
      </div>
    </div>
  </div>

  <script>
    // Body is passed as base64 to avoid HTML-attribute escaping issues with
    // the stored rich-text markup.
    function b64DecodeUnicode(str) {
      return decodeURIComponent(atob(str).split('').map(function (c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
      }).join(''));
    }

    const historyModal = document.getElementById('historyModal');
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
        historyModal.style.display = 'flex';
      });
    });

    document.getElementById('historyModalClose').addEventListener('click', function () {
      historyModal.style.display = 'none';
    });
    historyModal.addEventListener('click', function (e) {
      if (e.target === historyModal) historyModal.style.display = 'none';
    });
  </script>
</body>
</html>
