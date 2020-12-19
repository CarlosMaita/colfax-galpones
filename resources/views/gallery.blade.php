@extends('layouts.app')

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
              Inside the house
            </h2>

            <!-- Subheading -->
            <p class="text-center text-muted mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo officiis odio repudiandae illum molestiae.
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

