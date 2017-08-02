<?php
/*
# =================================================
# customizer.php
#
# Bootpass enqueue scripts.
# =================================================
*/

if ( ! function_exists( 'bootpass_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function bootpass_scripts() {

	    // Get the theme data.
		$the_theme = wp_get_theme();

        // Google Fonts Loading
        wp_enqueue_style( 'bootpass-fonts', bootpass_fonts_url() );

        wp_enqueue_style(
            'bootpass-styles',
            get_stylesheet_directory_uri() . '/css/style.min.css',
            array(),
            $the_theme->get( 'Version' ) );

        wp_enqueue_script( 'jquery' );

		wp_enqueue_script(
		    'bootpass-scripts',
            get_template_directory_uri() . '/js/scripts.min.js',
            array(),
            $the_theme->get( 'Version' ),
            true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'bootpass_scripts' ).

add_action( 'wp_enqueue_scripts', 'bootpass_scripts' );
