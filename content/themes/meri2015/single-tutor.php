<?php
/**
 * Tutor - Single page
 *
 * @package meri2015
 */

// full bleed
add_filter( 'body_class', 'add_full_bleed_class' );
function add_full_bleed_class( $classes ) {
  $classes[] = 'full-bleed t-tutor-profile';
  return $classes;
}

//* HARDCODED PAGE
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'meri2015_single_tutor_loop' );

function meri2015_single_tutor_loop() {
?>

<?php
  /**
   * Cover Photo
   */
  $cover_photo_src = je_gcis( 'cover_photo' );
  if( empty( $cover_photo_src ) ) $cover_photo_src = get_stylesheet_directory_uri() . '/img/meried_logo_placeholder.png';
?>
<section class="page-mast parallax-mast" style="background-image: url('<?php echo $cover_photo_src; ?>');">
</section>


<?php
  /**
   * Tutor Name & Title / Position
   */
?>
<section class="tutor-title">
  <h2>
    <span class="tutor-name"><?php the_title(); ?></span>
    <?php
      $titleposition = je_gcf( 'title-position' );
      if( !empty( $titleposition ) ):
    ?>
      <br><span class="titleposition"><?php echo $titleposition; ?></span>
    <?php endif; ?>
  </h2>
</section>

<?php
  /**
   * Tutor About Me
   */
  $bio = je_gcf( 'bio' );
  if( !empty( $bio ) ):
?>
<section class="tutor-about">
  <h3>About Me</h3>
  <?php echo je_wysiwyg_output( $bio ); ?>
</section>
<?php endif; ?>

<?php
  /**
   * Photos
   */

  $primary_photo_src = je_gcis( 'primary_photo' );
  $secondary_photo_src = je_gcis( 'secondary_photo' );
?>
<section class="tutor-photos">
  <img src="<?php echo $primary_photo_src; ?>">
  <img src="<?php echo $secondary_photo_src; ?>">
</section>


<?php
  /**
   * Tutor Testimonials
   */

  $number_of_testimonials = je_gcf( 'testimonials' );
  if( $number_of_testimonials ):
?>
<section class="tutor-testimonials lS--dark">
  <h3>What do they say about me?</h3>
  <ul class="tutor-testimonial-list">
    <?php
      for( $i = 0; $i < $number_of_testimonials; $i++ ):
        $the_testimonial = je_gcf( 'testimonials_' . $i . '_testimonial' );
      $the_testimonial_author = je_gcf( 'testimonials_' . $i . '_testimonial_author' );
    ?>
      <li>
        <blockquote class="testimonial">
          <p class="testimonial-quote"><?php echo $the_testimonial; ?></p>
          <footer class="testimonial-author">&#8211; <?php echo $the_testimonial_author; ?></footer>
        </blockquote>
      </li>
    <?php endfor; ?>
  </ul>
</section>
<?php endif; ?>

<section class="tutor-details">

<?php
  /**
   * Percentiles
   */

  $primary_percentile_score = je_gcf( 'primary_percentile_score' );
  $primary_percentile_subject = je_gcf( 'primary_percentile_subject' );

  $secondary_percentile_score = je_gcf( 'secondary_percentile_score' );
  $secondary_percentile_subject = je_gcf( 'secondary_percentile_subject' );

  $has_primary_score = !empty( $primary_percentile_score ) && !empty( $primary_percentile_subject );

  $has_secondary_score = !empty( $secondary_percentile_score ) && !empty( $secondary_percentile_subject );

  $has_score = $has_primary_score && $has_secondary_score;

  function ordinal($number) {
    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. '<span class="ordinal">' . 'th' . '</span>';
    else
        return $number. '<span class="ordinal">' . $ends[$number % 10] . '</span>';
  }

  if( $has_score ):
?>
  <section class="tutor-percentiles">
    <h3><?php $firstname = explode( " ", get_the_title() ); echo $firstname[0]; ?> scored in the</h3>
    <div class="score-section">
      <div class="score-group">
        <p class="score-number"><?php echo ordinal($primary_percentile_score); ?> <span>percentile in</span></p>
        <p class="score-subject"><?php echo $primary_percentile_subject; ?></p>
      </div>
      <?php if( $has_secondary_score ): ?>
      <p class="score-connector">+</p>
      <div class="score-group">
        <p class="score-number"><?php echo ordinal($secondary_percentile_score); ?> <span>percentile in</span></p>
        <p class="score-subject"><?php echo $secondary_percentile_subject; ?></p>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>

  <section class="tutor-aux">

    <?php
      /**
       * Secondary Question
       */
      $secondary_question = je_gcf( 'secondary_question' );
      $secondary_answer = je_gcf( 'secondary_answer' );

      if( !empty( $secondary_question ) && !empty( $secondary_answer ) ):
        if( $secondary_question == "teaching_style" ) { $secondary_question = "What is your teaching style?"; }
        if( $secondary_question == "meried_love" ) { $secondary_question = "Why do you love Merieducation?"; }

    ?>
    <section class="tutor-secondary-question">
      <h3><?php echo $secondary_question; ?></h3>
      <div class="media">
        <img class="media-figure" src="<?php echo get_stylesheet_directory_uri(); ?>/img/teachstyleicon.png">
        <div class="media-body">
          <?php echo je_wysiwyg_output( $secondary_answer ); ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php
      /**
       * Interests
       */

      $interests_ids = je_gcf( 'interests' );

    ?>
    <section class="tutor-interests lS--dark">
      <h3>Things I'm Into Now</h3>
      <div class="media">
        <img class="media-figure" src="<?php echo get_stylesheet_directory_uri(); ?>/img/thingsilikeicon.png">
        <div class="media-body">
          <ul class="interests-list">
            <?php foreach( $interests_ids as $interest_id ): ?>
            <li><img src="<?php echo je_gcis_id( $interest_id, 'interest-slide' ); ?>"></li>
            <?php endforeach; ?>
          </ul><!-- .interests-list -->
        </div><!-- .media-body -->
      </div><!-- .media -->
    </section>

  </section><!-- .tutor-aux -->


</section><!-- .tutor-details -->


<section class="more-tutors">
  <a class="button" href="<?php echo home_url( 'tutors' ); ?>">Check out the rest of our team &gt;</a>
  <?php
    $type = 'tutor';
    $args = array(
      'orderby' => 'rand',
      'post_type'      => $type,
      'post_status'    => 'publish',
      'posts_per_page' => 3,
    );

    $more_tutors_query = new WP_Query( $args );
    if( $more_tutors_query->have_posts() ):
  ?>
  <ul class="tutor-gallery">
    <?php while( $more_tutors_query->have_posts() ): $more_tutors_query->the_post(); ?>
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
    <?php endwhile; ?>
  </ul>
  <?php
    endif;
  ?>
</section>

<?php
}

genesis();