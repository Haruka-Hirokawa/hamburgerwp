<?php
    
    register_nav_menu( 'cateogry-menu','Cateogry Menu'); // １つのメニューバー表示

    add_theme_support( 'title-tag' ); // <title>タグを<head>タグに挿入
    
    function humburger_title($title) {
        if(is_front_page() && is_home()){
            $title = get_bloginfo('name','display');
        }elseif(is_singular()){
            $title = single_post_title('',false);
        }
        return $title;
    }
    add_filter('pre_get_document_title','humburger_title' );


    add_theme_support( 'post-thumbnails' );


    function hamburger_script() {
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto&display=swap', array() );
        wp_enqueue_style( 'M_PLUS_1p', '///fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500&display=swap', array() );
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css', array(), '5.14.0');
        wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array() );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );


        wp_deregister_script( 'jquery'); //WordPress 本体の jQuery を登録解除
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' , "", "3.4.1", true );
        wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );


    // アイキャッチ画像のimgタグへのサイズ指定を削除
    add_filter( 'post_thumbnail_html', 'custom_attribute' );
    function custom_attribute( $html ){
        $html = preg_replace('/(width|height)="\d*"\s/', '', $html); // width height を削除する
        return $html;
    }


    remove_filter( 'pre_term_description', 'wp_filter_kses' ); // カテゴリー、タグの説明文でhtmlを使えるようにする
    

    // Gutenberg用のCSSを読み込み、ビジュアルエディターを見やすくする
    add_action( 'enqueue_block_editor_assets', 'gutenberg_stylesheets_custom_demo' );
    function gutenberg_stylesheets_custom_demo() {
        //現在適用しているテーマのeditor-style.cssを読み込む
        $editor_style_url = get_theme_file_uri('/css/editor-style.css');
        wp_enqueue_style( 'theme-editor-style', $editor_style_url );
    }


    // テーマチェック：コンテンツの幅が定義されていません。
    if ( ! isset( $content_width ) ) $content_width = 525;


    // テーマチェック→「見つかりません」のエラー
    add_theme_support( 'automatic-feed-links' ) ;

    