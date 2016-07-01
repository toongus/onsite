<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if(has_post_thumbnail()): ?>
		<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
	<?php endif; ?>
	
	<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
	<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
	
	
	
</article>