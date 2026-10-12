# Project Map — A CAN SOLUTIONS corporate website

Myanmar IT-outsourcing company site targeting Japanese clients. **Bilingual (JP primary, EN secondary).**
Not a single-page site — it is a flat, ~70-page PHP site served directly (no framework, no router, no build step).

## Stack & run

- Plain **PHP** + MySQL (`mysqli`), no framework, no Composer autoload except PHPMailer.
- `php -S localhost:8000` → open `index.php`. No build tools, no npm.
- Dependency: `phpmailer/phpmailer ^6.9` (used for contact + newsletter mail).
- Hosting: shared cPanel (DB user `zojtpszw_acanadmin`). Production is Apache (`.htaccess` active).

## Layout cheat-sheet — where does a change go?

- **New public page** → new `*.php` at repo root; include `menu.php` (header) at top and `footer.php` at bottom. Copy an existing page (e.g. `service.php`) as the skeleton.
- **Header / nav** → `menu.php` (it *is* the site header: logo, nav, CTA buttons, mobile drawer, hamburger JS). NOT `header/`.
- **Footer** → `footer.php` (also injects the AI chatbot `<script src="https://acanchatbot.web.app/embed.js">`).
- **Per-page custom header band** → `header/download-header.php`, `header/myanmar-situation-header.php` (included *after* `menu.php`).
- **Shared "3-button" CTA strip** → `3buttonsection.php` (included near page bottom on most content pages).
- **Global CSS/JS** → `assets/css/main.css` (~61KB, the single global stylesheet), `assets/css/blog-post.css`, `assets/js/main.js`. Most pages ALSO carry a large inline `<style>` block — per-page CSS is inline, not in main.css.
- **Images / PDFs / fonts / video** → `assets/img` (312 files), `assets/pdf`, `assets/fonts`, `assets/video`.
- **Contact flow** → `contectus.php` → `confirm.php` → `send-contact.php` (see below).
- **Newsletter** → `myanmar-situation.php` signup form → `newsletter-subscribe.php` (see below).
- **Admin panel** → `admin/` (login, dashboard, export, delete).

## Page composition pattern (convention)

Every page: `menu.php` … optional `3buttonsection.php` / custom header … `footer.php`.
Pages that follow it (47 include footer.php): index, service, profile, blog-page, download, contectus, myanmar-situation, data-services, case-design, kpo-page, consulting-services, acan-dev, update-page, bpo/bpohome/bpocompany, ai-*, quality, management, outsourcing*, ocr-dx, llm-eval, genai-tips, sunday-*, learning-loop, necessary, business, companies, japan-quality, privacy, post, blog, etc.

## Contact form flow (three-step, PHP+SMTP — NOT FormSubmit)

1. `contectus.php` — input form, `action="confirm.php"`, field names are **Japanese**: `会社名 / ご担当者名 / メールアドレス / 電話番号 / お問い合わせ内容`.
2. `confirm.php` — read-only confirmation screen; "送信する" → `send-contact.php`, "編集に戻る" → `contectus.php` (re-fills via `_editing`).
3. `send-contact.php` — validates, `save_subscriber_to_db(...)` then sends via PHPMailer, renders success/error page.
   - Note: `index.php` ALSO has a separate inline form that still POSTs to **FormSubmit.co** via `fetch()` (`index.php` ~line 8164). Two contact mechanisms coexist.

## Newsletter flow (double opt-in scaffolding)

- `myanmar-situation.php` signup → `newsletter-subscribe.php` → dedupe check → `save_subscriber_to_db(...'newsletter')` → auto-reply mail → redirect `confirm-page.php`.
- Already-registered → `newsletter-already-registered.php?email=...`.
- `confirm.php` (contact) vs `confirm-page.php` (newsletter success) — **different files, easy to confuse**.
- `newsletter-mailer.php` = shared `send_newsletter_mail()` (15s SMTP timeout, deliberately set — long default left button stuck on 送信中).

## Database (MySQL, shared host)

- Tables: `subscribers` (id, email, name, company, phone, message, source, created_at, verify_token, verified_at; UNIQUE email) and `admin_users` (username, password bcrypt).
- Schema created by `db_setup.php` (**one-time, should be deleted on prod**).
- Admin default login from db_setup: `admin / admin123`.
- `source` column distinguishes `'contact'` vs `'newsletter'`; dedupe is per-source.

## Hard-won rules / gotchas

- **DB credentials are duplicated and OUT OF SYNC.** `admin/db.php` + `db_setup.php` use `zojtpszw_acanadmin`/`zojtpszw_acanadmin`; but `subscriber-save.php` uses `new mysqli('localhost','root','','acanadmin')`. The comment in subscriber-save.php says "keep in sync" — they are not. Any change to DB creds must touch all three.
- **Secrets are committed to git.** `.gitignore` only excludes `mail-config.php`, but `newsletter-mail-config.php` contains a live Gmail app password and `contact-config.php` a placeholder. Treat as exposed.
- `menu.php` is the header — do not look for `header.php`.
- `db_setup.php`, `smtp_test.php` are dev-only files that should not ship to production.
- Header layout: `menu.php` loads AFTER each page's own `<style>`, deliberately overriding per-page nav spacing. Nav needs ~1000px; below 1023px links collapse into the drawer.
- `main.css` is global; per-page styling lives in inline `<style>` blocks — check both when changing a page's look.
- **`vendor/` is gitignored → every server needs `composer install`.** If `vendor/` is missing, any page that loads PHPMailer fatals with HTTP 500. Live entry points `send-contact.php` and `newsletter-subscribe.php` now guard the require (`is_file()` check) so they degrade to the error page instead of 500.
- **`composer.json` must NOT autoload `mail-config.php`.** It used to (`autoload.files: ["mail-config.php"]`), which made `vendor/autoload.php` itself `require` a *gitignored* file — so even a correctly installed `vendor/` fataled on the server. Removed; nothing needs it (send-mail.php requires it explicitly). If composer.json changes, re-run `composer dump-autoload` and re-upload `vendor/`.
