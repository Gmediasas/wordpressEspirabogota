<a class="btn btn-primary u-MarginBottom10 u-LetterSpacing2 <?php echo esc_attr( $atts['css_class'] ); ?>" <?php if ( $atts['css_id'] ) echo 'id="' . esc_attr( $atts['css_id'] ) . '"'; ?> <?php echo rtrim( $param_string ); ?>>
	<?php echo esc_html( $atts['text'] ); ?>
</a>
