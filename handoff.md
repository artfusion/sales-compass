# Handoff

## M3 Batch A — DONE ✅

SCW-43→50 merged ([PR #12](https://github.com/artfusion/sales-compass/pull/12)), all tickets marked Done in Linear.

---

## M3 Batch B — DONE ✅ (awaiting PR merge)

**Branch to create:** `feature/scw-51-54-wpforms`
**Tickets:** SCW-51, SCW-52, SCW-53, SCW-54

### What Batch B does

- **SCW-51** — Install WPForms Lite plugin
- **SCW-52** — Build inquiry form (Name, Email, Company, Interested In, Message)
- **SCW-53** — Embed form on Homepage (ID 49) + Contact (ID 54), replacing the `<em>Inquiry form will be embedded here (SCW-53).</em>` placeholder paragraphs
- **SCW-54** — Final verification: all 8 pages 200, homepage correct, form submits, nav hamburger ≤767px, FAQ Details open/close

### Studio state at handoff

- WP Studio: `http://localhost:8882`
- All 8 pages published, IDs: home=49, services=50, sales-coaching=25, ai-automation=19, case-studies=53, contact=54, privacy-policy=3, terms-of-service=56
- WPForms: NOT yet installed
- Nav hamburger: not yet visually verified at ≤767px (Chrome extension limitation)

### Blockers / open questions

None.

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
