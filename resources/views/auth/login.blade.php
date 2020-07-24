@extends('layouts.lay1')

@section('title', 'Login')

@section('content')

<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <span class="login100-form-title p-b-43">
                            Login to SlackOverLow
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                            
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
                                <span class="focus-input100"></span>
                                <span class="label-input100">Email</span>

                                
                            
                        </div>
                        @error('email')
                                    <span class="help-block small text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" autocomplete="off">
                                <span class="focus-input100"></span>
                                <span class="label-input100">Password</span>

                                
                            
                        </div>
                        @error('password')
                                    <span class="help-block small text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact100-form-checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                            @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                            @endif
                        </div>
                    </form>
                

@endsection

@section('image')
<img class="login100-more" src="{{ asset('loginres/images/image1ku.jpg') }}"></img>
@endsection