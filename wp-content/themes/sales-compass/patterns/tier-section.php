<?php
/**
 * Title: Tier Section
 * Slug: salescompass/tier-section
 * Categories: salescompass/sections
 * Description: Two-column service tier: icon badge, tier label, heading, subheading, description, checklist features, and CTA button alongside an image. Used on Services page (×3, alternating column order).
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">

	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--xl)"}}}} -->
	<div class="wp-block-columns is-layout-flex">

		<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:html -->
			<div style="display:flex;align-items:center;gap:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--sm)">
				<div style="width:40px;height:40px;background:var(--wp--preset--color--blue-100);border-radius:8px;display:flex;align-items:center;justify-content:center"><i class="fa-solid fa-file-invoice" style="color:var(--wp--preset--color--ocean-blue)"></i></div>
				<span style="font-size:0.75rem;font-weight:700;letter-spacing:0.05em;color:var(--wp--preset--color--ocean-blue);text-transform:uppercase">TIER 1</span>
			</div>
			<!-- /wp:html -->

			<!-- wp:heading {"level":2,"fontSize":"x-large","style":{"spacing":{"margin":{"bottom":"4px"}}}} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-bottom:4px">The Research Partner</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--ocean-blue)"},"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
			<p style="color:var(--wp--preset--color--ocean-blue);font-weight:600;margin-bottom:var(--wp--preset--spacing--sm)">Productized Service</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gray-600)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--md)"}}}} -->
			<p style="color:var(--wp--preset--color--gray-600);margin-bottom:var(--wp--preset--spacing--md)">Perfect for teams at the start of their sales build-out. We handle the research, data, and systems so your team can focus on selling.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<ul style="list-style:none;padding:0;margin:0 0 var(--wp--preset--spacing--lg);display:flex;flex-direction:column;gap:0.75rem">
				<li style="display:flex;align-items:flex-start;gap:0.75rem;color:var(--wp--preset--color--gray-600)">
					<div style="width:24px;height:24px;background:var(--wp--preset--color--ocean-blue);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px"><i class="fa-solid fa-check" style="color:#fff;font-size:0.75rem"></i></div>
					<div><strong>Ideal Customer Profile (ICP) Definition</strong> — research-backed profiling of your best-fit buyers and segments.</div>
				</li>
				<li style="display:flex;align-items:flex-start;gap:0.75rem;color:var(--wp--preset--color--gray-600)">
					<div style="width:24px;height:24px;background:var(--wp--preset--color--ocean-blue);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px"><i class="fa-solid fa-check" style="color:#fff;font-size:0.75rem"></i></div>
					<div><strong>Prospect List Building</strong> — verified, enriched contact lists ready for outreach.</div>
				</li>
				<li style="display:flex;align-items:flex-start;gap:0.75rem;color:var(--wp--preset--color--gray-600)">
					<div style="width:24px;height:24px;background:var(--wp--preset--color--ocean-blue);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px"><i class="fa-solid fa-check" style="color:#fff;font-size:0.75rem"></i></div>
					<div><strong>CRM Setup & Configuration</strong> — pipeline stages, fields, and automations tuned to your process.</div>
				</li>
			</ul>
			<!-- /wp:html -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Get Started with Tier 1</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"id":26,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-large" style="border-radius:12px">
				<img src="http://localhost:8882/wp-content/uploads/2026/06/sales-infrastructure.png" alt="Sales infrastructure and research setup" class="wp-image-26" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
