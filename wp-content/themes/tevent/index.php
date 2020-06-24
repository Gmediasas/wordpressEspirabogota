<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tevent
 */

get_header();

	
	get_template_part( 'partials/blog', 'header' ); ?>
	<?php
session_start();
?>
	<?php if(isset($_SESSION['token'])) {?>
    <script>
        jQuery('#menu-item-976').css('display','none');
        jQuery('#menu-item-977').css('display','none');
    </script>

    <?php if($_SESSION['user']['idRol'] == 1) {?>
        <script>
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Ver Agenda" href="agenda-general/">Ver Agenda</a></li>')
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
        </script>
    <?php }elseif($_SESSION['user']['idRol'] == 4) {?>
        <script>
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Ver Agenda" href="agenda-empresa/">Ver Agenda</a></li>')
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
        </script>

    <?php }else{ ?>
        <script>
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Ver Agenda" href="mi-agenda/" >Ver Agenda</a></li>')
            jQuery('#menu-primary').append('<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a title="Cerrar Sesión" href="../wp-content/themes/tevent/login/api/logout.php">Cerrar Sesión</a></li>')
        </script>
    <?php } ?>

<?php }else{ ?>
    <script>
        jQuery('#menu-item-976').css('display','block');
        jQuery('#menu-item-977').css('display','block');
    </script>
<?php } ?>

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
