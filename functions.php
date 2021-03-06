<?php 

/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {			//defining a function
	register_sidebar( array(
		'name' => ('First Widget'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages', 
		'before_widget' => '<div class="widget-sidebar">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'						
	));

	register_sidebar( array(
		'name' => ('Footer Widget One'),
		'id' => 'footer-widget-one',
		'description' => 'First widget for our footer', 
		'before_widget' => '<div class="widget-footer one">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'						
	));

	register_sidebar( array(
		'name' => ('Footer Widget Two'),
		'id' => 'footer-widget-two',
		'description' => 'Second widget for our footer', 
		'before_widget' => '<div class="widget-footer two">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'						
	));

	register_sidebar( array(
		'name' => ('Footer Widget Three'),
		'id' => 'footer-widget-three',
		'description' => 'Third widget for our footer', 
		'before_widget' => '<div class="widget-footer three">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'						
	));
}
add_action('widgets_init', 'blank_widgets_init');	//tells WordPress to include the custom PHP function

/*-------------- Enable Menu ---------------*/ 
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' ); 

