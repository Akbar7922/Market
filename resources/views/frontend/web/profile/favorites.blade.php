@extends('layouts.frontend.profile_layout')
@section('style')
    <style>
        .modal-footer>* {
            min-height: 45px !important;
        }

        .dashboard-section .dashboard-table img {
            width: 65px !important;
        }
        tbody tr:hover{
            cursor: pointer;
        }
    </style>
@endsection
@section('title')
    پروفایل | سفارشات
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('profile') }}">داشبورد</a></li>
<li class="breadcrumb-item active" aria-current="page">محصولات موردعلاقه</li>
@endsection
@section('content')
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
                                    <th scope="col">نام محصول</th>
                                    <th scope="col">قیمت</th>
                                    <th scope="col">فروشنده</th>
                                    <th scope="col">عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Auth::user()->favorites()->get() as $product)
                                    <tr onclick="window.location='{{ route('ware.show', $product->shopProduct->slug) }}';">
                                        <td>
                                            @if (sizeof(json_decode($product->shopProduct->pictures)) > 0)
                                                <img alt=""
                                                    src="{{ asset('image/shop_product/' . $product->shop_product_id . '/' . json_decode($product->shopProduct->pictures)[0]->picture) }}"
                                                    class="img-fluid">
                                            @else
                                                <img alt="" src="{{ asset('image/shop_product/no_picture.png') }}"
                                                    class="img-fluid">
                                            @endif
                                        </td>
                                        <td>
                                            <span class="mt-0">{{ $product->shopProduct->product->name }}</span>
                                        </td>
                                        <td>
                                            <span>{{ number_format($product->shopProduct->price, 0) . ' ريال ' }}</span>
                                        </td>
                                        <td>
                                            <span class="theme-color fs-6">{{ $product->shopProduct->shop->name }}</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-success rounded product_add_to_cart"
                                                data-id="{{ $product->shop_product_id }}"
                                                @if (Auth::user()->carts()->where('shop_product_id', $product->shop_product_id)->exists()) data-inCart="1" @else data-inCart="0" @endif
                                                data-dash="1">
                                                <i class="fa fa-cart-plus"></i>
                                                <span class="spinner-border spinner-border-sm align-middle"
                                                    style="display: none;"></span>
                                            </button>
                                            <button class="btn btn-outline-danger rounded product_add_to_fav"
                                                data-id="{{ $product->shop_product_id }}">
                                                <i class="fa fa-heart"></i>
                                                <span class="spinner-border spinner-border-sm align-middle"
                                                    style="display: none;"></span>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
@endsection
@section('scripts')
    <script>
        let isLogin = "{{ Auth::check() }}";
        let addToCartUrl = "{{ route('addToCart') }}";
        let redirect_login_url = "{{ route('redirect_login') }}";
        let cart_url = "{{ route('cart.index') }}";
        let token = "{{ csrf_token() }}";
        $(document).ready(function() {

        });
    </script>
    <script src="{{ asset('/asset/front/abzar/js/custom/product_add_to_cart.js') }}"></script>
    <script src="{{ asset('/asset/front/abzar/js/custom/profile/favorites.js') }}"></script>
@endsection
