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
              @lang('Floorplants')
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">@lang('Home')</a>
            </span>
            <span class="breadcrumb-item">
              <a href="{{route('floorplants')}}">@lang('Floorplants')</a>
            </span> 
            <span class="breadcrumb-item active">
              @lang('Typical Unit Plan')
           </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection




@section('content')
<div class="container">
  <div class="d-flex align-items-center my-4">
    <span class="floorplant__backIcon">
      <svg width="20" height="29" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 35L1 19.6813L19 0.999999" stroke="black"/>
      </svg>  
    </span>
    <a href="{{route('floorplants')}}">
      <span class="ml-2">@lang('Back')</span>
    </a>
  </div>
    <div class="row my-5">
      <div class="col-md-5 py-5 img-fluid text-center order-2 order-md-1">
        <img class="img-fluid " src="{{asset('image/floorplants_secundaria.jpg')}}" alt="" style="max-height:80vh">
      </div>
      <div class="col-md-6 offset-1 floorplant__secondaryBodyMain order-1 order-md-2">
        <h1 class="floorplant__secondaryBodyMain-title text-center h1 p-5">@lang('TYPICAL UNIT')</h1>
        {{-- <p class="floorplant__secondaryBodyMain-subtitle text-center">u</p> --}}
        

        <div class="d-flex justify-content-around text-center flex-wrap">
         
          <div class="stats-item text-center">
            <!-- Value -->
            <div class="stats-item-value">
              700 SF
            </div>
            <!-- Title -->
            <p class="stats-item-title text-muted">
              @lang('Office')
            </p>
          </div>

          <div class="stats-item text-center">
            <!-- Value -->
            <div class="stats-item-value">
              843 SF
            </div>
            <!-- Title -->
            <p class="stats-item-title text-muted">
              @lang('Mezzanine')
            </p>
          </div>

          <div class="stats-item text-center">
            <!-- Value -->
            <div class="stats-item-value">
              3480 SF
            </div>
            <!-- Title -->
            <p class="stats-item-title text-muted">
              @lang('Warehouse')
            </p>
          </div>

          <div class="col-12 mt-4 pt-4">
            <h2 class="text-primary py-2">@lang('Each unit include')</h2>
            <ul class="text-left">
              <li><span class="font-weight-bold text-muted">@lang('Office'): </span>@lang('Finished flooring, air conditioning & bathroom')</li>
              <li><span class="font-weight-bold text-muted">@lang('Mezzanine'): </span>@lang('Good for extra storage')</li>
              <li><span class="font-weight-bold text-muted">@lang('Warehouse'): </span>@lang('Roll up doors & 20-24 ceiling hight')</li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
</div>
@endsection
