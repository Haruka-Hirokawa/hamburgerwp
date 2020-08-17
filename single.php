<?php get_header(); ?>

            <?php if(have_posts()): while(have_posts()): the_post(); ?>

            <div class="p-topimage03">
            <?php if(has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?> 
                    <?php } else { ?>
                         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/noimage.png" alt="no-image">
                    <?php } ?>
                <h1 class="p-topimage01__title"><?php the_title(); ?></h1>
            </div>

            <div class="p-editor-style">
                <?php the_content(); ?>
            </div>

            <?php $args = array (
                'before' => '<div class="page-split">',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
                );
                wp_link_pages( $args );
            ?>
            
            <?php endwhile; else: ?>
                <p>お探しの商品の詳細はありません</p>
            <?php endif; ?>
            
        </div><!-- .l-main -->

        <!-- サイドバー -->
        <?php get_sidebar(); ?>


    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?>