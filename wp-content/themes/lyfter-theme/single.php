<?php

/*
Template Name: Single Template
*/


get_header();

$ingress = get_field('ingress');

$paywall = get_field('select_paywall');

?>

<!-- Breadcrumbs -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>


<!-- Flexible Content -->
<?php  include( get_template_directory() . '/phtml/sections/flexible-content/flexible-content.phtml');?>


<!-- Other services -->
<div class="grid resources-footer">
  <div class="row">

      <div class="section-heading_center">
        <h3 class="heading-three center">Fler inlägg</h3>
      </div>

      <div class="more-articles">

<?php
                    $args = array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 3,
                    );

                    $query = new WP_Query( $args );
                    ?>

                    <?php while ( $query->have_posts() ) : $query->the_post();?>

                        <div class="section-3col">
                          <?php include( get_template_directory() . '/phtml/sections/cards/card-post-sm.phtml');?>
                        </div>

                    <?php endwhile; ?>

                    <?php
                    wp_reset_postdata();?>

      </div>


  </div>
</div>


<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>

<!-- Footer -->
<?php get_footer(); ?>
