<?php
/**
 * Sales Compass theme bootstrap.
 *
 * @package SalesCompass
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SALESCOMPASS_VERSION', '0.1.0' );

/**
 * Theme setup.
 *
 * Block themes get most supports automatically; declared here for clarity.
 * Font Awesome enqueue and pattern category registration are added in SCW-19.
 */
function salescompass_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'salescompass_setup' );

/**
 * Enqueue theme assets — Font Awesome 6.4 CDN on front-end and block editor.
 * Performance subsetting/self-hosting deferred to SCW-61 (QA/perf pass).
 */
function salescompass_enqueue_assets() {
	wp_enqueue_script(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js',
		array(),
		'6.4.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'salescompass_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'salescompass_enqueue_assets' );

/**
 * Register block pattern categories used by E3 patterns.
 */
function salescompass_register_pattern_categories() {
	register_block_pattern_category(
		'salescompass/sections',
		array( 'label' => __( 'Sales Compass Sections', 'sales-compass' ) )
	);
}
add_action( 'init', 'salescompass_register_pattern_categories' );
