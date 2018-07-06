
<?php wp_footer(); ?>

<?php include( get_template_directory() . '/phtml/components/footer/footer.phtml');?>

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

</script>
</body>
</html>
