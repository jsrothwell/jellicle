<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Jellicle
 */
?>

	</div><!-- #content -->
<hr class="col-xs-12" />
	<footer id="colophon" class="site-footer col-xs-10 col-xs-offset-1" role="contentinfo">
        <div class="social"><a href=get_theme_mod( 'twitter' );><?php echo get_theme_mod( 'twitter' ); ?></div></a>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'jellicle' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'jellicle' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'jellicle' ), 'Jellicle', '<a href="http://jamiesonrothwell.com" rel="designer">Jamieson Rothwell</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
