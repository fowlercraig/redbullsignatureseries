<?php

if( have_rows('2014_episodes',68) ):

    $counter = 1; while ( have_rows('2014_episodes',68) ) : the_row();

        include locate_template('parts/past/demand-grid.php');

    $counter++; endwhile;

endif;

?>