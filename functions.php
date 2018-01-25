<?php 
function Motorchi_resources(){

wp_enqueue_style ('style', get_stylesheet_uri());}

add_action('wp_enqueue_scripts', 'motorchi_resources');



function Motorchi_setup(){
	//Navigation Menus//
register_nav_menus(array(
'primary'	=> __('Primary Menu'),
'footer'	=> __('Footer Menu'),
));

	//added feature image support //
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'Motorchi_setup');
?>
