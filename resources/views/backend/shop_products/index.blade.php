@extends('layouts.backend.dashboard')
<style>
    .image-input {
        margin-right: 1rem;
    }
</style>
@section('content')
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::جستجو-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                              height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                              fill="currentColor"/>
														<path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="currentColor"/>
													</svg>
												</span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search"
                                   class="form-control form-control-solid w-250px ps-15" placeholder="جستجو محصولات"/>
                        </div>
                        <!--end::جستجو-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Add customer-->
                            <a href="{{route('shopProduct.create')}}">
                                <button type="button" class="btn btn-primary">افزودن کالا</button>
                            </a>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::گروه actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                             data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>انتخاب شده
                            </div>
                            <button type="button" class="btn btn-danger"
                                    data-kt-customer-table-select="delete_selected">حذف انتخاب شده
                            </button>
                        </div>
                        <!--end::گروه actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->
                        <tr class="text-center text-gray-400 fw-bolder fs-7 gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                           data-kt-check-target="#kt_customers_table .form-check-input" value="1"/>
                                </div>
                            </th>
                            <th class="min-w-125px">نام کالا</th>
                            <th class="min-w-125px">فروشگاه</th>
                            <th class="min-w-125px">برند</th>
                            <th class="min-w-125px">موجودی</th>
                            <th class="min-w-125px">قیمت (ریال)</th>
                            <th class="min-w-125px">قیمت با تخفیف (ريال)</th>
                            <th class="min-w-125px">نوع کالا</th>
                            <th class="min-w-70px">عملیات</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600 text-center">
                        @foreach($shopProducts->items() as $product)
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::جنسیت=-->
                                <td>
                                    <span
                                        class="text-gray-800 text-hover-primary mb-1">{{$product->product->name}}</span>
                                </td>
                                <!--end::جنسیت=-->
                                <!--begin::نام=-->
                                <td>
                                    <span class="text-gray-800 text-hover-primary mb-1">{{$product->shop->name}}</span>
                                </td>
                                <!--end::نام=-->
                                <!--begin::نام خانوادگی=-->
                                <td>
                                    <span class="text-gray-800 text-hover-primary mb-1">{{$product->brand->name}}</span>
                                </td>
                                <!--end::نام خانوادگی=-->
                                <!--begin::موبایل=-->
                                <td>
                                    <span class="text-gray-600 text-hover-primary mb-1">{{$product->count}}</span>
                                </td>
                                <!--end::موبایل=-->
                                <!--begin::استان=-->
                                <td>
                                    <span
                                        class="text-gray-600 text-hover-primary mb-1">{{number_format($product->price,0)}}</span>
                                </td>
                                <!--end::استان=-->
                                <!--begin::نوع کاربری=-->
                                <td>
                                    <span
                                        class="text-gray-600 text-hover-primary mb-1">{{number_format($product->discounted_price , 0)}}</span>
                                </td>
                                <!--end::نوع کاربری=-->
                                <!--begin::نوع کاربری=-->
                                <td>
                                    <span class="text-gray-600 text-hover-primary mb-1">{{$product->type()}}</span>
                                </td>
                                <!--end::نوع کاربری=-->
                                <!--begin::عملیات=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                 height="24" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="currentColor"/>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{route('shopProduct.show' , $product->id)}}"
                                               class="menu-link px-3">نمایش</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{route('shopProduct.edit' ,$product->id)}}" class="menu-link px-3"
                                               data-kt-customer-table-filter="delete_row">ویرایش</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 delete_product"
                                             data-link="{{route('shopProduct.destroy' , $product->id)}}"
                                             data-name="{{$product->name}}">
                                            <span class="menu-link px-3">حذف</span>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 product_galley" data-bs-toggle="modal"
                                             data-bs-target="#modal_gallery" data-pics="{{$product->pictures}}"
                                             data-url="{{route('storePicture' , $product->id)}}"
                                             data-id="{{$product->id}}"
                                             data-delete-link="{{route('deletePicture' , $product->id)}}">
                                            <span class="menu-link px-3">گالری تصاویر</span>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::عملیات=-->
                            </tr>
                        @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                    <div>
                        {{$shopProducts->links()}}
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!-- Start Gallery Modal -->
    <div class="modal fade" tabindex="-1" id="modal_gallery">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">گالری کالای
                        <span id="modal_product"></span> از فروشگاه
                        <span id="modal_shop"></span>
                    </h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div id="modal_exists_pic">
                        <p>تصاویر قبل</p>

                    </div>
                    <!--begin::Form-->
                    <form id="dropzoneForm" action="" enctype="multipart/form-data" method="post"
                          style="margin-top: 1rem">
                        @csrf
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="shop_products_pictures_dropzone">
                                <!--begin::Message-->
                                <div class="dz-message needsclick">
                                    <!--begin::Icon-->
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <!--end::Icon-->

                                    <!--begin::Info-->
                                    <div class="ms-4" style="text-align: right">
                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">تصاویر را برای آپلود میتوانید به
                                            اینجا درگ کنید.</h3>
                                        <span class="fs-7 fw-semibold text-gray-400 align-right">تا حداکثر 10 تصویر میتوانید بارگذاری کنید.</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                        <!--end::Input group-->
                    </form>
                    <!--end::Form-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="$('#modal_gallery').modal('hide');">تایید</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Modal -->
