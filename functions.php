<?php

function fds_test(){

    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.3.1.min.js', array(), null, true);
    wp_enqueue_script('bootstrap_script', get_template_directory_uri(). '/js/bootstrap.min.js', array( 'jquery' ), null, true);
    wp_enqueue_script('scripts', get_template_directory_uri(). '/js/scripts.js', array( 'jquery' ), null, true);


    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap_style', get_template_directory_uri(). '/css/bootstrap.min.css');
    wp_enqueue_style('navbar', get_template_directory_uri(). '/css/navbar.css');
    wp_enqueue_style('middle-content', get_template_directory_uri(). '/css/middle-content.css');
    wp_enqueue_style('blokk', get_template_directory_uri(). '/css/blokk/blokkfont.css');

}

add_action( 'wp_enqueue_scripts', 'fds_test' );

?>