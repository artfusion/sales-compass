<?php
/**
 * Title: Contact Info
 * Slug: salescompass/contact-info
 * Categories: salescompass/sections
 * Description: Contact information column with email, address, and social icon links. Pairs with a WPForms form on the Contact page.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var(--wp--preset--spacing--md)"}}} -->
<div class="wp-block-group">

	<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size">Contact Information</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gray-600)"}}} -->
	<p style="color:var(--wp--preset--color--gray-600)">We'd love to hear from you. Reach out and our team will respond within one business day.</p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<div style="display:flex;flex-direction:column;gap:var(--wp--preset--spacing--md)">

		<div style="display:flex;align-items:flex-start;gap:var(--wp--preset--spacing--md)">
			<div style="width:40px;height:40px;background:var(--wp--preset--color--blue-100);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0">
				<i class="fa-solid fa-envelope" style="color:var(--wp--preset--color--ocean-blue)"></i>
			</div>
			<div>
				<p style="font-weight:600;margin:0 0 4px;color:var(--wp--preset--color--gray-800)">Email Us</p>
				<a href="mailto:info@salescompass.net" style="color:var(--wp--preset--color--ocean-blue)">info@salescompass.net</a>
			</div>
		</div>

		<div style="display:flex;align-items:flex-start;gap:var(--wp--preset--spacing--md)">
			<div style="width:40px;height:40px;background:var(--wp--preset--color--blue-100);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0">
				<i class="fa-solid fa-location-dot" style="color:var(--wp--preset--color--ocean-blue)"></i>
			</div>
			<div>
				<p style="font-weight:600;margin:0 0 4px;color:var(--wp--preset--color--gray-800)">Visit Us</p>
				<p style="color:var(--wp--preset--color--gray-600);margin:0">123 Business Avenue, Suite 200<br>San Francisco, CA 94107</p>
			</div>
		</div>

	</div>
	<!-- /wp:html -->

	<!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var(--wp--preset--spacing--md)","bottom":"var(--wp--preset--spacing--sm)"}}}} -->
	<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--sm)">Connect With Us</h3>
	<!-- /wp:heading -->

	<!-- wp:html -->
	<div style="display:flex;gap:var(--wp--preset--spacing--sm)">
		<a href="https://linkedin.com" aria-label="LinkedIn" style="width:40px;height:40px;background:var(--wp--preset--color--ocean-blue);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none">
			<i class="fa-brands fa-linkedin"></i>
		</a>
		<a href="https://twitter.com" aria-label="Twitter" style="width:40px;height:40px;background:var(--wp--preset--color--ocean-blue);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none">
			<i class="fa-brands fa-twitter"></i>
		</a>
		<a href="https://facebook.com" aria-label="Facebook" style="width:40px;height:40px;background:var(--wp--preset--color--ocean-blue);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none">
			<i class="fa-brands fa-facebook"></i>
		</a>
		<a href="https://instagram.com" aria-label="Instagram" style="width:40px;height:40px;background:var(--wp--preset--color--ocean-blue);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;text-decoration:none">
			<i class="fa-brands fa-instagram"></i>
		</a>
	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
