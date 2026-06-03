# Handoff

## M3 — COMPLETE ✅

All SCW-43→54 merged and marked Done in Linear.

## Live Deployment — IN PROGRESS

**Hostinger Status:** WordPress installed and running at https://salescompass.net

✅ **Completed:**
- Theme uploaded to `public_html/wp-content/themes/sales-compass/`
- Theme activated (Sales Compass theme is live)
- WPForms Lite installed and activated
- All 8 pages created (Home ID=5, Services=6, Sales-Coaching=7, AI-Automation=8, Case-Studies=9, Contact=10, Privacy=3, ToS=12)
- Media uploads synced from Studio
- URLs fixed: siteurl/home set to https://salescompass.net
- All localhost:8882 references replaced with https://salescompass.net

⚠️ **MANUAL WORK NEEDED:**
- Form embedding: setup-pages.php created the form (ID=13) but placeholder search failed on pages with different IDs. Home (ID=5) and Contact (ID=10) need the form block manually added via WP admin at https://salescompass.net/wp-admin.
  - Edit each page, add a `wp:shortcode` block with `[wpforms id="13"]`
- GitHub Actions workflow created ([feature/scw-github-actions](https://github.com/artfusion/sales-compass/pull/new/feature/scw-github-actions)) — needs PR merge + SSH secret added to GitHub
- Hostinger's git autodeploy must be **disabled** in hPanel (it will be replaced by GitHub Actions)

## Next Steps (User Action Required)

1. **Add SSH secret to GitHub:**
   - Go to repo Settings → Secrets and variables → Actions → New repository secret
   - Name: `HOSTINGER_SSH_PASS`
   - Value: `$Benzli123%`

2. **Merge GitHub Actions PR:**
   - https://github.com/artfusion/sales-compass/pull/new/feature/scw-github-actions
   - This enables automatic theme deployment on future pushes to main

3. **Disable Hostinger autodeploy in hPanel:**
   - Log into Hostinger hPanel
   - Navigate to your domain's git settings
   - Disable the built-in autodeploy (GitHub Actions now handles it)

4. **Manually add forms to pages** (temporary — until we can re-run setup):
   - Log into https://salescompass.net/wp-admin
   - Edit Home page (ID=5) and Contact page (ID=10)
   - Add a Shortcode block with `[wpforms id="13"]` to display the inquiry form

## Studio state

- WP Studio: `http://localhost:8882` (reference; not deployed)
- All 8 pages + WPForms form structure defined in theme setup scripts
- Media files synced to Hostinger

## Blockers / Notes

- SSH password auth was flaky (multiple session drops) — consider using SSH key auth instead of password for future work
- Setup scripts created pages with different IDs on Hostinger vs. Studio (different DB state) — placeholder search in setup-pages.php should handle this more gracefully
