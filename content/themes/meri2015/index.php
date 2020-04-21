<?php
/**
 * Genesis Framework.
 *
 * This page functions as the blog index page
 */

add_filter( 'body_class', 'je_blogindex_body_class' );
function je_blogindex_body_class( $classes ) {
  $classes[] = 'blogindex';
  return $classes;
}

add_action( 'genesis_after_header', 'meri2015_blogindex_mast' );
function meri2015_blogindex_mast() {
  ?>
  <section class="blogindex-mast" data-parallax="scroll" data-speed="0.8" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/blogindex-mast.jpg">
    <h2>Blog</h2>
  </section><!-- .about-story-mast -->
  <?php
}

genesis();