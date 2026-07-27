@extends('layouts.app')

@section('title', 'ابعاد و ظرفیت انواع کامیون و تریلی | جدول کامل مشخصات')
@section('description', 'جدول کامل ابعاد، طول، عرض و ظرفیت بار انواع کامیون و تریلی؛ از کامیونت و خاور تا کامیون تک، ۱۰ چرخ، تریلی کفی، کمرشکن و تریلی ترافیکی.')
@section('keywords', 'ابعاد کامیون، ابعاد تریلی، ظرفیت بار کامیون، جدول مشخصات کامیون، طول تریلی، عرض تریلی، ظرفیت خاور، ابعاد کمرشکن')
@section('author', 'راهنمای باربری اراک')
@section('canonical', route('truck.dimensions'))
@section('og_type', 'article')
@section('og_title', 'جدول ابعاد و ظرفیت انواع کامیون و تریلی')
@section('og_description', 'مقایسه یک‌جای عرض، طول، ظرفیت بار و وزن کامیون با بار برای انتخاب وسیله حمل مناسب.')
@section('footer_disclaimer', 'مشخصات نهایی خودرو و ضوابط مسیر را پیش از حمل استعلام کنید.')

@section('schema')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Article",
                "@id": "{{ route('truck.dimensions') }}#article",
                "mainEntityOfPage": {"@type": "WebPage", "@id": "{{ route('truck.dimensions') }}"},
                "headline": "جدول ابعاد و ظرفیت انواع کامیون و تریلی",
                "description": "راهنمای مقایسه ابعاد و ظرفیت بار کامیونت، خاور، کامیون، تریلی و کمرشکن",
                "inLanguage": "fa-IR",
                "author": {"@type": "Organization", "name": "راهنمای باربری اراک"},
                "publisher": {"@type": "Organization", "name": "راهنمای باربری اراک", "url": "{{ url('/') }}"}
            },
            {
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {"@type": "ListItem", "position": 1, "name": "باربری اراک", "item": "{{ route('home') }}"},
                    {"@type": "ListItem", "position": 2, "name": "ابعاد کامیون و تریلی", "item": "{{ route('truck.dimensions') }}"}
                ]
            },
            {
                "@type": "ItemList",
                "name": "مشخصات انواع کامیون و تریلی",
                "numberOfItems": 17,
                "itemListElement": [
                    {"@type": "ListItem", "position": 1, "name": "کامیونت"},
                    {"@type": "ListItem", "position": 2, "name": "خاور ۶۰۸"},
                    {"@type": "ListItem", "position": 3, "name": "خاور ۸۰۸"},
                    {"@type": "ListItem", "position": 4, "name": "۹۱۱ (بادسان)"},
                    {"@type": "ListItem", "position": 5, "name": "کامیون تک"},
                    {"@type": "ListItem", "position": 6, "name": "کامیون ۱۰ چرخ"},
                    {"@type": "ListItem", "position": 7, "name": "تریلی کفی معمولی"},
                    {"@type": "ListItem", "position": 8, "name": "تریلی کفی ۱۳/۶۰"},
                    {"@type": "ListItem", "position": 9, "name": "ترانزیت معمولی"},
                    {"@type": "ListItem", "position": 10, "name": "ترانزیت ۱۳/۶۰"},
                    {"@type": "ListItem", "position": 11, "name": "کمر شکن ۲ محور"},
                    {"@type": "ListItem", "position": 12, "name": "کمر شکن ۷ محور"},
                    {"@type": "ListItem", "position": 13, "name": "کمر شکن ۱۱ محور"},
                    {"@type": "ListItem", "position": 14, "name": "تریلی کشویی"},
                    {"@type": "ListItem", "position": 15, "name": "تریلی ترافیکی معمولی"},
                    {"@type": "ListItem", "position": 16, "name": "تریلی ترافیکی تک اسکورت"},
                    {"@type": "ListItem", "position": 17, "name": "تریلی ترافیکی ۲ اسکورت"}
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "{{ route('truck.dimensions') }}#faq",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "حد مجاز ارتفاع بار کامیون از سطح زمین چقدر است؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "بر اساس اطلاعات این جدول، حد مجاز ارتفاع بار کامیون از سطح زمین ۴/۵ متر است."}
                    },
                    {
                        "@type": "Question",
                        "name": "طول تریلی کفی معمولی و تریلی کفی ۱۳/۶۰ چقدر است؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "طول تریلی کفی معمولی ۱۲/۲۰ متر و طول تریلی کفی ۱۳/۶۰ برابر ۱۳/۶۰ متر است. عرض هر دو ۲/۵۰ متر درج شده است."}
                    },
                    {
                        "@type": "Question",
                        "name": "ظرفیت بار کامیون تک و کامیون ۱۰ چرخ چقدر است؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "در این جدول ظرفیت بار کامیون تک ۱۰ تن و ظرفیت کامیون ۱۰ چرخ ۱۵ تن ذکر شده است."}
                    },
                    {
                        "@type": "Question",
                        "name": "برای بارهای فوق سنگین کدام کمرشکن مناسب‌تر است؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "از میان گزینه‌های جدول، کمرشکن ۱۱ محور با ظرفیت بار ۵۹ تن بیشترین ظرفیت را دارد؛ انتخاب نهایی باید با توجه به ابعاد محموله، مسیر و مجوزهای حمل انجام شود."}
                    },
                    {
                        "@type": "Question",
                        "name": "تفاوت وزن بار با وزن کامیون با بار چیست؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "وزن بار، ظرفیت محموله قابل حمل است؛ وزن کامیون با بار، مجموع وزن وسیله نقلیه و محموله را نشان می‌دهد."}
                    }
                ]
            }
        ]
    }
    </script>
