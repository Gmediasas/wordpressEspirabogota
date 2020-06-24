<?php
/**
 * Tevent video shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Video extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_video';

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
			'name'     => __( 'Video', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => __( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('video'),
			'params'   => array(
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__( 'Poster Image', 'tevent' ),
					'param_name'  => 'image',
					'description' => esc_html__( 'Add video poster image.', 'tevent' ),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Video URL', 'tevent' ),
					'param_name'  => 'url',
					'value'       => '',
					'description' => esc_html__( 'Add youtube or vimeo video URL.', 'tevent' ),
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
			'url'   => '',
			'image' => '',
			);
		
		$atts  = shortcode_atts( $defaults, $atts );
		$view  = $this->get_view( 'main' );
		$id    = uniqid( 'ScVideo_' );
		$image = wp_get_attachment_image_url( $atts['image'], 'tevent-s670' );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Video;
