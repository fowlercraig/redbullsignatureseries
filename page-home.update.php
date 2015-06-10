<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage v2 */); ?>

  <section id="home--above">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
        <div class="content">
          <!--<iframe src="https://player.vimeo.com/video/58226214?color=ffffff&title=0&byline=0&portrait=0" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
        </div>
        <div class="arrow down"><hr></div>
      </div>
    </div>
  </section>

  <section id="home--shows">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">

        <h3 class="section-title text-center spaced top">Upcoming Shows</h3>
        <div class="showlist soon"><?php include locate_template('parts/home/upcoming-shows.php' ); ?></div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>