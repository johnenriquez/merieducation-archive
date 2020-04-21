<?php
/**
 * Genesis Framework.
 *
 * This page functions as the blog single page
 */

//* Remove the entry title (requires HTML5 theme support)
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

add_action( 'genesis_after_header', 'meri2015_single_mast' );
function meri2015_single_mast() {
  ?>
  <section class="single-mast" data-parallax="scroll" data-speed="0.8" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/blogindex-mast.jpg">
    <h2><?php the_title(); ?></h2>
  </section><!-- .about-story-mast -->
  <?php
}

genesis();