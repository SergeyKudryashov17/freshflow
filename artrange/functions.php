<?php
//Подключение скриптов и стилей к теме
function include_css_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true );
    wp_enqueue_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), null, true );
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'fullpage-js', get_stylesheet_directory_uri() . '/js/fullpage.js', array(), null, true );
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array(), null, true );
    wp_enqueue_script( 'mask-input', get_template_directory_uri(). '/js/maskedinput.min.js', array(), null, true);
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array(), null, true );

    wp_enqueue_style( 'fullpage-css', get_stylesheet_directory_uri() . '/css/fullpage.css', false, null );
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', false, null );
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', false, null );
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/slick/slick.css', false, null );
    wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css', false, null );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/style.css', false, null );
    wp_enqueue_style( 'media-css', get_stylesheet_directory_uri() . '/css/media.css', false, null );
}
add_action( 'wp_enqueue_scripts', 'include_css_scripts' );


?>