<!doctype html>
<html class="no-js" lang="en">

<head>
    @yield('title', 'International Women University | IWU')
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
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/universitas.css') }}" />
</head>

<body class="overflow-x-hidden" data-mobile-nav-style="classic">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')

    {{-- Scroll script --}}
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Gulir</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    {{-- Scroll script end --}}
</body>
