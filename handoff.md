# Handoff

**Branch:** `feature/scw-43-50-page-assembly`
**Active tickets:** SCW-43, SCW-44, SCW-45, SCW-46, SCW-47, SCW-48, SCW-49, SCW-50 (all In Progress)

## Status: BATCH A COMPLETE — awaiting PR merge

All deliverables done:
- ✅ CLAUDE.md + handoff.md convention committed
- ✅ `wp-theme/sales-compass/setup/setup-pages.php` written and committed
- ✅ All 8 pages: HTTP 200, correct content, `page-no-title` template
- ✅ Reading settings: `show_on_front=page`, `page_on_front=49`
- ✅ FAQ Details: expand/collapse natively (verified AI Automation page)
- ⚠️ Nav hamburger at ≤767px: Chrome extension couldn't reach mobile viewport — verify manually in browser

## Next steps

1. Review + squash merge the PR → mark SCW-43→50 Done in Linear
2. Start Batch B (`feature/scw-51-54-wpforms`): install WPForms Lite, build inquiry form, embed on homepage + contact

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