@endsection
@section('script')
    <script>
        let token = "{{csrf_token()}}";
        @if(Session::exists('status'))
        Swal.fire({
            html: `{{Session::get('status')['message']}}`,
            icon: @if(Session::pull('status')['status'] == 200) "success" @else "error" @endif,
            buttonsStyling: false,
            showCancelButton: true,
            showConfirmButton: false,
            cancelButtonText: "باشه",
            customClass: {
                cancelButton: "btn btn-primary",
            }
        });
        @endif

        $('.product_galley').click(function () {
            $('#modal_gallery').modal('show');
            let shop_product_id = $(this).attr('data-id');
            let delete_link = $(this).attr('data-delete-link');
            let pictures = JSON.parse($(this).attr('data-pics'));
            $('#modal_gallery #modal_exists_pic').children().remove();
            if (pictures.length > 0) {
                $('#modal_gallery #modal_exists_pic').fadeIn(200);
                let picUrl = "{{asset('image/shop_product/')}}";
                $('#modal_gallery #modal_exists_pic').find('img').remove();
                for (let i = 0; i < pictures.length; i++) {
                    $('#modal_gallery #modal_exists_pic').append(`
                   <div class="image-input image-input-empty w-80px h-80px"
                        style="background-image: url(${picUrl + '/' + pictures[i].picture}); background-position: center;">
                         <!--begin::Image preview wrapper-->
                         <div class="image-input-wrapper w-75px h-75px"></div>
                         <label class="delete_picture btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            title="حذف این تصویر"
                            data-position="${i}">
                             <i class="bi bi-trash-fill fs-7"></i>
                         </label>
                    </div>
                `);
                }
                $('.delete_picture').click(function () {
                    let position = $(this).attr('data-position');
                    deletePicture(shop_product_id, position, delete_link, $(this));
                });
            }

            let url = $(this).attr('data-url');
            $('form#dropzoneForm').attr('action', url);

            $('.dropzone').each(function () {
                let dropzoneControl = $(this)[0].dropzone;
                if (dropzoneControl)
                    dropzoneControl.destroy();
            });

            new Dropzone("#shop_products_pictures_dropzone", {
                url: url, // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 10,
                maxFilesize: 10, // MB
                addRemoveLinks: true,

                sending: function (file, xhr, formData) {
                    formData.append("_token", "{{csrf_token()}}");
                },
                success: function (file, response) {
                    console.log(response)
                }
            });

        });

        function deletePicture(product_id, position, url, element) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': token
                },
                type: 'post',
                url: url,
                data: {'position': position},
                success: function (data) {
                    console.log(data)
                    if (data.status == 200) {
                        element.parent().remove();
                        Swal.fire({
                            text: data.message,
                            icon: 'success',
                            confirmButtonText: "باشه"
                        })
                    } else
                        Swal.fire({
                            text: data.message,
                            icon: 'error',
                            confirmButtonText: "باشه"
                        })
                },
                error: function () {
                    Swal.fire({
                        text: 'خطا در حذف رکورد ، مجددا تلاش کنید.',
                        icon: 'error',
                        confirmButtonText: "باشه"
                    })
                }
            });
        }

    </script>
    <script src="{{asset('asset/back/metronic/js/customize/shop.products.js')}}"></script>
@endsection
