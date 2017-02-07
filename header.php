<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <!-- Links to our Style.css file -->
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!--The purpose of this function is to link to your default stylesheet in a dynamic way so that if you move your theme around to different servers, the link will always work relatively.-->

	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Walter+Turncoat|Muli" rel="stylesheet">
	
</head>

<body>
    <div class="container">
		<header class="row">
			<div class="twelve columns">
				<h1><?php bloginfo('name'); ?></h1>		 <!-- dynamically add the header -->
				<p><?php bloginfo('description'); ?></p> <!-- dynamically add the paragraph -->
			</div>
			<!-- Add Menu Here -->
			<div class="row">
				<div class="twelve columns">
					<?php wp_nav_menu(array(
						'sort_column' => 'menu_order', 
						'container_class' => 'blank-menu-header'
						));?>
				</div>
			</div>
		</header>