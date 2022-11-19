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
                <div class="card-header">{{ __('Create Account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid bg">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="col-md-12 text-center mt-2 mt-md-5 mb-2 mb-md-5" >
                    <img src="{{ asset('assets/media/logos/kindom2.png') }}" alt="logo"  class="logo-img">
                </div>
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="font-size:28px; " class=''>Create Account</h3>
                        <p class='mb-1'>Fill in the data below.</p>

                        {{-- Start Form error message display --}}

                        @if (session()->has('message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- End Form error message display --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Name" class="mb-2 mb-md-3 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="col-md-12">
                              <input id="email" type="email" placeholder="E-mail Address" class="mb-2 mb-md-3 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="mb-2 mb-md-3 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="mb-2 mb-md-3 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="col-md-12 mt-3 text-end mb-2 mb-md-3">
                                <a href="{{ route('password.request') }}"> Forgot password?</a>
                            </div>
    
                            <div class="form-button mt-3 mb-3">
                                <button id="submit" type="submit" class="mb-2 mb-md-3 btn btn-primary w-100">Register</button>
                            </div>

                            <a href="{{ route('login') }}" class="mb-2 mb-md-3 w-100 btn-md my-2 btn btn-warning">Already have an account? Sign in</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
