<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TIENDA DE ROPA MARICOS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontello.css')}}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- Modernizer js -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">


        <div class="popup_wrapper">
            <div class="test bg-image-7">
                <span class="popup_off"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                <div class="subscribe_area text-center mt-50">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Hopsop mailing list to receive updates on new arrivals, special offers and other
                        discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message"
                                placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- ENCABEZADO -->
        <header class="header-sticky">
            <div class="coustom-container">
                <div class="main-header">
                    <div class="row">
                        <!-- Logo Start Here -->
                        <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6 col-5">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('assets/img/logo/logo.png')}}"
                                        alt="brand-image"></a>
                            </div>
                        </div>
                        <!-- Logo End Here -->
                        <!-- Header Menu & Cart Area Start Here -->
                        <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                            <div class="maain-menu-area maain-menu-area-three  position-relative pl-155">
                                <!-- Primary Menu Start -->
                                <div class="primary-menu">
                                    <nav>
                                        <ul class="primary-menu-list d-flex">
                                            <li class="active"><a href="{{route('home')}}">Inicio</a>

                                            </li>

                                            <li>
                                                <a href="{{ route('blog')}}">Blog</a>

                                            </li>
                                            <li><a href="{{route ('productos')}}">Productos</a>

                                            </li>
                                            <li><a href="{{route('contactanos')}}">Contactanos</a></li>

                                            <li><a href="{{route('login')}}">login</a>

                                            </li>

                                            <li><a href="{{route('register')}}">Registrate</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form></li>

                                        </ul>


                                    </nav>
                                </div>

                            </div>
                        </div>
                        

                    </div>
                    {{-- <!-- Mobile Menu Start -->
                    <div class="mobile-menu d-block d-lg-none">
                        <nav>
                            <ul>
                                <li><a href="index.html">home</a>
                                    <!-- Home Version Dropdown Start -->
                                    <ul>
                                        <li><a href="index.html">Home Version 1</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                    </ul>
                                    <!-- Home Version Dropdown End -->
                                </li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="shop.html">shop</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="#">Traveling</a>
                                            <ul>
                                                <li><a href="shop.html">Bag </a></li>
                                                <li><a href="shop.html">Bottle </a></li>
                                                <li><a href="shop.html">Shoes </a></li>
                                                <li><a href="shop.html">uggase</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Tracking</a>
                                            <ul>
                                                <li><a href="shop.html">Shoes</a></li>
                                                <li><a href="shop.html">T shirt</a></li>
                                                <li><a href="shop.html">Scrapper</a></li>
                                                <li><a href="shop.html">Others</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Hiking</a>
                                            <ul>
                                                <li><a href="shop.html">Phoenix</a></li>
                                                <li><a href="shop.html">Parasuits</a></li>
                                                <li><a href="shop.html">Sticks </a></li>
                                                <li><a href="shop.html">Jumpware </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                        <li><a href="blog.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-audio.html">blog details audio</a></li>
                                        <li><a href="blog-details-blockquote.html">blog details blockquote</a></li>
                                        <li><a href="blog-details-gallery.html">blog details gallery</a></li>
                                        <li><a href="blog-details-video.html">blog details video</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="#">pages</a>
                                    <!-- Mobile Menu Dropdown Start -->
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-list.html">Shop list</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="forgot-password.html">forgot password</a></li>
                                    </ul>
                                    <!-- Mobile Menu Dropdown End -->
                                </li>
                                <li><a href="contact.html">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Mobile Menu End --> --}}
                </div>
            </div>
            <!-- Container End -->
        </header>

        @yield('badges')

        {{-- cuerpo --}}

        @yield('contenido')


        <!-- SUBCRIPCION-->



        <!-- PIE DE PAGINA-->
        <footer class="footer-area bg-img footer-white-color">
            <div class="footer-top bg-img pt-82 pb-50"
                style="background-image:url({{asset('assets/img/bg-image/footer-bg-2.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 d-md-block d-lg-none">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-55">
                                    <h4>Language</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">اللغة العربية</a></li>
                                        <li><a href="#">Bangla </a></li>
                                        <li><a href="#">Hindi </a></li>
                                        <li><a href="#">Spanish </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 d-md-block d-lg-none">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-55">
                                    <h4>Currency</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">$ US dollar</a></li>
                                        <li><a href="#">$ SAR Riyal</a></li>
                                        <li><a href="#">$ INR Rupee</a></li>
                                        <li><a href="#">$ AED Dirham </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-4">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-55">
                                    <h4>Support</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">QUeality</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">log in</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Store Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-4">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-55">
                                    <h4>Account</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="account.html">Order History</a></li>
                                        <li><a href="wishlist.html">WishList</a></li>
                                        <li><a href="cart.html">Cart Detail</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-4">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-55">
                                    <h4>Services</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">Free Shipping</a></li>
                                        <li><a href="#">Product Delivary</a></li>
                                        <li><a href="#">Product Tracking</a></li>
                                        <li><a href="#">Online Pyament</a></li>
                                        <li><a href="#">Discount</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-4">
                            <div class="footer-widget">
                                <div class="footer-logo mb-43">
                                    <a href="index.html">
                                        <img alt="brand-image" src="{{asset('assets/img/logo/footer-logo2.png')}}">
                                    </a>
                                </div>
                                <div class="footer-addres">
                                    <p>7 Sevents Streth, jobinas road Tirmonial Poient. USA</p>
                                    <div class="footer-phn-email">
                                        <a href="#">+14 2266 3336 55</a>
                                        <a href="#">+14 2266 3336 66</a>
                                    </div>
                                    <div class="footer-phn-email">
                                        <a href="#">domain@mail.com</a>
                                        <a href="#">company@support.info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright text-center">
                        <p>Copyright ©<a href="#">Hopsop</a>. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>


        {{-- MODALS --}}
        <div class="main-product-thumbnail quick-thumb-content">
            <div class="container">

                <div class="modal fade" id="product-window">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-lg-6 col-md-6 mb-all-40">
                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div id="pro-1" class="tab-pane fade show active">
                                                <a data-fancybox="images"
                                                    href="{{asset('assets/img/products/p3.jpg')}}"><img
                                                        src="{{asset('assets/img/products/p3.jpg')}}"
                                                        alt="product-view"></a>
                                            </div>
                                            <div id="pro-2" class="tab-pane fade">
                                                <a data-fancybox="images"
                                                    href="{{asset('assets/img/products/p5.jpg')}}"><img
                                                        src="{{asset('assets/img/products/p5.jpg')}}"
                                                        alt="product-view"></a>
                                            </div>
                                            <div id="pro-3" class="tab-pane fade">
                                                <a data-fancybox="images"
                                                    href="{{asset('assets/img/products/p7.jpg')}}"><img
                                                        src="{{asset('assets/img/products/p7.jpg')}}"
                                                        alt="product-view"></a>
                                            </div>
                                            <div id="pro-4" class="tab-pane fade">
                                                <a data-fancybox="images"
                                                    href="{{asset('assets/img/products/p2.jpg')}}"><img
                                                        src="{{asset('assets/img/products/p2.jpg')}}"
                                                        alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->
                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <div class="thumb-menu owl-carousel nav nav-style tabs-area" role="tablist">
                                                <a class="active" data-toggle="tab" href="#pro-1"><img
                                                        src="{{asset('assets/')}}img/thumbail/t1.jpg"
                                                        alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#pro-2"><img
                                                        src="{{asset('assets/img/thumbail/t2.jpg')}}"
                                                        alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#pro-3"><img
                                                        src="{{asset('assets/img/thumbail/t3.jpg')}}"
                                                        alt="product-thumbnail"></a>
                                                <a data-toggle="tab" href="#pro-4"><img
                                                        src="{{asset('assets/img/thumbail/t4.jpg')}}"
                                                        alt="product-thumbnail"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thubnail-desc fix">
                                            <h3 class="product-header">Faded Short Sleeves T-shirt</h3>
                                            <ul class="rating-summary">
                                                <li class="rating-pro">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="read-review"><a href="#">read reviews (1)</a></li>
                                                <li class="write-review"><a href="#">write review</a></li>
                                            </ul>
                                            <div class="pro-price mt-10">
                                                <p class="d-flex align-items-center"><span
                                                        class="prev-price">16.51</span><span
                                                        class="price">$15.19</span><span class="saving-price">-5%</span>
                                                </p>
                                            </div>
                                            <p class="pro-desc-details">Faded short sleeves t-shirt with high neckline.
                                                Soft and stretchy material for a comfortable fit. Accessor- ize with a
                                                straw hat and you're ready for summer!</p>
                                            <div class="product-size mtb-30 clearfix">
                                                <label>Size</label>
                                                <select class="">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="color clearfix mb-30">
                                                <label>color</label>
                                                <ul class="color-list">
                                                    <li>
                                                        <a class="white" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="quatity-stock">
                                                <label>Quantity</label>
                                                <ul class="d-flex flex-wrap  align-items-center">
                                                    <li class="box-quantity">
                                                        <form action="#">
                                                            <input class="quantity" type="number" min="1" value="1">
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="pro-cart">add to cart</button>
                                                    </li>
                                                    <li class="pro-ref">
                                                        <p><span class="in-stock"><i class="ion-checkmark-round"></i> in
                                                                stock</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="social-sharing mt-30">
                                                <ul>
                                                    <li><label>share</label></li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                            </div>
                            <!-- Modal footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- jquery 3.2.1 -->
    <script src="{{asset('assets/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Countdown js -->
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <!-- Mobile menu js -->
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <!-- ScrollUp js -->
    <script src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
    <!-- Fancybox js -->
    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <!-- Jquery nice select js -->
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- Jquery ui price slider js -->
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Bootstrap popper js -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Plugin js -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- Main activaion js -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>