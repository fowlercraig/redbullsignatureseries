<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage v2 */); ?>

<div id="home">

  <?php include locate_template('parts/home/newest.php' ); ?>

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

  <section id="home--shows">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
        <h3 class="section-title text-center spaced top">Red Bull Signature Series 2015</h3>
        <div class="arrow down short"><hr></div>
          <div class="showlist soon grid fs-row">
          <div class="fs-row">
            <div class="fs-cell fs-all-full">
            <!--<div class="fs-cell fs-lg-9 fs-md-4 fs-sm-3">-->
              <?php include locate_template('parts/home/past-show-grid.php' ); ?>
              <?php include locate_template('parts/home/upcoming-show-grid.php' ); ?>
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