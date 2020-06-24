<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tevent
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || ! tevent_get_blog_class( 'sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area <?php echo tevent_get_blog_class( 'sidebar' ); ?>" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
