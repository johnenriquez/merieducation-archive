<?php
/**
 * Template Name: PSAT
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
add_action( 'genesis_loop', 'meri2015_psat_loop' );

function meri2015_psat_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/kids-confetti-toss.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more test prep help:</p>
  <ul>
    <li><a href="<?php echo home_url( '/sat-act/' ); ?>">SAT+ACT</a></li>
    <li><a href="<?php echo home_url( '/isee/' ); ?>">ISEE+SSAT+HSPT</a></li>
    <li><a href="<?php echo home_url( '/ap/' ); ?>">AP</a></li>
    <li><a class="active" href="<?php echo home_url( '/psat/' ); ?>">PSAT</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede psat-lede">
    <h2 class="page-lede-headline">DON’T DISREGARD THE PSAT!</h2>
    <p class="page-lede-text">The PSAT is a great preview to the SAT/ACT and can be a great predictor of how a student will do on the bigger exam. The score is also important as the PSAT/NMSQT can help students win awards in the National Merit Scholarship Program.</p>
  </section>

  <section class="grid grid--2 psat-grid">
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-grad wow fadeInLeft" data-wow-delay=".5s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/happy-grad.png">
      <h3 class="grid-headline">WINNING CURRICULUM</h3>
      <p class="grid-text">Stemming from our core SAT + ACT test prep program, our PSAT curriculum has been carefully developed to help students get their most competitive score. Our rockstar students have even gone on to be National Merit Scholars!</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-easy-button wow fadeInLeft" data-wow-delay=".5s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/easy-button.png">
      <h3 class="grid-headline">GET A HEADSTART</h3>
      <p class="grid-text">The beauty of tackling these concepts now is that studends will find the same concepts on the real SAT. With this knowledge already ingrained to memory, students will have an easier transition when they begin preparing for the SAT + ACT.</p>
    </div>
  </section>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/rside-vinyl-player.jpg');">
</section>

<section class="typical-program">
  <h2 class="typical-program-headline">What a typical course looks like...</h2>
  <div class="grid grid--gutters grid--4">
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">12 WEEKS</h3>
        <p class="typical-program-desc">We always recommend that students start studying at least 12 weeks before their exam date.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">STARTER PACK</h3>
        <p class="typical-program-desc">Students get 6 MeriEducation PSAT lesson books, Test Book, Pacing Session Book, and specially designed Meri-tote bag.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">NINJAS</h3>
        <p class="typical-program-desc">Students are paired with 1 English Tutor + 1 Math Tutor per week.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">PRACTICE</h3>
        <p class="typical-program-desc">Schedule full-length practice exams weekly to get a feel for the real thing. Students are always welcome to study at the center at no additional cost.</p>
      </div>
    </div>
  </div>
</section>

<section class="psat-bulbs">
  <img class="wow pulse" data-wow-delay=".3s" data-wow-duration=".3s" data-wow-iteration="2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testprep-psat-vector.png">
</section>

<section class="grid grid--3 services-breakout-nav">
  <div class="grid-cell">
    <a href="<?php echo home_url( '/our-philosophy/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-and-kid-with-bow-3x2.jpg">
        <h2>WHY 1-ON-1 WORKS</h2>
      </div>
      Learn more about our philosophy &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/sat-act/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/act-lesson-book-cover.jpg">
        <h2>ROCK THE SAT + ACT</h2>
      </div>
      Learn more about how we prep for these tests &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-lying-in-circle.jpg">
        <h2>GET INTO YOUR DREAM COLLEGE</h2>
      </div>
      Learn about our admissions consulting services &gt;
    </a>
  </div>
</section>

<?php
}

genesis();