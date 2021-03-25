<?php get_header(); ?>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a href="<?= home_url('/'); ?>" class="navbar-brand" title="<?= __('Homepage', 'bigfood') ?>">
					<img src="<?= get_theme_mod('logo') ?>" alt="">
				</a>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
						<?php
						wp_nav_menu([
							'theme_location' => 'header',
							'container' => false,
							'menu_class' => 'navbar-nav ml-auto'
						]);
						?>
					
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


	<?php get_footer(); ?>