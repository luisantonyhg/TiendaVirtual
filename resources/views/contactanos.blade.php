@extends('layouts.plantilla')
<style>
    h1{
        height: 70;

        background-color: rgb(0, 174, 255);
    }
</style>

@section('badges')


    
@endsection

@section('contenido')

<div class="container-fluid">
    <h1 class="text-center">"CONTACTANOS"</h1>
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-5">
            {{-- <img src="img_girl.jpg" alt="Girl in a jacket" width="500" height="600"> --}}
            <img src="{{asset('assets/img/vasoleche.jpg')}}" alt="categorie-img"  width="500" height="600">
        </div>
        <div class="col-3 ">
            <hr>
            <hr>
            <hr>
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"><strong>NOMBRE COMPLETO</strong></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><strong>APELLIDO COMPLETO</strong></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"><strong>EMAIL</strong></label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><strong>NUMERO CELULAR</strong></label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><strong>DISTRITO</strong></label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <br>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
        
        <div class="col-2">

        </div>
       
    </div>

    <div class="brand pb-90">
        <div class="container">
            <!-- Brand Logo Active Start Here -->
            <div class="brand-logo-active brand-brown-color owl-carousel ptb-80 border-top border-bottom">
                <div class="single-brand">
                    <a href="#"><img src="{{asset('assets/img/wsp1.png')}}"width="150" height="150"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="{{asset('assets/img/face.png')}}" width="130" height="130"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="{{asset('assets/img/twitter.png')}}" width="130" height="130"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="{{asset('assets/img/instagram.png')}}" width="130" height="130"></a>
                </div>
                <div class="single-brand">
                    <a href="#"><img src="{{asset('assets/img/telegram.png')}}"width="130" height="130"></a>
                </div>
            </div>
            <!-- Brand Logo Active End Here -->
        </div>
    </div>
    


</div>
    
@endsection