<?php
if ( empty( $image ) ) {
	return;
} ?>

<div class="Sc-video position-relative">
	<img class="img-responsive" src="<?php echo esc_url( $image ); ?>" alt="">

	<?php if ( ! empty( $atts['url'] ) ) : ?>
		<a href="#<?php echo $id; ?>" class="open-popup-link btn btn-play btn-play--hoverPrimary u-Rounded u-Center"><i class="btn__iconCenter fa fa-play"></i></a>

		<div id="<?php echo $id; ?>" class="mfp-hide mfp-iframe-scaler">
			<?php echo wp_oembed_get( esc_url( $atts['url'] ) );  ?>
		</div>
	<?php endif; ?>
</div>
