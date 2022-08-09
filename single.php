<?php get_header(); ?>

<!-- サイドバー -->

<?php
    if(have_posts()):  //投稿データがあるかの条件分岐
        while(have_posts()):  //表示する投稿データがあれば繰り返し処理開始
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
    <!-- <h2 class="c-single c-title__single">見出しh2 -->
                    <!-- <p class="c-text--single">Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        Pタグテキスト。Pタグテキスト。
                    </p>
                </h2> -->
            <!-- <div class="c-single c-title__single">
                <h3 class="c-margin">見出しh3</h3>
                <h4 class="c-margin">見出しh4</h4>
                <h5 class="c-margin">見出しh5</h5>
                <h6 class="c-margin">見出しh6</h6>
            </div>
        <blockquote class="c-margin  c-margin--bottom p-quotation">
                <p class="c-margin--bottom c-text p-quotation__text">
                    Blockquote 引用タグ引用タグ引用タグ引用タグ
                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タ
                    グ引用タグ引用タグ引用タグ引用タグ引用タグ引用
                    タグ引用タグ引用タグ引用タグ引用タグ引用タグ引
                    用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タ
                    グ引用タグ引用タグ引用タグ引用タグ引用タグ引用
                    タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用
                    タグ引用タグ引用タグ引用タグ引用タグ引用タグ引
                    用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タ
                    グ引用タグ引用タグ引用タグ引用タグ引用タグ引
                    用タグ引用タグ引用タグ引用タグ引用タグ引用タ
                    グ引用タグ引用タグ引用タグ引用タグ引用タグ引
                    用タグ引用タグ引用タグ引用タグ引用タグ引用タ
                    グ引用タグ引用タグ引用タグ引用タグ引用タグ引用
                    タグ引用タグ引用タグ引用タグ引用タグ引用タグ引
                    用タグ引用タグ引用タグ
                </p>
                <cite class=" c-text p-quotation__text"> 出典元：<a href="#">○○○○○○○○○○○○ </a> </cite>
        </blockquote>

            <img  class="c-img" src="/img/single-cheese-main.svg" alt="チーズバーガー">

        <figure class="c-card__single">
            <img  class="p-figure__img" src="/img/single-cheese-box.svg" alt="チーズバーガー">
                <p class="c-text p-figure__text">
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
        </figure>

        <figure class="c-card__single">
                <p class="c-text p-figure__text">
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
            <img  class="p-figure__img" src="/img/single-cheese-box.svg" alt="チーズバーガー">
        </figure>
        <div class="p-figure">
        <img src="/img/single-cheese-box.svg" alt="チーズバーガー" class="c-img">
        </div> 
        <figure class="c-grid c-img__grid p-figure__list">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
            <img src="/img/single-cheese-box.svg" alt="チーズバーガー">
        </figure>

        <div class="p-list c-margin">
            <ol>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ol>
            <ol>
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
            </ol>
            <ol>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ol>
        </div>

        <div class="p-list">
            <ul>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>

            <ul>
                <li>リスト2リスト2リスト2</li>
                <li>リスト2リスト2リスト2</li>
            </ul>

            <ul>
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
        </div>

    <div class="p-quotation c-margin">
    <code>
        <pre>
        &lt;html&gt;
            &lt;head&gt;
            &lt;/head&gt;
            &lt;body&gt;
            &lt;/body&gt;
        &lt;/html&gt;
        </pre>
    </code>
    </div>
    <table class="p-table c-margin">
        <tr>
            <td>テーブル</td>
            <td>テーブル</td>
        </tr>
        <tr>
            <td>テーブル</td>
            <td>テーブル</td>
        </tr>
        <tr>
            <td>テーブル</td>
            <td>テーブル</td>
        </tr>
        <tr>
            <td>テーブル</td>
            <td>テーブル</td>
        </tr>
    </table>

    <button type="button" class="c-button--single c-margin">ボタン</button>
    <p class="c-margin c-text--bold">boldboldboldboldboldboldbold</p> -->

    </article>
    
</main>

<?php endwhile;
    else:
?><p>表示する記事がありません</p>
<?php endif; ?>
<?php get_footer(); ?>
