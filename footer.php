        <footer class="l-footer p-footer">
            
            
            <div>   
                <?php
                wp_nav_menu(
                    array(
                        'container' => 'false', //divタグ削除
                        'theme_location' => 'footer-menu', //表示するメニュー名を指定
                        'items_wrap' => '<ul class="p-footer__shop" %3$s</ul>', //ul要素のID,classを非表示
                        )
                    );
                ?>
                    <!-- <li><a class="p-footer__shop" href="#">ショップ情報</a></li>
                    <spen class="c-line--footer p-partition"></spen> 
                    <li><a class="p-footer__shop" href="#">ヒストリー</a></li> -->
                

            <p class="p-footer__cp">Copyright: RaiseTech</p>
                </div> 
        </footer>  
        
    <?php get_sidebar(); ?>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>