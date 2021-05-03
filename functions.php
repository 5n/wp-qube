<?php
/**
 * Functions and definitions
 *
 * @package Qube
 */

if (!function_exists('qube_theme_setup')) {
  /**
   * Sets up theme defaults and registers support for various WordPress features.
  */
  function qube_theme_setup() {
    // Make theme available for translation.
    //load_theme_textdomain('qube', get_template_directory().'/languages');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    //set_post_thumbnail_size(480, 252, true);

    // Add support for block styles.
    add_theme_support('wp-block-styles');

    // Add support for editor styles.
    add_theme_support('editor-styles');

    // Enqueue editor styles.
    add_editor_style([
			'./assets/build/blocks.css',
			'./assets/build/editor-style.css'
    ]);

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');

    // Remove support for core block patterns.
    remove_theme_support('core-block-patterns');
  }
}
add_action('after_setup_theme', 'qube_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function qube_theme_scripts() {
  wp_enqueue_style('qube-style', get_template_directory_uri().'/assets/build/style.css', [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'qube_theme_scripts');