@endsection

@section('content')
        <section class="dimensions-hero section">
            <div class="faq-orb faq-orb-one"></div>
            <div class="faq-orb faq-orb-two"></div>
            <div class="container">
                <nav class="breadcrumbs" aria-label="مسیر صفحه">
                    <a href="{{ route('home') }}">صفحه اصلی</a>
                    <i class="fa-light fa-chevron-left" aria-hidden="true"></i>
                    <span>ابعاد کامیون و تریلی</span>
                </nav>
                <div class="dimensions-hero-grid">
                    <div>
                        <span class="eyebrow"><i class="fa-light fa-ruler-combined" aria-hidden="true"></i> راهنمای انتخاب وسیله حمل بار</span>
                        <h1>جدول ابعاد و ظرفیت<br><span>انواع کامیون و تریلی</span></h1>
                        <p>مقایسه سریع عرض، طول، ظرفیت بار و وزن نهایی خودرو برای انتخاب آگاهانه‌تر کامیون، تریلی یا کمرشکن متناسب با محموله.</p>
                        <div class="hero-actions">
                            <a class="button primary" href="#specifications">مشاهده جدول <i class="fa-light fa-arrow-down" aria-hidden="true"></i></a>
                            <a class="button secondary" href="#common-questions">پرسش‌های رایج</a>
                        </div>
                    </div>
                    <div class="dimension-summary glass">
                        <div><i class="fa-light fa-truck-container" aria-hidden="true"></i><strong>۱۷</strong><span>نوع وسیله حمل</span></div>
                        <div><i class="fa-light fa-weight-hanging" aria-hidden="true"></i><strong>۲/۵ تا ۵۹</strong><span>تن ظرفیت بار</span></div>
                        <div><i class="fa-light fa-arrows-left-right-to-line" aria-hidden="true"></i><strong>۳/۵۰ تا ۱۶</strong><span>متر طول</span></div>
                        <div><i class="fa-light fa-up-to-line" aria-hidden="true"></i><strong>۴/۵</strong><span>متر ارتفاع مجاز</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section dimensions-content" id="specifications">
            <div class="container">
                <div class="section-heading align-start dimensions-heading">
                    <span class="eyebrow">مقایسه مشخصات فنی</span>
                    <h2>مشخصات انواع کامیون، تریلی و کمرشکن</h2>
                    <p>اعداد زیر برای مقایسه اولیه ارائه شده‌اند. پیش از بارگیری، مشخصات خودرو، نوع بار، محدودیت مسیر و الزامات قانونی همان حمل را بررسی کنید.</p>
                </div>

                <div class="truck-table-shell glass">
                    <div class="table-scroll-hint"><i class="fa-light fa-hand-pointer" aria-hidden="true"></i> در موبایل، هر ردیف به‌صورت کارت نمایش داده می‌شود.</div>
                    <div class="truck-table-wrap">
                        <table class="truck-table">
                            <caption>جدول عرض، طول، ظرفیت بار و وزن نهایی انواع کامیون و تریلی</caption>
                            <thead>
                                <tr>
                                    <th scope="col">نوع کامیون یا تریلی</th>
                                    <th scope="col">عرض (متر)</th>
                                    <th scope="col">طول (متر)</th>
                                    <th scope="col">وزن بار (تن)</th>
                                    <th scope="col">وزن کامیون با بار</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><th scope="row">کامیونت</th><td data-label="عرض (متر)">۱/۸۰</td><td data-label="طول (متر)">۳/۵۰</td><td data-label="وزن بار (تن)">۲/۵</td><td data-label="وزن کامیون با بار">۵ تن</td></tr>
                                <tr><th scope="row">خاور ۶۰۸</th><td data-label="عرض (متر)">۲</td><td data-label="طول (متر)">۴</td><td data-label="وزن بار (تن)">۳/۵</td><td data-label="وزن کامیون با بار">۶ تن</td></tr>
                                <tr><th scope="row">خاور ۸۰۸</th><td data-label="عرض (متر)">۲</td><td data-label="طول (متر)">۴</td><td data-label="وزن بار (تن)">۴</td><td data-label="وزن کامیون با بار">۸ تن</td></tr>
                                <tr><th scope="row">۹۱۱ (بادسان)</th><td data-label="عرض (متر)">۲/۱۰</td><td data-label="طول (متر)">۴/۸۰</td><td data-label="وزن بار (تن)">۵</td><td data-label="وزن کامیون با بار">۹ تن</td></tr>
                                <tr><th scope="row">کامیون تک</th><td data-label="عرض (متر)">۲/۳۰</td><td data-label="طول (متر)">۵/۸۰</td><td data-label="وزن بار (تن)">۱۰</td><td data-label="وزن کامیون با بار">۱۹ تن</td></tr>
                                <tr><th scope="row">کامیون ۱۰ چرخ</th><td data-label="عرض (متر)">۲/۳۵</td><td data-label="طول (متر)">۶/۸۰</td><td data-label="وزن بار (تن)">۱۵</td><td data-label="وزن کامیون با بار">۲۶ تن</td></tr>
                                <tr><th scope="row">تریلی کفی معمولی</th><td data-label="عرض (متر)">۲/۵۰</td><td data-label="طول (متر)">۱۲/۲۰</td><td data-label="وزن بار (تن)">۲۲</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                                <tr><th scope="row">تریلی کفی ۱۳/۶۰</th><td data-label="عرض (متر)">۲/۵۰</td><td data-label="طول (متر)">۱۳/۶۰</td><td data-label="وزن بار (تن)">۲۵</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                                <tr><th scope="row">ترانزیت معمولی</th><td data-label="عرض (متر)">۲/۵۰</td><td data-label="طول (متر)">۱۲/۲۰</td><td data-label="وزن بار (تن)">۲۲</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                                <tr><th scope="row">ترانزیت ۱۳/۶۰</th><td data-label="عرض (متر)">۲/۵۰</td><td data-label="طول (متر)">۱۳/۶۰</td><td data-label="وزن بار (تن)">۲۵</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                                <tr><th scope="row">کمر شکن ۲ محور</th><td data-label="عرض (متر)">۲/۶۰</td><td data-label="طول (متر)">۸/۵۰</td><td data-label="وزن بار (تن)">۲۲</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                                <tr><th scope="row">کمر شکن ۷ محور</th><td data-label="عرض (متر)">۳</td><td data-label="طول (متر)">۱۱</td><td data-label="وزن بار (تن)">۳۸</td><td data-label="وزن کامیون با بار">۶۲ تن</td></tr>
                                <tr><th scope="row">کمر شکن ۱۱ محور</th><td data-label="عرض (متر)">۳/۱۰</td><td data-label="طول (متر)">۱۵</td><td data-label="وزن بار (تن)">۵۹</td><td data-label="وزن کامیون با بار">۹۶ تن</td></tr>
                                <tr><th scope="row">تریلی کشویی</th><td data-label="عرض (متر)">۲/۵۰</td><td data-label="طول (متر)">۱۳</td><td data-label="وزن بار (تن)">۲۲</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                                <tr><th scope="row">تریلی ترافیکی معمولی</th><td data-label="عرض (متر)">۳/۵۰</td><td data-label="طول (متر)">۱۵</td><td data-label="وزن بار (تن)">۲۲</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                                <tr><th scope="row">تریلی ترافیکی تک اسکورت</th><td data-label="عرض (متر)">۴</td><td data-label="طول (متر)">۱۶</td><td data-label="وزن بار (تن)">۲۲</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                                <tr><th scope="row">تریلی ترافیکی ۲ اسکورت</th><td data-label="عرض (متر)">۵</td><td data-label="طول (متر)">۱۶</td><td data-label="وزن بار (تن)">۲۲</td><td data-label="وزن کامیون با بار">۴۰ تن</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="height-alert">
                        <i class="fa-light fa-triangle-exclamation" aria-hidden="true"></i>
                        <p><strong>نکته مهم ارتفاع بار:</strong> حد مجاز ارتفاع بار جهت کامیون از سطح زمین <b>۴/۵ متر</b> می‌باشد.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section selection-guide">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">پیش از انتخاب خودرو</span>
                    <h2>فقط ظرفیت وزنی را مقایسه نکنید</h2>
                    <p>برای انتخاب وسیله مناسب، ابعاد واقعی محموله و شرایط مسیر به‌اندازه وزن اهمیت دارند.</p>
                </div>
                <div class="selection-grid">
                    <article class="glass"><i class="fa-light fa-ruler-triangle" aria-hidden="true"></i><h3>ابعاد محموله</h3><p>طول، عرض و ارتفاع بزرگ‌ترین قطعه را پیش از انتخاب خودرو اندازه بگیرید.</p></article>
                    <article class="glass"><i class="fa-light fa-scale-balanced" aria-hidden="true"></i><h3>وزن و توزیع بار</h3><p>وزن کل و محل تمرکز آن بر نوع خودرو، تعداد محور و روش مهاربندی اثر دارد.</p></article>
                    <article class="glass"><i class="fa-light fa-route" aria-hidden="true"></i><h3>محدودیت مسیر</h3><p>عرض معبر، ارتفاع پل، شعاع گردش و محدودیت تردد خودروهای سنگین را بررسی کنید.</p></article>
                    <article class="glass"><i class="fa-light fa-file-shield" aria-hidden="true"></i><h3>مجوز و اسکورت</h3><p>بارهای ترافیکی و فوق‌سنگین ممکن است به مجوز مسیر و یک یا دو خودروی اسکورت نیاز داشته باشند.</p></article>
                </div>
            </div>
        </section>

        <section class="section faq-section dimensions-faq" id="common-questions">
            <div class="container faq-layout">
                <div class="section-heading align-start">
                    <span class="eyebrow">پرسش‌های متداول</span>
                    <h2>سوالات رایج درباره ابعاد کامیون و تریلی</h2>
                    <p>پاسخ کوتاه به نکات مهمی که هنگام مقایسه ظرفیت و اندازه خودروهای حمل مطرح می‌شوند.</p>
                </div>
                <div class="faq-list">
                    <details>
                        <summary>حد مجاز ارتفاع بار کامیون از سطح زمین چقدر است؟ <i class="fa-light fa-plus" aria-hidden="true"></i></summary>
                        <p>بر اساس اطلاعات این جدول، حد مجاز ارتفاع بار کامیون از سطح زمین ۴/۵ متر است. ارتفاع نهایی باید پس از بارگیری و با در نظر گرفتن مسیر کنترل شود.</p>
                    </details>
                    <details>
                        <summary>طول تریلی کفی معمولی و ۱۳/۶۰ چقدر است؟ <i class="fa-light fa-plus" aria-hidden="true"></i></summary>
                        <p>تریلی کفی معمولی ۱۲/۲۰ متر و نوع ۱۳/۶۰ به‌اندازه ۱۳/۶۰ متر طول دارد. عرض درج‌شده برای هر دو مدل ۲/۵۰ متر است.</p>
                    </details>
                    <details>
                        <summary>ظرفیت کامیون تک و کامیون ۱۰ چرخ چقدر است؟ <i class="fa-light fa-plus" aria-hidden="true"></i></summary>
                        <p>ظرفیت بار کامیون تک در جدول ۱۰ تن و ظرفیت کامیون ۱۰ چرخ ۱۵ تن درج شده است؛ وزن کامیون با بار نیز به‌ترتیب ۱۹ و ۲۶ تن است.</p>
                    </details>
                    <details>
                        <summary>برای حمل بار فوق سنگین کدام کمرشکن انتخاب می‌شود؟ <i class="fa-light fa-plus" aria-hidden="true"></i></summary>
                        <p>در میان مدل‌های این جدول، کمرشکن ۱۱ محور با ظرفیت ۵۹ تن بیشترین ظرفیت را دارد. بااین‌حال ابعاد محموله، توزیع وزن، مسیر و مجوزها انتخاب نهایی را تعیین می‌کنند.</p>
                    </details>
                    <details>
                        <summary>وزن بار چه تفاوتی با وزن کامیون با بار دارد؟ <i class="fa-light fa-plus" aria-hidden="true"></i></summary>
                        <p>وزن بار به ظرفیت محموله اشاره دارد، اما وزن کامیون با بار مجموع وزن خود وسیله نقلیه و محموله بارگیری‌شده است.</p>
                    </details>
                </div>
            </div>
        </section>
@endsection
