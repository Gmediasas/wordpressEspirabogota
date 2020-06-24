<?php
/**
 * Tevent accordion shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Accordion extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_accordion';

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
			'name'     => esc_html__( 'Accordion', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => esc_html__( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('accordion'),
			'params'   => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Style', 'tevent' ),
					'param_name'  => 'style',
					'admin_label' => true,
					'description' => esc_html__( 'There are 2 visual style. Select one of them.', 'tevent' ),
					'value'       => array(
							esc_html__( 'Default Style', 'tevent' ) => '',
							esc_html__( 'Boxed Style', 'tevent' )   => 'boxed',
						),
					),
				array(
					'type'        => 'param_group',
					'heading'     => esc_html__( 'Accordion Items', 'tevent' ),
					'description' => esc_html__( 'Add accordion item by clicking on the add button.', 'tevent' ),
					'param_name'  => 'content',
					'params'      => array(
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Title', 'tevent' ),
							'param_name'  => 'title',
							'admin_label' => true,
							'description' => esc_html__( 'Add accordion item title.', 'tevent' ),
							),
						array(
							'type'        => 'textarea',
							'heading'     => esc_html__( 'Description', 'tevent' ),
							'param_name'  => 'desc',
							'description' => esc_html__( 'Add accordion item description.', 'tevent' ),
							),
						array(
							'type'        => 'checkbox',
							'heading'     => esc_html__( 'Keep Open', 'tevent' ),
							'std'         => 'false',
							'param_name'  => 'open',
							'description' => esc_html__( 'Select this option if you want to keep this item open.', 'tevent' ),
							),
						)
					)
				)
			);
	}

	/**
	 * render this shortcode
	 * @param  array $atts
	 * @param  string $content
	 * @return string
	 */
	public function render( $atts, $content = null ) {
		$default = array(
			'style' => '',
			);

		$atts  = shortcode_atts( $default, $atts );
		$view  = $this->get_view( 'main' );
		$id    = uniqid( 'Sc-accordion_' );
		$style = ( 'boxed' !== $atts['style'] ? 'panel-shadow' : '' );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Accordion;
