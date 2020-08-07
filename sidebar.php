        <div class="l-sidebar" id="sidebar">

            <!-- スマホ画面でサイドバーを閉じるボタン -->
            <button class="l-sidebar-button--close" id="sidebar-button--close">
                <i class="fas fa-times fa-3x"></i>
            </button>
            

            <h2 class="l-sidebar__title">Menu</h2>


            <?php wp_nav_menu( array( 'menu_class' => 'p-globalmenu' ) ); ?>
            
            
        </div><!-- .l-sidebar -->

        <!-- スマホ画面 サイドバー出現時 モーダル部分（body部分を透過） -->
        <div class="l-sidebar-background" id="sidebar-background"></div>


        <!-- ↓ 為参考：WordPressが吐き出すクラス名 -->
        <!-- <div class="menu-cateogrymenu-container">
            <ul id="menu-cateogrymenu" class="p-globalmenu">
                <li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12"><a href="#">バーガー</a>
                    <ul class="sub-menu">
	                    <li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-82"><a href="#">ハンバーガー</a></li>
	                    <li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-80"><a href="#">チーズバーガー</a></li>
                    </ul>
                </li>
                <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-14"><a href="#">サイド</a>
                    <ul class="sub-menu">
                        <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-83"><a href="#">フライドポテト</a></li>
                        <li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-94"><a href="#">サラダ</a></li>
                    </ul>
                </li>
                <li id="menu-item-13" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-13"><a href="#">ドリンク</a>
                    <ul class="sub-menu">
                        <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-92"><a href="#">コーラ</a></li>
                        <li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-89"><a href="#">オレンジ</a></li>
                        
                    </ul>
                </li>
            </ul> .p-globalmenu
        </div> -->