<?php
/* Template Name: Contact us Template */
get_header();
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Contact form -->
<?php  include( get_template_directory() . '/phtml/sections/contact-form/contact-form.phtml');?>

<!-- CTA-section -->
<?php  include( get_template_directory() . '/phtml/sections/cta-section/cta-section.phtml');?>

<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>

<!-- Footer -->
<?php get_footer(); ?>
