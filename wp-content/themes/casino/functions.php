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

    add_filter( 'upload_mimes', 'svg_upload_allow' );

    # Добавляет SVG в список разрешенных для загрузки файлов.
    function svg_upload_allow( $mimes ) {
        $mimes['svg']  = 'image/svg+xml';

        return $mimes;
    }

    add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

    # Исправление MIME типа для SVG файлов.
    function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

        // WP 5.1 +
        if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
            $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
        }
        else {
            $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
        }

        // mime тип был обнулен, поправим его
        // а также проверим право пользователя
        if( $dosvg ){

            // разрешим
            if( current_user_can('manage_options') ){

                $data['ext']  = 'svg';
                $data['type'] = 'image/svg+xml';
            }
            // запретим
            else {
                $data['ext']  = false;
                $data['type'] = false;
            }

        }

        return $data;
    }

    add_image_size('thumbnail', 0, 0, false);
    add_image_size('medium', 0, 0, false);
    add_image_size('large', 0, 0, false);
    add_image_size('full', 0, 0, false);

    function remove_paragraphs_from_content($content) {
        // Удаляем оборачивание контента в тег <p>
        $content = preg_replace('/<p>(.*?)<\/p>/', '$1', $content);
    
        return $content;
    }
    
    add_filter('the_content', 'remove_paragraphs_from_content', 20);
    
?>