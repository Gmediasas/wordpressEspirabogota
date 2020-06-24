<?php
/**
 * Tevent heading shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Heading extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_heading';

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
			'name'     => esc_html__( 'Heading', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => esc_html__( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('heading'),
			'params'   => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Main Heading', 'tevent' ),
					'param_name'  => 'main',
					'admin_label' => true,
					'description' => esc_html__( 'Add heading content here.', 'tevent' ),
					'value'       => esc_html__( 'Tevent Heading', 'tevent'),
					),
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Main Heading Level', 'tevent' ),
					'description' => esc_html__( 'Set heading level h1 - h6', 'tevent' ),
					'param_name'  => 'level',
					'std'         => '2',
					'value'       => array(
							esc_html__( 'H1', 'tevent' ) => '1',
							esc_html__( 'H2', 'tevent' ) => '2',
							esc_html__( 'H3', 'tevent' ) => '3',
							esc_html__( 'H4', 'tevent' ) => '4',
							esc_html__( 'H5', 'tevent' ) => '5',
							esc_html__( 'H6', 'tevent' ) => '6',
						)
					),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Sub Heading', 'tevent' ),
					'param_name'  => 'content',
					'description' => esc_html__( 'Add subheading here.', 'tevent' ),
					'value'       => esc_html__( 'Tevent sub heading', 'tevent'),
					),
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Alignment', 'tevent' ),
					'description' => esc_html__( 'Set heading content alignment.', 'tevent' ),
					'param_name'  => 'align',
					'value'       => array(
							esc_html__( 'Left', 'tevent' )   => '',
							esc_html__( 'Center', 'tevent' ) => 'center',
							esc_html__( 'Right', 'tevent' )  => 'right',
						)
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
			'main'  => __( 'Tevent Heading', 'tevent'),
			'level' => '2',
			'align' => '',
			);

		$atts  = shortcode_atts( $defaults, $atts );
		$view  = $this->get_view( 'main' );
		$level = absint( $atts['level'] );
		$tag   = ( ( $level >= 1 && $level <= 6 ) ? "h{$level}" : 'h2' );
		$align = 'text-left col-xs-12';

		if ( 'center' === $atts['align'] ) {
			$align = 'text-center col-sm-8 col-sm-offset-2';
		} elseif ( 'right' === $atts['align'] ) {
			$align = 'text-right col-xs-12';
		}

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}
	
}

new Tevent_Heading;
