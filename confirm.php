<?php
function h($s) { return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

$company = trim($_POST['会社名'] ?? '');
$name    = trim($_POST['ご担当者名'] ?? '');
$email   = trim($_POST['メールアドレス'] ?? '');
$tel     = trim($_POST['電話番号'] ?? '');
$content = trim($_POST['お問い合わせ内容'] ?? '');

// Required fields (whitespace-only input is treated as empty)
if ($company === '' || $name === '' || $email === '') {
    header('Location: contectus.php?error=required');
    exit;
}

// Strict email format check
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $email)) {
    header('Location: contectus.php?error=email');
    exit;
}

// Phone is optional, but if provided must be digits only
if ($tel !== '' && !preg_match('/^[0-9]{9,11}$/', $tel)) {
    header('Location: contectus.php?error=phone');
    exit;
}

$f = [
    '会社名'           => h($company),
    'ご担当者名'       => h($name),
    'メールアドレス'   => h($email),
    '電話番号'         => h($tel),
    'お問い合わせ内容' => h($content),
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>入力内容確認 | A CAN SOLUTIONS</title>
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
    body { font-family: "Noto Sans JP", sans-serif; background: #ffffff; color: #1a1a2e; margin: 0; padding: 60px 0 0; line-height: 1.7; overflow-x: hidden; }
    img { max-width: 100%; height: auto; display: block; }
    a { color: inherit; }

    .dl-hero { display: block; width: 86%; margin: 0 auto; background: #ffffff; line-height: 0; padding: 0; }
    .dl-hero__img { display: block; width: 100% !important; max-width: 100% !important; height: auto; margin: 0; padding: 0; }

    .dl-breadcrumb { padding: 0.55rem 0; width: 86%; margin: 0 auto; font-size: 0.78rem; }
    .dl-breadcrumb a { color: #12499e; text-decoration: none; }

    .dl-body { width: 86%; margin: 2px auto 0; display: flex; gap: 1.5rem; align-items: start; justify-content: center; }

    .dl-panel { background: #fff; border: 1.5px solid black; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
    .dl-panel__head { padding: 9px 1.4rem 0; font-size: 1.1rem; font-weight: 700; color: #1a1a2e; display: flex; align-items: center; gap: 0.6rem; border-bottom: none; line-height: 1; }
    .dl-panel__head-icon { width: 36px; height: 36px; border-radius: 6px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .dl-panel__sub { padding: 0 1.4rem 0.8rem calc(1.4rem + 36px + 0.6rem); font-size: 0.83rem; color: #6b7280; }
    .dl-panel__scroll { overflow: visible; flex: 1; max-height: none; }

    /* Confirm field rows */
    .cf-field { margin-bottom: 1.2rem; }
    .cf-label { display: block; font-size: 15px; font-weight: 700; color: #1a1a2e; margin-bottom: 0.4rem; font-family: "Noto Sans JP", sans-serif; }
    .cf-value { width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #d1d9e6; border-radius: 8px; font-size: 14px; font-family: "Noto Sans JP", sans-serif; background: #f0f5ff; color: #1a1a2e; resize: none; }

    /* Action buttons */
    .cf-actions { display: flex; flex-direction: column; align-items: center; gap: 0.75rem; padding: 1.2rem 1.4rem; }
    .cf-btn { display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 0.75rem 2.5rem; border: none; border-radius: 999px; font-size: 15px; font-weight: 700; font-family: "Noto Sans JP", sans-serif; cursor: pointer; text-decoration: none; transition: opacity 0.2s; width: 100%; max-width: 280px; }
    .cf-btn--send { background: #1a5fd4; color: #fff; }
    .cf-btn--send:hover { background: #1450b8; }
    .cf-btn--edit { background: #ea580c; color: #fff; }
    .cf-btn--edit:hover { background: #c2410c; }

    /* Sidebar */
    .dl-sidebar { display: flex; flex-direction: column; gap: 1rem; }
    .dl-merits { background: #f0f4ff; padding: 1.5rem; border-radius: 8px; width: 364px; }
    .dl-merits__head { color: #12499e; padding: 0 0 0.9rem 0; font-size: 15px; font-family: "Noto Sans JP", sans-serif; font-weight: 700; }
    .dl-merits__list { list-style: none; margin: 0; padding: 0; }
    .dl-merits__item { display: flex; align-items: flex-start; gap: 0.85rem; padding: 0.65rem 0; }
    .dl-merits__icon { width: 42px; height: 42px; flex-shrink: 0; object-fit: contain; }
    .dl-merits__body strong { display: block; font-size: 12px; font-family: "Noto Sans JP", sans-serif; font-weight: 700; color: #1a1a2e; line-height: 1.2; }
    .dl-merits__body span { font-size: 0.75rem; color: #6b7280; line-height: 18px; display: block; }
    .dl-sidebar-cta { border-radius: 8px; overflow: hidden; position: relative; min-height: 185px; }
    .dl-sidebar-cta__bg { width: 100%; height: 100%; min-height: 185px; object-fit: cover; display: block; position: absolute; inset: 0; }
    .dl-sidebar-cta__content { position: relative; z-index: 2; padding: 1.2rem 1rem 1rem 37%; display: flex; flex-direction: column; justify-content: flex-end; min-height: 185px; gap: 0.6rem; }
    .dl-sidebar-cta__text { color: #fff; font-size: 0.82rem; font-weight: 700; line-height: 1.6; }
    .dl-sidebar-cta__btn { display: inline-flex; align-items: center; gap: 0.5rem; background: white; border: none; color: black; padding: 0.55rem 1.2rem; border-radius: 6px; font-size: 0.82rem; font-weight: 700; text-decoration: none; align-self: stretch; justify-content: center; }

    .dl-contact { width: 86%; max-width: 1200px; margin: 1rem auto 2rem; padding: 0 0 2rem; background: #F7F7F7; border-radius: 12px; }
    .dl-contact__title { text-align: left; font-size: 17px; font-weight: 700; font-family: "Noto Sans JP", sans-serif; color: #13499e; padding: 1rem 0 0 77px; }
    .dl-contact__cards { display: grid; grid-template-columns: 333px 333px; gap: 1.2rem; padding: 0.5rem 0 0 77px; justify-content: start; }
    .dl-contact__card { background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.3rem 1.2rem; display: flex; align-items: flex-start; gap: 0.9rem; }
    .dl-contact__icon { width: 71px; flex-shrink: 0; object-fit: contain; }
    .dl-contact__label { font-size: 15px; font-weight: 700; color: #13499e; margin: 0 0 0.15rem; font-family: "Noto Sans JP", sans-serif; }
    .dl-contact__hours { font-size: 13px; color: #9ca3af; margin: 0 0 0.2rem; font-family: "Anonymous Pro", monospace; }
    .dl-contact__value { font-size: 25px; font-weight: 400; color: #000; margin: 0; line-height: 1.2; font-family: "Noto Sans JP", sans-serif; }
    .dl-contact__link { font-size: 23px; font-weight: 400; color: #000; text-decoration: none; word-break: break-all; font-family: "Noto Sans JP", sans-serif; }
    .site-footer { background: white; padding-block: 1.75rem; }

    @media (min-width: 769px) {
      .dl-breadcrumb { margin-left: 249px; }
      .dl-panel { margin-left: 77px; width: 697px; min-height: 600px; }
      .dl-contact { padding-left: 0; }
    }
    @media (max-width: 768px) {
      .dl-hero { width: 100%; }
      .dl-breadcrumb { width: 92%; margin: 0 auto; }
      .dl-body { flex-direction: column; width: 92%; gap: 1rem; align-items: stretch; }
      .dl-panel { width: 100% !important; margin-left: 0 !important; height: auto !important; }
      .dl-sidebar { width: 100%; }
      .dl-merits { width: 100%; box-sizing: border-box; }
      .dl-sidebar-cta { width: 100%; }
      .dl-contact { width: 92%; padding: 1rem 1rem 2rem; box-sizing: border-box; }
      .dl-contact__title { padding: 0 0 0.5rem 0; }
      .dl-contact__cards { grid-template-columns: 1fr; padding: 0; }
      .site-footer__row { flex-direction: column; align-items: center; gap: 1rem; }
      .site-footer__nav { flex-wrap: wrap; justify-content: center; gap: 0.3rem 0.8rem; }
      .site-footer__link { white-space: nowrap; }
      .site-footer__divider { display: none; }
    }
  </style>
</head>
<body>

  <?php include 'menu.php'; ?>

  <section class="dl-hero">
    <img src="assets/img/cc.png" alt="お問い合わせ確認" class="dl-hero__img" />
  </section>

  <nav class="dl-breadcrumb" aria-label="Breadcrumb"></nav>

  <div class="dl-body">

    <div class="dl-panel">
      <div class="dl-panel__head">
        <span class="dl-panel__head-icon">
          <img src="assets/img/49833589-5606-4cb4-96c9-0bf2f899ec99.png" alt="" style="width:42px;height:38px;" />
        </span>
        お問い合わせ
      </div>
      <div class="dl-panel__sub">以下内容で送信して宜しいでしょうか？</div>

      <div class="dl-panel__scroll">

        <!-- Confirmation display -->
        <div style="padding: 1.2rem 1.4rem 0;">

          <div class="cf-field">
            <span class="cf-label">会社名</span>
            <div class="cf-value"><?= $f['会社名'] ?></div>
          </div>

          <div class="cf-field">
            <span class="cf-label">ご担当者名</span>
            <div class="cf-value"><?= $f['ご担当者名'] ?></div>
          </div>

          <div class="cf-field">
            <span class="cf-label">メールアドレス</span>
            <div class="cf-value"><?= $f['メールアドレス'] ?></div>
          </div>

          <div class="cf-field">
            <span class="cf-label">電話番号</span>
            <div class="cf-value"><?= $f['電話番号'] ?: '—' ?></div>
          </div>

          <div class="cf-field">
            <span class="cf-label">お問い合わせ内容</span>
            <div class="cf-value" style="min-height:100px;white-space:pre-wrap;"><?= $f['お問い合わせ内容'] ?: '—' ?></div>
          </div>

        </div>

        <!-- 送信する -->
        <div class="cf-actions">
          <form action="send-contact.php" method="POST" style="width:100%;max-width:280px;">
            <input type="hidden" name="会社名"           value="<?= $f['会社名'] ?>" />
            <input type="hidden" name="ご担当者名"       value="<?= $f['ご担当者名'] ?>" />
            <input type="hidden" name="メールアドレス"   value="<?= $f['メールアドレス'] ?>" />
            <input type="hidden" name="電話番号"         value="<?= $f['電話番号'] ?>" />
            <input type="hidden" name="お問い合わせ内容" value="<?= $f['お問い合わせ内容'] ?>" />
            <button type="submit" class="cf-btn cf-btn--send">
              送信する
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </form>

          <!-- 編集に戻る -->
          <form action="contectus.php" method="POST" style="width:100%;max-width:280px;">
            <input type="hidden" name="_editing"          value="1" />
            <input type="hidden" name="会社名"           value="<?= $f['会社名'] ?>" />
            <input type="hidden" name="ご担当者名"       value="<?= $f['ご担当者名'] ?>" />
            <input type="hidden" name="メールアドレス"   value="<?= $f['メールアドレス'] ?>" />
            <input type="hidden" name="電話番号"         value="<?= $f['電話番号'] ?>" />
            <input type="hidden" name="お問い合わせ内容" value="<?= $f['お問い合わせ内容'] ?>" />
            <button type="submit" class="cf-btn cf-btn--edit">
              編集に戻る
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </form>
        </div>

      </div>
    </div>

    <aside class="dl-sidebar">
      <div class="dl-merits">
        <div class="dl-merits__head">お問い合わせのメリット</div>
        <ul class="dl-merits__list">
          <li class="dl-merits__item">
            <img src="assets/img/6369fc6a-3bf6-4295-9cc8-4f66cc301a18.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body"><strong>24時間以内にご返信します</strong><span>専門スタッフが迅速に対応します</span></div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/b59b74f3-a9ff-4188-80e6-3913ccbf1cb2.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body"><strong>秘密厳守・安心のセキュリティ</strong><span>情報は厳重に管理します</span></div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/pim.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body"><strong>最適なプランもご提案</strong><span>課題に合わせた最適なサービスをご提案します</span></div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/d867edbb-0ebd-464d-86c2-71884e2f291c.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body"><strong>PoC・テスト運用も可能</strong><span>小規模試験から安心して進められます</span></div>
          </li>
          <li class="dl-merits__item">
            <img src="assets/img/290b4bd6-425f-4441-a35e-2cdddda2bd91.png" alt="" class="dl-merits__icon" />
            <div class="dl-merits__body"><strong>24時間×365日対応</strong><span>いつでもお問い合わせください</span></div>
          </li>
        </ul>
      </div>
      <div class="dl-sidebar-cta">
        <img src="assets/img/uri_ifs___M_udNq4QUo4H9V2Dwz57bjkSbSM7n5L5NYbOnl6LDudbw.jpg" alt="ミャンマー" class="dl-sidebar-cta__bg" />
        <div class="dl-sidebar-cta__content">
          <p class="dl-sidebar-cta__text">ミャンマー・日本のリソースを<br>活かし合わせ、<br>業務改革を支援します。</p>
          <a href="index.php#services" class="dl-sidebar-cta__btn">サービス一覧を見る <span>›</span></a>
        </div>
      </div>
    </aside>

  </div>

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

  <?php include 'footer.php'; ?>

</body>
</html>
