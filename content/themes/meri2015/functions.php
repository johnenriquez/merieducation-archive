<?php
/**
 * Main theme functions and definitions
 *
 * @package meri2015
 */

// do this after all genesis setup
add_action('genesis_setup','meri2015_theme_setup', 15);
function meri2015_theme_setup() {

  //* Child theme (do not remove)
  // define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );
  define( 'CHILD_THEME_NAME', 'MeriTheme 2015' );
  define( 'CHILD_THEME_URL', 'http://merieducation.com/' );
  define( 'CHILD_THEME_VERSION', '1.0' );

  //* Theme functions
  require get_stylesheet_directory() . '/inc/functions-theme.php';

  //* Backend / Admin Stuff
  require get_stylesheet_directory() . '/inc/functions-backend.php';

  //* Frontend Stuff
  // enqueue_scripts and enqueue_styles happens here
  require get_stylesheet_directory() . '/inc/functions-frontend.php';

} // end meri2015_theme_setup

/**
 * Subpage Redirects Go Here
 */
add_action( 'template_redirect', 'meri2015_redirect_templates' );
function meri2015_redirect_templates() {

  // About Us page -> Our Story
  if( is_page( 6 ) ) { je_redirect_to( 19 ); }

  // Help Me With Classes -> Subject Tutoring
  if( is_page( 8 ) ) { je_redirect_to( 564 ); }

  // Help Me With College -> 1-on-1 EC
  if( is_page( 12 ) ) { je_redirect_to( 29 ); }

  // Help Me With Test Prep -> SAT & ACT
  if( is_page( 10 ) ) { je_redirect_to( 25 ); }

}
