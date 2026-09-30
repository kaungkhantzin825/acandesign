<style>
  /* ══════════════════════════════════════════
     DOWNLOAD HERO BANNER
     ══════════════════════════════════════════ */
  .dl-banner {
    width: 88%;
    max-width: 1240px;
    margin: 1.25rem auto 0.5rem;
    background: #ffffff;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 22px rgba(18, 73, 158, 0.05);
    overflow: hidden;
    position: relative;
    box-sizing: border-box;
  }

  .dl-banner *,
  .dl-banner *::before,
  .dl-banner *::after {
    box-sizing: border-box;
  }

  .dl-banner__wrap {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    min-height: 385px;
    position: relative;
    background: linear-gradient(90deg, #f6f8fb 0%, #ffffff 32%, #f6f8fb 100%);
    overflow: hidden;
  }

  /* ── Left: Mascot Girl ── */
  .dl-banner__mascot {
    flex: 0 0 185px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding-left: 1.25rem;
    z-index: 2;
  }

  .dl-banner__mascot img {
    width: 100%;
    max-width: 185px;
    height: auto;
    display: block;
    filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.04));
  }

  /* ── Center: Content ── */
  .dl-banner__content {
    flex: 1 1 auto;
    max-width: 550px;
    padding: 2.2rem 0.5rem 2rem 1.25rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-self: center;
    z-index: 3;
  }

  .dl-banner__eyebrow {
    font-family: 'Anonymous Pro', monospace;
    font-size: 24px;
    font-weight: 700;
    color: #12499e;
    letter-spacing: 0.06em;
    line-height: 1;
    margin: 0 0 0.4rem;
    display: block;
  }

  .dl-banner__title {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: clamp(1.65rem, 2.5vw, 2.15rem);
    font-weight: 900;
    color: #0b1a30;
    line-height: 1.25;
    margin: 0 0 0.95rem;
    letter-spacing: -0.01em;
    white-space: nowrap;
  }

  .dl-banner__desc {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 0.88rem;
    font-weight: 700;
    color: #334155;
    line-height: 1.85;
    margin: 0 0 1.5rem;
  }

  /* ── 2 Pill Badges (Side by Side) ── */
  .dl-banner__badges {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 0.85rem !important;
    flex-wrap: nowrap !important;
  }

  .dl-banner__badge {
    background: #ffffff;
    border-radius: 12px;
    border: 1px solid #dce5f2;
    box-shadow: 0 4px 14px rgba(18, 73, 158, 0.07);
    padding: 0.65rem 1.15rem;
    display: inline-flex !important;
    flex-direction: row !important;
    align-items: center !important;
    gap: 0.75rem !important;
    flex-shrink: 0 !important;
    white-space: nowrap !important;
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
    height: 36px;
    width: auto;
    display: block;
    object-fit: contain;
  }

  .dl-banner__badge-text {
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 0.8rem;
    font-weight: 800;
    color: #0b1a30;
    line-height: 1.4;
    white-space: nowrap;
  }

  /* ── Right: Visual Scene ── */
  .dl-banner__visual {
    flex: 0 0 auto;
    width: 485px;
    max-width: 45%;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    position: relative;
    z-index: 1;
    margin-left: -15px;
  }

  .dl-banner__visual img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
  }

  /* ── Responsive Rules ── */
  @media (max-width: 1140px) {
    .dl-banner__visual {
      width: 400px;
    }
    .dl-banner__mascot {
      flex: 0 0 160px;
    }
  }

  @media (max-width: 990px) {
    .dl-banner {
      width: 92%;
    }
    .dl-banner__wrap {
      flex-wrap: wrap;
      min-height: auto;
      justify-content: center;
    }
    .dl-banner__mascot {
      flex: 0 0 150px;
      padding-left: 0.5rem;
    }
    .dl-banner__content {
      padding: 1.8rem 1rem 1.4rem 1rem;
      max-width: calc(100% - 165px);
    }
    .dl-banner__visual {
      width: 100%;
      max-width: 100%;
      justify-content: center;
      margin-left: 0;
      margin-top: -0.5rem;
    }
  }

  @media (max-width: 680px) {
    .dl-banner {
      width: 94%;
      margin: 1rem auto 0.4rem;
    }
    .dl-banner__wrap {
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding-top: 1.2rem;
    }
    .dl-banner__mascot {
      width: 130px;
      padding-left: 0;
      order: 1;
    }
    .dl-banner__content {
      max-width: 100%;
      padding: 1.2rem 1rem;
      order: 2;
    }
    .dl-banner__eyebrow {
      font-size: 20px;
    }
    .dl-banner__title {
      font-size: 1.5rem;
      white-space: normal;
    }
    .dl-banner__desc {
      font-size: 0.82rem;
    }
    .dl-banner__badges {
      justify-content: center !important;
      flex-direction: column !important;
      gap: 0.75rem !important;
    }
    .dl-banner__badge {
      width: 100% !important;
      max-width: 320px;
      justify-content: center !important;
    }
    .dl-banner__visual {
      order: 3;
      margin-top: 0.5rem;
    }
  }
</style>

<section class="dl-banner" aria-label="営業資料ダウンロード">
  <div class="dl-banner__wrap">
    <!-- Left: Mascot Girl -->
    <div class="dl-banner__mascot">
      <img src="assets/img/download-mascot.png" alt="A CAN SOLUTIONS キャラクター" />
    </div>

    <!-- Center: Content -->
    <div class="dl-banner__content">
      <span class="dl-banner__eyebrow">DOWNLOAD</span>
      <h1 class="dl-banner__title">営業資料ダウンロード</h1>
      <p class="dl-banner__desc">
        A CAN SOLUTIONSのサービスや事例、会社情報などを<br />
        まとめた資料をご用意しております。<br />
        ぜひご覧いただき、貴社のご検討にお役立てください。
      </p>

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

    <!-- Right: Visual (Brochures & Mug) -->
    <div class="dl-banner__visual">
      <img src="assets/img/download-visual.png" alt="営業資料・サービスガイド・会社案内" />
    </div>
  </div>
</section>
