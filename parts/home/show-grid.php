<article <?php post_class('show ' . $date_passed . ' fs-cell fs-xl-4 fs-lg-4 fs-md-3 fs-sm-3'); ?>>
  <div class="fs-row">
    <div class="video fs-cell fs-all-full">
      <a href="<?php the_permalink(); ?>">
        <span class="play-btn">Play Show</span>
        <?php the_post_thumbnail( 'video-sm', array( 'class' => 'img-responsive' ) ); ?>
      </a>
    </div>
    <div class="desc fs-cell fs-all-full">
      <div class="fs-row">
        <header class="fs-cell fs-all-full">
          <h4><?php echo $date->format('M d, Y'); ?> @ <?php the_field('air_time'); ?></h4>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </header>
        <div class="meta fs-cell fs-all-full">
          <a class="btn btn-link btn-first" href="#">More Info</a>
          <a class="btn btn-link" href="#">Schedule</a>
          <a class="btn btn-link btn-last" href="#">Watch Now</a>
        </div>
      </div>
    </div>
  </div>
</article>