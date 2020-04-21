<?php
/**
 * Functions used by the theme
 *
 * @package meri2015
 */


/**
 * Processes WYSIWYG Content for embeds, shortcodes, etc
 */

function je_wysiwyg_output( $content ) {
  global $wp_embed;

  $content = $wp_embed->autoembed( $content );
  $content = $wp_embed->run_shortcode( $content );
  $content = do_shortcode( $content );
  $content = wpautop( $content );

  return $content;
}

/**
 * Redirects to the specified Page ID
 */
function je_redirect_to( $page_id ) {
  wp_redirect( get_permalink( $page_id ) );
}

/**
 * Shorthand to get custom field data
 */
function je_gcf( $fieldname ) {
  return genesis_get_custom_field( $fieldname );
}

/**
 * Shorthand to get custom field data
 */
function je_gcis( $fieldname, $size = null ) {

  if( is_null( $size ) ) {
    $size = "full";
  }

  $image_id = get_post_meta( get_the_ID(), $fieldname, true );
  $image_array = wp_get_attachment_image_src( $image_id, $size );

  if( $image_array ) {
    return $image_array[0]; // returns the src
  } else {
    return $image_array; // returns whatever wordpress returns, which i think is false
  }

}

function je_gcis_id( $image_id, $size = null ) {

  if( is_null( $size ) ) {
    $size = "full";
  }

  $image_array = wp_get_attachment_image_src( $image_id, $size );

  if( $image_array ) {
    return $image_array[0]; // returns the src
  } else {
    return $image_array; // returns whatever wordpress returns, which i think is false
  }

}