footer

<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
                    <i class="fa fa-wordpress" aria-hidden="true"></i>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
        
        <?php   if ( ! is_active_sidebar( 'footer' ) ) {
    return;
}
?>

    <div id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'footer' ); ?>
    </div><!-- #secondary -->


<?php   if ( ! is_active_sidebar( 'footer' ) ) {
   return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
   <?php dynamic_sidebar( 'footer' ); ?>
</div><!-- #secondary -->

		<?php wp_footer(); ?>

	</body>
</html>
