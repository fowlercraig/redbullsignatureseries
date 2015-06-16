<?php

if( have_rows('2012_episodes',68) ):

    while ( have_rows('2012_episodes',68) ) : the_row();

        include locate_template('parts/past/demand-grid.php');

    endwhile;

endif;

?>