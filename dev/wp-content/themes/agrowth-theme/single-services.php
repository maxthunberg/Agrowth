<?php

/*
Template Name: Single Services Template
*/

get_header();
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Breadcrumbs -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>

<!-- Flexible Content -->
<?php  include( get_template_directory() . '/phtml/sections/flexible-content/flexible-content.phtml');?>

<!-- Other services -->
<div class="bx--grid resources-footer__outer services">
  <div class="bx--row">

      <div class="bx--col-md-12 resources-footer more-articles">
        <h3>Fler tjänster</h3>
      </div>
      <div class="bx--col-md-12 section-2rem resources-footer resources-footer__cards">

<?php
                    $args = array(
                        'post_type' => 'services',
                        'orderby' => 'rand',
                        'order'   => 'DESC',
                        'posts_per_page' => 4,
                        'post__not_in' => array (get_the_ID()),
                    );

                    $query = new WP_Query( $args );
                    ?>

                    <?php while ( $query->have_posts() ) : $query->the_post();?>

                        <div class="section-2col">
                          <?php include( get_template_directory() . '/phtml/sections/cards/card-service.phtml');?>
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
