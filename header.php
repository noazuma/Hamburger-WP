<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 言語設定を自動的に取得 -->

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger</title>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="p-wrapper">
    <?php wp_body_open(); ?>
        <div class="c-cover"></div>

    <!--ヘッダー  -->
    <header class="l-header">
    <h2 class="p-head__menu c-button--menu">Menu</h2>

    <h1 class="p-head__title c-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <?php get_search_form(); ?>
    </header>



