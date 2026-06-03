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
