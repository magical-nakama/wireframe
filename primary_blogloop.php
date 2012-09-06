<?php
/*
** Primary Blogloop
** Displays the three most recent entries categorised as 'primary'.
*/
?>

<div id="container_blogloop"><!-- Container for the blog loop. -->
			
	<div id="blog">
				
		<?php $primary = new WP_Query( 'category_name=primary&posts_per_page=3' ); ?>
				
		<?php if ($primary->have_posts()) : ?>
				
			<?php while ($primary->have_posts()) : $primary->the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content('<br/>Find out more.');?>
			<?php endwhile; ?>
				
		<?php else : ?>
			<h2>Not Found</h2>
			<p>No entries found.</p>
		<?php endif; ?>
		
	</div><!--#content-->
</div><!--#container_blogloop-->