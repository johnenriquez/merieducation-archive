<?php
/**
 * Site Footer Functions
 *
 * @package  meri2015
 */

function auto_copyright( $year = 'auto' ) {
   if(intval($year) == 'auto'){ $year = date('Y'); }
   if(intval($year) == date('Y')){ echo intval($year); }
   if(intval($year) < date('Y')){ echo intval($year) . '-' . date('Y'); }
   if(intval($year) > date('Y')){ echo date('Y'); }
}

//* Custom Footer Markup
// remove_action( 'genesis_footer', 'genesis_do_footer' );
// add_action( 'genesis_footer', 'meri2015_do_footer' );
function meri2015_do_footer() {
   ?><p>MeriFooter</p><?php
}

add_action( 'genesis_before_footer', 'meri2015_add_primary_footer' );
function meri2015_add_primary_footer() {
  ?>

  <?php if( !( is_home() || is_front_page() || is_page( 'contact' ) || is_page_template( 'template-employeeportal.php' ) )  ): ?>
  <section class="try-us-free">
    <div class="wrap">
      <h2 class="textbolding">Try Us For <span>Free</span></h2>
      <p>Before you sign any contracts, we want to make sure we're a good fit for you.<br>First-time clients receive a complimentary consultation.</p>
      <a class="button try-us-free-modal" href="#try-us-modal">Let's Get Started &gt;</a>
    </div>
  </section><!-- .try-us-free -->
  <?php endif; ?>

  <div id="try-us-modal" class="mfp-hide">
    <?php //echo do_shortcode( '[gravityform id=1]' ); ?>
    <div id="wufoo-z1xwc3i41i0f6pk">
    Fill out my <a href="https://merieducation.wufoo.com/forms/z1xwc3i41i0f6pk">online form</a>.
    </div>
    <script type="text/javascript">var z1xwc3i41i0f6pk;(function(d, t) {
    var s = d.createElement(t), options = {
    'userName':'merieducation',
    'formHash':'z1xwc3i41i0f6pk',
    'autoResize':true,
    'height':'994',
    'async':true,
    'host':'wufoo.com',
    'header':'show',
    'ssl':true};
    s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
    s.onload = s.onreadystatechange = function() {
    var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
    try { z1xwc3i41i0f6pk = new WufooForm();z1xwc3i41i0f6pk.initialize(options);z1xwc3i41i0f6pk.display(); } catch (e) {}};
    var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
    })(document, 'script');</script>
  </div>

  <?php if ( is_home() || is_front_page() ): ?>
  <section class="homepage-instagram-grid">
    <div class="wrap">
      <?php echo do_shortcode( '[instagram-feed]' ); ?>
    </div>
  </section><!-- .homepage-instagram-grid -->
  <?php endif; ?>

  <section class="primary-footer">
    <div class="row__primary">
      <div class="one-fourth first">
        <p>MERI<strong>PASADENA</strong></p>
        <p><a class="footer-yelp-links" href="http://www.yelp.com/biz/merieducation-pasadena"><i class="fa fa-yelp"></i></a><span class="footer-phone-number">626.639.8810</span></p>
      </div>
      <div class="one-fourth">
        <p>MERI<strong>NEWPORT</strong></p>
        <p><a class="footer-yelp-links" href="http://www.yelp.com/biz/merieducation-newport-beach"><i class="fa fa-yelp"></i></a><span class="footer-phone-number">949.734.0081</span></p>
      </div>
      <div class="one-fourth">
        <p>MERI<strong>REDLANDS</strong></p>
        <p><a class="footer-yelp-links" href="http://www.yelp.com/biz/merieducation-redlands"><i class="fa fa-yelp"></i></a><span class="footer-phone-number">909.918.6374</span></p>
      </div>
      <div class="one-fourth">
        <p>MERI<strong>RIVERSIDE</strong></p>
        <p><a class="footer-yelp-links" href="http://www.yelp.com/biz/merieducation-riverside"><i class="fa fa-yelp"></i></a><span class="footer-phone-number">951.977.1728</span></p>
      </div>
    </div>
    <div class="row__secondary">
      <p class="subscribe-cta">SUBSCRIBE FOR <strong>MERINEWS</strong></p>
      <?php echo do_shortcode( '[gravityform id=2]' ); ?>
    </div>
  </section><!-- .primary-footer -->
  <section class="footer-quicklinks">
    <div class="wrap">
      <div class="one-fourth first">
        <h3 class="textbolding">Our <span>Difference</span></h3>
        <ul>
          <li><a href="<?php echo home_url( '/our-philosophy/' ); ?>">Our Philosophy</a></li>
          <li><a href="<?php echo home_url( '/tutors/' ); ?>">Our Tutors</a></li>
          <li><a href="<?php echo home_url( '/testimonials/' ); ?>">Testimonials</a></li>
        </ul>
      </div>
      <div class="one-fourth">
        <h3 class="textbolding"><span>Classes</span></h3>
        <ul>
          <li><a href="<?php echo home_url( '/subject-tutoring/' ); ?>">Subject Tutoring</a></li>
          <li><a href="<?php echo home_url( '/academic-coaching/' ); ?>">Academic Coaching</a></li>
          <li><a href="<?php echo home_url( '/college-students/' ); ?>">College Students</a></li>
        </ul>
      </div>
      <div class="one-fourth">
        <h3 class="textbolding"><span>Test Prep</span></h3>
        <ul>
          <li><a href="<?php echo home_url( '/sat-act/' ); ?>">SAT + ACT</a></li>
          <li><a href="<?php echo home_url( '/psat/' ); ?>">PSAT</a></li>
          <li><a href="<?php echo home_url( '/ap/' ); ?>">AP</a></li>
          <li><a href="<?php echo home_url( '/isee/' ); ?>">ISEE/SSAT/HSPT</a></li>
        </ul>
      </div>
      <div class="one-fourth">
        <h3 class="textbolding"><span>College Admissions</span></h3>
        <ul>
          <li><a href="<?php echo home_url( '/1-on-1-consulting/' ); ?>">1-On-1 Admissions Consulting</a></li>
          <li><a href="<?php echo home_url( '/college-apps-bootcamp/' ); ?>">College Apps Bootcamp</a></li>
        </ul>
      </div>
      <div class="footer-extra-links">
        <ul>
          <li><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
          <li><a href="<?php echo home_url( '/ninjas/' ); ?>">Employee Portal</a></li>
          <li><a href="<?php echo home_url( '/testing/' ); ?>">Testing</a></li>
        </ul>
      </div>
    </div>
  </section>

  <?php
}

