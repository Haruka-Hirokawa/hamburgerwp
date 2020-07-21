<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/hamburger.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/22e109cfd0.js" crossorigin="anonymous"></script>
    
    <title>ハンバーガーサイト</title>
</head>


<body>
    <!-- .l-main(ヘッダーからフッターの前までの部分)＋.l-sidebar(サイドバー部分)をグルーピング -->
    <div class="l-container">        

        <div class="l-main">
            <header class="l-header">
                <!-- メニューボタン（サイドバー表示用） -->
                <button class="l-sidebar-button--open" id="sidebar-button--open"><h2>Menu</h2></button>
                
                <p class="l-header__sitename">Hamburger</p>

                <form action="#" method="get" name="searchform" id="searchform" class="l-header__searchform">
                    <input type="search" name="s" value="" name="keywords" id="keywords" class="l-header__searchform__keywords">
                    <label for="keywords">検索ワード<!-- ←labelの内容 省略不可 --></label>
                    <!-- ↑label for…文字列“検索ワード”が何なのかをブラウザに教える -->
                    
                    <input type="submit" value="検索" name="searchbutton" id="searchbutton" class="l-header__searchform__searchbutton">
                    <label for="searchbutton">検索ボタン<!-- ←labelの内容 省略不可 --></label>
                    <!-- ↑label for…文字列“検索ボタン”が何なのかをブラウザに教える -->
                </form>
                
            </header>

            <div class="p-topimage01">
                <img src="images/SPsingle_title.jpg" class="p-topimage01--sp" alt="スマホ用タイトル画像">
                <img src="images/PCsingle_title.jpg" class="p-topimage01--pc" alt="パソコン用タイトル画像">
                <h1 class="p-topimage01__title">h1 チーズバーガー</h1>
            </div>

            <div class="p-heading">
                <h2>見出しh2</h2>
                <p>pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。</p>

                <h3>見出しh3</h3>
                <h4>見出しh4</h4>
                <h4>見出しh3</h4>
                <h4>見出しh4</h4>
                <h4>見出しh5</h4>
                <h4>見出しh6</h4>
            </div>

            <div class="c-quote">
                <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>

                <p>出典元：<a href="#">◯◯◯◯◯◯◯◯◯◯</a></p>
            </div>

            <div class="c-img--large">
                <img src="images/PCsingle_contents.jpg" alt="ハンバーガーとフライドポテト">
            </div>
            

            <div class="c-gridContents">
                <div class="c-gridContents__picture">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridContents__text">
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                
            </div>

            <div class="c-gridContents">
                <div class="c-gridContents__text">
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="c-gridContents__picture">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                
            </div>

            <div class="c-img--small">
                <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
            </div>

            <div class="c-gridImages">
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
                <div class="c-gridImages__image">
                    <img src="images/PCsingle_gridcontents.jpg" alt="ハンバーガーとフライドポテト">
                </div>
            </div>

            <div class="c-list">
                <ol>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト
                        <ol>
                            <li>リスト2リスト2リスト2</li>
                            <li>リスト2リスト2リスト2</li>
                        </ol>
                    </li>
                    <li value="1">リストリストリスト</li> <!-- リストの番号を途中で変更 -->
                    <li>リストリストリスト</li>
                </ol>
            </div>

            <div class="c-list">
                <ul>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト
                        <ul>
                            <li>リスト2リスト2リスト2</li>
                            <li>リスト2リスト2リスト2</li>
                        </ul>
                    </li>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
            </div>

            <div class="c-tag">
                <!-- ↓タグを表示するための特殊文字。< は &lt; 、> は &gt; -->
                <p>&lt;html&gt;</p>
                <p>　&lt;head&gt;</p>
                <p>　&lt;head&gt;</p>
                <p>　&lt;body&gt;</p>
                <p>　&lt;body&gt;</p>
                <p>&lt;/html&gt;</p>
            </div>

            <table class="c-table" border="1" style="border-collapse: collapse"><!-- border属性 1→二重線になる、style属性を使って二重線を一つの線に変える -->            
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
            </table>

            <input type="submit" value="ボタン" name="button" id="button" class="c-button">
            <label for="button" class="c-button-label">ボタン</label>

            <p class="bold">boldboldboldboldboldbold</p>
            
        </div><!-- .contents_group -->

        <!-- サイドバー -->
        <div class="l-sidebar" id="sidebar">

            <!-- スマホ画面でサイドバーを閉じるボタン -->
            <button class="l-sidebar-button--close" id="sidebar-button--close">
                <i class="fas fa-times fa-3x"></i>
            </button>
            

            <h2 class="l-sidebar__title">Menu</h2>

            <ul class="p-globalmenu">
                <li class="p-globalmenu__list">
                    <h3>バーガー</h3>
                    <ul class="p-globalmenu__list__detail">
                        <li><a href="#">ハンバーガー</a></li>
                        <li><a href="#">チーズバーガー</a></li>
                        <li><a href="#">テリヤキバーガー</a></li>
                        <li><a href="#">アボガドバーガー</a></li>
                        <li><a href="#">フィッシュバーガー</a></li>
                        <li><a href="#">ベーコンバーガー</a></li>
                        <li><a href="#">チキンバーガー</a></li>
                    </ul>
                </li>
                <li class="p-globalmenu__list">
                    <h3>サイド</h3>
                    <ul class="p-globalmenu__list__detail">
                        <li><a href="#">ポテト</a></li>
                        <li><a href="#">サラダ</a></li>
                        <li><a href="#">ナゲット</a></li>
                        <li><a href="#">コーン</a></li>
                    </ul>
                </li>
                <li class="p-globalmenu__list">
                    <h3>ドリンク</h3>
                    <ul class="p-globalmenu__list__detail">
                        <li><a href="#">コーラ</a></li>
                        <li><a href="#">ファンタ</a></li>
                        <li><a href="#">オレンジ</a></li>
                        <li><a href="#">アップル</a></li>
                        <li><a href="#">紅茶(Ice/Hot)</a></li>
                        <li><a href="#">コーヒー(Ice/Hot)</a></li>
                        </ul>
                </li>
            </ul> <!-- .p-globalmenu -->
        </div><!-- .l-sidebar -->

        <!-- スマホ画面 サイドバー出現時 モーダル部分（body部分を透過） -->
        <div class="l-sidebar-background" id="sidebar-background"></div>
        
    </div> <!-- .contents_group_wrapper -->
    
    
    <footer class="l-footer">
        <ul>
            <li><a href="#">ショップ情報</a></li>
            <li>|</li>
            <li><a href="#">ヒストリー</a></li>
        </ul>
        <div class="l-footer__copyright">
            <p><small>&copy; Raise Tech</small></p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>