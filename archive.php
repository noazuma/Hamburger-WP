<!-- ヘッダー -->
<?php get_header(); ?>
<!-- サイドバー -->
<?php get_sidebar(); ?>

<!-- メイン画像 -->
<main class="l-main">
    
    <div class="p-front--menu">
        <div class="c-cover--front">
            <h2 class="p-front__title">Menu:
                <p class="p-front__sub"><?php wp_title(''); ?></p>
            </h2>
        </div>    

    </div> 
<!--メニュー  -->
    <article class="c-card">
                <h3 class="c-title__archive"><?php single_cat_title(); ?>
                </h3>
                <p class="c-text--main"><?php echo category_description(); ?>
                </p>
                <?php
        if(have_posts()):
            while(have_posts()):
                the_post(); ?>
        <figure class="c-card__box">
            <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large',array('class' => 'p-card__img')); ?>
            <?php else: ?>
            <img class="p-card__img"  src="/img/cheese_burger.svg" alt="チーズバーガー">
            <?php endif; ?>
            <div class="p-card">
                <h3 class="c-title__card p-card__title"><?php the_title(); ?></h3>

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

        <!-- <figure class="c-card__box">
            <img  class="p-card__img" src="/img/cheese burger.svg" alt="チーズバーガー">
            <div class="p-card">
                <h3 class="c-title__card p-card__title">ダブルチーズバーガー</h3>

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
                <h3 class="c-title__card p-card__title">スペシャルチーズバーガー</h3>

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
            </div> -->
            <?php endwhile;
            else:
                echo '記事がありません';
            ?>
            <?php endif; ?>
        </article>
        </figure>
        
    </article>
<!--ページ送り  -->
<?php wp_pagenavi(); ?>
<!-- <div class="p-pagination">
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



</div> -->

</main>
<!-- フッター -->
<?php get_footer(); ?>
