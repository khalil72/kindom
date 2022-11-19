@extends('layouts.app')

@section('content')
<style>
    .bg{
        background-image:url('{{asset('assets/media/background/gate.png')}}');
    background-size:cover;
    background-position:center center;
    height:100vh;
    }
</style>



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Plz Sign In') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid  bg">
   
         <div class="form-body ">
        <div class="row">
            <div class="form-holder">
                <div class="col-md-12 text-center mt-5 mt-md-5 mb-5 mb-md-5 pt-2 pt-md-4">
                    <img src="{{ asset('assets/media/logos/kindom2.png') }}" alt="logo"   class="logo-img">
                </div>
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="font-size:28px; ">Plz Sign In</h3>
                        <p>Fill in the data below.</p>
                        @if (session()->has('message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-md-12">
                                <input id="email" type="email" class="mb-2 mb-md-3 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address" 
                                
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                           <div class="col-md-12">
                              <input id="password" type="password" placeholder="Password" class="mb-2 mb-md-3 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>

                            <div class="col-md-12 mt-3 text-end mb-2 mb-md-3">
                                <a href="{{ route('password.request') }}"> Forgot password?</a>
                            </div>
    
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="mb-2 mb-md-3 btn btn-primary w-100">Login</button>
                            </div>

                            <a href="{{ route('register') }}" class="mb-2 mb-md-3 w-100 btn-md my-2 btn btn-warning"> Sign up / Create an account.</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>
    
   
</div>
@endsection
