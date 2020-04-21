<?php
/**
 * Template Name: SAT/ACT
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
add_action( 'genesis_loop', 'meri2015_testprep_satact_loop' );

function meri2015_testprep_satact_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/meri-lesson-book-3.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more test prep help:</p>
  <ul>
    <li><a class="active" href="<?php echo home_url( '/sat-act/' ); ?>">SAT+ACT</a></li>
    <li><a href="<?php echo home_url( '/isee/' ); ?>">ISEE+SSAT+HSPT</a></li>
    <li><a href="<?php echo home_url( '/ap/' ); ?>">AP</a></li>
    <li><a href="<?php echo home_url( '/psat/' ); ?>">PSAT</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline">WE’VE GOT THE SAT+ACT ON LOCK</h2>
    <p class="page-lede-text">What started as a few typed-out pages of lessons has evolved into 1,000+ pages of SAT + ACT curriculum, all developed by the MeriEducation team.</p>
  </section>

  <section class="grid grid--2 satact-grid">
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon wow fadeInUp" data-wow-delay=".4s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/curriculum-01.png">
      <h3 class="grid-headline">WE GET CREATIVE</h3>
      <p class="grid-text">Our curriculum breaks down concepts and cements them to memory with fun tips &amp; tricks - like the Selfie section that helps you remember reflexive pronouns or the NO-O method for percentages. Plus, there’s hundreds of homework problems carefully crafted to ensure students get enough practice.</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon wow fadeInUp" data-wow-delay=".5s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/curriculum-02.png">
      <h3 class="grid-headline">WE'RE SERIOUS ABOUT R+D</h3>
      <p class="grid-text">We invest over 2,000 hours a year and over 25% of our revenue on research &amp; development, constantly keeping up to date with the newest SAT + ACT test formats, the latest education trends, and instructor/student feedback.</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon wow fadeInUp" data-wow-delay=".6s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/curriculum-03.png">
      <h3 class="grid-headline">USED AROUND THE WORLD</h3>
      <p class="grid-text">Our curriculum has not only been adapted by other test prep service providers, but we also used it to build <a href="<?php echo home_url( '/cardology/' ); ?>">Cardology</a>, a mobile app series that is helping students around the world study.</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon wow fadeInUp new-sat-vector-icon" data-wow-delay=".7s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Vector_NewSAT.png">
      <h3 class="grid-headline">THE NEW SAT IS COMING</h3>
      <p class="grid-text">Starting March 2016, Collegeboard will be putting the new SAT structure into effect. Never fear! We’re already on top of it with new practice tests and lesson updates specific to the test’s new formats.</p>
    </div>
  </section>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/test-and-timer.jpg');">
</section>

<blockquote class="testimonial--callout testimonial--callout--raised">
  <p class="testimonial-quote">MeriEducation is awesome. I raised my SAT scores by 580 points, from a 1590 to a 2170</p>
  <footer class="testimonial-author">Colby A, MeriRiverside Student USC School of Cinematic Arts</footer>
</blockquote>

<section class="typical-program">
  <h2 class="typical-program-headline">What a typical course might look like...</h2>
  <div class="grid grid--gutters grid--4">
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">12 WEEKS</h3>
        <p class="typical-program-desc">We always recommend that students start studying at least 12 weeks before their exam date.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">STARTER PACK</h3>
        <p class="typical-program-desc">Students get 6 MeriEducation lesson books, ACT/SAT Test Book, ACT/SAT Pacing Session Book, and a specially designed Meri-tote bag.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">NINJAS</h3>
        <p class="typical-program-desc">Students are paired with 1 English Tutor + 1 Math Tutor per week. ACT test prep students are also paired with 1 Science Tutor.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">PRACTICE</h3>
        <p class="typical-program-desc">Schedule full-length practice exams weekly to get a feel for the real thing. Students are always welcome to study at the center at no additional cost.</p>
      </div>
    </div>
  </div>
</section>

<section class="bonus-module bonus-cardology-module">
  <h2>BONUS!</h2>
  <p>All test prep students get free downloads of our Cardology ACT Math + English apps to help them study! (New Cardology SAT apps coming soon!)</p>
  <div class="cardology-app-carousel">
    <a href="https://itunes.apple.com/us/app/act-math-cardology/id967491845?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testprep-satact-cardology-math.png"></a>
    <a href="https://itunes.apple.com/us/app/act-english-cardology/id981346435?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/testprep-satact-cardology-eng.png"></a>
    <a href="https://itunes.apple.com/us/developer/cardology/id967490614"><img class="app-store-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-store-badge.png"></a>
  </div>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutor-by-tree-decoration.jpg');">
</section>

<section class="page-lede satact-next-test-dates">
  <h2 class="page-lede-headline">2016-2017 TEST DATES</h2>
  <p class="page-lede-text">Even if the MeriEducation test prep program is not right for you, make sure you understand what test dates are coming up and when you should start studying.</p>
</section>
<section class="test-info-tables">
    <div class="table-container act-dates">
      <table>
        <thead>
          <tr>
            <td>ACT TEST DATE</td>
            <td>REGISTER DEADLINE</td>
            <td>START STUDYING IN</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="ACT TEST DATE">SEPT (9.10.16)</td>
            <td data-label="REGISTER DEADLINE">8.5.16</td>
            <td data-label="START STUDYING IN">MAY-JUN</td>
          </tr>
          <tr>
            <td data-label="ACT TEST DATE">OCT (10.22.16)</td>
            <td data-label="REGISTER DEADLINE">9.16.16</td>
            <td data-label="START STUDYING IN">JUN-JUL</td>
          </tr>
          <tr>
            <td data-label="ACT TEST DATE">DEC (12.10.16)</td>
            <td data-label="REGISTER DEADLINE">11.4.16</td>
            <td data-label="START STUDYING IN">AUG-SEPT</td>
          </tr>
          <tr>
            <td data-label="ACT TEST DATE">FEB (2.11.17)</td>
            <td data-label="REGISTER DEADLINE">1.13.17</td>
            <td data-label="START STUDYING IN">OCT-NOV</td>
          </tr>
          <tr>
            <td data-label="ACT TEST DATE">APR (4.8.17)</td>
            <td data-label="REGISTER DEADLINE">3.3.17</td>
            <td data-label="START STUDYING IN">DEC-JAN</td>
          </tr>
          <tr>
            <td data-label="ACT TEST DATE">JUN (6.10.17)</td>
            <td data-label="REGISTER DEADLINE">5.5.17</td>
            <td data-label="START STUDYING IN">FEB-MAR</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="table-container sat-dates">
      <table>
        <thead>
          <tr>
            <td>SAT TEST DATE</td>
            <td>REGISTER DEADLINE</td>
            <td>START STUDYING IN</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="SAT TEST DATE">OCT (10.1.16)</td>
            <td data-label="REGISTER DEADLINE">9.1.16</td>
            <td data-label="START STUDYING IN">JUN-JUL</td>
          </tr>
          <tr>
            <td data-label="SAT TEST DATE">NOV (11.5.16)</td>
            <td data-label="REGISTER DEADLINE">10.7.16</td>
            <td data-label="START STUDYING IN">JUL-AUG</td>
          </tr>
          <tr>
            <td data-label="SAT TEST DATE">DEC (12.3.16)</td>
            <td data-label="REGISTER DEADLINE">11.3.16</td>
            <td data-label="START STUDYING IN">AUG-SEPT</td>
          </tr>
          <tr>
            <td data-label="SAT TEST DATE">JAN (1.21.17)</td>
            <td data-label="REGISTER DEADLINE">12.21.16</td>
            <td data-label="START STUDYING IN">SEPT-OCT</td>
          </tr>
          <tr>
            <td data-label="SAT TEST DATE">MAR (3.11.17)</td>
            <td data-label="REGISTER DEADLINE">2.10.17</td>
            <td data-label="START STUDYING IN">NOV-DEC</td>
          </tr>
          <tr>
            <td data-label="SAT TEST DATE">MAY (5.6.17)</td>
            <td data-label="REGISTER DEADLINE">4.7.17</td>
            <td data-label="START STUDYING IN">JAN-FEB</td>
          </tr>
          <tr>
            <td data-label="SAT TEST DATE">JUN (6.3.17)</td>
            <td data-label="REGISTER DEADLINE">5.9.17</td>
            <td data-label="START STUDYING IN">FEB-MAR</td>
          </tr>
        </tbody>
      </table>
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
    <a href="<?php echo home_url( '/testimonials/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/family-at-redlands.jpg">
        <h2>FAMILIES LOVE US</h2>
      </div>
      Check out what our clients have to say &gt;
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