<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="/{{asset('images/favicon/1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('asset/front/abzar/images/favicon/1.png')}}" type="image/x-icon">
    @yield('style')
    <title>
        @yield('title')
    </title>


    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/front/abzar/css/vendors/font-awesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/front/abzar/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/front/abzar/css/vendors/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/front/abzar/css/vendors/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/front/abzar/css/vendors/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/front/abzar/css/vendors/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/front/abzar/css/style.css')}}">

    <style>
        header.header-tools {
            position: unset !important;
            margin-top: 20px;
        }

        .sidebar {
            display: block;
        }

        .sidebar>li>a {
            direction: rtl;
            border-right: none;
            border-left: 2px solid var(--theme-color);
            text-transform: capitalize;
            color: #000;
            font-size: calc(14px + (16 - 14) * ((100vw - 320px) / (1920 - 320)));
            border: none;
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
            border-radius: 0;
            background-color: #f8f8f8;
            cursor: pointer;
        }

        .sidebar>li>a.active,
        .sidebar>li>a:hover {
            border: none;
            border-right: 2px solid var(--theme-color);
            border-radius: 0;
            color: var(--theme-color);
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        .sidebar>li {
            display: block;
        }
    </style>

</head>

<body class="theme-color-1 rtl">

<!-- header start -->
<header class="header-tools">
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
                    @if(Auth::check())
                        <button class="btn" style="margin-top: 3px;">
                            <a href="{{ route('cart.index') }}" style="color: white;">
                                <i class="fa fa-shopping-cart"></i>
                                مشاهده سبد خرید
                            </a>
                        </button>
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
                                        <li><a href="{{route('home')}}">خانه</a></li>
                                        <li class="mega" id="hover-cls">
                                            <a href="#">محصولات
                                            </a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            @foreach($categories as $category)
                                                                <div class="col mega-box">
                                                                    <div class="link-section">
                                                                        <div class="menu-title">
                                                                            <h5>{{$category->name}}</h5>
                                                                        </div>
                                                                        @if($category->children)
                                                                            @foreach($category->children as $children)
                                                                                <div class="menu-content">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <a
                                                                                               href="{{route('search',['category' => $children->id])}}">{{$children->name}}</a>
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
                                        <li>
                                            <a href="{{ route('about') }}">درباره ما</a>
                                        </li>
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


 <!-- breadcrumb start -->
 <div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>داشبورد</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">داشبورد</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
<!--  dashboard section start -->
<section class="dashboard-section section-b-space user-dashboard-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="dashboard-sidebar">
                    <div class="profile-top">
                        <div class="profile-image">
                            <img src="{{ asset('asset/front/abzar/images/avtar.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="profile-detail">
                            <h5>{{ Auth::user()->name . ' ' . Auth::user()->family }}</h5>
                            <h6>{{ Auth::user()->mobile }}</h6>
                        </div>
                    </div>
                    <div class="faq-tab">
                        <ul class="sidebar">
                            <li class="nav-item">
                                <a href="{{ route('profile') }}" class="nav-link @if(request()->url() == route('profile')) active @endif ">اطلاعات حساب</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('profile.addresses') }}" class="nav-link @if(request()->url() == route('profile.addresses')) active @endif ">آدرس</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">سفارشات من </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">علاقه مندی ها </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">پروفایل </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">خروج </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="">
                    <div>
                        @yield('content')
                    </div>
