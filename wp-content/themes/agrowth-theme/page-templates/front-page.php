<?php
/* Template Name: Front page Template */
get_header();
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Client logos -->
<?php include( get_template_directory() . '/phtml/sections/clients/client-logos.phtml');?>

<!-- Interactive Tool -->
<?php  include( get_template_directory() . '/phtml/sections/interactive-tool/interactive-services.phtml');?>

<!-- Products Section small-->
<?php  include( get_template_directory() . '/phtml/sections/services/services-section.phtml');?>

<!-- Consultants Section -->
<?php  include( get_template_directory() . '/phtml/sections/consultants/consultants-section.phtml');?>

<!-- About us Section -->
<?php  include( get_template_directory() . '/phtml/sections/interactive-tool/interactive-circle.phtml');?>

<!-- Client cases logos -->
<?php // include( get_template_directory() . '/phtml/sections/clients/case-studies.phtml');?>

<!-- Resources Slider -->
<?php  include( get_template_directory() . '/phtml/sections/resources/resources-slider.phtml');?>

<!-- CTA-section -->
<?php  include( get_template_directory() . '/phtml/sections/cta-section/cta-section.phtml');?>

<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>

<!-- Footer -->
<?php get_footer(); ?>
