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


        <!-- <div class="menu-cateogrymenu-container">
            <ul id="menu-cateogrymenu" class="p-globalmenu">
                <li id="menu-item-12" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12"><a href="#">バーガー</a>
                    <ul class="sub-menu">
	                    <li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-82"><a href="#">ハンバーガー</a></li>
	                    <li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-80"><a href="#">チーズバーガー</a></li>
	                    <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-81"><a href="#">テリヤキバーガー</a></li>
	                    <li id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-88"><a href="#">アボカドバーガー</a></li>
	                    <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-97"><a href="#">フィッシュバーガー</a></li>
	                    <li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-84"><a href="#">月見バーガー</a></li>
	                    <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-98"><a href="#">ベーコンバーガー</a></li>
	                    <li id="menu-item-95" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-95"><a href="#">チキンバーガー</a></li>
                    </ul>
                </li>
                <li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-14"><a href="#">サイド</a>
                    <ul class="sub-menu">
                        <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-83"><a href="#">フライドポテト</a></li>
                        <li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-94"><a href="#">サラダ</a></li>
                        <li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-96"><a href="#">ナゲット</a></li>
                        <li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-93"><a href="#">コーン</a></li>
                    </ul>
                </li>
                <li id="menu-item-13" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-13"><a href="#">ドリンク</a>
                    <ul class="sub-menu">
                        <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-92"><a href="#">コーラ</a></li>
                        <li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-89"><a href="#">オレンジ</a></li>
                        <li id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-87"><a href="#">アップル</a></li>
                        <li id="menu-item-90" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-90"><a href="#">グレープ</a></li>
                        <li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-99"><a href="#">紅茶（Ice/Hot）</a></li>
                        <li id="menu-item-91" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-91"><a href="#">コーヒー（Ice/Hot）</a></li>
                    </ul>
                </li>
            </ul> .p-globalmenu
        </div> -->