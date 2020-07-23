@extends('layouts.lay1')

@section('title','Reset Password')

@section('content')

<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
    
                        @csrf
                        <span class="login100-form-title p-b-43">
                            Reset Password
                        </span>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                            
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                <span class="focus-input100"></span>
                                <span class="label-input100">Email</span>

                                
                            
                        </div>
                        @error('email')
                                    <span class="help-block small text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Send Password Reset Link
                            </button>
                        </div>
                    </form>

@endsection

@section('image')
<img class="login100-more" src="{{ asset('loginres/images/image1ku.jpg') }}"></img>
@endsection