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
 * Plugin Name:       Hide Default Posts
 * Plugin URI:        https://gist.github.com/mandiwise/2ea571ae0773b340af5a
 * Description:       Hide post-related screens in the WP admin area, including Categories and Tags.
 * Version:           1.0.0
 * Author:            Mandi Wise
 * Author URI:        http://mandiwise.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
class Hide_Default_Posts {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		// Admin bar and menus customization
    add_action( 'admin_menu', array( $this, 'remove_menus' ) );
		add_action( 'admin_bar_menu', array( $this, 'remove_admin_bar_menu_items' ), 999 );
		// Redirects for default post type, comments, and default category/tag functionality
		add_action( 'load-edit.php', array( $this, 'redirect_from_default_post_index' ) );
		add_action( 'load-post-new.php', array( $this, 'redirect_from_new_default_post' ) );
		add_action( 'load-edit-tags.php', array( $this, 'redirect_from_new_default_taxonomies' ) );
	}
	/**
    * Remove unused menu items by adding them to the array
    *
    * @since 1.0.0
    */
   public function remove_menus() {
   	global $menu;
   	$restricted = array( 'Posts' );
   	end ($menu);
   	while ( prev( $menu ) ){
   		$value = explode( ' ',$menu[key($menu)][0] );
   		if( in_array( $value[0] != NULL?$value[0]:"" , $restricted ) ){ unset($menu[key($menu)] ); }
   	}
   }
	/**
	 * Remove Admin Bar items
	 *
	 * @since 1.0.0
	 */
	public function remove_admin_bar_menu_items( $wp_admin_bar ) {
	   // Remove the new post link (because we don't use default posts)
	   $wp_admin_bar->remove_node( 'new-post' );
	   // Get a reference to the "new-content "node to modify
	   $new_content_node = $wp_admin_bar->get_node( 'new-content' );
	   // Change the "+ New" link so it doesn't point to default new post screen
	   $new_content_node->href = '';
	   $wp_admin_bar->add_node( $new_content_node );
	}
	/**
	 * Prevent users from getting to the default post type index page
	 *
	 * @since 1.0.0
	 */
	public function redirect_from_default_post_index() {
	   if ( get_current_screen()->post_type == 'post' ) {
	      wp_die( "Sorry, this website doesn't support default WordPress posts." );
	   }
	}
	/**
	 * Prevent users from creating new default WordPress posts
	 *
	 * @since 1.0.0
	 */
	public function redirect_from_new_default_post() {
	   if ( get_current_screen()->post_type == 'post' ) {
	      wp_die( "Sorry, this website doesn't support default WordPress posts." );
	   }
	}
	/**
	 * Prevent users from creating new default WordPress categories or tags
	 *
	 * @since 1.0.0
	 */
	public function redirect_from_new_default_taxonomies() {
	   if (
			get_current_screen()->taxonomy == 'category'
			|| get_current_screen()->taxonomy == 'post_tag'
		) {
	      wp_die( "Sorry, this website doesn't support default WordPress categories or tags." );
	   }
	}
}
new Hide_Default_Posts();
