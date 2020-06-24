<?php $img = wp_get_attachment_image_url( absint( $atts['photo'] ), 'tevent-s500' ); ?>
<div class="u-BoxShadow100 u-MarginBottom30">
	<div class="Blurb u-Padding20">
		<div class="row">
			<div class="col-md-5 ">
				<?php if ( $img ) : ?>
					<img class="img-responsive" src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $atts['title'] ); ?>">
				<?php endif; ?>
			</div>
			<div class="col-md-7">
				<h3 class="u-MarginTop25 u-MarginBottom0"><?php echo esc_html( $atts['name'] ); ?></h3>
				<p class="text-gray"><?php echo esc_html( $atts['title'] ); ?></p>
				
				<?php tevet_member_social_media( $atts ); ?>
				
				<div>
					<?php echo wp_kses_post( wpautop( $content ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>