<?php
/**
 * Tevent blurb section shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Blurb_Section extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_blurb_section';

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
			'name'        => esc_html__( 'Blurb Section', 'tevent' ),
			'base'        => $this->get_tag(),
			'category'    => esc_html__( 'Tevent', 'tevent' ),
			'icon'        => $this->get_icon( 'blurb-section' ),
			'params'      => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Title', 'tevent' ),
					'param_name'  => 'title',
					'description' => esc_html__( 'Add blurb section title here.', 'tevent' ),
					'value'       => esc_attr__( 'Tevent Blurb Section Title', 'tevent' ),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Subtitle', 'tevent' ),
					'param_name'  => 'subtitle',
					'description' => esc_html__( 'Add blurb section subtitle here.', 'tevent' ),
					'value'       => esc_attr__( 'Tevent blurb section subtitle.', 'tevent' ),
					),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Content', 'tevent' ),
					'param_name'  => 'content',
					'description' => esc_html__( 'Add blurb section content here.', 'tevent' ),
					'value'       => esc_html__( 'Tevent blurb section content goes here.', 'tevent' ),
					),
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__( 'Image', 'tevent' ),
					'param_name'  => 'image',
					'description' => esc_html__( 'Add blurb section image here.', 'tevent' ),
					),
				array(
					'type'        => 'checkbox',
					'heading'     => esc_html__( 'Alternative View', 'tevent' ),
					'param_name'  => 'alter',
					'description' => esc_html__( 'Check alternative view to switch image and text content position.', 'tevent' ),
					'std'         => false,
					),
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
		$defaults = array(
			'title'    => __( 'Tevent Blurb Section Title', 'tevent' ),
			'subtitle' => __( 'Tevent blurb section subtitle.', 'tevent' ),
			'image'    => '',
			'alter'    => 'false'
			);
		
		$atts  = shortcode_atts( $defaults, $atts );
		$image = wp_get_attachment_image_url( absint( $atts['image'] ), 'tevent-s670' );
		$view  = $this->get_view( 'main' );
		$class = ( 'true' !== $atts['alter'] ? 'ImageBlock--switch' : '' );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Blurb_Section;
