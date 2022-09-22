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
    // add_theme_support('menus');　　※使わない　Themacheckでエラーになる。
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

//css,jQuery読み込み
function wpbeg_script() {
    $locale = get_locale();
    $locale = apply_filters( 'theme_locale', $locale, 'wpbeg' );
    // wp_enqueue_style( 'font-awesome', get_theme_file_uri (),'/css/fontawesome.css', array(), '6.2.0',true );
    if( $locale == 'ja' ) {
    wp_enqueue_style( 'wpbeg-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() ); };
    wp_enqueue_style( 'wpbeg-Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
    wp_enqueue_style( 'wpbeg-normalize', get_theme_file_uri ( '/css/reset.css' ), array(), '4.5.0' );
    wp_enqueue_style( 'main-style', get_theme_file_uri ( '/scss/style.css' ), array(), '1.0.0' );
    wp_enqueue_script( 'jquery', get_theme_file_uri() , '/JavaScript.js/jquery-3.6.1.min',array(), '3.6.1', true );
    wp_enqueue_script( 'js', get_theme_file_uri ('/JavaScript.js/script.js'), array( 'jquery' ), '1.0.0', true );
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
};
/**
 * サイト内検索の範囲に、カテゴリー名、タグ名、を含める
 */
function custom_search($search, $wp_query) {
    global $wpdb;
    //サーチページ以外だったら終了
    if (!$wp_query->is_search)
    return $search;
    
    if (!isset($wp_query->query_vars))
    return $search;
    
    // ユーザー名とか、タグ名・カテゴリ名も検索対象に　SQL
    $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
    if ( count($search_words) > 0 ) {
    $search = '';
    foreach ( $search_words as $word ) {
        if ( !empty($word) ) {
        $search_word = $wpdb->prepare("%{$word}%");
        $search .= " AND (
            {$wpdb->posts}.post_title LIKE '{$search_word}'
            OR {$wpdb->posts}.post_content LIKE '{$search_word}'
            OR {$wpdb->posts}.ID IN (
                SELECT distinct r.object_id
                FROM {$wpdb->term_relationships} AS r
                INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
                INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
                WHERE t.name LIKE '{$search_word}'
            OR t.slug LIKE '{$search_word}'
            OR tt.description LIKE '{$search_word}'
            )
        ) ";
        }
    }
    }
    
    return $search;
    }
    add_filter('posts_search','custom_search', 10, 2);

    //pタグ自動生成を止める
    remove_filter('category_description','wpautop');
    remove_filter('tag_description','wpautop');
    remove_filter('term_description','wpautop');

    //抜粋を固定ページで使用
    add_post_type_support( 'page', 'excerpt' );
    //抜粋の...を消す
    if (!function_exists('custom_excerpt_more')) {
        function custom_excerpt_more($more) {
            return '';
        }
    }
    add_filter('excerpt_more', 'custom_excerpt_more');

    //SVGをアップロード
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');



