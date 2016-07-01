<?php
/***
 * Plugin Name: WP Job Listing
 * Plugin URI: http://localhost.com
 * Description: A plugin create for testing Job Listing program!
 * Author: Tong
 * Author URI: http://thaidigibill.com
 * Version: 1.0.0
 * License: GPLv2
 */

//Exit if accessed directly
if(!defined('ABSPATH')){
	exit;
}

$dir = plugin_dir_path(__FILE__);
require_once $dir .'wp-job-cpt.php';
require_once $dir .'wp-job-render-admin.php';
require_once $dir .'wp-job-fields.php';
require_once $dir .'wp-job-settings.php';

function dwwp_admin_enqueue_scripts(){
	global $pagenow, $typenow;
	$screen = get_current_screen();
	
	if(($pagenow == 'post.php' || $pagenow=='post-new.php') && $typenow=='job' ){
		wp_enqueue_style('dwwp-admin-css', plugins_url('css/admin-jobs.css', __FILE__));
		wp_enqueue_style('jquery-style','http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
		wp_enqueue_script('dwwp-admin-js', plugins_url('js/admin-jobs.js',__FILE__), array('jquery','jquery-ui-datepicker'), '20160626', true);
		wp_enqueue_script('dwwp-custom-quicktags',plugins_url('js/dwwp-quicktags.js',__FILE__), array('quicktags'),'20160626',true);
	}
}

add_action('admin_enqueue_scripts','dwwp_admin_enqueue_scripts');




