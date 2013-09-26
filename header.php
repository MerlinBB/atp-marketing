<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Meta tags -->
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />

	<meta name="description" content="">

	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="icon" type="image/png" href="<?php bloginfo("template_url"); ?>/img/favicon.ico">

	<?php wp_head(); ?>
	<?php wp_enqueue_script('jquery'); ?>

</head>

<body <?php body_class(); ?>>

<header class="page-header">
	<div class="container">
		<h1 class="sitename fl">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>

		<nav class="menu fr">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</nav>
	</div>
</header>

<div class="container nopadding">
