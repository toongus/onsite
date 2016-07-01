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

function dwwp_register_post_type(){
	$singular = 'Job Listing';
	$plural = 'Job Listings';
	$label = array(
			'name' => $plural,
			'singular_name' => $singular,
			'add_name' => 'Add New ',
			'add_new_item' => 'Add New ' . $singular,
			//'edit' => 'Edit ' . $singular,
			'edit_item' => 'Edit ' . $singular,
			'new_item' => 'New ' . $singular,
			'view' => 'View ' . $singular,
			'view_item' => 'View ' . $singular,
			'search_items' => 'Search ' . $singular,
			'parent_item_colon' => 'Parent ' . $singular,
			'not_found' => 'No ' . $plural . ' found!',
			'not_found_in_trash' => 'No ' . $plural . ' in Trash!',
	);
	
	$args = array(
			'labels' 				=> $label,
			'public' 				=> true,
			'publicly_queryable'	=> true,
			'exclude_from_search' 	=> false,
			'show_in_nav_menus' 	=> true,//Appearance > Menu
			'show_ui'				=> true,//Left main menu
			'show_in_menu'			=> true,//Left main menu
			'show_in_admin_bar'		=> true,//Top main menu
			'menu_position' 		=> 10,//Postion on left menu, example after Media
			'menu_icon' 			=> 'dashicons-nametag', //Icon, ref# https://developer.wordpress.org/resource/dashicons/
			'can_export' 			=> true,//
			'delete_with_user' 		=> false,
			'hierarchical' 			=> false,
			'has_archive' 			=> true,
			'query_var' 			=> true,
			'capability_type' 		=> 'post',
			'map_meta_cap'			=> true,
			'rewrite' => array(
					'slug' 		=> 'jobs',
					'with_front'=> true,
					'pages' 	=> true,
					'feeds' 	=>true,
			),
			
			'supports' => array(
					'title'
			)
			/*
			 'supports' => array(
					'title',
					'editor',
					'author',
					'custom-fields',
					'thumbnail'
			
			 */
	);
	register_post_type('job',$args);
}
add_action('init','dwwp_register_post_type');

function dwwp_register_taxonomy(){
	
	$plural = 'Locations';
	$signular = 'Location';
	$labels = array(
			'name' 						=> $plural,
			'singular_name' 			=> $singular,
			'search_items' 				=> 'Search ' . $signular,
			'all_items' 				=> 'All '.$plural,
			'parent_item' 				=> null,
			'parent_item_colon'			=> null,
			'edit_item' 				=> 'Edit '.$signular,
			'update_item' 				=> 'Update '.$signular,
			'add_new_item' 				=> 'Add New '.$signular,
			'new_item_name' 			=> 'New '.$signular.' Name',
			'separate_items_with_commas'=> 'Separate '.$plural.' with comms',
			'add_or_remove_items' 		=> 'Add or remove '.$plural,
			'choose_from_most_used' 	=> 'Shoose from the most used '.$plural,
			'menu_name' 				=> $plural,			
	);
	
	$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui'=>true,
			'show_admin_column' => true,
			'update_count_callback'=>'_update_post_term_count',
			'query_var' => true,
			'rewrite' => array('slug'=>'location'),
	);
	register_taxonomy('location','job',$args);
}
add_action('init','dwwp_register_taxonomy');




