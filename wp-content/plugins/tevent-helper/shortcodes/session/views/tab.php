<?php
$tab_head_templ = <<<TAB_ITEM
<li role="presentation" class="%s">
	<a href="#%s" role="tab" data-toggle="tab">
		<h2 class="u-Weight700 u-Margin0 text-uppercase">%s</h2>
		<p>%s</p>
	</a>
</li>
TAB_ITEM;

$table_head_templ = <<<TABLE_HEAD
<thead>
	<tr>
		<th>#</th>
		<th>%s</th>
		<th>%s</th>
		<th>%s</th>
		<th>%s</th>
	</tr>
</thead>
TABLE_HEAD;

$table_head = sprintf( $table_head_templ,
	esc_html( $atts['label_sessions'] ),
	esc_html( $atts['label_speakers'] ),
	esc_html( $atts['label_time'] ),
	esc_html( $atts['label_vanue'] )
	);

$tab_content_templ = <<<TAB_CONTENT
<div role="tabpanel" class="tab-pane fade in %s" id="%s">
	<div class="table-responsive">
		<table class="table table-striped table-bordered u-Margin0">
			{$table_head}
			<tbody>
				%s
			</tbody>
		</table>
	</div>
</div>
TAB_CONTENT;

$table_row_templ = <<<TABLE_ROW
<tr>
	<td>%s</td>
	<td>
		<a href="#%s" class="open-popup-link">%s</a>
		<div id="%s" class="white-popup mfp-hide">
			<h3 class="u-MarginTop10">%s</h3>
			<div>%s</div>
		</div>
	</td>
	<td><a href="#%s">%s</a></td>
	<td>%s</td>
	<td>%s</td>
</tr>
TABLE_ROW;

$items    = Tevent_Util::parse_group_atts( $content );
$tab_head = $tab_content = '';


if ( ! empty( $items ) ) :
	$args = array(
		'post_type'      => 'session',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'orderby'        => 'post__in',
		);

	foreach ( $items as $key => $item ) :
		$tab_label = isset( $item['label'] ) ? $item['label'] : '';
		$tab_desc  = isset( $item['desc'] ) ? $item['desc'] : '';
		$tab_ids   = isset( $item['ids'] ) ? $item['ids'] : '';
		$uid       = uniqid( 'Session' );
		$active    = ( $key < 1 ? 'active' : '' );
		$table_row = '';

		$tab_head .= sprintf( $tab_head_templ,
			$active,
			$uid,
			$tab_label,
			$tab_desc
			);

		$ids = explode( ',', $tab_ids );

		if ( ! empty( $ids ) ) :
			$args['include'] = $ids;
			$sessions = get_posts( $args );

			foreach ( $sessions as $skey => $session ) :
				$hyper_link = $uid . sanitize_html_class( $session->post_title );
				$title      = esc_html( $session->post_title );
				
				$speaker    = get_post_meta( $session->ID, 'tevent_session_speaker', true );
				$time       = get_post_meta( $session->ID, 'tevent_session_time', true );
				$vanue      = get_post_meta( $session->ID, 'tevent_session_vanue', true );

				$table_row .= sprintf( $table_row_templ,
					$skey + 1,
					$hyper_link,
					$title,
					$hyper_link,
					$title,
					wp_kses_post( wpautop( $session->post_content ) ),
					sanitize_html_class( $speaker ),
					esc_html( $speaker ),
					esc_html( $time ),
					esc_html( $vanue )
					);

			endforeach;
		endif;

		$tab_content .= sprintf( $tab_content_templ,
			$active,
			$uid,
			$table_row
			);

	endforeach;
endif;
?>
<ul class="nav nav-tabs nav-tabs-justified" role="tablist">
	<?php echo $tab_head; ?>
</ul>
<div class="tab-content u-BoxShadow100">
	<?php echo $tab_content; ?>
</div>
