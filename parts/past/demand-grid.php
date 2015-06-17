<article class="show fs-cell fs-xl-3 fs-lg-4 fs-md-3 fs-sm-3">
    <div class="video">
      <a href="<?php the_sub_field('episode_url') ?>">
        <span class="play-btn">Play Show</span>
        <?php $image = get_sub_field('episode_thumbnail'); if( !empty($image) ): ?>
        <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
      </a>
    </div>
    <div class="desc">
      <header>
        <span class="show--counter"><?php echo $counter; ?></span>
        <h3><a href="<?php the_sub_field('episode_url') ?>"><?php the_sub_field('episode_title') ?></a></h3>
      </header>
    </div>
</article>
