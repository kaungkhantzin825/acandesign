(() => {
  "use strict";

  // ---- prepare reveal elements ----
  // Canva デザインで使われている 3 種類の入場アニメに合わせて、
  //  - .reveal--pop      → テキストノードを 1 文字ずつ <span class="reveal__char"> に分割
  //  - .reveal--slide-l  → 子要素を持たない場合は <span class="reveal__inner"> で包む
  //  - .reveal--slide-r  → 同上
  //  - .reveal (default) → overflow:hidden + translateY マスク wipe-up（GROW YOUR COMPANY と同じ）
  //  - <img> 単体        → .reveal--leaf として要素自体をスライドアップ
  const INLINE_TAGS = new Set([
    "A",
    "ABBR",
    "B",
    "BR",
    "CITE",
    "CODE",
    "EM",
    "I",
    "IMG",
    "MARK",
    "S",
    "SMALL",
    "SPAN",
    "STRONG",
    "SUB",
    "SUP",
    "U",
  ]);
  const KNOWN_INNER_CLASSES = [
    "hero-marketing__pre-inner",
    "hero__pre-inner",
    "hero__sub-inner",
    "hero__company-inner",
    "reveal__inner",
  ];

  // ---- .reveal--pop: 文字ごとに <span class="reveal__char"> でラップ ----
  // 配下のテキストノードを再帰的に走査し、各文字を span に置き換える。
  // 同時に CSS 変数 --reveal-char-delay で 1 文字あたり 40ms ずつ遅延させ、
  // 左から順番にポップアップするカスケード表示を実現する。
  const POP_CHAR_DELAY_MS = 40;

  function splitTextNodeIntoChars(textNode, indexRef) {
    const text = textNode.nodeValue || "";
    if (text.length === 0) {
      return;
    }
    const fragment = document.createDocumentFragment();
    for (const char of Array.from(text)) {
      if (char === "\n") {
        fragment.appendChild(document.createTextNode("\n"));
        continue;
      }
      const span = document.createElement("span");
      span.classList.add("reveal__char");
      if (char === " " || char === "\u3000") {
        span.classList.add("reveal__char--space");
        span.appendChild(document.createTextNode(char));
      } else {
        span.appendChild(document.createTextNode(char));
        span.style.setProperty(
          "--reveal-char-delay",
          `${indexRef.value * POP_CHAR_DELAY_MS}ms`
        );
        indexRef.value += 1;
      }
      fragment.appendChild(span);
    }
    textNode.parentNode.replaceChild(fragment, textNode);
  }

  function processPopNode(node, indexRef) {
    // テキストノードは分割する
    const childNodes = Array.from(node.childNodes);
    for (const child of childNodes) {
      if (child.nodeType === Node.TEXT_NODE) {
        splitTextNodeIntoChars(child, indexRef);
      } else if (child.nodeType === Node.ELEMENT_NODE) {
        // <br> は改行のまま残す。それ以外の要素は再帰的に処理。
        if (child.tagName === "BR") continue;
        processPopNode(child, indexRef);
      }
    }
  }

  document.querySelectorAll(".reveal--pop").forEach((el) => {
    const indexRef = { value: 0 };
    processPopNode(el, indexRef);
  });

  // ---- 他の .reveal バリアント: 必要に応じて inner ラッパーを付与 ----
  document.querySelectorAll(".reveal").forEach((el) => {
    // pop は文字分割済みなのでスキップ
    if (el.classList.contains("reveal--pop")) return;

    if (el.tagName === "IMG") {
      el.classList.add("reveal--leaf");
      return;
    }

    const hasBlockChild = Array.from(el.children).some(
      (child) => !INLINE_TAGS.has(child.tagName)
    );
    if (hasBlockChild) return;

    // 既に既知の inner ラッパー（hero 系・reveal__inner）を持っている場合は何もしない。
    if (
      el.children.length === 1 &&
      KNOWN_INNER_CLASSES.some((cls) => el.children[0].classList.contains(cls))
    ) {
      return;
    }

    // 子要素もテキストも無い場合は leaf 扱い。
    if (el.childNodes.length === 0) {
      el.classList.add("reveal--leaf");
      return;
    }

    const wrapper = document.createElement("span");
    wrapper.classList.add("reveal__inner");
    while (el.firstChild) wrapper.appendChild(el.firstChild);
    el.appendChild(wrapper);
  });

  // 全 .reveal に下準備が完了した時点で visibility:hidden を解除する。
  // 以降は .is-visible トリガーで子要素 / 各文字 span が遷移する。
  document.querySelectorAll(".reveal").forEach((el) => {
    el.classList.add("reveal--ready");
  });

  // ---- scroll-triggered reveal animations ----
  // IntersectionObserver で .reveal 要素を可視範囲に入ったタイミングで is-visible に切り替え、
  // CSS 側のトランジションで wipe-up / pop / slide を実行する。
  //
  // 「画面に入ったときには既にアニメが中盤」を避けるため、要素が viewport の
  // ある程度内側まで来てから発火させる。rootMargin 下端を -28% にし、threshold は 0.05
  // に下げて、要素のごく一部が viewport の中央付近に到達した時点で発火させる。
  // hero-marketing セクションも同じ閾値で観測し、可視になってから keyframe アニメを再生する。
  const REVEAL_OBSERVER_OPTIONS = {
    rootMargin: "0px 0px -28% 0px",
    threshold: 0.05,
  };

  const revealTargets = document.querySelectorAll(".reveal");
  if (revealTargets.length > 0) {
    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      }, REVEAL_OBSERVER_OPTIONS);
      revealTargets.forEach((el) => observer.observe(el));
    } else {
      // IntersectionObserver 非対応環境では即座に表示
      revealTargets.forEach((el) => el.classList.add("is-visible"));
    }
  }

  // ---- hero-marketing セクションの GROW YOUR COMPANY アニメは可視時に再生 ----
  // hero-marketing 配下の keyframe アニメは CSS で animation-play-state: paused の状態で
  // 配置されており、ここで .is-visible を付けた瞬間に running に切り替わる。
  const heroMarketing = document.querySelector(".hero-marketing");
  if (heroMarketing) {
    if ("IntersectionObserver" in window) {
      const heroObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            heroObserver.unobserve(entry.target);
          }
        });
      }, REVEAL_OBSERVER_OPTIONS);
      heroObserver.observe(heroMarketing);
    } else {
      heroMarketing.classList.add("is-visible");
    }
  }

  // ---- contact form (placeholder handling) ----
  const form = document.querySelector(".contact-form");
  if (form) {
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      window.alert(
        "お問い合わせフォームの送信処理は現在準備中です。\nお手数ですが、メールにてご連絡ください。"
      );
    });
  }

  // ---- myanmar custom scrollbar (generic) ----
  function initMyanmarScrollbar(scrollId, thumbId, barId) {
    const scroll = document.getElementById(scrollId);
    const thumb = document.getElementById(thumbId);
    const bar = document.getElementById(barId);
    if (!scroll || !thumb || !bar) return;

    const THUMB_HEIGHT = 40;
    const EASE = 0.12;
    let targetScrollTop = 0;
    let currentScrollTop = 0;
    let rafId = null;

    function getTrackHeight() { return bar.clientHeight - THUMB_HEIGHT; }
    function getMaxScroll() { return scroll.scrollHeight - scroll.clientHeight; }

    function updateThumbPosition(scrollTop) {
      const ratio = getMaxScroll() > 0 ? scrollTop / getMaxScroll() : 0;
      thumb.style.top = ratio * getTrackHeight() + "px";
    }

    function animateScroll() {
      const diff = targetScrollTop - currentScrollTop;
      if (Math.abs(diff) < 0.5) {
        currentScrollTop = targetScrollTop;
        scroll.scrollTop = currentScrollTop;
        updateThumbPosition(currentScrollTop);
        rafId = null;
        return;
      }
      currentScrollTop += diff * EASE;
      scroll.scrollTop = currentScrollTop;
      updateThumbPosition(currentScrollTop);
      rafId = requestAnimationFrame(animateScroll);
    }

    function smoothScrollTo(target) {
      targetScrollTop = Math.max(0, Math.min(target, getMaxScroll()));
      if (!rafId) rafId = requestAnimationFrame(animateScroll);
    }

    scroll.addEventListener("scroll", () => {
      currentScrollTop = scroll.scrollTop;
      targetScrollTop = currentScrollTop;
      updateThumbPosition(currentScrollTop);
    });

    bar.addEventListener("click", (e) => {
      if (e.target === bar) {
        const ratio = Math.max(0, (e.offsetY - THUMB_HEIGHT / 2)) / getTrackHeight();
        smoothScrollTo(ratio * getMaxScroll());
      }
    });

    let dragStartY = 0, dragStartScrollTop = 0, isDragging = false;

    thumb.addEventListener("mousedown", (e) => {
      isDragging = true;
      dragStartY = e.clientY;
      dragStartScrollTop = scroll.scrollTop;
      e.preventDefault();
    });

    document.addEventListener("mousemove", (e) => {
      if (!isDragging) return;
      const delta = e.clientY - dragStartY;
      smoothScrollTo(dragStartScrollTop + (delta / getTrackHeight()) * getMaxScroll());
    });

    document.addEventListener("mouseup", () => { isDragging = false; });

    updateThumbPosition(0);
  }

  // initialise both column scrollbars
  initMyanmarScrollbar("myanmar-scroll",   "myanmar-thumb",   "myanmar-scrollbar");
  initMyanmarScrollbar("myanmar-scroll-r", "myanmar-thumb-r", "myanmar-scrollbar-r");
  initMyanmarScrollbar("dl-scroll",        "dl-thumb",        "dl-scrollbar");

  // ---- back to top (smooth scroll) ----
  const backToTop = document.querySelector(".back-to-top");
  if (backToTop) {
    backToTop.addEventListener("click", (event) => {
      const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
      ).matches;
      event.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: prefersReducedMotion ? "auto" : "smooth",
      });
    });
  }
})();
