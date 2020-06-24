<?php
/**
 * Tevent session shortcode
 *
 * @package Tevent_Helper
 * @author ThemeBucket <themebucket@gmail.com>
 */

class Tevent_Session extends Tevent_Shortcode {

	/**
	 * Set shortcode tag
	 * @var string
	 */
	protected $tag = 'tb_session';

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
			'name'     => esc_html__( 'Session', 'tevent' ),
			'base'     => $this->get_tag(),
			'category' => esc_html__( 'Tevent', 'tevent' ),
			'icon'     => $this->get_icon('session'),
			'params'   => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__( 'Style', 'tevent' ),
					'param_name'  => 'style',
					'description' => esc_html__( 'Select a session display style', 'tevent' ),
					'value'       => array(
						esc_html__( 'Tab', 'tevent' ) => 'tab',
						esc_html__( 'Timeline', 'tevent' ) => 'timeline',
						)
					),
				array(
					'type'        => 'param_group',
					'heading'     => esc_html__( 'Sessions List', 'tevent' ),
					'description' => esc_html__( 'Create session list item by clicking on add button', 'tevent' ),
					'param_name'  => 'content',
					'params'      => array(
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Day Label', 'tevent' ),
							'param_name'  => 'label',
							'description' => esc_html__( 'Set label name', 'tevent' ),
							'value'       => esc_html__( 'Day 1', 'tevent' ),
							),
						array(
							'type'        => 'textfield',
							'heading'     => esc_html__( 'Label Description', 'tevent' ),
							'param_name'  => 'desc',
							'description' => esc_html__( 'Set label description', 'tevent' ),
							'value'       => esc_html__( '15 Dec, 2017', 'tevent' ),
							),
						array(
							'type'        => 'autocomplete',
							'heading'     => esc_html__( 'Sessions', 'tevent' ),
							'param_name'  => 'ids',
							'description' => esc_html__( 'Type session name then select from suggestions. You can select multiple items and sort them.', 'tevent' ),
							'settings'    => array(
								'multiple' => true,
								'sortable' => true,
								'no_hide'  => false,
								'values'   => $this->get_sessions(),
								)
							),
						)
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Session Column', 'tevent' ),
					'param_name'  => 'label_sessions',
					'description' => esc_html__( 'Add session column heading', 'tevent' ),
					'value'       => esc_html__( 'Session', 'tevent' ),
					'group'       => esc_html__( 'Column Headings', 'tevent' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array('tab')
						)
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Speakers Column', 'tevent' ),
					'param_name'  => 'label_speakers',
					'description' => esc_html__( 'Add speakers column heading', 'tevent' ),
					'value'       => esc_html__( 'Speakers', 'tevent' ),
					'group'       => esc_html__( 'Column Headings', 'tevent' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array('tab')
						)
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Time Column', 'tevent' ),
					'param_name'  => 'label_time',
					'description' => esc_html__( 'Add time column heading', 'tevent' ),
					'value'       => esc_html__( 'Time', 'tevent' ),
					'group'       => esc_html__( 'Column Headings', 'tevent' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array('tab')
						)
					),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Vanue Column', 'tevent' ),
					'param_name'  => 'label_vanue',
					'description' => esc_html__( 'Add vanue column heading', 'tevent' ),
					'value'       => esc_html__( 'Vanue', 'tevent' ),
					'group'       => esc_html__( 'Column Headings', 'tevent' ),
					'dependency'  => array(
						'element' => 'style',
						'value'   => array('tab')
						)
					),
				)
			);
	}

	protected function get_sessions() {
		$args = array(
			'post_type'      => 'session',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
			);
		$out = array();

		$sessions = get_posts( $args );

		if ( ! empty( $sessions ) ) {
			foreach ( $sessions as $session ) {
				$out[] = array(
					'value' => $session->ID,
					'label' => $session->post_title,
					);
			}
		}
		wp_reset_postdata();

		return $out;
	}

	/**
	 * render this shortcode
	 * @param  array $atts
	 * @param  string $content
	 * @return string
	 */
	public function render( $atts, $content = null ) {
		$defaults = array(
			'style'          => '',
			'label_sessions' => __( 'Session', 'tevent' ),
			'label_speakers' => __( 'Speakers', 'tevent' ),
			'label_time'     => __( 'Time', 'tevent' ),
			'label_vanue'    => __( 'Vanue', 'tevent' ),
			);

		$atts = shortcode_atts( $defaults, $atts );

		$view = ( 'timeline' === $atts['style'] ? 'timeline' : 'tab' );
		$view = $this->get_view( $view );

		ob_start();
		if ( file_exists( $view ) ) {
			include( $view );
		}
		return ob_get_clean();
	}

}

new Tevent_Session;
