@extends('layouts.app')

@section('title')
Gallery - galpones     
@endsection

@section('content')



<section class="section">
    @section('location', 'Gallery')
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
                <img src="assets/img/28.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/img/29.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/img/30.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/img/31.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item">
                
                <!-- Image -->
                <img src="assets/img/27.jpg" alt="..." class="img-fluid">

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
                <img src="assets/img/28.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/img/29.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/img/30.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/img/31.jpg" alt="..." class="img-fluid">

              </div>
              <div class="slider-item col-6 col-md-3">
                
                <!-- Image -->
                <img src="assets/img/27.jpg" alt="..." class="img-fluid">

              </div>
            </div> <!-- / .slider -->

          </div>
        </div>
      </div> <!-- / .container -->

    </section>
@endsection

