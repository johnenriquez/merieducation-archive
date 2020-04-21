<?php
/**
 * Functions related to admin/wp packend
 *
 * @package meri2015
 */


//* Unregister secondary navigation menu
// I prefer that there's only one menu location
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'genesis' ) ) );

//* Remove the default genesis sidebars
unregister_sidebar( 'header-right' );
unregister_sidebar( 'sidebar' );
unregister_sidebar( 'sidebar-alt' );

//* Remove Genesis in-post Scripts Metabox
remove_post_type_support( 'post', 'genesis-scripts' );
remove_post_type_support( 'page', 'genesis-scripts' );

//* Remove Genesis in-post Layout Settings
remove_theme_support( 'genesis-inpost-layouts' );

//* Remove Genesis in-post SEO Settings
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

//* Unregister Genesis Templates
add_filter( 'theme_page_templates', 'remove_genesis_page_templates' );
function remove_genesis_page_templates( $page_templates ) {
  unset( $page_templates['page_archive.php'] );
  unset( $page_templates['page_blog.php'] );
  return $page_templates;
}

// disable WP Core automatic updates
define( 'AUTOMATIC_UPDATER_DISABLED', true );

// Prevent File Modifications
define ( 'DISALLOW_FILE_EDIT', true );

// Disables plugin uploads, as well as theme editor and automatic updates
// define( 'DISALLOW_FILE_MODS', true );

if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'interest-slide', 99999, 100 ); //100 pixels tall (and unlimited width)
}

//* Hide Editor on specific pages
//add_action( 'init', 'remove_editor_init' );
function remove_editor_init() {
  // If not in the admin, return.
  if ( ! is_admin() )
    return;

  // Get the post ID on edit post with filter_input super global inspection.
  $current_post_id = filter_input( INPUT_GET, 'post', FILTER_SANITIZE_NUMBER_INT );
  // Get the post ID on update post with filter_input super global inspection.
  $update_post_id = filter_input( INPUT_POST, 'post_ID', FILTER_SANITIZE_NUMBER_INT );

  // Check to see if the post ID is set, else return.
  if ( isset( $current_post_id ) ) {
    $post_id = absint( $current_post_id );
  } else if ( isset( $update_post_id ) ) {
    $post_id = absint( $update_post_id );
  } else {
    return;
  }

  // Don't do anything unless there is a post_id.
  if ( isset( $post_id ) ) {
    // Get the template of the current post.
    $template_file = get_post_meta( $post_id, '_wp_page_template', true );

    // Example of removing page editor for page-your-template.php template.

    // Define which templates not to show
    $page_template_array = array(
      // "template-homepage.php",
      // "template-about.php",
      // "template-products.php"
    );

    if ( in_array( $template_file, $page_template_array, true ) ) {
      remove_post_type_support( 'page', 'editor' );
      // Other features can also be removed in addition to the editor. See: https://codex.wordpress.org/Function_Reference/remove_post_type_support.
    }
  }
}