<?php
	$navmenu_options = array(
		'theme_location' => 'header-menu',
		'container' => false,
		'menu_id' => 'menu-general',
		'menu_class' => 'top-menu',
		'echo' => true,
		'depth' => 3
	);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body>
	<header id="main-header">
		<div class="wrap">
			<nav> <?php wp_nav_menu($navmenu_options); ?></nav>
		</div>
	</header>
	<main id="<?php sw_get_main_id(); ?> ">
