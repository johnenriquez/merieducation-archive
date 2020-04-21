<?php
/**
 * Template Name: Classes
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
add_action( 'genesis_loop', 'meri2015_classes_loop' );

function meri2015_classes_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-in-big-glasses.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more help with classes:</p>
  <ul>
    <li><a href="<?php echo home_url( '/subject-tutoring/' ); ?>">Subject Tutoring</a></li>
    <li><a href="<?php echo home_url( '/academic-coaching/' ); ?>">Academic Coaching</a></li>
    <li><a href="<?php echo home_url( '/college-students/' ); ?>">College Students</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="page-lede">
  <h2 class="page-lede-headline textbolding">ROCKSTARS, YOU CAN DO IT.<br><span>LET's GET YOUR GRADES UP.</span></h2>
  <p class="page-lede-text">Say goodbye to frustration. We dive in to figure out how to make things click. Whether that's getting you ready for the final exam or doing some serious GPA rehabilitation, we've got you covered.</p>
</section>

<section class="landing-page-nav">
  <h2 class="landing-page-nav-headline">PICK A CLASS HELP SERVICE TO LEARN MORE</h2>
  <ul class="landing-page-nav-list classes-landing-page-nav-list">
    <li>
      <a href="<?php echo home_url( '/subject-tutoring/' ); ?>">
        <h3>Subject Tutoring</h3>
        <p>For 1-on-1 help you need in every subject that matters.</p>
      </a>
    </li>
    <li>
      <a href="<?php echo home_url( '/academic-coaching/' ); ?>">
        <h3>Academic Coaching</h3>
        <p>For a more aggressive program to saving your grades.</p>
      </a>
    </li>
    <li>
      <a href="<?php echo home_url( '/college-students/' ); ?>">
        <h3>College Students</h3>
        <p>For our rockstars who've successfully made it through high school, but would still like a little help in college.</p>
      </a>
    </li>
  </ul>
</section>

<?php
}

genesis();