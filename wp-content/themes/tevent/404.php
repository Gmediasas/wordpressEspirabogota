<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tevent
 */

get_header();

$banner      = Tevent::get_option( '_404_banner' );
$banner      = wp_get_attachment_image_url( $banner, 'full' );
$header      = Tevent::get_option( '_404_header' );
$button_text = Tevent::get_option( '_404_button_text' );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<section class="error-404 not-found u-PaddingTop100 u-PaddingBottom100 u-xs-PaddingTop30 u-xs-PaddingBottom30 row">
				<div class="u-MarginTop50 text-center col-sm-6 col-sm-offset-3 u-MarginTop50 u-xs-MarginTop30 u-xs-MarginBottom30">
					<?php if ( $banner ) : ?>
						<img class="img-responsive u-InlineBlock" src="<?php echo esc_url( $banner ); ?>" alt="<?php echo esc_attr( $header ); ?>">
					<?php endif; ?>
					<?php if ( $header ) : ?>
						<h1 class="u-weight300"><?php echo esc_html( $header ); ?></h1>
					<?php endif; ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php echo esc_html( $button_text ); ?></a>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
