# Handoff

## M3 — COMPLETE ✅

All SCW-43→54 merged and marked Done in Linear.

## Live Deployment — SITE IS LIVE ✅

**https://salescompass.net is fully restored and live** (verified 2026-06-03).

### What happened (root cause)
Hostinger's built-in **"Deploy from GitHub"** does a destructive full git checkout of the repo root → `public_html`. The repo has no WordPress core, so every deploy wiped WP (core + `wp-config.php`), breaking the site twice. "Stopping" it wasn't enough — it re-fired and wiped again. **Fix: the GitHub integration was fully disconnected in hPanel, then WP was reinstalled fresh.**

### Recovery performed (all via SSH)
- Fresh WP reinstalled via hPanel Auto Installer (DB: `u783182544_zGor6`)
- Theme re-uploaded to `public_html/wp-content/themes/sales-compass/` + activated
- WPForms Lite reinstalled + activated
- Seed scripts run → 8 pages rebuilt. **New live IDs: home=6, services=7, sales-coaching=8, ai-automation=9, case-studies=10, contact=11, privacy-policy=3, terms-of-service=13**
- Inquiry Form created (**ID=14**), embedded on home (6) + contact (11)
- Media re-synced from Studio
- URLs: siteurl/home = `https://salescompass.net`; localhost refs replaced
- Permalinks set to `/%postname%/` + flushed
- **Verified:** all 8 pages HTTP 200, theme active, form renders, images load

### Known bug to fix under a ticket
`setup/setup-forms.php:145` hardcodes **Studio** page IDs (`49 => home, 54 => contact`) for the form-embed step. On any other DB those IDs don't match, so the embed silently warns and skips. Live pages were fixed with a one-off slug-based script (not committed). **Needs a Linear ticket: change the embed loop to look up pages by slug via `get_page_by_path()` instead of hardcoded IDs.**

## Deployment going forward

- **Do NOT reconnect Hostinger's "Deploy from GitHub"** — it wipes WP core.
- Theme deploys use the **GitHub Actions** workflow on `feature/scw-github-actions` (rsyncs only `wp-content/themes/sales-compass/`, never touches core).

### Remaining setup (to enable auto-deploy)
1. **Add SSH secret to GitHub:** repo Settings → Secrets and variables → Actions → New secret. Name: `HOSTINGER_SSH_PASS`, Value: the Hostinger SSH password.
2. **Open + merge the PR** for `feature/scw-github-actions` → enables theme auto-deploy on push to main.

## Blockers / Notes

- SSH password auth is flaky (Hostinger rate-limits rapid auth attempts → intermittent "Permission denied"). Space out SSH calls. Consider switching to SSH key auth.
- Server SSH: `ssh -p 65002 u783182544@82.29.157.128`, path `domains/salescompass.net/public_html`.
