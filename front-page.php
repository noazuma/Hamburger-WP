<?php get_header(); ?>
<!-- メイン画像 -->
<main class="l-main">
    <div class="p-front--main">
        
        <h2 class="p-front__title"><?php bloginfo( 'description' ); ?></h2>

    </div> 
<!--メニュー  -->
//<?php if(have_posts()): 
    while(have_posts()) : the_post(); ?>//
<article class="p-branch c-grid">
        <div class="p-branch--menu p-container__take-out">
            <h2 class="c-title__sub"><?php
                $category = get_the_category();
                $cat_name = $category[1]->cat_name;
                echo $cat_name;
            ?>
            </h2>
            <span class="c-line p-branch--menu__line"></span>
                <div class="c-grid">
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in">Take OUT</h3><a href="#">
                        <p class="p-branch__sub"><?php echo category_description(6); ?>
                        </p></a>
                    </div>
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in">Take OUT</h3><a href="#">
                        <p class="p-branch__sub"><?php echo category_description(6); ?>
                        </p></a>
                    </div>
                </div>
        </div>
                
        <div class="p-branch--menu p-container__eat-in">        
            <h2 class="c-title__sub">
            <? $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                echo $cat_name;
            ?>
            </h2>
            <span class="c-line p-branch--menu__line"></span>
                <div class="c-grid">
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in">Eat In</h3><a href="#">
                        <p class="p-branch__sub"><?php echo category_description(5); ?>
                        </p></a>
                    </div>
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in">Eat In</h3><a href="#">
                        <p class="p-branch__sub"><?php echo category_description(5); ?>
                        </p></a>
                    </div>
                </div>       

        </div>
    </article>
    <?php endwhile;
    else :?>
    <?php endif; ?>
    
            


    <!-- <article class="p-branch c-grid">
        <div class="p-branch--menu p-container__take-out">
            <h2 class="c-title__sub">Take OUT
            </h2>
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


    </article> -->
<!-- マップ -->
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


<?php get_footer(); ?>



