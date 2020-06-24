<?php
/**
 * Tevent subscribe shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Subscribe extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_subscribe';

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
			'name'     => __( 'Subscribe', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => __( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('subscribe'),
			'params'   => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Title', 'tevent' ),
					'param_name'  => 'title',
					'value'       => esc_attr__( 'Sign Up For Our Newsletter', 'tevent' ),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Mailchimp URL', 'tevent' ),
					'param_name'  => 'url',
					'description' => esc_html__( 'Enter mailchimp url.', 'tevent'),
					'value'       => ''
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Placeholder Text', 'tevent' ),
					'param_name'  => 'placeholder',
					'value'       => esc_attr__( 'Enter your email address', 'tevent' )
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Button Text', 'tevent' ),
					'param_name'  => 'btn_text',
					'value'       => esc_attr__( 'Subscribe', 'tevent' )
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
			'url'         => '',
			'title'       => __( 'Sign Up For Our Newsletter', 'tevent' ),
			'placeholder' => __( 'Enter your email address', 'tevent' ),
			'btn_text'    => __( 'Subscribe', 'tevent' ),
			);
		
		$atts = shortcode_atts( $defaults, $atts );
		$view = $this->get_view( 'main' );
		$id   = uniqid( 'Sc-subscribe_' );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Subscribe;
