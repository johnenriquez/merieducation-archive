<?php
/**
* Plugin Name: MeriNinjas
* Plugin URI: http://properform.us/
* Description: Registers Tutor CPT
* Version: 1.0
* Author: John Enriquez
* Author URI: http://johnenriquez.com/
* License: GPLv2
*/
/*  Copyright 2015  John Enriquez  (email : john@johnenriquez.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*================================================================
 * CPT stuff
 ================================================================*/
if ( ! function_exists( 'register_tutors_cpt' ) ):
  function register_tutors_cpt() {
    register_post_type( 'tutor',
      array(
        'labels' => array(
          'name'          =>  'Tutors',
          'singular_name'     =>  'Tutor',
          'add_new'       =>  'Add New',
          'add_new_item'      =>  'Add New Tutor',
          'edit'          =>  'Edit',
          'edit_item'       =>  'Edit Tutor',
          'new_item'        =>  'New Tutor',
          'view'          =>  'View',
          'view_item'       =>  'View Tutor',
          'search_items'      =>  'Search Tutors',
          'not_found'       =>  'No Tutors found',
          'not_found_in_trash'  =>  'No Tutors found in Trash',
          'parent'        =>  'Parent Tutor'

        ), // end labels array

        'public'          =>  true,
        'menu_position'       =>  15,
        'supports'          =>  array( 'title', 'thumbnail' ),
        'taxonomies'        =>  array( '' ),
        'menu_icon'         =>  null,
        'has_archive'         =>  true,
        'rewrite'     => array('slug' => 'tutors'),
      ) // end register_post_type_array
    ); // end register_post_type()

    $dir = new DirectoryIterator( plugin_dir_path(__FILE__). 'custom-fields/' );
    foreach( $dir as $file )
    {
      if ( !$file->isDot() && 'json' == $file->getExtension() )
      {
        $array = json_decode( file_get_contents( $file->getPathname() ), true );
        register_field_group( $array );
      }
    }
  }
endif;
add_action( 'init', 'register_tutors_cpt' );


/*================================================================
 * ACF STUFF
 ================================================================*/

function properform_acf_json_save_point( $path ) {
    $path = plugin_dir_path(__FILE__). 'custom-fields/';
    return $path;
}

function properform_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = plugin_dir_path(__FILE__). 'custom-fields/';
    return $paths;
}

// set json save point for sync
add_filter('acf/settings/save_json', 'properform_acf_json_save_point');

// load json
add_filter('acf/settings/load_json', 'properform_acf_json_load_point');

// hide admin menu if not in development
if ( WP_ENV != "development" ) {
  add_filter('acf/settings/show_admin', '__return_false');
}

