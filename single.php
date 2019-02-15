<?php get_header(); ?>
<body>
	<?php get_template_part("part/navbar-small"); ?>
	<div class="container">
		<div class="row">
			<?php

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
					<div class="col-md-8 offset-md-2 pt-5">
						<?php the_content(); ?>
					</div>
				<?php  endwhile; ?>
		</div>
	</div>
</body>
<?php get_footer(); ?>	