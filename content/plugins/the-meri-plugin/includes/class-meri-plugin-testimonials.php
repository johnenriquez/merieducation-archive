<?php

/**
 * Registers the Testimonial CPT
 *
 * @link       http://merieducation.com
 * @since      1.0.0
 *
 * @package    meri-plugin
 * @subpackage meri-plugin/includes
 */


/**
 * Register the CPT
 */
add_action( 'init', 'meri2015_add_testimonial_cpt' );
function meri2015_add_testimonial_cpt() {

  // set up labels
  $testimonial_labels = array(
    'name'               => 'Testimonials',
    'singular_name'      => 'Testimonial',
    'add_new'            => 'Add New Testimonial',
    'add_new_item'       => 'Add New Testimonial',
    'edit_item'          => 'Edit Testimonial',
    'new_item'           => 'New Testimonial',
    'all_items'          => 'All Testimonials',
    'view_item'          => 'View Testimonial',
    'search_items'       => 'Search Testimonials',
    'not_found'          =>  'No Testimonials Found',
    'not_found_in_trash' => 'No Testimonials found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Testimonials',
  );
  //register post type
  register_post_type( 'testimonial', array(
    'labels'              => $testimonial_labels,
    'public'              => true,
    'menu_icon'           => 'dashicons-format-aside',
    'supports'            => array( 'editor' ),
    'taxonomies'          => array( 'post_tag', 'category' ),
    'exclude_from_search' => false,
    'capability_type'     => 'post',
    )
  );

}


/**
 * Fill out the CMBs on the CPT page
 */
add_action( 'cmb2_init', 'meri2015_register_testimonial_metaboxes' );
function meri2015_register_testimonial_metaboxes() {

  $prefix = '_meri2015_testimonial_';

  $testimonial_cmb = new_cmb2_box( array(
    'id'            => $prefix . 'metabox',
    'title'         => __( 'Testimonial Info', 'meri2015' ),
    'object_types'  => array( 'testimonial' ),
  ) );

  $testimonial_cmb->add_field( array(
    'name'          => __( 'Author', 'meri2015' ),
    'id'            => $prefix . 'author',
    'type'          => 'text'
  ) );

  $testimonial_cmb->add_field( array(
    'name'          => __( 'Author Description (Optional)', 'meri2015' ),
    'id'            => $prefix . 'author_desc',
    'type'          => 'text'
  ) );

}

/**
 * Alter the Columns on the Edit page
 */
add_filter( 'manage_edit-testimonial_columns', 'meri2015_edit_testimonial_columns' );
function meri2015_edit_testimonial_columns() {

  $columns = array(
    'cb' => '<input type="checkbox">',
    'testimonial_author' => __( 'Author' ),
    'categories' => __( 'Categories' ),
    'tags' => __( 'Tags' ),
  );

  return $columns;

}

/**
 * Populate the colums on the Edit page
 */
add_action( 'manage_testimonial_posts_custom_column', 'meri2015_manage_testimonial_columns', 10, 2 );
function meri2015_manage_testimonial_columns( $column, $post_id ) {
  global $post;

  switch( $column ) {
    case 'testimonial_author':

      // get_post_meta
      $testimonial_author = get_post_meta( $post_id, '_meri2015_testimonial_author', true );

      // default if author is blank
      if( empty( $testimonial_author ) )
        echo __( 'Unknown' );
      else
        printf( '<a href="%s">%s</a>', get_edit_post_link( $post_id ), $testimonial_author );
      break;
    default:
      break;
  }
}
