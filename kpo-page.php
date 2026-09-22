<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="手書き帳票も、分析業務も。AI×人で、求められた形式まで仕上げるKPOサービス。日本語ブリッジと24時間365日体制で、安心の運用を実現します。 - A CAN SOLUTIONS" />
    <meta name="theme-color" content="#ffffff" />
    <title>KPOサービス | A CAN SOLUTIONS</title>
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
           KPO PAGE STYLES
           ========================================================= */
        :root {
            --kpo-blue: #004aad;
            --kpo-blue-dark: #003277;
            --kpo-blue-light: #e8f0fe;
            --kpo-blue-border: #e2ecf8;
            --kpo-text: #1e293b;
            --kpo-muted: #64748b;
        }

        .kpo-page {
            padding-top: 60px;
            color: var(--kpo-text);
            font-family: "Noto Sans JP", sans-serif;
            background: #ffffff;
            overflow-x: hidden;
        }

        .kpo__inner {
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* ── Breadcrumb ── */
        .kpo-bc {
            font-size: 0.8rem;
            font-weight: 700;
            color: #64748b;
            padding: 1.2rem 0 0.5rem;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.45rem;
        }

        .kpo-bc a {
            color: #1e293b;
            text-decoration: none;
            transition: color 0.2s;
        }

        .kpo-bc a:hover {
            color: var(--kpo-blue);
            text-decoration: underline;
        }

        .kpo-bc__sep {
            color: #94a3b8;
        }

        .kpo-bc__current {
            color: var(--kpo-blue);
            font-weight: 800;
        }

        /* ── HERO SECTION ── */
        .kpo-hero {
            position: relative;
            background-color: #ffffff;
            background-image:
                linear-gradient(90deg, #ffffff 0%, rgba(255, 255, 255, 0.98) 44%, rgba(255, 255, 255, 0.65) 60%, rgba(255, 255, 255, 0) 80%),
                url("assets/img/kpo/kpo-hero-bg.png");
            background-repeat: no-repeat, no-repeat;
            background-size: cover, auto 92%;
            background-position: right center, right top;
            min-height: 570px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-bottom: 2.8rem;
        }

        .kpo-hero .kpo__inner {
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .kpo-hero__content {
            max-width: 630px;
            padding-top: 0.4rem;
        }

        .kpo-hero__eyebrow {
            font-size: 1.25rem;
            font-weight: 900;
            color: var(--kpo-blue);
            letter-spacing: 0.04em;
            margin: 0 0 0.15rem;
        }

        .kpo-hero__title {
            margin: 0;
            font-size: clamp(2.4rem, 4.4vw, 3.4rem);
            font-weight: 900;
            line-height: 1.15;
            color: #0b1a30;
            letter-spacing: -0.01em;
        }

        .kpo-hero__subtitle {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--kpo-blue);
            margin: 0.35rem 0 1.35rem;
            font-family: "Anonymous Pro", monospace;
        }

        .kpo-hero__lead {
            margin: 0 0 0.95rem;
            font-size: clamp(1.15rem, 2.2vw, 1.4rem);
            font-weight: 800;
            line-height: 1.55;
            color: var(--kpo-blue);
        }

        .kpo-hero__desc {
            margin: 0 0 2rem;
            font-size: 0.92rem;
            font-weight: 600;
            line-height: 1.85;
            color: #334155;
            max-width: 38em;
        }

        /* ── Hero 4-card Bar ── */
        .kpo-hero-cards {
            width: 100%;
            max-width: 1020px;
            background: #ffffff;
            border: 1.5px solid var(--kpo-blue-border);
            border-radius: 18px;
            box-shadow: 0 14px 34px rgba(15, 34, 58, 0.08);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            padding: 1.15rem 0.8rem;
        }

        .kpo-hero-card {
            text-align: center;
            padding: 0.3rem 0.6rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .kpo-hero-card + .kpo-hero-card::before {
            content: "";
            position: absolute;
            left: 0;
            top: 8%;
            bottom: 8%;
            width: 1px;
            background: #e2e8f0;
        }

        .kpo-hero-card__ic {
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.5rem;
        }

        .kpo-hero-card__ic img {
            max-height: 40px;
            max-width: 48px;
            width: auto;
            object-fit: contain;
        }

        .kpo-hero-card__title {
            font-size: 0.96rem;
            font-weight: 800;
            color: var(--kpo-blue);
            margin: 0 0 0.25rem;
            line-height: 1.25;
            white-space: nowrap;
        }

        .kpo-hero-card__sub {
            font-size: 0.74rem;
            font-weight: 600;
            color: var(--kpo-muted);
            margin: 0;
            line-height: 1.35;
            white-space: nowrap;
        }

        /* ── SECTION COMMON ── */
        .kpo-sec {
            padding: 4.6rem 0 3.8rem;
            position: relative;
        }

        .kpo-sec__head {
            text-align: center;
            margin-bottom: 2.8rem;
        }

        .kpo-sec__title {
            display: inline-block;
            margin: 0;
            font-size: clamp(1.45rem, 3vw, 2rem);
            font-weight: 800;
            color: var(--kpo-blue);
            position: relative;
            padding-bottom: 0.95rem;
            letter-spacing: 0.02em;
        }

        .kpo-sec__title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 180px;
            height: 3px;
            background: #9ab4d6;
            border-radius: 2px;
        }

        /* ── SECTION 1: なぜ A CAN SOLUTIONSのKPOなのか ── */
        .kpo-why-wrap {
            display: flex;
            align-items: stretch;
            justify-content: center;
            gap: 0.9rem;
        }

        .kpo-why-card {
            flex: 1 1 0;
            position: relative;
            background: #ffffff;
            border: 1.5px solid var(--kpo-blue-border);
            border-radius: 16px;
            padding: 1.75rem 1.35rem 1.6rem;
            box-shadow: 0 8px 24px rgba(20, 33, 58, 0.05);
            display: flex;
            flex-direction: column;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .kpo-why-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(0, 74, 173, 0.12);
        }

        .kpo-why-card__badge {
            position: absolute;
            top: 1.3rem;
            left: 1.3rem;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--kpo-blue);
            color: #ffffff;
            font-family: 'Roboto Mono', monospace;
            font-size: 1.1rem;
            font-weight: 800;
            display: grid;
            place-items: center;
            box-shadow: 0 3px 8px rgba(0, 74, 173, 0.25);
        }

        .kpo-why-card__graphic {
            height: 76px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-bottom: 1.35rem;
            padding-right: 0.35rem;
        }

        .kpo-why-card__graphic img {
            max-height: 72px;
            max-width: 135px;
            width: auto;
            object-fit: contain;
        }

        .kpo-why-card__title {
            margin: 0 0 0.65rem;
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--kpo-blue);
            line-height: 1.35;
        }

        .kpo-why-card__desc {
            margin: 0;
            font-size: 0.86rem;
            font-weight: 600;
            color: #334155;
            line-height: 1.8;
        }

        .kpo-flow-arrow {
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--kpo-blue);
            padding: 0 0.25rem;
        }

        .kpo-flow-arrow svg {
            width: 24px;
            height: 24px;
            stroke: var(--kpo-blue);
            stroke-width: 3.5;
        }

        /* ── SECTION 2: 主な業務 ── */
        .kpo-tasks-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1.25rem;
        }

        .kpo-task-card {
            background: #ffffff;
            border: 1.5px solid var(--kpo-blue-border);
            border-radius: 14px;
            padding: 1.75rem 1.05rem 1.5rem;
            box-shadow: 0 6px 20px rgba(20, 33, 58, 0.04);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .kpo-task-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 26px rgba(0, 74, 173, 0.1);
        }

        .kpo-task-card__ic {
            height: 66px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.95rem;
        }

        .kpo-task-card__ic img {
            max-width: 64px;
            max-height: 62px;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        .kpo-task-card__title {
            margin: 0 0 0.5rem;
            font-size: 1.02rem;
            font-weight: 800;
            color: var(--kpo-blue);
            line-height: 1.35;
        }

        .kpo-task-card__desc {
            margin: 0 0 0.9rem;
            font-size: 0.8rem;
            font-weight: 600;
            color: var(--kpo-muted);
            line-height: 1.6;
            flex: 1;
        }

        .kpo-task-card__badge {
            margin-top: auto;
            display: inline-block;
            background: var(--kpo-blue-light);
            color: var(--kpo-blue);
            font-weight: 800;
            font-size: 0.74rem;
            padding: 0.25rem 0.7rem;
            border-radius: 6px;
            letter-spacing: 0.01em;
            white-space: nowrap;
        }

        /* ── SECTION 3: 運用フロー ── */
        .kpo-flow-wrap {
            display: flex;
            align-items: stretch;
            justify-content: center;
            gap: 0.75rem;
        }

        .kpo-flow-card {
            flex: 1 1 0;
            position: relative;
            background: #ffffff;
            border: 1.5px solid var(--kpo-blue-border);
            border-radius: 14px;
            padding: 1.6rem 1.1rem 1.45rem;
            box-shadow: 0 6px 20px rgba(20, 33, 58, 0.05);
            display: flex;
            flex-direction: column;
            text-align: center;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .kpo-flow-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 26px rgba(0, 74, 173, 0.1);
        }

        .kpo-flow-card__badge {
            position: absolute;
            top: 1.1rem;
            left: 1.1rem;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--kpo-blue);
            color: #ffffff;
            font-family: 'Roboto Mono', monospace;
            font-size: 1rem;
            font-weight: 800;
            display: grid;
            place-items: center;
            box-shadow: 0 2px 6px rgba(0, 74, 173, 0.2);
        }

        .kpo-flow-card__ic {
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.45rem auto 0.95rem;
        }

        .kpo-flow-card__ic img {
            max-height: 56px;
            max-width: 68px;
            width: auto;
            object-fit: contain;
        }

        .kpo-flow-card__title {
            margin: 0 0 0.55rem;
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--kpo-blue);
            line-height: 1.35;
        }

        .kpo-flow-card__desc {
            margin: 0;
            font-size: 0.82rem;
            font-weight: 600;
            color: #334155;
            line-height: 1.75;
        }

        /* ── SECTION 4: KPOチーム ── */
        .kpo-sec-team {
            background: #ffffff;
            padding-bottom: 5.2rem;
        }

        .kpo-team-grid {
            display: grid;
            grid-template-columns: 1.18fr 0.92fr;
            gap: 3.2rem;
            align-items: center;
        }

        .kpo-team__jp {
            margin: 0 0 0.2rem;
            font-size: clamp(2rem, 3.8vw, 2.85rem);
            font-weight: 900;
            color: var(--kpo-blue);
            line-height: 1.15;
            letter-spacing: -0.01em;
        }

        .kpo-team__en {
            margin: 0 0 1.5rem;
            font-family: "Anonymous Pro", monospace;
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--kpo-blue);
            letter-spacing: 0.02em;
        }

        .kpo-team__desc-wrap {
            margin-bottom: 2.2rem;
        }

        .kpo-team__desc {
            margin: 0 0 0.45rem;
            font-size: 0.9rem;
            font-weight: 700;
            line-height: 1.8;
            color: var(--kpo-blue);
        }

        .kpo-team__features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.2rem 1.1rem;
        }

        .kpo-team-feat {
            display: flex;
            flex-direction: column;
        }

        .kpo-team-feat__ic {
            height: 54px;
            display: flex;
            align-items: center;
            margin-bottom: 0.6rem;
        }

        .kpo-team-feat__ic img {
            max-height: 50px;
            max-width: 60px;
            width: auto;
            object-fit: contain;
        }

        .kpo-team-feat__t {
            margin: 0 0 0.35rem;
            font-size: 0.98rem;
            font-weight: 800;
            color: #0b1a30;
            line-height: 1.3;
        }

        .kpo-team-feat__d {
            margin: 0;
            font-size: 0.76rem;
            font-weight: 600;
            line-height: 1.65;
            color: #334155;
        }

        .kpo-team-media {
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 18px 40px rgba(20, 33, 58, 0.12);
        }

        .kpo-team-media img {
            width: 100%;
            height: auto;
            aspect-ratio: 16 / 10;
            object-fit: cover;
            display: block;
        }

        /* =========================================================
           RESPONSIVE MEDIA QUERIES
           ========================================================= */
        @media (max-width: 1040px) {
            .kpo-why-wrap {
                display: grid;
                grid-template-columns: 1fr;
                gap: 1.4rem;
            }

            .kpo-tasks-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .kpo-flow-wrap {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 1.4rem;
            }

            .kpo-flow-arrow {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .site-header__nav {
                margin-left: 0;
                gap: 1.5rem;
            }

            .kpo-hero {
                background-image:
                    linear-gradient(180deg, #ffffff 0%, rgba(255, 255, 255, 0.95) 48%, rgba(255, 255, 255, 0.82) 100%),
                    url("assets/img/kpo/kpo-hero-bg.png");
                background-position: center top;
                min-height: auto;
                padding-bottom: 2.6rem;
            }

            .kpo-hero__content {
                max-width: 100%;
            }

            .kpo-hero-cards {
                grid-template-columns: 1fr 1fr;
                gap: 0.9rem;
                max-width: 100%;
            }

            .kpo-hero-card + .kpo-hero-card::before {
                display: none;
            }

            .kpo-sec {
                padding: 3.4rem 0 2.8rem;
            }

            .kpo-tasks-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .kpo-team-grid {
                grid-template-columns: 1fr;
                gap: 2.2rem;
            }

            .kpo-team__features {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 580px) {
            .kpo-tasks-grid {
                grid-template-columns: 1fr;
            }

            .kpo-flow-wrap {
                grid-template-columns: 1fr;
            }

            .kpo-hero-cards {
                grid-template-columns: 1fr;
            }

            .kpo-team__features {
                grid-template-columns: 1fr;
                gap: 1.4rem;
            }
        }
    </style>
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="kpo-page" id="top">

        <!-- ── HERO SECTION ── -->
        <section class="kpo-hero">
            <div class="kpo__inner">
                <p class="kpo-bc">
                    <a href="index.php">HOME</a> <span class="kpo-bc__sep">／</span>
                    <a href="service.php">サービス</a> <span class="kpo-bc__sep">／</span>
                    <span class="kpo-bc__current">KPOサービス</span>
                </p>

                <div class="kpo-hero__content">
                    <p class="kpo-hero__eyebrow">KPO</p>
                    <h1 class="kpo-hero__title">KPOサービス</h1>
                    <p class="kpo-hero__subtitle">Knowledge Process Outsourcing</p>
                    <p class="kpo-hero__lead">
                        手書き帳票も、分析業務も。<br>
                        AI×人で、求められた形式まで仕上げる<br>
                        KPOサービス。
                    </p>
                    <p class="kpo-hero__desc">
                        A CAN SOLUTIONSのKPOサービスは、手書き帳票の理解、情報整理、集計、分析、レポート作成、ダッシュボードまで対応。<br>
                        日本語ブリッジと24時間365日体制で、業務理解から出力設計まで柔軟に支援します。
                    </p>
                </div>

                <!-- 4 Hero Feature Items -->
                <div class="kpo-hero-cards">
                    <div class="kpo-hero-card">
                        <div class="kpo-hero-card__ic">
                            <img src="assets/img/kpo/hero-ic1.png" alt="手書き帳票対応" />
                        </div>
                        <p class="kpo-hero-card__title">手書き帳票対応</p>
                        <p class="kpo-hero-card__sub">難解な帳票の理解・分別に対応</p>
                    </div>

                    <div class="kpo-hero-card">
                        <div class="kpo-hero-card__ic">
                            <img src="assets/img/kpo/hero-ic2.png" alt="提案型運用" />
                        </div>
                        <p class="kpo-hero-card__title">提案型運用</p>
                        <p class="kpo-hero-card__sub">動画共有で理解し 出力方法も提案</p>
                    </div>

                    <div class="kpo-hero-card">
                        <div class="kpo-hero-card__ic">
                            <img src="assets/img/kpo/hero-ic3.png" alt="日本語ブリッジ" />
                        </div>
                        <p class="kpo-hero-card__title">日本語ブリッジ</p>
                        <p class="kpo-hero-card__sub">指示理解から現場展開まで対応</p>
                    </div>

                    <div class="kpo-hero-card">
                        <div class="kpo-hero-card__ic">
                            <img src="assets/img/kpo/hero-ic4.png" alt="24時間365日対応" />
                        </div>
                        <p class="kpo-hero-card__title">24時間365日対応</p>
                        <p class="kpo-hero-card__sub">土日・深夜も柔軟に対応</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 1: なぜ A CAN SOLUTIONSのKPOなのか ── -->
        <section class="kpo-sec">
            <div class="kpo__inner">
                <div class="kpo-sec__head">
                    <h2 class="kpo-sec__title">なぜ A CAN SOLUTIONSのKPOなのか</h2>
                </div>

                <div class="kpo-why-wrap">
                    <!-- Card 1 -->
                    <div class="kpo-why-card">
                        <span class="kpo-why-card__badge">01</span>
                        <div class="kpo-why-card__graphic">
                            <img src="assets/img/kpo/why-ic1.png" alt="入力だけで終わらない" />
                        </div>
                        <h3 class="kpo-why-card__title">入力だけで終わらない</h3>
                        <p class="kpo-why-card__desc">AI入力後の確認だけでなく、求められたフォーマットへの整形・レポート化まで対応。</p>
                    </div>

                    <div class="kpo-flow-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- Card 2 -->
                    <div class="kpo-why-card">
                        <span class="kpo-why-card__badge">02</span>
                        <div class="kpo-why-card__graphic">
                            <img src="assets/img/kpo/why-ic2.png" alt="動画共有ですぐ開始" />
                        </div>
                        <h3 class="kpo-why-card__title">動画共有ですぐ開始</h3>
                        <p class="kpo-why-card__desc">開始時に詳細マニュアルがなくても、動画共有で理解し、作業内容と出力結果を提案可能。</p>
                    </div>

                    <div class="kpo-flow-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- Card 3 -->
                    <div class="kpo-why-card">
                        <span class="kpo-why-card__badge">03</span>
                        <div class="kpo-why-card__graphic">
                            <img src="assets/img/kpo/why-ic3.png" alt="日本語と現場運用を橋渡し" />
                        </div>
                        <h3 class="kpo-why-card__title">日本語と現場運用を橋渡し</h3>
                        <p class="kpo-why-card__desc">日本語が堪能なブリッジが指示を理解し、現場へ正確に展開。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 2: 主な業務 ── -->
        <section class="kpo-sec">
            <div class="kpo__inner">
                <div class="kpo-sec__head">
                    <h2 class="kpo-sec__title">主な業務</h2>
                </div>

                <div class="kpo-tasks-grid">
                    <!-- Task 1 -->
                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic">
                            <img src="assets/img/kpo/task-ic1.png" alt="構造物検査データ整備" />
                        </div>
                        <h3 class="kpo-task-card__title">構造物検査データ整備</h3>
                        <p class="kpo-task-card__desc">各種フォーマットへの落とし込み</p>
                        <span class="kpo-task-card__badge">対応実績：200件/年以上</span>
                    </div>

                    <!-- Task 2 -->
                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic">
                            <img src="assets/img/kpo/task-ic2.png" alt="EC価格調査・報告" />
                        </div>
                        <h3 class="kpo-task-card__title">EC価格調査・報告</h3>
                        <p class="kpo-task-card__desc">商品価格データ収集と客先報告</p>
                        <span class="kpo-task-card__badge">実績：10,000件以上</span>
                    </div>

                    <!-- Task 3 -->
                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic">
                            <img src="assets/img/kpo/task-ic3.png" alt="高難度手書き帳票対応" />
                        </div>
                        <h3 class="kpo-task-card__title">高難度手書き帳票対応</h3>
                        <p class="kpo-task-card__desc">登記簿・契約書の理解、分類、報告書作成</p>
                        <span class="kpo-task-card__badge">市町村関連帳票にも対応</span>
                    </div>

                    <!-- Task 4 -->
                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic">
                            <img src="assets/img/kpo/task-ic4.png" alt="アンケート集計・可視化" />
                        </div>
                        <h3 class="kpo-task-card__title">アンケート集計・可視化</h3>
                        <p class="kpo-task-card__desc">集計・分析・ダッシュボード化</p>
                        <span class="kpo-task-card__badge">1案件2,000件〜対応</span>
                    </div>

                    <!-- Task 5 -->
                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic">
                            <img src="assets/img/kpo/task-ic5.png" alt="資料デザイン・PR動画制作" />
                        </div>
                        <h3 class="kpo-task-card__title">資料デザイン・PR動画制作</h3>
                        <p class="kpo-task-card__desc">在ミャンマー日本政府機関向けの資料・動画制作</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 3: 運用フロー ── -->
        <section class="kpo-sec">
            <div class="kpo__inner">
                <div class="kpo-sec__head">
                    <h2 class="kpo-sec__title">運用フロー</h2>
                </div>

                <div class="kpo-flow-wrap">
                    <!-- Flow Step 1 -->
                    <div class="kpo-flow-card">
                        <span class="kpo-flow-card__badge">01</span>
                        <div class="kpo-flow-card__ic">
                            <img src="assets/img/kpo/flow-ic1.png" alt="動画共有で理解" />
                        </div>
                        <h3 class="kpo-flow-card__title">動画共有で理解</h3>
                        <p class="kpo-flow-card__desc">実際の業務動画を共有し、作業内容を視覚的に理解。</p>
                    </div>

                    <div class="kpo-flow-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- Flow Step 2 -->
                    <div class="kpo-flow-card">
                        <span class="kpo-flow-card__badge">02</span>
                        <div class="kpo-flow-card__ic">
                            <img src="assets/img/kpo/flow-ic2.png" alt="日本語ブリッジが整理・指示" />
                        </div>
                        <h3 class="kpo-flow-card__title">日本語ブリッジが整理・指示</h3>
                        <p class="kpo-flow-card__desc">日本語での指示を整理し、現場に正確に展開。</p>
                    </div>

                    <div class="kpo-flow-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- Flow Step 3 -->
                    <div class="kpo-flow-card">
                        <span class="kpo-flow-card__badge">03</span>
                        <div class="kpo-flow-card__ic">
                            <img src="assets/img/kpo/flow-ic3.png" alt="現場オペレーション" />
                        </div>
                        <h3 class="kpo-flow-card__title">現場オペレーション</h3>
                        <p class="kpo-flow-card__desc">経験豊富なオペレーターが作業を実施。</p>
                    </div>

                    <div class="kpo-flow-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>

                    <!-- Flow Step 4 -->
                    <div class="kpo-flow-card">
                        <span class="kpo-flow-card__badge">04</span>
                        <div class="kpo-flow-card__ic">
                            <img src="assets/img/kpo/flow-ic4.png" alt="確認・修正して納品" />
                        </div>
                        <h3 class="kpo-flow-card__title">確認・修正して納品</h3>
                        <p class="kpo-flow-card__desc">品質チェックを行い、データを納品。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 4: KPOチーム ── -->
        <section class="kpo-sec kpo-sec-team">
            <div class="kpo__inner">
                <div class="kpo-team-grid">
                    <!-- Left: Description & Micro-features -->
                    <div class="kpo-team-left">
                        <h2 class="kpo-team__jp">KPOチーム</h2>
                        <p class="kpo-team__en">KPO Team in Myanmar</p>

                        <div class="kpo-team__desc-wrap">
                            <p class="kpo-team__desc">A CAN SOLUTIONSでは、ミャンマーにKPOチームを構築・運用しています。</p>
                            <p class="kpo-team__desc">帳票や各種データを読み取り、単純な入力だけで終わらず、内容を理解・整理し、お客様が求めるフォーマットへの変換、集計・分析、レポート作成まで対応します。</p>
                            <p class="kpo-team__desc">日本語が堪能なブリッジと現場メンバーが連携し、専門性の高い業務を柔軟に支援します。</p>
                        </div>

                        <div class="kpo-team__features">
                            <!-- Feature 1 -->
                            <div class="kpo-team-feat">
                                <div class="kpo-team-feat__ic">
                                    <img src="assets/img/kpo/team-ic1.png" alt="内容理解・データ整形" />
                                </div>
                                <h3 class="kpo-team-feat__t">内容理解・データ整形</h3>
                                <p class="kpo-team-feat__d">手書き帳票や複雑な資料も理解し、必要な形式へ整理・変換。</p>
                            </div>

                            <!-- Feature 2 -->
                            <div class="kpo-team-feat">
                                <div class="kpo-team-feat__ic">
                                    <img src="assets/img/kpo/team-ic2.png" alt="日本語ブリッジ" />
                                </div>
                                <h3 class="kpo-team-feat__t">日本語ブリッジ</h3>
                                <p class="kpo-team-feat__d">日本語の指示を理解し、現場へ正確に展開。</p>
                            </div>

                            <!-- Feature 3 -->
                            <div class="kpo-team-feat">
                                <div class="kpo-team-feat__ic">
                                    <img src="assets/img/kpo/team-ic3.png" alt="分析・レポート対応" />
                                </div>
                                <h3 class="kpo-team-feat__t">分析・レポート対応</h3>
                                <p class="kpo-team-feat__d">集計・分析・ダッシュボード化など、入力後の工程まで対応。</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Myanmar Team Image -->
                    <div class="kpo-team-right">
                        <div class="kpo-team-media">
                            <img src="assets/img/kpo/kpo-team.png" alt="ミャンマーKPOチーム" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>
