<?php
/**
 * Tevent hero heading shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Hero_Heading extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_hero_heading';

	/**
	 * Set shortcode directory
	 * @return string Directory path
	 */
	protected function set_dir() {
		return __DIR__;
	}

	/**
	 * Map this shortcode with visual composer
	 * @return array
	 */
	protected function map() {
		return array(
			'name'     => __( 'Hero Heading', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => __( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('hero-heading'),
			'params'   => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Main Heading', 'tevent' ),
					'param_name'  => 'main',
					'admin_label' => true,
					'description' => esc_html__( 'Add hero main heading here.', 'tevent' ),
					'value'       => esc_attr__( 'Tevent Hero Heading', 'tevent' ),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Sub Heading', 'tevent' ),
					'param_name'  => 'sub',
					'description' => esc_html__( 'Add hero sub heading here.', 'tevent' ),
					'value'       => esc_attr__( 'Tevent sub hero heading', 'tevent' ),
					),
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Headings Color', 'tevent' ),
					'param_name'  => 'color',
					'description' => esc_html__( 'There are two available options for you. Select one of them.', 'tevent' ),
					'value'       => array(
							esc_html__( 'Black', 'tevent' ) => '',
							esc_html__( 'White', 'tevent' ) => 'white',
						),
					),
				)
			);
	}

	/**
	 * Render this shortcode
	 * @param  array $atts
	 * @param  string $content
	 * @return string
	 */
	public function render( $atts, $content = null ) {
		$defaults = array(
			'main'  => __( 'Tevent Hero Heading', 'tevent' ),
			'sub'   => __( 'Tevent sub hero heading', 'tevent' ),
			'color' => '',
			);
		
		$atts  = shortcode_atts( $defaults, $atts );
		$view  = $this->get_view( 'main' );
		$color = ( 'white' === $atts['color'] ? 'text-white' : '' );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Hero_Heading;
