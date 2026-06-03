<?php
/**
 * Title: Hero — Split (Image + Text)
 * Slug: salescompass/hero-split
 * Categories: salescompass/sections
 * Description: Two-column hero: heading, paragraph, and CTA buttons on the left; image on the right. Platinum-white background.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","style":{"color":{"background":"var(--wp--preset--color--platinum-white)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--2xl)","bottom":"var(--wp--preset--spacing--2xl)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--platinum-white);padding-top:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl)">

	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var(--wp--preset--spacing--xl)","left":"var(--wp--preset--spacing--xl)"}}}} -->
	<div class="wp-block-columns is-layout-flex">

		<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-xx-large-font-size">Navigate Your Sales Success with Confidence</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gray-600)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--lg)"}},"typography":{"fontSize":"1.125rem"}}} -->
			<p style="color:var(--wp--preset--color--gray-600);font-size:1.125rem;margin-bottom:var(--wp--preset--spacing--lg)">Sales Compass provides the infrastructure, coaching, and AI automation you need to elevate your sales performance and drive sustainable growth.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--sm)"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contact/">Get Started</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/services/">Learn More</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

			<!-- wp:image {"id":27,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"},"shadow":"var(--wp--preset--shadow--deep)"}} -->
			<figure class="wp-block-image size-large" style="border-radius:12px">
				<img src="http://localhost:8882/wp-content/uploads/2026/06/sales-strategy-consulting-hero.png" alt="Professional business team discussing sales strategy with data visualisations" class="wp-image-27" style="border-radius:12px"/>
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
