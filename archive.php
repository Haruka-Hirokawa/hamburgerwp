<?php get_header(); ?>

            
            <div class="p-topimage02">
                <img src="<?php bloginfo('template_url'); ?>/images/PCarchive_title.jpg" alt="ハンバーガーとオニオンリング">
                <?php if(is_category()) : ?>
                <h1 class="p-topimage02__title">Menu:<br><span><?php single_cat_title(); ?></span></h1>
                <? endif; ?>
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