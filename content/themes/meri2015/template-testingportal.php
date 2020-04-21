<?php
/**
 * Template Name: Testing Portal
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
add_action( 'genesis_loop', 'meri2015_testing_portal_loop' );

function meri2015_testing_portal_loop() {
?>

  <section class="testing-portal-mast">
    <h2 class="textbolding">Testing <span>Portal</span></h2>
  </section><!-- .testing-portal-mast -->

  <section class="testing-registration">
    <div class="wrap">
      <h2 class="textbolding">Testing <span>Registration</span></h2>
      <a href="http://merieducation.com/schedulemytest">Register here &gt;</a>
    </div>
  </section>

  <section class="proctor-videos">
    <div class="wrap">
      <h2 class="textbolding"><span>Proctor</span> Videos</h2>
      <a class="task-button" href="https://vimeo.com/151943266">SSAT</a>
      <a class="task-button" href="https://vimeo.com/151840487">HSPT</a>
      <a class="task-button" href="https://vimeo.com/151709219">PSAT</a>
      <a class="task-button" href="https://vimeo.com/151598011">ISEE (Upper Level)</a>
      <a class="task-button" href="https://vimeo.com/151574433">ISEE (Lower Level)</a>
      <a class="task-button" href="https://vimeo.com/151473041">SAT Subject</a>
      <a class="task-button" href="https://vimeo.com/151463206">SAT</a>
      <a class="task-button" href="https://vimeo.com/151210815">ACT</a>
    </div>
  </section>

  <section class="testing-booklets">
    <div class="wrap">
      <h2 class="textbolding"><span>SAT</span></h2>
      <a href="https://docs.google.com/forms/d/1wXQkXufRev23BGKfhLNKFjqkh_n4hTHNlxWhHIdbXZ0/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test1-219x300.png" alt="MeriEd_Web_SAT_Test1" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1X0gfdfIKGy3onSMz0FPKwLa4LLrA0tB1C1LOcGMZLKc/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test2-219x300.png" alt="MeriEd_Web_SAT_Test2" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1BAsYJehCI3Dc7i6eO7x-fw7MjpAEHstuftVPl_zkDBw/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test3-219x300.png" alt="MeriEd_Web_SAT_Test3" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1tfP-hq1KmSPUlpUjVtHPf0fczwwyft8AHm6LgkUZBME/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test4-219x300.png" alt="MeriEd_Web_SAT_Test4" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1UAWN5IVT1qD0x1N7mWPAKyP0Mc0ElG_uVanfTw4LoLI/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test5-219x300.png" alt="MeriEd_Web_SAT_Test5" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1EbKx7aRNSoyG7rxgwoSs-i0UDHRkqEfrxOx9a3JrYdk/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test6-219x300.png" alt="MeriEd_Web_SAT_Test6" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1rhnGM4oIU4ugruyItNiH7PQNZ1ANa3KQGKf2qnuyfYw/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test7-219x300.png" alt="MeriEd_Web_SAT_Test7" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/16wVTMhY8Tw27uwD3Htci6Z8Yx2Rrchqkg4NDd2ZMBvY/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test8-219x300.png" alt="MeriEd_Web_SAT_Test8" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/16w4ydeLX8sh132kgny1sHIJZVgpaW9MlHRXdr-Juzrc/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test9-219x300.png" alt="MeriEd_Web_SAT_Test9" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1vs7oUQMSHhqBhluRLy6D-GauOl2h5ZFd8zknRtkN-j4/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_Test10-219x300.png" alt="MeriEd_Web_SAT_Test10" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1CS7eeO9Aim2OwGMcSQKVS9pgngRbCJsovfm50k8HqK4/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_TestCreativity-219x300.png" alt="MeriEd_Web_SAT_TestCreativity" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1mATFDzDsiVhgTZxqPqGEeEDJ39RfTzOeFWaDoz9eupQ/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_TestPrivacy-219x300.png" alt="MeriEd_Web_SAT_TestPrivacy" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/12aRYCHXV7SwqFqfxXq4hDe0fFLVReF_QmdBpF7Lr21Q/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_TestWatson-219x300.png" alt="MeriEd_Web_SAT_TestWatson" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1wCgul7aVUQ59llQEJNGfm1ZZjVRxPqdhOhNtUAWNFPQ/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_SAT_TestToughMinded-219x300.png" alt="MeriEd_Web_SAT_TestToughMinded" width="219" height="300" /></a>
    </div>
  </section>

  <section class="testing-booklets">
    <div class="wrap">
      <h2 class="textbolding"><span>ACT</span></h2>
      <a href="https://docs.google.com/forms/d/1guHZyUupc8XIzuR6c3gtWidQfjf0521icvjFI-mXsfA/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test1-219x300.png" alt="MeriEd_Web_ACT_Test1" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1wmD0HMP-RhjaOg2HgBuaO3kvOi8oN4ZrCMvKKKrz1d4/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test2-219x300.png" alt="MeriEd_Web_ACT_Test2" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1Z6V2mXw6QpJl2jMUTb2hLG-DEqcBv3wxxqa45uXaNno/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test3-219x300.png" alt="MeriEd_Web_ACT_Test2" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1UqT95KxDCfy8D6D5Lndtvf2LlPEs461NKGOvQ6cJcEk/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test14png-219x300.png" alt="MeriEd_Web_ACT_Test2" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1PZwejBq8Dhf7IVA6AE56ryrz87BlDRGQbzYPpXZHGYA/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test5-219x300.png" alt="MeriEd_Web_ACT_Test2" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1_YHVElnKO23gz-C36YGOvhEDlNNzgY4QUsNOzNW0dVw/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test0359F-219x300.png" alt="MeriEd_Web_ACT_Test2" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1ozTgc3yUHhC_qoKte_p65of97lNlBxsioOdhTaP_Oig/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test0661C-219x300.png" alt="MeriEd_Web_ACT_Test2" width="219" height="300" /></a>
      <a href="https://docs.google.com/forms/d/1dYq_jiUPfaySFbghlGA08B6kAZfNTm9vZHkGG-Z9gIY/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test1267C-01-220x300.png" alt="MeriEd_Web_ACT_Test1267C-01" width="220" height="300" /></a>
      <a href="https://docs.google.com/forms/d/14oFHy4eJ94_fgi2IjTFcPxtUlGEf_4GCX_BKTsUaq5s/viewform" target="_blank"><img src="http://oldmeri.johnenriquez.com/wp-content/uploads/2014/12/MeriEd_Web_ACT_Test0964E-219x300.png" alt="MeriEd_Web_ACT_Test14png" width="219" height="300" /></a>
    </div>
  </section>


<?php
}

genesis();