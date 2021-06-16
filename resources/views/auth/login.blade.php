@extends('layouts.plantilla')

@section('badges')

<div class="breadcrumb-area pt-65 pb-70 bg-img"
    style="background-image:url({{asset('assets/img/luis6.jpg')}});">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h3>Login</h3>
            <ol class="breadcrumb breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="account.html">Account</a></li>
                <li class="breadcrumb-item active">Login</li>
            </ol>
        </div>
    </div>
</div>
    
@endsection

@section('contenido')


<div class="login white-bg ptb-80">
    <div class="container">
        <h3 class="login-header">Log in to your account </h3>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">{{ __('E-Mail Address') }}</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus id="email" placeholder="Email">
                    
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">{{ __('Password') }}</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                                    name="password" placeholder="Password" id="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <button class="btn show-btn" type="button">Show</button>
                            </div>
                        </div>
                    
                        <div class="login-details text-center mb-25">
                            <a href="forgot-password.html">Forgot your password? </a>
                            <button type="submit" class="login-btn">Sign in</button>
                        </div>
                    
                        <div class="login-footer text-center">
                            <p>No account? <a href="register.html">Create one here</a></p>
                        </div>
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
