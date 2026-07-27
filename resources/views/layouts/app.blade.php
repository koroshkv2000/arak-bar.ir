<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#f3f5f9" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#080b12" media="(prefers-color-scheme: dark)">
    <title>@yield('title', 'باربری اراک | راهنمای حمل وسایل خانه در شهر اراک')</title>
    <meta name="description" content="@yield('description')">
    @hasSection('keywords')<meta name="keywords" content="@yield('keywords')">@endif
    @hasSection('author')<meta name="author" content="@yield('author')">@endif
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="@yield('canonical')">
    <link rel="alternate" hreflang="fa-IR" href="@yield('canonical')">
    <link rel="preload" href="{{ asset('assets/fonts/IRANSansWeb.woff') }}" as="font" type="font/woff" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome.Pro.7.3.0/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome.Pro.7.3.0/css/light.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}?v={{ filemtime(public_path('assets/css/app.css')) }}">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:locale" content="fa_IR">
    <meta property="og:title" content="@yield('og_title')">
    <meta property="og:description" content="@yield('og_description')">
    <meta property="og:url" content="@yield('canonical')">
    <meta property="og:site_name" content="راهنمای باربری اراک">
    <meta name="twitter:card" content="summary">
    <script>
        document.documentElement.dataset.theme = localStorage.getItem('theme') || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    </script>
    @yield('schema')
</head>
<body>
    <a class="skip-link" href="#main-content">رفتن به محتوای اصلی</a>

    @include('partials.header')

    <main id="main-content">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets/js/app.js') }}?v={{ filemtime(public_path('assets/js/app.js')) }}" defer></script>
</body>
</html>
