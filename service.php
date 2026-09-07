<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A CAN SOLUTIONSのサービス一覧。AI・データサービス、BPO、KPO、Technology、Design/Creative、ミャンマー進出支援まで、AI×Humanで企業の業務を次のステージへ。" />
  <meta name="theme-color" content="#ffffff" />
  <title>SERVICE | サービス | A CAN SOLUTIONS</title>
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

    .svc-wrap {
      width: 88%;
      max-width: 1240px;
      margin: 0 auto;
    }

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

    /* ══════════════════════════════
       SERVICE CARDS
    ══════════════════════════════ */
    .svc-section { margin-top: 3.5rem; }

    .svc-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2.5rem 1.75rem;
    }

    .svc-card {
      background: #fff;
      padding: 1rem 0.75rem 1.25rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: transform 0.2s;
    }

    .svc-card:hover {
      transform: translateY(-3px);
    }

    .svc-card__icon {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.25rem;
      flex-shrink: 0;
    }

    .svc-card__icon svg {
      width: 46px;
      height: 46px;
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .svc-card__title {
      font-size: 1.5rem;
      font-weight: 900;
      text-align: center;
      margin: 0 0 0.15rem;
      line-height: 1.25;
    }

    .svc-card__subtitle {
      font-family: "Anonymous Pro", monospace;
      font-size: 0.88rem;
      font-weight: 700;
      text-align: center;
      letter-spacing: 0.02em;
      margin: 0 0 0.9rem;
      min-height: 1.2em;
    }

    .svc-card__desc {
      font-size: 0.83rem;
      font-weight: 600;
      color: #374151;
      text-align: center;
      line-height: 1.75;
      margin: 0 0 1.5rem;
      min-height: 3.5em;
    }

    .svc-card__features {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0.4rem;
      margin-bottom: 1.75rem;
      width: 100%;
    }

    .svc-card__feature {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .svc-card__feature-icon {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: #ffffff;
      border: 1.5px solid #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
      flex-shrink: 0;
    }

    .svc-card__feature-icon svg {
      width: 24px;
      height: 24px;
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .svc-card__feature span.svc-card__feature-label {
      font-size: 0.66rem;
      font-weight: 700;
      color: #334155;
      line-height: 1.3;
      margin-top: 0.45rem;
      max-width: 78px;
      display: block;
    }

    .svc-card__btn {
      margin-top: auto;
      width: 100%;
      min-height: 52px;
      display: inline-flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 0.5rem 0.5rem 1.4rem;
      border-radius: 999px;
      color: #ffffff !important;
      font-size: 0.95rem;
      font-weight: 700;
      text-decoration: none;
      transition: opacity 0.2s, transform 0.2s;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .svc-card__btn:hover,
    .svc-card__btn:focus {
      color: #ffffff !important;
      opacity: 0.92;
      transform: translateY(-1px);
    }

    .svc-wrap a.svc-card__btn,
    .svc-wrap a.svc-card__btn:hover,
    .svc-wrap a.svc-cta__btn,
    .svc-wrap a.svc-cta__btn:hover {
      color: #ffffff !important;
    }

    .svc-card__btn > span:first-child {
      flex: 1;
      text-align: center;
      line-height: 1.3;
      padding-right: 0.4rem;
    }

    .svc-card__btn-icon {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .svc-card__btn-icon svg {
      width: 16px;
      height: 16px;
      stroke-width: 3.2;
      fill: none;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    /* Color themes */
    .svc-card--blue .svc-card__icon { background: #eaf1ff; }
    .svc-card--blue .svc-card__icon svg { stroke: #0052cc; }
    .svc-card--blue .svc-card__title, .svc-card--blue .svc-card__subtitle { color: #0052cc; }
    .svc-card--blue .svc-card__feature-icon svg { stroke: #0052cc; }
    .svc-card--blue .svc-card__btn { background: #0052cc; }
    .svc-card--blue .svc-card__btn-icon svg { stroke: #0052cc; }

    .svc-card--navy .svc-card__icon { background: #e8ecfb; }
    .svc-card--navy .svc-card__icon svg { stroke: #0047ba; }
    .svc-card--navy .svc-card__title, .svc-card--navy .svc-card__subtitle { color: #0047ba; }
    .svc-card--navy .svc-card__feature-icon svg { stroke: #0047ba; }
    .svc-card--navy .svc-card__btn { background: #0047ba; }
    .svc-card--navy .svc-card__btn-icon svg { stroke: #0047ba; }

    .svc-card--green .svc-card__icon { background: #e8f9ee; }
    .svc-card--green .svc-card__icon svg { stroke: #008037; }
    .svc-card--green .svc-card__title, .svc-card--green .svc-card__subtitle { color: #008037; }
    .svc-card--green .svc-card__feature-icon svg { stroke: #008037; }
    .svc-card--green .svc-card__btn { background: #008037; }
    .svc-card--green .svc-card__btn-icon svg { stroke: #008037; }

    .svc-card--purple .svc-card__icon { background: #f2ecfe; }
    .svc-card--purple .svc-card__icon svg { stroke: #581c87; }
    .svc-card--purple .svc-card__title { color: #581c87; }
    .svc-card--purple .svc-card__feature-icon svg { stroke: #581c87; }
    .svc-card--purple .svc-card__btn { background: #581c87; }
    .svc-card--purple .svc-card__btn-icon svg { stroke: #581c87; }

    .svc-card--orange .svc-card__icon { background: #fef1e8; }
    .svc-card--orange .svc-card__icon svg { stroke: #d97706; }
    .svc-card--orange .svc-card__title { color: #d97706; }
    .svc-card--orange .svc-card__feature-icon svg { stroke: #d97706; }
    .svc-card--orange .svc-card__btn { background: #d97706; }
    .svc-card--orange .svc-card__btn-icon svg { stroke: #d97706; }

    .svc-card--teal .svc-card__icon { background: #e6f6fa; }
    .svc-card--teal .svc-card__icon svg { stroke: #0284c7; }
    .svc-card--teal .svc-card__title { color: #0284c7; }
    .svc-card--teal .svc-card__feature-icon svg { stroke: #0284c7; }
    .svc-card--teal .svc-card__btn { background: #0284c7; }
    .svc-card--teal .svc-card__btn-icon svg { stroke: #0284c7; }

    .svc-cta {
      margin-top: 3.5rem;
      background: #edf4ff;
      border-radius: 24px;
      padding: 2rem 3rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1.5rem;
    }

    .svc-cta__text {
      flex: 1;
    }

    .svc-cta__text h3 {
      font-size: 1.45rem;
      font-weight: 900;
      margin: 0 0 0.75rem;
      color: #12499e;
      letter-spacing: -0.01em;
    }

    .svc-cta__text p {
      font-size: 0.88rem;
      font-weight: 700;
      color: #374151;
      margin: 0;
      line-height: 1.85;
    }

    .svc-cta__icon {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .svc-cta__actions {
      display: flex;
      flex-direction: column;
      gap: 0.85rem;
      flex-shrink: 0;
      width: 220px;
    }

    .svc-cta__btn {
      width: 100%;
      height: 48px;
      display: inline-flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 0.45rem 0 1.4rem;
      border-radius: 999px;
      font-size: 0.95rem;
      font-weight: 700;
      text-decoration: none;
      color: #fff;
      white-space: nowrap;
      transition: opacity 0.2s, transform 0.2s;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .svc-cta__btn:hover {
      opacity: 0.92;
      transform: translateY(-1px);
    }

    .svc-cta__btn > span:first-child {
      flex: 1;
      text-align: center;
      line-height: 1;
    }

    .svc-cta__btn--primary { background: #0047ba; }
    .svc-cta__btn--secondary { background: #dc2626; }

    .svc-cta__btn-icon {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .svc-cta__btn-icon svg {
      width: 14px;
      height: 14px;
    }
    .svc-cta__btn--primary .svc-cta__btn-icon svg { stroke: #0047ba; stroke-width: 3; fill: none; stroke-linecap: round; stroke-linejoin: round; }
    .svc-cta__btn--secondary .svc-cta__btn-icon svg { stroke: #dc2626; stroke-width: 3; fill: none; stroke-linecap: round; stroke-linejoin: round; }

    /* ══════════════════════════════
       FEATURE HIGHLIGHTS ROW
    ══════════════════════════════ */
    .svc-features-row {
      margin: 3rem 0 3.5rem;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
    }

    .svc-feature-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 0.5rem 1.5rem;
    }

    .svc-feature-item + .svc-feature-item {
      border-left: 1.5px solid #d1d5db;
    }

    .svc-feature-item__icon {
      width: 48px;
      height: 48px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .svc-feature-item__icon svg {
      width: 44px;
      height: 44px;
      stroke: #111827;
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .svc-feature-item strong {
      display: block;
      font-size: 0.95rem;
      font-weight: 700;
      color: #12499e;
      margin-bottom: 0.25rem;
    }

    .svc-feature-item span {
      font-size: 0.78rem;
      color: #4b5563;
      line-height: 1.6;
    }

    .site-footer { background: white; padding-block: 1.75rem; }

    /* ══════════════════════════════
       RESPONSIVE
    ══════════════════════════════ */
    @media (max-width: 900px) {
      .svc-grid { grid-template-columns: repeat(2, 1fr); }
      .svc-card__features { grid-template-columns: repeat(2, 1fr); }
      .svc-cta { flex-direction: column; text-align: center; padding: 2rem 1.5rem; }
      .svc-cta__actions { width: 100%; max-width: 280px; }
    }

    @media (max-width: 768px) {
      .svc-wrap { width: 92%; }
      .dl-hero { width: 92%; }
      .svc-grid { grid-template-columns: 1fr; }
      .svc-features-row { grid-template-columns: 1fr; gap: 1.5rem; }
      .svc-feature-item { padding: 0; }
      .svc-feature-item + .svc-feature-item { border-left: none; }
      .svc-cta { flex-direction: column; text-align: center; }
      .svc-cta__actions { width: 100%; }
      .svc-cta__btn { justify-content: space-between; }
    }
    .iconimage{
          width: 49px;
    }
  </style>
</head>
<body>

  <!-- ── Site Header ── -->
  <?php include 'menu.php'; ?>

  <!-- ── Hero ── -->
  <section class="dl-hero">
    <img src="assets/img/homepage.png" alt="サービス" class="dl-hero__img" />
  </section>

  <div class="svc-wrap">

    <!-- ── Primary Service Cards ── -->
    <section class="svc-section">
      <div class="svc-grid">

        <!-- AI・データサービス -->
        <div class="svc-card svc-card--blue">
          <div class="svc-card__icon">
            <img class="iconimage" src="assets/img/36008214-3d96-42d4-90c8-ca6ba62e20dd.png" alt="AI・データサービス" />
          </div>
          <h3 class="svc-card__title">AI・データサービス</h3>
          <p class="svc-card__subtitle">AI &amp; Data Services</p>
          <p class="svc-card__desc">
            AI開発やデータ活用を支える高品質な<br />
            データ作成・評価サービスを提供します。
          </p>
          <div class="svc-card__features">
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/ig-1.png" alt="AIアノテーション" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">AI<br />アノテーション</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/ig-2.png" alt="AI学習データ作成" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">AI学習データ<br />作成</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/ig-3.png" alt="LLM Evaluation" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">LLM<br />Evaluation</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/ig-4.png" alt="OCR×AI・データ確認" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">OCR×AI・<br />データ確認</span>
            </div>
          </div>
          <a href="ai-agent.php" class="svc-card__btn">
            <span>AI・データサービスの詳細を見る</span>
            <span class="svc-card__btn-icon">
              <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </a>
        </div>

        <!-- BPOサービス -->
        <div class="svc-card svc-card--navy">
          <div class="svc-card__icon">
           <img class="iconimage" src="assets/img/718519d4-f896-4328-acc6-3e6d15dd0790.png" alt="BPOサービス" />
          </div>
          <h3 class="svc-card__title">BPOサービス</h3>
          <p class="svc-card__subtitle">Business Process Outsourcing</p>
          <p class="svc-card__desc">
            業務プロセスを最適化し、<br />
            高品質・低コスト・スピードを実現します。
          </p>
          <div class="svc-card__features">
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/b-1.png" alt="データ入力・加工" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">データ入力・<br />加工</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/b-2.png" alt="カスタマーサポート" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">カスタマー<br />サポート</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/b-3.png" alt="Webリサーチ・情報収集" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">Webリサーチ・<br />情報収集</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/b-4.png" alt="OCR・データ確認" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">OCR・<br />データ確認</span>
            </div>
          </div>
          <a href="bpocompany.php" class="svc-card__btn">
            <span>BPOサービスの詳細を見る</span>
            <span class="svc-card__btn-icon">
              <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </a>
        </div>

        <!-- KPOサービス -->
        <div class="svc-card svc-card--green">
          <div class="svc-card__icon">
            <img class="iconimage" src="assets/img/fb3d79f9-3a90-4007-a14a-719e8df1a8c1.png" alt="KPOサービス" />
          </div>
          <h3 class="svc-card__title">KPOサービス</h3>
          <p class="svc-card__subtitle">Knowledge Process Outsourcing</p>
          <p class="svc-card__desc">
            専門知識と高度なスキルで、<br />
            ビジネスの付加価値を向上させます。
          </p>
          <div class="svc-card__features">
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/k-1.png" alt="データ分析・レポート作成" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">データ分析・<br />レポート作成</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/k-2.png" alt="市場調査・競合分析" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">市場調査・<br />競合分析</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/k-3.png" alt="業務改善・プロセス設計" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">業務改善・<br />プロセス設計</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/k-4.png" alt="プロンプト設計・AI活用支援" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">プロンプト設計・<br />AI活用支援</span>
            </div>
          </div>
          <a href="ai-agent.php" class="svc-card__btn">
            <span>KPOサービスの詳細を見る</span>
            <span class="svc-card__btn-icon">
              <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </a>
        </div>

      </div>
    </section>

    <!-- ── Secondary Service Cards ── -->
    <section class="svc-section">
      <div class="svc-grid">

        <!-- Technology -->
        <div class="svc-card svc-card--purple">
          <div class="svc-card__icon">
            <img class="iconimage" src="assets/img/1609111b-24c2-4eff-b654-f0261413f595.png" alt="Technology" />
          </div>
          <h3 class="svc-card__title">Technology</h3>
          <p class="svc-card__subtitle">&nbsp;</p>
          <p class="svc-card__desc">
            Webサイト構築やシステム開発、業務自動化な<br />
            ど、テクノロジーの力でビジネスを支援します。
          </p>
          <div class="svc-card__features">
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/T-1.png" alt="Webサイト構築" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">Webサイト<br />構築</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/T-2.png" alt="システム開発" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">システム開発</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/T-3.png" alt="業務自動化・効率化" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">業務自動化・<br />効率化</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/T-4.png" alt="データベース構築" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">データベース<br />構築</span>
            </div>
          </div>
          <a href="index.php#services" class="svc-card__btn">
            <span>Technologyの詳細を見る</span>
            <span class="svc-card__btn-icon">
              <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </a>
        </div>

        <!-- Design / Creative -->
        <div class="svc-card svc-card--orange">
          <div class="svc-card__icon">
            <img class="iconimage" src="assets/img/917bbb21-4687-4d29-9c41-fe7518b3ca49.png" alt="Design / Creative" />
          </div>
          <h3 class="svc-card__title">Design / Creative</h3>
          <p class="svc-card__subtitle">&nbsp;</p>
          <p class="svc-card__desc">
            デザイン・動画・コンテンツ制作で、<br />
            ブランド価値の向上をサポートします。
          </p>
          <div class="svc-card__features">
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/D-1.png" alt="画像加工・編集" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">画像加工・<br />編集</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/D-2.png" alt="動画制作・モーショングラフィックス" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">動画制作・<br />モーション<br />グラフィックス</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/D-3.png" alt="Webデザイン" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">Webデザイン</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/D-4.png" alt="コンテンツ制作・ライティング" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">コンテンツ制作・<br />ライティング</span>
            </div>
          </div>
          <a href="index.php#services" class="svc-card__btn">
            <span>Designの詳細を見る</span>
            <span class="svc-card__btn-icon">
              <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </a>
        </div>

        <!-- Myanmar Business Support -->
        <div class="svc-card svc-card--teal">
          <div class="svc-card__icon">
            <img class="iconimage" src="assets/img/Untibbbtled.png" alt="Myanmar Business Support" />
          </div>
          <h3 class="svc-card__title">Myanmar Business Support</h3>
          <p class="svc-card__subtitle">&nbsp;</p>
          <p class="svc-card__desc">
            ミャンマー進出や現地業務の立ち上げを<br />
            トータルでサポートします。
          </p>
          <div class="svc-card__features">
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/M-1.png" alt="ミャンマー進出支援" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">ミャンマー<br />進出支援</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/M-2.png" alt="現地市場調査・分析" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">現地市場調査・<br />分析</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/M-3.png" alt="人材採用・教育支援" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">人材採用・<br />教育支援</span>
            </div>
            <div class="svc-card__feature">
              <span class="svc-card__feature-icon">
                <img src="assets/img/M-4.png" alt="業務体制構築支援" class="feature-img-icon" />
              </span>
              <span class="svc-card__feature-label">業務体制構築<br />支援</span>
            </div>
          </div>
          <a href="myanmar-situation.php" class="svc-card__btn">
            <span>ミャンマー進出支援の詳細を<br />見る</span>
            <span class="svc-card__btn-icon">
              <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </a>
        </div>

      </div>
    </section>

    <!-- ── Bottom CTA ── -->
    <section class="svc-cta">
      <div class="svc-cta__text">
        <h3>どのサービスが最適かわからない方へ</h3>
        <p>
          現在の業務や課題をお聞かせください。<br />
          BPO・KPO・AI・システムを組み合わせ、<br />
          最適な業務体制をご提案します。
        </p>
      </div>
      <div class="svc-cta__icon">
        <svg viewBox="0 0 170 145" width="170" height="145" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g fill="#4c82e6">
            <!-- Back Bubble -->
            <rect x="10" y="24" width="95" height="70" rx="16" />
            <path d="M32 94 L15 125 L58 94 Z" />
            
            <!-- Front Bubble Cutout/Border -->
            <path d="M46 10 C37.2 10 30 17.2 30 26 V82 C30 90.8 37.2 98 46 98 H92 L120 126 V98 H136 C144.8 98 152 90.8 152 82 V26 C152 17.2 144.8 10 136 10 Z" stroke="#EDF4FF" stroke-width="8" stroke-linejoin="round" fill="#4c82e6" />
            
            <!-- Question Mark -->
            <text x="91" y="67" font-family="'Inter', 'Noto Sans JP', sans-serif" font-weight="800" font-size="54" fill="#FFFFFF" text-anchor="middle">?</text>
          </g>
        </svg>
      </div>
      <div class="svc-cta__actions">
        <a href="contectus.php" class="svc-cta__btn svc-cta__btn--primary">
          <span>お問い合わせ</span>
          <span class="svc-cta__btn-icon">
            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </span>
        </a>
        <a href="download.php" class="svc-cta__btn svc-cta__btn--secondary">
          <span>資料ダウンロード</span>
          <span class="svc-cta__btn-icon">
            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </span>
        </a>
      </div>
    </section>

    <!-- ── Feature highlights row ── -->
    <div class="svc-features-row">
      <div class="svc-feature-item">
        <span class="svc-feature-item__icon">
          <img src="assets/img/FF-1.png" alt="日本品質の管理体制" class="feature-row-img-icon" />
        </span>
        <div>
          <strong>日本品質の管理体制</strong>
          <span>日本基準の品質管理とセキュリティ体制で<br />安心のサービスを提供します。</span>
        </div>
      </div>
      <div class="svc-feature-item">
        <span class="svc-feature-item__icon">
          <img src="assets/img/FF-2.png" alt="ミャンマーの高度人材" class="feature-row-img-icon" />
        </span>
        <div>
          <strong>ミャンマーの高度人材</strong>
          <span>日本語対応可能な優秀な人材が業務をサポート<br />します</span>
        </div>
      </div>
      <div class="svc-feature-item">
        <span class="svc-feature-item__icon">
          <img src="assets/img/FF-3.png" alt="柔軟な対応力" class="feature-row-img-icon" />
        </span>
        <div>
          <strong>柔軟な対応力</strong>
          <span>小規模PoCから大規模運用まで、柔軟に対応<br />します</span>
        </div>
      </div>
    </div>

  </div><!-- /svc-wrap -->

  <!-- ── Footer ── -->
  <?php include 'footer.php'; ?>

  <script src="assets/js/main.js" defer></script>
</body>
</html>
