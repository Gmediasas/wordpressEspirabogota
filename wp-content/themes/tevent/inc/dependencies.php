<?php

require_once TEVENT_LIB_DIR . 'TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';

function tevent_register_required_plugins() {
	$plugins = array(
		array(
			'name'     => 'Tevent Helper',
			'slug'     => 'tevent-helper',
			'source'   => TEVENT_DIR . 'plugins/tevent-helper.zip',
			'required' => true,
			'version'  => '1.4.0',
		),
		array(
			'name'     => 'Visual Composer',
			'slug'     => 'js_composer',
			'required' => true,
			'source'   => TEVENT_DIR . 'plugins/js_composer.zip',
		),
		array(
			'name'     => 'Slider Revolution',
			'slug'     => 'revslider',
			'source'   => TEVENT_DIR . 'plugins/revslider.zip',
		),
		array(
			'name'     => 'Titan Framework',
			'slug'     => 'titan-framework',
			'required' => true,
			'version'  => '1.11',
		),
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
		),
		array(
			'name'     => 'One Click Demo Import',
			'required' => true,
			'slug'     => 'one-click-demo-import',
		),
	);

	$config = array(
		'id'           => 'tevent',
		'default_path' => '',
		'menu'         => 'tevent-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'tevent_register_required_plugins' );
