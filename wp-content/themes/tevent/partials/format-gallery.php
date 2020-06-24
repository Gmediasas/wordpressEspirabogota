<?php
$gallery = get_post_gallery( get_the_ID(), false );
$ids     = isset( $gallery['ids'] ) ? $gallery['ids'] : '';
$imgs    = array_filter( explode( ',', $ids ) );

if ( ! empty( $imgs ) ) : ?>

	<div class="b-thumb u-MarginBottom30">
		<div class="js-OwlCarousel owl-carousel owl-theme OwlNav OwlNav--triangle OwlNav--triangle--white OwlNav--edge OwlNav--inside OwlNav--triangle--lg">

		<?php foreach ( $imgs as $img ): ?>
			<div class="item">
				<?php echo wp_get_attachment_image( $img, 'tevent-s670', false, array( 'class' => 'img-responsive' ) ); ?>
			</div>
		<?php endforeach; ?>

		</div>
	</div>

<?php else : 
	get_template_part( 'partials/format', '' );
endif;
