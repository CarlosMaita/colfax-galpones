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
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Gallery —  Visit our product gallery">
<meta property="twitter:description" content="Thanks to our exclusive design and unique details, it is possible to develop any type of business such as showrooms, storage spaces, coworking facilities or even small factories.">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
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
              Gallery
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">Home</a>
            </span>
            <span class="breadcrumb-item active">
              Gallery
            </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection

    
{{-- contenido  --}}
@section('content')
<section class="section">
      <!-- Line 
      <div class="line line-top"></div>-->

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
              Inside the house**
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo officiis odio repudiandae illum molestiae.**
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col">
            
            <!-- Slider -->
            <div class="slider slider-no-controls mb-3" data-bind="slider" data-target="#sliderGallerySmall" id="sliderGalleryLarge">
              <div class="slider-item">
                
                <!-- Image -->
                <img src="image/front.png" alt="..." class="img-fluid" >

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="image/oficina.png" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="image/warehouse.png" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="image/mezzanine.png" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="image/satelital-zona.png" alt="..." class="img-fluid">

              </div>
              
            </div> <!-- / .slider -->
    
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col">
            
            <!-- Slider -->
            <div class="slider slider-highlight" data-bind="slider" data-target="#sliderGalleryLarge" id="sliderGallerySmall">
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="image/front.png" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="image/oficina.png" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="image/mezzanine.png" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="image/warehouse.png" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="image/satelital-zona.png" alt=""..." class="img-fluid">

              </div>

              </div>
            </div> <!-- / .slider -->

          </div>
        </div>
      </div> <!-- / .container -->

    </section>
@endsection

