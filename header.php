<?php
/*
** Standard Header Information.
** Sets up doctype and links to stylesheet listed in WP settings.
***
**** To Do:
**** *Add PHP code to display custom title depending on the page.
*/
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<title>A Title</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>
	<a id="top"></a><!-- Anchor for top of page. -->
	<div id="container"><!-- Page content container. -->