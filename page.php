<?php 

  if ( $post->post_parent == '66' ) {

    include locate_template('page-show.php' );

  } else {

    include locate_template('page-default.php' );

  }

?>