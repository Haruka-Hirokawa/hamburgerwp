<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
    <!-- <link rel="stylesheet" href="css/hamburger.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://kit.fontawesome.com/22e109cfd0.js" crossorigin="anonymous"></script> -->
    

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <!-- .l-main(ヘッダーからフッターの前までの部分)＋.l-sidebar(サイドバー部分)をグルーピング -->
    <div class="l-container">        

        <div class="l-main">
            <header class="l-header">
                <!-- メニューボタン（サイドバー表示用） -->
                <button class="l-sidebar-button--open" id="sidebar-button--open"><h2>Menu</h2></button>
                
                <h1 class="l-header__sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>


                <!-- 検索フォーム -->
                <?php get_search_form(); ?>

                
            </header>