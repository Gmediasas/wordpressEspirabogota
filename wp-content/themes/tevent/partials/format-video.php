<?php
$media = get_media_embedded_in_content( apply_filters( 'the_content', get_the_content() ) );

if ( isset( $media[0] ) ) : ?>

<div class="b-thumb u-MarginBottom30">
	<?php if ( has_post_thumbnail() ) : ?>

	<div class="position-relative">
		<?php the_post_thumbnail( 'tevent-s670' ); ?>
		
		<a href="#VideoPopup-<?php the_ID(); ?>" class="open-popup-link btn btn-play btn-play--hoverPrimary u-Rounded u-Center" type="submit"><i class="btn__iconCenter fa fa-play"></i></a>

		<div id="VideoPopup-<?php the_ID(); ?>" class="mfp-hide mfp-iframe-scaler">
			<?php echo $media[0]; // WPCS: XSS OK. ?>
		</div>
	</div>

	<?php else : ?>

	<div class="embed-responsive embed-responsive-16by9">
		<?php echo $media[0]; // WPCS: XSS OK. ?>
	</div>
	<?php endif; ?>
</div>

<?php else:
	get_template_part( 'partials/format', '' );
endif;
