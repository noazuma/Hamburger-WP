<!-- 検索フォームを表示 -->

<serach-box class="p-serach" method="get" action="<?php echo home_url('/'); ?>">
<form>
    <input type="search" name="s"  style="padding-left: 30px;" value="<?php the_search_query(); ?>" class="p-serach__box c-icon" name="s" id="s">
    <input type="submit" value="検索" class="c-button--submit"></input>
</form>
</serach-box>