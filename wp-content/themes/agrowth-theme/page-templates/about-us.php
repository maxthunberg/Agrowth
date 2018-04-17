<?php
/* Template Name: About us Template */
get_header();
?>

<!-- HERO -->
<?php include( get_template_directory() . '/phtml-components/hero/hero--sm.phtml');?>

<!-- CONTACT FORM -->
<?php include( get_template_directory() . '/phtml-components/contact-form/contact-form.phtml');?>

<!-- MAP -->
<?php include( get_template_directory() . '/phtml-components/map/map.phtml');?>

<!-- Sendify -->
<?php include( get_template_directory() . '/phtml-components/tosendify/tosendify.phtml');?> <!--HERO IMAGE WITH ACF-->

<?php get_footer(); ?>
