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


            
            <ul>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>                   
                <li class="c-card">                    
                    <?php the_post_thumbnail('', array('class' => 'c-card__img')); ?>
                    <dl class="c-card__contents">
                        <dt><?php the_title(); ?></dt>
                        <dd><?php the_excerpt(); ?></dd>
                        <a href="<?php the_permalink(); ?>">
                            <button type="button" onclick="location.href='#'" class="c-card__contents__button">詳しく見る</button>
                        </a>                       
                    </dl>
                    
                </li>       
                <?php endwhile; else: ?>
                <p>表示する記事がありません</p>
                <?php endif; ?>           
            </ul>
             




            <!-- <ul>
                <li class="c-card">
                    <img src="images/PCarchive_menu.jpg" class="c-card__img" alt="チーズバーガー">
                    <dl class="c-card__contents">
                        <dt>チーズバーガー</dt>
                        <dd><p>小見出しが入ります</p>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </dd>
                        <button type="button" onclick="location.href='#'" class="c-card__contents__button">詳しく見る</button>                        
                    </dl>
                </li>
        
                <li class="c-card">
                    <img src="images/PCarchive_menu.jpg" class="c-card__img" alt="ダブルチーズバーガー">
                    <dl class="c-card__contents">
                        <dt>ダブルチーズバーガー</dt>
                        <dd><p>小見出しが入ります</p>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </dd>
                        <button type="button" onclick="location.href='#'" class="c-card__contents__button">詳しく見る</button>
                    </dl>
                </li>

                <li class="c-card">
                    <img src="images/PCarchive_menu.jpg" class="c-card__img" alt="スペシャルチーズバーガー">
                    <dl class="c-card__contents">
                        <dt>スペシャルチーズバーガー</dt>
                        <dd><p>小見出しが入ります</p>
                            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        </dd>
                        <button type="button" onclick="location.href='#'" class="c-card__contents__button">詳しく見る</button>
                    </dl>
                </li>
            </ul> -->

            <div class="p-pagination--sp">
                <button>＜＜ 前へ</button>
                <button>次へ ＞＞</button>
            </div>

            
            
            <?php if(function_exists("wp_pagenavi")): ?>
            <?php wp_pagenavi(); ?>
            <?php else: ?>
            <?php endif; ?>
            

            <!-- <div class='wp-pagenavi' role='navigation'>
                <span class='pages'>1 / 6</span>
                <span aria-current='page' class='current'>1</span>
                <a class="page larger" title="Page 2" href="http://hamburgerwp.local/category/takeout/page/2/">2</a>
                <a class="page larger" title="Page 3" href="http://hamburgerwp.local/category/takeout/page/3/">3</a>
                <a class="page larger" title="Page 4" href="http://hamburgerwp.local/category/takeout/page/4/">4</a>
                <a class="page larger" title="Page 5" href="http://hamburgerwp.local/category/takeout/page/5/">5</a>
                <span class='extend'>...</span>
                <a class="nextpostslink" rel="next" href="http://hamburgerwp.local/category/takeout/page/2/">»</a>
                <a class="last" href="http://hamburgerwp.local/category/takeout/page/6/">最後 »</a>
            </div>                         -->


            <!-- <div class="p-pagination--tablet">
                <p>page 1/10</p>
                <button class="p-pagination--tablet__pointer">＜＜</button>
                <button class="p-pagination--tablet__button">1</button>
                <button class="p-pagination--tablet__button">2</button>
                <button class="p-pagination--tablet__button">3</button>
                <button class="p-pagination--tablet__button">4</button>
                <button class="p-pagination--tablet__button">5</button>
                <button class="p-pagination--tablet__button">6</button>
                <button class="p-pagination--tablet__button">7</button>
                <button class="p-pagination--tablet__button">8</button>
                <button class="p-pagination--tablet__button">9</button>
                <button class="p-pagination--tablet__pointer">＞＞</button> 
            </div> -->
            
        </div><!-- .l-main -->


        <!-- サイドバー -->
        <?php get_sidebar(); ?>
        

    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?> 