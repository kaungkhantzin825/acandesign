<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A CAN SOLUTIONS Co.,Ltd. は、ミャンマーを拠点に、先進的かつ信頼性の高いITソリューションを提供する企業です。" />
  <meta name="theme-color" content="#ffffff" />
  <title>A CAN SOLUTIONS Co.,Ltd. | Grow Your Company</title>
  <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="assets/css/main.css" />
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P0PTLK09E6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P0PTLK09E6');
</script>
<style>
 .site-footer__inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    margin-top: -1px;
}
.site-header__nav a {
    text-decoration: none;
    color: var(--color-ink);
    font-size: 15px;
    font-weight: bold;
    font-family: "Anonymous Pro", monospace;
    white-space: nowrap;
    transition: color var(--transition);
}
.site-header__cta {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    padding: 0.45rem 1.1rem;
    background: #004aad;
    color: #fff;
    text-decoration: none;
    border-radius: 999px;
    font-size: 16px;
    font-weight: 700;
    font-family: "Anonymous Pro", monospace;
    white-space: nowrap;
    flex-shrink: 0;
    transition: background var(--transition), opacity var(--transition);
}
.site-header__cta--dl {
    background: #dc2626;
}
.site-header__cta--dl:hover {
    background: #b91c1c;
}

/* Mobile footer fix - match other pages layout */
@media (max-width: 767px) {
  .site-footer__nav {
    writing-mode: horizontal-tb !important;
    text-orientation: mixed !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    gap: 0.75rem !important;
  }
  
  .site-footer__link {
    writing-mode: horizontal-tb !important;
    text-orientation: mixed !important;
    white-space: nowrap !important;
  }
  
  .site-footer__divider {
    display: none !important;
  }
  
  .site-footer__row {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 1rem !important;
  }
}

/* ── Service Section Styles (imported from service.php) ── */
.service-php-section {
  position: relative;
  background: #ffffff;
  padding: 0;
  display: block;
}

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

.svc-wrap {
  width: 86%;
  max-width: 1240px;
  margin: 0 auto;
}

.svc-wrap img {
  max-width: 100%;
  height: auto;
}

.svc-wrap a {
  color: inherit;
}

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

.svc-card__feature-icon .feature-img-icon {
  width: 32px;
  height: 32px;
  object-fit: contain;
}

.svc-card__icon .iconimage {
  width: 60px;
  height: 60px;
  object-fit: contain;
}

