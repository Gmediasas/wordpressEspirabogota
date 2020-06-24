<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tevent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_template_part( 'partials/block', 'title' ); ?>

	<?php get_template_part( 'partials/format', get_post_format() ); ?>

	<div class="entry-content b-txt">
		<?php the_excerpt(); ?>

		<?php if ( get_the_excerpt() ) : ?>
		<p class="u-MarginTop35 u-MarginBottom0">
			<a class="btn-go default-color" rel="bookmark" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue Reading', 'tevent' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
		</p>
		<?php endif; ?>
		
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<hr class="u-MarginTop100 u-xs-MarginTop30 u-MarginBottom100 u-xs-MarginBottom30">
