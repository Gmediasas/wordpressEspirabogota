<div class="ImageBlock <?php echo esc_attr( $class ); ?>">
	<div class="ImageBlock__image col-md-6 col-sm-4">
		<div class="ImageBackground ImageBackground--overlay" data-overlay="0">
			<div class="ImageBackground__holder">
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $atts['title'] ); ?>"/>
			<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-7">
				<h1 class="u-MarginTop0 u-MarginBottom0 u-Weight700"><?php echo esc_html( $atts['title'] );?></h1>
				<h3 class="u-MarginTop10 u-Weight400 text-gray"><?php echo esc_html( $atts['subtitle'] );?></h3>
				<div>
					<?php echo wp_kses_post( wpautop( $content ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
