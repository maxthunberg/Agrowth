<?php
/* Template Name: Consultants Template */
get_header();
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Breadcrumb -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>

<!-- Consultants Section -->
<?php  include( get_template_directory() . '/phtml/sections/consultants/consultants-section-sm.phtml');?>

<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>

<!-- Footer -->
<?php get_footer(); ?>
