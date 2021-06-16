@extends('layouts.plantilla')


@section('badges')

<div class="breadcrumb-area pt-65 pb-70 bg-img" style="background-image:url({{asset('assets/img/luis.png')}});">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h3></h3>
            <ol class="breadcrumb breadcrumb-list">
                <li class="breadcrumb-item"><a href="index.html"></a></li>
                <li class="breadcrumb-item"><a href="account.html"></a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </div>
    </div>
</div>

@endsection

@section('contenido')

<div class="main-shop-page white-bg ptb-80">
    <div class="container">
    
        <div class="row">
        
            <div class="col-lg-3 col-md-4">
                <div class="sidebar">
            
                    <div class="sidebar-categorie mb-30">
                        <h3 class="sidebar-title">categorias</h3>
                        <ul class="sidbar-style">
                            @forelse ($categorias as $categoria)

                            <li class="form-check">
                                <input class="form-check-input" value="#" id="camera" type="checkbox">
                                <label class="form-check-label" for="camera">{{$categoria->nombre}}</label>
                            </li>
                            @empty
                            <li>
                                No existen Categorias :(
                            </li>

                            @endforelse
                        </ul>
                    </div>
                </div>
                
                <div class="sidebar-banner mt-30">
                    <a href="shop.html"><img class="ful" src="{{asset('assets/img/luis3.png')}}"
                            alt=""></a>
                </div>
                
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="shop-banner mb-40">
                    <img src="{{asset('assets/img/luis2.jpg')}}" alt="banner-img">
                </div>
                <div class="shop-area mb-all-40">
                    <div class="tab-content Products-area">
                        <div id="grid-view" class="tab-pane fade show active">
                            <div class="row">
                                @forelse ($productos as $producto)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-aboss-product mb-3">
                                        <div class="pro-img">
                                            <a href="product-details.html"><img
                                                    src="{{asset("assets/img/imagenes/$producto->descimg")}}" alt=""></a>
                                            <div class="pro-actions">
                                                <a data-toggle="modal" data-target="#product-window" class="quick-view"
                                                    href="#"><i class="icon-zoom"></i></a>
                                            </div>
                                        </div>
                                        <div class="pro-content">
                                            <h4><a href="product-details.html">{{$productos->nombre}}</a></h4>
                                            <p>{{$producto->descripcion}}</p>
                                            <div class="pro-price-cart">
                                                <div class="pro-home-price">
                                                    <span>{{$producto->precio}}</span>
                                                </div>
                                                <div class="pro-cart">
                                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @empty

                                @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection