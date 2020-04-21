<?php
/**
 * Functions related to the front end / public
 *
 * enqueue_scripts / enqueue_styles happens here
 *
 * @package meri2015
 */

/**
 * <HEAD> SECTION
 */
// add no-js to html tag
add_filter('language_attributes', 'je_modernizr_nojs');
function je_modernizr_nojs($output) {
    return $output . ' class="no-js"';
}

// custom favicon
add_filter( 'genesis_pre_load_favicon', 'meri2015_favicon_filter' );
function meri2015_favicon_filter( $favicon_url ) {
  return get_stylesheet_directory_uri() . '/img/favicon.ico';
}

// Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Clean up Head
remove_action( 'wp_head', 'rsd_link' );

//* Removes emoji support (Hopefully they fix this soon)
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//* Add Typekit functionality
add_action( 'wp_head', 'meri2015_typekit_inline_script', 100 );
function meri2015_typekit_inline_script() {
  ?>
  <script src="//use.typekit.net/ltv8wov.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <?php
}

//* Add Pinterest functionality
add_action( 'wp_head', 'meri2015_pinterest_inline_script', 100 );
function meri2015_pinterest_inline_script() {
  ?>
  <meta name="p:domain_verify" content="d80d523a0ea533d7395ad8b584937743"/>
  <?php
}



/**
 * Layout
 */
//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//* Remove all Structural Wraps
add_theme_support( 'genesis-structural-wraps', array() );

//* Adds custom body class
add_filter( 'body_class', 'je_body_class' );
function je_body_class( $classes ) {
  $classes[] = 'site sticky-header';
  return $classes;
}

//* Include Site Header
// @todo refactor
require get_stylesheet_directory() . '/inc/functions-site-header.php';

//* Include Site Footer
// @todo refactor
require get_stylesheet_directory() . '/inc/functions-site-footer.php';



/**
 * Site Misc
 */
//* Remove Edit Post Link
add_filter ( 'genesis_edit_post_link' , '__return_false' );

//* LiveReload
add_action( 'genesis_after', 'je_livereload_snippet', 99 );
function je_livereload_snippet() {
  if( WP_ENV == "development" ) {
    ?><script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script><?php
  }
}


/**
 * Enqueue styles.
 */
add_action( 'wp_enqueue_scripts', 'meri2015_styles' );
function meri2015_styles() {
  wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
}

/**
 * Enqueue scripts.
 */
add_action( 'wp_enqueue_scripts', 'meri2015_scripts' );
function meri2015_scripts() {
  wp_enqueue_script( 'parallax-js', get_stylesheet_directory_uri() . '/js/vendor/parallax.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'fitvids', get_stylesheet_directory_uri() . '/js/vendor/fitvids.js', array(), '', true );
  wp_enqueue_script( 'fastclick', get_stylesheet_directory_uri() . '/js/vendor/fastclick.js', array(), '', true );
  wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.min.js' );
  wp_enqueue_script( 'lightslider-js', get_stylesheet_directory_uri() . '/js/vendor/lightslider.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'wow-js', get_stylesheet_directory_uri() . '/js/vendor/wow.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'jquery-vimeo', get_stylesheet_directory_uri() . '/js/vendor/jquery-vimeo.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'magnificent-popup', get_stylesheet_directory_uri() . '/js/vendor/jquery.magnific-popup.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'imagesloaded', get_stylesheet_directory_uri() . '/js/vendor/imagesloaded.pkgd.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'meri2015-mainjs', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery', 'imagesloaded', 'magnificent-popup', 'fitvids', 'fastclick', 'wow-js' ), '', true );
}
