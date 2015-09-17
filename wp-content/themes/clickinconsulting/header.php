<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clickinconsulting
 */

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>

	<body class="header-fixed">
		<div class="wrapper">
			<!--=== Header v6 ===-->
			<div class="header-v6 header-white-transparent header-sticky">
				<!-- Navbar -->
				<div class="navbar mega-menu" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="menu-container">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<!-- Navbar Brand -->
							<div class="navbar-brand">
								<a href="index.html">
									<img class="default-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clickin-logo.png" alt="Logo">
									<img class="shrink-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo3-dark.png" alt="Logo">
								</a>
							</div>
							<!-- ENd Navbar Brand -->

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="navbar-collapse navbar-responsive-collapse collapse in" aria-expanded="true">
							<div class="menu-container">
								<?php wp_nav_menu( array(
									'theme_location' => '',
									'menu_class' => 'nav navbar-nav',
									'container' => '',
									'before'          => '',
									'after'           => '',
									) ); ?>
							</div>
						</div><!--/navbar-collapse-->
					</div>
				</div>
				<!-- End Navbar -->
			</div>
			<!--=== End Header v6 ===-->