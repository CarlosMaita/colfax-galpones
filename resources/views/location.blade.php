@extends('layouts.app')

@section('metas')
<!-- Primary Meta Tags -->
<title>Location — The best strategic location for your business</title>
<meta name="title" content="Location — The best strategic location for your business">
<meta name="description" content="Strategically located in Dade County, in the city of Medley, the logistics epicenter throughout Dade, Broward and Palm Beach counties. With immediate access to Palmetto Expressway and only 10 minutes from Miami International Airport">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Location — The best strategic location for your business">
<meta property="og:description" content="Strategically located in Dade County, in the city of Medley, the logistics epicenter throughout Dade, Broward and Palm Beach counties. With immediate access to Palmetto Expressway and only 10 minutes from Miami International Airport">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Location — The best strategic location for your business">
<meta property="twitter:description" content="Strategically located in Dade County, in the city of Medley, the logistics epicenter throughout Dade, Broward and Palm Beach counties. With immediate access to Palmetto Expressway and only 10 minutes from Miami International Airport">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
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
              Location
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">Home</a>
            </span>
            <span class="breadcrumb-item active">
                Location
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
           <h1>Location</h1>
        </div>
    </div>
</div>
@endsection
