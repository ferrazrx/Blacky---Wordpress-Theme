<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Ferraz_lab05
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ferraz_lab05_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
		$classes[] = 'archive-view';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	//Add a class to let us know wether the sidebar is active
	if( is_active_sidebar( 'sidebar-1' )){
		$classes[] = 'has-sidebar';
	}else{
		$classes[] = 'no-sidebar';
	}

	if( is_active_sidebar( 'sidebar-3' )){
		$classes[] = 'has-category-widget';
	}else{
		$classes[] = 'no-category-widget';
	}

	//Add classes if the page is a category page
	if( is_category('uncategorized')){
		$classes[] = 'uncategorized-categories';

		// remove class has-sidebar from this category page
		$key = array_search('has-sidebar', $classes);
		array_splice($classes, $key, 1);

		// remove class has-category-widget from this category page
		$key = array_search('has-category-widget', $classes);
		array_splice($classes, $key, 1);
	}else{
		$classes[] = 'no-category';
	}

	//Add classes if the page is a category page
	if( is_category()){
		$classes[] = 'categories';
		// remove class has-sidebar from this category page
		$key = array_search('has-sidebar', $classes);
		array_splice($classes, $key, 1);
	}else{
		$classes[] = 'no-category';
	}

	return $classes;
}
add_filter( 'body_class', 'ferraz_lab05_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ferraz_lab05_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'ferraz_lab05_pingback_header' );
