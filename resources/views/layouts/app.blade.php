<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KYOSAKU</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    

    <!-- Styles -->

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/line-icon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

{{-- favicon --}}
<link rel="icon" type="image/png" sizes="48x48" href="../images/favicon.ico">
    
    
</head>

<body>
    <div id="app">
        <header id="header">
            <div class="header-content clearfix"> <a class="logo" href="/">
              <h2 style="color: white">KYOSAKU</h2>
            </a> 
              
              <!-- navigation section  -->
              <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                  <li><a href="{{ route('users.index') }}">アーティスト</a></li>
                  @Auth
                  <li><a class="navbar-brand" href="{{ route('matching.index',Auth::id()) }}" method="GET">
                    {{ __('共作状況') }}
                </a></li>
                  <li><a class="navbar-brand" href="{{ route('users.search')}}" method="GET">
                    {{ __('ジャンル検索') }}
                </a></li>
                @endAuth
                    <li>
                    <!-- Authentication Links -->
                    

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                        </li>
                        @endif
                        @else

                        <div style="margin-right: -40px; margin-left: 60px">
                            <img class="float-test" src="{{ Auth::user()->image_path }}" 　width="50" height="50" class="profile-img">
                        </div>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a style="color: black; margin-left: 0; text-align:center" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }}
                            </a>

                            <a style="color: black; margin-left: 0; text-align:center" class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
                                {{ __('プロフィール編集') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
              </nav>
              {{-- <a href="#" class="nav-toggle">Menu<span></span></a> </div> --}}

              <!-- ハンバーガーメニュー部分 -->
  <div class="drawer">

    <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
    <input type="checkbox" id="drawer-check" class="drawer-hidden" >

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
        <li class="drawer-item" style="margin-top: 3%">
          <a class="humberger" href="{{ route('logout') }}">ログアウト</a>
        </li><!-- /.drawer-item -->
      </ul><!-- /.drawer-list -->
    </nav>

  </div>


            <!-- navigation section  --> 
          </header>

        <main class="py-4 user-background">
            @yield('content')
        </main>
    </div>
</body>

</html>
