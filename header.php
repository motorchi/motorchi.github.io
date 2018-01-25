<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">
<title><?php bloginfo('name') ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="image">


	</div>
<header class="site-header">
	<h1><?php bloginfo('name'); ?> </a></h1>
	<h5> <?php bloginfo('description'); ?><?php if (is_page('Image')) {?> -Thank you for Viewing our work <?php }?></h5>
	
	<nav class="nav">
	<?php
	$args = array('theme_location' => 'primary');
	?>
	
	<?php wp_nav_menu($args); ?>
	</nav>
	</header>