<?php
/**
 * Tevent member shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Member extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_member';

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
			'name'                    => esc_html__( 'Member', 'tevent' ),
			'base'                    => $this->get_tag(),
			'category'                => esc_html__( 'Tevent', 'tevent' ),
			'icon'                    => $this->get_icon('team'),
			'show_settings_on_create' => true,
			'params'                  => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Style', 'tevent' ),
					'param_name'  => 'style',
					'admin_label' => true,
					'description' => esc_html__( 'There are two visual style, select one of those.', 'tevent' ),
					'std'         => 'compact',
					'value'       => array(
						esc_html__( 'Grid View', 'tevent' )    => 'compact',
						esc_html__( 'Classic View', 'tevent' ) => 'details',
						),
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Name', 'tevent' ),
					'param_name'  => 'name',
					'admin_label' => true,
					'value'       => esc_attr__( 'Jhon Doe', 'tevent' )
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Job Title', 'tevent' ),
					'param_name'  => 'title',
					'description' => esc_html__( 'Add job title with company name.', 'tevent' ),
					'value'       => '',
					),
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__( 'Photo', 'tevent' ),
					'param_name'  => 'photo',
					),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Bio', 'tevent' ),
					'param_name'  => 'content',
					'description' => esc_html__( 'Add a concise bio here.', 'tevent' ),
					),

				// social links
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Facebook', 'tevent' ),
					'param_name' => 'facebook',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Twitter', 'tevent' ),
					'param_name' => 'twitter',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Google+', 'tevent' ),
					'param_name' => 'googleplus',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'LinkedIn', 'tevent' ),
					'param_name' => 'linkedin',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Dribbble', 'tevent' ),
					'param_name' => 'dribbble',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Github', 'tevent' ),
					'param_name' => 'github',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Flickr', 'tevent' ),
					'param_name' => 'flickr',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Sound Cloud', 'tevent' ),
					'param_name' => 'soundcloud',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Behance', 'tevent' ),
					'param_name' => 'behance',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Deviant Art', 'tevent' ),
					'param_name' => 'deviantart',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Youtube', 'tevent' ),
					'param_name' => 'youtube',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Pinterest', 'tevent' ),
					'param_name' => 'pinterest',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Instagram', 'tevent' ),
					'param_name' => 'instagram',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Stack Overflow', 'tevent' ),
					'param_name' => 'stackoverflow',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Web Site', 'tevent' ),
					'param_name' => 'web',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
					),
				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Email', 'tevent' ),
					'param_name' => 'email',
					'group'      => esc_html__( 'Social Links', 'tevent' ),
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
			'style' => '',
			'name'  => __( 'Jhon Doe', 'tevent' ),
			'title' => '',
			'photo' => 0,
			// social links
			'facebook'      => '',
			'twitter'       => '',
			'googleplus'    => '',
			'linkedin'      => '',
			'dribbble'      => '',
			'github'        => '',
			'flickr'        => '',
			'soundcloud'    => '',
			'behance'       => '',
			'deviantart'    => '',
			'youtube'       => '',
			'pinterest'     => '',
			'instagram'     => '',
			'stackoverflow' => '',
			'web'           => '',
			'email'         => '',
			);

		$atts = shortcode_atts( $defaults, $atts );
		$view = ( 'details' === $atts['style'] ? 'classic' : 'grid' );
		$view = $this->get_view( $view );
		$id   = uniqid();

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Member;
