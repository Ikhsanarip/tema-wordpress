<?php 

function load_file() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'load_file' );

// the excerpt
function jumlah_kata() {
	return 30;
}

function ujung_paragraf() {
	return "...";
}

add_filter('excerpt_more', 'ujung_paragraf');
add_filter('excerpt_length', 'jumlah_kata');


function init_setup() {
	
	register_nav_menus(array(
		'main_menu' => 'Menu Utama',
		'footer_menu' => 'Menu Footer'
	));

	// featured image
	add_theme_support('post-thumbnails');
	add_image_size('small_thumb', 150, 150, true);
	add_image_size('big_thumb', 350, 350, true);

	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'audio', 'video'));
}

add_action('after_setup_theme', 'init_setup');
?>