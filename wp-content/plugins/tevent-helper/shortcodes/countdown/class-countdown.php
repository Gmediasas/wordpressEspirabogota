<?php
/**
 * Tevent countdown shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Countdown extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_countdown';

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
			'name'     => esc_html__( 'Countdown', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => esc_html__( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('countdown'),
			'params'   => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Style', 'tevent' ),
					'param_name'  => 'style',
					'admin_label' => true,
					'description' => esc_html__( 'There are two available options for you. Select one of them.', 'tevent' ),
					'value'       => array(
							esc_html__( 'Normal', 'tevent' ) => '',
							esc_html__( 'Boxed', 'tevent' )  => 'boxed'
						),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'End Time', 'tevent' ),
					'param_name'  => 'end_time',
					'value' 	  => '',
					// translators: %s is the time format
					'description' => sprintf( esc_html__( 'Set countdown end time or the time of the event in any of these formats %s', 'tevent' ), '<code>YYYY/MM/DD</code><code>MM/DD/YYYY</code><code>YYYY/MM/DD hh:mm:ss</code><code>MM/DD/YYYY hh:mm:ss</code>' ),
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
			'style'    => '',
			'end_time' => '',
			);

		$atts = shortcode_atts( $defaults, $atts );
		$view = $this->get_view( 'countdown' );

		$class = 'Sc-countdown text-center text-white h3 js-Countdown';

		if ( 'boxed' === $atts['style'] ) {
			$class .= ' count-transparent';
		}
		
		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}
	
}

new Tevent_Countdown;
