<?php
$p = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['_editing'])) {
    foreach (['会社名','ご担当者名','メールアドレス','電話番号','お問い合わせ内容'] as $k) {
        $p[$k] = htmlspecialchars($_POST[$k] ?? '', ENT_QUOTES, 'UTF-8');
    }
}

$errorMessages = [
    'required' => '必須項目が入力されていません。空白のみの入力は無効です。',
    'email'    => 'メールアドレスの形式が正しくありません。ご確認の上、再度入力してください。',
    'phone'    => '電話番号は半角数字のみで入力してください（ハイフンなし）。',
];
$errorMessage = $errorMessages[$_GET['error'] ?? ''] ?? null;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A CAN SOLUTIONSの営業資料をダウンロードいただけます。会社情報・サービス資料を無料でご提供しています。" />
  <meta name="theme-color" content="#ffffff" />
  <title>営業資料ダウンロード | A CAN SOLUTIONS</title>
  <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <style>
    /* ── Nav overrides ── */
    .site-header__nav { gap: 2.75rem;
    margin-left: 8.5rem; }
    .site-header__nav a { text-decoration: none; color: var(--color-ink); font-size: 15px; font-weight: bold; font-family: "Anonymous Pro", monospace; white-space: nowrap; transition: color var(--transition); }
    .site-header__cta { display: inline-flex; align-items: center; gap: 0.3rem; padding: 0.45rem 1.1rem; background: #12499e; color: #fff; text-decoration: none; border-radius: 999px; font-size: 16px; font-weight: 700; font-family: "Anonymous Pro", monospace; white-space: nowrap; flex-shrink: 0; transition: background var(--transition), opacity var(--transition); }
    .site-header__cta--dl { background: #dc2626; }
    .site-header__cta--dl:hover { background: #b91c1c; }
    .site-header__cta--dl .site-header__cta-icon { color: #dc2626; }

    *, *::before, *::after { box-sizing: border-box; }

    body {
      font-family: "Noto Sans JP", sans-serif;
      background: #ffffff;
      color: #1a1a2e;
      margin: 0;
      padding: 60px 0 0;
      line-height: 1.7;
      overflow-x: hidden;
    }

    img { max-width: 100%; height: auto; display: block; }
    a { color: inherit; }

    /* ══════════════════════════════
       HERO
    ══════════════════════════════ */
    .dl-hero {
      display: block;
      width: 86%;
      margin: 0 auto;
      background: #ffffff;
      line-height: 0;
      padding: 0;
    }

    .dl-hero__img {
      display: block;
      width: 100% !important;
      max-width: 100% !important;
      height: auto;
      margin: 0;
      padding: 0;
    }

    /* LEFT: character */
    .dl-hero__char {
      flex-shrink: 0;
      width: 190px;
      align-self: flex-end;
      margin-right: 1.5rem;
    }

    .dl-hero__char img {
      width: 100%;
      height: auto;
      display: block;
    }

    /* CENTER: text */
    .dl-hero__text {
      flex: 1;
      padding: 2.5rem 2rem 2.5rem 0;
      min-width: 0;
    }

    .dl-hero__label {
      font-family: "Anonymous Pro", monospace;
      font-size: 1.7rem;
      font-weight: 700;
      color: #12499e;
      margin: 0 0 0.1rem;
      letter-spacing: 0.04em;
    }

    .dl-hero__title {
      font-size: 1.75rem;
      font-weight: 900;
      color: #1a1a2e;
      margin: 0 0 1rem;
      line-height: 1.25;
    }

    .dl-hero__desc {
      font-size: 0.84rem;
      color: #374151;
      line-height: 1.9;
      margin: 0 0 1.4rem;
    }

    .dl-hero__badges {
      display: flex;
      flex-direction: column;
      gap: 0.6rem;
    }

    .dl-hero__badge {
      display: inline-flex;
      align-items: flex-start;
      gap: 0.5rem;
      font-size: 0.78rem;
      font-weight: 700;
      color: #374151;
    }

    .dl-hero__badge-icon {
      width: 32px;
      height: 32px;
      border: 1.5px solid #cbd5e1;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.95rem;
      flex-shrink: 0;
      background: #fff;
    }

    .dl-hero__badge-text {
      line-height: 1.5;
      padding-top: 0.2rem;
    }

    /* RIGHT: document images */
    .dl-hero__docs {
      flex-shrink: 0;
      display: flex;
      align-items: flex-end;
      gap: 0.6rem;
      padding: 1.5rem 2rem 0 1rem;
      align-self: stretch;
      align-items: center;
    }

    .dl-hero__doc-img {
      border-radius: 4px;
      object-fit: cover;
    }

    .dl-hero__doc-img:nth-child(1) { width: 140px; }
    .dl-hero__doc-img:nth-child(2) { width: 155px; }
    .dl-hero__doc-img:nth-child(3) { width: 80px; border-radius: 50%; }

    /* ══════════════════════════════
       BREADCRUMB
    ══════════════════════════════ */
    .dl-breadcrumb {
      background: #fff;
      /* border-bottom: 1px solid #e2e8f0; */
      padding: 0.55rem 0;
      width: 86%;
      margin: 0 auto;
      font-size: 0.78rem;
      /* color: #9ca3af; */
    }

    .dl-breadcrumb a {
      color: #12499e;
      text-decoration: none;
    }

    .dl-breadcrumb a:hover { text-decoration: underline; }

    /* ══════════════════════════════
       BODY GRID
    ══════════════════════════════ */
    .dl-body {
      width: 86%;
      margin: 2px auto 0rem;
      display: flex;
      gap: 1.5rem;
      align-items: start;
      justify-content: center;
    }

    /* ══════════════════════════════
       DOWNLOAD LIST PANEL
    ══════════════════════════════ */
    .dl-panel {
      background: #fff;
      border: 1.5px solid black;
      border-radius: 12px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .dl-panel__head {
      padding: 9px 1.4rem 0;
      font-size: 1.1rem;
      font-weight: 700;
      color: #1a1a2e;
      display: flex;
      align-items: center;
      gap: 0.6rem;
      border-bottom: none;
      line-height: 1;
    }

    .dl-panel__head-icon {
      width: 36px;
      height: 36px;
      /* background: #f0f4ff; */
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    .dl-panel__sub {
      padding: 0 1.4rem 0.8rem calc(1.4rem + 36px + 0.6rem);
      font-size: 0.83rem;
      color: #6b7280;
      /* border-bottom: 1px solid #e8edf5; */
    }

    .dl-panel__scroll {
      overflow: visible;
      flex: 1;
      max-height: none;
    }

    .dl-panel__scroll::-webkit-scrollbar { width: 14px; }
    .dl-panel__scroll::-webkit-scrollbar-track { background: #ffffff; border-left: 1px solid #e0e0e0; }
    .dl-panel__scroll::-webkit-scrollbar-thumb { background: #5a5a5a; border-radius: 999px; border: 3px solid #ffffff; }
    .dl-panel__scroll::-webkit-scrollbar-thumb:hover { background: #333; }
    .dl-panel__scroll::-webkit-scrollbar-button:single-button { background-color: #ffffff; border-left: 1px solid #e0e0e0; border-bottom: 1px solid #e0e0e0; display: block; height: 18px; background-repeat: no-repeat; background-position: center; background-size: 10px 8px; }
    .dl-panel__scroll::-webkit-scrollbar-button:single-button:vertical:decrement { background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 8'><path d='M5 0L0 8h10z' fill='%23333'/></svg>"); }
    .dl-panel__scroll::-webkit-scrollbar-button:single-button:vertical:increment { background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 8'><path d='M5 8L0 0h10z' fill='%23333'/></svg>"); border-bottom: none; border-top: 1px solid #e0e0e0; }

    /* Download Card */
    .dl-card {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      padding: 1.2rem 1.4rem;
      border-bottom: 1px solid #eef1f7;
      transition: background 0.15s;
    }

    .dl-card:last-child { border-bottom: none; }
    .dl-card:hover { background: #fff; }

    .dl-card__thumb {
      width: 140px;
      height: 100px;
      object-fit: cover;
      border-radius: 32px;
      flex-shrink: 0;
      border: 1px solid #d1d9e6;
    }

    .dl-card__info { flex: 1; min-width: 0; }

    .dl-card__title {
      font-size: 1rem;
      font-weight: 700;
      color: #1a1a2e;
      margin: 0 0 0.4rem;
      line-height: 1.4;
    }

    .dl-card__desc {
      font-size: 0.82rem;
      color: #555e72;
      margin: 0 0 0.4rem;
      line-height: 1.65;
    }

    .dl-card__meta {
      font-size: 0.75rem;
      color: #9ca3af;
      font-family: "Roboto Mono", monospace;
    }

    .dl-card__btn {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: #1a5fd4;
      color: #fff;
      padding: 0.7rem 1.6rem;
      border-radius: 999px;
      font-size: 0.9rem;
      font-weight: 700;
      text-decoration: none;
      white-space: nowrap;
      flex-shrink: 0;
      transition: background 0.2s;
    }

    .dl-card__btn:hover { background: #1450b8; }

    .dl-card__btn img {
      width: 16px;
      height: 16px;
      flex-shrink: 0;
    }

    /* ══════════════════════════════
       SIDEBAR
    ══════════════════════════════ */
    .dl-sidebar {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    /* Merits */
    .dl-merits {
      background: #f0f4ff;
      padding: 1.5rem;
      border-radius: 8px;
      width: 364px;
    }

    .dl-merits__head {
      color: #12499e;
      padding: 0 0 0.9rem 0;
      font-size: 15px;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 700;
      border-bottom: none;
    }

    .dl-merits__list {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .dl-merits__item {
      display: flex;
      align-items: flex-start;
      gap: 0.85rem;
      padding: 0.65rem 0;
    }

    .dl-merits__icon {
      width: 42px;
      height: 42px;
      flex-shrink: 0;
      object-fit: contain;
    }

    .dl-merits__body strong {
      display: block;
      font-size: 12px;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 700;
      color: #1a1a2e;
      margin-bottom: 0;
      line-height: 1.2;
    }

    .dl-merits__body span {
      font-size: 0.75rem;
    color: #6b7280;
    line-height: 18px;
    display: block;
    }

    /* Sidebar CTA image card */
    .dl-sidebar-cta {
      border-radius: 8px;
      overflow: hidden;
      position: relative;
      min-height: 185px;
    }

    .dl-sidebar-cta__bg {
      width: 100%;
      height: 100%;
      min-height: 185px;
      object-fit: cover;
      display: block;
      /* filter: brightness(0.42); */
      position: absolute;
      inset: 0;
    }

    .dl-sidebar-cta__content {
      position: relative;
      z-index: 2;
      padding: 1.2rem 1rem 1rem 37%;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      min-height: 185px;
      gap: 0.6rem;
    }

    .dl-sidebar-cta__text {
      color: #fff;
      font-size: 0.82rem;
      font-weight: 700;
      line-height: 1.6;
      text-align: right;
    }

    .dl-sidebar-cta__btn {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: white;
      border: none;
          color: black;
      padding: 0.55rem 1.2rem;
      border-radius: 6px;
      font-size: 0.82rem;
      font-weight: 700;
      text-decoration: none;
      align-self: stretch;
      justify-content: center;
      transition: background 0.2s;
    }

    .dl-sidebar-cta__btn:hover { background: rgba(255,255,255,0.35); }

    .dl-panel__notice {
      /* border-top: 1px solid #bfdbfe; */
      background: none;
      padding: 0.75rem 1.4rem;
      font-size: 12px;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 700;
      color: #1e40af;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
    }

    .dl-panel__notice:hover {
      text-decoration: underline;
    }

    .dl-panel__notice-icon {
      width: 26px;
      height: 26px;
      background: #1a4fd4;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-weight: 900;
      font-size: 0.95rem;
      font-style: normal;
      flex-shrink: 0;
      line-height: 1;
    }

    /* ══════════════════════════════
       CONTACT SECTION
    ══════════════════════════════ */
    .dl-contact {
      width: 86%;
      max-width: 1200px;
      margin: 1rem auto 2rem;
      padding: 0 0 2rem;
      background: #F7F7F7;
      border-radius: 12px;
    }

    .dl-contact__title {
      text-align: left;
      font-size: 17px;
      font-weight: 700;
      font-family: "Noto Sans JP", sans-serif;
      color: #13499e;
      padding: 1rem 0 0 77px;
    }

    .dl-contact__cards {
      display: grid;
      grid-template-columns: 333px 333px;
      gap: 1.2rem;
      padding: 0.5rem 0 0 77px;
      justify-content: start;
    }
.site-footer {
    background: white;
    padding-block: 1.75rem;
}
    .dl-contact__card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 1.3rem 1.2rem;
      display: flex;
      align-items: flex-start;
      gap: 0.9rem;
    }

    .dl-contact__icon { width: 71px;  flex-shrink: 0; object-fit: contain; }

    .dl-contact__label {
      font-size: 15px;
      font-weight: 700;
      color: #13499e;
      margin: 0 0 0.15rem;
      font-family: "Noto Sans JP", sans-serif;
    }

    .dl-contact__hours {
      font-size: 13px;
      color: #9ca3af;
      margin: 0 0 0.2rem;
      font-family: "Anonymous Pro", monospace;
    }

    .dl-contact__value {
      font-size: 25px;
      font-weight: 400;
      color: #000000;
      margin: 0;
      line-height: 1.2;
      font-family: "Noto Sans JP", sans-serif;
    }

    .dl-contact__link {
      font-size: 23px;
      font-weight: 400;
      color: #000000;
      text-decoration: none;
      word-break: break-all;
      font-family: "Noto Sans JP", sans-serif;
    }

    .dl-contact__link:hover { 
      text-decoration: underline;
      color: #12499e;
    }

    /* ══════════════════════════════
       FOOTER
    ══════════════════════════════ */
    .dl-footer {
      background: #1a1a2e;
      margin-top: 2.5rem;
      padding: 1.8rem 2rem 1.2rem;
    }

    .dl-footer__links {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 0.5rem 1.8rem;
      margin-bottom: 1rem;
    }

    .dl-footer__links a {
      color: #9ca3af;
      text-decoration: none;
      font-size: 0.8rem;
      transition: color 0.2s;
    }

    .dl-footer__links a:hover { color: #fff; }

    .dl-footer__bottom {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1.5rem;
      flex-wrap: wrap;
    }

    .dl-footer__social {
      display: flex;
      gap: 0.7rem;
      align-items: center;
    }

    .dl-footer__social img {
      height: 22px;
      width: auto;
      border-radius: 3px;
      display: inline-block;
    }

    .dl-footer__copy {
      font-size: 0.74rem;
      color: #6b7280;
      display: flex;
      align-items: center;
      gap: 0.35rem;
    }

    .dl-footer__copy img { width: 16px; height: 16px; display: inline; }

    /* ══════════════════════════════
       RESPONSIVE
    ══════════════════════════════ */
    @media (min-width: 769px) {
      .dl-breadcrumb { margin: 0 auto; font-size: 0.78rem; margin-left: 249px; }
      .dl-panel { margin-left: 77px; width: 697px; min-height: 600px; height: auto; }
      .dl-contact { padding-left: 0; }
    }

    @media (max-width: 900px) {
      .dl-hero__char { width: 150px; }
      .dl-hero__doc-img:nth-child(1) { width: 110px; }
      .dl-hero__doc-img:nth-child(2) { width: 125px; }
      .dl-hero__doc-img:nth-child(3) { display: none; }
    }

    @media (max-width: 768px) {
      /* Hero */
      .dl-hero { width: 100%; }
      .dl-hero__inner { flex-wrap: wrap; min-height: auto; }
      .dl-hero__char { width: 140px; margin: 0 auto 0 0; }
      .dl-hero__text { padding: 1.5rem 1rem; width: 100%; }
      .dl-hero__docs { padding: 1rem; gap: 0.5rem; }
      .dl-hero__badges { flex-direction: row; flex-wrap: wrap; }

      /* Breadcrumb */
      .dl-breadcrumb { width: 92%; margin: 0 auto; }

      /* Body — stack panel + sidebar vertically */
      .dl-body {
        flex-direction: column;
        width: 92%;
        gap: 1rem;
        align-items: stretch;
      }

      /* Panel */
      .dl-panel {
        width: 100% !important;
        margin-left: 0 !important;
        height: auto !important;
      }

      /* Sidebar */
      .dl-sidebar { width: 100%; }
      .dl-merits { width: 100%; box-sizing: border-box; }
      .dl-sidebar-cta { width: 100%; }

      /* Contact */
      .dl-contact {
        width: 92%;
        padding: 1rem 1rem 2rem;
        box-sizing: border-box;
      }
      .dl-contact__title {
        padding: 0 0 0.5rem 0;
      }
      .dl-contact__cards { 
        grid-template-columns: 1fr;
        padding: 0;
      }

      /* Footer nav — prevent character-level wrapping */
      .site-footer__row { flex-direction: column; align-items: center; gap: 1rem; }
      .site-footer__nav { flex-wrap: wrap; justify-content: center; gap: 0.3rem 0.8rem; }
      .site-footer__link { white-space: nowrap; }
      .site-footer__divider { display: none; }
    }
  </style>
</head>
<body>

  <!-- ── Site Header ── -->
  <?php include 'menu.php'; ?>

  <!-- ── Hero ── -->
  <section class="dl-hero">
    <img src="assets/img/cc.png" alt="営業資料ダウンロード" class="dl-hero__img" />
  </section>


  <!-- ── Breadcrumb ── -->
  <nav class="dl-breadcrumb" aria-label="Breadcrumb">
   
  </nav>

  <!-- ── Main Body ── -->
  <div class="dl-body">

    <!-- Left: Contact Form Panel -->
    <div class="dl-panel">
      <div class="dl-panel__head">
        <span class="dl-panel__head-icon">
          <img src="assets/img/49833589-5606-4cb4-96c9-0bf2f899ec99.png" alt="" style="width: 42px;height: 38px;" />
        </span>
        お問い合わせフォーム
      </div>
      <div class="dl-panel__sub">下記フォームに入力の上、送信してください</div>
      <?php if ($errorMessage): ?>
        <div style="margin: 0 1.4rem 1rem; padding: 0.85rem 1.1rem; background: #fdecea; border: 1.5px solid #f5c6cb; border-radius: 8px; color: #b42318; font-size: 13px; font-family: 'Noto Sans JP', sans-serif; display: flex; align-items: flex-start; gap: 0.5rem;">
          <span style="flex-shrink: 0;">⚠️</span>
          <span><?= htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8') ?></span>
        </div>
      <?php endif; ?>
      <div class="dl-panel__scroll">
        
        <form action="confirm.php" method="POST" style="padding: 1.2rem 1.4rem;">
          
          <!-- 会社名 -->
          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-size: 15px; font-weight: 700; color: #1a1a2e; margin-bottom: 0.5rem; font-family: 'Noto Sans JP', sans-serif;">
              会社名 <span style="display: inline-block; color: #dc2626; font-size: 11px; padding: 0.15rem 0.5rem; border: 1.5px solid #dc2626; border-radius: 7px; margin-left: 0.3rem; font-weight: 400;">必須</span>
            </label>
            <input type="text" name="会社名" required pattern="\S.*" title="空白のみは入力できません" placeholder="会社名を入力して下さい" value="<?= $p['会社名'] ?? '' ?>"
              style="width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #d1d9e6; border-radius: 8px; font-size: 14px; font-family: 'Noto Sans JP', sans-serif; outline: none; transition: border-color 0.2s;"
              onfocus="this.style.borderColor='#12499e'" onblur="this.style.borderColor='#d1d9e6'" />
          </div>

          <!-- ご担当者名 -->
          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-size: 15px; font-weight: 700; color: #1a1a2e; margin-bottom: 0.5rem; font-family: 'Noto Sans JP', sans-serif;">
              ご担当者名 <span style="display: inline-block; color: #dc2626; font-size: 11px; padding: 0.15rem 0.5rem; border: 1.5px solid #dc2626; border-radius: 7px; margin-left: 0.3rem; font-weight: 400;">必須</span>
            </label>
            <input type="text" name="ご担当者名" required pattern="\S.*" title="空白のみは入力できません" placeholder="お名前を入力して下さい" value="<?= $p['ご担当者名'] ?? '' ?>"
              style="width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #d1d9e6; border-radius: 8px; font-size: 14px; font-family: 'Noto Sans JP', sans-serif; outline: none; transition: border-color 0.2s;"
              onfocus="this.style.borderColor='#12499e'" onblur="this.style.borderColor='#d1d9e6'" />
          </div>

          <!-- メールアドレス -->
          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-size: 15px; font-weight: 700; color: #1a1a2e; margin-bottom: 0.5rem; font-family: 'Noto Sans JP', sans-serif;">
              メールアドレス <span style="display: inline-block; color: #dc2626; font-size: 11px; padding: 0.15rem 0.5rem; border: 1.5px solid #dc2626; border-radius: 7px; margin-left: 0.3rem; font-weight: 400;">必須</span>
            </label>
            <input type="email" name="メールアドレス" required pattern="[^\s@]+@[^\s@]+\.[^\s@]+" title="正しいメールアドレスの形式で入力してください（例: name@example.com）" placeholder="例：name@example.com" value="<?= $p['メールアドレス'] ?? '' ?>"
              style="width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #d1d9e6; border-radius: 8px; font-size: 14px; font-family: 'Noto Sans JP', sans-serif; outline: none; transition: border-color 0.2s;"
              onfocus="this.style.borderColor='#12499e'" onblur="this.style.borderColor='#d1d9e6'" />
          </div>

          <!-- 電話番号 -->
          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-size: 15px; font-weight: 700; color: #1a1a2e; margin-bottom: 0.5rem; font-family: 'Noto Sans JP', sans-serif;">
              電話番号
            </label>
            <input type="tel" id="contactPhoneInput" name="電話番号" inputmode="numeric" pattern="[0-9]{9,11}" maxlength="11" title="ハイフンなしの半角数字9〜11桁で入力してください（例: 09012345678）" placeholder="例：09012345678（ハイフンなし）" value="<?= $p['電話番号'] ?? '' ?>"
              style="width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #d1d9e6; border-radius: 8px; font-size: 14px; font-family: 'Noto Sans JP', sans-serif; outline: none; transition: border-color 0.2s;"
              onfocus="this.style.borderColor='#12499e'" onblur="this.style.borderColor='#d1d9e6'"
              oninput="this.value=this.value.replace(/[^0-9]/g,'')" />
          </div>

          <!-- お問い合わせ内容 -->
          <div style="margin-bottom: 1.5rem;">
            <label style="display: block; font-size: 15px; font-weight: 700; color: #1a1a2e; margin-bottom: 0.5rem; font-family: 'Noto Sans JP', sans-serif;">
              お問い合わせ内容
            </label>
            <textarea name="お問い合わせ内容" rows="5" placeholder="お問い合わせ内容を入力してください"
              style="width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #d1d9e6; border-radius: 8px; font-size: 14px; font-family: 'Noto Sans JP', sans-serif; outline: none; transition: border-color 0.2s; resize: vertical;"
              onfocus="this.style.borderColor='#12499e'" onblur="this.style.borderColor='#d1d9e6'"><?= $p['お問い合わせ内容'] ?? '' ?></textarea>
          </div>

          <!-- プライバシーポリシー -->
          <div style="margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
            <input type="checkbox" id="privacy" required style="width: 18px; height: 18px; cursor: pointer;" />
            <label for="privacy" style="font-size: 14px; color: #1a1a2e; cursor: pointer; font-family: 'Noto Sans JP', sans-serif;">
              <a  style="color: #000000; text-decoration: none;">プライバシーポリシー</a>に同意します 
              <span style="display: inline-block; color: #dc2626; font-size: 11px; padding: 0.15rem 0.5rem; border: 1.5px solid #dc2626; border-radius: 7px; margin-left: 0.3rem; font-weight: 400;">必須</span>
            </label>
          </div>

          <!-- Submit Button -->
          <div style="display: flex; justify-content: center; margin-top: 1rem;">
            <button type="submit" 
              style="background: #1a5fd4; color: #fff; padding: 0.75rem 2.5rem; border: none; border-radius: 999px; font-size: 15px; font-weight: 700; font-family: 'Noto Sans JP', sans-serif; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; transition: background 0.2s;"
              onmouseover="this.style.background='#1450b8'" onmouseout="this.style.background='#1a5fd4'">
              確認画面へ進む
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>

          <!-- Honeypot anti-spam -->
          <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off" />
          
        </form>

      </div>
    
    </div>

    <!-- Right: Sidebar -->
    <aside class="dl-sidebar">

      <!-- Merits -->
      <div class="dl-merits">
        <div class="dl-merits__head">お問い合わせのメリット</div>
        <ul class="dl-merits__list">
          <li class="dl-merits__item">
            <img src="assets/img/6369fc6a-3bf6-4295-9cc8-4f66cc301a18.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>24時間以内にご返信します</strong>
              <span>専門スタッフが迅速に対応します</span>
            </div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/b59b74f3-a9ff-4188-80e6-3913ccbf1cb2.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>秘密厳守・安心のセキュリティ</strong>
              <span>情報は厳重に管理します</span>
            </div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/pim.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>最適なプランもご提案</strong>
              <span>課題に合わせた最適なサービスをご提案<br />します</span>
            </div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/d867edbb-0ebd-464d-86c2-71884e2f291c.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>PoC・テスト運用も可能</strong>
              <span>小規模試験から安心して進められます</span>
            </div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/290b4bd6-425f-4441-a35e-2cdddda2bd91.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>24時間×365日対応</strong>
              <span>いつでもお問い合わせください</span>
            </div>
          </li>
        </ul>
      </div>
 
      <!-- Myanmar CTA card -->
      <div class="dl-sidebar-cta">
        <img src="assets/img/uri_ifs___M_udNq4QUo4H9V2Dwz57bjkSbSM7n5L5NYbOnl6LDudbw.jpg" alt="ミャンマー" class="dl-sidebar-cta__bg" />
        <div class="dl-sidebar-cta__content">
          <p class="dl-sidebar-cta__text" style="text-align: left;">
            ミャンマー・日本のリソースを<br>活かし合わせ、<br>業務改革を支援します。
          </p>
          <a href="index.php#services" class="dl-sidebar-cta__btn">サービス一覧を見る <span>›</span></a>
        </div>
      </div>

    </aside>
  </div>

  <!-- ── Contact section ── -->
  <section class="dl-contact">
    <h2 class="dl-contact__title">お急ぎの方はこちらからもご連絡いただけます</h2>
    <div class="dl-contact__cards">

      <div class="dl-contact__card">
        <img src="assets/img/t.png" alt="電話" class="dl-contact__icon" />
        <div>
          <p class="dl-contact__label">電話で相談する</p>
          <p class="dl-contact__hours">平日 10:00〜17:00</p>
          <p class="dl-contact__value">(082)209-6669</p>
        </div>
      </div>

      <div class="dl-contact__card">
        <img src="assets/img/t (1).png" alt="メール" class="dl-contact__icon" />
        <div>
          <p class="dl-contact__label">メールで相談する</p>
       
          <a href="mailto:info@acan-sol.com" class="dl-contact__link">info@acan-sol.com</a>
        </div>
      </div>

    </div>
  </section>

  <!-- ── Footer ── -->
  <?php include 'footer.php'; ?>

</body>
</html>
