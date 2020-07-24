<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('layres/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('srch.css') }}">
  </head>
  <body>
        
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar" class="active">
                <h1><a href="index.html" class="logo">S.O</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="/home"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-book"></span> My Question</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-star"></span> Popular</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-user-times"></span> Unanswered</a>
          </li>
        </ul>

        <div class="footer">
            <p>
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by S.O Team
                    </p>
        </div>
        </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">
                    SlackOverlow
                </a>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                          <form class="as" action="/search" method="GET">
                            <input class="ad" type="text" name="search" placeholder="Search..." autocomplete="off">
                            <button class="aq" type="submit"><i class="fas fa fa-search"></i></button>
                          </form>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
          </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
        </div>

    <script src="{{ asset('layres/js/jquery.min.js') }}"></script>
    <script src="{{ asset('layres/js/popper.js') }}"></script>
    <script src="{{ asset('layres/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('layres/js/main.js') }}"></script>
    
  </body>
</html>