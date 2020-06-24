<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Tevent
 */

if ( ! function_exists( 'tevent_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function tevent_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

	$byline = sprintf(
		esc_html_x( 'By %s', 'post author', 'tevent' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="byline"> ' . $byline . '</span> | <span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
}
endif;

if ( ! function_exists( 'tevent_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function tevent_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'tevent' ) );
		if ( $categories_list && tevent_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'tevent' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'tevent' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'tevent' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'tevent' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'tevent' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function tevent_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'tevent_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'tevent_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so tevent_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so tevent_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in tevent_categorized_blog.
 */
function tevent_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'tevent_categories' );
}
add_action( 'edit_category', 'tevent_category_transient_flusher' );
add_action( 'save_post',     'tevent_category_transient_flusher' );

/**
 * Print navbar classes
 * @return void
 */
function tevent_navbar_class() {
	$defaults = 'navbar navbar-default navbar-fixed no-background bootsnav';

	if ( is_page() && 'white' === get_post_meta( get_queried_object_id(), 'tevent_page_navbar_color', true ) ) {
		$defaults .= ' white';
	} elseif ( ( is_home() || is_archive() || is_search() ) && 'white' === Tevent::get_option( 'blog_navbar_color' ) ) {
		$defaults .= ' white';
	}

	echo esc_attr( $defaults );
}

/**
 * Custom category list function
 * @param  int $id     Optional post id, default to current
 * @param  string $sep
 * @return void
 */
function tevent_the_category( $id, $sep = ', ' ) {
	$categories = get_the_category( $id );

	$cats = array();
	if ( ! empty( $categories ) ) {
		foreach ( $categories as $category ) {
			$cats[] = sprintf( '<a class="default-color" href="%s">%s</a>',
				esc_url( get_category_link( $category->term_id ) ),
				esc_html( $category->name )
				);
		}
	}
	echo implode( $sep, $cats );
}

function tevent_breadcrumb() {
	echo breadcrumb_trail();
}

function tevent_header_logo() {
	$logo = Tevent::get_option( 'logo' );
	$logo_retina = Tevent::get_option( 'logo_retina' );
	$logo_sticky = Tevent::get_option( 'logo_sticky' );
	$logo_sticky_retina = Tevent::get_option( 'logo_sticky_retina' );
	$logo = wp_get_attachment_image_url( $logo, 'full' );
	$logo_retina = wp_get_attachment_image_url( $logo_retina, 'full' );
	$logo_sticky = wp_get_attachment_image_url( $logo_sticky, 'full' );
	$logo_sticky_retina = wp_get_attachment_image_url( $logo_sticky_retina, 'full' );

	$logo_sticky_img = $logo_sticky ? sprintf( '<img src="%s" data-retina="%s" class="logo logo-display" alt="%s">',
			esc_url( $logo_sticky ),
			$logo_sticky_retina ? esc_url( $logo_sticky_retina ) : '',
			esc_attr( get_bloginfo( 'name' ) )
			) : '';

	if ( is_page() && 'white' !== get_post_meta( get_queried_object_id(), 'tevent_page_navbar_color', true ) ) {
		echo $logo_sticky_img;
	} elseif ( ( is_home() || is_archive() || is_search() ) && 'white' !== Tevent::get_option( 'blog_navbar_color' )  ) {
		echo $logo_sticky_img;
	} elseif ( is_single() && 'post' === get_post_type( get_queried_object_id() ) ) {
		echo $logo_sticky_img;
	} elseif ( is_404() ) {
		echo $logo_sticky_img;
	} elseif ( $logo ) {
		printf( '<img src="%s" data-retina="%s" class="logo logo-display" alt="%s">',
			esc_url( $logo ),
			$logo_retina ? esc_url( $logo_retina ) : '',
			esc_attr( get_bloginfo( 'name' ) )
			);
	}

	echo $logo_sticky ? sprintf( '<img src="%s" data-retina="%s" class="logo logo-scrolled" alt="%s">',
			esc_url( $logo_sticky ),
			$logo_sticky_retina ? esc_url( $logo_sticky_retina ) : '',
			esc_attr( get_bloginfo( 'name' ) )
			) : esc_html( get_bloginfo( 'name' ) );
}

function tevent_get_supported_social_media() {
	$media = array(
		'facebook' => array(
			'label' => __( 'Facebook', 'tevent' ),
			'icon'  => 'fa fa-facebook',
			'class' => '',
		),
		'twitter' => array(
			'label' => __( 'Twitter', 'tevent' ),
			'icon'  => 'fa fa-twitter',
			'class' => '',
		),
		'google_plus' => array(
			'label' => __( 'Google Plus', 'tevent' ),
			'icon'  => 'fa fa-google-plus',
			'class' => 'g-plus',
		),
		'youtube'  => array(
			'label' => __( 'Youtube', 'tevent' ),
			'icon'  => 'fa fa-youtube',
			'class' => '',
		),
		'dribbble' => array(
			'label' => __( 'Dribbble', 'tevent' ),
			'icon'  => 'fa fa-dribbble',
			'class' => '',
		),
		'behance'  => array(
			'label' => __( 'Behance', 'tevent' ),
			'icon'  => 'fa fa-behance',
			'class' => '',
		),
		'linkedin'  => array(
			'label' => __( 'LinkedIn', 'tevent' ),
			'icon'  => 'fa fa-linkedin',
			'class' => '',
		),
		'instagram'  => array(
			'label' => __( 'Instagram', 'tevent' ),
			'icon'  => 'fa fa-instagram',
			'class' => '',
		),
		'flickr'  => array(
			'label' => __( 'Flickr', 'tevent' ),
			'icon'  => 'fa fa-flickr',
			'class' => '',
		),
		'tumblr'  => array(
			'label' => __( 'Tumblr', 'tevent' ),
			'icon'  => 'fa fa-tumblr',
			'class' => '',
		),
		'pinterest'  => array(
			'label' => __( 'Pinterest', 'tevent' ),
			'icon'  => 'fa fa-pinterest',
			'class' => '',
		),
		'stack-overflow'  => array(
			'label' => __( 'Stack Overflow', 'tevent' ),
			'icon'  => 'fa fa-stack-overflow',
			'class' => '',
		),
	);

	return apply_filters( 'tevent_get_supported_social_media', $media );
}

function tevent_social_media( $position = 'header' ) {
	$links_html = '';

	foreach ( tevent_get_supported_social_media() as $key => $medium ) {
		$url = Tevent::get_option( 'social_' . $key );
		if ( empty( $url ) ) {
			continue;
		}

		$label = $medium['label'];
		$icon  = $medium['icon'];
		$class = ( ! empty( $medium['class'] ) ) ? $medium['class'] : $key;
		
		$links_html .= sprintf( '<a href="%s" title="%s" class="%s"><i class="%s"></i></a>',
			esc_url( $url ),
			esc_html( $label ),
			esc_attr( $class ),
			esc_attr( $icon )
			);
	}

	$wrapper_class = 'social-links sl-default border-link round-link colored-link';
	if ( 'footer' === $position ) {
		$wrapper_class = 'social-links sl-default light-link solid-link circle-link colored-hover';
	}

	if ( ! empty( $links_html ) ) : ?>
		<div class="<?php echo esc_attr( $wrapper_class ); ?>">
			<?php echo $links_html; ?>
		</div>
	<?php endif;
}

/**
 * Custom posts pagination
 * @return void
 */
function tevent_pagination() {
	global $wp_query;
	$number = sprintf( '<span class="u-PaddingRight50 u-PaddingLeft50 u-Weight800">%1$s/%2$s</span>', max( 1, get_query_var( 'paged' ) ), $wp_query->max_num_pages );

	if ( $wp_query->max_num_pages > 1 ) :
	?>

	<div class=" u-MarginTop150 u-MarginBottom100 u-FlexCenter">
		<?php
		previous_posts_link( sprintf( '<span class="arrow arrow-left"></span> %s', esc_html__( 'Previous', 'tevent' ) ) );
		echo $number; // WPCS: XSS OK.
		next_posts_link( sprintf( '%s <span class="arrow arrow-right"></span>', esc_html__( 'Next', 'tevent' ) ) );
		?>
	</div>

	<?php
	endif;
}

function tevent_get_blog_class( $col = 'main' ) {
	$layout = Tevent::get_option( 'blog_layout' );
	$map = array(
		'main'    => 'col-sm-8 u-PaddingRight100 u-xs-PaddingRight20',
		'sidebar' => 'col-sm-4',
		);

	switch ( $layout ) {
		case 'right':
			$map['main']    = 'col-sm-8 col-sm-push-4 u-PaddingLeft100 u-xs-PaddingLeft20';
			$map['sidebar'] = 'col-sm-4 col-sm-pull-8';
			break;

		case 'center':
			$map['main']    = 'col-md-8 col-md-offset-2';
			$map['sidebar'] = '';
	}

	return array_key_exists( $col, $map ) ? $map[$col] : $map['main']; // WPCS: XSS OK.
}

function tevent_has_sidenav() {
	return Tevent::get_option( 'is_sidenav_enabled' );
}

function tevent_has_sidenav_social() {
	return Tevent::get_option( 'is_sidenav_social_enabled' );
}

/**
 * Check whether visual composer enabled for current page or post
 * @return boolean
 */
function tevent_is_vc_active() {
	if ( is_singular() ) {
		/**
		 * _wpb_vc_js_status field stores false as string
		 */
		return 'true' === get_post_meta( get_queried_object_id(), '_wpb_vc_js_status', true ) ? true : false;
	}
	return false;
}

function tevent_page_start() {
	if ( ! tevent_is_vc_active() ) : ?>
	<!-- primary-->
	<div id="primary" class="container">
		<div class="row">
			<main id="main" class="site-main col-sm-12" role="main">

	<?php else : ?>

	<!-- primary-->
	<div id="primary">
		<main id="main" class="site-main" role="main">

	<?php endif;
}

function tevent_page_end() {
	if ( ! tevent_is_vc_active() ) : ?>

			</main>
		</div>
	</div><!-- #primary -->

	<?php else : ?>

		</main>
	</div><!-- #primary -->

	<?php endif;
}