<!--                    <div class="tab-pane fade" id="address">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mt-0">
                                    <div class="card-body">
                                        <div class="top-sec">
                                            <h3>آدرس </h3>
                                            <button type="button" class="btn btn-sm btn-solid"
                                                onclick="$('#modal_add').modal('show')"> ادرس جدید
                                                <i class="fa fa-plus-circle" style="vertical-align: middle"></i>
                                            </button>
                                        </div>
                                        <div class="address-book-section">
                                            <div class="row g-4">
                                                @if (Auth::user()->addresses)
                                                    @foreach (json_decode(Auth::user()->addresses) as $address)
                                                        <div class="select-box active col-xl-4 col-md-6">
                                                            <div class="address-box">
                                                                <div class="top">
                                                                    <h6>{{ $address->title }}</h6>
                                                                </div>
                                                                <div class="middle">
                                                                    <div class="address">
                                                                        <p>{{ $address->state . '  -  ' . $address->city }}
                                                                        </p>
                                                                        <p>{{ $address->address }}</p>
                                                                    </div>
                                                                    <div class="number">
                                                                        <p>{{ 'کدپستی : ' . $address->postalCode }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="bottom">
                                                                    <a href="javascript:void(0)"
                                                                        data-bs-target="#edit-address"
                                                                        data-bs-toggle="modal" class="bottom_btn">ویرایش
                                                                    </a>
                                                                    <a href="#" class="bottom_btn">حذف </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="orders">
                        <div class="row">
                            <div class="col-12">
                                <div class="card dashboard-table mt-0">
                                    <div class="card-body table-responsive-sm">
                                        <div class="top-sec">
                                            <h3>سفارشات من </h3>
                                        </div>
                                        <div class="table-responsive-xl">
                                            <table class="table cart-table order-table">
                                                <thead>
                                                    <tr class="table-head">
                                                        <th scope="col">تصویر</th>
                                                        <th scope="col">شماره سفارش </th>
                                                        <th scope="col">جزئیات محصول</th>
                                                        <th scope="col">وضعیت </th>
                                                        <th scope="col">قیمت </th>
                                                        <th scope="col">بازدید </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="{{ asset('asset/front/abzar/images/pro3/1.jpg') }}"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="mt-0">#125021</span>
                                                        </td>
                                                        <td>
                                                            <span class="fs-6">تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge rounded-pill bg-success custom-badge">ارسال
                                                                شد</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/2.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="mt-0">#125367</span>
                                                        </td>
                                                        <td>
                                                            <span class="fs-6">تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge rounded-pill bg-danger custom-badge">در
                                                                انتظار</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/27.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>#125948</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-6">تی شرت پولو بنفش</p>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge rounded-pill bg-success custom-badge">ارسال
                                                                شد</span>
                                                        </td>
                                                        <td>
                                                            <p class="theme-color fs-6">149.54</p>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/28.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>#127569</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-6">تی شرت پولو بنفش</p>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge rounded-pill bg-success custom-badge">ارسال
                                                                شد</span>
                                                        </td>
                                                        <td>
                                                            <p class="theme-color fs-6">149.54</p>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/33.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>#125753</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-6">تی شرت پولو بنفش</p>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge rounded-pill bg-secondary custom-badge">لغو
                                                                شده</span>
                                                        </td>
                                                        <td>
                                                            <p class="theme-color fs-6">149.54</p>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/34.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#125021</span>
                                                        </td>
                                                        <td>
                                                            <span class="fs-6">تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge rounded-pill bg-secondary custom-badge">لغو
                                                                شده</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="wishlist">
                        <div class="row">
                            <div class="col-12">
                                <div class="card dashboard-table mt-0">
                                    <div class="card-body table-responsive-sm">
                                        <div class="top-sec">
                                            <h3>علاقه مندی ها </h3>
                                        </div>
                                        <div class="table-responsive-xl">
                                            <table class="table cart-table wishlist-table">
                                                <thead>
                                                    <tr class="table-head">
                                                        <th scope="col">تصویر</th>
                                                        <th scope="col">شماره سفارش </th>
                                                        <th scope="col">جزئیات محصول</th>
                                                        <th scope="col">قیمت </th>
                                                        <th scope="col">عملیات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/1.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="mt-0">#125021</span>
                                                        </td>
                                                        <td>
                                                            <span>تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="btn btn-xs btn-solid">
                                                                خرید کردن
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/2.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="mt-0">#125367</span>
                                                        </td>
                                                        <td>
                                                            <span>تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="btn btn-xs btn-solid">
                                                                خرید کردن
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/27.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#125948</span>
                                                        </td>
                                                        <td>
                                                            <span>تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="btn btn-xs btn-solid">
                                                                خرید کردن
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/28.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#127569</span>
                                                        </td>
                                                        <td>
                                                            <span>تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="btn btn-xs btn-solid">
                                                                خرید کردن
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/33.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#125753</span>
                                                        </td>
                                                        <td>
                                                            <span>تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="btn btn-xs btn-solid">
                                                                خرید کردن
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/34.jpg"
                                                                    class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#125021</span>
                                                        </td>
                                                        <td>
                                                            <span>تی شرت پولو بنفش</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">149.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="btn btn-xs btn-solid">
                                                                خرید کردن
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mt-0">
                                    <div class="card-body">
                                        <div class="dashboard-box">
                                            <div class="dashboard-title">
                                                <h4>پروفایل </h4>
                                                <a class="edit-link" href="#">ویرایش </a>
                                            </div>
                                            <div class="dashboard-detail">
                                                <ul>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>نام شرکت </h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>فروشگاه مد</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>ادرس ایمیل</h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>setinco@gmail.com</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>کشور / ایالت</h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                    صنعت چاپ</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>سال تاسیس</h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>2022</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>کل کارکنان</h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>101 - 200 نفر </h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>دسته بندی </h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>تن پوش</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>آدرس خیابان</h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                    صنعت چاپ</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>شهر/ایالت</h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                    صنعت چاپ</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>کد پستی</h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>60515</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dashboard-title mt-lg-5 mt-3">
                                                <h4>جزئیات ورود</h4>
                                                <a class="edit-link" href="#">ویرایش </a>
                                            </div>
                                            <div class="dashboard-detail">
                                                <ul>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>آدرس ایمیل </h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>setinco@gmail.com <a class="edit-link"
                                                                        href="#">ویرایش </a></h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>شماره تلفن </h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>+01 4485 5454<a class="edit-link"
                                                                        href="#">ویرایش </a></h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="details">
                                                            <div class="left">
                                                                <h6>پسورد </h6>
                                                            </div>
                                                            <div class="right">
                                                                <h6>******* <a class="edit-link" href="#">ویرایش
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    !-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->






<!-- footer start -->
<footer class="footer-light">
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>درباره ما </h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo">
                            <img src="{{asset('image/icons/logo.png')}}" alt="" style="width: 100px">
                        </div>
                        <p>بخواه مارکت ، سامانه آنلاین خرید موادغذایی و مواد خوراکی با قیمتی مناسب و روش های پرداخت متنوع</p>
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
</footer>
<!-- footer end -->

@yield('modal')

<!-- slider parallax effect jquery-->
{{--<script src="{{asset('/asset/front/abzar/js/parallax-effect.js')}}"></script>--}}

<!-- latest jquery-->
<script src="{{asset('asset/front/abzar/js/jquery-3.3.1.min.js')}}"></script>

<!-- menu js-->
<script src="{{asset('asset/front/abzar/js/menu.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('asset/front/abzar/js/lazysizes.min.js')}}"></script>

<!-- slick js-->
<script src="{{asset('asset/front/abzar/js/slick.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('asset/front/abzar/js/bootstrap.bundle.min.js')}}"></script>

<!-- timer js-->
{{--<script src="{{asset('asset/front/abzar/js/timer.js')}}"></script>--}}

<!-- Bootstrap Notification js-->
<script src="{{asset('asset/front/abzar/js/bootstrap-notify.min.js')}}"></script>

<!-- Zoom js-->
<script src="{{asset('asset/front/abzar/js/jquery.elevatezoom.js')}}"></script>
<!-- Theme js-->
<script src="{{asset('/asset/front/abzar/js/script.js')}}"></script>
<script>let add_product_favorite_url = "{{route('addProductToFavorites')}}";</script>
@yield('scripts')
<script>
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>
</body>

</html>
