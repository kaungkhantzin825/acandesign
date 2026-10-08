<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A CAN SOLUTIONSのメールマガジンにご登録いただきありがとうございます。" />
  <meta name="theme-color" content="#ffffff" />
  <title>メールマガジン登録完了 | A CAN SOLUTIONS</title>
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

    /* ══════════════════════════════
       HERO — registration complete
       Text over background image (Canva: HPデザインリニューアル p.8).
       Sizes use container units so the copy scales with the image.
    ══════════════════════════════ */
    .cp-hero {
      position: relative;
      width: 86%;
      margin: 0 auto;
      background: #eef0f8 url("assets/img/confirm-hero-bg.png") no-repeat center top / 100% auto;
      aspect-ratio: 1228 / 541;
      container-type: inline-size;
    }

    .cp-hero__crumb {
      position: absolute;
      top: 1.1cqw;
      left: 1.5cqw;
      margin: 0;
      font-family: "Anonymous Pro", monospace;
      font-size: max(11px, 1cqw);
      font-weight: 700;
      line-height: 1.4;
      color: #101010;
    }

    .cp-hero__crumb a { color: inherit; text-decoration: none; }
    .cp-hero__crumb a:hover { text-decoration: underline; }
    .cp-hero__crumb span[aria-current] { color: #0a66c2; }

    .cp-hero__content {
      width: 69.7%;
      padding-top: 4.48cqw;
      text-align: center;
    }

    .cp-hero__check {
      display: block;
      width: 7.5cqw;
      height: 7.5cqw;
      margin: 0 auto;
    }

    .cp-hero__title {
      margin: 2.24cqw 0 0;
      font-size: 3.1cqw;
      font-weight: 700;
      line-height: 1.3;
      letter-spacing: 0.04em;
      color: #13499e;
    }

    .cp-hero__desc {
      margin: 3.34cqw 0 0;
      font-size: 1.95cqw;
      font-weight: 700;
      line-height: 2.8;
      color: #000000;
    }

    /* Tablets: the copy would run into the girl, so let the banner grow,
       fade the left to white and keep the artwork on the right. */
    @media (max-width: 1023px) {
      .cp-hero {
        width: 92%;
        aspect-ratio: auto;
        background-image:
          linear-gradient(90deg, rgba(238, 240, 248, 0.96) 0%, rgba(238, 240, 248, 0.88) 55%, rgba(238, 240, 248, 0.15) 100%),
          url("assets/img/confirm-hero-bg.png");
        background-size: cover, cover;
        background-position: center, 85% center;
      }
      .cp-hero__crumb { position: static; padding: 0.75rem 1rem 0; font-size: 0.75rem; }
      .cp-hero__content { width: 100%; max-width: 34rem; padding: 1.25rem 1.25rem 2.25rem; }
      .cp-hero__check { width: 64px; height: 64px; }
      .cp-hero__title { margin-top: 1rem; font-size: 1.6rem; }
      .cp-hero__desc { margin-top: 1rem; font-size: 1rem; line-height: 2; }
    }

    @media (max-width: 640px) {
      .cp-hero {
        background-image:
          linear-gradient(180deg, rgba(238, 240, 248, 0.94) 0%, rgba(238, 240, 248, 0.84) 45%, rgba(238, 240, 248, 0.6) 100%),
          url("assets/img/confirm-hero-bg.png");
        background-position: center, 80% center;
      }
      .cp-hero__content { max-width: none; padding: 1rem 1rem 1.75rem; }
      .cp-hero__check { width: 52px; height: 52px; }
      .cp-hero__title { font-size: 1.3rem; letter-spacing: 0.02em; }
      .cp-hero__desc { font-size: 0.9rem; line-height: 1.9; }
    }

    /* ══════════════════════════════
       NEWSLETTER CONTENT GRID
    ══════════════════════════════ */
    .cp-content {
      width: 86%;
      max-width: 1200px;
      margin: 3.5rem auto 0;
      text-align: center;
    }

    .cp-content__title {
      font-size: 29px;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 900;
      color: #12499e;
      margin: 0 0 0.9rem;
    }

    .cp-content__desc {
      font-size: 19.1px;
      font-family: "Noto Sans JP", sans-serif;
      color: #374151;
      line-height: 1.9;
      margin: 0 0 2rem;
    }

    .cp-content__grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.75rem 1.25rem;
      background: #f7f8fb;
      border-radius: 12px;
      padding: 2.25rem 3.5rem;
      width: 91%;
      margin: 0 auto;
    }

    .cp-content__item {
      flex: 1 1 150px;
      max-width: 210px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.25rem;
    }

    .cp-content__icon {
      width: 78px;
      height: 78px;
      /* border-radius: 50%;
      background: #fff;
      border: 1.5px solid #dbe4f3; */
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .cp-content__icon img {
      width: 70px;
      height: 70px;
      object-fit: contain;
    }

    .cp-content__item p {
      font-size: 17px;
      font-weight: 700;
      color: #1a1a2e;
      margin: 0;
      line-height: 1.5;
      word-break: keep-all;
      overflow-wrap: normal;
    }

    /* ══════════════════════════════
       今後の流れ (STEP FLOW)
    ══════════════════════════════ */
    .cp-flow {
      width: 86%;
      max-width: 1200px;
      margin: 3.5rem auto 0;
    }

    .cp-flow__title {
      font-size: 1.05rem;
      font-weight: 900;
      color: #13499e;
      border-left: 4px solid #12499e;
      padding-left: 0.75rem;
      margin: 0 0 1.5rem;
      line-height: 1.4;
    }

    .cp-flow__grid {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      width: 91%;
      margin: 0 auto;
    }

    .cp-flow__step {
      flex: 1;
      text-align: center;
      padding-top: 0.3rem;
    }

    .cp-flow__step-num {
      font-size: 29.8px;
      font-family: "Noto Sans JP", sans-serif;
      font-weight: 900;
      color: #12499e;
      margin: 0 0 0.9rem;
      line-height: 1.5;
    }

    .cp-flow__step-desc {
      font-size: 20px;
      font-family: "Anonymous Pro", monospace;
      color: #6b7280;
      line-height: 1.8;
      margin: 0;
      text-align: center;
    }

    .cp-flow__arrow {
    flex-shrink: 0;
    width: 69px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 2.6rem;
}

    .cp-flow__arrow svg {
      /* width: 28px; */
      /* height: 28px; */
      fill: #12499e;
      stroke: none;
    }

    /* ══════════════════════════════
       CONTACT SECTION
    ══════════════════════════════ */
    .dl-contact {
      width: 86%;
      max-width: 1200px;
      margin: 3rem auto 2rem;
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

    .site-footer { background: white; padding-block: 1.75rem; }

    .dl-contact__card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 1.3rem 1.2rem;
      display: flex;
      align-items: flex-start;
      gap: 0.9rem;
    }

    .dl-contact__icon { width: 71px; flex-shrink: 0; object-fit: contain; }

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
       RESPONSIVE
    ══════════════════════════════ */
    @media (max-width: 768px) {

      .cp-content { width: 92%; }
      .cp-content__grid { padding: 1.75rem 1rem; gap: 1.5rem 1rem; }

      .cp-flow { width: 92%; }
      .cp-flow__grid { flex-direction: column; align-items: center; }
      .cp-flow__arrow { width: 24px; height: 24px; margin: 0.4rem 0; transform: rotate(90deg); }
      .cp-flow__arrow svg { width: 20px; height: 20px; }

      .dl-contact {
        width: 92%;
        padding: 1rem 1rem 2rem;
        box-sizing: border-box;
      }
      .dl-contact__title { padding: 0 0 0.5rem 0; }
      .dl-contact__cards {
        grid-template-columns: 1fr;
        padding: 0;
      }

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

  <!-- ── Hero: registration complete ── -->
  <section class="cp-hero">
    <nav class="cp-hero__crumb" aria-label="Breadcrumb">
      <a href="index.php">HOME</a> &rsaquo; <a href="myanmar-situation.php">Myanmar situation</a> &rsaquo; <span aria-current="page">メルマガ登録完了</span>
    </nav>
    <div class="cp-hero__content">
      <svg class="cp-hero__check" viewBox="0 0 92 92" aria-hidden="true">
        <circle cx="46" cy="46" r="46" fill="#2583ef" />
        <path d="M24 47 L39 62 L68 31" fill="none" stroke="#fff" stroke-width="11" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <h1 class="cp-hero__title">ご登録ありがとうございます！</h1>
      <p class="cp-hero__desc">
        メールマガジンのご登録が終了しました。<br />
        ご登録いただいたメールアドレスへ、<br />
        最新情報を定期的にお届けします。
      </p>
    </div>
  </section>

  <!-- ── Newsletter content ── -->
  <section class="cp-content">
    <h2 class="cp-content__title">メールマガジンの配信内容</h2>
    <p class="cp-content__desc">
      ミャンマーの最新ビジネス情報や、A CAN SOLUTIONSのサービス・事例、<br />
      セミナー・イベント情報など、ビジネスに役立つ情報をお届けします。
    </p>
    <div class="cp-content__grid">
      <div class="cp-content__item">
        <span class="cp-content__icon">
          <img src="assets/img/1-ig.png" alt="ミャンマーの最新ビジネス動向" />
        </span>
        <p>ミャンマーの<br />最新ビジネス<br />動向</p>
      </div>
      <div class="cp-content__item">
        <span class="cp-content__icon">
          <img src="assets/img/2-ig.png" alt="人材・労務に関する情報" />
        </span>
        <p>人材・労務に<br />関する情報</p>
      </div>
      <div class="cp-content__item">
        <span class="cp-content__icon">
          <img src="assets/img/3-ig.png" alt="サービス・事例のご紹介" />
        </span>
        <p>サービス・事例<br />のご紹介</p>
      </div>
      <div class="cp-content__item">
        <span class="cp-content__icon">
          <img src="assets/img/4-ig.png" alt="セミナー・イベント情報のご案内" />
        </span>
        <p>セミナー・イベン<br />ト情報のご案内</p>
      </div>
      <div class="cp-content__item">
        <span class="cp-content__icon">
          <img src="assets/img/5-ig.png" alt="その他、お役立ち情報を配信" />
        </span>
        <p>その他、お役立ち<br />情報を配信</p>
      </div>
    </div>
  </section>

  <!-- ── 今後の流れ ── -->
  <section class="cp-flow">
    <h2 class="cp-flow__title">今後の流れ</h2>
    <div class="cp-flow__grid">
      <div class="cp-flow__step">
        <p class="cp-flow__step-num">①ご登録完了</p>
        <p class="cp-flow__step-desc">このページで<br>の登録が完了<br>しました。</p>
      </div>
      <span class="cp-flow__arrow">
<svg viewBox="0 0 24 24"><polygon points="6 3 20 12 6 21"></polygon></svg>
      </span>
      <div class="cp-flow__step">
        <p class="cp-flow__step-num">②確認メールの送付</p>
        <p class="cp-flow__step-desc">ご登録内容の確認メールを<br>お送りしています。<br /><span style="font-size: 13px;">※メールが届かない場合は、迷惑メール<br>フォルダーもご確認ください。</span></p>
      </div>
      <span class="cp-flow__arrow">
<svg viewBox="0 0 24 24"><polygon points="6 3 20 12 6 21"></polygon></svg>
      </span>
      <div class="cp-flow__step">
        <p class="cp-flow__step-num">③メールマガジン<br />配信開始</p>
        <p class="cp-flow__step-desc">ミャンマーの最新情報を定<br>期的にお届けします。</p>
      </div>
    </div>
  </section>

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
