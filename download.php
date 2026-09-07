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

    .dl-scroll-wrapper {
      position: relative;
      display: flex;
      flex: 1;
      min-height: 0;
    }

    .dl-panel__scroll {
      overflow-y: scroll;
      flex: 1;
      min-height: 0;
      scrollbar-width: none;
    }

    .dl-panel__scroll::-webkit-scrollbar { display: none; }

    /* Custom drag scrollbar — same style as the home page's Myanmar list */
    .dl-scrollbar {
      position: absolute;
      right: 6px;
      top: 10px;
      bottom: 10px;
      width: 8px;
      background: #f0e8d8;
      border-radius: 4px;
    }

    .dl-scrollbar__thumb {
      position: absolute;
      width: 8px;
      height: 40px;
      background: #c4944b;
      border-radius: 4px;
      top: 0;
      cursor: grab;
      transition: background 0.2s;
    }

    .dl-scrollbar__thumb:active { cursor: grabbing; }
    .dl-scrollbar__thumb:hover { background: #a07030; }

    /* Download Card */
    .dl-card {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      padding: 1.2rem 1.4rem;
      border-bottom: none;
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
      font-family: "Anonymous Pro", monospace;
      font-size: 13px;
      font-weight: 700;
      color: #1a1a2e;
      margin: 0 0 0.4rem;
      line-height: 1.4;
    }

    .dl-card__desc {
      font-family: "Anonymous Pro", monospace;
      font-size: 10px;
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
      max-width: 1168px;
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
      .dl-panel { margin-left: 77px; width: 697px; height: 600px; }
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

      /* Card list — cap height so it scrolls instead of showing every card,
         same pattern as custom scrollbar (no native scroll shown) */
      .dl-scroll-wrapper { display: block; }
      .dl-panel__scroll {
        max-height: 420px;
        overflow-y: auto;
      }
      .dl-scrollbar { display: block; }

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

      /* Download card — stack vertically on mobile */
      .dl-card {
        flex-direction: column;
        align-items: stretch;
        gap: 0.8rem;
      }
      .dl-card__thumb {
        width: 100%;
        height: 160px;
        border-radius: 12px;
      }
      .dl-card__btn {
        align-self: center;
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
    <img src="assets/img/asdasd (1) (1).png" alt="営業資料ダウンロード" class="dl-hero__img" />
  </section>


  <!-- ── Breadcrumb ── -->
  <nav class="dl-breadcrumb" aria-label="Breadcrumb">
    <a href="index.php">HOME</a> &rsaquo; 営業資料
  </nav>

  <!-- ── Main Body ── -->
  <div class="dl-body">

    <!-- Left: Download list -->
    <div class="dl-panel">
      <div class="dl-panel__head">
        <span class="dl-panel__head-icon"><img src="assets/img/cacb3930-f2a0-4c51-a120-b09b169a4851.png" alt="" style="width: 42px;height: 38px;" /></span>
        ダウンロード資料一覧
      </div>
      <div class="dl-panel__sub">資料の概要をご確認の上、ダウンロードしてください。</div>
      <div class="dl-scroll-wrapper">
      <div class="dl-panel__scroll" id="dl-scroll">

        <!-- Card 1 -->
        <div class="dl-card">
          <img src="assets/img/width_800 (1).png" alt="失敗しない海外BPO導入" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">失敗しない海外BPO導入</p>
            <p class="dl-card__desc">正しいステップで進めれば、海外旅行BPOは<br />企業の強い味方になります</p>
            <p class="dl-card__meta">PDF/6.3MB</p>
          </div>
          <a href="assets/pdf/失敗しない海外BPO導入.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>

        <!-- Card 2 -->
        <div class="dl-card">
          <img src="assets/img/2-p.png" alt="AIを入れるだけでは、会社は変わらない" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">AIを入れるだけでは、会社は変わらない</p>
            <p class="dl-card__desc">大切なのは仕事の「やり方そのもの」を<br />変えること</p>
            <p class="dl-card__meta">PDF/6.3MB</p>
          </div>
          <a href="assets/pdf/2-p.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>

        <!-- Card 3 -->
        <div class="dl-card">
          <img src="assets/img/3-p.png" alt="AIに任せる仕事、人が担う仕事" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">AIに任せる仕事、人が担う仕事</p>
            <p class="dl-card__desc">AIと人の強みを活かして、より価値のある<br />仕事へ</p>
            <p class="dl-card__meta">PDF/4.9MB</p>
          </div>
          <a href="assets/pdf/3-p.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>

        <!-- Card 4 -->
        <div class="dl-card">
          <img src="assets/img/4-p.png" alt="100%自動化を目指さない AI×BPOという考え方" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">100%自動化を目指さない AI×BPOという考え方</p>
            <p class="dl-card__desc">AIと人が一緒に成長し、より価値のある<br />仕事へ</p>
            <p class="dl-card__meta">PDF/5.2MB</p>
          </div>
          <a href="assets/pdf/4-p.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>

        <!-- Card 5 -->
        <div class="dl-card">
          <img src="assets/img/5-p.png" alt="AIエージェントで、仕事はどう変わるのか?" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">AIエージェントで、仕事はどう変わるのか?</p>
            <p class="dl-card__desc">AIが「考え、動き、仕事を進める」時代へ</p>
            <p class="dl-card__meta">PDF/5.0MB</p>
          </div>
          <a href="assets/pdf/5-p.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>

        <!-- Card 6 -->
        <div class="dl-card">
          <img src="assets/img/6-p.png" alt="AI時代に企業が本当に育てるべき人材とは?" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">AI時代に企業が本当に育てるべき人材とは?</p>
            <p class="dl-card__desc">AIが進化するほど、人の価値は<br />「考える力」にシフトする</p>
            <p class="dl-card__meta">PDF/4.8MB</p>
          </div>
          <a href="assets/pdf/6-p.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>

          <div class="dl-card">
          <img src="assets/img/card6.png" alt="その仕事、AIに説明できますか？" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">その仕事、AIに説明できますか？</p>
            <p class="dl-card__desc">AI導入の第一歩は、自分たちの仕事を理解<br />「し直すことから</p>
            <p class="dl-card__meta">PDF/4.6MB</p>
          </div>
          <a href="assets/pdf/その仕事、AIに説明できますか？.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>


        <div class="dl-card">
          <img src="assets/img/card7.png" alt="マニュアルに書けない仕事こそ、企業のノウハウ" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">マニュアルに書けない仕事こそ、企業のノウハウ</p>
            <p class="dl-card__desc">経験の中で培われた「暗黙知」を見える化し、<br />AI時代の会社の資産に変えていく</p>
            <p class="dl-card__meta">PDF/4.4MB</p>
          </div>
          <a href="assets/pdf/マニュアルに書けない仕事こそ、 企業のノウハウ.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>


         <div class="dl-card">
          <img src="assets/img/width_80000.png" alt="例外処理を集めると、AI導入の答えが見えてくる" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">例外処理を集めると、AI導入の答えが見えてくる</p>
            <p class="dl-card__desc">例外は、AIを育てるヒントの宝庫。
<br />人の判断をデータに変え、AIを改善し続ける仕組みづくり<br>を支援します。</p>
            <p class="dl-card__meta">PDF/4.8MB</p>
          </div>
          <a href="assets/pdf/例外処理を集めると、AI導入の答えが見えてくる.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>




         <div class="dl-card">
          <img src="assets/img/width_800000.png" alt="AI時代、BPOの役割は作業代行だけではなくなる" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">AI時代、BPOの役割は作業代行だけではなくなる</p>
            <p class="dl-card__desc">BPO／KPOは、AIを育て、業務を賢くする現場へ</p>
            <p class="dl-card__meta">PDF/4.7MB</p>
          </div>
          <a href="assets/pdf/AI時代、BPOの役割は作業代行だけではなくなる.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>
       



         <div class="dl-card">
          <img src="assets/img/width_77700.png" alt="AIで本当に変えるべきなのは、ツールではなく仕事の仕組み" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">AIで本当に変えるべきなのは、<br>ツールではなく仕事の仕組み</p>
            <p class="dl-card__desc">仕事を分解し、人の判断をKnowledgeにし、AI・BPO・KPOが<br>成長し続ける循環を作る</p>
            <p class="dl-card__meta">PDF/4.8MB</p>
          </div>
          <a href="assets/pdf/AI導入で本当に変えるべきなのは、ツールではなく仕事の仕組み.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>
        


        <div class="dl-card">
          <img src="assets/img/width_66600.png" alt="AIで本当に変えるべきなのは、ツールではなく仕事の仕組み" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">AIを使える会社と、AIで強くな<br>る会社は違う</p>
            <p class="dl-card__desc">AIを使いこなすだけでは終わらない。知識を蓄積し、会社<br>そのものが学習する仕組みを作る。</p>
            <p class="dl-card__meta">PDF/4.8MB</p>
          </div>
          <a href="assets/pdf/AIを使える会社と、AIで強くなる会社は違う.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>


         <div class="dl-card">
          <img src="assets/img/width_82200.png" alt="AIで本当に変えるべきなのは、ツールではなく仕事の仕組み" class="dl-card__thumb" />
          <div class="dl-card__info">
            <p class="dl-card__title">AI時代に会社のノウハウをどう残すか</p>
            <p class="dl-card__desc">人の経験を、会社に知識へ。<br>知識が資産になる会社を作る</p>
            <p class="dl-card__meta">PDF/5.0MB</p>
          </div>
          <a href="assets/pdf/AI時代に会社のノウハウをどう残すか.pdf" target="_blank" rel="noopener" class="dl-card__btn">
            ダウンロード
            <img src="assets/img/9c87db64-c705-4723-bef3-d3877fa28138.png" alt="" style="width: 16px; height: 16px;" />
          </a>
        </div>



      </div>
      <div class="dl-scrollbar" id="dl-scrollbar">
        <div class="dl-scrollbar__thumb" id="dl-thumb"></div>
      </div>
      </div>
      <a href="index.php#contact" class="dl-panel__notice">
        <span class="dl-panel__notice-icon">!</span>
        その他の資料やご不明点がございましたら、お気軽にお問い合わせください
      </a>
    </div>

    <!-- Right: Sidebar -->
    <aside class="dl-sidebar">

      <!-- Merits -->
      <div class="dl-merits">
        <div class="dl-merits__head">資料ダウンロードのメリット</div>
        <ul class="dl-merits__list">
          <li class="dl-merits__item">
            <img src="assets/img/cacb3930-f2a0-4c51-a120-b09b169a4851.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>サービス内容を詳しく理解できる</strong>
              <span>各サービスの特徴や強みを詳しく<br />ご確認いただけます。</span>
            </div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/d24756c1-608c-4f9b-a6c0-7931d2f4f8c9.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>導入事例から成果をイメージ</strong>
              <span>実際の事例を通じて、導入後の効果を<br />具体的に把握できます。</span>
            </div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/b59b74f3-a9ff-4188-80e6-3913ccbf1cb2.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>検討をスムーズに進められる</strong>
              <span>比較検討や社内承認の資料として<br />ご活用いただけます。</span>
            </div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/6369fc6a-3bf6-4295-9cc8-4f66cc301a18.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body">
              <strong>いつでも自由にダウンロード</strong>
              <span>お好きな時間に、すぐに資料を<br />ダウンロードいただけます。</span>
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

  <script src="assets/js/main.js" defer></script>
</body>
</html>
