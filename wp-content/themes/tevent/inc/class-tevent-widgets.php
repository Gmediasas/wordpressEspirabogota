<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tevent_Widgets {

	public function __construct() {
		add_action( 'widgets_init', array( $this, 'init' ) );
	}

	/**
	 * Register widget area.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	 */
	function init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'tevent' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tevent' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Sidenav', 'tevent' ),
			'id'            => 'sidenav',
			'description'   => esc_html__( 'Add widgets here.', 'tevent' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}

}
