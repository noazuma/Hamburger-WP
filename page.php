<!-- ヘッダー -->
<?php get_header(); ?>
<!-- サイドバー -->

<!-- メイン画像 -->
<?php
    if(have_posts()):  
        while(have_posts()):
            the_post(); ?>

<main class="l-main">
<!-- メイン画像 -->
    <div class="p-front--single">
    <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('full',array('class' => 'p-front__img')); ?>
        <?php else: ?>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/main/single-br-pc.svg" alt="チーズバーガー" />
<?php endif; ?>
            <h1 class="p-front--top"><?php wp_title(''); ?>
            </h1>
    </div> 
    <article <?php $post_id = get_the_ID(); ?><? post_class ('p-article p-container p-container--single');?>>
    <?php the_content(); ?>
    </article>
    
</main>

<?php endwhile;
    else:
?><p>表示する記事がありません</p>
<?php endif; ?>
<?php get_footer(); ?>
    


