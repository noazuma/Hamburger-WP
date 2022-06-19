<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger</title>

<!-- フォントRoboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">


<!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<!-- スタイルシート -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/21e9ab169d.js" crossorigin="anonymous"></script>
        

</head>
<body>
    <div class="c-cover"></div>

<!--ヘッダー  -->
<header class="l-header">
<h2 class="p-head__menu c-button--menu">Menu</h2>



<h1 class="p-head__title c-title"><a href="#">Hamburger</a></h1>
<serach-box class="p-serach">
    
        <input type="search" name="search"  style="padding-left: 30px;" value="" class="p-serach__box c-icon">
    
        <input type="submit" value="検索" class="c-button--submit"></input>
</form>
    <!-- <a>検索</a> -->
    </serach-box>
</header>
<!-- サイドバー -->
<sidebar class="l-sideber">
    
        <h2 class="c-button--menu c-close__menu">Menu</h2>
        <button class="c-button__close c-close__bt">
<!-- ばつ印 -->
            <span class="c-line__menu1 c-close__bt"></span>
            <span class="c-line__menu2 c-close__bt"></span>
        </button>
    <nav class="p-nav">
        <ul class="c-padding__bottom">
            <li class="p-sidemenu__main"><a>バーガー</a></li>
                <ul>
                    <li class="p-sidemenu__sub">ハンバーガー</li>
                    <li class="p-sidemenu__sub">チーズバーガー</li>
                    <li class="p-sidemenu__sub">テリヤキバーガー</li>
                    <li class="p-sidemenu__sub">アボカドバーガー</li>
                    <li class="p-sidemenu__sub">フィッシュバーガー</li>
                    <li class="p-sidemenu__sub">ベーコンバーガー</li>
                    <li class="p-sidemenu__sub">チキンバーガー</li>
                </ul>
            
            <li class="p-sidemenu__main"><a>サイド</a></li>
                <ul>
                    <li class="p-sidemenu__sub">ポテト</li>
                    <li class="p-sidemenu__sub">サラダ</li>
                    <li class="p-sidemenu__sub">ナゲット</li>
                    <li class="p-sidemenu__sub">コーン</li>
                </ul>
            
            <li class="p-sidemenu__main"><a>ドリンク</a></li>
                <ul>
                    <li class="p-sidemenu__sub">コーラ</li>
                    <li class="p-sidemenu__sub">ファンタ</li>
                    <li class="p-sidemenu__sub">オレンジ</li>
                    <li class="p-sidemenu__sub">アップル</li>
                    <li class="p-sidemenu__sub">紅茶（Ice/Hot）</li>
                    <li class="p-sidemenu__sub">コーヒー（Ice/Hot）</li>
                </ul>
            
        </ul>
    </nav>
</sidebar>
<!-- メイン画像 -->
<main class="l-main">
    
    <div class="p-front--menu">
        <div class="c-cover--front">
            <h2 class="p-front__title">Search:
                <p class="p-front__sub">チーズバーガー</p>
            </h2>
        </div>    

    </div> 
<!--メニュー  -->
    <article class="c-card">
                <h3 class="c-title__archive">小見出しが入ります
                    <p class="c-text--main">テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。
                    </p>
                </h3>
        <figure class="c-card__box">
            <img class="p-card__img"  src="/img/cheese burger.svg" alt="チーズバーガー">
            <div class="p-card">
                <h3 class="c-title__card p-card__title">小見出しが入ります</h3>

                <h4 class="c-card__text p-card__sub-title">小見出しが入ります</h4>

                <p class="c-card__text p-card__text">
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                </p>
                    <buttom  class="c-button__card">
                        詳しくみる
                    </buttom>
            </div>
        </figure>

        <figure class="c-card__box">
            <img  class="p-card__img" src="/img/cheese burger.svg" alt="チーズバーガー">
            <div class="p-card">
                <h3 class="c-title__card p-card__title">小見出しが入ります</h3>

                <h4 class="c-card__text p-card__sub-title">小見出しが入ります</h4>

                <p class="c-card__text p-card__text">
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                </p>
                    <buttom  class="c-button__card">
                        詳しくみる
                    </buttom>
            </div>
        </figure>

        <figure class="c-card__box">
            <img  class="p-card__img" src="/img/cheese burger.svg" alt="チーズバーガー">
            <div class="p-card">
                <h3 class="c-title__card p-card__title">小見出しが入ります</h3>

                <h4 class="c-card__text p-card__sub-title">小見出しが入ります</h4>

                <p class="c-card__text p-card__text">
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                </p>
                    <buttom  class="c-button__card">
                        詳しくみる
                    </buttom>
            </div>
        </figure>

        <figure class="c-card__box">
            <img  class="p-card__img" src="/img/cheese burger.svg" alt="チーズバーガー">
            <div class="p-card">
                <h3 class="c-title__card p-card__title">小見出しが入ります</h3>

                <h4 class="c-card__text p-card__sub-title">小見出しが入ります</h4>

                <p class="c-card__text p-card__text">
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                </p>
                    <buttom  class="c-button__card">
                        詳しくみる
                    </buttom>
            </div>
        </figure>

        <figure class="c-card__box">
            <img  class="p-card__img" src="/img/cheese burger.svg" alt="チーズバーガー">
            <div class="p-card">
                <h3 class="c-title__card p-card__title">小見出しが入ります</h3>

                <h4 class="c-card__text p-card__sub-title">小見出しが入ります</h4>

                <p class="c-card__text p-card__text">
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。
                </p>
                    <buttom  class="c-button__card">
                        詳しくみる
                    </buttom>
            </div>
        </figure>
    </article>
<!--ページ送り  -->
<div class="p-pagination">
    <div class="p-pagination__page">page 1/10</div>
    <a  href="#" class="p-pagination__back">&lt;&lt;
        <div class="p-pagination__text">前へ</div>
    </a>
    <ul class="p-pagination__list">
        <li class="p-pagination__list-box"><a href="#">1</a></li>
        <li class="p-pagination__list-box"><a href="#">2</a</li>
        <li class="p-pagination__list-box"><a href="#">3</a></li>
        <li class="p-pagination__list-box"><a href="#">4</a></li>
        <li class="p-pagination__list-box"><a href="#">5</a></li>
        <li class="p-pagination__list-box"><a href="#">6</a></li>
        <li class="p-pagination__list-box"><a href="#">7</a></li>
        <li class="p-pagination__list-box"><a href="#">8</a></li>
        <li class="p-pagination__list-box"><a href="#">9</a></li>
    </ul>
    <a  href="#" class="p-pagination__next">
        <div class="p-pagination__text">次へ</div>
        &gt;&gt;</a>



</div>

</main>
<!-- フッター -->
<footer class="l-footer">
    
    <div>
        <ul class="p-footer">
            <li><a class="p-footer__shop" href="#">ショップ情報</a></li>
            <spen class="c-line--footer p-partition"></spen> 
            <li><a class="p-footer__shop" href="#">ヒストリー</a></li>
        </ul>

        <p class="p-footer__cp">Copyright: RaiseTech</p>
    </div>

</footer>






<script src="/JavaScript.js/jquery-3.6.0.min.js"></script>
<script src="/JavaScript.js/script.js"></script>
</body>
</html>