.svc-feature-item__icon .feature-row-img-icon {
  width: 48px;
  height: 48px;
  object-fit: contain;
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
.svc-card--blue .svc-card__icon svg { stroke: #0037c1; }
.svc-card--blue .svc-card__title, .svc-card--blue .svc-card__subtitle { color: #0037c1; }
.svc-card--blue .svc-card__feature-icon svg { stroke: #0037c1; }
.svc-card--blue .svc-card__btn { background: #004aad; }
.svc-card--blue .svc-card__btn-icon svg { stroke: #004aad; }

.svc-card--navy .svc-card__icon { background: #e8ecfb; }
.svc-card--navy .svc-card__icon svg { stroke: #0035a8; }
.svc-card--navy .svc-card__title, .svc-card--navy .svc-card__subtitle { color: #0035a8; }
.svc-card--navy .svc-card__feature-icon svg { stroke: #0035a8; }
.svc-card--navy .svc-card__btn { background: #004aad; }
.svc-card--navy .svc-card__btn-icon svg { stroke: #004aad; }

.svc-card--green .svc-card__icon { background: #e8f9ee; }
.svc-card--green .svc-card__icon svg { stroke: #006b1a; }
.svc-card--green .svc-card__title, .svc-card--green .svc-card__subtitle { color: #006b1a; }
.svc-card--green .svc-card__feature-icon svg { stroke: #006b1a; }
.svc-card--green .svc-card__btn { background: #006b1a; }
.svc-card--green .svc-card__btn-icon svg { stroke: #006b1a; }

.svc-card--purple .svc-card__icon { background: #f2ecfe; }
.svc-card--purple .svc-card__icon svg { stroke: #3d20a2; }
.svc-card--purple .svc-card__title { color: #3d20a2; }
.svc-card--purple .svc-card__feature-icon svg { stroke: #3d20a2; }
.svc-card--purple .svc-card__btn { background: #3d20a2; }
.svc-card--purple .svc-card__btn-icon svg { stroke: #3d20a2; }

.svc-card--orange .svc-card__icon { background: #fef1e8; }
.svc-card--orange .svc-card__icon svg { stroke: #d86300; }
.svc-card--orange .svc-card__title { color: #d86300; }
.svc-card--orange .svc-card__feature-icon svg { stroke: #d86300; }
.svc-card--orange .svc-card__btn { background: #d86300; }
.svc-card--orange .svc-card__btn-icon svg { stroke: #d86300; }

.svc-card--teal .svc-card__icon { background: #e6f6fa; }
.svc-card--teal .svc-card__icon svg { stroke: #005c86; }
.svc-card--teal .svc-card__title { color: #005c86; }
.svc-card--teal .svc-card__feature-icon svg { stroke: #005c86; }
.svc-card--teal .svc-card__btn { background: #005c86; }
.svc-card--teal .svc-card__btn-icon svg { stroke: #005c86; }

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

.iconimage {
  width: 49px;
}

@media (max-width: 900px) {
  .svc-grid { grid-template-columns: repeat(2, 1fr); }
  .svc-card__features { grid-template-columns: repeat(2, 1fr); }
  .svc-cta { flex-direction: column; text-align: center; padding: 2rem 1.5rem; }
  .svc-cta__actions { width: 100%; max-width: 280px; }
}

@media (max-width: 768px) {
  .svc-wrap { width: 92%; }
  .dl-hero { width: 92%; }
  .ai-hero { width: 92%; }
  .dev-hero { width: 92%; }
  .ai-inner { width: 92%; }
  .dev__inner { width: 92%; }
  .svc-grid { grid-template-columns: 1fr; }
  .svc-features-row { grid-template-columns: 1fr; gap: 1.5rem; }
  .svc-feature-item { padding: 0; }
  .svc-feature-item + .svc-feature-item { border-left: none; }
  .svc-cta { flex-direction: column; text-align: center; }
  .svc-cta__actions { width: 100%; }
  .svc-cta__btn { justify-content: space-between; }
}

/* ══════════════════════════════
   ACAN-DEV.PHP SECTION (imported from acan-dev.php)
   Technology / Webサイト・システム開発
══════════════════════════════ */
.dev {
  --dev-blue: #1d20b2;
  --dev-blue2: #1f4fa0;
  --dev-blue3: #0a26d5;
  --dev-blue-soft: #eaf1fb;
  --dev-ink: #004aad;
  --dev-muted: #5b6472;
  --dev-light-blue: #c1d5f9;
  color: var(--dev-ink);
  font-family: "Noto Sans JP", sans-serif;
}

.dev__inner {
  width: 86%;
  max-width: var(--container-max);
  margin: 0 auto;
  padding: 0;
}

/* ── breadcrumb ── */
.dev-bc {
  font-size: 0.75rem;
  color: var(--dev-ink);
  padding: 0.9rem 0 0.2rem;
  font-family: "Noto Sans JP", sans-serif;
}

.dev-bc a { color: var(--dev-blue); }
.dev-bc a:hover { text-decoration: underline; }

/* ── HERO (full-bleed background image) ── */
.dev-hero {
    background-image:
    /* linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.1) 0%,
        rgba(255, 255, 255, 0.30) 30%,
        rgba(255, 255, 255, 0.35) 40%
    ), */
    url("assets/img/dev-hero.png");
    background-repeat: no-repeat, no-repeat;
    background-size: cover, cover;
    background-position: center, right center;
    width: 86%;
    margin: 0 auto;
}

.dev-hero .dev__inner {
    padding-top: 0.4rem;
    padding-bottom: 2rem;
    display: flex;
    flex-direction: column;
}

.dev-hero__content {
  max-width: 620px;
  padding: 1.2rem 0 1.6rem;
}

.dev-hero__eyebrow {
  font-family: "Noto Sans JP", sans-serif;
  font-size: 20px;
  font-weight: 700;
  letter-spacing: 0.04em;
  color: var(--dev-blue);
  margin: 0 0 0.4rem;
}

.dev-hero__title {
  margin: 0 0 1rem;
  font-size: 45px;
  font-weight: 900;
  line-height: 1.15;
  letter-spacing: 0.01em;
  color: var(--dev-ink);
}

.dev-hero__lead {
  margin: 0 0 0.8rem;
  font-size: clamp(1.05rem, 2.4vw, 1.35rem);
  font-weight: 700;
  line-height: 1.55;
  color: var(--dev-blue);
}

.dev-hero__desc {
  margin: 0;
  font-size: 0.92rem;
  line-height: 1.9;
  color: #001524;
  font-weight: bolder;
  max-width: 34em;
}

/* 3 feature columns inside one white panel, overlapping bottom of hero image */
.dev-hcards {
  margin-top: auto;
  align-self: flex-start;
  width: 100%;
  max-width: 610px;
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 18px 42px rgba(20, 33, 58, 0.13);
  padding: 1.5rem 1rem;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0.5rem;
  border: 1px solid #000;
}

.dev-hcard {
  text-align: center;
  padding: 0 0.9rem;
  position: relative;
}

.dev-hcard + .dev-hcard::before {
  content: "";
  position: absolute;
  left: 0;
  top: 6%;
  bottom: 6%;
  width: 1px;
  background: #5a5b5e;
}

.dev-hcard__ic {
  width: 46px;
  height: 46px;
  margin: 0 auto 0.55rem;
  color: var(--dev-blue);
  display: grid;
  place-items: center;
}

.dev-hcard__ic svg { width: 42px; height: 42px; }

.dev-hcard__title {
  margin: 0 0 0.4rem;
  font-size: 0.82rem;
  font-weight: 700;
  line-height: 1.35;
  color: var(--dev-blue);
}

.dev-hcard__desc {
  margin: 0;
  font-size: 0.68rem;
  line-height: 1.7;
  color: var(--dev-muted);
  font-weight: bolder;
}

@media (max-width: 640px) {
  .dev-hero {
    background-image:
      linear-gradient(180deg, rgba(255, 255, 255, 0.92) 0%, rgba(255, 255, 255, 0.8) 40%, rgba(255, 255, 255, 0.62) 100%),
      url("assets/img/dev-hero.png");
    background-position: center, center right;
  }
  .dev-hero .dev__inner { min-height: 0; }
  .dev-hero__content { max-width: 100%; }
  .dev-hcards { grid-template-columns: 1fr; gap: 1.2rem; max-width: 100%; }
  .dev-hcard + .dev-hcard::before { left: 12%; right: 12%; top: -0.6rem; bottom: auto; width: auto; height: 1px; }
}

@media (max-width: 592px) {
  .dev-sec.dev-sec-team { margin-top: 0; }
  .dev-sec.dev-sec-service { padding-top: 0; margin-top: 20px; }
  .dev-tp__ic img { margin: 0 auto 0.6rem; }
  .dev-tp { text-align: center !important; }
}

@media (max-width: 400px) {
  .dev-sec.dev-sec--tint.dev-sec-team { margin-top: 0; }
}

/* ── SECTION shell ── */
.dev-sec { padding: 3.2rem 0; }
.dev-sec--tint { background: #f5f8fd; }

.dev-sec__head { text-align: center; margin-bottom: 2rem; }

.dev-sec__title {
  display: inline-block;
  margin: 0;
  font-size: clamp(1.4rem, 3.5vw, 2rem);
  font-weight: 900;
  color: var(--dev-ink);
}

.dev-sec__title::after {
  content: "";
  display: block;
  width: 100%;
  height: 4px;
  border-radius: 2px;
  background: var(--dev-muted);
  margin: 0.7rem auto 0;
}

.dev-work__note::after {
  content: "";
  display: block;
  width: 50%;
  height: 4px;
  border-radius: 2px;
  background: var(--dev-muted);
  margin: 0.7rem auto 0;
}

.dev-sec__title.skip-underline::after { display: none; }

/* ── WHY (3-step flow with arrows) ── */
.dev-why {
  display: flex;
  flex-wrap: nowrap;
  align-items: stretch;
  justify-content: center;
  gap: 0.4rem;
}

.dev-why__item {
  position: relative;
  flex: 1 1 0;
  min-width: 0;
  max-width: 340px;
  text-align: left;
  padding: 1.3rem 1.4rem;
  border: 2px solid var(--dev-blue-soft);
  border-radius: 14px;
  background: #fff;
  overflow: hidden;
}

.dev-why__num {
  position: absolute;
  top: 1.3rem;
  left: 1.4rem;
  z-index: 2;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 4px solid var(--dev-blue);
  color: var(--dev-blue);
  display: grid;
  place-items: center;
  font-family: 'Roboto Mono', monospace;
  font-size: 1.7rem;
  font-weight: 700;
  line-height: 1;
}

.dev-why__main { display: flex; align-items: center; gap: 0.9rem; margin-top: 18px; }
.dev-why__text { flex: 1 1 auto; min-width: 0; }

.dev-why__title {
  margin: 0 0 0.7rem;
  padding-left: calc(38px + 1rem);
  min-height: 38px;
  display: flex;
  align-items: center;
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--dev-ink);
  text-wrap: nowrap;
}

.dev-why__desc { margin: 0; font-size: 0.85rem; line-height: 1.85; color: var(--dev-ink); }

.dev-why__ic { flex: 0 0 auto; width: 62px; height: 62px; object-fit: contain; opacity: 0.85; }
.dev-why__ic.myanmar-flag { width: 100px; height: 100px; object-fit: contain; }
.dev-why__arrow { flex: 0 0 auto; width: 44px; height: auto; align-self: center; object-fit: contain; }

@media (max-width: 1000px) {
  .dev-why { flex-direction: column; align-items: center; gap: 0.6rem; }
  .dev-why__item { flex: 0 0 auto; max-width: 440px; width: 100%; }
  .dev-why__arrow { width: 34px; transform: rotate(90deg); }
}

/* ── SERVICE CONTENT (4 cards) ── */
.dev-serv { display: grid; grid-template-columns: 1fr; gap: 1.2rem; }

@media (min-width: 600px) {
  .dev-serv { grid-template-columns: repeat(2, 1fr); }
}

@media (min-width: 1000px) {
  .dev-serv { grid-template-columns: repeat(4, 1fr); }
}

.dev-scard {
  background: #fff;
  border: 1px solid #e6edf7;
  border-radius: 14px;
  padding: 1.8rem 1.3rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  box-shadow: 0 8px 20px rgba(20, 33, 58, 0.05);
}

.dev-scard__ic {
  width: 76px;
  height: 76px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  margin-bottom: 1.1rem;
}

.dev-scard__ic img { width: 75px; height: 75px; object-fit: contain; }

.dev-scard__title { margin: 0 0 0.7rem; font-size: 1rem; font-weight: 700; color: var(--dev-blue3); }

.dev-scard__desc {
  margin: 0 0 1.1rem;
  font-size: 0.82rem;
  line-height: 1.8;
  color: var(--dev-muted);
  text-align: left;
  flex: 1;
  font-weight: bolder;
}

.dev-scard__tag {
  font-size: 0.72rem;
  font-weight: 700;
  color: var(--dev-blue3);
  background: var(--dev-blue-soft);
  border-radius: 8px;
  padding: 0.35rem 0.8rem;
}

/* ── TEAM ── */
.dev-team__grid { display: grid; grid-template-columns: 1fr; gap: 2rem; align-items: center; }

@media (min-width: 900px) {
  .dev-team__grid { grid-template-columns: 1fr 1fr; }
}

.dev-team__en { font-family: "Anonymous Pro", monospace; font-size: 0.9rem; font-weight: 700; color: var(--dev-ink); margin: 0 0 0.2rem; }
.dev-team__jp { margin: 0 0 1rem; font-size: clamp(1.4rem, 3.5vw, 1.9rem); font-weight: 900; color: var(--dev-ink); }
.dev-team__desc { margin: 0 0 1.6rem; font-size: 0.9rem; line-height: 1.9; color: var(--dev-muted); font-weight: bolder; }

.dev-team__media {
  width: 100%;
  aspect-ratio: 16 / 10;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(20, 33, 58, 0.16);
}

.dev-team__points { display: grid; grid-template-columns: 1fr; gap: 0.9rem; }

@media (min-width: 520px) {
  .dev-team__points { grid-template-columns: repeat(3, 1fr); }
}

.dev-tp { text-align: center; width: 100%; }

.dev-tp__ic img {
  width: 80px;
  height: 80px;
  color: var(--dev-blue);
  display: grid;
  place-items: center;
  margin: 0 auto 0.6rem;
}

.dev-tp__t { margin: 0 0 0.3rem; font-size: 0.9rem; font-weight: 700; color: var(--dev-blue); }
.dev-tp__d { margin: 0; font-size: 0.75rem; line-height: 1.7; color: var(--dev-muted); font-weight: bolder; }

/* ── PORTFOLIO ── */
.dev-work { display: grid; grid-template-columns: 1fr; gap: 2.4rem 1.6rem; max-width: 560px; margin: 0 auto; }

@media (min-width: 760px) {
  .dev-work { grid-template-columns: repeat(3, 1fr); max-width: none; }
}

.dev-wcard { background: none; border: none; border-radius: 0; box-shadow: none; }
.dev-wcard__media { width: 100%; margin-bottom: 0.9rem; padding: 0 25px; }
.dev-wcard__media img { display: block; width: 100%; height: auto; }
.dev-wcard__body { padding: 0; font-weight: 700; }
.dev-wcard__row { margin: 0.2rem 0; font-size: 0.8rem; line-height: 1.8; color: #1f2937; }
.dev-work__note { text-align: center; font-size: 0.7rem; color: var(--dev-muted); margin: 0; font-weight: bolder }

/* ── CTA banner + contact (copied from profile.php pattern) ── */
.prof-bottom-row { width: 86%; max-width: 1168px; margin: 3rem auto 2rem; display: flex; gap: 1.5rem; align-items: stretch; }
.prof-cta-banner { flex: 0 0 320px; overflow: hidden; position: relative; min-height: 200px; }
.prof-cta-banner__bg { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
.prof-cta-banner__content { position: relative; z-index: 2; height: 100%; display: flex; flex-direction: column; justify-content: space-between; align-items: flex-end; padding: 1.5rem; gap: 1rem; }
.prof-cta-banner__text { margin-left: 98px; align-self: center; color: #fff; font-size: 12px; font-weight: 700; line-height: 1.7; }
.prof-cta-banner__btns { display: flex; flex-direction: column; align-items: center; gap: 0.8rem; }
.prof-cta-banner__btn { display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.4rem 0.5rem 0.4rem 1rem; border-radius: 999px; font-size: 0.8rem; font-weight: 700; text-decoration: none; white-space: nowrap; transition: opacity .2s; justify-content: space-between; }
.prof-cta-banner__btn::after { content: '→'; display: flex; align-items: center; justify-content: center; width: 30px; height: 30px; border-radius: 50%; background: #fff; font-size: 16px; font-weight: bold; flex-shrink: 0; }
.prof-cta-banner__btn:hover { opacity: 0.85; }
.prof-cta-banner__btn--dl { background: #dc2626; color: #fff; }
.prof-cta-banner__btn--dl::after { color: #dc2626; }
.prof-cta-banner__btn--contact { background: #12499e; color: #fff; }
.prof-cta-banner__btn--contact::after { color: #12499e; }
.prof-contact { flex: 1; min-width: 0; margin: 0; background: #f7f7f7; border-radius: 12px; padding: 1rem 1.5rem; }
.prof-contact__title { font-size: 17px; font-weight: 700; color: #13499e; margin-bottom: 1rem; }
.prof-contact__cards { display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem; }
.prof-contact__card { background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.3rem 1.2rem; display: flex; align-items: flex-start; gap: 0.9rem; }
.prof-contact__icon { width: 71px; flex-shrink: 0; object-fit: contain; }
.prof-contact__label { font-size: 15px; font-weight: 700; color: #13499e; margin: 0 0 0.15rem; }
.prof-contact__hours { font-size: 13px; color: #9ca3af; margin: 0 0 0.2rem; font-family: "Anonymous Pro", monospace; }
.prof-contact__value { font-size: 25px; font-weight: 400; color: #000; margin: 0; line-height: 1.2; }
.prof-contact__link { font-size: 23px; font-weight: 400; color: #000; text-decoration: none; word-break: break-all; }
.prof-contact__link:hover { text-decoration: underline; color: #12499e; }

@media (max-width: 768px) {
  .prof-bottom-row { width: 92%; flex-direction: column; margin: 2rem auto; }
  .prof-cta-banner { flex: none; width: 100%; min-height: 180px; }
  .prof-cta-banner__text { margin-left: 0; text-align: center; }
  .prof-cta-banner__btns { width: 100%; }
  .prof-cta-banner__btn { justify-content: center; }
  .prof-contact { padding: 1.2rem; }
  .prof-contact__cards { grid-template-columns: 1fr; }
}
/* ── Data Services Section (imported from data-services.php) ── */
.ai-page {
  padding-top: 0;
}

.ai-inner {
  width: 86%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0;
}

.ai-bc {
  font-size: 0.8rem;
  color: #000;
  padding: 0 0 0.8rem;
  margin: 0;
  font-weight: 500;
}

.ai-bc a {
  color: #000;
  text-decoration: none;
}

.ai-bc a:hover {
  text-decoration: underline;
}

.ai-bc span {
  font-weight: 700;
  color: #0038a8;
}

.ai-hero {
  position: relative;
  width: 86%;
  margin: 0 auto;
  background-color: #ffffff;
  background-image:
    linear-gradient(90deg, #ffffff 0%, #ffffff 42%, rgba(255, 255, 255, 0.92) 50%, rgba(255, 255, 255, 0) 90%),
    url("assets/img/ai-header-banner.png") !important;
  background-repeat: no-repeat, no-repeat;
  background-position: center, right center;
  background-size: cover, cover;
  min-height: 460px;
  padding: 3rem 0;
  display: flex;
  align-items: center;
}

.ai-hero .ai-inner {
  width: 100%;
  max-width: none;
  margin: 0;
  padding: 0;
}

.ai-hero__content {
  max-width: 520px;
  position: relative;
  z-index: 2;
}

.ai-hero__title {
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 900;
  color: #0038a8;
  margin: 0.6rem 0 0.2rem;
  line-height: 1.25;
  letter-spacing: -0.01em;
}

.ai-hero__subtitle {
  font-size: 1.25rem;
  font-weight: 700;
  color: #1d4ed8;
  margin: 0 0 1.5rem;
  font-family: 'Roboto Mono', monospace;
}

.ai-hero__lead {
  font-size: 1.15rem;
  font-weight: 700;
  color: #1e293b;
  line-height: 1.6;
  margin: 0 0 1.2rem;
}

.ai-hero__desc {
  font-size: 0.88rem;
  color: #4b5563;
  line-height: 1.85;
  margin: 0;
  font-weight: 500;
}

.ai-sec {
  padding: 3.5rem 0;
}

.ai-sec__head {
  text-align: center;
  margin-bottom: 2rem;
}

.ai-sec__title {
  font-size: clamp(1.4rem, 3vw, 1.85rem);
  font-weight: 900;
  color: #0038a8;
  margin: 0 0 1rem;
  display: inline-block;
  position: relative;
}

.ai-sec__title::after {
  content: "";
  display: block;
  width: 340px;
  max-width: 90%;
  height: 3px;
  background: #6b7280;
  margin: 0.8rem auto 0;
  border-radius: 2px;
}

.ai-sec__intro {
  font-size: 0.92rem;
  color: #333333;
  max-width: 800px;
  margin: 0 auto;
  line-height: 1.8;
  font-weight: 600;
  text-align: center;
}

.ai-features-box {
  background: #f2f6fd;
  border-radius: 24px;
  padding: 3rem 1.8rem;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1.5rem;
  margin-top: 2.2rem;
}

.ai-fcard {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 0 0.25rem;
}

.ai-fcard__ic {
  width: 86px;
  height: 86px;
  border-radius: 50%;
  background: #ffffff;
  border: 2px solid #93c5fd;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1.2rem;
  color: #1d4ed8;
  box-shadow: 0 4px 14px rgba(37, 99, 235, 0.08);
}

.ai-fcard__ic svg {
  width: 44px;
  height: 44px;
  stroke: #1d4ed8;
  fill: none;
  stroke-width: 1.6;
  stroke-linecap: round;
  stroke-linejoin: round;
}

.ai-fcard__title {
  font-size: 0.98rem;
  font-weight: 800;
  color: #0038a8;
  margin: 0 0 0.6rem;
  line-height: 1.4;
}

.ai-fcard__desc {
  font-size: 0.78rem;
  color: #1d4ed8;
  line-height: 1.65;
  margin: 0;
  font-weight: 600;
}

.ai-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.8rem;
  margin-top: 2.2rem;
}

.ai-scard {
  background: #f2f6fd;
  border-radius: 24px;
  padding: 1.4rem;
  display: flex;
  flex-direction: column;
  border: 1px solid #e2e8f0;
  transition: transform 0.25s, box-shadow 0.25s;
}

.ai-scard:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 28px rgba(0, 56, 168, 0.08);
}

.ai-scard__media {
  position: relative;
  width: 100%;
  margin-bottom: 1.8rem;
}

.ai-scard__img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 16px;
  display: block;
}

.ai-scard__badge-ic {
  position: absolute;
  bottom: -22px;
  left: 14px;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: #ffffff;
  border: 2px solid #93c5fd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #1d4ed8;
  box-shadow: 0 4px 12px rgba(37, 99, 235, 0.12);
  z-index: 5;
}

.ai-scard__badge-ic svg {
  width: 28px;
  height: 28px;
  stroke: #1d4ed8;
  fill: none;
  stroke-width: 1.8;
  stroke-linecap: round;
  stroke-linejoin: round;
}

.ai-scard__body {
  padding: 0.4rem 0.2rem 0.6rem;
  flex: 1;
  display: flex;
  flex-direction: column;
  text-align: center;
}

.ai-scard__title {
  font-size: 1.15rem;
  font-weight: 800;
  color: #0038a8;
  margin: 0 0 0.8rem;
  text-align: center;
}

.ai-scard__desc {
  font-size: 0.8rem;
  color: #333333;
  line-height: 1.7;
  margin: 0 0 1.2rem;
  font-weight: 500;
  text-align: center;
}

.ai-scard__list {
  list-style: none;
  padding: 0;
  margin: auto auto 0;
  display: flex;
  flex-direction: column;
  gap: 0.35rem;
  text-align: left;
}

.ai-scard__list li {
  font-size: 0.78rem;
  color: #333333;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 0.4rem;
}

.ai-scard__list li::before {
  content: "・";
  color: #0038a8;
  font-weight: bold;
}

.ai-workflow-box {
  background: #f2f6fd;
  border-radius: 24px;
  padding: 3rem 1.8rem;
  margin-top: 2.2rem;
}

.ai-steps-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 1.2rem;
  position: relative;
}

.ai-step {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.ai-step__icon-wrap {
  position: relative;
  width: 86px;
  height: 86px;
  margin: 0 auto 1.2rem;
}

.ai-step__num {
  position: absolute;
  top: 0px;
  left: -42px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 4px solid #004aad;
  color: #0038a8;
  font-size: 0.95rem;
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #ffffff;
  font-family: 'Roboto Mono', monospace;
  z-index: 3;
  box-shadow: 0 2px 6px rgba(0, 56, 168, 0.1);
}

.ai-step__ic {
  width: 86px;
  height: 86px;
  border-radius: 50%;
  background: #ffffff;
  border: 2px solid #c7d6ff;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #b3ceed;
  box-shadow: 0 4px 14px rgba(37, 99, 235, 0.08);
}

.ai-step__ic svg {
  width: 42px;
  height: 42px;
  stroke: #1d4ed8;
  fill: none;
  stroke-width: 1.6;
  stroke-linecap: round;
  stroke-linejoin: round;
}
.ai-step__ic img {
  width: 60px;
  height: 60px;
}

.ai-step__title {
  font-size: 0.92rem;
  font-weight: 800;
  color: #004aad;
  margin: 0 0 0.5rem;
  line-height: 1.4;
  white-space: nowrap;
}

.ai-step__desc {
  font-size: 0.75rem;
  color: #333333;
  line-height: 1.65;
  margin: 0;
  font-weight: 500;
}

@media (max-width: 992px) {
  .ai-hero {
    width: 100vw;
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
    background-image: url("assets/img/ai-header-banner.png");
    background-repeat: no-repeat;
    background-position: center top;
    background-size: 150% auto;
    min-height: 0;
    padding: 1rem 0 2rem;
  }

  .ai-hero__content {
    max-width: 100%;
    padding: 0 1.25rem;
  }

  .ai-bc,
  .ai-hero__title,
  .ai-hero__subtitle,
  .ai-hero__lead,
  .ai-hero__desc {
    text-shadow: 0 1px 3px #ffffff, 0 0 6px #ffffff, 0 0 14px rgba(255, 255, 255, 0.9);
  }

  .ai-bc {
    padding-bottom: 0.2rem;
  }

  .ai-hero__title {
    font-size: 10px;
    margin: 0.15rem 0 0.15rem;
  }

  .ai-hero__subtitle {
    font-size: 0.95rem;
    margin: 0 0 0.5rem;
  }

  .ai-hero__lead {
    font-size:10px;
    margin: 0 0 0.4rem;
  }

  .ai-hero__desc {
    font-size: 9px;
  }

  .ai-features-box {
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem 1.2rem;
  }

  .ai-services-grid {
    grid-template-columns: 1fr;
    max-width: 480px;
    margin: 2rem auto 0;
  }

  .ai-steps-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem 1rem;
  }
}

@media (max-width: 600px) {
  .ai-features-box {
    grid-template-columns: 1fr;
  }

  .ai-steps-grid {
    grid-template-columns: 1fr;
  }

  .ai-sec {
    padding: 2.5rem 0;
  }
}

/* ══════════════════════════════════════════════════════════
   BPOHOME.PHP SECTION (merged from bpohome.php)
   BPOサービス
   ══════════════════════════════════════════════════════════ */
:root {
    --bpo-nav-blue: #0a66c2;
    --bpo-blue: #0066ff;
    --bpo-blue-dark1: #004aad;
    --bpo-blue-dark: #072a6b;
    --bpo-blue-light: #e8f0fe;
    --bpo-blue-border: #dce8f8;
    --bpo-text: #1a1a2e;
    --bpo-muted: #4b5563;
    --bpo-hero-border: #737373;
}

.bpo-page {
    padding-top: 0;
    color: var(--bpo-text);
    font-family: "Noto Sans JP", sans-serif;
    background: #ffffff;
    overflow-x: hidden;
}

.bpo-page *,
.bpo-page *::before,
.bpo-page *::after {
    box-sizing: border-box;
}

.bpo__inner {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 1.25rem;
}

/* ── Breadcrumb ── */
.bpo-bc {
    font-size: 0.8rem;
    font-weight: 700;
    color: #64748b;
    padding: 1.1rem 0 0.4rem;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 0.45rem;
}

.bpo-bc a {
    color: #1e293b;
    text-decoration: none;
    transition: color 0.2s;
}

.bpo-bc a:hover {
    color: var(--bpo-blue);
    text-decoration: underline;
}

.bpo-bc__sep {
    color: #94a3b8;
}

.bpo-bc__current {
    color: var(--bpo-nav-blue);
}

/* ── HERO SECTION ── */
.bpo-hero {
  margin: 0 auto;
    width: 86%;
    position: relative;
    background-color: #ffffff;
    background-image:
        linear-gradient(90deg, #ffffff 0%, rgba(255, 255, 255, 0.9) 22%, rgba(255, 255, 255, 0.55) 36%, rgba(255, 255, 255, 0.15) 48%, rgba(255, 255, 255, 0) 58%),
        url("assets/img/design-team/hero-desk1-cup-hd.webp");
    background-repeat: no-repeat, no-repeat;
    background-size: cover, cover;
    background-position: right center, right center;
    min-height: 560px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-bottom: 2.2rem;
}

.bpo-hero .bpo__inner {
    width: 100%;
    position: relative;
    z-index: 2;
}

.bpo-hero__content {
    max-width: 580px;
    padding-top: 0.6rem;
}

.bpo-hero__eyebrow {
    font-size: 1.15rem;
    font-weight: 800;
    color: var(--bpo-blue);
    letter-spacing: 0.04em;
    margin: 0 0 0.2rem;
}

.bpo-hero__title {
    margin: 0;
    font-size: clamp(2.4rem, 4.4vw, 3.2rem);
    font-weight: 900;
    line-height: 1.15;
    color: #000000;
    letter-spacing: -0.01em;
}

.bpo-hero__subtitle {
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--bpo-blue);
    margin: 0.25rem 0 1.25rem;
    font-family: "Noto Sans JP", sans-serif;
}

.bpo-hero__lead {
    margin: 0 0 0.9rem;
    font-size: clamp(1.12rem, 2.1vw, 1.35rem);
    font-weight: 800;
    line-height: 1.5;
    color: var(--bpo-blue);
}

.bpo-hero__desc {
    margin: 0 0 1.8rem;
    font-size: 0.92rem;
    font-weight: 600;
    line-height: 1.85;
    color: #334155;
    max-width: 36em;
}

/* ── Hero 4-card Bar ── */
.bpo-hero-cards {
    width: 100%;
    max-width: 540px;
    background: #ffffff;
    border: 1.5px solid var(--bpo-hero-border);
    border-radius: 18px;
    box-shadow: 0 12px 28px rgba(15, 34, 58, 0.08);
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    padding: 0.9rem 0.5rem;
}

.bpo-hero-card {
    text-align: center;
    padding: 0.2rem 0.4rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
}

.bpo-hero-card + .bpo-hero-card::before {
    content: "";
    position: absolute;
    left: 0;
    top: 10%;
    bottom: 10%;
    width: 1px;
    background: #e2e8f0;
}

.bpo-hero-card__ic {
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0.45rem;
}

.bpo-hero-card__ic img {
    max-height: 50px;
    max-width: 50px;
    width: auto;
    object-fit: contain;
}

.bpo-hero-card__title {
    font-size: 0.84rem;
    font-weight: 800;
    color: var(--bpo-blue);
    margin: 0 0 0.15rem;
    line-height: 1.25;
    white-space: nowrap;
}

.bpo-hero-card__sub {
    font-size: 0.68rem;
    font-weight: 800;
    color: var(--bpo-muted);
    margin: 0;
    line-height: 1.35;
    white-space: nowrap;
}

.bpo-hero-card--highlight .bpo-hero-card__sub {
    color: var(--bpo-blue);
    font-weight: 800;
}

/* ── SECTION COMMON ── */
.bpo-sec {
    padding: 4.2rem 0 3.6rem;
    position: relative;
}

.bpo-sec__head {
    text-align: center;
    margin-bottom: 2.6rem;
}

.bpo-sec__title {
    display: inline-block;
    margin: 0;
    font-size: clamp(1.3rem, 2.3vw, 1.7rem);
    font-weight: 700;
    color: var(--bpo-blue-dark1);
    position: relative;
    padding-bottom: 0.55rem;
    letter-spacing: 0.01em;
}

.bpo-sec__title::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: calc(100% + 2.6rem);
    max-width: 100vw;
    height: 3px;
    background: #b4bac4;
    border-radius: 2px;
}

.bpo-sec__title--light {
    font-size: clamp(1.45rem, 2.7vw, 1.95rem);
    font-weight: 500;
    color: #1c3f86;
    letter-spacing: 0.06em;
}

.bpo-sec__title--light::after {
    width: calc(100% + 5rem);
}

/* ── SECTION 1: なぜ A CAN SOLUTIONSのBPOなのか ── */
.bpo-sec--why {
    padding: 2.2rem 0 2.6rem;
}

.bpo-sec--why .bpo-sec__head {
    margin-bottom: 1.4rem;
}

.bpo-why-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.3rem;
    max-width: 1060px;
    margin: 0 auto;
}

.bpo-why-card {
    position: relative;
    background: #ffffff;
    border: 1px solid #e3ebf7;
    border-radius: 8px;
    padding: 1.1rem 1.1rem 1.35rem;
    box-shadow: 0 2px 10px rgba(30, 64, 140, 0.06);
    display: flex;
    flex-direction: column;
    min-height: 200px;
    overflow: hidden;
    transition: transform 0.22s ease, box-shadow 0.22s ease;
}

.bpo-why-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 24px rgba(30, 64, 140, 0.1);
}

.bpo-why-card__badge {
    position: absolute;
    top: 0.95rem;
    left: 0.95rem;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #1446c8;
    color: #ffffff;
    font-size: 1rem;
    font-weight: 700;
    display: grid;
    place-items: center;
}

.bpo-why-card__icon {
    display: block;
    width: 62px;
    height: 54px;
    margin: 0.35rem auto 0.9rem;
    color: #1f4fd6;
}

.bpo-why-card__deco {
    position: absolute;
    right: 0.8rem;
    top: 40%;
    width: 60px;
    height: 60px;
    color: #b8cbf3;
    transform: translateY(-38%);
    pointer-events: none;
}

.bpo-why-card__title {
    position: relative;
    margin: 0 0 0.6rem;
    padding-right: 2.4rem;
    font-size: 0.95rem;
    font-weight: 700;
    color: #0d3a94;
    line-height: 1.4;
}

.bpo-why-card__desc {
    position: relative;
    margin: 0;
    padding-right: 2.4rem;
    font-size: 0.8rem;
    font-weight: 500;
    color: #2b2f36;
    line-height: 1.7;
}

/* ── SECTION 2: 主な業務 ── */
.bpo-sec--tasks {
    padding: 2.4rem 0 3rem;
    background: linear-gradient(180deg, #f7f9fd 0%, #f2f6fc 100%);
}

.bpo-sec--tasks .bpo-sec__head {
    margin-bottom: 1.4rem;
}

.bpo-tasks-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem 1rem;
}

.bpo-task-card {
    background: #ffffff;
    border-radius: 6px;
    padding: 1.5rem 1.2rem 1.5rem 1.3rem;
    box-shadow: 0 2px 12px rgba(30, 64, 140, 0.05);
    display: grid;
    grid-template-columns: 84px 1fr;
    align-items: center;
    gap: 0.9rem;
    min-height: 150px;
    transition: transform 0.22s ease, box-shadow 0.22s ease;
}

.bpo-task-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 24px rgba(30, 64, 140, 0.1);
}

.bpo-task-card__ic {
    width: 84px;
    height: 72px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bpo-task-card__ic img {
    width: 72px;
    max-width: 100%;
    max-height: 66px;
    height: auto;
    object-fit: contain;
}

.bpo-task-card__content {
    min-width: 0;
    text-align: center;
}

.bpo-task-card__title {
    margin: 0 0 0.7rem;
    font-size: 1rem;
    font-weight: 700;
    color: #1c4fb5;
    line-height: 1.35;
}

.bpo-task-card__badge {
    display: block;
    width: 100%;
    max-width: 200px;
    margin: 0 auto 0.75rem;
    background: #e3edfc;
    color: #1c4fb5;
    font-weight: 700;
    font-size: 0.95rem;
    padding: 0.35rem 0.6rem;
    border-radius: 4px;
    letter-spacing: 0.01em;
}

.bpo-task-card__desc {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 700;
    color: #2b2f36;
    line-height: 1.55;
}

@media (max-width: 580px) {
    .bpo-task-card {
        grid-template-columns: 64px 1fr;
        padding: 1.2rem 1rem;
        min-height: 0;
    }

    .bpo-task-card__ic {
        width: 64px;
        height: 60px;
    }

    .bpo-task-card__ic img {
        width: 56px;
    }

    .bpo-why-card {
        min-height: 0;
    }
}

/* ── SECTION 3: 運用フロー ── */
.bpo-flow-wrap {
    display: flex;
    align-items: stretch;
    justify-content: center;
    gap: 0.65rem;
}

.bpo-flow-card {
    flex: 1 1 0;
    position: relative;
    background: #ffffff;
    border: 1.5px solid var(--bpo-blue-border);
    border-radius: 14px;
    padding: 1.5rem 1.05rem 1.35rem;
    box-shadow: 0 6px 20px rgba(20, 33, 58, 0.05);
    display: flex;
    flex-direction: column;
    text-align: center;
    transition: transform 0.22s ease, box-shadow 0.22s ease;
}

.bpo-flow-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 26px rgba(0, 74, 173, 0.1);
}

.bpo-flow-card__badge {
    position: absolute;
    top: 1.05rem;
    left: 1.05rem;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--bpo-blue);
    color: #ffffff;
    font-family: "Noto Sans JP", sans-serif;
    font-size: 0.95rem;
    font-weight: 800;
    display: grid;
    place-items: center;
    box-shadow: 0 2px 6px rgba(0, 74, 173, 0.2);
}

.bpo-flow-card__ic {
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0.4rem auto 0.9rem;
}

.bpo-flow-card__ic img {
    max-height: 52px;
    max-width: 65px;
    width: auto;
    object-fit: contain;
}

.bpo-hero-card__ic svg {
    width: 38px;
    height: 38px;
    color: #1664e0;
}

.bpo-task-card__ic svg {
    width: 68px;
    height: 64px;
    color: #1a63c2;
}

.bpo-flow-card__ic svg {
    width: 58px;
    height: 52px;
    color: #1664e0;
}

@media (max-width: 580px) {
    .bpo-task-card__ic svg {
        width: 54px;
        height: 52px;
    }
}

.bpo-flow-card__title {
    margin: 0 0 0.55rem;
    font-size: 1.02rem;
    font-weight: 800;
    color: var(--bpo-blue);
    line-height: 1.35;
}

.bpo-flow-card__desc {
    margin: 0;
    font-size: 0.79rem;
    font-weight: 600;
    color: #334155;
    line-height: 1.7;
}

.bpo-flow-arrow {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--bpo-blue);
    padding: 0 0.15rem;
}

.bpo-flow-arrow svg {
    width: 22px;
    height: 22px;
    stroke: var(--bpo-blue);
    stroke-width: 3.5;
}

/* ── SECTION 4: BPOチーム ── */
.bpo-sec-team {
    background: #ffffff;
    padding-bottom: 4.8rem;
}

.bpo-team-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.95fr;
    gap: 2.8rem;
    align-items: center;
}

.bpo-team__jp {
    margin: 0 0 0.15rem;
    font-size: clamp(2rem, 3.8vw, 2.75rem);
    font-weight: 900;
    color: var(--bpo-blue);
    line-height: 1.15;
    letter-spacing: -0.01em;
}

.bpo-team__en {
    margin: 0 0 1.4rem;
    font-family: "Noto Sans JP", sans-serif;
    font-size: 1.02rem;
    font-weight: 700;
    color: var(--bpo-blue);
    letter-spacing: 0.02em;
}

.bpo-team__desc-wrap {
    margin-bottom: 2.1rem;
}

.bpo-team__desc {
    margin: 0 0 0.35rem;
    font-size: 0.86rem;
    font-weight: 500;
    line-height: 1.75;
    color: var(--bpo-blue);
}

.bpo-team__features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.2rem 1rem;
}

.bpo-team-feat {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.bpo-team-feat__ic {
    height: 52px;
    display: flex;
    align-items: center;
    margin-bottom: 0.55rem;
}

.bpo-team-feat__ic img {
    max-height: 48px;
    max-width: 58px;
    width: auto;
    object-fit: contain;
}

.bpo-team-feat__t {
    margin: 0 0 0.3rem;
    font-size: 0.95rem;
    font-weight: 800;
    color: #0b1a30;
    line-height: 1.3;
}

.bpo-team-feat__d {
    margin: 0;
    font-size: 0.74rem;
    font-weight: 600;
    line-height: 1.6;
    color: #334155;
    text-align: center;
}

.bpo-team-media {
    width: 100%;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 16px 36px rgba(20, 33, 58, 0.12);
}

.bpo-team-media img {
    width: 100%;
    height: 100%;
    aspect-ratio: 16 / 10;
    object-fit: cover;
    display: block;
}

/* ── BPO responsive ── */
@media (max-width: 1024px) {
    .bpo-why-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .bpo-tasks-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .bpo-flow-wrap {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.4rem;
    }

    .bpo-flow-arrow {
        display: none;
    }
}

@media (max-width: 768px) {
    .bpo-hero {
        background-image:
            linear-gradient(180deg, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0.7) 45%, rgba(255, 255, 255, 0.85) 100%),
            url("assets/img/design-team/hero-desk1-cup-hd.webp");
        background-position: center top;
        min-height: auto;
        padding-bottom: 2.5rem;
    }

    .bpo-hero__content {
        max-width: 100%;
    }

    .bpo-hero-cards {
        grid-template-columns: 1fr 1fr;
        gap: 0.8rem;
        max-width: 100%;
    }

    .bpo-hero-card + .bpo-hero-card::before {
        display: none;
    }

    .bpo-sec {
        padding: 3.2rem 0 2.6rem;
    }

    .bpo-tasks-grid {
        grid-template-columns: 1fr;
    }

    .bpo-team-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .bpo-team__features {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 580px) {
    .bpo-why-grid {
        grid-template-columns: 1fr;
    }

    .bpo-flow-wrap {
        grid-template-columns: 1fr;
    }

    .bpo-hero-cards {
        grid-template-columns: 1fr;
    }

    .bpo-team__features {
        grid-template-columns: 1fr;
        gap: 1.4rem;
    }
}
  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K54Z6ZKQ');</script>
<!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K54Z6ZKQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- ── Site Header ── -->
  <?php include 'menu.php'; ?>

  <main id="main">
    <!-- ========================================================== -->
    <!-- HERO                                                          -->
    <!-- スマホ版: "GROW YOUR COMPANY" を中央に大きく配置             -->
    <!-- PC 版: ロゴ + "A CAN SOLUTIONS" を中央に静かに配置           -->
    <!-- 両方の HTML をマークアップし CSS で表示切替する。           -->
    <!-- ========================================================== -->
    <section class="hero" id="top" aria-labelledby="hero-title-m">
      <!-- mobile-only hero -->
      <div class="hero__mobile" aria-hidden="false">
        <p class="hero__pre">
          <span class="hero__pre-inner">Benefit from our tried and tested solutions.</span>
        </p>
        <h1 class="hero__title" id="hero-title-m">
          <span class="hero__title-line">
            <span class="hero__title-word" data-text="Grow">GROW</span>
            <span class="hero__title-word" data-text="Your">YOUR</span>
          </span>
          <span class="hero__title-line">
            <span class="hero__title-word" data-text="Company">COMPANY</span>
          </span>
        </h1>
        <p class="hero__sub">
          <span class="hero__sub-inner">Your Trusted Partner in<br />Digital Transformation</span>
        </p>
        <p class="hero__company">
          <span class="hero__company-inner">
            <img src="assets/img/logo.webp" alt="" class="hero__logo" width="40" height="40" />
            <span>A CAN SOLUTIONS Co.,Ltd.</span>
          </span>
        </p>
      </div>

      <!-- desktop-only hero: small logo intro -->
      <div class="hero__desktop" aria-hidden="true">
        <img src="assets/img/logo.webp" alt="" class="hero__desktop-logo reveal" width="200" height="200" />
        <p class="hero__desktop-name reveal reveal--delay-1">A CAN SOLUTIONS</p>
        <p class="hero__desktop-tag reveal reveal--delay-2">Grow Your Company</p>
      </div>
    </section>

    <!-- ========================================================== -->
    <!-- HERO MARKETING (desktop only)                                -->
    <!-- Canva デスクトップ版で言及される「Benefit from our tried     -->
    <!-- and tested solutions.」で始まる GROW YOUR COMPANY 大見出し  -->
    <!-- のページ。モバイルでは hero__mobile 側に表示済みのためここ -->
    <!-- では非表示。                                                  -->
    <!-- ========================================================== -->
    <section class="hero-marketing" aria-labelledby="hero-title-d">
      <div class="hero-marketing__inner">
        <p class="hero-marketing__pre">
          <span class="hero-marketing__pre-inner">Benefit from our tried and tested solutions.</span>
        </p>
        <h2 class="hero-marketing__title" id="hero-title-d">
          <span class="hero-marketing__title-line">
            <span class="hero-marketing__title-word" data-text="Grow">GROW</span>
            <span class="hero-marketing__title-word" data-text="Your">YOUR</span>
          </span>
          <span class="hero-marketing__title-line">
            <span class="hero-marketing__title-word" data-text="Company">COMPANY</span>
          </span>
        </h2>
        <p class="hero-marketing__sub reveal">
          <span class="reveal__inner">Your Trusted Partner in Digital Transformation</span>
        </p>
        <p class="hero-marketing__company reveal reveal--delay-1">
          <span class="reveal__inner">
            <img src="assets/img/logo.webp" alt="" class="hero-marketing__logo" width="48" height="48" />
            <span>A CAN SOLUTIONS Co.,Ltd.</span>
          </span>
        </p>
      </div>
    </section>
  
    <!-- ========================================================== -->
    <!-- SERVICE.PHP UI SECTION                                       -->
    <!-- ========================================================== -->
    <section class="service-php-section" id="services">
      <!-- ── Hero Banner ── -->
      <div class="dl-hero">
        <img src="assets/img/homepage.png" alt="サービス" class="dl-hero__img" />
      </div>

      <div class="svc-wrap">

        <!-- ── Primary Service Cards ── -->
        <section class="svc-section">
          <div class="svc-grid">

            <!-- AI・データサービス -->
            <div class="svc-card svc-card--blue blue-50">
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
              <a href="#data-services" class="svc-card__btn">
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
              <a href="#case-kpo" class="svc-card__btn">
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
              <a href="#case-kpo" class="svc-card__btn">
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
              <a href="#technology" class="svc-card__btn">
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
              <a href="#case-design" class="svc-card__btn">
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
    </section>



    <!-- ========================================================== -->
    <!-- DATA SERVICES SECTION (imported from data-services.php)      -->
    <!-- AI・データサービス                                           -->
    <!-- ========================================================== -->
    <div class="ai-page" id="data-services">

        <!-- HERO SECTION -->
        <section class="ai-hero">
            <div class="ai-inner">
                <div class="ai-hero__content">
                    <p class="ai-bc">
                        <a href="index.php">HOME</a> ＞ <a href="index.php#services">サービス</a> ＞ <span>AI・データサービス</span>
                    </p>
                    <h1 class="ai-hero__title">AI・データサービス</h1>
                    <p class="ai-hero__subtitle">AI &amp; Data Services</p>
                    <p class="ai-hero__lead">
                        AI開発やデータ活用を支える<br />高品質なデータ作成・評価サービスを提供します。
                    </p>
                    <p class="ai-hero__desc">
                        AIの精度向上には、質の高いデータと評価が不可欠です。<br />
                        A CAN SOLUTIONSは、データの収集・アノテーションから<br />
                        AIモデルの評価まで、AI開発の全プロセスを支援します。
                    </p><br>
                </div>
            </div>
        </section>

        <div class="ai-inner">

            <!-- SECTION 1: AI開発を加速する、データの力 -->
            <section class="ai-sec">
                <div class="ai-sec__head">
                    <h2 class="ai-sec__title">AI開発を加速する、データの力</h2>
                    <p class="ai-sec__intro">
                        高品質なデータは、AIモデルの学習精度と判断性能を左右します。<br />
                        A CAN SOLUTIONSは、各種AI開発・運用フェーズで必要なデータサービスをワンストップで提供します。
                    </p>
                </div>

                <div class="ai-features-box">
                    <div class="ai-fcard">
                        <div class="ai-fcard__ic" aria-hidden="true">
                            <img src="assets/img/dd-1.png" alt="高品質なデータ作成" style="width: 44px; height: 44px;" />
                        </div>
                        <h3 class="ai-fcard__title">高品質なデータ作成</h3>
                        <p class="ai-fcard__desc">専門のアノテーターが正確かつ一貫性のあるデータを作成します。</p>
                    </div>

                    <div class="ai-fcard">
                        <div class="ai-fcard__ic" aria-hidden="true">
                            <img src="assets/img/dd-2.png" alt="多様なデータ形式に対応" style="width: 44px; height: 44px;" />
                        </div>
                        <h3 class="ai-fcard__title">多様なデータ形式に対応</h3>
                        <p class="ai-fcard__desc">画像・テキスト・音声・動画など、様々なデータ形式に対応します。</p>
                    </div>

                    <div class="ai-fcard">
                        <div class="ai-fcard__ic" aria-hidden="true">
                            <img src="assets/img/dd-3.png" alt="厳格な品質管理" style="width: 44px; height: 44px;" />
                        </div>
                        <h3 class="ai-fcard__title">厳格な品質管理</h3>
                        <p class="ai-fcard__desc">日本品質の理解と複数チェックで、高い品質を保証します。</p>
                    </div>

                    <div class="ai-fcard">
                        <div class="ai-fcard__ic" aria-hidden="true">
                            <img src="assets/img/dd-4.png" alt="AI開発の全工程を支援" style="width: 44px; height: 44px;" />
                        </div>
                        <h3 class="ai-fcard__title">AI開発の全工程を支援</h3>
                        <p class="ai-fcard__desc">データ作成から評価まで、AI開発の各フェーズをサポートします。</p>
                    </div>
                </div>
            </section>

            <!-- SECTION 2: 主なサービス -->
            <section class="ai-sec">
                <div class="ai-sec__head">
                    <h2 class="ai-sec__title">主なサービス</h2>
                </div>

                <div class="ai-services-grid">
                    <div class="ai-scard">
                        <div class="ai-scard__media">
                            <img src="assets/img/blogpost-1.png" alt="AIアノテーション" class="ai-scard__img" />
                            <div class="ai-scard__badge-ic" aria-hidden="true">
                                <img src="assets/img/dd-1.png" alt="" style="width: 28px; height: 28px;" />
                            </div>
                        </div>
                        <div class="ai-scard__body">
                            <h3 class="ai-scard__title">AIアノテーション</h3>
                            <p class="ai-scard__desc">
                                画像・動画・点群・テキストなどにラベル付けを行い、AI学習用データを作成します。
                            </p>
                            <ul class="ai-scard__list">
                                <li>画像アノテーション</li>
                                <li>動画アノテーション</li>
                                <li>3D点群アノテーション</li>
                                <li>テキストアノテーション</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ai-scard">
                        <div class="ai-scard__media">
                            <img src="assets/img/blogpost-2.png" alt="AI学習データ作成" class="ai-scard__img" />
                            <div class="ai-scard__badge-ic" aria-hidden="true">
                                <img src="assets/img/dd-2.png" alt="" style="width: 28px; height: 28px;" />
                            </div>
                        </div>
                        <div class="ai-scard__body">
                            <h3 class="ai-scard__title">AI学習データ作成</h3>
                            <p class="ai-scard__desc">
                                AIのモデル学習に最適化した高品質でバランスの取れたデータセットを作成します。
                            </p>
                            <ul class="ai-scard__list">
                                <li>データ収集、クレンジング</li>
                                <li>データ整形、変換</li>
                                <li>データセット構築</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ai-scard">
                        <div class="ai-scard__media">
                            <img src="assets/img/blogpost-3.png" alt="OCR×AI・データ確認" class="ai-scard__img" />
                            <div class="ai-scard__badge-ic" aria-hidden="true">
                                <img src="assets/img/dd-4.png" alt="" style="width: 28px; height: 28px;" />
                            </div>
                        </div>
                        <div class="ai-scard__body">
                            <h3 class="ai-scard__title">OCR×AI・データ確認</h3>
                            <p class="ai-scard__desc">
                                OCRの読み取り精度を確認、修正し、高精度なデータを提供します。
                            </p>
                            <ul class="ai-scard__list">
                                <li>OCR結果の確認／修正</li>
                                <li>データ整形</li>
                                <li>帳票データ化</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 3: サービス提供の流れ -->
            <section class="ai-sec">
                <div class="ai-sec__head">
                    <h2 class="ai-sec__title">サービス提供の流れ</h2>
                </div>

                <div class="ai-workflow-box">
                    <div class="ai-steps-grid">
                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">1</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-1.png" alt="" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">ヒアリング・要件定義</h3>
                            <p class="ai-step__desc">お客様の課題や目的をヒアリングし、<br>最適なご提案を行います</p>
                        </div>

                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">2</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-2.png" alt="" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">データ準備</h3>
                            <p class="ai-step__desc">必要なデータを収集、準備し作業環境<br>を構築します。</p>
                        </div>

                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">3</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-3.png" alt="" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">データ作成・評価</h3>
                            <p class="ai-step__desc">専門スタッフがデータ作成・評価を実<br>施し、品質を管理します。</p>
                        </div>

                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">4</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-4.png" alt="" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">納品・検収</h3>
                            <p class="ai-step__desc">成果物を納品し、品質をご確認いただ<br>きます。</p>
                        </div>

                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">5</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-5.png" alt="" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">改善・運用サポート</h3>
                            <p class="ai-step__desc">AIの運用・改善に向けた継続的なサポート<br>を提供します。</p>
                        </div>
                    </div>
                </div>
            </section>

        </div><!-- /ai-inner -->
    </div><!-- /ai-page -->



    <!-- ========================================================== -->
    <!-- ACAN-DEV.PHP SECTION (imported from acan-dev.php)             -->
    <!-- Technology / Webサイト・システム開発                          -->
    <!-- ========================================================== -->
    <div class="dev" id="technology">

        <!-- HERO -->
        <section class="dev-hero">
            <div class="dev__inner">
                <p class="dev-bc"><a href="index.php" style="color: #000;">HOME</a> <span style="color: #000;">＞</span> <a href="index.php#services" style="color: #000;">サービス</a> <span style="color: #000;">＞</span> <span style="font-weight: bolder;">Technology（Webサイト・システム開発）</span></p>

                <div class="dev-hero__content">
                    <p class="dev-hero__eyebrow">Technology</p>
                    <h1 class="dev-hero__title">Webサイト・システム開発</h1>
                    <p class="dev-hero__lead">日本品質 × ミャンマー開発チームで、<br>高品質なWeb・システム開発を。</p>
                    <p class="dev-hero__desc">
                        文化やコミュニケーションの違いは、日本側のマネジメントがサポート。<br>ミャンマーのIT人材と連携し、Webサイト制作から<br>システム開発・保守まで対応します。
                    </p>
                </div>

                <!-- 3 feature columns in one white panel -->
                <div class="dev-hcards">
                    <div class="dev-hcard">
                        <span class="dev-hcard__ic" aria-hidden="true">
                            <img src="./assets/img/dev-hero3.png" alt="">
                        </span>
                        <h3 class="dev-hcard__title">Web制作・開発に対応</h3>
                        <p class="dev-hcard__desc ">コーポレートサイト、LP<br>システム開発まで幅広く対応。</p>
                    </div>
                    <div class="dev-hcard">
                        <span class="dev-hcard__ic" aria-hidden="true">
                            <img src="./assets/img/dev-hero1.png" alt="">
                        </span>
                        <h3 class="dev-hcard__title">ミャンマーIT人材</h3>
                        <p class="dev-hcard__desc">若く優秀な人材を育成し、<br>開発チームとして活躍。</p>
                    </div>
                    <div class="dev-hcard">
                        <span class="dev-hcard__ic" aria-hidden="true">
                            <img src="./assets/img/dev-hero2.png" alt="">
                        </span>
                        <h3 class="dev-hcard__title">日本品質のサポート</h3>
                        <p class="dev-hcard__desc">日本側が品質管理・進行管理<br>を行い、安心の体制を構築。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY MYANMAR -->
        <section class="dev-sec dev-sec--tint">
            <div class="dev__inner">
                <div class="dev-sec__head">
                    <h2 class="dev-sec__title">なぜミャンマーでIT人材を育成したのか</h2>
                </div>
                <div class="dev-why">
                    <div class="dev-why__item">
                        <span class="dev-why__num">1</span>
                        <div class="dev-why__main">
                            <div class="dev-why__text">
                                <h3 class="dev-why__title">IT人材不足への課題</h3>
                                <p class="dev-why__desc">日本国内では、IT人材の不足が深刻であり、開発コストの高騰や納期遅延が問題となっていました。</p>
                            </div>
                            <img class="dev-why__ic" src="assets/img/dev-sectioin2.1.png" alt="" aria-hidden="true" />
                        </div>
                    </div>
                    <img class="dev-why__arrow" src="assets/img/dev-section-arrow.png" alt="" aria-hidden="true" />
                    <div class="dev-why__item">
                        <span class="dev-why__num">2</span>
                        <div class="dev-why__main">
                            <div class="dev-why__text">
                                <h3 class="dev-why__title">ミャンマーとの出会い</h3>
                                <p class="dev-why__desc">現地視察を通じて、若い人材の学習意欲やポテンシャルの高さ、誠実さに大きな可能性を感じました。</p>
                            </div>
                            <img class="dev-why__ic myanmar-flag" src="assets/img/dev-section-2.2.png" alt="" aria-hidden="true" />
                        </div>
                    </div>
                    <img class="dev-why__arrow" src="assets/img/dev-section-arrow.png" alt="" aria-hidden="true" />
                    <div class="dev-why__item">
                        <span class="dev-why__num">3</span>
                        <div class="dev-why__main">
                            <div class="dev-why__text">
                                <h3 class="dev-why__title">日本の案件で人材を育成</h3>
                                <p class="dev-why__desc">単なる外注先ではなく、共に成長し、長期的に信頼できるITチームを育成しています。</p>
                            </div>
                            <img class="dev-why__ic" src="assets/img/dev-section2.3.png" alt="" aria-hidden="true" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE CONTENT -->
        <section class="dev-sec dev-sec-service">
            <div class="dev__inner">
                <div class="dev-sec__head">
                    <h2 class="dev-sec__title">サービス内容</h2>
                </div>
                <div class="dev-serv">
                    <div class="dev-scard">
                        <div class="dev-scard__ic"><img src="assets/img/dev-service1.png" alt="" /></div>
                        <h3 class="dev-scard__title">Webサイトデザイン</h3>
                        <p class="dev-scard__desc">UI/UX設計、デザインカンプ作<br>成、レスポンシブデザインなど、<br>ユーザーに伝わるデザインを<br>ご提案します。</p>
                        <span class="dev-scard__tag">対応例：コーポレートサイト / LP</span>
                    </div>
                    <div class="dev-scard">
                        <div class="dev-scard__ic"><img src="assets/img/dev-service2.png" alt="" /></div>
                        <h3 class="dev-scard__title">Webサイト構築</h3>
                        <p class="dev-scard__desc">WordPress等のCMS構築や、<br>独自システム開発まで対応。<br>要件に合わせて最適な技術で<br>開発します。</p>
                        <span class="dev-scard__tag">対応例：WordPress / PHP / Laravel</span>
                    </div>
                    <div class="dev-scard">
                        <div class="dev-scard__ic"><img src="assets/img/dev-service3.png" alt="" /></div>
                        <h3 class="dev-scard__title">Webサイト保守・更新</h3>
                        <p class="dev-scard__desc">定期更新、バグ修正、セキュリティ<br>対応など、公開後の運用保守を<br>サポートし、安定稼働を支えます。</p>
                        <span class="dev-scard__tag">対応例：更新代行 / 障害対応</span>
                    </div>
                    <div class="dev-scard">
                        <div class="dev-scard__ic"><img src="assets/img/dev-service4.png" alt="" /></div>
                        <h3 class="dev-scard__title">データ比較・システム開発</h3>
                        <p class="dev-scard__desc">新旧データの比較プログラムや<br>業務システムの開発、レポート<br>自動化など、業務効率化を支援<br>します。</p>
                        <span class="dev-scard__tag">対応例：データ比較 / 業務システム</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- DEVELOPMENT TEAM -->
        <section class="dev-sec dev-sec--tint dev-sec-team">
            <div class="dev__inner">
                <div class="dev-team__grid">
                    <div class="dev-team__text">
                        <h2 class="dev-team__jp">ミャンマー開発チーム</h2>
                        <p class="dev-team__en">Development Team in Myanmar</p>
                        <p class="dev-team__desc">A CAN SOLUTIONSでは、ミャンマーの若いIT人材を自社で育成。<br>単なる外注先ではなく、日本側と日常的に連携しながら、Webサイト制作・システム開発・保守を担うチームとして成長しています。</p>

                        <div class="dev-team__points" style="margin-top:2.2rem;">
                            <div class="dev-tp">
                                <div class="dev-tp__ic" aria-hidden="true">
                                    <img src="./assets/img/dev-team1.1.png" alt="">
                                </div>
                                <p class="dev-tp__t">若手人材の育成</p>
                                <p class="dev-tp__d">継続的な教育とOJT<br>でスキルを向上</p>
                            </div>
                            <div class="dev-tp">
                                <div class="dev-tp__ic" aria-hidden="true">
                                    <img src="./assets/img/dev-team1.2.png" alt="">
                                </div>
                                <p class="dev-tp__t">日本側との連携</p>
                                <p class="dev-tp__d">日々のコミュニケーション<br>で品質と納期を徹底管理</p>
                            </div>
                            <div class="dev-tp">
                                <div class="dev-tp__ic" aria-hidden="true">
                                    <img src="./assets/img/dev-team1.3.png" alt="">
                                </div>
                                <p class="dev-tp__t">継続的な技術教育</p>
                                <p class="dev-tp__d">最新技術の学習機会を提<br>供し、高い技術力を保持</p>
                            </div>
                        </div>

                    </div>
                    <div class="dev-team__media"><img src="./assets/img/dev-team.png" alt=""></div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <section class="dev-sec">
            <div class="dev__inner">
                <div class="dev-sec__head">
                    <h2 class="dev-sec__title skip-underline">制作実績例</h2>
                    <p class="dev-work__note">＊守秘義務のため、加工して掲載しています。</p>
                </div>
                <div class="dev-work">
                    <div class="dev-wcard">
                        <div class="dev-wcard__media">
                            <img src="./assets/img/dev-team2.1.png" alt="制作実績 1">
                        </div>
                        <div class="dev-wcard__body">
                            <p class="dev-wcard__row">業種：介護・福祉</p>
                            <p class="dev-wcard__row">対応内容：デザイン／WordPress構築／レスポンシブ対応<br>／運用保守</p>
                            <p class="dev-wcard__row">制作期間：約1ヶ月</p>
                        </div>
                    </div>
                    <div class="dev-wcard">
                        <div class="dev-wcard__media">
                            <img src="./assets/img/dev-team2.2.png" alt="制作実績 2">
                        </div>
                        <div class="dev-wcard__body">
                            <p class="dev-wcard__row">業種：教育機関</p>
                            <p class="dev-wcard__row">対応内容：企画／デザイン／レスポンシブ対応</p>
                            <p class="dev-wcard__row">制作期間：約2ヶ月</p>
                        </div>
                    </div>
                    <div class="dev-wcard">
                        <div class="dev-wcard__media">
                            <img src="./assets/img/dev-team2.3.png" alt="制作実績 3">
                        </div>
                        <div class="dev-wcard__body">
                            <p class="dev-wcard__row">業種：玩具メーカー</p>
                            <p class="dev-wcard__row">対応内容：デザイン／WordPress構築／レスポンシブ対応</p>
                            <p class="dev-wcard__row">制作期間：約2ヶ月</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- /dev -->
    <!-- ========================================================== -->
    <!-- SERVICES OVERVIEW                                            -->
    <!-- ========================================================== -->
   

    <!-- ========================================================== -->
    <!-- DESIGN SECTION (Graphic & Motion)                              -->
    <!-- ========================================================== -->
    <style>
      /* ── Scoped exclusively to .dev--design to prevent affecting any other part ── */
      /* ── HERO BANNER ── */
      .dev--design .dev-hero {
        width: 85%;
        margin: 0 auto;
        background-color: #ffffff;
        background-image: url("assets/img/design-team/hero-desk.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: right center;
        position: relative;
        box-sizing: border-box;
      }
      .dev--design .dev-hero .dev__inner {
        width: 100%;
        max-width: none;
        margin: 0;
        padding-top: 0.9rem;
        padding-bottom: 2.2rem;
        display: flex;
        flex-direction: column;
        min-height: 480px;
        box-sizing: border-box;
      }
      .dev--design .dev-bc {
        font-size: 0.75rem;
        color: var(--dev-ink);
        padding: 0 0 1rem;
        font-family: "Noto Sans JP", sans-serif;
        margin: 0;
      }
      .dev--design .dev-hero__content {
        max-width: 500px;
        padding: 0;
        margin: 0;
      }
      .dev--design .dev-hero__eyebrow {
        font-family: "Noto Sans JP", sans-serif;
        font-size: 1.25rem;
        font-weight: 800;
        letter-spacing: 0.03em;
        color: #0563c0 !important;
        margin: 0 0 0.15rem;
        line-height: 1.2;
      }
      .dev--design .dev-hero__title {
        margin: 0 0 0.35rem;
        font-size: clamp(2.3rem, 4.2vw, 3.2rem);
        font-weight: 900;
        line-height: 1.12;
        letter-spacing: -0.01em;
        color: #111111 !important; /* Solid Black matching demo */
      }
      .dev--design .dev-hero__subtitle {
        font-family: "Anonymous Pro", monospace;
        font-size: clamp(1.2rem, 2.2vw, 1.5rem);
        font-weight: 700;
        color: #0563c0 !important;
        margin: 0 0 1.1rem;
        letter-spacing: 0.02em;
        line-height: 1.2;
      }
      .dev--design .dev-hero__lead {
        margin: 0 0 0.85rem;
        font-size: clamp(1.02rem, 1.8vw, 1.28rem);
        font-weight: 800;
        line-height: 1.48;
        color: #0563c0 !important;
      }
      .dev--design .dev-hero__desc {
        margin: 0 0 1.5rem;
        font-size: 0.85rem;
        line-height: 1.8;
        color: #262626;
        font-weight: 500;
        max-width: 485px;
      }
      .dev--design .dev-hcards {
        display: grid !important;
        grid-template-columns: 1fr 1fr 1fr !important;
        background: #ffffff !important;
        border: 1.5px solid #d0d7de !important;
        border-radius: 14px !important;
        padding: 0.85rem 1rem !important;
        max-width: 480px !important;
        box-shadow: 0 4px 18px rgba(0, 74, 173, 0.06) !important;
        margin-top: auto !important;
        box-sizing: border-box !important;
        gap: 0 !important;
        align-self: flex-start !important;
        width: auto !important;
      }
      .dev--design .dev-hcard {
        padding: 0 0.75rem !important;
        box-sizing: border-box !important;
        text-align: left !important;
        position: relative !important;
      }
      .dev--design .dev-hcard::before {
        display: none !important;
      }
      .dev--design .dev-hcard:first-child {
        padding-left: 0 !important;
      }
      .dev--design .dev-hcard:not(:last-child) {
        border-right: 1px solid #e5e7eb !important;
        border-bottom: none !important;
      }
      .dev--design .dev-hcard:last-child {
        padding-right: 0 !important;
      }
      .dev--design .dev-hcard__head {
        display: flex !important;
        align-items: center !important;
        gap: 0.4rem !important;
        margin-bottom: 0.3rem !important;
        text-align: left !important;
      }
      .dev--design .dev-hcard__ic {
        width: 24px !important;
        height: 24px !important;
        color: #0563c0 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0 !important;
        margin: 0 !important;
      }
      .dev--design .dev-hcard__ic svg {
        width: 22px !important;
        height: 22px !important;
      }
      .dev--design .dev-hcard__title {
        font-size: 0.84rem !important;
        font-weight: 800 !important;
        color: #111827 !important;
        margin: 0 !important;
        white-space: nowrap !important;
        line-height: 1.3 !important;
        text-align: left !important;
      }
      .dev--design .dev-hcard__desc {
        font-size: 0.71rem !important;
        line-height: 1.5 !important;
        color: #4b5563 !important;
        margin: 0 !important;
        font-weight: 500 !important;
        text-align: left !important;
      }
      @media (max-width: 900px) {
        .dev--design .dev-hero {
          background-position: 80% center;
        }
        .dev--design .dev-hero__content {
          background: rgba(255, 255, 255, 0.92);
          border-radius: 12px;
          padding: 1.2rem;
        }
        .dev--design .dev-hcards {
          grid-template-columns: 1fr;
          gap: 0.8rem;
          max-width: 100%;
        }
        .dev--design .dev-hcard {
          padding: 0 0 0.8rem;
          border-right: none !important;
          border-bottom: 1px solid #e5e7eb;
        }
        .dev--design .dev-hcard:last-child {
          border-bottom: none;
          padding-bottom: 0;
        }
      }
      /* METRICS ROW (制作体制と運用力) */
      .dev--design .dev-sec-metrics {
        background: #ffffff;
        padding-top: 4.5rem;
        padding-bottom: 4.5rem;
      }
      .dev--design .dev-sec-metrics .dev-sec__head {
        margin-bottom: 3.2rem;
        text-align: center;
      }
      .dev--design .dev-sec-metrics .dev-sec__title {
        color: #0563c0;
        font-size: clamp(1.4rem, 2.2vw, 1.75rem);
        font-weight: 700;
        display: inline-block;
        position: relative;
        padding-bottom: 0.85rem;
        margin: 0 auto;
      }
      .dev--design .dev-sec-metrics .dev-sec__title::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 320px;
        max-width: 85vw;
        height: 3px;
        background-color: #b5b5b5;
        border-radius: 2px;
      }
      .dev--design .dev-metrics-row {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 1.2rem 0.6rem;
        text-align: center;
        align-items: flex-start;
      }
      .dev--design .dev-metric-col {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .dev--design .dev-metric-ic {
        width: 76px;
        height: 76px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.1rem;
      }
      .dev--design .dev-metric-ic img {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
      }
      .dev--design .dev-metric-t {
        margin: 0;
        line-height: 1.38;
        text-align: center;
      }
      .dev--design .dev-metric-val {
        color: #0563c0;
        font-size: clamp(0.95rem, 1.22vw, 1.2rem);
        font-weight: 800;
        display: block;
        white-space: nowrap;
        letter-spacing: -0.02em;
      }
      .dev--design .dev-metric-sub {
        color: #000000;
        font-size: clamp(0.92rem, 1.18vw, 1.15rem);
        font-weight: 800;
        display: block;
        white-space: nowrap;
        letter-spacing: -0.02em;
      }
      .dev--design .dev-metric-sub--top {
        font-size: clamp(0.95rem, 1.22vw, 1.2rem);
      }
      /* PORTFOLIO SECTION (制作イメージ) */
      .dev--design .dev-sec-portfolio {
        background: #ffffff;
        padding-top: 4.5rem;
        padding-bottom: 5rem;
      }
      .dev--design .dev-sec-portfolio .dev-sec__head {
        margin-bottom: 3.2rem;
        text-align: center;
      }
      .dev--design .dev-sec-portfolio .dev-sec__title {
        color: #0563c0;
        font-size: clamp(1.4rem, 2.2vw, 1.75rem);
        font-weight: 700;
        display: inline-block;
        position: relative;
        padding-bottom: 0.85rem;
        margin: 0 auto;
      }
      .dev--design .dev-sec-portfolio .dev-sec__title::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 360px;
        max-width: 85vw;
        height: 3px;
        background-color: #b5b5b5;
        border-radius: 2px;
      }
      .dev--design .dev-work {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        align-items: stretch;
      }
      .dev--design .dev-wcard {
        background: #ffffff;
        border: 1.5px solid #d0d7de;
        border-radius: 14px;
        padding: 2rem 1.6rem 2.2rem;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        text-align: left;
        box-shadow: 0 4px 16px rgba(0, 74, 173, 0.04);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }
      .dev--design .dev-wcard:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0, 74, 173, 0.08);
      }
      .dev--design .dev-wcard__title {
        font-size: 1.15rem;
        font-weight: 800;
        color: #0563c0;
        text-align: center;
        margin: 0 0 1.6rem;
        letter-spacing: 0.02em;
      }
      .dev--design .dev-wcard__media {
        width: 100%;
        height: 175px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.8rem;
        overflow: hidden;
      }
      .dev--design .dev-wcard__media img {
        max-height: 100%;
        max-width: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
      }
      .dev--design .dev-wcard__desc {
        font-size: 0.88rem;
        line-height: 1.68;
        color: #374151;
        font-weight: 600;
        margin: 0;
        text-align: left;
      }
      .dev--design .dev-scard {
        background: #fff;
        border: 1.5px solid #dbe6f5;
        border-radius: 14px;
        padding: 1.5rem 1.3rem 1.4rem;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        text-align: left;
        box-shadow: 0 4px 16px rgba(0, 74, 173, 0.04);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
      }
      .dev--design .dev-scard:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0, 74, 173, 0.08);
      }
      .dev--design .dev-scard__head {
        display: flex;
        align-items: center;
        gap: 0.65rem;
        margin-bottom: 1.1rem;
      }
      .dev--design .dev-scard__head .dev-scard__ic {
        height: 34px;
        width: auto;
        min-width: 34px;
        max-width: none;
        overflow: visible;
        border-radius: 0;
        margin: 0;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: flex-start;
      }
      .dev--design .dev-scard__head .dev-scard__ic img {
        display: block;
        height: 34px;
        width: auto;
        max-width: none;
        object-fit: contain;
      }
      .dev--design .dev-scard__head .dev-scard__title {
        margin: 0;
        font-size: 0.98rem;
        font-weight: 700;
        color: var(--dev-blue);
        text-align: left;
        white-space: nowrap;
      }
      .dev--design .dev-scard__media {
        width: 100%;
        height: 130px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.2rem;
        overflow: hidden;
      }
      .dev--design .dev-scard__media img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
      }
      .dev--design .dev-scard__list {
        list-style: none;
        padding: 0;
        margin: 0;
        font-size: 0.78rem;
        line-height: 1.75;
        color: #4b5563;
        font-weight: normal;
        text-align: left;
        flex: 1;
      }
      .dev--design .dev-scard__list li {
        margin-bottom: 0.25rem;
      }
      @media (max-width: 1024px) {
        .dev--design .dev-metrics-row {
          grid-template-columns: repeat(3, 1fr);
          gap: 2.2rem 1rem;
        }
        .dev--design .dev-metric-ic {
          width: 68px;
          height: 68px;
        }
      }
      @media (max-width: 540px) {
        .dev--design .dev-metrics-row {
          grid-template-columns: repeat(2, 1fr);
          gap: 1.8rem 0.6rem;
        }
        .dev--design .dev-metric-ic {
          width: 58px;
          height: 58px;
          margin-bottom: 0.7rem;
        }
        .dev--design .dev-metric-val,
        .dev--design .dev-metric-sub,
        .dev--design .dev-metric-sub--top {
          font-size: 0.95rem;
        }
      }
      @media (max-width: 900px) {
        .dev--design .dev-work {
          grid-template-columns: 1fr;
          max-width: 440px;
          margin: 0 auto;
        }
      }
      /* ── IMAGE/VIDEO TEAM SECTION (画像制作チーム / 動画制作チーム) ── */
      .dev--design .dev-sec-team {
        background: #f8fafe;
        padding-top: 4.5rem;
        padding-bottom: 4.5rem;
      }
      .dev--design .dev-team-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3.5rem 2.5rem;
        align-items: center;
      }
      .dev--design .dev-team-left {
        display: flex;
        flex-direction: column;
      }
      .dev--design .dev-team__title {
        font-size: clamp(1.6rem, 2.8vw, 2.2rem);
        font-weight: 800;
        color: #0563c0;
        margin: 0 0 0.35rem;
        line-height: 1.2;
      }
      .dev--design .dev-team__en {
        font-family: "Anonymous Pro", monospace;
        font-size: 0.95rem;
        font-weight: 700;
        color: #0563c0;
        margin: 0 0 1.2rem;
        letter-spacing: 0.02em;
      }
      .dev--design .dev-team__desc {
        font-size: 0.86rem;
        line-height: 1.85;
        color: #374151;
        font-weight: 500;
        margin: 0 0 2.2rem;
      }
      .dev--design .dev-team-points {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem 0.8rem;
        margin-top: 0;
      }
      .dev--design .dev-tp2 {
        text-align: center;
      }
      .dev--design .dev-tp2__ic {
        height: 52px;
        margin: 0 auto 0.65rem;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .dev--design .dev-tp2__ic img {
        max-height: 48px;
        width: auto;
        object-fit: contain;
      }
      .dev--design .dev-tp2__title {
        font-size: 0.9rem;
        font-weight: 800;
        color: #0563c0;
        margin: 0 0 0.35rem;
        white-space: nowrap;
      }
      .dev--design .dev-tp2__desc {
        font-size: 0.74rem;
        line-height: 1.6;
        color: #374151;
        margin: 0;
        font-weight: 600;
      }
      .dev--design .dev-team-right {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.9rem;
        align-items: center;
      }
      .dev--design .dev-team-right img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 74, 173, 0.08);
        display: block;
      }
      @media (max-width: 900px) {
        .dev--design .dev-team-layout {
          grid-template-columns: 1fr;
        }
        .dev--design .dev-team-right {
          grid-template-columns: 1fr 1fr;
          max-width: 600px;
          margin: 0 auto;
        }
        .dev--design .dev-team-points {
          grid-template-columns: repeat(3, 1fr);
        }
      }
      @media (max-width: 540px) {
        .dev--design .dev-team-points {
          grid-template-columns: 1fr;
        }
        .dev--design .dev-team-right {
          grid-template-columns: 1fr;
        }
      }
    </style>


    <div class="dev dev--design" id="design-team">
        <section class="dev-hero">
            <div class="dev__inner">
                <p class="dev-bc"><a href="index.php" style="color: #000;">HOME</a> <span style="color: #000;">＞</span> <a href="index.php#services" style="color: #000;">サービス</a> <span style="color: #000;">＞</span> <span style="font-weight: bolder;">Design（デザインチーム）</span></p>

                <div class="dev-hero__content">
                    <p class="dev-hero__eyebrow">Design</p>
                    <h1 class="dev-hero__title">デザインチーム</h1>
                    <p class="dev-hero__subtitle">Graphic &amp; Motion</p>
                    <p class="dev-hero__lead">アパレルに特化した高難度の画像・動画編集を、<br>24時間365日体制で。</p>
                    <p class="dev-hero__desc">
                        A CAN SOLUTIONSのデザインチームは、ミャンマー拠点の専任デザイナーと<br>
                        日本側の管理体制のもと、シースルー素材の合成や影の微調整、モデル着せ替<br>
                        え、動画制作までを高品質・短納期でご提供します。
                    </p>
                </div>

                <!-- 3 feature columns in one white panel -->
                <div class="dev-hcards">
                    <div class="dev-hcard">
                        <div class="dev-hcard__head">
                            <span class="dev-hcard__ic" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                            </span>
                            <h3 class="dev-hcard__title">高難度画像編集</h3>
                        </div>
                        <p class="dev-hcard__desc">シースルー素材や影調整など<br>高難度な編集に対応します。</p>
                    </div>
                    <div class="dev-hcard">
                        <div class="dev-hcard__head">
                            <span class="dev-hcard__ic" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </span>
                            <h3 class="dev-hcard__title">24時間365日対応</h3>
                        </div>
                        <p class="dev-hcard__desc">ミャンマー拠点で<br>24時間365日体制を実現。</p>
                    </div>
                    <div class="dev-hcard">
                        <div class="dev-hcard__head">
                            <span class="dev-hcard__ic" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                    <text x="12" y="15" text-anchor="middle" font-size="7" font-weight="bold" fill="currentColor" stroke="none">AI</text>
                                    <line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line>
                                    <line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line>
                                    <line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line>
                                    <line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line>
                                </svg>
                            </span>
                            <h3 class="dev-hcard__title">AIによる品質安定</h3>
                        </div>
                        <p class="dev-hcard__desc">編集・チェックプロセスに<br>AIを活用し品質を安定化。</p>
                    </div>
                </div>
            </div>
        </section>

     

        <!-- WHY SECTION -->
        <section class="dev-sec dev-sec--tint">
            <div class="dev__inner">
                <div class="dev-sec__head">
                    <h2 class="dev-sec__title">なぜA CAN SOLUTIONSのデザインチームなのか</h2>
                </div>
                <div class="dev-why">
                    <div class="dev-why__item">
                        <span class="dev-why__num">1</span>
                        <div class="dev-why__main">
                            <div class="dev-why__text">
                                <h3 class="dev-why__title">アパレル業界に特化</h3>
                                <p class="dev-why__desc">アパレル商品の特性を理解し、シースルー素材やアクセサリー等の質感も高い精度で編集します。</p>
                            </div>
                            <svg class="dev-why__ic" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--dev-blue);">
                                <path d="M22 10 L28 18 L36 18 L42 10 L48 16 L44 26 L40 26 L46 54 L18 54 L24 26 L20 26 L16 16 Z"/>
                                <path d="M28 18 Q32 22 36 18"/>
                                <path d="M22 26 Q32 30 42 26"/>
                            </svg>
                        </div>
                    </div>
                    <img class="dev-why__arrow" src="assets/img/dev-section-arrow.png" alt="" aria-hidden="true" />
                    <div class="dev-why__item">
                        <span class="dev-why__num">2</span>
                        <div class="dev-why__main">
                            <div class="dev-why__text">
                                <h3 class="dev-why__title">量産と短納期に対応</h3>
                                <p class="dev-why__desc">金曜データアップ、翌週月曜日納品など大量データ・短納期案件でも対応します。</p>
                            </div>
                            <svg class="dev-why__ic" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--dev-blue);">
                                <circle cx="32" cy="34" r="20"/>
                                <polyline points="32 22 32 34 42 34"/>
                                <line x1="26" y1="8" x2="38" y2="8"/>
                                <line x1="32" y1="8" x2="32" y2="14"/>
                            </svg>
                        </div>
                    </div>
                    <img class="dev-why__arrow" src="assets/img/dev-section-arrow.png" alt="" aria-hidden="true" />
                    <div class="dev-why__item">
                        <span class="dev-why__num">3</span>
                        <div class="dev-why__main">
                            <div class="dev-why__text">
                                <h3 class="dev-why__title">AIと人のチェックで品質を安定化</h3>
                                <p class="dev-why__desc">AIによる一次チェックと、人の目視チェックを組み合わせ、品質を安定化させます。</p>
                            </div>
                            <svg class="dev-why__ic" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="color:var(--dev-blue);">
                                <rect x="14" y="14" width="36" height="36" rx="6"/>
                                <rect x="22" y="22" width="20" height="20" rx="3"/>
                                <text x="32" y="36" text-anchor="middle" font-size="12" font-weight="bold" fill="currentColor" stroke="none">AI</text>
                                <line x1="22" y1="6" x2="22" y2="14"/><line x1="32" y1="6" x2="32" y2="14"/><line x1="42" y1="6" x2="42" y2="14"/>
                                <line x1="22" y1="50" x2="22" y2="58"/><line x1="32" y1="50" x2="32" y2="58"/><line x1="42" y1="50" x2="42" y2="58"/>
                                <line x1="6" y1="22" x2="14" y2="22"/><line x1="6" y1="32" x2="14" y2="32"/><line x1="6" y1="42" x2="14" y2="42"/>
                                <line x1="50" y1="22" x2="58" y2="22"/><line x1="50" y1="32" x2="58" y2="32"/><line x1="50" y1="42" x2="58" y2="42"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE CONTENT -->
        <section class="dev-sec dev-sec-service">
            <div class="dev__inner">
                <div class="dev-sec__head">
                    <h2 class="dev-sec__title">サービス内容</h2>
                </div>
                <div class="dev-serv">
                    <!-- Card 1 -->
                    <div class="dev-scard">
                        <div class="dev-scard__head">
                            <span class="dev-scard__ic">
                                <img src="assets/img/design-team/icon-card1.png" alt="" />
                            </span>
                            <h3 class="dev-scard__title">高難度画像編集</h3>
                        </div>
                        <div class="dev-scard__media">
                            <img src="assets/img/design-team/card1.png" alt="高難度画像編集" />
                        </div>
                        <ul class="dev-scard__list">
                            <li>・シースルー素材の合成</li>
                            <li>・微妙な影調整</li>
                            <li>・モデル着せ替え</li>
                            <li>・モデルの修正などの、高品質画像加工</li>
                        </ul>
                    </div>

                    <!-- Card 2 -->
                    <div class="dev-scard">
                        <div class="dev-scard__head">
                            <span class="dev-scard__ic">
                                <img src="assets/img/design-team/icon-card2.png" alt="" />
                            </span>
                            <h3 class="dev-scard__title">画像編集、レタッチ</h3>
                        </div>
                        <div class="dev-scard__media">
                            <img src="assets/img/design-team/card2.png" alt="画像編集、レタッチ" />
                        </div>
                        <ul class="dev-scard__list">
                            <li>・金曜データUP→翌月曜納品</li>
                            <li>・1,000枚以上の画像編集</li>
                            <li>・24時間、365日対応で量産体制を実現</li>
                        </ul>
                    </div>

                    <!-- Card 3 -->
                    <div class="dev-scard">
                        <div class="dev-scard__head">
                            <span class="dev-scard__ic">
                                <img src="assets/img/design-team/icon-card3.png" alt="" />
                            </span>
                            <h3 class="dev-scard__title">動画編集・短尺量産</h3>
                        </div>
                        <div class="dev-scard__media">
                            <img src="assets/img/design-team/card3.png" alt="動画編集・短尺量産" />
                        </div>
                        <ul class="dev-scard__list">
                            <li>・高級アパレルブランド向け、実績5年以上</li>
                            <li>・5分素材から15~20秒へ編集</li>
                            <li>・60本/日製作</li>
                        </ul>
                    </div>

                    <!-- Card 4 -->
                    <div class="dev-scard">
                        <div class="dev-scard__head">
                            <span class="dev-scard__ic">
                                <img src="assets/img/design-team/icon-card4.png" alt="" />
                            </span>
                            <h3 class="dev-scard__title">仕様作りから伴走</h3>
                        </div>
                        <div class="dev-scard__media">
                            <img src="assets/img/design-team/card4.png" alt="仕様作りから伴走" />
                        </div>
                        <ul class="dev-scard__list">
                            <li>・「良い感じ」に仕上げてからスタート可能</li>
                            <li>・お客様と随時仕様を整理</li>
                            <li>・継続改善で品質を向上</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 制作体制と運用力 -->
        <section class="dev-sec dev-sec-metrics">
            <div class="dev__inner">
                <div class="dev-sec__head">
                    <h2 class="dev-sec__title">制作体制と運用力</h2>
                </div>
                <div class="dev-metrics-row">
                    <div class="dev-metric-col">
                        <div class="dev-metric-ic">
                            <img src="assets/img/design-team/metric-ic1.png" alt="24時間365日 体制で対応" />
                        </div>
                        <p class="dev-metric-t">
                            <span class="dev-metric-val">24時間365日</span>
                            <span class="dev-metric-sub">体制で対応</span>
                        </p>
                    </div>
                    <div class="dev-metric-col">
                        <div class="dev-metric-ic">
                            <img src="assets/img/design-team/metric-ic2.png" alt="1,000枚以上 /週末対応" />
                        </div>
                        <p class="dev-metric-t">
                            <span class="dev-metric-val">1,000枚以上</span>
                            <span class="dev-metric-sub">/週末対応</span>
                        </p>
                    </div>
                    <div class="dev-metric-col">
                        <div class="dev-metric-ic">
                            <img src="assets/img/design-team/metric-ic3.png" alt="5年以上の 動画制作実績" />
                        </div>
                        <p class="dev-metric-t">
                            <span class="dev-metric-val">5年以上の</span>
                            <span class="dev-metric-sub">動画制作実績</span>
                        </p>
                    </div>
                    <div class="dev-metric-col">
                        <div class="dev-metric-ic">
                            <img src="assets/img/design-team/metric-ic4.png" alt="50本/日の 短尺動画制作" />
                        </div>
                        <p class="dev-metric-t">
                            <span class="dev-metric-val">50本/日の</span>
                            <span class="dev-metric-sub">短尺動画制作</span>
                        </p>
                    </div>
                    <div class="dev-metric-col">
                        <div class="dev-metric-ic">
                            <img src="assets/img/design-team/metric-ic5.png" alt="夕方入稿→ 翌朝納品対応" />
                        </div>
                        <p class="dev-metric-t">
                            <span class="dev-metric-sub dev-metric-sub--top">夕方入稿→</span>
                            <span class="dev-metric-sub">翌朝納品対応</span>
                        </p>
                    </div>
                    <div class="dev-metric-col">
                        <div class="dev-metric-ic">
                            <img src="assets/img/design-team/metric-ic6.png" alt="AI活用による 編集・チェック" />
                        </div>
                        <p class="dev-metric-t">
                            <span class="dev-metric-sub dev-metric-sub--top">AI活用による</span>
                            <span class="dev-metric-sub">編集・チェック</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO / 制作イメージ -->
        <section class="dev-sec dev-sec-portfolio">
            <div class="dev__inner">
                <div class="dev-sec__head">
                    <h2 class="dev-sec__title">制作イメージ</h2>
                </div>
                <div class="dev-work">
                    <!-- Card 1 -->
                    <div class="dev-wcard">
                        <h3 class="dev-wcard__title">アパレル画像編集・レタッチ</h3>
                        <div class="dev-wcard__media">
                            <img src="assets/img/design-team/work1.png" alt="アパレル画像編集・レタッチ">
                        </div>
                        <p class="dev-wcard__desc">シースルー素材の合成・影調整・レタッチでラグジュアリーな質感を表現。</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="dev-wcard">
                        <h3 class="dev-wcard__title">商品・モデル合成</h3>
                        <div class="dev-wcard__media">
                            <img src="assets/img/design-team/work2.png" alt="商品・モデル合成">
                        </div>
                        <p class="dev-wcard__desc">商品とモデルの自然な合成で、統一感のあるビジュアル制作</p>
                    </div>
                    <!-- Card 3 -->
                    <div class="dev-wcard">
                        <h3 class="dev-wcard__title">短尺ファッション動画</h3>
                        <div class="dev-wcard__media">
                            <img src="assets/img/design-team/work3.png" alt="短尺ファッション動画">
                        </div>
                        <p class="dev-wcard__desc">15〜20秒のショート動画を大量制作。SNS・広告・ECで高い訴求力を発揮</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- DEVELOPMENT TEAM 1: 画像制作チーム -->
        <section class="dev-sec dev-sec-team">
            <div class="dev__inner">
                <div class="dev-team-layout">
                    <!-- LEFT: Text + Icons -->
                    <div class="dev-team-left">
                        <h2 class="dev-team__title">画像制作チーム</h2>
                        <p class="dev-team__en">Image Production Team in Myanmar</p>
                        <p class="dev-team__desc">A CAN SOLUTIONSでは、ミャンマーに自社の画像制作チームを構え、アパレル向けの画像編集・レタッチ・モデル合成・商品画像加工などを担当しています。日本側と日常的に連携しながら、確かなスキルの向上、業務の規律、そして品質意識を持ち、継続的に成長し続けています。</p>

                        <div class="dev-team-points">
                            <div class="dev-tp2">
                                <div class="dev-tp2__ic">
                                    <img src="assets/img/design-team/team-ic1.png" alt="高度な画像編集" />
                                </div>
                                <p class="dev-tp2__title">高度な画像編集</p>
                                <p class="dev-tp2__desc">レタッチや合成、色調整など<br>幅広い画像制作に対応</p>
                            </div>
                            <div class="dev-tp2">
                                <div class="dev-tp2__ic">
                                    <img src="assets/img/design-team/team-ic2.png" alt="日本側との連携" />
                                </div>
                                <p class="dev-tp2__title">日本側との連携</p>
                                <p class="dev-tp2__desc">日々のコミュニケーションで<br>品質と納期を管理</p>
                            </div>
                            <div class="dev-tp2">
                                <div class="dev-tp2__ic">
                                    <img src="assets/img/design-team/team-ic3.png" alt="継続的な技術教育" />
                                </div>
                                <p class="dev-tp2__title">継続的な技術教育</p>
                                <p class="dev-tp2__desc">最新の編集手法やAI活用を<br>学び、成長を支援</p>
                            </div>
                        </div>
                    </div>
                    <!-- RIGHT: Two photos -->
                    <div class="dev-team-right">
                        <img src="assets/img/four2.png" alt="画像制作チーム 1">
                        <img src="assets/img/four3.png" alt="画像制作チーム 2">
                    </div>
                </div>
            </div>
        </section>

        <!-- DEVELOPMENT TEAM 2: 動画制作チーム -->
        <section class="dev-sec dev-sec-team">
            <div class="dev__inner">
                <div class="dev-team__grid">
                    <div class="dev-team__text">
                        <h2 class="dev-team__jp">動画制作チーム</h2>
                        <p class="dev-team__en">Video Production Team in Myanmar</p>
                        <p class="dev-team__desc">A CAN SOLUTIONSは、ミャンマーに動画制作チームを構築・運用しています。日本側のマネジメントのもと、SNS向けの短尺動画編集やコンテンツ制作のサポートを行い、スピードと品質を両立の安定的な制作体制を実現しています。日本とミャンマーの協調を活かし、継続的に価値ある映像コンテンツをお届けします。</p>

                        <div class="dev-team__points" style="margin-top:2.2rem;">
                            <div class="dev-tp">
                                <div class="dev-tp__ic" aria-hidden="true">
                                    <img src="assets/img/ii1.png" alt="">
                                </div>
                                <p class="dev-tp__d" style="font-size:0.82rem;line-height:1.6;font-weight:600;margin-top:0.3rem;">SNS・広告向けの15〜20秒動画を効率よく制作。</p>
                            </div>
                            <div class="dev-tp">
                                <div class="dev-tp__ic" aria-hidden="true">
                                    <img src="assets/img/ii2.png" alt="">
                                </div>
                                <p class="dev-tp__d" style="font-size:0.82rem;line-height:1.6;font-weight:600;margin-top:0.3rem;">企画意図や品質基準を共有し、安定した制作体制を構築。</p>
                            </div>
                            <div class="dev-tp">
                                <div class="dev-tp__ic" aria-hidden="true">
                                    <img src="assets/img/ii4.png" alt="">
                                </div>
                                <p class="dev-tp__d" style="font-size:0.82rem;line-height:1.6;font-weight:600;margin-top:0.3rem;">日々の制作を通じて、編集品質とスピードを向上。</p>
                            </div>
                        </div>

                    </div>
                    <div class="dev-team__media">
                        <img src="assets/img/fourgroup.png" alt="動画制作チーム" style="width:100%;height:100%;object-fit:cover;">
                    </div>
                </div>
            </div>
        </section>

    </div>





    <!-- ========================================================== -->
    <!-- BPOHOME.PHP SECTION (imported from bpohome.php)               -->
    <!-- BPOサービス                                                   -->
    <!-- ========================================================== -->
    <div class="bpo-page">

        <!-- ── HERO SECTION ── -->
        <section class="bpo-hero">
            <div class="bpo__inner">
                <p class="bpo-bc">
                    <a href="index.php">HOME</a> <span class="bpo-bc__sep">／</span>
                    <a href="service.php">サービス</a> <span class="bpo-bc__sep">／</span>
                    <span class="bpo-bc__current">BPOサービス</span>
                </p>

                <div class="bpo-hero__content">
                    <p class="bpo-hero__eyebrow">BPO</p>
                    <h1 class="bpo-hero__title">BPOサービス</h1>
                    <p class="bpo-hero__subtitle">Business Process Outsourcing</p>
                    <p class="bpo-hero__lead">
                        OCR+AIで処理されたデータの<br>確認・修正に特化したBPOサービス。
                    </p>
                    <p class="bpo-hero__desc">
                        高品質なデータ処理を、より早く、より柔軟に。<br>
                        日本語ブリッジと24時間365日の体制で、安心の運用を実現します。
                    </p>
                </div>

                <!-- 4 Hero Feature Items -->
                <div class="bpo-hero-cards">
                    <div class="bpo-hero-card">
                        <div class="bpo-hero-card__ic">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M24 44H11a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h17l9 9v9" />
                                <path d="M28 4v9h9" />
                                <path d="M15 18h13M15 24h10M15 30h6" />
                                <circle cx="33" cy="33" r="7.5" />
                                <path d="M38.5 38.5 45 45" stroke-width="3.4" />
                            </svg>
                        </div>
                        <p class="bpo-hero-card__title">OCR+AI</p>
                        <p class="bpo-hero-card__sub">確認・修正に特化</p>
                    </div>

                    <div class="bpo-hero-card">
                        <div class="bpo-hero-card__ic">
                            <svg viewBox="0 0 48 48" fill="currentColor" aria-hidden="true">
                                <circle cx="24" cy="13" r="6.5" />
                                <circle cx="10.5" cy="17" r="5" />
                                <circle cx="37.5" cy="17" r="5" />
                                <path d="M13 40v-4.5a11 11 0 0 1 22 0V40z" />
                                <path d="M1.5 38v-3a8 8 0 0 1 11.3-7.3A13.5 13.5 0 0 0 10 36v2z" />
                                <path d="M46.5 38v-3a8 8 0 0 0-11.3-7.3A13.5 13.5 0 0 1 38 36v2z" />
                            </svg>
                        </div>
                        <p class="bpo-hero-card__title">日本語ブリッジ</p>
                        <p class="bpo-hero-card__sub">指示を正確に展開</p>
                    </div>

                    <div class="bpo-hero-card">
                        <div class="bpo-hero-card__ic">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="24" cy="24" r="19.5" />
                                <path d="M24 12.5V24l7.5 6" />
                            </svg>
                        </div>
                        <p class="bpo-hero-card__title">24時間365日</p>
                        <p class="bpo-hero-card__sub">土日も対応可能</p>
                    </div>

                    <div class="bpo-hero-card bpo-hero-card--highlight">
                        <div class="bpo-hero-card__ic">
                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linejoin="round" aria-hidden="true">
                                <rect x="4" y="9" width="40" height="30" rx="7" />
                                <path d="M20 17.5 31.5 24 20 30.5z" fill="currentColor" stroke-width="1.5" />
                            </svg>
                        </div>
                        <p class="bpo-hero-card__title">動画で学んで</p>
                        <p class="bpo-hero-card__sub">すぐにスタート</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 1: なぜ A CAN SOLUTIONSのBPOなのか ── -->
        <section class="bpo-sec bpo-sec--why">
            <div class="bpo__inner">
                <div class="bpo-sec__head">
                    <h2 class="bpo-sec__title">なぜ A CAN SOLUTIONSのBPOなのか</h2>
                </div>

                <div class="bpo-why-grid">
                    <!-- Card 1 -->
                    <div class="bpo-why-card">
                        <span class="bpo-why-card__badge">01</span>
                        <svg class="bpo-why-card__icon" viewBox="0 0 62 54" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="4" y="4" width="54" height="36" rx="2.5" />
                            <path d="M25 13.5 L39 22 L25 30.5 Z" fill="currentColor" stroke-width="2" />
                            <path d="M31 40 v8 M20 50 h22" />
                        </svg>
                        <svg class="bpo-why-card__deco" viewBox="0 0 46 50" fill="currentColor" aria-hidden="true">
                            <circle cx="23" cy="14" r="10" />
                            <path d="M3 50 v-8 c0-9 7-15 16-15 h8 c9 0 16 6 16 15 v8 z" />
                            <path d="M23 28 l-3 4 3 12 3-12 z" fill="#ffffff" opacity="0.85" />
                        </svg>
                        <h3 class="bpo-why-card__title">マニュアル不要で開始</h3>
                        <p class="bpo-why-card__desc">動画共有で業務を理解し、スムーズに立ち上げ</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bpo-why-card">
                        <span class="bpo-why-card__badge">02</span>
                        <svg class="bpo-why-card__icon" viewBox="0 0 62 54" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M8 5 h26 a5 5 0 0 1 5 5 v14 a5 5 0 0 1 -5 5 H19 l-8 7 v-7 H8 a5 5 0 0 1 -5 -5 V10 a5 5 0 0 1 5 -5 z" />
                            <path d="M11 14 h20 M11 21 h13" />
                            <path d="M44 16 h9 a5 5 0 0 1 5 5 v14 a5 5 0 0 1 -5 5 h-2 v7 l-8 -7 H30 a5 5 0 0 1 -5 -5 v-2" />
                        </svg>
                        <svg class="bpo-why-card__deco" viewBox="0 0 46 50" fill="currentColor" aria-hidden="true">
                            <circle cx="23" cy="14" r="10" />
                            <path d="M3 50 v-8 c0-9 7-15 16-15 h8 c9 0 16 6 16 15 v8 z" />
                            <path d="M23 28 l-3 4 3 12 3-12 z" fill="#ffffff" opacity="0.85" />
                        </svg>
                        <h3 class="bpo-why-card__title">日本語堪能なブリッジ</h3>
                        <p class="bpo-why-card__desc">日本語での指示を正確に理解し現場へ展開</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bpo-why-card">
                        <span class="bpo-why-card__badge">03</span>
                        <svg class="bpo-why-card__icon" viewBox="0 0 62 54" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M13 3 h22 l10 10 v12 M45 44 v5 a2 2 0 0 1 -2 2 H13 a2 2 0 0 1 -2 -2 V5 a2 2 0 0 1 2 -2" />
                            <path d="M35 3 v10 h10" />
                            <path d="M17 19 h18 M17 27 h14 M17 35 h9" />
                            <circle cx="45" cy="37" r="10" fill="#ffffff" />
                            <path d="M40.5 37 l3.2 3.2 6 -6.4" />
                        </svg>
                        <svg class="bpo-why-card__deco" viewBox="0 0 46 50" fill="currentColor" aria-hidden="true">
                            <path d="M20 3 h6 l1.2 5.6 a16 16 0 0 1 4.6 1.9 l4.8 -3.1 4.2 4.2 -3.1 4.8 a16 16 0 0 1 1.9 4.6 L45 22 v6 l-5.6 1.2 a16 16 0 0 1 -1.9 4.6 l3.1 4.8 -4.2 4.2 -4.8 -3.1 a16 16 0 0 1 -4.6 1.9 L26 47 h-6 l-1.2 -5.6 a16 16 0 0 1 -4.6 -1.9 l-4.8 3.1 -4.2 -4.2 3.1 -4.8 a16 16 0 0 1 -1.9 -4.6 L1 28 v-6 l5.6 -1.2 a16 16 0 0 1 1.9 -4.6 L5.4 11.4 9.6 7.2 l4.8 3.1 a16 16 0 0 1 4.6 -1.9 z M23 17 a8 8 0 1 0 0 16 a8 8 0 1 0 0 -16 z" fill-rule="evenodd" />
                        </svg>
                        <h3 class="bpo-why-card__title">OCR＋AI後工程に特化</h3>
                        <p class="bpo-why-card__desc">確認・修正に集中し、入力品質を安定化</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bpo-why-card">
                        <span class="bpo-why-card__badge">04</span>
                        <svg class="bpo-why-card__icon" viewBox="0 0 62 54" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="31" cy="27" r="23" />
                            <path d="M31 13 v14 l9 7" />
                        </svg>
                        <svg class="bpo-why-card__deco" viewBox="0 0 46 50" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                            <circle cx="23" cy="25" r="20" />
                            <ellipse cx="23" cy="25" rx="8.5" ry="20" />
                            <path d="M3 25 h40 M6 15 h34 M6 35 h34" />
                        </svg>
                        <h3 class="bpo-why-card__title">24時間365日対応</h3>
                        <p class="bpo-why-card__desc">お客様の業務時間に合わせて柔軟に対応</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 2: 主な業務 ── -->
        <section class="bpo-sec bpo-sec--tasks">
            <div class="bpo__inner">
                <div class="bpo-sec__head">
                    <h2 class="bpo-sec__title bpo-sec__title--light">主な業務</h2>
                </div>

                <div class="bpo-tasks-grid">
                    <!-- Task 1 -->
                    <div class="bpo-task-card">
                        <div class="bpo-task-card__ic">
                            <svg viewBox="0 0 60 56" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 28 30 5l25 23" />
                                <path d="M11 22.5V52h38V22.5" />
                                <path d="M41 13.5V6h6.5v13.5" />
                            </svg>
                        </div>
                        <div class="bpo-task-card__content">
                            <h3 class="bpo-task-card__title">不動産データチェック</h3>
                            <span class="bpo-task-card__badge">200件/日以上対応</span>
                            <p class="bpo-task-card__desc">OCR結果確認・物件情報のチェック</p>
                        </div>
                    </div>

                    <!-- Task 2 -->
                    <div class="bpo-task-card">
                        <div class="bpo-task-card__ic">
                            <svg viewBox="0 0 60 56" fill="none" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="14" y="12" width="32" height="32" rx="6" transform="rotate(45 30 28)" stroke="currentColor" stroke-width="2.8" />
                                <path d="M19 28.5 27 36.5 43 17" stroke="#0d4a9c" stroke-width="6" />
                            </svg>
                        </div>
                        <div class="bpo-task-card__content">
                            <h3 class="bpo-task-card__title">ポイント不正チェック</h3>
                            <span class="bpo-task-card__badge">2,000件/日以上対応</span>
                            <p class="bpo-task-card__desc">不正判定補助・データチェック</p>
                        </div>
                    </div>

                    <!-- Task 3 -->
                    <div class="bpo-task-card">
                        <div class="bpo-task-card__ic">
                            <svg viewBox="0 0 60 56" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M28 5h4v6" />
                                <path d="M22 17v-6h16v6" />
                                <path d="M15 27v-10h30v10" />
                                <path d="M7 27h46l-6 13H13z" />
                                <path d="M30 17v23" />
                                <circle cx="21" cy="22" r="1" fill="currentColor" />
                                <circle cx="39" cy="22" r="1" fill="currentColor" />
                                <path d="M4 46c2.7 0 2.7-2 5.3-2s2.7 2 5.4 2 2.6-2 5.3-2 2.7 2 5.3 2 2.7-2 5.4-2 2.6 2 5.3 2 2.7-2 5.3-2 2.7 2 5.4 2 2.6-2 5.3-2" />
                                <path d="M4 52c2.7 0 2.7-2 5.3-2s2.7 2 5.4 2 2.6-2 5.3-2 2.7 2 5.3 2 2.7-2 5.4-2 2.6 2 5.3 2 2.7-2 5.3-2 2.7 2 5.4 2 2.6-2 5.3-2" />
                            </svg>
                        </div>
                        <div class="bpo-task-card__content">
                            <h3 class="bpo-task-card__title">寄港情報システム入力</h3>
                            <span class="bpo-task-card__badge">5件/日以上</span>
                            <p class="bpo-task-card__desc">船舶情報のデータ入力・登録</p>
                        </div>
                    </div>

                    <!-- Task 4 -->
                    <div class="bpo-task-card">
                        <div class="bpo-task-card__ic">
                            <svg viewBox="0 0 60 56" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="4" y="11" width="52" height="34" rx="3" />
                                <path d="M5 13 30 32 55 13" />
                                <path d="M5 43 23 27M55 43 37 27" />
                            </svg>
                        </div>
                        <div class="bpo-task-card__content">
                            <h3 class="bpo-task-card__title">メール添付ファイル入力</h3>
                            <span class="bpo-task-card__badge">5件/日以上</span>
                            <p class="bpo-task-card__desc">添付メールの内容を転記・入力</p>
                        </div>
                    </div>

                    <!-- Task 5 -->
                    <div class="bpo-task-card">
                        <div class="bpo-task-card__ic">
                            <svg viewBox="0 0 60 56" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 6h7.5l6.5 32h32l5-22H13" />
                                <path d="M17 38l-2.5 6H50" />
                                <circle cx="21" cy="49.5" r="3.2" />
                                <circle cx="44" cy="49.5" r="3.2" />
                            </svg>
                        </div>
                        <div class="bpo-task-card__content">
                            <h3 class="bpo-task-card__title">ECサイト商品登録</h3>
                            <span class="bpo-task-card__badge">100件/日</span>
                            <p class="bpo-task-card__desc">商品説明・サイズ・カテゴリ入力</p>
                        </div>
                    </div>

                    <!-- Task 6 -->
                    <div class="bpo-task-card">
                        <div class="bpo-task-card__ic">
                            <svg viewBox="0 0 60 56" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M8 16V7a2 2 0 0 1 2-2h9M41 5h9a2 2 0 0 1 2 2v9M52 40v9a2 2 0 0 1-2 2h-9M19 51h-9a2 2 0 0 1-2-2v-9" />
                                <circle cx="30" cy="20" r="7" fill="currentColor" stroke="none" />
                                <path d="M17 43v-2a13 13 0 0 1 26 0v2z" fill="currentColor" stroke="none" />
                            </svg>
                        </div>
                        <div class="bpo-task-card__content">
                            <h3 class="bpo-task-card__title">人物アノテーション</h3>
                            <span class="bpo-task-card__badge">8,000件/日以上</span>
                            <p class="bpo-task-card__desc">販売店向けの画像タグ付け</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 3: 運用フロー ── -->
        <section class="bpo-sec">
            <div class="bpo__inner">
                <div class="bpo-sec__head">
                    <h2 class="bpo-sec__title">運用フロー</h2>
                </div>

                <div class="bpo-flow-wrap">
                    <!-- Flow Step 1 -->
                    <div class="bpo-flow-card">
                        <span class="bpo-flow-card__badge">01</span>
                        <div class="bpo-flow-card__ic">
                            <img src="assets/img/bpo/flow-ic1.png" alt="" aria-hidden="true">
                        </div>
                        <h3 class="bpo-flow-card__title">動画共有で理解</h3>
                        <p class="bpo-flow-card__desc">実際の業務動画を共有し、作業内容を視覚的に理解。</p>
                    </div>

                    <div class="bpo-flow-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- Flow Step 2 -->
                    <div class="bpo-flow-card">
                        <span class="bpo-flow-card__badge">02</span>
                        <div class="bpo-flow-card__ic">
                            <img src="assets/img/bpo/flow-ic2.png" alt="" aria-hidden="true">
                        </div>
                        <h3 class="bpo-flow-card__title">日本語ブリッジが整理・指示</h3>
                        <p class="bpo-flow-card__desc">日本語での指示を整理し、現場に正確に展開。</p>
                    </div>

                    <div class="bpo-flow-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- Flow Step 3 -->
                    <div class="bpo-flow-card">
                        <span class="bpo-flow-card__badge">03</span>
                        <div class="bpo-flow-card__ic">
                            <img src="assets/img/bpo/flow-ic3.png" alt="" aria-hidden="true">
                        </div>
                        <h3 class="bpo-flow-card__title">現場オペレーション</h3>
                        <p class="bpo-flow-card__desc">経験豊富なオペレーターが作業を実施。</p>
                    </div>

                    <div class="bpo-flow-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- Flow Step 4 -->
                    <div class="bpo-flow-card">
                        <span class="bpo-flow-card__badge">04</span>
                        <div class="bpo-flow-card__ic">
                            <img src="assets/img/bpo/flow-ic4.png" alt="" aria-hidden="true">
                        </div>
                        <h3 class="bpo-flow-card__title">確認・修正して納品</h3>
                        <p class="bpo-flow-card__desc">品質チェックを行い、データを納品。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 4: BPOチーム ── -->
        <section class="bpo-sec bpo-sec-team">
            <div class="bpo__inner">
                <div class="bpo-team-grid">
                    <!-- Left: Description & Micro-features -->
                    <div class="bpo-team-left">
                        <h2 class="bpo-team__jp">BPOチーム</h2>
                        <p class="bpo-team__en">BPO Team in Myanmar</p>

                        <div class="bpo-team__desc-wrap">
                            <p class="bpo-team__desc">A CAN SOLUTIONSは、ミャンマーにBPOチームを構築・運用しています。</p>
                            <p class="bpo-team__desc">データの確認・登録・入力修正・アノテーション作業など、幅広い業務をサポートし、</p>
                            <p class="bpo-team__desc">日本のマネジメントと現地運用を組み合わせて、安定した品質と柔軟な対応を実現しています。</p>
                        </div>

                        <div class="bpo-team__features">
                            <!-- Feature 1 -->
                            <div class="bpo-team-feat">
                                <div class="bpo-team-feat__ic">
                                    <img src="assets/img/bpo/team-ic1.png" alt="確認・修正業務" />
                                </div>
                                <h3 class="bpo-team-feat__t">確認・修正業務</h3>
                                <p class="bpo-team-feat__d">OCR・AI処理後の<br>データ確認・修正に対応。</p>
                            </div>

                            <!-- Feature 2 -->
                            <div class="bpo-team-feat">
                                <div class="bpo-team-feat__ic">
                                    <img src="assets/img/bpo/team-ic2.png" alt="日本語ブリッジ" />
                                </div>
                                <h3 class="bpo-team-feat__t">日本語ブリッジ</h3>
                                <p class="bpo-team-feat__d">日本語の指示を現場へ<br>正確に展開。</p>
                            </div>

                            <!-- Feature 3 -->
                            <div class="bpo-team-feat">
                                <div class="bpo-team-feat__ic">
                                    <img src="assets/img/bpo/team-ic3.png" alt="24時間365日対応" />
                                </div>
                                <h3 class="bpo-team-feat__t">24時間365日対応</h3>
                                <p class="bpo-team-feat__d">土日・深夜も含めて<br>柔軟に対応。</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Myanmar Team Image -->
                    <div class="bpo-team-right">
                        <div class="bpo-team-media">
                            <img src="assets/img/bpo/team-photo.png" alt="ミャンマーBPOチーム" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- /bpo-page -->
    <!-- CTA Section -->
  
    <!-- ========================================================== -->
    <!-- CASE: DESIGN                                                  -->
    <!-- ========================================================== -->
   

    <!-- ========================================================== -->
    <!-- CASE: KPO/BPO                                                 -->
    <!-- ========================================================== -->
   
    <!-- ========================================================== -->
    <!-- CASE: CONSULTING                                              -->
    <!-- ========================================================== -->
    <section class="case case--consulting" id="case-consulting" aria-labelledby="case-consulting-title">
      <div class="container">
        <header class="case__head">
          <h2 class="case__title reveal reveal--pop" id="case-consulting-title">Consulting services</h2>
          <p class="case__subtitle reveal reveal--pop reveal--delay-1">Support for expansion into Myanmar</p>
        </header>
        <p class="case__desc reveal reveal--slide-l">
          <strong>ミャンマーでビジネスをする為のノウハウがある弊社が戦略的パートナーとしてミャンマーでの事業化を強力に支援します。</strong><br />
          ちょっとしたアイディアでも大丈夫。<br />
          「何かミャンマーでやってみたい」を形にします。
        </p>

        <article class="case-block reveal reveal--slide-l">
          <h3 class="case-block__ja">弊社サービス導入のきっかけ</h3>
          <p class="case-block__en">Reason for introducing the service</p>
          <p class="case-block__lead">・ミャンマー（東南アジア）事業を管理できる人材を確保し育てたい</p>
          <ul class="case-block__list">
            <li>ミャンマーでの会社設立を支援してほしい</li>
            <li>委託先のミャンマー事業撤退で、リソースの確保に困っている</li>
            <li>ミャンマー人材を日本国内の事業に導入したい</li>
          </ul>
        </article>

        <article class="case-block reveal reveal--slide-r">
          <h3 class="case-block__ja">実績</h3>
          <p class="case-block__en">Achievements</p>
          <ul class="case-block__list case-block__list--indent">
            <li>ミャンマー人材（IT）紹介とビザ取得</li>
            <li>外国人財の導入に向けた、適正な送り出し機関の紹介とアテンド</li>
            <li>電子部品加工工場向け、作業者のリクルーティング</li>
            <li>商店立ち上げ（洋服販売業）</li>
          </ul>
        </article>
      </div>
    </section>


    <!-- ========================================================== -->
    <!-- BLOG                                                          -->
    <!-- ========================================================== -->
    



    <!-- ========================================================== -->
    <!-- Myanmar situation                                                         -->
    <!-- ========================================================== -->
   

    
  </main>
  <?php include 'footer.php'; ?>
  <!-- ========================================================== -->
  <!-- BACK TO TOP                                                  -->
  <!-- ページ右端中央に常設の Up Arrow ボタン。                     -->
  <!-- Canva デザインに合わせ、青色のダブルシェブロン（背景なし）とする。 -->
  <!-- ========================================================== -->
  <a class="back-to-top" href="#top" aria-label="ページの先頭へ戻る">
    <svg class="back-to-top__icon" viewBox="0 0 32 32" aria-hidden="true" focusable="false">
      <path d="M6 19 L16 9 L26 19" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M6 27 L16 17 L26 27" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a>

  <script src="assets/js/main.js" defer></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form        = document.getElementById('contactForm');
      const email       = document.getElementById('email');
      const emailCfm    = document.getElementById('email-confirm');
      const submitBtn   = document.getElementById('submitBtn');
      const msgBox      = document.getElementById('formMessage');

      function showMsg(text, isError) {
        msgBox.textContent = text;
        msgBox.style.display = 'block';
        msgBox.style.backgroundColor = isError ? '#f8d7da' : '#d4edda';
        msgBox.style.color           = isError ? '#721c24' : '#155724';
        msgBox.style.border          = isError ? '1px solid #f5c6cb' : '1px solid #c3e6cb';
        msgBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }

      if (form) {
        form.addEventListener('submit', function (e) {
          e.preventDefault();

          // Email match validation
          if (email.value !== emailCfm.value) {
            showMsg('メールアドレスが一致しません。/ Email addresses do not match.', true);
            return;
          }

          // Disable button while sending
          submitBtn.disabled = true;
          submitBtn.querySelector('.btn-send__label').textContent = '送信中...';
          msgBox.style.display = 'none';

          const formData = new FormData(form);

          fetch('https://formsubmit.co/ajax/info@acan-sol.com', {
            method : 'POST',
            headers: { 'Accept': 'application/json' },
            body   : formData
          })
          .then(function (res) { return res.json(); })
          .then(function (data) {
            if (data.success === 'true' || data.success === true) {
              showMsg('お問い合わせありがとうございます。\nご連絡いただいた内容を確認し、担当者よりご連絡いたします。', false);
              form.reset();
            } else {
              showMsg('送信に失敗しました。時間をおいて再度お試しください。', true);
            }
          })
          .catch(function () {
            showMsg('ネットワークエラーが発生しました。インターネット接続を確認してください。', true);
          })
          .finally(function () {
            submitBtn.disabled = false;
            submitBtn.querySelector('.btn-send__label').textContent = 'Send';
          });
        });
      }
    });
  </script>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P0PTLK09E6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P0PTLK09E6');
</script>
</body>
</html>
