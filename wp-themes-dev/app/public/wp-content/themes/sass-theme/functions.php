<?php
/**
 * SASS Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SASS Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_SASS_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'sass-theme-theme-css', get_stylesheet_directory_uri() . '/dist/style.css', array('astra-theme-css'), CHILD_THEME_SASS_THEME_VERSION, 'all' );
	wp_enqueue_script("some-unique-handler", get_stylesheet_directory_uri() . '/dist/app.js', ["jquery"], true);

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );