@extends('layouts.frontend.product-layout')
@section('style')
    <style>
        button.btn.rounded-circle {
            padding: 7px 9px 5px 9px;
            border: 1px solid red;
            color: red;
        }

        button.btn.rounded-circle:hover {
            background-color: var(--theme-color);
            color: white;
        }
        .row .modal-footer{
            margin-top: 0.8rem;
            color: var(--theme-color);
            font-weight: bold;
        }
    </style>
@endsection
@section('title')
    جزئیات محصول
@endsection
@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>محصول
                            <span class="title text-danger">{{$product->product->name}}</span>
                        </h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->product->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-10 col-xs-12">
                        <div>
                            @if(sizeof(json_decode($product->pictures)) > 0 )
                                <img
                                    src="{{asset('/image/shop_product/'.$product->id.'/'.json_decode($product->pictures , true)[0]['picture'])}}"
                                    alt="{{$product->product->name}}"
                                    class="img-fluid">
                            @else
                                <img
                                    src="{{asset('/image/shop_product/no_picture.png')}}"
                                    alt="{{$product->product->name}}"
                                    class="img-fluid">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-12">
                        <div class="row">
                            <div class="col-12 p-0">
                                @if(sizeof(json_decode($product->pictures)) > 0 )
                                    @foreach(json_decode($product->pictures , true) as $picture)
                                        <div class="w-75px h-75px">
                                            <img
                                                src="{{asset('/image/shop_product/'.$product->id.'/'.$picture['picture'])}}"
                                                alt="" class="img-fluid">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-right product-description-box">
                            <div class="product-count">
                                <ul>
                                    <li>
                                        <img src="{{asset('asset/front/abzar/images/fire.gif')}}" class="img-fluid"
                                             alt="image">
                                        <span class="p-counter">{{$product->sales()->count('shop_order_products.count')}}</span>
                                        <span class="lang">سفارش </span>
                                    </li>
                                    <li>
                                        <img src="{{asset('asset/front/abzar/images/person.gif')}}"
                                             class="img-fluid user_img" alt="image">
                                        <span class="p-counter">{{$product->visits()->count()}}</span>
                                        <span class="lang">بازدید این محصول </span>
                                    </li>
                                </ul>
                            </div>
                            <h2>{{$product->product->name}}</h2>
                            <div class="border-product">
                                <h6 class="product-title">جزئیات محصول </h6>
                                <p>{{$product->product->description}}</p>
                            </div>
                            <div class="single-product-tables border-product detail-section">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>فروشگاه :</td>
                                        <td>{{$product->shop->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>دسته بندی :</td>
                                        <td>{{$product->product->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>برند :</td>
                                        <td>{{$product->brand->name}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">پرداخت 100٪ مطمئن</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-right product-form-box">
                            @if($product->price > $product->discounted_price)
                                <h4>
                                    <del>{{number_format($product->price,0)." ریال"}}</del>
                                    <span>تخفیف</span></h4>
                                <h3>{{number_format($product->discounted_price,0)." ريال"}}</h3>
                            @else
                                <h3>{{number_format($product->price , 0)." ريال"}}</h3>
                            @endif
                            <div id="selectSize" class="addeffect-section product-description border-product">
                                <!--
                                <h6 class="product-title">فروش به پایان می رسد</h6>
                                <div class="timer">
                                    <p id="demo"></p>
                                </div>
                                -->
                                <h6 class="product-title">تعداد </h6>
                                <div class="qty-box" id="product_count_box">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-left-minus" data-type="plus"
                                                    data-field="">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"
                                               max="{{$product->count}}">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-right-plus" data-type="minus"
                                                    data-field="">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <span id="cart_buttons">
                                    @if($product->is_inCart)
                                        <a href="{{route('cart.index')}}" class="btn btn-solid hover-solid btn-animation btn-rounded">
                                            <span class="indicator-label">مشاهده سبد</span>
                                        </a>
                                    @else
                                        <a id="product_add_to_cart" data-id="{{$product->id}}"
                                           class="btn btn-solid hover-solid btn-animation btn-rounded">
                                            <span class="indicator-label">اضافه کردن به سبد</span>
                                            <span class="indicator-progress" style="display: none">لطفا صبر کنید...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </a>
                                    @endif
                                </span>
                                {{--<a id="product_add_to_favorite" class="btn btn-solid" data-id="{{$product->id}}">
                                    <span class="indicator-label">افزودن به موردعلاقه</span>
                                    <span class="indicator-progress" style="display: none">لطفا صبر کنید...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </a>--}}
                                <button type="button" class="btn rounded-circle"
                                        id="product_add_to_favorite"
                                        data-id="{{$product->id}}" data-mdb-ripple-color="dark">
                                    <i class="fa @if($product->is_Favorite) fa-heart @else fa-heart-o @endif"
                                       style="vertical-align: middle;"></i>
                                    <span
                                        class="spinner-border spinner-border-sm align-middle"
                                        style="display: none;"></span>
                                </button>
                            </div>
                            <div class="row modal-footer">
                                <span>{{"* واحد فروش : ".$product->unit->name." * "}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                                href="#top-home" role="tab" aria-selected="true"><i
                                    class="icofont icofont-ui-home"></i>جزئیات </a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab"
                                                href="#top-review" role="tab" aria-selected="false"><i
                                    class="icofont icofont-contacts"></i>نظر بنویسید </a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                             aria-labelledby="top-home-tab">
                            <div class="product-tab-discription">
                                <div class="part">
                                    <p>{{$product->description}}</p>
                                </div>
                                @if(sizeof($product->properties) > 0)
                                    @foreach($product->properties as $property)
                                        <div class="part">
                                            <h5 class="inner-title">{{$property->property->name}}</h5>
                                            <p>{{$property->value}}</p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                            <form class="theme-form">
                                <div class="form-row row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <label>رتبه بندی</label>
                                            <div class="media-body ms-3">
                                                <div class="rating three-star"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">نام</label>
                                        <input type="text" class="form-control" id="name"
                                               placeholder="نام خود را وارد کنید " required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">ایمیل</label>
                                        <input type="text" class="form-control" id="email" placeholder="ایمیل"
                                               required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">عنوان نظر </label>
                                        <input type="text" class="form-control" id="review"
                                               placeholder="موضوع را وارد کنید " required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">عنوان نظر </label>
                                        <textarea class="form-control" placeholder="متن خود را وارد کنید "
                                                  id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-solid" type="submit">نظر خود را ارسال کنید</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->

    <!-- product section start -->
    <div style="margin-top: 2.5rem">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>محصولات مرتبط</h2>
                </div>
            </div>
        </div>
        <section class="full-banner parallax small-slider tools-parallax-product">
            <div class="container">
                <div class="tools-grey ratio_square">
                    <div class="product-5 product-m">
                        @foreach($similarProducts as $product)
                            <div class="product-box product-wrap">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{route('ware.show' , $product->slug)}}">
                                            @if(sizeof(json_decode($product->pictures)) > 0 )
                                                <img alt=""
                                                     src="{{asset('image/shop_product/'.$product->id.'/'.json_decode($product->pictures)[0]->picture)}}"
                                                     class="img-fluid blur-up lazyload bg-img">
                                            @else
                                                <img alt="" src="{{asset('image/shop_product/no_picture.png')}}"
                                                     class="img-fluid blur-up lazyload bg-img">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <a title="اضافه کردن به علاقه مندی" class="product_add_to_fav" data-id="{{ $product->id }}">
                                            <i class="fa fa-heart"></i>
                                            <span
                                            class="spinner-border spinner-border-sm align-middle"
                                            style="display: none;"></span>
                                        </a>
                                        <button type="button" data-id="{{$product->id}}" title="اضافه کردن به سبد"
                                                class="product_add_to_cart"><i
                                                class="ti-shopping-cart "></i>
                                            اضافه کردن به سبد
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="{{route('ware.show' , $product->slug)}}">
                                        <h6>{{$product->product->name}}</h6>
                                    </a>
                                    <h4>
                                        {{number_format($product->price , 0)}}
                                        <span>ریال</span>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- product section end -->
    </div>

    <!-- product section start -->
    <div style="margin-top: 2.5rem">
        <div class="container">
            <div class="row">
                <div class="col-12 product-related">
                    <h2>دیگران خریده اند</h2>
                </div>
            </div>
        </div>
        <section class="full-banner parallax small-slider tools-parallax-product">
            <div class="container">
                <div class="tools-grey ratio_square">
                    <div class="product-5 product-m">
                        @foreach($otherHaveBoughtProducts as $product)
                            <div class="product-box product-wrap">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{route('ware.show' , $product->slug)}}">
                                            @if(sizeof(json_decode($product->pictures)) > 0 )
                                                <img alt=""
                                                     src="{{asset('image/shop_product/'.$product->id.'/'.json_decode($product->pictures)[0]->picture)}}"
                                                     class="img-fluid blur-up lazyload bg-img">
                                            @else
                                                <img alt="" src="{{asset('image/shop_product/no_picture.png')}}"
                                                     class="img-fluid blur-up lazyload bg-img">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <a title="اضافه کردن به علاقه مندی"><i
                                            class="fa fa-heart product_add_to_fav" data-id="{{ $product->id }}"></i></a>
                                        <button type="button" data-id="{{$product->id}}" title="اضافه کردن به سبد"
                                                class="product_add_to_cart"><i
                                                class="ti-shopping-cart "></i>
                                            اضافه کردن به سبد
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="{{route('ware.show' , $product->slug)}}">
                                        <h6>{{$product->product->name}}</h6>
                                    </a>
                                    <h4>
                                        {{number_format($product->price , 0)}}
                                        <span>ریال</span>
                                    </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- product section end -->
    </div>

@endsection
@section('modal')
    <!-- Add to cart modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg addtocart">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">
                                        <a href="#">
                                            <img class="img-fluid blur-up lazyload pro-img"
                                                 src="../assets/images/fashion/product/43.jpg" alt="">
                                        </a>
                                        <div class="media-body align-self-center text-center">
                                            <a href="#">
                                                <h6>
                                                    <i class="fa fa-check"></i>ایتم
                                                    <span>محصولات زیبایی </span>
                                                    <span> با موفقیت به سبد اضافه شد </span>
                                                </h6>
                                            </a>
                                            <div class="buttons">
                                                <a href="#" class="view-cart btn btn-solid">سبد خرید شما </a>
                                                <a href="#" class="checkout btn btn-solid">بررسی</a>
                                                <a href="#" class="continue btn btn-solid">ادامه خرید </a>
                                            </div>

                                            <div class="upsell_payment">
                                                <img src="../assets/images/payment_cart.png"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-section">
                                        <div class="col-12 product-upsell text-center">
                                            <h4>لیست کامل خرید</h4>
                                        </div>
                                        <div class="row" id="upsell_product">
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/fashion/product/1.jpg"
                                                                 class="img-fluid blur-up lazyload mb-1"
                                                                 alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>ساعت خاص </span></a></h6>
                                                        <h4><span>125</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/fashion/product/34.jpg"
                                                                 class="img-fluid blur-up lazyload mb-1"
                                                                 alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>ساعت خاص </span></a></h6>
                                                        <h4><span>125</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/fashion/product/13.jpg"
                                                                 class="img-fluid blur-up lazyload mb-1"
                                                                 alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>ساعت خاص </span></a></h6>
                                                        <h4><span>125</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/fashion/product/19.jpg"
                                                                 class="img-fluid blur-up lazyload mb-1"
                                                                 alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>ساعت خاص </span></a></h6>
                                                        <h4><span>125</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add to cart modal popup end-->
    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->

    <!-- اضافه کردن به سبد notification -->
    <div class="added-notification">
        <img src="{{asset('asset/front/abzar/images/fashion/pro/1.jpg')}}" class="img-fluid" alt="">
        <h3>اضافه کردن به سبد</h3>
    </div>
    <!-- اضافه کردن به سبد notification -->
@endsection
@section('scripts')
    <script>
        let isLogin = "{{Auth::check()}}";
        let addToCartUrl = "{{route('addToCart')}}";
        let token = "{{csrf_token()}}";
        let redirect_login_url = "{{route('redirect_login')}}";
        let cart_url = "{{route('cart.index')}}" ;
    </script>
    <script src="{{asset('/asset/front/abzar/js/custom/product_add_to_cart.js')}}"></script>
@endsection
