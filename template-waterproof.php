<?php/*
Template Name: WaterProof
*/?>

<?php get_header('page'); ?>


<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();


        remove_filter('the_content', 'wpautop');
        the_content();
    endwhile;
else:


    echo "ページがみつかりませんでした。";
endif;
?>


<div class="container">
    <h3 class="title5">防水工事施工実績</h3>
    <div class="row">
        <div class="col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/images/waterproof/catch.png" alt="防水工事実績" class="img-responsive mb20 img-cnt"/></div>
        <div class="col-md-6">
            <div class="workbox2">
                <?php query_posts('cat=4&showposts=3'); ?>
                <?php if(have_posts()): while(have_posts()):the_post(); ?>

                    <dl>
                        <dt><span>更新日</span><?php the_time('Y年m月d日');?></dt>
                        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
                    

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>



            </div>
            <a class="btn btn1" href="/category/waterproof/">防水工事の施工実績はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
    </div>
    <!--row-->
</div>
<!--container-->

<?php get_footer(); ?>
