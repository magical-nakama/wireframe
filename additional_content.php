<?php
/*
** Additional Content
** Displays sidebar containing extra content for the home page.
*/
?>

<div id="container_additionalcontent"><!-- Container for supplementary information. -->
	
	<?php
	/*
	*** Blurb
	*** Displays personal summary
	**** To do:
	**** *Develop this section further when creating the "about me" page.
	*/
	?>
	
	<div id="blurb">
				
		<?php 
		$page_id = 11;
		$about_me = get_page( $page_id );
		?>
		
		<h3><?php echo $about_me->post_title; ?></h3>
		<p><?php echo $about_me->post_content; ?></p>
		<p><a href="<?php echo get_permalink( $page_id ); ?>">Find out more.</a></p>
				
	</div><!--#blurb-->
	
	
	<?php
	/*
	*** Portfolio
	*** Displays the titles of the five most recent posts in the portfolio category as an li link.
	*/
	?>
		
	<div id="portfolio">
	
		<h3>Recent Projects</h3>
		
		<?php $portfolio = new WP_Query( 'category_name=portfolio&posts_per_page=5' ); ?>
		
		<ul>
			<?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
		
	</div><!--#portfolio-->
</div><!--#container_additionalcontent-->