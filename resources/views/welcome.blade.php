{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>KYOSAKU</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    </html> --}}
    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    
    <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rooky - Free App Landing page template for startup</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="/resources/views/rooky-startup-app-landing-page-template=y0002016mfebd0100000010/css/jquery.fancybox.css">

    <link rel="stylesheet" href="/resources/views/rooky-startup-app-landing-page-template=y0002016mfebd0100000010/css/owl.carousel.css">

    <link rel="stylesheet" href="/resources/views/rooky-startup-app-landing-page-template=y0002016mfebd0100000010/css/owl.transitions.css">

    <link rel="stylesheet" href="/resources/views/rooky-startup-app-landing-page-template=y0002016mfebd0100000010/css/main.css">

    <link rel="stylesheet" href="/resources/views/rooky-startup-app-landing-page-template=y0002016mfebd0100000010/css/responsive.css">

    <link rel="stylesheet" href="/resources/views/rooky-startup-app-landing-page-template=y0002016mfebd0100000010/css/animate.min.css">

    <link rel="stylesheet" href="/resources/views/rooky-startup-app-landing-page-template=y0002016mfebd0100000010/css/line-icon.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    
    <body>
    <!-- header section -->
    <section class="banner" role="banner">
      <header id="header">
        <div class="header-content clearfix"> <a class="logo" href="#"><img src="images/logo.png" alt=""></a> 
          
          <!-- navigation section  -->
          <nav class="navigation" role="navigation">
            <ul class="primary-nav">
              <li><a href="{{ route('users.index') }}">アーティスト</a></li>
              <li><a href="{{ route('register') }}">新規登録</a></li>
              <li><a href="{{ route('login') }}">ログイン</a></li>
            </ul>
          </nav>
          <a href="#" class="nav-toggle">Menu<span></span></a> </div>
        <!-- navigation section  --> 
      </header>
      <!-- banner text section-->
      <!-- <div id="banner" class="container">
          <div class="row justify-content-center col-sm-12" style="margin-top: -200px;">
              <div class="banner-text">
                <div class="banner-text-back" style="width: 700px; padding: 70px;">
                  <h2 style="color: white; padding-top: 40px;">繋がり<br>
                    さらなる高みへ。</h2><br>
                    <h1>「KYOSAKU」</h1>
                  <p>KYOSAKUは<br>
                    音楽×イラスト<br>
                    アーティスト同士のマッチングサイトです。<br>
                    作品公開しているなら誰でも利用できます。</p>
                </div>
            </div>
          </div>
        </div>
      </div> -->
      <div id="banner" class="container">
          <div class="row justify-content-center col-sm-12" style="margin-top: -200px;">
              <div class="banner-text">
                <div class="banner-text-back" style="width: 700px; padding: 70px;">
                  <h2 style="color: white; padding-top: 40px;">繋がり<br>
                    さらなる高みへ。</h2><br>
                    <h1>「KYOSAKU」</h1>
                  <p>KYOSAKUは<br>
                    音楽×イラスト<br>
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
          <div class="col-md-4 col-sm-12" style="margin-left: 410px; margin-top: 80px;"> 
            <div class="overview-content">
              <h4 style="padding-right: 40px;">マッチング</h4>
              <p>基本機能はいたってシンプル！<br>
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
          <div class="col-md-6">
            <div class="features2-content">
              <h2 class="section-title" style="font-size: 30px;">全て無料</h2>
              <p>当サービスは全て無料です。<br>
                あくまで異分野同士で<br>
                「繋がり、さらなる高み」<br>
                を目指すためのものなので、<br>
                金銭は一切発生しません。
                </p>
            </div>
          </div>
          <div class="col-md-6"> <img class="img-responsive" src="https://cdn.pixabay.com/photo/2017/08/06/12/06/people-2591874_1280.jpg"> </div>
        </div>
      </div>
    </section>
    <!-- feature section 1 --> 
    
    <!-- feature section 2 -->
    <section id="features" class="section features2">
      <div class="container" style="padding-bottom: 100px;">
        <div class="row">
          <div class="col-md-6" style="float:right;">
            <div class="features2-content">
              <h2 class="section-title" style="font-size: 30px;">実力派同士が繋がれる</h2>
              <p>ここが最大の肝となります。<br>
                実力のある人とマッチするためには、自分自身の実力も必要です。<br>
                相手に求めるのが高いほど、自分に求められるものも高くなります。<br>
                そのため、必然と実力派同士がマッチングするようになっています。<br>
                この人に本当に将来性があるか？<br>
                自分自身がプロデューサー目線で考える必要があります。</p>
            </div>
          </div>
          <div class="col-md-6"> <img class="img-responsive" src="https://cdn.pixabay.com/photo/2016/11/08/05/20/adventure-1807524_1280.jpg"> </div>
        </div>
      </div>
    </section>
    <!-- feature section 2 --> 
    
    
    <!-- screen shots slider section --> 
    
    <!--subscribe section -->
    <section id="download" class="section subscribe">
      <div class="overlay"></div>
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
            <!-- subscribe form -->
            
            <!-- subscribe message -->
            <div id="mesaj"></div>
            <!-- subscribe message --> 
          </div>
          <!-- subscribe form --> 
        </div>
      </div>
    </section>
    <!--subscribe section --> 
    
    <!--contact section -->
    
    <section id="contact" class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 ">
            <h2 class="section-title">さっそく始めよう！</h2>
            
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
            <p>
            <ul class="footer-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
            </p>
            <p>© Copyright © 2015 Rooky Inc. All Rights Reserved. Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/">Designstub</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section--> 
    <!-- Include JS files --> 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  -->
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.fancybox.pack.js"></script> 
    <script src="js/retina.min.js"></script> 
    <script src="js/modernizr.js"></script> 
    <script src="js/owl.carousel.min.js"></script> 
    <script src="js/jquery.subscribe.js"></script> 
    <script src="js/jquery.contact.js"></script> 
    <script src="js/main.js"></script>
    </body>
    </html>