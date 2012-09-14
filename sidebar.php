<?php
/*
** Sidebar.php
** Displays additional content boxes.
*/
?>

<div id="sidebar_container">


	<div id="blurb">
				
		<?php
		// Displays text content of 'about me' static page.
		$page_id = 11;
		$about_me = get_page( $page_id );
		?>
		
		<h3><?php echo $about_me->post_title; ?></h3>
		<p><?php echo $about_me->post_content; ?></p>
		<p><a href="<?php echo get_permalink( $page_id ); ?>">Find out more.</a></p>
				
	</div><!--#blurb-->
		
	<div id="portfolio">
	
		<h3>Recent Projects</h3>
		
		<?php 
		// Displays titles of the five most recent posts in the 'portfolio' category.
		$portfolio = new WP_Query( 'category_name=portfolio&posts_per_page=5' ); ?>
		
		<ul>
			<?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
		
	</div><!--#portfolio-->
</div><!--#sidebar_container-->