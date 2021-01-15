@extends('layouts.app')

@section('metas')
<!-- Primary Meta Tags -->
<title>Home — Tailor a space that suits all your needs.</title>
<meta name="title" content="Home — Tailor a space that suits all your needs.">
<meta name="description" content="Medley Business Park is the perfect space to develop your business. Modernity and luxury are just some of the key elements that define us.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Home — Tailor a space that suits all your needs.">
<meta property="og:description" content="Medley Business Park is the perfect space to develop your business. Modernity and luxury are just some of the key elements that define us.">
<meta property="og:image" content="{{asset('image/front.png')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Home — Tailor a space that suits all your needs.">
<meta property="twitter:description" content="Medley Business Park is the perfect space to develop your business. Modernity and luxury are just some of the key elements that define us.">
<meta property="twitter:image" content="{{asset('image/front.png')}}">
@endsection

@section('title')
Home - galpones     
@endsection

@section('content')
 <!-- MODALS
    ================================================== -->
    <div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-video-header" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-video modal-lg" role="document">
          <div class="modal-content">
  
            <!-- Header -->
            <div class="modal-header">
  
              <!-- Title -->
              <h4 class="modal-title text-white" id="modal-video-header">
                Video demonstration
              </h4>
  
              <!-- Close -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
  
            </div>
            <div class="modal-body">
          
              <!-- Video -->
              <video src="assets/video/1.mp4" class="img-fluid" controls></video>
  
            </div>
          </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
      </div> <!-- / .modal -->
  
     
      <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

      <!-- Slider -->
      <div class="bg-slider">
        <div class="slider slider-no-controls slider-no-draggable " id="hero-slider-bg">
          <div class="slider-item">
            <!-- Cover -->
            <div class="bg-cover" style="background-image: url(image/front.png)"></div>
          </div>
          <div class="slider-item">
            <!-- Cover -->
            <div class="bg-cover" style="background-image: url(image/front2.png)"></div>
          </div>
        </div>
      </div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-8 col-lg-7 order-md-2">
            <!-- Slider -->
            <div id="hero-slider" class="slider slider-no-controls slider-no-draggable slider-fade" data-bind="slider" data-target="#hero-slider-bg">
             {{-- slider1  --}}
              <div class="slider-item">
                <!-- Heading -->
                <h1 class="text-white text-center mb-4">
                 Tailor a space that suits all your needs. <br> 
                </h1>

                <!-- Subheading -->
                <h3 class="text-white text-muted text-center mb-5">
                Brand new strategically located state-of-the-art warehouse development! 
                </h3>

                <!-- Button -->
                <p class="text-center mb-0">
                  <a href="{{route('contact')}}" target="_blank" class="btn btn-outline-primary text-white">
                    Purchase now
                  </a>
                </p>
              </div>
             {{-- slider1  --}}
              <div class="slider-item">

                <!-- Heading -->
                <h1 class="text-white text-center mb-4">
                 Tailor a space that suits all your needs. <br> 
                </h1>

                <!-- Subheading -->
                <h3 class="text-white text-muted text-center mb-5">
                Brand new strategically located state-of-the-art warehouse development! 
                </h3>

                <!-- Button -->
                <p class="text-center mb-0">
                  <a href="{{route('contact')}}" target="_blank" class="btn btn-outline-primary text-white">
                    Purchase now
                  </a>
                </p>
              </div>

            </div>

          </div>
          <div class="col-6 col-md-2 order-md-1">

            <!-- Controls -->
            <div class="text-left">
              <a href="#hero-slider" class="slider-control" data-slide="previous">
                <span class="icon-arrow-left icon-2x"></span>
              </a>
            </div>

          </div>
          <div class="col-6 col-md-2 order-md-3">

            <!-- Controls -->
            <div class="text-right">
              <a href="#hero-slider" class="slider-control" data-slide="next">
                <span class="icon-arrow-right icon-2x"></span>
              </a>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

 <!-- PAGES
    ================================================== -->
    <section class="section" id="pages">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
            Tailor a space that suits all your needs.
            </h2>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
            Thanks to its exclusive design and unique details, it is possible to develop any type of business such as showrooms, storage spaces, coworking facilities or even small factories.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="app.html" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="image/botons/BOTON_1.jpg" alt="App landing" class="img-fluid">
              </div>

            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="company.html" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="image/botons/BOTON_2.jpg" alt="App landing" class="img-fluid">
              </div>

            
            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="fullpage.html" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="image/botons/BOTON_3.jpg" alt="Fullpage scrolling" class="img-fluid">
              </div>


            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="product.html" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="image/botons/BOTON_4.jpg" alt="App landing" class="img-fluid">
              </div>

           
            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="real-estate.html" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="image/botons/BOTON_5.jpg" alt="App landing" class="img-fluid">
              </div>


            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="restaurant.html" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="image/botons/BOTON_6.jpg" alt="App landing" class="img-fluid">
              </div>


            </a> <!-- / .card -->

          </div>
         
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    
  
      <!-- ABOUT
      ================================================== -->
      <section class="section bg-light">
        
        <!-- Triangle -->
        <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
  
        <!-- Content -->
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6">
              
              <!-- Heading -->
              <h2 class="mb-4">
              Convenient and <span class="text-primary">Flexible</span> spaces
              </h2>

  
            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-md-8">
  
              <!-- Subheading -->
              <p class="text-muted">
              <strong>Medley Business Park</strong> is the perfect space to develop your business. Modernity and luxury are just some of the key elements that define us, we offer our clients FLEXIBLE opportunities for tailored spaces that specifically suit your needs.  
              </p>

              <p class="mb-5 mb-md-0">
                <a href="contact.html" class="btn btn-outline-primary">
                  Get in touch with us**
                </a>
              </p>
  
            </div>
            <div class="col-md-4">
              
              <!-- Blockquote -->
              <blockquote class="blockquote">
              <h4>FOR RENT OR SALE</h4>
                <p>
                Range from 4.500 SF and up
                14 units with conditioned office and bathroom, large industrial garage door.
                </p>
              </blockquote>
  
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
  
      </section>
  
      <!-- GALLERY
      ================================================== -->
      <section class="section">
  
        <!-- Line -->
        <div class="line line-top"></div>
  
        <!-- Content -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
  
              <!-- Heading -->
              <h2 class="text-center mb-4">
                The best strategic location for your business.
              </h2>
             
              <!-- Subheading -->
              <p class="text-center text-muted mb-5">
               Vacancy rates less than 4% for the past 10 years.
               Medley Business Park is located in the Miami-Dade industrial market and Medley Industrial submarket, which are currently exhibiting occupancy rates of 96.2% and 97.1%, respectively.
              </p>

  
            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col">
              
              <!-- Slider -->
              <div class="slider slider-no-controls mb-3" data-bind="slider" data-target="#sliderGallerySmall" id="sliderGalleryLarge">
                <div class="slider-item">
                  
                  <!-- Image -->
                  <img src="image/front.png" alt="..." class="img-fluid">
  
                </div>
                <div class="slider-item">
                  
                  <!-- Image -->
                  <img src="image/oficina.png" alt="..." class="img-fluid">
  
                </div>
                <div class="slider-item">
                  
                  <!-- Image -->
                  <img src="image/mezzanine.png" alt="..." class="img-fluid">
  
                </div>
                <div class="slider-item">
                  
                  <!-- Image -->
                  <img src="image/warehouse.png" alt="..." class="img-fluid">
                  
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
                  <img src="image/mezzanine.png" alt="..." class="img-fluid">
  
                </div>
  
                </div>
              </div> <!-- / .slider -->
  
            </div>
          </div>
        </div> <!-- / .container -->
  
      </section>
  
    
  
      <!-- PROMO
      ================================================== -->
      <section class="section bg-light">
  
        <!-- Triangles -->
        <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
        
        <!-- Content -->
        <div class="container">
          <div class="row">
            <div class="col">
  
              <!-- Image -->
              <div class="text-center">
                <img src="image/mezzanine.png" alt="..." class="img-fluid">
              </div>
  
              <!-- Content -->
              <div class="row justify-content-center mt-5 mt-md-n10">
                <div class="col-md-10 col-lg-8 col-xl-6">
                  
                  <!-- Promo -->
                  <div class="bg-white text-center shadow py-5 px-5">
  
                    <!-- Icon -->
                    <div class="mb-4">
                      <span class="icon-home icon-2x"></span>
                    </div>
                    
                    <!-- Heading -->
                    <h3 class="text-center mb-4">
                     An Investment within your reach
                    </h3>
                    
                    <!-- Content -->
                    <p class="text-muted text-center">
                      The South Florida industrial market is one of the strongest markets in the country with continued growth projected over the next few years.
                    </p> 
                    

  
                    <!-- Button -->
                    <a href="contact.html" class="btn btn-outline-primary">
                      Schedule a showing
                    </a>
  
                  </div>
  
                </div>
              </div> <!-- / .row -->
  
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
  
      </section>


    <!-- HEADER
    ================================================== -->
   <!-- <section class="section pb-0">

      <!-- Content 
      <div class="container">
        <div class="row">
          <div class="col">
            
            <!-- Header --
            <div class="header bg-cover" style="background-image: url(assets/img/15.jpg);"></div>

          </div>
        </div> <!-- / .row --
      </div> <!-- / .container --

    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section pb-0">

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            
            <!-- Title -->
            <h6 class="title">
              Two words about our company
            </h6>

          </div>
          <div class="col-md-5">
            
            <!-- Heading -->
            <h3 class="mb-4">
              We help people find great products at a <span class="text-primary">reasonable</span> price**
            </h3>

            <!-- Content -->
            <blockquote class="blockquote">
              <p class="mb-3">
              7265 Medley Corp is an innovative development firm that is committed to creating an exceptional experience, with over 30 years of background in development and real estate.
              </p>
              <p>
                We achieve maximum sustainability, with beautiful and modern architecture, while protecting the surroundings and increasing the value of the area.
              </p>
            </blockquote>

          </div>
          <div class="col-md-5">
            
            <!-- Content -->
            <p class="text-muted">
              Rukan is an architecture company with over 2 million square feet of space completed in a large-scale spectrum of sectors that include industrial, commercial, and residential buildings.
            </p>
            <p class="text-muted">
              By instilling our core value of practical creativity into each step of the building process, we offer a pragmatic approach that does not end with design.
            </p>
            <p class="text-muted">
              It includes permitting, testing, surveying, and inspection services so that our work never stopped before or during construction.
            </p>
            

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- TEAM
    ================================================== -->
    <section class="section pb-0">
      
      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            
            <!-- Title -->
            <h6 class="title">
              Our team
            </h6>

          </div>
          <div class="col-md-10">
            
            <!-- Heading -->
            <h3 class="mb-4">
              Contact Us
            </h3>
      
            <!-- Team -->
            <div class="row">
              
              <div class="col-md-6">
                
                <!-- Card -->
                <div class="card card-sm border-0 mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="image/contact-us/contact_carmen.jpg" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">
                    
                    <!-- Title -->
                    <h5 class="card-title mb-0">
                    Carmen De Jongh  <small class="text-muted">Florida Real Estate Broker</small>
                    </h5>

                    <!-- Text -->
                    <ul class="card-text list-inline list-unstyled">
                      <li>
                        <a href="#">
                          <p class="mb-0">(305) 333-7899</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <p>cdejongh@colfaxrealty.com</p>
                        </a>
                      </li>
                    
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
              <div class="col-md-6">
                
                <!-- Card -->
                <div class="card card-sm border-0 mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="image/contact-us/contact_tammy.jpg" alt="..." class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">
                    
                    <!-- Title -->
                    <h5 class="card-title mb-0">
                    Tammy Roitman  <small class="text-muted">Real Estate Agent</small>
                    </h5>

                    <!-- Text -->
                    <ul class="card-text list-inline list-unstyled mb-3">
                      <li>
                        <a href="#">
                          <p class="mb-0">(786) 678-1052</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <p>troitman@colfaxrealty.com</p>
                        </a>
                      </li>
                    </ul>

                  </div>

                </div> <!-- / .card -->

              </div>
            </div> <!-- / .row -->

         </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>


     
  
@endsection
