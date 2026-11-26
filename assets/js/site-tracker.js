/*
 * Site analytics tracker — sends anonymous events to /analytics-track.php
 * (report: admin > アクセス解析). Loaded on every page by footer.php; does
 * nothing except on tracked pages:
 *
 *   blog posts (article.blog-post)  view + reading time/scroll
 *   /download, /myanmar-situation   view + reading time/scroll + document downloads
 *   any page with blog cards        list_click when a card is clicked
 *
 * Visitors are a random id in localStorage — no cookies, no personal data.
 * Titles of posts and documents are looked up on the server, not sent from here.
 */
(function () {
  "use strict";

  var ENDPOINT = "/analytics-track.php";
  var PAGES = { "download": "download", "myanmar-situation": "myanmar" }; // keep in sync with ANALYTICS_PAGES
  var DOC_FILE = /\.(pdf|zip|docx?|xlsx?|pptx?)$/i;

  // "/ocr-dx", "/ocr-dx.php" or "ocr-dx" -> "ocr-dx" (same-site links only)
  function slugOf(href) {
    try {
      var url = new URL(href, window.location.href);
      if (url.origin !== window.location.origin) return "";
      return (url.pathname.replace(/\/+$/, "").split("/").pop() || "").replace(/\.php$/, "");
    } catch (e) { return ""; }
  }

  var article = document.querySelector("article.blog-post");
  var pageSlug = slugOf(window.location.href);
  var kind = article ? "blog" : (PAGES[pageSlug] || "");
  var hasCards = !!document.querySelector("a.blog-card__link");
  if ((!kind || !pageSlug) && !hasCards) return;

  function randomId() {
    var bytes = new Uint8Array(16);
    if (window.crypto && window.crypto.getRandomValues) {
      window.crypto.getRandomValues(bytes);
    } else {
      for (var i = 0; i < 16; i++) bytes[i] = Math.floor(Math.random() * 256);
    }
    return Array.prototype.map.call(bytes, function (b) { return ("0" + b.toString(16)).slice(-2); }).join("");
  }

  function storage(key, value) {
    try {
      if (value === undefined) return window.localStorage.getItem(key);
      window.localStorage.setItem(key, value);
    } catch (e) { /* private mode / blocked storage: fall back to a per-page id */ }
    return null;
  }

  var visitorId = storage("acan_vid");
  if (!/^[a-f0-9]{32}$/.test(visitorId || "")) {
    visitorId = randomId();
    storage("acan_vid", visitorId);
  }

  var timeZone = "";
  try { timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone || ""; } catch (e) {}

  function send(data) {
    var body = JSON.stringify(data);
    try {
      if (navigator.sendBeacon && navigator.sendBeacon(ENDPOINT, new Blob([body], { type: "application/json" }))) return;
    } catch (e) {}
    try {
      fetch(ENDPOINT, { method: "POST", body: body, keepalive: true, headers: { "Content-Type": "application/json" } }).catch(function () {});
    } catch (e) {}
  }

  function base(type, slug) {
    return {
      type: type,
      slug: slug,
      visitor_id: visitorId,
      tz: timeZone,
      lang: navigator.language || "",
      touch: (navigator.maxTouchPoints || 0) > 1 ? 1 : 0
    };
  }

  // ── Blog card clicks (blog list, or anywhere cards appear) ──
  if (hasCards) {
    document.addEventListener("click", function (e) {
      var link = e.target.closest && e.target.closest("a.blog-card__link");
      if (!link) return;
      var slug = slugOf(link.getAttribute("href"));
      if (!slug) return;
      var data = base("list_click", slug);
      data.page = window.location.pathname;
      send(data);
    }, true);
  }

  if (!kind || !pageSlug) return;

  // ── Document downloads (/download, /myanmar-situation) ──
  if (kind !== "blog") {
    document.addEventListener("click", function (e) {
      var link = e.target.closest && e.target.closest("a[href]");
      if (!link) return;
      var href = link.getAttribute("href");
      var path = "";
      try { path = new URL(href, window.location.href).pathname; } catch (err) { return; }
      if (!DOC_FILE.test(path)) return;
      var data = base("download", pageSlug);
      data.href = href; // exactly as written in the page, so the server can find the link
      data.referrer = document.referrer || "";
      send(data);
    }, true);
  }

  // ── Page view + reading time + scroll depth ──
  var firstView = !storage("acan_seen_" + kind);
  storage("acan_seen_" + kind, "1");

  var viewId = randomId();
  var view = base("view", pageSlug);
  view.view_id = viewId;
  view.referrer = document.referrer || "";
  view.first_view = firstView ? 1 : 0;
  send(view);

  // Blog posts: how far through the article text — from the top of the first
  // .blog-post__content section to the bottom of the last (posts have 1–10 of
  // them; measuring only the first would count reading the intro as 100%).
  // Other pages: the whole page.
  var sections = article ? article.querySelectorAll(".blog-post__content") : [];
  var activeMs = 0;
  var visibleSince = document.visibilityState === "visible" ? Date.now() : null;
  var maxScroll = 0;
  var lastSent = "";

  function measureScroll() {
    var height, seen;
    if (article) {
      var first = (sections[0] || article).getBoundingClientRect();
      var last = (sections[sections.length - 1] || article).getBoundingClientRect();
      height = last.bottom - first.top;
      seen = window.innerHeight - first.top;
    } else {
      height = document.documentElement.scrollHeight;
      seen = window.scrollY + window.innerHeight;
    }
    var pct = height > 0 ? Math.round(seen / height * 100) : 100;
    pct = Math.max(0, Math.min(100, pct));
    if (pct > maxScroll) maxScroll = pct;
  }

  var ticking = false;
  window.addEventListener("scroll", function () {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(function () { measureScroll(); ticking = false; });
  }, { passive: true });
  measureScroll();

  function pause() {
    if (visibleSince !== null) {
      activeMs += Date.now() - visibleSince;
      visibleSince = null;
    }
  }

  function flush() {
    // Measure once more: the scroll handler waits for an animation frame, which
    // never comes if the reader scrolls and leaves at once (or the tab is hidden).
    measureScroll();
    var seconds = Math.round(activeMs / 1000);
    var key = seconds + ":" + maxScroll;
    if (key === lastSent || (seconds === 0 && maxScroll === 0)) return;
    lastSent = key;
    send({ type: "engage", view_id: viewId, seconds: seconds, scroll: maxScroll });
  }

  document.addEventListener("visibilitychange", function () {
    if (document.visibilityState === "hidden") {
      pause();
      flush();
    } else {
      visibleSince = Date.now();
    }
  });
  window.addEventListener("pagehide", function () { pause(); flush(); });
})();
