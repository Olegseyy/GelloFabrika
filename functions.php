<?php
/**************подключение изображения в админке************/
add_action( 'after_setup_theme', 'home_setup' );
 function home_setup(){
 	add_theme_support ('post-thumbnails');
 }

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'header menu'
	] );
	register_nav_menus( [
		'header_adaptive_menu' => 'header adaptive menu'
	] );
} );

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style( 'icons',  'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );

}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function my_scripts_method() {
	wp_deregister_script('jquery');
	wp_deregister_script('jquery');

	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	wp_enqueue_script( 'jquery' );
}
?>
