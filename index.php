<?php if(is_home()){get_header(); ?>
<h2><img src="<?php echo get_template_directory_uri(); ?>/images/top-copy.png" width="600" height="210" alt="建物維持管理のためのトータルコーディネーター" class="img-responsive img-cnt"/></h2>
</div>
<div class="maintext">
    <div id="main_slide">
        <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" alt="1" width="260" height="173" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.png" alt="2" width="260" height="173" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide3.png" alt="3" width="260" height="173" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide4.png" alt="4" width="260" height="173" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide5.png" alt="5" width="260" height="173" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide6.png" alt="6" width="260" height="173" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide7.png" alt="7" width="260" height="173" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide8.png" alt="8" width="260" height="173" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/slide9.png" alt="9" width="260" height="173" /></li>
        </ul>
    </div>
    <!--mains_slide-->
    <section>
        <h3><span>新築から大規模改修工事のエキスパート</span></h3>
        <p>川崎市高津区を拠点とし建物の総合的な新築工事・改修工事・管理を行っております。 </p>
        <p>従来の施工工事だけでなく、どの様な条件下でも最善な施工が行えるよう</p>
        <p>最新の技術を取り入れ、サービス向上を高めていくことを大切にしております。</p>
        <div class="btnw1"> <a class="btn btn1" href="<?php echo home_url(); ?>/business/">ウォータータイト工業の事業内容 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
    </section>
</div>
<!--maintext-->

<!-- 受注状況 start -->
<div class="container orders-container">
    <h4 class="title4">受注状況<span>最新の受注状況・工事完了状況のお知らせ</span></h4>
    <div class="row">
        <div class="col-md-6 news">
            <?php query_posts('cat=5&showposts=2'); ?>
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <dl>
                    <dt><?php the_time('Y年m月d日');?></dt>
                    <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                </dl>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="col-md-6 news">
            <?php query_posts('cat=5&showposts=2&offset=2'); ?>
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <dl>
                    <dt><?php the_time('Y年m月d日');?></dt>
                    <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                </dl>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
    <div class="btnw2"> <a class="btn btn1" href="<?php echo home_url(); ?>/category/orders/">受注状況一覧はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
</div>
<!-- 受注状況 end -->
<?php
    } else {
        get_header('page');
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                    the_content();
            endwhile;
        else:
            //★ここに投稿がない場合の表示ソースを書く
        endif;
    }
?>

<!-- リンクバナー start -->
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 link-banner">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/press.jpg" width="640" alt="弊社の施工が雜誌に掲載されました！" class="img-responsive img-cnt">
            </a>
        </div>
    </div>
</div>
<!-- リンクバナー end -->

