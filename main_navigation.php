<?php
/*
** Main Navigation
** Contains main navigation options as an unordered list.
***
**** To Do:
**** *Decide on full set of options to include.
*/
?>

<div id="main_navigation">
	<h4>Main Navigation</h4>
	
	<ul id="navigation">
		<li><a href="<?php bloginfo('url'); ?>">HOME</a></li>
		<li><a href="<?php echo get_permalink( get_page_by_title( 'About Me' ) ); ?>">ABOUT ME</a></li>
		<li><a href="<?php echo get_permalink( get_page_by_title( 'Portfolio' ) ); ?>">PORTFOLIO</a></li>
		<!--<li><a href="#">POST LISTING</a></li>-->
	</ul>
</div><!--#navigation-->