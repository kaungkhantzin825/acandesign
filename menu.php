<style>
  /* ── Desktop nav gap ── */
  .site-header__nav {
    gap: 0.9rem;
  }

  /* Extra breathing room between logo and nav, only once the screen
     is wide enough to spare it (prevents overflow on tablets/laptops,
     e.g. iPad Pro at 1024px) */
  @media (min-width: 1300px) {
    .site-header__nav {
      gap: 2.75rem;
      margin-left: 8.5rem;
    }
  }

  /* ── Hamburger button — mobile only ── */
  .site-header__hamburger {
    display: none;
    flex-direction: column;
    justify-content: center;
    gap: 5px;
    width: 36px;
    height: 36px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 4px;
    margin-left: auto;
    flex-shrink: 0;
  }

  .site-header__hamburger span {
    display: block;
    width: 22px;
    height: 2px;
    background: #1a1a2e;
    border-radius: 2px;
    transition: transform 0.25s, opacity 0.25s;
    transform-origin: center;
  }

  .site-header__hamburger.is-open span:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
  }
  .site-header__hamburger.is-open span:nth-child(2) {
    opacity: 0;
  }
  .site-header__hamburger.is-open span:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
  }

  /* ── Mobile nav drawer ── */
  .site-nav-drawer {
    display: none;
    position: fixed;
    top: 60px;
    left: 0;
    right: 0;
    background: #fff;
    border-bottom: 2px solid #e2e8f0;
    z-index: 199;
    padding: 0.5rem 1.5rem 1.5rem;
    flex-direction: column;
    box-shadow: 0 6px 16px rgba(0,0,0,0.09);
  }

  .site-nav-drawer.is-open {
    display: flex;
  }

  .site-nav-drawer__link {
    display: block;
    padding: 0.9rem 0;
    font-size: 15px;
    font-weight: 700;
    font-family: "Anonymous Pro", monospace;
    color: #1a1a2e;
    text-decoration: none;
    border-bottom: 1px solid #f0f0f0;
  }

  .site-nav-drawer__link:last-of-type {
    border-bottom: none;
  }

  .site-nav-drawer__ctas {
    display: flex;
    flex-direction: column;
    gap: 0.6rem;
    margin-top: 1rem;
  }

  .site-nav-drawer__cta {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.4rem;
    padding: 0.7rem 1rem;
    border-radius: 999px;
    font-size: 15px;
    font-weight: 700;
    font-family: "Anonymous Pro", monospace;
    text-decoration: none;
    color: #fff;
    background: #12499e;
  }

  .site-nav-drawer__cta--dl {
    background: #dc2626;
  }

  /* ── Mobile breakpoint ── */
  @media (max-width: 767px) {
    .site-header__hamburger { display: flex; }
    .site-header__cta { display: none; }
  }

  @media (min-width: 768px) {
    .site-nav-drawer { display: none !important; }
    .site-header__hamburger { display: none !important; }
  }
</style>

<header class="site-header">
  <div class="site-header__inner">
    <a href="index.php#top" class="site-header__logo">
      <img src="assets/img/logo.webp" alt="A CAN SOLUTIONS" width="34" height="34" />
      <span>A CAN SOLUTIONS</span>
    </a>
    <nav class="site-header__nav" aria-label="Main navigation">
      <a href="index.php#services">サービス</a>
      <a href="blog-page.php">BLOG</a>
      <a href="myanmar-situation.php">Myanmar situation</a>
      <a href="profile.php">会社情報&nbsp;&nbsp;</a>
    </nav>
    <a href="download.php" class="site-header__cta site-header__cta--dl">資料ダウンロード <span class="site-header__cta-icon">&rarr;</span></a>
    <a href="contectus.php" class="site-header__cta">お問い合わせ <span class="site-header__cta-icon">&rarr;</span></a>
    <button class="site-header__hamburger" id="navToggle" aria-label="メニューを開く" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>

<!-- Mobile drawer (outside header so it drops below the fixed bar) -->
<nav class="site-nav-drawer" id="navDrawer" aria-label="モバイルナビゲーション">
  <a href="index.php#services" class="site-nav-drawer__link">サービス</a>
  <a href="blog-page.php" class="site-nav-drawer__link">BLOG</a>
  <a href="myanmar-situation.php" class="site-nav-drawer__link">Myanmar situation</a>
  <a href="profile.php" class="site-nav-drawer__link">会社情報</a>
  <div class="site-nav-drawer__ctas">
    <a href="download.php" class="site-nav-drawer__cta site-nav-drawer__cta--dl">資料ダウンロード &rarr;</a>
    <a href="contectus.php" class="site-nav-drawer__cta">お問い合わせ &rarr;</a>
  </div>
</nav>

<script>
  (function () {
    var btn = document.getElementById('navToggle');
    var drawer = document.getElementById('navDrawer');
    if (!btn || !drawer) return;

    btn.addEventListener('click', function () {
      var open = drawer.classList.toggle('is-open');
      btn.classList.toggle('is-open', open);
      btn.setAttribute('aria-expanded', String(open));
    });

    drawer.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        drawer.classList.remove('is-open');
        btn.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
      });
    });
  })();
</script>
