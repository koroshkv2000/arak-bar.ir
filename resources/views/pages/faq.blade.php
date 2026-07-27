@extends('layouts.app')

@section('title', 'سوالات متداول باربری اراک | مقایسه وانت، نیسان و ایسوزو')
@section('description', 'پاسخ سوالات متداول باربری اراک درباره فرق ونت بار با نیسان، میزان بار مجاز، فضای بار ایسوزو و مقایسه پیکان وانت و پراید وانت.')
@section('keywords', 'باربری اراک، فرق ونت بار با نیسان، میزان بار ونت و نیسان، فضای بار ایسوزو، پیکان وانت، پراید وانت')
@section('canonical', route('faq'))
@section('og_type', 'website')
@section('og_title', 'سوالات متداول باربری اراک')
@section('og_description', 'راهنمای انتخاب خودرو برای حمل شهری وسایل در اراک.')
@section('footer_disclaimer', 'ظرفیت دقیق هر خودرو باید از کارت و مشخصات فنی همان خودرو بررسی شود.')

@section('schema')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {"@type": "ListItem", "position": 1, "name": "باربری اراک", "item": "{{ url('/') }}"},
                    {"@type": "ListItem", "position": 2, "name": "سوالات متداول", "item": "{{ route('faq') }}"}
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "{{ route('faq') }}#faq",
                "url": "{{ route('faq') }}",
                "name": "سوالات متداول باربری اراک",
                "inLanguage": "fa-IR",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "فرق وانت بار با نیسان چیست؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "وانت‌های سبک برای بار کم‌حجم، مسیرهای کوتاه و دسترسی به معابر باریک مناسب‌ترند. نیسان وانت شاسی و توان حمل بیشتری دارد و برای بارهای سنگین‌تر یا حجیم‌تر انتخاب می‌شود. ظرفیت دقیق باید از کارت و مشخصات همان خودرو بررسی شود."}
                    },
                    {
                        "@type": "Question",
                        "name": "میزان بار وانت بار و نیسان چقدر است؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "ظرفیت وانت‌های سبک بسته به مدل معمولاً در محدوده تقریبی نیم تا کمتر از یک تن است و ظرفیت اسمی بسیاری از نیسان‌های باری نزدیک دو تن اعلام می‌شود. عدد قانونی نهایی، ظرفیت درج‌شده در کارت خودرو است."}
                    },
                    {
                        "@type": "Question",
                        "name": "فضای بار ایسوزو چقدر است؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "ابعاد اتاق بار ایسوزو ثابت نیست و به مدل شاسی، تناژ، طول اتاق و نوع کاربری بستگی دارد. کامیونت‌های مسقف مورد استفاده در اسباب‌کشی فضای بیشتری از وانت و نیسان دارند و برای حمل یک‌جای وسایل منزل مناسب‌ترند."}
                    },
                    {
                        "@type": "Question",
                        "name": "فضای وانت بار بیشتر است یا پیکان وانت؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "وانت بار یک عنوان کلی است و می‌تواند شامل خودروهای مختلف باشد. اگر مقایسه با وانت‌های سبک جدید باشد، پیکان وانت معمولاً اتاق بار نسبتاً کشیده و ظرفیت قابل توجهی در کلاس خود دارد؛ اما مقایسه دقیق به مدل خودروی مقابل و ابعاد اتاق آن وابسته است."}
                    },
                    {
                        "@type": "Question",
                        "name": "وانت بار ارزان‌تر است یا پراید وانت؟",
                        "acceptedAnswer": {"@type": "Answer", "text": "پراید وانت یا سایپا ۱۵۱ معمولاً در گروه وانت‌های سبک و اقتصادی قرار می‌گیرد. با این حال هزینه حمل به مسافت، زمان، تعداد کارگر، طبقات، نوع اتاق و حجم بار وابسته است و فقط با نام خودرو تعیین نمی‌شود."}
                    }
                ]
            }
        ]
    }
    </script>
@endsection

