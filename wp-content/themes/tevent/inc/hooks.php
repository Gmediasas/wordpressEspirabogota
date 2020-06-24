<?php
/**
 * Add custom post classes
 * @param  array $classes  Array of classes
 * @return arary          Modified array of classes
 */
function tevent_add_post_class( $classes ) {
	if ( 'post' === get_post_type() ) {
		$classes[] = 'blog-post clearfix';
	}
	return $classes;
}
add_filter( 'post_class', 'tevent_add_post_class' );

/**
 * Change comment form fields html
 * @param  array $fields Form fields
 * @return array         Modified form fields
 */
function tevent_change_comment_form_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? " aria-required='true'" : '' );
	$html_req  = ( $req ? " required='required'" : '' );
	$fields    = array(
		'author' => '<div class="row"><div class="comment-form-author form-group col-sm-6">' . '<label class="sr-only" for="author">' . esc_html__( 'Name', 'tevent' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
					'<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' placeholder="' . esc_attr__( 'Name*', 'tevent' ) . '" /></div>',
		'email'  => '<div class="comment-form-email form-group col-sm-6"><label class="sr-only" for="email">' . esc_html__( 'Email', 'tevent' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
					'<input id="email" class="form-control" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' placeholder="' . esc_attr__( 'Email*', 'tevent' ) . '" /></div>',
		'url'    => '<div class="comment-form-url form-group col-sm-12"><label class="sr-only" for="url">' . esc_html__( 'Website', 'tevent' ) . '</label> ' .
					'<input id="url" class="form-control" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" placeholder="' . esc_attr__( 'Website', 'tevent' ) . '" /></div></div>',
	);
	return $fields;
}

add_filter( 'comment_form_default_fields', 'tevent_change_comment_form_fields' );

/**
 * Set comment form arguments to fit our needs
 * @param  array $args Default arguments
 * @return array       Modified arguments
 */
function tevent_set_comment_form_params( $args ) {
	return array_merge( $args, array(
		'class_form'           => 'comment-form u-MarginTop50 u-MarginBottom50',
		'title_reply_before'   => '<h4 id="reply-title" class="comment-reply-title">',
		'title_reply_after'    => '</h4><hr>',
		'title_reply'          => esc_html__( 'Leave a Comment', 'tevent' ),
		'title_reply_to'       => esc_html__( 'Leave a Comment for %s', 'tevent' ),
		'class_submit'         => 'submit btn btn-primary btn-block',
		'submit_field'         => '<div class="form-submit form-field">%1$s %2$s</div>',
		'comment_field'        => '<div class="comment-form-comment form-group"><label class="sr-only" for="comment">' . esc_html_x( 'Comment', 'noun', 'tevent' ) . '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required" placeholder="' . esc_attr__( 'Your comment*', 'tevent' ) . '"></textarea></div>',
	) );
}
add_filter( 'comment_form_defaults', 'tevent_set_comment_form_params' );

// Remove default excerpt more text
add_filter( 'excerpt_more', '__return_empty_string' );

/**
 * Set comment textarea to the bottom of comment form
 * only works with WordPress version >= 4.4
 * @param array $fields Comment form inputs
 */
function tevent_change_comment_textarea_position( $fields ) {
	$comment = array( 'comment' => $fields['comment'] );
	return array_merge( array_diff_key( $fields, $comment), $comment );
}
add_filter( 'comment_form_fields', 'tevent_change_comment_textarea_position' );

/**
 * Add button class to previous post link
 * @return string
 */
function tevent_add_previous_post_link_class() {
	return 'class="btn btn-sm btn-creative btn-creative--prev text-uppercase"';
}
add_filter( 'previous_posts_link_attributes', 'tevent_add_previous_post_link_class' );

/**
 * Add button class to next post link
 * @return string
 */
function tevent_add_next_post_link_class() {
	return 'class="btn btn-sm btn-creative btn-creative--next text-uppercase"';
}
add_filter( 'next_posts_link_attributes', 'tevent_add_next_post_link_class' );

/**
 * Modified post password markup
 * @return string
 */
function tevent_protected_password_form() {
    global $post;
    $label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );
    $output = '<form class="form-inline" action="'. esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) .'" method="post">'
        . '<p>' . esc_html__( 'This content is password protected. To view it please enter your password below:', 'tevent' ) . '</p>'
        . '<div class="form-group">'
            . '<label class="screen-reader-text" for="' . esc_attr( $label ) . '">' . esc_html_x( 'Password', 'post password form', 'tevent' ) . '</label>'
            . ' <input class="form-control" id="' . esc_attr( $label ) . '" placeholder="' . esc_attr_x( 'Password', 'post password form', 'tevent' ) . '" name="post_password" type="password">'
        . ' <input type="submit" name="Submit" class="btn btn-primary" value="' . esc_html_x( 'Submit', 'post password form', 'tevent' ) .'"></div>'
    . '</form>';

    return $output;
}

add_filter( 'the_password_form', 'tevent_protected_password_form' );