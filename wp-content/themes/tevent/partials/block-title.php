<header class="entry-header b-title">
	<div class="b-categories">
		<?php tevent_the_category( get_the_ID() ); ?>
	</div>

	<?php
	if ( is_single() ) :
		the_title( '<h1 class="entry-title h2 u-MarginTop10 u-MarginBottom10">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title u-MarginTop10 u-MarginBottom10"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;
	?>

	<p class="u-MarginBottom30"><?php tevent_posted_on(); ?></p>
</header>
