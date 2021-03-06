<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	
	<meta name="description" content="Homepage of Wojtek Zając.">
	<meta name="author" content="Wojtek Zając">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
	<link href='http://fonts.googleapis.com/css?family=Economica:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="http://use.typekit.com/ilf3snf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<script src="<?php bloginfo('template_directory') ?>/js/modernizr-1.7.min.js"></script>
<?php //wp_head() // For plugins ?>
</head>

<body<?php if(is_front_page()) { ?> class="home"<?php } ?>>

<?php if(is_front_page()) { ?>
<img src="/img/me.jpg" alt="Wojtek Zając" class="photo">
<?php } ?>

<div id="wrapper">

<?php if (!is_page('home')) { ?>
	<header>
		<h1><a href="<?php bloginfo('home') ?>/" rel="home"><?php //bloginfo('name') ?>Wojtek <span>Zajac</span></a></h1>
		<small>voi·tek za·yats</small>
	</header>

	<nav role="navigation">
		<ul id="menu">
		<?php wp_list_pages('title_li=&sort_column=menu_order&exclude=4'); ?>
		</ul>
		<ul>
			<li><a href="">Blog</a></li>
		</ul>
	</nav>
<?php } ?>