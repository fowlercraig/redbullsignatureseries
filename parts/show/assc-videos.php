<?php include locate_template('/parts/home/show-posts-page.php' ); ?>

<?php if( have_rows('previous_seasons') ): ?>

<?php $counter = 'video' ?>

<?php while ( have_rows('previous_seasons') ) : the_row(); ?>

<?php

  $end_date_passed_check = DateTime::createFromFormat('Ymd', get_field('next_air_date'));
  $date = DateTime::createFromFormat('Ymd', get_field('next_air_date'));

?>

<div <?php post_class('show recent rsContent'); ?>>
  <div class="fs-row">
    <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-centered">
      <div class="fs-row show--info">
        <div class="video fs-cell fs-lg-12 fs-md-6 fs-sm-3 sizer-item">
          <span class="caption" href="<?php the_field('more_info_link'); ?>"><?php the_sub_field('season'); ?></span>
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
      </div>
    </div>
  </div>
</div>

<?php endwhile; endif; ?>