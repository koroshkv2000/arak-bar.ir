@extends('layouts.app')

@section('title', 'جدول ابعاد، ارتفاع و ظرفیت انواع کامیون و تریلی')
@section('description', 'حداکثر ارتفاع مجاز بار کامیون از سطح زمین چقدر است؟ جدول مشخصات کامل طول، عرض، ظرفیت وزنی و قوانین راهداری انواع خاور، تک، جفت، تریلی و کمرشکن.')
@section('keywords', 'ابعاد کامیون، ارتفاع مجاز کامیون، ظرفیت بار کامیون، جدول مشخصات تریلی، طول تریلی، عرض تریلی، ارتفاع بارگیر، ابعاد کمرشکن')
@section('author', 'راهنمای باربری اراک')
@section('canonical', route('truck.dimensions'))

{{-- Open Graph Tags for Social & Rich Snippets --}}
@section('meta_og')
    <meta property="og:type" content="article">
    <meta property="og:title" content="جدول ابعاد، ارتفاع و ظرفیت انواع کامیون و تریلی">
    <meta property="og:description" content="راهنمای جامع مشخصات فنی، ارتفاع مجاز و ظرفیت بارگیری انواع کامیون، تریلی و کمرشکن برای انتخاب صحیح وسیله حمل.">
    <meta property="og:image" content="{{ asset('assets/images/ابعاد-و-ظرفیت-انواع-کامیون-و-تریلی.webp') }}">
    <meta property="og:url" content="{{ route('truck.dimensions') }}">
@endsection

