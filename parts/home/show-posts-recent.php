<?php

  $end_date_passed_check = DateTime::createFromFormat('Ymd', get_field('next_air_date'));
  $date = DateTime::createFromFormat('Ymd', get_field('next_air_date'));

?>

<div <?php post_class('show recent rsContent'); ?>>
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
      <div class="fs-row">
        <div class="video fs-cell fs-lg-8 fs-md-6 fs-sm-3">
          <a href="#" class="target" data-swap-target=".toggle">
            <span class="play-btn">Play Show</span>
            <?php the_post_thumbnail( 'video-sm', array( 'class' => 'img-responsive' ) ); ?>
          </a>
        </div>
        <div class="desc fs-cell fs-lg-4 fs-md-6 fs-sm-3">
          <div class="fs-row">
            <header class="fs-cell fs-lg-12 fs-md-3 fs-sm-3">
              <h4><span>Just Aired:</span> <?php echo $date->format('M d, Y'); ?></h4>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </header>
            <div class="content fs-cell fs-lg-12 fs-md-3 fs-sm-3"><?php the_content(); ?></div>
            <div class="meta fs-cell fs-lg-12 fs-md-3 fs-sm-3">
              <a class="btn btn-primary" href="#">Watch Now on RedBull.tv</a>
              <a class="btn btn-link btn-first" href="#">more event info</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
