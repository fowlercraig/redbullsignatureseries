<?php Themewrangler::setup_page();get_header(); ?>

<section id="page--main">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center">
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
      <div class="meta text-center">
        <?php if( get_field('red_bull_tv_link') ):?><a class="btn btn-watch btn-danger" href="<?php the_field('red_bull_tv_link'); ?>">Watch now on RedBull.TV</a><?php endif; ?>
        <?php if( get_field('youtube_link') ):?><a class="btn btn-watch btn-danger" href="<?php the_field('youtube_link'); ?>">Watch now on Youtube.com</a><?php endif; ?>
      </div>
    </div>
  </div>
</section>

<hr class="invisible">

<?php include locate_template('parts/show/related-items.php' ); ?>
<?php include locate_template('parts/miles.php' ); ?>

<?php get_footer(); ?>