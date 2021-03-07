<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '｜', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <script>
        window.onload = function () {
            document.getElementById('postnumber').onchange = function(){
                AjaxZip3.zip2addr(document.getElementById('postnumber'),'','都道府県','市区町村');
            };
        }

    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 headttl">
                <h1>新築・改修・防水工事（下地処理・塗装・補強)</h1>
            </div>
            <div class="col-lg-7 col-md-8 headinq">
                <ul>
                    <li><a href="tel:0447516125"><img src="<?php echo get_template_directory_uri(); ?>/images/tel.png" width="224" height="34" alt="0447516125"/></a></li>
                    <li class="line1">営業時間　8:00 〜 19:00</li>
                    <li><a href="/contact/"><i class="fa fa-envelope" aria-hidden="true"></i> お問い合わせ</a></li>
                </ul>
            </div>
        </div>
        <!--row-->
    </div>
    <!--container-->
</header>
<div id="gnav">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">

                <!--スマホ用トグルボタンの設置-->
				<div class="sp_menu"><a href="#"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button></a></div>

                <!--ロゴ表示の指定-->
                <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="ウォータータイト工業株式会社" class="img-responsive"/></a> </div>

            <!--スマホ用の画面幅が小さいときの表示を非表示にする-->
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"> <a href="<?php echo home_url();?>">ホーム</a>
                        <hr>
                        <small>HOME</small> </li>
                    <li> <a href="/business/">事業内容</a>
                        <hr>
                        <small>BUSINESS</small> </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">サービス紹介 <span class="caret"></span></a>
                        <hr>
                        <small>SERVICE</small>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/waterproof/">防水工事</a></li>
                            <li><a href="/paint/">塗装工事</a></li>
                            <li><a href="/peeling/">剥離・炭素繊維工法</a></li>
                            <li><a href="/rainfall/">雨漏り検知器</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">実績紹介 <span class="caret"></span></a>
                        <hr>
                        <small>WORKS</small>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/category/paint/">塗装工事</a></li>
                            <li><a href="/category/waterproof/">防水工事</a></li>
                            <li><a href="/category/otherwork/">その他工事</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">企業情報 <span class="caret"></span></a>
                        <hr>
                        <small>COMPANY</small>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/greeting/">代表挨拶</a></li>
                            <li><a href="/company/">会社概要</a></li>
                        </ul>
                    </li>
                    <li> <a href="/category/news/">お知らせ</a>
                        <hr>
                        <small>NEWS</small> </li>
                </ul>
            </div>
            <!--nav-collapse -->
        </div>
        <!--container-->
    </nav>
</div>
<!--gnav-->
