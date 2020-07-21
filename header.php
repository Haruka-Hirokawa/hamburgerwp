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
                
                <h1 class="l-header__sitename">Hamburger</h1>

                <form action="#" method="get" name="searchform" id="searchform" class="l-header__searchform">
                    <input type="search" name="s" value="" name="keywords" id="keywords" class="l-header__searchform__keywords">
                    <label for="keywords">検索ワード<!-- ←labelの内容 省略不可 --></label>
                    <!-- ↑label for…文字列“検索ワード”が何なのかをブラウザに教える -->
                    
                    <input type="submit" value="検索" name="searchbutton" id="searchbutton" class="l-header__searchform__searchbutton">
                    <label for="searchbutton">検索ボタン<!-- ←labelの内容 省略不可 --></label>
                    <!-- ↑label for…文字列“検索ボタン”が何なのかをブラウザに教える -->
                </form>
                
            </header>