@section('content')
        <section class="faq-page-hero section">
            <div class="faq-orb faq-orb-one"></div>
            <div class="faq-orb faq-orb-two"></div>
            <div class="container">
                <nav class="breadcrumbs" aria-label="مسیر صفحه">
                    <a href="{{ route('home') }}">صفحه اصلی</a>
                    <i class="fa-light fa-chevron-left" aria-hidden="true"></i>
                    <span>سوالات متداول</span>
                </nav>
                <div class="faq-hero-grid">
                    <div>
                        <span class="eyebrow"><i class="fa-light fa-circle-question" aria-hidden="true"></i> راهنمای انتخاب خودروی حمل</span>
                        <h1>پرسش‌های متداول<br><span>باربری اراک</span></h1>
                        <p>پاسخ روشن و کاربردی به سوال‌های رایج درباره ظرفیت، فضای بار و تفاوت خودروهای مورد استفاده برای حمل شهری وسایل خانه در اراک.</p>
                    </div>
                    <div class="faq-hero-card glass">
                        <div class="faq-hero-icon"><i class="fa-light fa-scale-balanced" aria-hidden="true"></i></div>
                        <div>
                            <small>اصل مهم در انتخاب خودرو</small>
                            <strong>وزن بار تنها معیار نیست</strong>
                            <p>حجم، ابعاد وسایل، ارتفاع اتاق، امکان مهار بار و مسیر دسترسی نیز باید بررسی شوند.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-content-section section">
            <div class="container faq-page-layout">
                <aside class="faq-side">
                    <div class="faq-side-card glass">
                        <span>در این صفحه</span>
                        <a href="#van-vs-nissan"><i class="fa-light fa-arrow-left" aria-hidden="true"></i> فرق وانت و نیسان</a>
                        <a href="#payload"><i class="fa-light fa-arrow-left" aria-hidden="true"></i> میزان بار مجاز</a>
                        <a href="#isuzu-space"><i class="fa-light fa-arrow-left" aria-hidden="true"></i> فضای بار ایسوزو</a>
                        <a href="#peykan-space"><i class="fa-light fa-arrow-left" aria-hidden="true"></i> پیکان وانت</a>
                        <a href="#pride-price"><i class="fa-light fa-arrow-left" aria-hidden="true"></i> هزینه پراید وانت</a>
                    </div>
                    <div class="capacity-note">
                        <i class="fa-light fa-id-card" aria-hidden="true"></i>
                        <p><strong>ملاک قانونی ظرفیت</strong>عدد درج‌شده در کارت خودرو و محدودیت‌های همان مدل است، نه توان تجربی یا بارگیری بیش از حد.</p>
                    </div>
                </aside>

                <div class="faq-articles">
                    <article class="answer-card glass" id="van-vs-nissan">
                        <div class="answer-head">
                            <span class="answer-icon blue"><i class="fa-light fa-truck-pickup" aria-hidden="true"></i></span>
                            <div><small>مقایسه خودرو</small><h2>فرق ونت بار با نیسان چیست؟</h2></div>
                        </div>
                        <p>در گفت‌وگوی روزمره، «وانت بار» معمولاً به خودروهای سبک‌تری مانند پراید وانت، آریسان یا وانت‌های مشابه گفته می‌شود؛ در حالی که «نیسان» اغلب به وانت زامیاد با شاسی قوی‌تر و اتاق بار بزرگ‌تر اشاره دارد.</p>
                        <div class="compare-grid">
                            <div>
                                <i class="fa-light fa-feather" aria-hidden="true"></i>
                                <h3>وانت سبک</h3>
                                <ul>
                                    <li>مناسب بار کم و جابه‌جایی محدود</li>
                                    <li>دسترسی راحت‌تر به کوچه‌های باریک</li>
                                    <li>مصرف و هزینه پایه معمولاً کمتر</li>
                                </ul>
                            </div>
                            <div>
                                <i class="fa-light fa-weight-hanging" aria-hidden="true"></i>
                                <h3>نیسان وانت</h3>
                                <ul>
                                    <li>مناسب بار سنگین‌تر و حجیم‌تر</li>
                                    <li>شاسی و توان کاری بالاتر</li>
                                    <li>اتاق بار بزرگ‌تر در اغلب مدل‌ها</li>
                                </ul>
                            </div>
                        </div>
                        <div class="answer-summary"><i class="fa-light fa-lightbulb-on" aria-hidden="true"></i><p><strong>نتیجه کوتاه:</strong> برای چند کارتن یا وسیله کوچک، وانت سبک کافی است؛ برای بار حجیم‌تر یا سنگین‌تر، نیسان انتخاب منطقی‌تری خواهد بود.</p></div>
                    </article>

                    <article class="answer-card glass" id="payload">
                        <div class="answer-head">
                            <span class="answer-icon violet"><i class="fa-light fa-gauge-high" aria-hidden="true"></i></span>
                            <div><small>ظرفیت وزنی</small><h2>میزان بار وانت بار و نیسان چقدر است؟</h2></div>
                        </div>
                        <p>ظرفیت دقیق با توجه به مدل، سال ساخت، نوع سوخت و مشخصات فنی خودرو تغییر می‌کند. به‌طور کلی وانت‌های سبک در محدوده تقریبی نیم تن تا کمتر از یک تن قرار می‌گیرند و ظرفیت اسمی بسیاری از نیسان‌های باری نزدیک دو تن است.</p>
                        <div class="payload-table" role="table" aria-label="مقایسه تقریبی ظرفیت خودروهای باربری">
                            <div class="payload-row payload-header" role="row">
                                <span role="columnheader">گروه خودرو</span>
                                <span role="columnheader">ظرفیت تقریبی</span>
                                <span role="columnheader">کاربرد پیشنهادی</span>
                            </div>
                            <div class="payload-row" role="row">
                                <strong role="cell">وانت سبک</strong>
                                <span role="cell">حدود ۵۰۰ تا ۸۰۰ کیلوگرم</span>
                                <span role="cell">بار کم و وسایل محدود</span>
                            </div>
                            <div class="payload-row" role="row">
                                <strong role="cell">نیسان وانت</strong>
                                <span role="cell">حدود ۲ تن، بسته به مدل</span>
                                <span role="cell">بار متوسط و سنگین‌تر</span>
                            </div>
                        </div>
                        <div class="warning-box"><i class="fa-light fa-triangle-exclamation" aria-hidden="true"></i><p>بارگیری بیش از ظرفیت مجاز، کنترل و ترمزگیری خودرو را مختل می‌کند. همیشه عدد کارت خودرو، وضعیت لاستیک‌ها و نحوه توزیع وزن را ملاک قرار دهید.</p></div>
                    </article>

                    <article class="answer-card glass" id="isuzu-space">
                        <div class="answer-head">
                            <span class="answer-icon cyan"><i class="fa-light fa-truck-container" aria-hidden="true"></i></span>
                            <div><small>حجم و ابعاد اتاق</small><h2>فضای بار ایسوزو چقدر است؟</h2></div>
                        </div>
                        <p>«ایسوزو» نام یک خانواده از کامیونت‌هاست و یک اندازه ثابت برای اتاق بار آن وجود ندارد. طول شاسی، تناژ خودرو، نوع اتاق‌سازی و مسقف یا روباز بودن، ابعاد نهایی فضای بار را تعیین می‌کنند.</p>
                        <div class="space-visual">
                            <div class="truck-outline">
                                <i class="fa-light fa-truck-moving" aria-hidden="true"></i>
                                <span class="measure measure-width">طول متغیر</span>
                                <span class="measure measure-height">ارتفاع متغیر</span>
                            </div>
                            <div class="space-points">
                                <span><i class="fa-light fa-circle-check" aria-hidden="true"></i> مناسب حمل یک‌جای وسایل منزل</span>
                                <span><i class="fa-light fa-circle-check" aria-hidden="true"></i> امکان استفاده از اتاق مسقف</span>
                                <span><i class="fa-light fa-circle-check" aria-hidden="true"></i> فضای بیشتر برای چیدمان ایمن</span>
                                <span><i class="fa-light fa-circle-check" aria-hidden="true"></i> نیازمند بررسی ارتفاع ورودی مسیر</span>
                            </div>
                        </div>
                        <div class="answer-summary"><i class="fa-light fa-ruler-combined" aria-hidden="true"></i><p>برای برآورد واقعی، طول، عرض و ارتفاع داخلی اتاق همان کامیونت را دریافت کنید و آن را با ابعاد بزرگ‌ترین وسایل خانه مقایسه کنید.</p></div>
                        <a class="answer-related-link" href="{{ route('truck.dimensions') }}">مشاهده جدول ابعاد و ظرفیت انواع کامیون و تریلی <i class="fa-light fa-arrow-left" aria-hidden="true"></i></a>
                    </article>

                    <article class="answer-card glass" id="peykan-space">
                        <div class="answer-head">
                            <span class="answer-icon amber"><i class="fa-light fa-arrows-left-right" aria-hidden="true"></i></span>
                            <div><small>مقایسه فضای بار</small><h2>فضای وانت بار بیشتر است یا پیکان وانت؟</h2></div>
                        </div>
                        <p>این پرسش به مدل «وانت بار» بستگی دارد، چون وانت بار نام یک کلاس خودرو است، نه یک مدل مشخص. پیکان وانت در مقایسه با برخی وانت‌های سبک شهری، اتاق بار کشیده و ظرفیت مناسبی دارد؛ اما ممکن است یک وانت بزرگ‌تر یا نیسان فضای بیشتری ارائه دهد.</p>
                        <div class="decision-list">
                            <div><span>۱</span><p><strong>طول بار را بسنجید</strong>برای فرش، کمد بازشده یا قطعات بلند اهمیت بیشتری دارد.</p></div>
                            <div><span>۲</span><p><strong>عرض بین گلگیرها را بررسی کنید</strong>ممکن است کف اتاق در تمام عرض یکسان نباشد.</p></div>
                            <div><span>۳</span><p><strong>حجم را کنار وزن ببینید</strong>بار سبک اما حجیم می‌تواند پیش از رسیدن به حد وزنی، اتاق را پر کند.</p></div>
                        </div>
                    </article>

                    <article class="answer-card glass" id="pride-price">
                        <div class="answer-head">
                            <span class="answer-icon green"><i class="fa-light fa-coins" aria-hidden="true"></i></span>
                            <div><small>مقایسه هزینه حمل</small><h2>وانت بار ارزان‌تر است یا پراید وانت؟</h2></div>
                        </div>
                        <p>پراید وانت یا سایپا ۱۵۱ خود یکی از وانت‌های سبک اقتصادی است. اگر منظور از وانت بار، خودروی بزرگ‌تری مانند آریسان یا نیسان باشد، پراید وانت برای بار کم معمولاً هزینه پایه کمتری دارد؛ اما همیشه ارزان‌ترین انتخاب نهایی نیست.</p>
                        <div class="price-factors">
                            <span><i class="fa-light fa-route" aria-hidden="true"></i><strong>مسافت</strong>فاصله داخل شهر اراک</span>
                            <span><i class="fa-light fa-clock" aria-hidden="true"></i><strong>زمان</strong>مدت توقف و بارگیری</span>
                            <span><i class="fa-light fa-boxes-stacked" aria-hidden="true"></i><strong>حجم بار</strong>تعداد رفت‌وبرگشت لازم</span>
                            <span><i class="fa-light fa-people-carry-box" aria-hidden="true"></i><strong>نیروی حمل</strong>تعداد کارگر و طبقات</span>
                        </div>
                        <div class="answer-summary"><i class="fa-light fa-calculator-simple" aria-hidden="true"></i><p><strong>نکته اقتصادی:</strong> اگر خودروی کوچک مجبور به دو بار رفت‌وبرگشت شود، ممکن است یک خودروی بزرگ‌تر با یک سرویس، انتخاب به‌صرفه‌تری باشد.</p></div>
                    </article>
                </div>
            </div>
        </section>

        <section class="faq-cta-section section">
            <div class="container faq-cta glass">
                <div>
                    <span class="eyebrow">راهنمای کامل‌تر</span>
                    <h2>برای جابه‌جایی شهری آماده شوید</h2>
                    <p>چک‌لیست بسته‌بندی و عوامل موثر بر هزینه باربری اراک را در صفحه اصلی بخوانید.</p>
                </div>
                <a class="button primary" href="{{ route('home') }}#checklist">مشاهده چک‌لیست <i class="fa-light fa-arrow-left" aria-hidden="true"></i></a>
            </div>
        </section>
@endsection
