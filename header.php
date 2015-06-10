<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="https://addthisevent.com/libs/1.6.0/ate.min.js"></script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/respond.min.js"></script>
<script src="/assets/js/pie.js"></script>
<![endif]-->

</head>

<?php
  $menuParameters = array(
    'container'       => false,
    'echo'            => false,
    'items_wrap'      => '%3$s',
    'theme_location'  => 'main-menu',
    //'Walker_Nav_Menu' => new NavWalker(),
    'depth'           => 0,
  );
?>

<body <?php body_class('fs-grid'); ?>>
  <div id="wrapper" class="toggle">
    <div id="redbull-header"></div>
    <header id="header" class="fs-grid-fluid">
      <div class="fs-row">
        <div class="fs-cell fs-lg-8 fs-md-2 fs-sm-3">
          <a id="site_logo" href="/"><?php bloginfo( 'name' ) ?></a>
          <a>Watch All Season Long on NBC</a>
        </div>
        <div class="fs-cell fs-lg-4 fs-md-4 fs-sm-3 text-right">
          <menu>
            <?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
          </menu>
          <a target="blank" class="social ss-social-circle ss-facebook" alt="twitter" href="https://twitter.com/home?status=<?php the_field('twitter_share', 32); ?>"></a>
          <a target="blank" class="social ss-social-circle ss-twitter"  alt="facebook"href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('facebook_share', 32); ?>"></a>
        </div>
      </div>
    </header>
