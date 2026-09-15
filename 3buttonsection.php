<style>
  .nas {
    width: 100vw;
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
    background: linear-gradient(180deg, #f4f8fc 0%, #ebf3fa 100%);
    padding: 3.8rem 1.25rem 3.2rem;
    font-family: "Noto Sans JP", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    -webkit-font-smoothing: antialiased;
  }

  .nas__inner {
    max-width: 1040px;
    margin: 0 auto;
  }

  .nas__eyebrow {
    
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.9rem;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 0.22em;
    color: #8da6c3;
    margin: 0 0 0.8rem;
  }

  .nas__eyebrow::before,
  .nas__eyebrow::after {
    content: "";
    width: 36px;
    height: 1.5px;
    background: #afc4db;
    border-radius: 1px;
  }

  .nas__title {
    text-align: center;
    font-size: clamp(1.65rem, 3.4vw, 2.25rem);
    font-weight: 900;
    color: #0b2548;
    line-height: 1.35;
    margin: 0 0 0.65rem;
    letter-spacing: 0.02em;
  }

  .nas__lead {
    text-align: center !important;
    font-size: 0.95rem;
    font-weight: 600;
    color: #4b6685;
    line-height: 1.7;
    margin: 0 auto 2.5rem !important;
    max-width: 680px;
  }

  .nas__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.25rem;
  }

  .nas__card {
    position: relative;
    display: block;
    text-decoration: none;
    color: #ffffff;
    border-radius: 14px;
    transition: transform 0.22s ease, box-shadow 0.22s ease;
  }

  .nas__card:hover {
    transform: translateY(-4px);
    color: #ffffff;
  }

  .nas__card--blue:hover  { box-shadow: 0 14px 30px rgba(0, 94, 200, 0.28); }
  .nas__card--green:hover { box-shadow: 0 14px 30px rgba(5, 145, 66, 0.28); }
  .nas__card--orange:hover{ box-shadow: 0 14px 30px rgba(230, 86, 0, 0.28); }

  .nas__card-inner {
    border-radius: 14px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
    box-shadow: 0 8px 22px rgba(12, 37, 76, 0.12);
  }

  /* Badge positioned top-left overlapping */
  .nas__badge {
    position: absolute;
    top: -10px;
    left: -2px;
    width: 33px;
    height: 33px;
    border-radius: 50%;
    border: 2px solid #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 0.92rem;
    font-weight: 900;
    color: #ffffff;
    z-index: 2;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }

  .nas__card--blue .nas__badge   { background: #02479e; }
  .nas__card--green .nas__badge  { background: #006b32; }
  .nas__card--orange .nas__badge { background: #b83a00; }

  /* Body background gradients */
  .nas__card--blue .nas__card-body   { background: linear-gradient(135deg, #187ce6 0%, #005ec8 100%); }
  .nas__card--green .nas__card-body  { background: linear-gradient(135deg, #18b556 0%, #059142 100%); }
  .nas__card--orange .nas__card-body { background: linear-gradient(135deg, #ff8008 0%, #e65600 100%); }

  .nas__card-body {
    flex: 1;
    display: flex;
    align-items: center;
    gap: 0.85rem;
    padding: 1.15rem 1rem 1.15rem 1rem;
  }

  /* White Circle for Icon */
  .nas__icon-wrap {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: #ffffff;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 7px rgba(0, 0, 0, 0.08);
  }

  /* Content area */
  .nas__card-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-width: 0;
  }

  .nas__card-sub {
    display: block;
    font-size: 0.82rem;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: 0.02em;
    color: #ffffff;
    margin-bottom: 0.22rem;
    white-space: nowrap;
  }

  .nas__card-title {
    display: block;
    font-size: 1.24rem;
    font-weight: 900;
    line-height: 1.25;
    letter-spacing: -0.01em;
    color: #ffffff;
    white-space: nowrap;
  }

  .nas__card--orange .nas__card-title {
    font-size: 1.16rem;
    line-height: 1.28;
    white-space: normal;
  }

  /* White Circle Arrow inside Body */
  .nas__circle-arrow {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #ffffff;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease;
  }

  .nas__card:hover .nas__circle-arrow,
  .nas__card:hover .nas__foot-arrow--circle {
    transform: translateX(2px);
  }

  /* Footer bar */
  .nas__card-foot {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.5rem;
    padding: 0.72rem 1rem;
    font-size: 0.74rem;
    font-weight: 700;
    line-height: 1.4;
    letter-spacing: 0.01em;
  }

  .nas__card--blue .nas__card-foot   { background: #064898; }
  .nas__card--green .nas__card-foot  { background: #016830; }
  .nas__card--orange .nas__card-foot { background: #962e00; }

  .nas__foot-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    flex-shrink: 0;
    transition: transform 0.2s ease;
  }

  .nas__card:hover .nas__foot-arrow {
    transform: translateX(2px);
  }

  /* Special circle arrow in Card 3 footer */
  .nas__foot-arrow--circle {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.12);
  }

  /* Trust Indicators */
  .nas__trust {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 3.2rem;
    margin-top: 2.4rem;
  }

  .nas__trust-item {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.95rem;
    font-weight: 700;
    color: #1e3a5f;
  }

  .nas__trust-item svg {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
  }

  @media (max-width: 960px) {
    .nas__grid {
      grid-template-columns: 1fr;
      max-width: 440px;
      margin: 0 auto;
      gap: 1.6rem;
    }
  }

  @media (max-width: 560px) {
    .nas {
      padding: 2.75rem 1rem 2.5rem;
    }
    .nas__trust {
      gap: 1rem 1.8rem;
      margin: 2rem auto 0;
    }
  }
</style>

<section class="nas" aria-labelledby="nas-title">
  <div class="nas__inner">
    <p class="nas__eyebrow">NEXT ACTION</p>
    <h2 class="nas__title" id="nas-title">次の一歩で、 もっと具体的に</h2>
    <p class="nas__lead">サービスの詳細・資料・ご相談など、目的に合わせてお選びください。</p>

    <div class="nas__grid">

      <!-- 01 Blue Card -->
      <a href="index.php#services" class="nas__card nas__card--blue">
        <span class="nas__badge">01</span>
        <div class="nas__card-inner">
          <div class="nas__card-body">
            <div class="nas__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 36 36" width="46" height="46" fill="none">
                <!-- Screen -->
                <rect x="6" y="6.5" width="24" height="16.5" rx="2.2" stroke="#0059b3" stroke-width="2.6" fill="#ffffff" />
                <!-- 2 display lines -->
                <line x1="10.5" y1="11.5" x2="22" y2="11.5" stroke="#0059b3" stroke-width="2.4" stroke-linecap="round" />
                <line x1="10.5" y1="15.5" x2="17.5" y2="15.5" stroke="#0059b3" stroke-width="2.4" stroke-linecap="round" />
                <!-- Base -->
                <path d="M3.5 24h29c.9 0 1.5.5 1.3 1.3l-1.3 3c-.2.5-.7.9-1.3.9H4.8c-.6 0-1.1-.4-1.3-.9l-1.3-3c-.2-.8.4-1.3 1.3-1.3z" fill="#0059b3" />
                <!-- Trackpad / slot -->
                <rect x="15" y="25.2" width="6" height="1.6" rx="0.8" fill="#ffffff" />
              </svg>
            </div>
            <div class="nas__card-content">
              <span class="nas__card-sub">A CAN SOLUTIONS</span>
              <span class="nas__card-title">サービスを見る</span>
            </div>
            <div class="nas__circle-arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#005ec8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6" />
              </svg>
            </div>
          </div>
          <div class="nas__card-foot">
            <span>対応業務・実績・導入の流れをご紹介</span>
            <span class="nas__foot-arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6" />
              </svg>
            </span>
          </div>
        </div>
      </a>

      <!-- 02 Green Card -->
      <a href="download.php" class="nas__card nas__card--green">
        <span class="nas__badge">02</span>
        <div class="nas__card-inner">
          <div class="nas__card-body">
            <div class="nas__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 36 36" width="46" height="46" fill="none">
                <!-- Document outline with fold cut -->
                <path d="M8.5 6.5a2 2 0 0 1 2-2h10l6.5 6.5v14a2 2 0 0 1-2 2h-14.5a2 2 0 0 1-2-2v-18.5z" stroke="#00883d" stroke-width="2.6" stroke-linejoin="round" fill="#ffffff" />
                <!-- Solid green folded corner -->
                <path d="M20.5 4.5v5a1.5 1.5 0 0 0 1.5 1.5h5z" fill="#00883d" />
                <!-- 3 text lines -->
                <line x1="12.5" y1="13.5" x2="20.5" y2="13.5" stroke="#00883d" stroke-width="2.3" stroke-linecap="round" />
                <line x1="12.5" y1="17.5" x2="20.5" y2="17.5" stroke="#00883d" stroke-width="2.3" stroke-linecap="round" />
                <line x1="12.5" y1="21.5" x2="17" y2="21.5" stroke="#00883d" stroke-width="2.3" stroke-linecap="round" />
                <!-- Download circle badge at bottom-right -->
                <circle cx="24.5" cy="24.5" r="7" fill="#00883d" stroke="#ffffff" stroke-width="2.6" />
                <!-- Down arrow inside circle -->
                <line x1="24.5" y1="21" x2="24.5" y2="27.5" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" />
                <polyline points="22 25 24.5 27.5 27 25" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="nas__card-content">
              <span class="nas__card-sub">AI×BPO活用</span>
              <span class="nas__card-title">資料をダウンロード</span>
            </div>
            <div class="nas__circle-arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="#059142" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6" />
              </svg>
            </div>
          </div>
          <div class="nas__card-foot">
            <span>事例・料金・業務設計のポイントを掲載</span>
            <span class="nas__foot-arrow" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6" />
              </svg>
            </span>
          </div>
        </div>
      </a>

      <!-- 03 Orange Card -->
      <a href="contectus.php" class="nas__card nas__card--orange">
        <span class="nas__badge">03</span>
        <div class="nas__card-inner">
          <div class="nas__card-body">
            <div class="nas__icon-wrap" aria-hidden="true">
              <svg viewBox="0 0 36 36" width="46" height="46" fill="none">
                <!-- Back bubble (bottom-right) -->
                <path d="M19 17.5c0-3.5 3.5-6.5 8-6.5 4.5 0 8 3 8 6.5 0 2-.9 3.8-2.5 5l.6 3.5-3.8-1.5c-.7.3-1.5.5-2.3.5-4.5 0-8-3-8-6.5z" fill="#e85e09" />
                <!-- Front bubble (top-left, with white border to separate from back bubble) -->
                <path d="M5 14.5c0-4.7 4.7-8.5 10.5-8.5s10.5 3.8 10.5 8.5-4.7 8.5-10.5 8.5c-1.5 0-3-.3-4.2-.8L6.8 24.5l1.1-3.6C6.1 19.2 5 17 5 14.5z" fill="#e85e09" stroke="#ffffff" stroke-width="2.6" stroke-linejoin="round" />
                <!-- 3 white dots inside front bubble -->
                <circle cx="11.5" cy="14.5" r="1.6" fill="#ffffff" />
                <circle cx="15.5" cy="14.5" r="1.6" fill="#ffffff" />
                <circle cx="19.5" cy="14.5" r="1.6" fill="#ffffff" />
              </svg>
            </div>
            <div class="nas__card-content">
              <span class="nas__card-sub">まずは気軽に相談する</span>
              <span class="nas__card-title">自社業務の外注化を<br>無料相談する</span>
            </div>
          </div>
          <div class="nas__card-foot">
            <span>課題の整理から最適なプランをご提案</span>
            <span class="nas__foot-arrow--circle" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="#b83a00" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6" />
              </svg>
            </span>
          </div>
        </div>
      </a>

    </div>

    <!-- Trust Indicators -->
    <div class="nas__trust">
      <span class="nas__trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="9" />
          <polyline points="8.5 12.5 11 15 15.5 9.5" />
        </svg>
        相談無料
      </span>
      <span class="nas__trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="9" />
          <polyline points="8.5 12.5 11 15 15.5 9.5" />
        </svg>
        オンライン対応
      </span>
      <span class="nas__trust-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="9" />
          <polyline points="8.5 12.5 11 15 15.5 9.5" />
        </svg>
        最短での導入も可能
      </span>
    </div>
  </div>
</section>
