<footer>
    <div class="footlink">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 footlist">
                    <ul>
                        <li> <a href="<?php echo home_url();?>"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> ホーム</a></li>
                        <li> <a href="<?php echo home_url(); ?>/business/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 事業内容</a></li>
                        <li> <a href="<?php echo home_url(); ?>/rainfall/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 雨漏り検知器について</a></li>
                        <li class="display-flex hidden-1200-down">
                            <a href="<?php echo home_url();?>/instagram/" class="sns-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="<?php echo home_url();?>/facebook/" class="sns-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="<?php echo home_url();?>/twitter/" class="sns-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <!--footlist-->

                <div class="col-lg-3 col-md-6 col-sm-6 footlist">
                    <h5>サービス紹介</h5>
                    <ul>
                        <li> <a href="<?php echo home_url();?>/waterproof/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 防水工事</a></li>
                        <li> <a href="<?php echo home_url();?>/paint/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 塗装工事</a></li>
                        <li> <a href="<?php echo home_url();?>/peeling/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 剥離・炭素繊維工法</a></li>
                    </ul>
                </div>
                <!--footlist-->

                <div class="col-lg-3 col-md-6 col-sm-6 footlist">
                    <h5>実績紹介</h5>
                    <ul>
                        <li> <a href="<?php echo home_url();?>/category/waterproof/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 防水工事実績</a></li>
                        <li> <a href="<?php echo home_url();?>/category/paint/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 塗装工事実績</a></li>
                        <li> <a href="<?php echo home_url();?>/category/otherwork/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> その他工事実績</a></li>
                    </ul>
                </div>
                <!--footlist-->

                <div class="col-lg-3 col-md-6 col-sm-6 footlist">
                    <h5>企業情報</h5>
                    <ul>
                        <li> <a href="<?php echo home_url();?>/greeting/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 代表挨拶</a></li>
                        <li> <a href="<?php echo home_url();?>/company/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> 会社概要</a></li>
                        <li> <a href="<?php echo home_url();?>/contact/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> お問い合わせ</a></li>
                        <li> <a href="<?php echo home_url();?>/category/news/"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> お知らせ</a></li>
                    </ul>
                </div>
                <!--footlist-->

            </div>
        </div>
        <!--container-->

    </div>
    <!--footlink-->



    <div class="last">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 display-flex justify-content-center hidden-1200-up mb20">
                    <a href="<?php echo home_url();?>/instagram/" class="sns-btn sns-btn--blue"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="<?php echo home_url();?>/facebook/" class="sns-btn sns-btn--blue"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="<?php echo home_url();?>/twitter/" class="sns-btn sns-btn--blue"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4 flogo"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" width="311" height="99" alt="ウォータータイト工業株式会社" class="img-responsive"/>
                    <p class="nmb20">新築・改修・防水工事( 下地処理・塗装・補強)</p>
                </div>
                <div class="col-md-4 finq"> <a class="btn btn1" href="<?php echo home_url(); ?>/contact/">お気軽にご相談・お問い合せください <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> <a href="tel:0447516125"><img src="<?php echo get_template_directory_uri(); ?>/images/tel2.png" width="333" height="49" alt="0447516125" class="img-responsive img-cnt mt10"/></a> </div>
                <div class="col-md-4 fcopy">
                    <p>〒213-0023<br>
                        神奈川県川崎市高津区子母口365-4</p>
                    <p>営業時間 8:00?19:00 （日・祝日定休）</p>
                    <p class="mt10">Copyright 2016 Watertight Industry Co, Ltd</p>
                </div>
            </div>
        </div>
        <!--container-->
    </div>
    <!--last-->

</footer>


<!--footer_sns_start-->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
jQuery(function() {
 var topBtn = jQuery('#footer_ban_bg');
 topBtn.hide();
 jQuery(window).scroll(function () {
 if (jQuery(this).scrollTop() > 200) { // 200pxで表示
 topBtn.fadeIn();
 } else {
 topBtn.fadeOut();
 }
 });
});
$(function(){
	$(window).on("scroll touchmove", function(){ //スクロール中に判断する
			$("#footer_ban_sp").stop(); //アニメーションしている場合、アニメーションを強制停止
			$("#footer_ban_sp").css('display', 'none').delay(500).fadeIn('fast');
			//スクロール中は非表示にして、500ミリ秒遅らせて再び表示
	});
});
$(function(){ 
  var h = $('#footer_ban').height(); 
  $('.parent').height(h); // childrenの高さをparentに入れる
});
</script>

<div id="footer_ban_bg">
<div id="footer_ban" class="children">

<div class="pc_sns">
<ul>
<li class="pc_facebook"><a href="#" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/facebook_b.png" alt="Facebook"></a></li>
<li class="pc_twitter"><a href="#" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/twitter_b.png" alt="Twitter"></a></li>
<li class="pc_ameba"><a href="#" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/ameba_b.png" alt="Ameblo"></a></li>
<li class="pc_instagram"><a href="#" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/instagram_b.png" alt="Instagram"></a></li>
<li class="pc_line"><a href="https://line.me/R/ti/p/%40273cimei" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/line_b.png" alt="LINE"></a></li>
</ul>
</div>

<div class="pc_top">
<a href="#" ><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/pc_top.png" alt="pc_top"></a>
</div>

<div class="pc_foot">
<table width="100%" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<div align="right"><a href="tel:044-751-6125"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/footer_tel.png" alt="お電話でお問合せ" width="300"></a></div>
</td>
<td>
<div align="left"><a href="<?php echo home_url(); ?>/contact/"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/footer_mail.png" alt="メールでのお問合せはこちら" width="300"></a></div>
</td>
</tr>
</table>
</div>


<div id="footer_ban_sp">

<div class="sp_sns">
<div class="clear_fix">
<ul>
<li class="sp_facebook"><a href="#" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/facebook_b.png" alt="Facebook"></a></li>
<li class="sp_twitter"><a href="#" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/twitter_b.png" alt="Twitter"></a></li>
<li class="sp_ameba"><a href="#" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/ameba_b.png" alt="Ameblo"></a></li>
<li class="sp_instagram"><a href="#" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/instagram_b.png" alt="Instagram"></a></li>
<li class="sp_line"><a href="https://line.me/R/ti/p/%40273cimei" target="_blank"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/line_b.png" alt="LINE"></a></li>
</ul>
</div>
</div>

<div class="sp_foot">
<table width="100%" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<div align="right"><a href="tel:044-751-6125"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/footer_tel.png" alt="お電話でお問合せ"></a></div>
</td>
<td>
<div align="left"><a href="<?php echo home_url(); ?>/contact/"><img src="https://water-tight.co.jp/wp-content/themes/WaterTight/images/footer_mail.png" alt="メールでのお問合せはこちら"></a></div>
</td>
</tr>
</table>
</div>

</div>


</div><!--footer_ban-->
</div><!--footer_ban_bg-->

<div class="parent">
</div>

<!--footer_sns_end-->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/infiniteslide.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.pause.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('#main_slide').infiniteslide({
            'height': 173,			// 高さを指定
            'speed': 30,			// スピードを指定
            'direction' : 'left',	// スライドする向きを指定
            'pauseonhover': false	// マウスオーバーでストップするかを指定
        });
    });
</script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<?php wp_footer(); ?>

</body>
</html>
