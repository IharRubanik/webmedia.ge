<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper.css' );
	wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'formalert-style', get_template_directory_uri() . '/assets/css/sweetalert.min.css' );
	
	
	
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	wp_enqueue_script( 'jquery' );
   


	
	wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper.js', array(), null, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );


	wp_enqueue_script( 'form-script', get_template_directory_uri() . '/assets/js/form.js', array(), null, true );
	wp_enqueue_script( 'formalert-script', get_template_directory_uri() . '/assets/js/sweetalert.min.js', array(), null, true );
});



add_theme_support('post-thumbnails');
add_theme_support('tatle-tag');
add_theme_support('custom-logo');
add_filter('the_generator', '__return_empty_string');

?>

