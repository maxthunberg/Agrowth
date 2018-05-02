<?php
/* Template Name: Consultants Template */
get_header();
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Breadcrumb -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>

<!-- Interactive Tool -->
<?php  include( get_template_directory() . '/phtml/sections/interactive-tool/interactive-tool.phtml');?>

<!-- Consultants Section -->
<?php  include( get_template_directory() . '/phtml/sections/consultants/consultants-section-sm.phtml');?>

<?php get_footer(); ?>
