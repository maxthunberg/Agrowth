<?php
/* Template Name: Front page Template */
get_header();
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Breadcrumb -->
<?php  //include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>


<!-- Interactive Tool -->
<?php  include( get_template_directory() . '/phtml/sections/interactive-tool/interactive-tool--frontpage.phtml');?>

<!-- Products Section small-->
<?php  include( get_template_directory() . '/phtml/sections/services/services-section.phtml');?>

<!-- Client logos -->
<?php  include( get_template_directory() . '/phtml/sections/client-logos/client-logos.phtml');?>

<!-- Resources Slider -->
<?php  include( get_template_directory() . '/phtml/sections/resources/resources-slider.phtml');?>

<!-- Consultants Section -->
<?php  include( get_template_directory() . '/phtml/sections/consultants/consultants-section.phtml');?>

<!-- About us Section -->
<?php  include( get_template_directory() . '/phtml/sections/interactive-tool/interactive-circle.phtml');?>

<!-- CTA-section -->
<?php  include( get_template_directory() . '/phtml/sections/cta-section/cta-section.phtml');?>

<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>

<!-- Footer -->
<?php get_footer(); ?>
