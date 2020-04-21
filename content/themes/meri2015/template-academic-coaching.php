<?php
/**
 * Template Name: Academic Coaching
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
add_action( 'genesis_loop', 'meri2015_academic_loop' );

function meri2015_academic_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/meri-tote-bag.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more help with classes:</p>
  <ul>
    <li><a href="<?php echo home_url( '/subject-tutoring/' ); ?>">Subject Tutoring</a></li>
    <li><a class="active" href="<?php echo home_url( '/academic-coaching/' ); ?>">Academic Coaching</a></li>
    <li><a href="<?php echo home_url( '/college-students/' ); ?>">College Students</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline">NINJAS TO THE RESCUE!</h2>
    <p class="page-lede-text">Need to take an aggressive approach towards getting your grades up? You might need an Academic Coach to invest more focused time on your progress at school.</p>
  </section>

  <section class="grid grid--3 satact-grid" style="margin-top: 1.5em;">
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-stethoscope wow fadeInUp" data-wow-delay=".5s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/stethoscope.png">
      <h3 class="grid-headline">GRADE REHABILITATION</h3>
      <p class="grid-text">Coach + project manager comes on board, troubleshoots what went wrong, and checks in weekly to discuss progress. We communicate with teachers to see how to best prepare for upcoming tests and help broker "grade rehabilitation" deals for students.</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-phone wow fadeInUp" data-wow-delay=".7s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/chat-phone.png">
      <h3 class="grid-headline">WE DO THE NAGGING</h3>
      <p class="grid-text">We constantly monitor a student's progress by the coach + project manager (expect lots of follow-up emails, texts, and calls!). Coaches are familiar with almost all learning platforms commonly utilized by schools, such as PowerSchool, SchoolLoop, NetClassroom, Aeries, Moodle, and so forth.</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-brains wow fadeInUp" data-wow-delay=".9s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/brains.png">
      <h3 class="grid-headline">STUDENT DEVELOPMENT</h3>
      <p class="grid-text">You'll also learn efficient time management skills and study habits to avoid future pitfalls! We schedule in-center study time at no cost, and if needed, additional tutoring time can be scheduled as well (billed separately).</p>
    </div>
  </section>
</section>

<section class="instagram-testimonial">
  <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://instagram.com/p/32jxoLiiqe/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_top">Omg! My student Tommy from #LoyolaHighSchool bought me flowers for helping him with his finals. I would be remiss to think that I was the reason Tommy did well. Tommy committed to SIX hours of studying on Sunday. He redid every single one of his chapter review questions, redid all the questions he missed on previous tests and quizzes, endured a 30-page mock final I prepared for him, and came prepared to his tutoring sessions with his tutor Ron. Tommy improved his grade THREE letter grades because he&#39;s a rockstar. He never complained and did anything and everything possible to raise his grade. We are ALL so proud of you, Tommy! Did I mention he also had football practice throughout all this?  The harder you work, the luckier you get. Spend every day doing what you love, and you will never have to work a day in your life. </a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by MeriEducation (@merieducation) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-06-13T02:25:18+00:00">Jun 12, 2015 at 7:25pm PDT</time></p></div></blockquote>
  <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
</section>

<section class="grid grid--3 services-breakout-nav">
  <div class="grid-cell">
    <a href="<?php echo home_url( '/test-prep/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/smiling-student-studying.jpg">
        <h2>START YOUR TEST PREP</h2>
      </div>
      Learn about our test prep services &gt;
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