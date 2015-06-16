<article class="show fs-cell fs-lg-3 fs-md-3 fs-sm-3">
  <div class="fs-row">
    <div class="video fs-cell fs-full-all">
      <a href="<?php the_sub_field('episode_title') ?>">
        <span class="play-btn">Play Show</span>
        <?php $image = get_sub_field('episode_thumbnail'); if( !empty($image) ): ?>
        <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </a>
    </div>
    <div class="desc fs-cell fs-full-all">
      <div class="fs-row">
        <header class="fs-cell fs-cell fs-full-all">
          <h3><a href="<?php the_sub_field('episode_title') ?>"><?php the_sub_field('episode_title') ?></a></h3>
        </header>
        <div class="meta fs-cell fs-full-all">
          <a class="btn btn-primary" href="#">Watch Now</a>
        </div>
      </div>
    </div>
  </div>
</article>
