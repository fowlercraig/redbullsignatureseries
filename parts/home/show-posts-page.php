<?php

  $end_date_passed_check = DateTime::createFromFormat('Ymd', get_field('next_air_date'));
  $date = DateTime::createFromFormat('Ymd', get_field('next_air_date'));

?>

<div <?php post_class('show recent rsContent'); ?>>
  <div class="fs-row">
    <div class="fs-cell fs-lg-12 fs-md-5 fs-sm-3 fs-centered">
      <div class="fs-row show--info">
        <div class="video fs-cell fs-lg-12 fs-md-6 fs-sm-3">
          <span class="caption">Signature Series 2015</span>
          <?php if ( $end_date_passed_check->format('Ymd') > date('Ymd') ): ?>
          <?php the_post_thumbnail( 'video-sm', array( 'class' => 'img-responsive' ) ); ?>
          <?php else: ?>
          <a class="popup-video" href="#recent-<?php echo $counter; ?>">
            <span class="play-btn">Play Show</span>
            <?php the_post_thumbnail( 'video-sm', array( 'class' => 'img-responsive' ) ); ?>
          </a>
          <?php endif; ?>
        </div>
        <div class="desc fs-cell fs-lg-4 fs-md-6 fs-sm-3 hide">
          <div class="fs-row">
            <div class="centered">
              <header class="fs-cell fs-lg-12 fs-md-3 fs-sm-3">
                <?php if ( $end_date_passed_check->format('Ymd') > date('Ymd') ): ?>
                <h4><span>Airs on NBC:</span><br><?php echo $date->format('M d, Y'); ?> @ <?php the_field('air_time'); ?>  </h4>
                <?php else: ?>
                <h4><span>Just Aired:</span> <?php the_title(); ?></h4>
                <?php endif; ?>
                <h1><a class="" href="#">Signature Series 2015</a></h1>
                <!--<h1><a class="" href="<?php the_field('more_info_link'); ?>">Signature Series 2015</a></h1>-->
              </header>
              <div class="content fs-cell fs-lg-12 fs-md-3 fs-sm-3"><?php the_content(); ?></div>
              <div class="meta fs-cell fs-lg-12 fs-md-3 fs-sm-3">
                <!--<a class="btn btn-primary popup-video" href="#recent-<?php echo $counter; ?>">Watch Now</a>-->
                <!--<a class="btn btn-link btn-first" target="blank" href="<?php the_field('red_bull_tv_link'); ?>">Watch on RedBull.tv</a>-->
                <!--<a class="btn btn-link btn-first btn-moreinfo" href="<?php the_field('more_info_link'); ?>">More Event Info</a>-->
              </div>

              <?php $image = get_field('logo'); ?>
              <?php if( !empty($image) ): ?>  
              <div id="presentedby" class="fs-cell fs-lg-12 fs-contained">
                <hr class="invisible">
                <h4>Presented by:</h4>
                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div>
              <?php endif; ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="recent-<?php echo $counter; ?>" class="video-popup mfp-hide">
    <?php the_field('teaser_embed'); ?>
  </div>
</div>
