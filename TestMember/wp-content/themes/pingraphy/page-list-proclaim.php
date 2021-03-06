
<?php

$user = wp_get_current_user();
get_header(); 
?>
<div id="primary" class="content-area">
	<div id="primary" class="content-area content-masonry">
		<main id="main" class="site-main" role="main">
			<div id="masonry-container">
				<div class="masonry" class="clearfix"><?php
					$args = array(
						'category_name' => 'main-categories',
						'author'        =>  $user->ID,
					);
					$lst = new WP_Query($args);
					if($lst->have_posts()){
						while($lst->have_posts()){
							$lst->the_post();
							get_template_part( 'template-parts/content', get_post_format());
						}
					}
					?>
				</div>
			</div>
			<div class="infinite-scroll clearfix">
				<div class="la-ball-spin-clockwise la-dark la-2x">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<?php pingraphy_the_posts_navigation(); ?>
		</main><!-- #main site-main-->
	</div><!-- #primary content-area content-masonry-->
</div><!-- #primary content-area-->
<?php get_sidebar(); ?>	

<?php #**************CLOSE FORM?>
<?php get_footer(); ?>
<?php get_footer(); ?>