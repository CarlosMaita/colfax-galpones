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
  .floorplants__title {
    margin-top: 7rem;
    margin-bottom: 4rem;
  }

  .floorplants__menu {
    border-left: 1px solid black;
    padding: 1rem 1rem 0;
    transform: translateX(5%);
  }

  .floorplants__optionMain {
    /* transform: translateY(-20%); */
  }

  .floorplant__optionIcon {
    position: relative;
    transform: translateY(-7%);
  }

  /* .floorplant__principalImage-background {
    background-color: #7B7B7B;
    width: 100%;
    height: 100%;
  } */
  
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
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection




@section('content')
<div class="container">
    <h1 class="col-md-12 text-center floorplants__title" >Look at the plans</h1>

    <section class="row">
      <div class="col-md-5">
        <h5 class="mb-5">Choose the plane you want to see</h5>
        <div class=" floorplants__menu">
          <div class="d-flex justify-content-between">
            <div>
              <h4>SITE PLAN</h4>
              <p>lorem ipsup lo rem epso</p>
            </div>
            <div class=" floorplants__optionMain">
              <a href="#" class=" d-flex justify-content-between align-items-center">
                <span class="mr-3">
                  SHOW
                </span>
                <span class="floorplant__optionIcon">
                  <svg width="20" height="29" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L19 16.3187L1 35" stroke="black"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <h4>TYPICAL UNIT PLAN</h4>
              <p>lorem ipsup lo rem epso</p>
            </div>
            <div class=" floorplants__optionMain">
              <a href="#" class=" d-flex justify-content-between align-items-center">
                <span class="mr-3">
                  SHOW
                </span>
                <span class="floorplant__optionIcon">
                  <svg width="20" height="29" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L19 16.3187L1 35" stroke="black"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 offset-1 floorplant__principalImage">
        <div class="img-effect img-effect-solid image_background">
          <img class="img-fluid" src="{{asset('image/floorplants_principal.jpg')}}" alt="">
        </div>
      </div>
    </section>
</div>
@endsection
