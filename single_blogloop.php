<?php
/*
** Single Blogloop
** Default page for showing single posts.
*/
?>

<div class="container_singleblogloop"><!-- Container for the blog loop. -->
		
	<?php if (have_posts()) : ?>
			
		<?php while (have_posts()) : the_post(); ?>
			
			<h1><?php the_title(); ?></h1>
			
			<?php the_content('<br/>Find out more.');?>
			
		<?php endwhile; ?>

	<?php endif; ?>
		
</div><!--#container_blogloop-->