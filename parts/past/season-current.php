<div class="showlist grid">
<div class="fs-row">
<?php 
   $showWidth = 'fs-cell fs-xl-3 fs-lg-4 fs-md-3 fs-sm-3';

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

<article class="show fs-cell fs-xl-3 fs-lg-4 fs-md-3 fs-sm-3">
    <div class="video">
      <a href="<?php the_sub_field('episode_url') ?>">
        <span class="play-btn">Play Show</span>
        <?php the_post_thumbnail( 'video-sm', array( 'class' => 'img-responsive' ) ); ?>
      </a>
    </div>
    <div class="desc">
      <header>
        <span class="show--counter"><?php echo $counter; ?></span>
        <h3><a href="<?php the_sub_field('episode_url') ?>"><?php the_title(); ?></a></h3>
      </header>
    </div>
</article>

<?php
  $counter++;
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>

</div>
</div>