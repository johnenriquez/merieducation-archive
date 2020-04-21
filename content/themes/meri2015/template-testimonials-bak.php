<?php
/**
 * Template Name: Testimonials-Backup
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

<section class="page-mast" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/tutors-tossing-confetti.jpg');">
</section>
<section class="sublevel-navigation">
  <p class="sublevel-navigation__instructions">Learn more about our difference:</p>
  <ul>
    <li><a href="<?php echo home_url( '/our-philosophy/' ); ?>">Philosophy</a></li>
    <li><a href="<?php echo home_url( '/tutors/' ); ?>">Meet Our Ninjas</a></li>
    <li><a class="active" href="<?php echo home_url( '/testimonials/' ); ?>">Testimonials</a></li>
  </ul>
</section><!-- .sublevel-navigation -->

<section class="page-lede psat-lede">
  <h2 class="page-lede-headline">WE LOVE OUR CLIENTS</h2>
  <p class="page-lede-text">And they love us back! Watch what they have to say about us:</p>
</section>

<!-- <div class="single-video" style="">
  <div class="play-button"><i class="fa fa-play-circle-o"></i></div>
  <img class="cover-photo" src="">
  <div class="single-video__inner"></div>
</div> -->

<div class="testimonials-main-vid">
  <div class="player">
    <iframe src="https://player.vimeo.com/video/150212311" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
</div>

<section class="testimonial-section">

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">“My daughter and I have had a terrific experience with MeriEducation.  The teachers have been <strong>extremely helpful and have assisted my daughter in raising her ACT score substantially,</strong> along with also helping her with various school subjects. The director has gone above and beyond as far as working to accommodate schedules, change times, and add extra sessions when needed while also checking on progress and offering encouragement and support."</p>
      <footer class="testimonial-author">&#8211; Jennifer, a Corona del Mar High School Parent</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote"><strong>Magnificent, marvelous Merieducation!  We were more than thrilled with the tutoring and ACT Prep Courses our son received over the years.</strong>  They take the time to carefully "match" each student with the right top-notch instructor to ensure connected, engaged, and productive lessons each and every visit.  Merieducation gave our son the confidence he was lacking, and the tools needed to be extremely successful in high school and move into college with ease. They were extremely flexible and accommodating with all schedules.  Merieducation treats each student as "family" rather than just a subject to tutor.  Thank you for helping those struggling learners succeed in every way possible!  Always going above and beyond the call of duty, you produce confident, life-long learners.  We thank you from the bottom of our heart!</p>
      <footer class="testimonial-author">&#8211; Leah L., Parent</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">“What to say about MeriEducation. Well, it is hard to state without typing a thousand words of gratitude. MeriEducation has been nothing less than amazing to me. The tutors and the environment are outstanding! The oh-so-hip atmosphere is absolute perfection. It is calming yet upbeat, making it an ideal place to focus on your grades and your future. Also, the tutors and staff have helped through school AND the SAT, and I am extremely grateful for them.  <strong>Needless to say, they helped me increase my SAT score by 500 points!</strong> WOO HOO! You are all lifesavers!”</p>
      <footer class="testimonial-author">&#8211; Katy P., Poly High School Student</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">“MeriEducation is awesome. <strong>I raised my SAT scores by 580 points, from 1590 to 2170</strong>, after taking classes at MeriEducation. The tutors are the best.  They actually care about how you do, and they follow up on you progress. I wouldn’t go anywhere but MeriEducation.”</p>
      <footer class="testimonial-author">&#8211; Colby A., Student</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">"My children have loved their time at Merieducation. They are always excited to go in and learn. The tutors are knowledgeable, enthusiastic, patient and willing to go the extra mile to make sure that the student is captivated. <strong>I would recommend Merieducation to any parent.</strong>"</p>
      <footer class="testimonial-author">&#8211; Nancy V., Parent</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">“I am an only parent, working more than one job to support my two girls. Both my daughters, Amber and Summer, have had Joan do their educational consulting. This has been a lifesaver. The college applications process has become very complicated and without her constant guidance, we would have been lost. She helped them write essays focused for each school’s interests, suggested colleges to apply to, kept us on a timeline. It was amazing. <strong>I credit her with both of my kids getting into college.</strong> She takes a personal interest in each kid and really helps them navigate this ever more complicated process. I would strongly recommend her to everyone. She is a wonderful guide through the whole process. ”</p>
      <footer class="testimonial-author">&#8211; Lisa K., Parent</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">“MeriEducation helped me tremendously when it came time to send in my college applications. Joan’s one-on-one consulting greatly reduced the amount of stress I had because I knew she always had my back. It was also always reassuring talking to her about future colleges because she seemed to know everything about them! She would give great advice on which colleges she thought would best t me in my journey to success. MeriEducation really made me believe I could attend the college of my dreams, and I’m excited to say that I now am.”</p>
      <footer class="testimonial-author">&#8211; Nick S., Student</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">&#8220;Working with Joan was awesome. She was always organized and I was always able to feel confident that I was taking the best possible route. I never once worried that I was missing something. <strong>I applied to 21 colleges and Joan made the whole process much smoother and less stressful.</strong>”</p>
      <footer class="testimonial-author">&#8211; Griffin F., Student</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">I never thought I could get into an amazing college and afford it before I found MeriEducation. They made every college a possibility. My consultant, Joan Nguyen, was always super organized, and I was always her first priority. My college essays and applications would have been incredibly frustrating without her! Joan helped simplifythe application process so it wasn’t so overwhelming and gave my essays an extra edge. <strong>With MeriEducation’s help, I was accepted to all 13 schools I applied for and got scholarships to over half of them!</strong> I had always thought that private schools would be way out of my price range, but Joan Nguyen showed me that it&#8217;s always possible. I will be attending Point Loma Nazarene University who gave me a $12,000 per year for four years. Turns out attending any private university would be cheaper than a UC or state school; I would have never known that without Joan. I could never thank MeriEducation enough for helping me along my journey to an amazing future.</p>
      <footer class="testimonial-author">&#8211; Trisha T., Student</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">MeriEducation is AMAZING! With Joan’s expertise and guidance, my daughter was accepted to every school she applied to and received scholarships, which might not have been offered had it not been for the help [my daughter] received! <strong>We couldn’t be happier with the support they provided her with through the years with tutoring, test prep, and college applications!</strong> My younger daughter, who will be a junior in high school this coming year, has started her journey with MeriEducation this summer and I know that she will have an awesome experience as well!</p>
      <footer class="testimonial-author">&#8211; Cindy T., Parent</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">I love this place! I first discovered the tutoring place about five years about when I was in eighth grade because I needed some extra help on my geometry skills. My first reaction to them was that they were super helpful with all of my wants and needs: teaching skills, wide variety in subjects to get help in, and a very warm, welcoming environment. All of the tutors are extremely knowledgeable in the subjects they teach. Plus, they also know how to keep their students captivated while teaching a session. <strong>For the past 5 years, they have helped my tremendously in courses that range from geometry to AP Physics. I give this place an A+!</strong></p>
      <footer class="testimonial-author">&#8211; Troi F., Student</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">My experience with MeriEducation has been incredible. Not only are the tutors amazing, but the courses are brilliant! My score has significantly increased each time I take a test! <strong>No other course could have helped me more.</strong></p>
      <footer class="testimonial-author">&#8211; Hayley B., Woodcrest High School Student</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote"><strong>MeriEducation has helped me improve my SAT score by 380 points.</strong> Coming in for tutoring to learn MeriEducation’s lesson plans and SAT tricks, I feel were a big reason for my score increase. The tutors actually care about their students and do whatever they can to help their students’ score increase. The practice tests that are offered every weekend at MeriEducation help you get prepared for what the real test is like before you have to take it. If I had not attended MeriEducation for SAT tutoring, I do not feel like my score would be nearly as good.</p>
      <footer class="testimonial-author">&#8211; Chase, Poly High School Student</footer>
    </blockquote>
  <!-- </div> -->

  <!-- <div class="grid-cell"> -->
    <blockquote class="testimonial">
      <p class="testimonial-quote">Merieducation is fantastic, fun, and awesome! Their awesome tutors helped me surpass my ACT goals by creating a fun environment and making me understand the concepts. Also, they made Precalculus something I could master, instead of something I would stress over. <strong>My dreams for college are becoming more real because of Merieducation.</strong></p>
      <footer class="testimonial-author">&#8211; Carlee T., Yucaipa High School Student</footer>
    </blockquote>
  <!-- </div> -->

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


<?php
}

genesis();