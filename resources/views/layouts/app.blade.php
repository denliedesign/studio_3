<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Dance Classes | Plano, TX">
        <meta property="og:description" content="Plano Dance classes taught by skilled teachers who take pride in creating a learning experience that is positive and rewarding for dancers of all ages and ability levels.">
        <meta property="og:image" content="https://studio3dance.com/images/studio-3-head.JPG">
        <meta property="og:url" content="https://studio3dance.com">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('description', 'Plano Dance classes taught by skilled teachers who take pride in creating a learning experience that is positive and rewarding for dancers of all ages and ability levels.')">

        <title>@yield('title', 'Studio 3 Dance | Dance Studio Plano TX')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
{{--        <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

{{--        @livewireStyles--}}

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script async src="https://mobileinventor.com/applib/mobileDetector.php?appname=Studio_3_Dance" type="text/javascript"></script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3CD9TVGTDQ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-3CD9TVGTDQ');
        </script>

    </head>
    <body class="font-sans antialiased">
    @include('_top')
    @include('_nav')
    @yield('content')
    @include('_footer')
{{--        <x-jet-banner />--}}

{{--        <div class="min-h-screen bg-gray-100">--}}
{{--            @livewire('navigation-menu')--}}

{{--            <!-- Page Heading -->--}}
{{--            @if (isset($header))--}}
{{--                <header class="bg-white shadow">--}}
{{--                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                        {{ $header }}--}}
{{--                    </div>--}}
{{--                </header>--}}
{{--            @endif--}}

            <!-- Page Content -->
            @if(session()->has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>Success</strong> {{ session()->get('message') }}
                </div>
            @endif
{{--            <nav>--}}
{{--                <x-navigation description="placeholder" />--}}
{{--            </nav>--}}
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
{{--            <footer>--}}
{{--                <x-footer />--}}
{{--            </footer>--}}
{{--            <div id="bottom"></div>--}}
{{--        </div>--}}

{{--        @stack('modals')--}}

        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" defer></script>
        <script src="/js/script.js" defer></script>


{{--        @livewireScripts--}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>
