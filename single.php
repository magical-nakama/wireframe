<?php
/*
** Single
** Displays single post.
*/

get_header();

while (have_posts()) : the_post(); ?>
		
	<?php
	if ( in_category('primary')) {
		$category = 'primary';
	} elseif ( in_category('portfolio')) {
		$category = 'portfolio';
	}
	?>
	
	<div class="single_post" id="<?php echo $category; ?>"><!-- Container for the blog loop. -->		
		
		<h1><?php the_title(); ?></h1>
		
		<?php the_content('<br/>Find out more.');?>
		
	<?php endwhile; ?>

		
</div><!--.single_post #<?php echo $category; ?>-->

<?php
include (TEMPLATEPATH . '/main_navigation.php');

get_footer();
?>