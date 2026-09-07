<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="日本品質 × ミャンマー開発チームで、高品質なWeb・システム開発を。ミャンマーのIT人材と連携し、Webサイト制作からシステム開発・保守まで対応します。 - A CAN SOLUTIONS" />
    <meta name="theme-color" content="#ffffff" />
    <title>Webサイト・システム開発 | A CAN SOLUTIONS</title>
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

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* =========================================================
       PAGE 12 — Technology / Webサイト・システム開発
       ========================================================= */
        .dev {
            --dev-blue: #1d20b2;
            --dev-blue2: #1f4fa0;
            --dev-blue3: #0a26d5;
            --dev-blue-soft: #eaf1fb;
            --dev-ink: #004aad;
            --dev-muted: #5b6472;
            --dev-light-blue: #c1d5f9;
            padding-top: 60px;
            /* clear fixed header */
            color: var(--dev-ink);
            font-family: "Noto Sans JP", sans-serif;
        }

        .dev__inner {
            max-width: var(--container-max);
            margin: 0 auto;
            padding: 0 1.25rem;
        }

        /* ── breadcrumb ── */
        .dev-bc {
            font-size: 0.75rem;
            color: var(--dev-ink);
            padding: 0.9rem 0 0.2rem;
            font-family: "Noto Sans JP", sans-serif;
        }

        .dev-bc a {
            color: var(--dev-blue);
        }

        .dev-bc a:hover {
            text-decoration: underline;
        }

        /* ── HERO (full-bleed background image) ── */
        .dev-hero {
            position: relative;
            background-image:
                linear-gradient(90deg, rgba(255, 255, 255, 0.94) 0%, rgba(255, 255, 255, 0.78) 30%, rgba(255, 255, 255, 0.2) 52%, rgba(255, 255, 255, 0) 66%),
                url("assets/img/dev-hero.png");
            background-repeat: no-repeat, no-repeat;
            background-size: cover, cover;
            background-position: center, right center;
            height: 92vh;
        }

        .dev-hero .dev__inner {
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

        /* .dev-ph {
            background: repeating-linear-gradient(45deg, rgba(18, 73, 158, 0.05) 0 12px, rgba(18, 73, 158, 0.09) 12px 24px);
            border: 1px dashed rgba(18, 73, 158, 0.35);
            color: #7a8aa6;
            display: grid;
            place-items: center;
            text-align: center;
            font-size: 0.75rem;
            font-weight: 700;
            line-height: 1.6;
            padding: 0.6rem;
        } */

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

        .dev-hcard+.dev-hcard::before {
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

        .dev-hcard__ic svg {
            width: 42px;
            height: 42px;
        }

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

            .dev-hero .dev__inner {
                min-height: 0;
            }

            .dev-hero__content {
                max-width: 100%;
            }

            .dev-sec {
                margin-top: 50px;
            }

            .dev-hcards {
                grid-template-columns: 1fr;
                gap: 1.2rem;
                max-width: 100%;
            }

            .dev-hcard+.dev-hcard::before {
                left: 12%;
                right: 12%;
                top: -0.6rem;
                bottom: auto;
                width: auto;
                height: 1px;
            }
        }

        @media(max-width: 592px) {
            .dev-sec.dev-sec--tint {
                margin-top: 120px;
            }

            .dev-sec.dev-sec-team {
                margin-top: 0;
            }

            .dev-sec.dev-sec-service {
                padding-top: 0;
            }

            .dev-tp__ic img {
                margin: 0 auto 0.6rem;
            }

            .dev-tp {
                text-align: center !important;
            }

        }

        @media (max-width: 400px) {
            .dev-sec.dev-sec--tint {
                margin-top: 200px;
            }

            .dev-sec.dev-sec--tint.dev-sec-team {
                margin-top: 0;
            }
        }

        /* ── SECTION shell ── */
        .dev-sec {
            padding: 3.2rem 0;
        }

        .dev-sec--tint {
            background: #f5f8fd;
        }

        .dev-sec__head {
            text-align: center;
            margin-bottom: 2rem;
        }

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

        .dev-sec__title.skip-underline::after {
            display: none;
        }

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

        .dev-why__main {
            display: flex;
            align-items: center;
            gap: 0.9rem;
            margin-top: 18px;

        }

        .dev-why__text {
            flex: 1 1 auto;
            min-width: 0;
        }

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

        .dev-why__desc {
            margin: 0;
            font-size: 0.85rem;
            line-height: 1.85;
            color: var(--dev-ink);
        }

        .dev-why__ic {
            flex: 0 0 auto;
            width: 62px;
            height: 62px;
            object-fit: contain;
            opacity: 0.85;
        }

        .dev-why__ic.myanmar-flag {
            width: 100px;
            height: 100px;
            object-fit: contain;

        }

        .dev-why__arrow {
            flex: 0 0 auto;
            width: 44px;
            height: auto;
            align-self: center;
            object-fit: contain;
        }

        @media (max-width: 1000px) {
            .dev-why {
                flex-direction: column;
                align-items: center;
                gap: 0.6rem;
            }

            .dev-why__item {
                flex: 0 0 auto;
                max-width: 440px;
                width: 100%;
            }

            .dev-why__arrow {
                width: 34px;
                transform: rotate(90deg);
            }
        }

        /* ── SERVICE CONTENT (4 cards) ── */
        .dev-serv {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.2rem;
        }

        @media (min-width: 600px) {
            .dev-serv {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1000px) {
            .dev-serv {
                grid-template-columns: repeat(4, 1fr);
            }
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

        .dev-scard__ic img {
            width: 75px;
            height: 75px;
            object-fit: contain;
        }

        .dev-scard__title {
            margin: 0 0 0.7rem;
            font-size: 1rem;
            font-weight: 700;
            color: var(--dev-blue3);
        }

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
        .dev-team__grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            align-items: center;
        }

        @media (min-width: 900px) {
            .dev-team__grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .dev-team__en {
            font-family: "Anonymous Pro", monospace;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--dev-ink);
            margin: 0 0 0.2rem;
        }

        .dev-team__jp {
            margin: 0 0 1rem;
            font-size: clamp(1.4rem, 3.5vw, 1.9rem);
            font-weight: 900;
            color: var(--dev-ink);
        }

        .dev-team__desc {
            margin: 0 0 1.6rem;
            font-size: 0.9rem;
            line-height: 1.9;
            color: var(--dev-muted);
        }

        .dev-team__media {
            width: 100%;
            aspect-ratio: 16 / 10;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(20, 33, 58, 0.16);
        }

        .dev-team__points {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.9rem;
        }

        @media (min-width: 520px) {
            .dev-team__points {
                grid-template-columns: repeat(3, 1fr);
            }


        }

        .dev-tp {
            text-align: start;
            width: 100%;
        }

        .dev-tp__ic img {
            width: 80px;
            height: 80px;
            /* margin: 0 auto 0.6rem; */
            border-radius: 50%;
            color: var(--dev-blue);
            display: grid;
            place-items: center;
        }



        .dev-tp__t {
            margin: 0 0 0.3rem;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--dev-blue);
        }

        .dev-tp__d {
            margin: 0;
            font-size: 0.75rem;
            line-height: 1.7;
            color: var(--dev-muted);
        }

        /* ── PORTFOLIO ── */
        .dev-work {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.4rem 1.6rem;
            max-width: 560px;
            margin: 0 auto;
        }

        @media (min-width: 760px) {
            .dev-work {
                grid-template-columns: repeat(3, 1fr);
                max-width: none;
            }
        }

        .dev-wcard {
            background: none;
            border: none;
            border-radius: 0;
            box-shadow: none;
            /* padding: 30px; */
        }

        .dev-wcard__media {
            width: 100%;
            margin-bottom: 0.9rem;
            padding: 0 25px;
        }

        .dev-wcard__media img {
            display: block;
            width: 100%;
            height: auto;
        }

        .dev-wcard__body {
            padding: 0;
            font-weight: 700;
        }

        .dev-wcard__row {
            margin: 0.2rem 0;
            font-size: 0.8rem;
            line-height: 1.8;
            color: #1f2937;
        }

        .dev-work__note {
            text-align: center;
            font-size: 0.7rem;
            color: var(--dev-muted);
            margin: 0;
        }

        /* ── CTA banner + contact (copied from profile.php) ── */
        .prof-bottom-row {
            width: 86%;
            max-width: 1168px;
            margin: 3rem auto 2rem;
            display: flex;
            gap: 1.5rem;
            align-items: stretch;
        }

        .prof-cta-banner {
            flex: 0 0 320px;
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

        .prof-cta-banner__btn:hover {
            opacity: 0.85;
        }

        .prof-cta-banner__btn--dl {
            background: #dc2626;
            color: #fff;
        }

        .prof-cta-banner__btn--dl::after {
            color: #dc2626;
        }

        .prof-cta-banner__btn--contact {
            background: #12499e;
            color: #fff;
        }

        .prof-cta-banner__btn--contact::after {
            color: #12499e;
        }

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

        .prof-contact__icon {
            width: 71px;
            flex-shrink: 0;
            object-fit: contain;
        }

        .prof-contact__label {
            font-size: 15px;
            font-weight: 700;
            color: #13499e;
            margin: 0 0 0.15rem;
        }

        .prof-contact__hours {
            font-size: 13px;
            color: #9ca3af;
            margin: 0 0 0.2rem;
            font-family: "Anonymous Pro", monospace;
        }

        .prof-contact__value {
            font-size: 25px;
            font-weight: 400;
            color: #000;
            margin: 0;
            line-height: 1.2;
        }

        .prof-contact__link {
            font-size: 23px;
            font-weight: 400;
            color: #000;
            text-decoration: none;
            word-break: break-all;
        }

        .prof-contact__link:hover {
            text-decoration: underline;
            color: #12499e;
        }

        .site-footer {
            background: #fff;
            padding-block: 1.75rem;
        }

        @media (max-width: 768px) {
            .prof-bottom-row {
                width: 92%;
                flex-direction: column;
                margin: 2rem auto;
            }

            .prof-cta-banner {
                flex: none;
                width: 100%;
                min-height: 180px;
            }

            .prof-cta-banner__text {
                margin-left: 0;
                text-align: center;
            }

            .prof-cta-banner__btns {
                width: 100%;
            }

            .prof-cta-banner__btn {
                justify-content: center;
            }

            .prof-contact {
                padding: 1.2rem;
            }

            .prof-contact__cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <?php include 'menu.php'; ?>

    <!-- ============================ PAGE 12 ============================ -->
    <div class="dev" id="top">

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
                    <!-- 画像差し替え用: assets/img/dev-team.jpg -->
                    <div class="dev-team__media dev-ph"><img src="./assets/img/dev-team.png" alt=""></div>
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
                    <!-- 画像差し替え用: assets/img/dev-work1.jpg 等 -->
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

    <!-- Bottom: CTA Banner + Contact -->
    <!-- <div class="prof-bottom-row">
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
</div> -->

    <?php include 'footer.php'; ?>

</body>

</html>