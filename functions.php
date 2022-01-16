<?php
    function load_scripts(){

        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), 1, 'all' );
        wp_register_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array(), 1, 'all' );

        wp_enqueue_script( 'jquery');
        wp_enqueue_script( 'bootstrap');

    }
    function load_stylesheets(){
        wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), 1, 'all' );
        wp_enqueue_style( 'bootstrap');
        wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), 1, 'all' );
        wp_enqueue_style( 'custom');
    }

    add_action( 'wp_enqueue_scripts', 'load_stylesheets' );
    add_action( 'wp_enqueue_scripts', 'load_scripts' );
    add_theme_support( 'post-thumbnails' ); 
?>