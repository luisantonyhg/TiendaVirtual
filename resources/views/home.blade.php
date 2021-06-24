@extends('layouts.plantilla')

@section('badges')

<div class="slider-area">
    <div class="slider-activation owl-dot-style owl-carousel">
    <div class="single-slider pt-165 pb-225 bg-img" style="background-image:url({{asset('assets/img/INICIO2.jpg')}});">
            <div class="container-fluid">
                <div class="slider-content slider-animated-1">
                    <h1 class="first-h1 animated">"PROGRAMA DE VASO DE LECHE"</h1>
                    <h1 class="second-h1 animated">"PAGINA WEB" </h1>
                    {{-- <h1 class="third-h1 animated">N! PARA CONTRATOS</h1> --}}
                    {{-- <div class="slider-single-img-1">
                    <img class="animated" alt="categorie-img" src="{{asset('assets/img/luis4.jpg')}}">
                    </div> --}}
                </div>
            </div>
        </div>
    <div class="single-slider pt-165 pb-225 bg-img" style="background-image:url({{asset('assets/img/INICIO1.jpg')}});">
            <div class="container">
                <div class="slider-content slider-animated-2">
                    <h1 class="first-h1 animated">New Exprience</h1>
                    <h1 class="second-h1 animated">For Traviling New </h1>
                    <h1 class="third-h1 animated">Places.</h1>
                    <h3 class="animated">360.00 <span>Full Package </span></h3>
                    <div class="slider-btn mt-75">
                        <a class="animated" href="product-details.html">Shop Now</a>
                        <i class="animated icon-right-arrow"></i>
                    </div>
                    <div class="slider-single-img-2">
                    <img class="animated" alt="categorie-img" src="{{asset('assets/img/slider/')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-item-number"></div>
</div>

    
@endsection

@section('contenido')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="support-style-three pt-80">
    <div class="coustom-container">
        <div class="support-inner">
            <div class="row">
                <!-- Single Support Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-support mb-all-30">
                        <div class="support-img">
                            <i class="icon-shipped"></i>
                        </div>
                        <div class="support-desc">
                            <h4>Free Home Delivary.</h4>
                            <p>t is a long established fact that a reader will be distracted by the readable</p>
                        </div>
                    </div>
                </div>
                <!-- Single Support End -->
                <!-- Single Support Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-support mb-all-30">
                        <div class="support-img">
                            <i class="icon-support"></i>
                        </div>
                        <div class="support-desc">
                            <h4>24 x 7 Online Support</h4>
                            <p>t is a long established fact that a reader will be distracted by the readable</p>
                        </div>
                    </div>
                </div>
                <!-- Single Support End -->
                <!-- Single Support Start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-support">
                        <div class="support-img">
                            <i class="icon-debt"></i>
                        </div>
                        <div class="support-desc">
                            <h4>Secure Paument</h4>
                            <p>t is a long established fact that a reader will be distracted by the readable</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

