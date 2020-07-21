                <form class="l-header__searchform" name="searchform" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
                    <input class="l-header__searchform__keywords" type="search" value="" name="s" id="s" >
                    <label for="keywords">検索ワード<!-- ←labelの内容 省略不可 --></label>
                    <!-- ↑label for…文字列“検索ワード”が何なのかをブラウザに教える -->
                    
                    <input class="l-header__searchform__searchbutton" type="submit" value="検索" name="searchbutton" id="searchbutton">
                    <label for="searchbutton">検索ボタン<!-- ←labelの内容 省略不可 --></label>
                    <!-- ↑label for…文字列“検索ボタン”が何なのかをブラウザに教える -->
                </form>