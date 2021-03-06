<?php get_header(); ?>


            <div class="p-topimage01">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SPfrontpage_title.jpg" class="p-topimage01--sp" alt="スマホ用タイトル画像">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/PCfrontpage_title.jpg" class="p-topimage01--pc" alt="パソコン用タイトル画像">
                <h2 class="p-topimage01__title">ダミーサイト</h2>
            </div>

            <div class="p-branchmenu">
                <ul>
                    <li class="p-branchmenu__list">
                        <a href="<?php echo get_category_link( '3' ); ?>">                                                   
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/PCfrontpage_takeout.jpg" alt="ハンバーガー３つとフライドポテト">                           
                            <h2>Take Out<br>－</h2>
                            <dl class="p-branchmenu__list__contents01">
                                <dt>小見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </dd>                                    
                            </dl>
                            <dl class="p-branchmenu__list__contents02">
                                <dt>小見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </dd>
                            </dl>
                        </a>
                    </li>
            
                    <li class="p-branchmenu__list">
                        <a href="<?php echo get_category_link( '2' ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/PCfrontpage_eatin.jpg" alt="ベーコンバーガーとフライドポテト">
                            <h2>Eat In<br>－</h2>
                            <dl class="p-branchmenu__list__contents01">
                                <dt>小見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </dd>
                            </dl>
                            <dl class="p-branchmenu__list__contents02">
                                <dt>小見出しが入ります</dt>
                                <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </dd>
                            </dl>
                        </a>
                    </li>
                </ul>
            </div> <!-- .p-branchmenu -->
            
            <section class="p-access">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/PCfrontpage_map.jpg" alt="地図">
                <div class="p-access__contents">
                    <h2>見出しが入ります<br>－</h2>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
            </section>

        </div><!-- .l-main -->
        

        <!-- サイドバー -->
        <?php get_sidebar(); ?>


    </div> <!-- .l-container -->
    
    
    <?php get_footer(); ?> 