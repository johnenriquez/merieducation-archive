<?php
/**
 * Template Name: AP
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
add_action( 'genesis_loop', 'meri2015_ap_loop' );

function meri2015_ap_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/sisters-studying.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more test prep help:</p>
  <ul>
    <li><a href="<?php echo home_url( '/sat-act/' ); ?>">SAT+ACT</a></li>
    <li><a href="<?php echo home_url( '/isee/' ); ?>">ISEE+SSAT+HSPT</a></li>
    <li><a class="active" href="<?php echo home_url( '/ap/' ); ?>">AP</a></li>
    <li><a href="<?php echo home_url( '/psat/' ); ?>">PSAT</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline">A WHOLE YEAR CRAMMED INTO ONE TEST</h2>
    <p class="page-lede-text">AP Prep prepares students for their AP subject tests by arming them with the tools needed to earn a winning score. Rigorous college-level classes, like the Advanced Placement courses, are especially important when it comes to college admissions. Getting a score of 3 or higher on an AP test can even earn you college credit!</p>
  </section>

  <section class="ap-bootcamps-callout">
    <h3>AP PREP BEGINS IN APRIL</h3>
    <div class="callout-body" style="text-align: center;">
      <p style="padding-bottom: 1em;"><strong style="color: #888;">Availability of each subject is determined by student demand.</strong><br><span style="font-size: .9em;">Talk to your Director about the subjects you need help with!</span></p>
      <ul style="font-size: .9em; max-width: 530px; margin-left: auto; margin-right: auto;">
        <li>AP English Language + Composition</li>
        <li>AP Comparative Government + Politics</li>
        <li>AP European History</li>
        <li>AP Macroeconomics</li>
        <li>AP Microeconomics</li>
        <li>AP Psychology</li>
        <li>AP US Government + Politics</li>
        <li>AP US History</li>
        <li>AP World History</li>
        <li>AP Calculus AB</li>
        <li>AP Calculus BC</li>
        <li>AP Statistics</li>
        <li>AP Biology</li>
        <li>AP Chemistry</li>
        <li>AP Physics 1</li>
        <li>AP Physics 2</li>
        <li>AP French Language + Culture</li>
        <li>AP Spanish Language + Culture</li>
      </ul>
    </div>
  </section>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/globe-by-window.jpg');">
</section>

<blockquote class="testimonial--callout testimonial--callout--raised">
  <p class="testimonial-quote">"I did AP Prep at Meri for 3-4 weeks and it gave me all the information to help me pass my exam! Because Tyler was able to compact a year's worth of information into all these sessions, I was able to feel more confident than I would have just with my teacher and class alone."</p>
  <footer class="testimonial-author">Eric K</footer>
</blockquote>

<section class="typical-program">
  <h2 class="typical-program-headline">What a typical bootcamp looks like...</h2>
  <div class="grid grid--gutters grid--4">
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">IN-DEPTH REVIEW</h3>
        <p class="typical-program-desc">Cram sessions help students understand the exam’s most important concepts and provide them with a strong supplement to their studies.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">THOSE FRQs THOUGH</h3>
        <p class="typical-program-desc">Students review with actual FRQs, multiple choice questions, and common vocabulary terms to prepare them for the different test formats.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">EXTRA STUDY MATERIAL</h3>
        <p class="typical-program-desc">We develop detailed review packets that include study guides and other resources for students to review at home.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">PRACTICE, PRACTICE, PRACTICE</h3>
        <p class="typical-program-desc">Students get a feel for the real thing by taking real, full-length AP exams.</p>
      </div>
    </div>
  </div>
</section>

<section class="bonus-module bonus-cardology-module">
  <h2>BONUS!</h2>
  <p>Bootcamp students get free downloads of our Cardology AP Subject mobile apps to help them study.</p>
  <div class="cardology-app-carousel" style="padding-top: 1em">
    <a href="https://itunes.apple.com/us/app/act-english-cardology/id981346435?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-eng.png"></a>
    <a href="https://itunes.apple.com/us/app/act-math-cardology/id967491845?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-math.png"></a>
    <a href="https://itunes.apple.com/us/app/ap-biology-cardology/id976798913?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-bio.png"></a>
    <a href="https://itunes.apple.com/us/app/ap-chemistry-cardology/id976798917?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-chemistry.png"></a>
    <a href="https://itunes.apple.com/us/app/ap-european-history-cardology/id976798924?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-euro.jpeg"></a>
    <a href="https://itunes.apple.com/us/app/ap-us-history-cardology/id976799210?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-history.png"></a>
    <a href="https://itunes.apple.com/us/app/ap-psychology-cardology/id976799200?mt=8"><img class="cardology-app-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardology-psych.jpeg"></a>
    <a href="https://itunes.apple.com/us/developer/cardology/id967490614"><img class="app-store-badge" src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-store-badge.png"></a>
  </div>
</section>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/triangle-lesson.jpg');">
</section>

<section class="page-lede">
  <h2 class="page-lede-headline">2016 AP EXAM SCHEDULE</h2>
</section>

<section class="test-info-tables">
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <td>Week 1</td>
          <td>Morning 8 a.m.</td>
          <td>Afternoon 12 noon</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Week 1">Monday, May 2</td>
          <td data-label="Morning 8 a.m.">Chemistry<br>Environmental Science</td>
          <td data-label="Afternoon 12 noon">Psychology</td>
        </tr>
        <tr>
          <td data-label="Week 1">Tuesday, May 3</td>
          <td data-label="Morning 8 a.m.">Computer Science A<br>Spanish Language and Culture</td>
          <td data-label="Afternoon 12 noon">Art History<br>Physics 1: Algebra-Based</td>
        </tr>
        <tr>
          <td data-label="Week 1">Wednesday, May 4</td>
          <td data-label="Morning 8 a.m.">English Literature and Composition</td>
          <td data-label="Afternoon 12 noon">Japanese Language and Culture<br>Physics 2: Algebra-Based</td>
        </tr>
        <tr>
          <td data-label="Week 1">Thursday, May 5</td>
          <td data-label="Morning 8 a.m.">Calculus AB<br>Calculus BC</td>
          <td data-label="Afternoon 12 noon">Chinese Language and Culture<br>Seminar</td>
        </tr>
        <tr>
          <td data-label="Week 1">Friday, May 6</td>
          <td data-label="Morning 8 a.m.">German Language and Culture<br>United States History</td>
          <td data-label="Afternoon 12 noon">European History</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-container table-container--compressed">
    <table>
      <thead>
          <tr>
              <td>Week 2</td>
              <td>Morning 8 a.m.</td>
              <td>Afternoon 12 noon</td>
              <td>Afternoon 2 p.m.</td>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Week 2">Monday, May 9</td>
          <td data-label="Morning 8 a.m.">Biology<br>Music Theory</td>
          <td data-label="Afternoon 12 noon">Physics C: Mechanics</td>
          <td data-label="Afternoon 2 p.m.">Physics C: Electricity and Magnetism</td>
        </tr>
        <tr>
          <td data-label="Week 2">Tuesday, May 10</td>
          <td data-label="Morning 8 a.m.">United States Government and Politics</td>
          <td data-label="Afternoon 12 noon">French Language and Culture<br>Spanish Literature and Culture</td>
          <td data-label="Afternoon 2 p.m.">&nbsp;</td>
        </tr>
        <tr>
          <td data-label="Week 2">Wednesday, May 11</td>
          <td data-label="Morning 8 a.m.">English Language and Composition</td>
          <td data-label="Afternoon 12 noon">Italian Language and Culture<br>Macroeconomics</td>
          <td data-label="Afternoon 2 p.m.">&nbsp;</td>
        </tr>
        <tr>
          <td data-label="Week 2">Thursday, May 12</td>
          <td data-label="Morning 8 a.m.">Comparative Government and Politics<br>World History</td>
          <td data-label="Afternoon 12 noon">Statistics</td>
          <td data-label="Afternoon 2 p.m.">&nbsp;</td>
        </tr>
        <tr>
          <td data-label="Week 2">Friday, May 13</td>
          <td data-label="Morning 8 a.m.">Human Geography<br>Microeconomics</td>
          <td data-label="Afternoon 12 noon">Latin</td>
          <td data-label="Afternoon 2 p.m.">&nbsp;</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<section class="grid grid--3 services-breakout-nav">
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
    <a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">
      <div class="emblem">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-lying-in-circle.jpg">
        <h2>GET INTO YOUR DREAM COLLEGE</h2>
      </div>
      Learn about our admissions consulting services &gt;
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