<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WP Dev - In-Depth Learning Around WordpRess Development</title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="hero-image">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<form class="signup-form bg-light">
							<div class="form-group">
								<h1>Once a Week</h1>
								<p>An in-depth Article on WordPress development.</p>
								<p>
									<small>
										Look for us every Monday morning.
									</small>
								</p>
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
</body>
<?php wp_footer(); ?>