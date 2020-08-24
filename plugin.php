<?php
/**
 * Plugin Name: Gutenburg Category for Blocks
 * Plugin URI:
 * Description: Plugin to add a custom block type for Gutenburg Blocks Category
 * Version: 1.0
 * Author: Mika Caldera
 * Author URI: https://www.mikacaldera.com/
 */

 // Adds functionality of a block category -

 /**
 * Custom Gutenburg Block Category
 */
add_filter('block_categories', function ($categories, $post) {
  return array_merge(
      $categories,
      array(
          array(
              'slug' => 'custom',
              'title' => __('Custom', 'custom'),
          ),
      )
  );
}, 1, 2);
