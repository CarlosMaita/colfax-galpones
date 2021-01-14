@extends('layouts.app')

@section('metas')
<!-- Primary Meta Tags -->
<title>Floorplants — An Investment within your reach</title>
<meta name="title" content="Floorplants — An Investment within your reach">
<meta name="description" content="Don’t miss out on this opportunity to buy your warehouse space in the heart of Miami. Each unit includes: Office area with finished flooring, painted walls, air conditioning and bathroom. Each warehouse includes one mezzanine.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Floorplants — An Investment within your reach">
<meta property="og:description" content="Don’t miss out on this opportunity to buy your warehouse space in the heart of Miami. Each unit includes: Office area with finished flooring, painted walls, air conditioning and bathroom. Each warehouse includes one mezzanine.">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Floorplants — An Investment within your reach">
<meta property="twitter:description" content="Don’t miss out on this opportunity to buy your warehouse space in the heart of Miami. Each unit includes: Office area with finished flooring, painted walls, air conditioning and bathroom. Each warehouse includes one mezzanine.">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
@endsection

<style>
  .floorplant__secondaryBodyMain {
    padding-top: 8rem;
  }

  .floorplant__backIcon {
    position: relative;
    top: -.1rem;
  }

  .floorplant__secondaryBodyMain-title  {
    font-size: 4rem;
  }
  
  .floorplant__secondaryBodyMain-subtitle {
    color: #7B7B7B;
    font-size: 2rem;
    margin-bottom: 10rem;
  }


  .floorplant__secondaryComponent-subtitle {
    color: #7B7B7B;
  }


</style>


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
              Floorplants
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">Home</a>
            </span>
            <span class="breadcrumb-item active">
               Floorplants
            </span> 
            <span class="breadcrumb-item active">
              Site
           </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection




@section('content')
<div class="container">
    <div class="d-flex justify-content-end align-items-center my-5">
      <a href="#">
        <span class="floorplant__backIcon">
          <svg width="20" height="29" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 35L1 19.6813L19 0.999999" stroke="black"/>
          </svg>  
        </span>
        <span class="ml-2">Back</span>
      </a>
    </div>
    <div class="row my-5">
      <div class="col-md-5 py-5 img-fluid">
        <img class="img-fluid" src="{{asset('image/floorplants_secundaria.jpg')}}" alt="">
      </div>
      <div class="col-md-6 offset-1 floorplant__secondaryBodyMain ">
        <h1 class="floorplant__secondaryBodyMain-title text-center">UNIT 1</h1>
        <p class="floorplant__secondaryBodyMain-subtitle text-center">Lorem ipsu lorems el lem su</p>
        
        <div class="d-flex justify-content-around text-center mb-5">
          <div class="" style="flex:1;">
            <div class="mb-5">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="15" height="15" fill="#A1896E"/>
              </svg>
            </div>
            <h3 class="mb-0">700 SF</h3>
            <p class="mt-0 floorplant__secondaryComponent-subtitle">office</p>  
          </div>

          <div class="" style="flex:1;">
            <div class="mb-5">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="15" height="15" fill="#A1896E"/>
              </svg>
            </div>
            <h3 class="mb-0">843 SF </h3>
            <p class="mt-0 floorplant__secondaryComponent-subtitle">Mezzanine</p>  
          </div>

          <div class="" style="flex:1;">
            <div class="mb-5">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="15" height="15" fill="#A1896E"/>
              </svg>
            </div>
            <h3 class="mb-0">3480 SF</h3>
            <p class="mt-0 floorplant__secondaryComponent-subtitle" >Warehouse</p>  
          </div>
          
        </div>
      </div>
    </div>
</div>
@endsection
