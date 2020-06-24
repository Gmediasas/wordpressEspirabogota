<?php
add_action( 'tf_create_options', 'tevent_session_meta' );

function tevent_session_meta() {
	$session = TitanFramework::getInstance( 'tevent_session' );

	$session = $session->createMetaBox( array(
		'name'      => esc_html__( 'Additional Information', 'tevent' ),
		'desc'      => esc_html__( 'Set session additional information', 'tevent' ),
		'post_type' => 'session',
	) );
	
	$session->createOption( array(
		'name' => esc_html__( 'Speaker', 'tevent' ),
		'id'   => 'speaker',
		'type' => 'text',
		'desc' => esc_html__( 'Add session speaker name', 'tevent' ),
	) );

	$session->createOption( array(
		'name' => esc_html__( 'Vanue', 'tevent' ),
		'id'   => 'vanue',
		'type' => 'text',
		'desc' => esc_html__( 'Add session vanue', 'tevent' ),
	) );

	$session->createOption( array(
		'name' => esc_html__( 'Time', 'tevent' ),
		'id'   => 'time',
		'type' => 'text',
		'desc' => esc_html__( 'Add session start time', 'tevent' ),
	) );

	// Page settings
	$page = TitanFramework::getInstance( 'tevent_page' );

	$page = $page->createMetaBox( array(
		'name'      => esc_html__( 'Page Settings', 'tevent' ),
		'desc'      => esc_html__( 'Set page specific settings', 'tevent' ),
		'post_type' => 'page',
	) );

	$page->createOption( array(
		'name'    => esc_html__( 'Page Navbar Content Color', 'tevent' ),
		'id'      => 'navbar_color',
		'type'    => 'select',
		'default' => 'black',
		'options' => array(
			'black' => esc_html__( 'Black Text Content', 'tevent' ),
			'white' => esc_html__( 'White Text Content', 'tevent' ),
			),
		'desc'    => esc_html__( 'Select a color between two options', 'tevent' ),
	) );

	$page->createOption( array(
		'name'    => esc_html__( 'Page Header Content Color', 'tevent' ),
		'id'      => 'title_color',
		'type'    => 'select',
		'default' => 'black',
		'options' => array(
			'black' => esc_html__( 'Black Text Content', 'tevent' ),
			'white' => esc_html__( 'White Text Content', 'tevent' ),
			),
		'desc'    => esc_html__( 'Select a color between two options', 'tevent' ),
	) );

	$page->createOption( array(
		'name'    => esc_html__( 'Page Header Overlay', 'tevent' ),
		'id'      => 'title_overlay',
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
		'desc'    => esc_html__( 'Set page title overlay settings', 'tevent' ),
	) );

	$page->createOption( array(
		'name'    => esc_html__( 'Page Header Shadow', 'tevent' ),
		'id'      => 'title_shadow',
		'type'    => 'select',
		'default' => 'none',
		'options' => array(
			'none'=> esc_html__( 'No Shadow', 'tevent' ),
			'40'  => esc_html__( '40px Box Shadow', 'tevent' ),
			'100' => esc_html__( '100px Box Shadow', 'tevent' ),
			),
		'desc'    => esc_html__( 'Set page title box shadow', 'tevent' ),
	) );
}
