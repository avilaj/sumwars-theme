<?php
add_theme_support('post-thumbnails');
/**
 * Register navigation menus
 */
function sw_register_menus(){
	register_nav_menu('header-menu', 'Header menu');
	register_nav_menu('footer-menu', 'Footer menu');
}
add_action('init', 'sw_register_menus');

/**
 * Register theme styles
 */
function sw_register_styles(){
	$path = get_template_directory_uri();
	wp_register_style("normalize", $path.'/css/normalize.css', array(), "", "screen");
	wp_register_style("theme", $path.'/css/theme.css', array(), "", "screen");
}
add_action('wp_enqueue_scripts','sw_register_styles');

function sw_enqueue_styles(){
	wp_enqueue_style('normalize');
	wp_enqueue_style('theme');
}
add_action('wp_enqueue_scripts','sw_enqueue_styles');
?>
