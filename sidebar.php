<div class="col-md-4">
    <div class="side-bar">
        <h4><i class="fa fa-pencil" aria-hidden="true"></i> 新着記事</h4>
        <div class="side-list">
            <ul>
                <?php
                if(in_category(array('paint', 'waterproof', 'otherwork'))){
                  $categoryname = get_the_category();
                  query_posts( array('category_name' => $categoryname[0]->slug, 'posts_per_page' => 5));
                } else {
                  query_posts('posts_per_page=5');
                }

                ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $category = get_the_category();
                    $cat_id   = $category[0]->cat_ID;
                    $cat_name = $category[0]->cat_name;
                    $cat_slug = $category[0]->category_nicename;
                    ?>

                    <li>
                    <dl>
                        <dt><span class="<?php echo $cat_slug;?> <?php echo ($cat_slug == 'news') ? 'label4' : 'label5'; ?>"><?php echo $cat_name;?></span> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php the_time('Y年m月d日');?></dt>
                        <dd>
                            <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                        </dd>
                    </dl>
                </li>
                <?php endwhile;?>
            </ul>
        </div>
        <!--side-list-->

        <h4><i class="fa fa-pencil" aria-hidden="true"></i> カテゴリー</h4>
        <div class="side-list2">
            <ul>
                <li> <a href="/category/waterproof/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 防水工事</a></li>
                <li> <a href="/category/paint/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 塗装工事</a></li>
                <li> <a href="/category/otherwork/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> その他工事</a></li>
                <li> <a href="/category/news/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> お知らせ</a></li>
            </ul>
        </div>
        <!--side-list2-->

        <h4><i class="fa fa-pencil" aria-hidden="true"></i> アーカイブ</h4>
        <div class="side-list2">
            <ul>
                <?php wp_get_archives('limit=12'); ?>
            </ul>
        </div>
        <!--side-list2-->

    </div>
    <!--side-bar--> <strong></strong> </div>
