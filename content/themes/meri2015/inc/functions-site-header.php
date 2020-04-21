<?php
/**
 * Site Header Functions
 *
 * @package  meri2015
 */

//* Custom Header Markup
remove_action( 'genesis_header', 'genesis_do_header' );
add_action( 'genesis_header', 'meri2015_do_header' );
function meri2015_do_header() {
  ?>

  <a href="<?php echo home_url(); ?>"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/meri_logo_horiz.png" alt="Merieducation"></a>

  <a href="#primary-menu" class="skip"><span class="menu-label">Menu</span> <span class="menu-icon"></span></a>

  <?php
  // take note that the primary navigation follows directly after.
}

/**
 * Limit Primary Menu to Top Level Items
 *
 * @author Bill Erickson
 * @link http://www.billerickson.net/customizing-menu-arguments/
 *
 * @param array @args
 * @return array
 *
 */
add_filter( 'wp_nav_menu_args', 'meri2015_menu_args' );
function meri2015_menu_args( $args ) {
  if( 'primary' == $args['theme_location'] ) {
    // change up args here
    $args['menu_id'] = 'primary-menu';
    $args['menu_class'] = 'primary-menu';
  }

  return $args;
}

//* Reposition the primary navigation menu into here
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );