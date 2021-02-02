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
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}


    {{-- fonts  --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&family=Roboto&family=Source+Serif+Pro&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/icon/favicon-32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/icon/favicon-16.png')}}">
    <link rel="manifest" href="assets/ico/site.webmanifest">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
  

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/libs/flickity/dist/flickity.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/flickity-fade/flickity-fade.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/fullpage.js/dist/fullpage.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/highlightjs/styles/codepen-embed.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/incline-icons/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/floating-wpp.css')}}"/>


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">

    @yield('captcha')
    {{-- titulo  --}}
    <title>@yield('title')</title>
</head>
<body>
    <div id="app" > 
        
          {{-- whatsapp --}}
         @include('common.whatsapp')
        {{-- Header & Nav  --}}
        @if(isset($navbar_null))
        {{-- void --}}
        @else
        @include('common.header')
        {{-- page location --}}
        @yield('breadcrumb','')
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
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script> --}}
    <script src="{{asset('js/floating-wpp.js')}}"></script>

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
  
<script type="text/javascript">  
$(document).ready(function(){
    $('#WAButton').floatingWhatsApp({
phone: '13053337899', //WhatsApp Business phone number International format-
//Get it with Toky at https://toky.co/en/features/whatsapp.
headerTitle: 'Write us by WhatsApp!', //Popup Title
popupMessage: 'Hello, are you looking for more information on the project?', //Popup Message
showPopup: true, //Enables popup display
//    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
headerColor: '#343434', //Custom header color
// backgroundColor: 'crimson', //Custom background button color
position: "right"    
});
}
);
</script>  

</body>
</html>
