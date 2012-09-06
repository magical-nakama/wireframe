<?php
/*
** Single Blogloop
** Default page for showing single posts.
*/
?>


		
<?php while (have_posts()) : the_post(); ?>
		
	<?php
	if ( in_category('primary')) {
		$category = 'primary';
	} elseif ( in_category('portfolio')) {
		$category = 'portfolio';
	}
	?>
	
	<div class="container_singleblogloop" id="<?php echo $category; ?>"><!-- Container for the blog loop. -->		
		
		<h1><?php the_title(); ?></h1>
		
		<?php the_content('<br/>Find out more.');?>
		
	<?php endwhile; ?>

		
</div><!--#container_singleblogloop-->