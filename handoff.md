# Handoff

## M3 Batch A — DONE ✅

SCW-43→50 merged ([PR #12](https://github.com/artfusion/sales-compass/pull/12)), all tickets marked Done in Linear.

---

## M3 — COMPLETE ✅

All SCW-43→54 merged and marked Done in Linear ([PR #12](https://github.com/artfusion/sales-compass/pull/12), [PR #13](https://github.com/artfusion/sales-compass/pull/13)).

### Studio state

- WP Studio: `http://localhost:8882`
- All 8 pages published with block content + `page-no-title` template
- `show_on_front=page`, `page_on_front=49`
- WPForms Lite active; Inquiry Form ID=57 embedded on home (49) + contact (54) via `wp:shortcode` block
- Note: `wp:wpforms/form-selector` Gutenberg block does not render in FSE block-theme context — shortcode is the fix

### All verification items complete ✅

Nav hamburger verified: `overlayMenu:mobile` is configured in `parts/header.html`. Breakpoint is **< 600px** (WP Navigation block default). Hamburger (☰) shows, overlay opens with all 6 links, × closes it. Tested via JS DOM inspection + CSS override simulation.

### Next milestone

M4 — check Linear for upcoming tickets.

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
