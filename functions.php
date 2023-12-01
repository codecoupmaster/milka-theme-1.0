<?php

add_action( 'wp_enqueue_scripts', 'theme_milka_files' );            // подключаем стили и скрипты

function theme_milka_files() {
    wp_enqueue_style('milka_main_styles', get_theme_file_uri('/assets/css/style.css'));

}

add_action( 'wp_footer', 'scripts_theme' );    //подключаем скрипты и библиотеки

function scripts_theme () {      //подключаем скрипты и библиотеки
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');

}