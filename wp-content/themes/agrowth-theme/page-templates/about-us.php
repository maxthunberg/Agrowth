<?php
/* Template Name: About us Template */
get_header();
?>

<!-- Breadcrumb -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Our offer section -->
<?php  include( get_template_directory() . '/phtml/sections/about-us/our-offer.phtml');?>

<!-- Our vision Section -->
<?php  include( get_template_directory() . '/phtml/sections/about-us/our-vision.phtml');?>

<!-- Contact form -->
<?php  include( get_template_directory() . '/phtml/sections/contact-form/contact-form.phtml');?>

<!-- CTA-section -->
<?php  include( get_template_directory() . '/phtml/sections/cta-section/cta-section.phtml');?>

<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>

<!-- Footer -->
<?php get_footer(); ?>
