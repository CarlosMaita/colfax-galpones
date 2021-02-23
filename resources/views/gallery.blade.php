@extends('layouts.app')

@section('metas')
<!-- Primary Meta Tags -->
<title>Gallery —  Visit our product gallery</title>
<meta name="title" content="Gallery —  Visit our product gallery">
<meta name="description" content="Thanks to our exclusive design and unique details, it is possible to develop any type of business such as showrooms, storage spaces, coworking facilities or even small factories.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Gallery —  Visit our product gallery">
<meta property="og:description" content="Thanks to our exclusive design and unique details, it is possible to develop any type of business such as showrooms, storage spaces, coworking facilities or even small factories.">
<meta property="og:image" content="{{asset('image/front.png')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Gallery —  Visit our product gallery">
<meta property="twitter:description" content="Thanks to our exclusive design and unique details, it is possible to develop any type of business such as showrooms, storage spaces, coworking facilities or even small factories.">
<meta property="twitter:image" content="{{asset('image/front.png')}}">
@endsection

{{-- titulo  --}}
@section('title')
Gallery - galpones     
@endsection


{{-- location  --}}
@section('breadcrumb')

    <!-- BREADCRUMB
    ================================================== -->
    <nav class="breadcrumb">
      <div class="container">
        <div class="row align-items-center">

          <div class="col">
            <!-- Heading -->
            <h5 class="breadcrumb-heading">
              @lang('Gallery')
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">@lang('Home')</a>
            </span>
            <span class="breadcrumb-item active">
              @lang('Gallery')
            </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection

    
{{-- contenido  --}}
@section('content')
<section class="section pt-6">
      <!-- Line 
      <div class="line line-top"></div>-->

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-8">

            <!-- Heading -->
            <h1 class="text-center mb-4">
              @lang('Tailor a space that suits all your needs')
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Medley Business Park is <b>the perfect space to develop your business</b>. Modernity and luxury are just some of the key elements that define us, we offer our clients <b>FLEXIBLE opportunities</b> for tailored spaces that specifically suit your needs. 
            </p>

          </div>
        </div>

        <div class="row">
          <div class="col">
            <!-- Slider -->
            <div class="slider slider-no-controls mb-3" data-bind="slider" data-target="#sliderGallerySmall" id="sliderGalleryLarge">
            
              <div class="slider-item">                
                <img src="{{ asset('image/gallery/exterior1.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item">                
                <img src="{{ asset('image/gallery/exterior2.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item">                
                <img src="{{ asset('image/gallery/interior1.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item">                
                <img src="{{ asset('image/gallery/interior3.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item">                
                <img src="{{ asset('image/gallery/interior2.jpg')}}" alt="..." class="img-fluid" >
              </div>            
            </div> 
          </div>
        </div> 

        <div class="row">
          <div class="col">
            <!-- Slider -->
            <div class="slider slider-highlight" data-bind="slider" data-target="#sliderGalleryLarge" id="sliderGallerySmall">                         
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/gallery/exterior1.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/gallery/exterior2.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/gallery/interior1.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/gallery/interior3.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/gallery/interior2.jpg')}}" alt="..." class="img-fluid" >
              </div>
            </div> 

          </div>
        </div>
      </div> <!-- / .container -->

    </section>
@endsection