<div class="renovation-technology container">
    <h3 class="title1">ウォータータイト工業の<br>
        改修工事技術
    </h3>

    <div class="mb20"><img src="<?php echo get_template_directory_uri(); ?>/images/underline.png" width="1170" height="15" alt="" class="img-responsive"/></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 mb20">
            <div class="row-title hidden-xs ">
                <div class="display-flex">
                    <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/circle1.png">
                    <div class="col-sm-12">
                        <div class="mb10">
                            <span class="title11">改質アスファルトシートによる<br class="visible-992">機械的固定工法</span>
                        </div>
                        <div class="visible-992-1200">
                            <span class="title12">
                                防水層の省層化、省エネ化、施工性の省力化、産業廃棄物発生量の削減など、<br>地球環境に配慮した防水工法・仕様の確立が求められています。
                            </span>
                        </div>
                    </div>
                </div>
                <span class="title12 visible-992">
                    防水層の省層化、省エネ化、施工性の省力化、産業廃棄物発生量の<br>削減など、地球環境に配慮した防水工法・仕様の確立が<br>求められています。
                </span>
            </div>
            <div class="row-title hidden-sm hidden-md hidden-lg display-flex flex-direction-column justify-content-center align-items-bottom">
                <div class="display-flex align-items-center">
                    <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/circle1.png">
                    <span class="title11">改質アスファルトシートによる<br>機械的固定工法</span>
                </div>
                <div class="mt20">
                    <span class="title12">
                        防水層の省層化、省エネ化、施工性の省力化、<br>産業廃棄物発生量の削減など、 地球環境に<br>配慮した防水工法・仕様の確立が求められています。
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-content">
        <div class="col-md-6 col-sm-6 tecbox">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sikou.png" width="480" height="320" alt="ソーラー脱気防水システムイメージ" class="img-responsive img-cnt"/>
        </div>
        <div class="col-md-6 col-sm-6 tecbox">
            <h4 class="title2">無駄のない工事で工期を短縮し<br>コストパフォーマンスの<br class="visible-768">向上を実現</h4>
            <p>既存防水層の種類や接着性を問いません。<br>また湿潤下地でも施工可能です。<br>下地調整も軽微で済み「かぶせ工法」に最適です。</p>
            <a class="btn btn1" href="<?php echo home_url(); ?>/waterproof/">詳細はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <!--row-->

    <div class="mb20"><img src="<?php echo get_template_directory_uri(); ?>/images/underline.png" width="1170" height="15" alt="" class="img-responsive"/></div>
    <div class="row row-content display-flex justify-content-center">
        <div class="col-md-6 col-sm-6 tecbox">
            <div class="row-title">
                <div class="display-flex">
                    <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/circle2.png">
                    <div class="display-flex justify-content-center flex-direction-column text-align-center">
                        <div class="mb15">
                            <span class="title11">GAINA</span>
                        </div>
                        <div>
                            <span class="title12">「塗装に機能を<br class="visible-992 visible-768">持たせる」</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-content paint-tec">
                <div class="mt20">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tec03.png" width="480" height="320" alt="" class="img-responsive img-cnt"/>
                </div>
                <div class="mt20">
                    <p>誰もが１日中快適な住まいで暮らしたいと願っていますが、夏の暑さや冬の寒さ、騒音やニオイなど、私達はさまざまな不満を抱えながら生活しています。</p>
                    <p>ガイナは独自の新技術により、夏の暑さや冬の寒さに対応するだけでなく、騒音やニオイにも対応することができます。夏でも冬でも、昼でも夜でも、住まいの不満を解消し、快適な住環境を実現します。</p>
                    <a class="btn btn1" href="<?php echo home_url(); ?>/paint/">詳細はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <div class="mb20 hidden-640-up"><img src="<?php echo get_template_directory_uri(); ?>/images/underline.png" width="1170" height="15" alt="" class="img-responsive"/></div>

        <div class="col-md-6 col-sm-6 tecbox">
            <div class="row-title">
                <div class="display-flex">
                    <img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/circle3.png">
                    <div class="display-flex justify-content-center flex-direction-column text-align-center">
                        <div class="mb15">
                            <span class="title11">雨漏り検知器</span>
                        </div>
                        <div>
                            <span class="title12">「雨漏りの早期発見を<br class="visible-992 visible-768">簡単に」</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-content rainfall-tec">
                <div class="mt20">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tec04.png" width="480" height="320" alt="" class="img-responsive img-cnt"/>
                </div>
                <div class="mt20">
                    <p>雨漏りは、建物自体に大きなダメージをあたえます。建物へのダメージを最小限に抑えるためにも、雨漏り箇所を早い段階で発見する必要があります。</p>
                    <p>今までは、定期的に専門業者が訪問をし、検知だけで大がかりな工事をしておりましたが、防水工事専門業者である、当社が制作した、雨漏り検知器があれば、雨漏りの早期発見が可能になります。</p>
                    <a class="btn btn1" href="<?php echo home_url(); ?>/rainfall/">詳細はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--row-->
</div>
<!--container-->

<div class="work-title">
    <div class="container">
        <div class="work">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/images/sekou-t.png" width="292" height="67" alt="施工実績" class="img-responsive"/></h5>
            <dl>
                <dt>WORKS</dt>
                <dd>当社の各種施工実績をご覧いただけます。</dd>
            </dl>
        </div>
    </div>
    <!--container-->
</div>
<!--work-title-->

<div class="container">
    <div class="row">
         <div class="col-md-4 col-sm-4">
            <div class="workbox">
                <h6 class="w-label3">屋上・バルコニー工事</h6>
                <img src="<?php echo get_template_directory_uri(); ?>/images/catch3.png" alt="屋上・バルコニー工事" class="img-responsive img-cnt"/>
                <?php query_posts('cat=2&showposts=3'); ?>
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <dl>
                        <dt><span>更新日</span><?php the_time('Y年m月d日');?></dt>
                        <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                    </dl>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <!--workbox-->
        </div>
        <!--col-->

        <div class="col-md-4 col-sm-4">
            <div class="workbox">
                <h6 class="w-label1">外壁工事</h6>
                <img src="<?php echo get_template_directory_uri(); ?>/images/catch1.png" alt="外壁工事" class="img-responsive img-cnt"/>
                <?php query_posts('cat=3&showposts=3'); ?>
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <dl>
                        <dt><span>更新日</span><?php the_time('Y年m月d日');?></dt>
                        <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                    </dl>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <!--workbox-->
        </div>
        <!--col-->
        <div class="col-md-4 col-sm-4">
            <div class="workbox">
                <h6 class="w-label2">階段・供用廊下工事</h6>
                <img src="<?php echo get_template_directory_uri(); ?>/images/catch2.png" alt="階段・供用廊下工事" class="img-responsive img-cnt"/>
                <?php query_posts('cat=4&showposts=3'); ?>
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                    <dl>
                        <dt><span>更新日</span><?php the_time('Y年m月d日');?></dt>
                        <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                    </dl>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <!--workbox-->
        </div>
        <!--col-->
    </div>
    <!--row-->
    <div class="btnw2"> <a class="btn btn1" href="<?php echo home_url(); ?>/worklist/">施工実績一覧はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
