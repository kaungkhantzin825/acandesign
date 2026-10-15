# Domain Setup & Redirect Checklist — A CAN SOLUTIONS

Working doc for turning `boss-note.md` into an actual DNS/hosting setup.
Source plan: `boss-note.md` · Created 2026-10-13

---

## 0. Findings — read this before touching anything

1. **Canonical domain is `acan-sol.com`.** Confirmed in code: `info@acan-sol.com` (public) and `kado@acan-sol.com` (privacy).
2. **The redirect targets in `boss-note.md` now exist** (added 2026-10-15) as `/services/ai`, `/services/bpo`, `/services/kpo` (plural, no trailing slash). The note's singular `/service/ai/` form 301s to them, but point the domain redirects at the `/services/...` form directly. Full map in §1.
3. **No router, no rewrite layer.** Every 301 must point at a real `.php` file.
4. **Outbound mail currently leaves via Gmail**, from `acanadobe3@gmail.com` → `acankado@gmail.com` — *not* from `@acan-sol.com`. This affects SPF (§6).
5. **`.htaccess` now carries the clean-URL rewrites** (added 2026-10-13). Public pages are served without `.php` — `/service`, not `/service.php`. Every 301 target below uses the clean form, so the brand domains land in a single hop (e.g. `acanbpo.jp → /services/bpo`).

## 1. Real URL map (use these as 301 targets)

| Purpose | Real URL |
|---|---|
| Home | https://acan-sol.com/ |
| Service index | https://acan-sol.com/services |
| AI / data services | https://acan-sol.com/services/ai |
| BPO | https://acan-sol.com/services/bpo |
| KPO | https://acan-sol.com/services/kpo |
| Technology (web/system dev) | https://acan-sol.com/services/technology |
| Design / creative | https://acan-sol.com/services/design |
| Myanmar business support | https://acan-sol.com/services/myanmar-support |
| AI overview | https://acan-sol.com/ai-page |
| Myanmar outsourcing | https://acan-sol.com/myanmar-outsourcing |
| Contact form | https://acan-sol.com/contectus |

> Pages are served **without `.php`**; the `.php` URLs 301 to these. Use the clean form in all new links.

> The old flat service URLs (`/bpohome`, `/kpo-page`, `/data-services`, …) 301 to the `/services/...` URLs above.

## 2. Redirect map (final)

| Domain | Role | 301 target | SSL |
|---|---|---|---|
| acan-sol.com | Main site (do not redirect) | — | required |
| myanmar-bpo.jp | Independent lead-gen site | **build** (§5) | required |
| acanbpo.jp | Brand / sales short URL | https://acan-sol.com/services/bpo | required |
| acan-kpo.jp | Brand / sales short URL | https://acan-sol.com/services/kpo | required |
| acan-ai.jp | AI brand | https://acan-sol.com/services/ai | required |
| acansolutions.jp | Brand defense | https://acan-sol.com/ | required |
| aikpo.jp | Future brand — hold | https://acan-sol.com/services/kpo (optional) | required |

## 3. Phase 1 — DNS records (do first)

For **each** redirect domain, at your DNS provider:

| Type | Name | Value | TTL |
|---|---|---|---|
| A | `@` | `<IP of the acan-sol.com server>` | 300 |
| A | `www` | `<same IP>` | 300 |

- Find the IP: cPanel → *Server Information*, or `dig acan-sol.com +short`.
- Delete any registrar parking/placeholder records first.
- TTL 300 while setting up; raise to 3600 once stable.
- **No MX records on the redirect domains** (see §6).

## 4. Phase 2 — Attach + 301 in cPanel

Recommended: **Alias (parked) domains + one host-keyed 301 block in the main `.htaccess`.**
Every rule stays in one file you already version-control, and host-keying prevents redirect loops when all domains share a doc root.

1. cPanel → *Domains* → **Create A New Domain** → add each redirect domain as an **Alias** of `acan-sol.com`.
2. Add this block at the **top** of `public_html/.htaccess` — **above** the clean-URL rules:

```apache
<IfModule mod_rewrite.c>
  RewriteEngine On

  RewriteCond %{HTTP_HOST} ^(www\.)?acanbpo\.jp$ [NC]
  RewriteRule ^ https://acan-sol.com/services/bpo [R=301,L]

  RewriteCond %{HTTP_HOST} ^(www\.)?acan-kpo\.jp$ [NC]
  RewriteRule ^ https://acan-sol.com/services/kpo [R=301,L]

  RewriteCond %{HTTP_HOST} ^(www\.)?acan-ai\.jp$ [NC]
  RewriteRule ^ https://acan-sol.com/services/ai [R=301,L]

  RewriteCond %{HTTP_HOST} ^(www\.)?acansolutions\.jp$ [NC]
  RewriteRule ^ https://acan-sol.com/ [R=301,L]

  RewriteCond %{HTTP_HOST} ^(www\.)?aikpo\.jp$ [NC]
  RewriteRule ^ https://acan-sol.com/services/kpo [R=301,L]
</IfModule>
```

