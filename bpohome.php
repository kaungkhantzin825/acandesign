<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="OCR+AIで処理されたデータの確認・修正に特化したBPOサービス。高品質なデータ処理を、より早く、より柔軟に。日本語ブリッジと24時間365日の体制で、安心の運用を実現します。 - A CAN SOLUTIONS" />
    <meta name="theme-color" content="#ffffff" />
    <title>BPOサービス | A CAN SOLUTIONS</title>
    <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;800;900&family=Roboto+Mono:wght@400;500;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* ── Nav overrides ── */
        .site-header__nav {
            gap: 2.75rem;
            margin-left: 8.5rem;
        }

        .site-header__nav a {
            text-decoration: none;
            color: var(--color-ink, #001524);
            font-size: 15px;
            font-weight: bold;
            font-family: "Anonymous Pro", monospace;
            white-space: nowrap;
            transition: color var(--transition, 0.2s);
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
            transition: background var(--transition, 0.2s), opacity var(--transition, 0.2s);
        }

        .site-header__cta--dl {
            background: #dc2626;
        }

        .site-header__cta--dl:hover {
            background: #b91c1c;
        }

        /* =========================================================
           BPO PAGE SPECIFIC STYLES
           ========================================================= */
        :root {
            --bpo-blue: #004aad;
            --bpo-blue-dark: #072a6b;
            --bpo-blue-light: #e8f0fe;
            --bpo-blue-border: #dce8f8;
            --bpo-text: #1a1a2e;
            --bpo-muted: #4b5563;
        }

        .bpo-page {
            padding-top: 60px;
            color: var(--bpo-text);
            font-family: "Noto Sans JP", sans-serif;
            background: #ffffff;
            overflow-x: hidden;
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
            color: var(--bpo-blue);
            font-weight: 800;
        }

        /* ── HERO SECTION ── */
        .bpo-hero {
            position: relative;
            background-color: #ffffff;
            background-image:
                linear-gradient(90deg, #ffffff 0%, rgba(255, 255, 255, 0.97) 38%, rgba(255, 255, 255, 0.8) 52%, rgba(255, 255, 255, 0) 74%),
                url("assets/img/design-team/hero-desk.png");
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
            font-family: "Anonymous Pro", monospace;
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
            border: 1.5px solid var(--bpo-blue-border);
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
            max-height: 36px;
            max-width: 40px;
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
            font-weight: 600;
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
            font-size: clamp(1.45rem, 3.2vw, 2.05rem);
            font-weight: 800;
            color: var(--bpo-blue);
            position: relative;
            padding-bottom: 0.9rem;
            letter-spacing: 0.02em;
        }

        .bpo-sec__title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 160px;
            height: 3px;
            background: #9ab4d6;
            border-radius: 2px;
        }

        /* ── SECTION 1: なぜ A CAN SOLUTIONSのBPOなのか ── */
        .bpo-why-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.2rem;
        }

        .bpo-why-card {
            position: relative;
            background: #ffffff;
            border: 1.5px solid var(--bpo-blue-border);
            border-radius: 16px;
            padding: 1.6rem 1.2rem 1.4rem;
            box-shadow: 0 8px 24px rgba(20, 33, 58, 0.05);
            display: flex;
            flex-direction: column;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .bpo-why-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(0, 74, 173, 0.12);
        }

        .bpo-why-card__badge {
            position: absolute;
            top: 1.2rem;
            left: 1.2rem;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--bpo-blue);
            color: #ffffff;
            font-family: 'Roboto Mono', monospace;
            font-size: 1.05rem;
            font-weight: 800;
            display: grid;
            place-items: center;
            box-shadow: 0 3px 8px rgba(0, 74, 173, 0.25);
        }

        .bpo-why-card__graphic {
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-bottom: 1.2rem;
            padding-right: 0.25rem;
        }

        .bpo-why-card__graphic img {
            max-height: 68px;
            max-width: 110px;
            width: auto;
            object-fit: contain;
        }

        .bpo-why-card__title {
            margin: 0 0 0.55rem;
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--bpo-blue);
            line-height: 1.35;
        }

        .bpo-why-card__desc {
            margin: 0;
            font-size: 0.83rem;
            font-weight: 600;
            color: #334155;
            line-height: 1.75;
        }

        /* ── SECTION 2: 主な業務 ── */
        .bpo-tasks-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.35rem 1.25rem;
        }

        .bpo-task-card {
            background: #ffffff;
            border: 1.5px solid var(--bpo-blue-border);
            border-radius: 14px;
            padding: 1.45rem 1.25rem;
            box-shadow: 0 6px 20px rgba(20, 33, 58, 0.04);
            display: flex;
            align-items: center;
            gap: 1.15rem;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .bpo-task-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 26px rgba(0, 74, 173, 0.1);
        }

        .bpo-task-card__ic {
            width: 66px;
            height: 66px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bpo-task-card__ic img {
            max-width: 62px;
            max-height: 62px;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        .bpo-task-card__content {
            flex: 1;
            min-width: 0;
        }

        .bpo-task-card__title {
            margin: 0 0 0.4rem;
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--bpo-blue);
            line-height: 1.3;
        }

        .bpo-task-card__badge {
            display: inline-block;
            background: var(--bpo-blue-light);
            color: var(--bpo-blue);
            font-weight: 800;
            font-size: 0.8rem;
            padding: 0.22rem 0.85rem;
            border-radius: 6px;
            margin-bottom: 0.45rem;
            letter-spacing: 0.01em;
        }

        .bpo-task-card__desc {
            margin: 0;
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--bpo-muted);
            line-height: 1.55;
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
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--bpo-blue);
            color: #ffffff;
            font-family: 'Roboto Mono', monospace;
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
            font-family: "Anonymous Pro", monospace;
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
            font-weight: 700;
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

        /* =========================================================
           RESPONSIVE MEDIA QUERIES
           ========================================================= */
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
            .site-header__nav {
                margin-left: 0;
                gap: 1.5rem;
            }

            .bpo-hero {
                background-image:
                    linear-gradient(180deg, #ffffff 0%, rgba(255, 255, 255, 0.95) 45%, rgba(255, 255, 255, 0.82) 100%),
                    url("assets/img/design-team/hero-desk.png");
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
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="bpo-page" id="top">

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
                            <img src="assets/img/bpo/hero-ic1.png" alt="OCR+AI" />
                        </div>
                        <p class="bpo-hero-card__title">OCR+AI</p>
                        <p class="bpo-hero-card__sub">確認・修正に特化</p>
                    </div>

                    <div class="bpo-hero-card">
                        <div class="bpo-hero-card__ic">
                            <img src="assets/img/bpo/hero-ic2.png" alt="日本語ブリッジ" />
                        </div>
                        <p class="bpo-hero-card__title">日本語ブリッジ</p>
                        <p class="bpo-hero-card__sub">指示を正確に展開</p>
                    </div>

                    <div class="bpo-hero-card">
                        <div class="bpo-hero-card__ic">
                            <img src="assets/img/bpo/hero-ic3.png" alt="24時間365日" />
                        </div>
                        <p class="bpo-hero-card__title">24時間365日</p>
                        <p class="bpo-hero-card__sub">土日も対応可能</p>
                    </div>

                    <div class="bpo-hero-card bpo-hero-card--highlight">
                        <div class="bpo-hero-card__ic">
                            <img src="assets/img/bpo/hero-ic4.png" alt="動画で学んですぐにスタート" />
                        </div>
                        <p class="bpo-hero-card__title">動画で学んで</p>
                        <p class="bpo-hero-card__sub">すぐにスタート</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 1: なぜ A CAN SOLUTIONSのBPOなのか ── -->
        <section class="bpo-sec">
            <div class="bpo__inner">
                <div class="bpo-sec__head">
                    <h2 class="bpo-sec__title">なぜ A CAN SOLUTIONSのBPOなのか</h2>
                </div>

                <div class="bpo-why-grid">
                    <!-- Card 1 -->
                    <div class="bpo-why-card">
                        <span class="bpo-why-card__badge">01</span>
                        <div class="bpo-why-card__graphic">
                            <img src="assets/img/bpo/why-ic1.png" alt="マニュアル不要で開始" />
                        </div>
                        <h3 class="bpo-why-card__title">マニュアル不要で開始</h3>
                        <p class="bpo-why-card__desc">動画共有で業務を理解し、スムーズに立ち上げ</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bpo-why-card">
                        <span class="bpo-why-card__badge">02</span>
                        <div class="bpo-why-card__graphic">
                            <img src="assets/img/bpo/why-ic2.png" alt="日本語堪能なブリッジ" />
                        </div>
                        <h3 class="bpo-why-card__title">日本語堪能なブリッジ</h3>
                        <p class="bpo-why-card__desc">日本語での指示を正確に理解し現場へ展開</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bpo-why-card">
                        <span class="bpo-why-card__badge">03</span>
                        <div class="bpo-why-card__graphic">
                            <img src="assets/img/bpo/why-ic3.png" alt="OCR+AI後工程に特化" />
                        </div>
                        <h3 class="bpo-why-card__title">OCR+AI後工程に特化</h3>
                        <p class="bpo-why-card__desc">確認・修正に集中し、入力品質を安定化</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bpo-why-card">
                        <span class="bpo-why-card__badge">04</span>
                        <div class="bpo-why-card__graphic">
                            <img src="assets/img/bpo/why-ic4.png" alt="24時間365日対応" />
                        </div>
                        <h3 class="bpo-why-card__title">24時間365日対応</h3>
                        <p class="bpo-why-card__desc">お客様の業務時間に合わせて柔軟に対応</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 2: 主な業務 ── -->
        <section class="bpo-sec">
            <div class="bpo__inner">
                <div class="bpo-sec__head">
                    <h2 class="bpo-sec__title">主な業務</h2>
                </div>

                <div class="bpo-tasks-grid">
                    <!-- Task 1 -->
                    <div class="bpo-task-card">
                        <div class="bpo-task-card__ic">
                            <img src="assets/img/bpo/task-ic1.png" alt="不動産データチェック" />
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
                            <img src="assets/img/bpo/task-ic2.png" alt="ポイント不正チェック" />
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
                            <img src="assets/img/bpo/task-ic3.png" alt="寄港情報システム入力" />
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
                            <img src="assets/img/bpo/task-ic4.png" alt="メール添付ファイル入力" />
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
                            <img src="assets/img/bpo/task-ic5.png" alt="ECサイト商品登録" />
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
                            <img src="assets/img/bpo/task-ic6.png" alt="人物アノテーション" />
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
                            <img src="assets/img/bpo/flow-ic1.png" alt="動画共有で理解" />
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
                            <img src="assets/img/bpo/flow-ic2.png" alt="日本語ブリッジが整理・指示" />
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
                            <img src="assets/img/bpo/flow-ic3.png" alt="現場オペレーション" />
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
                            <img src="assets/img/bpo/flow-ic4.png" alt="確認・修正して納品" />
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
                                <p class="bpo-team-feat__d">OCR・AI処理後のデータ確認・修正に対応。</p>
                            </div>

                            <!-- Feature 2 -->
                            <div class="bpo-team-feat">
                                <div class="bpo-team-feat__ic">
                                    <img src="assets/img/bpo/team-ic2.png" alt="日本語ブリッジ" />
                                </div>
                                <h3 class="bpo-team-feat__t">日本語ブリッジ</h3>
                                <p class="bpo-team-feat__d">日本語の指示を現場へ正確に展開。</p>
                            </div>

                            <!-- Feature 3 -->
                            <div class="bpo-team-feat">
                                <div class="bpo-team-feat__ic">
                                    <img src="assets/img/bpo/team-ic3.png" alt="24時間365日対応" />
                                </div>
                                <h3 class="bpo-team-feat__t">24時間365日対応</h3>
                                <p class="bpo-team-feat__d">土日・深夜も含めて柔軟に対応。</p>
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

    </div>

    <!-- CTA Section -->
 

    <?php include 'footer.php'; ?>

</body>

</html>
