<?php

/***
 *  Theme Functions - Add your custom functions here
 */

 /** Create a new Page in the Admin */
 if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Global Options',
		'menu_title'	=> 'Global Options',
		'menu_slug' 	=> 'global-options',
		'capability'	=> 'manage_options',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Submenu #1',
	// 	'menu_title'	=> 'Submenu #1',
	// 	'parent_slug'	=> 'global-options',
	// ));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Submenu #2',
	// 	'menu_title'	=> 'Submenu #2',
	// 	'parent_slug'	=> 'global-options',
	// ));
	
}

// Remove default editor
add_action('init', 'init_remove_support', 100);

function init_remove_support() {
	remove_post_type_support('post', 'editor');
	remove_post_type_support('page', 'editor');
}

// Add feature image to pages
add_theme_support('post-thumbnails', array('page'));

// Add custom image size
add_image_size('portfolio', 370, 220, true);