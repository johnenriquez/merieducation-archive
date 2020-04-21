<?php
/**
 * Template Name: Cardology
 *
 * @package meri2015
 */

// full bleed AND cardology
add_filter( 'body_class', 'add_full_bleed_class' );
function add_full_bleed_class( $classes ) {
  $classes[] = 'full-bleed t-cardology';
  return $classes;
}

//* HARDCODED PAGE
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'meri2015_cardology_loop' );

function meri2015_cardology_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-on-table.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">More Resources:</p>
  <ul>
    <li><a href="<?php echo home_url( '/imeri/' ); ?>">iMeri</a></li>
    <li><a class="active" href="<?php echo home_url( '/cardology/' ); ?>">Cardology</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline">YEAH, WE MADE SOME APPS.<br>CHECK OUT CARDOLOGY.</h2>
    <p class="page-lede-text">After nearly a decade of understanding test prep and how students learn, we developed Cardology - the flashcard style app series for the modern student.</p>
  </section>

  <section class="cardology-grid">
    <div class="cardology-slider-cell">
      <ul class="cardology-slider">
        <li><img class="cardology-slide-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-euro.jpeg"></li>
        <li><img class="cardology-slide-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-bio.png"></li>
        <li><img class="cardology-slide-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-chemistry.png"></li>
        <li><img class="cardology-slide-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-eng.png"></li>
        <li><img class="cardology-slide-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-history.png"></li>
        <li><img class="cardology-slide-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-math.png"></li>
        <li><img class="cardology-slide-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-psych.jpeg"></li>
      </ul>
    </div>
    <div class="cardology-cell">
      <p class="grid-text">These ACT + AP Subject Review flashcards do everything from review concepts, provide practice problems, track your progress, and even connect you with a 1-on-1 tutor.</p>
      <a href="https://itunes.apple.com/us/developer/cardology/id967490614"><img class="app-store-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-store-badge.png"></a>
    </div>
  </section>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-on-table-overhead.jpg');">
</section>

<section class="page-lede">
  <p class="page-lede-text">Super-easy-to-use study aid with a beautiful user interface loved by students not only at our center but also around the world.</p>
</section>

<section class="grid grid--3">
  <div class="grid-cell">
    <div style="text-align: center; padding: 1em">
      <img class="wow flipInY" data-wow-duration="1.3s" data-wow-delay=".2s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology1.jpg">
    </div>
    <!-- <img class="vector-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/curriculum-01.png"> -->
  </div>
  <div class="grid-cell">
    <div style="text-align: center; padding: 1em">
      <img class="wow flipInY" data-wow-duration="1.3s" data-wow-delay=".5s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology2.jpg">
    </div>
    <!-- <img class="vector-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/curriculum-01.png"> -->
  </div>
  <div class="grid-cell">
    <div style="text-align: center; padding: 1em">
      <img class="wow flipInY" data-wow-duration="1.3s" data-wow-delay=".8s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology3.jpg">
    </div>
    <!-- <img class="vector-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/curriculum-01.png"> -->
  </div>
</section>

<div class="cardology-stats">
  <div class="cardology-stats-card">
    <p class="stats-number">7000+</p>
    <p class="stats-label">FLASHCARDS</p>
  </div>
  <div class="cardology-stats-card">
    <p class="stats-number">7</p>
    <p class="stats-label">MOBILE APPS</p>
  </div>
  <div class="cardology-stats-card">
    <p class="stats-number">1000+</p>
    <p class="stats-label">DOWNLOADS A WEEK</p>
  </div>
  <div class="cardology-stats-card">
    <p class="stats-number">30+</p>
    <p class="stats-label">COUNTRIES</p>
  </div>
</div>

<!-- <img class="vector-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/curriculum-01.png"> -->
<div style="text-align: center; padding: 1em; margin-left: auto; margin-right: auto; max-width: 28em;">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-workers.jpg">
</div>

<section class="grid grid--3 services-breakout-nav">
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
    <a href="<?php echo home_url( '/college-admissions/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-lying-in-circle.jpg">
        <h2>GET INTO YOUR DREAM COLLEGE</h2>
      </div>
      See how we can help you get into college &gt;
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
</section>

<?php
}

genesis();