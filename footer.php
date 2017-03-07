<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package freeshop
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'freeshop_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
						<a href="<?php echo esc_url( __( 'http://wordpress.org/','freeshop' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'freeshop' ),'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( // WPCS: XSS ok.
							esc_html__( 'Theme: %1$s by %2$s.', 'freeshop' ), $the_theme->get( 'Name' ),
						'<a href="https://radixmo.com/">radixmo</a>' ); ?>
						(<?php printf( // WPCS: XSS ok.
							esc_html__( 'Version: %1$s', 'freeshop' ), $the_theme->get( 'Version' ) ); ?>)
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
