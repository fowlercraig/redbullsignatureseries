<?php if( have_rows('previous_seasons') ): ?>

<?php include locate_template('/parts/home/show-posts-page.php' ); ?>

<?php while ( have_rows('previous_seasons') ) : the_row(); ?>

<?php

  $end_date_passed_check = DateTime::createFromFormat('Ymd', get_field('next_air_date'));
  $date = DateTime::createFromFormat('Ymd', get_field('next_air_date'));

?>

<div <?php post_class('show recent rsContent'); ?>>
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
      <div class="fs-row show--info">
        <div class="video fs-cell fs-lg-8 fs-md-6 fs-sm-3 sizer-item">
          <a target="blank" href="<?php the_sub_field('url'); ?>">
            <span class="play-btn">Play Show</span>
            <?php 
              $image = get_sub_field('thumbnail');
              if( !empty($image) ): 
            ?>
            <img class="img-responsive" src="<?php echo $image['sizes'][ 'video-sm' ]; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </a>
        </div>
        <div class="desc fs-cell fs-lg-4 fs-md-6 fs-sm-3 sizer-item">
          <div class="fs-row">
            <div class="centered">
              <header class="fs-cell fs-lg-12 fs-md-3 fs-sm-3">
                <h4><span>Watch: </span><?php the_title();?></h4>
                <h1><a class="btn-moreinfo" href="<?php the_field('more_info_link'); ?>">Signature Series <?php the_sub_field('season'); ?></a></h1>
              </header>
              <div class="content fs-cell fs-lg-12 fs-md-3 fs-sm-3"><?php the_content(); ?></div>
              <div class="meta fs-cell fs-lg-12 fs-md-3 fs-sm-3">
                <!--<a class="btn btn-primary" target="blank" href="<?php the_sub_field('url'); ?>">Watch on RedBull.tv</a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>