// Footer Copyright notice
add_filter('genesis_footer_output', 'meri2015_footer_output_filter', 10, 3);
function meri2015_footer_output_filter() {

  // $back_to_top = '<a href="#" rel="nofollow" class="smoothscroll">Back to Top</a>';

  $percentiles = "";

  if( is_singular( 'tutor' ) ) {
    $percentiles = '<p class="footer-legal">* Score percentiles are based on recent SAT, ACT, and/or AP scores in the tutor\'s subject of instruction.</p>';
  }

  $legal = '<p class="footer-legal">SAT® is a registered trademark of the College Board, which was not involved in the production of, and does not endorse, this product. ACT® is a registered trademark of ACT, Inc. PSAT/NMSQT® is a trademark jointly owned by the College Board and the National Merit Scholarship Corporation, which were not involved in the production of, and do not endorse, this product. AP®, Advanced Placement Program® or Pre-AP® is a registered trademark of the College Board, which was not involved in the production of, and does not endorse, this product. None of the trademark holders are affiliated with MeriEducation or this website.</p>';

  $social_footer = '<div class="footer-social"><a href="https://www.facebook.com/merieducation"><i class="fa fa-facebook-square fa-lg"></i><span>Facebook</span></a> | <a href="https://instagram.com/merieducation/"><i class="fa fa-instagram fa-lg"></i><span>Instagram</span></a></div>';

  $creds = '<p>Copyright &copy; 2014-' . date('Y'). ' MeriEducation. All Rights Reserved.</p>';

  $output = '<div class="creds">' . $creds . '</div>' . $social_footer . $percentiles . $legal;// . $back_to_top;

  return $output;

}

//* Add smooth scrolling for any link having the class of "top"
add_action('wp_footer', 'meri2015_go_to_top');
function meri2015_go_to_top() {
  ?>
    <script type="text/javascript">
      jQuery(function($) {
        $('a.smoothscroll').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                  $('html,body').animate({
                    scrollTop: (target.offset().top - 130)
                  }, 1000);
                  return false;
                }
              }
        });
      });
    </script>
  <?php
}