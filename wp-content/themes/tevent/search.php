<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Tevent
 */

get_header();
		
	get_template_part( 'partials/blog', 'header' ); ?>

	<div id="primary" class="content-area container u-MarginTop100 u-xs-MarginTop30">
		<div class="row">
			<main id="main" class="site-main <?php echo tevent_get_blog_class( 'main' ) ?>" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'partials/content', 'has' );

				endwhile;

				tevent_pagination();

			else :

				get_template_part( 'partials/content', 'none' );

			endif; ?>

			</main><!-- #main -->

			<?php get_sidebar(); ?>
			
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
