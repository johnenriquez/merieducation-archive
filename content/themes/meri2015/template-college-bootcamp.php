<?php
/**
 * Template Name: College Bootcamp
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
add_action( 'genesis_loop', 'meri2015_college_bootcamp_loop' );

function meri2015_college_bootcamp_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/girl-studying-by-window.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more college admissions help:</p>
  <ul>
    <li><a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">1-ON-1 CONSULTING</a></li>
    <li><a class="active" href="<?php echo home_url( '/college-apps-bootcamp/' ); ?>">COLLEGE APPS BOOTCAMP</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline">EASY AS 1, 2, 3!</h2>
    <p class="page-lede-text">Taking key nuggets from our 1-on-1 Admissions Consulting service, we have designed an intensive bootcamp for those looking for a more budget-friendly option. Our goal is for students to leave with a winning personal statement and their most important college applications completed in just a few days!</p>
  </section>

  <section class="grid grid--3 psat-grid">
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-papers wow flipInY" data-wow-duration=".8s" data-wow-delay=".3s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/papers.png">
      <h3 class="grid-headline">UC, CAL STATE, COMMON</h3>
      <p class="grid-text">The College Apps Bootcamp is designed to complete all of your UC, Cal State, and Common applications - everything from requesting letters of recommendation to filling out your transcripts correctly.</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-stopwatch wow flipInY" data-wow-duration=".8s" data-wow-delay=".6s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stopwatch.png">
      <h3 class="grid-headline">FLEXIBLE, YET FOCUSED</h3>
      <p class="grid-text">We offer a calendar of workshop dates to fit around your crazy busy schedule. However, these intensive workshops demand a student’s complete focus. We work diligently to make sure not a minute is wasted with workshops typically running about 7 hours.</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-success wow flipInY" data-wow-duration=".8s" data-wow-delay=".9s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/success.png">
      <h3 class="grid-headline">SMALL GROUP WORKSHOPS</h3>
      <p class="grid-text">Results are of course dependent on student attendance and work ethic during the bootcamp, but we strictly limit workshop sizes to ensure MAXIMUM attention for each student. Be sure to register early!</p>
    </div>
  </section>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/accepted-banner.jpg');">
</section>

<blockquote class="testimonial--callout testimonial--callout--raised">
  <p class="testimonial-quote">The MeriEducation College Bootcamp was an amazing experience. Joan and her team helped me complete my common app, UC app, 8 writing supplements, resume, 3 cover letters, and both UC essays in only two one-day sessions. Without the MeriEducation team I would be so lost! I feel confident and relaxed in applying for college thanks to them! It was totally worth the hour drive to get there!</p>
  <footer class="testimonial-author">Lauren M., Student</footer>
</blockquote>

<section class="typical-program">
  <h2 class="typical-program-headline">What a typical course looks like...</h2>
  <div class="grid grid--gutters grid--4">
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">PRESENTING THE BEST YOU</h3>
        <p class="typical-program-desc">Students will craft an insightful personal statement that shows the admissions panel who they are and how far they've come as people - both academically and personally.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">GET YOUR LETTERS OF REC</h3>
        <p class="typical-program-desc">Solicit letters of recommendation by creating strong resumes, cover letters, and other supplemental materials that your school may require.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">GUEST SPEAKERS</h3>
        <p class="typical-program-desc">Bootcamp participants can partake in special Q+A sessions featuring speakers with extensive admissions experience.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">A-LA-CARTE WORKSHOPS</h3>
        <p class="typical-program-desc">Pick workshop dates that work best with your schedule. It usually takes about 2-3 workshop days to complete the bootcamp.</p>
      </div>
    </div>
  </div>
</section>

<section class="college-bootcamp-divider">
  <img class="bootcamp-divider" src="<?php echo get_stylesheet_directory_uri(); ?>/img/college-bootcamp-divider.png">
</section>

<section class="grid grid--3 services-breakout-nav">
  <div class="grid-cell">
    <a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/student-pointing-at-camera.jpg">
        <h2>1-ON-1 ADMISSIONS HELP</h2>
      </div>
      Learn about our 1-on-1 Admissions Consulting serivce &gt;
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
  <div class="grid-cell">
    <a href="<?php echo home_url( '/imeri/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headphones-3x2.jpg">
        <h2>GO DIGITAL</h2>
      </div>
      Learn about online tutoring with iMeri &gt;
    </a>
  </div>
</section>

<?php
}

genesis();