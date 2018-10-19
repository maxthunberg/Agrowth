$(document).ready(function() {


	// Disable/enable scroll
	var keys = {37: 1, 38: 1, 39: 1, 40: 1};

	function preventDefault(e) {
	  e = e || window.event;
	  if (e.preventDefault)
	      e.preventDefault();
	  e.returnValue = false;
	}

	function preventDefaultForScrollKeys(e) {
	    if (keys[e.keyCode]) {
	        preventDefault(e);
	        return false;
	    }
	}

	function disableScroll() {
	  if (window.addEventListener) // older FF
	      window.addEventListener('DOMMouseScroll', preventDefault, false);
			  window.onwheel = preventDefault; // modern standard
			  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
			  window.ontouchmove  = preventDefault; // mobile
			  document.onkeydown  = preventDefaultForScrollKeys;
	}

	function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
		    window.onmousewheel = document.onmousewheel = null;
		    window.onwheel = null;
		    window.ontouchmove = null;
		    document.onkeydown = null;
	}


  //navbar, click on li = click on ahref
  $(".navbar-li").click(function(){
    window.location = $(this).find("a").attr("href");
    return false;
  });

  // Navbar mobile fullscreen submenu
  $('.btn--menu').click(function(){
    $('.bx--navbar--submenu__mobile').toggleClass('visible');
    $('.btn--menu').toggleClass('active');

    if ( $('.btn--menu').hasClass('active') ) {
      disableScroll();
    } else if ( !$('.btn--menu').hasClass('active') ) {
      enableScroll();
    } else {

    }

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


  // About us page - Hover effect on icons
  function ourOfferAnimation() {
    var icon = $('.our-offer--icon-container');

    $(icon).mouseover(function(){
      $(this).siblings().addClass('active');
    });

    $(icon).mouseout(function(){
      $(this).siblings().removeClass('active');
    });

  }

  ourOfferAnimation();

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

	if ( $('.hero').length ) {

		var image = $('.hero-image');
		var bgimage = $('.hero__bg-image');
		var subheading = $('.hero-subheading');
		var heading = $('.hero-heading');
		var paragraph = $('.hero-paragraph');

		$(window).on('scroll', function() {

			var scroll = $(this).scrollTop();
			var heroBottom = $('.hero').offset().top + $('.hero').height();
			var opacity = 1 - scroll/heroBottom;
			console.log( $('.hero').height() );

			if (scroll < heroBottom) {
				image.css({
					'opacity': opacity
				});
				bgimage.css({
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

	}

  // Turning circle

  if ($('.card-aboutus-1').length) {
    $('.card-aboutus-1').addClass('active');
    $('.circle-sm-1').addClass('active');

    $('.circle-sm').click(function(){
      $('.circle-sm').removeClass('active');
      $(this).addClass('active');
    });
  }

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
  if ($('.reading-indicator').length) {
    window.onscroll = function() {readingIndicator()};
  }

  function readingIndicator() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("readingIndicator").style.width = scrolled + "%";
  }

  // Sticky-bar functionality

  function stickyBar() {

    $(window).scroll(function() {

      var windowCenter =  $(window).height() / 2 - 150;
      var eTop = $('.sticky-bar').offset().top - $(window).scrollTop();
      var eBottom = $('.sticky-bar').offset().top + $(window).height();
      var stickyContainerTop = $('.sticky-container').offset().top;
      var stickyContainerBottom = $('.sticky-container').offset().top + $('.sticky-container').height()

      if ( eTop <= windowCenter ) { // Element reaches center of viewport and sticks
        $('.sticky-bar').addClass('fixed');
      }

			if ( $(window).scrollTop() + windowCenter < stickyContainerTop + 264 ) { // Element reaches inital position
				$('.sticky-bar').removeClass('fixed');
			}

			if ( $(window).scrollTop() + windowCenter > stickyContainerBottom - 256 ) { // Element reaches Bottom and disapears
				$('.sticky-bar').addClass('fade');
				setTimeout( function(){
					$('.sticky-bar').addClass('hide');
				}, 200);
			}

			if ( $(window).scrollTop() + windowCenter <= stickyContainerBottom - 256 ) { // Element reappears
				$('.sticky-bar').removeClass('hide');
					setTimeout( function(){
						$('.sticky-bar').removeClass('fade');
					}, 100);
			}


    });
  }


  if ( $('.sticky-bar').length ) {
    stickyBar();
  }

function findNavLinkPosition(classBoth, navbarLi, submenu) {

	$(classBoth).hover(function() {

			var linkWidth = $(navbarLi).width() + 32;
			var posLeft = $(navbarLi).offset().left;
			var outputLeft = linkWidth/2 + posLeft;

			$('.bx--navbar--submenu .snippet').css('left', + outputLeft - 8);

	});

	$(classBoth).hover( function() {

			$('.bx--navbar--submenu.' + submenu ).toggleClass('is-visible');

	});

}

findNavLinkPosition('.submenu-1', '.navbar--li-1', 'submenu--services');
// findNavLinkPosition('.submenu-2', '.navbar--li-2', 'submenu--consultants');

function ourValuesAnimation(classname) {

	if ( $(classname).length ) {

		$(classname).hover(function() {
			$(this).toggleClass('hover');
		});
	}

}

ourValuesAnimation('.our-values--col');


}); // Document ready
