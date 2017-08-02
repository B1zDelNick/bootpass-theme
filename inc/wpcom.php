<?php
/*
# =================================================
# wpcom.php
# =================================================
*/

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function bootpass_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => '',
			'border' => '',
			'text'   => '',
			'link'   => '',
			'url'    => '',
		);
	}
	
	/* Add WP.com print styles */
	add_theme_support( 'print-styles' );
}
add_action( 'after_setup_theme', 'bootpass_wpcom_setup' );

/*
 * WordPress.com-specific styles
 */
function bootpass_wpcom_styles() {
	wp_enqueue_style( 'bootpass-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20160411' );
}
add_action( 'wp_enqueue_scripts', 'bootpass_wpcom_styles' );
