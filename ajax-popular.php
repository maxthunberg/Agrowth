<?php
      $ppp = (isset($_POST['ppp'])) ? $_POST['ppp'] : 5;
	    $offset  = (isset($_POST['offset'])) ? $_POST['offset'] : 0;

      $args = array(
        'post_type' => 'post',
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'posts_per_page' => $ppp,
        'offset' => $offset
      );

      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
        while( $query->have_posts() ) : $query->the_post();

          Partial::set()->file('components/article-preview')->attr([
              'post' => new Post($article->ID)
          ])->render();

        endwhile;

        /* Restore original Post Data */
        wp_reset_postdata();
        wp_die();
      } else {

      }

      ?>
