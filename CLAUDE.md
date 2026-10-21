# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Corporate website for **A CAN SOLUTIONS Co.,Ltd.** — a Myanmar-based IT outsourcing company targeting Japanese clients. The site is bilingual (Japanese primary, English secondary).

Despite the "single-page" framing, this is a **flat multi-page PHP site**: ~70 `*.php` pages at the repo root, served directly by PHP/Apache. There is **no framework, no router, and no build step** — each page is a standalone PHP file that composes shared partials.

## Running Locally

```bash
php -S localhost:8000 router.php
```

Open `http://localhost:8000/` in a browser. No build step required.

The `router.php` argument is **required**, not optional. The site uses extension-less
URLs (see *Clean URLs* below), and PHP's built-in server ignores `.htaccess`, so without
the router every clean URL such as `/service` would return 404 locally.

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
| `router.php` | Dev-server router reproducing the `.htaccess` clean-URL rules under `php -S` |

**Page composition convention:** every page includes `menu.php` near the top and `footer.php` at the bottom, optionally with `3buttonsection.php` and/or a `header/*.php` band in between.

## Clean URLs

Public pages are served **without the `.php` extension** — `https://acan-sol.com/service`,
not `/service.php`. This is done entirely in `.htaccess` (mod_rewrite). **No files are
moved and no folders are created**, so relative asset paths (`assets/...`) and relative
`include` statements keep working unchanged.

The rules, in order:

1. `/index.php` → `/` (301)
2. `/page.php` → `/page` (301) — **GET only**. A 301 on a POST makes some browsers
   re-issue it as GET and silently drop the form body, which would break the contact form.
3. `/page/` → `/page` (301) — a trailing slash would change the browser's base URL and
   break every relative asset path on the page.
4. `/page` → served internally by `page.php` (no redirect).

Rules 2 and 4 are keyed on `%{THE_REQUEST}` and single-segment patterns, so they apply
only to **root-level pages**. Requests under `admin/` keep their `.php` URLs and are
untouched.

### Service pages — the one nested exception

Service pages have their own URLs under `/services/`, served by internal rewrite from the
existing flat files (still no folders):

| URL | File |
|---|---|
| `/services` | `service.php` |
| `/services/ai` | `data-services.php` |
| `/services/bpo` | `bpohome.php` |
| `/services/kpo` | `kpo-page.php` |
| `/services/technology` | `acan-dev.php` |
| `/services/design` | `case-design.php` |
| `/services/myanmar-support` | `consulting-services.php` |

The old flat URLs (`/bpohome`, `/kpo-page.php`, …) and the singular `/service/<slug>/`
form used in the domain plan all 301 to these in one hop. The map is duplicated in
`.htaccess` (rules `S`/`S2`) and `$services` in `router.php` — **change both together**.

Because these URLs are nested, each of those seven pages carries `<base href="/" />` (plus
a `<link rel="canonical">`) so its relative paths still resolve from the root. A side
effect: in those pages a bare `href="#id"` would point at the home page, so in-page
links must be written in full, e.g. `href="/services/myanmar-support#reasons"`.

Internal links (`href`, form `action`, `header('Location: …')`) are written in the clean
form. **`include`/`require` statements must keep the real `.php` filename** — they are
server-side file paths, not URLs. When adding a new page, link to it as `/newpage`, never
`newpage.php`.

## SEO, sitemap & analytics

Every public page's `<title>`, description, canonical, Open Graph tags and JSON-LD come from
**`seo-head.php`**, included in `<head>` after a `$seo` array:

```php
<?php $seo = [
  'title'       => '記事タイトル | A CAN SOLUTIONS',
  'description' => '…',
  'path'        => '/new-page',          // the clean URL
  'type'        => 'article',            // blog posts: also 'published' => 'YYYY-MM-DD'
  'image'       => '/assets/img/og/new-page.jpg',  // optional 1200x630 JPG
]; include 'seo-head.php'; ?>
```

- Don't hand-write `<title>`, `<meta name="description">` or `<link rel="canonical">` — the partial emits them.
- `'noindex' => true` for utility pages (confirmations, thank-you). `'canonical' => '/other'` for duplicates (`outsourcing-cost` → `/outsourcing`).
- **`/sitemap.xml` is generated** by `sitemap.php` from these `$seo` blocks (first 8 KB of each root page), so a new page is listed automatically; noindex/canonicalised pages are skipped. `robots.txt` points to it.
- Share images live in `assets/img/og/` as **JPG**, not WebP — LINE and LinkedIn don't reliably render WebP `og:image`.
- `seo-config.php` holds the site URL, the **GA4 Measurement ID** and the optional Search Console token. GA4 is off while the ID is empty and never loads on localhost. Cross-domain linking covers `acan-sol.com` + `myanmar-bpo.jp`.
- Conversion events: `generate_lead` (contact sent, `send-contact.php`) and `sign_up` (newsletter, `confirm-page.php`).

## Images & performance

All raster images are served as **WebP**. The source PNG/JPG files are kept next to them
in `assets/img/` but are no longer referenced by anything — they can be deleted once the
live site has been verified.

- Converted with Pillow: quality 82 for JPEG, 85 for opaque PNG, 88 for PNG with alpha
  (lossy WebP still carries the alpha channel). 370 images: **122 MB → 15.7 MB (−87%)**.
- **Do not rasterise the SVG placeholders.** `blog-outsourcing`, `blog-bpo` and
  `team-meeting` were SVG content carrying a `.jpg` extension; they are now `.svg` and
  their references were updated. Rasterising them would have been a downgrade.
- **`assets/img copy/` is an unreferenced duplicate** of ~73 images. Safe to delete.
- `.svg` files are left alone — already vector, already small.

Loading attributes are applied to every `<img>`:

| Condition | Attributes added |
|---|---|
| `hero__bg-img`, `hero__desktop-logo`, `dl-hero__img` | `loading="eager" fetchpriority="high"` |
| `hero__*`, `nav__logo`, `site-footer__logo` | `loading="eager"` |
| everything else | `loading="lazy"` |

Plus `decoding="async"` and intrinsic `width`/`height` on every image. The width/height are
safe to add because `main.css` sets a global `img { max-width: 100%; height: auto; }` — they
supply only the aspect ratio, so the browser reserves space and avoids layout shift without
changing the rendered size.

**When adding an image:** export it as `.webp`. If you *replace* an existing one, **give it a
new filename** — `.htaccess` caches assets for a year with no filename fingerprinting, so
reusing a name keeps serving the stale copy.

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

Credentials live only in **`db-config.php`** (`DB_HOST/USER/PASS/NAME`), required by `admin/db.php`, `db_setup.php`, `subscriber-save.php` and `save-newsletter.php`. Don't hardcode a connection anywhere else.

## Email Configuration (SMTP)

SMTP credentials live in `newsletter-mail-config.php` (`NEWSLETTER_SMTP_HOST/PORT/SECURE/USERNAME/PASSWORD`, `NEWSLETTER_ADMIN_EMAIL`), consumed by `send-contact.php` and `newsletter-mailer.php`. Use port **587 with `SECURE = ''`** (no encryption; the mailers then disable `SMTPAutoTLS`): the production cPanel host blocks outbound port 25 even though mail clients use it, and SSL isn't usable there. `contact-config.example.php` is a template for the older `contact-config.php`.

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

Shared cPanel hosting (Apache). `.htaccess` handles the clean-URL rewrites (see *Clean URLs*), gzip, asset caching, security headers, and blocks direct access to `mail-config.php`.

Before going live, make sure dev-only files are removed from the server: `db_setup.php`, `smtp_test.php`.
