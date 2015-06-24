<?php Themewrangler::setup_page();get_header(/***Template Name: Show */); ?>

<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
  $thumb_url = $thumb_url_array[0];
?>

<div id="show">

<section id="page--main" class="show" style="background-image: url('<?php echo $thumb_url; ?>'); ?>">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
      <div class="fs-row">
        <header class="fs-cell fs-lg-8 fs-md-4 fs-sm-3">
          <h1><?php the_title(); ?></h1>
        </header>
      </div>
    </div>
  </div>
</section>

<hr class="invisible">

<section id="home--recent">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-padded centered">
      <div class="fs-row showlist slider royalslider rsMinW" id="home--recent-slider">
        <?php include locate_template('parts/home/past-show-recent.php' ); ?>
      </div>
      <span class="arrow arrow-left"><a href="#" class="ss-gizmo ss-navigateleft"></a></span>
      <span class="arrow arrow-right"><a href="#" class="ss-gizmo ss-navigateright"></a></span>
    </div>
  </div>
</section>
<!--
<section id="page--video">
  <div class="fs-row">
    <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 fs-centered">
      <?php the_field('teaser_embed'); ?>
    </div>
  </div>
</section>
-->

<?php include locate_template('parts/show/related-items.php' ); ?>
<?php include locate_template('parts/miles.php' ); ?>

</div>

<?php get_footer(); ?>