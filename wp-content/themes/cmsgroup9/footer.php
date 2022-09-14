</div><!-- container -->
	<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package cmsgroup9
	 */

	?>
		
		<footer id="colophon" class="site-footer">
			
			<div class="footer-widgets clearfix">
				
				<?php if (is_active_sidebar('footer1')) : ?>
					
					<div class="footer-widget-area">
						<?php dynamic_sidebar('footer1'); ?>
					</div>

				<?php endif; ?>
				
				<?php if (is_active_sidebar('footer2')) : ?>
					
					<div class="footer-widget-area">
						<?php dynamic_sidebar('footer2'); ?>
					</div>

				<?php endif; ?>
				
				<?php if (is_active_sidebar('footer3')) : ?>
					
					<div class="footer-widget-area">
						<?php dynamic_sidebar('footer3'); ?>
					</div>

				<?php endif; ?>

				<?php if (is_active_sidebar('footer4')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer4'); ?>
				</div>

				<?php endif; ?>
				
			</div><!-- /footer-widgets -->
			
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cmsgroup9' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Theme by %s', 'cmsgroup9' ), 'Baizonn' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
