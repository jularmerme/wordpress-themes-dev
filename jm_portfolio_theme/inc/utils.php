<?php

/**
 * Utility Functions
 */

 /**
 * Gets the file name with hash tag from manifest json file
 *
 * @param  string  $filename
 * @return string
 */
function asset_file_name($filename) {
  $manifest_path = get_stylesheet_directory() . '/dist/manifest.json';

  if (file_exists($manifest_path)) {
    $manifest = json_decode(file_get_contents($manifest_path), TRUE);
  } else {
    $manifest = [];
  }

  if (array_key_exists($filename, $manifest)) {
      return $manifest[$filename];
  }

  return $filename;
}

/**
 * Get a template component
 *
 * @param string $component_slug The template name
 */
function get_theme_component( $component_slug ) {
  if ($component_slug !== "") {
    global $base;
    get_template_part( "$base/pages/components/$component_slug" );
  }
}

// Better Debugging
function printr($var) {
  echo '<pre>'; print_r($var); echo '</pre>';
};