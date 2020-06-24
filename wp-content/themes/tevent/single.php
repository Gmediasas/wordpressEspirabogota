<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tevent
 */

get_header(); ?>

	<!-- start-->
	<div id="primary" class="container u-PaddingTop100 u-xs-PaddingTop50">
		<div class="row">
			<main id="main" class="site-main <?php echo tevent_get_blog_class( 'main' ) ?>" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'partials/content', 'details' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->

			<?php get_sidebar(); ?>
			
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
