<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="ミャンマーでビジネスを行うためのノウハウがある弊社が、戦略的パートナーとしてミャンマーでの事業を強力に支援します。会社設立から人材確保・育成、現地ネットワークの活用まで。 - A CAN SOLUTIONS" />
    <meta name="theme-color" content="#ffffff" />
    <title>ミャンマー進出支援 | A CAN SOLUTIONS</title>
    <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        :root {
            --cs-navy: #0a2a5e;
            --cs-navy-deep: #06204a;
            --cs-blue: #0038a8;
            --cs-blue-light: #1d4ed8;
            --cs-gold: #c9a052;
            --cs-gold-soft: #e3c891;
            --cs-bg-soft: #eef4fc;
            --cs-card-bg: #ffffff;
            --cs-text: #10233f;
            --cs-muted: #5b6472;
            --cs-line: #dbe4f2;
            --cs-container: 1200px;
        }

        body {
            font-family: "Noto Sans JP", sans-serif;
            color: var(--cs-text);
            margin: 0;
            padding: 0;
            background: #fff;
            line-height: 1.7;
        }

        .cs-page {
            padding-top: 60px;
            /* Offset for fixed header */
        }

        .cs-inner {
            width: 100%;
            max-width: var(--cs-container);
            margin: 0 auto;
            padding: 0 1.25rem;
        }

        /* ══════════════════════════════════════════
           BREADCRUMBS
           ══════════════════════════════════════════ */
        .cs-bc {
            font-size: 0.8rem;
            color: #000;
            padding: 1.1rem 0 1.4rem;
            margin: 0;
            font-weight: 500;
        }

        .cs-bc a {
            color: #000;
            text-decoration: none;
        }

        .cs-bc a:hover {
            text-decoration: underline;
        }

        .cs-bc span {
            font-weight: 700;
            color: var(--cs-blue);
        }

        /* ══════════════════════════════════════════
           HERO
           ══════════════════════════════════════════ */
        .cs-hero {
            position: relative;
            background-color: #fff;
            overflow: hidden;
        }

        .cs-hero__media {
            position: absolute;
            inset: 0 0 0 38%;
            /* PLACEHOLDER — replace assets/img/cs-hero-bg.jpg (1600x900) */
            background-image: url("assets/img/cs-hero-bg.jpg");
            background-size: cover;
            background-position: center 38%;
            z-index: 0;
        }

        /* White wash that melts the photo into the copy column */
        .cs-hero__media::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg,
                    #ffffff 0%,
                    rgba(255, 255, 255, 0.96) 18%,
                    rgba(255, 255, 255, 0.55) 40%,
                    rgba(255, 255, 255, 0.12) 68%,
                    rgba(255, 255, 255, 0) 100%);
        }

        /* Navy wedge across the lower-right corner */
        .cs-hero__wedge {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 62%;
            height: 210px;
            background: linear-gradient(115deg, rgba(10, 42, 94, 0) 0%, rgba(10, 42, 94, 0.82) 38%, var(--cs-navy-deep) 100%);
            clip-path: polygon(22% 100%, 100% 0, 100% 100%);
            z-index: 1;
            pointer-events: none;
        }

        .cs-hero__wedge-text {
            position: absolute;
            right: 2.5rem;
            bottom: 2.6rem;
            z-index: 3;
            color: #fff;
            font-size: 0.95rem;
            font-weight: 500;
            line-height: 1.85;
            text-align: right;
            letter-spacing: 0.02em;
        }

        .cs-hero__wedge-text::after {
            content: "";
            display: block;
            width: 130px;
            height: 2px;
            background: rgba(255, 255, 255, 0.65);
            margin: 0.9rem 0 0 auto;
        }

        .cs-hero__grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            gap: 2rem;
            align-items: start;
            min-height: 520px;
            padding-bottom: 5.5rem;
        }

        .cs-hero__content {
            max-width: 560px;
            padding-top: 0.5rem;
        }

        .cs-hero__eyebrow {
            font-family: "Roboto Mono", monospace;
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            color: var(--cs-navy);
            margin: 0 0 1rem;
        }

        .cs-hero__title {
            font-size: clamp(2.1rem, 4.2vw, 3.05rem);
            font-weight: 900;
            color: var(--cs-navy);
            margin: 0 0 0.9rem;
            line-height: 1.32;
            letter-spacing: 0.01em;
            text-shadow: 0 2px 14px rgba(255, 255, 255, 0.9);
        }

        .cs-hero__subtitle {
            font-size: clamp(1.15rem, 2.2vw, 1.6rem);
            font-weight: 500;
            color: #a8762f;
            margin: 0 0 2rem;
            letter-spacing: 0.01em;
        }

        .cs-hero__desc {
            font-size: 0.92rem;
            color: #33415c;
            line-height: 2;
            margin: 0;
            font-weight: 500;
            text-shadow: 0 1px 10px rgba(255, 255, 255, 0.95);
        }

        /* Vertical Japanese tagline + English stack, top-right of the hero */
        .cs-hero__tagline {
            position: relative;
            z-index: 3;
            text-align: right;
            padding-top: 2.2rem;
            padding-right: 0.5rem;
        }

        /* Soft white bloom so the tagline stays legible over the photo */
        .cs-hero__tagline::before {
            content: "";
            position: absolute;
            inset: -1.5rem -2rem -2rem -3rem;
            background: radial-gradient(ellipse at 65% 50%,
                    rgba(255, 255, 255, 0.92) 0%,
                    rgba(255, 255, 255, 0.75) 45%,
                    rgba(255, 255, 255, 0) 78%);
            z-index: -1;
            pointer-events: none;
        }

        .cs-hero__tagline-jp {
            font-size: clamp(1rem, 1.6vw, 1.32rem);
            font-weight: 700;
            color: var(--cs-navy);
            line-height: 1.85;
            margin: 0;
            transform: rotate(-4deg);
            transform-origin: right center;
        }

        .cs-hero__tagline-rule {
            width: 150px;
            height: 1px;
            background: rgba(10, 42, 94, 0.45);
            margin: 1rem 0 0.9rem auto;
            transform: rotate(-4deg);
        }

        .cs-hero__tagline-en {
            margin: 0;
            font-size: 0.95rem;
            font-weight: 600;
            color: #16345c;
            line-height: 2.1;
            letter-spacing: 0.02em;
            transform: rotate(-4deg);
            transform-origin: right center;
        }

        /* ══════════════════════════════════════════
           FEATURE CARDS (overlap the hero)
           ══════════════════════════════════════════ */
        .cs-features {
            background: var(--cs-bg-soft);
            padding: 3rem 0 3.4rem;
        }

        .cs-features__grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.6rem;
        }

        .cs-fcard {
            position: relative;
            display: flex;
            gap: 1.1rem;
            align-items: flex-start;
            background: var(--cs-card-bg);
            border-radius: 10px;
            padding: 1.7rem 1.5rem 2.6rem;
            box-shadow: 0 6px 22px rgba(10, 42, 94, 0.08);
            text-decoration: none;
            color: inherit;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .cs-fcard:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 34px rgba(10, 42, 94, 0.14);
        }

        .cs-fcard__ic {
            flex: 0 0 76px;
            width: 76px;
            height: 76px;
            border-radius: 50%;
            background: #e8eff9;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Icon box: 46x46 inside a 76px circle — supply at 138x138 (3x) */
        .cs-fcard__ic img {
            width: 46px;
            height: 46px;
            object-fit: contain;
        }

        .cs-fcard__title {
            font-size: 1.12rem;
            font-weight: 700;
            color: var(--cs-navy);
            margin: 0.35rem 0 0.6rem;
            line-height: 1.4;
        }

        .cs-fcard__desc {
            font-size: 0.8rem;
            color: #45536b;
            line-height: 1.8;
            margin: 0;
            font-weight: 500;
        }

        .cs-fcard__arrow {
            position: absolute;
            right: 1.4rem;
            bottom: 1.2rem;
            color: var(--cs-gold);
            font-size: 1.25rem;
            line-height: 1;
            transition: transform 0.25s ease;
        }

        .cs-fcard:hover .cs-fcard__arrow {
            transform: translateX(5px);
        }

        /* ══════════════════════════════════════════
           TWO-COLUMN: REASONS + ACHIEVEMENTS
           ══════════════════════════════════════════ */
        .cs-two {
            padding: 4rem 0 3.5rem;
        }

        .cs-two__grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3.5rem;
        }

        .cs-head {
            border-left: 5px solid var(--cs-gold-soft);
            padding-left: 1.1rem;
            margin-bottom: 2rem;
        }

        .cs-head__jp {
            font-size: clamp(1.4rem, 2.6vw, 1.78rem);
            font-weight: 900;
            color: var(--cs-navy);
            margin: 0 0 0.25rem;
            line-height: 1.35;
        }

        .cs-head__en {
            font-size: 0.95rem;
            font-weight: 400;
            color: #55627a;
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            letter-spacing: 0.01em;
        }

        /* ── Lead reason (icon + emphasised copy) ── */
        .cs-reason-lead {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
            padding-bottom: 1.3rem;
            border-bottom: 1px solid var(--cs-line);
            margin-bottom: 1.3rem;
        }

        .cs-reason-lead__ic {
            flex: 0 0 52px;
            width: 52px;
            height: 52px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Icon box: 52x52, no circle — supply at 156x156 (3x) */
        .cs-reason-lead__ic img {
            width: 52px;
            height: 52px;
            object-fit: contain;
        }

        .cs-reason-lead__text {
            font-size: clamp(1rem, 1.8vw, 1.18rem);
            font-weight: 700;
            color: var(--cs-navy);
            line-height: 1.65;
            margin: 0;
        }

        /* ── Checklist ── */
        .cs-checklist {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cs-checklist li {
            display: flex;
            gap: 0.9rem;
            align-items: flex-start;
            padding: 0.62rem 0;
            font-size: 0.95rem;
            font-weight: 500;
            color: #1f3354;
            line-height: 1.7;
        }

        .cs-check {
            flex: 0 0 26px;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: #fbf3e2;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 0.1rem;
        }

        /* Icon box: 16x16 inside a 26px circle — supply at 48x48 (3x) */
        .cs-check img {
            width: 16px;
            height: 16px;
            object-fit: contain;
        }

        /* ── Achievements list ── */
        .cs-achieve {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cs-achieve li {
            display: flex;
            gap: 1.1rem;
            align-items: center;
            padding: 0.85rem 0;
            border-bottom: 1px solid var(--cs-line);
        }

        .cs-achieve li:last-child {
            border-bottom: none;
        }

        .cs-achieve__ic {
            flex: 0 0 50px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #e8eff9;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Icon box: 26x26 inside a 50px circle — supply at 78x78 (3x) */
        .cs-achieve__ic img {
            width: 26px;
            height: 26px;
            object-fit: contain;
        }

        .cs-achieve__text {
            font-size: 0.95rem;
            font-weight: 500;
            color: #1f3354;
            line-height: 1.65;
            margin: 0;
        }

        /* ══════════════════════════════════════════
           CTA BAND
           ══════════════════════════════════════════ */
        .cs-cta-wrap {
            padding: 0 0 4.5rem;
        }

        .cs-cta {
            display: grid;
            grid-template-columns: 300px minmax(0, 1fr) auto;
            align-items: center;
            gap: 2rem;
            background: linear-gradient(100deg, #e9f0fa 0%, #f4f8fd 48%, #ffffff 100%);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 22px rgba(10, 42, 94, 0.08);
        }

        .cs-cta__media {
            height: 100%;
            min-height: 220px;
            /* PLACEHOLDER — replace assets/img/cs-cta-bg.jpg (900x600) */
            background-image: url("assets/img/cs-cta-bg.jpg");
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .cs-cta__media::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(10, 42, 94, 0.18) 0%, rgba(233, 240, 250, 0) 72%, #e9f0fa 100%);
        }

        .cs-cta__body {
            padding: 2.2rem 0;
        }

        .cs-cta__title {
            font-size: clamp(1.25rem, 2.4vw, 1.72rem);
            font-weight: 900;
            color: var(--cs-navy);
            margin: 0 0 1rem;
            line-height: 1.5;
            white-space: nowrap;
        }

        .cs-cta__lead {
            font-size: 0.88rem;
            color: #45536b;
            line-height: 1.95;
            margin: 0;
            font-weight: 500;
        }

        .cs-cta__actions {
            display: flex;
            flex-direction: column;
            gap: 0.9rem;
            padding: 2.2rem 2.2rem 2.2rem 0;
        }

        .cs-btn {
            display: grid;
            grid-template-columns: 26px minmax(0, 1fr) 22px;
            align-items: center;
            gap: 0.85rem;
            min-width: 272px;
            padding: 0.95rem 1.4rem;
            border-radius: 4px;
            font-size: 0.92rem;
            font-weight: 700;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
        }

        /* Icon box: 20x20 in the button's first column — supply at 60x60 (3x) */
        .cs-btn img {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }

        .cs-btn__arrow {
            justify-self: end;
            font-size: 1.05rem;
            line-height: 1;
            transition: transform 0.2s ease;
        }

        .cs-btn:hover .cs-btn__arrow {
            transform: translateX(4px);
        }

        .cs-btn--primary {
            background: var(--cs-navy);
            color: #fff;
            box-shadow: 0 4px 14px rgba(10, 42, 94, 0.28);
        }

        .cs-btn--primary:hover {
            background: var(--cs-navy-deep);
            transform: translateY(-2px);
        }

        .cs-btn--ghost {
            background: #fff;
            color: var(--cs-navy);
            border: 1.5px solid var(--cs-gold);
        }

        .cs-btn--ghost .cs-btn__arrow {
            color: var(--cs-gold);
        }

        .cs-btn--ghost:hover {
            background: #fffaf0;
            transform: translateY(-2px);
        }

        /* ══════════════════════════════════════════
           RESPONSIVE
           ══════════════════════════════════════════ */
        @media (max-width: 1100px) {
            .cs-cta {
                grid-template-columns: 260px minmax(0, 1fr) auto;
                gap: 1.8rem;
            }

            .cs-btn {
                min-width: 250px;
            }
        }

        @media (max-width: 1024px) {
            .cs-features__grid {
                grid-template-columns: 1fr;
                max-width: 620px;
                margin: 0 auto;
            }

            .cs-two__grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
        }

        @media (max-width: 900px) {
            .cs-hero__media {
                inset: auto 0 0 0;
                height: 46%;
            }

            .cs-hero__media::before {
                background: linear-gradient(180deg, #ffffff 0%, rgba(255, 255, 255, 0.82) 30%, rgba(255, 255, 255, 0.25) 100%);
            }

            .cs-hero__grid {
                grid-template-columns: 1fr;
                min-height: 0;
                padding-bottom: 14rem;
            }

            .cs-hero__tagline {
                text-align: left;
                padding: 0;
                margin-top: 1.5rem;
            }

            /* Let Japanese copy reflow naturally instead of honouring desktop breaks */
            .cs-hero__desc br {
                display: none;
            }

            .cs-hero__tagline-jp,
            .cs-hero__tagline-en {
                transform: none;
            }

            .cs-hero__tagline-rule {
                transform: none;
                margin-left: 0;
            }

            .cs-hero__wedge {
                width: 100%;
                height: 150px;
                clip-path: polygon(0 42%, 100% 0, 100% 100%, 0 100%);
            }

            .cs-hero__wedge-text {
                right: 1.25rem;
                bottom: 1.5rem;
                font-size: 0.85rem;
            }

            .cs-cta {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .cs-cta__media {
                min-height: 180px;
            }

            .cs-cta__media::after {
                background: linear-gradient(180deg, rgba(10, 42, 94, 0.15) 0%, rgba(233, 240, 250, 0) 70%, #e9f0fa 100%);
            }

            .cs-cta__body {
                padding: 1.8rem 1.6rem 0;
            }

            .cs-cta__title {
                white-space: normal;
            }

            .cs-cta__actions {
                padding: 1.5rem 1.6rem 2rem;
            }

            .cs-btn {
                min-width: 0;
                width: 100%;
            }
        }

        @media (max-width: 560px) {
            .cs-fcard {
                flex-direction: column;
                gap: 0.8rem;
                padding: 1.5rem 1.3rem 2.5rem;
            }

            .cs-two {
                padding: 3rem 0 2.5rem;
            }

            .cs-reason-lead {
                gap: 0.75rem;
            }
        }
    </style>
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="cs-page" id="top">

        <!-- ══════════════ HERO ══════════════ -->
        <section class="cs-hero">
            <div class="cs-hero__media" aria-hidden="true"></div>
            <div class="cs-hero__wedge" aria-hidden="true"></div>

            <div class="cs-inner">
                <p class="cs-bc">
                    <a href="index.php">HOME</a> ／ <a href="service.php">サービス</a> ／ <span>ミャンマー進出支援</span>
                </p>

                <div class="cs-hero__grid">
                    <div class="cs-hero__content">
                        <p class="cs-hero__eyebrow">Consulting services</p>
                        <h1 class="cs-hero__title">
                            ミャンマーでの<br />
                            ビジネスの可能性を、<br />
                            ともに実現する。
                        </h1>
                        <p class="cs-hero__subtitle">Support for expansion into Myanmar</p>
                        <p class="cs-hero__desc">
                            ミャンマーでビジネスを行う為のノウハウがある弊社が<br />
                            戦略的パートナーとしてミャンマーでの事業を強力に支援します。<br />
                            ちょっとしたアイデアでも大丈夫。<br />
                            「何かミャンマーでやってみたい」を、私たちがカタチにします。
                        </p>
                    </div>

                    <div class="cs-hero__tagline">
                        <p class="cs-hero__tagline-jp">
                            つながる、<br />
                            ひろがる、<br />
                            ミャンマーの未来へ
                        </p>
                        <div class="cs-hero__tagline-rule" aria-hidden="true"></div>
                        <p class="cs-hero__tagline-en">
                            People<br />
                            Business<br />
                            A Brighter<br />
                            Tomorrow
                        </p>
                    </div>
                </div>
            </div>

            <p class="cs-hero__wedge-text">
                アジアの、その先へ<br />
                ビジネスの新しい可能性を
            </p>
        </section>

        <!-- ══════════════ FEATURE CARDS ══════════════ -->
        <section class="cs-features">
            <div class="cs-inner">
                <div class="cs-features__grid">

                    <a class="cs-fcard" href="#reasons">
                        <div class="cs-fcard__ic" aria-hidden="true">
                            <img src="assets/img/cs-icon-feature1.png" alt="" />
                        </div>
                        <div>
                            <h2 class="cs-fcard__title">ミャンマー進出支援</h2>
                            <p class="cs-fcard__desc">
                                会社設立から事業立ち上げまで現地の実情に即したサポートでスムーズな進出を実現します。
                            </p>
                        </div>
                        <span class="cs-fcard__arrow" aria-hidden="true">→</span>
                    </a>

                    <a class="cs-fcard" href="#reasons">
                        <div class="cs-fcard__ic" aria-hidden="true">
                            <img src="assets/img/cs-icon-feature2.png" alt="" />
                        </div>
                        <div>
                            <h2 class="cs-fcard__title">人材確保・育成</h2>
                            <p class="cs-fcard__desc">
                                ミャンマー人材の採用・育成を通じて、貴社の事業の成長を支援します。
                            </p>
                        </div>
                        <span class="cs-fcard__arrow" aria-hidden="true">→</span>
                    </a>

                    <a class="cs-fcard" href="#achievements">
                        <div class="cs-fcard__ic" aria-hidden="true">
                            <img src="assets/img/cs-icon-feature3.png" alt="" />
                        </div>
                        <div>
                            <h2 class="cs-fcard__title">現地ネットワーク活用</h2>
                            <p class="cs-fcard__desc">
                                長年の現地ネットワークを活かし、信頼できるパートナー・機関とつなぎます。
                            </p>
                        </div>
                        <span class="cs-fcard__arrow" aria-hidden="true">→</span>
                    </a>

                </div>
            </div>
        </section>

        <!-- ══════════════ REASONS + ACHIEVEMENTS ══════════════ -->
        <section class="cs-two">
            <div class="cs-inner">
                <div class="cs-two__grid">

                    <!-- ── 弊社サービス導入のきっかけ ── -->
                    <div id="reasons">
                        <div class="cs-head">
                            <h2 class="cs-head__jp">弊社サービス導入のきっかけ</h2>
                            <p class="cs-head__en">Reason for introducing the service</p>
                        </div>

                        <div class="cs-reason-lead">
                            <div class="cs-reason-lead__ic" aria-hidden="true">
                                <img src="assets/img/cs-icon-reason.png" alt="ミャンマー事業を管理できる人材の確保・育成" />
                            </div>
                            <p class="cs-reason-lead__text">
                                ミャンマー（東南アジア）事業を管理できる<br />
                                人材を確保し育てたい
                            </p>
                        </div>

                        <ul class="cs-checklist">
                            <li>
                                <span class="cs-check" aria-hidden="true">
                                    <img src="assets/img/cs-icon-check.png" alt="" />
                                </span>
                                <span>ミャンマーでの会社設立を支援してほしい</span>
                            </li>
                            <li>
                                <span class="cs-check" aria-hidden="true">
                                    <img src="assets/img/cs-icon-check.png" alt="" />
                                </span>
                                <span>委託先のミャンマー事業撤退で、リソースの確保に困っている</span>
                            </li>
                            <li>
                                <span class="cs-check" aria-hidden="true">
                                    <img src="assets/img/cs-icon-check.png" alt="" />
                                </span>
                                <span>ミャンマー人材を日本国内の事業に導入したい</span>
                            </li>
                        </ul>
                    </div>

                    <!-- ── 実績 ── -->
                    <div id="achievements">
                        <div class="cs-head">
                            <h2 class="cs-head__jp">実績</h2>
                            <p class="cs-head__en">Achievements</p>
                        </div>

                        <ul class="cs-achieve">
                            <li>
                                <span class="cs-achieve__ic" aria-hidden="true">
                                    <img src="assets/img/cs-icon-achieve1.png" alt="" />
                                </span>
                                <p class="cs-achieve__text">ミャンマー人材（IT）紹介とビザ取得</p>
                            </li>
                            <li>
                                <span class="cs-achieve__ic" aria-hidden="true">
                                    <img src="assets/img/cs-icon-achieve2.png" alt="" />
                                </span>
                                <p class="cs-achieve__text">外国人材の導入に向けた、適正な送り出し機関の紹介とアテンド</p>
                            </li>
                            <li>
                                <span class="cs-achieve__ic" aria-hidden="true">
                                    <img src="assets/img/cs-icon-achieve3.png" alt="" />
                                </span>
                                <p class="cs-achieve__text">電子部品加工工場向け、作業者のリクルーティング</p>
                            </li>
                            <li>
                                <span class="cs-achieve__ic" aria-hidden="true">
                                    <img src="assets/img/cs-icon-achieve4.png" alt="" />
                                </span>
                                <p class="cs-achieve__text">商店立ち上げ（洋服販売業）などの事業開始支援</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- ══════════════ CTA BAND ══════════════ -->
        <section class="cs-cta-wrap">
            <div class="cs-inner">
                <div class="cs-cta">
                    <div class="cs-cta__media" aria-hidden="true"></div>

                    <div class="cs-cta__body">
                        <h2 class="cs-cta__title">
                            ミャンマーでのビジネス展開を、<br />
                            確かなパートナーとともに。
                        </h2>
                        <p class="cs-cta__lead">
                            まずはお気軽にご相談ください。<br />
                            貴社の課題に合わせた最適なご提案をいたします。
                        </p>
                    </div>

                    <div class="cs-cta__actions">
                        <a class="cs-btn cs-btn--primary" href="contectus.php">
                            <img src="assets/img/cs-icon-mail.png" alt="" />
                            <span>お問い合わせ</span>
                            <span class="cs-btn__arrow" aria-hidden="true">→</span>
                        </a>

                        <a class="cs-btn cs-btn--ghost" href="download.php">
                            <img src="assets/img/cs-icon-download.png" alt="" />
                            <span>資料ダウンロード</span>
                            <span class="cs-btn__arrow" aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- /cs-page -->

    <?php include 'footer.php'; ?>

</body>

</html>
