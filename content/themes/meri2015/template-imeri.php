<?php
/**
 * Template Name: iMeri
 *
 * @package meri2015
 */

// full bleed
add_filter( 'body_class', 'add_full_bleed_class' );
function add_full_bleed_class( $classes ) {
  $classes[] = 'full-bleed t-imeri';
  return $classes;
}

//* HARDCODED PAGE
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'meri2015_imeri_loop' );

function meri2015_imeri_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-at-computer.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">More Resources:</p>
  <ul>
    <li><a class="active" href="<?php echo home_url( '/imeri/' ); ?>">iMeri</a></li>
    <li><a href="<?php echo home_url( '/cardology/' ); ?>">Cardology</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline">WELCOME TO IMERI</h2>
    <p class="page-lede-text">Our online tutoring platform is just another way we’re making learning easier.</p>
  </section>

  <section class="grid grid--2 imeri-grid" style="align-items: center;">
    <div class="grid-cell grid-cell--padded">
      <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/iMeri-vector.png">
    </div>
    <div class="grid-cell grid-cell--padded imeri-cell">
      <h3 class="grid-headline">The SAME MERI-QUALITY,<br>FROM THE COMFORT OF YOUR HOME</h3>
      <p class="grid-text">Don’t live in the neighborhood? In the city? Within driving distance? Out of state?! Or maybe you just don’t want to get out of your jammies. No worries - we got you.</p>
    </div>
  </section>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/headphones-on-table.jpg');">
</section>

<!-- <img class="vector-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/curriculum-01.png"> -->

<section class="typical-program">
  <h2 class="typical-program-headline">WHAT TO EXPECT</h2>
  <div class="grid grid--gutters grid--4">
    <div class="grid-cell affordable-cell">
      <div class="typical-program-cell wow flipInX" data-wow-delay="0.0s">
        <h3 class="typical-program-subheadline">MORE AFFORDABLE</h3>
        <p class="typical-program-desc">Starting as low as $48 per hour.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell wow flipInX" data-wow-delay="0.3s">
        <h3 class="typical-program-subheadline">CUT THE COMMUTE</h3>
        <p class="typical-program-desc">Save precious time and avoid those scheduling nightmares in the day.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell wow flipInX" data-wow-delay="0.6s">
        <h3 class="typical-program-subheadline">JUST AS EFFECTIVE</h3>
        <p class="typical-program-desc">We use video conferencing, screen sharing technology, and other tools to ensure highest levels of productivity + engagement.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell wow flipInX" data-wow-delay="0.9s">
        <h3 class="typical-program-subheadline">SAME NINJAS YOU LOVE</h3>
        <p class="typical-program-desc">Our online tutors are the same tutors you see in our centers. These are humans you trust and have already been certified by our safety protocols. No randoms.</p>
      </div>
    </div>
  </div>
  <div style="text-align: center; flex: 1; flex-basis: 100%;">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/imeri-screens.png" style="width: 100%; max-width: 40em;">
  </div>
</section>


<section class="grid grid--3 services-breakout-nav">
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
    <a href="<?php echo home_url( '/our-philosophy/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-and-kid-with-bow-3x2.jpg">
        <h2>WHY 1-ON-1 WORKS</h2>
      </div>
      Learn more about our philosophy &gt;
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