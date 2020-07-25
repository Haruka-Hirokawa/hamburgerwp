        <div class="l-sidebar" id="sidebar">

            <!-- スマホ画面でサイドバーを閉じるボタン -->
            <button class="l-sidebar-button--close" id="sidebar-button--close">
                <i class="fas fa-times fa-3x"></i>
            </button>
            

            <h2 class="l-sidebar__title">Menu</h2>


            <?php wp_nav_menu(); ?>
            
            
        </div><!-- .l-sidebar -->

        <!-- スマホ画面 サイドバー出現時 モーダル部分（body部分を透過） -->
        <div class="l-sidebar-background" id="sidebar-background"></div>