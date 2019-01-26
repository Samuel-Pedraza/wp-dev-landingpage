<?php get_header(); ?>
<body>
	<?php get_template_part("part/navbar-small"); ?>
	<div class="container">
		<div class="row">
			<?php

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
				<div class="col-md-12">
					<h1 class="pt-3 pb-3"><?php the_title(); ?></h1>
					<p>
						<?php the_content(); ?>
					</p>
				</div><?php  endwhile; ?>
		</div>
	</div>
</body>
<?php get_footer(); ?>	