/**
 *
 * Main Javascript file
 *
 */

jQuery(document).ready(function($) {

  if( !Modernizr.touchevents ) {
    $( '.parallax-mast' ).each(function( index ) {
      var bgsrc = $( this ).css('background-image');
      bgsrc = bgsrc.replace( 'url(', '' ).replace( ')', '' ).replace( '"', '' ).replace( '"', '' );
      $( this ).parallax({imageSrc: bgsrc, speed: 0.5, zIndex: -1});
      $( this ).css( 'background', 'transparent' );
      $( this ).css( 'background-image', 'none' );
    });
  }

  FastClick.attach(document.body);

  var nav = $( ".nav-primary .primary-menu" );
  var navToggle = $( ".skip" );
  var menuIcon = $( ".skip .menu-icon" );
  var menuCoverer = $( ".site-inner" );

  if ( navToggle ) {
    navToggle.click( function( e ) {
      nav.toggleClass( "is-open" );
      menuIcon.toggleClass( "is-open" );
      menuCoverer.toggleClass( "is-faded" );
      e.preventDefault();
      //$(window).trigger('resize').trigger('scroll');
    });
  } // if navToggle

  $(".player").fitVids();

  $(".light-slider").lightSlider({
    item: 1,
    auto: true,
    loop: true,
    mode: 'fade',
    pause: 3500,
    controls: false,
    pager: false,
    speed: 500,
  });

  $(".cardology-slider").lightSlider({
    item: 1,
    auto: true,
    loop: true,
    pause: 2000,
    controls: false,
    pager: false,
    adaptiveHeight: true,
    speed: 500
  });

  $(".tutor-testimonial-list").lightSlider({
    adaptiveHeight: true,
    item: 1,
    slideMargin: 0,
    loop: true
  });

  $( '#play-button' ).click(function(){
    $( '.player iframe' ).vimeo("play");
    $( '.player .cover-photo' ).fadeOut(600);
    $( '.player .play-button' ).fadeOut(600);
  });

  divH = divW = 0;
  divW = $('.instagram-embedded').width();
  divH = $('.instagram-embedded').height();

  function checkInstagramResize() {
    var w = $('.instagram-embedded').width();
    var h = $('.instagram-embedded').height();
    if( w!=divW || h!=divH ) {
      jQuery(window).trigger('resize').trigger('scroll');
    }
  }

  var timer = setInterval(checkInstagramResize, 1000);

  new WOW().init();

  // media query event handler
  if (matchMedia) {
    var mq = window.matchMedia( '(min-width: 41.25em)' );
    mq.addListener(widthChange);
    widthChange(mq);
  }

  // media query change
  function widthChange(mq) {
    if( mq.matches ) {
      //console.log("big!");
    } else {
      //console.log("small.");
    }
  }

  $('.try-us-free-modal').magnificPopup({
    type: 'inline',
    showCloseBtn: true,
    closeBtnInside: true,
  });
});