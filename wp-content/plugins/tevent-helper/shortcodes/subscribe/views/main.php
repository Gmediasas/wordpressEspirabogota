<form class="Sc-subscribe text-center js-Subscribe" <?php if ( $atts['url'] ) echo 'action="' . esc_url( $atts['url'] ) . '"'; ?>>
	<h3 class="u-MarginTop0 u-MarginBottom30 u-Weight700"><?php echo esc_html( $atts['title'] ); ?></h3>
	<div class="row">
		<div class="col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="form-group text-left">
				<input id="<?php echo $id; ?>" class="form-control u-MarginBottom10" placeholder="<?php echo esc_attr( $atts['placeholder'] ); ?>" type="email" name="EMAIL">
				<label for="<?php echo $id; ?>"></label>
			</div>
		</div>
		<div class="col-md-2 col-md-offset-0 col-sm-6 col-sm-offset-3">
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block "><?php echo esc_html( $atts['btn_text'] ); ?></button>
			</div>
		</div>
	</div>
</form>
