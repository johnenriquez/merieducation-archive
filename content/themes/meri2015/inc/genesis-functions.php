<?php
/**
 * Extra Theme Functions
 *
 * not actually in use yet
 *
 * @package meri2015
 */

/****************************************
Backend Functions
*****************************************/



/**
 * Remove Genesis Theme Settings Metaboxes
 */
// function meri2015_remove_genesis_metaboxes( $_genesis_theme_settings_pagehook ) {
//   remove_meta_box( 'genesis-theme-settings-feeds',      $_genesis_theme_settings_pagehook, 'main' );
//   remove_meta_box( 'genesis-theme-settings-header',     $_genesis_theme_settings_pagehook, 'main' );
//   remove_meta_box( 'genesis-theme-settings-nav',        $_genesis_theme_settings_pagehook, 'main' );
//   remove_meta_box( 'genesis-theme-settings-breadcrumb', $_genesis_theme_settings_pagehook, 'main' );
//   remove_meta_box( 'genesis-theme-settings-comments',   $_genesis_theme_settings_pagehook, 'main' );
//   remove_meta_box( 'genesis-theme-settings-posts',      $_genesis_theme_settings_pagehook, 'main' );
//   remove_meta_box( 'genesis-theme-settings-blogpage',   $_genesis_theme_settings_pagehook, 'main' );
//   remove_meta_box( 'genesis-theme-settings-scripts',    $_genesis_theme_settings_pagehook, 'main' );
// }



/**
 * Reposition Genesis Layout Metabox
 */
// function meri2015_add_inpost_layout_box() {
//   if ( ! current_theme_supports( 'genesis-inpost-layouts' ) )
//     return;
//   foreach ( (array) get_post_types( array( 'public' => true ) ) as $type ) {
//     if ( post_type_supports( $type, 'genesis-layouts' ) )
//       add_meta_box( 'genesis_inpost_layout_box', __( 'Layout Settings', 'genesis' ), 'genesis_inpost_layout_box', $type, 'normal', 'low' );
//   }
// }



/**
 * Remove Dashboard Meta Boxes
 */
// function meri2015_remove_dashboard_widgets() {
  // global $wp_meta_boxes;
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
// }



/**
 * Change Admin Menu Order
 */
// function meri2015_custom_menu_order( $menu_ord ) {
  // if ( !$menu_ord ) return true;
  // return array(
    // 'index.php', // Dashboard
    // 'separator1', // First separator
    // 'edit.php?post_type=page', // Pages
    // 'edit.php', // Posts
    // 'upload.php', // Media
    // 'gf_edit_forms', // Gravity Forms
    // 'genesis', // Genesis
    // 'edit-comments.php', // Comments
    // 'separator2', // Second separator
    // 'themes.php', // Appearance
    // 'plugins.php', // Plugins
    // 'users.php', // Users
    // 'tools.php', // Tools
    // 'options-general.php', // Settings
    // 'separator-last', // Last separator
  // );
// }



/**
 * Hide Admin Areas that are not used
 */
// function meri2015_remove_menu_pages() {
  // remove_menu_page('link-manager.php');
// }

