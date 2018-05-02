$(document).ready(function() {

  //navbar, click on li = click on ahref
  $(".navbar-li").click(function(){
    window.location = $(this).find("a").attr("href");
    return false;
  });

  // scroll animation navbar - Box shadow animated on scroll
  var myElement = $('.bx--navbar');

  $(window).on('scroll', function() {

      var scroll = $(this).scrollTop();
      var primary = (scroll/600)/10;
      var black = (scroll/600)/20;
      var boxshadowPrimary = '0 4px 8px 0 rgba(255, 102, 101,' + primary +')';
      var boxshadowBlack = '0 8px 16px 0 rgba(0, 0, 0,' + black +')';


        if (scroll < 600) {
          myElement.css({
              'box-shadow': boxshadowPrimary + ',' + boxshadowBlack
            });
        } else {
          var boxshadowPrimary = '0 4px 8px 0 rgba(255, 102, 101, 0.1)';
          var boxshadowBlack = '0 8px 16px 0 rgba(0, 0, 0, 0.05)';
          myElement.css({
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
}); // Document ready
