<div class="Sc-blurb Sc-blurb--horizontal media u-OverflowVisible">
	<?php if ( $atts['icon'] ) : ?>
		<div class="media-left">
			<div class="Thumb">
				<i class="<?php echo esc_attr( $atts['icon'] ); ?> Icon--32px" aria-hidden="true"></i>
			</div>
		</div>
	<?php endif; ?>
	
	<div class="media-body">
		<h4 class="u-MarginTop0 u-MarginBottom5 u-Weight700"><?php echo esc_html( $atts['title'] ); ?></h4>
		<div>
			<?php echo wp_kses_post( wpautop( $content ) ); ?>
		</div>
	</div>
</div>
