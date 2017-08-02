<?php
/*
# =================================================
# empty.php
#
# Template Name: Empty Page Template.
# =================================================
*/

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;

get_footer();
