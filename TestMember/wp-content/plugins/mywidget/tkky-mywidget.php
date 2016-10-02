<?php

/*
Plugin Name: Custom Widget
Plugin URI: https://localhsot.com
Description: Building a Custom WordPress Widget.
Author: Tkky
Version: 1
Author URI: https://localhost.com
*/

class TkkyWidget extends WP_Widget{
	// constructor
	function TkkyWidget() {
		// Give widget name here
		parent::WP_Widget(false, $name = __('TkkyWidget', 'wp_widget_plugin') );
	
	}
	
	// widget form creation
	function form($instance) {
		/* ... */
	}
	
	// widget update
	function update($new_instance, $old_instance) {
		/* ... */
	}
	
	// widget display
	function widget( $args, $instance ) {
		extract( $args );
	
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'รายการประกาศ', 'mytextdomain'  ) : $instance['title'], $instance, $this->id_base);
		echo $before_widget;
		if ( $title ) echo $before_title . $title . $after_title;
		?>	
	    <ul>
	    <?php
	      // Get the category list, and tweak the output of the markup.
	      $pattern = '#<li([^>]*)><a([^>]*)>(.*?)<\/a>\s*\(([0-9]*)\)\s*<\/li>#i';  // removed ( and )	
	      // $replacement = '<li$1><a$2>$3</a><span class="cat-count">$4</span>'; // no link on span
	      // $replacement = '<li$1><a$2>$3</a><span class="cat-count"><a$2>$4</a></span>'; // wrap link in span
	      $replacement = '<li$1><a$2><span class="cat-name">$3</span><span class="cat-count">$4</span></a>'; // give cat name and count a span, wrap it all in a link
	      //$subject = wp_list_categories( 'echo=0&orderby=name&exclude=&title_li=&depth=1&show_count=1' );
	      $subject = wp_list_categories(array(
	      		//'orderby' => 'name',
	      		'show_count' => 1,
	      		//'depth' => -1,
	      		//'current_category' => array(12,13),
	      		'hierarchical' => 0,
	      		'title_li' =>'',
	      		//'show_option_all'     => false,
	      		//'title_li' => 'Tong',
	      		'include' => array( 12, 13 )
	      ));
	      echo $subject;//preg_replace( $pattern, $replacement, $subject );
	    ?>
	    </ul>
	    <?php
	    echo $after_widget;
	 }
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("TkkyWidget");'));

?>