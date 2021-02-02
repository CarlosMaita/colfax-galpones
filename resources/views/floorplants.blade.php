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
<meta property="og:image" content="">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Floorplants — An Investment within your reach">
<meta property="twitter:description" content="Don’t miss out on this opportunity to buy your warehouse space in the heart of Miami. Each unit includes: Office area with finished flooring, painted walls, air conditioning and bathroom. Each warehouse includes one mezzanine.">
<meta property="twitter:image" content="">
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
  
  .img-effect-solid:before {
    background-color: #7B7B7B;
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
            @lang('Floorplants')
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">@lang('Home')</a>
            </span>
            <span class="breadcrumb-item active">
            @lang('Floorplants')
            </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection




@section('content')
<div class="container">
    <h1 class="col-md-12 text-center floorplants__title mt-5  mb-2 h2" >@lang('Look at') <span class="text-primary">@lang('THE PLANS')</span></h1>

    <section class="row">
      <div class="col-md-5 order-2 order-md-1">
        <h5 class="mb-5">@lang('Choose the plane you want to see')</h5>
        <div class=" floorplants__menu">
          <div class="d-flex justify-content-between">
            <div>
              <h4>SITE PLAN</h4>
              <p>Scaled diagram of project viewed from above</p>
            </div>
            <div class=" floorplants__optionMain">
              <a href="{{ route('floorplants.third')}}" class=" d-flex justify-content-between align-items-center">
                <span class="mr-3">
                  See
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
              <p>Scaled diagram of typical unit viewed from above</p>
            </div>
            <div class=" floorplants__optionMain">
              <a href="{{ route('floorplants.secondary')}}" class=" d-flex justify-content-between align-items-center">
                <span class="mr-3">
                  See
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

      <div class="col-md-6 offset-1 floorplant__principalImage order-1 order-md-2 m-4">
        <div class="img-effect img-effect-dotted image_background">
          <img class="img-fluid" src="{{asset('image/floorplants_principal.jpg')}}" alt="">
        </div>
      </div>
    </section>
</div>
@endsection
