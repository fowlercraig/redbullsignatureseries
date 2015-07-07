<?php Themewrangler::setup_page();get_header(/***Template Name: Show */); ?>

<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
  $thumb_url = $thumb_url_array[0];
?>

<div id="show">
<div id="show-bg">

<header id="page--main" class="single">
  <div class="fs-row" id="show--header">

    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
      <h1 id="show--title"><?php the_title(); ?></h1>
      <div class="buttons">
        <a class="btn btn-link btn-primary btn-moreinfo btn-bg-red" href="<?php the_field('more_info_link'); ?>">More Event Info</a>
        <span class="btn">Share This:</span>
        <a target="blank" class="social ss-social-circle ss-facebook" alt="twitter" href="https://twitter.com/home?status=<?php the_field('twitter_share', 32); ?>"></a>
        <a target="blank" class="social ss-social-circle ss-twitter"  alt="facebook"href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('facebook_share', 32); ?>"></a>
      </div>
    </div>

  </div>
</header>

<hr class="divider">

<section id="home--recent">
  <div class="fs-row">
    <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-padded centered">
      <div class="fs-row showlist slider royalslider rsMinW" id="home--recent-slider">
        <?php include locate_template('parts/show/assc-videos.php' ); ?>
        <?php // include locate_template('parts/home/past-show-recent.php' ); ?>
      </div>
      <span class="arrow arrow-left"><a href="#" class="ss-gizmo ss-navigateleft"></a></span>
      <span class="arrow arrow-right"><a href="#" class="ss-gizmo ss-navigateright"></a></span>
    </div>
  </div>
</section>

<?php include locate_template('parts/show/related-items.php' ); ?>
<?php include locate_template('parts/miles.php' ); ?>

</div><!-- Show BG -->

</div>

<?php get_footer(); ?>
