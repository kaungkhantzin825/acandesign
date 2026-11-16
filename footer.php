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
  // Click/download tracking, delegated on document (capture phase) so it
  // works for links added after load (mobile drawer, dynamically-rendered
  // cards) without touching each page's markup. Every event is sent to GA4
  // AND logged to our own DB (log-event.php) so the admin panel can show a
  // GA-style click/download report without needing the real GA4 account.
  // No-ops quietly when gtag isn't loaded (localhost, or GA4 ID unset).
  function acanLogEvent(eventName, linkUrl) {
    var payload = JSON.stringify({
      event_name: eventName,
      link_url: linkUrl,
      page_path: window.location.pathname
    });
    if (navigator.sendBeacon) {
      navigator.sendBeacon('/log-event.php', new Blob([payload], { type: 'application/json' }));
    } else {
      fetch('/log-event.php', { method: 'POST', body: payload, keepalive: true }).catch(function () {});
    }
  }

  document.addEventListener('click', function (e) {
    if (typeof window.gtag !== 'function') return;

    // Every tel:/mailto: link sitewide.
    var contact = e.target.closest('a[href^="tel:"], a[href^="mailto:"]');
    if (contact) {
      var href = contact.getAttribute('href');
      var isTel = href.indexOf('tel:') === 0;
      var contactEvent = isTel ? 'click_phone_number' : 'click_email_info';
      window.gtag('event', contactEvent, { link_url: href, page_path: window.location.pathname });
      acanLogEvent(contactEvent, href);
      return;
    }

    // Every Myanmar report/situation PDF link on myanmar-situation.php.
    var report = e.target.closest('a.myanmar-list__link');
    if (report) {
      var reportHref = report.getAttribute('href');
      window.gtag('event', 'download_myanmar_report', { link_url: reportHref, page_path: window.location.pathname });
      acanLogEvent('download_myanmar_report', reportHref);
      return;
    }

    // Every resource-library PDF download button on download.php.
    var resource = e.target.closest('a.dl-card__btn');
    if (resource) {
      var resourceHref = resource.getAttribute('href');
      window.gtag('event', 'file_download', { link_url: resourceHref, page_path: window.location.pathname });
      acanLogEvent('file_download', resourceHref);
      return;
    }

    // Any link opted in via data-ga-event="<event_name>" (e.g. document
    // download buttons). Mark the event name as a GA4 key event once it
    // has fired at least once.
    var tracked = e.target.closest('a[data-ga-event]');
    if (tracked) {
      var trackedEvent = tracked.getAttribute('data-ga-event');
      var trackedHref = tracked.getAttribute('href');
      window.gtag('event', trackedEvent, { link_url: trackedHref, page_path: window.location.pathname });
      acanLogEvent(trackedEvent, trackedHref);
    }
  }, true);
</script>

