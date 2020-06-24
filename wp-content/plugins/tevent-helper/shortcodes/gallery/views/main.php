<?php if ( $content ) : ?>
<div class="Clients text-center">
	<?php
		$items = Tevent_Util::parse_group_atts( $content );
		foreach ( $items as $item ) :

			if ( ! isset( $item['image'] ) ) {
				continue;
			}

			$thumbnail = wp_get_attachment_image_url( $item['image'], 'tevent-s500' );
			$title     = isset( $item['title'] ) ? $item['title'] : '';

			if ( 'boxed' === $atts['style'] ) :
			?>
				<span class="client-border">
					<img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php echo esc_attr( $title ); ?>">
				</span>
			<?php else : ?>
				<img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php echo esc_attr( $title ); ?>">
			<?php endif; ?>

	<?php endforeach; ?>
</div>
<?php endif; ?>
