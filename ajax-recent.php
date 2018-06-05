<?php
      $ppp = (isset($_POST['ppp'])) ? $_POST['ppp'] : 5;
	    $offset  = (isset($_POST['offset'])) ? $_POST['offset'] : 0;

      $args= array(
      'post_type' => 'post',
      'posts_per_page' => $ppp,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'offset' => $offset
      );

      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query && $query->have_posts() ) {
        while( $query->have_posts() ) : $query->the_post();
        ?>

        <div class="section-3col">
            <?php include( get_template_directory() . '/phtml/sections/cards/card-post.phtml');?>
        </div>

        <?php endwhile;

        /* Restore original Post Data */
        wp_reset_postdata();
        wp_die();

      } else {

      }

      ?>