{{-- Google Schema Markup with Deep Linking (# anchors) and Extended FAQ --}}
@section('schema')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "Article",
                "@@id": "{{ route('truck.dimensions') }}#article",
                "mainEntityOfPage": {"@@type": "WebPage", "@@id": "{{ route('truck.dimensions') }}"},
                "headline": "جدول ابعاد، ارتفاع و ظرفیت انواع کامیون و تریلی",
                "image": {"@@id": "{{ route('truck.dimensions') }}#primaryimage"},
                "description": "راهنمای مقایسه ابعاد، ارتفاع مجاز و ظرفیت بار کامیونت، خاور، کامیون، تریلی و کمرشکن",
                "inLanguage": "fa-IR",
                "author": {"@@type": "Organization", "name": "راهنمای باربری اراک"},
                "publisher": {"@@type": "Organization", "name": "راهنمای باربری اراک", "url": "{{ url('/') }}"}
            },
            {
                "@@type": "ImageObject",
                "@@id": "{{ route('truck.dimensions') }}#primaryimage",
                "url": "{{ asset('assets/images/ابعاد-و-ظرفیت-انواع-کامیون-و-تریلی.webp') }}",
                "width": 1024,
                "height": 1024,
                "caption": "جدول مشخصات فنی کامیون و تریلی"
            },
            {
                "@@type": "BreadcrumbList",
                "itemListElement": [
                    {"@@type": "ListItem", "position": 1, "name": "باربری اراک", "item": "{{ route('home') }}"},
                    {"@@type": "ListItem", "position": 2, "name": "ابعاد کامیون و تریلی", "item": "{{ route('truck.dimensions') }}"}
                ]
            },
            {
                "@@type": "ItemList",
                "name": "دسترسی مستقیم به ابعاد انواع کامیون و تریلی",
                "itemListElement": [
                    {"@@type": "ListItem", "position": 1, "name": "ابعاد و ظرفیت کامیونت", "url": "{{ route('truck.dimensions') }}#row-pickup"},
                    {"@@type": "ListItem", "position": 2, "name": "ابعاد و ظرفیت خاور ۶۰۸", "url": "{{ route('truck.dimensions') }}#row-khavar-608"},
                    {"@@type": "ListItem", "position": 3, "name": "ابعاد و ظرفیت خاور ۸۰۸", "url": "{{ route('truck.dimensions') }}#row-khavar-808"},
                    {"@@type": "ListItem", "position": 4, "name": "ابعاد و ظرفیت خاور مسقف", "url": "{{ route('truck.dimensions') }}#row-khavar-covered"},
                    {"@@type": "ListItem", "position": 5, "name": "ابعاد و ظرفیت بنز ۹۱۱", "url": "{{ route('truck.dimensions') }}#row-benz-911"},
                    {"@@type": "ListItem", "position": 6, "name": "ابعاد و ظرفیت کامیون تک (۶ چرخ)", "url": "{{ route('truck.dimensions') }}#row-single-truck"},
                    {"@@type": "ListItem", "position": 7, "name": "ابعاد و ظرفیت کامیون جفت (۱۰ چرخ)", "url": "{{ route('truck.dimensions') }}#row-double-truck"},
                    {"@@type": "ListItem", "position": 8, "name": "ابعاد و ظرفیت تریلی کفی معمولی", "url": "{{ route('truck.dimensions') }}#row-trailer-normal"},
                    {"@@type": "ListItem", "position": 9, "name": "ابعاد و ظرفیت تریلی کفی ۱۳/۶۰", "url": "{{ route('truck.dimensions') }}#row-trailer-1360"},
                    {"@@type": "ListItem", "position": 10, "name": "ابعاد و ظرفیت کمرشکن ۲ محور", "url": "{{ route('truck.dimensions') }}#row-lowboy-2axle"},
                    {"@@type": "ListItem", "position": 11, "name": "ابعاد و ظرفیت کمرشکن ۳ محور", "url": "{{ route('truck.dimensions') }}#row-lowboy-3axle"},
                    {"@@type": "ListItem", "position": 12, "name": "ابعاد و ظرفیت کمرشکن ۴ محور", "url": "{{ route('truck.dimensions') }}#row-lowboy-4axle"},
                    {"@@type": "ListItem", "position": 13, "name": "ابعاد و ظرفیت بوژی و کمرشکن ۱۱ محور", "url": "{{ route('truck.dimensions') }}#row-lowboy-11axle"}
                ]
            },
            {
                "@@type": "FAQPage",
                "mainEntity": [
                    {
                        "@@type": "Question",
                        "name": "حد مجاز ارتفاع بار کامیون از سطح زمین چقدر است؟",
                        "acceptedAnswer": {"@@type": "Answer", "text": "حد مجاز قانونی ۴/۵ متر از سطح زمین است. بارهای مرتفع‌تر از این مقدار، بار ترافیکی محسوب شده و نیازمند دریافت مجوز ویژه از سازمان راهداری و اسکورت هستند."}
                    },
                    {
                        "@@type": "Question",
                        "name": "حداکثر عرض مجاز کامیون و تریلی در جاده‌ها چقدر است؟",
                        "acceptedAnswer": {"@@type": "Answer", "text": "طبق قوانین راهداری ایران، حداکثر عرض مجاز وسایل نقلیه باری برای تردد عادی ۲/۶۰ متر است. بارهای عریض‌تر از این مقدار ترافیکی محسوب می‌شوند."}
                    },
                    {
                        "@@type": "Question",
                        "name": "تفاوت ظرفیت و ابعاد کامیون تک (۶ چرخ) با جفت (۱۰ چرخ) چیست؟",
                        "acceptedAnswer": {"@@type": "Answer", "text": "کامیون تک دارای ظرفیت بارگیری حدود ۱۰ تن و طول اتاق ۵/۸۰ تا ۶/۲۰ متر است، اما کامیون جفت (۱۰ چرخ) توانایی حمل ۱۵ تن بار را دارد و طول اتاق آن معمولاً ۶/۸۰ تا ۷ متر می‌باشد."}
                    },
                    {
                        "@@type": "Question",
                        "name": "تفاوت طول تریلی کفی معمولی با تریلی ۱۳/۶۰ چیست؟",
                        "acceptedAnswer": {"@@type": "Answer", "text": "طول بارگیر تریلی‌های کفی معمولی ۱۲/۲۰ متر با ظرفیت ۲۲ تن است، در حالی که طول مدل‌های ترانزیت و کفی بلند ۱۳/۶۰ متر با ظرفیت حدود ۲۵ تن می‌باشد."}
                    },
                    {
                        "@@type": "Question",
                        "name": "برای حمل بارهای سنگین بیش از ۴۰ تن از چه ماشینی استفاده می‌شود؟",
                        "acceptedAnswer": {"@@type": "Answer", "text": "برای محموله‌های فوق سنگین بالای ۴۰ تن، از انواع کمرشکن‌ها (۵ تا ۱۱ محور) و بوژی استفاده می‌شود که ظرفیت حمل بار از ۴۶ تن تا بیش از ۱۰۰ تن را دارا هستند."}
                    }
                ]
            }
        ]
    }
    </script>
@endsection

