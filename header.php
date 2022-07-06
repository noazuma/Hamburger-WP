<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- 言語設定を自動的に取得 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger</title>

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> -->


    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> -->
<!-- スタイルシート -->
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/21e9ab169d.js" crossorigin="anonymous"></script> --> 
        
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="c-cover"></div>

<!--ヘッダー  -->
<header class="l-header">
<h2 class="p-head__menu c-button--menu">Menu</h2>

<h1 class="p-head__title c-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
<?php get_search_form(); ?>
</header>

