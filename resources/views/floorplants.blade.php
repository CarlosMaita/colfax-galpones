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
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1>Floorplants</h1>
        </div>
    </div>
</div>
@endsection
