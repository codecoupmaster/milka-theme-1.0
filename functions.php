<?php

add_action( 'wp_enqueue_scripts', 'style_theme' ); //подключаем стили

function style_theme () {    //подключаем стили
    
    wp_enqueue_style( 'style', get_stylesheet_uri());      
    
    wp_enqueue_style( 'owl-courusel', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.css');  //подключаем карусель
    wp_enqueue_style( 'main-milka-css', get_template_directory_uri() . '/build/style-index.css');   
        
       
}

add_action( 'wp_footer', 'scripts_theme' );    //подключаем скрипты

function scripts_theme () {      //подключаем скрипты
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'owl-courusel', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js');
	wp_enqueue_script( 'main-milka-js', get_template_directory_uri() . '/build/index.js'); 
}