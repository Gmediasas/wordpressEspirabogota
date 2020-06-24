<?php
/**
 * Tevent blurb shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Blurb extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_blurb';

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
			'name'        => esc_html__( 'Blurb', 'tevent' ),
			'base'        => $this->get_tag(),
			'category'    => esc_html__( 'Tevent', 'tevent' ),
			'icon'        => $this->get_icon( 'feature-box' ),
			'params'      => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Style', 'tevent' ),
					'param_name'  => 'style',
					'admin_label' => true,
					'std'         => 'horizontal',
					'description' => esc_html__( 'There are two available options for you. Select one of them.', 'tevent' ),
					'value'       => array(
							esc_html__( 'Horizontal Icon and Content', 'tevent' ) => 'horizontal',
							esc_html__( 'Vertical Icon and Content', 'tevent' )   => 'vertical',
							esc_html__( 'Vertical Image and Content', 'tevent' )  => 'vertical2',
						),
					),
				array(
					'type'       => 'iconpicker',
					'heading'    => esc_html__( 'Icon', 'tevent' ),
					'param_name' => 'icon',
					'settings'   => array(
						'emptyIcon' => false,
						'type'      => 'bicon',
						),
					'description' => esc_html__( 'Select a blurb icon.', 'tevent' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array('vertical', 'horizontal')
						)
					),
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__( 'Image', 'tevent' ),
					'param_name'  => 'image',
					'description' => esc_html__( 'Add blurb image here.', 'tevent' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array('vertical2')
						)
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Title', 'tevent' ),
					'param_name'  => 'title',
					'admin_label' => true,
					'value'       => esc_attr__( 'Tevent Blurb Title', 'tevent' ),
					'description' => esc_html__( 'Add blurb title here.', 'tevent' ),
					),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Content', 'tevent' ),
					'param_name'  => 'content',
					'description' => esc_html__( 'Add blurb content here.', 'tevent' ),
					'value'       => esc_html__( 'Tevent blurb content', 'tevent' ),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Button Label', 'tevent' ),
					'param_name'  => 'btn_text',
					'admin_label' => true,
					'value'       => esc_attr__( 'Button', 'tevent' ),
					'description' => esc_html__( 'Add button label.', 'tevent' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array('vertical2')
						)
					),
				array(
					'type'        => 'vc_link',
					'heading'     => esc_html__( 'Button Link', 'tevent' ),
					'param_name'  => 'btn_link',
					'description' => esc_html__( 'Set button link.', 'tevent' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array('vertical2')
						)
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
			'style'    => 'horizontal',
			'icon'     => '',
			'image'    => '',
			'btn_link' => '',
			'title'    => __( 'Awesome Blurb Title', 'tevent' ),
			'btn_text' => __( 'Button', 'tevent' )
			);
		
		$atts = shortcode_atts( $defaults, $atts );

		switch ( $atts['style'] ) {
			case 'vertical':
				$view = 'vertical';
				break;

			case 'vertical2':
				$view = 'vertical2';
				break;

			case 'horizontal':
			default:
				$view = 'horizontal';
				break;
		}

		$view = $this->get_view( $view );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Blurb;
