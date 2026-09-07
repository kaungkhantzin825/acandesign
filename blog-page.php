<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A CAN SOLUTIONSのBLOG記事一覧。BPO/KPO活用ガイド、AI×BPO/KPO、ミャンマーアウトソーシングに関する記事をご紹介します。" />
  <meta name="theme-color" content="#ffffff" />
  <title>BLOG | A CAN SOLUTIONS</title>
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
      width: 100%;
      margin: 0;
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
      overflow-anchor: none;
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
      height: 40px !important;
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

    /* ══════════════════════════════
       COMPACT BLOG CARD (panel list only — home page cards untouched)
    ══════════════════════════════ */
    .dl-panel .blog-card {
      border-radius: 0;
      border: none;
      border-bottom: 1px solid #eef1f7;
      padding: 0.7rem 1.4rem;
    }

    .dl-panel .blog-card:last-child { border-bottom: none; }

    .dl-panel .blog-card:hover {
      transform: none;
      box-shadow: none;
      border-color: transparent;
      border-bottom: 1px solid #eef1f7;
    }

    .dl-panel .blog-card__link { gap: 0.9rem; }

    .dl-panel .blog-card__image {
      width: 140px;
      min-width: 140px;
      height: 100px;
      border-radius: 8px;
    }

    .dl-panel .blog-card__header { padding-top: 0; }

    .dl-panel .blog-card__date { font-size: 0.72rem; }

    .dl-panel .blog-card__title {
      font-size: 13px;
      line-height: 1.5;
      text-align: center;
      font-weight: 700;
      margin-left: -34px;
    }

    .dl-panel .blog-card__category {
      font-size: 0.7rem;
      padding: 0.15rem 0.5rem;
    }

    .dl-panel .blog-card__tags {
      gap: 0.2rem;
      margin-top: 0.2rem;
    }

    .dl-panel .blog-card__tag {
      display: inline-flex;
      align-items: center;
      font-size: 5.6px;
      font-weight: 700;
      color: #12499e;
      background: #fff;
      border-radius: 999px;
      padding: 0.06rem 0.35rem;
    }

    /* ══════════════════════════════
       CATEGORY FILTER (BLOG)
    ══════════════════════════════ */
    .blog-filter-tabs {
      width: 100%;
      max-width: none;
      margin: 0.5rem 0 0.75rem;
      display: flex;
      flex-wrap: wrap;
      gap: 0.4rem;
    }

    .blog-filter-tab {
      font-family: "Noto Sans JP", sans-serif;
      font-size: 0.78rem;
      font-weight: 700;
      color: #374151;
      background: #fff;
      border: 1px solid #d1d5db;
      border-radius: 0;
      padding: 0.4rem 0.85rem;
      cursor: pointer;
      transition: background 0.15s, color 0.15s, border-color 0.15s;
      white-space: nowrap;
    }

    .blog-filter-tab:hover { background: #f0f4ff; border-color: #12499e; color: #12499e; }

    .blog-filter-tab.is-active {
      background: #12499e;
      color: #fff;
      border-color: #12499e;
    }

    .blog-category-box {
      background: #f5f6f8;
      padding: 1.25rem 1.5rem;
      border-radius: 8px;
      width: 364px;
      margin-top: 95px;
    }

    .blog-category-box__head {
      color: #12499e;
      font-size: 15px;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 700;
      margin-bottom: 0.6rem;
    }

    .blog-category-list {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .blog-category-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      background: none;
      border: none;
      padding: 0.75rem 0.1rem;
      font-family: "Noto Sans JP", sans-serif;
      font-size: 0.88rem;
      font-weight: 500;
      color: #1a1a2e;
      text-align: left;
      cursor: pointer;
      transition: color 0.15s;
    }


    .blog-category-item span {
      font-size: 1rem;
      color: #1a1a2e;
    }

    .blog-category-item:hover,
    .blog-category-item.is-active {
      color: #1a1a2e;
      font-weight: 700;
    }

    .blog-card[hidden] { display: none !important; }

    /* Sidebar CTA image card */
    .dl-sidebar-cta {
      border-radius: 8px;
      overflow: hidden;
      position: relative;
      min-height: 185px;
      margin-top: 118px;
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
       MAIN COLUMN (breadcrumb + filter + panel)
    ══════════════════════════════ */
    .dl-main-col {
      display: flex;
      flex-direction: column;
      width: 697px;
      margin-left: 77px;
      flex-shrink: 0;
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
      width: 100%;
    }

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
      .dl-panel { height: 600px; }
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

      /* Main column */
      .dl-main-col {
        width: 100%;
        margin-left: 0;
      }

      /* Breadcrumb */
      .dl-breadcrumb { width: 100%; margin: 0; }

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
      .blog-category-box { width: 100%; box-sizing: border-box; margin-top: 0; }
      .dl-sidebar-cta { width: 100%; margin-top: 0; }
      .blog-filter-tabs { width: 100%; margin: 0.75rem 0 1rem; }

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
      .dl-panel .blog-card__title {
        margin-left: 0;
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
    <img src="assets/img/blog-header.png" alt="BLOG" class="dl-hero__img" />
  </section>

  <!-- ── Main Body ── -->
  <div class="dl-body">

    <!-- Left column: Breadcrumb + Filter + Blog list -->
    <div class="dl-main-col">

      <!-- ── Breadcrumb ── -->
      <nav class="dl-breadcrumb" aria-label="Breadcrumb">
        <a href="index.php">HOME</a> &rsaquo; BLOG
      </nav>

      <!-- ── Category Filter Tabs ── -->
      <div class="blog-filter-tabs">
        <button type="button" class="blog-filter-tab is-active" data-filter="all">すべて</button>
        <button type="button" class="blog-filter-tab" data-filter="bpo-kpo">BPO/KPO活用ガイド</button>
        <button type="button" class="blog-filter-tab" data-filter="ai-bpo">AI × BPO/KPO</button>
        <button type="button" class="blog-filter-tab" data-filter="myanmar">ミャンマーアウトソーシング</button>
      </div>

      <!-- Left: Blog list -->
      <div class="dl-panel">
      <div class="dl-scroll-wrapper">
      <div class="dl-panel__scroll" id="dl-scroll">
        <ul class="blog-list" role="list">
          <li class="blog-card" data-cat="bpo-kpo">
            <a href="management.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blog-1.webp" alt="Outsourcing" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-06-15">2026/6/15</time>
                </div>
                <h3 class="blog-card__title">人材不足時代の経営戦略 - なぜ今、<br />BPO/KPO活用企業が競争力を高めているのか</h3>
                <div class="blog-card__category">BPO/KPO活用ガイド</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#アウトソーシング</span>
                  <span class="blog-card__tag">#人材不足</span>
                  <span class="blog-card__tag">#生産性向上</span>
                  <span class="blog-card__tag">#経営戦略</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="bpo-kpo">
            <a href="business.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blg-image.png" alt="BPO業務選定" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-06-15">2026/6/15</time>
                </div>
                <h3 class="blog-card__title">どの業務をBPO化すべきか？失敗しない業務<br />選定のポイント</h3>
                <div class="blog-card__category">BPO/KPO活用ガイド</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#アウトソーシング</span>
                  <span class="blog-card__tag">#業務効率化</span>
                  <span class="blog-card__tag">#人材不足</span>
                  <span class="blog-card__tag">#バックオフィス改革</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="bpo-kpo">
            <a href="companies.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/3blog.webp" alt="BPO導入失敗" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-06-21">2026/6/21</time>
                </div>
                <h3 class="blog-card__title">BPO導入で失敗する企業の共通点<br />成功企業との違いから学ぶアウトソーシング活用術</h3>
                <div class="blog-card__category">BPO/KPO活用ガイド</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#アウトソーシング</span>
                  <span class="blog-card__tag">#業務効率化</span>
                  <span class="blog-card__tag">#人材不足</span>
                  <span class="blog-card__tag">#業務改善</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#DX推進</span>
                  <span class="blog-card__tag">#コスト削減</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="bpo-kpo">
            <a href="bpo.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blog-6.webp" alt="海外BPO比較" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-06-25">2026/6/25</time>
                </div>
                <h3 class="blog-card__title">海外BPO（ミャンマー・ベトナム・フィリピン）<br />を比較してみた</h3>
                <div class="blog-card__category">BPO/KPO活用ガイド</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#海外人材活用</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#アウトソーシング</span>
                  <span class="blog-card__tag">#人材不足</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#DX推進</span>
                  <span class="blog-card__tag">#ベトナムBPO</span>
                  <span class="blog-card__tag">#フィリピンBPO</span>
                  <span class="blog-card__tag">#AI活用</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="necessary.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blog-5.webp" alt="AI時代のBPO/KPO" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-06-25">2026/6/25</time>
                </div>
                <h3 class="blog-card__title">AI時代のBPO/KPO<br />人は不要になるのか、それとも「より必要」になるのか？</h3>
                <div class="blog-card__category">AI × BPO/KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#AI</span>
                  <span class="blog-card__tag">#生成AI</span>
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#AI学習データ</span>
                  <span class="blog-card__tag">#プロンプトエンジニアリング</span>
                  <span class="blog-card__tag">#DX推進</span>
                  <span class="blog-card__tag">#業務効率化</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="blog.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blog-8.jpg" alt="AIアノテーション" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-06">2026/7/6</time>
                </div>
                <h3 class="blog-card__title">AIアノテーションとは？<br />AIの精度を左右する「見えない仕事」を解説</h3>
                <div class="blog-card__category">AI × BPO/KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#AI</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#訓練データ</span>
                  <span class="blog-card__tag">#データラベリング</span>
                  <span class="blog-card__tag">#機械学習</span>
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#AI品質</span>
                  <span class="blog-card__tag">#DX推進</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="post.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blog-10.jpg" alt="AI学習データ作成" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-06">2026/7/6</time>
                </div>
                <h3 class="blog-card__title">AI学習データ作成とは？<br />高品質なデータがAIの未来を変える理由</h3>
                <div class="blog-card__category">AI×BPO /KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#AI学習データ</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#訓練データ</span>
                  <span class="blog-card__tag">#データクリーニング</span>
                  <span class="blog-card__tag">#機械学習</span>
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#データ品質</span>
                  <span class="blog-card__tag">#プロンプトエンジニアリング</span>
                  <span class="blog-card__tag">#DX推進</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="genai-tips.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/ai-11.jpg" alt="生成AI導入のポイント" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-11">2026/7/11</time>
                </div>
                <h3 class="blog-card__title">生成AIを導入したのに成果が出ない理由<br />〜AIを「使える仕組み」にする3つのポイント〜</h3>
                <div class="blog-card__category">AI × BPO/KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#生成AI</span>
                  <span class="blog-card__tag">#ChatGPT</span>
                  <span class="blog-card__tag">#AIツール</span>
                  <span class="blog-card__tag">#AI導入</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#業務改善</span>
                  <span class="blog-card__tag">#プロンプト活用</span>
                  <span class="blog-card__tag">#AI活用推進</span>
                  <span class="blog-card__tag">#DX推進</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="ai-agent.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/ai-22.jpg" alt="AIエージェントとは" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-11">2026/7/11</time>
                </div>
                <h3 class="blog-card__title">AIエージェントとは？<br />生成AIとの違いをわかりやすく解説</h3>
                <div class="blog-card__category">AI × BPO/KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#生成AI</span>
                  <span class="blog-card__tag">#ChatGPT</span>
                  <span class="blog-card__tag">#AI活用</span>
                  <span class="blog-card__tag">#業務自動化</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#AI</span>
                  <span class="blog-card__tag">#AIエージェント</span>
                  <span class="blog-card__tag">#プロンプト活用</span>
                  <span class="blog-card__tag">#AI企業事例</span>
                  <span class="blog-card__tag">#タスク自動化</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="ocr-dx.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blog-new3.jpg" alt="AI×OCRで紙業務自動化" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-15">2026/7/15</time>
                </div>
                <h3 class="blog-card__title">AI×OCRで紙業務はどこまで自動化できるのか？<br />〜請求書・レシート・契約書のDX最前線〜</h3>
                <div class="blog-card__category">AI × BPO/KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#OCR</span>
                  <span class="blog-card__tag">#AI OCR</span>
                  <span class="blog-card__tag">#DX</span>
                  <span class="blog-card__tag">#業務自動化</span>
                  <span class="blog-card__tag">#請求書処理</span>
                  <span class="blog-card__tag">#レシートOCR</span>
                  <span class="blog-card__tag">#契約書管理</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#AI学習データ</span>
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#データ入力</span>
                  <span class="blog-card__tag">#OCRチェック</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                  <span class="blog-card__tag">#品質保証</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="llm-eval.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/new-blog-4.jpg" alt="AI品質評価LLM Evaluation" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-20">2026/7/20</time>
                </div>
                <h3 class="blog-card__title">なぜAIだけでは品質を保証できないのか？<br />AI品質評価（LLM Evaluation）の重要性とは</h3>
                <div class="blog-card__category">AI × BPO/KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#AI品質評価</span>
                  <span class="blog-card__tag">#LLM Evaluation</span>
                  <span class="blog-card__tag">#生成AI</span>
                  <span class="blog-card__tag">#ChatGPT</span>
                  <span class="blog-card__tag">#AI運用</span>
                  <span class="blog-card__tag">#AI学習データ</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#プロンプト開発</span>
                  <span class="blog-card__tag">#品質保証</span>
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#DX推進</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="ai-human-jobs.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/newblog-66.jpg" alt="AI時代でも人が担う仕事" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-20">2026/7/20</time>
                </div>
                <h3 class="blog-card__title">AI時代でも人が担う仕事とは？<br />なくなる仕事・進化する仕事を考える</h3>
                <div class="blog-card__category">AI × BPO/KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#AI時代</span>
                  <span class="blog-card__tag">#生成AI</span>
                  <span class="blog-card__tag">#AIエージェント</span>
                  <span class="blog-card__tag">#Human in the Loop</span>
                  <span class="blog-card__tag">#AI品質評価</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#AI学習データ</span>
                  <span class="blog-card__tag">#人材育成</span>
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#業務改善</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="ai-bpo">
            <a href="ai-bpo-roles.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/s.jpg" alt="AI×BPO役割分担" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-25">2026/7/25</time>
                </div>
                <h3 class="blog-card__title">AI×BPOが企業の競争力を変える<br />人とAIの最適な役割分担とは？</h3>
                <div class="blog-card__category">AI × BPO/KPO</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#AI</span>
                  <span class="blog-card__tag">#生成AI</span>
                  <span class="blog-card__tag">#AIエージェント</span>
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#AI品質評価</span>
                  <span class="blog-card__tag">#OCR</span>
                  <span class="blog-card__tag">#業務効率化</span>
                  <span class="blog-card__tag">#DX推進</span>
                  <span class="blog-card__tag">#Human in the loop</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="myanmar">
            <a href="myanmar-outsourcing.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/s3.jpg" alt="ミャンマーアウトソーシング" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-25">2026/7/25</time>
                </div>
                <h3 class="blog-card__title">なぜ今、ミャンマーなのか？<br />AI時代に注目される新しいアウトソーシング拠点</h3>
                <div class="blog-card__category">ミャンマーアウトソーシング</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#ミャンマー</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#AIアウトソーシング</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#AI学習データ</span>
                  <span class="blog-card__tag">#海外人材</span>
                  <span class="blog-card__tag">#オフショア開発</span>
                  <span class="blog-card__tag">#日本品質</span>
                  <span class="blog-card__tag">#人材育成</span>
                  <span class="blog-card__tag">#DX推進</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="myanmar">
            <a href="myanmar-talent.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/s2.png" alt="ミャンマー人材の可能性" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-07-25">2026/7/25</time>
                </div>
                <h3 class="blog-card__title">ミャンマー人材の可能性<br />10年間で確信した「学び続ける力」とは</h3>
                <div class="blog-card__category">ミャンマーアウトソーシング</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#ミャンマー人材</span>
                  <span class="blog-card__tag">#人材育成</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#AI人材</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#AI学習データ</span>
                  <span class="blog-card__tag">#日本品質</span>
                  <span class="blog-card__tag">#オフショア開発</span>
                  <span class="blog-card__tag">#学び続ける力</span>
                  <span class="blog-card__tag">#DX推進</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="myanmar">
            <a href="japan-quality.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/width_800_12.png" alt="日本品質を海外で実現するには？" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-08-02">2026/8/2</time>
                </div>
                <h3 class="blog-card__title">日本品質を海外で実現するには？<br />品質管理の仕組みづくりとチーム育成の考え方</h3>
                <div class="blog-card__category">ミャンマーアウトソーシング</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#品質管理</span>
                  <span class="blog-card__tag">#日本品質</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#ミャンマー</span>
                  <span class="blog-card__tag">#人材育成</span>
                  <span class="blog-card__tag">#ダブルチェック</span>
                  <span class="blog-card__tag">#業務改善</span>
                  <span class="blog-card__tag">#AI品質保証</span>
                  <span class="blog-card__tag">#AIアノテーション</span>
                  <span class="blog-card__tag">#DX推進</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="myanmar">
            <a href="outsourcing.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/newblog-8.jpg" alt="海外アウトソーシング選定ポイント" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-08-09">2026/8/9</time>
                </div>
                <h3 class="blog-card__title">海外アウトソーシングは「安さ」で選ぶべきではない<br />本当に見るべき5つのポイント</h3>
                <div class="blog-card__category">ミャンマーアウトソーシング</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#海外アウトソーシング</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                  <span class="blog-card__tag">#BPO調達</span>
                  <span class="blog-card__tag">#品質管理</span>
                  <span class="blog-card__tag">#人材育成</span>
                  <span class="blog-card__tag">#コスト削減</span>
                  <span class="blog-card__tag">#業務改善</span>
                  <span class="blog-card__tag">#BCP</span>
                  <span class="blog-card__tag">#AIxBPO</span>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-card" data-cat="myanmar">
            <a href="quality.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blog-new-2.png" alt="日本とミャンマー、二つのチームで品質をつくる" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-08-15">2026/8/15</time>
                </div>
                <h3 class="blog-card__title">日本とミャンマー、二つのチームで品質をつくる<br />海外BPOにおける「日本の役割」とは</h3>
                <div class="blog-card__category">ミャンマーアウトソーシング</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                  <span class="blog-card__tag">#導入</span>
                  <span class="blog-card__tag">#日本品質</span>
                  <span class="blog-card__tag">#業務設計</span>
                  <span class="blog-card__tag">#人材育成</span>
                  <span class="blog-card__tag">#業務改善</span>
                  <span class="blog-card__tag">#海外アウトソーシング</span>
                  <span class="blog-card__tag">#オフショア</span>
                </div>
              </div>
            </a>
          </li>

           <li class="blog-card" data-cat="myanmar">
            <a href="bpocompany.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/blog-page5.png" alt="BPOは「丸投げ」では成功しない　業務移管を成功させる最初の30日間とは？" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-08-26">2026/8/26</time>
                </div>
                <h3 class="blog-card__title">BPOは「丸投げ」では成功しない<br />業務移管を成功させる最初の30日間とは？</h3>
                <div class="blog-card__category">BPO/KPO活用ガイド</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#BPO導入</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#業務移管</span>
                  <span class="blog-card__tag">#BPO立ち上げ</span>
                  <span class="blog-card__tag">#トライアル</span>
                  <span class="blog-card__tag">#品質管理</span>
                  <span class="blog-card__tag">#業務標準化</span>
                  <span class="blog-card__tag">#マニュアル作成</span>
                  <span class="blog-card__tag">#業務改善</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                  <span class="blog-card__tag">#AI×BPO</span>
                  <span class="blog-card__tag">#アウトソーシング</span>
                </div>
              </div>
            </a>
          </li>




            <li class="blog-card" data-cat="myanmar">
            <a href="bpo-post.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/width_blog5.png" alt="BPO導入後、どこまで任せるべきか？「作業代行」から「自走するチーム」へ育てる方法" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-08-30">2026/8/30</time>
                </div>
                <h3 class="blog-card__title">BPO導入後、どこまで任せるべきか？<br />「作業代行」から「自走するチーム」へ育てる方法</h3>
                <div class="blog-card__category">BPO/KPO活用ガイド</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                  <span class="blog-card__tag">#BPO運用</span>
                  <span class="blog-card__tag">#人材育成</span>
                  <span class="blog-card__tag">#自走型チーム</span>
                  <span class="blog-card__tag">#業務改善</span>
                  <span class="blog-card__tag">#品質管理</span>
                  <span class="blog-card__tag">#AI×BPO</span>
                  <span class="blog-card__tag">#生産性</span>
                </div>
              </div>
            </a>
          </li>





          
         







           <li class="blog-card" data-cat="myanmar">
            <a href="ai-page.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/width_166600.png" alt="BPO導入後、どこまで任せるべきか？「作業代行」から「自走するチーム」へ育てる方法" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-08-30">2026/8/30</time>
                </div>
                <h3 class="blog-card__title">国を越えて働く全ての人へ<br>環境も言葉も違う場所で、毎日を積み重ねているあなたを、心から応援しています</h3>
                
                <div class="blog-card__category">BPO/KPO活用ガイド</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#国を越えて働</span>
                  
                </div>
              </div>
            </a>
          </li>



          <li class="blog-card" data-cat="myanmar">
            <a href="blog-quality-team.php" class="blog-card__link">
              <div class="blog-card__image">
                <img src="assets/img/width_8B0.png" alt="BPOの品質は「人」で決まるのか？属人化しないチームをつくる5つの仕組み" width="300" height="170" loading="lazy" />
              </div>
              <div class="blog-card__content">
                <div class="blog-card__header">
                  <time class="blog-card__date" datetime="2026-09-06">2026/9/6</time>
                </div>
                <h3 class="blog-card__title">BPOの品質は「人」で決まるのか？<br>属人化しないチームをつくる5つの仕組み</h3>

                <div class="blog-card__category">BPO/KPO活用ガイド</div>
                <div class="blog-card__tags">
                  <span class="blog-card__tag">#BPO</span>
                  <span class="blog-card__tag">#KPO</span>
                  <span class="blog-card__tag">#海外BPO</span>
                  <span class="blog-card__tag">#ミャンマーBPO</span>
                  <span class="blog-card__tag">#属人化</span>
                  <span class="blog-card__tag">#品質管理</span>
                  <span class="blog-card__tag">#業務標準化</span>
                  <span class="blog-card__tag">#マニュアル</span>
                  <span class="blog-card__tag">#ナレッジ共有</span>
                  <span class="blog-card__tag">#人材育成</span>
                  <span class="blog-card__tag">#ダブルチェック</span>
                  <span class="blog-card__tag">#AI×BPO</span>
                  <span class="blog-card__tag">#業務改善</span>
                </div>
              </div>
            </a>
          </li>



        </ul>
      </div>
      <div class="dl-scrollbar" id="dl-scrollbar">
        <div class="dl-scrollbar__thumb" id="dl-thumb"></div>
      </div>
      </div>
    </div>
    </div>

    <!-- Right: Sidebar -->
    <aside class="dl-sidebar">

      <!-- Category -->
      <div class="blog-category-box">
        <div class="blog-category-box__head">カテゴリ</div>
        <ul class="blog-category-list">
          <li><button type="button" class="blog-category-item is-active" data-filter="all">すべての記事<span>&rsaquo;</span></button></li>
          <li><button type="button" class="blog-category-item" data-filter="bpo-kpo">BPO/KPO活用ガイド<span>&rsaquo;</span></button></li>
          <li><button type="button" class="blog-category-item" data-filter="ai-bpo">AI × BPO/KPO<span>&rsaquo;</span></button></li>
          <li><button type="button" class="blog-category-item" data-filter="myanmar">ミャンマーアウトソーシング<span>&rsaquo;</span></button></li>
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
  <script>
    (function () {
      "use strict";
      var tabs = document.querySelectorAll(".blog-filter-tab");
      var catItems = document.querySelectorAll(".blog-category-item");
      var cards = document.querySelectorAll(".blog-card");

      function applyFilter(filter) {
        cards.forEach(function (card) {
          card.hidden = filter !== "all" && card.getAttribute("data-cat") !== filter;
        });
        tabs.forEach(function (btn) {
          btn.classList.toggle("is-active", btn.getAttribute("data-filter") === filter);
        });
        catItems.forEach(function (btn) {
          btn.classList.toggle("is-active", btn.getAttribute("data-filter") === filter);
        });
        // Reset scroll to top and refresh the custom scrollbar thumb
        var scrollEl = document.getElementById("dl-scroll");
        if (scrollEl) {
          scrollEl.scrollTop = 0;
          scrollEl.dispatchEvent(new Event("scroll"));
        }
      }

      tabs.forEach(function (btn) {
        btn.addEventListener("click", function () {
          applyFilter(btn.getAttribute("data-filter"));
        });
      });
      catItems.forEach(function (btn) {
        btn.addEventListener("click", function () {
          applyFilter(btn.getAttribute("data-filter"));
        });
      });
    })();

    // ── Custom drag scrollbar ──
    (function () {
      "use strict";
      var scrollEl = document.getElementById("dl-scroll");
      var thumbEl = document.getElementById("dl-thumb");
      var barEl = document.getElementById("dl-scrollbar");
      if (!scrollEl || !thumbEl || !barEl) return;

      function updateThumb() {
        var scrollHeight = scrollEl.scrollHeight;
        var clientHeight = scrollEl.clientHeight;
        var scrollTop = scrollEl.scrollTop;
        var maxScroll = scrollHeight - clientHeight;
        var barHeight = barEl.clientHeight;
        var thumbHeight = Math.max(40, (clientHeight / scrollHeight) * barHeight);
        thumbEl.style.height = thumbHeight + "px";
        var maxThumbTop = barHeight - thumbHeight;
        var thumbTop = maxScroll > 0 ? (scrollTop / maxScroll) * maxThumbTop : 0;
        thumbEl.style.top = thumbTop + "px";
      }

      scrollEl.addEventListener("scroll", updateThumb);
      window.addEventListener("resize", updateThumb);

      // Drag the thumb
      var isDragging = false;
      var startY = 0;
      var startThumbTop = 0;

      thumbEl.addEventListener("mousedown", function (e) {
        isDragging = true;
        startY = e.clientY;
        startThumbTop = thumbEl.offsetTop;
        document.body.style.userSelect = "none";
        e.preventDefault();
      });

      document.addEventListener("mousemove", function (e) {
        if (!isDragging) return;
        var barHeight = barEl.clientHeight;
        var thumbHeight = thumbEl.offsetHeight;
        var maxThumbTop = barHeight - thumbHeight;
        var dy = e.clientY - startY;
        var newTop = Math.min(Math.max(0, startThumbTop + dy), maxThumbTop);
        thumbEl.style.top = newTop + "px";
        var maxScroll = scrollEl.scrollHeight - scrollEl.clientHeight;
        scrollEl.scrollTop = maxScroll > 0 ? (newTop / maxThumbTop) * maxScroll : 0;
      });

      document.addEventListener("mouseup", function () {
        isDragging = false;
        document.body.style.userSelect = "";
      });

      // Click on the track to jump
      barEl.addEventListener("mousedown", function (e) {
        if (e.target === thumbEl) return;
        var barHeight = barEl.clientHeight;
        var thumbHeight = thumbEl.offsetHeight;
        var maxThumbTop = barHeight - thumbHeight;
        var newTop = Math.min(
          Math.max(0, e.clientY - barEl.getBoundingClientRect().top - thumbHeight / 2),
          maxThumbTop
        );
        thumbEl.style.top = newTop + "px";
        var maxScroll = scrollEl.scrollHeight - scrollEl.clientHeight;
        scrollEl.scrollTop = maxScroll > 0 ? (newTop / maxThumbTop) * maxScroll : 0;
      });

      // Initial position
      updateThumb();
    })();
  </script>
</body>
</html>
