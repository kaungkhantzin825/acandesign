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

        /* =========================================================
           CONSULTING SERVICES — matched to Canva design page 16
           (1387px-wide artboard; values below are artboard px)
           ========================================================= */
        :root {
            --cs-ink: #001c42;
            --cs-bc: #002548;
            --cs-gold: #a87b4d;
            --cs-gold-bar: #c49b63;
            --cs-card-ink: #003c64;
            --cs-sec-ink: #001c59;
            --cs-cta-ink: #003376;
            --cs-band: #f4f8fc;
            --cs-cta-band: #f8f9fc;
        }

        .cs-page {
            padding-top: 60px;
            margin: 0;
            color: var(--cs-ink);
            font-family: "Noto Sans JP", sans-serif;
            background: #ffffff;
            overflow-x: hidden;
        }

        .cs-page p,
        .cs-page h1,
        .cs-page h2,
        .cs-page h3 {
            margin: 0;
        }

        /* ── HERO ──
           Hero dimensions are expressed in --u (1 artboard px). On desktop --u
           shrinks with the viewport height so the hero fits the first screen. */
        .cs-hero {
            position: relative;
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
            container-type: inline-size;
            background: #dfeaf5 url("assets/img/cs-hero-photo.jpg") no-repeat center top / cover;
        }

        /* The stage holds the artboard at 1387 * --u. --u is the smaller of the
           space available across the hero and the height left below the header,
           so the hero never crops sideways and still fits the first screen. */
        .cs-stage {
            --u: 1px;
            position: relative;
            width: calc(1387 * var(--u));
            height: calc(586 * var(--u));
            margin: 0 auto;
        }

        @media (min-width: 1041px) {
            .cs-hero {
                width: 86%;
            }

            .cs-stage {
                --u: clamp(0.5px, min(calc(84vw / 1387), calc((100vh - 60px) / 586)), 1.25px);
            }

            @supports (container-type: inline-size) {
                .cs-stage {
                    --u: clamp(0.5px, min(calc(100cqw / 1387), calc((100svh - 60px) / 586)), 1.25px);
                }
            }
        }

        .cs-layer {
            position: absolute;
            display: block;
            pointer-events: none;
        }

        /* The white wash, the navy wedge and the two hairlines are drawn in CSS/SVG
           rather than as bitmaps, so they stay crisp at any hero size. */
        .cs-layer--white {
            left: 0;
            top: 0;
            width: calc(770 * var(--u));
            height: 100%;
            background: linear-gradient(90deg, #ffffff 0%, #ffffff 68%, rgba(255, 255, 255, 0.85) 80%, rgba(255, 255, 255, 0.15) 97%, rgba(255, 255, 255, 0) 100%);
        }

        .cs-layer--map { left: calc(510 * var(--u)); top: 0; width: calc(530 * var(--u)); height: calc(268 * var(--u)); }

        .cs-layer--band {
            left: calc(601 * var(--u));
            top: calc(397 * var(--u));
            width: calc(785 * var(--u));
            height: calc(188 * var(--u));
            background: linear-gradient(90deg, rgba(0, 60, 124, 0) 0%, rgba(0, 64, 129, 0.62) 42%, rgba(1, 74, 139, 0.95) 78%, #014c8d 100%);
            clip-path: polygon(0 100%, 100% 7%, 100% 100%);
        }

        .cs-layer--arc { left: calc(1144 * var(--u)); top: calc(158 * var(--u)); width: calc(199 * var(--u)); height: calc(69 * var(--u)); }
        .cs-layer--swoosh { left: calc(1234 * var(--u)); top: calc(544 * var(--u)); width: calc(138 * var(--u)); height: calc(28 * var(--u)); }
        .cs-layer--figure { left: calc(430 * var(--u)); top: calc(287 * var(--u)); width: calc(500 * var(--u)); height: calc(472 * var(--u)); }

        .cs-layer--arc path,
        .cs-layer--swoosh path {
            fill: none;
            vector-effect: non-scaling-stroke;
        }

        .cs-hero__content {
            position: absolute;
            left: calc(58 * var(--u));
            top: calc(17 * var(--u));
            z-index: 3;
        }

        .cs-bc {
            margin-left: calc(2 * var(--u)) !important;
            font-size: calc(14.2 * var(--u));
            font-weight: 500;
            line-height: calc(19.3 * var(--u));
            color: var(--cs-bc);
        }

        .cs-bc a {
            color: var(--cs-bc);
            text-decoration: none;
        }

        .cs-bc a:hover {
            text-decoration: underline;
        }

        .cs-hero__eyebrow {
            margin-top: calc(28 * var(--u)) !important;
            margin-left: calc(17 * var(--u)) !important;
            font-size: calc(17.3 * var(--u));
            font-weight: 700;
            line-height: calc(23.4 * var(--u));
        }

        .cs-hero__title {
            margin-top: calc(5 * var(--u)) !important;
            font-size: calc(61.9 * var(--u));
            font-weight: 400;
            line-height: calc(80.1 * var(--u));
            letter-spacing: 0;
        }

        .cs-hero__en {
            margin-top: calc(15 * var(--u)) !important;
            font-size: calc(29.2 * var(--u));
            font-weight: 400;
            line-height: calc(40.6 * var(--u));
            color: var(--cs-gold);
        }

        .cs-hero__lead {
            margin-top: calc(47 * var(--u)) !important;
            font-size: calc(18.4 * var(--u));
            font-weight: 400;
            line-height: calc(28.4 * var(--u));
        }

        /* Arched tagline, stacked names and band copy */
        .cs-hero__arch {
            position: absolute;
            z-index: 3;
            top: calc(62 * var(--u));
            left: calc(1141 * var(--u));
            width: calc(220 * var(--u));
            font-size: calc(23.9 * var(--u));
            font-weight: 400;
            line-height: calc(32.8 * var(--u));
            text-align: right;
        }

        .cs-hero__arch span {
            display: block;
            transform-origin: right center;
            /* transform: translateX(calc(-38 * var(--u))) rotate(-15deg) */
            text-align: center;
            
        }

        .cs-hero__arch span:nth-child(1) { transform: translateX(calc(-38 * var(--u))) rotate(-10deg); }
        .cs-hero__arch span:nth-child(2) { transform: translateX(calc(-31 * var(--u))) rotate(-10deg); }
        .cs-hero__arch span:nth-child(3) { transform: translateX(calc(-31 * var(--u))) rotate(-10deg); }

        .cs-hero__words {
            position: absolute;
            z-index: 3;
            left: calc(1203 * var(--u));
            top: calc(198 * var(--u));
            font-size: calc(18.4 * var(--u));
            font-weight: 400;
            line-height: calc(25.5 * var(--u));
            margin-top: 10px;
            
        }

        .cs-hero__words span {
            display: block;
        }

        .cs-hero__words span:nth-child(1) { margin-left: calc(30 * var(--u));
        
        transform: translateX(calc(-31 * var(--u))) rotate(-10deg);
    }
        .cs-hero__words span:nth-child(2) { margin-left: calc(30 * var(--u));
        
        transform: translateX(calc(-31 * var(--u))) rotate(-10deg);
    }
        .cs-hero__words span:nth-child(3) { margin-left: calc(30 * var(--u));
        
        transform: translateX(calc(-31 * var(--u))) rotate(-10deg);
    }
        .cs-hero__words span:nth-child(4) { margin-left: calc(30 * var(--u));
        transform: translateX(calc(-31 * var(--u))) rotate(-10deg);
    }

        .cs-hero__bandtext {
            position: absolute;
            z-index: 3;
            left: calc(1086 * var(--u));
            top: calc(496 * var(--u));
            font-size: calc(18.4 * var(--u));
            font-weight: 400;
            line-height: calc(28.4 * var(--u));
            color: #ffffff;
        }

        /* ── FEATURE CARDS ── */
        .cs-cards {
            background: var(--cs-band);
            padding: 17px 0 18px;
        }

        .cs-cards__inner {
            max-width: 1387px;
            margin: 0 auto;
            padding: 0 48px 0 48px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .cs-fcard {
            position: relative;
            height: 221px;
            padding: 50px 6px 0 154px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(20, 50, 100, 0.08);
            color: var(--cs-card-ink);
            text-decoration: none;
            display: block;
            transition: transform 0.22s ease, box-shadow 0.22s ease;
        }

        .cs-fcard:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 26px rgba(20, 50, 100, 0.14);
        }

        .cs-fcard__circle {
            position: absolute;
            left: 12px;
            top: 28px;
            width: 126px;
            height: 120px;
            border-radius: 50%;
            background: #eef3f9;
            display: grid;
            place-items: center;
        }

        .cs-fcard__circle img {
            display: block;
            object-fit: contain;
        }

        .cs-fcard__title {
            display: block;
            font-size: 23.1px;
            font-weight: 500;
            line-height: 31.4px;
            white-space: nowrap;
        }

        .cs-fcard__desc {
            display: block;
            margin-top: 19px !important;
            font-size: 16px;
            font-weight: 400;
            line-height: 25.3px;
        }

        .cs-fcard:nth-child(2) .cs-fcard__title,
        .cs-fcard:nth-child(3) .cs-fcard__title {
            font-size: 22.1px;
            line-height: 30.5px;
        }

        .cs-fcard:nth-child(2) .cs-fcard__desc {
            font-size: 13.6px;
            line-height: 21.3px;
        }

        .cs-fcard:nth-child(3) .cs-fcard__desc {
            font-size: 15.6px;
            line-height: 24.3px;
        }

        .cs-fcard__arrow {
            position: absolute;
            right: 20px;
            bottom: 19px;
            width: 40px;
            height: 28px;
            object-fit: contain;
        }

        /* ── REASONS / ACHIEVEMENTS ── */
        .cs-sec {
            padding: 53px 0 6px;
        }

        .cs-sec__inner {
            max-width: 1387px;
            margin: 0 auto;
            padding: 0 52px 0 51px;
            display: grid;
            grid-template-columns: 667fr 617fr;
            color: var(--cs-sec-ink);
        }

        .cs-col__head {
            position: relative;
            padding-left: 53px;
            min-height: 91px;
        }

        .cs-col__bar {
            position: absolute;
            left: 0;
            top: 0;
            width: 6px;
            height: 91px;
            border-radius: 3px;
            background: var(--cs-gold-bar);
        }

        .cs-col__jp {
            font-size: 33.7px;
            font-weight: 700;
            line-height: 46.4px;
        }

        .cs-col__en {
            margin-top: 4px !important;
            font-size: 19.8px;
            font-weight: 500;
            line-height: 27.6px;
        }

        .cs-col--right .cs-col__head {
            padding-left: 50px;
        }

        .cs-col--right .cs-col__jp {
            font-size: 34.2px;
            line-height: 47.1px;
        }

        .cs-col--right .cs-col__en {
            margin-top: 3px !important;
            font-size: 20.2px;
            line-height: 27.5px;
        }

        /* Left column items */
        .cs-reason-lead {
            margin-top: 7px;
            display: flex;
            align-items: center;
            gap: 19px;
        }

        .cs-reason-lead img {
            flex: 0 0 auto;
            width: 65px;
            height: 51px;
            object-fit: contain;
        }

        .cs-reason-lead p {
            font-size: 24.4px;
            font-weight: 500;
            line-height: 33.1px;
        }

        .cs-rule {
            height: 1px;
            margin: 25px 12px 0 0;
            background: linear-gradient(90deg, rgba(190, 205, 220, 0) 0%, #c8d5e2 12%, #c8d5e2 88%, rgba(190, 205, 220, 0) 100%);
        }

        .cs-checks {
            margin-top: 8px;
            display: flex;
            flex-direction: column;
        }

        .cs-check {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .cs-check img {
            flex: 0 0 auto;
            width: 52px;
            height: 50px;
            object-fit: contain;
        }

        .cs-check p {
            font-size: 18.8px;
            font-weight: 500;
            line-height: 25.4px;
        }

        /* Right column items */
        .cs-achieves {
            margin-top: -6px;
        }

        .cs-achieve {
            display: flex;
            align-items: center;
            gap: 17px;
        }

        .cs-achieve__ic {
            flex: 0 0 auto;
            width: 66px;
            height: 68px;
            border-radius: 10px;
            background: #eef1f5;
            display: grid;
            place-items: center;
        }

        .cs-achieve__ic img {
            display: block;
            width: 40px;
            height: 38px;
            object-fit: contain;
        }

        .cs-achieve p {
            font-size: 18.1px;
            font-weight: 500;
            line-height: 25.4px;
        }

        .cs-achieve--2 p {
            font-size: 17.1px;
            line-height: 23.2px;
        }

        .cs-achieves .cs-rule {
            margin: 3px 0 3px 83px;
        }

        /* ── CTA ── */
        .cs-cta {
            margin-top: 6px;
            padding: 4px 0 8px;
            background: var(--cs-cta-band);
        }

        .cs-cta__inner {
            max-width: 1387px;
            margin: 0 auto;
            padding: 0 52px 0 31px;
            min-height: 242px;
            display: grid;
            grid-template-columns: 432px minmax(0, 1fr) 347px;
            align-items: center;
            gap: 0;
        }

        .cs-cta__photo {
            width: 432px;
            height: 234px;
            border-radius: 12px;
            object-fit: cover;
        }

        .cs-cta__title {
            font-size: 29px;
            font-weight: 500;
            line-height: 39.6px;
            color: var(--cs-cta-ink);
        }

        .cs-cta__sub {
            margin-top: 22px !important;
            font-size: 17.1px;
            font-weight: 500;
            line-height: 26.4px;
            color: var(--cs-cta-ink);
        }

        .cs-btns {
            margin-top: -3px;
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .cs-btn {
            position: relative;
            height: 56px;
            border-radius: 28px;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 0 24px 0 30px;
            font-size: 16.3px;
            font-weight: 500;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .cs-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(0, 40, 110, 0.18);
        }

        .cs-btn img {
            display: block;
            object-fit: contain;
        }

        .cs-btn__ic {
            width: 36px;
            height: 34px;
        }

        .cs-btn__arrow {
            width: 36px;
            height: 20px;
            margin-left: auto;
        }

        .cs-btn--primary {
            background: #0a3a78;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(10, 58, 120, 0.25);
        }

        .cs-btn--ghost {
            background: #ffffff;
            color: var(--cs-cta-ink);
            border: 1.5px solid #e3b878;
            box-shadow: 0 4px 12px rgba(180, 140, 80, 0.16);
        }

        /* =========================================================
           RESPONSIVE
           ========================================================= */
        @media (max-width: 1240px) {
            .cs-cards__inner {
                padding: 0 24px;
            }

            .cs-fcard {
                padding: 44px 24px 0 150px;
            }

            .cs-fcard__title,
            .cs-fcard:nth-child(2) .cs-fcard__title,
            .cs-fcard:nth-child(3) .cs-fcard__title {
                font-size: 20px;
                line-height: 28px;
                white-space: normal;
            }

            .cs-fcard__desc,
            .cs-fcard:nth-child(2) .cs-fcard__desc,
            .cs-fcard:nth-child(3) .cs-fcard__desc {
                font-size: 14.5px;
                line-height: 23px;
            }

            .cs-fcard__desc br {
                display: none;
            }

            .cs-sec__inner {
                padding: 0 24px;
                gap: 0 28px;
            }

            .cs-col__jp,
            .cs-col--right .cs-col__jp {
                font-size: 27px;
                line-height: 38px;
            }

            .cs-reason-lead p {
                font-size: 20px;
                line-height: 29px;
            }

            .cs-check p,
            .cs-achieve p,
            .cs-achieve--2 p {
                font-size: 15.5px;
                line-height: 23px;
            }

            .cs-cta__inner {
                padding: 0 24px;
                grid-template-columns: 330px minmax(0, 1fr) 300px;
            }

            .cs-cta__photo {
                width: 330px;
                height: 180px;
            }

            .cs-cta__title {
                font-size: 24px;
                line-height: 34px;
            }

            .cs-btn {
                padding: 0 18px 0 22px;
                font-size: 15px;
            }
        }

        @media (max-width: 1040px) {
            /* Tablet and below: the artboard becomes a normal stacked block.
               Margins need !important here because `.cs-page p` outranks
               these class selectors. */
            .cs-hero {
                width: 100%;
                height: auto;
                min-height: 0;
                background-position: 72% center;
            }

            .cs-stage {
                position: relative;
                width: auto;
                height: auto;
                padding: 30px 0 34px;
                background: linear-gradient(96deg, rgba(255, 255, 255, 0.97) 0%, rgba(255, 255, 255, 0.93) 42%, rgba(255, 255, 255, 0.6) 66%, rgba(255, 255, 255, 0.18) 100%);
            }

            .cs-layer {
                display: none;
            }

            /* Keep the illustration — it anchors the right side of the photo */
            .cs-layer--figure {
                display: block;
                position: absolute;
                left: auto;
                top: auto;
                right: 8px;
                bottom: 0;
                width: min(31%, 310px);
                height: auto;
                z-index: 1;
            }

            .cs-hero__content {
                position: static;
                max-width: min(66%, 640px);
                padding: 0 28px;
            }

            .cs-bc {
                margin: 0 !important;
                font-size: 13.5px;
                line-height: 19px;
            }

            .cs-hero__eyebrow {
                margin: 20px 0 0 !important;
                font-size: 15.5px;
                line-height: 22px;
            }

            .cs-hero__title {
                margin: 8px 0 0 !important;
                font-size: clamp(27px, 4.3vw, 44px);
                line-height: 1.45;
            }

            .cs-hero__en {
                margin: 14px 0 0 !important;
                font-size: clamp(17px, 2.3vw, 25px);
                line-height: 1.4;
            }

            .cs-hero__lead {
                margin: 22px 0 0 !important;
                font-size: 14.5px;
                line-height: 25px;
            }

            .cs-hero__arch {
                position: static;
                width: auto;
                margin: 24px 28px 0 !important;
                font-size: 17px;
                font-weight: 500;
                line-height: 26px;
                text-align: left;
            }

            .cs-hero__arch span,
            .cs-hero__arch span:nth-child(1),
            .cs-hero__arch span:nth-child(2),
            .cs-hero__arch span:nth-child(3) {
                display: inline;
                transform: none;
                font-size: inherit;
            }

            .cs-hero__words {
                display: none;
            }

            .cs-hero__bandtext {
                position: static;
                display: inline-block;
                width: auto;
                margin: 18px 28px 0 !important;
                padding: 13px 22px;
                border-radius: 12px;
                background: #0a3a78;
                box-shadow: 0 6px 16px rgba(10, 58, 120, 0.22);
                font-size: 14.5px;
                line-height: 24px;
                text-align: left;
            }

            .cs-cards__inner {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 16px;
            }

            .cs-fcard {
                height: auto;
                padding: 28px 20px 28px 150px;
                min-height: 178px;
            }

            /* CTA: photo on the left, copy above the buttons on the right */
            .cs-cta__inner {
                grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
                grid-template-rows: auto auto;
                align-items: center;
                justify-items: start;
                gap: 22px 32px;
                padding: 30px 24px;
            }

            .cs-cta__photo {
                grid-column: 1;
                grid-row: 1 / span 2;
                width: 100%;
                max-width: 432px;
                height: auto;
                aspect-ratio: 432 / 234;
            }

            .cs-cta__text {
                grid-column: 2;
                grid-row: 1;
            }

            .cs-btns {
                grid-column: 2;
                grid-row: 2;
                width: 100%;
                max-width: 347px;
            }
        }

        @media (max-width: 880px) {
            .cs-sec__inner {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }

        @media (max-width: 760px) {
            .cs-cards__inner {
                grid-template-columns: 1fr;
            }

            /* Stacked CTA is centred in the column */
            .cs-cta__inner {
                grid-template-columns: 1fr;
                justify-items: center;
                gap: 24px;
                padding: 30px 20px;
            }

            .cs-cta__photo,
            .cs-cta__text,
            .cs-btns {
                grid-column: 1;
                grid-row: auto;
                margin-left: auto;
                margin-right: auto;
            }

            .cs-cta__text {
                text-align: center;
            }
        }

        @media (max-width: 780px) {
            .cs-hero {
                background-position: 64% center;
            }

            .cs-stage {
                background: linear-gradient(180deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.9) 62%, rgba(255, 255, 255, 0.72) 100%);
            }

            .cs-layer--figure {
                display: none;
            }

            .cs-hero__content {
                max-width: 100%;
                padding: 0 20px;
            }

            .cs-hero__arch {
                margin: 20px 20px 0 !important;
            }

            .cs-hero__bandtext {
                margin: 16px 20px 0 !important;
            }
        }

        @media (max-width: 600px) {
            .cs-stage {
                padding: 24px 0 28px;
            }

            .cs-hero__title {
                line-height: 1.4;
            }

            .cs-hero__lead {
                margin-top: 18px !important;
            }

            .cs-hero__lead br {
                display: none;
            }

            .cs-fcard {
                padding: 120px 20px 24px 20px;
                text-align: center;
            }

            .cs-fcard__circle {
                left: 50%;
                transform: translateX(-50%);
                top: 22px;
                width: 92px;
                height: 88px;
            }

            .cs-fcard__circle img {
                transform: scale(0.72);
            }

            .cs-fcard__arrow {
                right: 16px;
                bottom: 12px;
            }

            .cs-reason-lead img,
            .cs-check img {
                width: 40px;
                height: 40px;
            }

            .cs-achieve__ic {
                width: 52px;
                height: 54px;
            }

            .cs-achieve__ic img {
                width: 30px;
                height: 28px;
            }

            .cs-achieves .cs-rule {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="cs-page" id="top">

        <!-- ── HERO ── -->
        <section class="cs-hero">
            <div class="cs-stage">
                <span class="cs-layer cs-layer--white" aria-hidden="true"></span>
                <img class="cs-layer cs-layer--map" src="assets/img/cs-hero-map.png" alt="" />
                <span class="cs-layer cs-layer--band" aria-hidden="true"></span>
                <svg class="cs-layer cs-layer--arc" viewBox="0 0 92 32" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M7.4 28.8 Q44.3 13 88 9.3" stroke="rgba(15,56,119,0.32)" stroke-width="1.4" stroke-linecap="round" />
                </svg>
                <img class="cs-layer cs-layer--figure" src="assets/img/cs-hero-figure.png" alt="ミャンマーの伝統衣装を着たキャラクター" />
                <svg class="cs-layer cs-layer--swoosh" viewBox="0 0 64 13" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M2 8 Q32 5.4 62 7.2" stroke="rgba(249,227,183,0.6)" stroke-width="1.3" stroke-linecap="round" />
                </svg>

                <div class="cs-hero__content">
                    <p class="cs-bc">
                        <a href="index.php">HOME</a> ／ <a href="service.php">サービス</a> ／ <span>ミャンマー進出支援</span>
                    </p>
                    <p class="cs-hero__eyebrow">Consulting services</p>
                    <h1 class="cs-hero__title">
                        ミャンマーでの<br>
                        ビジネスの可能性を、<br>
                        ともに実現する。
                    </h1>
                    <p class="cs-hero__en">Support for expansion into Myanmar</p>
                    <p class="cs-hero__lead">
                        ミャンマーでビジネスを行う為のノウハウがある弊社が<br>
                        戦略的パートナーとしてミャンマーでの事業を強力に支援します。<br>
                        ちょっとしたアイデアでも大丈夫。<br>
                        「何かミャンマーでやってみたい」を、私たちがカタチにします。
                    </p>
                </div>

                <p class="cs-hero__arch">
                    <span>つながる、</span>
                    <span>ひろがる、</span>
                    <span>ミャンマーの未来へ</span>
                </p>

                <p class="cs-hero__words">
                    <span>People</span>
                    <span>Business</span>
                    <span>A Brighter</span>
                    <span>Tomorrow</span>
                </p>

                <p class="cs-hero__bandtext">
                    アジアの、その先へ<br>
                    ビジネスの新しい可能性を
                </p>
            </div>
        </section>

        <!-- ── FEATURE CARDS ── -->
        <section class="cs-cards">
            <div class="cs-cards__inner">
                <a class="cs-fcard" href="#reasons">
                    <span class="cs-fcard__circle"><img src="assets/img/cs-card-ic1.png" alt="" width="60" height="74" /></span>
                    <span class="cs-fcard__title">ミャンマー進出支援</span>
                    <span class="cs-fcard__desc">会社設立から事業立ち上げまで<br>現地の実情に即したサポートで<br>スムーズな進出を実現します。</span>
                    <img class="cs-fcard__arrow" src="assets/img/cs-card-arrow.png" alt="" />
                </a>

                <a class="cs-fcard" href="#reasons">
                    <span class="cs-fcard__circle"><img src="assets/img/cs-card-ic2.png" alt="" width="78" height="65" /></span>
                    <span class="cs-fcard__title">人材確保・育成</span>
                    <span class="cs-fcard__desc">ミャンマー人材の採用・育成を通じ<br>て、貴社の事業の成長を支援します。</span>
                    <img class="cs-fcard__arrow" src="assets/img/cs-card-arrow.png" alt="" />
                </a>

                <a class="cs-fcard" href="#achievements">
                    <span class="cs-fcard__circle"><img src="assets/img/cs-card-ic3.png" alt="" width="88" height="56" /></span>
                    <span class="cs-fcard__title">現地ネットワーク活用</span>
                    <span class="cs-fcard__desc">長年の現地ネットワークを活かし、<br>信頼できるパートナー・機関と<br>つなぎます。</span>
                    <img class="cs-fcard__arrow" src="assets/img/cs-card-arrow.png" alt="" />
                </a>
            </div>
        </section>

        <!-- ── REASONS / ACHIEVEMENTS ── -->
        <section class="cs-sec">
            <div class="cs-sec__inner">
                <!-- Left: 弊社サービス導入のきっかけ -->
                <div class="cs-col cs-col--left" id="reasons">
                    <div class="cs-col__head">
                        <span class="cs-col__bar" aria-hidden="true"></span>
                        <h2 class="cs-col__jp">弊社サービス導入のきっかけ</h2>
                        <p class="cs-col__en">Reason for introducing the service</p>
                    </div>

                    <div class="cs-reason-lead">
                        <img src="assets/img/cs-icon-person.png" alt="" />
                        <p>ミャンマー（東南アジア）事業を管理できる<br>人材を確保し育てたい</p>
                    </div>

                    <div class="cs-rule" aria-hidden="true"></div>

                    <div class="cs-checks">
                        <div class="cs-check">
                            <img src="assets/img/cs-icon-check.png" alt="" />
                            <p>ミャンマーでの会社設立を支援してほしい</p>
                        </div>
                        <div class="cs-check">
                            <img src="assets/img/cs-icon-check.png" alt="" />
                            <p>委託先のミャンマー事業撤退で、リソースの確保に困っている</p>
                        </div>
                        <div class="cs-check">
                            <img src="assets/img/cs-icon-check.png" alt="" />
                            <p>ミャンマー人材を日本国内の事業に導入したい</p>
                        </div>
                    </div>
                </div>

                <!-- Right: 実績 -->
                <div class="cs-col cs-col--right" id="achievements">
                    <div class="cs-col__head">
                        <span class="cs-col__bar" aria-hidden="true"></span>
                        <h2 class="cs-col__jp">実績</h2>
                        <p class="cs-col__en">Achievements</p>
                    </div>

                    <div class="cs-achieves">
                        <div class="cs-achieve">
                            <span class="cs-achieve__ic"><img src="assets/img/cs-ach-ic1.png" alt="" /></span>
                            <p>ミャンマー人材（IT）紹介とビザ取得</p>
                        </div>
                        <div class="cs-rule" aria-hidden="true"></div>
                        <div class="cs-achieve cs-achieve--2">
                            <span class="cs-achieve__ic"><img src="assets/img/cs-ach-ic2.png" alt="" /></span>
                            <p>外国人材の導入に向けた、適正な送り出し機関の紹介とアテンド</p>
                        </div>
                        <div class="cs-rule" aria-hidden="true"></div>
                        <div class="cs-achieve">
                            <span class="cs-achieve__ic"><img src="assets/img/cs-ach-ic3.png" alt="" /></span>
                            <p>電子部品加工工場向け、作業者のリクルーティング</p>
                        </div>
                        <div class="cs-rule" aria-hidden="true"></div>
                        <div class="cs-achieve">
                            <span class="cs-achieve__ic"><img src="assets/img/cs-ach-ic4.png" alt="" /></span>
                            <p>商店立ち上げ（洋服販売業）などの事業開始支援</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── CTA ── -->
        <section class="cs-cta">
            <div class="cs-cta__inner">
                <img class="cs-cta__photo" src="assets/img/cs-cta-photo.png" alt="" width="432" height="234" />

                <div class="cs-cta__text">
                    <p class="cs-cta__title">ミャンマーでのビジネス展開を、<br>確かなパートナーとともに。</p>
                    <p class="cs-cta__sub">まずはお気軽にご相談ください。<br>貴社の課題に合わせた最適なご提案をいたします。</p>
                </div>

                <div class="cs-btns">
                    <a class="cs-btn cs-btn--primary" href="contectus.php">
                        <img class="cs-btn__ic" src="assets/img/cs-btn-mail.png" alt="" />
                        お問い合わせ
                        <img class="cs-btn__arrow" src="assets/img/cs-btn-arrow-white.png" alt="" />
                    </a>
                    <a class="cs-btn cs-btn--ghost" href="download.php">
                        <img class="cs-btn__ic" src="assets/img/cs-btn-dl.png" alt="" />
                        資料ダウンロード
                        <img class="cs-btn__arrow" src="assets/img/cs-btn-arrow-gold.png" alt="" />
                    </a>
                </div>
            </div>
        </section>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>
