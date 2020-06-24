<?php
$items = Tevent_Util::parse_group_atts( $content );
if ( empty( $items ) ) {
	return;
}

$panels  = '';
$navs    = '';
$counter = 1;

$panel_string = <<<PANEL
<div role="tabpanel" class="tab-pane fade in %s" id="%s">
	<div class="text-lg u-LineHeight3 text-italic">%s</div>
</div>
PANEL;

$navs_string = <<<NAVS
<li role="presentation" class="%s">
	<a href="#%s" role="tab" data-toggle="tab">
		<div class="media u-OverflowVisible text-left">
			<div class="media-left media-middle u-PaddingRight15">
				<div class="Thumb Thumb--40px u-Rounded">
					<img class="img-responsive" src="%s" alt="%s">
				</div>
			</div>
			<div class="media-body media-middle text-italic">
				<h5 class="u-Margin0 u-Weight600">%s</h5>
				<p class="text-paragraph u-MarginBottom0 u-LineHeight1 u-MarginTop10">%s</p>
			</div>
		</div>
	</a>
</li>
NAVS;

foreach ( $items as $item ) :
	$id        = uniqid( 'Testimonial_' );
	$name      = isset( $item['name'] ) ? $item['name'] : '';
	$photo     = isset( $item['photo'] ) ? $item['photo'] : 0;
	$title     = isset( $item['title'] ) ? $item['title'] : '';
	$statement = isset( $item['statement'] ) ? $item['statement'] : '';
	$photo     = wp_get_attachment_image_url( $photo, 'thumbnail' );

	$panels .= sprintf( $panel_string,
		( $counter <= 1 ? 'active' : '' ),
		$id,
		wp_kses_post( $statement )
		);

	$navs .= sprintf( $navs_string,
		( $counter <= 1 ? 'active' : '' ),
		$id,
		esc_url( $photo ),
		esc_attr( $name ),
		esc_html( $name ),
		esc_html( $title )
		);

	++$counter;

endforeach; ?>

<div class="tab-testimonial">
	<div class="tab-content">
		<?php echo $panels; ?>
	</div>
	<div class="u-LineHeight0 h4 text-muted u-Block u-PaddingTop20 u-PaddingBottom20">
		·<br>·<br>·<br>·<br>·<br>·<br>·<br>·
	</div>
	<ul class="nav" role="tablist">
		<?php echo $navs; ?>
	</ul>
</div>
