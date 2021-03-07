<?php/*
Template Name: WorkList
*/?>

<?php get_header('page');

?>

<div class="ptitle page-title6">
    <section>
        <h2>実績紹介</h2>
        <small>WORKS</small> </section>
</div>
<div class="container">
    <nav>
        <ol class="breadcrumb mt20">
            <li><a href="<?php echo home_url();?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li>実績紹介</li>
        </ol>
    </nav>
</div>
<!--container-->

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3 class="title5">実績紹介</h3>

            <?php query_posts('cat=2,3,4');
            if ( has_post_thumbnail() ) {
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
                $ec_url = $image_url[0];
            } else {
                $ec_url = get_bloginfo( 'template_directory' ) . '/images/catch1.png';
            } ?>

            <?php if(have_posts()): while(have_posts()):the_post();
                $category = get_the_category();
                $cat_id   = $category[0]->cat_ID;
                $cat_name = $category[0]->cat_name;
                $cat_slug = $category[0]->category_nicename;?>
            <div class="col-md-6 col-sm-6 worktile">

            <img src="<?php echo $ec_url;?>" width="401" height="268" alt="" class="img-responsive"/>
                <dl>
                    <dt><span class="<?php echo $cat_slug; ?>"><?php echo $cat_name;?></span> <?php the_time('Y年m月d日');?></dt>
                    <dd>
                        <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                    </dd>
                </dl>
            </div>


            <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>


            <div style="clear:both"></div>
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
