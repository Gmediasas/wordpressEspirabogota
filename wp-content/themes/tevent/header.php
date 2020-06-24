<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tevent
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'tevent' ); ?></a>

	<header id="header" class="site-header Sticky" role="banner">
		<!-- Start Navigation -->
		<nav class="<?php tevent_navbar_class(); ?>">
			<div class="container">

				<?php if ( tevent_has_sidenav() ) : ?>
					<!-- Start Attribute Navigation -->
					<div class="attr-nav">
						<ul>
							<li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
						</ul>
					</div>
					<!-- End Attribute Navigation -->
				<?php endif; ?>

				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#TeventPrimaryNav">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php tevent_header_logo(); ?></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div id="TeventPrimaryNav" class="collapse navbar-collapse">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'nav navbar-nav navbar-right',
						'fallback_cb'    => 'Tevent_Nav_Walker::fallback',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" data-in="" data-out="">%3$s</ul>',
						'walker'         => new Tevent_Nav_Walker
					) );
				?>
				</div><!-- /.navbar-collapse -->

			</div>

			<?php if ( tevent_has_sidenav() ) : ?>
				<!-- Start Side Menu -->
				<div class="side">
					<a href="#" class="close-side"><i class="fa fa-times"></i></a>

					<?php
					if ( is_active_sidebar( 'sidenav' ) ) :
						dynamic_sidebar( 'sidenav' );
					endif;
					?>

					<?php
					if ( tevent_has_sidenav_social() ) :
						tevent_social_media();
					endif;
					?>

				</div>
				<!-- End Side Menu -->
			<?php endif; ?>
		</nav>
		<!-- End Navigation -->
		<div class="clearfix"></div>
	</header>

	<div id="content" class="site-content">
