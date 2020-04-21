<?php
/**
 * Template Name: ISEE
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
add_action( 'genesis_loop', 'meri2015_isee_loop' );

function meri2015_isee_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/photos-on-wall.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more test prep help:</p>
  <ul>
    <li><a href="<?php echo home_url( '/sat-act/' ); ?>">SAT+ACT</a></li>
    <li><a class="active" href="<?php echo home_url( '/isee/' ); ?>">ISEE+SSAT+HSPT</a></li>
    <li><a href="<?php echo home_url( '/ap/' ); ?>">AP</a></li>
    <li><a href="<?php echo home_url( '/psat/' ); ?>">PSAT</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline"><span>ISEE, SSAT, HSPT</span> – WHAT??</h2>
    <p class="page-lede-text">Parents! If your child is looking to go to competitive, private K-8 or high school, he or she will probably need to take one of these tests. While some tests require a grasp on fundamental concepts, others like the ISEE Upper Level test may require your child to know more advanced subjects like Geometry.</p>
  </section>

  <section class="grid grid--2 psat-grid">
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-greencheck wow rotateIn" data-wow-delay=".5s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/green-checkmark.png">
      <h3 class="grid-headline">MERI-QUALITY CERTIFIED</h3>
      <p class="grid-text">Our ISEE, SSAT, and HSPT curriculum was crafted with the same standards we use when developing our SAT + ACT test prep curriculum for the older kids. We are always researching the newest test formats, the latest education trends, and instructor/student feedback.</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-rocket wow rotateIn" data-wow-delay=".5s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/rocket-on-circle.png">
      <h3 class="grid-headline">WE AIM TO KEEP IT FUN</h3>
      <p class="grid-text">Our curriculum breaks down concepts and cements them to memory with fun tips &amp; tricks. It’s not just about drill and kill. Plus, there’s hundreds of homework problems carefully crafted to ensure students get enough practice.</p>
    </div>
  </section>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-behind-books.jpg');">
</section>

<section class="typical-program">
  <h2 class="typical-program-headline">What a typical course looks like...</h2>
  <div class="grid grid--gutters grid--4">
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">12 WEEKS</h3>
        <p class="typical-program-desc">We always recommend that students start studying at least 12 weeks before your exam date.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">STARTER PACK</h3>
        <p class="typical-program-desc">Students get 6 MeriEducation lesson books, Test Book, Pacing Session Book, and specially designed Meri-tote bag.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">NINJAS</h3>
        <p class="typical-program-desc">Students are paired with 1 English Tutor + 1 Math Tutor per week.</p>
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

<section class="bonus-module isee-admissions-callout">
  <h3>YOU MIGHT ALSO BE INTERESTED IN: 1-ON-1 ADMISSIONS CONSULTING</h3>
  <div class="callout-body">
    <p>Our all star consulting team has helped hundreds of students get into the private school or competitive summer program of their choice.</p>
    <a href="<?php echo home_url( '/help-me-with-college/1-on-1-ec/' ); ?>">Learn more about 1-on-1 admissions consulting &gt;</a>
  </div>
</section>


<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/redlands-meri-sign.jpg');">
</section>

<section class="page-lede">
  <h2 class="page-lede-headline">UPCOMING TEST DATES</h2>
</section>

<section class="test-info-tables">
  <section class="table-container">
    <table>
      <thead>
        <tr>
          <td>ISEE</td>
          <td>TEST DATES</td>
          <td>START STUDYING IN</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="ISEE">Lower Level (5th-6th Grade)</td>
          <td data-label="TEST DATES">DEC-JAN</td>
          <td data-label="START STUDYING IN">JUN</td>
        </tr>
        <tr>
          <td data-label="ISEE">Middle Level (7th-8th Grade)</td>
          <td data-label="TEST DATES">DEC-JAN</td>
          <td data-label="START STUDYING IN">JUN</td>
        </tr>
        <tr>
          <td data-label="ISEE">Upper Level (9th-12th Grade)</td>
          <td data-label="TEST DATES">DEC-JAN</td>
          <td data-label="START STUDYING IN">JUN</td>
        </tr>
      </tbody>
    </table>
  </section>
  <section class="table-container">
    <table>
      <thead>
        <tr>
          <td>SSAT</td>
          <td>TEST DATES</td>
          <td>START STUDYING IN</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="SSAT">Elementary (3rd-4th Grade)</td>
          <td data-label="TEST DATES">ALL YEAR</td>
          <td data-label="START STUDYING IN">JUN</td>
        </tr>
        <tr>
          <td data-label="SSAT">Middle Level (5th-7th Grade)</td>
          <td data-label="TEST DATES">ALL YEAR</td>
          <td data-label="START STUDYING IN">JUN</td>
        </tr>
        <tr>
          <td data-label="SSAT">Upper Level (8th-11th Grade)</td>
          <td data-label="TEST DATES">ALL YEAR</td>
          <td data-label="START STUDYING IN">JUN</td>
        </tr>
      </tbody>
    </table>
  </section>
  <section class="table-container">
    <table>
      <thead>
        <tr>
          <td>HSPT</td>
          <td>TEST DATES</td>
          <td>START STUDYING IN</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="HSPT">8th Grade Only</td>
          <td data-label="TEST DATES">ALL YEAR</td>
          <td data-label="START STUDYING IN">JUN</td>
        </tr>
      </tbody>
    </table>
  </section>
</section>

<section class="grid grid--3 services-breakout-nav">
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
    <a href="<?php echo home_url( '/sat-act/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/act-lesson-book-cover.jpg">
        <h2>ROCK THE SAT + ACT</h2>
      </div>
      Learn more about how we prep for these tests &gt;
    </a>
  </div>
  <div class="grid-cell">
    <a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/student-making-face.jpg">
        <h2>GET ADMISSIONS CONSULTING</h2>
      </div>
      Learn about our 1-on-1 admissions consulting services for private middle/high schools &gt;
    </a>
  </div>
</section>

<?php
}

genesis();