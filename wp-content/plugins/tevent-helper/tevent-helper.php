<?php
/*
Plugin Name: Tevent Helper
Description: Helper plugin for Tevent WordPress Theme.
Plugin URI: http://teventwp.lab.themebucket.net/
Author: ThemeBucket
Author URI: http://themebucket.net
Version: 1.4.0
License: GPL2
Text Domain: tevent
Domain Path: /lang
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*******************************************************************
 * Constants
 *******************************************************************/

/** Tevent Engine version  */
define( 'TEVENT_HELPER_VERSION', '1.4.0' );

/** Tevent Engine directory path  */
define( 'TEVENT_HELPER_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

/** Tevent Engine includes directory path  */
define( 'TEVENT_HELPER_INC', trailingslashit( TEVENT_HELPER_DIR . 'inc' ) );

/** Tevent Engine shortcodes directory path  */
define( 'TEVENT_HELPER_SHORTCODES', trailingslashit( TEVENT_HELPER_DIR . 'shortcodes' ) );

/** Tevent Engine url  */
define( 'TEVENT_HELPER_URL', trailingslashit(  plugin_dir_url( __FILE__ ) ) );


class Tevent_Helper {

	public function __construct() {
		$this->load_helpers();

		$this->load_shortcodes();

		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
	}

	public function load_textdomain() {
		load_plugin_textdomain( 'tevent', false,  TEVENT_HELPER_DIR . 'lang/' );
	}

	private function load_helpers() {
		// helper functions
		require_once  TEVENT_HELPER_INC . 'class-tevent-util.php';

		// custom field type
		require_once  TEVENT_HELPER_INC . 'class.tb-vc-preview-field.php';
		require_once  TEVENT_HELPER_INC . 'class.tb-vc-gdropdown-field.php';

		// shortcode base
		require_once  TEVENT_HELPER_INC . 'class.shortcode.php';

		// Register custom stuffs
		require_once  TEVENT_HELPER_INC . 'functions-register.php';

		// custom filters
		require_once  TEVENT_HELPER_INC . 'functions-helper.php';
	}

	/**
	 * Include all shortcode files
	 * @return null
	 */
	private function load_shortcodes() {
		foreach ( glob( TEVENT_HELPER_SHORTCODES . '*/*.php' ) as $shortcode ) {
			if ( ! file_exists( $shortcode ) ) {
				continue;
			}
			require_once $shortcode;
		}
	}

}

new Tevent_Helper;
