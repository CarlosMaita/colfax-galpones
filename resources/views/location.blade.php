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
<meta property="og:image" content="{{asset('image/satelital-zona.png')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Location — The best strategic location for your business">
<meta property="twitter:description" content="Strategically located in Dade County, in the city of Medley, the logistics epicenter throughout Dade, Broward and Palm Beach counties. With immediate access to Palmetto Expressway and only 10 minutes from Miami International Airport">
<meta property="twitter:image" content="{{asset('image/satelital-zona.png')}}">
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

<!-- /Content-top -->
<section class="section pb-1">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8 col-offset-2 text-center">
             <h2 class="mb-5 pb-1">The best strategic location for your business.</h2>
             <p class="text-center text-muted mb-3 text-sm">
             The Municipality of Medley is bordered by the Town of Hialeah Gardens on the northwest, the City of Hialeah on the northeast, the City of Miami Springs on the southeast, the City of Doral on the south and is considered an unincorporated area to Miami-Dade County on the west.
            </p>

            <hr class="amr-hr" />

            <p class="text-center text-muted text-sm">
              The location offers immediate access to Palmetto Expressway, NW 74 St., St. & NW 75 St.) On City Water & Sewer th (NW 74 US Turnpike. 27, Milam Diary RD & FL
              Commercial development is typically located along Okeechobee Road. The location offers immediate access to Palmetto Expressway, NW 74 St., St. & NW 75 St.
            </p>
            <p class="text-center text-muted text-sm">
              Only 10 minutes from Miami International Airport. -> (MIA) offers more flights to Latin America and the Caribbean than any other airport in the USA. It handles the most tons of international cargo in the United States.
            </p>
            <p class="text-center text-muted text-sm">
              5 minutes from Hialeah, which is the 11th most densely populated city in the USA.
            </p>

            <hr class="amr-hr mb-4" />

            <p class="text-center text-muted text-sm">
              5 minutes from Doral, which is one of the 10 fastest growing residential and commercial cities in the USA.
            </p>
            <p class="text-center text-muted text-sm">
              20 minutes from the port. The Port of Miami receives very large containers, is adapted for ships (Pos Panama / Mega-vessels) which has made it a focus for trade logistics.
            </p>
            <p class="text-center text-muted text-sm">
              Within walking distance from Bank of America and Burger King.
            </p>
            
            <!-- /Content-top -->
</section>

<section class="section pb-0">

<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-12">

      <!-- Map -->
      <div class="map">
        <div class="map-container" data-markers="[[40.7127753,-74.0059728]]" data-zoom="12"></div>
      </div>
      
    </div>
  </div> <!-- / .row -->
</div> <!-- / .container -->

</section>


      



@endsection
