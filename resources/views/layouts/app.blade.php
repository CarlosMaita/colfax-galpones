<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- metas  --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('metas')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts Plantilla -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- fonts  --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&family=Roboto&family=Source+Serif+Pro&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
    <link rel="manifest" href="assets/ico/site.webmanifest">
    <link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/ico/browserconfig.xml">
  

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/libs/flickity/dist/flickity.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/flickity-fade/flickity-fade.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/fullpage.js/dist/fullpage.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/highlightjs/styles/codepen-embed.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/incline-icons/style.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">

    @yield('captcha')
    {{-- titulo  --}}
    <title>@yield('title')</title>
</head>
<body>
    <div id="app" > 
        {{-- Header & Nav  --}}
        @if(isset($navbar_null))
            {{-- void --}}
        @else
            @include('common.header')
        @endif
        {{-- contenido --}}
        <main class="" style="min-height: 90vh">
            @yield('content')
        </main>
        {{-- footer --}}
        @include('common.footer')
    </div>

     <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/flickity/dist/flickity.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/libs/flickity-fade/flickity-fade.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-parallax.js/parallax.min.js')}}"></script>
    <script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/libs/waypoints/lib/shortcuts/inview.min.js')}}"></script>
    <script src="{{asset('assets/libs/fullpage.js/vendors/scrolloverflow.min.js')}}"></script>
    <script src="{{asset('assets/libs/fullpage.js/dist/fullpage.min.js')}}"></script>
    <script src="{{asset('assets/libs/highlightjs/highlight.pack.min.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{asset('assets/js/theme.min.js')}}"></script>


</body>
</html>
