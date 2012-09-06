<DOCTYPE! html>

<html lang="en">
<head>
	<title><?php ?></title>
	<meta charset="UTF-8">
	<!--<script type="text/javascript" src=""></script>-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>
	<a name="top"></a><!-- Anchor for top of page. -->
	<div id="container"><!-- Page content container. -->
		
		<div id="header">
			<h1>Page Logo</h1>
			<h2>A subtitle</h2>
		</div><!--#header-->
		
		<div id="container_blogloop"><!-- Container for the blog loop. -->
			
			<div id="content">
				
				<?php $primary = new WP_Query( 'category_name=primary&posts_per_page=3' ); ?>
				
				<?php if ($primary->have_posts()) : ?>
					
					<?php while ($primary->have_posts()) : $primary->the_post(); ?>
						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_content('<br/>Find out more.');?></p>
					<?php endwhile; ?>
					
				<?php else : ?>
					<h2>Not Found</h2>
					<p>No entries found.</p>
				<?php endif; ?>
		
			</div><!--#content-->
		</div><!--#container_blogloop-->
		
		<div id="container_additionalcontent"><!-- Container for supplementary information. -->
			<div id="blurb">
				
				<?php 
				$page_id = 11;
				$about_me = get_page( $page_id );
				?>
				
				<h3><?php echo $about_me->post_title; ?></h3>
				<p><?php echo $about_me->post_content; ?></p>
				<p><a href="<?php echo get_permalink( $page_id ); ?>">Find out more.</a></p>
				
			</div><!--#blurb-->
			
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
		
		<div id="main_navigation">
		<h4>Main Navigation</h4>
		<ul id="navigation">
			<li><a href="#">HOME</a></li>
			<li><a href="#">ABOUT ME</a></li>
			<li><a href="#">PORTFOLIO</a></li>
			<!--<li><a href="#">POST LISTING</a></li>-->
		</ul>
		</div><!--#navigation-->
		
		<div id="footer">
			<p>Blah, blah, blah. Generic footer information.</p>
		</div><!--#footer-->
	</div><!--#container-->
</body>
</html>