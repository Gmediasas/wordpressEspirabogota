<?php
/**
 * Tevent button shortcode
 *
 * @package Tevent Engine
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Button extends Tevent_Shortcode {

	/**
	 * Set shrotcode tag
	 * @var string
	 */
	protected $tag = 'tb_button';

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
			'name'     => esc_html__( 'Button', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => esc_html__( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('button'),
			'params'   => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Label', 'tevent' ),
					'param_name'  => 'text',
					'admin_label' => true,
					'value'       => esc_attr__( 'Button', 'tevent' ),
					'description' => esc_html__( 'Add button label.', 'tevent' ),
					),
				array(
					'type'        => 'vc_link',
					'heading'     => esc_html__( 'Link', 'tevent' ),
					'param_name'  => 'link',
					'description' => esc_html__( 'Set button link.', 'tevent' ),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'CSS Class', 'tevent' ),
					'param_name'  => 'css_class',
					'description' => esc_html__( 'Add button html class.', 'tevent' ),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'CSS ID', 'tevent' ),
					'param_name'  => 'css_id',
					'description' => esc_html__( 'Add button html id.', 'tevent' ),
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
			'text'      => __( 'Button', 'tevent' ),
			'link'      => '',
			'css_class' => '',
			'css_id'    => '',
			);

		$atts         = shortcode_atts( $defaults, $atts );
		$view         = $this->get_view( 'main' );
		$params       = Tevent_Util::build_link( $atts['link'] );
		$param_string = '';

		foreach ( $params as $key => $param ) {
			if ( empty( $param ) ) {
				continue;
			}

			if ( 'url' === $key ) {
				$param_string .= 'href="' . esc_url( $param ) . '" ';
			} else {
				$param_string .= $key . '="' . esc_attr( $param ) . '" ';
			}
		}

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Button;
