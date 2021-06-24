@extends('layouts.plantilla')

@section('badges')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center">
                    <div class="card-header">{{ __('registro') }}</div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    
                        <div class="form-group row">
                            <label for="f-name" class="col-lg-3 col-md-3 col-form-label">{{ __('Nombre Completos') }}</label>
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
                            <label for="email" class="col-lg-3 col-md-3 col-form-label">{{ __('Correo Electronico') }}</label>
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
                            <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">{{ __('Contraseña') }}</label>
                            <div class="col-lg-6 col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">
                    
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-lg-3 col-md-3 col-form-label">{{ __('Confirmar Contraseña') }}</label>
                        
                            <div class="col-md-6 col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>
                    
                    
                        
                        <div class="register-box mt-40">
                            <button type="submit" class="login-btn float-right">{{ __('Registro') }}</button>
                        </div>
                    
                    
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

  
@endsection

