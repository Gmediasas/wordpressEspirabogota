<div class="Sc-blurb Sc-blurb--vertical">
	<?php if ( $atts['icon'] ) : ?>
		<p>
			<i class="<?php echo esc_attr( $atts['icon'] ); ?> Icon--32px text-primary" aria-hidden="true"></i>
		</p>
	<?php endif; ?>
	<h4><?php echo esc_html( $atts['title'] ); ?></h4>
	<div>
		<?php echo wp_kses_post( wpautop( $content ) ); ?>
	</div>
</div>
