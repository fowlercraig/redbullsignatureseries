<?php

  $meta_query = array(
    array(
      'key'           => 'next_air_date',
      'value'         =>  date('Ymd'),
      'type'          => 'DATE',
      'compare'       => '<'
    )
  );

  $args = array (

    'posts_per_page' => -1,
    'post_type'      => 'page',
    'post_parent'    => 66,
    'meta_key'       => 'next_air_date',
    'order'          => 'ASC',
    'orderby'        => 'meta_value_num',
    'paged'          => $paged,
    'meta_query'     => $meta_query

  );

  $temp = $wp_query;
  $wp_query = null;
  $wp_query = new WP_Query();
  $wp_query->query($args);
  $counter = 1;

  while ($wp_query->have_posts()) : $wp_query->the_post();

  $end_date_passed_check = DateTime::createFromFormat('Ymd', get_field('next_air_date'));
  $date = DateTime::createFromFormat('Ymd', get_field('next_air_date'));

  $date_passed = null;
  if ( $end_date_passed_check->format('Ymd') < date('Ymd') ) {
    $date_passed = 'past';
  }


?>

<?php include locate_template('parts/home/show-grid.php' ); ?>

<?php
  $counter++;
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>
