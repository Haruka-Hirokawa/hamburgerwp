<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- WordPressにログインしている時のみ、ページ最上部に余白を作り、ヘッダー・サイドバーと管理バー（admin-bar）とが重ならないようにする -->
    <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
    .l-header, .l-sidebar {
        margin-top: 3.2rem;
    }
    </style>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <!-- .l-main(ヘッダーからフッターの前までの部分)＋.l-sidebar(サイドバー部分)をグルーピング -->
    <div class="l-container">        

        <div class="l-main">
            <header class="l-header">
                <!-- メニューボタン（サイドバー表示用） -->
                <button class="l-sidebar-button--open" id="sidebar-button--open"><h2>Menu</h2></button>
                
                <?php if( is_home() || is_front_page() ) : ?>
                    <h1 class="l-header__sitename"><?php bloginfo( 'name' ); ?></h1>
                <?php else : ?>
                    <p class="l-header__sitename"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>


                <!-- 検索フォーム -->
                <?php get_search_form(); ?>

                
            </header>