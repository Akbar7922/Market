@extends('layouts.frontend.product-layout')
@section('style')
    <style>
        span.checkout-header {
            width: 35%;
            display: inline-block;
        }

        span.checkout-info {
            width: 45%;
            display: inline-block;
            color: var(--theme-color);
        }

        .img-icon {
            width: 95px;
            margin-bottom: 0.8rem;
        }

        .pay-type-title {
            font-size: 18px;
            font-weight: 200;
            display: block;
        }

        button#btn_add_address {
            float: left;
            margin-left: 5px;
            font-size: 12px;
            margin-bottom: 5px;
        }

        button#btn_add_address > i {
            margin-right: 3px;
        }

        button.submit {
            padding: 10px 35px 10px 35px;
            font-size: 1rem;
            font-weight: 500;
        }

        button.cancell {
            padding: 10px 25px 10px 25px;
        }

        input[name=title], input[name=postal_code], input[name=address] {
            margin-bottom: 5px;
        }

        span.error-message {
            color: red;
            margin-right: 5px;
        }
    </style>
@endsection
@section('title')
    تایید نهایی خرید
@endsection
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>بررسی</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">بررسی</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form id="order_form" action="{{route('submitOrder' , 0)}}" method="post">
                        @csrf
                        <input type="hidden" name="order_address" id="order_address">
                        <div class="row">
                            <div class="col-lg-7 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>محصول <span>جمع</span></div>
                                        </div>
                                        <ul class="qty">
                                            @foreach(Auth::user()->carts as $product)
                                                <li>
                                                    {{$product->shopProduct->product->name}} × {{$product->count}}
                                                    <span>{{number_format($product->shopProduct->price * $product->count , 0)." ريال"}}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul class="sub-total" data-total-price="{{$total_cart_price}}">
                                            <li>
                                                <span class="checkout-header">مبلغ محصولات</span>
                                                <span class="checkout-info">
                                                    <span>{{number_format($total_cart_price , 0)}}</span>
                                                    <span> ریال</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="checkout-header">هزینه ارسال</span>
                                                <span class="checkout-info">
                                                    <span id="shopping_cost"></span>
                                                    <span> ریال</span>
                                                </span>
                                            </li>
                                        </ul>
                                        <ul class="sub-total">
                                            <li>
                                                <span class="checkout-header">مجموع</span>
                                                <span class="checkout-info">
                                                    <span
                                                        id="total_cart_price">{{number_format($total_cart_price , 0)}}</span>
                                                    <span> ریال</span>
                                                </span>
                                            </li>
                                        </ul>
                                        <ul class="sub-total">
                                            <li>روش ارسال</li>
                                            <li style="text-align: center">
                                                @foreach($send_types as $send_type)
                                                    <div class="shopping-option radio_type_option"
                                                         data-cost="{{$send_type->base_cost}}">
                                                        <input type="radio" name="send_type" value="{{$send_type->id}}"
                                                               id="sendType{{$send_type->id}}">
                                                        <label
                                                            for="sendType{{$send_type->id}}">{{$send_type->name}}</label>
                                                    </div>
                                                @endforeach
                                            </li>
                                        </ul>
                                        @if(Auth::user()->groups()->where('group_id' , 1)->exists())
                                        <ul class="sub-total">
                                            <li>
                                                <label for="installment">
                                                    <input type="checkbox" name="isInstallment" id="installment"
                                                           value="1"
                                                           checked style="vertical-align: middle">
                                                    <span>پرداخت اقساطی</span>
                                                </label>
                                            </li>
                                            <li id="installmentsDiv">
                                                <div class="row installment_row">
                                                    <span class="fa fa-dot-circle-o"></span>
                                                    <span> قسط اول :
                                                            <span style="text-align: left">
                                                            {{number_format($installments['installment'] , 0)}} &nbsp; ریال
                                                        </span> &nbsp;&nbsp; - &nbsp;&nbsp;
                                                        تاریخ سررسید : &nbsp;&nbsp;&nbsp;
                                                        {{$installments['first_installment']}}
                                                    </span>
                                                </div>
                                                <div class="row installment_row">
                                                    <span class="fa fa-dot-circle-o"></span>
                                                    <span> قسط دوم :
                                                            <span style="text-align: left">
                                                            {{number_format($installments['installment'] , 0)}} &nbsp; ریال
                                                        </span> &nbsp;&nbsp; - &nbsp;&nbsp;
                                                        تاریخ سررسید : &nbsp;&nbsp;&nbsp;
                                                        {{$installments['latest_installment']}}
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                        @endif
                                        <ul class="sub-total">
                                            <li>روش پرداخت</li>
                                            <li style="text-align: center">
                                                @foreach($pay_types as $pay_type)
                                                    <div class="shopping-option radio_type_option">
                                                        <input type="radio" name="pay_type" value="{{$pay_type->id}}"
                                                               id="payType{{$pay_type->id}}">
                                                        <label for="payType{{$pay_type->id}}">
                                                            <img src="{{asset('/image/icons/'.$pay_type->icon)}}"
                                                                 alt="{{$pay_type->name}}" class="img-icon"/>
                                                            <span class="pay-type-title">{{$pay_type->name}}</span>
                                                            <span
                                                                class="description">{{$pay_type->description()}}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>اطلاعات مشتری</h3>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">نام کوچک</div>
                                        <span>{{Auth::user()->name}}</span>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">نام خانوادگی</div>
                                        <span>{{Auth::user()->family}}</span>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">تلفن همراه</div>
                                        <span>{{Auth::user()->mobile}}</span>
                                    </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">
                                                آدرس
                                                <button type="button" id="btn_add_address"
                                                        class="btn btn-outline-primary btn-rounded">
                                                    <text>
                                                        افزودن آدرس جدید
                                                    </text>
                                                    <i class="fa fa-plus-circle"></i>
                                                </button>
                                            </div>
                                            @if(Auth::user()->addresses )
                                            <select name="address_list">
                                                @foreach(json_decode(Auth::user()->addresses) as $key => $address)
                                                    <option value="{{$key}}">
                                                        {{$address->title .' - '.$address->city.' - '.$address->address}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @endif
                                        </div>
                                    <div id="address_form" style="display: none;margin-bottom: 12px;">
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <div class="title">عنوان</div>
                                            <input type="text" name="title" id="title">
                                            <span class="error-message"></span>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="state">استان</div>
                                            <select name="state_id" id="state">
                                                @foreach($states as $state)
                                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="city">شهر</div>
                                            <select name="city_id" id="city">
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <div class="postal_code">کد پستی</div>
                                            <input type="text" name="postal_code" id="postal_code">
                                            <span class="error-message"></span>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="address">آدرس</div>
                                            <input type="text" name="address" id="address">
                                            <span class="error-message"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="payment-box">
                                            <div class="text-end">
                                                <button id="btn_submit_order" type="button"
                                                        class="btn btn-success btn-rounded submit">پرداخت
                                                </button>
                                                <button type="button" class="btn btn-danger btn-rounded cancell"
                                                        onclick="window.location='{{route('home')}}';">انصراف
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

@endsection
@section('scripts')
    <script>
        let total_cart_price = "{{$total_cart_price}}";
        let token = "{{csrf_token()}}";
        let getCitiesUrl = "{{route('cities')}}";
    </script>
    <script src="{{asset('asset/back/metronic/js/customize/cities.js')}}"></script>
    <script src="{{asset('/asset/front/abzar/js/custom/checkout.js')}}"></script>
@endsection
