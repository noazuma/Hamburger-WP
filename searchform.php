<!-- 検索フォームを表示 -->

<serach-box class="p-serach" method="get" action="<?php echo home_url('/'); ?>">
    <input type="search" name="search"  style="padding-left: 30px;" value="<?php echo get_search_query(); ?>" class="p-serach__box c-icon" name="s" id="s">
    <input type="submit" value="検索" class="c-button--submit"></input>
</form>
</serach-box>