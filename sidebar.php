
<sidebar class="l-sideber">
    
    <h2 class="c-button--menu c-close__menu">Menu</h2>
    <button class="c-button__close c-close__bt">
<!-- ばつ印 -->
        <span class="c-line__menu1 c-close__bt"></span>
        <span class="c-line__menu2 c-close__bt"></span>
    </button>
    <nav class="p-nav"> 
    <!-- <ul class="c-padding__bottom"> -->
    <?php 
    wp_nav_menu( array( 
    'theme_location' => 'main-menu',
    'container' => '',
    'container_id' => '',
    'container_class' => '',
    'items_wrap'   => '<ul>%3$s</ul>',
    'menu_class' => 'p-sidemenu__main',
    'walker' => new custom_walker_main_menu,

    ) ); 
?>
    
        <!-- <li class="p-sidemenu__main"><a>バーガー</a></li>
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
            </ul> -->
        
    <!-- </ul> -->
</nav>
</sidebar>