<div class="our-categorie-two pt-80">
    <div class="coustom-container">
        <div class="single-img-categorie-active owl-carousel">
            <div class="single-img-categorie">
            <a href="#"><img src="{{asset('assets/img/luis5.jpg')}}" alt="categorie-img"></a>
                <div class="single-cat-desc">
                    <a href="#">sweater</a>
                </div>
            </div>
            <div class="single-img-categorie">
                <a href="#"><img src="{{asset('assets/img/luis5.jpg')}}" alt="categorie-img"></a>
                <div class="single-cat-desc">
                    <a href="#">bag</a>
                </div>
            </div>
            <div class="single-img-categorie">
                <a href="#"><img src="{{asset('assets/img/luis5.jpg')}}" alt="categorie-img"></a>
                <div class="single-cat-desc">
                    <a href="#">t-shirt</a>
                </div>
            </div>
            <div class="single-img-categorie">
                <a href="#"><img src="{{asset('assets/img/luis5.jpg')}}" alt="categorie-img"></a>
                <div class="single-cat-desc">
                    <a href="#">t-shirt</a>
                </div>
            </div>
            {{-- <div class="single-img-categorie">
                <a href="#"><img src="{{asset('assets/img/banner/hop-banner-10.jpg')}}" alt="categorie-img"></a>
                <div class="single-cat-desc">
                    <a href="#">cap</a>
                </div>
            </div> --}}
            {{-- <div class="single-img-categorie">
                <a href="#"><img src="{{asset('assets/img/banner/hop-banner-8.jpg')}}" alt="categorie-img"></a>
                <div class="single-cat-desc">
                    <a href="#">bag</a>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<div class="Products-area-wrapper pt-80 pb-87">
    <div class="container">
        <div class="section-title text-center mb-45">
            <h2>Shopping Products</h2>
            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div class="Products-area">
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="single-aboss-product mb-3">
                        <div class="pro-img">
                        <a href="product-details.html"><img src="{{asset('assets/img/products/p1.jpg')}}" alt=""></a>
                            <div class="pro-actions">
                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                        class="icon-zoom"></i></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                            <div class="pro-price-cart">
                                <div class="pro-home-price">
                                    <span>$199.99</span>
                                </div>
                                <div class="pro-cart">
                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="single-aboss-product mb-3">
                        <div class="pro-img">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/p2.jpg')}}" alt=""></a>
                            <div class="pro-actions">
                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                        class="icon-zoom"></i></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                            <div class="pro-price-cart">
                                <div class="pro-home-price">
                                    <span>$200.99</span>
                                </div>
                                <div class="pro-cart">
                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="single-aboss-product mb-3">
                        <div class="pro-img">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/p3.jpg')}}" alt=""></a>
                            <div class="pro-actions">
                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                        class="icon-zoom"></i></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                            <div class="pro-price-cart">
                                <div class="pro-home-price">
                                    <span>$100.80</span>
                                </div>
                                <div class="pro-cart">
                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="single-aboss-product mb-3">
                        <div class="pro-img">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/p4.jpg')}}" alt=""></a>
                            <div class="pro-actions">
                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                        class="icon-zoom"></i></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                            <div class="pro-price-cart">
                                <div class="pro-home-price">
                                    <span>$150.12</span>
                                </div>
                                <div class="pro-cart">
                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <!-- Single Product Start -->
                    <div class="single-aboss-product mb-3">
                        <div class="pro-img">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/p5.jpg')}}" alt=""></a>
                            <div class="pro-actions">
                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                        class="icon-zoom"></i></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                            <div class="pro-price-cart">
                                <div class="pro-home-price">
                                    <span>$400.50</span>
                                </div>
                                <div class="pro-cart">
                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <!-- Single Product Start -->
                    <div class="single-aboss-product mb-3">
                        <div class="pro-img">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/p6.jpg')}}" alt=""></a>
                            <div class="pro-actions">
                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                        class="icon-zoom"></i></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                            <div class="pro-price-cart">
                                <div class="pro-home-price">
                                    <span>$199.99</span>
                                </div>
                                <div class="pro-cart">
                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <!-- Single Product Start -->
                    <div class="single-aboss-product mb-3">
                        <div class="pro-img">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/p7.jpg')}}" alt=""></a>
                            <div class="pro-actions">
                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                        class="icon-zoom"></i></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                            <div class="pro-price-cart">
                                <div class="pro-home-price">
                                    <span>$500.00</span>
                                </div>
                                <div class="pro-cart">
                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <!-- Single Product Start -->
                    <div class="single-aboss-product mb-3">
                        <div class="pro-img">
                            <a href="product-details.html"><img src="{{asset('assets/img/products/p8.jpg')}}" alt=""></a>
                            <div class="pro-actions">
                                <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                        class="icon-zoom"></i></a>
                            </div>
                        </div>
                        <div class="pro-content">
                            <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                            <div class="pro-price-cart">
                                <div class="pro-home-price">
                                    <span>$350.70</span>
                                </div>
                                <div class="pro-cart">
                                    <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                                    <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                </div>
            </div>
        </div>
        <!-- Second Featured Product Activation End -->
    </div>
    <!-- Container End -->
</div>
<!-- Best Seller Product Area End Here -->
<!-- Section Banner Start -->
<div class="banner-area">
    <div class="coustom-container">
        <div class="bg-img pt-197 pb-165 mobile-res" style="background-image:url({{asset('assets/img/banner/hop-banner-1.jpg')}});">
            <div class="banner-content">
                <div class="offer-persent">
                    <p>up to <br><span>30%</span> <br> off</p>
                </div>
                <div class="discount">
                    <h3>Make a trip with <br>a great discount.</h3>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section Banner End -->
<div class="best-seller-area pt-80 pb-90">
    <div class="container">
        <div class="section-title text-center mb-45">
            <h2>"APOYO DE VASO DE LECHE"</h2>
            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div class="best-seller-active owl-carousel">
            <div class="single-aboss-product">
                <div class="pro-img">
                    <a href="product-details.html"><img src="{{asset('assets/img/products/p1.jpg')}}" alt=""></a>
                    <div class="pro-actions">
                        <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                class="icon-zoom"></i></a>
                    </div>
                </div>
                <div class="pro-content">
                    <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                    <div class="pro-price-cart">
                        {{-- <div class="pro-home-price">
                            <span>$199.99</span>
                        </div>
                        <div class="pro-cart">
                            <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                            <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="single-aboss-product">
                <div class="pro-img">
                    <a href="product-details.html"><img src="{{asset('assets/img/products/p2.jpg')}}" alt=""></a>
                    <div class="pro-actions">
                        <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                class="icon-zoom"></i></a>
                    </div>
                </div>
                <div class="pro-content">
                    <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                    <div class="pro-price-cart">
                        {{-- <div class="pro-home-price">
                            <span>$245.10</span>
                        </div>
                        <div class="pro-cart">
                            <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                            <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="single-aboss-product">
                <div class="pro-img">
                    <a href="product-details.html"><img src="{{asset('assets/img/products/p3.jpg')}}" alt=""></a>
                    <div class="pro-actions">
                        <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                class="icon-zoom"></i></a>
                    </div>
                </div>
                <div class="pro-content">
                    <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                    <div class="pro-price-cart">
                        {{-- <div class="pro-home-price">
                            <span>$400.45</span>
                        </div>
                        <div class="pro-cart">
                            <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                            <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="single-aboss-product">
                <div class="pro-img">
                    <a href="product-details.html"><img src="{{asset('assets/img/products/p4.jpg')}}" alt=""></a>
                    <div class="pro-actions">
                        <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                class="icon-zoom"></i></a>
                    </div>
                </div>
                <div class="pro-content">
                    <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                    <div class="pro-price-cart">
                        {{-- <div class="pro-home-price">
                            <span>$199.99</span>
                        </div>
                        <div class="pro-cart">
                            <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                            <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="single-aboss-product">
                <div class="pro-img">
                    <a href="product-details.html"><img src="{{asset('assets/img/products/p5.jpg')}}" alt=""></a>
                    <div class="pro-actions">
                        <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                class="icon-zoom"></i></a>
                    </div>
                </div>
                <div class="pro-content">
                    <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                    <div class="pro-price-cart">
                        {{-- <div class="pro-home-price">
                            <span>$200.00</span>
                        </div>
                        <div class="pro-cart">
                            <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                            <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="single-aboss-product">
                <div class="pro-img">
                    <a href="product-details.html"><img src="{{asset('assets/img/products/p6.jpg')}}" alt=""></a>
                    <div class="pro-actions">
                        <a data-toggle="modal" data-target="#product-window" class="quick-view" href="#"><i
                                class="icon-zoom"></i></a>
                    </div>
                </div>
                <div class="pro-content">
                    <h4><a href="product-details.html">Dorji bari East Long Style</a></h4>
                    <div class="pro-price-cart">
                        {{-- <div class="pro-home-price">
                            <span>$427.99</span>
                        </div>
                        <div class="pro-cart">
                            <a title="Add To Cart" href="#"><i class="icon-cart"></i></a>
                            <a title="Wishlist" href="#"><i class="icon-like"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
