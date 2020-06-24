<div class="u-BoxShadow100">
	<div class="Blurb">
		<?php if ( $image ) : ?>
			<img class="img-responsive" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $atts['title'] ); ?>">
		<?php endif; ?>
		
		<div class="u-Padding30">
			<h4 class="text-uppercase u-MarginTop10 u-MarginBottom20 u-Weight700"><?php echo esc_html( $atts['title'] ); ?></h4>
			<?php
			if ( $content ) :
				$items = Tevent_Util::parse_group_atts( $content );
				foreach ( $items as $item ) :
					if ( ! isset( $item['title'] ) ) {
						continue;
					}
					$value = ( isset( $item['value'] ) ? $item['value'] : '' );

					printf( '<p><strong>%s</strong> %s</p>',
						esc_html( $item['title'] ),
						$value
						);
				endforeach;
			endif; ?>
		</div>
	</div>
</div>
