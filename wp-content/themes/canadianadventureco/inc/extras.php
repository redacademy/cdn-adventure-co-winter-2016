<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Cdn_Adventure_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cdn_adventure_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'cdn_adventure_body_classes' );

/**
* Remove submenues
**/
function cdn_adventure_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'cdn_adventure_remove_submenus', 102 );

/**
* Custom Login Header
**/
function cdn_adventure_login_logo() {
     echo '<style type="text/css">
         h1 a {
					 background-image:url('.get_template_directory_uri().'/assets/images/cac-logo-grey.png) !important;
	         background-size: contain !important;
					 width: 100% !important;
					 margin-left: -40px;}
     </style>';
}
add_action('login_head', 'cdn_adventure_login_logo');

function cdn_adventure_login_url() {
		return home_url();
}
add_filter('login_headerurl', 'cdn_adventure_login_url');
