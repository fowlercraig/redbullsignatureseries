<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">

<link rel="shortcut icon"    type="image/x-icon" href="/assets/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57"       href="/assets/touch-icon-iphone-57.png" />
<link rel="apple-touch-icon" sizes="114x114"     href="/assets/touch-icon-iphone-114.png" />
<link rel="apple-touch-icon" sizes="72x72"       href="/assets/touch-icon-iphone-72.png" />
<link rel="apple-touch-icon" sizes="144x144"     href="/assets/touch-icon-iphone-144.png" />

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

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/29829229/rbsigseries', [300, 250], 'div-gpt-ad-1435245873844-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.pubads().enableVideoAds();
googletag.enableServices();
});
</script>

<style>
#home {
opacity: 0;
}
</style>
<noscript>
<style>
#home {
opacity: 1;
}
.loading-icon {
  display: none;
}
</style>
</noscript>

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

<body <?php body_class('fs-grid fs-grid-fluid'); ?>>
  <div id="wrapper" class="toggle">

    <script type="text/javascript">
    window.rbwidgets = window.rbwidgets || {};
    window.rbwidgets.iframeURL ='http://www.redbull.com/en/RedBullCollection/1331580848687/GlobalNav?template=GlobalNavigation&todim=en_US&logo=false';
    </script>
    <script type="text/javascript" src="http://www.redbull.com/cs/RedBull2Misc/global-nav/global-nav.js"></script>
    <noscript>
    <iframe src="http://www.redbull.com/en/RedBullCollection/1331580848687/GlobalNav?template=GlobalNavigation&todim=en_US&logo=true" style="width:100%;height:37px;" frameborder="0" scrolling="no"></iframe>
    </noscript>

    <header id="header" class="fs-grid-fluid">
      <div id="header-content" class="fs-row">
        <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3">
          <a id="site_logo" href="/"><?php bloginfo( 'name' ) ?></a>
          <a href="http://www.nbcsports.com/" target="blank" class="nbc-logo hide-mobile">Watch All Season Long on</a>
          <div class="btn text-right right show-mobile mobile-menu-container">
            <a class="activate-mobile-menu mobile-btn" data-swap-target=".mobile-menu">Menu</a>
            <div class="mobile-menu">
              <menu><?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?></menu>
            </div>
          </div>
        </div>
        <div class="fs-cell fs-lg-6 fs-md-hide fs-sm-hide text-right">
          <menu><?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?></menu>
          <a target="blank" class="social ss-social-circle ss-facebook"   alt="facebook"   href="https://www.facebook.com/RedBullSignatureSeries"></a>
          <a target="blank" class="social ss-social-circle ss-twitter"  alt="twitter"  href="https://twitter.com/rbsigseries"></a>
          <a target="blank" class="social ss-social-circle ss-instagram" alt="instagram" href="https://instagram.com/rbsigseries/"></a>
        </div>
      </div>
    </header>
    <div id="header-overlay" <?php body_class(); ?>></div>


