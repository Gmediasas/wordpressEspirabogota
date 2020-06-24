<?php
if ( empty( $content ) ) {
	return;
} ?>
<div class="panel-group" id="<?php echo $id; ?>">
	<?php
		$items = Tevent_Util::parse_group_atts( $content );

		foreach ( $items as $item_key => $item ) :
			if ( ! isset( $item['title'] ) || empty( $item['title'] ) ) {
				continue;
			}
			$desc = isset( $item['desc'] ) ? $item['desc'] : __( 'Add item description.', 'tevent' );
			$hid = $id . '_H_' . ( $item_key + 1 );
			$did = $id . '_D_' . ( $item_key + 1 );
			$open = 'collapse';
			$expanded = 'false';
			if ( isset( $item['open'] ) && 'true' === $item['open'] ) {
				$open = 'collapse in';
				$expanded = 'true';
			} ?>
			<div class="panel <?php echo $style; ?>">
				<div class="panel-heading" id="<?php echo $hid; ?>">
					<div class="panel-title">
						<a data-toggle="collapse" data-parent="#<?php echo $id; ?>" href="#<?php echo $did; ?>" aria-expanded="<?php echo $expanded; ?>" aria-controls="<?php echo $did; ?>" class="collapsed"><?php echo esc_html( $item['title'] ); ?></a>
					</div>
				</div>
				<div id="<?php echo $did; ?>" class="panel-collapse <?php echo $open; ?>" role="tabpanel" aria-labelledby="<?php echo $hid; ?>" aria-expanded="<?php echo $expanded; ?>">
					<div class="panel-body">
						<?php echo wp_kses_post( wpautop( $desc ) ); ?>
					</div>
				</div>
			</div>
	<?php endforeach; ?>
</div>
