<?php
/**
 * Template Name: College Admissions
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
add_action( 'genesis_loop', 'meri2015_college_admissions_loop' );

function meri2015_college_admissions_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-popping-bubbles.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more college admissions help:</p>
  <ul>
    <li><a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">1-on-1 CONSULTING</a></li>
    <li><a href="<?php echo home_url( '/college-apps-bootcamp/' ); ?>">COLLEGE APPS BOOTCAMP</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="page-lede">
  <h2 class="page-lede-headline textbolding">BE THE BEST YOU, AND WE'LL GET YOU INTO <span>THE COLLEGE PERFECT FOR THE BEST YOU</span></h2>
  <p class="page-lede-text">The admissions process is as confusing as ever. Well, never fear. With almost a decade of admissions experience under our belt, we aim to simplify this process for families.</p>
</section>

<section class="landing-page-nav">
  <h2 class="landing-page-nav-headline">PICK AN ADMISSIONS HELP SERVICE TO LEARN MORE</h2>
  <ul class="landing-page-nav-list college-admissions-landing-page-nav-list">
    <li>
      <a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">
        <h3>1-ON-1 CONSULTING</h3>
        <p>Personalized assistance throughout the entire admissions process for every school you apply to.</p>
      </a>
    </li>
    <li>
      <a href="<?php echo home_url( '/college-apps-bootcamp/' ); ?>">
        <h3>COLLEGE APPS BOOTCAMP</h3>
        <p>Intensive workshop sessions to build an effective personal statement and get your major applications done.</p>
      </a>
    </li>
  </ul>
</section>

<section class="we-helped-students">
  <h2 class="page-lede-headline textbolding" style="font-size: 1.4em">We've helped <span>hundreds</span> of students<br>get into their dream college</h2>
  <div class="college-logos">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/yale.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/american_university.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/baylor.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/berkeley.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/biola.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/chapelhill.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/chapman_university.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/cmc.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/cornell.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/george_washington_university.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/georgetown.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/hastings_law.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/lewis_and_clark.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/lmu.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/loma_linda_dentistry.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/mcphs.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/miami_university.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/midwestern.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/naval_academy.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/new_jersey_rutgers.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/northwestern.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/notredame.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/nyit.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/nyu.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/occidental.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/ohio_state.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/palm_beach_atlantic.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/penn.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/pepperdine.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/pointloma.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/smith.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/smu.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/st_johns.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/stanford.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/tcu.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/u_of_miami.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/uc_davis.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/ucla.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/ucsd.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/uoc.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/uoforegon.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/uoh.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/uom.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/us air force.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/usc.png">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/college_logos/uta.png">
  </div>

  <h2 class="landing-page-nav-headline">AND MANY MORE</h2>

</section>

<?php
}

genesis();