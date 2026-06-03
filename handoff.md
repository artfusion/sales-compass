# Handoff

## Site is LIVE ✅ — https://salescompass.net

WordPress on Hostinger, all 8 pages live, theme + WPForms inquiry form rendering.

## Deployment architecture (SCW-70) — DONE

**The theme now lives in its own repo:** `artfusion/sales-compass-theme` (repo root = theme).
Hostinger's native "Deploy from GitHub" auto-deploys its `main` branch into
`public_html/wp-content/themes/sales-compass/` — scoped to that dir, so **WP core is never touched**.

- Push to `sales-compass-theme` main → live theme updates automatically.
- The theme dir on the server is now a Hostinger-managed git checkout.
- **Never** point a Hostinger deploy at `public_html` root or connect it to this monorepo — that destructively wipes WP core (happened twice during this work).
- GitHub Actions over SSH was abandoned: Hostinger firewalls SSH from GitHub runner IPs (connection timeouts).

### Local dev for the theme
- Clone: `/Users/michael/Development/Websites/sales-compass-theme` ← **edit the theme here**
- WP Studio symlink (`~/Studio/sales-compass/wp-content/themes/sales-compass`) points at that clone.
- Edit → preview in Studio (localhost:8882) → commit + push → Hostinger auto-pulls.

### This monorepo
- Theme removed (now in the separate repo). Holds docs + `static/` reference site only.
- Dead `.github/workflows/deploy-theme.yml` removed.

## Live server reference
- SSH: `ssh -p 65002 u783182544@82.29.157.128`, path `domains/salescompass.net/public_html`
- DB: `u783182544_zGor6`
- Page IDs: home=6, services=7, sales-coaching=8, ai-automation=9, case-studies=10, contact=11, privacy-policy=3, terms-of-service=13
- WPForms Inquiry Form ID=14, embedded on home (6) + contact (11)
- SSH is flaky (Hostinger rate-limits rapid auth) — space out calls; consider key auth.

## Known bug → needs a ticket (in the THEME repo now)
`setup/setup-forms.php` hardcodes Studio page IDs (`49 => home, 54 => contact`) for the form-embed
step, so it silently skips on any other DB. Live pages were fixed with a one-off slug-based script.
Fix: change the embed loop to look up pages by slug via `get_page_by_path()`.

## Blockers / open questions
None. Site is live and the deploy pipeline is verified.
