<?php get_header(); ?>
<body>
	<div class="container">
		<div class="row">
			<?php

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<p>
						<?php the_content(); ?>
					</p>
				</div><?php  endwhile; ?>
		</div>
	</div>
</body>
<?php get_footer(); ?>	