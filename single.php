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

            <?php the_content(); ?>
            
            <?php endwhile; else: ?>
            <?php endif; ?>
            
        </div><!-- .l-main -->

        <!-- サイドバー -->
        <?php get_sidebar(); ?>


    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?>


    <!-- <img src="http://hamburgerwp.local/wp-content/uploads/2020/07/side_potate.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="フライドポテト" srcset="http://hamburgerwp.local/wp-content/uploads/2020/07/side_potate.jpg 640w, http://hamburgerwp.local/wp-content/uploads/2020/07/side_potate-300x200.jpg 300w" sizes="(max-width: 640px) 100vw, 640px"> -->