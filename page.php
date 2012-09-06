<?php
/*
** Page
** Displays individual static page.
*/

get_header();

include (TEMPLATEPATH . '/single_header.php');

while (have_posts()) : the_post(); 
	?>
		
	<div id="page_container">	
		
		<div id="page_content">	
			
			<h1><?php the_title(); ?></h1>
				
				<?php the_content();?>
			
			</div><!--#page_container-->
		</div> <!--#page_content-->
<?php 
endwhile;

include (TEMPLATEPATH . '/main_navigation.php');

get_footer();
?>