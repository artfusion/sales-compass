# Handoff

**Branch:** `feature/scw-43-50-page-assembly`
**Active tickets:** SCW-43, SCW-44, SCW-45, SCW-46, SCW-47, SCW-48, SCW-49, SCW-50 (all In Progress)

## Where we stopped

All 8 M3 pages were created in WP Studio with inline block markup, `page-no-title` template, and correct reading settings in a prior session. The git artifact (setup-pages.php) was not committed. Now writing the seed script and running final verification.

## Next steps

1. ~~CLAUDE.md + handoff.md committed~~ ✓
2. Extract full `post_content` for all 8 pages via `studio wp post get`
3. Write `wp-theme/sales-compass/setup/setup-pages.php` seed script
4. SCW-54 partial: verify nav hamburger (≤767px) + FAQ Details on coaching/AI automation pages
5. Commit `setup-pages.php` + updated `handoff.md`
6. Open PR → squash merge → mark SCW-43→50 Done in Linear

## Studio state

- WP Studio: `http://localhost:8882` (admin: `http://localhost:8882/wp-admin`)
- All 8 pages published with block content, IDs:
  - home=49, services=50, sales-coaching=25, ai-automation=19
  - case-studies=53, contact=54, privacy-policy=3, terms-of-service=56
- `show_on_front=page`, `page_on_front=49`
- All pages: `_wp_page_template=page-no-title`
- WPForms not yet installed (Batch B, separate branch)

## Blockers / open questions

None.
