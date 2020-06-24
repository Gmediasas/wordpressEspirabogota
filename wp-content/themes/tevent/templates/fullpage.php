<?php
/**
 * Template Name: Full Page
 *
 * @package Tevent
 */

get_header(); ?>

	<?php
	tevent_page_start();

		while ( have_posts() ) : the_post();

			get_template_part( 'partials/content', 'page' );

		endwhile; // End of the loop.
		
	tevent_page_end();
	?>	

<?php get_footer(); ?>
