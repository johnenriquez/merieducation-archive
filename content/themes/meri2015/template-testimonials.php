<?php
/**
 * Template Name: Testimonials
 *
 * @package meri2015
 */

// full bleed AND testimonial page
add_filter( 'body_class', 'add_full_bleed_class' );
function add_full_bleed_class( $classes ) {
  $classes[] = 'full-bleed t-testimonial-page';
  return $classes;
}

//* HARDCODED PAGE
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'meri2015_testimonials_loop' );

function meri2015_testimonials_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-tossing-confetti.jpg');">
</section>
<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Learn more about our difference:</p>
  <ul>
    <li><a href="<?php echo home_url( '/our-philosophy/' ); ?>">Philosophy</a></li>
    <li><a href="<?php echo home_url( '/tutors/' ); ?>">Meet Our Ninjas</a></li>
    <li><a class="active" href="<?php echo home_url( '/testimonials/' ); ?>">Testimonials</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="page-lede">
  <h2 class="page-lede-headline">WE LOVE OUR CLIENTS</h2>
  <p class="page-lede-text">And they love us back! Watch what they have to say about us:</p>
</section>

<div class="testimonials-main-vid">
  <div class="player">
    <iframe src="https://player.vimeo.com/video/150212311?api=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    <img class="cover-photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials-video-frame.jpg">
    <div id="play-button" class="play-button">
      <i class="fa fa-play-circle-o"></i>
    </div>
  </div>
</div>

<section class="page-lede" style="margin: 1.5em auto;">
  <h3 class="page-lede-headline" style="margin-top: 1.5em;">READ MORE BELOW!</h3>
</section>

<style>

  .l,
  .m,
  .s { width: 100%; }
  @media (min-width: 400px) {
    .l { width: 400px; }
    .m { width: 400px; }
    .s { width: 190px; }
  }

  .masonry-grid {
    text-align: center;
    margin-left: auto;
    margin-right: auto;
  }
    @media (min-width: 400px) { .masonry-grid { width: 400px; } }
    @media (min-width: 610px) { .masonry-grid { width: 610px; } }
    @media (min-width: 820px) { .masonry-grid { width: 820px; } }
    @media (min-width: 1030px) { .masonry-grid { width: 1030px; } }
    @media (min-width: 1240px) { .masonry-grid { width: 1240px; } }
    @media (min-width: 1450px) { .masonry-grid { width: 1450px; } }

  .masonry-grid-item {
    display: inline-block;
    margin-bottom: 20px;
  }
</style>

<section class="testimonial-section-2" style="text-align: center; max-width: 1600px; margin-left: auto; margin-right: auto;">

<div class="masonry-grid">

<img class="masonry-grid-item l" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-01-l.png">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-02-s.jpg">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-03-s.jpg">
<img class="masonry-grid-item m" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-04-m.png">
<img class="masonry-grid-item m" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-05-m.png">
<img class="masonry-grid-item l" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-06-l.png">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-07-s.jpg">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-08-s.jpg">
<img class="masonry-grid-item l" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-09-l.png">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-10-s.jpg">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-11-s.jpg">
<img class="masonry-grid-item m" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-12-m.png">
<img class="masonry-grid-item m" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-13-m.png">
<img class="masonry-grid-item l" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-14-l.png">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-15-s.jpg">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-16-s.jpg">
<img class="masonry-grid-item l" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-17-l.png">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-18-s.jpg">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-19-s.jpg">
<img class="masonry-grid-item m" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-20-m.png">
<img class="masonry-grid-item m" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-21-m.png">
<img class="masonry-grid-item l" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-22-l.png">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-23-s.jpg">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-24-s.jpg">
<img class="masonry-grid-item l" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-25-l.png">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-26-s.jpg">
<img class="masonry-grid-item s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-27-s.jpg">
<img class="masonry-grid-item m" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonial-28-m.png">

</div>

</section>

<section class="grid grid--3 services-breakout-nav">
  <div class="grid-cell">
    <a href="<?php echo home_url( '/tutors/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-with-big-glasses.jpg">
        <h2>MEET OUR NINJAS</h2>
      </div>
      Get to know our fabulous instructors &gt;
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
    <a href="<?php echo home_url( '/imeri/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/headphones-3x2.jpg">
        <h2>GO DIGITAL</h2>
      </div>
      Learn about online tutoring with iMeri &gt;
    </a>
  </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>

<script>
jQuery(document).ready(function($) {

  $('.masonry-grid').imagesLoaded( function() {
    $('.masonry-grid').masonry({
      // columnWidth: 190,
      columnWidth: '.s',
      gutter: 20,
      itemSelector: '.masonry-grid-item',
      // isFitWidth: true,
      // percentPosition: true,
      // isResizable: true
    });
  });
});
</script>

<?php
}

genesis();