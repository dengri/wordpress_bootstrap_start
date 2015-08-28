<?php

function javdeluxe_enqueue_theme_styles(){
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}

function javdeluxe_enqueue_theme_scripts(){
	//wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'javdeluxe_enqueue_theme_styles' );
add_action( 'wp_enqueue_scripts', 'javdeluxe_enqueue_theme_scripts' );
