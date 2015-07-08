<article <?php post_class('show ' . $date_passed . ' fs-cell fs-xl-6 fs-lg-6 fs-md-3 fs-sm-3'); ?>>
  <div class="fs-row">
    <div class="video fs-cell fs-all-full">
      <?php if ( $end_date_passed_check->format('Ymd') < date('Ymd') ): ?>
      <a class="popup-video" href="#aired-<?php echo $counter; ?>">
      <?php else: ?>
      <a href="<?php the_permalink(); ?>">
      <!--<a class="btn-moreinfo" target="blank" href="<?php the_field('more_info_link'); ?>">-->
      <?php endif; ?>
        <?php

          if ( $end_date_passed_check->format('Ymd') < date('Ymd') ) {

            echo '<span class="play-btn">Play Show</span>';

          }

          the_post_thumbnail( 'video-sm', array( 'class' => 'img-responsive' ) );

        ?>
      </a>
    </div>
    <div class="desc fs-cell fs-all-full">
      <div class="fs-row">
        <header class="fs-cell fs-all-full">
          <h4><?php echo $date->format('M d, Y'); ?> @ <?php the_field('air_time'); ?>  on NBC</h4>
          <h1><a class="" target="blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <!--<h1><a class="btn-moreinfo" target="blank" href="<?php the_field('more_info_link'); ?>"><?php the_title(); ?></a></h1>-->
        </header>
        <div class="meta fs-cell fs-all-full">
          <a class="btn btn-link btn-first target" href="<?php the_permalink(); ?>">More Event Info</a>
          <!--<a class="btn btn-link btn-first target btn-moreinfo" href="<?php the_field('more_info_link'); ?>">More Event Info</a>-->
          <?php if ( $end_date_passed_check->format('Ymd') > date('Ymd') ): ?>
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
          <?php endif; ?>
          <?php if ( $end_date_passed_check->format('Ymd') < date('Ymd') ): ?>
          <!--<a class="btn btn-link btn-first" target="blank" href="<?php the_field('red_bull_tv_link'); ?>">Watch Now on RedBull.tv</a>-->
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</article>
<div id="aired-<?php echo $counter; ?>" class="video-popup mfp-hide">
  <?php the_field('teaser_embed'); ?>
</div> <!-- /#video-01 -->