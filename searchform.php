                <form class="l-header__searchform" name="searchform" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input class="l-header__searchform__keywords" type="search" value="" name="s" id="s" >
                    <label for="keywords" class="screen-reader-text"><?php echo __(' search', 'hamburgerwp' ); ?>検索ワード<!-- ←labelの内容 省略不可 --></label>
                    <!-- ↑label for…文字列“検索ワード”が何なのかをブラウザに教える -->
                    
                    <input class="l-header__searchform__searchbutton" type="submit" value="検索" name="searchbutton" id="searchbutton">
                    <label for="searchbutton" class="screen-reader-text">検索ボタン<!-- ←labelの内容 省略不可 --></label>
                    <!-- ↑label for…文字列“検索ボタン”が何なのかをブラウザに教える -->
                </form>