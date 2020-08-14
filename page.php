<?php get_header(); ?>

            <div class="p-topimage03">
                <img src="<?php bloginfo('template_url'); ?>/images/PCpage_title.jpg" alt="ショップ">
                <h1 class="p-topimage01__title"><?php the_title(); ?></h1>
            </div>

            <?php if(have_posts()): while(have_posts()): the_post(); ?>

            <div class="p-editor-style">
                <?php the_content(); ?>
            </div>

            <?php endwhile; else: ?>
                <p>お探しのページはありません</p>
            <?php endif; ?>
            
        </div> <!-- .l-main -->

        <!-- サイドバー -->
        <?php get_sidebar(); ?>


    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?>