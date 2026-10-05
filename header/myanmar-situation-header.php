<?php
/**
 * Myanmar situation — page hero / header
 *
 * Rebuilt in HTML + CSS from the Canva comp (page 7).
 * Previously this was a single flat image (assets/img/myanmar-situtation.png)
 * with the breadcrumb, headings and copy baked in. The background photo
 * (Shwedagon + Myanmar map + mascot) is still an image; every piece of text is
 * now real, selectable, translatable markup.
 *
 * Layout reference: 1243 x 398 (the original comp export). All sizes and
 * offsets below are expressed in `cqw` against that reference, so the block
 * scales pixel-for-pixel with the comp at any width down to the mobile
 * breakpoint, where it switches to a stacked, readable layout.
 */
?>
<style>
  /* ══════════════════════════════════════════
     MYANMAR SITUATION — PAGE HERO
     ══════════════════════════════════════════ */
  .ms-header {
    width: 88%;
    max-width: 1240px;
    margin: 0 auto;
  }

  .ms-header *,
  .ms-header *::before,
  .ms-header *::after { box-sizing: border-box; }

  .ms-header__inner {
    position: relative;
    container-type: inline-size;
    aspect-ratio: 1243 / 398;
    background-image: url('assets/img/myanmar-situation-hero-bg.png');
    background-size: cover;
    background-position: center right;
    background-repeat: no-repeat;
    overflow: hidden;
  }

  /* ── Breadcrumb ── */
  .ms-header__crumb {
    position: absolute;
    left: 1.824cqw;  /* ink lands at x23 of the comp */
    top: 1.546cqw;   /* ink lands at y21 of the comp */
    font-family: "Anonymous Pro", "Roboto Mono", monospace;
    font-size: max(1.086cqw, 11px);  /* ~13.5px @ 1240, floored for tablet */
    font-weight: 700;
    line-height: 1;
    white-space: nowrap;
  }

  .ms-header__crumb a {
    color: #1a1a2e;
    text-decoration: none;
    transition: color 0.25s ease;
  }

  .ms-header__crumb a:hover { color: #12499e; }

  .ms-header__crumb-sep { color: #8a93a5; }

  .ms-header__crumb-current { color: #0a66c2; }

  /* ── Eyebrow ── */
  .ms-header__eyebrow {
    position: absolute;
    left: 4.438cqw;  /* ink lands at x58 of the comp */
    top: 4.919cqw;   /* ink lands at y68 of the comp */
    margin: 0;
    font-family: "Noto Sans JP", sans-serif;
    font-size: max(2.629cqw, 20px);  /* ~32.6px @ 1240, floored for tablet */
    font-weight: 700;
    line-height: 1.2;
    letter-spacing: 0.005em;
    color: #12499e;
    white-space: nowrap;
  }

  /* ── Title ── */
  .ms-header__title {
    position: absolute;
    left: 4.447cqw;  /* ink lands at x61 of the comp */
    top: 9.964cqw;   /* ink lands at y132 of the comp */
    margin: 0;
    font-family: "Noto Sans JP", sans-serif;
    font-size: max(3.702cqw, 28px);  /* ~45.9px @ 1240, floored for tablet */
    font-weight: 900;
    line-height: 1.2;
    letter-spacing: 0.005em;
    color: #000000;
    white-space: nowrap;
  }

  /* ── Lead copy ── */
  .ms-header__desc {
    position: absolute;
    left: 6.056cqw;  /* ink lands at x75 of the comp */
    top: 18.484cqw;  /* ink lands at y233 of the comp */
    margin: 0;
    font-family: "Noto Sans JP", sans-serif;
    font-size: max(1.161cqw, 13px);  /* ~14.4px @ 1240, floored for tablet */
    font-weight: 700;
    line-height: 1.354;   /* ~19.5px line pitch @ 1240 */
    letter-spacing: 0.005em;
    color: #000000;
    white-space: nowrap;
  }


  /* ══════════════════════════════════════════
     TABLET — same composition as desktop, but the
     floored type now covers more of the artwork, so
     wash the left side to keep the copy readable
     ══════════════════════════════════════════ */
  @media (max-width: 1100px) {
    .ms-header__inner::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg,
        rgba(255, 255, 255, 0.96) 0%,
        rgba(255, 255, 255, 0.92) 42%,
        rgba(255, 255, 255, 0.55) 68%,
        rgba(255, 255, 255, 0) 90%);
      pointer-events: none;
    }
  }

  /* ══════════════════════════════════════════
     PHONE — same composition as tablet/desktop:
     copy sits on the photo. The comp's 3.12:1 box is
     too short for the copy here, so the box grows and
     the photo re-crops to its right side (pagoda +
     mascot), with a stronger wash behind the text.
     ══════════════════════════════════════════ */
  @media (max-width: 599px) {
    .ms-header {
      width: 100%;
      max-width: 100%;
    }

    .ms-header__inner {
      container-type: normal;
      aspect-ratio: auto;
      min-height: 52vw;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 0.1rem;
      padding: 0.95rem 1.1rem 1.1rem;
      background-position: center right;
    }

    .ms-header__crumb,
    .ms-header__eyebrow,
    .ms-header__title,
    .ms-header__desc {
      position: relative;  /* stays above the wash */
      left: auto;
      top: auto;
      z-index: 1;
      white-space: normal;
      max-width: 80%;      /* keeps the copy clear of the mascot */
    }

    .ms-header__crumb { font-size: 0.68rem; }
    .ms-header__eyebrow { font-size: 1.15rem; margin-top: 0.3rem; }
    .ms-header__title { font-size: 1.6rem; }
    .ms-header__desc {
      /* tracks the viewport so the comp's line breaks survive on narrow phones */
      font-size: clamp(0.64rem, 3.2vw, 0.78rem);
      line-height: 1.7;
      margin-top: 0.3rem;
    }
  }
</style>

<section class="ms-header" aria-label="ミャンマー情報">
  <div class="ms-header__inner">

    <nav class="ms-header__crumb" aria-label="パンくずリスト"><a href="index.php">HOME</a> <span class="ms-header__crumb-sep" aria-hidden="true">&gt;</span> <span class="ms-header__crumb-current" aria-current="page">Myanmar situation</span></nav>

    <p class="ms-header__eyebrow">Myanmar situation</p>

    <h1 class="ms-header__title">ミャンマー情報</h1>

    <p class="ms-header__desc">
      A CAN SOLUTIONSが拠点を構えるミャンマーの<br />
      最新情報やビジネス環境、現地の状況について<br />
      定期的にお届けします。
    </p>

  </div>
</section>
