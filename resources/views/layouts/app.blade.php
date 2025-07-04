<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>@yield('title', 'International Women University | IWU')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/IWU/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/IWU/logo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/IWU/logo.png') }}">

    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/universitas.css') }}" />
</head>

<body class="overflow-x-hidden" data-mobile-nav-style="classic">
    <div id="preloader" class="tw-fixed tw-inset-0 tw-bg-white tw-z-50 tw-flex tw-items-center tw-justify-center">
        <svg class="tw-w-12 tw-h-12 tw-text-pink-300 tw-animate-spin" viewBox="0 0 64 64" fill="none"
         xmlns="http://www.w3.org/2000/svg" width="24" height="24">
      <path
        d="M32 3C35.8083 3 39.5794 3.75011 43.0978 5.20749C46.6163 6.66488 49.8132 8.80101 52.5061 11.4939C55.199 14.1868 57.3351 17.3837 58.7925 20.9022C60.2499 24.4206 61 28.1917 61 32C61 35.8083 60.2499 39.5794 58.7925 43.0978C57.3351 46.6163 55.199 49.8132 52.5061 52.5061C49.8132 55.199 46.6163 57.3351 43.0978 58.7925C39.5794 60.2499 35.8083 61 32 61C28.1917 61 24.4206 60.2499 20.9022 58.7925C17.3837 57.3351 14.1868 55.199 11.4939 52.5061C8.801 49.8132 6.66487 46.6163 5.20749 43.0978C3.7501 39.5794 3 35.8083 3 32C3 28.1917 3.75011 24.4206 5.2075 20.9022C6.66489 17.3837 8.80101 14.1868 11.4939 11.4939C14.1868 8.80099 17.3838 6.66487 20.9022 5.20749C24.4206 3.7501 28.1917 3 32 3L32 3Z"
        stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
      <path
        d="M32 3C36.5778 3 41.0906 4.08374 45.1692 6.16256C49.2477 8.24138 52.7762 11.2562 55.466 14.9605C58.1558 18.6647 59.9304 22.9531 60.6448 27.4748C61.3591 31.9965 60.9928 36.6232 59.5759 40.9762"
        stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" class="tw-text-pink-500">
      </path>
    </svg>
    </div>
    @include('partials.navbar')
    <main class="">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    @push('scripts')
    <script>
        window.addEventListener('load', function(){
            const preloader = document.getElementById('preloader');
            const header = document.querySelector('header');
            // header.style.display = 'none';

            preloader.style.opacity = '100';
            preloader.style.transition = 'opacity 0.5s ease-in-out';
            // preloader.style.zIndex = 9999;

            // Setelah 0.5 detik, sembunyikan preloader
            setTimeout(() => {
                preloader.style.display = 'none';
                header.style.visibility = 'visible';
            }, 300);
            
            // Trigger ulang animasi
            const animatedEls = document.querySelectorAll('[data-anime]');
             animatedEls.forEach(el => {
            const animeOptions = JSON.parse(el.getAttribute('data-anime'));
            animeOptions.targets = animeOptions.el === 'childs' ? el.children : el;
            anime(animeOptions);
            });
        });
    </script>
    @endpush
    @stack('scripts')

    {{-- Scroll script --}}
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Gulir</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    {{-- Scroll script end --}}
</body>
