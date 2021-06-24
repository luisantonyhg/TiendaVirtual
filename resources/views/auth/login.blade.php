@extends('layouts.plantilla')

@section('badges')

<style>
    h3{
        color: blue;
        font: oblique bold 120% cursive;
        border: 8px solid powderblue;
    }
    .login-form{
        color: blue;
        font: oblique bold 120% cursive;
        border: 8px solid powderblue;
    }


</style>
<div class="slider-area">
    <div class="slider-activation owl-dot-style owl-carousel">
    <div class="single-slider pt-165 pb-225 bg-img" style="background-image:url({{asset('assets/img/INICIO2.jpg')}});">
            <div class="container">
                <div class="slider-content slider-animated-1">
                    <h1 class="first-h1 animated">"PROYECTO INTEGRADOR"</h1>
                    <h1 class="second-h1 animated">*</h1>
                </div>
            </div>
        </div>
    <div class="single-slider pt-165 pb-225 bg-img" style="background-image:url({{asset('assets/img/INICIO1.jpg')}});">
         
        </div>
    </div>
    <div class="slide-item-number"></div>
</div>


    
@endsection

@section('contenido')


<div class="login white-bg ptb-80">
    <div class="container">
        <h3 class="login-header text-center">"BIENVENIDO AL PROGRAMA VASO DE LECHE"</h3>
        <h3 class="login-header text-center">El Programa del Vaso de Leche (PVL) es un programa social creado para proveer apoyo en la alimentación a través de la entrega de una ración diaria de alimentos a una población considerada vulnerable, con el propósito de ayudarla a elevar los niveles de nutrición en la población vulnerable de pobreza y extrema pobreza.</h3>
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
                            </div>
                        </div>
                    
                        <div class="login-details text-center mb-25">
                        
                            <button type="submit" class="btn-success">Ingresar</button>
                        </div>
                    
                      
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
