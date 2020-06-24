<?php

function tevent_supported_social_media_for_member() {
	$media = array(
		'facebook'      => 'facebook',
		'twitter'       => 'twitter',
		'googleplus'    => 'google-plus',
		'linkedin'      => 'linkedin',
		'dribbble'      => 'dribbble',
		'github'        => 'github',
		'flickr'        => 'flickr',
		'soundcloud'    => 'soundcloud',
		'behance'       => 'behance',
		'deviantart'    => 'deviantart',
		'youtube'       => 'youtube',
		'skype'         => 'skype',
		'pinterest'     => 'pinterest',
		'instagram'     => 'instagram',
		'stackoverflow' => 'stack-overflow',
		'web'           => 'globe',
		'email'         => 'envelope-o',
	);

	return apply_filters( 'tevent_supported_social_media_for_member', $media );
}

function tevet_member_social_media( $atts, $is_popup = false ) {
	if ( ! is_array( $atts ) || empty( $atts ) ) {
		return;
	}

	$link_html = '';
	foreach ( tevent_supported_social_media_for_member() as $key => $icon ) {
		if ( empty( $atts[$key] ) ) {
			continue;
		}

		$link_html .= sprintf( '<a class="text-muted" href="%s"><i class="fa fa-%s" aria-hidden="true"></i></a>',
			esc_url( $atts[$key] ),
			$icon
			);
	}

	if ( empty( $link_html ) ) {
		return;
	}

	if ( $is_popup ) : ?>
		<div class="u-MarginTop30 u-MarginBottom30 social-links sl-default border-link round-link text-center">
			<?php echo $link_html; ?>
		</div>
	<?php else : ?>
		<p class="u-MarginTop20 u-MarginBottom20 Anchors">
			<?php echo $link_html; ?>
		</p>
	<?php endif;
}
