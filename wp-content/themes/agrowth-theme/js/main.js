$(document).ready(function() {

  //navbar, click on li = click on ahref
  $(".navbar-li").click(function(){
    window.location = $(this).find("a").attr("href");
    return false;
  });

  // Navbar mobile fullscreen submenu
  $('.btn--menu').click(function(){
    $('.bx--navbar--submenu__mobile').toggleClass('visible');
  });
  $('.bx--navbar--submenu__close-button').click(function(){
    $('.bx--navbar--submenu__mobile').removeClass('visible');
  });

  // ALL KEYPRESS
    $(document).keydown(function(e) {
        switch(e.which) {
            case 37: // left
            resourceSwiper.slideNext();
            break;

            case 38: // up
            break;

            case 39: // right
            resourceSwiper.slidePrev();
            break;

            case 40: // down
            break;

            case 13: // enter
            break;

            case 27: // ESC

            break;

            default: return; // exit this handler for other keys
        }

        e.preventDefault(); // prevent the default action (scroll / move caret)

    });


  // scroll animation navbar - Box shadow animated on scroll
  var navbar = $('.bx--navbar');
  var navbarMobile = $('.bx--navbar__mobile');

  $(window).on('scroll', function() {

      var scroll = $(this).scrollTop();
      var primary = (scroll/600)/10;
      var black = (scroll/600)/20;
      var boxshadowPrimary = '0 4px 8px 0 rgba(255, 102, 101,' + primary +')';
      var boxshadowBlack = '0 8px 16px 0 rgba(0, 0, 0,' + black +')';

        if (scroll < 600) {
          navbar.css({
              'box-shadow': boxshadowPrimary + ',' + boxshadowBlack
            });
        } else {
          var boxshadowPrimary = '0 4px 8px 0 rgba(255, 102, 101, 0.1)';
          var boxshadowBlack = '0 8px 16px 0 rgba(0, 0, 0, 0.05)';
          navbar.css({
              'box-shadow': boxshadowPrimary + ',' + boxshadowBlack
            });
        }

        if (scroll < 600) {
          navbarMobile.css({
              'box-shadow': boxshadowPrimary + ',' + boxshadowBlack
            });
        } else {
          var boxshadowPrimary = '0 4px 8px 0 rgba(255, 102, 101, 0.1)';
          var boxshadowBlack = '0 8px 16px 0 rgba(0, 0, 0, 0.05)';
          navbarMobile.css({
              'box-shadow': boxshadowPrimary + ',' + boxshadowBlack
            });
        }
  });

  // scroll animation navbar - Opacity on hero elements
  var image = $('.hero-image');
  var subheading = $('.hero-subheading');
  var heading = $('.hero-heading');
  var paragraph = $('.hero-paragraph');

  $(window).on('scroll', function() {

      var scroll = $(this).scrollTop();
      var opacity = 1 - scroll/300;

        if (scroll < 300) {
          image.css({
              'opacity': opacity
            });
          subheading.css({
              'opacity': opacity
            });
          heading.css({
              'opacity': opacity
            });
          paragraph.css({
              'opacity': opacity
            });
        } else {
          return false;
        }
  });

  // Turning circle

  var i = 1;

  var interval = setInterval( increment, 30);

  function increment() {
      outer = $('.circle-outer');
      middle = $('.circle-middle');
      inner = $('.circle-inner');
      if (outer.length > 0 ) {

        if ( (outer.is(':hover') === true) || (middle.is(':hover') === true) || (inner.is(':hover') === true) ) {

        } else {

          i = i % 360 + 1;
          $('.circle-inner').css('transform','rotate(' + i + 'deg)');
          $('.circle-sm svg').css('transform','rotate(-' + i + 'deg)');

        }

      }

  }

  // change to correct card-about us frontpage

  function interactiveCircleSwitch(icon,card) {

    var start = $('.card-aboutus-1');

    start.addClass('active');

    $(icon).click(function() {
      $('.card-aboutus').removeClass('active');
      $(card).addClass('active');
    });

    // $(icon).mouseover(function() {
    //   $('.card-aboutus').removeClass('active');
    //   $(card).addClass('active');
    // });

  }

  interactiveCircleSwitch('.icn-growthanalysis--simple','.card-aboutus-1');
  interactiveCircleSwitch('.icn-bulb','.card-aboutus-2');
  interactiveCircleSwitch('.icn-testing','.card-aboutus-3');
  interactiveCircleSwitch('.icn-measure','.card-aboutus-4');
  interactiveCircleSwitch('.icn-iterate','.card-aboutus-5');



  // Reading indicator
  if ($('.ingress').length) {
    window.onscroll = function() {readingIndicator()};
  }

  function readingIndicator() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("readingIndicator").style.width = scrolled + "%";
  }




}); // Document ready
