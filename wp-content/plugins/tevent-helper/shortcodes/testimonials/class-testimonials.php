<?php
/**
 * Tevent testimonial shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Testimonials extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_testimonials';

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
			'name'     => esc_html__( 'Testimonials', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => esc_html__( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('testimonial'),
			'params'   => array(
				array(
					'type'        => 'param_group',
					'heading'     => esc_html__( 'Testimonial List', 'tevent' ),
					'description' => esc_html__( 'Add testimonial clicking on the add button', 'tevent' ),
					'param_name'  => 'content',
					'params'      => array(
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Name', 'tevent' ),
							'param_name'  => 'name',
							'admin_label' => true,
							),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Job Title', 'tevent' ),
							'param_name'  => 'title',
							'description' => esc_html__( 'Add job title with company name', 'tevent' ),
							),
						array(
							'type'        => 'textarea',
							'heading'     => esc_html__( 'Statement', 'tevent' ),
							'param_name'  => 'statement',
							'description' => esc_html__( 'Add testimonial statement here.', 'tevent' )
							),
						array(
							'type'        => 'attach_image',
							'heading'     => esc_html__( 'Photo', 'tevent' ),
							'param_name'  => 'photo',
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
		$view = $this->get_view( 'main' );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Testimonials;

