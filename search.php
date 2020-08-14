<?php get_header(); ?>

            
            <div class="p-topimage02">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/PCarchive_title.jpg" alt="ハンバーガーとオニオンリング">
                <h1 class="p-topimage02__title">Search:<br><span><?php the_search_query(); ?></span></h1><!-- 検索結果ページに検索文字列を表示 -->
            </div>
            

            <div class="p-lead">
                <?php echo category_description(); ?>
            </div>


            <?php get_template_part("components/archive-article"); ?>
            

            <div class="p-pagination--sp">
                <button><?php next_posts_link('＜＜ 前へ'); ?></button>
                <button><?php previous_posts_link('次へ ＞＞'); ?></button>
            </div>

            
            <div class="p-pagination--tablet">
                <?php if(function_exists("wp_pagenavi")): ?>
                <?php wp_pagenavi(); ?>
                <?php else: ?>
                <?php endif; ?>
            </div>

            
        </div><!-- .l-main -->


        <!-- サイドバー -->
        <?php get_sidebar(); ?>
        

    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?> 