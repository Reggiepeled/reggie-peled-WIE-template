<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <!-- Links to our Style.css file -->
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('style.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('css/skeleton.css'); ?>" />
	<!--The purpose of this function is to link to your default stylesheet in a dynamic way so that if you move your theme around to different servers, the link will always work relatively.-->
	
</head>

<body>
    <div class="container">
		<header class="row">
			<div class="twelve columns">
				<h1><?php bloginfo('name'); ?></h1>		 <!-- dynamically add the header -->
				<p><?php bloginfo('description'); ?></p> <!-- dynamically add the paragraph -->
			</div>
		</header>