> **Order matters.** This block must sit *above* the clean-URL block. Both share the same
> document root and the clean-URL rules end in `[L]`, so if they ran first,
> `acanbpo.jp/services` would be served internally as `service.php` instead of redirecting
> to acan-sol.com.

3. cPanel → *SSL/TLS Status* → **Run AutoSSL** for all domains.
4. After AutoSSL succeeds, force HTTPS on the main site:

```apache
  RewriteCond %{HTTPS} off
  RewriteCond %{HTTP_HOST} ^(www\.)?acan-sol\.com$ [NC]
  RewriteRule ^ https://acan-sol.com%{REQUEST_URI} [R=301,L]
```

5. Verify: `curl -I https://acanbpo.jp` → expect `301` + `location: https://acan-sol.com/services/bpo`.

> Do **not** add these as Aliases if you instead give them their own folder + `.htaccess`; pick one method only.

## 5. Phase 3 — myanmar-bpo.jp (the real build)

- Add as an **Addon Domain** with its own folder (e.g. `public_html/myanmar-bpo/`). Do **not** alias it.
- Minimum launch: one landing page with the positioning from the note:
  > ミヤンマーBPOなら A CAN SOLUTIONS — 日本品質 × ミヤンマー人材 × AI
- Do **not** reuse `menu.php` as-is — its nav links are absolute to `acan-sol.com`. Build a slim header for this site.
- Contact CTA can point to `https://acan-sol.com/contectus.php` initially (track it cross-domain, §7).
- Pick one canonical host (apex vs `www`) and 301 the other.
- Add SSL + force HTTPS.
- Only after it has real content, submit to Search Console.

## 6. Phase 4 — Email / anti-spoofing

**One mail domain: `acan-sol.com`.** Do not create mailboxes on the redirect domains.

On **each redirect domain**, add:

| Type | Name | Value |
|---|---|---|
| TXT | `@` | `v=spf1 -all` |
| TXT | `_dmarc` | `v=DMARC1; p=reject; rua=mailto:dmarc@acan-sol.com` |

On **acan-sol.com**:

- **MX** — point to your mail host (cPanel default `mail.acan-sol.com`) so `info@` / `kado@` receive.
- **SPF** — depends on how you send:
  - Today the site sends via **Gmail SMTP** with a `@gmail.com` From address. acan-sol.com's SPF is not involved, but recipients see a gmail.com sender — a trust problem.
  - **Recommended:** switch the sender to `info@acan-sol.com` (cPanel mail server, or Gmail "Send mail as"), then set:
    - cPanel mail → `v=spf1 +a +mx ~all`
    - Gmail relay → `v=spf1 include:_spf.google.com ~all`
- **DKIM** — cPanel → *Email Deliverability* → Install DKIM; keep the record.
- **DMARC** — start `v=DMARC1; p=none; rua=mailto:dmarc@acan-sol.com`, monitor 2–4 weeks, then `p=quarantine`, then `p=reject`.
- Code to update when you switch senders: `send-contact.php` line 89 `setFrom(NEWSLETTER_SMTP_USERNAME, ...)` and the same pattern in `newsletter-mailer.php`.

## 7. Phase 5 — Google

- **Search Console** → add a **Domain property** for `acan-sol.com` and `myanmar-bpo.jp`; verify with the DNS TXT record it provides.
- Submit a `sitemap.xml` for each (create one for the main site if missing).
- **GA4** → one property + two data streams (or two properties). For myanmar-bpo.jp → acan-sol.com journeys:
  - Admin → Data Streams → *Configure tag settings* → **Configure your domains** → add both.
  - Admin → Data Streams → *List unwanted referrals* → add the other domain.
- Add the Google site-verification TXT record(s) to DNS.

## 8. Phase 6 — Security & housekeeping

- Registrar: **auto-renew ON**, **2FA ON**, **registrar lock ON** for every domain.
- Hosting + Google accounts: 2FA ON.
- Export / back up each DNS zone (save as text) before and after changes.
- Keep TTL 300 until stable, then raise.

## 9. Order of operations

1. Confirm server IP + SSL on acan-sol.com + decide apex vs `www`.
2. Add DNS A records for the 5 redirect domains.
3. Add them as Aliases → append the 301 block → run AutoSSL → verify with curl.
4. Add SPF `-all` + DMARC `reject` on the redirect domains.
5. Register Search Console domain properties (DNS verify).
6. Build myanmar-bpo.jp.
7. Wire GA4 + cross-domain.
8. Harden acan-sol.com mail (SPF/DKIM/DMARC) and move the sender off the Gmail address.

## 10. Open decisions

- [ ] Apex vs `www` as canonical for each site.
- [ ] myanmar-bpo.jp: full site now, or a single landing page first?
- [ ] Mail: keep the Gmail relay, or move to `info@acan-sol.com` on cPanel?
- [ ] aikpo.jp: hold as a redirect, or leave parked with no content?
- [x] BPO / KPO / AI 301 targets: `/services/bpo`, `/services/kpo`, `/services/ai`.
