<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A CAN SOLUTIONSが贈るミャンマーの最新情報。ビジネス環境、現地の状況について定期的にお届けします。" />
  <meta name="theme-color" content="#ffffff" />
  <title>Myanmar situation | ミャンマー情報 | A CAN SOLUTIONS</title>
  <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <style>
    /* ── Nav overrides ── */
    .site-header__nav { gap: 2.75rem; margin-left: 8.5rem; }
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

    .ms-wrap {
      width: 88%;
      max-width: 1240px;
      margin: 0 auto;
    }

    /* ══════════════════════════════
       HERO (service.php style)
    ══════════════════════════════ */
    .ms-hero {
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, #eef4ff 0%, #f7faff 55%, #fdf3e8 100%);
      border-radius: 20px;
      margin: 1.5rem auto 0;
      width: 88%;
      max-width: 1240px;
    }

    .ms-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image:
        radial-gradient(circle, rgba(18,73,158,0.14) 1px, transparent 1px);
      background-size: 22px 22px;
      opacity: 0.6;
      pointer-events: none;
    }

    .ms-hero__bar {
      height: 6px;
      background: linear-gradient(90deg, #12499e, #2563eb 35%, #f59e0b 70%, #dc2626);
    }

    .ms-hero__inner {
      position: relative;
      z-index: 1;
      display: flex;
      align-items: center;
      gap: 2.5rem;
      padding: 3rem;
    }

    .ms-hero__text { flex: 1.1; min-width: 0; }

    .ms-hero__eyebrow {
      font-family: "Anonymous Pro", monospace;
      font-size: 0.95rem;
      font-weight: 700;
      color: #12499e;
      letter-spacing: 0.12em;
      margin: 0 0 0.2rem;
    }

    .ms-hero__title {
      font-size: 2.4rem;
      font-weight: 900;
      color: #0a0f2e;
      margin: 0 0 1rem;
      line-height: 1.3;
    }

    .ms-hero__desc {
      font-size: 0.95rem;
      color: #4a5568;
      line-height: 1.9;
      margin: 0;
    }

    .ms-hero__visual {
      flex: 0.9;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .ms-hero__visual img {
      max-width: 420px;
      width: 100%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 8px 32px rgba(18,73,158,0.15);
    }

    /* ══════════════════════════════
       SECTION HEAD (shared)
    ══════════════════════════════ */
    .ms-section { margin-top: 3rem; }

    /* .myanmar-section (main.css) already adds its own padding-block: 3rem 3.5rem —
       stacking that with .ms-section's margin-top created a huge blank gap */
    .ms-section.myanmar-section {
      margin-top: 1.5rem;
      padding-block: 0;
    }

    .ms-section__title {
      font-size: 1.1rem;
      font-weight: 900;
      color: #13499e;
      border-left: 4px solid #12499e;
      padding-left: 0.75rem;
      margin: 0 0 1.25rem;
      line-height: 1.4;
    }

    /* ══════════════════════════════
       MYANMAR DUAL LIST — column headers
    ══════════════════════════════ */
    .myanmar-dual__head { margin-bottom: 0.75rem; max-width: 100%; }
    .myanmar-dual__title {
      font-size: 0.95rem;
      font-weight: 700;
      color: #12499e;
      margin: 0 0 0.2rem;
      overflow-wrap: break-word;
      word-break: break-word;
      border-left: 4px solid #12499e;
      padding-left: 0.6rem;
      line-height: 1.4;
    }
    .myanmar-dual__desc {
      font-size: 0.72rem;
      color: #6b7280;
      margin: 0;
      overflow-wrap: break-word;
      word-break: break-word;
    }
    .myanmar-dual__col {
      min-width: 0;
      border: none;
      border-radius: 0;
      background: transparent;
      padding: 0;
    }

    .myanmar-dual__box {
      border: 1px solid #e8dcc8;
      border-radius: 8px;
      background: #fdfbf5;
      overflow: hidden;
      padding: 1rem;
      display: flex;
      flex: 1;
      min-width: 0;
    }

    /* ══════════════════════════════
       STATS (基本情報)
    ══════════════════════════════ */
    .ms-stats__grid {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      background: #f7f8fb;
      border-radius: 12px;
      padding: 1.75rem 1.25rem;
      width: 94%;
      margin: 0 auto;
    }

    .ms-stat {
      flex: 1 1 150px;
      text-align: center;
      padding: 0 0.5rem;
    }

    .ms-stat__icon {
      width: 79%;
      /* height: 56px; */
      margin: 0 auto 0.75rem;
      /* border-radius: 50%; */
      overflow: hidden;
      /* display: flex; */
      /* align-items: center; */
      justify-content: center;
    }

    .ms-stat__icon img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .ms-stat__label {
      font-size: 18px;
      font-weight: 700;
      color: #1a1a2e;
      margin: 0 0 0.4rem;
    }

    .ms-stat__value {
      font-size: 0.78rem;
      color: #6b7280;
      line-height: 1.6;
      margin: 0;
    }

    /* ══════════════════════════════
       HIGHLIGHTS (注目ポイント)
    ══════════════════════════════ */
    .ms-highlights__grid {
      display: flex;
      gap: 1.25rem;
      flex-wrap: wrap;
      justify-content: center;
      padding: 0.5rem 0;
    }

    .ms-highlight {
      flex: 0 1 260px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      gap: 0.8rem;
      padding: 0;
    }

    .ms-highlight__icon {
      width: 131px;
      /* height: 64px; */
      flex-shrink: 0;
      margin: 0 auto;
    }

    .ms-highlight__icon svg {
      width: 100%;
      height: 100%;
      stroke: #12499e;
      fill: #12499e;
      stroke-width: 0;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .ms-highlight__icon svg.ms-icon--line {
      fill: none;
      stroke: #12499e;
      stroke-width: 2.2;
    }

    .ms-highlight__icon img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    .ms-highlight__title {
      font-size: 25px;
      font-family: "Anonymous Pro", monospace;
      font-weight: 700;
      color: #1a1a2e;
      margin: 0;
      line-height: 1.4;
    }

    .ms-highlight__desc {
      font-size: 20px;
      font-family: "Anonymous Pro", monospace;
      color: #6b7280;
      line-height: 1.8;
      margin: 0;
    }

    /* ══════════════════════════════
       NEWSLETTER CTA
    ══════════════════════════════ */
    .ms-newsletter {
      margin-top: 3rem;
      /* border-radius: 12px; */
      overflow: hidden;
      position: relative;
      min-height: 280px;
      display: flex;
      align-items: center;
    }

    .ms-newsletter__bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(0.85) saturate(1.15);
    }

    .ms-newsletter::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, rgba(8, 40, 110, 0.75) 0%, rgba(15, 60, 140, 0.35) 45%, rgba(18, 73, 158, 0.05) 100%);
      z-index: 1;
    }

    .ms-newsletter__content {
      position: relative;
      z-index: 2;
      padding: 4.75rem 5.5rem;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .ms-newsletter__title {
      font-size: 1.5rem;
      font-weight: 900;
      color: #fff;
      margin: 0 0 0.6rem;
      line-height: 1.55;
      text-shadow: 0 1px 6px rgba(0, 0, 0, 0.2);
    }

    .ms-newsletter__desc {
      font-size: 0.88rem;
      color: #dce6f0;
      margin: 0 0 1.75rem;
      text-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
    }

    .ms-newsletter__form {
      display: flex;
      flex-direction: row;
      align-items: center;
      width: 100%;
      max-width: 520px;
      background: #fff;
      border-radius: 999px;
      padding: 0.35rem 0.35rem 0.35rem 0;
      gap: 0;
      box-shadow: 0 4px 24px rgba(0, 0, 0, 0.18);
    }

    .ms-newsletter__input {
      flex: 1;
      min-width: 0;
      padding: 0.8rem 1.3rem;
      border: none;
      background: transparent;
      border-radius: 999px;
      font-size: 0.92rem;
      font-family: "Noto Sans JP", sans-serif;
      color: #333;
    }

    .ms-newsletter__input::placeholder {
      color: #9ca3af;
      font-size: 0.88rem;
    }

    .ms-newsletter__input:focus { outline: none; }

    .ms-newsletter__btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.55rem;
      background: #12499e;
      color: #fff;
      border: none;
      padding: 0.8rem 0.5rem 0.8rem 1.4rem;
      border-radius: 999px;
      font-size: 0.9rem;
      font-weight: 700;
      cursor: pointer;
      white-space: nowrap;
      flex-shrink: 0;
      transition: background 0.25s;
    }

    .ms-newsletter__btn:hover { background: #0d3a80; }

    .ms-newsletter__btn-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 34px;
      height: 34px;
      background: #fff;
      border-radius: 50%;
      flex-shrink: 0;
      transition: transform 0.2s;
    }

    .ms-newsletter__btn:hover .ms-newsletter__btn-icon { transform: translateX(2px); }

    .ms-newsletter__btn-icon svg {
      width: 14px;
      height: 14px;
      stroke: #12499e;
      fill: none;
      stroke-width: 2.5;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .ms-newsletter__btn.is-loading { cursor: default; opacity: 0.85; }
    .ms-newsletter__btn.is-loading .ms-newsletter__btn-icon svg { display: none; }
    .ms-newsletter__btn.is-loading .ms-newsletter__btn-icon::after {
      content: '';
      width: 14px;
      height: 14px;
      border: 2px solid #12499e;
      border-top-color: transparent;
      border-radius: 50%;
      animation: ms-newsletter-spin 0.7s linear infinite;
    }

    @keyframes ms-newsletter-spin {
      to { transform: rotate(360deg); }
    }

    /* ══════════════════════════════
       CONTACT
    ══════════════════════════════ */
    .ms-contact {
      margin-top: 3rem;
      margin-bottom: 3rem;
      background: #f7f7f7;
      border-radius: 12px;
      padding: 1.75rem 2rem;
    }

    .ms-contact__title {
      font-size: 21px;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 700;
      color: #13499e;
      margin: 0 0 0.4rem;
    }

    .ms-contact__desc {
      font-size: 0.8rem;
      color: #6b7280;
      margin: 0 0 1.25rem;
    }

    .ms-contact__cards {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 1.2rem;
      max-width: 1080px;
    }

    .ms-contact__icon--svg {
      width: 44px;
      height: 44px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .ms-contact__icon--svg svg {
      width: 30px;
      height: 30px;
      stroke: #12499e;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .ms-contact__card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 1.3rem 1.2rem;
      display: flex;
      align-items: flex-start;
      gap: 0.9rem;
    }

    .ms-contact__icon { width: 44px; height: 44px; flex-shrink: 0; object-fit: contain; }

    .ms-contact__card.firstcard {
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .ms-contact__intro-text {
      font-size: 16px;
      text-align: center;
      color: #1a1a2e;
      margin: 0;
      line-height: 1.6;
    }
    .ms-contact__label { font-size: 15px; font-weight: 700; color: #13499e; margin: 0 0 0.15rem; }
    .ms-contact__hours { font-size: 13px; color: #9ca3af; margin: 0 0 0.2rem; font-family: "Anonymous Pro", monospace; }
    .ms-contact__value { font-size: 22px; font-weight: 400; color: #000; margin: 0; line-height: 1.2; }
    .ms-contact__link { font-size: 20px; font-weight: 400; color: #000; text-decoration: none; word-break: break-all; }
    .ms-contact__link:hover { text-decoration: underline; color: #12499e; }

    .site-footer { background: white; padding-block: 1.75rem; }

    /* ══════════════════════════════
       RESPONSIVE
    ══════════════════════════════ */
    @media (max-width: 768px) {
      .ms-wrap { width: 92%; }
      .myanmar-dual { flex-direction: column; }
      .ms-stats__grid { flex-direction: column; }
      .ms-stat { min-width: auto; }
      .ms-highlights__grid { flex-direction: column; gap: 1.5rem; }
      .ms-highlight__icon { width: 56px; height: 56px; }
      .ms-newsletter { min-height: 240px; }
      .ms-newsletter__content { padding: 2rem 1.5rem; }
      .ms-newsletter__title { font-size: 1.25rem; }
      .ms-newsletter__form { max-width: 100%; }
      .ms-newsletter__btn { padding: 0.75rem 0.4rem 0.75rem 1.2rem; font-size: 0.82rem; }
      .ms-newsletter__btn-icon { width: 30px; height: 30px; }
      .ms-newsletter__btn-icon svg { width: 12px; height: 12px; }
      .ms-contact { width: 92%; margin-inline: auto; padding: 1.25rem; }
      .ms-contact__cards { grid-template-columns: 1fr; }
    }
    .firstcard{
       padding: 1.3rem 0.2rem;
    border-radius: 0;
    border: 0px solid #e2e8f0;
    background: none;

    }
  </style>
</head>
<body>

  <!-- ── Site Header ── -->
  <?php include 'menu.php'; ?>

  <!-- ── Hero (breadcrumb + title + description are baked into this image) ── -->
  <section class="ms-hero-image">
    <img src="assets/img/myanmar-situtation.png" alt="Myanmar situation ミャンマー情報" />
  </section>

  <div class="ms-wrap">

    <!-- ── Two-column list (reused from index.php's Myanmar situation section) ── -->
    <section class="ms-section myanmar-section">
      <div class="myanmar-dual">

        <!-- Left column: full list -->
        <div class="myanmar-dual__col myanmar-dual__col--left">
          <div class="myanmar-dual__head">
            <p class="myanmar-dual__title">ミャンマー状況</p>
            <p class="myanmar-dual__desc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生活物価等、市民生活のデータです。</p>
          </div>
          <div class="myanmar-dual__box">
          <div class="myanmar-scroll-wrapper">
            <div class="myanmar-list__scroll" id="myanmar-scroll">
              <ul class="myanmar-list" role="list">
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/5/7</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%20260507.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260507</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/5/11</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%20260511.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260511</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/5/18</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%20260518.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260518</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/5/26</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%EF%BC%88ACS%E7%99%BA%E4%BF%A1%EF%BC%89%20260526.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260526</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/6/1</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%EF%BC%88ACS%E7%99%BA%E4%BF%A1%EF%BC%89%20260601.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260601</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/6/8</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%EF%BC%88ACS%E7%99%BA%E4%BF%A1%EF%BC%89%20260608.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260608</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/6/15</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%EF%BC%88ACS%E7%99%BA%E4%BF%A1%EF%BC%89%20260615.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260615</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/6/22</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%EF%BC%88ACS%E7%99%BA%E4%BF%A1%EF%BC%89%20260622.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260622</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/6/29</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%EF%BC%88ACS%E7%99%BA%E4%BF%A1%EF%BC%89%20260629.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260629</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/7/6</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%EF%BC%88ACS%E7%99%BA%E4%BF%A1%EF%BC%89%20260706.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260706</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/7/13</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC%E7%8A%B6%E6%B3%81%EF%BC%88ACS%E7%99%BA%E4%BF%A1%EF%BC%89%20260713.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260713</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/7/20</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/ミャンマー状況（ACS発信） 260720.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260720</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/7/27</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/2025年7月27日ミャンマーレポート（概況、人材関連）.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260727</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/8/4</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/ミャンマー状況（ACS発信） 260804.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260804</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/8/12</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/ミャンマー状況（ACS発信）260812.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260812</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/8/18</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/ミャンマー状況（ACS発信） 260818.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260818</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/8/18</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/ミャンマー状況（ACS発信） 260825.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260825</a></li>
                 <li class="myanmar-list__item"><span class="myanmar-list__date">2026/9/1</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/ミャンマー状況（ACS発信） 260901.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマー状況 260901</a></li>


              </ul>
            </div>
            <div class="myanmar-scrollbar" id="myanmar-scrollbar">
              <div class="myanmar-scrollbar__thumb" id="myanmar-thumb"></div>
            </div>
          </div>
          </div>
        </div>

        <!-- Right column: reports -->
        <div class="myanmar-dual__col myanmar-dual__col--right">
          <div class="myanmar-dual__head">
            <p class="myanmar-dual__title">ミャンマーレポート</p>
            <p class="myanmar-dual__desc">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;事業環境、人事関連等、事業にまつわる情報をまとめています</p>
          </div>
          <div class="myanmar-dual__box">
          <div class="myanmar-scroll-wrapper">
            <div class="myanmar-list__scroll" id="myanmar-scroll-r">
              <ul class="myanmar-list" role="list">
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/7/27</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/2025年7月27日ミャンマーレポート（概況、人材関連） (1).pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマーレポート26年7月</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/8/4</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/2025年8月4日ミャンマーレポート（概況、人材関連） .pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマーレポート26年8月</a></li>
                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/8/4</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/2025年8月25日ミャンマーレポート（人材関連） .pdf" target="_blank" rel="noopener" class="myanmar-list__link">ﾐｬﾝﾏｰﾚﾎﾟｰﾄ（号外）26年8月</a></li>
                                <li class="myanmar-list__item"><span class="myanmar-list__date">2026/9/1</span><span class="myanmar-list__cat">BPO/KPO活用ガイド</span><a href="assets/pdf/2025年9月1日ミャンマーレポート（概況、人材関連）.pdf" target="_blank" rel="noopener" class="myanmar-list__link">ミャンマーレポート26年9月</a></li>

              </ul>
            </div>
            <div class="myanmar-scrollbar" id="myanmar-scrollbar-r">
              <div class="myanmar-scrollbar__thumb" id="myanmar-thumb-r"></div>
            </div>
          </div>
          </div>
        </div>

      </div>
    </section>

    <!-- ── Basic info stats ── -->
    <section class="ms-section">
      <h2 class="ms-section__title">ミャンマーの基本情報</h2>
      <div class="ms-stats__grid">

        <div class="ms-stat">
          <div class="ms-stat__icon" style="width: 58%;">
            <img src="assets/img/1-log.png" alt="人口" />
          </div>
          <p class="ms-stat__label">人口</p>
          <p class="ms-stat__value">約 2,400万人<br />(2024年推計)</p>
        </div>

        <div class="ms-stat">
          <div class="ms-stat__icon" style="width: 45%;">
            <img src="assets/img/2-log.png" alt="首都" />
          </div>
          <p class="ms-stat__label">首都</p>
          <p class="ms-stat__value">ネーピードー<br />(最大都市はヤンゴン)</p>
        </div>

        <div class="ms-stat">
          <div class="ms-stat__icon" style="width: 52%;">
            <img src="assets/img/3-log.png"  alt="GDP成長率" />
          </div>
          <p class="ms-stat__label">GDP成長率</p>
          <p class="ms-stat__value">約 3.0%<br />(2024年予測)</p>
        </div>

        <div class="ms-stat">
          <div class="ms-stat__icon" style="width: 56%;">
            <img src="assets/img/4-log.png"  alt="通貨" />
          </div>
          <p class="ms-stat__label">通貨</p>
          <p class="ms-stat__value">チャット (MMK)<br />1JPY=約25.3MMK</p>
        </div>

        <div class="ms-stat">
          <div class="ms-stat__icon" style="width: 54%;">
            <img src="assets/img/5-log.png" alt="時差"  />
          </div>
          <p class="ms-stat__label">時差</p>
          <p class="ms-stat__value">日本より2.5時間<br />遅れています</p>
        </div>

      </div>
    </section>

    <!-- ── Highlights ── -->
    <section class="ms-section">
      <h2 class="ms-section__title">注目ポイント</h2>
      <div class="ms-highlights__grid">

        <div class="ms-highlight">
          <div class="ms-highlight__icon">
            <img src="assets/img/11-log.png" alt="若く豊富な労働力" />
          </div>
          <p class="ms-highlight__title">若く豊富な労働力</p>
          <p class="ms-highlight__desc">平均年齢は約29歳と<br>若く、豊富な労働力が<br>魅力です。</p>
        </div>

        <div class="ms-highlight">
          <div class="ms-highlight__icon">
            <img src="assets/img/22-log.png" alt="親日的な国民性" />
          </div>
          <p class="ms-highlight__title">親日的な国民性</p>
          <p class="ms-highlight__desc">日本への関心が高く、<br>親日的な国民性が特徴<br>です。</p>
        </div>

        <div class="ms-highlight">
          <div class="ms-highlight__icon" style="width: 102px;">
            <img src="assets/img/33-log.png" alt="経済成長の可能性" />
          </div>
          <p class="ms-highlight__title">経済成長の可能性</p>
          <p class="ms-highlight__desc">今後、安定した経済成長<br>が期待されています。</p>
        </div>

      </div>
    </section>

    <!-- ── Newsletter CTA ── -->
    <section class="ms-newsletter" id="newsletter">
      <img src="assets/img/bagoda.png" alt="" class="ms-newsletter__bg" />
      <div class="ms-newsletter__content">
        <h2 class="ms-newsletter__title">ミャンマーの最新情報を<br />定期的にお届けします。</h2>
        <p class="ms-newsletter__desc">ビジネスに役立つ現地情報をメールマガジンで配信中。</p>
        <form id="newsletterForm" class="ms-newsletter__form" action="newsletter-subscribe.php" method="POST">
          <input type="email" id="newsletterEmail" name="email" class="ms-newsletter__input" placeholder="メールアドレスを入力" required />
          <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off" />
          <button type="submit" id="newsletterBtn" class="ms-newsletter__btn">
            <span class="ms-newsletter__btn-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;登録する&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span class="ms-newsletter__btn-icon"><svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
          </button>
        </form>
      </div>
    </section>

    <!-- ── Contact ── -->
    <section class="ms-contact">
      <h2 class="ms-contact__title">お問い合わせ</h2>
      <!-- <p class="ms-contact__desc">ミャンマーでのビジネス展開やBPOサービスについて、お気軽にご相談ください。</p> -->
      <div class="ms-contact__cards">
        <div class="firstcard ms-contact__card">
          <p class="ms-contact__intro-text">ミャンマーでのビジネス展開やBPOサービスについて、お気軽にご相談ください。</p>
        </div>
        <div class="ms-contact__card">
          <img src="assets/img/t.png" alt="電話" class="ms-contact__icon" />
          <div>
            <p class="ms-contact__label">電話で相談する</p>
            <p class="ms-contact__hours">平日 10:00〜17:00</p>
            <p class="ms-contact__value">(082)209-6669</p>
          </div>
        </div>
        <div class="ms-contact__card">
          <img src="assets/img/t (1).png" alt="メール" class="ms-contact__icon" />
          <div>
            <p class="ms-contact__label">メールで相談する</p>
            <a href="mailto:info@acan-sol.com" class="ms-contact__link">info@acan-sol.com</a>
          </div>
        </div>
      </div>
    </section>

  </div><!-- /ms-wrap -->

  <!-- ── Footer ── -->
  <?php include 'footer.php'; ?>

  <script src="assets/js/main.js" defer></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form  = document.getElementById('newsletterForm');
      const btn   = document.getElementById('newsletterBtn');
      const label = btn ? btn.querySelector('.ms-newsletter__btn-label') : null;
      if (!form) return;

      form.addEventListener('submit', function () {
        btn.disabled = true;
        btn.classList.add('is-loading');
        if (label) label.textContent = '送信中...';
      });
    });
  </script>
</body>
</html>
