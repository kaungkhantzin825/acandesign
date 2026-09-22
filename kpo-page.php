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
           KPO PAGE STYLES — matched to Canva design page 15
           (1387px-wide artboard; values below are artboard px)
           ========================================================= */
        :root {
            --kpo-navy: #000048;
            --kpo-ink: #002548;
            --kpo-vivid: #0025e8;
            --kpo-blue: #004aad;
            --kpo-link: #0a66c2;
            --kpo-tasks-title: #2249d0;
            --kpo-team: #0066ff;
            --kpo-badge: #002be8;
            --kpo-gray: #545454;
            --kpo-rule: #95a5bd;
            --kpo-card-border: #e2efff;
            --kpo-band: #f9fbff;
        }

        .kpo-page {
            padding-top: 60px;
            color: var(--kpo-ink);
            font-family: "Noto Sans JP", sans-serif;
            background: #ffffff;
            overflow-x: hidden;
        }

        .kpo-page p,
        .kpo-page h1,
        .kpo-page h2,
        .kpo-page h3 {
            margin: 0;
        }

        .kpo__inner {
            max-width: 1387px;
            margin: 0 auto;
            padding: 0 37px;
        }

        /* ── HERO ──
           Every hero dimension is expressed in --u (1 artboard px). On desktop,
           --u shrinks with the viewport height so the whole hero, including the
           feature bar, fits on the first screen below the 60px header. */
        .kpo-hero {
            --u: 1px;
        }

        @media (min-width: 1041px) {
            .kpo-hero {
                --u: clamp(0.62px, calc((100vh - 60px) / 701), 1px);
            }

            @supports (height: 100svh) {
                .kpo-hero {
                    --u: clamp(0.62px, calc((100svh - 60px) / 701), 1px);
                }
            }
        }

        .kpo-hero {
            position: relative;
            min-height: calc(701 * var(--u));
            background: #ffffff url("assets/img/kpo/kpo-hero-bg.png") no-repeat center top / cover;
            width: 86%;
            margin: 0 auto;
        }

        .kpo-hero__inner {
            position: relative;
            max-width: 1387px;
            min-height: calc(701 * var(--u));
            margin: 0 auto;
            padding: calc(20 * var(--u)) 0 calc(15 * var(--u));
            display: flex;
            flex-direction: column;
        }

        .kpo-bc {
            margin-left: calc(60 * var(--u)) !important;
            font-size: calc(14 * var(--u));
            font-weight: 500;
            line-height: calc(19 * var(--u));
            color: var(--kpo-ink);
            display: flex;
            align-items: center;
            gap: 0.3em;
        }

        .kpo-bc a {
            color: var(--kpo-ink);
            text-decoration: none;
        }

        .kpo-bc a:hover {
            color: var(--kpo-link);
            text-decoration: underline;
        }

        .kpo-bc__current {
            color: var(--kpo-link);
        }

        .kpo-hero__content {
            position: relative;
            z-index: 2;
            margin-left: calc(59 * var(--u));
            margin-top: calc(36 * var(--u));
            max-width: calc(560 * var(--u));
        }

        .kpo-hero__eyebrow {
            font-size: calc(26 * var(--u));
            font-weight: 700;
            line-height: calc(36 * var(--u));
            color: var(--kpo-vivid);
        }

        .kpo-hero__title {
            margin-top: -6px !important;
            font-size: calc(63.5 * var(--u));
            font-weight: 700;
            line-height: calc(88 * var(--u));
            color: var(--kpo-navy);
            letter-spacing: 0;
        }

        .kpo-hero__subtitle {
            margin-top: -5px !important;
            font-size: calc(22.4 * var(--u));
            font-weight: 400;
            line-height: calc(31 * var(--u));
            color: var(--kpo-ink);
        }

        .kpo-hero__panel {
            margin: calc(28 * var(--u)) 0 0 -14px;
            width: calc(518 * var(--u));
            padding: calc(9 * var(--u)) calc(14 * var(--u)) calc(26 * var(--u)) calc(15 * var(--u));
            background: rgba(255, 255, 255, 0.6);
            border-radius: calc(12 * var(--u));
            -webkit-backdrop-filter: blur(calc(4 * var(--u)));
            backdrop-filter: blur(calc(4 * var(--u)));
        }

        .kpo-hero__lead {
            font-size: calc(27 * var(--u));
            font-weight: 700;
            line-height: calc(37.5 * var(--u));
            color: var(--kpo-vivid);
            white-space: nowrap;
        }

        .kpo-hero__desc {
            margin: calc(17 * var(--u)) 0 0 calc(10 * var(--u)) !important;
            max-width: calc(462 * var(--u));
            font-size: calc(15.4 * var(--u));
            font-weight: 500;
            line-height: calc(25.4 * var(--u));
            color: var(--kpo-ink);
        }

        /* Floating glass chips over the photo */
        .kpo-chips {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 1;
        }

        .kpo-chip {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(240, 248, 255, 0.72);
            border: 1px solid rgba(255, 255, 255, 0.85);
            border-radius: calc(12 * var(--u));
            box-shadow: 0 calc(5 * var(--u)) calc(10 * var(--u)) -2px rgba(90, 160, 250, 0.45);
            -webkit-backdrop-filter: blur(calc(6 * var(--u)));
            backdrop-filter: blur(calc(6 * var(--u)));
            color: var(--kpo-ink);
            font-weight: 500;
            white-space: nowrap;
        }

        .kpo-chip img {
            display: block;
            object-fit: contain;
        }

        .kpo-chip--1 { left: 46.72%; top: calc(117 * var(--u)); width: calc(111 * var(--u)); height: calc(107 * var(--u)); padding-top: calc(25 * var(--u)); font-size: calc(14.2 * var(--u)); line-height: calc(19 * var(--u)); }
        .kpo-chip--1 img { width: calc(46 * var(--u)); height: calc(46 * var(--u)); margin: 0 0 calc(5 * var(--u)) calc(10 * var(--u)); }
        .kpo-chip--2 { left: 55.08%; top: calc(205 * var(--u)); width: calc(127 * var(--u)); height: calc(107 * var(--u)); padding-top: calc(25 * var(--u)); font-size: calc(11.5 * var(--u)); line-height: calc(16 * var(--u)); }
        .kpo-chip--2 img { width: calc(63 * var(--u)); height: calc(50 * var(--u)); margin-bottom: calc(5 * var(--u)); }
        .kpo-chip--3 { left: 59.84%; top: calc(327 * var(--u)); width: calc(128 * var(--u)); height: calc(107 * var(--u)); padding-top: calc(21 * var(--u)); font-size: calc(12.7 * var(--u)); line-height: calc(17 * var(--u)); }
        .kpo-chip--3 img { width: calc(57 * var(--u)); height: calc(57 * var(--u)); margin-bottom: calc(5 * var(--u)); }
        .kpo-chip--4 { left: 51.48%; top: calc(379 * var(--u)); width: calc(111 * var(--u)); height: calc(121 * var(--u)); padding-top: calc(30 * var(--u)); font-size: calc(12.1 * var(--u)); line-height: calc(17 * var(--u)); }
        .kpo-chip--4 img { width: calc(57 * var(--u)); height: calc(42 * var(--u)); margin-bottom: calc(7 * var(--u)); }

        .kpo-chip-link {
            position: absolute;
            width: calc(5 * var(--u));
            border-radius: calc(3 * var(--u));
            background: rgba(255, 255, 255, 0.75);
            box-shadow: 0 0 calc(4 * var(--u)) rgba(90, 160, 250, 0.4);
        }

        .kpo-chip-link--1 { left: 50.54%; top: calc(224 * var(--u)); height: calc(39 * var(--u)); }
        .kpo-chip-link--2 { left: 60.13%; top: calc(312 * var(--u)); height: calc(26 * var(--u)); }

        /* Hero 4-item bar */
        .kpo-hero-bar {
            position: relative;
            z-index: 2;
            margin: auto calc(42 * var(--u)) 0 calc(67 * var(--u));
            height: calc(136 * var(--u));
            background: #ffffff;
            border-radius: calc(16 * var(--u));
            box-shadow: 0 calc(6 * var(--u)) calc(22 * var(--u)) rgba(0, 50, 140, 0.12);
            display: grid;
            grid-template-columns: 331fr 296fr 347fr 304fr;
            align-items: center;
        }

        .kpo-hero-item {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .kpo-hero-item + .kpo-hero-item::before {
            content: "";
            position: absolute;
            left: 0;
            top: calc(15 * var(--u));
            bottom: calc(14 * var(--u));
            width: 1.5px;
            background: linear-gradient(180deg, rgba(160, 178, 205, 0) 0%, #a9b8cf 20%, #a9b8cf 80%, rgba(160, 178, 205, 0) 100%);
        }

        .kpo-hero-item:nth-child(1) { padding-left: calc(43 * var(--u)); gap: calc(24 * var(--u)); }
        .kpo-hero-item:nth-child(2) { padding-left: calc(31 * var(--u)); gap: calc(21 * var(--u)); }
        .kpo-hero-item:nth-child(3) { padding-left: calc(44 * var(--u)); gap: calc(29 * var(--u)); }
        .kpo-hero-item:nth-child(4) { padding-left: calc(26 * var(--u)); gap: calc(18 * var(--u)); }

        .kpo-hero-item:nth-child(1) img { width: calc(62 * var(--u)); height: calc(71 * var(--u)); }
        .kpo-hero-item:nth-child(2) img { width: calc(77 * var(--u)); height: calc(73 * var(--u)); }
        .kpo-hero-item:nth-child(3) img { width: calc(64 * var(--u)); height: calc(64 * var(--u)); }
        .kpo-hero-item:nth-child(4) img { width: calc(73 * var(--u)); height: calc(61 * var(--u)); }

        .kpo-hero-item img {
            flex: 0 0 auto;
            display: block;
            object-fit: contain;
        }

        .kpo-hero-item__title {
            font-size: calc(18.8 * var(--u));
            font-weight: 700;
            line-height: calc(26 * var(--u));
            color: var(--kpo-vivid);
            white-space: nowrap;
        }

        .kpo-hero-item__sub {
            margin-top: calc(11 * var(--u)) !important;
            font-size: calc(13.3 * var(--u));
            font-weight: 500;
            line-height: calc(18 * var(--u));
            color: var(--kpo-ink);
            white-space: nowrap;
        }

        .kpo-hero-item:nth-child(2) .kpo-hero-item__sub {
            margin-top: calc(7 * var(--u)) !important;
            font-size: calc(14.2 * var(--u));
            line-height: calc(21 * var(--u));
        }

        /* ── SECTION COMMON ── */
        .kpo-sec {
            position: relative;
        }

        .kpo-sec__head {
            text-align: center;
        }

        .kpo-sec__title {
            display: inline-block;
            color: var(--kpo-blue);
        }

        .kpo-sec__rule {
            display: block;
            height: 4px;
            margin: 0 auto;
            max-width: 90%;
            background: var(--kpo-rule);
        }

        /* ── SECTION 1: なぜ A CAN SOLUTIONSのKPOなのか ── */
        .kpo-sec-why {
            z-index: 1;
            padding-top: 15px;
        }

        .kpo-sec-why .kpo-sec__title {
            font-size: 29.5px;
            font-weight: 700;
            line-height: 40.6px;
        }

        .kpo-sec-why .kpo-sec__rule {
            width: 639px;
            margin-top: 4px;
        }

        .kpo-why-wrap {
            margin: 40px 16px 0 25px;
            display: flex;
            align-items: center;
        }

        .kpo-why-card {
            position: relative;
            height: 239px;
            padding: 99px 0 0 27px;
            background: #ffffff;
            border: 2px solid var(--kpo-card-border);
            border-radius: 14px;
            box-shadow: 0 0 12px rgba(175, 205, 255, 0.35);
            overflow: hidden;
        }

        .kpo-why-card:nth-of-type(1) { flex: 404 1 0; }
        .kpo-why-card:nth-of-type(2) { flex: 377 1 0; }
        .kpo-why-card:nth-of-type(3) { flex: 394 1 0; }

        .kpo-badge {
            position: absolute;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--kpo-badge);
            color: #ffffff;
            font-family: "Noto Sans JP", sans-serif;
            box-shadow: 0 3px 7px rgba(0, 43, 232, 0.28);
        }

        .kpo-why-card .kpo-badge {
            top: 15px;
            left: 14px;
            width: 51px;
            height: 51px;
            font-size: 23px;
            font-weight: 900;
        }

        .kpo-why-card__icon {
            position: absolute;
            display: block;
            object-fit: contain;
        }

        .kpo-why-card__wm {
            position: absolute;
            display: block;
            object-fit: contain;
            z-index: 0;
        }

        .kpo-why-card__title,
        .kpo-why-card__desc {
            position: relative;
            z-index: 1;
            color: var(--kpo-blue);
            font-weight: 500;
            white-space: nowrap;
        }

        .kpo-why-card__title {
            font-size: 20.4px;
            line-height: 29.4px;
        }

        .kpo-why-card__desc {
            margin-top: 10px !important;
            font-size: 15.5px;
            line-height: 28.2px;
        }

        .kpo-arrow {
            flex: 0 0 auto;
            display: block;
            color: #001ae7;
        }

        .kpo-why-wrap .kpo-arrow {
            width: 28px;
            height: 39px;
            margin: 0 10px;
        }

        /* ── SECTION 2: 主な業務 ── */
        .kpo-sec-tasks {
            margin-top: -48px;
            padding: 104px 0 46px;
            background: var(--kpo-band);
        }

        .kpo-sec-tasks .kpo-sec__title {
            font-size: 31.2px;
            font-weight: 400;
            line-height: 43.3px;
            color: var(--kpo-tasks-title);
        }

        .kpo-sec-tasks .kpo-sec__rule,
        .kpo-sec-flow .kpo-sec__rule {
            width: 248px;
            margin-top: 10px;
        }

        .kpo-tasks-grid {
            margin-top: 27px;
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 256px));
            justify-content: center;
            gap: 12px;
        }

        .kpo-task-card {
            position: relative;
            height: 272px;
            padding-top: 23px;
            background: #ffffff;
            border: 2px solid #eef4ff;
            border-radius: 14px;
            box-shadow: 0 0 10px rgba(190, 210, 255, 0.35);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: var(--kpo-vivid);
        }

        .kpo-task-card__ic {
            height: 81px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .kpo-task-card__ic img {
            display: block;
            object-fit: contain;
        }

        .kpo-task-card__title {
            margin-top: 4px !important;
            font-size: 18px;
            font-weight: 700;
            line-height: 21.3px;
            white-space: nowrap;
        }

        .kpo-task-card__desc {
            margin-top: 18px !important;
            font-size: 16.1px;
            font-weight: 400;
            line-height: 30.3px;
        }

        .kpo-task-card__badge {
            position: absolute;
            left: 23px;
            right: 23px;
            top: 213px;
            height: 35px;
            display: grid;
            place-items: center;
            background: #e3edff;
            border-radius: 6px;
            font-size: 13.5px;
            font-weight: 700;
            line-height: 15px;
            white-space: nowrap;
        }

        /* ── SECTION 3: 運用フロー ── */
        .kpo-sec-flow {
            padding: 17px 0 36px;
        }

        .kpo-sec-flow .kpo-sec__title {
            font-size: 31.5px;
            font-weight: 400;
            line-height: 43.6px;
        }

        .kpo-flow-wrap {
            margin: 12px 0 0 17px;
            display: flex;
            align-items: center;
        }

        .kpo-flow-card {
            position: relative;
            flex: 285 1 0;
            height: 226px;
            padding-top: 31px;
            background: #ffffff;
            border: 1.5px solid #d7e8fb;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 74, 173, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .kpo-flow-card .kpo-badge {
            top: 9px;
            left: 17px;
            width: 53px;
            height: 53px;
            font-size: 21.4px;
            font-weight: 700;
        }

        .kpo-flow-card__ic {
            height: 76px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .kpo-flow-card__ic img {
            display: block;
            object-fit: contain;
        }

        .kpo-flow-card__title {
            margin-top: 5px !important;
            font-size: 20.6px;
            font-weight: 700;
            line-height: 28.8px;
            color: var(--kpo-blue);
            white-space: nowrap;
        }

        .kpo-flow-card:nth-of-type(2) .kpo-flow-card__title {
            font-size: 19.3px;
        }

        .kpo-flow-card__desc {
            margin-top: 15px !important;
            font-size: 16.6px;
            font-weight: 500;
            line-height: 24.5px;
            color: var(--kpo-gray);
        }

        .kpo-flow-wrap .kpo-arrow {
            width: 33px;
            height: 44px;
            margin: 0 6px 0 7px;
        }

        /* ── SECTION 4: KPOチーム ── */
        .kpo-sec-team {
            padding: 38px 0 42px;
            background: #f5f9ff;
        }

        .kpo-team-grid {
            max-width: 1387px;
            margin: 0 auto;
            padding: 0 10px 0 105px;
            display: grid;
            grid-template-columns: minmax(0, 585fr) minmax(0, 687fr);
            align-items: start;
        }

        .kpo-team__jp {
            font-size: 45px;
            font-weight: 700;
            line-height: 53.5px;
            color: var(--kpo-team);
        }

        .kpo-team__en {
            margin-top: 13px !important;
            font-size: 19.3px;
            font-weight: 500;
            line-height: 22.6px;
            color: var(--kpo-team);
        }

        .kpo-team__desc-wrap {
            margin-top: 14px;
            max-width: 560px;
        }

        .kpo-team__desc {
            font-size: 12.8px;
            font-weight: 500;
            line-height: 29.4px;
            color: var(--kpo-team);
        }

        .kpo-team__features {
            margin: 12px 0 0 -28px;
            display: grid;
            grid-template-columns: repeat(3, 190px);
            gap: 0;
        }

        .kpo-team-feat {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #000000;
        }

        .kpo-team-feat__ic {
            height: 78px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .kpo-team-feat__ic img {
            display: block;
            object-fit: contain;
        }

        .kpo-team-feat__t {
            margin-top: 5px !important;
            font-size: 14.7px;
            font-weight: 500;
            line-height: 17px;
            white-space: nowrap;
        }

        .kpo-team-feat__d {
            margin-top: 13px !important;
            font-size: 12.8px;
            font-weight: 400;
            line-height: 19.9px;
        }

        .kpo-team-media {
            margin-top: 10px;
            border-radius: 16px;
            overflow: hidden;
        }

        .kpo-team-media img {
            display: block;
            width: 100%;
            height: auto;
            aspect-ratio: 687 / 386;
            object-fit: cover;
        }

        /* =========================================================
           RESPONSIVE
           ========================================================= */
        @media (max-width: 1240px) {
            .kpo-chips {
                display: none;
            }

            .kpo-hero-bar {
                margin: auto 24px 0;
            }

            .kpo-hero-item:nth-child(n) {
                padding-left: 18px;
                gap: 14px;
            }

            .kpo-hero-item img {
                transform: scale(0.85);
            }

            .kpo-why-card__wm {
                opacity: 0.6;
            }

            .kpo-why-card {
                padding-right: 16px;
            }

            .kpo-why-card__title,
            .kpo-why-card__desc {
                white-space: normal;
            }

            .kpo-why-card__desc {
                font-size: 15.5px;
                line-height: 25px;
            }

            .kpo-why-card__desc br {
                display: none;
            }

            .kpo-flow-card {
                height: auto;
                min-height: 226px;
                padding: 31px 12px 20px;
            }

            .kpo-flow-card__title,
            .kpo-flow-card:nth-of-type(2) .kpo-flow-card__title {
                font-size: 17px;
                white-space: normal;
            }

            .kpo-flow-card__desc {
                font-size: 15px;
            }

            .kpo-flow-wrap .kpo-arrow {
                width: 24px;
                margin: 0 4px;
            }

            .kpo-tasks-grid {
                grid-template-columns: repeat(3, minmax(0, 256px));
                row-gap: 16px;
            }

            .kpo-team-grid {
                padding: 0 24px;
                gap: 32px;
            }
        }

        @media (max-width: 1040px) {
            .kpo-hero {
                background-image:
                    linear-gradient(90deg, rgba(255, 255, 255, 0.92) 0%, rgba(255, 255, 255, 0.75) 55%, rgba(255, 255, 255, 0.2) 100%),
                    url("assets/img/kpo/kpo-hero-bg.png");
            }

            .kpo-hero,
            .kpo-hero__inner {
                min-height: 0;
            }

            .kpo-hero__inner {
                padding-bottom: 32px;
            }

            .kpo-hero-bar {
                margin: 40px 24px 0;
                height: auto;
                grid-template-columns: 1fr 1fr;
                padding: 8px 0;
            }

            .kpo-hero-item {
                padding: 16px 0 16px 24px;
            }

            .kpo-hero-item:nth-child(3)::before {
                display: none;
            }

            .kpo-why-wrap,
            .kpo-flow-wrap {
                margin: 36px 24px 0;
                flex-direction: column;
                align-items: stretch;
                gap: 18px;
            }

            .kpo-why-card,
            .kpo-flow-card {
                flex: 0 0 auto !important;
            }

            .kpo-why-wrap .kpo-arrow,
            .kpo-flow-wrap .kpo-arrow {
                align-self: center;
                transform: rotate(90deg);
                margin: 0;
            }

            .kpo-team-grid {
                grid-template-columns: 1fr;
            }

            .kpo-team-media {
                max-width: 687px;
            }
        }

        @media (max-width: 768px) {
            .site-header__nav {
                margin-left: 0;
                gap: 1.5rem;
            }

            .kpo-bc,
            .kpo-hero__content {
                margin-left: 20px !important;
                margin-right: 20px;
            }

            .kpo-hero__title {
                font-size: 44px;
                line-height: 60px;
            }

            .kpo-hero__subtitle {
                font-size: 18px;
            }

            .kpo-hero__panel {
                width: auto;
                margin-left: 0;
            }

            .kpo-hero__lead {
                font-size: 20px;
                line-height: 30px;
                white-space: normal;
            }

            .kpo-hero__desc {
                margin-left: 0 !important;
                font-size: 14px;
            }

            .kpo-hero-bar {
                margin: 32px 16px 0;
                grid-template-columns: 1fr;
            }

            .kpo-hero-item + .kpo-hero-item::before {
                display: block !important;
                top: 0;
                bottom: auto;
                left: 16px;
                right: 16px;
                width: auto;
                height: 1px;
                background: #dbe3ef;
            }

            .kpo-sec-why .kpo-sec__title {
                font-size: 22px;
                line-height: 32px;
            }

            .kpo-why-wrap,
            .kpo-flow-wrap {
                margin: 32px 16px 0;
            }

            .kpo-why-card {
                height: auto;
                padding: 92px 18px 24px 20px;
            }

            .kpo-why-card__title,
            .kpo-why-card__desc {
                white-space: normal;
            }

            .kpo-why-card__desc br {
                display: none;
            }

            .kpo-why-card__desc {
                font-size: 15px;
                line-height: 25px;
            }

            .kpo-tasks-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                padding: 0 16px;
            }

            .kpo-task-card__title {
                font-size: 16px;
                white-space: normal;
            }

            .kpo-task-card__desc {
                font-size: 14px;
                line-height: 24px;
            }

            .kpo-task-card__badge {
                left: 12px;
                right: 12px;
                font-size: 12px;
                white-space: normal;
                text-align: center;
            }

            .kpo-team-grid {
                padding: 0 16px;
            }

            .kpo-team__jp {
                font-size: 36px;
            }

            .kpo-team__desc {
                font-size: 14px;
                line-height: 26px;
            }

            .kpo-team__features {
                margin-left: 0;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 12px;
            }

            .kpo-team-feat__t {
                white-space: normal;
            }

            .kpo-team-feat__d br {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .kpo-hero__lead {
                font-size: 16.5px;
                line-height: 27px;
            }

            .kpo-tasks-grid {
                grid-template-columns: 1fr;
            }

            .kpo-task-card {
                height: auto;
                padding-bottom: 72px;
            }

            .kpo-task-card:last-child {
                padding-bottom: 24px;
            }

            .kpo-task-card__badge {
                top: auto;
                bottom: 22px;
            }

            .kpo-team__features {
                grid-template-columns: 1fr;
                gap: 24px;
            }
        }
    </style>
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="kpo-page" id="top">

        <!-- ── HERO ── -->
        <section class="kpo-hero">
            <div class="kpo-hero__inner">
                <p class="kpo-bc">
                    <a href="index.php">HOME</a> ／
                    <a href="service.php">サービス</a> ／
                    <span class="kpo-bc__current">KPOサービス</span>
                </p>

                <div class="kpo-hero__content">
                    <p class="kpo-hero__eyebrow">KPO</p>
                    <h1 class="kpo-hero__title">KPOサービス</h1>
                    <p class="kpo-hero__subtitle">Knowledge Process Outsourcing</p>
                    <div class="kpo-hero__panel">
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
                </div>

                <!-- Floating glass chips -->
                <div class="kpo-chips" aria-hidden="true">
                    <span class="kpo-chip-link kpo-chip-link--1"></span>
                    <span class="kpo-chip-link kpo-chip-link--2"></span>
                    <div class="kpo-chip kpo-chip--1"><img src="assets/img/kpo/chip-ic1.svg" alt="" />検索理解</div>
                    <div class="kpo-chip kpo-chip--2"><img src="assets/img/kpo/chip-ic2.png" alt="" />データ分析</div>
                    <div class="kpo-chip kpo-chip--3"><img src="assets/img/kpo/chip-ic3.png" alt="" />レポート作成</div>
                    <div class="kpo-chip kpo-chip--4"><img src="assets/img/kpo/chip-ic4.png" alt="" />ダッシュボード</div>
                </div>

                <!-- 4-item feature bar -->
                <div class="kpo-hero-bar">
                    <div class="kpo-hero-item">
                        <img src="assets/img/kpo/hero-ic1.svg" alt="" width="62" height="71" />
                        <div>
                            <p class="kpo-hero-item__title">手書き帳票対応</p>
                            <p class="kpo-hero-item__sub">難読な帳票の理解・分別に対応</p>
                        </div>
                    </div>
                    <div class="kpo-hero-item">
                        <img src="assets/img/kpo/hero-ic2.png" alt="" width="77" height="73" />
                        <div>
                            <p class="kpo-hero-item__title">提案型運用</p>
                            <p class="kpo-hero-item__sub">動画共有で理解し<br>出力方法も提案</p>
                        </div>
                    </div>
                    <div class="kpo-hero-item">
                        <img src="assets/img/kpo/hero-ic3.png" alt="" width="64" height="64" />
                        <div>
                            <p class="kpo-hero-item__title">日本語ブリッジ</p>
                            <p class="kpo-hero-item__sub">指示理解から現場展開まで対応</p>
                        </div>
                    </div>
                    <div class="kpo-hero-item">
                        <img src="assets/img/kpo/hero-ic4.png" alt="" width="73" height="61" />
                        <div>
                            <p class="kpo-hero-item__title">24時間365日対応</p>
                            <p class="kpo-hero-item__sub">土日・深夜も柔軟に対応</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 1: なぜ A CAN SOLUTIONSのKPOなのか ── -->
        <section class="kpo-sec kpo-sec-why">
            <div class="kpo__inner">
                <div class="kpo-sec__head">
                    <h2 class="kpo-sec__title">なぜ A CAN SOLUTIONSのKPOなのか</h2>
                    <span class="kpo-sec__rule" aria-hidden="true"></span>
                </div>

                <div class="kpo-why-wrap">
                    <div class="kpo-why-card">
                        <span class="kpo-badge">01</span>
                        <img class="kpo-why-card__icon" src="assets/img/kpo/why-ic1.png" alt="" style="left:110px;top:17px;width:78px;height:72px" />
                        <img class="kpo-why-card__wm" src="assets/img/kpo/why-wm1.png" alt="" style="right:34px;top:36px;width:73px;height:86px" />
                        <h3 class="kpo-why-card__title">入力だけで終わらない</h3>
                        <p class="kpo-why-card__desc">AI入力後の確認だけでなく、<br>求められたフォーマットへの整形・<br>レポート化まで対応。</p>
                    </div>

                    <svg class="kpo-arrow" viewBox="0 0 28 39" fill="none" aria-hidden="true">
                        <polyline points="7,6 21,19.5 7,33" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="kpo-why-card">
                        <span class="kpo-badge">02</span>
                        <img class="kpo-why-card__icon" src="assets/img/kpo/why-ic2.png" alt="" style="left:100px;top:21px;width:84px;height:71px" />
                        <img class="kpo-why-card__wm" src="assets/img/kpo/why-wm2.png" alt="" style="right:8px;top:46px;width:73px;height:68px" />
                        <h3 class="kpo-why-card__title">動画共有ですぐ開始</h3>
                        <p class="kpo-why-card__desc">開始時に詳細マニュアルが<br>なくても、動画共有で理解し、<br>作業内容と出力結果を提案可能。</p>
                    </div>

                    <svg class="kpo-arrow" viewBox="0 0 28 39" fill="none" aria-hidden="true">
                        <polyline points="7,6 21,19.5 7,33" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="kpo-why-card">
                        <span class="kpo-badge">03</span>
                        <img class="kpo-why-card__icon" src="assets/img/kpo/why-ic3.png" alt="" style="left:100px;top:25px;width:64px;height:64px" />
                        <img class="kpo-why-card__wm" src="assets/img/kpo/why-wm3.png" alt="" style="right:17px;top:8px;width:91px;height:162px" />
                        <h3 class="kpo-why-card__title">日本語と現場運用を橋渡し</h3>
                        <p class="kpo-why-card__desc">日本語が堪能なブリッジが<br>指示を理解し、現場へ正確に展開。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 2: 主な業務 ── -->
        <section class="kpo-sec kpo-sec-tasks">
            <div class="kpo__inner">
                <div class="kpo-sec__head">
                    <h2 class="kpo-sec__title">主な業務</h2>
                    <span class="kpo-sec__rule" aria-hidden="true"></span>
                </div>

                <div class="kpo-tasks-grid">
                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic"><img src="assets/img/kpo/task-ic1.png" alt="" width="71" height="71" /></div>
                        <h3 class="kpo-task-card__title">構造物検査データ整備</h3>
                        <p class="kpo-task-card__desc">各種フォーマットへの<br>落とし込み</p>
                        <span class="kpo-task-card__badge">対応実績：200件/年以上</span>
                    </div>

                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic"><img src="assets/img/kpo/task-ic2.png" alt="" width="78" height="72" /></div>
                        <h3 class="kpo-task-card__title">EC価格調査・報告</h3>
                        <p class="kpo-task-card__desc">商品価格データ収集と<br>客先報告</p>
                        <span class="kpo-task-card__badge">実績：10,000件以上</span>
                    </div>

                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic"><img src="assets/img/kpo/task-ic3.svg" alt="" width="62" height="71" /></div>
                        <h3 class="kpo-task-card__title">高難度手書き帳票対応</h3>
                        <p class="kpo-task-card__desc">登記簿・契約書の理解、<br>分類、報告書作成</p>
                        <span class="kpo-task-card__badge">市町村関連業務にも対応</span>
                    </div>

                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic"><img src="assets/img/kpo/task-ic4.png" alt="" width="56" height="78" /></div>
                        <h3 class="kpo-task-card__title">アンケート集計・可視化</h3>
                        <p class="kpo-task-card__desc">集計・分析・ダッシュボード化</p>
                        <span class="kpo-task-card__badge">1案件2,000件〜対応</span>
                    </div>

                    <div class="kpo-task-card">
                        <div class="kpo-task-card__ic"><img src="assets/img/kpo/task-ic5.png" alt="" width="75" height="66" /></div>
                        <h3 class="kpo-task-card__title">資料デザイン・PR動画制作</h3>
                        <p class="kpo-task-card__desc">在ミャンマー日本政府機関<br>向けの資料・動画制作</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 3: 運用フロー ── -->
        <section class="kpo-sec kpo-sec-flow">
            <div class="kpo__inner">
                <div class="kpo-sec__head">
                    <h2 class="kpo-sec__title">運用フロー</h2>
                    <span class="kpo-sec__rule" aria-hidden="true"></span>
                </div>

                <div class="kpo-flow-wrap">
                    <div class="kpo-flow-card">
                        <span class="kpo-badge">01</span>
                        <div class="kpo-flow-card__ic"><img src="assets/img/kpo/flow-ic1.png" alt="" width="84" height="71" /></div>
                        <h3 class="kpo-flow-card__title">動画共有で理解</h3>
                        <p class="kpo-flow-card__desc">実際の業務動画を共有し、<br>作業内容を視覚的に理解。</p>
                    </div>

                    <svg class="kpo-arrow" viewBox="0 0 28 39" fill="none" aria-hidden="true">
                        <polyline points="7,6 21,19.5 7,33" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="kpo-flow-card">
                        <span class="kpo-badge">02</span>
                        <div class="kpo-flow-card__ic"><img src="assets/img/kpo/flow-ic2.png" alt="" width="87" height="66" /></div>
                        <h3 class="kpo-flow-card__title">日本語ブリッジが整理・指示</h3>
                        <p class="kpo-flow-card__desc">日本語での指示を整理<br>し、現場に正確に展開。</p>
                    </div>

                    <svg class="kpo-arrow" viewBox="0 0 28 39" fill="none" aria-hidden="true">
                        <polyline points="7,6 21,19.5 7,33" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="kpo-flow-card">
                        <span class="kpo-badge">03</span>
                        <div class="kpo-flow-card__ic"><img src="assets/img/kpo/flow-ic3.png" alt="" width="74" height="81" /></div>
                        <h3 class="kpo-flow-card__title">現場オペレーション</h3>
                        <p class="kpo-flow-card__desc">経験豊富なオペレーター<br>が作業を実施。</p>
                    </div>

                    <svg class="kpo-arrow" viewBox="0 0 28 39" fill="none" aria-hidden="true">
                        <polyline points="7,6 21,19.5 7,33" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="kpo-flow-card">
                        <span class="kpo-badge">04</span>
                        <div class="kpo-flow-card__ic"><img src="assets/img/kpo/flow-ic4.png" alt="" width="64" height="82" /></div>
                        <h3 class="kpo-flow-card__title">確認・修正して納品</h3>
                        <p class="kpo-flow-card__desc">品質チェックを行い、<br>データを納品。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── SECTION 4: KPOチーム ── -->
        <section class="kpo-sec kpo-sec-team">
            <div class="kpo-team-grid">
                <div class="kpo-team-left">
                    <h2 class="kpo-team__jp">KPOチーム</h2>
                    <p class="kpo-team__en">KPO Team in Myanmar</p>

                    <div class="kpo-team__desc-wrap">
                        <p class="kpo-team__desc">A CAN SOLUTIONSでは、ミャンマーにKPOチームを構築・運用しています。</p>
                        <p class="kpo-team__desc">帳票や各種データを読み取り、単純な入力だけで終わらず、内容を理解・整理し、お客様が求めるフォーマットへの変換、集計・分析、レポート作成まで対応します。</p>
                        <p class="kpo-team__desc">日本語が堪能なブリッジと現場メンバーが連携し、専門性の高い業務を柔軟に支援します。</p>
                    </div>

                    <div class="kpo-team__features">
                        <div class="kpo-team-feat">
                            <div class="kpo-team-feat__ic"><img src="assets/img/kpo/team-ic1.png" alt="" width="78" height="72" /></div>
                            <h3 class="kpo-team-feat__t">内容理解・データ整形</h3>
                            <p class="kpo-team-feat__d">手書き帳票や複雑な資料も理解<br>し、必要な形式へ整理・変換。</p>
                        </div>

                        <div class="kpo-team-feat">
                            <div class="kpo-team-feat__ic"><img src="assets/img/kpo/team-ic2.png" alt="" width="81" height="60" /></div>
                            <h3 class="kpo-team-feat__t">日本語ブリッジ</h3>
                            <p class="kpo-team-feat__d">日本語の指示を理解し<br>現場へ正確に展開。</p>
                        </div>

                        <div class="kpo-team-feat">
                            <div class="kpo-team-feat__ic"><img src="assets/img/kpo/team-ic3.png" alt="" width="56" height="78" /></div>
                            <h3 class="kpo-team-feat__t">分析・レポート対応</h3>
                            <p class="kpo-team-feat__d">集計・分析・ダッシュボード化<br>など、入力後の工程まで対応。</p>
                        </div>
                    </div>
                </div>

                <div class="kpo-team-right">
                    <div class="kpo-team-media">
                        <img src="assets/img/kpo/kpo-team.jpg" alt="ミャンマーKPOチーム" width="687" height="386" />
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>
