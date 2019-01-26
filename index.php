<?php get_header(); ?>
<body>
	<div class="hero-image">
		<div class="container-fluid container-max-width">
			<nav class="navbar navbar-expand-lg navbar-dark text-light bg-transparent">
				<button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon text-light"></span>
				</button>
				
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item p-3">
				    <a class="nav-link text-light" href="/">Home <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item p-3">
				    <a class="nav-link text-light" href="/blog">Blog</a>
				  </li>
				  <li class="nav-item p-3">
				    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				      Themes
				    </a>
				    <div class="dropdown-menu dropdown-menu-position bg-transparent" aria-labelledby="navbarDropdown">
				      <a class="dropdown-item text-light" href="/themes#bootstrap">Bootstrap</a>
				      <a class="dropdown-item text-light" href="/themes#bulma">Bulma</a>
				      <a class="dropdown-item text-light" href="/themes#foundation">Foundation</a>
				    </div>
				  </li>
				</ul>
			</div>
			</nav>
		</div>
		<div class="container-fluid container-max-width">
			<div class="row ">
				<div class="col-lg-6 offset-lg-1 margin-top-150">
					<div class="heading-container">
						<h1 class="text-light headline">WP Dev</h1>
						<h3 class="text-light pt-3 pb-3">A Blog On WordPress Development</h3>
						<p class="text-light">WP Dev was started as an outlet in order to dive deeply into the WordPress ecosystem. We wanted to explore the components of Wordpress; including plugins, themes, frameworks around building themes, and much more. </p>
						<a class="btn btn-primary mt-3 text-light p-3" href="<?php echo site_url(); ?>/free-theme">Download a free theme</a>
					</div>
				</div>
				<div class="col-lg-4 margin-top-150">
					<form class="signup-form bg-light">
							<div class="form-group">
								<h1>Sign Up Today</h1>
								<p>To Receive All Our Articles on WordPress</p>
							</div>
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" name="name" placeholder="Your Name">
							</div>
							<div class="form-group">
								<label>Email Address (required)</label>
								<input class="form-control" type="text" name="email_address" placeholder="email@url.com">
							</div>
							<div class="form-group">
								<label>I want to learn about:</label>
								<select class="form-control" name="select_learning">
									<option hidden disabled selected value="">Choose One</option>
									<option>Themes</option>
									<option>Plugins</option>
									<option>Internal WordPress</option>
									<option>PHP</option>
									<option>Tools & The Ecosystem</option>
								</select>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" id="signup-form-submission" value="Sign Up">
							</div>
							<div class="text-center border-top pt-3">
								<a href="<?php echo site_url() ?>/newsletter">Or read the latest issue.</a>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid container-max-width">
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
</body>
<?php get_footer(); ?>