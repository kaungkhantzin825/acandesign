# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Corporate website for **A CAN SOLUTIONS Co.,Ltd.** — a Myanmar-based IT outsourcing company targeting Japanese clients. The site is bilingual (Japanese primary, English secondary).

Despite the "single-page" framing, this is a **flat multi-page PHP site**: ~70 `*.php` pages at the repo root, served directly by PHP/Apache. There is **no framework, no router, and no build step** — each page is a standalone PHP file that composes shared partials.

## Running Locally

```bash
php -S localhost:8000
```

Open `http://localhost:8000/index.php` in a browser. No build step required.

## File Structure

There are too many pages to list individually. The pattern is what matters:

| Path | Purpose |
|---|---|
| `index.php` | Home page — hero, services, AI/data/dev/design/BPO/KPO/consulting sections, contact |
| `menu.php` | **The site header** (logo, nav, CTA buttons, mobile drawer + hamburger JS) |
| `footer.php` | Shared footer — also injects the AI chatbot embed script |
| `3buttonsection.php` | Shared "3-button" CTA strip, included near the bottom of most content pages |
| `header/*.php` | Per-page header bands (`download-header.php`, `myanmar-situation-header.php`), included *after* `menu.php` |
| `contectus.php` → `confirm.php` → `send-contact.php` | Contact form: input → confirm → send |
| `myanmar-situation.php` → `newsletter-subscribe.php` | Newsletter signup entry + handler |
| `admin/` | Admin panel (login, dashboard, CSV export, delete) |
| `assets/css/main.css` | Global stylesheet (per-page CSS is inline in each page's `<style>`) |
| `assets/js/main.js` | Scroll-reveal animations |
| `db_setup.php` | One-time DB bootstrap — **dev only, delete on production** |

**Page composition convention:** every page includes `menu.php` near the top and `footer.php` at the bottom, optionally with `3buttonsection.php` and/or a `header/*.php` band in between.

## Contact Form — Three-Step PHP Flow

The active contact form is a **PHP + PHPMailer/SMTP** flow (not FormSubmit):

1. `contectus.php` — input form, `action="confirm.php"`. Field names are Japanese: `会社名`, `ご担当者名`, `メールアドレス`, `電話番号`, `お問い合わせ内容`.
2. `confirm.php` — read-only confirmation screen. "送信する" posts to `send-contact.php`; "編集に戻る" posts back to `contectus.php`.
3. `send-contact.php` — validates, saves to the `subscribers` table, sends via PHPMailer, and renders the success/error page.

> Note: `index.php` also contains a separate inline form that still POSTs to **FormSubmit.co** via `fetch()`. Both mechanisms coexist in the codebase.

`send-mail.php` is an older/alternative SMTP handler kept as a fallback; it is **not** wired to any form.

## Newsletter — Double Opt-In Scaffolding

- `myanmar-situation.php` signup form → `newsletter-subscribe.php` → dedupe check → `save_subscriber_to_db(..., 'newsletter')` → auto-reply mail → redirect to `confirm-page.php`.
- Duplicate address → `newsletter-already-registered.php?email=...`.
- `newsletter-mailer.php` holds the shared `send_newsletter_mail()` helper (SMTP timeout is deliberately capped at 15s).
- **Watch out:** `confirm.php` (contact confirmation) and `confirm-page.php` (newsletter success) are different files.

## Database

MySQL accessed via `mysqli`. Schema (created by `db_setup.php`) has two tables:

- `subscribers` — `id, email, name, company, phone, message, source, created_at, verify_token, verified_at` (UNIQUE on `email`). `source` is `'contact'` or `'newsletter'`.
- `admin_users` — `username`, `password` (bcrypt). Default seed login: `admin / admin123`.

**Credentials are duplicated across `admin/db.php`, `db_setup.php`, and `subscriber-save.php` and are currently NOT in sync** (the admin files use `zojtpszw_acanadmin`; `subscriber-save.php` uses `root`/`acanadmin`). Update all three together.

## Email Configuration (SMTP)

SMTP credentials live in `newsletter-mail-config.php` (`NEWSLETTER_SMTP_HOST/PORT/SECURE/USERNAME/PASSWORD`, `NEWSLETTER_ADMIN_EMAIL`), consumed by `send-contact.php` and `newsletter-mailer.php`. `contact-config.example.php` is a template for the older `contact-config.php`.

> `.gitignore` excludes `mail-config.php` but **not** `newsletter-mail-config.php` — do not commit real credentials there.

## Animation System

`assets/js/main.js` implements a scroll-triggered reveal system using `IntersectionObserver`:

- `.reveal--pop` — text split character-by-character, each `<span class="reveal__char">` animates with a staggered `--reveal-char-delay` CSS variable
- `.reveal--slide-l` / `.reveal--slide-r` — slide from left/right, content wrapped in `<span class="reveal__inner">`
- `.reveal` (default) — wipe-up animation
- `.reveal--leaf` — applied automatically to `<img>` elements

The observer adds `.is-visible` when an element enters the viewport (threshold 0.05, rootMargin `-28%` on the bottom). CSS transitions fire on `.is-visible`.

## Dependencies

- **phpmailer/phpmailer ^6.9** (Composer) — used for contact + newsletter SMTP mail
- No frontend build tools, no npm, no bundler
- Fonts: Noto Sans JP + Roboto Mono from Google Fonts

## Deployment

Shared cPanel hosting (Apache). `.htaccess` handles gzip, asset caching, security headers, and blocks direct access to `mail-config.php`.

Before going live, make sure dev-only files are removed from the server: `db_setup.php`, `smtp_test.php`.
