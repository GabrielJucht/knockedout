<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/*SACAR CATEGORY:*/

function filter_category_title($title) {
  return str_replace('Category: ', '', $title);

}

add_filter('get_the_archive_title', __NAMESPACE__ . '\\filter_category_title');

/*SACAR CATEGORIA*/

function filter_categoria_title($title) {
  return str_replace('Categoria: ', '', $title);

}

add_filter('get_the_archive_title', __NAMESPACE__ . '\\filter_categoria_title');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <br /><a href="' . get_permalink() . '">' . __('Ver más', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