@section('content')
    <section class="dimensions-hero section">
        <div class="container">
            <div class="dimensions-hero-grid">
                <div>
                    <span class="eyebrow"><i class="fa-light fa-ruler-combined" aria-hidden="true"></i> راهنمای انتخاب وسیله حمل بار</span>
                    <h1>جدول ابعاد، ارتفاع و ظرفیت<br><span>انواع کامیون و تریلی</span></h1>
                    <p>مقایسه سریع عرض، طول، ارتفاع مجاز و ظرفیت بار برای انتخاب ایمن‌ترین و مناسب‌ترین وسیله حمل بار متناسب با محموله شما.</p>
                    <div class="hero-actions">
                        <a class="button primary" href="#specifications">مشاهده جدول <i class="fa-light fa-arrow-down" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="hero-image-box">
                    <img src="{{ asset('assets/images/ابعاد-و-ظرفیت-انواع-کامیون-و-تریلی.webp') }}" alt="راهنمای ابعاد و ظرفیت کامیون و تریلی" width="512" height="512" fetchpriority="high">
                </div>
            </div>
        </div>
    </section>

    <section class="section dimensions-content" id="specifications">
        <div class="container">
            
            {{-- نوار دسترسی سریع برای جلوگیری از سردرگمی کاربر و تقویت لینک‌سازی داخلی گوگل --}}
            <nav class="quick-jump-nav" aria-label="دسترسی سریع به نوع ماشین">
                <span class="quick-jump-title"><i class="fa-light fa-bolt"></i> انتخاب سریع ماشین (اسکرول و هایلایت در جدول):</span>
                <div class="quick-jump-links">
                    <a href="#row-pickup">کامیونت</a>
                    <a href="#row-khavar-608">خاور ۶۰۸</a>
                    <a href="#row-khavar-808">خاور ۸۰۸</a>
                    <a href="#row-khavar-covered">خاور مسقف</a>
                    <a href="#row-benz-911">بنز ۹۱۱</a>
                    <a href="#row-single-truck">کامیون تک</a>
                    <a href="#row-double-truck">کامیون جفت (۱۰ چرخ)</a>
                    <a href="#row-trailer-normal">تریلی معمولی</a>
                    <a href="#row-trailer-1360">تریلی ۱۳/۶۰</a>
                    <a href="#row-lowboy-2axle">کمرشکن ۲ محور</a>
                    <a href="#row-lowboy-3axle">کمرشکن ۳ محور</a>
                    <a href="#row-lowboy-4axle">کمرشکن ۴ محور</a>
                    <a href="#row-lowboy-5axle">کمرشکن ۵ تا ۱۱ محور</a>
                </div>
            </nav>

            <div class="truck-table-shell glass">
                <div class="truck-table-wrap">
                    <table class="truck-table">
                        <caption>جدول جامع مشخصات فنی انواع کامیون، تریلی و کمرشکن</caption>
                        <thead>
                            <tr>
                                <th scope="col">نوع کامیون / تریلی</th>
                                <th scope="col">عرض (متر)</th>
                                <th scope="col">طول (متر)</th>
                                <th scope="col">ارتفاع مجاز (متر)</th>
                                <th scope="col">ظرفیت بار (تن)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="row-pickup">
                                <th scope="row"><a href="#row-pickup" class="row-anchor" title="لینک مستقیم به کامیونت">#</a> کامیونت</th>
                                <td data-label="عرض">۱/۸۰</td>
                                <td data-label="طول">۳/۵۰</td>
                                <td data-label="ارتفاع مجاز">۲/۵۰</td>
                                <td data-label="ظرفیت بار">۲/۵</td>
                            </tr>
                            <tr id="row-khavar-608">
                                <th scope="row"><a href="#row-khavar-608" class="row-anchor" title="لینک مستقیم به خاور ۶۰۸">#</a> خاور ۶۰۸</th>
                                <td data-label="عرض">۲</td>
                                <td data-label="طول">۴</td>
                                <td data-label="ارتفاع مجاز">۲/۸۰</td>
                                <td data-label="ظرفیت بار">۳/۵</td>
                            </tr>
                            <tr id="row-khavar-808">
                                <th scope="row"><a href="#row-khavar-808" class="row-anchor" title="لینک مستقیم به خاور ۸۰۸">#</a> خاور ۸۰۸</th>
                                <td data-label="عرض">۲/۱۰</td>
                                <td data-label="طول">۴/۶۰</td>
                                <td data-label="ارتفاع مجاز">۲/۸۰</td>
                                <td data-label="ظرفیت بار">۴/۵</td>
                            </tr>
                            <tr id="row-khavar-covered">
                                <th scope="row"><a href="#row-khavar-covered" class="row-anchor" title="لینک مستقیم به خاور مسقف">#</a> خاور مسقف</th>
                                <td data-label="عرض">۲ تا ۲/۲۵</td>
                                <td data-label="طول">۴/۵ تا ۵/۸۰</td>
                                <td data-label="ارتفاع مجاز">۲/۲۰ تا ۲/۸۰</td>
                                <td data-label="ظرفیت بار">۳</td>
                            </tr>
                            <tr id="row-benz-911">
                                <th scope="row"><a href="#row-benz-911" class="row-anchor" title="لینک مستقیم به بنز ۹۱۱">#</a> ۹۱۱</th>
                                <td data-label="عرض">۲/۲۵</td>
                                <td data-label="طول">۵ تا ۵/۵۰</td>
                                <td data-label="ارتفاع مجاز">۳</td>
                                <td data-label="ظرفیت بار">۵/۵</td>
                            </tr>
                            <tr id="row-single-truck">
                                <th scope="row"><a href="#row-single-truck" class="row-anchor" title="لینک مستقیم به کامیون تک">#</a> کامیون تک (۶ چرخ)</th>
                                <td data-label="عرض">۲/۳۵</td>
                                <td data-label="طول">۵/۸۰ تا ۶/۲۰</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۱۰</td>
                            </tr>
                            <tr id="row-double-truck">
                                <th scope="row"><a href="#row-double-truck" class="row-anchor" title="لینک مستقیم به کامیون جفت">#</a> کامیون ۱۰ چرخ (جفت)</th>
                                <td data-label="عرض">۲/۴۲</td>
                                <td data-label="طول">۶/۸۰ تا ۷</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۱۵</td>
                            </tr>
                            <tr id="row-trailer-normal">
                                <th scope="row"><a href="#row-trailer-normal" class="row-anchor" title="لینک مستقیم به تریلی کفی معمولی">#</a> تریلی کفی معمولی</th>
                                <td data-label="عرض">۲/۵۰</td>
                                <td data-label="طول">۱۲/۲۰</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۲۲</td>
                            </tr>
                            <tr id="row-trailer-1360">
                                <th scope="row"><a href="#row-trailer-1360" class="row-anchor" title="لینک مستقیم به تریلی ۱۳/۶۰">#</a> تریلی کفی ۱۳/۶۰</th>
                                <td data-label="عرض">۲/۵۰</td>
                                <td data-label="طول">۱۳/۶۰</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۲۵</td>
                            </tr>
                            <tr id="row-lowboy-2axle">
                                <th scope="row"><a href="#row-lowboy-2axle" class="row-anchor" title="لینک مستقیم به کمرشکن ۲ محور">#</a> کمرشکن ۲ محور</th>
                                <td data-label="عرض">۲/۶۰</td>
                                <td data-label="طول">۸ تا ۱۱</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۲۶</td>
                            </tr>
                            <tr id="row-lowboy-3axle">
                                <th scope="row"><a href="#row-lowboy-3axle" class="row-anchor" title="لینک مستقیم به کمرشکن ۳ محور">#</a> کمرشکن ۳ محور</th>
                                <td data-label="عرض">۳</td>
                                <td data-label="طول">۸/۵ تا ۱۱/۵</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۳۲</td>
                            </tr>
                            <tr id="row-lowboy-4axle">
                                <th scope="row"><a href="#row-lowboy-4axle" class="row-anchor" title="لینک مستقیم به کمرشکن ۴ محور">#</a> کمرشکن ۴ محور</th>
                                <td data-label="عرض">۳</td>
                                <td data-label="طول">۹ تا ۱۱/۵</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۳۶</td>
                            </tr>
                            <tr id="row-lowboy-5axle">
                                <th scope="row"><a href="#row-lowboy-5axle" class="row-anchor" title="لینک مستقیم به کمرشکن ۵ محور">#</a> کمرشکن ۵ محور</th>
                                <td data-label="عرض">۳/۱۰</td>
                                <td data-label="طول">۱۱/۵</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۴۶</td>
                            </tr>
                            <tr id="row-lowboy-7axle">
                                <th scope="row"><a href="#row-lowboy-7axle" class="row-anchor" title="لینک مستقیم به کمرشکن ۷ محور">#</a> کمرشکن ۷ محور</th>
                                <td data-label="عرض">۳/۱۰</td>
                                <td data-label="طول">۱۳/۵</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۵۲</td>
                            </tr>
                            <tr id="row-lowboy-11axle">
                                <th scope="row"><a href="#row-lowboy-11axle" class="row-anchor" title="لینک مستقیم به کمرشکن ۱۱ محور">#</a> کمرشکن ۱۱ محور</th>
                                <td data-label="عرض">۳/۱۰</td>
                                <td data-label="طول">۱۵</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۵۹</td>
                            </tr>
                            <tr id="row-traffic-1escort">
                                <th scope="row"><a href="#row-traffic-1escort" class="row-anchor" title="لینک مستقیم به تریلی ترافیکی ۱ اسکورت">#</a> تریلی ترافیکی ۱ اسکورت</th>
                                <td data-label="عرض">۲/۶۰ تا ۳/۵۰</td>
                                <td data-label="طول">۱۳/۶۰</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۲۴</td>
                            </tr>
                            <tr id="row-traffic-2escort">
                                <th scope="row"><a href="#row-traffic-2escort" class="row-anchor" title="لینک مستقیم به تریلی ترافیکی ۲ اسکورت">#</a> تریلی ترافیکی ۲ اسکورت</th>
                                <td data-label="عرض">۳/۵۰ تا ۵</td>
                                <td data-label="طول">۱۳/۶۰</td>
                                <td data-label="ارتفاع مجاز">۴/۵</td>
                                <td data-label="ظرفیت بار">۲۴</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="height-alert">
                    <p><strong>نکته قانونی راهداری:</strong> حد مجاز ارتفاع بار به همراه وسیله نقلیه از سطح زمین جهت تردد عادی در جاده‌ها حداکثر <strong>۴/۵ متر</strong> است.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section faq-section" id="common-questions">
        <div class="container">
            <h2>پرسش‌های متداول</h2>
            <div class="faq-list">
                <details>
                    <summary>حد مجاز ارتفاع بار کامیون چقدر است؟</summary>
                    <p>حد مجاز قانونی ۴/۵ متر از سطح زمین است. بارهای بالاتر از این مقدار نیاز به مجوز بار ترافیکی و اسکورت دارند.</p>
                </details>
                <details>
                    <summary>حداکثر عرض مجاز کامیون و تریلی در جاده‌ها چقدر است؟</summary>
                    <p>طبق قوانین راهداری ایران، حداکثر عرض مجاز وسایل نقلیه باری برای تردد عادی ۲/۶۰ متر است. بارهای عریض‌تر از این مقدار ترافیکی محسوب می‌شوند.</p>
                </details>
                <details>
                    <summary>تفاوت ظرفیت و ابعاد کامیون تک (۶ چرخ) با جفت (۱۰ چرخ) چیست؟</summary>
                    <p>کامیون تک دارای ظرفیت بارگیری حدود ۱۰ تن و طول اتاق ۵/۸۰ تا ۶/۲۰ متر است، اما کامیون جفت (۱۰ چرخ) توانایی حمل ۱۵ تن بار را دارد و طول اتاق آن معمولاً ۶/۸۰ تا ۷ متر می‌باشد.</p>
                </details>
                <details>
                    <summary>تفاوت طول تریلی کفی معمولی با تریلی ۱۳/۶۰ چیست؟</summary>
                    <p>طول بارگیر تریلی‌های کفی معمولی ۱۲/۲۰ متر با ظرفیت ۲۲ تن است، در حالی که طول مدل‌های ترانزیت و کفی بلند ۱۳/۶۰ متر با ظرفیت حدود ۲۵ تن می‌باشد.</p>
                </details>
                <details>
                    <summary>برای حمل بارهای سنگین بیش از ۴۰ تن از چه ماشینی استفاده می‌شود؟</summary>
                    <p>برای محموله‌های فوق سنگین بالای ۴۰ تن، از انواع کمرشکن‌ها (۵ تا ۱۱ محور) و بوژی استفاده می‌شود که ظرفیت حمل بار از ۴۶ تن تا بیش از ۱۰۰ تن را دارا هستند.</p>
                </details>
            </div>
        </div>
    </section>
@endsection
