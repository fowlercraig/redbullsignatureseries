<?php Themewrangler::setup_page();get_header(/***Template Name: Default */); ?>


<section id="page--main">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered text-center">
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
    </div>
  </div>
</section>

<div id="home">
  <section id="home--shows">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-centered">
          <div class="showlist tabbed grid fs-row">
            <div class="fs-row">
              <div class="fs-cell fs-all-full">
              <div class="fs-row">
                <nav id="tab-tabs" class="fs-cell fs-all-full">
                  <a href="#tab-2016" class="tab" data-tabs-group="tab-group"><h4>2016 <span class="show-min">Season</span></h4></a>
                  <a href="#tab-2015" class="tab" data-tabs-group="tab-group"><h4>2015 <span class="show-min">Season</span></h4></a>
                  <a href="#tab-2014" class="tab" data-tabs-group="tab-group"><h4>2014 <span class="show-min">Season</span></h4></a>
                  <a href="#tab-2013" class="tab" data-tabs-group="tab-group"><h4>2013 <span class="show-min">Season</span></h4></a>
                  <a href="#tab-2012" class="tab" data-tabs-group="tab-group"><h4>2012 <span class="show-min">Season</span></h4></a>
                </nav>
                <div id="tab-2016" class="tab-content"><?php include locate_template('parts/past/season-current.php'); ?></div>
                <div id="tab-2015" class="tab-content"><?php include locate_template('parts/past/season-2015.php'); ?></div>
                <div id="tab-2014" class="tab-content"><?php include locate_template('parts/past/season-2014.php'); ?></div>
                <div id="tab-2013" class="tab-content"><?php include locate_template('parts/past/season-2013.php'); ?></div>
                <div id="tab-2012" class="tab-content"><?php include locate_template('parts/past/season-2012.php'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>