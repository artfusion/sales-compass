<?php
/**
 * M3 forms seed script — creates the Inquiry Form and embeds it on Homepage + Contact.
 *
 * Run: studio wp eval-file wp-content/themes/sales-compass/setup/setup-forms.php \
 *        --path="$HOME/Studio/sales-compass"
 *
 * Idempotent: safe to re-run. Skips form creation if "Inquiry Form" already exists.
 * Re-runs the page embed step every time (str_replace is idempotent once the block is present).
 *
 * Prerequisites: WPForms Lite must be installed and active.
 */

// =============================================================================
// SCW-52 — Build the Inquiry Form
// =============================================================================

$existing = get_posts( [
	'post_type'   => 'wpforms',
	'title'       => 'Inquiry Form',
	'post_status' => 'publish',
	'numberposts' => 1,
] );

if ( $existing ) {
	$form_id = $existing[0]->ID;
	echo "Form 'Inquiry Form' already exists (ID {$form_id}) — skipping creation.\n";
} else {
	$form_data = [
		'id'     => '',
		'fields' => [
			'0' => [
				'id'       => '0',
				'type'     => 'name',
				'label'    => 'Full Name',
				'required' => '1',
				'format'   => 'first-last',
				'size'     => 'medium',
			],
			'1' => [
				'id'          => '1',
				'type'        => 'email',
				'label'       => 'Email Address',
				'required'    => '1',
				'size'        => 'medium',
				'sublabel_hide' => '1',
			],
			'2' => [
				'id'       => '2',
				'type'     => 'text',
				'label'    => 'Company',
				'required' => '',
				'size'     => 'medium',
			],
			'3' => [
				'id'       => '3',
				'type'     => 'select',
				'label'    => 'Interested In',
				'required' => '',
				'size'     => 'medium',
				'choices'  => [
					[ 'label' => 'Sales Infrastructure (Tier 1)', 'value' => '', 'image' => '' ],
					[ 'label' => 'Full-Cycle Engine (Tier 2)',    'value' => '', 'image' => '' ],
					[ 'label' => 'Strategy Architect (Tier 3)',   'value' => '', 'image' => '' ],
					[ 'label' => 'AI Automation',                 'value' => '', 'image' => '' ],
					[ 'label' => 'Sales Coaching',                'value' => '', 'image' => '' ],
					[ 'label' => 'General Inquiry',               'value' => '', 'image' => '' ],
				],
			],
			'4' => [
				'id'       => '4',
				'type'     => 'textarea',
				'label'    => 'Message',
				'required' => '1',
				'size'     => 'medium',
			],
			'5' => [
				'id'       => '5',
				'type'     => 'checkbox',
				'label'    => 'Consent',
				'required' => '',
				'choices'  => [
					[ 'label' => 'I agree to the Privacy Policy and consent to being contacted.', 'value' => '', 'image' => '' ],
				],
			],
		],
		'settings' => [
			'form_title'             => 'Inquiry Form',
			'form_desc'              => '',
			'submit_text'            => 'Send Message',
			'submit_text_processing' => 'Sending…',
			'notification_enable'    => '1',
			'notifications'          => [
				'1' => [
					'notification_name' => 'Default Notification',
					'email'             => 'info@salescompass.net',
					'subject'           => 'New Inquiry: {field_id="0"}',
					'sender_name'       => 'Sales Compass Website',
					'sender_address'    => 'info@salescompass.net',
					'replyto'           => '{field_id="1"}',
					'message'           => '{all_fields}',
				],
			],
			'confirmations'          => [
				'1' => [
					'name'           => 'Default Confirmation',
					'type'           => 'message',
					'message'        => "<p>Thank you for reaching out! We'll be in touch within one business day.</p>",
					'message_scroll' => '1',
				],
			],
		],
		'meta' => [ 'template' => 'blank' ],
	];

	$encoder  = function_exists( 'wpforms_encode' ) ? 'wpforms_encode' : 'json_encode';
	$form_id  = wp_insert_post( [
		'post_title'   => 'Inquiry Form',
		'post_type'    => 'wpforms',
		'post_status'  => 'publish',
		'post_content' => $encoder( $form_data ),
	], true );

	if ( is_wp_error( $form_id ) ) {
		echo 'ERROR creating form: ' . $form_id->get_error_message() . "\n";
		exit( 1 );
	}

	// Store the form's own ID inside its JSON (WPForms convention).
	$form_data['id'] = (string) $form_id;
	wp_update_post( [ 'ID' => $form_id, 'post_content' => $encoder( $form_data ) ] );

	echo "Form created: ID {$form_id}\n";
}

// =============================================================================
// SCW-53 — Embed the form block on Homepage (49) + Contact (54)
// =============================================================================

// Note: wp:wpforms/form-selector block does not render in FSE block-theme context.
	// wp:shortcode block processes through do_shortcode() on the frontend and works reliably.
	$form_block  = '<!-- wp:shortcode -->[wpforms id="' . $form_id . '"]<!-- /wp:shortcode -->';
$placeholder = '<!-- wp:paragraph --><p><em>Inquiry form will be embedded here (SCW-53).</em></p><!-- /wp:paragraph -->';

foreach ( [ 49 => 'home', 54 => 'contact' ] as $page_id => $slug ) {
	$content = get_post_field( 'post_content', $page_id );

	if ( strpos( $content, $form_block ) !== false ) {
		echo "Page '{$slug}' (ID {$page_id}): form block already embedded — skipping.\n";
		continue;
	}

	if ( strpos( $content, $placeholder ) === false ) {
		echo "WARNING: placeholder not found in page '{$slug}' (ID {$page_id}) — manual review needed.\n";
		continue;
	}

	$new_content = str_replace( $placeholder, $form_block, $content );
	$result      = wp_update_post( [ 'ID' => $page_id, 'post_content' => $new_content ], true );

	if ( is_wp_error( $result ) ) {
		echo "ERROR updating page '{$slug}': " . $result->get_error_message() . "\n";
	} else {
		echo "Page '{$slug}' (ID {$page_id}): form block embedded.\n";
	}
}

echo "Done.\n";
