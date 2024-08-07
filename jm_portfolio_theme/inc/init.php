<?php

add_action( 'init', '_register_theme_menus' );


/**
 * A function to register menus
 *
 * @return void
 */

function _register_theme_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

/**
 * Add custom class to menu items
 * 
 */

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args) {
  return array();
}

add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
  return "";
}

function add_custom_class_to_li($classes, $item, $args) {
  if( 'header-menu' === $args->theme_location ) {
    $classes[] = "smooth-menu";
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'add_custom_class_to_li', 10, 4);

add_filter('nav_menu_item_id', '__return_false');