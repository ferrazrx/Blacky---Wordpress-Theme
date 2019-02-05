<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ferraz_lab05
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<aside id="sidebar-categories" class="widget-area sidebar-categories">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</aside><!-- #secondary -->