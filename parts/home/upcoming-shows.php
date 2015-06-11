<?php

  $meta_query = array(
    array(
      'key'           => 'next_air_date',
      'value'         =>  date('Ymd'),
      'type'          => 'DATE',
      'compare'       => '>='
    )
  );

  $args = array (

    'posts_per_page' => -1,
    'post_type'      => 'page',
    'post_parent'    => 66,
    'order'          => 'ASC',
    'paged'          => $paged,
    'meta_query'     => $meta_query

  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);

  while ($wp_query->have_posts()) : $wp_query->the_post();
?>

<?php include locate_template('/parts/home/show-posts.php' ); ?>

<?php
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>