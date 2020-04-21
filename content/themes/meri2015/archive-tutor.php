<?php
/**
 * Template Name: Tutors
 *
 * @package meri2015
 */

// full bleed
add_filter( 'body_class', 'add_full_bleed_class' );
function add_full_bleed_class( $classes ) {
  $classes[] = 'full-bleed t-tutors';
  return $classes;
}

//* HARDCODED PAGE
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'meri2015_tutors_loop' );

function meri2015_tutors_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-at-park.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Learn more about our difference:</p>
  <ul>
    <li><a href="<?php echo home_url( '/our-philosophy/' ); ?>">Philosophy</a></li>
    <li><a class="active" href="<?php echo home_url( '/tutors/' ); ?>">Meet Our Ninjas</a></li>
    <li><a href="<?php echo home_url( '/testimonials/' ); ?>">Testimonials</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<?php
  /**
   * Admin Team
   */


  $args = array(
      'post_type' => 'page',
      'fields' => 'ids',
      'nopaging' => true,
      'meta_key' => '_wp_page_template',
      'meta_value' => 'archive-tutor.php'
  );
  $pages_that_use_tutors_template = get_posts( $args );
  $tutors_template_page_id = $pages_that_use_tutors_template[0];


  global $post;
  $number_of_admins = get_post_meta( $tutors_template_page_id, 'admin_team', true );
  if( $number_of_admins ):
?>
<section class="admins">
  <h2>Admins</h2>
  <ul class="tutor-gallery">
    <?php
      for( $i = 0; $i < $number_of_admins; $i++ ):
        $the_admin_id = get_post_meta( $tutors_template_page_id, 'admin_team_' . $i . '_admin_member', true );
        $post = get_post( $the_admin_id );
        setup_postdata( $post );
    ?>
      <li class="tutor-card">
        <?php
          $primary_photo_thumb_src = je_gcis( 'primary_photo', 'medium' );
          if( empty( $primary_photo_thumb_src ) ) $primary_photo_thumb_src = "http://placehold.it/300x272/f0f0f0";
          $secondary_photo_thumb_src = je_gcis( 'secondary_photo', 'medium' );
          if( empty( $secondary_photo_thumb_src ) ) $secondary_photo_thumb_src = "http://placehold.it/300x272/cccccc";
        ?>
        <a href="<?php the_permalink(); ?>">
          <div class="tutor-card-photo">
            <img class="" src="<?php echo $primary_photo_thumb_src; ?>">
            <img class="" src="<?php echo $secondary_photo_thumb_src; ?>">
          </div>
          <span class="tutor-card-name"><?php the_title(); ?></span>
        </a>
      </li>
    <?php
        wp_reset_postdata();
      endfor;
    ?>
  </ul>
</section>
<?php endif; ?>

<section class="tutors">
  <h2>Tutors</h2>
    <?php

      /**
       * Tutors
       */
      $type = 'tutor';
      $args = array(
        'post_type'      => $type,
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'=> 'title',
        'order' => 'ASC',
        'meta_query' => array(
          'relation' => 'OR',
          array(
            'key' => 'is_admin',
            'value' => true,
            'compare' => '!='
          ),
          array(
            'key' => 'is_admin',
            'compare' => 'NOT EXISTS'
          )
        )
      );

      $tutors_query = new WP_Query( $args );
      if( $tutors_query->have_posts() ):
    ?>
      <ul class="tutor-gallery">
        <?php while( $tutors_query->have_posts() ): $tutors_query->the_post(); ?>
        <li class="tutor-card">
          <?php
            $primary_photo_thumb_src = je_gcis( 'primary_photo', 'medium' );
            if( empty( $primary_photo_thumb_src ) ) $primary_photo_thumb_src = "http://placehold.it/300x272/f0f0f0";
            $secondary_photo_thumb_src = je_gcis( 'secondary_photo', 'medium' );
            if( empty( $secondary_photo_thumb_src ) ) $secondary_photo_thumb_src = "http://placehold.it/300x272/cccccc";
          ?>
          <a href="<?php the_permalink(); ?>">
            <div class="tutor-card-photo">
              <img class="" src="<?php echo $primary_photo_thumb_src; ?>">
              <img class="" src="<?php echo $secondary_photo_thumb_src; ?>">
            </div>
            <span class="tutor-card-name"><?php the_title(); ?></span>
          </a>
        </li>
        <?php endwhile;?>
      </ul>
    <?php else: ?>
      <p>Couldn't load any tutors.</p>
    <?php
      endif;
      wp_reset_query();
    ?>
</section>

<section>
  <h2 class="landing-page-nav-headline">COME BACK TO MEET MORE OF OUR TUTORS!</h2>
</section>

<section class="grid grid--3 services-breakout-nav">
  <div class="grid-cell">
    <a href="<?php echo home_url( '/testimonials/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/family-at-redlands.jpg">
        <h2>FAMILIES LOVE US</h2>
      </div>
      Check out what our clients have to say &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/imeri/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headphones-3x2.jpg">
        <h2>GO DIGITAL</h2>
      </div>
      Learn about online tutoring with iMeri &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/our-philosophy/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-and-kid-with-bow-3x2.jpg">
        <h2>WHY 1-ON-1 WORKS</h2>
      </div>
      Learn more about our philosophy &gt;
    </a>
  </div>
</section>


<?php
}

genesis();