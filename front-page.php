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
    <div class="p-front--main">
        
        <h2 class="p-front__title">ダミーサイト</h2>

    </div> 
<!--メニュー  -->
    <article class="p-branch c-grid">
        <div class="p-branch--menu p-container__take-out">
            <h2 class="c-title__sub">Take OUT</h2>
            <span class="c-line p-branch--menu__line"></span>
                <div class="c-grid">
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in">Take OUT</h3><a href="#">
                        <p class="p-branch__sub">当店のテイクアウトで利用できる商品を掲載しています
                            当店のテイクアウトで利用できる商品を掲載しています
                            当店のテイクアウトで利用できる商品を掲載しています
                        </p></a>
                    </div>
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in">Take OUT</h3><a href="#">
                        <p class="p-branch__sub">当店のテイクアウトで利用できる商品を掲載しています
                            当店のテイクアウトで利用できる商品を掲載しています
                            当店のテイクアウトで利用できる商品を掲載しています
                        </p></a>
                    </div>
                </div>
        </div>
                
        <div class="p-branch--menu p-container__eat-in">        
            <h2 class="c-title__sub">Eat In</h2>
            <span class="c-line p-branch--menu__line"></span>
                <div class="c-grid">
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in">Eat In</h3><a href="#">
                        <p class="p-branch__sub">店内でお食事いただけるメニューです店内でお
                            食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお
                            食事いただけるメニューです
                        </p></a>
                    </div>
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in">Eat In</h3><a href="#">
                        <p class="p-branch__sub">店内でお食事いただけるメニューです店内でお
                            食事いただけるメニューです
                            店内でお食事いただけるメニューです店内でお
                            食事いただけるメニューです</p></a>
                    </div>
                </div>       

        </div>

<!-- マップ -->
    </article>
    <section class="p-access c-grid ">
        <div class="c-map__light"></div>
        <div class="c-map__strong"></div>
        <h2 class="c-title__map">見出しが入ります</h2>
        <span class="c-line__access"></span>
        <p class="p-access__text">
                
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
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
         </p>
    </section>
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