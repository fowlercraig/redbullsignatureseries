<?php

  //$featuredimage  = 'http://image.redbull.com/rbcom/010/2014-10-23/1331686138361_2/0001/0/800/450/2/julian-wilson-aerial.JPG';
  //$title          =  '21Days: Volcom Pipe Pro, Episode 3';
  //$publisheddate  = 'April 8, 2015';
  //$url            = 'http://www.redbull.com/us/en/surfing/stories/1331702679607/volcom-pipe-pro-2015-surfing\u2019s-critical-decision';
  //$teaser         = 'As the 2015 event roars to life on the North Shore of Oahu, we review last years moments of note.';

?>

<article class="feed-item fs-cell fs-xl-4 fs-lg-6 fs-md-3 fs-sm-3">
  <div class="thumbnail" style="background-image:url(<?php echo $featuredimage; ?>);?>">
    <a href="<?php echo $url; ?>" rel="external"></a>
  </div>
  <header class="meta">
    <h5><?php echo $publisheddate; ?></h5>
    <h3><a href="<?php echo $url; ?>" rel="external"><?php echo $title; ?></a></h3>
  </header>
  <div class="content"><p><?php echo $teaser; ?></p></div>
  <footer><a href="<?php echo $url; ?>" class="btn btn-primary" rel="external">Read More</a></footer>
</article>