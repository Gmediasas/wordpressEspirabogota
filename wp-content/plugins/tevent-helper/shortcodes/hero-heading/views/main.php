<div class="Sc-hero-heading <?php echo $color; ?>">
	<?php if ( ! empty( $atts['main'] ) ) : ?>
		<h1 class="u-FontSize75 u-xs-FontSize40 u-Weight700 u-MarginTop0 u-MarginBottom0"><?php echo esc_html( $atts['main'] ); ?></h1>
	<?php endif; ?>

	<?php if ( ! empty( $atts['sub'] ) ) : ?>
		<h2 class="h3 text-uppercase u-Weight700 u-MarginTop0"><?php echo esc_html( $atts['sub'] ); ?></h2>
	<?php endif; ?>
</div>
