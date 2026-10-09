/* A CAN SOLUTIONS AIアシスタント — 埋め込みウィジェット */
(()=>{var D=a=>{throw TypeError(a)};var ce=(a,e,t)=>e.has(a)||D("Cannot "+t);var R=(a,e,t)=>e.has(a)?D("Cannot add the same private member more than once"):e instanceof WeakSet?e.add(a):e.set(a,t);var l=(a,e,t)=>(ce(a,e,"access private method"),t);var P=a=>`
:host {
  all: initial;
  --acan-blue: ${a.primaryColor};
  --acan-blue-dark: ${a.primaryDark};
  --acan-red: ${a.accentColor};
  --acan-bg: #f3f6fb;
  --acan-surface: #ffffff;
  --acan-text: #1a2434;
  --acan-text-sub: #6b7a90;
  --acan-border: #e2e8f2;
  --acan-radius: 18px;
  --acan-shadow: 0 18px 48px rgba(16, 42, 82, 0.18);
  --acan-font: ${a.fontFamily};

  position: fixed;
  z-index: 2147483000;
  bottom: 0;
  ${a.position==="left"?"left: 0;":"right: 0;"}
  font-family: var(--acan-font);
  line-height: 1.6;
  color: var(--acan-text);
}

*, *::before, *::after { box-sizing: border-box; }

button { font-family: inherit; cursor: pointer; border: none; background: none; padding: 0; color: inherit; }
button:focus-visible, a:focus-visible, input:focus-visible, textarea:focus-visible {
  outline: 2px solid var(--acan-blue);
  outline-offset: 2px;
}

.root {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: ${a.position==="left"?"flex-start":"flex-end"};
  gap: 12px;
  padding: 0 20px 20px;
}

/* ── 起動ボタン ───────────────────────────────────────── */

.launcher {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px 18px 8px 8px;
  background: linear-gradient(120deg, var(--acan-blue-dark), var(--acan-blue) 55%, #2f6fd0);
  color: #fff;
  border-radius: 999px;
  box-shadow: var(--acan-shadow);
  transition: transform 0.18s ease, box-shadow 0.18s ease;
  max-width: min(320px, calc(100vw - 40px));
}
.launcher:hover { transform: translateY(-2px); box-shadow: 0 22px 54px rgba(16, 42, 82, 0.26); }
.launcher:active { transform: translateY(0); }
.launcher[hidden] { display: none; }

.launcher__avatar {
  width: 44px; height: 44px;
  border-radius: 50%;
  object-fit: cover;
  background: #fff;
  border: 2px solid rgba(255, 255, 255, 0.85);
  flex-shrink: 0;
}
.launcher__text { text-align: left; min-width: 0; }
.launcher__title { display: block; font-size: 14px; font-weight: 700; letter-spacing: 0.01em; white-space: nowrap; }
.launcher__status { display: flex; align-items: center; gap: 5px; font-size: 11px; opacity: 0.9; }

.status-dot {
  width: 7px; height: 7px;
  border-radius: 50%;
  background: #4ade80;
  box-shadow: 0 0 0 0 rgba(74, 222, 128, 0.7);
  animation: acan-pulse 2.4s infinite;
  flex-shrink: 0;
}
@keyframes acan-pulse {
  0%   { box-shadow: 0 0 0 0 rgba(74, 222, 128, 0.6); }
  70%  { box-shadow: 0 0 0 7px rgba(74, 222, 128, 0); }
  100% { box-shadow: 0 0 0 0 rgba(74, 222, 128, 0); }
}

/* 未読・誘導用の吹き出し */
.teaser {
  position: relative;
  max-width: min(260px, calc(100vw - 40px));
  padding: 12px 34px 12px 14px;
  background: #fff;
  border-radius: 14px;
  box-shadow: var(--acan-shadow);
  font-size: 13px;
  color: var(--acan-text);
  animation: acan-rise 0.4s ease both;
}
.teaser[hidden] { display: none; }
.teaser::after {
  content: '';
  position: absolute;
  bottom: -7px;
  ${a.position==="left"?"left: 28px;":"right: 28px;"}
  width: 14px; height: 14px;
  background: #fff;
  transform: rotate(45deg);
}
.teaser__close {
  position: absolute; top: 6px; right: 8px;
  width: 20px; height: 20px;
  color: var(--acan-text-sub);
  font-size: 15px; line-height: 1;
  border-radius: 50%;
}
.teaser__close:hover { background: #f0f3f8; }

@keyframes acan-rise {
  from { opacity: 0; transform: translateY(8px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* ── パネル ───────────────────────────────────────────── */

.panel {
  display: flex;
  flex-direction: column;
  width: min(392px, calc(100vw - 32px));
  height: min(640px, calc(100vh - 100px));
  background: var(--acan-surface);
  border-radius: var(--acan-radius);
  box-shadow: var(--acan-shadow);
  overflow: hidden;
  animation: acan-open 0.26s cubic-bezier(0.22, 1, 0.36, 1) both;
}
.panel[hidden] { display: none; }

@keyframes acan-open {
  from { opacity: 0; transform: translateY(18px) scale(0.97); }
  to   { opacity: 1; transform: translateY(0) scale(1); }
}

.header {
  display: flex;
  align-items: center;
  gap: 11px;
  padding: 14px 14px 14px 16px;
  background: linear-gradient(100deg, var(--acan-blue-dark) 0%, var(--acan-blue) 46%, var(--acan-red) 100%);
  color: #fff;
  flex-shrink: 0;
}
.header__avatar {
  width: 38px; height: 38px;
  border-radius: 50%;
  object-fit: cover;
  background: #fff;
  border: 2px solid rgba(255, 255, 255, 0.9);
  flex-shrink: 0;
}
.header__meta { flex: 1; min-width: 0; }
.header__title { font-size: 15px; font-weight: 700; letter-spacing: 0.01em; }
.header__status { display: flex; align-items: center; gap: 5px; font-size: 11px; opacity: 0.92; }
.header__actions { display: flex; gap: 2px; }
.header__btn {
  width: 30px; height: 30px;
  display: grid; place-items: center;
  border-radius: 8px;
  color: #fff;
  transition: background 0.15s ease;
}
.header__btn:hover { background: rgba(255, 255, 255, 0.18); }

/* ── メッセージ一覧 ───────────────────────────────────── */

.log {
  flex: 1;
  overflow-y: auto;
  overscroll-behavior: contain;
  padding: 18px 14px 8px;
  background: var(--acan-bg);
  display: flex;
  flex-direction: column;
  gap: 14px;
  scrollbar-width: thin;
}
.log::-webkit-scrollbar { width: 6px; }
.log::-webkit-scrollbar-thumb { background: #cdd8e8; border-radius: 3px; }

.row { display: flex; gap: 9px; align-items: flex-end; animation: acan-rise 0.28s ease both; }
.row--user { flex-direction: row-reverse; }

.row__avatar {
  width: 30px; height: 30px;
  border-radius: 50%;
  object-fit: cover;
  background: #fff;
  border: 1px solid var(--acan-border);
  flex-shrink: 0;
}
.row__avatar--user {
  display: grid; place-items: center;
  background: #dbe5f5;
  color: var(--acan-blue-dark);
  border-color: #c9d8ef;
}

.bubble {
  max-width: 78%;
  padding: 11px 14px;
  font-size: 13.5px;
  border-radius: 16px;
  white-space: pre-wrap;
  word-break: break-word;
}
.bubble--bot {
  background: #fff;
  border: 1px solid var(--acan-border);
  border-bottom-left-radius: 5px;
  box-shadow: 0 2px 6px rgba(20, 45, 90, 0.05);
}
.bubble--user {
  background: linear-gradient(135deg, var(--acan-blue), var(--acan-blue-dark));
  color: #fff;
  border-bottom-right-radius: 5px;
}
.bubble--error {
  background: #fef2f2;
  border: 1px solid #fecaca;
  color: #b42318;
}
/* Markdown 描画時は pre-wrap を外し、リストや段落の余白で整形する */
.bubble--md {
  white-space: normal;
  line-height: 1.65;
}
.bubble--md > :first-child { margin-top: 0; }
.bubble--md > :last-child { margin-bottom: 0; }
.bubble--md p { margin: 0 0 0.65em; }
.bubble--md h1,
.bubble--md h2,
.bubble--md h3 {
  margin: 0.85em 0 0.35em;
  font-size: 1em;
  font-weight: 700;
  line-height: 1.4;
  color: var(--acan-ink, #1a2b4a);
}
.bubble--md ul,
.bubble--md ol {
  margin: 0.35em 0 0.75em;
  padding-left: 1.35em;
}
.bubble--md li { margin: 0.2em 0; }
.bubble--md li + li { margin-top: 0.45em; }
.bubble--md strong { font-weight: 700; }
.bubble--md em { font-style: italic; }
.bubble--md code {
  font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
  font-size: 0.92em;
  background: #eef3fb;
  padding: 0.1em 0.35em;
  border-radius: 4px;
}
.bubble--md a {
  color: var(--acan-blue, #1546a0);
  text-decoration: underline;
  text-underline-offset: 2px;
}

/* 入力中インジケータ */
.typing { display: inline-flex; gap: 4px; padding: 3px 0; }
.typing span {
  width: 6px; height: 6px;
  border-radius: 50%;
  background: #b3c1d6;
  animation: acan-bounce 1.3s infinite;
}
.typing span:nth-child(2) { animation-delay: 0.18s; }
.typing span:nth-child(3) { animation-delay: 0.36s; }
@keyframes acan-bounce {
  0%, 60%, 100% { transform: translateY(0); opacity: 0.55; }
  30%           { transform: translateY(-5px); opacity: 1; }
}

/* ── クイックリプライ ─────────────────────────────────── */

.quick { display: flex; flex-direction: column; gap: 8px; padding-left: 39px; }
.quick__btn {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  width: 100%;
  padding: 11px 12px 11px 15px;
  background: #fff;
  border: 1px solid var(--acan-border);
  border-radius: 12px;
  font-size: 13px;
  font-weight: 600;
  color: var(--acan-blue-dark);
  text-align: left;
  transition: border-color 0.15s ease, transform 0.15s ease, box-shadow 0.15s ease;
}
.quick__btn:hover {
  border-color: var(--acan-blue);
  transform: translateX(2px);
  box-shadow: 0 4px 14px rgba(21, 70, 160, 0.12);
}
.quick__chevron {
  width: 20px; height: 20px;
  display: grid; place-items: center;
  border-radius: 50%;
  background: var(--acan-blue);
  color: #fff;
  flex-shrink: 0;
}

/* ── カード共通 ───────────────────────────────────────── */

.card {
  margin-left: 39px;
  padding: 14px;
  background: #fff;
  border: 1px solid var(--acan-border);
  border-radius: 14px;
  box-shadow: 0 2px 8px rgba(20, 45, 90, 0.06);
  animation: acan-rise 0.3s ease both;
}
.card__title {
  display: flex; align-items: center; gap: 7px;
  font-size: 12px; font-weight: 700;
  color: var(--acan-text-sub);
  letter-spacing: 0.04em;
  margin-bottom: 11px;
}

/* 資料カード */
.doc {
  display: flex;
  align-items: center;
  gap: 11px;
  width: 100%;
  padding: 10px;
  border-radius: 10px;
  text-align: left;
  text-decoration: none;
  color: inherit;
  transition: background 0.15s ease;
}
.doc + .doc { border-top: 1px solid #f0f3f8; }
.doc:hover { background: #f7f9fd; }
.doc__icon {
  width: 34px; height: 34px;
  display: grid; place-items: center;
  border-radius: 8px;
  background: #fdeaea;
  color: var(--acan-red);
  flex-shrink: 0;
}
.doc__body { min-width: 0; flex: 1; }
.doc__title { font-size: 13px; font-weight: 600; }
.doc__meta { font-size: 11px; color: var(--acan-text-sub); }
.doc__lock { font-size: 10px; color: var(--acan-blue); font-weight: 600; }

/* 見積もりカード */
.estimate__amount {
  font-size: 21px;
  font-weight: 800;
  color: var(--acan-blue-dark);
  letter-spacing: -0.01em;
  line-height: 1.35;
}
.estimate__scope { font-size: 12px; color: var(--acan-text-sub); margin-bottom: 8px; }
.estimate__list { margin: 10px 0 0; padding: 10px 0 0; border-top: 1px dashed var(--acan-border); }
.estimate__item { display: flex; gap: 6px; font-size: 11.5px; color: var(--acan-text-sub); }
.estimate__item + .estimate__item { margin-top: 4px; }
.estimate__note { margin-top: 9px; font-size: 11px; color: #8494a8; }

/* 事例カード */
.case + .case { margin-top: 10px; padding-top: 10px; border-top: 1px solid #f0f3f8; }
.case__industry {
  display: inline-block;
  padding: 1px 8px;
  border-radius: 999px;
  background: #eaf1fc;
  color: var(--acan-blue-dark);
  font-size: 10.5px;
  font-weight: 700;
  margin-bottom: 5px;
}
.case__title { font-size: 13px; font-weight: 700; }
.case__result { font-size: 11.5px; color: var(--acan-text-sub); margin-top: 3px; }

/* 空き枠 */
.slots { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
.slot {
  padding: 9px 6px;
  border: 1px solid var(--acan-border);
  border-radius: 10px;
  background: #fff;
  font-size: 12.5px;
  font-weight: 600;
  color: var(--acan-blue-dark);
  transition: all 0.15s ease;
}
.slot:hover { border-color: var(--acan-blue); background: #f5f9ff; }
.slot[aria-pressed="true"] { background: var(--acan-blue); color: #fff; border-color: var(--acan-blue); }

/* サービス選択 */
.services { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
.service {
  padding: 10px;
  border: 1px solid var(--acan-border);
  border-radius: 10px;
  text-align: left;
  transition: all 0.15s ease;
}
.service:hover { border-color: var(--acan-blue); background: #f5f9ff; }
.service__name { font-size: 12.5px; font-weight: 700; color: var(--acan-blue-dark); }
.service__tagline { font-size: 10.5px; color: var(--acan-text-sub); margin-top: 2px; }

/* ── フォーム ─────────────────────────────────────────── */

.field { margin-bottom: 10px; }
.field__label { display: block; font-size: 11.5px; font-weight: 700; color: var(--acan-text-sub); margin-bottom: 4px; }
.field__required { color: var(--acan-red); margin-left: 3px; }
.field__input, .field__textarea {
  width: 100%;
  padding: 9px 11px;
  border: 1px solid var(--acan-border);
  border-radius: 9px;
  font-size: 13px;
  font-family: inherit;
  color: var(--acan-text);
  background: #fbfcfe;
  transition: border-color 0.15s ease, background 0.15s ease;
}
.field__input:focus, .field__textarea:focus { border-color: var(--acan-blue); background: #fff; }
.field__textarea { resize: vertical; min-height: 62px; }
.field__error { font-size: 11px; color: var(--acan-red); margin-top: 3px; }
.field--invalid .field__input, .field--invalid .field__textarea { border-color: var(--acan-red); background: #fff7f7; }

.submit {
  width: 100%;
  padding: 11px;
  margin-top: 4px;
  background: linear-gradient(135deg, var(--acan-blue), var(--acan-blue-dark));
  color: #fff;
  border-radius: 10px;
  font-size: 13.5px;
  font-weight: 700;
  transition: opacity 0.15s ease, transform 0.15s ease;
}
.submit:hover:not(:disabled) { transform: translateY(-1px); }
.submit:disabled { opacity: 0.55; cursor: not-allowed; }

.privacy { margin-top: 8px; font-size: 10.5px; color: #8494a8; text-align: center; }
.privacy a { color: var(--acan-blue); }

/* フィードバック */
.feedback__question { font-size: 12.5px; font-weight: 600; text-align: center; margin-bottom: 11px; }
.feedback__buttons { display: flex; gap: 9px; justify-content: center; }
.feedback__btn {
  display: flex; align-items: center; gap: 6px;
  padding: 8px 18px;
  border: 1px solid var(--acan-border);
  border-radius: 10px;
  font-size: 12.5px; font-weight: 600;
  color: var(--acan-text-sub);
  transition: all 0.15s ease;
}
.feedback__btn:hover { border-color: var(--acan-blue); color: var(--acan-blue-dark); background: #f5f9ff; }
.feedback__btn--no:hover { border-color: var(--acan-red); color: var(--acan-red); background: #fff7f7; }
.feedback__thanks {
  display: flex; align-items: center; justify-content: center; gap: 7px;
  font-size: 12.5px; font-weight: 600; color: #15803d;
}
.feedback__comment { margin-top: 10px; }

/* 完了カード */
.done { display: flex; gap: 11px; align-items: flex-start; }
.done__icon {
  width: 34px; height: 34px;
  display: grid; place-items: center;
  border-radius: 50%;
  background: #e7f7ed;
  color: #15803d;
  flex-shrink: 0;
}
.done__title { font-size: 13.5px; font-weight: 700; }
.done__detail { font-size: 11.5px; color: var(--acan-text-sub); margin-top: 2px; }

/* ── 入力欄 ───────────────────────────────────────────── */

.composer {
  flex-shrink: 0;
  padding: 11px 13px 6px;
  background: #fff;
  border-top: 1px solid var(--acan-border);
}
.composer__row {
  display: flex;
  align-items: flex-end;
  gap: 8px;
  padding: 5px 5px 5px 15px;
  background: #f5f7fb;
  border: 1px solid var(--acan-border);
  border-radius: 22px;
  transition: border-color 0.15s ease, background 0.15s ease;
}
.composer__row:focus-within { border-color: var(--acan-blue); background: #fff; }
.composer__input {
  flex: 1;
  border: none;
  background: transparent;
  resize: none;
  font-size: 13.5px;
  font-family: inherit;
  color: var(--acan-text);
  padding: 7px 0;
  max-height: 96px;
  line-height: 1.5;
}
.composer__input:focus { outline: none; }
.composer__input::placeholder { color: #9aa8bd; }
.composer__send {
  width: 34px; height: 34px;
  display: grid; place-items: center;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--acan-blue), var(--acan-blue-dark));
  color: #fff;
  flex-shrink: 0;
  transition: opacity 0.15s ease, transform 0.15s ease;
}
.composer__send:hover:not(:disabled) { transform: scale(1.06); }
.composer__send:disabled { opacity: 0.4; cursor: not-allowed; }

.footer {
  padding: 5px 0 9px;
  text-align: center;
  font-size: 10px;
  color: #9aa8bd;
  letter-spacing: 0.03em;
}
.footer strong { color: var(--acan-text-sub); font-weight: 600; }

.sr-only {
  position: absolute; width: 1px; height: 1px;
  padding: 0; margin: -1px; overflow: hidden;
  clip: rect(0, 0, 0, 0); white-space: nowrap; border: 0;
}

/* ── モバイル ─────────────────────────────────────────── */

@media (max-width: 480px) {
  .root { padding: 0 12px 12px; }
  .panel {
    width: 100vw;
    height: 100dvh;
    max-height: 100dvh;
    border-radius: 0;
    position: fixed;
    inset: 0;
  }
  .launcher__text { display: none; }
  .launcher { padding: 8px; }
  .quick, .card { padding-left: 0; margin-left: 0; }
  .bubble { max-width: 82%; }
}

@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
}
`;var x=(a,{size:e=16,fill:t="none"}={})=>`<svg width="${e}" height="${e}" viewBox="0 0 24 24" fill="${t}" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">${a}</svg>`,u={chat:x('<path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 9.9 9.9 0 0 1-4.2-.9L3 21l1.9-4.3A8.4 8.4 0 0 1 12 3a8.4 8.4 0 0 1 9 8.5Z"/>',{size:20}),send:x('<path d="M22 2 11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7Z"/>',{size:16}),close:x('<path d="M18 6 6 18"/><path d="m6 6 12 12"/>',{size:17}),minimize:x('<path d="M5 12h14"/>',{size:17}),chevron:x('<path d="m9 18 6-6-6-6"/>',{size:12}),user:x('<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',{size:15}),pdf:x('<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><path d="M14 2v6h6"/>',{size:17}),check:x('<path d="M20 6 9 17l-5-5"/>',{size:17}),calculator:x('<rect x="4" y="2" width="16" height="20" rx="2"/><path d="M8 6h8"/><path d="M8 11h.01"/><path d="M12 11h.01"/><path d="M16 11h.01"/><path d="M8 15h.01"/><path d="M12 15h.01"/><path d="M16 15h.01"/>',{size:13}),calendar:x('<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4"/><path d="M8 2v4"/><path d="M3 10h18"/>',{size:13}),folder:x('<path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"/>',{size:13}),sparkle:x('<path d="M12 3v4"/><path d="M12 17v4"/><path d="m5 5 2.8 2.8"/><path d="m16.2 16.2 2.8 2.8"/><path d="M3 12h4"/><path d="M17 12h4"/><path d="m5 19 2.8-2.8"/><path d="m16.2 7.8 2.8-2.8"/>',{size:13}),restart:x('<path d="M3 12a9 9 0 1 0 3-6.7L3 8"/><path d="M3 3v5h5"/>',{size:16}),thumbUp:x('<path d="M7 10v11H4a1 1 0 0 1-1-1v-9a1 1 0 0 1 1-1h3Z"/><path d="M7 10l4.5-7a2 2 0 0 1 3.4 2L13 10h5.5a2 2 0 0 1 2 2.4l-1.4 7A2 2 0 0 1 17 21H7"/>',{size:15}),thumbDown:x('<path d="M17 14V3h3a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-3Z"/><path d="M17 14l-4.5 7a2 2 0 0 1-3.4-2L11 14H5.5a2 2 0 0 1-2-2.4l1.4-7A2 2 0 0 1 7 3h10"/>',{size:15}),building:x('<rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M8 10h.01"/><path d="M16 10h.01"/><path d="M8 14h.01"/><path d="M16 14h.01"/>',{size:13})},H=`data:image/svg+xml;utf8,${encodeURIComponent(`
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96">
  <defs>
    <linearGradient id="bg" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#1d5bbf"/><stop offset="1" stop-color="#0f3576"/>
    </linearGradient>
    <clipPath id="circle"><circle cx="48" cy="48" r="48"/></clipPath>
  </defs>
  <g clip-path="url(#circle)">
    <rect width="96" height="96" fill="url(#bg)"/>
    <!-- 肩・上着（ブランドレッド） -->
    <path d="M12 96c0-18 16-27 36-27s36 9 36 27z" fill="#d92727"/>
    <path d="M48 69l-9 27h18z" fill="#f2f4f8"/>
    <!-- 髪（後ろ） -->
    <path d="M25 47c0-16 10-27 23-27s23 11 23 27c0 9-2 15-4 19l-6-4V33H31v29l-4 5c-1-5-2-11-2-20z" fill="#241c22"/>
    <!-- 顔 -->
    <ellipse cx="48" cy="47" rx="17" ry="20" fill="#f7d9c4"/>
    <!-- 前髪 -->
    <path d="M29 42c1-14 9-22 19-22s18 8 19 22c-4-7-10-10-19-10s-15 3-19 10z" fill="#2e2430"/>
    <!-- 目 -->
    <ellipse cx="41" cy="48" rx="2.6" ry="3.4" fill="#3b2a22"/>
    <ellipse cx="55" cy="48" rx="2.6" ry="3.4" fill="#3b2a22"/>
    <!-- 口 -->
    <path d="M45 57c2 2 4 2 6 0" stroke="#c98878" stroke-width="1.8" fill="none" stroke-linecap="round"/>
  </g>
</svg>`)}`;var Y=a=>{let e=i=>`${a.replace(/\/+$/,"")}${i}`,t=async(i,n={})=>{let o=await fetch(e(i),{headers:{"Content-Type":"application/json"},...n}),c=await o.json().catch(()=>({}));if(!o.ok&&o.status!==422)throw new Error(c.message||`通信に失敗しました (${o.status})`);return c};return{bootstrap:()=>t("/api/bootstrap"),widgetConfig:()=>t("/api/widget-config"),submitInquiry:i=>t("/api/inquiries",{method:"POST",body:JSON.stringify(i)}),bookMeeting:i=>t("/api/meetings",{method:"POST",body:JSON.stringify(i)}),submitFeedback:i=>t("/api/feedback",{method:"POST",body:JSON.stringify(i)}),async streamChat({messages:i,conversationId:n,handlers:o,signal:c}){var h;let p=await fetch(e("/api/chat"),{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify({messages:i,conversationId:n,pageUrl:location.href}),signal:c});if(!p.ok){let _=await p.json().catch(()=>({}));(h=o.onError)==null||h.call(o,_.message||"AIへの接続に失敗しました。時間をおいてお試しください。");return}let d=p.body.getReader(),m=new TextDecoder,g="";for(;;){let{value:_,done:v}=await d.read();if(v)break;g+=m.decode(_,{stream:!0});let f;for(;(f=g.indexOf(`

`))!==-1;){let y=g.slice(0,f);g=g.slice(f+2),de(y,o)}}}}},de=(a,e)=>{var c;let t="message",i=[];for(let p of a.split(`
`))p.startsWith("event:")?t=p.slice(6).trim():p.startsWith("data:")&&i.push(p.slice(5).trim());if(i.length===0)return;let n;try{n=JSON.parse(i.join(`
`))}catch{return}let o={meta:e.onMeta,delta:e.onDelta,ui:e.onUi,quick:e.onQuick,done:e.onDone,error:e.onError};(c=o[t])==null||c.call(o,t==="error"?n.message:n)};var G=a=>String(a??"").replace(/[&<>"']/g,e=>({"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;"})[e]),pe=a=>{try{let e=new URL(a,"https://example.invalid");if(e.protocol==="http:"||e.protocol==="https:")return a}catch{}return null},N=a=>{let e=G(a);return e=e.replace(/`([^`\n]+)`/g,"<code>$1</code>"),e=e.replace(/\*\*(.+?)\*\*/g,"<strong>$1</strong>"),e=e.replace(/__(.+?)__/g,"<strong>$1</strong>"),e=e.replace(/(^|[\s（(「『])\*(?!\s)(.+?)(?!\s)\*(?=[\s）)」』.,!?:;]|$)/g,"$1<em>$2</em>"),e=e.replace(/(^|[\s（(「『])_(?!\s)(.+?)(?!\s)_(?=[\s）)」』.,!?:;]|$)/g,"$1<em>$2</em>"),e=e.replace(/\[([^\]]+)\]\(([^)\s]+)\)/g,(t,i,n)=>{let o=pe(n);return o?`<a href="${G(o)}" target="_blank" rel="noopener noreferrer">${i}</a>`:i}),e},he=a=>{let e=String(a??"").replace(/\r\n?/g,`
`).split(`
`),t=[],i=0,n=o=>{o.length&&(t.push(`<p>${o.map(N).join("<br>")}</p>`),o.length=0)};for(;i<e.length;){let o=e[i];if(!o.trim()){i+=1;continue}let c=/^(#{1,3})\s+(.+)$/.exec(o);if(c){let d=c[1].length;t.push(`<h${d}>${N(c[2].trim())}</h${d}>`),i+=1;continue}if(/^\s*[-*+]\s+/.test(o)){let d=[];for(;i<e.length;){for(;i<e.length&&!e[i].trim();)i+=1;if(i>=e.length||!/^\s*[-*+]\s+/.test(e[i]))break;let m=e[i].replace(/^\s*[-*+]\s+/,"");i+=1;let g=[];for(;i<e.length&&e[i].trim()&&!/^\s*[-*+]\s+/.test(e[i])&&!/^\s*\d+\.\s+/.test(e[i])&&!/^#{1,3}\s+/.test(e[i]);)g.push(e[i]),i+=1;d.push(`<li>${N(m)}${g.length?`<br>${g.map(N).join("<br>")}`:""}</li>`)}t.push(`<ul>${d.join("")}</ul>`);continue}if(/^\s*\d+\.\s+/.test(o)){let d=[];for(;i<e.length;){for(;i<e.length&&!e[i].trim();)i+=1;if(i>=e.length||!/^\s*\d+\.\s+/.test(e[i]))break;let m=e[i].replace(/^\s*\d+\.\s+/,"");i+=1;let g=[];for(;i<e.length&&e[i].trim()&&!/^\s*\d+\.\s+/.test(e[i])&&!/^\s*[-*+]\s+/.test(e[i])&&!/^#{1,3}\s+/.test(e[i]);)g.push(e[i]),i+=1;d.push(`<li>${N(m)}${g.length?`<br>${g.map(N).join("<br>")}`:""}</li>`)}t.push(`<ol>${d.join("")}</ol>`);continue}let p=[];for(;i<e.length&&e[i].trim()&&!(/^(#{1,3}\s+|\s*[-*+]\s+|\s*\d+\.\s+)/.test(e[i])&&p.length);)p.push(e[i]),i+=1;n(p)}return t.join("")||`<p>${N("")}</p>`},A=(a,e,{markdown:t=!1}={})=>{a&&(t?(a.classList.add("bubble--md"),a.innerHTML=he(e)):(a.classList.remove("bubble--md"),a.textContent=e??""))};var s=(a,{className:e,text:t,html:i,attrs:n,on:o,children:c}={})=>{let p=document.createElement(a);e&&(p.className=e),t!=null&&(p.textContent=t),i!=null&&(p.innerHTML=i);for(let[d,m]of Object.entries(n??{}))m===!1||m==null||p.setAttribute(d,m===!0?"":String(m));for(let[d,m]of Object.entries(o??{}))p.addEventListener(d,m);for(let d of c??[])d&&p.appendChild(d);return p},T=(a,e,{fallback:t,lazy:i=!0}={})=>{let n=s("img",{className:a,attrs:{src:e,alt:"",loading:i?"lazy":null}});return t&&e!==t&&n.addEventListener("error",()=>{n.src=t},{once:!0}),n},M=({role:a,text:e,avatarUrl:t,avatarFallback:i,variant:n,markdown:o=!1})=>{let c=a==="user",p=c?s("div",{className:"row__avatar row__avatar--user",html:u.user}):T("row__avatar",t,{fallback:i}),d=s("div",{className:`bubble bubble--${n??(c?"user":"bot")}`});A(d,e??"",{markdown:!c&&o&&n!=="error"});let m=s("div",{className:`row ${c?"row--user":"row--bot"}`,children:[p,d]});return m.__bubble=d,m},J=({avatarUrl:a,avatarFallback:e})=>{let t=M({role:"assistant",text:"",avatarUrl:a,avatarFallback:e});return t.__bubble.appendChild(s("div",{className:"typing",html:"<span></span><span></span><span></span>"})),t},K=(a,e)=>s("div",{className:"quick",children:a.map(t=>s("button",{className:"quick__btn",attrs:{type:"button"},on:{click:()=>e(t.value??t.label)},children:[s("span",{text:t.label}),s("span",{className:"quick__chevron",html:u.chevron})]}))}),C=(a,e,t)=>s("div",{className:"card",children:[s("div",{className:"card__title",children:[s("span",{html:e}),s("span",{text:a})]}),...t]}),fe=(a,{onGatedRequest:e})=>C("資料ダウンロード",u.folder,a.items.map(t=>{let i=s("div",{className:"doc__meta",text:`${t.fileType} / ${t.fileSize}`}),n=s("div",{className:"doc__body",children:[s("div",{className:"doc__title",text:t.title}),i]}),o=[s("div",{className:"doc__icon",html:u.pdf}),n];return t.requiresEmail?(n.appendChild(s("div",{className:"doc__lock",text:"メールアドレスのご登録が必要です"})),s("button",{className:"doc",attrs:{type:"button"},on:{click:()=>e(t)},children:o})):s("a",{className:"doc",attrs:{href:t.url,target:"_blank",rel:"noopener noreferrer",download:""},children:o})})),ue=a=>{var e;return C("概算費用シミュレーション",u.calculator,[s("div",{className:"estimate__scope",text:[a.serviceName,a.variantName,a.quantityLabel].filter(Boolean).join(" / ")}),s("div",{className:"estimate__amount",text:a.totalLabel}),(((e=a.conditions)==null?void 0:e.length)??0)>0||a.leadTime?s("div",{className:"estimate__list",children:[...(a.conditions??[]).map(t=>s("div",{className:"estimate__item",children:[s("span",{text:"・"}),s("span",{text:t})]})),a.leadTime?s("div",{className:"estimate__item",children:[s("span",{text:"・"}),s("span",{text:`納期目安: ${a.leadTime}`})]}):null]}):null,...(a.notes??[]).map(t=>s("div",{className:"estimate__note",text:`※ ${t}`}))])},me=a=>C("関連する導入事例",u.sparkle,a.items.map(e=>s("div",{className:"case",children:[s("span",{className:"case__industry",text:e.industry}),s("div",{className:"case__title",text:e.title}),s("div",{className:"case__result",text:e.result})]}))),be=(a,{onPick:e})=>C("サービス一覧",u.building,[s("div",{className:"services",children:a.items.map(t=>s("button",{className:"service",attrs:{type:"button"},on:{click:()=>e(`${t.name}について教えてください。`)},children:[s("div",{className:"service__name",text:t.name}),s("div",{className:"service__tagline",text:t.tagline})]}))})]),ge=(a,{onPick:e})=>{let t=a.items.map(i=>s("button",{className:"slot",attrs:{type:"button","aria-pressed":"false","data-start":i.startAt},on:{click:n=>{for(let o of t)o.setAttribute("aria-pressed","false");n.currentTarget.setAttribute("aria-pressed","true"),e(i)}},text:i.label}));return C(`オンライン商談の空き枠（各${a.durationMinutes??30}分）`,u.calendar,[a.items.length===0?s("div",{className:"estimate__note",text:"現在ご案内できる枠がありません。お問い合わせよりご連絡ください。"}):s("div",{className:"slots",children:t})])},I={name:"お名前",company:"会社名",email:"メールアドレス",phone:"電話番号",message:"ご相談内容"},xe={email:"email",phone:"tel"},_e=(a,{onSubmit:e})=>{var g;let t=new Set((g=a.missing)!=null&&g.length?a.missing:["name","company","email"]),i=["name","company","email","phone","message"].filter(h=>t.has(h)||h==="phone"||h==="message"),n=new Map,o=new Map,c=i.map(h=>{var b;let _=t.has(h),v=h==="message",f=s(v?"textarea":"input",{className:v?"field__textarea":"field__input",attrs:{name:h,type:v?null:xe[h]??"text",rows:v?3:null,placeholder:h==="email"?"example@company.co.jp":h==="phone"?"03-1234-5678":"",autocomplete:h==="email"?"email":h==="name"?"name":h==="phone"?"tel":h==="company"?"organization":"off","aria-required":_?"true":"false"}});f.value=((b=a.prefill)==null?void 0:b[h])??"",n.set(h,f);let y=s("div",{className:"field__error",text:""});o.set(h,y);let $=s("div",{className:"field",children:[s("label",{className:"field__label",attrs:{for:`acan-${h}`},children:[s("span",{text:I[h]}),_?s("span",{className:"field__required",text:"*"}):null]}),f,y]});return f.id=`acan-${h}`,$.__input=f,$}),p=s("button",{className:"submit",attrs:{type:"submit"},text:"送信する"}),d=(h,_)=>{let v=c[i.indexOf(h)];o.get(h).textContent=_,v==null||v.classList.toggle("field--invalid",!!_)},m=s("form",{attrs:{novalidate:!0},children:[...c,p,s("div",{className:"privacy",text:"ご入力いただいた情報は、お問い合わせ対応の目的にのみ利用します。"})],on:{submit:async h=>{var y,$;h.preventDefault();let _=!1;for(let b of i){let z=n.get(b).value.trim();t.has(b)&&!z?(d(b,`${I[b]}を入力してください。`),_=!0):b==="email"&&z&&!/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(z)?(d(b,"メールアドレスの形式をご確認ください。"),_=!0):d(b,"")}if(_)return;p.disabled=!0,p.textContent="送信中…";let v=Object.fromEntries([...n].map(([b,z])=>[b,z.value.trim()])),f=await e(v,a.context??{});if(f!=null&&f.ok){m.replaceWith(s("div",{className:"estimate__note",text:"送信が完了しました。"}));return}p.disabled=!1,p.textContent="送信する";for(let b of(f==null?void 0:f.invalid)??[])d(b,`${I[b]}の形式をご確認ください。`);for(let b of(f==null?void 0:f.missing)??[])d(b,`${I[b]}を入力してください。`);f!=null&&f.message&&!((y=f.invalid)!=null&&y.length||($=f.missing)!=null&&$.length)&&d(i[0],f.message)}}});return C(a.title??"お問い合わせ",u.chat,[m])},ve=a=>{var e;return s("div",{className:"card",children:[s("div",{className:"done",children:[s("div",{className:"done__icon",html:u.check}),s("div",{children:[s("div",{className:"done__title",text:a.title}),s("div",{className:"done__detail",text:a.detail})]})]}),...(e=a.documents)!=null&&e.length?[s("div",{className:"estimate__list"}),...a.documents.map(t=>s("a",{className:"doc",attrs:{href:t.url,target:"_blank",rel:"noopener noreferrer",download:""},children:[s("div",{className:"doc__icon",html:u.pdf}),s("div",{className:"doc__body",children:[s("div",{className:"doc__title",text:t.title}),s("div",{className:"doc__meta",text:`${t.fileType} / ${t.fileSize}`})]})]}))]:[]]})},Z=({onSubmit:a,questionText:e="この会話はお役に立ちましたか？"})=>{let t=s("div",{className:"card"}),i=()=>{t.replaceChildren(s("div",{className:"feedback__thanks",children:[s("span",{html:u.check}),s("span",{text:"ご協力ありがとうございました"})]}))},n=c=>{let p=s("textarea",{className:"field__textarea",attrs:{rows:2,placeholder:"差し支えなければ、理由をお聞かせください（任意）"}}),d=s("button",{className:"submit",attrs:{type:"button"},text:"送信する",on:{click:async()=>{d.disabled=!0,d.textContent="送信中…",await a({helpful:c,comment:p.value.trim()}),i()}}});t.replaceChildren(s("div",{className:"feedback__question",text:"ありがとうございます。"}),s("div",{className:"feedback__comment",children:[p,d]})),p.focus()},o=async c=>{c?(await a({helpful:!0,comment:""}),i()):(a({helpful:!1,comment:""}),n(!1))};return t.append(s("div",{className:"feedback__question",text:e}),s("div",{className:"feedback__buttons",children:[s("button",{className:"feedback__btn",attrs:{type:"button"},on:{click:()=>o(!0)},children:[s("span",{html:u.thumbUp}),s("span",{text:"役に立った"})]}),s("button",{className:"feedback__btn feedback__btn--no",attrs:{type:"button"},on:{click:()=>o(!1)},children:[s("span",{html:u.thumbDown}),s("span",{text:"そうでもない"})]})]})),t},Q=(a,e)=>{switch(a.type){case"documents":return fe(a,e);case"estimate":return ue(a);case"cases":return me(a);case"services":return be(a,e);case"slots":return ge(a,e);case"form":return _e(a,e);case"confirmation":return ve(a);default:return null}};var we="https://api-p2ednb2kcq-dt.a.run.app",ke={apiBase:"",title:"A CAN AIアシスタント",subtitle:"オンライン・24時間対応",launcherLabel:"AIアシスタントに相談する",teaser:"ご相談内容を教えてください。AIが最適なサービスをご案内します！",primaryColor:"#1546a0",primaryDark:"#0f3576",accentColor:"#e02b2b",fontFamily:'"Hiragino Kaku Gothic ProN", "Hiragino Sans", "Noto Sans JP", "Yu Gothic", Meiryo, system-ui, sans-serif',position:"right",avatarUrl:"",avatarTalkingUrl:"",autoOpen:!1,autoOpenDelay:0,teaserDelay:3e3,storageKey:"acan-chat-session"},ye=30,r,W,X,ee,te,ae,L,U,B,w,j,S,q,se,ie,re,ne,F,oe,k,O,le,E=class{constructor(e={}){R(this,r);var i,n;this.config={...ke,...e};let t=(this.config.assetBase??"").replace(/\/+$/,"");(i=this.config).avatarUrl||(i.avatarUrl=`${t}/assets/avatar.png`),(n=this.config).avatarTalkingUrl||(n.avatarTalkingUrl=`${t}/assets/avatar-talking.png`),this.avatarFallback=H,this.api=Y(this.config.apiBase),this.messages=[],this.conversationId=null,this.isOpen=!1,this.isSending=!1,this.greeted=!1,this.abortController=null,this.pendingSlot=null,this.feedbackShown=!1,this.feedbackConfig={trigger:"goal_only",minExchanges:3,questionText:"この会話はお役に立ちましたか？"},l(this,r,X).call(this),l(this,r,le).call(this),l(this,r,W).call(this)}open(){this.isOpen=!0,this.panel.hidden=!1,this.launcher.hidden=!0,this.teaser.hidden=!0,this.greeted||l(this,r,U).call(this),l(this,r,k).call(this),setTimeout(()=>this.input.focus(),120)}close(){this.isOpen=!1,this.panel.hidden=!0,this.launcher.hidden=!1,this.launcher.focus()}toggle(){this.isOpen?this.close():this.open()}restart(){var e;this.messages.length>1&&!window.confirm(`会話を最初からやり直しますか？
これまでのやり取りは消去されます。`)||((e=this.abortController)==null||e.abort(),this.messages=[],this.conversationId=null,this.greeted=!1,this.pendingSlot=null,this.feedbackShown=!1,l(this,r,S).call(this),this.log.replaceChildren(),l(this,r,L).call(this),l(this,r,U).call(this))}reset(){var e;(e=this.abortController)==null||e.abort(),this.messages=[],this.conversationId=null,this.greeted=!1,this.pendingSlot=null,this.log.replaceChildren(),l(this,r,L).call(this),this.close()}async send(e){if(this.isSending)return;this.isSending=!0,l(this,r,S).call(this),l(this,r,w).call(this,"user",e,{persist:!0});let t=J({avatarUrl:this.config.avatarTalkingUrl,avatarFallback:this.avatarFallback});this.log.appendChild(t),l(this,r,k).call(this);let i=null,n="";this.abortController=new AbortController;let o=()=>{if(i)return i;t.remove();let c=M({role:"assistant",text:"",avatarUrl:this.config.avatarTalkingUrl,avatarFallback:this.avatarFallback});return this.log.appendChild(c),i=c.__bubble,i};try{await this.api.streamChat({messages:this.messages,conversationId:this.conversationId,signal:this.abortController.signal,handlers:{onMeta:c=>{this.conversationId=c.conversationId},onDelta:({text:c})=>{n+=c,A(o(),n,{markdown:!0}),l(this,r,k).call(this)},onUi:c=>{n||t.remove(),l(this,r,q).call(this,c)},onQuick:({items:c})=>l(this,r,j).call(this,c),onError:c=>{t.remove(),l(this,r,w).call(this,"assistant",c,{variant:"error"})}}}),n&&this.messages.push({role:"assistant",content:n}),l(this,r,O).call(this),l(this,r,ne).call(this)}catch(c){c.name!=="AbortError"&&(t.remove(),l(this,r,w).call(this,"assistant","通信エラーが発生しました。恐れ入りますが、もう一度お試しください。",{variant:"error"}))}finally{t.remove(),this.isSending=!1,this.abortController=null,this.sendButton.disabled=this.input.value.trim().length===0,l(this,r,k).call(this)}}};r=new WeakSet,W=async function(){try{let e=await this.api.widgetConfig();e!=null&&e.feedback&&(this.feedbackConfig={trigger:e.feedback.trigger||"goal_only",minExchanges:Number(e.feedback.minExchanges)||3,questionText:e.feedback.questionText||"この会話はお役に立ちましたか？"})}catch{}},X=function(){this.host=document.createElement("div"),this.host.setAttribute("data-acan-chat",""),this.shadow=this.host.attachShadow({mode:"open"}),this.shadow.appendChild(s("style",{text:P(this.config)})),this.launcher=l(this,r,ee).call(this),this.teaser=l(this,r,te).call(this),this.panel=l(this,r,ae).call(this),this.shadow.appendChild(s("div",{className:"root",children:[this.teaser,this.panel,this.launcher]})),document.body.appendChild(this.host),this.config.autoOpen?setTimeout(()=>this.open(),this.config.autoOpenDelay):this.config.teaser&&setTimeout(()=>{this.isOpen||(this.teaser.hidden=!1)},this.config.teaserDelay),document.addEventListener("keydown",e=>{e.key==="Escape"&&this.isOpen&&this.close()})},ee=function(){return s("button",{className:"launcher",attrs:{type:"button","aria-label":this.config.launcherLabel},on:{click:()=>this.toggle()},children:[T("launcher__avatar",this.config.avatarUrl,{fallback:this.avatarFallback,lazy:!1}),s("span",{className:"launcher__text",children:[s("span",{className:"launcher__title",text:this.config.launcherLabel}),s("span",{className:"launcher__status",children:[s("span",{className:"status-dot"}),s("span",{text:this.config.subtitle})]})]})]})},te=function(){let e=s("div",{className:"teaser",attrs:{hidden:!0},children:[s("span",{text:this.config.teaser}),s("button",{className:"teaser__close",attrs:{type:"button","aria-label":"閉じる"},on:{click:t=>{t.stopPropagation(),e.hidden=!0}},text:"×"})],on:{click:()=>this.open()}});return e},ae=function(){this.log=s("div",{className:"log",attrs:{role:"log","aria-live":"polite","aria-label":"チャット履歴"}}),this.input=s("textarea",{className:"composer__input",attrs:{rows:1,placeholder:"メッセージを入力してください…","aria-label":"メッセージ入力"},on:{input:t=>{let i=t.currentTarget;i.style.height="auto",i.style.height=`${Math.min(i.scrollHeight,96)}px`,this.sendButton.disabled=i.value.trim().length===0||this.isSending},keydown:t=>{t.key==="Enter"&&!t.shiftKey&&!t.isComposing&&(t.preventDefault(),l(this,r,B).call(this))}}}),this.sendButton=s("button",{className:"composer__send",attrs:{type:"button","aria-label":"送信",disabled:!0},html:u.send,on:{click:()=>l(this,r,B).call(this)}});let e=s("div",{className:"header",children:[T("header__avatar",this.config.avatarUrl,{fallback:this.avatarFallback,lazy:!1}),s("div",{className:"header__meta",children:[s("div",{className:"header__title",text:this.config.title}),s("div",{className:"header__status",children:[s("span",{className:"status-dot"}),s("span",{text:this.config.subtitle})]})]}),s("div",{className:"header__actions",children:[s("button",{className:"header__btn",attrs:{type:"button","aria-label":"最小化"},html:u.minimize,on:{click:()=>this.close()}}),s("button",{className:"header__btn",attrs:{type:"button","aria-label":"最初からやり直す",title:"最初からやり直す"},html:u.restart,on:{click:()=>this.restart()}}),s("button",{className:"header__btn",attrs:{type:"button","aria-label":"閉じる",title:"閉じる"},html:u.close,on:{click:()=>this.close()}})]})]});return s("div",{className:"panel",attrs:{hidden:!0,role:"dialog","aria-label":this.config.title,"aria-modal":"false"},children:[e,this.log,s("div",{className:"composer",children:[s("div",{className:"composer__row",children:[this.input,this.sendButton]}),s("div",{className:"footer",children:[s("span",{text:"Powered by "}),s("strong",{text:"A CAN SOLUTIONS"})]})]})]})},L=function(){try{sessionStorage.removeItem(this.config.storageKey)}catch{}},U=async function(){var e;this.greeted=!0;let g=this.config.greeting;if(g){l(this,r,w).call(this,"assistant",g.text,{persist:!0}),(e=g.quickReplies)!=null&&e.length&&l(this,r,j).call(this,g.quickReplies);try{let t=await this.api.bootstrap();this.conversationId||(this.conversationId=t.conversationId)}catch{}return}try{let t=await this.api.bootstrap();this.conversationId=t.conversationId,l(this,r,w).call(this,"assistant",t.greeting.text,{persist:!0}),(e=t.greeting.quickReplies)!=null&&e.length&&l(this,r,j).call(this,t.greeting.quickReplies)}catch{l(this,r,w).call(this,"assistant","ただいま接続できません。恐れ入りますが、時間をおいて再度お試しください。",{variant:"error"})}},B=function(){let e=this.input.value.trim();!e||this.isSending||(this.input.value="",this.input.style.height="auto",this.sendButton.disabled=!0,this.send(e))},w=function(e,t,{variant:i,persist:n=!1}={}){let o=M({role:e,text:t,avatarUrl:this.config.avatarUrl,avatarFallback:this.avatarFallback,variant:i,markdown:e==="assistant"&&i!=="error"});return this.log.appendChild(o),n&&(this.messages.push({role:e,content:t}),l(this,r,O).call(this)),l(this,r,k).call(this),o},j=function(e){l(this,r,S).call(this),this.quickNode=K(e,t=>{l(this,r,S).call(this),this.send(t)}),this.log.appendChild(this.quickNode),l(this,r,k).call(this)},S=function(){var e;(e=this.quickNode)==null||e.remove(),this.quickNode=null},q=function(e){let t=e.type==="slots"?n=>l(this,r,se).call(this,n):n=>this.send(n),i=Q(e,{onPick:t,onGatedRequest:n=>l(this,r,ie).call(this,n),onSubmit:(n,o)=>l(this,r,re).call(this,n,o)});i&&(this.log.appendChild(i),l(this,r,k).call(this))},se=function(e){this.pendingSlot=e,l(this,r,w).call(this,"user",`${e.label} を希望します。`,{persist:!0}),l(this,r,q).call(this,{type:"form",intent:"meeting",title:`商談予約（${e.label}）`,missing:["name","company","email"],invalid:[],prefill:{},context:{startAt:e.startAt}})},ie=function(e){l(this,r,w).call(this,"user",`「${e.title}」をダウンロードしたいです。`,{persist:!0}),l(this,r,q).call(this,{type:"form",intent:"inquiry",title:`資料請求（${e.title}）`,missing:["name","company","email"],invalid:[],prefill:{},context:{inquiryType:"document_request",documentIds:[e.id]}})},re=async function(e,t){let i={...e,...t,conversationId:this.conversationId,pageUrl:location.href};try{let n=!!t.startAt,o=n?await this.api.bookMeeting(i):await this.api.submitInquiry(i);return o.ok&&(l(this,r,q).call(this,{type:"confirmation",intent:n?"meeting":"inquiry",reference:o.reference,title:n?"商談を仮予約しました":"お問い合わせを受け付けました",detail:n?`${o.label}（${o.durationMinutes}分）／ 受付番号 ${o.reference}`:`受付番号 ${o.reference} ／ 1営業日以内に担当者よりご連絡いたします。`,documents:o.unlockedDocuments??[]}),l(this,r,w).call(this,"assistant",o.message),this.messages.push({role:"assistant",content:o.message}),l(this,r,O).call(this),l(this,r,F).call(this,"goal")),o}catch(n){return{ok:!1,message:n.message}}},ne=function(){l(this,r,F).call(this,"exchange")},F=function(e){if(this.feedbackShown)return;let{trigger:t,minExchanges:i,questionText:n}=this.feedbackConfig,o=this.messages.filter(d=>d.role==="user").length,c=t==="goal_only"||t==="both",p=t==="after_exchanges"||t==="both";e==="goal"&&!c||e==="exchange"&&(!p||o<i)||(this.feedbackShown=!0,this.log.appendChild(Z({questionText:n,onSubmit:d=>l(this,r,oe).call(this,d)})),l(this,r,k).call(this))},oe=async function({helpful:e,comment:t}){try{await this.api.submitFeedback({conversationId:this.conversationId,helpful:e,comment:t,pageUrl:location.href})}catch{}},k=function(){requestAnimationFrame(()=>{this.log.scrollTop=this.log.scrollHeight})},O=function(){try{sessionStorage.setItem(this.config.storageKey,JSON.stringify({conversationId:this.conversationId,messages:this.messages.slice(-ye)}))}catch{}},le=function(){var t;let e;try{e=JSON.parse(sessionStorage.getItem(this.config.storageKey)??"null")}catch{return}if((t=e==null?void 0:e.messages)!=null&&t.length){this.conversationId=e.conversationId,this.messages=e.messages,this.greeted=!0;for(let i of this.messages)this.log.appendChild(M({role:i.role,text:i.content,avatarUrl:this.config.avatarUrl,avatarFallback:this.avatarFallback,markdown:i.role==="assistant"}))}};var Ne=()=>{let a=document.currentScript??document.querySelector('script[src*="embed.js"]');if(!a)return{};let e={};for(let[i,n]of Object.entries(a.dataset))e[i]=n==="true"?!0:n==="false"?!1:n;let t=a.src?new URL(a.src).origin:"";return e.apiBase||(e.apiBase=we||t),e.assetBase??(e.assetBase=t),e},V=()=>{if(window.__acanChat)return window.__acanChat;let a={...Ne(),...window.ACanChatConfig??{}};return window.__acanChat=new E(a),window.__acanChat};document.body?V():document.addEventListener("DOMContentLoaded",V,{once:!0});window.ACanChat={open:()=>{var a;return(a=window.__acanChat)==null?void 0:a.open()},close:()=>{var a;return(a=window.__acanChat)==null?void 0:a.close()},toggle:()=>{var a;return(a=window.__acanChat)==null?void 0:a.toggle()},reset:()=>{var a;return(a=window.__acanChat)==null?void 0:a.reset()},send:a=>{var e,t;(e=window.__acanChat)==null||e.open(),(t=window.__acanChat)==null||t.send(a)}};})();