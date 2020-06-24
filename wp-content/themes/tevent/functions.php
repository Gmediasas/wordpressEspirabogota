<?php
/**
 * Tevent functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tevent
 */

define( 'TEVENT_VERSION', wp_get_theme()->get( 'Version' ) );

// Setup directory constants
define( 'TEVENT_DIR', trailingslashit( get_template_directory() ) );
define( 'TEVENT_INC_DIR', trailingslashit( TEVENT_DIR . 'inc' ) );
define( 'TEVENT_LIB_DIR', trailingslashit( TEVENT_DIR . 'lib' ) );

// Setup uri constants
define( 'TEVENT_URI', trailingslashit( get_template_directory_uri() ) );
define( 'TEVENT_ASSETS_URI', trailingslashit( TEVENT_URI . 'assets' ) );

require_once TEVENT_INC_DIR . 'class-tevent.php';

new Tevent;
