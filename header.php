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

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
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
  <div id="wrapper">
    <div id="redbull-header"></div>
    <header id="header">
      <div class="fs-row">
        <div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3">
          <a href="/"><?php bloginfo( 'name' ) ?></a>
        </div>
        <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 text-right">
          <menu>
            <?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
          </menu>
          <a target="blank" href="https://twitter.com/home?status=<?php the_field('twitter_share', 32); ?>">Twitter</a>
          <a target="blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('facebook_share', 32); ?>">Facebook</a>
        </div>
      </div>
    </header>
