<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ferraz_lab05
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ferraz_lab05' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ferraz_lab05' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ferraz_lab05' ), 'ferraz_lab05', '<a href="http://ferrazrx.github.io">Rafael Ferraz</a>' );
				?>
		</div>
		<div class="social-media">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_class'        => 'social-buttons',
			) );
			?>
		</div><!-- .social-media -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
