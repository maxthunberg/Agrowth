<?php

/*
Template Name: Single Services Template
*/

get_header();
?>

<h1><?= get_the_title();?></h1>
<h2>services</h2>

<?php
                    $args = array(
                        'post_type' => 'services',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                        'posts_per_page' => 3,
                    );

                    $query = new WP_Query( $args );
                    ?>

                    <?php while ( $query->have_posts() ) : $query->the_post();?>

                          <div>
                            <?= get_the_title();?>
                          </div>

                    <?php endwhile; ?>

                    <?php
                    wp_reset_postdata();?>


<?php get_footer(); ?>
