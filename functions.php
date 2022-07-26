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
    add_theme_support('post-thumbnails');// アイキャッチ画像の有効化
    add_theme_support('title-tag');//titleタグのサポートを許可
    add_theme_support('menus');
    add_theme_support( 'automatic-feed-links' );
    register_nav_menus(array(
        // 'footer_nav' => esc_html__('footer', 'フッター'),
        // 'sideber_nav' => esc_html__('sideber', 'サイドバー'),
        'main-menu' => 'メインメニュー',
        'footer-menu' => 'フッターメニュー',
    ));
    add_theme_support('editor-styles');
    add_editor_style();
}
add_action('after_setup_theme','custom_theme_support');


function wpbeg_script() {
    $locale = get_locale();
    $locale = apply_filters( 'theme_locale', $locale, 'wpbeg' );
    wp_enqueue_style( 'font-awesome', get_theme_file_uri ( '//font-awesome.css' ), array(), '4.7.0' );
    if( $locale == 'ja' ) {
    wp_enqueue_style( 'wpbeg-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
    }
    wp_enqueue_style( 'wpbeg-Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
    wp_enqueue_style( 'wpbeg-normalize', get_theme_file_uri ( '/css/reset.css' ), array(), '4.5.0' );
    wp_enqueue_style( 'main-style', get_theme_file_uri ( '/scss/style.css' ), array(), '1.0.0' );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js' , '', '3.4.1', true );
    wp_enqueue_script( 'js', get_theme_file_uri ('/JavaScript.js/script.js' ), array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpbeg_script' );



// カスタムウォーカーの編集
class custom_walker_main_menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        if($depth == 0){ //第一階層のときにp-sidemenu__mainと、h3タグを付ける
            $output .= '<li class="p-sidemenu__main"><h3><a href="'.$item->url.'">'.$item->title.'</a></h3>';//$item->url、$item->titleはリンク先と項目名の指定
        }else{ //第一階層以外は第一階層のときにp-sidemenu__subを付ける
            $output .= '<li class="p-sidemenu__sub"><a href="'.$item->url.'">'.$item->title.'</a>';
        }
    }
}

// wp_paegaviのclass編集
function custom_wp_pagenavi( $html ) {
    $out = '';
    $out = str_replace( "<div", "", $html );
    $out = str_replace( "class='wp-pagenavi'>", "", $out );
    $out = str_replace( "</div>", "", $out );
    $out = str_replace( "<a", "<ul><a", $out );
    $out = str_replace( "</a>", "</a></ul>", $out );

    return '<nav class="p-pagination"><ul class="p-pagination-list">' . $out . '</ul></nav>';
}
    add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );
