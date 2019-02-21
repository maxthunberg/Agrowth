
<?php wp_footer(); ?>

<?php include( get_template_directory() . '/phtml/components/footer/footer.phtml');?>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3456279.js"></script>
<!-- End of HubSpot Embed Code -->

<script>
var resourceSwiper = new Swiper('.swiper-container', {
  slidesOffsetBefore: 0,
  loop: true,
  loopedSlides: 5,
  slidesPerView:'auto',
  spaceBetween: 32,
  centeredSlides: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
  nextEl: '.btn-next',
  prevEl: '.btn-prev',
},
});

// Scroll Reveal

// Changing the defaults
window.sr = ScrollReveal({
 origin: 'bottom',
 distance: '24px',
 scale: 1,
 opacity: 0,
 reset: false,
 easing:'cubic-bezier(.12,.845,.305,1)',
 viewFactor: 0,
 viewOffset: { top: 0, right: 0, bottom: 100, left: 0 }
});

// Customizing a reveal set
sr.reveal('.revealer-0', { duration: 500, delay: 0 });
sr.reveal('.revealer-100', { duration: 500, delay: 100 });
sr.reveal('.revealer-200', { duration: 500, delay: 200 });
sr.reveal('.revealer-300', { duration: 500, delay: 300 });
sr.reveal('.revealer-400', { duration: 500, delay: 400 });
sr.reveal('.revealer-500', { duration: 500, delay: 500 });
sr.reveal('.revealer-600', { duration: 500, delay: 600 });
sr.reveal('.revealer-700', { duration: 500, delay: 700 });
sr.reveal('.revealer-800', { duration: 500, delay: 800 });
sr.reveal('.revealer-900', { duration: 500, delay: 900 });

// from the left
sr.reveal('.revealer-L0', { origin: 'left', duration: 500, delay: 0 });
sr.reveal('.revealer-L100', { origin: 'left', duration: 500, delay: 100 });
sr.reveal('.revealer-L200', { origin: 'left', duration: 500, delay: 200 });
sr.reveal('.revealer-L300', { origin: 'left', duration: 500, delay: 300 });
sr.reveal('.revealer-L400', { origin: 'left', duration: 500, delay: 400 });
sr.reveal('.revealer-L500', { origin: 'left', duration: 500, delay: 500 });
sr.reveal('.revealer-L600', { origin: 'left', duration: 500, delay: 600 });
sr.reveal('.revealer-L700', { origin: 'left', duration: 500, delay: 700 });
sr.reveal('.revealer-L800', { origin: 'left', duration: 500, delay: 800 });
sr.reveal('.revealer-L900', { origin: 'left', duration: 500, delay: 900 });



</script>
</body>
</html>
