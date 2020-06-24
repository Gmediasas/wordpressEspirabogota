<div class="Sc-heading row">
	<div class="u-MarginBottom100 u-xs-MarginBottom30 u-sm-MarginBottom30 <?php echo $align; ?>">
		<?php
			printf( '<%1$s class="u-MarginTop5 u-MarginBottom10 u-Weight700 Sc-heading__main">%2$s</%1$s>',
				$tag,
				esc_html( $atts['main'] )
			);
		?>
		<div class="Split Split--height2"></div>
		<?php if ( ! empty( $content ) ) : ?>
			<p class="u-PaddingTop30 Sc-heading__sub"><?php echo wp_kses_post( $content ); ?></p>
		<?php endif; ?>
	</div>
</div>
