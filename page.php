<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage v2 */); ?>

<div id="home">
  <section id="home--shows">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
        <h3 class="section-title text-center spaced top">Red Bull Signature Series 2015</h3>
          <div class="soon grid fs-row">
          <div class="fs-row">
            <div class="fs-cell fs-all-full">
            <!--<div class="fs-cell fs-lg-9 fs-md-4 fs-sm-3">-->
            <div class="fs-row">
              <div class="fs-cell fs-full-all">2014</div>
              <?php include locate_template('parts/past/season-2014.php'); ?>
              <div class="fs-cell fs-full-all">2013</div>
              <?php include locate_template('parts/past/season-2013.php'); ?>
              <div class="fs-cell fs-full-all">2012</div>
              <?php include locate_template('parts/past/season-2012.php'); ?>
            </div>
            </div>
            <!--
            <aside class="fs-cell fs-lg-3 fs-md-2 fs-sm-3">
              <div id="ad--main"><img src="http://placehold.it/300x250" class="img-responsive"></div>
              <hr class="invisible">
              <div id="home--shows-sponsors">Sponsors Go Here</div>
            </aside>
            -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>