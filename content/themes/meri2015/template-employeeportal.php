<?php
/**
 * Template Name: Employee Portal
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
add_action( 'genesis_loop', 'meri2015_employee_portal_loop' );

function meri2015_employee_portal_loop() {
?>

  <section class="employee-portal-mast">
    <h2 class="textbolding">Employee <span>Portal</span></h2>
  </section><!-- .college-bootcamp-mast -->

  <?php if( post_password_required() ): ?>

  <div class="password-form">
    <?php echo get_the_password_form(); ?>
  </div>

  <?php else: ?>


  <section class="employee-portal-center employee-portal-center--pasadena" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior-pasadena.jpg">
    <h2 class="textbolding">Meri<span>Pasadena</span></h2>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Submit</span> Session Updates</h3>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/z1saoszs1xezcqo/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ad.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/z1a2nf8q03ff3vr/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ei.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/z8tlqfp03rln9d/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-jm.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zbl3gkx183ptgu/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-nq.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/z1da6fgm0qflos7/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-rz-blue.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Search</span> Session Updates</h3>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/meripasadena-session-updates-ad/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ad.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/meripasadena-session-updates-ei/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ei.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/meripasadena-session-updates-jm/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-jm.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/meripasadena-session-updates-nq/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-nq.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/meripasadena-session-updates-rz/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-rz-blue.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Calendar</span> Tools</h3>
      <a class="employee-portal-link" href="<?php echo home_url( '/meripasadena' ); ?>" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-cal.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zlpnlw31860yzt/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-au.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zyea1be0qhq84q/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-to.png"></a>
    </div>
    <div class="wrap task-section testing-reports">
      <h3 class="textbolding"><span>Testing</span> Reports</h3>
      <a class="task-button" href="https://docs.google.com/spreadsheets/d/1WonaP8_pcZ8nsgGnsKoyw3BwYAkH3ddnUGXOJYyddUI/edit?usp=sharing">SAT+ACT</a> <a class="task-button" href="https://docs.google.com/spreadsheets/d/1ryArUCz0mqmEdIGZF4QrTPQmwCpwPeuoZ_jKaoc442c/edit?usp=sharing">ISEE</a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Other</span></h3>
      <a class="task-button" href="https://merieducation.wufoo.com/forms/z179ygfr0vth07q/">Reimbursements</a> <a class="task-button" href="https://www.paycheckrecords.com/login.jsp">Timesheets</a> <a class="task-button" href="https://merieducation.wufoo.com/forms/independent-contractor-time-sheet/">IC Timesheets</a> <a class="task-button" href="https://docs.google.com/a/meri-ventures.com/spreadsheets/d/1lA2rDM8beImkc5awimehnEIOOwLuy81q8Cywd9huQoc/edit?usp=sharing">Resources</a>
    </div>

  </section><!-- .employee-portal-center.employee-portal-center--pasadena -->

  <section class="employee-portal-center employee-portal-center--newport" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior-newport.jpg">
    <h2 class="textbolding">Meri<span>Newport</span></h2>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Submit</span> Session Updates</h3>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/x6hjub411n9m7y/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ai.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/xmnkiou1ek8fpn/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-jq.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/xeadfgx0fnkpcn/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-rz-blue.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Search</span> Session Updates</h3>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/q1yar5o20v8qpby/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ai.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/q1io016l1wicgi3/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-jq.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/q12zz3ob0atz0qt/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-rz-blue.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Calendar</span> Tools</h3>
      <a class="employee-portal-link" href="<?php echo home_url( '/merinewport' ); ?>" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-cal.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zlpnlw31860yzt/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-au.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zyea1be0qhq84q/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-to.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Other</span></h3>
      <a class="task-button" href="https://merieducation.wufoo.com/forms/z179ygfr0vth07q/">Reimbursements</a> <a class="task-button" href="https://www.paycheckrecords.com/login.jsp">Timesheets</a> <a class="task-button" href="https://merieducation.wufoo.com/forms/independent-contractor-time-sheet/">IC Timesheets</a> <a class="task-button" href="https://docs.google.com/a/meri-ventures.com/spreadsheets/d/1lA2rDM8beImkc5awimehnEIOOwLuy81q8Cywd9huQoc/edit?usp=sharing">Resources</a>
    </div>
  </section><!-- .employee-portal-center.employee-portal-center--newport -->

  <section class="employee-portal-center employee-portal-center--redlands" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior-redlands.jpg">
    <h2 class="textbolding">Meri<span>Redlands</span></h2>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Submit</span> Session Updates</h3>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/xj105gy0t4dzht/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ai.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/x1styz6t0g82gi2/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-jq.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/x182btv70z6yz18/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-rz-blue.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Search</span> Session Updates</h3>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/q1xjpa1e04o4hdr/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ai.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/qvljhm81ozcv5a/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-jq.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/ql2hzno19tjiuv/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-rz-blue.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Calendar</span> Tools</h3>
      <a class="employee-portal-link" href="<?php echo home_url( '/meriredlands' ); ?>" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-cal.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zlpnlw31860yzt/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-au.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zyea1be0qhq84q/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-to.png"></a>
    </div>
    <div class="wrap task-section testing-reports">
      <h3 class="textbolding"><span>Testing</span> Reports</h3>
      <a class="task-button" href="https://docs.google.com/spreadsheets/d/10WFqzR-4w8YEKqVTPDLYsvwBLHEnKROcJlJ4ziAMA5I/edit?ts=5704210b#gid=0">Test Prep</a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Other</span></h3>
      <a class="task-button" href="https://merieducation.wufoo.com/forms/z179ygfr0vth07q/">Reimbursements</a> <a class="task-button" href="https://www.paycheckrecords.com/login.jsp">Timesheets</a> <a class="task-button" href="https://merieducation.wufoo.com/forms/independent-contractor-time-sheet/">IC Timesheets</a> <a class="task-button" href="https://docs.google.com/a/meri-ventures.com/spreadsheets/d/1lA2rDM8beImkc5awimehnEIOOwLuy81q8Cywd9huQoc/edit?usp=sharing">Resources</a>
    </div>
  </section><!-- .employee-portal-center.employee-portal-center--redlands -->

  <section class="employee-portal-center employee-portal-center--riverside" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/interior-riverside.jpg">
    <h2 class="textbolding">Meri<span>Riverside</span></h2>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Submit</span> Session Updates</h3>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/wl1iyco194ti4k/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ai.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/q19t7fid1erzglj/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-jq.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/m1agzf9y1b7vthd/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-rz-blue.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Search</span> Session Updates</h3>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/m8992qq0ghrxyc/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-ai.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/m16js5zg0m6w2m0/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-jq.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/reports/m14gvycm0r4inb6/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-rz-blue.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Calendar</span> Tools</h3>
      <a class="employee-portal-link" href="<?php echo home_url( '/meririverside' ); ?>" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-cal.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zlpnlw31860yzt/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-au.png"></a>
      <a class="employee-portal-link" href="https://merieducation.wufoo.com/forms/zyea1be0qhq84q/" onclick="window.open(this.href,  null, 'height=2147, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false"><img class="employee-portal-button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/employee-portal-button-to.png"></a>
    </div>
    <div class="wrap task-section">
      <h3 class="textbolding"><span>Other</span></h3>
      <a class="task-button" href="https://merieducation.wufoo.com/forms/z179ygfr0vth07q/">Reimbursements</a> <a class="task-button" href="https://www.paycheckrecords.com/login.jsp">Timesheets</a> <a class="task-button" href="https://merieducation.wufoo.com/forms/independent-contractor-time-sheet/">IC Timesheets</a> <a class="task-button" href="https://docs.google.com/a/meri-ventures.com/spreadsheets/d/1lA2rDM8beImkc5awimehnEIOOwLuy81q8Cywd9huQoc/edit?usp=sharing">Resources</a>
    </div>
  </section><!-- .employee-portal-center.employee-portal-center--riverside -->


  <?php endif; ?>

<?php
}

genesis();