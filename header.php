<!doctype html>
	<html lang="en">
		<head>
			<title>Manlius Libary</title>
			<script src="https://use.fontawesome.com/964b38d4d8.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
			<link rel="stylesheet" 
			href="<?php bloginfo('template_directory'); ?>/style.css?id=<?php echo rand(1,1000); ?>" />
		</head>
		<body>
		<div class="container">
			<header class="row">
				Logo goes here
			</header>
			<nav class="row">
				<ul>
					<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</nav>