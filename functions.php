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
	wp_register_style("theme", $path.'/css/style.css', array(), "", "screen");
}
add_action('wp_enqueue_scripts','sw_register_styles');

function sw_enqueue_styles(){
	wp_enqueue_style('normalize');
	wp_enqueue_style('theme');
}
add_action('wp_enqueue_scripts','sw_enqueue_styles');

/**
 * Returns actual page id
 */
function sw_get_main_id() {
	return 'some-id';
}

/**
 * Set custom post types
 */
function sw_create_post_types() {
	register_post_type('feature', array(
		'labels' => array(
			'name' =>__('Features'),
			'singular_name' => __('Feature')
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail'
			)
		));
}
add_action('init', 'sw_create_post_types');

/**
 * View features
 */
function sw_list_features($num=3, $do_shortcode=1, 	$strip_shortcodes = 0) {
	$options = array(
		'numberposts' => $num,
		'order_by' => 'menu_order, post_title',
		'order' => 'DESC',
		'post_type' => 'feature',
		'post_status' => 'publish',
		'supress_filters' => true
		);
	$posts = get_posts($options);
	$html = '';

	foreach ($posts as $post) {
		$image = get_the_post_thumbnail($post->ID);
		if (empty($image)) {
			$img = "<img src='". plugins_url("/img/default.png", __FILE__)."'/>";
		}
		if (has_post_thumbnail($post->id)) {

		}
		$content = $post->post_content;
		if ($do_shortcode == 1) {
			$content = do_shortcode($content);
		}
		$html .= '
			<div class="column">
					<figure>
					'.$image.'
					</figure>
					<h3>'.$post->post_title.'</h3>
					<div>'.$content.'</div>
			</div>
		';
	}
	return $html;

}

function sw_list_news($num=3, $do_shortcode=1, 	$strip_shortcodes = 0) {
	$options = array(
		'numberposts' => $num,
		'order_by' => 'menu_order, post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status' => 'publish',
		'supress_filters' => true
		);
	$posts = get_posts($options);
	$html = '';

	foreach ($posts as $post) {
		$image = get_the_post_thumbnail($post->ID);
		if (empty($image)) {
			$img = "<img src='". plugins_url("/img/default.png", __FILE__)."'/>";
		}
		if (has_post_thumbnail($post->id)) {

		}
		$content = $post->post_content;
		if ($do_shortcode == 1) {
			$content = do_shortcode($content);
		}
		$html .= '
			<div class="post">
					<h3>'.$post->post_title.'</h3>
					<div>'.$content.'</div>
			</div>
		';
	}
	return $html;

}


?>