<?php if ( $content ) : ?>
<div class="js-Portfolio portfolio-grid portfolio-gallery grid-3 gutter">
	<?php
		$items = Tevent_Util::parse_group_atts( $content );
		foreach ( $items as $item ) :

			if ( ! isset( $item['image'] ) ) {
				continue;
			}

			$thumbnail = wp_get_attachment_image_url( $item['image'], 'tevent-s500' );
			$full      = wp_get_attachment_image_url( $item['image'], 'full' );
			$title     = isset( $item['title'] ) ? $item['title'] : '';
			?>

			<div class="portfolio-item">
				<a href="<?php echo esc_url( $full ); ?>" class="portfolio-image popup-gallery" title="<?php echo esc_attr( $title ); ?>">
					<img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php echo esc_attr( $title ); ?>"/>

					<?php if ( $title ) : ?>
					<div class="portfolio-hover-title">
						<div class="portfolio-content">
							<h4><?php echo esc_html( $title ) ;?></h4>
						</div>
					</div>
					<?php endif; ?>
				</a>
			</div>

	<?php endforeach; ?>
</div>
<?php endif; ?>
