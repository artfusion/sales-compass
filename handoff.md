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

## Repo tidiness (as of this session)
- **0 open PRs, 0 Actions runs, 0 stale branches.** Failed deploy-workflow runs were deleted.
- PRs #16 and #20 (abandoned SSH-over-CI attempts) are **closed + annotated** as superseded by SCW-70. GitHub can't delete PRs, so they remain under the "Closed" filter only — the default Open view is empty. Not loose ends.

## Open follow-ups (optional, non-blocking)
1. **Rotate the Hostinger SSH password** in hPanel — it was shared in chat multiple times during recovery. (Current password still works for SSH ops.)
2. **File a ticket in the THEME repo** for the `setup/setup-forms.php` bug: it hardcodes Studio page IDs (`49 => home, 54 => contact`) for the form-embed step, so it silently skips on any other DB. Live pages were fixed with a one-off slug-based script. Fix: switch the embed loop to `get_page_by_path()` slug lookup. (Script now lives in `artfusion/sales-compass-theme`.)
3. **Decide on [SCW-63](https://linear.app/artfusion/issue/SCW-63)** ("decide WP hosting approach") — still In Progress; its deploy-mechanism portion is resolved by SCW-70. Close it, or keep open for other launch tasks (DNS/SSL/etc.).

## NOTE for next session
This handoff was updated **uncommitted** in the working tree (no active feature branch after the SCW-70 merge; avoided a throwaway PR). Commit it onto the next feature branch you create, or discard if stale.

## Blockers
None. Site is live and the deploy pipeline is verified end-to-end.
