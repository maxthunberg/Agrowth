<?php
/* Template Name: Career Template */
get_header();
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero--career.phtml');?>

<!-- Breadcrumb -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>

<!-- Our values -->
<?php  include( get_template_directory() . '/phtml/sections/career/our-values.phtml');?>

<!-- Why us -->
<?php  include( get_template_directory() . '/phtml/sections/career/why-us.phtml');?>

<!-- Contact form -->
<?php  include( get_template_directory() . '/phtml/sections/contact-form/contact-form.phtml');?>

<!-- CTA-section -->
<?php  include( get_template_directory() . '/phtml/sections/cta-section/cta-section.phtml');?>

<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>

<!-- Footer -->
<?php get_footer(); ?>
