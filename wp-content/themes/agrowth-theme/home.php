<?php
/* Template Name: Resources Template */
get_header();
getPostViews(get_the_ID());
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Breadcrumb -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>

<!-- Interactive Tool -->
<?php  include( get_template_directory() . '/phtml/sections/interactive/interactive.phtml');?>

<!-- Interactive Tool -->
<?php  include( get_template_directory() . '/phtml/sections/products-sm/products-sm.phtml');?>

<!-- CTA-section -->
<?php  include( get_template_directory() . '/phtml/sections/cta-section/cta-section.phtml');?>

<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>


<!-- Footer -->
<?php get_footer(); ?>
