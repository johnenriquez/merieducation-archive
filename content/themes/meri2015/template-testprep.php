<?php
/**
 * Template Name: Test Prep
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
add_action( 'genesis_loop', 'meri2015_testprep_loop' );

function meri2015_testprep_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/girl-studying.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more test prep help:</p>
  <ul>
    <li><a href="<?php echo home_url( '/sat-act/' ); ?>">SAT+ACT</a></li>
    <li><a href="<?php echo home_url( '/isee/' ); ?>">ISEE+SSAT+HSPT</a></li>
    <li><a href="<?php echo home_url( '/ap/' ); ?>">AP</a></li>
    <li><a href="<?php echo home_url( '/psat/' ); ?>">PSAT</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="page-lede">
  <h2 class="page-lede-headline textbolding">STUDY HARD, BUT WITH A SMILE.<br><span>GET STARTED WITH TEST PREP.</span></h2>
  <p class="page-lede-text">We break down everything you need to know for these major tests and make things a little fun along the way. These tests are a big deal, but we can tackle them together, one lightbulb moment at a time.</p>
</section>

<section class="landing-page-nav">
  <h2 class="landing-page-nav-headline">LEARN MORE ABOUT OUR TEST PREP SERVICES</h2>
  <ul class="landing-page-nav-list test-prep-landing-page-nav-list">
    <li>
      <a href="<?php echo home_url( '/sat-act/' ); ?>">
        <h3>SAT + ACT</h3>
        <p>For our rockstars who are sophomores and juniors.</p>
      </a>
    </li>
    <li>
      <a href="<?php echo home_url( '/isee/' ); ?>">
        <h3 style="font-size: 1.2em;">ISEE + SSAT + HSPT</h3>
        <p>For our younger rockstars applying to a private middle/high school.</p>
      </a>
    </li>
    <li>
      <a href="<?php echo home_url( '/ap/' ); ?>">
        <h3>AP</h3>
        <p>For our high school rockstars taking Advanced Placement courses.</p>
      </a>
    </li>
    <li>
      <a href="<?php echo home_url( '/psat/' ); ?>">
        <h3>PSAT</h3>
        <p>For our rockstars taking this important precursor to the SAT + ACT.</p>
      </a>
    </li>
  </ul>
</section>

<?php
}

genesis();