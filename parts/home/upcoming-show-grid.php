<?php

  $meta_query = array(
    array(
      'key'           => 'next_air_date',
      'value'         =>  date('Ymd'),
      'type'          => 'DATE',
      'compare'       => '>='
    ),
    array(
      'key'           => 'air_time',
      'orderby'       => 'meta_value',
      'order'         => DESC
    ),
  );

  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'meta_query' => array(
        'relation' => 'AND',
        'event_start_date_clause' => array(
            'key'     => 'next_air_date',
            'compare' => 'EXISTS',
            'value'         =>  date('Ymd'),
            'type'          => 'DATE',
            'compare'       => '>='
        ),
        'event_start_time_clause' => array(
            'key'     => 'air_time',
        ), 
    ),
    'orderby' => array(
        'event_start_date_clause' => 'ASC',
        'event_start_time_clause' => 'ASC',
    ),
  );

  $fargs = array (

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
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>
