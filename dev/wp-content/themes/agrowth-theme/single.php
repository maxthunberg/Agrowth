<?php

/*
Template Name: Single Template
*/


get_header();

$ingress = get_field('ingress');
?>

<!-- Breadcrumbs -->
<?php  include( get_template_directory() . '/phtml/sections/breadcrumb/breadcrumb.phtml');?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Flexible Content -->
<?php  include( get_template_directory() . '/phtml/sections/flexible-content/flexible-content.phtml');?>


<!-- Other services -->
<div class="bx--grid resources-footer__outer">
  <div class="bx--row">
    <div class="bx--col-md-12 resources-footer resources-footer__info">
      <div class="tag-container">
        <?php foreach ( ( get_the_category() ) as $category ):
            $catname = $category->name;
            $catslug = $category->slug;
          ?>
          <span class="bx--tag bx--tag--<?= $catslug ?>"><?= $catname ?></span>
          <?php endforeach;?>
        </div>

        <!-- Author information card -->
        <?php include( get_template_directory() . '/phtml/sections/author-info/author-info.phtml'); ?>

      </div>
      <div class="bx--col-md-12 more-articles">
        <h3>Fler artiklar</h3>
      </div>
      <div class="bx--col-md-12 section-2rem resources-footer resources-footer__cards">

<?php
                    $args = array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order'   => 'DESC',
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
