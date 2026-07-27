<header class="site-header">
    <nav class="nav glass" aria-label="ناوبری اصلی">
        <a class="brand" href="{{ route('home') }}" aria-label="صفحه اصلی راهنمای باربری اراک">
            <span class="brand-icon"><i class="fa-light fa-truck-ramp-box" aria-hidden="true"></i></span>
            <span>
                <strong>باربری اراک</strong>
                <small>راهنمای حمل شهری</small>
            </span>
        </a>
        <div class="nav-links" id="nav-links">
            @php
                $navItems = [
                    ['label' => 'راهنمای حمل', 'url' => route('home') . '#guide'],
                    ['label' => 'ابعاد خودروها', 'url' => route('truck.dimensions'), 'route' => 'truck.dimensions'],
                    ['label' => 'هزینه‌ها', 'url' => route('home') . '#cost'],
                    ['label' => 'چک‌لیست', 'url' => route('home') . '#checklist'],
                    ['label' => 'پرسش‌ها', 'url' => route('faq'), 'route' => 'faq'],
                ];
            @endphp
            @foreach ($navItems as $item)
                <a href="{{ $item['url'] }}"@if (isset($item['route']) && request()->routeIs($item['route'])) class="active" aria-current="page"@endif>
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
        <div class="nav-actions">
            <button class="icon-button" id="theme-toggle" type="button" aria-label="تغییر حالت نمایش">
                <i class="fa-light fa-moon" aria-hidden="true"></i>
            </button>
            <button class="icon-button menu-button" id="menu-toggle" type="button" aria-expanded="false" aria-controls="nav-links" aria-label="باز کردن منو">
                <i class="fa-light fa-bars" aria-hidden="true"></i>
            </button>
        </div>
    </nav>
</header>
