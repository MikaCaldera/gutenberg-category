<?php
/**
 * Plugin Name: Rebel Category for Blocks
 * Plugin URI:
 * Description: Plugin to add a custom block type for Gutenburg Blocks Category
 * Version: 1.0
 * Author: Mika Caldera
 * Author URI:
 */

 // Adds functionality of a block category -

 /**
 * Custom Rebel Block Category
 */
add_filter('block_categories', function ($categories, $post) {
  return array_merge(
      $categories,
      array(
          array(
              'slug' => 'rebel',
              'title' => __('Custom Rebel', 'rebel'),
          ),
      )
  );
}, 1, 2);
