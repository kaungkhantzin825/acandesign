<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="AI開発やデータ活用を支える高品質なデータ作成・評価サービスを提供します。データの収集・アノテーションからAIモデルの評価まで、AI開発の全プロセスを支援します。 - A CAN SOLUTIONS" />
    <meta name="theme-color" content="#ffffff" />
    <title>AI・データサービス | A CAN SOLUTIONS</title>
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
            --ai-blue: #0038a8;
            --ai-blue-dark: #002b66;
            --ai-blue-light: #1d4ed8;
            --ai-bg-soft: #f2f6fd;
            --ai-card-bg: #f2f6fd;
            --ai-text: #001524;
            --ai-muted: #5b6472;
            --container-max: 1200px;
        }

        body {
            font-family: "Noto Sans JP", sans-serif;
            color: var(--ai-text);
            margin: 0;
            padding: 0;
            background: #fff;
            line-height: 1.7;
        }

        .ai-page {
            padding-top: 60px; /* Offset for fixed header */
        }

        .ai-inner {
            width: 100%;
            max-width: var(--container-max);
            margin: 0 auto;
            padding: 0 1.25rem;
        }

        /* ── Breadcrumbs ── */
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
            color: var(--ai-blue);
        }

        /* ── Header Hero Section (Pure White Left + Seamless Right Graphic) ── */
        .ai-hero {
            position: relative;
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

        .ai-hero__content {
            max-width: 520px;
            position: relative;
            z-index: 2;
        }

        .ai-hero__title {
            font-size: clamp(2.2rem, 4vw, 3.2rem);
            font-weight: 900;
            color: var(--ai-blue);
            margin: 0.6rem 0 0.2rem;
            line-height: 1.25;
            letter-spacing: -0.01em;
        }

        .ai-hero__subtitle {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--ai-blue-light);
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

        /* ── Common Section Shells ── */
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
            color: var(--ai-blue);
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

        /* ── Section 1: 4 Feature Pillars Box ── */
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
            color: var(--ai-blue);
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

        /* ── Section 2: Main Services (3 Cards with Inset Image & Badge) ── */
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
            color: var(--ai-blue);
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
            color: var(--ai-blue);
            font-weight: bold;
        }

        /* ── Section 3: Workflow Process (5 Steps) ── */
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
            color: var(--ai-blue);
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

        /* ── Responsiveness ── */
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
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="ai-page" id="top">

        <!-- HERO SECTION (Pure White Left + Right Seamless Banner Graphic) -->
        <section class="ai-hero">
            <div class="ai-inner">
                <div class="ai-hero__content">
                    <!-- Breadcrumbs -->
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
                    <!-- Feature 1 -->
                    <div class="ai-fcard">
                        <div class="ai-fcard__ic" aria-hidden="true">
                            <img src="assets/img/dd-1.png" alt="高品質なデータ作成" style="width: 44px; height: 44px;" />
                        </div>
                        <h3 class="ai-fcard__title">高品質なデータ作成</h3>
                        <p class="ai-fcard__desc">専門のアノテーターが正確かつ一貫性のあるデータを作成します。</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="ai-fcard">
                        <div class="ai-fcard__ic" aria-hidden="true">
                            <img src="assets/img/dd-2.png" alt="多様なデータ形式に対応" style="width: 44px; height: 44px;" />
                        </div>
                        <h3 class="ai-fcard__title">多様なデータ形式に対応</h3>
                        <p class="ai-fcard__desc">画像・テキスト・音声・動画など、様々なデータ形式に対応します。</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="ai-fcard">
                        <div class="ai-fcard__ic" aria-hidden="true">
                            <img src="assets/img/dd-3.png" alt="厳格な品質管理" style="width: 44px; height: 44px;" />
                        </div>
                        <h3 class="ai-fcard__title">厳格な品質管理</h3>
                        <p class="ai-fcard__desc">日本品質の理解と複数チェックで、高い品質を保証します。</p>
                    </div>

                    <!-- Feature 4 -->
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
                    <!-- Service Card 1 -->
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

                    <!-- Service Card 2 -->
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

                    <!-- Service Card 3 -->
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
                        <!-- Step 1 -->
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

                        <!-- Step 2 -->
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

                        <!-- Step 3 -->
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

                        <!-- Step 4 -->
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

                        <!-- Step 5 -->
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

    <?php include 'footer.php'; ?>

</body>

</html>