<?php $img = wp_get_attachment_image_url( absint( $atts['photo'] ), 'tevent-h500' ); ?>
<div class="u-BoxShadow100 text-center">
	<div class="Blurb u-InlineBlock">
		<?php if ( $img ) : ?>
			<a href="#Member_<?php echo $id; ?>" class="open-popup-link hover-img">
				<figure>
					 <img class="img-responsive" src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $atts['title'] ); ?>">
					 <span class="bi bi-plus-gap"></span>
				</figure>
			</a>
		<?php endif; ?>
		<h4 class="u-MarginTop25 u-MarginBottom0"><?php echo esc_html( $atts['name'] ); ?></h4>
		<p class="text-gray"><?php echo esc_html( $atts['title'] ); ?></p>
		
		<?php tevet_member_social_media( $atts ); ?>
		
		<div id="Member_<?php echo $id; ?>" class="white-popup mfp-hide">
			<div class="row">
				<div class="col-md-5">
					<img class="img-responsive" src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $atts['title'] ); ?>">
					
					<?php tevet_member_social_media( $atts, true ); ?>
				</div>
				<div class="col-md-7">
					<h3 class="u-MarginTop0 u-MarginBottom0"><?php echo esc_html( $atts['name'] ); ?></h3>
					<p class="text-gray"><?php echo esc_html( $atts['title'] ); ?></p>
					<div>
						<?php echo wp_kses_post( wpautop( $content ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>