<?php
/**
 * Title: Program Card Grid
 * Slug: salescompass/program-card-grid
 * Categories: salescompass/sections
 * Description: Three-column program cards with large icon, description, feature checklist, and full-width CTA button. Used on Sales Coaching.
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"align":"full","style":{"color":{"background":"var(--wp--preset--color--platinum-white)"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--xl)","bottom":"var(--wp--preset--spacing--xl)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--platinum-white);padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large","style":{"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--sm)"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--sm)">Coaching Programs</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var(--wp--preset--color--gray-600)"},"spacing":{"margin":{"bottom":"var(--wp--preset--spacing--xl)"}}}} -->
	<p class="has-text-align-center" style="color:var(--wp--preset--color--gray-600);margin-bottom:var(--wp--preset--spacing--xl)">Choose the programme that best fits your goals and team structure.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"top":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)"}}}} -->
	<div class="wp-block-columns is-layout-flex">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"var(--wp--preset--color--gray-200)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}},"color":{"background":"#ffffff"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:8px;border:1px solid var(--wp--preset--color--gray-200);padding:var(--wp--preset--spacing--lg) var(--wp--preset--spacing--md)">
				<!-- wp:html -->
				<div style="width:64px;height:64px;background:var(--wp--preset--color--blue-100);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:var(--wp--preset--spacing--md)"><i class="fa-solid fa-user" style="color:var(--wp--preset--color--ocean-blue);font-size:1.5rem"></i></div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Individual Coaching</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gray-600)"}}} -->
				<p style="color:var(--wp--preset--color--gray-600)">One-on-one sessions tailored to your specific challenges, goals, and selling style.</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<ul style="list-style:none;padding:0;margin:var(--wp--preset--spacing--sm) 0 var(--wp--preset--spacing--lg);display:flex;flex-direction:column;gap:0.5rem">
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Personalised skills assessment</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Weekly 1-on-1 sessions</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Real-deal review and feedback</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Progress tracking dashboard</li>
				</ul>
				<!-- /wp:html -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/contact/">Schedule a Session</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"var(--wp--preset--color--gray-200)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}},"color":{"background":"#ffffff"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:8px;border:1px solid var(--wp--preset--color--gray-200);padding:var(--wp--preset--spacing--lg) var(--wp--preset--spacing--md)">
				<!-- wp:html -->
				<div style="width:64px;height:64px;background:var(--wp--preset--color--blue-100);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:var(--wp--preset--spacing--md)"><i class="fa-solid fa-users" style="color:var(--wp--preset--color--ocean-blue);font-size:1.5rem"></i></div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Team Coaching</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gray-600)"}}} -->
				<p style="color:var(--wp--preset--color--gray-600)">Elevate your entire sales team with cohort-based workshops, shared frameworks, and group accountability.</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<ul style="list-style:none;padding:0;margin:var(--wp--preset--spacing--sm) 0 var(--wp--preset--spacing--lg);display:flex;flex-direction:column;gap:0.5rem">
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Team skills gap analysis</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Group workshops and role-plays</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Shared playbooks and scripts</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Manager coaching integration</li>
				</ul>
				<!-- /wp:html -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/contact/">Schedule a Session</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"var(--wp--preset--color--gray-200)","radius":"8px"},"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--md)","right":"var(--wp--preset--spacing--md)"}},"color":{"background":"#ffffff"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:8px;border:1px solid var(--wp--preset--color--gray-200);padding:var(--wp--preset--spacing--lg) var(--wp--preset--spacing--md)">
				<!-- wp:html -->
				<div style="width:64px;height:64px;background:var(--wp--preset--color--blue-100);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:var(--wp--preset--spacing--md)"><i class="fa-solid fa-building" style="color:var(--wp--preset--color--ocean-blue);font-size:1.5rem"></i></div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size">Executive Coaching</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var(--wp--preset--color--gray-600)"}}} -->
				<p style="color:var(--wp--preset--color--gray-600)">Strategic coaching for sales leaders — revenue forecasting, team building, and board-level communication.</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<ul style="list-style:none;padding:0;margin:var(--wp--preset--spacing--sm) 0 var(--wp--preset--spacing--lg);display:flex;flex-direction:column;gap:0.5rem">
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Revenue strategy workshops</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Leadership presence coaching</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Hiring and onboarding frameworks</li>
					<li style="display:flex;align-items:center;gap:0.5rem;color:var(--wp--preset--color--gray-600)"><i class="fa-solid fa-check" style="color:var(--wp--preset--color--ocean-blue);flex-shrink:0"></i>Board-ready sales reporting</li>
				</ul>
				<!-- /wp:html -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/contact/">Schedule a Session</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
