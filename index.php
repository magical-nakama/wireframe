<?php
/*
** Index.php
** WordPress theme homepage.
** The Loop outputs the three most recent posts with category of 'primary'.
*/

// WP core function retrieves header file for theme.
get_header();
?>

<div id="blog_container">
			
	<div id="blog_posts">
			
		<?php // Create new instance of WP_Query object to filter category.
		$primary = new WP_Query( 'category_name=primary&posts_per_page=3' ); ?>
			
		<?php // Are there posts under the 'primary' category?
		if ( $primary->have_posts()) : ?>
				
			<?php // While loop outputs three posts.
			while ( $primary->have_posts()) : $primary->the_post(); ?>
				
				<h2><a href="<?php the_permalink(); ?>" 
				rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
				<?php the_title(); ?></a></h2>
				
				<?php the_content('<br/>Read more.');?>
			
			<?php endwhile; ?>
				
		<?php // Message displayed if no posts found on database.
		else : ?>
			<h2>Could not return posts</h2>
			<p>No blog posts have been found.</p>
		<?php endif; ?>
		
	</div><!--#content-->
</div><!--#blog_container-->

<?php
// WP core function retrieves sidebar file for theme.
get_sidebar();

// Include site navigation menu.
//Placed at bottom of site for accessibility and repositioned to top using CSS rules.
include (TEMPLATEPATH . '/main_navigation.php');

// WP core function retrieves footer file for theme.
get_footer();
?>