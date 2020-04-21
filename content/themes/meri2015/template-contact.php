<?php
/**
 * Template Name: Contact
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
add_action( 'genesis_loop', 'meri2015_contact_loop' );

function meri2015_contact_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/pasadena-exterior.jpg');">
</section>

  <section class="try-us-free try-us-free--contact">
    <div class="wrap">
      <h2>Try Us For Free</h2>
      <p>Before you sign any contracts, we want to make sure we're a good fit for you.<br>First time clients receive a complimentary consultation and tutoring session.</p>
      <a class="button try-us-free-modal" href="#try-us-modal">Let's Get Started &gt;</a>
    </div>
  </section><!-- .try-us-free -->

  <section class="contact-locations">
    <div class="wrap">
      <h2 class="textbolding">VISIT ONE OF OUR CENTERS</h2>

      <div class="one-fourth first">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior-pasadena.jpg">
        <h3>Pasadena</h3>
        <ul>
            <li>845 Cordova St.<br>Pasadena, CA 91101</li>
            <li>626.639.8810</li>
            <li><a href="www.yelp.com/biz/merieducation-pasadena"><i class="fa fa-yelp"></i>Yelp</a></li>
        </ul>
      </div>

      <div class="one-fourth">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior-newport.jpg">
        <h3>Newport Beach</h3>
        <ul>
            <li>1280 Bison Ave, Unit B3<br>Newport Beach, CA 92660</li>
            <li>949.734.0081</li>
            <li><a href="www.yelp.com/biz/merieducation-newport-beach"><i class="fa fa-yelp"></i>Yelp</a></li>
        </ul>
      </div>

      <div class="one-fourth">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior-redlands.jpg">
        <h3>Redlands</h3>
        <ul>
            <li>1455 Ford St, Ste 104<br>Redlands, CA 92373</li>
            <li>909.918.6374</li>
            <li><a href="www.yelp.com/biz/merieducation-redlands"><i class="fa fa-yelp"></i>Yelp</a></li>
        </ul>
      </div>

      <div class="one-fourth">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior-riverside.jpg">
        <h3>Riverside</h3>
        <ul>
            <li>3600 Central Ave, Ste 4<br>Riverside, CA 92506</li>
            <li>951.977.1728</li>
            <li><a href="www.yelp.com/biz/merieducation-riverside"><i class="fa fa-yelp"></i>Yelp</a></li>
        </ul>
      </div>

    </div><!-- .wrap -->
  </section>

  <section class="contact-join-squad">
    <div class="wrap">
      <h2 class="textbolding" style="font-size: 1.5em;">WANT TO JOIN OUR SQUAD?</h2>
      <p>Fill out <a href="http://merieducation.com/hireme">our online application</a>, and we’ll be in touch shortly!</p>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/squad-collage.jpg" style="margin-top: 1.5em;">
    </div>
  </section>


<?php
}

genesis();