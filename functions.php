<?php
/**
 * Geeklove Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Geeklove Child 1.0
 */

/**
 * Include child theme styles.
 *
 * @return void
 */
function geeklove_child_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'stag-style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'geeklove-child-style', get_stylesheet_uri(), array( 'stag-style' ), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'geeklove_child_styles' );
