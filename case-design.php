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
            --dsg-blue3: #0a66c2;
            --dsg-soft: #eaf1fb;
            --dsg-tint: #f5f8fd;
            --dsg-muted: #5b6472;
            --dsg-soft-muted: #737373;
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

        .dsg-team__shot.dsg-i {
            aspect-ratio: 16 / 9;
        }

        /* icon slot: dashed box until the real icon image replaces the placeholder */
        .dsg-icon-ph {
            border-radius: 8px;
        }

        .dsg-icon-ph.is-empty {
            background: rgba(0, 74, 173, 0.06);
            border: 1.5px dashed rgba(0, 74, 173, 0.35);
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
            width: 30px;
            height: 30px;
            color: var(--dsg-ink);
        }

        .dsg-hcard__ic img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
        }

        .dsg-hcard__title {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 700;
            line-height: 1.35;
            color: var(--dsg-muted);
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
            height: 3px;
            opacity: 0.3;
            background: var(--dsg-muted);
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
            width: 64px;
            height: 64px;
            color: var(--dsg-ink);
        }

        .dsg-why__ic img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
        }

        .dsg-why__arrow {
            flex: 0 0 auto;
            width: 44px;
            height: auto;
            align-self: center;
            object-fit: contain;
            margin: 0 -12px;
            z-index: 100;
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
            border: 1px solid #737373;
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
            width: 40px;
            height: 40px;
            color: var(--dsg-ink);
        }

        .dsg-scard__ic img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
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
            width: 64px;
            height: 64px;
            margin: 0 auto 0.7rem;
            color: var(--dsg-ink);
        }

        .dsg-stat__ic img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
        }

        .dsg-stat__label {
            margin: 0;
            font-size: 1.3rem;
            font-weight: 700;
            line-height: 1.45;
            color: var(--dsg-muted);
        }

        .dsg-stat__n {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dsg-blue3);
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
            border: 1px solid var(--dsg-soft-muted);
            border-radius: 14px;
            padding: 1.1rem 1.3rem 1.3rem;
            display: flex;
            flex-direction: column;
        }

        .dsg-wcard__title {
            margin: 0 0 0.9rem;
            text-align: center;
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
            object-fit: contain;
        }

        .dsg-wcard__desc {
            margin: 0;
            font-size: 1rem;
            line-height: 1.85;
            color: #1f2937;
            font-weight: 500;
        }

        /* ── TEAM blocks (画像制作チーム / 動画制作チーム) ── */
        .dsg-team__grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            align-items: center;
        }

        @media (min-width: 900px) {
            .dsg-team__grid {
                grid-template-columns: 1fr 1fr;
            }

            .dsg-team__grid.dsg-team__i {
                grid-template-columns: 1fr 1fr 1fr;
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
            margin: 0 0 .8rem;
        }

        .dsg-team__desc {
            margin: 0 0 1.8rem;
            font-size: 0.85rem;
            line-height: 1.95;
            color: var(--dsg-ink);
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

        .dsg-tp__card {
            display: flex;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .dsg-tp__ic {
            display: block;
            width: 60px;
            height: 60px;
            margin-bottom: 0.6rem;
            color: var(--dsg-ink);
        }

        .dsg-tp__ic img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: contain;
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
                                    <span class="dsg-hcard__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-hero1.png" alt="" /></span>
                                    <h3 class="dsg-hcard__title">高難度画像編集</h3>
                                </div>
                                <p class="dsg-hcard__desc">シースルー素材や影調整など<br>高難易度な編集に対応します。</p>
                            </div>
                            <div class="dsg-hcard">
                                <div class="dsg-hcard__head">
                                    <span class="dsg-hcard__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-hero2.png" alt="" /></span>
                                    <h3 class="dsg-hcard__title">24時間365日対応</h3>
                                </div>
                                <p class="dsg-hcard__desc">ミャンマー拠点で<br>24時間365日体制を実現。</p>
                            </div>
                            <div class="dsg-hcard">
                                <div class="dsg-hcard__head">
                                    <span class="dsg-hcard__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-hero3.png" alt="" /></span>
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
        <section class="dsg-sec">
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
                            <span class="dsg-why__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-why1.png" alt="" /></span>
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
                            <span class="dsg-why__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-why2.png" alt="" /></span>
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
                            <span class="dsg-why__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-why3.png" alt="" /></span>
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
                            <span class="dsg-scard__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-service1.png" alt="" /></span>
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
                            <span class="dsg-scard__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-service2.png" alt="" /></span>
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
                            <span class="dsg-scard__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-service3.png" alt="" /></span>
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
                            <span class="dsg-scard__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-service4.png" alt="" /></span>
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
                        <span class="dsg-stat__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-stat1.png" alt="" /></span>
                        <p class="dsg-stat__label"><span class="dsg-stat__n">24</span>時間<span class="dsg-stat__n">365</span>日<br>体制で対応</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-stat2.png" alt="" /></span>
                        <p class="dsg-stat__label"><span class="dsg-stat__n">1,000</span>枚以上<br>／週末対応</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-stat3.png" alt="" /></span>
                        <p class="dsg-stat__label"><span class="dsg-stat__n">5</span>年以上の<br>動画制作実績</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-stat4.png" alt="" /></span>
                        <p class="dsg-stat__label"><span class="dsg-stat__n">50</span>本/日の<br>短尺動画制作</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-stat5.png" alt="" /></span>
                        <p class="dsg-stat__label">夕方入稿→<br>翌朝納品対応</p>
                    </div>
                    <div class="dsg-stat">
                        <span class="dsg-stat__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-stat6.png" alt="" /></span>
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
                            <img src="assets/img/design-work1.png" alt="アパレル画像編集・レタッチの制作イメージ" 
                                style="
                                    object-fit: cover;
                                    object-position: center -40px;
                                "/>
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
                            <img src="assets/img/design-work3.png" alt="短尺ファッション動画の制作イメージ" 
                                style="
                                    margin: 0 auto;
                                    width: 80%;
                                "/>
                        </div>
                        <p class="dsg-wcard__desc">15〜20秒のショート動画を大量制作。SNS・広告・ECで高い訴求力を発揮</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- IMAGE PRODUCTION TEAM -->
        <section class="dsg-sec dsg-sec--tint">
            <div class="dsg__inner">
                <div class="dsg-team__grid dsg-team__i">
                    <div class="dsg-team__text">
                        <h2 class="dsg-team__jp">画像制作チーム</h2>
                        <p class="dsg-team__en">Image Production Team in Myanmar</p>
                        <p class="dsg-team__desc">A CAN SOLUTIONSでは、ミャンマーに自社の画像制作チームを構え、アパレル向けの画像編集・レタッチ・モデル合成・商品画像加工などを担当しています。日本側と日常的に連携しながら、確かなスキルの向上、業務の規律、そして品質意識を持ち、継続的に成長し続けています。</p>

                        <div class="dsg-team__points">
                            <div class="dsg-tp dsg-tp__card">
                                <span class="dsg-tp__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-team-image1.png" alt="" /></span>
                                <p class="dsg-tp__t">高度な画像編集</p>
                                <p class="dsg-tp__d">レタッチや合成、色調整など幅広い画像制作に対応</p>
                            </div>
                            <div class="dsg-tp dsg-tp__card">
                                <span class="dsg-tp__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-team-image2.png" alt="" /></span>
                                <p class="dsg-tp__t">日本側との連携</p>
                                <p class="dsg-tp__d">日々のコミュニケーションで品質と納期を管理</p>
                            </div>
                            <div class="dsg-tp dsg-tp__card">
                                <span class="dsg-tp__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-team-image3.png" alt="" /></span>
                                <p class="dsg-tp__t">継続的な技術教育</p>
                                <p class="dsg-tp__d">最新の編集手法やAI活用を学び、成長を支援</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="dsg-team__media dsg-team__media--pair">
                        <div class="dsg-team__shot dsg-ph"><img src="assets/img/design-team-image1.png" alt="ミャンマーの画像制作チーム"></div>
                        <div class="dsg-team__shot dsg-ph"><img src="assets/img/design-team-image2.png" alt="ミャンマーの画像制作チーム"></div>
                    </div> -->

                    <div class="dsg-team__shot dsg-ph dsg-i"><img src="assets/img/design-team-image1.png" alt="ミャンマーの画像制作チーム"></div>
                    <div class="dsg-team__shot dsg-ph dsg-i"><img src="assets/img/design-team-image2.png" alt="ミャンマーの画像制作チーム"></div>
                </div>
            </div>
        </section>

        <!-- VIDEO PRODUCTION TEAM -->
        <section class="dsg-sec dsg-sec--tint">
            <div class="dsg__inner">
                <div class="dsg-team__grid">
                    <div class="dsg-team__text">
                        <h2 class="dsg-team__jp">動画制作チーム</h2>
                        <p class="dsg-team__en">Video Production Team in Myanmar</p>
                        <p class="dsg-team__desc">A CAN SOLUTIONSは、ミャンマーに動画制作チームを構築・運用しています。日本側のマネジメントのもと、SNS向けの短尺動画編集やコンテンツ制作のサポートを行い、スピードと品質を両立した安定的な制作体制を実現しています。日本とミャンマーの協働を活かし、継続的に価値ある映像コンテンツをお届けします。</p>

                        <div class="dsg-team__points">
                            <div class="dsg-tp dsg-tp__card">
                                <span class="dsg-tp__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-team-video1.png" alt="" /></span>
                                <p class="dsg-tp__d">SNS・広告向けの<br>15〜20秒動画を<br>効率よく制作。</p>
                            </div>
                            <div class="dsg-tp dsg-tp__card">
                                <span class="dsg-tp__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-team-video2.png" alt="" /></span>
                                <p class="dsg-tp__d">企画意図や品質基準を<br>共有し、安定した<br>制作体制を構築。</p>
                            </div>
                            <div class="dsg-tp dsg-tp__card">
                                <span class="dsg-tp__ic dsg-icon-ph" aria-hidden="true"><img src="assets/img/design-icon-team-video3.png" alt="" /></span>
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
        // Photos and icons for this page are still being prepared: if a placeholder image
        // is missing, hide the <img> so the placeholder fill shows instead of a broken icon.
        document.querySelectorAll('.dsg-ph img, .dsg-icon-ph img').forEach(function (img) {
            function hide() {
                img.style.display = 'none';
                if (img.parentNode.classList.contains('dsg-icon-ph')) img.parentNode.classList.add('is-empty');
            }
            img.addEventListener('error', hide);
            if (img.complete && img.naturalWidth === 0) hide();
        });
    </script>

    <?php include 'footer.php'; ?>

</body>

</html>
