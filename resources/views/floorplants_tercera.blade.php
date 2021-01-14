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


  .floorplant__thirdIconsMain-title {
    padding-top: 5rem;
  }

  .floorplant__thirdIconsMain-title.second {
    padding-top: 1rem;
    font-size: 2rem;
  }

  .floorplant__thirdIconsMain-icons img {
    width: 100px;
    height: 100px;
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
    <div class="text-center">
      <h1>SITE PLAN</h1>
      <p class="floorplant__secondaryBodyMain-subtitle mb-2">Lorem ipsu lorems el lem su</p>
      <a href="#" class="btn btn-outline-primary">Download Now</a>
    </div>
    <div class="row mb-5">
      <div class="col-md-10 offset-1 d-flex justify-content-center">
          <img class="img-fluid" src="{{asset('image/floorplants_tercera.png')}}" alt="">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 floorplant__thirdIconsMain d-flex justify-content-around align-items-center mb-5">
          <div class="text-center">
            <div class="floorplant__thirdIconsMain-icons">
                <img src="{{asset('image/icon/car.svg')}}" alt="">
            </div>
            <h3 class="floorplant__thirdIconsMain-title ">74 Spaces</h3>
            <p>Parking Provided</p>
          </div>

          <div class="text-center">
            <div class="floorplant__thirdIconsMain-icons mb-1">
                <img src="{{asset('image/icon/plans.svg')}}" alt="">
            </div>
            <h3 class="floorplant__thirdIconsMain-title second text-center">72483,90 SF</h3>
            <p class="text-center">Total SF</p>
          </div>

          <div class="text-center">
            <div class="floorplant__thirdIconsMain-icons">
                <img src="{{asset('image/icon/tree.svg')}}" alt="">
            </div>
            <h3 class="floorplant__thirdIconsMain-title third text-center">74 Spaces</h3>
            <p class="text-center">Parking Provided</p>
          </div>
      </div>
    </div>
</div>
@endsection
