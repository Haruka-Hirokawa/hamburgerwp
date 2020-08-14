            <ul>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>                   
                <li class="c-card">
                    <?php if(has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail('', array('class' => 'c-card__img')); ?> 
                    <?php } else { ?>
                         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/noimage.png" alt="no-image" class="c-card__img">
                    <?php } ?>                                           
                                            
                    <dl class="c-card__contents">
                        <dt><?php the_title(); ?></dt>
                        <dd><?php the_excerpt(); ?></dd>
                        <button type="button" onclick="location.href='<?php the_permalink(); ?>'" class="c-card__contents__button">詳しく見る</button>
                    </dl>
                    
                </li>       
                <?php endwhile; else: ?>
                <p>お探しの商品は見つかりませんでした</p>
                <?php endif; ?>           
            </ul>