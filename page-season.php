<?php Themewrangler::setup_page();get_header(/***Template Name: Season */); ?>

<?php 
  
  $mainMenu = array(
    'container'       => false,
    'echo'            => false,
    'theme_location'  => 'schedule-menu',
    'depth'           => 0,
    'items_wrap'      => '%3$s'
  );

  $args = array(
    'posts_per_page' => -1,
    'post_parent'    => 68,
    'post_type'      => 'page',
    'order'          => 'DESC',
    'orderby'        => 'title'
  );

  $seasons = get_posts( $args );

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
                  $counter = 1; while ( have_rows('season_episodes') ) : the_row();
                    include locate_template('parts/past/season-episode.php');
                  $counter++; endwhile;
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
