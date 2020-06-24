<?php
$media = get_media_embedded_in_content( apply_filters( 'the_content', get_the_content() ) );

if ( isset( $media[0] ) ) : ?>

<div class="b-thumb u-MarginBottom50">
	<div class="embed-responsive embed-responsive-16by9">
		<?php echo $media[0]; // WPCS: XSS OK. ?>
	</div>
</div>

<?php else:
	get_template_part( 'partials/format', '' );
endif;
