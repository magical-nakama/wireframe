<?php
include (TEMPLATEPATH . '/header.php');
include (TEMPLATEPATH . '/single_header.php');

while (have_posts()) : the_post(); 
	?>
		
	<div id="page"><!-- Container for the blog loop. -->		
			
		<h1><?php the_title(); ?></h1>
			
			<?php the_content();?>
		
		</div><!--#container_blogloop-->
			
<?php 
endwhile;

include (TEMPLATEPATH . '/main_navigation.php');
include (TEMPLATEPATH . '/footer.php');
?>