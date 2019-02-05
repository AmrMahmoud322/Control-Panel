<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! Html::style('/website/vendor/bootstrap/css/bootstrap.min.css') !!}
    <link rel="icon" type="image/png" href="{{ Request::root() }}/admin/img/icon.jpg"/>
    {!! Html::style('/website/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
    {!! Html::style('/website/fonts/themify/themify-icons.css') !!}
    {!! Html::style('/website/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') !!}
    {!! Html::style('/website/fonts/elegant-font/html-css/style.css') !!}
    {!! Html::style('/website/vendor/animate/animate.css') !!}
    {!! Html::style('/website/vendor/css-hamburgers/hamburgers.min.css') !!}
    {!! Html::style('/website/vendor/animsition/css/animsition.min.css') !!}
    {!! Html::style('/website/vendor/select2/select2.min.css') !!}
    {!! Html::style('/website/vendor/daterangepicker/daterangepicker.css') !!}
    {!! Html::style('/website/vendor/slick/slick.css') !!}
    {!! Html::style('/website/vendor/lightbox2/css/lightbox.min.css') !!}
    {!! Html::style('/website/css/util.css') !!}
    {!! Html::style('/website/css/main.css') !!}
    
    <title>
        شركة الهدي |
        @yield('title')
    </title>

    @yield('header')

    
</head>
<body style="direction: rtl">

        <header class="header1">
                <!-- Header desktop -->
                <div class="container-menu-header" style="font-size:26px">
                    
        
                    <div class="wrap_header">
                        <!-- Logo -->
                        <a href={{ url('/') }} class="logo">
                            <img src="{{ Request::root() }}/website/images/icons/logo.png" alt="IMG-LOGO">
                        </a>
        
                        <!-- Menu -->
                        <div class="wrap_menu">
                            <nav class="menu">
                                <ul class="main_menu">
                                    <li>
                                        <a href={{ url('/home') }}>الرئيسية</a>
                                    </li>
        
                                    <li>
                                        <a href="product.html">البضائع</a>
                                    </li>
        
                                    <li>
                                        <a href="product.html">العروض</a>
                                    </li>
        
                                    <li>
                                        <a href="about.html">من نحن</a>
                                    </li>
        
                                    <li>
                                        <a href="contact.html">اتصل بنا</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
        
                        <!-- Header Icon -->
                        <div class="header-icons">
                            
                            <div class="header-wrapicon2">
                                <ul class="nav navbar-right main_menu">
                                    <!-- Authentication Links -->
                                    @if (Auth::guest())
                                        <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                                        <li><a href="{{ route('register') }}">تسجيل عضوية</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
            
                                            <ul class="dropdown-menu" role="menu">
                                                @if(Auth::user()->admin != 0)
                                                    <li>
                                                        <a href="{{ url('/admin/panel') }}">
                                                            الذهاب للوحة التحكم
                                                        </a>
                
                                                        
                                                    </li>
                                                @endif

                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        تسجيل خروج
                                                    </a>
            
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- Header Mobile -->
                <div class="wrap_header_mobile">
                    <!-- Logo moblie -->
                    <a href="index.html" class="logo-mobile">
                        <img src="{{ Request::root() }}/website/images/icons/logo.png" alt="IMG-LOGO">
                    </a>
        
                    <!-- Button show menu -->
                    <div class="btn-show-menu">
                        <!-- Header Icon mobile -->
                        <div class="header-icons-mobile">
                            <a href="#" class="header-wrapicon1 dis-block">
                                <img src="{{ Request::root() }}/website/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                            </a>
        
                            <span class="linedivide2"></span>
        
                            <div class="header-wrapicon2">
                                <img src="{{ Request::root() }}/website/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                                <span class="header-icons-noti">0</span>
        
                                <!-- Header cart noti -->
                                <div class="header-cart header-dropdown">
                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- Authentication Links -->
                                        @if (Auth::guest())
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        @else
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            Logout
                                                        </a>
                
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif
                                    </ul>
        
                                    
                                </div>
                            </div>
                        </div>
        
                        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </div>
                    </div>
                </div>
        
                <!-- Menu Mobile -->
                <div class="wrap-side-menu" >
                    <nav class="side-menu">
                        <ul class="main-menu">
        
                            <li class="item-topbar-mobile p-l-10">
                                <div class="topbar-social-mobile">
                                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                                    <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                                    <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                                    <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                                </div>
                            </li>
        
                            <li class="item-menu-mobile">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Homepage V1</a></li>
                                    <li><a href="home-02.html">Homepage V2</a></li>
                                    <li><a href="home-03.html">Homepage V3</a></li>
                                </ul>
                                <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                            </li>
        
                            <li class="item-menu-mobile">
                                <a href="product.html">Shop</a>
                            </li>
        
                            <li class="item-menu-mobile">
                                <a href="product.html">Sale</a>
                            </li>
        
                            <li class="item-menu-mobile">
                                <a href="cart.html">Features</a>
                            </li>
        
                            <li class="item-menu-mobile">
                                <a href="blog.html">Blog</a>
                            </li>
        
                            <li class="item-menu-mobile">
                                <a href="about.html">About</a>
                            </li>
        
                            <li class="item-menu-mobile">
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>



    

    @yield('content')

    <!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                GET IN TOUCH
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                </p>

                <div class="flex-m p-t-30">
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Categories
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Men
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Women
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Dresses
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Sunglasses
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Links
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Search
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        About Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Contact Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Help
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Track Order
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Shipping
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        FAQs
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="{{ Request::root() }}/website/images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="{{ Request::root() }}/website/images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="{{ Request::root() }}/website/images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="{{ Request::root() }}/website/images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="{{ Request::root() }}/website/images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
    </div>
</footer>



	<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>




    {!! Html::script('/website/vendor/jquery/jquery-3.2.1.min.js') !!}
    {!! Html::script('/website/vendor/animsition/js/animsition.min.js') !!}
    {!! Html::script('/website/vendor/bootstrap/js/popper.js') !!}
    {!! Html::script('/website/vendor/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('/website/vendor/select2/select2.min.js') !!}
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    {!! Html::script('/website/vendor/slick/slick.min.js') !!}
    {!! Html::script('/website/js/slick-custom.js') !!}
    {!! Html::script('/website/vendor/countdowntime/countdowntime.js') !!}
    {!! Html::script('/website/vendor/lightbox2/js/lightbox.min.js') !!}
    {!! Html::script('/website/vendor/sweetalert/sweetalert.min.js') !!}
    <script type="text/javascript">
        $('.block2-btn-addcart').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to cart !", "success");
            });
        });

        $('.block2-btn-addwishlist').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>

    {!! Html::script('/website/js/main.js') !!}

    
    @yield('footer')

</body>
</html>
