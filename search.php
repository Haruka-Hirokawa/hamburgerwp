<?php get_header(); ?>

            
            <div class="p-topimage02">
                <img src="<?php bloginfo('template_url'); ?>/images/PCarchive_title.jpg" alt="ハンバーガーとオニオンリング">
                <?php if(is_category()) : ?>
                <h1 class="p-topimage02__title">Menu:<br><span><?php single_cat_title(); ?></span></h1>
                <? endif; ?>
            </div>
            

            <div class="p-lead">
                <h2>小見出しが入ります</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>


            
            <?php if (have_posts()): ?>
            <?php
            if (isset($_GET['s']) && empty($_GET['s'])) {
                echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
            } else {
                echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
            }
            ?>
            <ul>
            <?php while(have_posts()): the_post(); ?>
            <li>
            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </li>
            <?php endwhile; ?>
            </ul>
            <?php else: ?>
            検索されたキーワードにマッチする記事はありませんでした
            <?php endif; ?>
             


            <div class="p-pagination--sp">
                <button>＜＜ 前へ</button>
                <button>次へ ＞＞</button>
            </div>

            
            
            <?php if(function_exists("wp_pagenavi")): ?>
            <?php wp_pagenavi(); ?>
            <?php else: ?>
            <?php endif; ?>

            
        </div><!-- .l-main -->


        <!-- サイドバー -->
        <?php get_sidebar(); ?>
        

    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?> 