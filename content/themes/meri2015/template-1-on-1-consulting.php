<?php
/**
 * Template Name: 1-on-1 Consulting
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
add_action( 'genesis_loop', 'meri2015_college_ec_loop' );

function meri2015_college_ec_loop() {
?>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/director-and-painting.jpg');">
</section>

<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Get more college admissions help:</p>
  <ul>
    <li><a class="active" href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">1-ON-1 CONSULTING</a></li>
    <li><a href="<?php echo home_url( '/college-apps-bootcamp/' ); ?>">COLLEGE APPS BOOTCAMP</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="lede-section-general">
  <section class="page-lede">
    <h2 class="page-lede-headline">DEDICATED HELP EVERY STEP OF THE WAY</h2>
    <p class="page-lede-text">Led by MeriEducation founder and head consultant Joan Nguyen, our 1-on-1 admissions consulting program not only serves to guide students through all of their college applications, but also create a step-by-step strategy detailing coursework, extra-curricular activities, and summer programs necessary for admission.</p>
  </section>

  <section class="grid grid--3 psat-grid">
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon wow pulse" data-wow-duration=".8s" data-wow-delay=".3s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/grad-hat.png">
      <h3 class="grid-headline">HIGH EFFICIENCY</h3>
      <p class="grid-text">We’ve developed a whole team of consultants, specialists, editors, and project managers that make your admissions process as efficient and effective as possible. All of us work towards helping you craft your ideal application. Many of our students get done with their essays before their Senior Year even starts!</p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-swirl wow pulse" data-wow-duration=".8s" data-wow-delay=".6s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/swirl.png">
      <h3 class="grid-headline">FROM A TO Z</h3>
      <p class="grid-text">Our team provides a holistic and comprehensive approach that helps families navigate the very confusing applications process. From the initial evaluation to application submission, we keep you on track. Like our other programs, consulting packages are hyper-customized to fit your needs, schedule, and budget.  </p>
    </div>
    <div class="grid-cell grid-cell--padded">
      <img class="vector-icon vector-faders wow pulse" data-wow-duration=".8s" data-wow-delay=".9s" src="<?php echo get_stylesheet_directory_uri(); ?>/img/faders.png">
      <h3 class="grid-headline">NOT JUST COLLEGE APPS</h3>
      <p class="grid-text">
        We have experience helping with admissions at all levels!
        <ul class="all-levels-admissions-list">
          <li>Private Middle or High Schools</li>
          <li>College (Undergrad)</li>
          <li>Special Programs</li>
          <li>Summer Enrichment Programs</li>
        </ul>
      </p>
    </div>
  </section>
</section>

<blockquote class="testimonial--callout testimonial--callout" style="position: relative; top: 1.5em">
  <p class="testimonial-quote">It was amazing. I credit her with both of my kids getting into college. She takes a personal interest in each kid and really helps them navigate this ever more complicated process. I would strongly recommend her to everyone. She is a wonderful guide through the whole process.</p>
  <footer class="testimonial-author">Lisa K., Parent</footer>
</blockquote>

<section class="page-mast parallax-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/joan-student-fonz.jpg');" style="z-index: -1;">
</section>

<blockquote class="testimonial--callout testimonial--callout--raised">
  <p class="testimonial-quote">My college essays and applications would have been incredibly frustrating without her! Joan helped simplify the application process so it wasn’t so overwhelming and gave my essays an extra edge.</p>
  <footer class="testimonial-author">Trishta T., Student</footer>
</blockquote>

<section class="typical-program">
  <h2 class="typical-program-headline">What a typical course looks like...</h2>
  <div class="grid grid--gutters grid--4">
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">PROFESSIONAL EVALUATION</h3>
        <p class="typical-program-desc">We get to know you, analyzing where you are at academically, your educational goals, your academic history, your abilities, your personality, and your passions.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">THE BEST SCHOOL FOR YOU</h3>
        <p class="typical-program-desc">Together, we define what schools are best for you - whether they're a reach or a safety, we put together a list of schools that best fit who you are.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">STEP-BY-STRATEGY</h3>
        <p class="typical-program-desc">An overall strategy is developed, detailing coursework, extracurricular activities, and summer programs necessary for admission.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">PRESENTING THE BEST YOU</h3>
        <p class="typical-program-desc">We help you craft an insightful college essay that showcases your academic and personal journey. In addition, we help you prepare for admission interviews and schedule campus tours.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">DONE AND DONE</h3>
        <p class="typical-program-desc">Making sure we dot our i's and cross our t's, we help obtain and complete all necessary application materials for the colleges &amp; universities chosen.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">BILLED BY THE MINUTE</h3>
        <p class="typical-program-desc">Whether it’s an hour long session, a 30 minute editing session, or a 15 minute check in, we make sure to manage your time efficiently and effectively.</p>
      </div>
    </div>
    <div class="grid-cell">
      <div class="typical-program-cell">
        <h3 class="typical-program-subheadline">VIDEO SUPPLEMENT <span class="test-table-alert">NEW!</span></h3>
        <p class="typical-program-desc">Students looking to add an extra element to their college applications can get help telling their story through a video supplement.</p>
      </div>
    </div>
  </div>
</section>


<section class="consultant-squad-section">
  <section class="ec-squad-vector">
    <img class="consultant-squad" src="<?php echo get_stylesheet_directory_uri(); ?>/img/college-admissions-squad.png">
  </section>

  <section class="page-lede">
    <h2 class="page-lede-headline">MEET OUR CONSULTING TEAM</h2>
  </section>

  <section class="college-ec-consultants">
    <div class="admissions-consultant">
      <div class="consultant__profile">
        <img class="consultant__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultant-squad-joan.jpg">
      </div>
      <div class="consultant-desc">
        <div class="consultant__header">
          <h3 class="consultant__name">JOAN</h3>
          <span class="consultant__position">HEAD CONSULTANT</span>
        </div>
        <p class="consultant__bio">As MeriEducation&#8217;s founder and head consultant, Joan has nearly a decade of experience as an independent educational consultant, helping hundreds of students get into the college of their dreams. Consistently providing that personal MeriEducation touch, Joan has fused her understanding of platinum service, structure, organization, and technology to make the applications process a success (and a breeze!) for student-applicants.</p>
      </div>
    </div>
    <div class="admissions-consultant">
      <div class="consultant__profile">
        <img class="consultant__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultant-squad-veronica.jpg">
      </div>
      <div class="consultant-desc">
        <div class="consultant__header">
          <h3 class="consultant__name">VERONICA</h3>
          <span class="consultant__position">ASSOCIATE CONSULTANT</span>
        </div>
        <p class="consultant__bio">Veronica graduated magna cum laude with a degree in Creative Writing. She&#8217;s studied under and worked closely with the poet laureate of California, the founder of the Los Angeles Review of Books, and numerous New York Times bestselling authors.While pursuing her degree, Veronica worked as an editor for her university&#8217;s interdisciplinary honors journal and traveled from open-mic to open-mic, honing her craft and performing her fiction with eager, direct sincerity. It&#8217;s this sense for honest and vulnerable prose that she now channels into helping college-applicants craft and edit their personal statements.</p>
      </div>
    </div>
    <div class="admissions-consultant">
      <div class="consultant__profile">
        <img class="consultant__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultant-squad-therese.jpg">
      </div>
      <div class="consultant-desc">
        <div class="consultant__header">
          <h3 class="consultant__name">THERESE</h3>
          <span class="consultant__position">SPECIALIST</span>
        </div>
        <p class="consultant__bio">Therese brings to MeriEducation over 10 years of experience as a senior admissions officer for freshman, transfer, and graduate admissions. Currently the Associate Director of Admission at The Buckley School, one of Los Angeles&#8217; oldest private schools, her background also includes several years as the Associate Director of Admissions for USC&#8217;s Annenberg School for Communication and Journalism and Admissions Counselor for UCLA&#8217;s School of Law. Therese brings behind-the-scenes knowledge, providing valuable insight to our students.</p>
      </div>
    </div>
    <div class="admissions-consultant">
      <div class="consultant__profile">
        <img class="consultant__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultant-squad-stephanie.jpg">
      </div>
      <div class="consultant-desc">
        <div class="consultant__header">
          <h3 class="consultant__name">Stephanie</h3>
          <span class="consultant__position">Editor</span>
        </div>
        <p class="consultant__bio">Looking at Stephanie’s resume, her dedication to English is clear.  She’s earned both her Bachelor’s and Master’s in English, tutored English for several years, and taught college-level courses.  Fusing her strong educational and pedagogical backgrounds Stephanie brings that expertise to her students in MeriEducation.</p>
      </div>
    </div>
    <div class="admissions-consultant">
      <div class="consultant__profile">
        <img class="consultant__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultant-squad-megan.jpg">
      </div>
      <div class="consultant-desc">
        <div class="consultant__header">
          <h3 class="consultant__name">Megan</h3>
          <span class="consultant__position">Editor</span>
        </div>
        <p class="consultant__bio">Megan graduated cum laude with a degree in Creative Writing. As a writer, she’s a jack-of-all-trades, focusing primarily on poetry and essays. She currently edits for an experimental publishing company - assisting with all facets of book production, from development to proofreading to distribution. Megan has a discerning eye for detail and is enthusiastic about crafting holistic, balanced, and exciting personal statements.</p>
      </div>
    </div>
    <div class="admissions-consultant">
      <div class="consultant__profile">
        <img class="consultant__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultant-squad-emily.jpg">
      </div>
      <div class="consultant-desc">
        <div class="consultant__header">
          <h3 class="consultant__name">Emily</h3>
          <span class="consultant__position">Editor</span>
        </div>
        <p class="consultant__bio">A scholar of many disciplines, Emily helps students coalesce their experiences into the best possible representations of their talents and abilities, and simultaneously encourages the highest standard of literary excellence.  A current nursing student, Emily integrates the demand for accuracy and perfection with personality, compassion, and investment in each student's success. </p>
      </div>
    </div>
    <div class="admissions-consultant">
      <div class="consultant__profile">
        <img class="consultant__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultant-squad-kristin.jpg">
      </div>
      <div class="consultant-desc">
        <div class="consultant__header">
          <h3 class="consultant__name">Kristin</h3>
          <span class="consultant__position">Project Manager</span>
        </div>
        <p class="consultant__bio">Currently the MeriNewport Director, Kristin knows what it takes to push her students towards their full potential. She’s always had a love for English, but got her Bachelor’s Degree in Biology just to challenge herself (why not?). Her insane organizational skills have been vital in keeping kids on track in both the Admissions Consulting and Academic Coaching programs. </p>
      </div>
    </div>
    <div class="admissions-consultant">
      <div class="consultant__profile">
        <img class="consultant__photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/consultant-squad-cherisse.jpg">
      </div>
      <div class="consultant-desc">
        <div class="consultant__header">
          <h3 class="consultant__name">Cherisse</h3>
          <span class="consultant__position">Project Manager</span>
        </div>
        <p class="consultant__bio">As the MeriRedlands Director, the bubbly Cherisse is also a master-organizer and an expert at improving score progression. With a double-major in Psychology and Sociology along with a minor in Education, Cherisse has a passion for figuring out what makes her students tick and keeps them accountable with strategically designed study plans.  You can always find her sitting in her office, asking about your day!</p>
      </div>
    </div>
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
</section>

<?php
}

genesis();