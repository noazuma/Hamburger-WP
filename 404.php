<!-- 404.php -->

<?php get_header(); ?>
<div>
<h2>404 Not Found（ページが見つかりませんでした）</h2>
<p>指定された以下のページは存在しないか、または移動した可能性があります。</p>

<h2><a href="<?php echo esc_url (home_url( '/' )); ?>">トップページへ戻る</a></h2>

</div>


<?php get_footer(); ?>