<?php
    
    add_theme_support( 'menus' ); // メニューバー表示

    add_theme_support( 'title-tag' ); // <title>タグを<head>タグに挿入
    
    // ページごとのタイトルタグの条件分岐タグを挿入？

    add_theme_support( 'post-thumbnails' );


    function hamburger_script() {
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto&display=swap', array() );
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css', array(), '5.14.0');
        wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array() );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );


        wp_deregister_script( 'jquery'); //WordPress 本体の jQuery を登録解除
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' , "", "3.4.1", true );
        wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );