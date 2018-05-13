
<?php wp_footer(); ?>

<?php include( get_template_directory() . '/phtml/components/footer/footer.phtml');?>

<script>
var swiper = new Swiper('.swiper-container', {
  slidesOffsetBefore: -256,
  loop: false,
  slidesPerView: 4,
  spaceBetween: 32,
  centeredSlides: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

</script>
</body>
</html>
