<?php
add_action( 'tf_create_options', 'tevent_theme_option' );

function tevent_theme_option() {
	$titan = TitanFramework::getInstance( 'tevent' );

	// Typo settings
	$general = $titan->createThemeCustomizerSection( array(
		'name' => esc_html__( 'General', 'tevent' ),
	) );

	$general->createOption( array(
		'name'    => esc_html__( 'Override Theme Color', 'tevent' ),
		'id'      => 'theme_color_override',
		'type'    => 'enable',
		'default' => false,
		'desc'    => esc_html__( 'Enable this option to override theme colors, otherwise primary and secondary color will not work.', 'tevent' ),
	) );

	$general->createOption( array(
		'name'    => esc_html__( 'Primary Color', 'tevent' ),
		'id'      => 'theme_color_primary',
		'type'    => 'color',
		'default' => '#f90048',
		'desc'    => esc_html__( 'Set theme primary color. This color will be used as accent color. To activate this feature make sure to enable Override Theme Color option.', 'tevent' ),
	) );

	$general->createOption( array(
		'name'    => esc_html__( 'Secondary Color', 'tevent' ),
		'id'      => 'theme_color_secondary',
		'type'    => 'color',
		'default' => '#ff8922',
		'desc'    => esc_html__( 'Set theme secondary color. This color will be used as hover and auxiliary color. To activate this feature make sure to enable Override Theme Color option.', 'tevent' ),
	) );

	// Typo settings
	$typo = $titan->createThemeCustomizerSection( array(
		'name' => esc_html__( 'Typograhpy', 'tevent' ),
	) );

	$typo->createOption( array(
		'name'                => esc_html__( 'Body Font', 'tevent' ),
		'id'                  => 'body_font',
		'type'                => 'font',
		'desc'                => esc_html__( 'Set body font settings', 'tevent' ),
		'show_color'          => false,
		'show_font_style'     => false,
		'show_letter_spacing' => false,
		'show_text_transform' => false,
		'show_font_variant'   => false,
		'show_text_shadow'    => false,
		'show_preview'        => false,
		'include_fonts'       => false,
		'show_preview'        => false,
		'default'             => array(
			'font-family' => 'Roboto',
			'font-weight' => '400',
			'line-height' => '1.4em',
			),
		'css' => 'body, p { value }',
	) );

	$typo->createOption( array(
		'name'                => esc_html__( 'Heading Font', 'tevent' ),
		'id'                  => 'heading_font',
		'type'                => 'font',
		'desc'                => esc_html__( 'Set heading font settings', 'tevent' ),
		'show_color'          => false,
		'show_font_size'      => false,
		'show_font_style'     => false,
		'show_letter_spacing' => false,
		'show_line_height'    => false,
		'show_text_transform' => false,
		'show_font_variant'   => false,
		'show_text_shadow'    => false,
		'show_preview'        => false,
		'include_fonts'       => false,
		'show_preview'        => false,
		'default'             => array(
			'font-family' => 'Roboto',
			'font-weight' => '700',
			),
		'css' => 'h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 { value }',
	) );


	// Navbar settings
	$navbar = $titan->createThemeCustomizerSection( array(
		'name' => esc_html__( 'Navbar', 'tevent' ),
	) );
	
	$navbar->createOption( array(
		'name' => esc_html__( 'Main Logo', 'tevent' ),
		'id'   => 'logo',
		'type' => 'upload',
		'size' => 'thumbnail',
		'desc' => esc_html__( 'Upload main logo', 'tevent' ),
	) );

	$navbar->createOption( array(
		'name' => esc_html__( 'Main Retina Logo', 'tevent' ),
		'id'   => 'logo_retina',
		'type' => 'upload',
		'size' => 'thumbnail',
		'desc' => esc_html__( 'Upload main retina logo. Make sure to keep the logo size double than Main Logo', 'tevent' ),
	) );

	$navbar->createOption( array(
		'name' => esc_html__( 'Sticky Logo', 'tevent' ),
		'id'   => 'logo_sticky',
		'type' => 'upload',
		'size' => 'thumbnail',
		'desc' => esc_html__( 'Upload sticky logo', 'tevent' ),
	) );

	$navbar->createOption( array(
		'name' => esc_html__( 'Sticky Retina Logo', 'tevent' ),
		'id'   => 'logo_sticky_retina',
		'type' => 'upload',
		'size' => 'thumbnail',
		'desc' => esc_html__( 'Upload sticky retina logo. Make sure to keep the logo size double than Sticky Logo', 'tevent' ),
	) );

	$navbar->createOption( array(
		'name'    => esc_html__( 'Enable Side Nav', 'tevent' ),
		'id'      => 'is_sidenav_enabled',
		'type'    => 'enable',
		'default' => false,
		'desc'    => esc_html__( 'Enable or disable side nav', 'tevent' ),
	) );

	$navbar->createOption( array(
		'name'    => esc_html__( 'Enable Side Nav Social Icons', 'tevent' ),
		'id'      => 'is_sidenav_social_enabled',
		'type'    => 'enable',
		'default' => false,
		'desc'    => esc_html__( 'Enable or disable side nav social icons', 'tevent' ),
	) );

	// Blog settings
	$blog = $titan->createThemeCustomizerSection( array(
		'name' => esc_html__( 'Blog', 'tevent' ),
	) );

	$blog->createOption( array(
		'name'    => esc_html__( 'Blog Layout', 'tevent' ),
		'desc'    => esc_html__( 'Select 1 of 3 blog layouts.', 'tevent' ),
		'id'      => 'blog_layout',
		'type'    => 'radio-image',
		'options' => array(
			'left'   => TEVENT_ASSETS_URI . 'imgs/sidebar-left.png',
			'center' => TEVENT_ASSETS_URI . 'imgs/center-aligned.png',
			'right'  => TEVENT_ASSETS_URI . 'imgs/sidebar-right.png',
			),
		'default' => 'left',
	) );

	$blog->createOption( array(
		'name'    => esc_html__( 'Blog Header Title', 'tevent' ),
		'id'      => 'blog_header_title',
		'type'    => 'text',
		'default' => esc_attr__( 'Blog', 'tevent' ),
		'desc'    => esc_html__( 'Add blog header title, will be used on only blog list page', 'tevent' ),
	) );

	$blog->createOption( array(
		'name' => esc_html__( 'Blog Header', 'tevent' ),
		'id'   => 'blog_header_image',
		'type' => 'upload',
		'size' => 'thumbnail',
		'desc' => esc_html__( 'Upload blog header image. This image will be used in blog list, archive and serach page header', 'tevent' ),
	) );

	$blog->createOption( array(
		'name'    => esc_html__( 'Blog Navbar Content Color', 'tevent' ),
		'id'      => 'blog_navbar_color',
		'type'    => 'select',
		'default' => 'black',
		'options' => array(
			'black' => esc_html__( 'Black Text Content', 'tevent' ),
			'white' => esc_html__( 'White Text Content', 'tevent' ),
			),
		'desc'    => esc_html__( 'Set color for blog navbar content. This color will be used on blog list, archive and serach page', 'tevent' ),
	) );

	$blog->createOption( array(
		'name'    => esc_html__( 'Blog Header Content Color', 'tevent' ),
		'id'      => 'blog_title_color',
		'type'    => 'select',
		'default' => 'black',
		'options' => array(
			'black' => esc_html__( 'Black Text Content', 'tevent' ),
			'white' => esc_html__( 'White Text Content', 'tevent' ),
			),
		'desc'    => esc_html__( 'Set color for blog header content. This color will be used on blog list, archive and serach page', 'tevent' ),
	) );

	$blog->createOption( array(
		'name'    => esc_html__( 'Blog Header Overlay', 'tevent' ),
		'id'      => 'blog_title_overlay',
		'type'    => 'select',
		'default' => 'none',
		'options' => array(
			'0' => esc_html__( 'No Overlay', 'tevent' ),
			'1' => esc_html__( 'Black Over with 10% Opactiy', 'tevent' ),
			'2' => esc_html__( 'Black Over with 20% Opactiy', 'tevent' ),
			'3' => esc_html__( 'Black Over with 30% Opactiy', 'tevent' ),
			'4' => esc_html__( 'Black Over with 40% Opactiy', 'tevent' ),
			'5' => esc_html__( 'Black Over with 50% Opactiy', 'tevent' ),
			'6' => esc_html__( 'Black Over with 60% Opactiy', 'tevent' ),
			'7' => esc_html__( 'Black Over with 70% Opactiy', 'tevent' ),
			'8' => esc_html__( 'Black Over with 80% Opactiy', 'tevent' ),
			'9' => esc_html__( 'Black Over with 90% Opactiy', 'tevent' ),
			),
		'desc'    => esc_html__( 'Set overlay for blog header. This overlay will be used on blog list, archive and serach page', 'tevent' ),
	) );

	$blog->createOption( array(
		'name'    => esc_html__( 'Blog Header Shadow', 'tevent' ),
		'id'      => 'blog_header_shadow',
		'type'    => 'select',
		'default' => 'none',
		'options' => array(
			'0'   => esc_html__( 'No Shadow', 'tevent' ),
			'40'  => esc_html__( '40px Box Shadow', 'tevent' ),
			'100' => esc_html__( '100px Box Shadow', 'tevent' ),
			),
		'desc'    => esc_html__( 'Set header box shadow. This shadow will be used on blog list, archive and serach page', 'tevent' ),
	) );

	// Footer settings
	$footer = $titan->createThemeCustomizerSection( array(
		'name' => esc_html__( 'Footer', 'tevent' ),
	) );

	$footer->createOption( array(
		'name' => esc_html__( 'Logo', 'tevent' ),
		'id'   => 'footer_logo',
		'type' => 'upload',
		'size' => 'thumbnail',
		'desc' => esc_html__( 'Upload footer logo', 'tevent' ),
	) );

	$footer->createOption( array(
		'name'    => esc_html__( 'Copyright Text', 'tevent' ),
		'id'      => 'copyright_text',
		'type'    => 'text',
		'default' => esc_attr__( 'All right reserved by ThemeBucket', 'tevent' ),
		'desc'    => esc_html__( 'Add copyright text', 'tevent' )
	) );

	// Social Icons settings
	$social = $titan->createThemeCustomizerSection( array(
		'name' => esc_html__( 'Social Links', 'tevent' ),
	) );

	foreach ( tevent_get_supported_social_media() as $key => $medium ) {
		$social->createOption( array(
			'name' => esc_html( $medium['label'] ),
			'id'   => 'social_' . $key,
			'type' => 'text',
			'desc' => sprintf( esc_html__( 'Add %s link', 'tevent' ), strtolower( $medium['label'] ) ),
		) );
	}

	// 404 settings
	$_404 = $titan->createThemeCustomizerSection( array(
		'name' => esc_html__( '404 Page', 'tevent' ),
	) );

	$_404->createOption( array(
		'name' => esc_html__( '404 Banner', 'tevent' ),
		'id'   => '_404_banner',
		'type' => 'upload',
		'size' => 'thumbnail',
		'desc' => esc_html__( 'Upload 404 banner image', 'tevent' ),
	) );

	$_404->createOption( array(
		'name'    => esc_html__( '404 Header', 'tevent' ),
		'id'      => '_404_header',
		'type'    => 'text',
		'default' => esc_attr__( 'Page Not Found!', 'tevent' ),
		'desc'    => esc_html__( 'Add 404 header text', 'tevent' ),
	) );

	$_404->createOption( array(
		'name'    => esc_html__( '404 Button Text', 'tevent' ),
		'id'      => '_404_button_text',
		'type'    => 'text',
		'default' => esc_attr__( 'Back To Home', 'tevent' ),
		'desc'    => esc_html__( 'Add 404 button text', 'tevent' ),
	) );
}