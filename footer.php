<?php
/**
 * The template for the footer.
 *
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-info">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div><!-- #site-info -->
		<div id="site-generator">
			<?php do_action( 'enduring_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'enduring' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'enduring' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'enduring' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<span id="design-link">
				<?php printf( __( '%1$s by %2$s.', 'enduring' ), '<a href="'.esc_url('http://tempvault.com/').'" rel="designer">Enduring</a>', '<a href="'.esc_url('http://bmcculley.github.io/').'" rel="designer">B McCulley</a>' ); ?>
			</span>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>