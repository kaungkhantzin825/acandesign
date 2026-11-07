<footer class="site-footer" style="border-top: 1px solid #e5e7eb;">
  <div class="container site-footer__inner">
    <div class="site-footer__row">
      <nav class="site-footer__nav" aria-label="フッター">
        <a class="site-footer__link" href="privacy">プライバシーポリシー</a>
        <span class="site-footer__divider" aria-hidden="true"></span>
        <a class="site-footer__link" href="/">トップページ</a>
        <span class="site-footer__divider" aria-hidden="true"></span>
        <a class="site-footer__link" href="blog-page">BLOG</a>
        <span class="site-footer__divider" aria-hidden="true"></span>
        <a class="site-footer__link" href="download">資料ダウンロード</a>
        <span class="site-footer__divider" aria-hidden="true"></span>
        <a class="site-footer__link" href="contactus">お問い合わせ</a>
      </nav>
      <div class="site-footer__social">
        <a href="https://substack.com/@acankado" target="_blank" rel="noopener" class="site-footer__social-link">
          <img src="assets/img/Substack_logo.webp" style="object-fit:contain;width:100px;" alt="Substack" width="70" height="20" loading="lazy" decoding="async" />
        </a>
        <a href="https://www.linkedin.com/in/mkado-acan-sol/" target="_blank" rel="noopener" class="site-footer__social-link">
          <img src="assets/img/linkedin-removebg-preview.webp" style="object-fit:contain;width:90px;" alt="LinkedIn" width="70" height="20" loading="lazy" decoding="async" />
        </a>
      </div>
    </div>
    <p class="site-footer__copy">
      <img src="assets/img/logo.webp" alt="" class="site-footer__logo" width="32" height="32" loading="eager" decoding="async" />
      <span>&copy; 2026 A CAN SOLUTION All Right Reserved</span>
    </p>
  </div>
</footer>

<?php include_once __DIR__ . '/chat-widget.php'; ?>

<script>
  // GA4 click tracking for every tel:/mailto: link sitewide. Delegated on
  // document (capture phase) so it works for links added after load (mobile
  // drawer, dynamically-rendered cards) without touching each page's markup.
  // No-ops quietly when gtag isn't loaded (localhost, or GA4 ID unset).
  document.addEventListener('click', function (e) {
    if (typeof window.gtag !== 'function') return;
    var a = e.target.closest('a[href^="tel:"], a[href^="mailto:"]');
    if (!a) return;
    var href = a.getAttribute('href');
    var isTel = href.indexOf('tel:') === 0;
    window.gtag('event', isTel ? 'click_to_call' : 'click_to_email', {
      link_url: href,
      page_path: window.location.pathname
    });
  }, true);
</script>

