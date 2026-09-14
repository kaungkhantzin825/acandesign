<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="アパレルに特化した高難度の画像・動画編集を、24時間365日体制で。ミャンマー拠点の専任デザイナーと日本側の管理体制で、高品質・短納期の画像レタッチ・合成・短尺動画制作をご提供します。 - A CAN SOLUTIONS" />
    <meta name="theme-color" content="#ffffff" />
    <title>デザインチーム（画像・動画編集） | A CAN SOLUTIONS</title>
    <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* ── nav overrides (copied from other pages) ── */
        .site-header__nav {
            gap: 2.75rem;
            margin-left: 8.5rem;
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
            background: #12499e;
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

        /* =========================================================
       PAGE 13 — Design / デザインチーム（Graphic & Motion）
       ========================================================= */
        .dsg {
            --dsg-ink: #004aad;
            --dsg-blue: #0a26d5;
            --dsg-blue2: #004cc7;
            --dsg-soft: #eaf1fb;
            --dsg-tint: #f5f8fd;
            --dsg-muted: #5b6472;
            --dsg-rule: #8ea0bd;
            padding-top: 60px;
            /* clear fixed header */
            color: var(--dsg-ink);
            font-family: "Noto Sans JP", sans-serif;
        }

        .dsg__inner {
            max-width: var(--container-max);
            margin: 0 auto;
            padding: 0 1.25rem;
        }

        /* ── breadcrumb ── */
        .dsg-bc {
            font-size: 0.75rem;
            color: #000;
            padding: 0.9rem 0 0.2rem;
            margin: 0;
        }

        .dsg-bc a {
            color: #000;
            text-decoration: none;
        }

        .dsg-bc a:hover {
            text-decoration: underline;
        }

        .dsg-bc span {
            font-weight: 700;
            color: var(--dsg-ink);
        }

        /* ── placeholder shown until the real artwork is dropped in ── */
        .dsg-ph {
            background: repeating-linear-gradient(45deg, rgba(18, 73, 158, 0.05) 0 12px, rgba(18, 73, 158, 0.09) 12px 24px);
        }

        /* ── HERO (full-bleed background image) ── */
        .dsg-hero {
            position: relative;
            background-color: #eef4fc;
            background-image: url("assets/img/design-hero2.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right center;
        }

        .dsg-bg-1 {
            position: relative;
            background-image: url("assets/img/design-hero3.png");
            background-repeat: no-repeat;
            background-size: 700px;
            background-position: right 350px top -75px;
        }

        .dsg-bg-2 {
            position: relative;
            background-image: url("assets/img/design-hero.png");
            background-repeat: no-repeat;
            background-size: 700px;
            background-position: right 10px;
        }

        .dsg-bg-2:after {
            content: "";
            width: 100px;
            height: 100px;

            position: absolute;
            background: url("assets/img/acan-logo-small.png") no-repeat center;
            background-size: 45px;

            right: 405px;
            bottom: -30px;
        }

        .dsg-hero .dsg__inner {
            position: relative;
            z-index: 2;
            min-height: 500px;
            padding-top: 0.4rem;
            padding-bottom: 2rem;
            display: flex;
            flex-direction: column;
        }

        .dsg-hero__content {
            max-width: 620px;
            padding: 1rem 0 1.6rem;
        }

        .dsg-hero__eyebrow {
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0.04em;
            color: var(--dsg-ink);
            margin: 0 0 0.2rem;
        }

        .dsg-hero__title {
            margin: 0 0 0.3rem;
            font-size: clamp(2.4rem, 5.2vw, 58px);
            font-weight: 900;
            line-height: 1.1;
            letter-spacing: 0.01em;
            color: #000;
        }

        .dsg-hero__en {
            margin: 0 0 1.1rem;
            font-size: clamp(1.25rem, 2.4vw, 26px);
            font-weight: 400;
            color: var(--dsg-ink);
        }

        .dsg-hero__lead {
            margin: 0 0 0.9rem;
            font-size: clamp(1.05rem, 2.2vw, 1.3rem);
            font-weight: 500;
            line-height: 1.6;
            color: var(--dsg-ink);
        }

        .dsg-hero__desc {
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.9;
            color: #001524;
            font-weight: 500;
            max-width: 36em;
        }

        /* 3 feature columns in one white panel, overlapping the bottom of the hero */
        .dsg-hcards {
            margin-top: auto;
            align-self: flex-start;
            width: 100%;
            max-width: 620px;
            background: #fff;
            border: 1px solid #cfd9e8;
            border-radius: 18px;
            box-shadow: 0 18px 42px rgba(20, 33, 58, 0.13);
            padding: 1.3rem 1rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem;
        }

        .dsg-hcard {
            padding: 0 0.9rem;
            position: relative;
        }

        .dsg-hcard+.dsg-hcard::before {
            content: "";
            position: absolute;
            left: 0;
            top: 6%;
            bottom: 6%;
            width: 1px;
            background: #c3ccdb;
        }

        .dsg-hcard__head {
            display: flex;
            align-items: center;
            gap: 0.45rem;
            margin-bottom: 0.45rem;
        }

        .dsg-hcard__ic {
            flex: 0 0 auto;
            width: 26px;
            height: 26px;
            color: var(--dsg-ink);
        }

        .dsg-hcard__ic svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .dsg-hcard__title {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 700;
            line-height: 1.35;
            color: var(--dsg-ink);
        }

        .dsg-hcard__desc {
            margin: 0;
            font-size: 0.68rem;
            line-height: 1.7;
            color: var(--dsg-muted);
            font-weight: 700;
        }

        /* ── SECTION shell ── */
        .dsg-sec {
            padding: 3.2rem 0;
        }

        .dsg-sec--tint {
            background: var(--dsg-tint);
        }

        .dsg-sec__head {
            text-align: center;
            margin-bottom: 2.2rem;
        }

        .dsg-sec__title {
            position: relative;
            display: inline-block;
            margin: 0;
            padding-bottom: 0.55rem;
            font-size: clamp(1.3rem, 3vw, 1.72rem);
            font-weight: 700;
            color: var(--dsg-blue);
        }

        .dsg-sec__title--ink {
            color: var(--dsg-ink);
        }

        .dsg-sec__title::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: calc(100% + 110px);
            max-width: 92vw;
            height: 2px;
            background: var(--dsg-rule);
        }

        /* ── WHY (3 cards with arrows) ── */
        .dsg-why {
            display: flex;
            flex-wrap: nowrap;
            align-items: stretch;
            justify-content: center;
            gap: 0.4rem;
        }

        .dsg-why__item {
            position: relative;
            flex: 1 1 0;
            min-width: 0;
            max-width: 340px;
            text-align: left;
            padding: 1.3rem 1.4rem;
            border: 2px solid var(--dsg-soft);
            border-radius: 14px;
            background: #fff;
            overflow: hidden;
        }

        .dsg-why__num {
            position: absolute;
            top: 1.3rem;
            left: 1.4rem;
            z-index: 2;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 6px solid var(--dsg-ink);
            color: var(--dsg-ink);
            display: grid;
            place-items: center;
            font-family: 'Roboto Mono', monospace;
            font-size: 1.1rem;
            font-weight: 700;
            line-height: 1;
        }

        .dsg-why__title {
            margin: 0 0 0.7rem;
            padding-left: calc(38px + 1rem);
            min-height: 38px;
            display: flex;
            align-items: center;
            font-size: 0.95rem;
            font-weight: 800;
            color: var(--dsg-ink);
        }

        .dsg-why__main {
            display: flex;
            align-items: center;
            gap: 0.9rem;
            margin-top: 18px;
        }

        .dsg-why__text {
            flex: 1 1 auto;
            min-width: 0;
        }

        .dsg-why__desc {
            margin: 0;
            font-size: 0.82rem;
            line-height: 1.85;
            color: var(--dsg-ink);
        }

        .dsg-why__ic {
            flex: 0 0 auto;
            width: 62px;
            height: 62px;
            color: var(--dsg-ink);
        }

        .dsg-why__ic svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .dsg-why__arrow {
            flex: 0 0 auto;
            width: 44px;
            height: auto;
            align-self: center;
            object-fit: contain;
        }

        @media (max-width: 1000px) {
            .dsg-why {
                flex-direction: column;
                align-items: center;
                gap: 0.6rem;
            }

            .dsg-why__item {
                flex: 0 0 auto;
                max-width: 440px;
                width: 100%;
            }

            .dsg-why__arrow {
                width: 34px;
                transform: rotate(90deg);
            }
        }

        /* ── SERVICE CONTENT (4 cards) ── */
        .dsg-serv {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.2rem;
        }

        @media (min-width: 600px) {
            .dsg-serv {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1000px) {
            .dsg-serv {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .dsg-scard {
            background: #fff;
            border: 1px solid #e6edf7;
            border-radius: 14px;
            padding: 1.2rem 1.1rem 1.4rem;
            display: flex;
            flex-direction: column;
            box-shadow: 0 8px 20px rgba(20, 33, 58, 0.05);
        }

        .dsg-scard__head {
            display: flex;
            align-items: center;
            gap: 0.55rem;
            margin-bottom: 0.9rem;
        }

        .dsg-scard__ic {
            flex: 0 0 auto;
            width: 34px;
            height: 34px;
            color: var(--dsg-ink);
        }

        .dsg-scard__ic svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .dsg-scard__title {
            margin: 0;
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--dsg-ink);
        }

        .dsg-scard__media {
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 0.9rem;
            aspect-ratio: 4 / 3;
        }

        .dsg-scard__media img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .dsg-scard__list {
            margin: 0;
            padding: 0;
            list-style: none;
            flex: 1;
        }

        .dsg-scard__list li {
            position: relative;
            padding-left: 0.85rem;
            margin-bottom: 0.4rem;
            font-size: 0.74rem;
            line-height: 1.75;
            color: var(--dsg-muted);
            font-weight: 700;
        }

        .dsg-scard__list li::before {
            content: "・";
            position: absolute;
            left: 0;
            top: 0;
        }

        /* ── CAPACITY / 制作体制と運用力 (6 stats) ── */
        .dsg-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem 1rem;
            text-align: center;
        }

        @media (min-width: 640px) {
            .dsg-stats {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (min-width: 1000px) {
            .dsg-stats {
                grid-template-columns: repeat(6, 1fr);
            }
        }

        .dsg-stat__ic {
            display: block;
            width: 62px;
            height: 62px;
            margin: 0 auto 0.7rem;
            color: var(--dsg-ink);
        }

        .dsg-stat__ic svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .dsg-stat__label {
            margin: 0;
            font-size: 0.95rem;
            font-weight: 700;
            line-height: 1.45;
            color: var(--dsg-blue);
        }

        .dsg-stat__n {
            font-size: 1.3rem;
            font-weight: 700;
        }

        /* ── 制作イメージ (3 cards) ── */
        .dsg-work {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.4rem;
        }

        @media (min-width: 760px) {
            .dsg-work {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .dsg-wcard {
            background: #fff;
            border: 1px solid #e6edf7;
            border-radius: 14px;
            padding: 1.1rem 1.1rem 1.3rem;
            box-shadow: 0 8px 20px rgba(20, 33, 58, 0.05);
            display: flex;
            flex-direction: column;
        }

        .dsg-wcard__title {
            margin: 0 0 0.9rem;
            font-size: 1rem;
            font-weight: 700;
            color: var(--dsg-ink);
        }

        .dsg-wcard__media {
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 0.9rem;
            aspect-ratio: 3 / 2;
        }

        .dsg-wcard__media img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .dsg-wcard__desc {
            margin: 0;
            font-size: 0.8rem;
            line-height: 1.85;
            color: #1f2937;
            font-weight: 500;
        }

        /* ── TEAM blocks (画像制作チーム / 動画制作チーム) ── */
        .dsg-team__grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            align-items: center;
        }

        @media (min-width: 900px) {
            .dsg-team__grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .dsg-team__jp {
            margin: 0 0 0.25rem;
            font-size: clamp(1.5rem, 3.5vw, 2.05rem);
            font-weight: 900;
            color: var(--dsg-blue2);
        }

        .dsg-team__en {
            font-family: "Anonymous Pro", monospace;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--dsg-blue2);
            margin: 0 0 1rem;
        }

        .dsg-team__desc {
            margin: 0 0 1.8rem;
            font-size: 0.85rem;
            line-height: 1.95;
            color: var(--dsg-muted);
        }

        .dsg-team__media {
            display: grid;
            gap: 1rem;
        }

        .dsg-team__media--pair {
            grid-template-columns: repeat(2, 1fr);
        }

        .dsg-team__shot {
            border-radius: 10px;
            overflow: hidden;
            aspect-ratio: 4 / 3;
            box-shadow: 0 18px 36px rgba(20, 33, 58, 0.14);
        }

        .dsg-team__shot img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .dsg-team__points {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        @media (min-width: 520px) {
            .dsg-team__points {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .dsg-tp__ic {
            display: block;
            width: 58px;
            height: 58px;
            margin-bottom: 0.6rem;
            color: var(--dsg-ink);
        }

        .dsg-tp__ic svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .dsg-tp__t {
            margin: 0 0 0.3rem;
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--dsg-ink);
        }

        .dsg-tp__d {
            margin: 0;
            font-size: 0.74rem;
            line-height: 1.7;
            color: var(--dsg-muted);
        }

        @media (max-width: 640px) {
            .dsg-hero {
                background-image:
                    linear-gradient(180deg, rgba(255, 255, 255, 0.93) 0%, rgba(255, 255, 255, 0.82) 45%, rgba(255, 255, 255, 0.64) 100%),
                    url("assets/img/design-hero.png");
                background-position: center, center right;
            }

            .dsg-hero .dsg__inner {
                min-height: 0;
            }

            .dsg-hero__content {
                max-width: 100%;
            }

            /* the hero copy carries the layout's hard line breaks; drop them
               on narrow screens so the paragraph reflows naturally */
            .dsg-hero__desc br {
                display: none;
            }

            .dsg-hcards {
                grid-template-columns: 1fr;
                gap: 1.2rem;
                max-width: 100%;
            }

            .dsg-hcard+.dsg-hcard::before {
                left: 12%;
                right: 12%;
                top: -0.6rem;
                bottom: auto;
                width: auto;
                height: 1px;
            }

            .dsg-team__media--pair {
                grid-template-columns: 1fr;
            }

            .dsg-tp {
                text-align: center;
            }

            .dsg-tp__ic {
                margin-left: auto;
                margin-right: auto;
            }
        }

        .site-footer {
            background: #fff;
            padding-block: 1.75rem;
        }
    </style>
</head>

<body>

    <?php include 'menu.php'; ?>

    <!-- ============================ PAGE 13 ============================ -->
    <div class="dsg" id="top">

        <!-- ── SVG icon sprite ── -->
        <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
            <defs>
                <g id="dsg-i-retouch" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2.5" y="4.5" width="19" height="15" rx="2" />
                    <path d="M2.5 15.5 8 10.5l4.5 4" />
                    <circle cx="15.5" cy="9" r="1.4" />
                    <path d="M17.4 15.1l1.1-2.4 1.1 2.4 2.4 1.1-2.4 1.1-1.1 2.4-1.1-2.4-2.4-1.1z" fill="currentColor" stroke="none" />
                </g>
                <g id="dsg-i-clock" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9" />
                    <path d="M12 6.8V12l3.6 2.2" />
                </g>
                <g id="dsg-i-ai" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="5.5" y="5.5" width="13" height="13" rx="2.5" />
                    <path d="M9.4 15.2l2.6-6.4 2.6 6.4M10.2 13.3h3.6" />
                    <path d="M9.5 2.5v3M14.5 2.5v3M9.5 18.5v3M14.5 18.5v3M2.5 9.5h3M2.5 14.5h3M18.5 9.5h3M18.5 14.5h3" />
                </g>
                <g id="dsg-i-dress" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 2.5l3 2.2 3-2.2 1.4 4.2L14 9l1.2 3.1c1.6 2.6 2.4 5.2 2.4 7.3 0 1.3-2.5 2.1-5.6 2.1s-5.6-.8-5.6-2.1c0-2.1.8-4.7 2.4-7.3L10 9 7.6 6.7z" />
                </g>
                <g id="dsg-i-speed" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.5 12a8.5 8.5 0 1 1-2.6-6.1" />
                    <path d="M20.9 3.4v4.2h-4.2" />
                    <path d="M12 7.4V12l3.2 2" />
                </g>
                <g id="dsg-i-award" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="9" r="6" />
                    <path d="M12 6.2l.9 1.9 2.1.3-1.5 1.5.36 2.1-1.86-1-1.86 1 .36-2.1L8 8.4l2.1-.3z" />
                    <path d="M8.6 14.2L7 21.5l5-2.4 5 2.4-1.6-7.3" />
                </g>
                <g id="dsg-i-video" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2.5" y="8" width="19" height="12" rx="2" />
                    <path d="M2.9 8L6 3.4l3.6 4.2M9.4 8L12.6 3.4 16.2 8M16 8l3.2-4.6" />
                    <path d="M10.4 11.8l4.2 2.4-4.2 2.4z" fill="currentColor" stroke="none" />
                </g>
                <g id="dsg-i-images" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="6.5" y="2.5" width="15" height="15" rx="2" />
                    <path d="M6.5 13.5l4-3.6 3.5 3.2 3-2.6 4.5 4" />
                    <circle cx="17" cy="7" r="1.3" />
                    <path d="M17.5 21.5h-13a2 2 0 0 1-2-2v-13" />
                </g>
                <g id="dsg-i-scissors" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="6" cy="18" r="2.6" />
                    <circle cx="6" cy="6" r="2.6" />
                    <path d="M20.5 3.5L8.3 16.4M20.5 20.5L8.3 7.6" />
                </g>
                <g id="dsg-i-spec" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5.5 2.5h9l5 5v14a1 1 0 0 1-1 1h-13a1 1 0 0 1-1-1v-18a1 1 0 0 1 1-1z" />
                    <path d="M14.5 2.5v5h5" />
                    <path d="M8 12.5h8M8 16h8M8 9h3.5" />
                </g>
                <g id="dsg-i-handshake" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="5.8" cy="6.4" r="2.7" />
                    <path d="M1.5 19.5c0-3 1.9-4.9 4.3-4.9s4.3 1.9 4.3 4.9" />
                    <circle cx="18.2" cy="6.4" r="2.7" />
                    <path d="M13.9 19.5c0-3 1.9-4.9 4.3-4.9s4.3 1.9 4.3 4.9" />
                    <path d="M9.4 10.6h5.2" />
                    <path d="M13.3 9.3l1.5 1.3-1.5 1.3M10.7 9.3L9.2 10.6l1.5 1.3" />
                </g>
                <g id="dsg-i-grow" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2.5 20.5h19" />
                    <path d="M5.5 20.5v-5M10.5 20.5v-9M15.5 20.5v-6M20.5 20.5v-12" />
                    <path d="M3.5 9.5l5-4 4 3 7-6" />
                    <path d="M15.5 2.5h4.5V7" />
                </g>
                <g id="dsg-i-teach" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3.5L22 8l-10 4.5L2 8z" />
                    <path d="M6 10.2v5.3c0 1.7 2.7 3 6 3s6-1.3 6-3v-5.3" />
                    <path d="M22 8v5.5" />
                </g>
            </defs>
        </svg>

        <!-- HERO -->
        <section class="dsg-hero">
            <div class="dsg-bg-1">
                <div class="dsg-bg-2">
                    <div class="dsg__inner">
                        <!-- <p class="dsg-bc">
                            <a href="index.php">HOME</a> ＞ <a href="index.php#services">サービス</a> ＞ <span>Design（デザインチーム）</span>
                        </p> -->

                        <div class="dsg-hero__content">
                            <p class="dsg-hero__eyebrow">Design</p>
                            <h1 class="dsg-hero__title">デザインチーム</h1>
                            <p class="dsg-hero__en">Graphic &amp; Motion</p>
                            <p class="dsg-hero__lead">アパレルに特化した高難度の画像・動画編集を、<br>24時間365日体制で。</p>
                            <p class="dsg-hero__desc">
                                A CAN SOLUTIONSのデザインチームは、ミャンマー拠点の専任デザイナーと<br>日本側の管理体制のもと、シースルー素材の合成や影の微調整、モデル着せ替<br>え、動画制作までを高品質・短納期でご提供します。
                            </p>
                        </div>

                        <!-- 3 feature columns in one white panel -->
                        <div class="dsg-hcards">
                            <div class="dsg-hcard">
                                <div class="dsg-hcard__head">
                                    <span class="dsg-hcard__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-retouch" /></svg></span>
                                    <h3 class="dsg-hcard__title">高難度画像編集</h3>
                                </div>
                                <p class="dsg-hcard__desc">シースルー素材や影調整など<br>高難易度な編集に対応します。</p>
                            </div>
                            <div class="dsg-hcard">
                                <div class="dsg-hcard__head">
                                    <span class="dsg-hcard__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-clock" /></svg></span>
                                    <h3 class="dsg-hcard__title">24時間365日対応</h3>
                                </div>
                                <p class="dsg-hcard__desc">ミャンマー拠点で<br>24時間365日体制を実現。</p>
                            </div>
                            <div class="dsg-hcard">
                                <div class="dsg-hcard__head">
                                    <span class="dsg-hcard__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-ai" /></svg></span>
                                    <h3 class="dsg-hcard__title">AIによる品質安定</h3>
                                </div>
                                <p class="dsg-hcard__desc">編集・チェックプロセスに<br>AIを活用し品質を安定化。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- WHY -->
        <section class="dsg-sec dsg-sec--tint">
            <div class="dsg__inner">
                <div class="dsg-sec__head">
                    <h2 class="dsg-sec__title dsg-sec__title--ink">なぜA CAN SOLUTIONSのデザインチームなのか</h2>
                </div>
                <div class="dsg-why">
                    <div class="dsg-why__item">
                        <span class="dsg-why__num">1</span>
                        <h3 class="dsg-why__title">アパレル業界に特化</h3>
                        <div class="dsg-why__main">
                            <div class="dsg-why__text">
                                <p class="dsg-why__desc">アパレル商品の特性を理解し、シースルー素材やアクセサリー等の質感も高い精度で編集します。</p>
                            </div>
                            <span class="dsg-why__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-dress" /></svg></span>
                        </div>
                    </div>
                    <img class="dsg-why__arrow" src="assets/img/dev-section-arrow.png" alt="" aria-hidden="true" />
                    <div class="dsg-why__item">
                        <span class="dsg-why__num">2</span>
                        <h3 class="dsg-why__title">量産と短納期に対応</h3>
                        <div class="dsg-why__main">
                            <div class="dsg-why__text">
                                <p class="dsg-why__desc">金曜データアップ、翌週月曜日納品など大量データ・短納期案件でも対応します。</p>
                            </div>
                            <span class="dsg-why__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-speed" /></svg></span>
                        </div>
                    </div>
                    <img class="dsg-why__arrow" src="assets/img/dev-section-arrow.png" alt="" aria-hidden="true" />
                    <div class="dsg-why__item">
                        <span class="dsg-why__num">3</span>
                        <h3 class="dsg-why__title">AIと人のチェックで品質を安定化</h3>
                        <div class="dsg-why__main">
                            <div class="dsg-why__text">
                                <p class="dsg-why__desc">AIによる一次チェックと、人の目視チェックを組み合わせ、品質を安定化させます。</p>
                            </div>
                            <span class="dsg-why__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-ai" /></svg></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICE CONTENT -->
        <section class="dsg-sec">
            <div class="dsg__inner">
                <div class="dsg-sec__head">
                    <h2 class="dsg-sec__title">サービス内容</h2>
                </div>
                <div class="dsg-serv">
                    <div class="dsg-scard">
                        <div class="dsg-scard__head">
                            <span class="dsg-scard__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-retouch" /></svg></span>
                            <h3 class="dsg-scard__title">高難度画像編集</h3>
                        </div>
                        <div class="dsg-scard__media">
                            <img src="assets/img/design-service1.jpg" alt="シースルー素材の合成やモデル着せ替えなどの高難度画像編集" />
                        </div>
                        <ul class="dsg-scard__list">
                            <li>シースルー素材の合成</li>
                            <li>微妙な影調整</li>
                            <li>モデル着せ替え</li>
                            <li>モデルの修正などの、高品質画像加工</li>
                        </ul>
                    </div>
                    <div class="dsg-scard">
                        <div class="dsg-scard__head">
                            <span class="dsg-scard__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-scissors" /></svg></span>
                            <h3 class="dsg-scard__title">画像編集、レタッチ</h3>
                        </div>
                        <div class="dsg-scard__media">
                            <img src="assets/img/design-service2.png" alt="大量の商品画像編集・レタッチ" />
                        </div>
                        <ul class="dsg-scard__list">
                            <li>金曜データUP→翌月曜納品</li>
                            <li>1,000枚以上の画像編集</li>
                            <li>24時間、365日対応で量産体制を実現</li>
                        </ul>
                    </div>
                    <div class="dsg-scard">
                        <div class="dsg-scard__head">
                            <span class="dsg-scard__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-video" /></svg></span>
                            <h3 class="dsg-scard__title">動画編集・短尺量産</h3>
                        </div>
                        <div class="dsg-scard__media">
                            <img src="assets/img/design-service3.png" alt="短尺ファッション動画の編集・量産" />
                        </div>
                        <ul class="dsg-scard__list">
                            <li>高級アパレルブランド向け、実績5年以上</li>
                            <li>5分素材から15〜20秒へ編集</li>
                            <li>60本/日制作</li>
                        </ul>
                    </div>
                    <div class="dsg-scard">
                        <div class="dsg-scard__head">
                            <span class="dsg-scard__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-spec" /></svg></span>
                            <h3 class="dsg-scard__title">仕様作りから伴走</h3>
                        </div>
                        <div class="dsg-scard__media">
                            <img src="assets/img/design-service4.png" alt="お客様と仕様を整理しながら伴走" />
                        </div>
                        <ul class="dsg-scard__list">
                            <li>「良い感じ」に仕上げてからスタート可能</li>
                            <li>お客様と随時仕様を整理</li>
                            <li>継続改善で品質を向上</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CAPACITY -->
        <section class="dsg-sec">
            <div class="dsg__inner">
                <div class="dsg-sec__head">
                    <h2 class="dsg-sec__title">制作体制と運用力</h2>
                </div>
                <div class="dsg-stats">
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-clock" /></svg></span>
                        <p class="dsg-stat__label"><span class="dsg-stat__n">24</span>時間<span class="dsg-stat__n">365</span>日<br>体制で対応</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-images" /></svg></span>
                        <p class="dsg-stat__label"><span class="dsg-stat__n">1,000</span>枚以上<br>／週末対応</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-award" /></svg></span>
                        <p class="dsg-stat__label"><span class="dsg-stat__n">5</span>年以上の<br>動画制作実績</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-video" /></svg></span>
                        <p class="dsg-stat__label"><span class="dsg-stat__n">50</span>本/日の<br>短尺動画制作</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-speed" /></svg></span>
                        <p class="dsg-stat__label">夕方入稿→<br>翌朝納品対応</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-ai" /></svg></span>
                        <p class="dsg-stat__label">AI活用による<br>編集・チェック</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- WORK IMAGES -->
        <section class="dsg-sec">
            <div class="dsg__inner">
                <div class="dsg-sec__head">
                    <h2 class="dsg-sec__title">制作イメージ</h2>
                </div>
                <div class="dsg-work">
                    <div class="dsg-wcard">
                        <h3 class="dsg-wcard__title">アパレル画像編集・レタッチ</h3>
                        <div class="dsg-wcard__media">
                            <img src="assets/img/design-work1.png" alt="アパレル画像編集・レタッチの制作イメージ" />
                        </div>
                        <p class="dsg-wcard__desc">シースルー素材の合成・影調整・レタッチでラグジュアリーな質感を表現。</p>
                    </div>
                    <div class="dsg-wcard">
                        <h3 class="dsg-wcard__title">商品・モデル合成</h3>
                        <div class="dsg-wcard__media">
                            <img src="assets/img/design-work2.png" alt="商品とモデルの合成の制作イメージ" />
                        </div>
                        <p class="dsg-wcard__desc">商品とモデルの自然な合成で、統一感のあるビジュアル制作</p>
                    </div>
                    <div class="dsg-wcard">
                        <h3 class="dsg-wcard__title">短尺ファッション動画</h3>
                        <div class="dsg-wcard__media">
                            <img src="assets/img/design-work3.png" alt="短尺ファッション動画の制作イメージ" />
                        </div>
                        <p class="dsg-wcard__desc">15〜20秒のショート動画を大量制作。SNS・広告・ECで高い訴求力を発揮</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- IMAGE PRODUCTION TEAM -->
        <section class="dsg-sec dsg-sec--tint">
            <div class="dsg__inner">
                <div class="dsg-team__grid">
                    <div class="dsg-team__text">
                        <h2 class="dsg-team__jp">画像制作チーム</h2>
                        <p class="dsg-team__en">Image Production Team in Myanmar</p>
                        <p class="dsg-team__desc">A CAN SOLUTIONSでは、ミャンマーに自社の画像制作チームを構え、アパレル向けの画像編集・レタッチ・モデル合成・商品画像加工などを担当しています。日本側と日常的に連携しながら、確かなスキルの向上、業務の規律、そして品質意識を持ち、継続的に成長し続けています。</p>

                        <div class="dsg-team__points">
                            <div class="dsg-tp">
                                <span class="dsg-tp__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-retouch" /></svg></span>
                                <p class="dsg-tp__t">高度な画像編集</p>
                                <p class="dsg-tp__d">レタッチや合成、色調整など幅広い画像制作に対応</p>
                            </div>
                            <div class="dsg-tp">
                                <span class="dsg-tp__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-handshake" /></svg></span>
                                <p class="dsg-tp__t">日本側との連携</p>
                                <p class="dsg-tp__d">日々のコミュニケーションで品質と納期を管理</p>
                            </div>
                            <div class="dsg-tp">
                                <span class="dsg-tp__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-teach" /></svg></span>
                                <p class="dsg-tp__t">継続的な技術教育</p>
                                <p class="dsg-tp__d">最新の編集手法やAI活用を学び、成長を支援</p>
                            </div>
                        </div>
                    </div>

                    <div class="dsg-team__media dsg-team__media--pair">
                        <div class="dsg-team__shot dsg-ph"><img src="assets/img/design-team-image1.png" alt="ミャンマーの画像制作チーム"></div>
                        <div class="dsg-team__shot dsg-ph"><img src="assets/img/design-team-image2.png" alt="ミャンマーの画像制作チーム"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VIDEO PRODUCTION TEAM -->
        <section class="dsg-sec">
            <div class="dsg__inner">
                <div class="dsg-team__grid">
                    <div class="dsg-team__text">
                        <h2 class="dsg-team__jp">動画制作チーム</h2>
                        <p class="dsg-team__en">Video Production Team in Myanmar</p>
                        <p class="dsg-team__desc">A CAN SOLUTIONSは、ミャンマーに動画制作チームを構築・運用しています。日本側のマネジメントのもと、SNS向けの短尺動画編集やコンテンツ制作のサポートを行い、スピードと品質を両立した安定的な制作体制を実現しています。日本とミャンマーの協働を活かし、継続的に価値ある映像コンテンツをお届けします。</p>

                        <div class="dsg-team__points">
                            <div class="dsg-tp">
                                <span class="dsg-tp__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-video" /></svg></span>
                                <p class="dsg-tp__d">SNS・広告向けの<br>15〜20秒動画を<br>効率よく制作。</p>
                            </div>
                            <div class="dsg-tp">
                                <span class="dsg-tp__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-handshake" /></svg></span>
                                <p class="dsg-tp__d">企画意図や品質基準を<br>共有し、安定した<br>制作体制を構築。</p>
                            </div>
                            <div class="dsg-tp">
                                <span class="dsg-tp__ic" aria-hidden="true"><svg viewBox="0 0 24 24"><use href="#dsg-i-grow" /></svg></span>
                                <p class="dsg-tp__d">日々の制作を通じて、<br>編集品質とスピードを<br>向上。</p>
                            </div>
                        </div>
                    </div>

                    <div class="dsg-team__media">
                        <div class="dsg-team__shot dsg-ph" style="aspect-ratio:16/10"><img src="assets/img/design-team-video1.png" alt="ミャンマーの動画制作チーム"></div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- /dsg -->

    <script>
        // Photography for this page is still being prepared: if a placeholder image
        // is missing, hide the <img> so the .dsg-ph fill shows instead of a broken icon.
        document.querySelectorAll('.dsg-ph img').forEach(function (img) {
            img.addEventListener('error', function () { img.style.display = 'none'; });
            if (img.complete && img.naturalWidth === 0) img.style.display = 'none';
        });
    </script>

    <?php include 'footer.php'; ?>

</body>

</html>
