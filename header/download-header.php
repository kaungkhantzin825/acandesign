<style>
  /* ══════════════════════════════════════════
     DOWNLOAD HERO BANNER  — matches demo flat image
     ══════════════════════════════════════════ */
  .dl-banner {
    width: 86%;
    max-width: 1260px;
    margin: 0 auto;
    background: #f3f4f8;
    overflow: hidden;
    position: relative;
    box-sizing: border-box;
    border-radius: 0;
    /* No border, no box-shadow — blends into page */
  }

  .dl-banner *,
  .dl-banner *::before,
  .dl-banner *::after {
    box-sizing: border-box;
  }

  .dl-banner__wrap {
    display: flex;
    align-items: stretch;
    justify-content: flex-start;
    min-height: min(29vw, 425px);
    position: relative;
    max-width: 1260px;
    margin: 0 auto;
  }

  /* Light wash over the full-bleed background photo so the mascot/text stay readable */
  .dl-banner__wrap::before {
    content: '';
    position: absolute;
    inset: 0;
    z-index: 1;
    background: linear-gradient(90deg, rgba(243,244,248,0.95) 0%, rgba(243,244,248,0.85) 34%, rgba(243,244,248,0.35) 60%, rgba(243,244,248,0) 82%);
    pointer-events: none;
  }

  /* ── Left: Mascot Girl ── */
  .dl-banner__mascot {
    flex: 0 0 220px;
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    padding-left: 0;
    z-index: 2;
    align-self: stretch;
  }

  .dl-banner__mascot img {
    width: 220px;
    max-width: 220px;
    height: 100%;
    max-height: 460px;
    display: block;
    object-fit: contain;
    object-position: bottom center;
    filter: drop-shadow(2px 0 8px rgba(0,0,0,0.04));
  }

  /* ── Center: Content (takes all remaining space between mascot & visual) ── */
  .dl-banner__content {
    flex: 1 1 0;
    min-width: 0;
    max-width: 600px;
    padding: 2.6rem 1.5rem 2.4rem 0.2rem;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-self: stretch;
    z-index: 3;
  }

  .dl-banner__text-group {
    display: flex;
    flex-direction: column;
  }

  .dl-banner__eyebrow {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 1.9rem;
    font-weight: 700;
    color: #12499e;
    letter-spacing: 0.04em;
    line-height: 1;
    margin: 0 0 0.4rem;
    display: block;
  }

  .dl-banner__title {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 24px;
    font-weight: 900;
    color: #0b1a30;
    line-height: 1.3;
    margin: 0 0 1.1rem;
    letter-spacing: -0.01em;
  }

  .dl-banner__desc {
    font-family: 'Noto Sans JP', sans-serif;
   font-size: 12px;
    font-weight: bold;
    color: #334155;
    line-height: 1.9;
    margin: 0 0 1.75rem;
  }

  /* ── 2 Pill Badges (Side by Side) ── */
  .dl-banner__badges {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 1rem;
    flex-wrap: nowrap;
    margin-left: -63px;
    margin-top: 1.75rem;
}

  .dl-banner__badge {
    background: #ffffff;
    border-radius: 14px;
    border: 1px solid #dce5f2;
    box-shadow: 0 4px 14px rgba(18, 73, 158, 0.07);
    padding: 0.75rem 1.3rem;
    display: inline-flex;
    flex-direction: row;
    align-items: center;
    gap: 0.75rem;
    flex-shrink: 0;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .dl-banner__badge:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(18, 73, 158, 0.12);
  }

  .dl-banner__badge-icon {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .dl-banner__badge-icon img {
    height: 34px;
    width: auto;
    display: block;
    object-fit: contain;
  }

  .dl-banner__badge-text {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 13px;
    font-weight: bold;
    color: #0b1a30;
    line-height: 1.5;
  }

  /* ── Full-bleed background photo (behind the wash, mascot & content) ── */
  .dl-banner__visual {
    position: absolute;
    inset: 0;
    z-index: 0;
    overflow: hidden;
  }

  .dl-banner__visual img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    object-position: center center;
  }

  /* ── Responsive Rules ── */
  @media (max-width: 1140px) {
    .dl-banner__mascot {
      flex: 0 0 240px;
    }
    .dl-banner__mascot img {
      width: 240px;
      max-width: 240px;
    }
  }

  @media (max-width: 990px) {
    .dl-banner {
      width: 100%;
      max-width: 100%;
    }
    .dl-banner__wrap {
      flex-wrap: wrap;
      aspect-ratio: auto;
      min-height: auto;
    }
    .dl-banner__mascot {
      flex: 0 0 190px;
      padding-left: 0;
    }
    .dl-banner__mascot img {
      width: 190px;
      max-width: 190px;
    }
    .dl-banner__content {
      padding: 1.8rem 1rem 1.4rem 1rem;
      max-width: calc(100% - 165px);
    }
  }

  /* Small laptops: the copy runs over the brochure, so extend the wash. */
  @media (max-width: 1140px) {
    .dl-banner__wrap::before {
      background: linear-gradient(90deg, rgba(243,244,248,0.96) 0%, rgba(243,244,248,0.9) 50%, rgba(243,244,248,0.55) 75%, rgba(243,244,248,0.1) 100%);
    }
    .dl-banner__badges { flex-wrap: wrap; margin-left: 0; }
  }

  @media (max-width: 680px) {
    .dl-banner {
      width: 100%;
      max-width: 100%;
    }
    .dl-banner__wrap {
      aspect-ratio: auto;
      min-height: 150px;
      flex-wrap: nowrap;
      align-items: stretch;
      padding-top: 0.45rem;
      padding-bottom: 0.45rem;
    }
    .dl-banner__wrap::before {
      background: linear-gradient(90deg, rgba(243,244,248,0.97) 0%, rgba(243,244,248,0.92) 42%, rgba(243,244,248,0.55) 72%, rgba(243,244,248,0.15) 96%);
    }
    .dl-banner__mascot {
      flex: 0 0 84px;
      padding-left: 0;
    }
    .dl-banner__mascot img {
      width: 84px;
      max-width: 84px;
      height: 100%;
      max-height: 260px;
    }
    .dl-banner__content {
      max-width: calc(100% - 84px);
      padding: 1rem 1rem 1rem 0.4rem;
      align-self: center;
    }
    .dl-banner__eyebrow {
      font-size: 1.3rem;
      margin: 0 0 0.2rem;
    }
    .dl-banner__title {
      font-size: 1.15rem;
      line-height: 1.3;
      margin: 0 0 0.5rem;
      white-space: normal;
    }
    .dl-banner__desc {
      font-size: 0.78rem;
      line-height: 1.7;
      margin: 0 0 0.75rem;
    }
    .dl-banner__desc br { display: none; }
    .dl-banner__badges {
      margin-left: 0;
      margin-top: 0;
      gap: 0.4rem;
    }
    .dl-banner__badge {
      padding: 0.4rem 0.6rem;
      gap: 0.4rem;
      border-radius: 10px;
    }
    .dl-banner__badge-icon img {
      height: 22px;
    }
    .dl-banner__badge-text {
      font-size: 0.7rem;
      line-height: 1.35;
    }
  }
