<?php get_header(); ?>

            
            <div class="p-topimage02">
                <img src="<?php bloginfo('template_url'); ?>/images/PCarchive_title.jpg" alt="ハンバーガーとオニオンリング">
                <?php
                    //ページ情報の取得
                    $page = get_page(get_the_ID());
                    //上で取得したページ情報からスラッグ名を取得
                    $slug = $page->post_name; //固定ページからスラッグを取得し、変数$slugに代入する
                ?>
                <h1 class="p-topimage02__title">Menu:<br><span><?php echo $slug; ?></span></h1>
            </div>
            

            <div class="p-lead">
                <h2>小見出しが入ります</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>


            
            <ul>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>                   
                <li class="c-card">                    
                    <?php the_post_thumbnail('medium'); ?>
                    <dl class="c-card__contents">
                        <dt><?php the_title(); ?></dt>
                        <dd><?php the_excerpt(); ?></dd>
                        <a href="<?php the_permalink(); ?>">
                            <button type="button" onclick="location.href='#'" class="c-card__contents__button">詳しく見る</button>
                        </a>                       
                    </dl>
                    
                </li>       
                <?php endwhile; ?>            
            </ul>
            <?php endif; ?> 




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

            <div class="p-pagination--tablet">
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
            </div>
            
        </div><!-- .l-main -->


        <!-- サイドバー -->
        <?php get_sidebar(); ?>
        

    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?> 