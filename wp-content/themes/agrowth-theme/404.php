<?php get_header(); ?>

<!--OTHER ARTICLES-->
<div class="services bg-03 section-8rem error404">
  <div class="bx--col-xs-12 bx--col-md-12 bx--col-lg-12 error404-container"><h2 class="heading-one">404</h2><h3 class="bx--type-gamma error404-text"><?= get_field('404_heading', 'options');?></h3></div>

    <div class="grid">
      <div class="row">
        <?php
        $currentID = get_the_ID();
        $args = array(
            'post_type' => 'page',
            'orderby' => 'menu_order',
            'order'   => 'ASC',
            'post_parent' => 0,
            'posts_per_page' => 6,
        );

        $child_query = new WP_Query( $args );
        ?>

        <?php while ( $child_query->have_posts() ) : $child_query->the_post();

            include( get_template_directory() . '/phtml-components/cards/card-sm.phtml');

        endwhile; ?>

        <?php
        wp_reset_postdata();?>



      </div>

    </div>

</div>


<?php get_footer(); ?>
