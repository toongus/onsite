<?php get_header(); ?>
	<div id="primary" class="content-area content-masonry">
		<main id="main" class="site-main" role="main">
			<div id="masonry-container">
				<div class="masonry" class="clearfix">

					<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
								get_template_part( 'template-parts/content', get_post_format());

						?>

					<?php endwhile; ?>
					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
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
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
