        <footer class="l-footer">
            
            <div>
                <ul class="p-footer">
                <?php
                wp_nav_menu(
                    array(
                        'container' => 'false', //divタグ削除
                        'theme_location' => 'footer-menu', //表示するメニュー名を指定
                        'items_wrap' => '<li class="p-footer__shop">%3$s</li>', //li要素のID,classを非表示
                        )
                    );
            ?>
                    <!-- <li><a class="p-footer__shop" href="#">ショップ情報</a></li>
                    <spen class="c-line--footer p-partition"></spen> 
                    <li><a class="p-footer__shop" href="#">ヒストリー</a></li> -->
                </ul>

                <p class="p-footer__cp">Copyright: RaiseTech</p>
            </div>
        </footer>  
        
    </div>
    <?php get_sidebar(); ?>
    <?php wp_footer(); ?>
    </body>
</html>