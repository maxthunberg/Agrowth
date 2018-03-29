<?php
/*
Template Name: Learn Template
*/

get_header();

getPostViews(get_the_ID());

?>


      <?php include( get_template_directory() . '/phtml-components/hero/hero--sm.phtml');?> <!--HERO IMAGE WITH ACF-->

      <div class="tab-content">

        <?php include( get_template_directory() . '/phtml-components/tabnav/tabnav.phtml');?>

        <?php include( get_template_directory() . '/phtml-components/tabnav/learn/tab-content.phtml');?>


      </div>

      <?php include( get_template_directory() . '/phtml-components/tosendify/tosendify.phtml');?> <!--HERO IMAGE WITH ACF-->



<?php get_footer(); ?>
