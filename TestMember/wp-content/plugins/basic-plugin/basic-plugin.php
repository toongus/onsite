<?php
/***
 * Plugin Name: Basic Plugin
 * Plugin URI: http://localhost.com
 * Description: A plugin create for testing program!
 * Author: Tong
 * Author URI: http://thaidigibill.com
 * Version: 1.0.0
 * License: GPLv2
 */

function dwwp_remove_dashboard_widget(){
	//do something
	remove_meta_box('dashboard_primary','dashboard','side');
	//remove_meta_box('dashboard_quick_press','dashboard', 'side');
}

add_action('wp_dashboard_setup','dwwp_remove_dashboard_widget');

function dwwp_add_google_link(){
	global $wp_admin_bar;
	//var_dump($wp_admin_bar);
	$args = array(
			'id' => 'google_analytics',
			'title' => 'Google Analytics',
			'href'=>'http://google.com/analytics',
	);
	$wp_admin_bar->add_menu($args);
}

add_action('wp_before_admin_bar_render','dwwp_add_google_link');



?>