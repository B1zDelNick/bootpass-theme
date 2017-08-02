<?php
/*
# =================================================
# footer.php
#
# The template for loading the footer.
# =================================================
*/

$the_theme = wp_get_theme();
$container = get_theme_mod( 'bootpass_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<section id="footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

							<a href="<?php  echo esc_url( __( 'http://wordpress.org/','bootpass' ) ); ?>"><?php printf(
							/* translators:*/
							esc_html__( 'Proudly powered by %s', 'bootpass' ),'WordPress' ); ?></a>
								<span class="sep"> | </span>
					
							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Theme: %1$s by %2$s.', 'bootpass' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://bootpass.com', 'bootpass')).'">bootpass.com</a>' ); ?>
				
							(<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Version: %1$s', 'bootpass' ), $the_theme->get( 'Version' ) ); ?>)
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</section><!-- wrapper end -->

<?php wp_footer(); ?>

</body>

</html>

