<?php
$post_id = get_queried_object_id();
$color = get_post_meta( $post_id, 'tevent_page_title_color', true );
$color_class = ( 'white' === $color ? 'text-white' : '' );
$opacity = get_post_meta( $post_id, 'tevent_page_title_overlay', true );
$opacity = ( empty( $opacity ) ? '0' : $opacity );
$shadow = get_post_meta( $post_id, 'tevent_page_title_shadow', true );

$shadow_class = 'ImageBackground ImageBackground--overlay v-align-parent u-height350';
switch ( $shadow ) {
	case '40':
		$shadow_class .= ' u-BoxShadow40';
		break;
	case '100':
		$shadow_class = ' u-BoxShadow100';
		break;
} ?>
<section class="<?php echo esc_attr( $shadow_class ); ?>" data-overlay="<?php echo esc_attr( absint( $opacity ) ); ?>">
	<div class="ImageBackground__holder">
		<?php
		if ( has_post_thumbnail( $post_id ) ) {
			the_post_thumbnail( $post_id, 'tevent-s1600' );
		}
		?>
	</div>
	<div class="v-align-child">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center <?php echo esc_attr( $color_class ); ?>">
					<h1 class="text-uppercase u-Margin0 u-Weight700"><?php single_post_title(); ?></h1>
					<?php tevent_breadcrumb(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
