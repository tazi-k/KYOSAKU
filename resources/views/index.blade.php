<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KYOSAKU</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/line-icon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="{{ asset('/js/style.js') }}"></script>

    {{-- favicon --}}
    <link rel="icon" type="image/png" sizes="48x48" href="../images/favicon.ico">

    <!-- BootstrapのCSS読み込み -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- header section -->
    <section class="banner" role="banner">
        <header id="header" style="padding-top: 20px;">
            <div class="header-content clearfix"> <a class="logo" href="#">
                    <h2 style="color: white">KYOSAKU</h2>
                </a>

                <!-- navigation section  -->
                <nav class="navigation" role="navigation">
                    <ul class="primary-nav">
                        <li><a href="{{ route('users.index') }}">アーティスト</a></li>
                        <li><a href="{{ route('register') }}">新規登録</a></li>
                        <li><a href="{{ route('login') }}">ログイン</a></li>
                    </ul>
                </nav>
                <!-- ハンバーガーメニュー部分 -->
                <div class="drawer d-sm-block d-md-none">

                    <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
                    <input type="checkbox" id="drawer-check" class="drawer-hidden">

                    <!-- ハンバーガーアイコン -->
                    <label for="drawer-check" class="drawer-open"><span></span></label>

                    <!-- メニュー -->
                    <nav class="drawer-content">
                        <ul class="drawer-list text-center">
                            <li class="drawer-item" style="margin-top: 20%">
                                <a class="humberger" href="{{ route('users.index') }}">アーティスト一覧</a>
                            </li><!-- /.drawer-item -->
                            <li class="drawer-item" style="margin-top: 3%">
                                <a class="humberger" href="{{ route('register') }}">新規登録</a>
                            </li><!-- /.drawer-item -->
                            <li class="drawer-item" style="margin-top: 3%">
                                <a class="humberger" href="{{ route('login') }}">ログイン</a>
                            </li><!-- /.drawer-item -->
                        </ul><!-- /.drawer-list -->
                    </nav>
                </div>
            </div>
        </header>
        <!-- banner text section-->
        <div id="banner" class="container">
            <div class="row justify-content-center" style="margin-top: -200px;">
                <div class="banner-text">
                    <div class="banner-text-back">
                        <h2>繋がり<br>
                            さらなる高みへ。</h2><br>
                        <h1 style="font-weight: 400">「 KYOSAKU 」</h1>
                        <h3 style="color: white">音楽 × イラスト</h3>
                        <p style="line-height: 40px">
                            アーティスト同士のマッチングサイトです。<br>
                            作品公開しているなら誰でも利用できます。</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- header section -->
    <!-- overview section -->
    <section id="overview" class="section overview">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-title">Feature</h2>
                    <h3>基本機能</h3>
                </div>
            </div>
            <div class="row" style="text-align: center;">
                <div class="text2 col-md-4">
                    <div class="overview-content">
                        <h4>マッチング</h4>
                        <p style="line-height: 30px; font-size: 15px">基本機能はいたってシンプル！<br>
                            無料で、今後一緒に活動していきたい仲間<br>
                            を見つけることができます。<br>
                            一度限りの協力も可能です！</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview section -->

    <!-- feature section 1 -->
    <section id="features" class="section features3">
        <div class="container" style="padding-bottom: 10px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center" style="margin-bottom: 40px;">
                    <h2 class="section-title">Added Value</h2>
                    <h3>ここならではでの出来ること</h3>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 5%">
                {{-- PC用 --}}
                <div class="features2-content1 d-none d-md-block" style="margin-left: 100px;">
                    <h2 class="section-title" style="font-size: 30px;">全て無料</h2>
                    <p style="line-height: 32px; font-size:16px; margin-top:10%;">当サービスは全て無料です。<br>
                        あくまで異分野同士で<br>
                        「繋がり、さらなる高み」<br>
                        を目指すためのものなので、<br>
                        金銭は一切発生しません。
                    </p>
                </div>
                {{-- スマホ用 --}}
                <div class="features2-content1 d-sm-block d-md-none">
                    <h2 class="section-title" style="font-size: 30px; margin-bottom: 20px;">全て無料</h2>
                    <p style="line-height: 30px; margin-bottom: 12%">当サービスは全て無料です。<br>
                        あくまで異分野同士で<br>
                        「繋がり、さらなる高み」<br>
                        を目指すためのものなので、<br>
                        金銭は一切発生しません。
                    </p>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 5%"> 
                <img class="img-responsive"
                    src="https://cdn.pixabay.com/photo/2017/08/06/12/06/people-2591874_1280.jpg"> </div>
        </div>
        </div>
    </section>
    <!-- feature section 1 -->

    <!-- feature section 2 -->
    <section id="features" class="section features2">
        <div class="container" style="padding-bottom: 100px;">
            <div class="row">
                <div class="col-md-6" style="float:right;">
                    <div class="features2-content2">
                        {{-- PC用 --}}
                        <h2 class="section-title d-none d-md-block" style="font-size: 30px;">実力派同士が繋がれる</h2>
                        <p class="d-none d-md-block"
                            style="line-height: 32px; margin-right: -10px; font-size:16px; margin-top:10%;">
                            実力のある人とマッチするためには、<br>自分自身の実力も必要です。<br>
                            そのため、必然と実力派同士が<br>マッチングするようになっています。<br>
                            この人に本当に将来性があるか？<br>
                            自分自身がプロデューサー目線で考える必要があります。</p>
                        {{-- スマホ用 --}}
                        <h2 class="section-title d-sm-block d-md-none" style="font-size: 30px; margin-bottom: 20px;">
                            実力派同士が繋がれる</h2>
                        <p class="d-sm-block d-md-none" style="line-height: 30px; margin-right: -10px">
                            実力のある人とマッチするためには、<br>自分自身の実力も必要です。<br>
                            そのため、必然と実力派同士が<br>マッチングするようになっています。</p>
                        <p class="d-sm-block d-md-none"
                            style="line-height: 30px; margin-top:15px; margin-right: -10px; margin-bottom: 12%;">
                            この人に本当に将来性があるか？<br>
                            自身がプロデューサー目線で考える必要があります。</p>
                    </div>
                </div>
                <div class="col-md-6"> <img class="img-responsive"
                        src="https://cdn.pixabay.com/photo/2018/06/11/10/56/shaking-hands-3468243_1280.jpg"> </div>
            </div>
        </div>
    </section>
    <!-- feature section 2 -->

    <!-- screen shots slider section -->

    {{-- PC用 --}}
    <section id="download" class="section subscribe d-none d-md-block">
        <div class="overlay1"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 style="font-size: 35px;">心境</h2>
                    <p style="line-height: 35px; font-size:18px;">この世の中には、知名度はないけどカッコいい！<br>
                        と思う人が山ほどいます。<br>
                        そういった人の後押しになりたい。<br>
                        可能性を少しでも広げたい。<br>
                        この一心で本サイトを作成しました。<br>
                        無料で、実力さえあれば他の分野のアーティストと繋がれる。<br><br>
                        一人でも多くの人が、本サイトから飛躍するのを願っています。</p>
                </div>
            </div>
        </div>
    </section>

    {{-- スマホ用 --}}
    <section id="download" class="section subscribe2 d-sm-block d-md-none">
        <div class="overlay3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 style="font-size: 35px; margin-bottom: 20px;">心境</h2>
                    <p style="line-height: 35px; font-size:18px;">この世の中には、<br>知名度はないけど「カッコいい！」<br>
                        と思う人が山ほどいます。<br>
                        そういった人の後押しになりたい。<br>
                        可能性を少しでも広げたい。<br>
                        この一心で本サイトを作成しました。<br>
                        無料で、実力さえあれば<br>他の分野のアーティストと繋がれる。<br><br>
                        一人でも多くの人が、<br>本サイトから飛躍するのを願っています。</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section id="contact" class="section text-center let">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 ">
                    <h2 class="section-title"
                        style="color: rgb(0, 0, 0); text-shadow: 1px 2px 0px rgba(0, 0, 0, 0.445);">KYOSAKUの世界へ</h2>
                    <div class="text-center">
                        {{-- <form action="{{ route('register') }}"> --}}
                        <a href="{{ route('register') }}" class="btn24 btn24-flat mt-5 mb-4"
                            style="font-size: 20px; margin-top: 60px"><span>START</span></a>
                        {{-- <button type="submit" class="btn btn-primary mt-5 mb-4" style="font-size: 20px; margin-top: 60px">始める！</button> --}}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact section -->
    <!-- footer section-->
    <footer class="section footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="col-md-12">
                    <p>© Copyright © 2020 Kyosuke Tajima </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section-->
    
    
</body>

</html>
