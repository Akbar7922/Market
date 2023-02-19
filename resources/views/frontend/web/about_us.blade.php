@extends('layouts.frontend.product-layout')
@section('style')
    <style>

    </style>
@endsection
@section('title')
    درباره ما
@endsection
@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>درباره ما</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                            <li class="breadcrumb-item active">درباره ما</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="about_mainHeader">
                            <img src="{{ asset('image/icons/logo.png') }}" alt="">
                            <h3>بخواه مارکت</h3>
                        </div>
                    </div>
                    <div class="col-sm-12 about_body">
                        <h3>معرفی بخواه</h3>
                        <p>
                            بخواه کسب و کاری ست که به عنوان یک زیر ساخت در تجارت الکترونیک، در 2 مدل B2B و B2C و با هدف
                            مدیریت زنجیره تامین و توزیع کالای و خدمات راه اندازی شده است. بخواه به عنوان شبکه اجتماعی فروش و
                            توزیع کالا و خدمات جهت ساده سازی امور و فرآیندهای معاملات و مبادلات در زنجیره تامین ، مطرح می
                            گردد.
                            بخواه می کوشد تا با ایجاد یک شبکه بهم پیوسته از اجزای یک اکوسیستم زنجیره تامین و توزیع کالا ،
                            شرایطی مناسب جهت سفارش – فروش و توزیع انواع کالا در بازارهای مختلف را فراهم سازد و در این میان
                            خدمات بخواه شامل ذینفعان مختلفی همچون: تامین کنندگان- تولید کنندگان- توزیع کنندگان- شرکتهای
                            بازرگانی- عمده فروشان- خرده فروشان- فروشگاههای زنجیره ای- مصرف کنندگان و ... میشود.
                            • رویکرد "بخواه" ارائه خدمات موثر در مدیریت بهتر و کارآمدتر زنجیره های تامین و توزیع کالا در
                            بستر حوزه تجارت الکترونیک، به فعالان اکوسیستم زنجیره تامین و توزیع کشور می باشد.
                            • ماموریت "بخواه" رونق کسب و کار مشتریانش - ارائه تنوع بالایی از انواع کالا، و ارائه پایین‌ترین
                            قیمت ممکن، بهترین حق انتخاب، و حداکثر راحتی از طریق بهره مندی از آخرین دستاوردهای مارکتینگ،
                            فناوری اطلاعات، تبلیغات و استفاده از ابزار- علم و خلاقیت برای خلق فرصت و نوآوری است. و در این
                            راه نهایت تلاش مان را خواهیم کرد.
                            بخواه یک پلتفرم آنلاین، برای مدیریت زنجیره های تامین و توزیع کالا می باشد، که بصورت یکپارچه برای
                            سرویس دهی در 2 مدل B2B و B2C راه اندازی شده است. شبکه بخواه ، همانند شبکه شتاب بانکی کشور طراحی
                            شده است. و همانند یک سوئیچ بانکی، برای مدیریت و ارائه خدمات تامین کنندگان کالا به خرده فروشان و
                            مشتریان صنعت زنجیره تامین، فعالیت میکند.
                        </p>
                        <h3>
                            بخواه چـه مشکلی را حـل میکنـد ؟
                        </h3>
                        <p>
                           <p>سیستم زنجیره تامین و توزیع کالا در کشور ما ، کاملا بصورت سنتی اداره میشود.</p>
                           <p>مدیریت فرآیندهای فروش و مدیریت قیمت و موجودی در این سیستم ، بسیار مشکل است.</p>
                           <p>در سیستم فعلی زنجیره تامین کالای کشور ، همه چیز به واسطه ها و اشخاص ثالث وابسته است.</p>
                           <p>این روش سنتی، مشکلات زیادی را برای فعالان این صنعت، اعم از تامین یا توزیع کنندگان، و خردهفروشان ایجاد کرده است.</p>

                        </p>
                        <h4>
                            تامین کنندگان برای توزیع و فروش کالا در سطح بازار ، و رساندن آن به ویترین مغازه های خرده فروشی،
                            به واسطه های مختلف وابسته اند، و با مشکلات زیادی دست به گریبان هستند.
                        </h4>
                        <p>
                            20 تا 50 درصد قیمت کالاهای مصرفی، به خاطر وجود واسطه ها بالاست.
                            آمار روزانه مراجعه ویزیتور ها به یک خرده فروشی قابل توجه است.
                        </p>
                        <h4>
                            پرچالش ترین لایه در سیستم زنجیره تامین کشور ، لایه ارتباط میان شبکه های توزیع (شرکتهای پخش) و
                            خرده فروشان می باشد.
                        </h4>
                        <p>
                            این لایه بصورت کاملا سنتی و از طریق واسطه و ویزیتورها مدیریت میشود.
                            از نگاه جهانی؛ بازار ایـران؛ یک بازار وابسته به شخص ثالت نامیده می شود !

                        </p>
                        <h3>
                            مشکلات روش سنتی
                        </h3>
                        <div>
                            <p>سفارش گیری محصولات، هم برای فروشگاه و هم برای شرکتها، وابسته به حضور ویزیتور می باشد.</p>
                            <p>تردد ویزیتورها باعث خستگی مغازه دارها میشود.</p>
                            <p>ویزیتورها اطلاعات فروش و پروموشن ها را کامل ارائه نمیدهند.</p>
                            <p>امکان بررسی و مقایسه محصولات برای فروشنده ها، در موقع سفارش بسیار کم است.</p>
                            <p> معمولا هزینه های نگهداری، آموزش، و نظارت بر ویزیتورها برای شرکتها بسیار بالاست.</p>
                            <p>مدیریت مالی خریدها، برای فروشگاهها بسیار دشوار می باشد.</p>
                            <p>و ده ها مورد دیگر ...</p>
                        </div>
                        <h3>
                            راهکار بخواه چیست ؟
                        </h3>
                        <p>
                            مدیریت زنجیره های تامین در بستر تجـارت الکترونیک بـا استفــاده از الگــوی شبـکه شتـاب بـانکـی
                            بخواه یک Market Place گسترده با در نظر گرفتن الگوهای مدیریت زنجیره تامین و توزیع کالا در کشور می
                            باشد.
                            قیمت گذاری در بخواه می تواند مکان محور باشد. بدین معنی که قیمت کالا و خدمات ارائه شده در شبکه
                            بخواه میتواند بر اساس نقاط جغرافیایی مختلف، تعریف و ارائه گردد.مثلا برای مدیریت استراتژی قیمت
                            فروش در بازار ؛ میتوان قیمت ها و تخفیفات متفاوتی در نقاط مختلف، بر روی یک کالا ارائه کرد. فرض
                            کنید : نوشابه در منطقه 1 با 30درصد تخفیف بفروش میرسد، ولی همین کالا در منطقه 2 میتواند بدون
                            تخفیف یا با تخفیف کمتری بفروش برسد.
                            در مدل B2B ، تامین کنندگان کالا ( شرکتهای تولیدی، بازرگانی، پخش و...) با پیوستن به بخواه ،
                            میتوانند کالا و محصولات شان را در شبکه بخواه وارد کنند تا به دست بازار برسانند. از طرف دیگر ،
                            کلیه سفارشات کالا توسط فروشگاه های سطح بازار از این تامین کنندگان، به صورت الکترونیکی و از طریق
                            شبکه بخواه انجام می شود.
                            در مدل B2C که یک شبکه گسترده بین مصرف کنندگان و فروشگاه ها می باشد؛ مصرف کنندگان از راه های
                            مختلفی به شبکه بخواه دسترسی دارند. فروشگاه های مختلف، از جمله اصناف کشور، مغازه ها، و حتی
                            فروشگاههای زنجیره ای که شاخص های لازم برای پیوستن به شبکه بخواه را دارند ، نقش تامین کننده شبکه
                            سراسری فروش بخواه را ایفا میکنند.
                        </p>
                    </div>
                </div>
                <div class="row section-b-space">
                    <div class="contact-right">
                        <ul>
                            <li>
                                <div class="contact-icon">
                                    <img class="about-icon" src="{{ asset('image/icons/phone-call.png') }}">
                                    <span class="heder_about">تماس با ما : </span>
                                    <span class="body_about">0656 740 0915</span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <img class="about-icon" src="{{ asset('image/icons/location.png') }}">
                                    <span class="heder_about">آدرس : </span>
                                    <span class="body_about">خراسان جنوبی ، بیرجند ، بلوار معلم ، خیابان فردوسی ، پلاک 1 ،
                                        طبقه سوم </span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon">
                                    <img class="about-icon" src="{{ asset('image/icons/email.png') }}">
                                    <span class="heder_about">ایمیل : </span>
                                    <span class="body_about">info@bekhah.ir</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
@endsection
@section('scripts')
    <script>
        let token = "{{ csrf_token() }}";
        let delete_cart_item_link = "{{ route('deleteFromCart') }}";
    </script>
    <script src="{{ asset('/asset/front/abzar/js/custom/cart.js') }}"></script>
@endsection
