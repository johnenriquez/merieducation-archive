<?php
/**
 * Template Name: Subject Tutoring
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
add_action( 'genesis_loop', 'meri2015_subject_tutoring_loop' );

function meri2015_subject_tutoring_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-and-kid-laughing.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more help with classes:</p>
  <ul>
    <li><a class="active" href="<?php echo home_url( '/subject-tutoring/' ); ?>">Subject Tutoring</a></li>
    <li><a href="<?php echo home_url( '/academic-coaching/' ); ?>">Academic Coaching</a></li>
    <li><a href="<?php echo home_url( '/college-students/' ); ?>">College Students</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline">LET'S BREAK IT DOWN</h2>
    <p class="page-lede-text">With 1-on-1 instruction, we're able to give you the exact help you need, presenting the concepts in different ways until we find one that clicks with your learning style. After that, it's all about getting you the right practice materials and resources to keep you ahead in the game.</p>
  </section>

  <section class="classes-blocks">
    <img class="classes-block__item wow flipInX" data-wow-delay=".1s" data-wow-offset="10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/classes-blocks-math.png">
    <img class="classes-block__item wow flipInX" data-wow-delay=".2s" data-wow-offset="10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/classes-blocks-english.png">
    <img class="classes-block__item wow flipInX" data-wow-delay=".3s" data-wow-offset="10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/classes-blocks-history.png">
    <img class="classes-block__item wow flipInX" data-wow-delay=".4s" data-wow-offset="10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/classes-blocks-science.png">
    <img class="classes-block__item wow flipInX" data-wow-delay=".5s" data-wow-offset="10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/classes-blocks-business.png">
    <img class="classes-block__item wow flipInX" data-wow-delay=".6s" data-wow-offset="10" src="<?php echo get_stylesheet_directory_uri(); ?>/img/classes-blocks-language.png">
  </section>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/pasadena-binder-clips.jpg');">
</section>

<blockquote class="testimonial--callout testimonial--callout--raised">
  <p class="testimonial-quote">"Thank you for helping those struggling learners succeed in every way possible! Always going above and beyond the call of duty, you produce confident, life-long learners."</p>
  <footer class="testimonial-author">-Leah L., Parent</footer>
</blockquote>

<section class="typical-program">
  <h2 class="typical-program-headline">What a typical course might look like...</h2>
  <div class="grid grid--gutters grid--3">
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">BIG OR SMALL</h3>
        <p class="grid-text">Maybe you just need one massive review session or maybe you need to come in once a week. We'll create a plan of attack to help you ace that test on Friday or bring up your grade in the class.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">STUDY LAB</h3>
        <p class="grid-text">Need a quiet place to review? Or maybe you just like hanging out with us! Students are always welcome to utilize our facility.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">MINUTES AT A TIME</h3>
        <p class="grid-text">Outside of our standard sessions, tutors can also be booked for a few minutes at a time to create worksheets, make detailed study guides, email teachers, and answer quick questions a student might have while studying. This is super-effective for students who need to just check in and great for parents who can split up the hourly rate.</p>
      </div>
    </div>
  </div>
</section>

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
    <a href="<?php echo home_url( '/academic-coaching/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-and-student-at-computer.jpg">
        <h2>SAVE YOUR GPA</h2>
      </div>
      Learn about academic coaching &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/ap/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/three-students-at-green-wall.jpg">
        <h2>AP BOOTCAMP</h2>
      </div>
      Learn more about our AP Bootcamps &gt;
    </a>
  </div>
</section>


<?php
}

genesis();