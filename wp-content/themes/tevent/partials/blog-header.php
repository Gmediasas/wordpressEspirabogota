<?php
$image        = Tevent::get_option( 'blog_header_image' );
$image        = wp_get_attachment_image_url( $image, 'tevent-s1600' );
$overlay      = Tevent::get_option( 'blog_title_overlay' );
$overlay      = ( empty( $overlay ) ? '0' : $overlay );
$header_color = Tevent::get_option( 'blog_title_color' );
$header_color = ( 'white' === $header_color ? 'text-white' : '' );
$header_title = Tevent::get_option( 'blog_header_title' );
$header_shadow = Tevent::get_option( 'blog_header_shadow' );

$shadow_class = 'ImageBackground ImageBackground--overlay v-align-parent u-height350';
switch ( $header_shadow ) {
	case '40':
		$shadow_class .= ' u-BoxShadow40';
		break;
	case '100':
		$shadow_class = ' u-BoxShadow100';
		break;
} ?>
<section class="<?php echo esc_attr( $shadow_class ); ?>" data-overlay="<?php echo esc_attr( absint( $overlay ) ); ?>">
	<div class="ImageBackground__holder">
		<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="">
		<?php endif; ?>
	</div>
	<div class="v-align-child">
		<div class="container ">
			<div class="row ">
				<div class="col-md-12 text-center <?php echo esc_attr( $header_color ); ?>">
					<?php if ( is_archive() ) : ?>
						<h1 class="text-uppercase u-Margin0 u-Weight700"><?php the_archive_title(); ?></h1>
					<?php elseif ( is_search() ) : ?>
						<h1 class="text-uppercase u-Margin0 u-Weight700"><?php printf( esc_html__( 'Search Results for: %s', 'tevent' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					<?php elseif ( $header_title ) : ?>
						<h1 class="text-uppercase u-Margin0 u-Weight700"><?php echo esc_html( $header_title ) ?></h1>
					<?php endif; ?>

					<?php tevent_breadcrumb(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
