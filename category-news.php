
<?php get_header('page'); ?>

<div class="ptitle page-title7">
    <section>
        <h2>お知らせ</h2>
        <small>NEWS</small> </section>
</div>
<div class="container">
    <nav>
        <ol class="breadcrumb mt20">
            <li><a href="<?php echo home_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li>お知らせ</li>
        </ol>
    </nav>
</div>
<!--container-->

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="title5">お知らせ</h3>
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                ?>

                    <div class="newslist">
                        <dl>
                            <dt><span class="label4">お知らせ</span> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php the_time('Y年m月d日');?></dt>
                            <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                        </dl>
                        <p><?php the_excerpt();?><a href="<?php the_permalink();?>">続きを読む</a></p>
                    </div>
                    <!--newslist-->


<?php
                endwhile;
            else:

echo 'ページがみつかりませんでした。';
            endif;
            ?>



            <div class="pager">
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
        </div>

<?php get_sidebar(); ?>
</div>
<!--row-->
</div>
<!--container-->


<?php get_footer(); ?>
