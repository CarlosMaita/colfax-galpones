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
     
      <!-- HERO
    ================================================== -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
</style>
<style>
  .title-main{
    background:#8a7365;
    position: absolute;
    top: 135px;
    z-index: 200;
    left: 0;
    padding: 8px;
    width: 75vw;
  }

.title-main > h1{
  font-family: Raleway;
  margin-bottom: 0;
}

.subtitle-main > h3{
}
  .subtitle-main{
    background: #aa947d;
    position: absolute;
    z-index: 100;
    right:0;
    top: 265px;
    width: 75vw;
    

    font-style: normal;
    font-weight: bold;
  
    /* identical to box height */

    display: flex;
    align-items: center;
    text-align: center;
    letter-spacing: 0.05em;
    

  }

.btn-primary{
  background-color: #a1896e8f;
}

.main-btn_compra {
  text-align: center;
  padding: 0;
  position: absolute;
  z-index: 300;
  top: 230px;
  right: 110px;
}
.main-btn {
  padding: .5rem 1rem;
  color:white;
}


@media (min-width:769px){
  .subtitle-main_warehouse{
    font-weight: bold;
    font-size: 2rem;
    margin: 0;
    letter-spacing: 0.46em;
    text-transform: uppercase;
    font-family: Raleway;
  }
  .subtitle-main > h3{
    font-size: 1.45rem;
    margin: 0;
    font-family: Raleway;
    letter-spacing: 0.21em;
  }

  .subtitle-main{
    width: 65vw;
    padding:5px 2rem 5px;
  }
  .title-main > h1{
    font-family: Playfair Display;
    font-size: 2.45rem;
    letter-spacing: 0.02em;
    top: 160px;
  }
  .title-main{
    padding: 20px;
    width: 65vw;
    padding-right:3.5rem;
  }
  .main-btn_compra {
    text-align:center;
    color:white;
    position: absolute;
    z-index: 300;
    top: 580px;
    right: 540px;
  }
    .main-btn {
    padding: 1rem 1.5rem 0.95rem;
    color:white;
    font-size: 1.5rem;
  }


}


@media only screen and (max-width: 768px) {
  .title-main{
    top: 140px;
    width: 80vw;
  }

  .title-main > h1{
    font-family: Raleway;
    font-size: medium;
  }
  .subtitle-main{
    display: none
  }
  .subtitle-main > h3{
    display: none;
  }

  .btn-primary{

    background-color: #a1896e8f;
  }

}


