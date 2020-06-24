<?php
/**
 * Tevent package shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Package extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_package';

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
			'name'             => esc_html__( 'Pricing Package', 'tevent' ),
			'base'             => $this->get_tag(),
			'category'         => esc_html__( 'Tevent', 'tevent' ),
			'icon'             => $this->get_icon('price-table'),
			'params'           => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Style', 'tevent' ),
					'param_name'  => 'style',
					'admin_label' => true,
					'value'       => array(
							esc_html__( 'Rectangular Box', 'tevent' ) => '',
							esc_html__( 'Round Box', 'tevent' )       => 'round'
						),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Title', 'tevent' ),
					'param_name'  => 'title',
					'admin_label' => true,
					'value'       => esc_html__( 'Standard', 'tevent' )
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Currency', 'tevent' ),
					'param_name' => 'currency',
					'value'      => '$',
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Price', 'tevent' ),
					'description' => esc_html__( 'Add price without currency.', 'tevent' ),
					'param_name'  => 'price',
					'value'       => '9.99',
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Duration', 'tevent' ),
					'param_name'  => 'duration',
					'value'       => esc_html__( 'Per Month', 'tevent' )
					),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Features', 'tevent' ),
					'description' => esc_html__( 'Add each feature in new line.', 'tevent' ),
					'param_name'  => 'content',
					'value'       => esc_html__( "- Entrance \n- Free Lunch & Snacks\n- Custom Badge", 'tevent' )
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Button Text', 'tevent' ),
					'param_name'  => 'button_text',
					'value'       => esc_html__( 'Purchase', 'tevent' )
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Button Link', 'tevent' ),
					'param_name' => 'button_link',
					'value'      => '#'
					),
				array(
					'type'        => 'checkbox',
					'heading'     => esc_html__( 'Featured Package', 'tevent' ),
					'param_name'  => 'featured',
					'value'       => 'false',
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
			'style'       => '',
			'title'       => __( 'Standard', 'tevent' ),
			'currency'    => '$',
			'price'       => '10',
			'duration'    => __( 'Per Month', 'tevent' ),
			'button_text' => __( 'Purchase', 'tevent' ),
			'button_link' => '#',
			'featured'    => 'false',
			);

		$atts  = shortcode_atts( $defaults, $atts );
		$view  = $this->get_view( ( 'true' === $atts['featured'] ? 'featured' : 'general' ) );
		$class = ( 'round' === $atts['style'] ? 'u-BorderRadius6' : '' );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}
	
}

new Tevent_Package;
