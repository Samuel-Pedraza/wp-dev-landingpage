<?php
  // Start the loop.
  while ( have_posts() ) : the_post();
  	
      the_title();
      the_content();

  // End the loop.
  endwhile;
?>