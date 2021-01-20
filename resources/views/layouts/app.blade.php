<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        #footer{
            background-color: rgb(32,32,32);
        }

        #footer p{
            color: rgb(255,255,255);
            margin-top: 10px;
        }

        #footer img{
            margin-top: 3px;
        }
        #main {
            background-color: #1b1e21;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a class="nav-link" href="{{route('posts.index')}}">{{__('Posts')}} </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{url('/space_objects')}}">{{__('Space Objects')}} </a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @auth
                                @can('delete',Auth::user(), \App\Models\User::class)
                                    <li>

                                    </li>
                                <li>
                                    <a class="nav-link" href="{{route('user.index')}}">{{__('User Management')}} </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route('profile.index')}}">{{__('Profile')}} </a>
                                </li>
                                @endcan
                            @endauth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" id="main">
            @yield('content')
        </main>
    </div>
    <div>
        <footer id="footer" class="page-footer" >
            <div class="container-fluid padding">
                <div class="row">
                    <div class="col-sm-2">
                        <img src="{{ asset('/storage/images_footer/vesmir_logo.png') }}" height="45" alt="sapce_logo">
                    </div>
                    <div class="col-sm-2">
                        <a href="#"><p>Privacy Policy</p></a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><p>Contact</p> </a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><p>Advertisement</p> </a>
                    </div>
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><img src="{{ asset('/storage/images_footer/fb_logo_footer.png') }}" height="40" alt="fb_logo"> </a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><img src="{{ asset('/storage/images_footer/insta_logo_footer.png') }}" height="40" alt="insta_logo"> </a>
                    </div>
                    <div class="col-sm-1">
                        <a href="#"><img src="{{ asset('/storage/images_footer/twitter_logo_footer.png') }}" height="40" alt="twitter_logo"> </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