</style>

    <section class="section section-top section-full">
      
      <div class="title-main">
        <!-- Heading -->
        <h1 class="text-white text-right mr-3">
          @lang('Tailor a space that suits all your needs') <br> 
        </h1>
      </div>
      <div class="subtitle-main">
        <!-- Subheading -->
        <h3 class="text-white text-left py-2 pl-5">
          Brand new strategically located state-of-the-art <span class="subtitle-main_warehouse">Warehouse development</span> 
          </h3>
      </div>
      <!-- Button -->
      <div class="main-btn_compra">
        <a href="{{route('contact')}}" target="_blank" class="btn btn-primary main-btn">
        @lang('Purchase now')
        </a>
      </div>

      <!-- Slider -->
      <div class="bg-slider">
        <div class="slider slider-no-controls slider-no-draggable " id="hero-slider-bg">
          <div class="slider-item">
            <!-- Cover -->
            <div class="bg-cover" style="background-image: url({{asset('image/images/front-main.jpg')}})"></div>
          </div>
          {{-- <div class="slider-item">
            <!-- Cover -->
            <div class="bg-cover" style="background-image: url(image/images/front2.png)"></div>
          </div> --}}
        </div>
      </div>

      <!-- Triangles -->
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left "></div>
      <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-8 col-lg-7 order-md-2">
            <!-- Slider -->
            <div id="hero-slider" class="slider slider-no-controls slider-no-draggable slider-fade" data-bind="slider" data-target="#hero-slider-bg">
             {{-- slider1  --}}
              <div class="slider-item">
                
                <h1>&nbsp;</h1>
                
                
              </div>
             {{-- slider1  --}}
              {{-- <div class="slider-item">

                <!-- Heading -->
                <h1 class="text-white text-center mb-4">
                @lang('Tailor a space that suits all your needs') <br> 
                </h1>

                <!-- Subheading -->
                <h3 class="text-white  text-center mb-5">
                Brand new strategically located state-of-the-art warehouse development! 
                </h3>

              
              </div> --}}

            </div>

          </div>
          {{-- <div class="col-6 col-md-2 order-md-1">

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

          </div> --}}
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

 <!-- PAGES
    ================================================== -->
    <section class="section py-6" id="pages">

      <!-- Content -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">

            <!-- Heading -->
            <h2 class="text-center mb-4">
             @lang('An Investment within your reach')
            </h2>
           
            <!-- Subheading -->
            <p class="text-muted text-center mb-5"> Medley Business Park is <span class="font-weight-bold">the perfect space to develop your business.</span> Modernity and luxury are just some of the key elements that define us, we offer our clients <span class="font-weight-bold">FLEXIBLE opportunities</span> for tailored spaces to specifically suit your needs.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-md-4 p-2">
            
            <!-- Item -->
            <a href="#" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="{{ asset('image/Botons/BOTON_1.jpg') }}" alt="App landing" class="img-fluid">
              </div>

            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="{{route('location')}}" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="{{ asset('image/Botons/BOTON_2.jpg') }}" alt="location" class="img-fluid">
              </div>

            
            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="{{route('floorplants')}}" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="{{ asset('image/Botons/BOTON_3.jpg') }}" alt="floorplants" class="img-fluid">
              </div>


            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="{{route('gallery')}}" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="{{ asset('image/Botons/BOTON_4.jpg') }}" alt="gallery" class="img-fluid">
              </div>

           
            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="{{route('blog')}}" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="{{ asset('image/Botons/BOTON_5.jpg') }}" alt="blog" class="img-fluid">
              </div>


            </a> <!-- / .card -->

          </div>
          <div class="col-md-4 p-1">
        
            <!-- Item -->
            <a href="{{route('contact')}}" class="card border-0 mb-3 mb-md-0">
          
              <!-- Image -->
              <div class="card-img-top">
                <img src="{{ asset('image/Botons/BOTON_6.jpg') }}" alt="contact" class="img-fluid">
              </div>


            </a> <!-- / .card -->

          </div>
         
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    
  
      <!-- ABOUT
      ================================================== -->
      <section class=" section bg-light p-4">
        
        <!-- Triangle -->
        <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
  
        <!-- Content -->
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6">
              
              <!-- Heading -->
              <h2 class="mb-4">
              @lang('Convenient and') <span class="text-primary">@lang('Flexible')</span> @lang('spaces') 
              </h2>

  
            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-md-8">
  
              <!-- Subheading -->
              <p class="text-muted">
              Thanks to its <span class="font-weight-bold">exclusive design and unique details</span>, it is possible to develop any type of business such as showrooms, storage spaces, coworking facilities or even small factories.</p>

              <p class="mb-5 mb-md-0">
                <a href="{{route('contact')}}" class="btn btn-outline-primary">
                  Get in touch with us
                </a>
              </p>
  
            </div>
            <div class="col-md-4">
              
              <!-- Blockquote -->
              <blockquote class="blockquote">
              <h4>@lang('FOR RENT OR SALE')</h4>
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
      <section class="section py-6">
  
        <!-- Line -->
        <div class="line line-top"></div>
  
        <!-- Content -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
  
              <!-- Heading -->
              <h2 class="text-center mb-4">
              @lang('The best strategic location for your business')
              </h2>
             
              <!-- Subheading -->
              <p class="text-muted mb-5">
              Medley is one of the four cities with the highest <span class="font-weight-bold">commercial growth in the state of Florida</span>, due to its proximity to Miami International Airport, Port Miami, and the main highways of the region. <br>
              The commercial development is located along <span class="font-weight-bold">Okeechobee Road. The location offers immediate access to Palmetto Expressway, NW 74 St. St. & NW 75 St.</span>
              </p>

  
            </div>
          </div> <!-- / .row -->
        <div class="row">
          <div class="col">
            <!-- Slider -->
            <div class="slider slider-no-controls mb-3" data-bind="slider" data-target="#sliderGallerySmall" id="sliderGalleryLarge">
            
              <div class="slider-item">                
                <img src="{{ asset('image/images/front.png')}}" alt="..." class="img-fluid" >
              </div>
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
                <img src="{{ asset('image/images/oficina.png')}}" alt="..." class="img-fluid">
              </div>
              <div class="slider-item">                
                <img src="{{ asset('image/gallery/interior2.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item">
                <img src="{{ asset('image/images/warehouse.png')}}" alt="..." class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="{{ asset('image/images/mezzanine.png')}}" alt="..." class="img-fluid">
              </div>
              <div class="slider-item">
                <img src="{{ asset('image/images/satelital-zona.png')}}" alt="..." class="img-fluid">
              </div>             
            </div> 
          </div>
        </div> 

        <div class="row">
          <div class="col">
            <!-- Slider -->
            <div class="slider slider-highlight" data-bind="slider" data-target="#sliderGalleryLarge" id="sliderGallerySmall">
              
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/images/front.png')}}" alt="..." class="img-fluid">
              </div>
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
                <img src="{{ asset('image/images/oficina.png')}}" alt="..." class="img-fluid">
              </div>
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/gallery/interior2.jpg')}}" alt="..." class="img-fluid" >
              </div>
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/images/warehouse.png')}}" alt="..." class="img-fluid">
              </div>
              <div class="slider-item col-6 col-md-3">
               <img src="{{ asset('image/images/mezzanine.png')}}" alt="..." class="img-fluid">
              </div>
              <div class="slider-item col-6 col-md-3">
                <img src="{{ asset('image/images/satelital-zona.png')}}" alt="..." class="img-fluid">
              </div>

              </div>
            </div> 

          </div>
        </div>
        </div> <!-- / .container -->
  
      </section>
  
    
  
      <!-- PROMO
      ================================================== -->
      <section class="section bg-light p-5">
  
        <!-- Triangles -->
        <div class="bg-triangle bg-triangle-dark bg-triangle-top bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-dark bg-triangle-bottom bg-triangle-right"></div>
        
        <!-- Content -->
        <div class="container">
          <div class="row">
            <div class="col">
  
              <!-- Image -->
              <div class="text-center">
                <img src="{{ asset('image/images/mezzanine.png')}}" alt="..." class="img-fluid">
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
                      Vacancy rates less than 4% for the past 10 years
                    </h3>
                    
                    <!-- Content -->
                    <p class="text-muted">
                     The Miami-Dade industrial market has 96.2%  of occupancy rate and the Medley Industrial submarket has 97.1% <br>
                     
                    The South Florida industrial market is <span class="font-weight-bold">one of the strongest markets in the country</span> with continued growth projected over the next few years. 
                    </p> 
                    

  
                    <!-- Button -->
                    <a href="{{route('contact')}}" class="btn btn-outline-primary">
                      Schedule an appointment
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
      <!-- Content 
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
    <section class="section pt-6 pb-0">

      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            
            <!-- Title -->
            {{-- <h6 class="title">
              @lang('TWO WORDS ABOUT OUR COMPANY')
            </h6> --}}

          </div>
          <div class="col-md-5">
            
            <!-- Heading -->
            <h3 class="mb-4">
              Meet the <span class="text-primary">Team</span>
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
    <section class="section pt-5 pb-0">
      
      <!-- Content -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            
            <!-- Title -->
            

          </div>
          <div class="col-md-10">
            
            <!-- Heading -->
            <h3 class="mb-4">
             @lang('Contact')
            </h3>
      
            <!-- Team -->
            <div class="row">
              
              <div class="col-md-6">
                
                <!-- Card -->
                <div class="card card-sm border-0 mb-3 mb-md-0">
                  
                  <!-- Image -->
                  <img src="{{ asset('image/contact-us/contact_carmen.jpg')}}" alt="photo-carmen" class="card-img-top">

                  <!-- Body -->
                  <div class="card-body pb-1">
                    
                    <!-- Title -->
                    <h5 class="card-title mb-0">
                    Carmen De Jongh  <small class="text-muted">@lang('Florida Real Estate Broker')</small>
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
                  <img src="{{ asset('image/contact-us/contact_tammy.jpg') }}" alt="photo-tammy" class="card-img-top">

                  <!-- Body -->
                  <div class="card-body">
                    
                    <!-- Title -->
                    <h5 class="card-title mb-0">
                    Tammy Roitman  <small class="text-muted">@lang('Real Estate Agent')</small>
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
