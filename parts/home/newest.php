<section id="home--above" class="royalSlider rsMinW">

<?php

  $meta_query = array(
    array(
      'key'           => 'next_air_date',
      'value'         =>  date('Ymd'),
      'type'          => 'DATE',
      'compare'       => '>'
    )
  );

  $args = array (

    'posts_per_page' => 1,
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

  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'video-lg', true);
  $thumb_url = $thumb_url_array[0];


?>

<div class="slide rsContent" data-rsDelay="7000">
  <div class="fs-row">
    <div class="fs-cell fs-xl-11 fs-lg-12 fs-md-6 fs-sm-3 fs-padded centered">
      <div class='fs-row'>
        <div class="slide--spacer fs-cell fs-full-all"></div>
        <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3">
          <div class="content rsABlock"  data-move-effect="bottom">
            <header class="">
              <?php if ($counter == 1): ?>
              <h4><span>Coming Up Next:</span></h4>
              <?php else: ?>
              <h4><span>Coming Up Soon:</span></h4>
              <?php endif; ?>
              <!--<h1><a class="btn-moreinfo" href="<?php the_field('more_info_link'); ?>"><?php the_title(); ?></a></h1>-->
              <h1><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <h2><span>Watch the Broadcast on NBC:</span> <?php echo $date->format('M d, Y'); ?> @ <?php the_field('air_time'); ?></h2>
            </header>
            <div class="meta">
            
              <?php if ( $end_date_passed_check->format('Ymd') > date('Ymd') ): ?>
              <a class="btn btn-link btn-first target btn-moreinfo" href="<?php the_field('more_info_link'); ?>">More Event Info</a>
              <?php else: ?>
              <a class="btn btn-link btn-first target" href="<?php the_permalink(); ?>">More Event Info</a>
              <?php endif ;?>

              <?php $time = get_field('air_time'); ?>
              <div title="Add to Calendar" class="addthisevent btn btn-link" data-direct="google">
                Add a Reminder
                <span class="start"><?php echo $date->format('m/d/y'); ?> <?php echo str_replace("EST", "", $time); ?></span>
                <span class="end"><?php echo $date->format('m/d/y'); ?> <?php echo str_replace("EST", "", $time); ?></span>
                <span class="timezone">America/New_York</span>
                <span class="title"><?php bloginfo( 'name' ) ?> on NBC | <?php the_title(); ?></span>
                <span class="description"><?php the_content(); ?></span>
                <span class="location">NBC</span>
                <span class="date_format">MM/DD/YYYY</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="coverlink" style="background-image:url(<?php echo $thumb_url; ?>);"></div>
</div>

<?php
  $counter++;
  endwhile;
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>


</section>