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
  position: relative;
  width: 86%;
  margin: 0 auto;
  background-image:
    linear-gradient(90deg, rgba(255, 255, 255, 0.94) 0%, rgba(255, 255, 255, 0.78) 30%, rgba(255, 255, 255, 0.2) 52%, rgba(255, 255, 255, 0) 66%),
    url("assets/img/dev-hero.png");
  background-repeat: no-repeat, no-repeat;
  background-size: cover, cover;
  background-position: center, right center;
  height: 92vh;
}

.dev-hero .dev__inner {
  width: 100%;
  max-width: none;
  margin: 0;
  padding: 0;
  position: relative;
  z-index: 2;
  min-height: 470px;
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
  .dev-sec { margin-top: 50px; }
  .dev-hcards { grid-template-columns: 1fr; gap: 1.2rem; max-width: 100%; }
  .dev-hcard + .dev-hcard::before { left: 12%; right: 12%; top: -0.6rem; bottom: auto; width: auto; height: 1px; }
}

@media (max-width: 592px) {
  .dev-sec.dev-sec--tint { margin-top: 120px; }
  .dev-sec.dev-sec-team { margin-top: 0; }
  .dev-sec.dev-sec-service { padding-top: 0; }
  .dev-tp__ic img { margin: 0 auto 0.6rem; }
  .dev-tp { text-align: center !important; }
}

@media (max-width: 400px) {
  .dev-sec.dev-sec--tint { margin-top: 200px; }
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
  border: 6px solid var(--dev-blue);
  color: var(--dev-blue);
  display: grid;
  place-items: center;
  font-family: 'Roboto Mono', monospace;
  font-size: 1.1rem;
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
  border-radius: 999px;
  padding: 0.35rem 0.8rem;
}

/* ── TEAM ── */
.dev-team__grid { display: grid; grid-template-columns: 1fr; gap: 2rem; align-items: center; }

@media (min-width: 900px) {
  .dev-team__grid { grid-template-columns: 1fr 1fr; }
}

.dev-team__en { font-family: "Anonymous Pro", monospace; font-size: 0.9rem; font-weight: 700; color: var(--dev-ink); margin: 0 0 0.2rem; }
.dev-team__jp { margin: 0 0 1rem; font-size: clamp(1.4rem, 3.5vw, 1.9rem); font-weight: 900; color: var(--dev-ink); }
.dev-team__desc { margin: 0 0 1.6rem; font-size: 0.9rem; line-height: 1.9; color: var(--dev-muted); }

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

.dev-tp { text-align: start; width: 100%; }

.dev-tp__ic img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  color: var(--dev-blue);
  display: grid;
  place-items: center;
}

