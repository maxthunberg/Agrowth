<?php

/*
Template Name: Single Template
*/

get_header();

?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Breadcrumb -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>



<!-- More posts -->
<div class="bx--grid">
  <div class="bx--row">

        <div class="bx--col-md-6 bx--col-xs-12">

          <!-- Slides -->
          <?php
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order'   => 'DESC',
                    'posts_per_page' => 5,
                );

                $query = new WP_Query( $args );
                ?>

                <?php while ( $query->have_posts() ) : $query->the_post();?>

                        <?php include( get_template_directory() . '/phtml/sections/cards/card-post.phtml');?>
              <?php  endwhile; ?>

                <?php
                wp_reset_postdata();?>

          </div>

      </div>
    </div>




<?php get_footer(); ?>
