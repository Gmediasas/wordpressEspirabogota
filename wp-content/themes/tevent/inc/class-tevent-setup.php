<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Tevent_Setup {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'init' ) );
		add_action( 'after_setup_theme', array( $this, 'content_width' ), 0 );
	}

	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 *
	 * @global int $content_width
	 */
	function content_width() {
		$GLOBALS['content_width'] = apply_filters( 'tevent_content_width', 665 );
	}
	
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	public function init() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /lang/ directory.
		 * If you're building a theme based on Tevent, use a find and replace
		 * to change 'tevent' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tevent', TEVENT_DIR . '/lang' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'tevent' ),
		) );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'audio', 'video', 'gallery',
		) );

		add_image_size( 'tevent-s1600', 1600, 99999, false );
		add_image_size( 'tevent-s670', 670, 99999, false );
		add_image_size( 'tevent-s500', 500, 99999, false );
		add_image_size( 'tevent-h500', 500, 375, true );
	}

}
