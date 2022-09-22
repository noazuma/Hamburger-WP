<?php get_header(); ?>
<!-- メイン画像 -->
<main class="l-main">
    <div class="p-front--main">
        
        <h2 class="p-front__title"><?php bloginfo( 'description' ); ?></h2>

    </div> 
<!--メニュー -->
<article class="p-branch c-grid">
    <div class="p-branch--menu p-container__take-out">
        <h2 class="c-title__sub">
        <?php
            // 指定したカテゴリーの ID を取得
            $category_id = get_cat_ID( 'Take Out' );
            // このカテゴリーの URL を取得
            $category_link = get_category_link( $category_id );
        ?>
            <!-- このカテゴリーへのリンクを出力 -->
            <a href="<?php echo esc_url( $category_link ); ?>" title="Take Out">Take Out</a>
        </h2>
            
            <span class="c-line p-branch--menu__line"></span>
                <div class="c-grid">
                <?php
    //$argsのプロパティを変更することでカスタマイズ
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 2,//表示する枚数。
        'no_found_rows'  => true,  //ページャー利用時はfalseに。
        'orderby' => 'rand' //ランダム表示
    );

    $wp_query = new WP_Query( $args );
    if ( $wp_query -> have_posts() ) :
        while ( $wp_query -> have_posts() ) : $wp_query -> the_post();?>
        <!-- ループ処理 -->
        <div class="p-branch--menu__box">
                        <h3 class="c-title__in"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3><a href="#">
                        <p class="p-branch__sub"><?php the_excerpt(); ?>
                        </p></a>
                    </div>
<?php
        endwhile; 
    else: ?>     <!-- ループ処理の内容がない時 -->
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

<?php    endif;
    wp_reset_postdata();
?>
            
                    
                </div>
        </div>
        <div class="p-branch--menu p-container__eat-in">        
            <h2 class="c-title__sub">
                <?php
                    // 指定したカテゴリーの ID を取得
                    $category_id = get_cat_ID( 'Eat In' );
                    // このカテゴリーの URL を取得
                    $category_link = get_category_link( $category_id );
                ?>
                    <!-- このカテゴリーへのリンクを出力 -->
                    <a href="<?php echo esc_url( $category_link ); ?>" title="Eat In">Eat In</a>
            </h2>
            <span class="c-line p-branch--menu__line"></span>
            <div class="c-grid">
                <?php
    //$argsのプロパティを変更することでカスタマイズ
    $args = array(
        'post_type'      => 'post', 
        'posts_per_page' => 2,
        'no_found_rows'  => true,  //ページャー利用時はfalseに。
        'orderby' => 'rand' //ランダム表示
    );

    $wp_query = new WP_Query( $args );
    if ( $wp_query -> have_posts() ) :
        while ( $wp_query -> have_posts() ) : $wp_query -> the_post();?>
                    <!-- ループ処理 -->
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in"><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </h3>
                    <a href="#">
                        <p class="p-branch__sub"><?php the_excerpt(); ?>
                        </p></a>
                    </div>
<?php
        endwhile;
    else: ?>      <!-- ループ処理の内容がない時 -->
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

<?php   endif;
    wp_reset_postdata();
?>
            </div>       
        </div>
</article>            

<!-- マップ -->
    <section class="p-access c-grid ">
        <div class="c-map__light"></div>
        <div class="c-map__strong"></div>
        
        <h2 class="c-title__map" ><a href="
        <?php echo esc_url (home_url('/access'));?>"><?php
    $page_id = get_page_by_path('access'); //固定ページのスラッグ名を入れます 
    $page = get_post( $page_id );
    echo $page -> post_title; //タイトルを取得したい時
    ?></a>
    </h2>
        <span class="c-line__access"></span>
        <p class="p-access__text" >
        <?php     
    echo $page -> post_excerpt;  //抜粋文を取得したい時
    ?>
    </p>
    </section>
</main>


<?php get_footer(); ?>



