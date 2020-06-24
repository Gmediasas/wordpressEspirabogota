<?php

class Tevent_Walker_Comment extends Walker_Comment {

	/**
	 * Outputs a comment in the HTML5 format.
	 *
	 * @since 3.6.0
	 * @access protected
	 *
	 * @see wp_list_comments()
	 *
	 * @param WP_Comment $comment Comment to display.
	 * @param int        $depth   Depth of the current comment.
	 * @param array      $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
	?>
		<<?php echo esc_attr( $tag ); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?>>
			<article id="div-comment-<?php comment_ID(); ?>" class="comment-body media u-MarginBottom50">
				<div class="pull-left comment-author vcard">
					<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'], '', '', array( 'class' => 'media-object u-Rounded' ) ); ?>
				</div><!-- .comment-author -->

				<div class="media-body">
					<div class="u-MarginBottom10 clearfix">
						<div class="text-uppercase u-Weight600">
							<?php printf( '<b class="fn">%s</b>', get_comment_author_link( $comment ) ); ?>
							<?php edit_comment_link( esc_html__( 'Edit', 'tevent' ), '<span class="edit-link pull-right u-Weight400 text-capitalize">', '</span>' ); ?>
						</div>
						<a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
							<time datetime="<?php comment_time( 'c' ); ?>">
								<?php
									/* translators: 1: comment date, 2: comment time */
									printf( esc_html__( '%1$s at %2$s', 'tevent' ), get_comment_date( '', $comment ), get_comment_time() );
								?>
							</time>
						</a>
						<?php
						comment_reply_link( array_merge( $args, array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<span class="reply pull-right"><i class="fa fa-comment-o"></i> ',
							'after'     => '</span>'
						) ) );
						?>
					</div>

				    <?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'tevent' ); ?></p>
					<?php endif; ?>

					<div class="comment-content text-gray">
						<?php comment_text(); ?>
					</div><!-- .comment-content -->
				</div>
			</article><!-- .comment-body -->
<?php
	}
}
