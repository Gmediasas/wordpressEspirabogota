<div class="u-BoxShadow100 text-center <?php echo $class; ?>">
	<div class="Blurb Blurb--wrapper">
		<h3 class="Blurb__hoverText u-MarginTop0"><?php echo esc_html( $atts['title'] ); ?></h3>
		<div class="Blurb__hoverText u-FontSize50 u-Weight700">
			 <small class="u-InlineBlock u-VerticalMiddle"><?php echo esc_html( $atts['currency'] ); ?></small><?php echo esc_html( $atts['price'] ); ?>
		</div>
		<small class="Blurb__hoverText text-muted text-uppercase"><?php echo esc_html( $atts['duration'] ); ?></small>
		<?php
		if ( $content ) : ?>
			<p class="u-MarginTop35 u-MarginBottom35 u-LineHeight3">
				<?php echo wp_kses_post( $content ); ?>
			</p>
		<?php endif; ?>

		<?php if ( $class ) : ?>
			<a class="btn btn-default u-Weight400" href="<?php echo esc_url( $atts['button_link'] ); ?>"><?php echo esc_html( $atts['button_text'] ); ?></a>
		<?php else: ?>
			<a class="btn btn-default u-Rounded u-Weight300" href="<?php echo esc_url( $atts['button_link'] ); ?>"><?php echo esc_html( $atts['button_text'] ); ?></a>
		<?php endif; ?>
	</div>
</div>
