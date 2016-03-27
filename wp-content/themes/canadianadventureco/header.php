<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')) ?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/cac-logo-grey.png" alt="The Canadian Adventure Company logo" class="logo" /></a>
				</div><!-- .site-branding -->

				<!-- The header needs to change at the breakpoint - don't forget to add this  -->
				<div class="menu-button mobile">
					<i class="fa fa-bars"></i>
				</div>
				<nav id="site-navigation mobile" class="mobile-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

				<nav id="site-navigation desktop" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<button class="request_to_book">
						<a href="/request">Request to book</a>
					</button>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
