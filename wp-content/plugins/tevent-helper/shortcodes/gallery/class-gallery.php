<?php
/**
 * Tevent gallery shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Gallery extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_gallery';

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
			'name'     => esc_html__( 'Gallery', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => esc_html__( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('gallery'),
			'params'   => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Style', 'tevent' ),
					'param_name'  => 'style',
					'admin_label' => true,
					'description' => esc_html__( 'There are 3 available gallery options. Select one that is suitable with your purpose.', 'tevent' ),
					'value'       => array(
							esc_html__( 'Normal Gallery', 'tevent' ) => '',
							esc_html__( 'Boxed Gallery', 'tevent' )   => 'boxed',
							esc_html__( 'Hover Gallery', 'tevent' )   => 'hover',
						),
					),
				array(
					'type'        => 'param_group',
					'heading'     => esc_html__( 'Gallery Items', 'tevent' ),
					'description' => esc_html__( 'Add gallery image by clicking on the add button', 'tevent' ),
					'param_name'  => 'content',
					'params'      => array(
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Title', 'tevent' ),
							'param_name'  => 'title',
							'description' => esc_html__( 'Add image title.', 'tevent' ),
							),
						array(
							'type'        => 'attach_image',
							'heading'     => esc_html__( 'Image', 'tevent' ),
							'param_name'  => 'image',
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

		$atts = shortcode_atts( $default, $atts );
		$view = ( 'hover' === $atts['style'] ? 'hover' : 'main' );
		$view = $this->get_view( $view );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Gallery;
