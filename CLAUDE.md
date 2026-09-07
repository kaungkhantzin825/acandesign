# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Static corporate website for **A CAN SOLUTIONS Co.,Ltd.** — a Myanmar-based IT outsourcing company targeting Japanese clients. The site is bilingual (Japanese primary, English secondary) and is a single-page PHP/HTML site with a contact form.

## Running Locally

```bash
php -S localhost:8000
```

Open `http://localhost:8000/index.php` in a browser. No build step required.

## File Structure

| File | Purpose |
|---|---|
| `index.php` | Main single-page site (hero, services, blog, about, contact) |
| `privacy.php` | Privacy policy page |
| `newpage.php` | Blog post page |
| `send-mail.php` | SMTP email handler (PHPMailer, AJAX endpoint) |
| `mail-config.php` | SMTP credentials — **never commit this file** |
| `mail-config.example.php` | Template for `mail-config.php` |
| `thank-you.html` | Fallback success page (unused when AJAX mode is active) |
| `assets/css/main.css` | All site styles |
| `assets/css/blog-post.css` | Blog post page styles |
| `assets/js/main.js` | Scroll-reveal animations + contact form AJAX |

## Contact Form — Two Modes

The contact form operates in **AJAX mode via FormSubmit.co** (configured in `index.php`). The `send-mail.php` file is an alternative **PHPMailer/SMTP backend** that is NOT currently wired to the form — it exists as a fallback.

- **Active mode:** `index.php` POSTs to `https://formsubmit.co/ajax/info@acan-sol.com` via `fetch()`.
- **SMTP mode (inactive):** `send-mail.php` reads `mail-config.php` constants (`SMTP_HOST`, `SMTP_PORT`, `SMTP_USERNAME`, `SMTP_PASSWORD`, etc.) and sends via PHPMailer. To switch to SMTP, update the `fetch()` target in `index.php` to point to `send-mail.php` and set up `mail-config.php` from the example template.

## Email Configuration (SMTP)

Copy `mail-config.example.php` → `mail-config.php` and fill in credentials. Required constants: `SMTP_HOST`, `SMTP_PORT`, `SMTP_SECURE`, `SMTP_AUTH`, `SMTP_USERNAME`, `SMTP_PASSWORD`, `MAIL_TO`, `MAIL_FROM_NAME`, `COMPANY_NAME`, `AUTO_REPLY_ENABLED`.

## Animation System

`assets/js/main.js` implements a scroll-triggered reveal system using `IntersectionObserver`. Elements get CSS classes to control entrance animations:

- `.reveal--pop` — text split character-by-character, each `<span class="reveal__char">` animates with a staggered `--reveal-char-delay` CSS variable
- `.reveal--slide-l` / `.reveal--slide-r` — slide from left/right, content wrapped in `<span class="reveal__inner">`
- `.reveal` (default) — wipe-up animation
- `.reveal--leaf` — applied automatically to `<img>` elements

The observer adds `.is-visible` when an element enters the viewport (threshold 0.05, rootMargin `-28%` on the bottom). CSS transitions fire on `.is-visible`.

## Dependencies

- **phpmailer/phpmailer ^6.9** (Composer) — only needed for SMTP mode
- No frontend build tools, no npm, no bundler
- Fonts: Noto Sans JP + Roboto Mono from Google Fonts

## Deployment

Update the FormSubmit redirect URL before going live:

```html
<input type="hidden" name="_next" value="https://acan-sol.com/thank-you.html">
```

The first FormSubmit submission requires a one-time email activation at `info@acan-sol.com`.
