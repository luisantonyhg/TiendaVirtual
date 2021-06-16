@extends('layouts.plantilla')

@section('badges')

<div class="breadcrumb-area pt-65 pb-70 bg-img"
    style="background-image:url({{asset('assets/img/luis7.jpg')}});">
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> --}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    
                        <div class="form-group row">
                            <label for="f-name" class="col-lg-3 col-md-3 col-form-label">{{ __('First Name') }}</label>
                            <div class="col-lg-6 col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="form-group row">
                            <label for="email" class="col-lg-3 col-md-3 col-form-label">{{ __('E-Mail Address') }}</label>
                            <div class="col-lg-6 col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                    
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">{{ __('Password') }}</label>
                            <div class="col-lg-6 col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">
                    
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <button class="btn show-btn" type="button">Show</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-lg-3 col-md-3 col-form-label">{{ __('Confirm Password') }}</label>
                        
                            <div class="col-md-6 col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>
                    
                        <div class="form-group row align-items-center">
                            <label for="birth" class="col-lg-3 col-md-3 col-form-label">{{ __('Birthday') }}</label>
                            <div class="col-lg-6 col-md-6">
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror"
                                    name="birthday" required autocomplete="new-birthday">
                    
                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <span class="col-sm-3 form-control-comment">optional</span>
                        </div>
                    
                        <div class="form-check row p-0 mt-20">
                            <div class="col-md-6 offset-md-3">
                                <input class="form-check-input" value="#" id="offer" type="checkbox">
                                <label class="form-check-label" for="offer">Receive offers from our
                                    partners</label>
                            </div>
                        </div>
                        <div class="form-check row p-0 mt-20">
                            <div class="col-md-8 offset-md-3">
                                <input class="form-check-input" value="#" id="subscribe" type="checkbox">
                                <label class="form-check-label" for="subscribe">Sign up for our
                                    newsletter<br>Subscribe to our newsletters now and stay up-to-date with new
                                    collections, the latest lookbooks and exclusive offers..</label>
                            </div>
                        </div>
                        <div class="register-box mt-40">
                            <button type="submit" class="login-btn float-right">{{ __('Register') }}</button>
                        </div>
                    
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
