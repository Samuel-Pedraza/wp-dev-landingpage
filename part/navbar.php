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
				    <a class="nav-link text-light" href="/products">
				      Products
				    </a>
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
						<h3 class="text-light pt-3 pb-3">WP Dev was started in order to build high quality products around the WordPress ecosystem.</h3>
						<a class="btn btn-primary mt-3 text-light p-3" href="<?php echo site_url(); ?>/products">View our Products</a>
					</div>
				</div>
				<div class="col-lg-4 margin-top-150">
					<form class="signup-form bg-light">
							<div class="form-group">
								<h1 class="p-0">Sign Up Today</h1>
								<p class="p-0" >To Receive All Our Articles on WordPress</p>
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
								<a href="<?php echo site_url() ?>/blog">Or read the latest post.</a>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>