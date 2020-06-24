<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tevent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'partials/block', 'title' ); ?>

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="b-thumb u-MarginBottom30">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php endif; ?>

	<div class="entry-content b-txt">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tevent' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer>
		<?php the_tags( '<div class="entry-tags">', '', '</div>' ); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
