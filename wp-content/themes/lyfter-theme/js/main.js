$(document).ready(function() {


  // Preloader
  // Preloader

	function preloaderCounter() {
      var i = 0;
      // This block will be executed 100 times.
      setInterval(function(){
  			var preloader = $('.preloader');
  			var complete = $('.progress.completed');

          if (i == 100) {
						$('.preloader .counter').text('100');
  					preloader.fadeOut(500);

  				} else {
  					$('.preloader .bar .progress').css('width', i++ + '%');
  				}

  				if (complete.length) {
  					setTimeout(function() { //
  						$('.preloader .counter').text('100');
  					}, 200);
  				} else {
  					$('.preloader .counter').text(i++);
  				}

      }, 100); // Max 5000 ms before removing preloader
  } // End


	if (!$.cookie('loaded')) {
  // show preloader
	  preloaderCounter();

		$(window).on('load', function () {

				 console.log("Window Loaded");

				 $('.preloader .bar .progress').addClass('completed')

				 setTimeout(function() { //
					 $('.preloader .counter').text('100');
				 }, 200);

				 setTimeout(function() {
					 $('.preloader').fadeOut(500);
				 }, 500);

		});

  // create cookie
  $.cookie('loaded', true, {expires: 7});

} else {

	$('.preloader').addClass('hide');

}


// Cookies Accept notification

if (!$.cookie('cookies-accept')) {

	setTimeout(function() {

		// show cookie notification
		$('.accept-cookies').addClass('is-visible');
		$('.ly--navbar').addClass('cookies');
		$('.ly--navbar--submenu').addClass('cookies');

		$('.btn-accept-cookies').click(function(){

			$('.accept-cookies').removeClass('is-visible');
			$('.ly--navbar').removeClass('cookies');
			$('.ly--navbar--submenu').removeClass('cookies');

			// create cookie
			$.cookie('cookies-accept', true, {expires: 30});

		});

	}, 15000);

}




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
  $(".navbar--menu-item").click(function(){
    window.location = $(this).find("a").attr("href");
    return false;
  });

  // Navbar mobile fullscreen submenu
  $('.btn--menu').click(function(){
    $('.ly--navbar--submenu__mobile').toggleClass('visible');
    $('.btn--menu').toggleClass('active');

    if ( $('.btn--menu').hasClass('active') ) {
      disableScroll();
    } else if ( !$('.btn--menu').hasClass('active') ) {
      enableScroll();
    } else {

    }

  });

  $('.ly--navbar--submenu__close-button').click(function(){
    $('.ly--navbar--submenu__mobile').removeClass('visible');
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
  function interactiveIconAnimation() {
    var icon = $('.interactive-icon__icon');

    $(icon).mouseover(function(){
      $(this).siblings().addClass('active');
    });

    $(icon).mouseout(function(){
      $(this).siblings().removeClass('active');
    });

  }

  interactiveIconAnimation();


  // scroll animation navbar - Box shadow animated on scroll


  var navbar = $('.ly--navbar');
  var navbarMobile = $('.ly--navbar__mobile');

  $(window).on('scroll', function() {

      var scroll = $(this).scrollTop();
      var primary = (scroll/600)/20;
      var black = (scroll/600)/20;
      var boxshadowPrimary = '0 4px 8px 0 rgba(35, 135, 235,' + primary +')';
      var boxshadowBlack = '0 8px 16px 0 rgba(0, 0, 0,' + black +')';

        if (scroll < 600) {
          navbar.css({
              'box-shadow': boxshadowPrimary + ',' + boxshadowBlack
            });
        } else {
          var boxshadowPrimary = '0 4px 8px 0 rgba(35, 135, 235, 0.05)';
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
          var boxshadowPrimary = '0 4px 8px 0 rgba(35, 135, 235, 0.05)';
          var boxshadowBlack = '0 8px 16px 0 rgba(0, 0, 0, 0.05)';
          navbarMobile.css({
              'box-shadow': boxshadowPrimary + ',' + boxshadowBlack
            });
        }
  });





	if ( $('.ly--navbar.transparent').length ) {

		  $(window).on('scroll', function() {

					var scroll = $(this).scrollTop();

					if (scroll > 100) {
						$('.ly--navbar').removeClass('transparent');
						$('.ly--navbar--submenu').removeClass('transparent');
					} else {
						$('.ly--navbar').addClass('transparent');
						$('.ly--navbar--submenu').addClass('transparent');
					}

		  });

	}



  // // scroll animation navbar - Opacity on hero elements
	//
	// if ( $('.hero').length ) {
	//
	// 	var image = $('.hero-image');
	// 	var bgimage = $('.hero__bg-image');
	// 	var subheading = $('.hero-subheading');
	// 	var heading = $('.hero-heading');
	// 	var paragraph = $('.hero-paragraph');
	//
	// 	$(window).on('scroll', function() {
	//
	// 		var scroll = $(this).scrollTop();
	// 		var heroBottom = $('.hero').offset().top + $('.hero').height();
	// 		var opacity = 1 - scroll/heroBottom;
	//
	// 		if (scroll < heroBottom) {
	// 			image.css({
	// 				'opacity': opacity
	// 			});
	// 			bgimage.css({
	// 				'opacity': opacity
	// 			});
	// 			subheading.css({
	// 				'opacity': opacity
	// 			});
	// 			heading.css({
	// 				'opacity': opacity
	// 			});
	// 			paragraph.css({
	// 				'opacity': opacity
	// 			});
	// 		} else {
	// 			return false;
	// 		}
	// 	});
	//
	// }



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
    // stickyBar();
  }


function onHoverSubmenuVisible(hover) {

	$(hover).hover(
		function(){
		$('.ly--navbar--submenu').addClass('is-visible');
		},
		function(){
		$('.ly--navbar--submenu').removeClass('is-visible');
		}
);

}

function changeSubmenuSnippetPosition() {

	$('.navbar--menu-item.submenu').hover(function() {

		var linkWidth = $(this).width() + 32;
		var posLeft = $(this).offset().left;
		var outputLeft = linkWidth/2 + posLeft;

		$('.ly--navbar--submenu .snippet').css('left', + outputLeft - 8);

	});

}

function showSubmenuContent(){

	$('.navbar--menu-item:nth-child(1)').hover(function() {
		$('.submenu--container.submenu-3').removeClass('is-visible');
		$('.submenu--container.submenu-2').removeClass('is-visible');
		$('.submenu--container.submenu-1').addClass('is-visible');
	});

	$('.navbar--menu-item:nth-child(2)').hover(function() {
		$('.submenu--container.submenu-3').removeClass('is-visible');
		$('.submenu--container.submenu-1').removeClass('is-visible');
		$('.submenu--container.submenu-2').addClass('is-visible');
	});

	$('.navbar--menu-item:nth-child(3)').hover(function() {
		console.log('nummer 3');
		$('.submenu--container.submenu-1').removeClass('is-visible');
		$('.submenu--container.submenu-2').removeClass('is-visible');
		$('.submenu--container.submenu-3').addClass('is-visible');
	});

}

changeSubmenuSnippetPosition();

onHoverSubmenuVisible('.navbar--menu-item.submenu');
onHoverSubmenuVisible('.ly--navbar--submenu .snippet');
onHoverSubmenuVisible('.ly--navbar--submenu');
showSubmenuContent();

function ourValuesAnimation(classname) {

	if ( $(classname).length ) {

		$(classname).hover(function() {
			$(this).toggleClass('hover');
		});
	}

}

ourValuesAnimation('.our-values--col');

$("#btn-resume").click(function() {
    $("#your-resume").click();
});

$("#btn-bio").click(function() {
    $("#your-bio").click();
});


function calculateReadTime() {

	if ( $('.section-content__outer').length ) {

		var wordCount = $(".section-content__outer h1, .section-content__outer h2, .section-content__outer h3, .section-content__outer h4, .section-content__outer h5, .section-content__outer h6, .section-content__outer p, .section-content__outer li, .section-content__outer span, .section-content__outer a").text().trim().replace(/[\s]+/g, " ").split(" ").length;
		console.log('Number of words = ' + wordCount + ' words');

		var imgCount = $('.section-content__outer img').length;
		console.log('Number of images = ' + imgCount + ' images');

		var readTime = (wordCount/275*60 + imgCount*10)/60;
		console.log('Exact readtime = ' + readTime + ' min');

		var roundedUp = Math.round(readTime);
		console.log('Final Readtime = ' + roundedUp + ' min');

	}

}

calculateReadTime();

function animateContactForm() {

	$(window).scroll(function(){

		var wind =  $(window);
		var form = $('.ly--contact-form');
		var distance = form.offset().top - form.height() + 320;

		if ( wind.scrollTop() >= distance) {
				form.addClass('animate');
		}

		if ( wind.scrollTop() < distance) {
				form.removeClass('animate');
		}

	});

}

if ( $('.ly--contact-form').length ) {
	animateContactForm();
}


// Paywall functionality

function activatePaywall() {

	var resourceFooter = $('.resources-footer__outer');
	var widget = $('.widgets');
	var footer = $('.footer');

	resourceFooter.addClass('paywall-hide');
	widget.addClass('paywall-hide');
	footer.addClass('paywall-hide');

	$(window).scroll(function(){

		var wind =  $(window);
		var form = $('.ly--paywall-form');
		var container = $('.flexible-content.paywall');
		var distance = container.offset().top;

		if ( wind.scrollTop() >= distance) {
				form.addClass('is-visible');
				setTimeout(function(){
					form.addClass('animate');
				},100);
		}

	});

}

if ( $('.paywall-container').length ) {
	activatePaywall();
}



}); // Document ready
