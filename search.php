<!-- ヘッダー -->
<?php get_header(); ?>
<!-- サイドバー -->

<!-- メイン画像 -->
<main class="l-main">
    
    <div class="p-front--menu">
        <div class="c-cover--front">
            <h2 class="p-front__title">Search:
                <p class="p-front__sub"><?php the_search_query() ?></p>
            </h2>
        </div>    
    </div> 

    <h2>「<?php if(get_search_query()); ?>」の検索結果は<?php echo $wp_query->found_posts;?>件です</h2>
<?php if(have_posts()): 
    while(have_posts()) : the_post(); ?>

<?php endwhile; ?>
<?php else : ?>
<h3>「<?php the_search_query(); ?>」はありませんでした</h3>
<p>Topページに戻る場合は<a href="<?php echo esc_url (home_url()); ?>">こちら</a>から戻ることができます。</p>
<?php endif; ?>
<!-- home_urlにはエスケープが必要 -->

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
            <img class="p-card__img"  src="/img/burg/cheese_burger.png" alt="チーズバーガー">
            <?php endif; ?>
            <div class="p-card">
                <h3 class="c-title__card p-card__title"><?php the_title(); ?></h3>
                <h4 class="c-card__text p-card__sub-title"><?php the_excerpt(); ?></h4>
                <p class="c-card__text p-card__text">
                <?php get_the_content() ?>
                </p>
                    <button  onclick="location.href='<?php the_permalink(); ?>'" class="c-button__card">
                        詳しくみる
                    </button>
            </div>
        </figure>
            <?php endwhile;
            else:
                echo '記事がありません';
            ?>
            <?php endif; ?>
    </article>
<?php wp_pagenavi(); ?>
</main>
<!-- フッター -->
<?php get_footer(); ?>