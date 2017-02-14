<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <!-- Links to our Style.css file -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Walter+Turncoat|Muli" rel="stylesheet">
	<?php wp_head(); ?>	
</head>

<body>
    <div class="container">
		<header class="row">
			<div class="twelve columns">
				<article>
					<h1><a href="<?php 
						$url = home_url('/'); echo $url; ?>">
						<?php bloginfo('name'); ?></a></h1>		 <!-- dynamically add the header -->
					<h3><?php bloginfo('description'); ?></h3> <!-- dynamically add the paragraph -->
				</article>
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