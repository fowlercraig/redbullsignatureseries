<?php Themewrangler::setup_page();get_header(); ?>

<section id="page--main">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center">
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
    </div>
  </div>
</section>

<hr class="invisible">

<section id="page--related">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
      <h2 class="section-title text-center">API Related Articles</h2>
      <div class="text-center">
        <?php if (get_field('api_info')):?><a href="<?php the_field('api_info'); ?>">Link to API</a><?php endif; ?>
      </div>
      <hr class="invisible">
      <div id="page--related-feed">
        <?php $articleWidth = 'fs-cell fs-xl-4 fs-lg-6 fs-md-3 fs-sm-3'; ?>
        <?php include locate_template('parts/show/feed-items.php' ); ?>
        <?php include locate_template('parts/show/feed-items.php' ); ?>
        <?php include locate_template('parts/show/feed-items.php' ); ?>
        <?php include locate_template('parts/show/feed-items.php' ); ?>
        <?php include locate_template('parts/show/feed-items.php' ); ?>
        <?php include locate_template('parts/show/feed-items.php' ); ?>
      </div>

    </div>
  </div>
</section>

<?php include locate_template('parts/miles.php' ); ?>

<?php get_footer(); ?>