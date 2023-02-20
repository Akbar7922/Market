<!DOCTYPE html>
<!--
نویسنده: ساتراس وب
محصولات نام: مترونیک - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin داشبورد Theme
خرید: https://1.envato.market/EA4JP
وب سایت: http://www.keenthemes.com
تماس با ما: support@keenthemes.com
دنبال کردن: www.twitter.com/keenthemes
دریبل: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
لاینسس شده: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
    <base href="../../">
    <title>قالب مدیریت مترونیک</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced پنل ادمین بوت استراپ Theme on Themeforest trusted by 94,000 beginners و professionals. Multi-demo, حالت تیره, RTL support و complete React, Angular, Vue &amp; Laravel versions. Grab your copy now و get life-time updates for free." />
    <meta name="keywords"
        content="مترونیک, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="قالب مدیریت مترونیک" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="ساتراس وب | مترونیک" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('asset/back/metronic/media/logos/favicon.ico') }}" />
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('asset/back/metronic/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('asset/back/metronic/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('asset/back/metronic/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::کناری-->
            <div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Brو-->
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="">
                        <img alt="Logo" src="{{ asset('asset/back/metronic/media/logos/logo-1.svg') }}"
                            class="h-25px logo" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::کناری toggler-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                        data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                        <span class="svg-icon svg-icon-1 rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.5"
                                    d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                    fill="currentColor" />
                                <path
                                    d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::کناری toggler-->
                </div>
                <!--end::Brو-->
                <!--begin::کناری menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::کناری Menu-->
                    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                            id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expو="false">
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9"
                                                    rx="2" fill="currentColor" />
                                                <rect opacity="0.3" x="13" y="2" width="9"
                                                    height="9" rx="2" fill="currentColor" />
                                                <rect opacity="0.3" x="13" y="13" width="9"
                                                    height="9" rx="2" fill="currentColor" />
                                                <rect opacity="0.3" x="2" y="13" width="9"
                                                    height="9" rx="2" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">داشبورد ها</span>
                                </span>
                            </div>
                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">ساخته شده</span>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-users"></span>
                                    </span>
                                    <span class="menu-title">کاربران</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('user.create') }}">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-user-plus"></span>
                                            </span>
                                            <span class="menu-title">افزودن کاربر</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('user.index') }}">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-users-cog"></span>
                                            </span>
                                            <span class="menu-title">لیست کاربران</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-list"></span>
                                            </span>
                                            <span class="menu-title">لیست درخواست ها</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-users"></span>
                                    </span>
                                    <span class="menu-title">گروه های کاربری</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-folder-plus"></span>
                                            </span>
                                            <span class="menu-title">افزودن گروه</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-group"></span>
                                            </span>
                                            <span class="menu-title">لیست گروه ها</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item menu-accordion">
                                <a href="{{ route('brand.index') }}" class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-users"></span>
                                    </span>
                                    <span class="menu-title">برندها</span>
                                </a>
                            </div>
                            <div class="menu-item menu-accordion">
                                <a  href="{{ route('category.index') }}" class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-cat"></span>
                                    </span>
                                    <span class="menu-title">دسته بندی ها</span>
                                </a>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-users"></span>
                                    </span>
                                    <span class="menu-title">ویژگی ها</span>
                                </span>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-product-hunt"></span>
                                    </span>
                                    <span class="menu-title">محصولات</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('product.create') }}">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-plus"></span>
                                            </span>
                                            <span class="menu-title">افزودن محصول</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('product.index') }}">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-list"></span>
                                            </span>
                                            <span class="menu-title">لیست محصولات</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-users"></span>
                                    </span>
                                    <span class="menu-title">فروشگاه ها</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-shopify"></span>
                                            </span>
                                            <span class="menu-title">افزودن فروشگاه</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-shopify"></span>
                                            </span>
                                            <span class="menu-title">لیست فروشگاه ها</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-users"></span>
                                    </span>
                                    <span class="menu-title">کالاهای فروشگاه</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('shopProduct.create') }}">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-plus"></span>
                                            </span>
                                            <span class="menu-title">افزودن کالا</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('shopProduct.index') }}">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-list"></span>
                                            </span>
                                            <span class="menu-title">لیست کالاها</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-list"></span>
                                            </span>
                                            <span class="menu-title">گزارشات کالاها</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-tags"></span>
                                    </span>
                                    <span class="menu-title">تخفیفات</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-tag"></span>
                                            </span>
                                            <span class="menu-title">افزودن تخفیف</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-list"></span>
                                            </span>
                                            <span class="menu-title">لیست تخفیفات</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-ticket"></span>
                                    </span>
                                    <span class="menu-title">پیام ها</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-support"></span>
                                            </span>
                                            <span class="menu-title">پیام های پشتیبانی</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-box"></span>
                                            </span>
                                            <span class="menu-title">چت روم</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-comments"></span>
                                    </span>
                                    <span class="menu-title">کامنت ها</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-comments"></span>
                                            </span>
                                            <span class="menu-title">لیست کامنت ها</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-commenting"></span>
                                            </span>
                                            <span class="menu-title">گزارش کامنت ها</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="fas fa-list"></span>
                                    </span>
                                    <span class="menu-title">گزارشات</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-money"></span>
                                            </span>
                                            <span class="menu-title">گزارشات مالی</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                            <span class="menu-bullet"></span>
                                            <span class="menu-icon">
                                                <span class="fas fa-support"></span>
                                            </span>
                                            <span class="menu-title">گزارشات CRM</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::کناری Menu-->
                </div>
                <!--end::کناری menu-->
                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
                    <a href="#" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip"
                        data-bs-trigger="hover" data-bs-dismiss-="click"
                        title="200+ کامپوننت ها و افزونه های شخص ثالث">
                        <span class="btn-label">مستندات و کامپوننت ها</span>
                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                        <span class="svg-icon btn-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3"
                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                    fill="currentColor" />
                                <rect x="7" y="17" width="6" height="2" rx="1"
                                    fill="currentColor" />
                                <rect x="7" y="12" width="10" height="2" rx="1"
                                    fill="currentColor" />
                                <rect x="7" y="7" width="6" height="2" rx="1"
                                    fill="currentColor" />
                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::کناری-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::کناری mobile toggle-->
                        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="مشاهده aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::کناری mobile toggle-->
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="../../demo1/dist/index.html" class="d-lg-none">
                                <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" />
                            </a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1">
                            <!--begin::Toolbar wrapper-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::چت-->
                                {{--                            <div class="d-flex align-items-center ms-1 ms-lg-3"> --}}
                                {{--                                <!--begin::Menu wrapper--> --}}
                                {{--                                <div --}}
                                {{--                                    class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative" --}}
                                {{--                                    id="kt_drawer_chat_toggle"> --}}
                                {{--                                    <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg--> --}}
                                {{--                                    <span class="svg-icon svg-icon-1"> --}}
                                {{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" --}}
                                {{--                                                     viewBox="0 0 24 24" fill="none"> --}}
                                {{--													<path opacity="0.3" --}}
                                {{--                                                          d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" --}}
                                {{--                                                          fill="currentColor"/> --}}
                                {{--													<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor"/> --}}
                                {{--													<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor"/> --}}
                                {{--												</svg> --}}
                                {{--											</span> --}}
                                {{--                                    <!--end::Svg Icon--> --}}
                                {{--                                    <span --}}
                                {{--                                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span> --}}
                                {{--                                </div> --}}
                                {{--                                <!--end::Menu wrapper--> --}}
                                {{--                            </div> --}}
                                <!--end::چت-->
                                <!--begin::Theme mode-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3">
                                    <!--begin::Theme mode docs-->
                                    <span
                                        class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                        <i class="fonticon-sun fs-2"></i>
                                    </span>
                                    <!--end::Theme mode docs-->
                                </div>
                                <!--end::Theme mode-->
                                <!--begin::کاربر menu-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                    <!--begin::Menu wrapper-->
                                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">
                                        <img src="{{ asset('asset/back/metronic/media/avatars/300-1.jpg') }}"
                                            alt="user" />
                                    </div>
                                    <!--begin::کاربر account menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo"
                                                        src="{{ asset('asset/back/metronic/media/avatars/300-1.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::کاربرname-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bolder d-flex align-items-center fs-5">جلالی
                                                        <span
                                                            class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">حرفه
                                                            ای</span>
                                                    </div>
                                                    <a href="#"
                                                        class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                                </div>
                                                <!--end::کاربرname-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="../../demo1/dist/account/overview.html"
                                                class="menu-link px-5">پروفایل
                                                من</a>
                                        </div>
                                        <div class="menu-item px-5">
                                            <a href="../../demo1/dist/account/overview.html"
                                                class="menu-link px-5">سفارشات
                                                من</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
                                                <span class="menu-text">سبد خربد</span>
                                                <span class="menu-badge">
                                                    <span
                                                        class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-5">
                                            <span class="menu-link px-5">
                                                وب سایت
                                            </span>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5" onclick="$(this).find('form').submit();">
                                            <form method="post" action="{{ route('logout') }}">
                                                @csrf
                                                <a class="menu-link px-5">خروج</a>
                                            </form>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <div class="menu-content px-5">
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                                                    for="kt_user_menu_dark_mode_toggle">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                        value="1" name="mode"
                                                        id="kt_user_menu_dark_mode_toggle" />
                                                    <span class="pulse-ring ms-n1"></span>
                                                    <span class="form-check-label text-gray-600 fs-7">باز بودن</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::کاربر account menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::کاربر menu-->
                                <!--begin::Header menu toggle-->
                                <div class="d-flex align-items-center d-lg-none ms-2 me-n3"
                                    title="مشاهده header menu">
                                    <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                                        id="kt_header_menu_mobile_toggle">
                                        <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Header menu toggle-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                @yield('content')
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2022©</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-gray-800 text-hover-primary">ساتراس
                                وب</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">درباره ی
                                    ما</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://rtl-theme.com" target="_blank" class="menu-link px-2">پشتیبانی</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://www.rtl-theme.com/metronic-admin-html-template/" target="_blank"
                                    class="menu-link px-2">خرید</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::کشوs-->
    <!--begin::چت drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <!--begin::Messenger-->
        <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::user-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">رضا
                            علی ابادی</a>
                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-bold text-muted">فعال</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::user-->
                </div>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="bi bi-three-dots fs-3"></i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">مخاطبین</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">افزودن مخاطب</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">Invite مخاطبین
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید"></i></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="left-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">گروه ها</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="بزودی">ساختن
                                            گروه</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="بزودی">دعوت
                                            کاربران</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="بزودی">تنظیمات</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                    title="بزودی">تنظیمات</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::پیام ها-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                    <!--begin::پیام(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا
                                        علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">دو دقیقه پیش</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">چقدر احتمال دارد که شرکت ما را به دوستان و خانواده خود
                                پیشنهاد دهید؟?
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5دقیقه پیش</span>
                                    <a href="#"
                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">شما</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                data-kt-element="message-text">سلام ، ما فقط در حال نوشتن هستیم تا به شما اطلاع دهیم که
                                در
                                مخزن گیت هاب مشترک شده اید.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا
                                        علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">یکساعت پیش</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">بله فهمیدم
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 ساعت</span>
                                    <a href="#"
                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">شما</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                data-kt-element="message-text">شما برای همه موارد اعلان دریافت خواهید کرد ، درخواستها
                                را
                                بکشید!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا
                                        علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">3 ساعت</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">شما می توانید با فشردن اینجا بلافاصله این مخزن را باز
                                کنید:
                                <a href="https://keenthemes.com">satrasweb.ir</a>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 ساعت</span>
                                    <a href="#"
                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">شما</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                data-kt-element="message-text">بیشتر دوره های بازرگانی خریداری شده در طول این فروش!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا
                                        علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">5 ساعت</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">کمپانی BBQ برای جشن گرفتن دستاوردها و اهداف سه ماهه آخر.
                                غذا
                                و نوشیدنی ارائه می شود
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">فقط</span>
                                    <a href="#"
                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">شما</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                data-kt-element="message-text"></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(template for out)-->
                    <!--begin::پیام(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">رضا
                                        علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">فقط</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                data-kt-element="message-text">Right before vacation season we have the next Bigمعامله
                                for
                                you.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(template for in)-->
                </div>
                <!--end::پیام ها-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="نوشتن پیام"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="بزودی">
                            <i class="bi bi-paperclip fs-3"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="بزودی">
                            <i class="bi bi-upload fs-3"></i>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <!--begin::ارسال-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                    <!--end::ارسال-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::چت drawer-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->

    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        let hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('asset/back/metronic/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('asset/back/metronic/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('asset/back/metronic/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page سفارشی Javascript(used by this page)-->
    @yield('addScript')
    <script src="{{ asset('asset/back/metronic/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('asset/back/metronic/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('asset/back/metronic/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('asset/back/metronic/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('asset/back/metronic/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('asset/back/metronic/js/custom/utilities/modals/users-search.js') }}"></script>

    <!--end::Page custom Javascript-->
    <!--end::Javascript-->
    @yield('script')
</body>
<!--end::Body-->

</html>
