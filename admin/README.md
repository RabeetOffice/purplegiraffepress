# Purple Giraffe Press — Admin Studio

A self-contained, file-based admin dashboard bolted onto the existing PHP site.
It publishes SEO-safe blog posts, manages the site's content data files, reads the
leads inbox, and controls its own users and roles. No CMS database is required
(the only database it touches is the site's existing `leads` table, read-only).

Everything lives under `/admin/`. The public site is unchanged except for a few
small, backwards-compatible hooks (see "What was touched on the live site").

---

## 1. Logging in (first run)

Open `/admin/` in a browser. Two accounts are seeded:

| Username | Role         | Sees                    |
|----------|--------------|-------------------------|
| `admin`  | Super Admin  | Everything              |
| `editor` | Blog Editor  | Blog Posts only         |

The starting passwords were printed in the build output. **Change them on first
login** (My Account → Change password) and **turn on 2FA** for every account
(My Account → Two-factor authentication).

Passwords are bcrypt-hashed in `admin/data/users.json`, which is not
web-accessible (see security below).

---

## 2. What each section does, and which files it writes

| Section         | Module key    | Writes to (live site)                              | Read by (public) |
|-----------------|---------------|----------------------------------------------------|------------------|
| Dashboard       | `dashboard`   | nothing (read-only overview)                       | —                |
| Blog Posts      | `posts`       | `blogs/<slug>.php`, `includes/blog-data.php`       | blog listing, single posts, home strip, schema |
| Submissions     | `submissions` | nothing (reads the `leads` MySQL table read-only)  | — |
| Portfolio       | `portfolio`   | `includes/data/portfolio-data.php` (+ cover uploads to `assets/images/portfolio/`) | `portfolio.php`, home carousel |
| Testimonials    | `testimonials`| `includes/testimonials-data.php`                   | home marquee, service sliders, `testimonials.php` |
| Authors         | `authors`     | `includes/blog-author.php` (`$author_profiles`)    | "About the author" box on every post |
| Settings        | `settings`    | `admin/data/settings-overrides.json`               | footer, contact page, schema, lead emails |
| Roles & Users   | super-admin   | `admin/data/roles.json`, `admin/data/users.json`   | — |
| My Account      | any login     | `admin/data/users.json` (own row)                  | — |

The admin's own state lives in `admin/data/` (never web-served):

```
admin/data/
  roles.json              roles: [{name,label,modules[],locked?}]
  users.json              accounts (bcrypt hashes, role name, optional 2FA)
  posts/<slug>.json       editable source of each blog post (admin's truth)
  settings-overrides.json safe site settings merged over config.php defaults
  leads-state.json        read/star flags for leads (the leads table is never written)
  login-attempts.json     login throttle
  backups/                timestamped copy of every overwritten live file (last 20)
```

---

## 3. How blog publishing stays SEO-safe

The generator was derived byte-for-byte from the brand's newest hand-built post
(`blogs/why-every-childrens-story-deserves-custom-illustration.php`). Re-importing
any of the three existing posts and regenerating them produces a **byte-identical**
file (proven by the test in section 6), so publishing through the admin never
degrades the structure search engines already see: title tag, meta description,
canonical, BlogPosting + FAQPage schema, the in-article TOC, breadcrumbs, author
box and internal links are all preserved.

Internal links inside a post body are stored as safe tokens — `@@asset:page.php@@`
and `@@post:slug@@` — and only expanded to the site's real
`<?php echo e(asset('…')); ?>` / `blog_post_url('…')` calls at generate time, after
the body has been stripped of any PHP. This is what lets the editor produce a
`.php` file without ever letting editor content become executable code.

**Note on blog indexing (site policy):** blog pages are indexable like the rest
of the site, and `sitemap.xml` carries an auto-managed Blog block (between the
`<!-- Blog … -->` / `<!-- /Blog -->` markers). Publishing and unpublishing rewrite
that block so the sitemap always lists the blog index plus every published post —
do not hand-edit between the markers.

Publishing is atomic and backed up: the new `blogs/<slug>.php` and the regenerated
`includes/blog-data.php` are both `php -l` linted **before** either replaces the
live file, and the previous version is copied to `admin/data/backups/` first, so a
bad write can never take the site down. Unpublish moves the file to `/trash`
(never a hard delete) and removes the registry entry. A post's slug is locked once
it is published.

---

## 4. Deploying to the live server

1. **Upload the whole `/admin/` folder.** Also upload the small changes to
   `includes/config.php`, `includes/data/portfolio-data.php`, `.htaccess` and
   `robots.txt` (see next section).
2. **Writable paths.** PHP (the web-server user) needs write permission on:
   `blogs/`, `assets/images/blog/`, `assets/images/portfolio/`, `includes/`
   (for `blog-data.php`, `testimonials-data.php`, `blog-author.php`,
   `data/portfolio-data.php`), `sitemap.xml` at the web root (the publish flow
   rewrites its Blog block), `admin/data/` (and its `posts/` and `backups/`
   subfolders), and a `trash/` folder at the web root (created on demand).
3. **GD extension.** Cover/inline image uploads convert to WebP via GD
   (`imagewebp`). If GD is missing, uploads still work but keep their original
   format under a forced image extension (still safe).
4. **PHP 8.0+** with `pdo_mysql`, `fileinfo`, `mbstring`, `dom`. `exec` enabled is
   preferred (used only to `php -l` generated files before writing them); if it is
   disabled, the panel degrades to trusting the generated code rather than
   blocking publishing.
5. **Confirm on live:** `/admin/data/users.json` must return **403**. Log in,
   publish a test post, then unpublish + delete it. Submit one real contact form
   and confirm it appears in Submissions (and by email).

---

## 5. What was touched on the live site (outside `/admin/`)

All changes are backwards-compatible; the public site renders identically until
you edit something in the admin.

- **`includes/config.php`** — added a `pgp_setting()` override layer at the top so
  Settings can change contact info / socials / lead recipients via
  `admin/data/settings-overrides.json`. With no overrides file, the original
  hard-coded defaults apply. Empty overrides are honoured (so a social link can be
  deliberately hidden). SMTP, database and reCAPTCHA secrets stay in `config.php`
  on the server and are intentionally **not** editable from the browser.
- **`includes/data/portfolio-data.php`** — the render map now prefers an uploaded
  `cover` over the Amazon-ASIN-derived image; with no `cover` the behaviour is
  unchanged.
- **`.htaccess`** — added an `/admin` passthrough (so clean-URL rewrites leave the
  admin alone) and a `/trash` block.
- **`robots.txt`** — `Disallow: /admin/`, the preview endpoint and `/trash/`.

---

## 6. Verification (already run during the build)

- **Byte-identical regeneration** — all three existing posts import → regenerate →
  identical; `includes/blog-data.php` parses and rewrites byte-identically and its
  parsed fields equal the live values.
- **End-to-end publish flow** over the live Apache: login, CSRF rejection, draft
  save, sanitizer strips `<script>`/`on*`/PHP, admin-only preview (404 to the
  public), publish (file lints, has schema, renders 200), registry +
  sitemap consistency, unpublish (file trashed, entry removed), delete.
- **RCE probes** — PHP tags (incl. nested in blockquote, short echo, in attribute,
  dangling), comments/CDATA, `on*` handlers, `javascript:`/`data:` URLs and token
  breakout attempts all neutralised; a generated file built from hostile content
  differs from a benign one only in string literals, and executing it runs nothing.
- **TOTP** — verified against the RFC 6238 SHA-1 test vectors, with ±1 period drift
  and single-use backup codes.
- **RBAC** — the `editor` account is blocked (403) from every admin-only module and
  lands on Blog Posts after login; `*` can never be granted from POST input; the
  last super-admin cannot be deleted, demoted or deactivated.
- **Content round-trips** — testimonials, portfolio and authors read → write →
  byte-identical, including entries with apostrophes/quotes/backslashes; the public
  pages still render.

---

## 7. Extra hardening for production (recommended)

- **Turn on 2FA** for every admin account (My Account → Two-factor).
- **cPanel Directory Privacy** on the `/admin` folder — this puts a second HTTP-auth
  wall in front of PHP. In cPanel: *Directory Privacy → select `admin` → tick
  "Password protect this directory" → create a user*. Anyone reaching `/admin` now
  needs that HTTP login **before** the PHP login even loads.
- **Optional IP allow-list** on `/admin` (in the server config or an `admin/.htaccess`
  `Require ip …`) if the team works from fixed addresses.
- **Move committed secrets out of git.** `includes/config.php` contains the SMTP app
  password, DB credentials and reCAPTCHA secret. Put them in a gitignored include
  (e.g. `includes/secrets.php`) and `require` it from `config.php`, so they are not
  in the repository history.
- Keep `admin/data/` unreadable from the web (the shipped `admin/data/.htaccess`
  does this with `Require all denied` — confirm your host honours `.htaccess`).

---

## 8. Security model in one paragraph

Sessions use a dedicated `HttpOnly`, `SameSite=Lax` cookie (`Secure` on HTTPS) and
regenerate their id on login. Every state-changing POST carries a CSRF token
verified with `hash_equals`. Login is throttled (5 tries per IP+username → 15-min
lockout, a separate throttle for the 2FA step) and gated by reCAPTCHA v3 on the
live domain — the captcha skip is tied to the real loopback peer IP, never the
spoofable Host header. Access control is server-side: every page calls
`admin_require_module()` / `admin_require_admin()` at the top and the nav is only a
convenience; a role that no longer exists gets zero modules (fail-closed). Editor
content can never become code: the body passes a DOMDocument whitelist that removes
PHP processing-instruction nodes, then a final PHP-tag strip, and per-post values
are escaped into PHP string literals — and every generated file is `php -l` linted
before it replaces anything live. Uploads are MIME-sniffed (not by extension),
re-encoded to WebP (which also destroys any hidden payload), and land in a
directory whose `.htaccess` disables script execution.
