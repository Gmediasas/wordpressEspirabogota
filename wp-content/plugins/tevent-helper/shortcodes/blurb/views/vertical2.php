<?php
$param_string = '';
$image        = wp_get_attachment_image_url( $atts['image'], 'full' );
$params       = Tevent_Util::build_link( $atts['btn_link'] );

foreach ( $params as $key => $param ) {
	if ( empty( $param ) ) {
		continue;
	}

	if ( 'url' === $key ) {
		$param_string .= 'href="' . esc_url( $param ) . '" ';
	} else {
		$param_string .= $key . '="' . esc_attr( $param ) . '" ';
	}
} ?>
<div class="Sc-blurb Sc-blurb--vertical2 u-BoxShadow100">
	<div class="Blurb Blurb--wrapper">
		<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $atts['title'] ); ?>" height="100" width="100">
		<?php endif; ?>

		<h3 class="Blurb__hoverText u-MarginTop55"><?php echo esc_html( $atts['title'] ); ?></h3>
		<div>
			<?php echo wp_kses_post( wpautop( $content ) ); ?>
		</div>

		<?php if ( $atts['btn_text'] ) : ?>
			<p class="u-MarginTop35">
				<a class="btn-go" <?php echo rtrim( $param_string ); ?>><?php echo esc_html( $atts['btn_text'] ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</p>
		<?php endif; ?>
	</div>
</div>