</style>

<section class="dl-banner" aria-label="営業資料ダウンロード">
  <div class="dl-banner__wrap">
    <!-- Left: Mascot Girl (full height, bottom-aligned) -->
    <div class="dl-banner__mascot">
      <img src="assets/img/download-mascot.png" alt="A CAN SOLUTIONS キャラクター" />
    </div>

    <!-- Center: Content -->
    <div class="dl-banner__content">
      <div class="dl-banner__text-group">
        <span class="dl-banner__eyebrow">DOWNLOAD</span>
        <h1 class="dl-banner__title">営業資料ダウンロード</h1>
        <p class="dl-banner__desc">
          A CAN SOLUTIONSのサービスや事例、会社情報などを<br />
          まとめた資料をご用意しております。<br />
          ぜひご覧いただき、貴社のご検討にお役立てください。
        </p>
      </div>

      <div class="dl-banner__badges">
        <div class="dl-banner__badge">
          <span class="dl-banner__badge-icon">
            <img src="assets/img/download-icon-doc.png" alt="無料" />
          </span>
          <span class="dl-banner__badge-text">
            すべて無料で<br />ダウンロード可能
          </span>
        </div>

        <div class="dl-banner__badge">
          <span class="dl-banner__badge-icon">
            <img src="assets/img/download-icon-shield.png" alt="登録不要" />
          </span>
          <span class="dl-banner__badge-text">
            会員登録・個人情報の<br />入力は不要です
          </span>
        </div>
      </div>
    </div>

    <!-- Right: Visual (Brochures & Mug) — fills full right half -->
    <div class="dl-banner__visual">
      <img src="assets/img/Clean Corporate Brochure Mockup.png" alt="営業資料・サービスガイド・会社案内" />
    </div>
  </div>
</section>
