<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
										echo ' :';
									} ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="https://use.typekit.net/tke5rpr.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">


			<div class="container pt-3">

				<div class="row">

					<div class="col-md-3 logo">
					
						<a class="logo" href="<?php echo home_url(); ?>">

							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-placeholder.png" alt="Logo" class="website-logo">

						</a>

					</div>

					<nav class="col-md-7 offset-md-2 navbar navbar-expand-lg navbar-light bg-light">
						<?php 							wp_nav_menu(
										array(
											'menu' => 'main-menu',
											'container' => '',
											'menu_class' => 'navbar-nav',
										)
									); ?>
					</nav>

				</div>

			</div>

		</header>
		<!-- /header -->