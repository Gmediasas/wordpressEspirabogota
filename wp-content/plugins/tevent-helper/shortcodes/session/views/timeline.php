<?php
$items = Tevent_Util::parse_group_atts( $content );

if ( ! empty( $items ) ) :
	$args = array(
		'post_type'      => 'session',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'orderby'        => 'post__in',
		);

	foreach ( $items as $item ) :
		$tab_label = isset( $item['label'] ) ? $item['label'] : '';
		$tab_desc  = isset( $item['desc'] ) ? $item['desc'] : '';
		$tab_ids   = isset( $item['ids'] ) ? $item['ids'] : '';
		?>

		<div>
			<div class="text-center">
				<h2 class="u-MarginBottom0"><?php echo esc_html( $tab_label ); ?></h2>
				<p><?php echo esc_html( $tab_desc ); ?></p>
			</div>
			<div class="u-PaddingTop90 u-MarginTop20"></div>
			<div class="Timeline">
			<?php
			$ids = explode( ',', $tab_ids );

			if ( ! empty( $ids ) ) :
				$args['include'] = $ids;
				$sessions = get_posts( $args );

				foreach ( $sessions as $skey => $session ) :			
					$speaker    = get_post_meta( $session->ID, 'tevent_session_speaker', true );
					$time       = get_post_meta( $session->ID, 'tevent_session_time', true );
					$vanue      = get_post_meta( $session->ID, 'tevent_session_vanue', true );
					?>
					
					<div class="Timeline__item">
						<h4 class="u-MarginTop0 u-MarginBottom0"><a href="#<?php echo sanitize_html_class( $speaker ); ?>"><?php echo esc_html( $speaker ); ?></a></h4>
						<h5 class="u-MarginTop10"><?php echo esc_html( $time ); ?> <span class="u-Padding10">|</span> <?php echo esc_html( $vanue ); ?></h5>
						<h3 class="u-MarginTop0 u-MarginBottom10"><?php echo esc_html( $session->post_title ); ?></h3>
						<div>
							<?php echo wp_kses_post( wpautop( $session->post_content ) ); ?>
						</div>
					</div>

				<?php
				endforeach;
			endif;
			?>

			</div>
		</div>

		<?php
	endforeach;
endif;
