<?php

add_action( 'wp_enqueue_scripts', 'theme_milka_files' );            // подключаем стили

function theme_milka_files() {   
    wp_enqueue_style('milka_main_styles', get_theme_file_uri('/assets/css/style.css'));         // основной css файл

    wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Open+Sans:wght@400;500;600&display=swap', array(), null); //подключаем шрифты, "array(), null" отключает кеширование шрифтов, с ним не работает

    wp_enqueue_style('icon-font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');            //icons awesome
    wp_enqueue_style('icon-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');          //bootstrap icons

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');         //файл bootstrap css

    wp_enqueue_style( 'animate_lib', get_template_directory_uri() . '/assets/lib/animate/animate.min.css');         //библиотека анимации css
    wp_enqueue_style( 'carousel_lib', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css'); //библиотека carousel css
    wp_enqueue_style( 'lighbox_lib', get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css');         //библиотека lighbox css

}

add_action( 'wp_footer', 'scripts_theme' );    //подключаем скрипты и библиотеки

function scripts_theme () {      //подключаем скрипты и библиотеки
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js');

    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/lib/wow/wow.min.js');
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js');
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js');
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js');  
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/lib/counterup/counterup.min.js');
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/lib/parallax/parallax.min.js');
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');

    

}