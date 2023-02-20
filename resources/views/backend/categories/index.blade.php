@extends('layouts.backend.dashboard')
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search"
                                class="form-control form-control-solid w-250px ps-15" placeholder="جستجو مشتریان" />
                        </div>
                        <!--end::جستجو-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <!--begin::Add customer-->
                        <button type="button" class="btn btn-primary" id="add_btn" data-toggle="modal"
                            data-target="#modal_add" onclick="$('#modal_add').modal('show');">افزودن
                            دسته بندی جدید</button>
                        <!--end::Add customer-->
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
                                <th class="min-w-125px">تصویر</th>
                                <th class="min-w-125px">نام</th>
                                <th class="min-w-125px">دسته بندی والد</th>
                                <th class="min-w-125px">رنگ</th>
                                <th class="min-w-125px">توضیحات</th>
                                <th class="min-w-70px">عملیات</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600 text-center">
                            @foreach ($categories->items() as $item)
                                <tr data-category="{{ $item }}">
                                    <td>
                                        <img src="{{ asset('image/categories/' . $item->id . '.png') }}" alt=""
                                            class="img-thumbnail dashboard-img">
                                    </td>
                                    <td>
                                        <span class="text-gray-800 text-hover-primary mb-1">{{ $item->name }}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-gray-800 text-hover-primary mb-1">{{ $item->parent_cat_id == 1 ? 'دسته اصلی' : $item->parent->name }}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-gray-600 text-hover-primary mb-1">{{ $item->color == null ? 'فاقد رنگ' : $item->color }}</span>
                                    </td>
                                    <td>
                                        <span
                                            class="text-gray-600 text-hover-primary mb-1">{{ $item->description == null ? '-' : $item->description }}</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 edit_category" data-link="{{ route('category.update' , $item->slug) }}">
                                                <span class="menu-link px-3">ویرایش</span>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 delete_category"
                                                data-link="{{ route('category.destroy', $item->slug) }}"
                                                data-name="{{ $item->name }}">
                                                <span class="menu-link px-3">حذف</span>
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
                        {{ $categories->links() }}
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!-- Start Add Modal -->
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ثبت دسته بندی جدید</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <!--begin::Form-->
                    <form action="{{ route('category.store') }}" enctype="multipart/form-data" method="post" >
                        @csrf
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="required">نام دسته بندی</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="نام دسته بندی (اجباری)"></i>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <input type="text" class="form-control" name="name" id="name" />
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="required">دسته بندی والد</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="دسته بندی والد (اجباری)"></i>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <select name="parent_cat_id" id="parent" class="form-control">
                                    <option value="1">فاقد دسته بندی والد</option>
                                    @foreach ($categories->items() as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>رنگ</span>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <input type="text" class="form-control" name="color" id="color" />
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>توضیحات</span>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>تصویر دسته بندی</span>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <input type="file" name="pic" id="pic" class="form-control">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                    </form>
                    <!--end::Form-->

                    <div class="modal-footer">
                        <button type="button" id="add_category_btn" class="btn btn-primary col-sm-2">تایید</button>
                        <button type="button" class="btn btn-danger col-sm-1" onclick="$('#modal_add').modal('hide');">انصراف</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Modal -->
    <!-- Start Edit Modal -->
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ویرایش دسته بندی جدید</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <!--begin::Form-->
                    <form action="" enctype="multipart/form-data" method="post" >
                        @csrf
                        @method('patch')
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="required">نام دسته بندی</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="نام دسته بندی (اجباری)"></i>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <input type="text" class="form-control" name="name" id="name" />
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="required">دسته بندی والد</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="دسته بندی والد (اجباری)"></i>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <select name="parent_cat_id" id="parent" class="form-control">
                                    <option value="1">فاقد دسته بندی والد</option>
                                    @foreach ($categories->items() as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>رنگ</span>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <input type="text" class="form-control" name="color" id="color" />
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>توضیحات</span>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Tags-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span>تصویر دسته بندی</span>
                            </label>
                            <!--end::Tags-->
                            <!--begin::Input-->
                            <div>
                                <input type="file" name="pic" id="pic" class="form-control">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                    </form>
                    <!--end::Form-->

                    <div class="modal-footer">
                        <button type="button" id="edit_category_btn" class="btn btn-primary col-sm-2">تایید</button>
                        <button type="button" class="btn btn-danger col-sm-1" onclick="$('#modal_edit').modal('hide');">انصراف</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Modal -->
@endsection
@section('script')
    <script>
        let token = "{{ csrf_token() }}";
        @if (Session::exists('status'))
            Swal.fire({
                html: `{{ Session::get('status')['message'] }}`,
                icon: @if (Session::pull('status')['status'] == 200)
                    "success"
                @else
                    "error"
                @endif ,
                buttonsStyling: false,
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: "باشه",
                customClass: {
                    cancelButton: "btn btn-primary",
                }
            });
        @endif

        $('#add_category_btn').click(function() {
            $('#modal_add form').submit();
        });

        $('#edit_category_btn').click(function() {
            $('#modal_edit form').submit();
        });

        $('.edit_category').click(function() {
            let modal = $('#modal_edit');
            modal.modal('show');
            currentRow = $(this).closest('tr');
            let category = JSON.parse(currentRow.attr('data-category'));
            modal.find('form').attr('action' , $(this).attr('data-link'));
            modal.find('#name').val(category.name);
            modal.find('#color').val(category.color);
            modal.find('#description').val(category.description);
            modal.find('#parent option[value='+category.parent_cat_id+']').prop('selected' , true);
        });

        $('.delete_category').click(function() {
            let name = $(this).attr('data-name');
            Swal.fire({
                html: `آیا از حذف دسته بندی <span class="badge badge-primary">${name}</span> مطمئن هستید ؟`,
                icon: "question",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "بله ، حذف شود",
                cancelButtonText: 'خیر',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteCategory($(this));
                }
            });
        });

        function deleteCategory(element) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': token
                },
                type: 'post',
                url: element.attr('data-link'),
                data: {
                    '_method': 'DELETE'
                },
                success: function(data) {
                    console.log(data)
                    if (data.status == 200) {
                        element.closest('tr').remove();
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
                error: function() {
                    Swal.fire({
                        text: 'خطا در حذف رکورد ، مجددا تلاش کنید.',
                        icon: 'error',
                        confirmButtonText: "باشه"
                    })
                }
            });
        }
    </script>
@endsection
