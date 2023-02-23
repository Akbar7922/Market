@extends('layouts.frontend.profile_layout')
@section('style')
    <style>
        .modal-footer>* {
            min-height: 45px !important;
        }
    </style>
@endsection
@section('title')
    پروفایل | سفارشات
@endsection
@section('content')
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
                                    <th scope="col">کد پیگیری</th>
                                    <th scope="col">قیمت</th>
                                    <th scope="col">هزینه ارسال</th>
                                    <th scope="col">روش پرداخت</th>
                                    <th scope="col">وضعیت</th>
                                    <th scope="col">جزئیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders->items() as $key => $order)
                                    <tr data-trackingCode="{{ $order->tracking_code }}" data-position="{{ $key }}">
                                        <td>
                                            <span class="mt-0">{{ $order->tracking_code }}</span>
                                        </td>
                                        <td>
                                            <span class="fs-6">{{ number_format($order->price, 0) . ' ريال' }}</span>
                                        </td>
                                        <td>
                                            <span class="fs-6">{{ number_format($order->send_price, 0) . ' ريال' }}</span>
                                        </td>
                                        <td>
                                            <span class="theme-color fs-6">{{ $order->payType->name }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="badge rounded-pill bg-success custom-badge">{{ $order->status->name }}</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-info rounded-circle btn-details">
                                                <i class="fa fa-eye" style="vertical-align: middle;"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="pagination">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    <!-- Start Details Modal -->
    <div class="modal fade modal-fullscreen-lg-down" id="modal_details" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-bold">جزئیات سفارش <span id="trackingCode"></span></h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="fa fa-close"></span>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div style="text-align: center;color: var(--theme-color);" id="spinner">
                                <span class="spinner-border spinner-border-sm align-middle"
                                    style="display: inline-block;"></span>
                                <br>
                                <span class="text-center">
                                    درحال دریافت اطلاعات ، لطفا شکیبا باشید ...
                                </span>
                                <hr>
                            </div>

                            <div class="row order_details_item">
                                <div class="col-4">هزینه ارسال : </div>
                                <div class="col-8">
                                    <span id="send_price"></span>
                                </div>
                            </div>
                            <div class="row order_details_item">
                                <div class="col-4">مبلغ کل : </div>
                                <div class="col-8">
                                    <span id="price"></span>
                                </div>
                            </div>

                            <div class="row order_details_item">
                                <div class="col-4">وضعیت سفارش : </div>
                                <div class="col-8">
                                    <span id="status" class="badge rounded-pill bg-success custom-badge"></span>
                                </div>
                            </div>

                            <div class="row order_details_item">
                                <div class="col-4">روش پرداخت : </div>
                                <div class="col-8">
                                    <span id="payType" class="badge rounded-pill bg-success custom-badge"></span>
                                </div>
                            </div>

                            <div class="row order_details_item">
                                <div class="col-4">روش ارسال : </div>
                                <div class="col-8">
                                    <span id="sendType" class="badge rounded-pill bg-success custom-badge"></span>
                                </div>
                            </div>

                            <div class="row order_details_item">
                                <div class="col-4">تاریخ ایجاد : </div>
                                <div class="col-8">
                                    <span id="created_at"></span>
                                </div>
                            </div>

                            <div class="row order_details_item">
                                <div class="col-4">آدرس : </div>
                                <div class="col-8">
                                    <span id="address"></span>
                                </div>
                            </div>


                            <div class="card dashboard-table mt-0">
                                <div class="card-body table-responsive-sm">
                                    <div class="table-responsive-xl">
                                        <table class="table cart-table wishlist-table">
                                            <thead>
                                                <tr class="table-head">
                                                    <th scope="col">نام محصول </th>
                                                    <th scope="col">تعداد</th>
                                                    <th scope="col">قیمت</th>
                                                    <th scope="col">عملیات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 5px 0px 20px 0px;">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-danger rounded col-sm-6" style="min-height: 40px;"
                            onclick="$('#modal_details').modal('hide')">
                            بستن
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Details Modal -->
@endsection
@section('scripts')
    <script>
        let orderDetails_url = "{{ route('order.details') }}";
        let token = "{{ csrf_token() }}";
        let orders = "{{ json_encode($orders->items()) }}";
        let show_product_url = "{{ route('ware.show', '1234') }}";
        $(document).ready(function() {

            $('.btn-details').click(function() {
                let modal = $('#modal_details');
                let trackingCode = $(this).closest('tr').attr('data-trackingCode');
                let position = $(this).closest('tr').attr('data-position');
                modal.find('span#trackingCode').text(trackingCode);
                modal.modal('show');
                let data = JSON.parse(orders.replace(/&quot;/g, '"'))[position];
                console.log(data);
                modal.find('#status').text(data.status.name);
                modal.find('#payType').text(data.pay_type.name);
                modal.find('#sendType').text(data.send_type.name);
                modal.find('#created_at').text(data.created_at);
                modal.find('#address').text(data.address);
                modal.find('#send_price').text(parseInt(data.send_price).toLocaleString('en') + ' ريال ');
                modal.find('#price').text(parseInt(data.price).toLocaleString('en') + ' ريال ');
                getOrderProducts(trackingCode, modal);
            });

            function getOrderProducts(trackingCode, modal) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    type: 'post',
                    url: orderDetails_url,
                    data: {
                        'trackingCode': trackingCode
                    },
                    success: function(data) {
                        modal.find('table tbody tr').remove();
                        modal.find('#spinner').css('display', 'none');
                        for (let i = 0; i < data.length; i++) {
                            let product_url = show_product_url.replace('1234', data[i].shop_product
                                .slug);
                            modal.find('table tbody').append(`
                            <tr>
                                <td>
                                    <span class="mt-0">` + data[i].shop_product.product.name + `</span>
                                </td>
                                <td>
                                    <span>` + data[i].count + `</span>
                                </td>
                                <td>
                                    <span class="theme-color fs-6">` + parseInt(data[i].price).toLocaleString('en') +
                                ' ريال ' + `</span>
                                </td>
                                <td>
                                    <a href="` + product_url + `" class="btn btn-outline-info rounded" style="vertical-align:middle;">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </td>
                            </tr>
                        `);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        modal.find('#spinner').css('display', 'none');
                    }
                });
            }
        });
    </script>
@endsection
