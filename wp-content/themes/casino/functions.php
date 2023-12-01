<?php 
    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owlcarousel/owl.carousel.min.css' );
        wp_enqueue_style( 'googleapis', 'https://fonts.googleapis.com' );
        wp_enqueue_style( 'gstatic', 'https://fonts.gstatic.com' );
        wp_enqueue_style( 'fontKabin', 'https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap' );
        wp_enqueue_style( 'fontKanit', 'https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap' );
        wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css' );

        
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.min.js');
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owlcarousel/owl.carousel.min.js', array('jquery'), 'null', true );
        wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), 'null', true );
    });

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
?>