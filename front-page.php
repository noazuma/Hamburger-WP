<?php get_header(); ?>
<!-- メイン画像 -->
<main class="l-main">
    <div class="p-front--main">
        
        <h2 class="p-front__title"><?php bloginfo( 'description' ); ?></h2>

    </div> 
<!--メニュー -->
<article class="p-branch c-grid">
    <div class="p-branch--menu p-container__take-out">
        <h2 class="c-title__sub"><a  href="<?php echo esc_url( get_category_link( 6 ) ); ?>">
        <?php                            
        $category = get_the_category();
        $cat_name = $category[1]->cat_name;
        echo $cat_name;
        ?>
        </h2>
            
            <span class="c-line p-branch--menu__line"></span>
            <?php
                //$argsのプロパティを変えていく
                $args = array(
                    'post_type' => 'post', 
                    'posts_per_page' => 1,
                    'orderby' => 'rand' //ランダム表示
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
    
                        /* ループ内の記述 */

    endwhile;
endif;
wp_reset_postdata();
?>
                <div class="c-grid">
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3><a href="#">
                        <p class="p-branch__sub"><?php echo category_description(6); ?>
                        </p></a>
                    </div>
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in"><a href="<?php the_permalink(46); ?>">
                        <?php echo get_the_title( 46 ); ?>

                    </h3><a href="#">
                        <p class="p-branch__sub">
                        
                        <?php echo category_description(6); ?>
                        </p></a>
                    </div>
                </div>
        </div>
                
        <div class="p-branch--menu p-container__eat-in">        
            <h2 class="c-title__sub">
            <a  href="<?php echo esc_url( get_category_link( 5 ) ); ?>">
            <? $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                echo $cat_name;
            ?>
            </h2>
            <span class="c-line p-branch--menu__line"></span>
                <div class="c-grid">
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in"><a href="<?php the_permalink(23); ?>">
                        <?php echo get_the_title( 23 ); ?>
                    </h3>
                    <a href="#">
                        <p class="p-branch__sub"><?php echo category_description(5); ?>
                        </p></a>
                    </div>
                    <div class="p-branch--menu__box">
                        <h3 class="c-title__in"><a href="<?php the_permalink(40); ?>">
                        <?php echo get_the_title( 40 ); ?>
                    </h3>
                    <a href="#">
                        <p class="p-branch__sub"><?php echo category_description(5); ?>
                        </p></a>
                    </div>
                </div>       

    </div>
</article>            
<!-- マップ -->
    <section class="p-access c-grid ">
        <div class="c-map__light"></div>
        <div class="c-map__strong"></div>
        
        <h2 class="c-title__map" ><a href="
        <?php echo home_url('/access');?>"><?php
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



