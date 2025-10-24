<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>StonksCasino</title>
    <link rel="shortcut icon" href="{{ asset('img/stonks.png') }}" type="image/x-icon">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ URL::asset('css/header.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('css/nav.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('css/footer.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('css/home.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="app">
        <header class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <a class="btn m-0 p-0" href="{{ route('index') }}">
                    <h1>StonksCasino</h1></a>
                </div>




                <div class="col-12 col-sm-6 ml-auto my-auto ">
                    <div class="div-header ">


                        @guest
                        @if (Route::has('login'))

                                <a class="btn btn-groen btn-login float-sm-right float-center" href="{{ route('login') }}">{{ __('Login') }}</a>

                        @endif

                        @if (Route::has('register'))

                                <a class="btn btn-dark btn-login float-sm-right float-center" href="{{ route('register') }}">{{ __('Register') }}</a>

                        @endif
                    @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link nav-account dropdown-toggle float-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <img src="{{asset('img/streep.png')}}" class="imgheader" alt="">  <img src="{{asset('img/Token.png')}}" class="imgheader" alt="">  {{ Auth::user()->token }}

                            </a>

                            <div class="dropdown-menu dropdown-menu-right menu-account" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('account') }}">
                                 {{ __('Account info') }}
                             </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Uitloggen') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    @endguest

                    </div>
                </div>


            </div>




        </header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="nav-link navbar d-lg-none d-block" href="#">StonksCasino</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @yield('nav-Home')" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @yield('nav-Download')" href="{{ route('download')}}">Download</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @yield('nav-Winkel') " href="{{ route('winkel')}}">Winkel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @yield('nav-Bibliotheek')" href="{{ route('library')}}">Bibliotheek</a>
                </li>

              </ul>
            </div>
          </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <footer class="mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4">
                    <ul class="footer">
                        <li>
                            <a class="footer" href="{{ route('index') }}">Home</a>
                        </li>
                        <li>
                            <a class="footer" href="{{ route('download') }}">Download</a>
                        </li>

                        <li>
                            <a class="footer" href="#">Contact</a>
                        </li>
                        <li>
                            <a class="footer" href="{{ route('termsandcoditions') }}">Algemene voorwaarde</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-5">
                    <div>
                        <a class="socials" href="https://www.facebook.com/stonks.man.18" target="_blank"><img src="{{ asset('img/facebook.png') }}" alt=""></a>
                        <a class="socials" href="https://www.instagram.com/stonkscasinotm/" target="_blank"><img src="{{ asset('img/insta.png') }}" alt=""></a>
                        <a class="socials" href="https://twitter.com/CasinoTm" target="_blank"><img src="{{ asset('img/Twitter.png') }}" alt=""></a>
                        <a class="socials" href="https://www.reddit.com/r/StonksCasinoTM/" target="_blank"><img src="{{ asset('img/reddit.png') }}" alt=""></a>
                    </div>
                    <div class="footer-info">
                        <ul class="footer">
                            <li class="footer">KVK: 44521839</li>
                            <li class="footer">BTW: NL001426759B82</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</body>
</html>
