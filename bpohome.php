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
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /* ── Page font: Noto Sans JP everywhere (overrides main.css) ── */
        :root {
            --font-jp: "Noto Sans JP", sans-serif;
            --font-mono: "Noto Sans JP", sans-serif;
        }

        body,
        body *,
        input,
        textarea,
        select,
        button {
            font-family: "Noto Sans JP", sans-serif !important;
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
            font-family: "Noto Sans JP", sans-serif;
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
            font-family: "Noto Sans JP", sans-serif;
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
            color: var(--bpo-nav-blue);
            /* font-weight: 800; */
        }

        /* ── HERO SECTION ── */
        .bpo-hero {
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

        /* Lighter, larger title variant (主な業務) */
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
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #1446c8;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 700;
            display: grid;
            place-items: center;
        }

        /* Main line icon (top, centred) */
        .bpo-why-card__icon {
            display: block;
            width: 62px;
            height: 54px;
            margin: 0.35rem auto 0.9rem;
            color: #1f4fd6;
        }

        /* Pale decoration (right, beside the title) */
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
            width: 32px;
            height: 32px;
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

        /* ── Crisp SVG icons (replace low-res PNGs) ── */
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
                        <!-- <img src="assets/img/bpo/why-card-2-deco.png" class="bpo-why-card__deco" alt="" aria-hidden="true"> -->
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

                            <!-- <svg viewBox="0 0 58 52" fill="currentColor" aria-hidden="true">
                                <circle cx="38" cy="15" r="8.5" />
                                <path d="M24 48v-5a14 14 0 0 1 28 0v5z" />
                                <circle cx="20" cy="17" r="9" stroke="#ffffff" stroke-width="2.5" />
                                <path d="M4 48v-4.5A15 15 0 0 1 19 29h2a15 15 0 0 1 15 14.5V48z" stroke="#ffffff" stroke-width="2.5" />
                            </svg> -->
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
                            <!-- <svg viewBox="0 0 58 52" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="5" y="4" width="48" height="32" rx="2.5" />
                                <path d="M25 8.5h8v9h6L29 28 19 17.5h6z" fill="currentColor" stroke-width="1.5" />
                                <path d="M29 36v8M19 48h20" />
                            </svg> -->
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
                            <!-- <svg viewBox="0 0 58 52" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M24 48H10a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h22l8 8v7" />
                                <path d="M14 13h14M14 20h9M14 27h6" />
                                <circle cx="36" cy="32" r="11" fill="#ffffff" />
                                <path d="M31 32l3.5 3.5 6.5-7" />
                                <path d="M44 40l9 9" stroke-width="3.6" />
                            </svg> -->
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
