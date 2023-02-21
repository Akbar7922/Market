@extends('layouts.frontend.profile_layout')
@section('style')
    <style>
        .modal-footer>* {
            min-height: 45px !important;
        }
    </style>
@endsection
@section('title')
    پروفایل
@endsection
@section('content')
    <div class="counter-section">
        <div class="welcome-msg">
            <h4>سلام، {{ Auth::user()->name }}!</h4>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="counter-box">
                    <img src="../assets/images/icon/dashboard/sale.png" class="img-fluid">
                    <div>
                        <h3>25</h3>
                        <h5>کل سفارش</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box">
                    <img src="../assets/images/icon/dashboard/homework.png" class="img-fluid">
                    <div>
                        <h3>5</h3>
                        <h5>درحال انتظار</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box">
                    <img src="../assets/images/icon/dashboard/order.png" class="img-fluid">
                    <div>
                        <h3>50</h3>
                        <h5>علاقه مندی</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-account box-info">
            <div class="box-head">
                <h4>اطلاعات حساب</h4>
                <hr>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection