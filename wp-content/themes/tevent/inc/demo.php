<?php

function tevent_import_files() {
	return array(
		array(
			'import_file_name'             => esc_html__( 'Main Demo', 'tevent' ),
			'local_import_file'            => TEVENT_DIR . 'demo/content.xml',
			'local_import_widget_file'     => TEVENT_DIR . 'demo/widgets.json',
			'local_import_customizer_file' => TEVENT_DIR . 'demo/customizer.dat',
			'import_preview_image_url'     => TEVENT_URI . 'screenshot.png',
			'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the revolution slider separately.', 'tevent' ),
			'preview_url'                  => 'http://teventwp.lab.themebucket.net/',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'tevent_import_files' );

function tevent_after_import_setup() {
	$main_menu = get_term_by( 'name', 'Primary', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'primary' => $main_menu->term_id,
		)
	);

	$front_page_id = get_page_by_title( 'Home Classic' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'tevent_after_import_setup' );