.dev-tp__t { margin: 0 0 0.3rem; font-size: 0.9rem; font-weight: 700; color: var(--dev-blue); }
.dev-tp__d { margin: 0; font-size: 0.75rem; line-height: 1.7; color: var(--dev-muted); }

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
.dev-work__note { text-align: center; font-size: 0.7rem; color: var(--dev-muted); margin: 0; }

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
    linear-gradient(90deg, #ffffff 0%, #ffffff 42%, rgba(255, 255, 255, 0.92) 50%, rgba(255, 255, 255, 0) 65%),
    url("assets/img/ai-header-banner.png");
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
  top: -4px;
  left: -10px;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  border: 2.5px solid #0038a8;
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
  border: 2px solid #93c5fd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #1d4ed8;
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

.ai-step__title {
  font-size: 0.92rem;
  font-weight: 800;
  color: #0038a8;
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
    background-position: center bottom;
    background-size: cover;
    padding: 2.5rem 0 3rem;
    min-height: auto;
  }

  .ai-hero__content {
    max-width: 100%;
    background: rgba(255, 255, 255, 0.94);
    padding: 1.5rem;
    border-radius: 16px;
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
  
    <!-- ========================================================== -->
    <!-- SERVICE.PHP UI SECTION                                       -->
    <!-- ========================================================== -->
    <section class="service-php-section">
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
                    </p>
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
                                    <img src="assets/img/fff-1.png" alt="" style="width: 42px; height: 42px;" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">ヒアリング・要件定義</h3>
                            <p class="ai-step__desc">お客様の課題や目的をヒアリングし、最適なご提案を行います</p>
                        </div>

                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">2</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-2.png" alt="" style="width: 42px; height: 42px;" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">データ準備</h3>
                            <p class="ai-step__desc">必要なデータを収集、準備し作業環境を構築します。</p>
                        </div>

                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">3</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-3.png" alt="" style="width: 42px; height: 42px;" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">データ作成・評価</h3>
                            <p class="ai-step__desc">専門スタッフがデータ作成・評価を実施し、品質を管理します。</p>
                        </div>

                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">4</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-4.png" alt="" style="width: 42px; height: 42px;" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">納品・検収</h3>
                            <p class="ai-step__desc">成果物を納品し、品質をご確認いただきます。</p>
                        </div>

                        <div class="ai-step">
                            <div class="ai-step__icon-wrap">
                                <div class="ai-step__num">5</div>
                                <div class="ai-step__ic" aria-hidden="true">
                                    <img src="assets/img/fff-5.png" alt="" style="width: 42px; height: 42px;" />
                                </div>
                            </div>
                            <h3 class="ai-step__title">改善・運用サポート</h3>
                            <p class="ai-step__desc">AIの運用・改善に向けた継続的なサポートを提供します。</p>
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
    <div class="dev">

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
    <section class="services" id="services" aria-labelledby="services-title">
      <div class="container">
        <div class="services__intro">
          <header class="section-head">
            <h2 class="section-head__ja reveal reveal--pop" id="services-title">サービスについて</h2>
            <p class="section-head__en reveal reveal--pop reveal--delay-1">Dive into<br class="br-mobile" /> our services</p>
          </header>

          <p class="services__lead reveal reveal--slide-l">
            ミャンマーの若者の成長エネルギーを貴社の力に。<br />
            親日国ならではの丁寧な仕事で、データ作成から事務代行まで、国境を越えた安心のサポートをお届けします。
          </p>
          <div class="services__myanmar reveal reveal--slide-l">
            <a href="myanmar-situation.php" class="service-card__link--myanmar">
              <div class="service-card__body">
                <h3 class="service-card__title">Myanmar situation</h3>
              </div>
              <span class="service-card__more">learn more</span>
            </a>
          </div>
        </div>

        <ul class="service-list" role="list">
          <li class="service-card reveal reveal--slide-r">
            <a href="#case-tech">
              <div class="service-card__body">
                <h3 class="service-card__title">Technology</h3>
                <p class="service-card__sub">Website Design &amp; Development</p>
              </div>
              <span class="service-card__more">learn more</span>
            </a>
          </li>
          <li class="service-card reveal reveal--slide-r">
            <a href="#case-design">
              <div class="service-card__body">
                <h3 class="service-card__title">Design</h3>
                <p class="service-card__sub">Graphic &amp; Motion</p>
              </div>
              <span class="service-card__more">learn more</span>
            </a>
          </li>
          <li class="service-card reveal reveal--slide-r">
            <a href="#case-kpo">
              <div class="service-card__body">
                <h3 class="service-card__title">KPO/BPO services</h3>
                <p class="service-card__sub">JAPAN Quality</p>
              </div>
              <span class="service-card__more">learn more</span>
            </a>
          </li>
          <li class="service-card reveal reveal--slide-r">
            <a href="#case-consulting">
              <div class="service-card__body">
                <h3 class="service-card__title">Consulting services</h3>
                <p class="service-card__sub">Support for expansion into Myanmar</p>
              </div>
              <span class="service-card__more">learn more</span>
            </a>
          </li>
          <li class="service-card reveal reveal--slide-r">
            <a href="blog-page.php">
              <div class="service-card__body">
                <h3 class="service-card__title">BLOG</h3>
              </div>
              <span class="service-card__more">learn more</span>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <!-- ========================================================== -->
    <!-- CASE: TECHNOLOGY                                             -->
    <!-- ========================================================== -->
    <section class="case case--tech" id="case-tech" aria-labelledby="case-tech-title">
      <div class="container">
        <header class="case__head">
          <h2 class="case__title reveal reveal--pop" id="case-tech-title">Technology</h2>
          <p class="case__subtitle reveal reveal--pop reveal--delay-1">Website Design &amp; Development</p>
        </header>
        <p class="case__desc reveal reveal--slide-l">
          <strong>文化の違い、コミュニケーションの不安は、現地日本人と経験豊かなスタッフが解消します。</strong><br />
          日本同等の環境を準備し、セキュアな環境でリーズナブルで高品質なサービスを提供します。
        </p>

        <article class="case-block reveal reveal--slide-l">
          <h3 class="case-block__ja">弊社サービス導入のきっかけ</h3>
          <p class="case-block__en">Reason for introducing the service</p>
          <p class="case-block__lead">・若いIT人材を育てたい</p>
          <ul class="case-block__list">
            <li>人材不足解決策として東南アジア系オフショアを検討していた</li>
            <li>価格競争力に魅力があり、開発コストを下げたかった</li>
            <li>ミャンマーの現地視察ガイドを申し込み、現地スタッフに魅力を感じた</li>
          </ul>
        </article>

        <article class="case-block reveal reveal--slide-r">
          <h3 class="case-block__ja">実績</h3>
          <p class="case-block__en">Achievements</p>
          <ul class="case-block__list case-block__list--indent">
            <li>Webサイトデザイン作成</li>
            <li>Webサイト構築</li>
            <li>Webサイト保守作業</li>
            <li>新、旧データの比較プログラム構築とレポート</li>
          </ul>
        </article>
      </div>
    </section>

    <!-- ========================================================== -->
    <!-- CASE: DESIGN                                                  -->
    <!-- ========================================================== -->
    <section class="case case--design" id="case-design" aria-labelledby="case-design-title">
      <div class="container">
        <header class="case__head">
          <h2 class="case__title reveal reveal--pop" id="case-design-title">Design</h2>
          <p class="case__subtitle reveal reveal--pop reveal--delay-1">Graphic &amp; Motion</p>
        </header>
        <p class="case__desc reveal reveal--slide-l">
          <strong>長年の日本国内アパレルメーカー様とのお取引で培った技術で、きめ細やかな写真加工を実現しています。</strong><br />
          細かな仕様が無くとも業界品質で仕上げます。
        </p>

        <article class="case-block reveal reveal--slide-l">
          <h3 class="case-block__ja">弊社サービス導入のきっかけ</h3>
          <p class="case-block__en">Reason for introducing the service</p>
          <p class="case-block__lead">・若い人材と感性を共有したい</p>
          <ul class="case-block__list">
            <li>日本品質が伝わるアウトソーシング先を探していた</li>
            <li>人材不足解決策として東南アジア系オフショアを検討していた</li>
            <li>昼夜時間を問わず、画像加工を実現したい</li>
          </ul>
        </article>

        <article class="case-block reveal reveal--slide-r">
          <h3 class="case-block__ja">実績</h3>
          <p class="case-block__en">Achievements</p>
          <ul class="case-block__list case-block__list--indent">
            <li>大手アパレルメーカーECサイト用、商品画像加工</li>
            <li>AIで生成されたモデルへの、商品の着せ替え作業</li>
            <li>AIで生成されたモデルの修正</li>
          </ul>
        </article>
      </div>
    </section>

    <!-- ========================================================== -->
    <!-- CASE: KPO/BPO                                                 -->
    <!-- ========================================================== -->
    <section class="case case--kpo" id="case-kpo" aria-labelledby="case-kpo-title">
      <div class="container">
        <header class="case__head">
          <h2 class="case__title reveal reveal--pop" id="case-kpo-title">KPO/BPO services</h2>
          <p class="case__subtitle reveal reveal--pop reveal--delay-1">JAPAN Quality</p>
        </header>
        <p class="case__desc reveal reveal--slide-l">
          <strong>日本国内企業様とのお取引で培ったノウハウで専門性の高い日本語を使った業務でも大丈夫です。</strong><br />
          細かな仕様が無くとも大丈夫です。実務の中で理解を重ね、お客様のニーズを実現します。
        </p>

        <article class="case-block reveal reveal--slide-l">
          <h3 class="case-block__ja">弊社サービス導入のきっかけ</h3>
          <p class="case-block__en">Reason for introducing the service</p>
          <p class="case-block__lead">・人材を確保したい</p>
          <ul class="case-block__list">
            <li>コストバランス良く、データ入力／加工を委託したい</li>
            <li>細かい仕様書の準備なくとも、手間をかけずに委託したい</li>
            <li>日本語でコミュニケーションをしたい</li>
            <li>業務量に合わせてリソースをフレキシブルに調整したい</li>
            <li>時間問わず、業務を任せたい</li>
          </ul>
        </article>

        <article class="case-block reveal reveal--slide-r">
          <h3 class="case-block__ja">実績</h3>
          <p class="case-block__en">Achievements</p>
          <ul class="case-block__list case-block__list--indent">
            <li>不動産データー入力</li>
            <li>エネルギー企業向けポイントデータ入力</li>
            <li>海運業様向け船舶スケジュール入力</li>
            <li>ECサイト運営業者向け、商品登録作業</li>
          </ul>
        </article>
      </div>
    </section>

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
