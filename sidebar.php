
<sidebar class="l-sideber">
    
    <h2 class="c-button--menu c-close__menu">Menu</h2>
    <button class="c-button__close c-close__bt">
<!-- ばつ印 -->
        <span class="c-line__menu1 c-close__bt"></span>
        <span class="c-line__menu2 c-close__bt"></span>
    </button>
    <nav class="p-nav"> 
    <!-- <ul class="c-padding__bottom"> -->
    <?php 
    wp_nav_menu( array( 
    'theme_location' => 'main-menu',
    'container' => '',
    'container_id' => '',
    'container_class' => '',
    'items_wrap'   => '<ul>%3$s</ul>',
    'menu_class' => 'p-sidemenu__main',
    'walker' => new custom_walker_main_menu,

    ) ); 
?>
    
</nav>
</sidebar>
