<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{ asset('/asset/front/abzar/images/favicon/1.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/asset/front/abzar/images/favicon/1.png') }}" type="image/x-icon">
    <title>
        @yield('title')
    </title>

    <!--Google font-->


    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/front/abzar/css/vendors/font-awesome.css') }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/front/abzar/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/front/abzar/css/vendors/slick-theme.css') }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/front/abzar/css/vendors/animate.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/front/abzar/css/vendors/themify-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/front/abzar/css/vendors/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/front/abzar/css/style.css') }}">

    <style>
        .link-section>li>a {
            color: white !important;
        }

        .mega-menu .full-mega-menu .sm-nowrap {
            background-color: #FF5722;
            border-radius: 10px;
            color: white !important;
        }

        .footer-contant {
            color: white;
        }

        .onhover-show-div li {
            padding-left: 20px !important;
            padding-right: 0 !important;
        }

        .onhover-show-div li:hover{
            border: none;
            border-bottom: 1px solid var(--theme-color);
            border-radius: 0;
            transition: all 0.2s ease;
        }
        .onhover-dropdown{
            min-width: 190px;
        }
    </style>

</head>

<body class="tools-bg theme-color-1 rtl">

    <!-- header start -->
    <header class="header-tools" style="position: unset">
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>به سامانه بخواه مارکت خوش آمدید</li>
                                <li><i class="fa fa-phone"></i>شماره تماس : 0656-740-0915</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        @if (Auth::check())
                            <ul class="header-dropdown">
                                <li class="onhover-dropdown">
                                    <i class="fa fa-user"></i>
                                    {{ 'سلام ' . Auth::user()->name . ' عزیز !' }}
                                    <ul class="onhover-show-div">
                                        <li>
                                            <i class="fa fa-shopping-cart"></i>
                                            <a href="{{ route('cart.index') }}">سبدخرید</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-dashboard"></i>
                                            <a href="{{ route('profile') }}">مدیریت حساب</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @else
                            <ul class="header-dropdown">
                                <li class="onhover-dropdown mobile-account">
                                    <i class="fa fa-user"></i> حساب کاربری
                                    <ul class="onhover-show-div">
                                        <li><a href="{{ route('login') }}">ورود / ثبت نام</a></li>
                                    </ul>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-menu-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-right pull-right">
                                <div>
                                    <nav id="main-nav">
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                            <li>
                                                <div class="mobile-back text-end">برگشت<i
                                                        class="fa fa-angle-right ps-2"></i></div>
                                            </li>
                                            <li><a href="{{ route('home') }}">خانه</a></li>
                                            <li class="mega" id="hover-cls">
                                                <a href="#">محصولات
                                                </a>
                                                <ul class="mega-menu full-mega-menu">
                                                    <li>
                                                        <div class="container">
                                                            <div class="row">
                                                                @foreach ($categories as $category)
                                                                    <div class="col mega-box">
                                                                        <div class="link-section">
                                                                            <div class="menu-title">
                                                                                <h5>{{ $category->name }}</h5>
                                                                            </div>
                                                                            @if ($category->children)
                                                                                @foreach ($category->children as $children)
                                                                                    <div class="menu-content">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a
                                                                                                    href="{{ route('search', ['category' => $children->id]) }}">{{ $children->name }}</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                @endforeach
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('about') }}">درباره ما</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    @yield('content')

    <!-- footer section start -->
    <footer class="sticky-footer  blur-up lazyload">
        <section class="section-b-space darken-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>درباره ما </h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo">
                                <img src="{{ asset('image/icons/logo.png') }}" alt="" style="width: 100px">
                            </div>
                            <p>بخواه مارکت ، سامانه آنلاین خرید موادغذایی و مواد خوراکی با قیمتی مناسب و روش های پرداخت
                                متنوع</p>
                            <p style="text-align: center;margin-top: 0.5rem">
                            <h4>
                                * هایپرمارکت را به خانه خود بیاورید *
                            </h4>
                            </p>
                            <div class="footer-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-telegram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-mail-forward"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col offset-xl-1 ">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>دسته بندی محصولات </h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                    <li><a href="#">مردانه </a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                    <div class="col-3">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>چرا ما </h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li>قیمت مناسب</li>
                                    <li>ارسال مطمئن </li>
                                    <li>تنوع محصولات</li>
                                    <li>شرایط پرداخت</li>
                                    <li>خرید مطمئن</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>درباره ما بدانید</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>
                                        خراسان جنوبی - بیرجند - بلوار معلم - نبش خیابان فردوسی - طبقه سوم
                                    </li>
                                    <li><i class="fa fa-phone"></i>تماس با ما : 0656-740-0915</li>
                                    <li><i class="fa fa-envelope"></i>ایمیل ما : info@bekhah.ir</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer dark-subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright"></i> طراحی شده توسط گروه بخواه </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    @yield('side_basket')

    @yield('modal')

    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->

    <!-- slider parallax effect jquery-->
    <script src="{{ asset('/asset/front/abzar/js/parallax-effect.js') }}"></script>

    <!-- latest jquery-->
    <script src="{{ asset('/asset/front/abzar/js/jquery-3.3.1.min.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('/asset/front/abzar/js/menu.js') }}"></script>

    <!-- اضافه کردن به سبد js -->
    <script src="{{ asset('/asset/front/abzar/js/addtocart.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('/asset/front/abzar/js/lazysizes.min.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('/asset/front/abzar/js/slick.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('/asset/front/abzar/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('/asset/front/abzar/js/bootstrap-notify.min.js') }}"></script>

    <!-- footer reveal js-->
    <script src="{{ asset('/asset/front/abzar/js/footer-reveal.min.js') }}"></script>

    <!-- Theme js-->
    <script src="{{ asset('/asset/front/abzar/js/script.js') }}"></script>
    <script>
        let add_product_favorite_url = "{{ route('addProductToFavorites') }}";
    </script>

    @yield('scripts')

    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }

        if ($(window).width() > '576') {
            $('footer').footerReveal();
        }
    </script>

</body>

</html>
