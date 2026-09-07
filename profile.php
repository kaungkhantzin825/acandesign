<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A CAN SOLUTIONSの会社情報。会社概要・経営理念・沿革・役員紹介をご紹介します。" />
  <title>会社情報 | A CAN SOLUTIONS</title>
  <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <style>
    .site-header__nav { gap: 2.75rem; margin-left: 8.5rem; }
    .site-header__nav a { text-decoration: none; color: var(--color-ink); font-size: 15px; font-weight: bold; font-family: "Anonymous Pro", monospace; white-space: nowrap; transition: color var(--transition); }
    .site-header__cta { display: inline-flex; align-items: center; gap: 0.3rem; padding: 0.45rem 1.1rem; background: #12499e; color: #fff; text-decoration: none; border-radius: 999px; font-size: 16px; font-weight: 700; font-family: "Anonymous Pro", monospace; white-space: nowrap; flex-shrink: 0; transition: background var(--transition), opacity var(--transition); }
    .site-header__cta--dl { background: #dc2626; }
    .site-header__cta--dl:hover { background: #b91c1c; }

    *, *::before, *::after { box-sizing: border-box; }
    body { font-family: "Noto Sans JP", sans-serif; background: #fff; color: #1a1a2e; margin: 0; padding: 60px 0 0; line-height: 1.7; overflow-x: hidden; }
    img { max-width: 100%; height: auto; display: block; }
    a { color: inherit; }

    /* ── HERO ── */
    .prof-hero {
      width: 100%;
      background: #fff;
      overflow: hidden;
    }
    .prof-hero__img {
      display: block;
      width: 86%;
      margin: 0 auto;
    }

    /* ── BREADCRUMB ── */
    .prof-breadcrumb {
      width: 86%;
      margin: 0.5rem auto 0;
      font-size: 0.78rem;
      color: #6b7280;
    }
    .prof-breadcrumb a { color: #12499e; text-decoration: none; }
    .prof-breadcrumb a:hover { text-decoration: underline; }

    /* ── WRAPPER ── */
    .prof-wrap {
      width: 86%;
      margin: 0 auto;
      padding-top: 0.5rem;
      padding-bottom: 3rem;
    }

    /* ── SECTION HEADER ── */
    .prof-sec-head {
      font-size: 1rem;
      font-weight: 700;
      color: #12499e;
      background: transparent;
      border-left: 4px solid #12499e;
      padding: 0.2rem 0 0.2rem 0.75rem;
      margin-bottom: 0.9rem;
      line-height: 1.4;
    }
    .prof-sec-head--red {
      color: #12499e;
      border-left-color: #12499e;
    }

    /* ── TWO COLUMN ROWS ── */
    .prof-row {
      display: flex;
      gap: 2.5rem;
      margin-top: 2rem;
      align-items: flex-start;
    }
    .prof-row--wide-gap {
      gap: 16.1%;
    }
    .prof-col-left  { flex: 0 0 57%; min-width: 0; }
    .prof-col-right { flex: 1; min-width: 0; }
    .prof-myanmar__box { background: #f0f4fb; border-radius: 8px; padding: 1.2rem; }
    .prof-col-half  { flex: 1; min-width: 0; }


    /* ── COMPANY TABLE ── */
    .prof-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.875rem;
    }
    .prof-table tr {
      border-bottom: 1px solid #cdd4df;
    }
    .prof-table tr:last-child { border-bottom: none; }
    .prof-table th {
      background: #f0f3f8;
      color: #1a1a2e;
      font-weight: 700;
      padding: 0.75rem 0.8rem;
      text-align: center;
      white-space: nowrap;
      width: 26%;
      vertical-align: middle;
      border-right: 1px solid #cdd4df;
      font-size: 0.85rem;
      letter-spacing: 0.01em;
    }
    .prof-table td {
      padding: 0.75rem 1rem;
      color: #1a1a2e;
      vertical-align: top;
      line-height: 1.8;
      font-size: 0.875rem;
      background: #fff;
    }
    .prof-table td a { color: #12499e; text-decoration: none; }
    .prof-table td a:hover { text-decoration: underline; }
    .prof-table-wrap {
      border: 1px solid #cdd4df;
      border-radius: 0;
      overflow: hidden;
    }

    /* ── MYANMAR GROUP ── */
    .prof-myanmar__photo {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 4px;
      margin-bottom: 0.75rem;
    }
    .prof-myanmar__name {
      font-size: 1rem;
      font-weight: 700;
      color: #12499e;
      margin: 0 0 0.6rem;
    }

    /* ── SIMPLE DL LIST (Myanmar section) ── */
    .prof-dl {
      margin: 0;
      padding: 0;
    }
    .prof-dl__row {
      display: flex;
      gap: 0;
      padding: 0.45rem 0;
      font-size: 0.875rem;
      align-items: flex-start;
      line-height: 1.75;
    }
    .prof-dl dt {
      flex-shrink: 0;
      width: 5.5rem;
      color: #374151;
      font-weight: 700;
      font-size: 0.85rem;
      padding-top: 0.05rem;
    }
    .prof-dl dd {
      flex: 1;
      margin: 0;
      color: #1a1a2e;
    }
    .prof-dl__map {
      display: inline-block;
      margin-left: 0.4rem;
      color: #12499e;
      text-decoration: none;
      font-size: 0.82rem;
      font-weight: 700;
    }
    .prof-dl__map:hover { text-decoration: underline; }
    .prof-dl__note {
      display: block;
      font-size: 0.8rem;
      color: #6b7280;
      margin-top: 0.1rem;
    }

    /* ── PHILOSOPHY (経営理念) ── */
    .prof-philosophy {
      background: #fff;
      border: none;
      border-radius: 10px;
      padding: 2rem 1.8rem;
      width: 630px;
      margin: 0 auto;
    }
    .prof-philosophy__title {
      font-size: 22px;
      font-weight: 900;
      color: #12499e;
      letter-spacing: 0.02em;
      margin: 0 0 0.6rem;
      line-height: 1.35;
      font-family: "Anonymous Pro", monospace;
      text-align: center;
    }
    .prof-philosophy__sub {
      font-size: 15px;
      font-family: "Anonymous Pro", monospace;
      line-height: 1.85;
      color: #374151;
      margin: 0 0 1.8rem;
      text-align: center;
    }
    .prof-philosophy__values {
      display: flex;
      gap: 1rem;
    }
    .prof-philosophy__value {
      flex: 1;
      text-align: center;
      padding: 0 0.3rem;
    }
    .prof-philosophy__value-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 0.7rem;
      color: #12499e;
    }
    .prof-philosophy__value-icon svg {
      width: 52px;
      height: 52px;
      stroke: #12499e;
      fill: none;
      stroke-width: 1.5;
      stroke-linecap: round;
      stroke-linejoin: round;
    }
    .prof-philosophy__value-label {
      font-size: 11px;
      font-weight: 700;
      font-family: "Anonymous Pro", monospace;
      color: #1a1a2e;
      margin-bottom: 0.3rem;
      display: block;
    }
    .prof-philosophy__value-desc {
      font-size: 11px;
      font-family: "Anonymous Pro", monospace;
      color: #6b7280;
      line-height: 1.6;
    }

    /* ── WHY US ── */
    .prof-why__list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }
    .prof-why__item {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      background: none;
      border-radius: 0;
      padding: 0.6rem 0;
      border-bottom: 1px solid #f0f0f0;
    }
    .prof-why__item:last-child { border-bottom: none; }
    .prof-why__check {
      width: 26px;
      height: 26px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 0.1rem;
    }
    .prof-why__text {
      font-size: 13px;
      font-weight: 700;
      font-family: "Anonymous Pro", monospace;
      color: #12499e;
      line-height: 1.5;
    }
    .prof-why__text span {
      display: block;
      font-weight: 400;
      font-size: 10px;
      font-family: "Anonymous Pro", monospace;
      color: #6b7280;
      margin-top: 0.2rem;
    }

    /* ── TIMELINE (沿革) ── */
    .prof-timeline {
      position: relative;
      padding-left: 2.5rem;
    }
    .prof-timeline::before {
      content: '';
      position: absolute;
      left: 12px;
      top: 15px;
      height: calc(100% - 2rem - 12px);
      width: 3px;
      background: #12499e;
    }
    .prof-timeline__item {
      position: relative;
      padding-bottom: 2rem;
      padding-left: 1.5rem;
    }
    .prof-timeline__item:last-child { 
      padding-bottom: 0;
    }
    .prof-timeline__dot {
      position: absolute;
      left: -2.5rem;
      top: 0px;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: #12499e;
      border: none;
      box-shadow: none;
    }
    .prof-timeline__year {
      font-size: 15px;
      font-weight: 700;
      color: #12499e;
      font-family: "Anonymous Pro", monospace;
      margin-bottom: 0.15rem;
    }
    .prof-timeline__desc {
      font-size: 13px;
      color: #1a1a2e;
      line-height: 1.6;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 400;
    }

    /* ── TEAM ── */
    .prof-team__container {
      position: relative;
      border-radius: 0;
      overflow: hidden;
    }
    .prof-team__photo {
      width: 100%;
      height: auto;
      display: block;
    }
    .prof-team__stats {
      display: flex;
      background: #12499e;
      padding: 1.2rem 1.5rem;
      gap: 0;
      align-items: center;
      justify-content: space-between;
    }
    .prof-team__stat {
      flex: 1;
      color: #fff;
      display: flex;
      align-items: center;
      gap: 0.8rem;
      padding: 0 1rem;
      border-right: 2px solid rgba(255,255,255,0.3);
    }
    .prof-team__stat:last-child {
      border-right: none;
    }
    .prof-team__stat-icon {
      width: 45px;
      height: 45px;
      flex-shrink: 0;
    }
    .prof-team__stat-content {
      display: flex;
      flex-direction: column;
      gap: 0.1rem;
      min-width: 0;
      flex: 1;
    }
    .prof-team__stat-title {
      font-size: 14px;
      font-weight: 700;
      display: block;
      line-height: 1.3;
      font-family: "Noto Sans JP", sans-serif;
      white-space: nowrap;
    }
    .prof-team__stat-num {
      font-size: 18px;
      font-weight: 700;
      display: block;
      line-height: 1.3;
      font-family: "Noto Sans JP", sans-serif;
      white-space: nowrap;
    }
    .prof-team__stat-label {
      font-size: 12px;
      line-height: 1.4;
      display: block;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 400;
      white-space: nowrap;
    }

    /* ── EXECUTIVES ── */
    .prof-exec-section {
      margin-top: 2.5rem;
      border-top: 1px solid #e5e7eb;
      padding-top: 2rem;
    }
    .prof-exec__intro {
      font-size: 0.9rem;
      line-height: 1.9;
      color: #6b7280;
      margin-bottom: 0.8rem;
      text-align: center;
    }
    .prof-exec__quote {
      font-size: 0.9rem;
      font-weight: 700;
      color: black;
      margin-bottom: 2rem;
      text-align: center;
    }
    .prof-exec__grid {
      display: flex;
      gap: 16rem;
      justify-content: center;
    }
    .prof-exec__card {
      flex: 0 0 auto;
      max-width: 240px;
      text-align: center;
    }
    .prof-exec__name {
    font-size: 0.95rem;
    font-weight: 700;
    color: #1a1a2e;
    margin: 0 0 -0.75rem;
    font-family: "Anonymous Pro", monospace;
    letter-spacing: 0.04em;
}
    .prof-exec__role {
      font-size: 0.7rem;
      color: #6b7280;
      font-weight: 500;
      line-height: 1.5;
      margin-bottom: 0.2rem;
    }
    .prof-exec__photo {
      /* width: 100%; */
      max-width: 200px;
      height: 220px;
      object-fit: cover;
      object-position: top;
      border-radius: 0;
      margin: 0 auto;
      display: block;
    }

    /* ── BOTTOM ROW: CTA BANNER + CONTACT ── */
    .prof-bottom-row {
      width: 86%;
      max-width: 1168px;
      margin: 3rem auto 2rem;
      display: flex;
      gap: 1.5rem;
      align-items: stretch;
    }

    /* ── CTA BANNER ── */
    .prof-cta-banner {
      flex: 0 0 320px;
      /* border-radius: 12px; */
      overflow: hidden;
      position: relative;
      min-height: 200px;
    }
    .prof-cta-banner__bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      
    }
    .prof-cta-banner__content {
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: flex-end;
      padding: 1.5rem;
      gap: 1rem;
    }
    .prof-cta-banner__text {
     margin-left: 98px;
    align-self: center;
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    line-height: 1.7;
      /* text-align: center; */
    }
    .prof-cta-banner__btns {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.8rem;
    }
    .prof-cta-banner__btn {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.4rem 0.5rem 0.4rem 1rem;
      border-radius: 999px;
      font-size: 0.8rem;
      font-weight: 700;
      text-decoration: none;
      white-space: nowrap;
      transition: opacity .2s;
      min-width: auto;
      justify-content: space-between;
    }
    .prof-cta-banner__btn::after {
      content: '→';
      display: flex;
      align-items: center;
      justify-content: center;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: #fff;
      font-size: 16px;
      font-weight: bold;
      flex-shrink: 0;
    }
    .prof-cta-banner__btn:hover { opacity: 0.85; }
    .prof-cta-banner__btn--dl { background: #dc2626; color: #fff; }
    .prof-cta-banner__btn--dl::after { color: #dc2626; }
    .prof-cta-banner__btn--contact { background: #12499e; color: #fff; }
    .prof-cta-banner__btn--contact::after { color: #12499e; }

    /* ── CONTACT SECTION ── */
    .prof-contact {
      flex: 1;
      min-width: 0;
      margin: 0;
      background: #f7f7f7;
      border-radius: 12px;
      padding: 1rem 1.5rem;
    }
    .prof-contact__title {
      font-size: 17px;
      font-weight: 700;
      color: #13499e;
      margin-bottom: 1rem;
    }
    .prof-contact__cards {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.2rem;
    }
    .prof-contact__card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 1.3rem 1.2rem;
      display: flex;
      align-items: flex-start;
      gap: 0.9rem;
    }
    .prof-contact__icon { width: 71px; flex-shrink: 0; object-fit: contain; }
    .prof-contact__label { font-size: 15px; font-weight: 700; color: #13499e; margin: 0 0 0.15rem; }
    .prof-contact__hours { font-size: 13px; color: #9ca3af; margin: 0 0 0.2rem; font-family: "Anonymous Pro", monospace; }
    .prof-contact__value { font-size: 25px; font-weight: 400; color: #000; margin: 0; line-height: 1.2; }
    .prof-contact__link { font-size: 23px; font-weight: 400; color: #000; text-decoration: none; word-break: break-all; }
    .prof-contact__link:hover { text-decoration: underline; color: #12499e; }

    .site-footer { background: white; padding-block: 1.75rem; }

    /* ── RESPONSIVE ── */
    @media (max-width: 768px) {
      .prof-hero__img { width: 100%; }
      .prof-breadcrumb { width: 92%; }
      .prof-wrap { width: 92%; }
      .prof-row { flex-direction: column; gap: 1.5rem; }
      .prof-col-left, .prof-col-right, .prof-col-half { flex: none; width: 100%; }
      .prof-philosophy { width: 100%; padding: 1.5rem 1.2rem; }
      .prof-philosophy__title { font-size: 18px; }
      .prof-philosophy__values { gap: 0.6rem; }
      .prof-team__stats { flex-direction: column; gap: 0; padding: 1rem; }
      .prof-team__stat { border-right: none; border-bottom: 2px solid rgba(255,255,255,0.3); padding: 1rem 0.5rem; }
      .prof-team__stat:last-child { border-bottom: none; }
      .prof-team__stat-icon { width: 45px; height: 45px; }
      .prof-team__stat-title { font-size: 14px; }
      .prof-team__stat-num { font-size: 18px; }
      .prof-team__stat-label { font-size: 12px; }
      .prof-exec__grid { flex-direction: column; align-items: center; gap: 1.5rem; }
      .prof-exec__photo { height: 220px; }
      .prof-bottom-row { width: 92%; flex-direction: column; margin: 2rem auto; }
      .prof-cta-banner { flex: none; width: 100%; min-height: 180px; }
      .prof-cta-banner__text { margin-left: 0; text-align: center; }
      .prof-cta-banner__btns { width: 100%; }
      .prof-cta-banner__btn { justify-content: center; }
      .prof-contact { padding: 1.2rem; }
      .prof-contact__cards { grid-template-columns: 1fr; }
      .site-footer__row { flex-direction: column; align-items: center; gap: 1rem; }
      .site-footer__nav { flex-wrap: wrap; justify-content: center; gap: 0.3rem 0.8rem; }
      .site-footer__link { white-space: nowrap; }
      .site-footer__divider { display: none; }
    }
    a.map-link {
    text-decoration: underline;
}
  </style>
</head>
<body>

<?php include 'menu.php'; ?>

<!-- Hero -->
<section class="prof-hero">
  <img src="assets/img/profile.png" alt="会社情報" class="prof-hero__img" />
</section>

<!-- Breadcrumb -->
<!-- <nav class="prof-breadcrumb">
  <a href="index.php">HOME</a> &rsaquo; 会社情報
</nav> -->

<!-- Main content -->
<div class="prof-wrap">

  <!-- ROW 1: 会社概要 + グループ会社 -->
  <div class="prof-row">

    <!-- 会社概要 -->
    <div class="prof-col-left">
      <div class="prof-sec-head">会社概要</div>
      <div class="prof-table-wrap">
        <table class="prof-table">
          <tr>
            <th>会社名</th>
            <td>A CAN SOLUTIONS 合同会社</td>
          </tr>
          <tr>
            <th>代表社員</th>
            <td>門 正仁<br>中村 政栄</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2025年11月日<br><span style="font-size:0.8rem;color:#6b7280;">※ミャンマー法人は2016年</span></td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>
              〒732-0052<br>
              広島県広島市東区光町二丁目7番35-201 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://maps.app.goo.gl/crENqvZfrofPFaC27" target="_blank" rel="noopener" style="text-decoration: underline;">Map </a>
            </td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>
              ・コンピューターソフトウエア及びアプリケーションの企画、開発、設計、製造、　販売、賃貸、運営及び保守<br>
              ・インターネットを利用した各種情報提供サービス業<br>
              ・クラウドサービス、デジタルコンテンツ及びWEBサイトの 企画、製作、運営、配信　及び販売　他
            </td>
          </tr>
          <tr>
            <th>決算</th>
            <td>3月末</td>
          </tr>
          <tr>
            <th>主要取引銀行</th>
            <td>広島市信用組合</td>
          </tr>
          <tr>
            <th>許可番号</th>
            <td>適格請求書発行事業者登録番号:T5240003007468</td>
          </tr>
        </table>
      </div>
    </div>

    <!-- グループ会社（ミャンマー） -->
    <div class="prof-col-right">
      <div class="prof-sec-head">グループ会社（ミャンマー）</div>
      <div class="prof-myanmar__box">
      <img src="assets/img/office.png" alt="ヤンゴンオフィス" class="prof-myanmar__photo" />
      <p class="prof-myanmar__name">A CAN SOLUTIONS MYANMAR CO.,Ltd.</p>
      <dl class="prof-dl">
        <div class="prof-dl__row">
          <dt>設立</dt>
          <dd>2025年8月8日</dd>
        </div>
        <div class="prof-dl__row">
          <dt>所在地</dt>
          <dd>
            No.608, YADANER HOUSING, PYAY RD, 9MILE, MAYANGONE, YANGON, MYANMAR
            <a href="https://www.google.com/maps?q=place_id:ChIJCb9hZQCVwTARSGTtL4s9GUw" style="text-decoration: underline;" target="_blank" rel="noopener" class="prof-dl__map">Map</a>
            <span class="prof-dl__note">※ヤンゴン国際空港から車で約10分</span>
          </dd>
        </div>
        <div class="prof-dl__row">
          <dt>代表者</dt>
          <dd>KYAWT KAY KHINE</dd>
        </div>
        <div class="prof-dl__row">
          <dt>従業員数</dt>
          <dd>約30名</dd>
        </div>
        <div class="prof-dl__row">
          <dt>事業内容</dt>
          <dd>AIデータ作成関連業務 / BPO / KPO / ITサービス業<br>/ 服飾デザイン、販売</dd>
        </div>
      </dl>
      </div><!-- /prof-myanmar__box -->
    </div><!-- /prof-col-right -->

  </div><!-- /row1 -->

  <!-- ROW 2: 経営理念 (left) + 選ばれる理由 (right) -->
  <div class="prof-row prof-row--wide-gap">

    <!-- 経営理念 -->
    <div class="prof-col-half">
      <div class="prof-sec-head">経営理念</div>
      <div class="prof-philosophy">
        <h2 class="prof-philosophy__title">AI &times; Human=Beyond Outsourcing</h2>
        <p class="prof-philosophy__sub">人とAIの力を融合し、日本品質のマネジメントで、<br>お客様のビジネスの未来を共に創造します。</p>
        <div class="prof-philosophy__values">

          <div class="prof-philosophy__value">
            <div class="prof-philosophy__value-icon">
              <img src="assets/img/4509c7c7-fff1-4e10-9460-a688c2478e93.png" alt="人を大切に" style="height: 67px;" />
            </div>
            <span class="prof-philosophy__value-label">人を大切に</span>
            <p class="prof-philosophy__value-desc">多様な人材の力を信じ、<br>成長と活躍を支援します。</p>
          </div>

          <div class="prof-philosophy__value">
            <div class="prof-philosophy__value-icon">
              <img src="assets/img/8bab3d59-20e2-4181-b78c-5adf05de440c.png" alt="品質にこだわる" style="height: 67px;" />
            </div>
            <span class="prof-philosophy__value-label">品質にこだわる</span>
            <p class="prof-philosophy__value-desc">日本品質のマネジメントで、<br>高品質なサービスを提供します。</p>
          </div>

          <div class="prof-philosophy__value">
            <div class="prof-philosophy__value-icon">
              <img src="assets/img/73468981-f617-4e11-955c-0b94f3e87770.png" alt="未来を創る" style="height: 67px;" />
            </div>
            <span class="prof-philosophy__value-label">未来を創る</span>
            <p class="prof-philosophy__value-desc">AIとテクノロジーで、<br>新しい価値を創造します。</p>
          </div>

        </div>
      </div>
    </div>

    <!-- 選ばれる理由 -->
    <div class="prof-col-half">
      <div class="prof-sec-head prof-sec-head--red">A CAN SOLUTIONS が選ばれる理由</div>
      <ul class="prof-why__list">
        <li class="prof-why__item">
          <div class="prof-why__check"><img src="assets/img/ChatGPT_Image_Aug_14__2026__11_03_28_AM-removebg-preview.png" alt="" style="width: 26px; height: 26px;" /></div>
          <div class="prof-why__text">ミャンマーで365日24時間の業務対応が可能<span>人とAIの力を融合し、日本品質のマネジメントで、お客様のビジネスの未来を共に創造します。</span></div>
        </li>
        <li class="prof-why__item">
          <div class="prof-why__check"><img src="assets/img/ChatGPT_Image_Aug_14__2026__11_03_28_AM-removebg-preview.png" alt="" style="width: 26px; height: 26px;" /></div>
          <div class="prof-why__text">日本の業務に精通、日本語堪能スタッフを多数配置<span>日本語検定取得者が半数、日本のビジネスプロセスを深く理解しています。</span></div>
        </li>
        <li class="prof-why__item">
          <div class="prof-why__check"><img src="assets/img/ChatGPT_Image_Aug_14__2026__11_03_28_AM-removebg-preview.png" alt="" style="width: 26px; height: 26px;" /></div>
          <div class="prof-why__text">日本の言葉に精通、日本語検定スタッフを多数配置<span>日本語検定取得者が多く、日本のビジネスプロセスを深く理解しています。</span></div>
        </li>
        <li class="prof-why__item">
          <div class="prof-why__check"><img src="assets/img/ChatGPT_Image_Aug_14__2026__11_03_28_AM-removebg-preview.png" alt="" style="width: 26px; height: 26px;" /></div>
          <div class="prof-why__text">日本リソース（就労支援含む）を活用し、顧客ニーズを社内に蓄積しやすい体制<span>国内外のリソースを最適に組み合わせ、ニーズに素早く対応します。</span></div>
        </li>
        <li class="prof-why__item">
          <div class="prof-why__check"><img src="assets/img/ChatGPT_Image_Aug_14__2026__11_03_28_AM-removebg-preview.png" alt="" style="width: 26px; height: 26px;" /></div>
          <div class="prof-why__text">ミャンマー進出10年の実績と信頼<span>2016年の活動開始以来、現地での確かな実績とネットワークを構築。</span></div>
        </li>
        <li class="prof-why__item">
          <div class="prof-why__check"><img src="assets/img/ChatGPT_Image_Aug_14__2026__11_03_28_AM-removebg-preview.png" alt="" style="width: 26px; height: 26px;" /></div>
          <div class="prof-why__text">情報セキュリティの徹底<span>厳格なセキュリティ管理で、安心・安全なサービスを提供します。</span></div>
        </li>
      </ul>
    </div>

  </div><!-- /row2 -->

  <!-- ROW 3: 沿革 + チーム紹介 -->
  <div class="prof-row">

    <!-- 沿革 -->
    <div class="prof-col-half">
      <div class="prof-sec-head">沿革</div>
      <div class="prof-timeline">
        <div class="prof-timeline__item">
          <div class="prof-timeline__dot"></div>
          <div class="prof-timeline__year">2016年8月</div>
          <div class="prof-timeline__desc">ミャンマーに進出し前身の法人設立</div>
        </div>
        <div class="prof-timeline__item">
          <div class="prof-timeline__dot"></div>
          <div class="prof-timeline__year">2017年</div>
          <div class="prof-timeline__desc">BPOサービスの提供開始</div>
        </div>
        <div class="prof-timeline__item">
          <div class="prof-timeline__dot"></div>
          <div class="prof-timeline__year">2019年</div>
          <div class="prof-timeline__desc">アノテーション事業に着手</div>
        </div>
        <div class="prof-timeline__item">
          <div class="prof-timeline__dot"></div>
          <div class="prof-timeline__year">2025年8月</div>
          <div class="prof-timeline__desc">A CAN SOLUTIONS MYANMAR CO.,Ltd. 設立</div>
        </div>
        <div class="prof-timeline__item">
          <div class="prof-timeline__dot"></div>
          <div class="prof-timeline__year">2025年11月</div>
          <div class="prof-timeline__desc">合同会社 A CAN SOLUTIONS（日本法人）設立</div>
        </div>
      </div>
    </div>

    <!-- チーム紹介 -->
    <div class="prof-col-half" style="flex: 0 0 57%;">
      <div class="prof-sec-head">チーム紹介</div>
      <div class="prof-team__container">
        <img src="assets/img/width_800_22.png" alt="チーム写真" class="prof-team__photo" />
        <div class="prof-team__stats">
          <div class="prof-team__stat">
            <svg class="prof-team__stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <div class="prof-team__stat-content">
              <span class="prof-team__stat-title">ミャンマー拠点</span>
              <span class="prof-team__stat-num">30名＋</span>
              <span class="prof-team__stat-label">日本語検定合格者多数</span>
            </div>
          </div>
          <div class="prof-team__stat">
            <svg class="prof-team__stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg>
            <div class="prof-team__stat-content">
              <span class="prof-team__stat-title">日本リソース</span>
              <span class="prof-team__stat-num">10名＋</span>
              <span class="prof-team__stat-label">就労支援事業所と連携</span>
            </div>
          </div>
          <div class="prof-team__stat">
            <svg class="prof-team__stat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="8.5" cy="7" r="4"></circle>
              <polyline points="17 11 19 13 23 9"></polyline>
            </svg>
            <div class="prof-team__stat-content">
              <span class="prof-team__stat-title">平均年齢</span>
              <span class="prof-team__stat-num">20代中心</span>
              <span class="prof-team__stat-label">若くて学習意欲が高い</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /row3 -->

  <!-- 役員紹介 -->
  <div class="prof-exec-section">
    <div class="prof-sec-head">役員紹介</div>
    <p class="prof-exec__intro">
      <p style="
    text-align: center;
    color: black;
    font-weight: bold;
">A CAN SOLUTIONS は、ミャンマーを拠点に、先進的かつ信頼性の高いITソリューションを提供する企業です。</p>
     ソフトウェア開発、ウェブシステム構築、デザイン開発、BPOサービス提供等、多様なサービスを通じて、お客様のビジネス成長とデジタル変革（DX）を力強くサポートいたします。高度な技術力でミャンマー国内外の企業と連携し、持続可能で価値ある成果を提供します。
    </p>
    <p class="prof-exec__quote">「テクノロジーで社会を前進させる」をミッションに、誠実な対応と革新的な発想で、地域と世界をつなぐ架け橋となることを目指しています。</p>
    <div class="prof-exec__grid">
      <div class="prof-exec__card">
        <p class="prof-exec__name">MASAHITO KADO</p>
        <p class="prof-exec__role">CEO</p>
         <p class="prof-exec__role" style="visibility: hidden;">CEO</p>
        
        <img src="assets/img/kado.jpg" alt="MASAHITO KADO" class="prof-exec__photo" />
      </div>
      <div class="prof-exec__card">
        <p class="prof-exec__name">KYAWI KAY KHINE</p>
        <p class="prof-exec__role">A CAN SOLUTION MYANMAR CO.,Ltd<br>MANAGING DIRECTOR</p>
        <img src="assets/img/khine.jpg" alt="KYAWI KAY KHINE" class="prof-exec__photo" />
      </div>
    </div>
  </div>


</div><!-- /prof-wrap -->

<!-- Bottom: CTA Banner + Contact -->
<div class="prof-bottom-row">

  <!-- CTA Banner -->
  <div class="prof-cta-banner">
    <img src="assets/img/profile-bagoda.jpg" alt="" class="prof-cta-banner__bg" />
    <div class="prof-cta-banner__content">
      <p class="prof-cta-banner__text">ミャンマー・日本のリソースを<br>最適に組み合わせ、<br>業務改革を支援します。</p>
      <div class="prof-cta-banner__btns">
        <a href="download.php" class="prof-cta-banner__btn prof-cta-banner__btn--dl">資料ダウンロード</a>
        <a href="contectus.php" class="prof-cta-banner__btn prof-cta-banner__btn--contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;お問い合わせ&nbsp;&nbsp;&nbsp;&nbsp;</a>
      </div>
    </div>
  </div>

  <!-- Contact section -->
  <section class="prof-contact">
    <h2 class="prof-contact__title">お急ぎの方はこちらからもご連絡いただけます</h2>
    <div class="prof-contact__cards">
      <div class="prof-contact__card">
        <img src="assets/img/t.png" alt="電話" class="prof-contact__icon" />
        <div>
          <p class="prof-contact__label">電話で相談する</p>
          <p class="prof-contact__hours">平日 10:00〜17:00</p>
          <p class="prof-contact__value">(082)209-6669</p>
        </div>
      </div>
      <div class="prof-contact__card">
        <img src="assets/img/t (1).png" alt="メール" class="prof-contact__icon" />
        <div>
          <p class="prof-contact__label">メールで相談する</p>
          <a href="mailto:info@acan-sol.com" class="prof-contact__link">info@acan-sol.com</a>
        </div>
      </div>
    </div>
  </section>

</div><!-- /prof-bottom-row -->

<?php include 'footer.php'; ?>

</body>
</html>
