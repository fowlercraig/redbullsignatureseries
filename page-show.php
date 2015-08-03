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

    <div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
    <div class="fs-row">

    <div class="fs-cell fs-lg-4 fs-md-6 fs-sm-3">
      <hr class="invisible">
      <h1 id="show--title"><?php the_title(); ?></h1>
      <?php the_post(); ?>
      <?php the_content(); ?>
      <hr class="invisible">
      <div class="buttons">
        <a id="moreinfobtn" class="btn btn-link btn-primary btn-bg-red" target="blank" href="<?php the_field('more_info_link'); ?>">More at Redbull.com</a>
        <br>
        <span class="btn btn-first">Share This:</span>
        <a target="blank" class="social ss-social-circle ss-facebook" alt="twitter" href="https://twitter.com/home?status=<?php the_field('twitter_share', 32); ?>"></a>
        <a target="blank" class="social ss-social-circle ss-twitter"  alt="facebook"href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('facebook_share', 32); ?>"></a>
      </div>
    </div>

    <section id="home--recent" class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-padded centered show">
      <div class="fs-row showlist slider royalslider rsMinW show" id="home--recent-slider">
        <?php include locate_template('parts/show/assc-videos.php' ); ?>
      </div>
      <?php if( have_rows('previous_seasons') ): ?>
      <span class="arrow arrow-left"><a href="#" class="ss-gizmo ss-navigateleft"></a></span>
      <span class="arrow arrow-right"><a href="#" class="ss-gizmo ss-navigateright"></a></span>  
      <?php endif; ?>
    </section>

    </div>
    </div>

  </div>
</header>



<?php include locate_template('parts/show/related-items.php' ); ?>
<?php include locate_template('parts/miles.php' ); ?>

</div><!-- Show BG -->

</div>

<?php get_footer(); ?>
