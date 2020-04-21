<?php
/**
 * Template Name: Our Philosophy
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
add_action( 'genesis_loop', 'meri2015_about_story_loop' );

function meri2015_about_story_loop() {
?>


<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/modern-classroom-2x1.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Learn more about our difference:</p>
  <ul>
    <li><a class="active" href="<?php echo home_url( '/our-philosophy/' ); ?>">Philosophy</a></li>
    <li><a href="<?php echo home_url( '/tutors/' ); ?>">Meet Our Ninjas</a></li>
    <li><a href="<?php echo home_url( '/testimonials/' ); ?>">Testimonials</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section id="ourphilosophy" class="about-story-philosophy">
  <div class="wrap">
    <h2>Our Philosophy</h2>
    <p>is that a student's success can be highly affected by his or her learning environment - happy people, fresh smells, modern spaces, and positive energy are all conducive to how a student studies. From each center's themed interior design to our snazzy MeriPlanners, we instill the beauty of learning in everything that we do.</p>
  </div>
</section><!-- .about-story-philosophy -->

<section class="about-story-grand-vision">
    <div class="wrap">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/grandvision.png">
      <h2 class="textbolding">It All Started With A <span>Grand Vision</span>:</h2>
      <p>Build a learning center that is more than just a few chairs and tables. In 2007, MeriEducation founder Joan Nguyen developed a service positioned as an alternative to cookie-cutter educational programs that exist.</p>
      <p>At age 21 and with only $3,000 in personal savings, she created a learning experience founded on quality, innovation, effectiveness, and passion. One center evolved into four, and now, MeriEducation continues to overturn what families know of tutoring through our uniquely designed centers, our incredible staff, our techy innovation, and our personal touch.</p>
    </div>
</section><!-- .about-story-grand-vision -->


<section class="about-our-growth">

  <h2 class="textbolding">Our <span>Growth</span></h2>

  <section id="cd-timeline" class="cd-container">
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-green">
        <!-- <img src="img/cd-icon-picture.svg" alt="Picture"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2007</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-orange-bulb.png">
          </div>
          <div class="media-body">
            <h2>THE BEGINNING</h2>
            <p>Joan starts MeriEducation with her first office in Downtown Riverside - a humble 600 sq foot room on Brockton Street.</p>
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2009</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-green-house.png" alt="">
          </div>
          <div class="media-body">
            <h2>MERIRIVERSIDE IS BORN</h2>
            <p>We open our first brick-and-mortar location on Central Ave.</p>
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2011</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-blue-house.png" alt="">
          </div>
          <div class="media-body">
            <h2>MERIREDLANDS OPENS!</h2>
            <p>Hooray for our second center in the Inland Empire.</p>
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2012</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-orange-news.png" alt="">
          </div>
          <div class="media-body">
            <h2>"BEST OF THE IE"</h2>
            <p>We get featured in the Inland Empire Magazine's coveted "Best of the IE" list!</p>
            <img class="award-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-ie.jpg">
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2013</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-green-house.png" alt="">
          </div>
          <div class="media-body">
            <h2>MERINEWPORT OPENS!</h2>
            <p>MeriEducation moves west to the OC as a third center is added to our family.</p>
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2013</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-blue-star.png" alt="">
          </div>
          <div class="media-body">
            <h2>DOUBLE-WHAMMY!</h2>
            <p>Joan receives the Spirit of the Entrepreneur "Small Enterprise" award and is recognized as part of Empact Showcase's Top 15 Young Entrepreneurs in the Nation.</p>
            <img class="award-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/award-spirit.jpg">
            <img class="award-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/award-empact.png">
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2014</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-orange-star.png" alt="">
          </div>
          <div class="media-body">
            <h2>WE GET INVITED TO THE U.N.</h2>
            <p>Joan is nationally recognized as Empact Showcase's Entrepreneur of the Year and is invited to the U.N. to accept her award.</p>
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2014</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-green-star.png" alt="">
          </div>
          <div class="media-body">
            <h2>"BEST TUTORING CENTER"</h2>
            <p>MeriEducation is recognized as the best tutoring center in the Inland Empire by the Pulitzer-winning newspaper, The Press-Enterprise</p>
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2015</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-blue-star.png" alt="">
          </div>
          <div class="media-body">
            <h2>HELLO PASADENA!</h2>
            <p>MeriPasadena opens in the buzzing South Lake District and becomes the headquarters for all things MeriEd.</p>
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2015</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-orange-phone.png" alt="">
          </div>
          <div class="media-body">
            <h2>YEAH, WE MADE SOME APPS.</h2>
            <p>Cardology, our mobile app series for our AP + ACT students launches and becomes one of the most popular AP + ACT flashcard review apps on the iTunes store.</p>
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-orange">
        <!-- <img src="img/cd-icon-movie.svg" alt="Movie"> -->
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <div class="media">
          <div class="media-figure">
            <span class="cd-date">2015</span>
            <img class="timeline-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/timeline-green-star.png" alt="">
          </div>
          <div class="media-body">
            <h2>WE GET A STEVIE!</h2>
            <p>MeriEducation wins the Bronze in the 12th Annual Stevie Awards for Women in Business. The Stevie Awards have been hailed as the world's premier business awards.</p>
            <img class="award-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/award-stevie.png">
          </div>
        </div>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block cd-timeline-terminator">
      <div class="cd-timeline-img cd-orange">
      </div> <!-- cd-timeline-img -->
    </div> <!-- cd-timeline-block -->


  </section> <!-- cd-timeline -->



</section><!-- .about-story-growth -->


<section class="page-mast parallax-mast" data-position="left center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/about-story-04.jpg');">
</section>

<section class="about-story-not-a-franchise">
  <div class="wrap wrap-sm">
    <h2 class="textbolding">WE ARE <span>NOT</span> A FRANCHISE</h2>
    <p>YES - these photos you see are of our real centers and our real students! New clients readily assume that these are stock photos or models in sets like many other centers use. From your first consultation with a Director to your first visit, you’ll soon realize that MeriEducation is different from every other tutoring or test prep center you’ve ever experienced.</p>
    <p>We are never looking for the easiest way to make a profit. We don’t believe in trying to stuff as many students as we can into a room and throwing a dated packet at them. Our programs are developed with the individual student in mind with all materials developed in-house and updated regularly. We’re a team who truly cares about our students and believe that this is a better way to learn.</p>
  </div>


  <section class="about-story-happiness">
    <div class="wrap">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-story-students-collage.jpg">
    </div>
  </section>

  <div class="testimonial-cta-wrap">
    <a class="" href="<?php echo home_url( '/testimonials/' ); ?>">Check out what people have to say about us &gt;</a>
  </div>

</section><!-- .about-story-not-a-franchise -->

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/about-story-interlude-03.jpg');">
</section>

<section id="ourtutors" class="about-story-tutors">
    <h2 class="textbolding">We are <span>tutoring ninjas</span>.</h2>
    <div class="ninjas-wrap">
      <p>Not just anyone can fulfill this important role. All MeriEducation instructors have the smarts to teach and the winning personality to engage. In order to teach a certain subject, instructors must score in at least the 98th percentile in their subject of instruction, but being dry, bossy, or condescending won’t land a job with us.</p>
      <p>We match a student with a tutor that fits his or her personality, but it doesn’t end there. Accountability is a big deal as tutors write progress reports to parents after each session, and students write regular evaluations on their tutors. Our students are family, and nothing makes us happier than seeing them succeed.</p>
      <img class="about-story-ninja" src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatmakesninja.png">
    </div>
    <div class="testimonial-cta-wrap">
      <a class="" href="<?php echo home_url( '/tutors/' ); ?>">Get to know all of our wonderful Meri-Ninjas &gt;</a>
    </div>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/about-story-interlude-04.jpg');">
</section>

<section id="why1on1" class="about-story-why-1-on-1">
  <div class="wrap">
    <h2 class="textbolding">Why <span>1-on-1</span></h2>
    <p>Every student is unique in his or her learning style and pace, which means every student deserves an individualized approach that is fluid to his or her progress. This is where hyper-customization comes in.</p>
  </div>
</section><!-- .about-story-why-1-on-1 -->

<section class="about-story-hyper-customization">
  <div class="about-story-hc-item">
    <div class="row__primary">
      <img class="alignright" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fluid-tutoring-map.png">
    </div>
    <div class="row__secondary">
      <h3 class="textbolding">Fluid <span>Tutoring</span></h3>
      <p>During your initial consultation, we design a course that works around your schedule and provides the help you really need. Whether a student just needs a little review time every other week or intensive foundation building a few times a week, we’ll make it work alongside football practices, mock trial schedules, and ASB meetings.</p>
    </div>
  </div>
  <div class="about-story-hc-item">
    <div class="row__primary">
      <img class="alignright" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fluid-tutoring-flex.png">
    </div>
    <div class="row__secondary">
      <h3 class="textbolding">Dual <span>Adaptation</span></h3>
      <p>It’s a 2-way street. A student is opened up to his or her possible potential through the tutor, and the tutor also adjusts the lesson to the student's learning style.</p>
    </div>
  </div>
  <div class="about-story-hc-item">
    <div class="row__primary">
      <img class="alignright" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fluid-tutoring-calibration.png">
    </div>
    <div class="row__secondary">
      <h3 class="textbolding">Re<span>calibration</span></h3>
      <p>We check in on a student's progress and evaluate what the next best steps are. Do you really need more tutoring, or do you just need to take some practice tests for a couple of weeks to prep for the big exam date? We'll let you know what you need and don't need!</p>
    </div>
  </div>
</section><!-- .about-story-hyper-customization -->

<section class="grid grid--3 services-breakout-nav">
  <div class="grid-cell">
    <a href="<?php echo home_url( '/classes/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-with-big-glasses-3x2.jpg">
        <h2>CLASS HELP YOU NEED</h2>
      </div>
      Learn about our class help services &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/test-prep/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/smiling-student-studying.jpg">
        <h2>START TEST PREP</h2>
      </div>
      Learn about our test prep services &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-lying-in-circle.jpg">
        <h2>GET INTO YOUR DREAM COLLEGE</h2>
      </div>
      Learn about our admissions consulting services &gt;
    </a>
  </div>
</section>

<?php
}

genesis();