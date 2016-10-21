<?php
/*
Plugin Name: LikeMyFBPage
Plugin URI: http://localhost:8888/2A_DEV/EEMI/wordpress/wp-content/plugins/likemyfbpage/likemyfbpage.php
Description: This plugin allows access to the FB page of the site in question without leaving it.
Version: Beta
Author: Grégoire Sayer
Author URI: https://github.com/Hockfird-EEMI/LikeMyFBPage
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

load_plugin_textdomain( 'likemyfbpage', false, plugin_basename( dirname(__FILE__) ) . '/lang' );
// var_dump(plugin_basename( dirname(__FILE__)));
// exit;



defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function like_my_fb_page() {
	add_options_page('Like My FB Page Settings', 'Like My FB Page', 'administrator', 'lmfp-settings', 'lmfp_settings_page');
}
add_action('admin_menu', 'like_my_fb_page');

function lmfp_settings_page() {
	
	include_once("view.php");

 }

function like_my_fb_page_settings() {
	register_setting( 'lmfp-settings', 'lmfp_page' );
	register_setting( 'lmfp-settings', 'lmfp_timeline' );
	register_setting( 'lmfp-settings', 'lmfp_events' );
}
add_action( 'admin_init', 'like_my_fb_page_settings' );

function like_my_fb_page_undo() {
    delete_option( 'lmfp_page' );
    delete_option( 'lmfp_timeline' );
    delete_option( 'lmfp_events' );
}
register_deactivation_hook( __FILE__, 'like_my_fb_page_undo' );


function lmfp_bloc() {

	include_once("bloc_fb.php");

}
add_action( 'wp_footer', 'lmfp_bloc');
