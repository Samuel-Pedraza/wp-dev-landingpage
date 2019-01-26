
	<div class="container">
		<?php 
		// the query
		$wpb_all_query = new WP_Query(array('category_name' => 'blog')); ?>
		 
		<?php if ( $wpb_all_query->have_posts() ) : ?>
	    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
	    	<?php if($wpb_all_query->current_post % 2 === 0){ ?>
	    	<div class="row bg-light">
	    		<div class="col-md-12 mt-5 mb-5">
	        	<h1 class="pb-3"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>
	        	<p>
	        		<?php echo wp_trim_words(get_the_content()); ?>
	        	</p>
	        	<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
	        </div>
	      </div>
	    <?php } elseif ($wpb_all_query->current_post % 2 === 1) { ?>
	    	<div class="row bg-dark text-light">
	    		<div class="col-md-12 mt-5 mb-5">
	    			<h1 class="pb-3"><a class="text-light" href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h1>
	    			<p>
	    				<?php echo wp_trim_words(get_the_content()); ?>
	    			</p>
	    			<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
	    		</div>
	    	</div>
	    <?php } ?>
  	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>	 
	<?php else : ?>
	    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</div>