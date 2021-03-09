<?php get_header('page'); ?>



<div class="ptitle page-title11">
    <section>
        <h2>受注状況</h2>
        <small>ORDER SITUATION</small> </section>
</div>
<div class="container">
    <nav>
        <ol class="breadcrumb mt20">
            <li><a href="<?php echo home_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><a href="/category/orders/">受注状況</a></li>
            <li><?php the_title();?></li>
        </ol>
    </nav>
</div>
<!--container-->

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            if (have_posts()) :
            while (have_posts()) :
            the_post();
            ?>
            <h3 class="title9"><?php the_title();?></h3>
            <span class="label5">受注状況</span> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><?php the_time('Y年m月d日');?>
            <div class="postarea">
                <?php the_content();?>
            <!--postarea-->
                </div>
        <div class="mb30">

        <?php
            $previous = get_permalink(get_adjacent_post(false,'',true));
            $next = get_permalink(get_adjacent_post(false,'',false));
            $current = get_permalink();
            //                    var_dump($previous);
            //                    var_dump($next);
            //                    var_dump($current);
            ?>
            <?php if($current != $previous): ?>
                <a href="<?php echo $previous; ?>"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 前の記事へ</a>
                <?php
            endif;?>
            | 
            <?php
            if($current != $next): ?>
                <a href="<?php echo $next; ?>">次の記事へ <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
            <?php endif; ?>
            </div>
        </div>




<?php
    endwhile;
else:

//★ここに投稿がない場合の表示ソースを書く

endif;
?>


<?php get_sidebar();?>
</div>
<!--row-->
</div>
<!--container-->

<?php get_footer(); ?>
