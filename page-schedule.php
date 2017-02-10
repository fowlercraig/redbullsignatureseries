<?php Themewrangler::setup_page();get_header(); ?>

<?php 
  
  $mainMenu = array(
    'container'       => false,
    'echo'            => false,
    'theme_location'  => 'schedule-menu',
    'depth'           => 0,
    'items_wrap'      => '%3$s'
  );

?>


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
                <?php 
                  echo '<ul class="season-nav">';
                  echo wp_nav_menu( $mainMenu ); 
                  echo '</ul>';
                  include locate_template('parts/past/season-current.php');
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
