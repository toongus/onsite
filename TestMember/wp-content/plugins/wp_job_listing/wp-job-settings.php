<?php

function  dwwp_add_submenu_page(){	
	add_submenu_page(
			'edit.php?post_type=job',
			'Reorder Jobs',
			'Reorder Jobs',
			'manage_options',
			'reorder_jobs',
			'reorder_admin_jobs_callback'
			);
}
add_action('admin_menu', 'dwwp_add_submenu_page');


function reorder_admin_jobs_callback(){
	
	$args = array(
			//'post_type' => 'job',
			//'orderby' 	=> 'menu_order',
			//'order'		=> 'ASC',
			//'no_found_rows'	=> true,
			//'update_post_term_cache' => false,
			//'post_per_post'	=> 50
			'category_name' => 'main-categories'
		);
	$job_listing = new WP_Query($args);
	?>
	
	<div id="job-sort" class="wrap">
		<div id="icon-job-admin" class="icon32"><br/></div>
		<h2><?php _e('Sort Job Positions', 'wp-jop-listing'); ?> <img src="<?php echo esc_url(admin_url() . '/images/loading.gif');?>" alt="" id="loading-animation"></h2>
			<?php if($job_listing->have_posts()) { ?>
				<p><?php _e('<storng>Note:</storng> this only affects the Jobs Listed using the shortcode functions!','wp-jop-listing'); ?></p>
				<ui id="custom-type-list">
					<?php while($job_listing->have_posts()) { $job_listing->the_post(); ?>
						<li id="<?php the_id(); ?>"><?php the_title();?></li>
					<?php } ?>
				</ui>
			<?php }else{ ?>
				<p><?php _e('You have no Jobs to sort.', 'wp_job_listing'); ?></p>
			<?php } ?>
	</div>
	
	<?php
}