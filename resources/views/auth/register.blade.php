<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SlackOverLow</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="regres/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="regres/css/style.css">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style=''>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    SlackOverLow
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            
                    </ul>
                </div>
            </div>
        </nav>
    <div class="main">

        <div class="containers">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="regres/images/image.jpg" alt="Image">
                </div>
                <div class="booking-form">
                    
                       

                        <div class="card-body border-0">
                            <h2>Register</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-groups form-input">
                                   

                                    
                                        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        @error('name')
                                            <span class="help-block small text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>

                                <div class="form-groups form-input">
                                    

                                    
                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                        @error('email')
                                            <span class="help-block small text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>

                                <div class="form-groups form-input">
                                    

                                    
                                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        @error('password')
                                            <span class="help-block small text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>

                                <div class="form-groups form-input">
                                    
                                    <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="off">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                </div>

                                <div class="form-submit">
                                        <button type="submit" class="submit">
                                            {{ __('Register') }}
                                        </button>
                                    <a href="/login" class="vertify-booking">Already have account?</a>
                                </div>
                            </form>
                        </div>
                    
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="regres/vendor/jquery/jquery.min.js"></script>
    <script src="regres/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>