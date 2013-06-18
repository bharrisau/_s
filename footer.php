<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package bharr.is
 */
?>
  </main><!-- #main -->
  <footer id="colophon" class="site-footer" role="contentinfo">
  	<div class="site-info">
  		<?php do_action( 'bharr_is_credits' ); ?>
  		<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'bharr_is' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'bharr_is' ), 'WordPress' ); ?></a>
  		<span class="sep"> | </span>
  		<?php printf( __( 'Theme: %1$s by %2$s.', 'bharr_is' ), 'bharr.is', '<a href="http://bharr.is" rel="designer">Ben Harris</a>' ); ?>
  	</div><!-- .site-info -->
  </footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>