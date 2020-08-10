<?php get_header(); ?>

            <?php if(have_posts()): while(have_posts()): the_post(); ?>

            <div class="p-topimage03">
            <?php if(has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?> 
                    <?php } else { ?>
                         <img src="<?php bloginfo('template_url'); ?>/images/noimage.png" alt="no-image">
                    <?php } ?>
                <h1 class="p-topimage01__title"><?php the_title(); ?></h1>
            </div>

            <div class="p-editor-style">
                <?php the_content(); ?>
            </div>
            
            <?php endwhile; else: ?>
            <?php endif; ?>
            
        </div><!-- .l-main -->

        <!-- サイドバー -->
        <?php get_sidebar(); ?>


    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?>


    
    <!-- post-template-default single single-post postid-18 single-format-standard logged-in admin-bar  customize-support -->

    <!-- page-template-default page page-id-17 logged-in admin-bar  customize-support -->

    <!-- wp-admin wp-core-ui js post-php auto-fold admin-bar post-type-post branch-5-4 version-5-4-2 admin-color-fresh locale-ja block-editor-page is-fullscreen-mode wp-embed-responsive customize-support svg sticky-menu -->


    <!-- home blog logged-in admin-bar  customize-support -->

    <!-- archive category category-takeout category-3 logged-in admin-bar  customize-support -->