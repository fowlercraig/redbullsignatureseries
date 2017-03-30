<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage v2 */); ?>

<div id="home--loading"></div>

<div id="home">

  <?php include locate_template('parts/home/newest.php' ); ?>

  <div id="home--bg">

  <section id="home--recent" class="home">
    <div class="fs-row">
      <div class="fs-cell fs-lg-11 fs-md-6 fs-sm-3 fs-padded centered">
        <div class="fs-row showlist slider royalslider rsMinW home" id="home--recent-slider">
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
        <h3 class="section-title text-center spaced top">Red Bull Signature Series <?php the_field('current_season', 'option'); ?></h3>
        <div class="arrow down short"><hr></div>
          <div class="showlist soon grid fs-row">
          <div class="fs-row">
            <div class="fs-cell fs-all-full">
              <div class="fs-row">
                <div class="fs-cell fs-lg-9 fs-md-4 fs-sm-3 sizer-item equal-parent">
                  <?php include locate_template('parts/home/upcoming-show-grid.php' ); ?>
                  <?php include locate_template('parts/home/past-show-grid.php' ); ?>
                </div>
                <aside class="fs-cell fs-lg-3 fs-md-2 fs-sm-3 sizer-item">
                  <div id="sidebar-sticky">
                    <div id="ad--main">
                      <div id='div-gpt-ad-1435245873844-0' style='width:300px; height:250px;'>
                      <script type='text/javascript'>
                      googletag.cmd.push(function() { googletag.display('div-gpt-ad-1435245873844-0'); });
                      </script>
                      </div>
                    </div>
                    <hr class="invisible">
                    <div id="home--shows-sponsors" class="text-center">
                      <h4><?php the_field('current_season', 'option'); ?> Season Partners:</h4>
                      <?php $sponsors = get_field('sponsors', 'option'); ?>
                      <?php foreach($sponsors as $image): ?>
                      <a href="<?php echo $image['description']; ?>" target="_blank"><img src="<?php echo $image['url']; ?>"   class="img-responsive" alt="BFGoodrich" /></a><br>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  </div>

</div>

<?php get_footer(); ?>