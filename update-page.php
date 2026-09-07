<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A CAN SOLUTIONS — AI時代の業務を、日本品質で支える。ミャンマー発のAI×BPO/KPOアウトソーシング企業。" />
  <title>A CAN SOLUTIONS | AI×Human = Beyond Outsourcing</title>
  <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-P0PTLK09E6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-P0PTLK09E6');
  </script>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --navy: #1a3a8a;
      --navy-dark: #122970;
      --orange: #f59e0b;
      --blue: #2563eb;
      --blue-light: #3b82f6;
      --text: #1a1a2e;
      --text-muted: #6b7280;
      --bg: #ffffff;
      --bg-soft: #f8f9fc;
      --border: #e5e7eb;
      --font-jp: "Noto Sans JP", sans-serif;
      --font-mono: "Roboto Mono", monospace;
    }

    body {
      font-family: var(--font-jp);
      color: var(--text);
      background: var(--bg);
      line-height: 1.7;
      -webkit-font-smoothing: antialiased;
    }

    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; height: auto; display: block; }

    /* ==============================
    /* ==============================
       NAV
    ============================== */
    .nav {
      position: sticky;
      top: 0;
      z-index: 100;
      background: #fff;
      border-bottom: 1px solid var(--border);
      padding: 0 2.5rem;
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .nav__logo {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-family: "Anonymous Pro", monospace;
      font-weight: 700;
      font-size: 1.05rem;
      color: #000000;
      text-decoration: none;
    }

    .nav__logo-img {
      width: 40px;
      height: 40px;
      object-fit: contain;
      flex-shrink: 0;
    }

    .nav__links {
      display: flex;
      align-items: center;
      gap: 2.2rem;
      list-style: none;
    }

    .nav__links a {
      font-size: 0.95rem;
      color: var(--text);
      font-weight: 700;
      transition: color 0.2s;
    }

    .nav__links a:hover { color: #004AAD; }

    .nav__cta {
      background: #004AAD;
      color: #fff !important;
      padding: 0.35rem 0.35rem 0.35rem 1.4rem;
      border-radius: 50px;
      font-size: 0.95rem;
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      gap: 0.6rem;
      transition: all 0.25s ease;
      box-shadow: 0 4px 12px rgba(0, 74, 173, 0.25);
    }

    .nav__cta:hover {
      background: #003d9a !important;
      color: #fff;
      transform: translateY(-1px);
      box-shadow: 0 6px 16px rgba(0, 74, 173, 0.35);
    }

    .nav__cta-arrow {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #fff;
      color: #004AAD;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .nav__hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      background: none;
      border: none;
      padding: 4px;
    }

    .nav__hamburger span {
      display: block;
      width: 24px;
      height: 2px;
      background: var(--navy);
      border-radius: 2px;
      transition: all 0.3s;
    }

    @media (max-width: 767px) {
      .nav { padding: 0 1.25rem; height: 64px; }
      .nav__links { display: none; }
      .nav__hamburger { display: flex; }
    }

    /* ==============================
       HERO
    ============================== */
    .hero {
      position: relative;
      display: flex;
      align-items: center;
      min-height: 520px;
      background: #ffffff;
      overflow: hidden;
    }

    .hero__bg-img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      z-index: 1;
    }

    .hero__content {
      position: relative;
      z-index: 3;
      max-width: 1200px;
      width: 100%;
      margin: 0 auto;
      padding: 3.5rem 2rem;
      display: flex;
      flex-direction: column;
    }

    .hero__text-area {
      max-width: 600px;
    }

    .hero__title {
      font-family: var(--font-jp);
      font-size: clamp(2rem, 3.8vw, 2.75rem);
      font-weight: 900;
      line-height: 1.25;
      color: #0b132b;
      margin-bottom: 0.5rem;
      letter-spacing: -0.01em;
    }

    .hero__subtitle {
      font-family: var(--font-jp);
      font-size: 1.25rem;
      color: #111827;
      font-weight: 800;
      margin-bottom: 0.85rem;
      letter-spacing: 0.01em;
    }

    .hero__desc {
      font-family: var(--font-jp);
      font-size: 0.95rem;
      color: #1f2937;
      font-weight: 600;
      line-height: 1.65;
      margin-bottom: 1.5rem;
    }

    .hero__actions {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
      width: 100%;
      margin-top: 1.5rem;
    }

    .hero-btn {
      display: inline-flex;
      align-items: center;
      gap: 0.65rem;
      padding: 0.75rem 1.35rem;
      border-radius: 50px;
      font-size: 0.92rem;
      font-weight: 700;
      transition: all 0.25s ease;
      cursor: pointer;
      text-decoration: none;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
      white-space: nowrap;
    }

    .hero-btn--orange {
      background: linear-gradient(135deg, #ff9800 0%, #f57c00 100%);
      color: #ffffff;
      border: 2px solid #ff9800;
    }

    .hero-btn--orange:hover {
      background: linear-gradient(135deg, #e68a00 0%, #e66c00 100%);
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(245, 124, 0, 0.35);
      color: #ffffff;
    }

    .hero-btn--white {
      background: #ffffff;
      color: #004AAD;
      border: 2px solid #dbeafe;
    }

    .hero-btn--white:hover {
      border-color: #004AAD;
      background: #f8fafc;
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(0, 74, 173, 0.15);
      color: #004AAD;
    }

    .hero-btn__icon {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    @media (max-width: 900px) {
      .hero {
        min-height: auto;
        flex-direction: column;
      }
      .hero__bg-img {
        position: relative;
        width: 100%;
        height: 280px;
      }
      .hero__overlay {
        display: none;
      }
      .hero__content {
        padding: 2.5rem 1.25rem;
      }
      .hero__actions {
        flex-direction: column;
        align-items: stretch;
      }
      .hero-btn {
        justify-content: center;
      }
    }

    /* ==============================
       STATS
    ============================== */
    .stats {
      background: #ffffff;
      border-top: 1px solid #e5e7eb;
      /* border-bottom: 1px solid #e5e7eb; */
      padding: 2.5rem 1.5rem;
    }

    .stats__grid {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      align-items: center;
    }

    .stats__item {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1.1rem;
      padding: 0.5rem 1.25rem;
      position: relative;
    }

    .stats__item:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 10%;
      height: 100%;
      width: 1px;
      background-color: #cbd5e1;
    }

    .stats__icon {
      width: 72px;
      height: 72px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: #004AAD;
    }

    .stats__icon svg {
      width: 60px;
      height: 60px;
      stroke: #342eaa;
      fill: none;
      /* stroke-width: 1.8; */
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .stats__icon img {
      width: 74px;
      height: 74px;
      object-fit: contain;
      /* filter: invert(19%) sepia(95%) saturate(900%) hue-rotate(202deg) brightness(85%) contrast(108%); */
    }

    .stats__text-box {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .stats__value {
      font-family: var(--font-jp);
      font-size: 1.45rem;
      font-weight: 900;
      color: #004AAD;
      line-height: 1.2;
      margin-bottom: 0.2rem;
      letter-spacing: 0.02em;
    }

    .stats__label {
      font-family: var(--font-jp);
      font-size: 0.8rem;
      color: #004AAD;
      font-weight: 600;
      line-height: 1.4;
    }

    @media (max-width: 900px) {
      .stats__grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem 0;
      }
      .stats__item:nth-child(2)::after {
        display: none;
      }
    }

    @media (max-width: 600px) {
      .stats__grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }
      .stats__item::after {
        display: none !important;
      }
    }

    /* ==============================
       SECTION DECORATION
    ============================== */
    .section-head-title {
      font-size: 1.35rem;
      font-weight: 900;
      color: #111827;
      position: relative;
      padding-left: 0.85rem;
      margin-bottom: 1.75rem;
      line-height: 1.4;
    }

    .section-head-title::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 4px;
      height: 100%;
      background-color: #ad9c92;
      border-radius: 2px;
    }

    .section {
      padding: 4rem 2rem;
    }
/* 
    .section--soft {
      background: #f4f6fb;
    } */

    .section__inner {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* ==============================
       SERVICES (6 Cards Grid)
    ============================== */
    .services__grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 0.85rem;
      margin-bottom: 1.5rem;
    }

    .service-card {
      background: #ffffff;
      border: 1px solid #c9d2e0;
      border-radius: 0;
      padding: 1.4rem 0.75rem;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: all 0.25s ease;
      box-shadow: 0 1px 4px rgba(0,0,0,0.04);
    }

    .service-card:hover {
      border-color: #004AAD;
      box-shadow: 0 4px 16px rgba(0, 74, 173, 0.12);
      transform: translateY(-2px);
    }

    .service-card__icon {
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 0.75rem;
      color: #1e3a8a;
    }

    .service-card__icon svg {
      width: 46px;
      height: 46px;
      stroke: #1e3a8a;
      fill: none;
      stroke-width: 1.5;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .service-card__title {
      font-size: 0.88rem;
      font-weight: 800;
      color: #111827;
      margin-bottom: 0.5rem;
      line-height: 1.3;
    }

    .service-card__desc {
      font-size: 0.75rem;
      color: #4b5563;
      line-height: 1.45;
    }

    .services__more {
      text-align: center;
      margin-top: 1.75rem;
    }

    .btn-pill-blue {
      background: #004AAD;
      color: #ffffff !important;
      padding: 0.4rem 0.4rem 0.4rem 1.4rem;
      border-radius: 50px;
      font-size: 0.9rem;
      font-weight: 700;
      display: inline-flex;
      align-items: center;
      gap: 0.6rem;
      transition: all 0.25s ease;
      box-shadow: 0 4px 12px rgba(0, 74, 173, 0.3);
      text-decoration: none;
    }

    .btn-pill-blue:hover {
      background: #003d9a !important;
      transform: translateY(-1px);
    }

    .btn-pill-blue__arrow {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      background: #ffffff;
      color: #004AAD;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    @media (max-width: 992px) {
      .services__grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
      }
    }

    @media (max-width: 600px) {
      .services__grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* ==============================
       WHY US
    ============================== */
    .why__grid {
      display: grid;
      grid-template-columns: 0.95fr 1.05fr;
      gap: 3rem;
      align-items: center;
    }

    .why__section-title {
      padding-left: 0 !important;
      margin-bottom: 2rem !important;
    }

    .why__section-title::before {
      display: none !important;
    }

    .why__title-line1 {
      position: relative;
      padding-left: 0.85rem;
      display: block;
      line-height: 1.35;
    }

    .why__title-line1::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0.1em;
      width: 4px;
      height: 1.1em;
      background-color: #ad9c92;
      border-radius: 2px;
    }

    .why__title-line2 {
      display: block;
      padding-left: 3.45rem;
      line-height: 1.35;
      margin-top: 0.25rem;
    }

    .why__list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
      padding-left: 0.85rem;
    }

    .why__item {
      display: flex;
      gap: 0.85rem;
      align-items: flex-start;
    }

    .why__check-filled {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #004AAD;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 2px;
    }

    .why__check-filled svg {
      width: 22px;
      height: 22px;
      stroke: #ffffff;
      fill: none;
      stroke-width: 3;
    }

    .why__item-content {
      display: flex;
      flex-direction: column;
    }

    .why__item-title {
      font-family: "Anonymous Pro", monospace;
      font-size: 0.95rem;
      font-weight: 800;
      color: #111827;
      margin-bottom: 0.15rem;
    }

    .why__item-sub {
      font-family: "Anonymous Pro", monospace;
      font-size: 0.82rem;
      /* color: #4b5563; */
      color: black;
      line-height: 1.45;
    }

    .why__photo-card {
      border-radius: 0;
      overflow: hidden;
      background: #ffffff;
    }

    .why__photo-card img {
      width: 100%;
      height: 280px;
      object-fit: cover;
      object-position: center top;
      display: block;
    }

    .why__bottom-bar {
      background: #004AAD;
      color: #ffffff;
      display: grid;
      grid-template-columns: 1fr 1fr auto;
      padding: 0.9rem 1rem;
      gap: 0;
      font-size: 0.78rem;
    }

    .why__bottom-col {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 0 0.75rem;
    }

    .why__bottom-col:not(:last-child) {
      border-right: 1px solid rgba(255,255,255,0.25);
    }

    .why__bottom-col:first-child {
      padding-left: 0;
    }

    .why__bottom-col-title {
      font-family: var(--font-jp);
      font-size: 0.75rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 0.25rem;
      display: flex;
      align-items: center;
      gap: 0.3rem;
      letter-spacing: 0.01em;
    }

    .why__bottom-col-sub {
      font-family: var(--font-jp);
      font-size: 0.72rem;
      color: rgba(255, 255, 255, 0.92);
      line-height: 1.45;
    }

    .why__staff-count {
      font-family: var(--font-jp);
      font-size: 1.15rem;
      font-weight: 900;
      color: #ffffff;
      margin-top: 0.15rem;
    }

    .why__bottom-col--staff {
      flex-direction: row !important;
      align-items: center;
      gap: 0.6rem;
      padding-right: 0;
    }

    .why__bottom-col--staff .why__bottom-col-title {
      margin-bottom: 0.15rem;
    }

    @media (max-width: 900px) {
      .why__grid {
        grid-template-columns: 1fr;
        gap: 2rem;
      }
    }

    /* ==============================
       BLOG CAROUSEL
    ============================== */
    .blog__header-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 1.5rem;
    }

    .blog__more-link {
      font-size: 0.9rem;
      font-weight: 700;
      color: #004AAD;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
    }

    .blog__more-link:hover {
      text-decoration: underline;
    }

    .blog__controls {
      display: flex;
      gap: 0.5rem;
    }

    .blog__arrow {
      width: 40px;
      height: 40px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.2s;
    }

    .blog__arrow:hover {
      border-color: #004AAD;
      background: #004AAD;
      color: #fff;
    }

    .blog__arrow:hover svg { stroke: #fff; }

    .blog__arrow svg {
      width: 18px;
      height: 18px;
      stroke: #111827;
      fill: none;
      stroke-width: 2;
      stroke-linecap: round;
      stroke-linejoin: round;
      transition: stroke 0.2s;
    }

    .blog__carousel-wrapper {
      position: relative;
      padding: 0 2.5rem;
    }

    .blog__side-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 60px;
      height: 90px;
      background: transparent;
      border: none;
      cursor: pointer;
      z-index: 5;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.2s, opacity 0.2s;
    }

    .blog__side-arrow--prev { left: -1.25rem; }
    .blog__side-arrow--next { right: -1.25rem; }
    .blog__side-arrow:hover { transform: translateY(-50%) scale(1.15); }

    .blog__track-wrap {
      overflow: hidden;
    }

    .blog__track {
      display: flex;
      gap: 1.25rem;
      transition: transform 0.4s ease;
    }

    .blog-card {
      flex: 0 0 calc(25% - 0.94rem);
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 0;
      overflow: hidden;
      transition: box-shadow 0.2s, transform 0.2s;
      text-decoration: none;
    }

    .blog-card:hover {
      box-shadow: 0 6px 24px rgba(0,0,0,0.08);
      transform: translateY(-3px);
    }

    .blog-card__img {
      aspect-ratio: 16/9;
      overflow: hidden;
    }

    .blog-card__img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.4s;
    }

    .blog-card:hover .blog-card__img img {
      transform: scale(1.04);
    }

    .blog-card__body {
      padding: 0.75rem;
    }

    .blog-card__meta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.5rem;
    }

    .blog-card__cat {
      display: inline-block;
      font-size: 0.7rem;
      font-weight: 700;
      color: #374151;
      background: #f5efe6;
      border: 1px solid #e7dfd5;
      padding: 0.15rem 0.5rem;
      border-radius: 0;
    }

    .blog-card__title {
      font-size: 0.85rem;
      font-weight: 700;
      color: #111827;
      line-height: 1.45;
      margin-bottom: 0.4rem;
    }

    .blog-card__date {
      font-size: 0.72rem;
      color: #4b5563;
      font-weight: 500;
    }

    @media (max-width: 900px) {
      .blog-card {
        flex: 0 0 calc(50% - 0.65rem);
      }
    }

    @media (max-width: 600px) {
      .blog-card {
        flex: 0 0 85vw;
      }
    }

    /* ==============================
       ABOUT US & CONTACT CTA CARD
    ============================== */
    .about__grid-new {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
    }

    .about__desc-text {
          font-weight: bold;
    font-family: "Anonymous Pro", monospace;
    font-size: 0.88rem;
    color: black;
    line-height: 1.8;
    margin-bottom: 1.5rem;
    }

    .btn-outline-blue {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.65rem 1.6rem;
      border: 1.5px solid #342eaa;
      border-radius: 15px;
      color: #342eaa;
      font-weight: 700;
      font-size: 0.88rem;
      background: #ffffff;
      text-decoration: none;
      transition: all 0.2s;
    }

    .btn-outline-blue:hover {
      background: #342eaa;
      color: #ffffff;
    }

    .about__cta-banner {
      position: relative;
      border-radius: 18px;
      overflow: hidden;
      min-height: 250px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      text-align: left;
      padding: 2.5rem 2rem 1.8rem;
      color: #ffffff;
      background: url('assets/img/mandalay.jpg') center/cover no-repeat;
    }

    .about__cta-banner h3 {
      font-family: var(--font-jp);
      font-size: 1.55rem;
      font-weight: 900;
      margin-bottom: 0.75rem;
      margin-left: 30px;
      color: #ffffff;
      text-shadow: 0 2px 8px rgba(0,0,0,0.4);
    }

    .about__cta-banner p {
      font-family: "Anonymous Pro", monospace;
      font-size: 0.95rem;
      color: #ffffff;
      font-weight: 500;
      margin-bottom: 1.5rem;
      margin-left: 30px;
      line-height: 1.55;
      text-shadow: 0 2px 6px rgba(0,0,0,0.4);
    }

    @media (max-width: 767px) {
      .about__cta-banner h3 { margin-left: 0; }
      .about__cta-banner p  { margin-left: 0; }
    }

    .about__cta-banner a {
      align-self: flex-end;
      margin-top: auto;
      }

    @media (max-width: 900px) {
      .about__grid-new {
        grid-template-columns: 1fr;
        gap: 2rem;
      }
    }

    /* ==============================
       FOOTER
    ============================== */
    .footer {
    background: #004aad;
    color: #ffffff;
    padding: 3.5rem 2rem 1.5rem;
}

    .footer__grid-new {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1.8fr 1fr 1fr 1.6fr;
      gap: 2.5rem;
      margin-bottom: 2.5rem;
    }

    .footer__brand-title {
      font-family: "Anonymous Pro", monospace;
      font-size: 1rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 0.6rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .footer__brand-sub {
      font-size: 0.82rem;
      color: rgba(255, 255, 255, 0.85);
      line-height: 1.6;
    }

    .footer__col-heading {
      font-size: 0.9rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 0.85rem;
    }

    .footer__link-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .footer__link-list a {
      font-size: 0.85rem;
      color: rgba(255, 255, 255, 0.85);
      text-decoration: none;
      transition: color 0.2s;
    }

    .footer__link-list a:hover {
      color: #ff9800;
    }

    .footer__contact-info {
      font-size: 0.82rem;
      color: rgba(255, 255, 255, 0.9);
      line-height: 1.6;
      margin-bottom: 0.5rem;
    }

    .footer__social-badge-wrap {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-top: 0.75rem;
      background: #ffffff;
      padding: 0.4rem 0.85rem;
      border-radius: 6px;
      width: fit-content;
    }

    .footer__social-badge-wrap img {
      height: 20px;
      object-fit: contain;
    }

    .footer__copyright {
      max-width: 1200px;
      margin: 0 auto;
      padding-top: 1.25rem;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      text-align: center;
      font-family: "Anonymous Pro", monospace;
      font-size: 0.78rem;
      color: rgba(255, 255, 255, 0.8);
    }

    @media (max-width: 900px) {
      .footer__grid-new {
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
      }
    }

    @media (max-width: 500px) {
      .footer__grid-new {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- NAV -->
  <nav class="nav">
    <a href="index.php" class="nav__logo">
      <img src="assets/img/logo.webp" alt="A CAN SOLUTIONS" class="nav__logo-img" width="40" height="40" />
      <span>A CAN SOLUTIONS</span>
    </a>
    <ul class="nav__links">
      <li><a href="index.php#services">サービス</a></li>
      <li><a href="index.php#cases">導入事例</a></li>
      <li><a href="index.php#blog">ブログ</a></li>
      <li><a href="index.php#myanmar">ミャンマー状況</a></li>
      <li><a href="index.php#about">会社情報</a></li>
      <li>
        <a href="index.php#contact" style="
    background-color: #004aad;
" class="nav__cta">
          <span>お問い合わせ</span>
          <span class="nav__cta-arrow">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </span>
        </a>
      </li>
    </ul>
    <button class="nav__hamburger" aria-label="メニュー" onclick="this.nextElementSibling && alert('メニュー')">
      <span></span><span></span><span></span>
    </button>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <img src="assets/img/width_1536.png" alt="A CAN SOLUTIONS チーム" class="hero__bg-img" />
    <div class="hero__content">
      <div class="hero__text-area">
        <h1 class="hero__title" style="
    color: black;
">AI時代の業務を、<br />日本品質で支える</h1>
        <p class="hero__subtitle" style="
    color: black;
">AI×Human=Beyond Outsourcing</p>
        <p class="hero__desc" style="
    color: black;
">日本品質のマネジメントとミャンマーの高度人材で、<br />企業の業務変革と成長をサポートします。</p>
      </div>
      <div class="hero__actions">
        <a href="index.php#contact" class="hero-btn hero-btn--orange">
          <span class="hero-btn__icon">
            <img src="assets/img/8f82ce6e-276e-4993-b754-f8bbb242834c.png" alt="" width="45" height="36" style="display:block;" />
          </span>
          <span>お問い合わせ</span>
        </a>
        <a href="index.php#services" class="hero-btn hero-btn--white">
          <span class="hero-btn__icon">
            <img src="assets/img/5e260550-b6ab-465e-b3d1-973dc8286696.png" alt="" width="26" height="36" style="display:block;" />
          </span>
          <span style="
    color: #342eaa;
">概算見積依頼</span>
        </a>
        <a href="index.php#cases" class="hero-btn hero-btn--white">
          <span class="hero-btn__icon">
            <img src="assets/img/7f3bc30f-93a6-4cfa-be00-4399bee983dd.png" alt="" width="29" height="36" style="display:block;" />
          </span>
          <span style="
    color: #342eaa;
">資料ダウンロード</span>
        </a>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <div class="stats">
    <div class="stats__grid">
      <div class="stats__item">
        <div class="stats__icon">
          <img src="assets/img/591b712e-e026-44cc-a394-d4602f8758e8.png" alt="日本語対応スタッフ" />
          <!-- <img src="assets/img/8972bded-b06e-4662-93c8-b2e08b8ae7ed.png" alt="ミャンマー運営" /> -->
        </div>
        <div class="stats__text-box">
          <div class="stats__value" style="
    color: #342eaa;
">１０年＋</div>
          <div class="stats__label" style="
    color: #342eaa;
">ミャンマーでの<br />運営実績</div>
        </div>
      </div>
      <div class="stats__item">
        <div class="stats__icon">
         <img src="assets/img/8972bded-b06e-4662-93c8-b2e08b8ae7ed.png" alt="ミャンマー運営" />
        </div>
        <div class="stats__text-box">
          <div class="stats__value" style="
    color: #342eaa;
">３０名＋</div>
          <div class="stats__label" style="
    color: #342eaa;
">日本語対応可能<br />在籍スタッフ</div>
        </div>
      </div>
      <div class="stats__item">
        <div class="stats__icon">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"/>
            <polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <div class="stats__text-box">
          <div class="stats__value" style="
    color: #342eaa;
">365日24時間</div>
          <div class="stats__label" style="
    color: #342eaa;
">お客様のニーズに合わせた<br />柔軟な対応体制</div>
        </div>
      </div>
      <div class="stats__item">
        <div class="stats__icon">
          <svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <polyline points="9 12 11 14 15 10"/>
          </svg>
        </div>
        <div class="stats__text-box">
          <div class="stats__value" style="
    color: #342eaa;
">品質対応</div>
          <div class="stats__label" style="
    color: #342eaa;
">我々の知見をもとに<br />日本品質を提供します</div>
        </div>
      </div>
    </div>
  </div>

  <!-- SERVICES -->
  <section class="section section--soft" id="services">
    <div class="section__inner">
      <h2 class="section-head-title">私たちのサービス</h2>

      <div class="services__grid">
        <!-- AIアノテーション -->
        <div class="service-card">
          <div class="service-card__icon">
            <img src="assets/img/11.png" alt="AIアノテーション" width="48" height="48" style="object-fit:contain;" />
          </div>
          <div class="service-card__title">AIアノテーション</div>
          <div class="service-card__desc">高精度なアノテーションで<br />AIの精度向上に貢献</div>
        </div>
        <!-- AI学習データ作成 -->
        <div class="service-card">
          <div class="service-card__icon">
            <img src="assets/img/22.png" alt="AI学習データ作成" width="35" height="48" style="object-fit:contain;" />
          </div>
          <div class="service-card__title">AI学習データ作成</div>
          <div class="service-card__desc">多様なデータを整備し、<br />学習データを高品質で提供</div>
        </div>
        <!-- 画像・動画加工 -->
        <div class="service-card">
          <div class="service-card__icon">
            <img src="assets/img/33.png" alt="画像・動画加工" width="42" height="48" style="object-fit:contain;" />
          </div>
          <div class="service-card__title">画像・動画加工</div>
          <div class="service-card__desc">仕様書がなくとも<br />高品質な加工を実現</div>
        </div>
        <!-- データ入力 -->
        <div class="service-card">
          <div class="service-card__icon">
            <img src="assets/img/44.png" alt="データ入力" width="48" height="48" style="object-fit:contain;" />
          </div>
          <div class="service-card__title">データ入力</div>
          <div class="service-card__desc">正確・迅速なデータ入力で<br />業務を効率化</div>
        </div>
        <!-- KPO -->
        <div class="service-card">
          <div class="service-card__icon">
            <img src="assets/img/55.png" alt="KPO（知識業務）" width="40" height="48" style="object-fit:contain;" />
          </div>
          <div class="service-card__title">KPO（知識業務）</div>
          <div class="service-card__desc">専門知識を必要とする<br />業務をサポート</div>
        </div>
        <!-- 業務自動化 -->
        <div class="service-card">
          <div class="service-card__icon">
            <img src="assets/img/66.png" alt="業務自動化・効率化" width="48" height="48" style="object-fit:contain;" />
          </div>
          <div class="service-card__title">業務自動化・効率化</div>
          <div class="service-card__desc">RPA・スクリプト等で<br />業務プロセスを効率化</div>
        </div>
      </div>

      <div class="services__more">
        <a style="
    background: #342eaa !important;
" href="index.php#services" class="btn-pill-blue">
          <span >サービスの詳細を見る</span>
          <span class="btn-pill-blue__arrow">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </span>
        </a>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section class="section" id="whyus">
    <div class="section__inner">
      <div class="why__grid">
        <div>
          <h2 class="section-head-title why__section-title">
            <span class="why__title-line1">A CAN SOLUTIONSが</span>
            <span class="why__title-line2">選ばれる理由</span>
          </h2>
          <ul class="why__list">
            <li class="why__item">
              <div class="why__check-filled" style="background-color: #342eaa !important;">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="why__item-content">
                <span class="why__item-title">日本品質の運営体制</span>
                <span class="why__item-sub">日本人＋日本在住マネージャー＋日系企業業務経験者在籍により、品質管理と改善を行います</span>
              </div>
            </li>
            <li class="why__item">
              <div class="why__check-filled" style="
    background-color: #342eaa !important;
">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="why__item-content">
                <span class="why__item-title">日本語対応スタッフが多数</span>
                <span class="why__item-sub">日本語検定N2, N3, N4保有スタッフが多数在籍 日本語での指示が可能です</span>
              </div>
            </li>
            <li class="why__item">
              <div class="why__check-filled"style="background-color: #342eaa !important;">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="why__item-content">
                <span class="why__item-title">ミャンマー進出10年の実績</span>
                <span class="why__item-sub">現地での人材育成と安定した運営ノウハウ</span>
              </div>
            </li>
            <li class="why__item">
              <div class="why__check-filled" style="background-color: #342eaa !important;">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="why__item-content">
                <span class="why__item-title">24時間365日の対応力</span>
                <span class="why__item-sub">お客様に合わせた柔軟なサポート体制</span>
              </div>
            </li>
            <li class="why__item">
              <div class="why__check-filled" style="background-color: #342eaa !important;">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="why__item-content">
                <span class="why__item-title">情報セキュリティの徹底</span>
                <span class="why__item-sub">厳格なセキュリティ管理で安心・安全</span>
              </div>
            </li>
          </ul>
        </div>

        <div class="why__photo-card">
          <img src="assets/img/human.png" alt="A CAN SOLUTIONS チーム集合写真" />
          <div class="why__bottom-bar" style="background-color: #004aad !important;">
            <div class="why__bottom-col">
              <span class="why__bottom-col-title">日本法人</span>
              <span class="why__bottom-col-sub">
                合同会社 A CAN SOLUTIONS<br />
                <svg width="11" height="14" viewBox="0 0 12 15" fill="none" style="margin-right: 2px; vertical-align: -2px;"><path d="M6 14C6 14 11 9.8 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 9.8 6 14 6 14Z" stroke="#ffffff" stroke-width="1.6" stroke-linejoin="round"/><circle cx="6" cy="6" r="1.5" stroke="#ffffff" stroke-width="1.2"/></svg>広島県広島市
              </span>
            </div>
            <div class="why__bottom-col">
              <span class="why__bottom-col-title">ミャンマー法人</span>
              <span class="why__bottom-col-sub">
                A CAN SOLUTIONS MYANMAR Co.,Ltd.<br />
                <svg width="11" height="14" viewBox="0 0 12 15" fill="none" style="margin-right: 2px; vertical-align: -2px;"><path d="M6 14C6 14 11 9.8 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 9.8 6 14 6 14Z" stroke="#ffffff" stroke-width="1.6" stroke-linejoin="round"/><circle cx="6" cy="6" r="1.5" stroke="#ffffff" stroke-width="1.2"/></svg>Mayangone,Yangon
              </span>
            </div>
            <div class="why__bottom-col why__bottom-col--staff">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              <div style="display: flex; flex-direction: column;">
                <span class="why__bottom-col-title">スタッフ数</span>
                <span class="why__staff-count">30名＋</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG CAROUSEL -->
  <section class="section section--soft" id="blog">
    <div class="section__inner">
      <div class="blog__header-row">
        <h2 class="section-head-title" style="margin-bottom:0">最新のブログ</h2>
        <a href="index.php#blog" class="blog__more-link" style="
    color: #004aad !important;
">ブログ一覧を見る →</a>
      </div>

      <div class="blog__carousel-wrapper">
        <button class="blog__side-arrow blog__side-arrow--prev" id="blogPrev" aria-label="前へ">
          <svg viewBox="0 0 24 36" width="44" height="66" fill="none" stroke="#004AAD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 32 6 18 18 4"/>
          </svg>
        </button>

        <div class="blog__track-wrap">
          <div class="blog__track" id="blogTrack">

            <a href="ocr-dx.php" class="blog-card">
              <div class="blog-card__img">
                <img src="assets/img/uri_ifs___M_cZ7_50J4vE1HZe2Hga6MGir5nuCSSnytMB6wIVVK440.jpg" alt="AI×OCR記事" />
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <span class="blog-card__date">2026/6/15</span>
                  <span class="blog-card__cat">BPO/KPO活用ガイド</span>
                </div>
                <p class="blog-card__title">人材不足時代の経営戦略 — なぜ今、BPO/KPO活用企業が競争力を高めているのか</p>
              </div>
            </a>

            <a href="ai-agent.php" class="blog-card">
              <div class="blog-card__img">
                <img src="assets/img/uri_ifs___M_cZ7_50J4vE1HZe2Hga6MGir5nuCSSnytMB6wIVVK440.jpg" alt="AIエージェント記事" />
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <span class="blog-card__date">2026/6/15</span>
                  <span class="blog-card__cat">BPO/KPO活用ガイド</span>
                </div>
                <p class="blog-card__title">どの業務をBPO化すべきか？失敗しない業務選定のポイント</p>
              </div>
            </a>

            <a href="genai-tips.php" class="blog-card">
              <div class="blog-card__img">
                <img src="assets/img/uri_ifs___M_cZ7_50J4vE1HZe2Hga6MGir5nuCSSnytMB6wIVVK440.jpg" alt="生成AI導入記事" />
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <span class="blog-card__date">2026/6/15</span>
                  <span class="blog-card__cat">BPO/KPO活用ガイド</span>
                </div>
                <p class="blog-card__title">BPO導入で失敗する企業の共通点 成功企業との違いから学ぶ</p>
              </div>
            </a>

            <a href="post.php" class="blog-card">
              <div class="blog-card__img">
                <img src="assets/img/uri_ifs___M_cZ7_50J4vE1HZe2Hga6MGir5nuCSSnytMB6wIVVK440.jpg" alt="AI学習データ記事" />
              </div>
              <div class="blog-card__body">
                <div class="blog-card__meta">
                  <span class="blog-card__date">2026/6/15</span>
                  <span class="blog-card__cat">BPO/KPO活用ガイド</span>
                </div>
                <p class="blog-card__title">海外BPO（ミャンマー・ベトナム・フィリピン）を比較してみた</p>
              </div>
            </a>

          </div>
        </div>

        <button class="blog__side-arrow blog__side-arrow--next" id="blogNext" aria-label="次へ">
          <svg viewBox="0 0 24 36" width="44" height="66" fill="none" stroke="#004AAD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 32 18 18 6 4"/>
          </svg>
        </button>
      </div>
    </div>
  </section>

  <!-- ABOUT US & CONTACT CTA -->
  <section class="section" id="about">
    <div class="section__inner">
      <div class="about__grid-new">
        <div>
          <h2 class="section-head-title">About Us</h2>
          <p class="about__desc-text">
            2014年、ミャンマーで人材育成をスタート。<br />
            AI時代の到来とともに、AIアノテーションやKPOなど専門性の高いサービスへと事業を拡大してきました。<br />
            日本品質の運営体制と、ミャンマーの優秀な人材を組み合わせ、お客様の業務変革と成長を支えるパートナーであり続けます。
          </p>
          <a href="index.php#about" class="btn-outline-blue">
            <span>会社情報を見る</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>

        <div class="about__cta-banner">
          <h3>まずはお気軽にご相談ください</h3>
          <p>業務のお悩みやご相談を、専門スタッフが丁寧にヒアリングします。</p>
          <a href="index.php#contact" class="hero-btn hero-btn--orange" style="width: fit-content;">
            <span class="hero-btn__icon">
              <img src="assets/img/8f82ce6e-276e-4993-b754-f8bbb242834c.png" alt="" width="36" height="36" style="display:block;" />
            </span>
            <span>お問い合わせ</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer__grid-new">
      <div>
        <div class="footer__brand-title">
          <img src="assets/img/logo.webp" alt="Logo" width="32" height="32" style="background:#fff; border-radius:50%; padding:2px;" />
          <span>A CAN SOLUTIONS</span>
        </div>
        <p class="footer__brand-sub">AI×HUMAN<br />Beyond Outsourcing</p>
      </div>

      <div>
        <p class="footer__col-heading">メニュー</p>
        <ul class="footer__link-list">
          <li><a href="index.php#services">サービス一覧</a></li>
          <li><a href="index.php#cases">導入事例</a></li>
          <li><a href="index.php#blog">ブログ</a></li>
          <li><a href="index.php#myanmar">ミャンマー状況</a></li>
        </ul>
      </div>

      <div>
        <p class="footer__col-heading">会社情報</p>
        <ul class="footer__link-list">
          <li><a href="index.php#about">会社概要</a></li>
          <li><a href="privacy.php">プライバシーポリシー</a></li>
        </ul>
      </div>

      <div>
        <p class="footer__col-heading">お問い合わせ</p>
        <p class="footer__contact-info">✉ info@acan-sol.com</p>
        <p class="footer__contact-info">営業時間：平日 9:00 - 18:00</p>
        <div class="footer__social-badge-wrap">
          <a href="https://substack.com/@acankado" target="_blank" rel="noopener"><img src="assets/img/Substack_logo.png" style="
    height: 15px;
" alt="Substack" /></a>
          <a href="https://www.linkedin.com/in/mkado-acan-sol/" target="_blank" rel="noopener"><img src="assets/img/linkedin-removebg-preview.png" alt="LinkedIn" /></a>
        </div>
      </div>
    </div>

    <div class="footer__copyright">
      &copy; 2026 A CAN SOLUTIONS All Rights Reserved.
    </div>
  </footer>

  <script>
    // Blog carousel
    (function () {
      var track = document.getElementById('blogTrack');
      var prev = document.getElementById('blogPrev');
      var next = document.getElementById('blogNext');
      if (!track || !prev || !next) return;

      var current = 0;
      var cards = track.querySelectorAll('.blog-card');
      var total = cards.length;

      function getVisible() {
        if (window.innerWidth < 640) return 1;
        if (window.innerWidth < 1024) return 2;
        return 4;
      }

      function getCardWidth() {
        if (cards.length === 0) return 0;
        return cards[0].offsetWidth + 20; // gap = 1.25rem ≈ 20px
      }

      function update() {
        var max = Math.max(0, total - getVisible());
        if (current < 0) current = 0;
        if (current > max) current = max;
        track.style.transform = 'translateX(-' + (current * getCardWidth()) + 'px)';
      }

      prev.addEventListener('click', function () { current--; update(); });
      next.addEventListener('click', function () { current++; update(); });
      window.addEventListener('resize', function () { current = 0; update(); });
    })();
  </script>
</body>
</html>
