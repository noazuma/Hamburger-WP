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
                        <p class="p-branch__sub"><?php echo category_description(6); ?>
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
        <h2 class="c-title__map"><?php echo get_the_title( 198 ); ?></h2>
        <span class="c-line__access"></span>
        <div class="p-access__text" >
        <?php
    $page = get_post( 198 );//「198」はページID
    echo $page->post_content;
?>
        </div>
    </section>
</main>


<?php get_footer(); ?>



