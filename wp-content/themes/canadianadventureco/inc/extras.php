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

	/**
    * Remove unused menu items by adding them to the array
    *
    */
   function remove_menus() {
   	global $menu;
   	$restricted = array( 'Posts', 'Comments' );
   	end ($menu);
   	while ( prev( $menu ) ){
   		$value = explode( ' ',$menu[key($menu)][0] );
   		if( in_array( $value[0] != NULL?$value[0]:"" , $restricted ) ){ unset($menu[key($menu)] ); }
   	}
   }
	 add_action( 'admin_menu', 'remove_menus' );

	/**
	 * Remove Admin Bar items
	 *
	 */
	function remove_admin_bar_menu_items( $wp_admin_bar ) {
	   // Remove the new post link (because we don't use default posts)
	   $wp_admin_bar->remove_node( 'new-post' );
	   // Get a reference to the "new-content "node to modify
	   $new_content_node = $wp_admin_bar->get_node( 'new-content' );
	   // Change the "+ New" link so it doesn't point to default new post screen
	   $new_content_node->href = '';
	   $wp_admin_bar->add_node( $new_content_node );
	}
	add_action( 'admin_bar_menu', 'remove_admin_bar_menu_items', 999 );
