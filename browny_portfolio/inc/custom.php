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