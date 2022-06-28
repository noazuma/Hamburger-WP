<?php

// テーマサポート
function custom_theme_support(){
    add_theme_support('html5',array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menus(array(
        'footer_nav' => esc_html__('footer navigation', 'rtbread'),
        'category_nav' => esc_html__('category navigation', 'rtbread'),
    ));
    add_theme_support('editor-styles');
    add_editor_style();
}
add_action('after_setup_theme','custom_theme_support');


function wpbeg_script() {
    $locale = get_locale();
    $locale = apply_filters( 'theme_locale', $locale, 'wpbeg' );
    wp_enqueue_style( 'font-awesome', get_theme_file_uri ( '/css/font-awesome.css' ), array(), '4.7.0' );
    if( $locale == 'ja' ) {
    wp_enqueue_style( 'wpbeg-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
    }
    wp_enqueue_style( 'wpbeg-Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
    wp_enqueue_style( 'wpbeg-normalize', get_theme_file_uri ( '/css/reset.css' ), array(), '4.5.0' );
    // wp_enqueue_style( 'wpbeg-wpbeg', get_theme_file_uri (  '/sass/style.css' ), array( 'wpbeg-normalize' ), '1.0.0' );
    wp_enqueue_style( 'main-style', get_theme_file_uri ( '/scss/style.css' ), array(), '1.0.0' );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js' , '', '3.4.1', true );
    wp_enqueue_script( 'js', get_theme_file_uri ('/JavaScript.js/script.js' ), array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpbeg_script' );


?>