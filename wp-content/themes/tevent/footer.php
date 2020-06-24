<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tevent
 */

$footer_logo     = Tevent::get_option( 'footer_logo' );
$footer_logo_url = wp_get_attachment_image_url( $footer_logo, 'full' );
?>
	</div><!-- #content -->

	<?php if ( $footer_logo_url || Tevent::get_option( 'copyright_text' ) ) : ?>
		<footer id="colophon" class="site-footer bg-darker u-PaddingTop100 u-sm-PaddingTop30 u-PaddingBottom100 u-sm-PaddingBottom30" role="contentinfo">
			<div class="container text-center text-sm">
				<?php
				if ( $footer_logo_url ) {
					printf( '<img class="u-MarginBottom50 u-sm-MarginBottom30" src="%s" alt="%s">',
						esc_url( $footer_logo_url ),
						esc_attr( get_bloginfo( 'description' ) )
						);
				}
				?>

				<?php tevent_social_media( 'footer' ); ?>

				<p class="u-MarginBottom5 u-MarginTop20"><?php echo wp_kses_data( Tevent::get_option( 'copyright_text' ) ); ?></p>
			</div>
		</footer><!-- #colophon -->
	<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
