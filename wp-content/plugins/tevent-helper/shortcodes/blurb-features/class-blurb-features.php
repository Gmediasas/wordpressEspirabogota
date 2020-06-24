<?php
/**
 * Tevent blurb features shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Blurb_Features extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_blurb_feat';

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
			'name'     => esc_html__( 'Blurb Features', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => esc_html__( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon( 'blurb-feature' ),
			'params'   => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Blurb Title', 'tevent' ),
					'param_name'  => 'title',
					'admin_label' => true,
					'description' => esc_html__( 'Add blurb title.', 'tevent' ),
					'value'       => esc_attr__( 'Tevent Feature Blurb', 'tevent' ),
					),
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__( 'Blurb Image', 'tevent' ),
					'param_name'  => 'image',
					'description' => esc_html__( 'Add blurb image.', 'tevent' ),
					),
				array(
					'type'        => 'param_group',
					'heading'     => esc_html__( 'Features', 'tevent' ),
					'description' => esc_html__( 'Add feature by clicking on the add button.', 'tevent' ),
					'param_name'  => 'content',
					'params'      => array(
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Feature Name', 'tevent' ),
							'param_name'  => 'title',
							'admin_label' => true,
							'description' => esc_html__( 'Add feature name.', 'tevent' ),
							'value'       => esc_attr__( 'Feature 1', 'tevent' ),
							),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Feature Value', 'tevent' ),
							'param_name'  => 'value',
							'description' => esc_html__( 'Add a concise feature description.', 'tevent' ),
							'value'       => esc_attr__( 'Amazing feature', 'tevent' ),
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
			'title' => __( 'Tevent Feature Blurb', 'tevent' ),
			'image' => '',
			);

		$atts = shortcode_atts( $default, $atts );
		$view = $this->get_view( 'main' );
		$image = wp_get_attachment_image_url( $atts['image'], 'tevent-h500' );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Blurb_Features;
