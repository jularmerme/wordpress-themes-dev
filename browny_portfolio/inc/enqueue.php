<?php

/***
 * Enqueue all styles and scripts
 */

 function base_scripts() {
  global $wp_scripts;

  // Enqueue main style.css
  $_STYLE_CSS = asset_file_name('style.css');

  wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery.js'), array('jquery'), '1.1', true);
  wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array('jquery'), '1.1', true);
  wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), '1.1', true);
  wp_enqueue_script('jquerysticky', get_theme_file_uri('/assets/js/jquery.sticky.js'), array('jquery'), '1.1', true);
  wp_enqueue_script('progressbar', get_theme_file_uri('/assets/js/progressbar.js'), array('jquery'), '1.1', true);
  wp_enqueue_script('appear', get_theme_file_uri('/assets/js/jquery.appear.js'), array('jquery'), '1.1', true);
  wp_enqueue_script('carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery'), '1.1', true);
  wp_enqueue_script('custom', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('jqueryeasing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), '1.1', true);

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext');
  wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/font-awesome.min.css'));
  wp_enqueue_style('flaticon', get_theme_file_uri('/assets/css/flaticon.css'));
  wp_enqueue_style('animate', get_theme_file_uri('/assets/css/animate.css'));
  wp_enqueue_style('owl-carousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'));
  wp_enqueue_style('owl-theme', get_theme_file_uri('/assets/css/owl.theme.default.min.css'));
  wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'));
  wp_enqueue_style('bootsnav', get_theme_file_uri('/assets/css/bootsnav.css'));
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/' . $_STYLE_CSS, null, null);
  wp_enqueue_style('responsive', get_theme_file_uri('/assets/css/responsive.css'));


 }

 add_action('wp_enqueue_scripts', 'base_scripts');