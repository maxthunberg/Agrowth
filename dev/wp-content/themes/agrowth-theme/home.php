<?php
/* Template Name: Resources Template */
get_header();
getPostViews(get_the_ID());
?>

<!-- HERO -->
<?php  include( get_template_directory() . '/phtml/sections/hero/hero.phtml');?>

<!-- Content Switcher Tool -->
<?php  include( get_template_directory() . '/phtml/sections/resources/content-switcher.phtml');?>

<!-- <div class="bx--grid post-feed section-4rem">
    <div class="bx--row append">

    </div>
</div> -->

<!-- Other services -->
<?php
                    $args = array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                        'posts_per_page' => -1,
                    );

                    $query = new WP_Query( $args );
                    ?>
                    <div class="bx--grid post-feed section-4rem">
                      <div class="bx--row">
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <div class="section-3col">
                            <?php include( get_template_directory() . '/phtml/sections/cards/card-post.phtml');?>
                        </div>
                    <?php endwhile; ?>
                  </div>
                </div>

                    <?php
                    wp_reset_postdata();?>

<!-- CTA-section -->
<?php  include( get_template_directory() . '/phtml/sections/cta-section/cta-section.phtml');?>

<!-- Widgets -->
<?php  include( get_template_directory() . '/phtml/sections/widgets/widgets.phtml');?>

<!-- Footer -->
<?php get_footer(); ?>
