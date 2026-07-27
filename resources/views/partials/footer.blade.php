<footer class="footer">
    <div class="container footer-main">
        <div class="footer-brand">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-icon"><i class="fa-light fa-truck-ramp-box" aria-hidden="true"></i></span>
                <span><strong>باربری اراک</strong><small>مرجع محتوای حمل شهری</small></span>
            </a>
            <p>این وب‌سایت یک مرجع محتوایی مستقل درباره حمل وسایل خانه و باربری شهری در اراک است و خدمات باربری ارائه نمی‌دهد.</p>
        </div>
        <div class="footer-links">
            <strong>دسترسی سریع</strong>
            <a href="{{ route('home') }}#guide">راهنمای حمل</a>
            <a href="{{ route('truck.dimensions') }}">ابعاد خودروها</a>
            <a href="{{ route('home') }}#cost">عوامل هزینه</a>
            <a href="{{ route('home') }}#checklist">چک‌لیست</a>
            <a href="{{ route('faq') }}">پرسش‌های متداول</a>
        </div>
        <div class="support-card glass">
            <i class="fa-light fa-headset" aria-hidden="true"></i>
            <div><small>پشتیبانی فنی وب‌سایت</small><a href="tel:+989184274276" dir="ltr">0918-427-427-6</a></div>
        </div>
    </div>
    <div class="container footer-bottom">
        <span>© {{ date('Y') }} راهنمای باربری اراک</span>
        <span>@yield('footer_disclaimer', 'اطلاعات این صفحه جایگزین استعلام مستقیم شرایط حمل نیست.')</span>
    </div>
</footer>
