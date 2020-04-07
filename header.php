<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h4><?php bloginfo('description'); ?></h4>
		<nav>
			<?php 
				$args = array('theme_location' => 'main_menu' );
				wp_nav_menu($args); 
			?>
		</nav>
		<div class="search_form">
			<?php get_search_form(); ?>
		</div>
	</header>
	