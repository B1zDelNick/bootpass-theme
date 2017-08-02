<?php
/*
# =================================================
# theme-settings.php
#
# Check and setup theme's default settings.
# =================================================
*/

function setup_theme_default_settings() {

	// check if settings are set, if not set defaults.
	// Caution: DO NOT check existence using === always check with == .
	// Latest blog posts style.
	$bootpass_posts_index_style = get_theme_mod( 'bootpass_posts_index_style' );
	if ( '' == $bootpass_posts_index_style ) {
		set_theme_mod( 'bootpass_posts_index_style', 'default' );
	}

	// Sidebar position.
	$bootpass_sidebar_position = get_theme_mod( 'bootpass_sidebar_position' );
	if ( '' == $bootpass_sidebar_position ) {
		set_theme_mod( 'bootpass_sidebar_position', 'right' );
	}

	// Container width.
	$bootpass_container_type = get_theme_mod( 'bootpass_container_type' );
	if ( '' == $bootpass_container_type ) {
		set_theme_mod( 'bootpass_container_type', 'container' );
	}
}
