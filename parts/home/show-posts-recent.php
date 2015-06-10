<div <?php post_class('show recent rsContent'); ?>>
  <div class="fs-row">
    <div class="video fs-cell fs-lg-7 fs-md-6 fs-sm-3 fs-right">
      <a href="<?php the_permalink(); ?>">
        <span class="play-btn">Play Show</span>
        <?php the_post_thumbnail( 'video-sm', array( 'class' => 'img-responsive' ) ); ?>
      </a>
    </div>
    <div class="desc fs-cell fs-lg-5 fs-md-6 fs-sm-3">
      <div class="fs-row">
        <header class="fs-cell fs-lg-12 fs-md-3 fs-sm-3">
          <h4><?php the_field('next_air_date'); ?> @ <?php the_field('air_time'); ?></h4>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </header>
        <div class="meta fs-cell fs-lg-12 fs-md-3 fs-sm-3">
          <a class="btn btn-primary" href="#">More Info</a>
          <a class="btn btn-primary" href="#">Schedule</a>
          <a class="btn btn-primary" href="#">Watch Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
