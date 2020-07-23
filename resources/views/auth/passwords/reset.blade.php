@extends('layouts.lay1')

@section('title','Reset Password')

@section('content')

<form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @csrf
                        <span class="login100-form-title p-b-43">
                            Change Password
                        </span>

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                            
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                <span class="focus-input100"></span>
                                <span class="label-input100">Confirm Email</span>

                                
                            
                        </div>
                        @error('email')
                                    <span class="help-block small text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="wrap-input100 validate-input" data-validate="New password is required">
                            
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                <span class="focus-input100"></span>
                                <span class="label-input100">New Password</span>

                                
                            
                        </div>
                        @error('password')
                                    <span class="help-block small text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="wrap-input100 validate-input" data-validate="Please confirm your password">
                            
                                <input id="password-confirm" type="password" class="input100 @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                                <span class="focus-input100"></span>
                                <span class="label-input100">Confirm Password</span>

                                
                            
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Change Password
                            </button>
                        </div>
                    </form>

@endsection

@section('image')
<img class="login100-more" src="{{ asset('loginres/images/image1ku.jpg') }}"></img>
@endsection