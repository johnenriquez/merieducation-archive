<?php
/**
 * Template Name: College Students
 *
 * @package meri2015
 */

// full bleed
add_filter( 'body_class', 'add_full_bleed_class' );
function add_full_bleed_class( $classes ) {
  $classes[] = 'full-bleed';
  return $classes;
}

//* HARDCODED PAGE
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'meri2015_college_students_loop' );

function meri2015_college_students_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-at-the-park.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more help with classes:</p>
  <ul>
    <li><a href="<?php echo home_url( '/subject-tutoring/' ); ?>">Subject Tutoring</a></li>
    <li><a href="<?php echo home_url( '/academic-coaching/' ); ?>">Academic Coaching</a></li>
    <li><a class="active" href="<?php echo home_url( '/college-students/' ); ?>">College Students</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="page-lede">
  <h2 class="page-lede-headline">WE HELP COLLEGE STUDENTS TOO!</h2>
  <p class="page-lede-text">Don't think that we just stop caring when you finish high school. Whether you need help preparing for the Accounting 101 exam, preparing for the GRE, or getting into Pharmacy School, we will be here with you every step of the way!</p>
</section>

<section class="typical-program">
  <h2 class="typical-program-headline">Available Services:</h2>
  <div class="grid grid--gutters grid--3 college-students-available-services-grid">
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">SUBJECT TUTORING</h3>
        <p class="typical-program-desc">You will get matched with an instructor who is best suited to give you the exact help you need.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">GRE TEST PREP</h3>
        <p class="typical-program-desc">We teach GRE Test Prep with the same principles and discipline that we teach our SAT + ACT curriculum with.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">ADMISSIONS CONSULTING</h3>
        <p class="typical-program-desc">If you are aiming to transfer or apply to graduate school, we help with that too. Our <a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">all-star consulting team</a> has helped hundreds of students get into the school of their dreams.</p>
      </div>
    </div>
  </div>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/at-sign-decoration.jpg');">
</section>

<section class="grid grid--3 services-breakout-nav">
  <div class="grid-cell">
    <a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-pointing-bubble.jpg">
        <h2>GET INTO GRAD SCHOOL</h2>
      </div>
      Learn about 1-on-1 admissions consulting &gt;
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
    <a href="<?php echo home_url( '/testimonials/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/family-at-redlands.jpg">
        <h2>FAMILIES LOVE US</h2>
      </div>
      Check out what our clients have to say &gt;
    </a>
  </div>
</section>

<?php
}

genesis();