// Define Genesis Options
  // add_filter('genesis_options', 'define_genesis_setting_custom', 10, 2);
  // function define_genesis_setting_custom($options, $setting) {
  //   if($setting == GENESIS_SETTINGS_FIELD) {
  //     $options['update'] = 1;
  //     $options['blog_title'] = 'text';
  //     $options['header_right'] = 0;
  //     $options['site_layout'] = 'content-sidebar';
  //     $options['nav'] = 1;
  //     $options['nav_superfish'] = 1;
  //     $options['nav_home'] = 1;
  //     $options['nav_type'] = 'pages';
  //     $options['nav_pages_sort'] = 'menu_order';
  //     $options['nav_categories_sort'] = 'name';
  //     $options['nav_depth'] = 0;
  //     $options['nav_extras_enable'] = 0;
  //     $options['nav_extras'] = 'date';
  //     $options['nav_extras_twitter_id'] = '';
  //     $options['nav_extras_twitter_text'] = 'Follow me on Twitter';
  //     $options['subnav'] = 0;
  //     $options['subnav_superfish'] = 1;
  //     $options['subnav_home'] = 0;
  //     $options['subnav_type'] = 'categories';
  //     $options['subnav_pages_sort'] = 'menu_order';
  //     $options['subnav_categories_sort'] = 'name';
  //     $options['subnav_depth'] = 0;
  //     $options['feed_uri'] = '';
  //     $options['comments_feed_uri'] = '';
  //     $options['redirect_feeds'] = 0;
  //     $options['comments_pages'] = 0;
  //     $options['comments_posts'] = 1;
  //     $options['trackbacks_pages'] = 0;
  //     $options['trackbacks_posts'] = 1;
  //     $options['author_box_single'] = 1;
  //     $options['breadcrumb_home'] = 1;
  //     $options['breadcrumb_single'] = 1;
  //     $options['breadcrumb_page'] = 1;
  //     $options['breadcrumb_archive'] = 1;
  //     $options['breadcrumb_404'] = 1;
  //     $options['content_archive'] = 'full';
  //     $options['content_archive_thumbnail'] = 0;
  //     $options['posts_nav'] = 'older-newer';
  //     $options['blog_cat'] = '';
  //     $options['blog_cat_exclude'] = '';
  //     $options['blog_cat_num'] = 10;
  //     $options['header_scripts'] = '';
  //     $options['footer_scripts'] = '';
  //     $options['theme_version'] = PARENT_THEME_VERSION;
  //     }
  //   return $options;
  // }

  // Image Sizes
  // add_image_size( $name, $width = 0, $height = 0, $crop = false );

  // Unregister Secondary Nav Menu
  // add_theme_support( 'genesis-menus', array(
  //   'primary' => 'Primary Navigation Menu'
  // ) );

  // Sidebars
  // unregister_sidebar( 'sidebar-alt' );
  // genesis_register_sidebar( array(
  //   'name' => 'Footer',
  //   'id' => 'custom-footer'
  // ) );
  //add_theme_support( 'genesis-footer-widgets', 4 );

  // Remove Unused Page Layouts
  // genesis_unregister_layout( 'content-sidebar' );
  // genesis_unregister_layout( 'sidebar-content' );
  // genesis_unregister_layout( 'full-width-content' );
  // genesis_unregister_layout( 'content-sidebar-sidebar' );
  // genesis_unregister_layout( 'sidebar-sidebar-content' );
  // genesis_unregister_layout( 'sidebar-content-sidebar' );


  // Remove Unused User Settings
  // remove_action( 'show_user_profile', 'genesis_user_options_fields' );
  // remove_action( 'edit_user_profile', 'genesis_user_options_fields' );
  // remove_action( 'show_user_profile', 'genesis_user_archive_fields' );
  // remove_action( 'edit_user_profile', 'genesis_user_archive_fields' );
  // remove_action( 'show_user_profile', 'genesis_user_seo_fields' );
  // remove_action( 'edit_user_profile', 'genesis_user_seo_fields' );
  // remove_action( 'show_user_profile', 'genesis_user_layout_fields' );
  // remove_action( 'edit_user_profile', 'genesis_user_layout_fields' );

  //* Remove Genesis menu link
  // remove_theme_support( 'genesis-admin-menu' );
  // Remove Genesis Theme Settings Metaboxes if you want to get specific
  // add_action( 'genesis_theme_settings_metaboxes', 'meri2015_remove_genesis_metaboxes' );

  //* Remove Genesis SEO Settings menu link
  // remove_theme_support( 'genesis-seo-settings-menu' );

  //* Remove Genesis Layout Settings
  // remove_theme_support( 'genesis-inpost-layouts' );

  // Reposition Genesis Layout Settings Metabox to the bottom
  // remove_action( 'admin_menu', 'genesis_add_inpost_layout_box' );
  // add_action( 'admin_menu', 'meri2015_add_inpost_layout_box' );

  //* Unregister Genesis widgets
  // add_action( 'widgets_init', 'unregister_genesis_widgets', 20 );
  // function unregister_genesis_widgets() {
  //   unregister_widget( 'Genesis_eNews_Updates' );
  //   unregister_widget( 'Genesis_Featured_Page' );
  //   unregister_widget( 'Genesis_Featured_Post' );
  //   unregister_widget( 'Genesis_Latest_Tweets_Widget' );
  //   unregister_widget( 'Genesis_Menu_Pages_Widget' );
  //   unregister_widget( 'Genesis_User_Profile_Widget' );
  //   unregister_widget( 'Genesis_Widget_Menu_Categories' );
  // }


  // Setup Child Theme Settings
  // Doesn't Exist Yet
  // include_once( CHILD_DIR . '/lib/child-theme-settings.php' );

  // Set Content Width for oEmbed
  // $content_width = apply_filters( 'content_width', 740, 740, 1140 );

  // Remove Dashboard Meta Boxes
  // add_action( 'wp_dashboard_setup', 'meri2015_remove_dashboard_widgets' );

  // Change Admin Menu Order
  // add_filter( 'custom_menu_order', 'meri2015_custom_menu_order' );
  // add_filter( 'menu_order', 'meri2015_custom_menu_order' );

  // Hide Admin Areas that are not used
  // add_action( 'admin_menu', 'meri2015_remove_menu_pages' );

  // Remove default link for images
  // add_action( 'admin_init', 'meri2015_imagelink_setup', 10 );

  /****************************************
  Backend
  *****************************************/



  /****************************************
  Frontend
  *****************************************/



  /****************************************
  Require Plugins
  *****************************************/
  // require_once( CHILD_DIR . '/lib/class-tgm-plugin-activation.php' );
  // require_once( CHILD_DIR . '/lib/theme-require-plugins.php' );
  // add_action( 'tgmpa_register', 'mb_register_required_plugins' );