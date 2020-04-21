<?php
/**
 * Template Name: Homepage
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
add_action( 'genesis_loop', 'meri2015_homepage_loop' );

function meri2015_homepage_loop() {
?>

  <section class="homepage-announcements vcentered-headline-container">
    <div class="homepage-experience-tutoring vcentered-headline">
      <h2>You've never experienced tutoring like this.</h2>
      <p>Forget the stale carpeted rooms packed with unhappy students, drab tutors, and pricey packages that those <em>other</em> centers try to sell you - we've created a new way to learn.</p>
      <a class="button try-us-free-modal" href="#try-us-modal">Try Us For Free</a>
    </div><!-- .homepage-experience-tutoring -->
  </section>

  <section class="homepage-hassle-free">
    <div class="wrap">
      <h2 class="textbolding">HERE'S HOW WE ARE RETHINKING<br><span>AFTERSCHOOL EDUCATION</span></h2>
      <p>Get hassle-free, personalized help with classes, test prep, and college admissions.</p>
      <div class="player">
        <iframe id="consumer-video" src="https://player.vimeo.com/video/149729214?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <img class="cover-photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/digital-solutions-video-frame.jpg">
        <div id="play-button" class="play-button">
          <i class="fa fa-play-circle-o"></i>
        </div>
      </div>
      <!-- <img class="homepage-hasslefree-icons" src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-hasslefree-02.png"> -->
      <div class="hasslefree-row">
        <div class="hasslefree-card">
          <img class="hasslefree-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hasslefree-bubbles.png">
          <p class="grid-text">Call or text to schedule your tutor</p>
        </div>
        <div class="hasslefree-card">
          <img class="hasslefree-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hasslefree-markers.png">
          <p class="grid-text">1-on-1 sessions in center or online</p>
        </div>
        <div class="hasslefree-card">
          <img class="hasslefree-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hasslefree-graph.png">
          <p class="grid-text">Get emailed session reports</p>
        </div>
        <div class="hasslefree-card">
          <img class="hasslefree-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hasslefree-piggybank.png">
          <p class="grid-text">Pay as you go + Schedule as you need</p>
        </div>
      </div>
    </div>
  </section><!-- .homepage-hassle-free -->

  <section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutor_and_girl_with_bow.jpg');">
  </section>

  <section class="homepage-why-they-love-us">

    <div class="love-us-wrap">
      <div class="row__primary">
        <img class="love-us-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-love-us.png">
        <div class="hearts">
          <img class="heart1 wow fadeInUp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/heart-sm.png">
          <img class="heart2 wow fadeInUp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/heart-sm.png">
          <img class="heart3 wow fadeInUp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/heart-sm.png">
          <img class="heart4 wow fadeInUp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/heart-sm.png">
        </div>
      </div>
    </div>
    <div class="love-us-cta">
      <p><a class="" href="/testimonials/">See what clients have to say &raquo;</a></p>
    </div>
  </section><!-- .homepage-why-they-love-us -->

  <section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutors_jumping.jpg');">
  </section>

  <section class="homepage-we-do-better">
    <div class="wrap">
      <h2 class="textbolding">WE DO WHAT THEY DO. <span>JUST BETTER.</span></h2>
      <p>Discover a new world complete with tutoring ninjas, studying nirvanas, constant innovation, happy families, and successful students.</p>
    </div>
  </section><!-- .homepage-we-do-better -->

  <section class="grid grid--3 services-breakout-nav homepage-breakout-nav">
  <div class="grid-cell">
    <a href="<?php echo home_url( '/our-philosophy/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/modern-classroom.jpg">
        <h2>DON'T GET PACKED INTO A CLASSROOM</h2>
      </div>
      <p>All students are not the same. Whether it's 1-on-1 tutoring or small group bootcamps, each program is hyper-customized to each student's learning style and pace.</p>
      Learn more about our philosophy &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/testimonials/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/highfive.jpg">
        <h2>#TUTORING NINJAS</h2>
      </div>
      <p>Learning isn't painful when you're having fun - our instructors are selectively hired based on smarts and personality. Students actually like us, and parents really love us.</p>
      Check out what our clients have to say &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/imeri/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ipad-cardology-to-the-face.jpg">
        <h2>NEVER STOP INNOVATING</h2>
      </div>
      <p>Check out our digital tools like the Cardology flashcard apps and the iMeri online tutoring platform. We're always thinking up the latest and greatest for our students!</p>
      Learn about online tutoring with iMeri &gt;
    </a>
  </div>
</section>

<section class="try-us-free">
  <div class="wrap">
    <h2 class="textbolding">Try Us For <span>Free</span></h2>
    <p>Before you sign any contracts, we want to make sure we're a good fit for you.<br>First-time clients receive a complimentary consultation.</p>
    <a class="button try-us-free-modal" href="#try-us-modal">Let's Get Started &gt;</a>
  </div>
</section><!-- .try-us-free -->

<?php
}

genesis();