</div>
<!--container-->

<div class="company">
    <h3 class="title3">企業情報</h3>
    <div class="container">
        <div class="row display-flex justify-content-center">
            <div class="col-md-6 col-sm-6 combox"> <img src="<?php echo get_template_directory_uri(); ?>/images/_com1.png" width="480" height="288" alt="代表挨拶" class="img-responsive img-cnt"/>
                <dl>
                    <dt>代表挨拶 <span>MESSAGE</span></dt>
                    <dd>当社の理念・代表からのご挨拶。</dd>
                </dl>
                <a class="btn btn1" href="<?php echo home_url(); ?>/greeting/">詳細はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
            <div class="col-md-6 col-sm-6 combox"> <img src="<?php echo get_template_directory_uri(); ?>/images/_com2.png" width="480" height="288" alt="代表挨拶" class="img-responsive img-cnt"/>
                <dl>
                    <dt>会社概要<span>COMAPNY</span></dt>
                    <dd>当社の会社概要をご紹介します。</dd>
                </dl>
                <a class="btn btn1" href="<?php echo home_url(); ?>/company/">詳細はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
        </div>
    </div>
    <!--container-->
</div>
<!--company-->

<!-- お知らせ start -->
<div class="container news-container">
    <h4 class="title4">お知らせ<span>ウォータータイト工業株式会社からのお知らせ</span></h4>
    <div class="row">
        <div class="col-md-6 news">
            <?php query_posts('cat=1&showposts=2'); ?>
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <dl>
                    <dt><?php the_time('Y年m月d日');?></dt>
                    <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                </dl>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="col-md-6 news">
            <?php query_posts('cat=1&showposts=2&offset=2'); ?>
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <dl>
                    <dt><?php the_time('Y年m月d日');?></dt>
                    <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
                </dl>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
    <div class="btnw2"> <a class="btn btn1" href="<?php echo home_url(); ?>/category/news/">お知らせ一覧はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> </div>
</div>
<!-- お知らせ end -->

<!--msl1_start-->
<!-- div class="container">
    <h4 class="msl_title">NEWS <span class="msl_title2">ウォータータイト工業株式会社からのお知らせ</span></h4>
    <div class="msl_main">
        <div class="msl_box">
            <?php
                // include_once 'article/inc/mslinfo.php';
                // $msl_infos1 = new MSLPageInfo('1507', '2786');
                // echo $msl_infos1->get('html_article');
            ?>
        </div>
    </div>
            
    <div class="btnw2">
        <a class="btn btn1" href="/category/news/">過去の新着情報はこちら <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
    </div>
</!-- -->
<!--msl1_end-->

<!--msl2&3_start-->
<div class="container msl_2_3 display-flex justify-content-center">
    <div class="msl_2">
        <h4 class="msl_title">DIARY <span class="msl_title2">当社スタッフによる現場日記です</span></h4>
        <div class="msl_main">
            <div class="msl_box2">
                <?php
                    include_once 'article/inc/mslinfo.php';
                    $msl_infos2 = new MSLPageInfo('1507', '2787');
                    echo $msl_infos2->get('html_article');
                ?>
            </div>
        </div>
    </div>

    <div class="msl_3">
        <h4 class="msl_title">SUGGESTIONS <span class="msl_title2">ウォータータイトからのご提案です</span></h4>
        <div class="msl_main">
            <div class="msl_box2">
                <?php
                    include_once 'article/inc/mslinfo.php';
                    $msl_infos3 = new MSLPageInfo('1507', '2788');
                    echo $msl_infos3->get('html_article');
                ?>
            </div>
        </div>
    </div>
</div>
<!--msl2&3_end-->


<?php get_footer(); ?>
