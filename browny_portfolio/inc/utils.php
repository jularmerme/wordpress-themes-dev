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