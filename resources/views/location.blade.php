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
              @lang('Location')
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">@lang('Home')</a>
            </span>
            <span class="breadcrumb-item active">
            @lang('Location')
            </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection

@section('content')

<!-- /Content-top -->
<section class="section pt-5 pb-0">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8 col-offset-2 text-center">
             <h2 class="">@lang('The best strategic location for your business')</h2>
             <p class="text-center text-muted text-sm">
              Medley is one of the four cities with the highest commercial growth in the state of Florida, due to its proximity to Miami International Airport, Port Miami, and the main highways of the region.          
              </p>
            <!-- /Content-top -->
</section>

  <!-- MAP
  ================================================== -->
  <section class="section p-1">

    <!-- Content -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header bg-cover d-none d-md-block" style="background-image: url({{asset('image/banner-mapa.jpg')}});"></div>
          <div class="header bg-cover d-md-none" style="background-image: url({{asset('image/banner-mapa-phone.jpg')}});"></div>
        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    </section>

<!-- /Content-middle -->
<section class="section p-5">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8 col-offset-2 text-center">
            <p class="text-muted text-sm">
              <ul class="text-left text-muted">
                <li>Proximity to Miami International Airport, Port Miami, and the main highways of the region</li>
                <li>Located along Okeechobee Road.</li>
                <li>Immediate access to Palmetto Expressway, NW 74 St. St. & NW 75 St.</li>
              </ul>
            </p>
            <!-- /Content-top -->
</section>

<style>
  .text-distance-title{

  font-family: Raleway;
  font-style: normal;
  font-weight: normal;
  /* identical to box height */
  font-size: 16px;
  color: #FFFFFF;
  

  }

  .text-distance-title b{
    font-family: Raleway;
    font-style: normal;
    font-weight: bold;
    border-bottom: 2px solid #DAD4CF;
  }

  .text-distance-subtitle{
    font-family: Raleway;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    color: #DAD4CF;
  }

  .svg-m{
    position: absolute;
    right: 0;
    top: 0;
  }
</style>


<Section class="section p-5" style="background: #4D4E4E">
  <div class="svg-m d-none d-md-block">
    <svg width="176" height="400" viewBox="0 0 176 400" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 26.83V33.48L131.72 94.77C133.42 95.59 134.96 96.31 136.42 97L164.1 108.87L169.67 106.59V99.94L44.41 41.84C40.94 40.36 37.59 38.93 34.36 37.53C31.14 36.14 28.82 35.15 27.42 34.57C26.02 34 25.2301 33.63 25.0601 33.46C29.3601 33.46 35.73 32.81 44.16 31.49L178.86 12.29V0L0 26.83Z" fill="white"/>
      <path d="M139.33 105.72C136.77 106.72 134.16 107.82 131.48 109.04L0.0100098 163.93V170.82L178.86 199.87V187.81L44.66 167.63L25.8101 165.17C31.1001 163.37 37.22 160.99 44.17 158.03L154.28 112.9L139.33 105.72Z" fill="white"/>
      <path d="M0 226.72V233.37L131.72 294.66C133.42 295.48 134.96 296.2 136.42 296.89L164.1 308.76L169.67 306.48V299.83L44.4 241.74C40.93 240.26 37.58 238.83 34.35 237.43C31.13 236.04 28.81 235.05 27.41 234.47C26.01 233.9 25.22 233.53 25.05 233.36C29.35 233.36 35.72 232.71 44.15 231.39L178.85 212.19V199.88L0 226.72Z" fill="white"/>
      <path d="M139.33 305.62C136.77 306.62 134.16 307.72 131.48 308.94L0.0100098 363.83V370.72L178.86 399.77V387.71L44.66 367.53L25.8101 365.07C31.1001 363.27 37.22 360.89 44.17 357.93L154.28 312.8L139.33 305.62Z" fill="white"/>
      </svg>
  </div>
  <div class="container py-2">
    <div class="row py-md-5">
      {{-- 1er icono --}}
      <div class="col-12 col-md-1">
        <svg width="88" height="78" viewBox="0 0 88 78" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M87.09 0H10V77.09H87.09V0Z" fill="#9F876E"/>
          <path d="M23.84 49.9399C24.79 49.0099 25.74 48.0799 26.69 47.1399C27.13 46.7099 27.59 46.3099 27.98 45.8399C28.36 45.3799 28.76 45.3199 29.32 45.4199C31.15 45.7599 32.99 46.0499 34.84 46.3399C35.03 46.3699 35.3 46.2999 35.43 46.1699C38.79 42.6899 42.14 39.1899 45.49 35.6999C45.52 35.6699 45.54 35.6199 45.6 35.5299C38.76 31.3199 31.92 27.1099 25.05 22.8799C25.18 22.7399 25.29 22.6199 25.4 22.5099C26.9 21.0099 28.41 19.5099 29.9 17.9999C30.13 17.7599 30.33 17.7099 30.65 17.8199C38.56 20.4499 46.47 23.0599 54.38 25.6999C54.78 25.8299 55.03 25.7999 55.33 25.4799C58.52 22.1199 61.73 18.7799 64.95 15.4499C66.68 13.6599 69.24 13.3599 71.18 14.6899C73.71 16.4199 73.97 19.9499 71.71 22.1399C69.6 24.1899 67.47 26.2199 65.34 28.2599C64.1 29.4499 62.86 30.6499 61.61 31.8299C61.32 32.0999 61.28 32.3399 61.4 32.6999C64.03 40.5899 66.63 48.4899 69.26 56.3799C69.39 56.7699 69.34 56.9999 69.04 57.2899C67.56 58.7399 66.09 60.2099 64.63 61.6899C64.51 61.8099 64.44 61.9899 64.31 62.2199C59.99 55.2099 55.79 48.3799 51.56 41.5099C51.42 41.6299 51.3 41.7299 51.19 41.8399C47.79 45.0999 44.39 48.3699 40.98 51.6199C40.77 51.8199 40.69 52.0099 40.74 52.2899C41.08 54.2699 41.39 56.2499 41.73 58.2299C41.78 58.5099 41.7 58.6699 41.52 58.8599C40.16 60.2099 38.81 61.5599 37.46 62.9199C37.35 63.0299 37.26 63.1599 37.15 63.2799C37.12 63.2799 37.09 63.2799 37.05 63.2799C37.05 63.2299 37.06 63.1799 37.04 63.1399C35.94 60.0099 34.85 56.8699 33.74 53.7399C33.68 53.5699 33.46 53.3999 33.28 53.3399C31.54 52.7099 29.8 52.1099 28.06 51.4999C26.65 51.0099 25.24 50.5399 23.83 50.0599C23.84 49.9999 23.84 49.9699 23.84 49.9399Z" fill="white"/>
          <path d="M3 0H0V77.09H3V0Z" fill="#333333"/>
        </svg>
      </div>
      <div class="col-12 col-md-5">
        <h3 class="text-distance-title"><b>10 minutes</b> from Miami International Airport</h3>
        <p class="text-distance-subtitle">offers more flights to Latin America and the Caribbean than any other airport in the USA. It handles the most tons of international cargo in the United States.</p>
      </div>
      
      {{-- 2do icono --}}
      <div class="col-12 col-md-1 ">
        <svg width="87" height="78" viewBox="0 0 87 78" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M86.09 0H9V77.09H86.09V0Z" fill="#9F876E"/>
          <path d="M18.71 61.5902C19.1 60.6802 19.79 60.2901 20.79 60.3101C21.85 60.3301 22.8699 60.0502 23.8199 59.5502C25.4799 58.6702 27.22 58.0601 29.21 58.1001C29.12 57.8601 29.0599 57.6801 28.9899 57.5001C27.0599 52.6301 25.13 47.7601 23.2 42.8901C22.79 41.8501 23.02 41.3902 24.08 41.1202C31.75 39.1202 39.41 37.1102 47.08 35.1202C47.37 35.0402 47.7199 35.0401 48.0099 35.1101C55.6299 37.0801 63.24 39.0701 70.85 41.0601C72.12 41.3901 72.32 41.8201 71.83 43.0601C69.91 47.8701 68 52.6901 66.08 57.5001C66.01 57.6701 65.96 57.8401 65.89 58.0401C66.57 58.1201 67.2499 58.1001 67.8599 58.2901C69.0299 58.6601 70.1899 59.0902 71.3199 59.5902C72.2799 60.0102 73.2599 60.3301 74.2999 60.3101C75.2999 60.2901 75.9799 60.6802 76.3799 61.5902C76.3799 61.8502 76.3799 62.1102 76.3799 62.3802C75.8299 63.5002 75.3899 63.7402 74.1099 63.6902C72.5299 63.6202 71.03 63.2502 69.64 62.5102C66.97 61.0802 64.3199 61.0801 61.6299 62.5001C60.9199 62.8701 60.1599 63.1902 59.3799 63.3702C56.7099 63.9802 54.0999 63.8001 51.6099 62.5601C50.8299 62.1701 50 61.8002 49.16 61.6202C47.23 61.2202 45.3999 61.5501 43.6099 62.4601C40.2499 64.1701 36.84 64.1502 33.45 62.5102C33.05 62.3102 32.6499 62.0902 32.2299 61.9402C30.1599 61.2102 28.0999 61.2102 26.1199 62.2002C24.4899 63.0102 22.8299 63.6302 20.9899 63.6902C19.7199 63.7302 19.28 63.5002 18.72 62.3802C18.71 62.1102 18.71 61.8502 18.71 61.5902ZM64.4199 45.2401C64.4099 44.3701 63.8699 43.7902 62.7999 43.5102C57.9599 42.2502 53.12 40.9801 48.28 39.7401C47.82 39.6201 47.2699 39.6401 46.7999 39.7501C44.7099 40.2501 42.63 40.8101 40.54 41.3601C37.69 42.1001 34.8499 42.8501 32.0099 43.6001C31.1999 43.8101 30.6999 44.4202 30.6699 45.2002C30.6399 45.8902 31.09 46.6202 31.77 46.8002C32.18 46.9002 32.67 46.8901 33.09 46.7901C37.79 45.5901 42.4799 44.3602 47.1799 43.1502C47.4199 43.0902 47.6999 43.0902 47.9399 43.1502C51.0799 43.9502 54.21 44.7702 57.35 45.5902C58.95 46.0102 60.5399 46.4302 62.1299 46.8402C63.3699 47.1402 64.4299 46.4001 64.4199 45.2401Z" fill="white"/>
          <path d="M64.8799 36.01C62.9899 35.52 61.2 35.06 59.41 34.59C55.75 33.63 52.0899 32.66 48.4199 31.74C47.8799 31.6 47.25 31.6 46.72 31.73C41.37 33.1 36.0199 34.5 30.6799 35.9C30.5599 35.93 30.4299 35.95 30.2399 35.98C30.2299 35.78 30.21 35.6 30.21 35.42C30.21 32.1 30.21 28.79 30.21 25.47C30.21 24.39 30.5799 24.03 31.6699 24.03C42.2499 24.03 52.8399 24.03 63.4199 24.03C64.5099 24.03 64.8799 24.39 64.8799 25.47C64.8799 28.79 64.8799 32.1 64.8799 35.42C64.8799 35.59 64.8799 35.75 64.8799 36.01Z" fill="white"/>
          <path d="M52.59 20.6401C49.22 20.6401 45.89 20.6401 42.51 20.6401C42.49 20.5001 42.46 20.3601 42.46 20.2101C42.46 18.9201 42.45 17.6301 42.46 16.3401C42.48 14.6901 43.65 13.4501 45.31 13.4001C46.79 13.3501 48.27 13.3601 49.75 13.4001C51.41 13.4501 52.6 14.6801 52.62 16.3201C52.64 17.6901 52.62 19.0501 52.62 20.4201C52.62 20.4701 52.61 20.5301 52.59 20.6401Z" fill="white"/>
          <path d="M3 0H0V77.09H3V0Z" fill="#333333"/>
          </svg>
          
     </div>
     <div class="col-12 col-md-5">
       <h3 class="text-distance-title"><b>20 minutes</b> from the port</h3>
       <p class="text-distance-subtitle">The Port of Miami receives very large containers, is adapted for ships (Pos Panama / Mega-vessels) which has made it a focus for trade logistics.</p>
     </div>

    </div>
    <div class="row p-2">
      {{-- 1er icono --}}
      <div class="col-12 col-md-1">
        <svg width="89" height="78" viewBox="0 0 89 78" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M88.09 0H11V77.09H88.09V0Z" fill="#9F876E"/>
          <path d="M49.17 62.5C48.8 62.2 48.37 61.96 48.07 61.6C43.44 56.23 39.24 50.55 35.94 44.24C34.41 41.31 33.08 38.28 32.51 34.99C31.48 29.07 33.11 23.92 37.32 19.67C40.89 16.05 45.32 14.4 50.39 14.61C58.82 14.96 65.85 21.59 66.79 29.97C67.15 33.18 66.51 36.23 65.4 39.21C63.64 43.95 61.06 48.24 58.2 52.38C56.02 55.54 53.68 58.57 51.15 61.46C50.8 61.86 50.34 62.15 49.92 62.5C49.67 62.5 49.42 62.5 49.17 62.5ZM40.83 31.9401C40.83 36.7501 44.72 40.66 49.53 40.68C54.34 40.7 58.27 36.7701 58.27 31.9401C58.27 27.1301 54.37 23.22 49.57 23.21C44.75 23.19 40.83 27.1101 40.83 31.9401Z" fill="white"/>
          <path d="M3 0H0V77.09H3V0Z" fill="#333333"/>
          </svg>
      </div>
      <div class="col-12 col-md-3">
        <h3 class="text-distance-title"><b>5 minutes</b> from Hialeah</h3>
        <p class="text-distance-subtitle">which is the 11th most densely populated city in the USA.</p>
      </div>
      {{-- 2do icono --}}
      <div class="col-12 col-md-1">
        <svg width="89" height="78" viewBox="0 0 89 78" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M88.09 0H11V77.09H88.09V0Z" fill="#9F876E"/>
          <path d="M49.17 62.5C48.8 62.2 48.37 61.96 48.07 61.6C43.44 56.23 39.24 50.55 35.94 44.24C34.41 41.31 33.08 38.28 32.51 34.99C31.48 29.07 33.11 23.92 37.32 19.67C40.89 16.05 45.32 14.4 50.39 14.61C58.82 14.96 65.85 21.59 66.79 29.97C67.15 33.18 66.51 36.23 65.4 39.21C63.64 43.95 61.06 48.24 58.2 52.38C56.02 55.54 53.68 58.57 51.15 61.46C50.8 61.86 50.34 62.15 49.92 62.5C49.67 62.5 49.42 62.5 49.17 62.5ZM40.83 31.9401C40.83 36.7501 44.72 40.66 49.53 40.68C54.34 40.7 58.27 36.7701 58.27 31.9401C58.27 27.1301 54.37 23.22 49.57 23.21C44.75 23.19 40.83 27.1101 40.83 31.9401Z" fill="white"/>
          <path d="M3 0H0V77.09H3V0Z" fill="#333333"/>
          </svg>
      </div>
      <div class="col-12 col-md-3">
        <h3 class="text-distance-title"><b>5 minutes</b> from Doral</h3>
        <p class="text-distance-subtitle">which is one of the 10 fastest growing residential and commercial cities in the USA.</p>
      </div>
      {{-- 3re icono --}}
      <div class="col-12 col-md-1">
        <svg width="89" height="78" viewBox="0 0 89 78" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M88.09 0H11V77.09H88.09V0Z" fill="#9F876E"/>
          <path d="M49.17 62.5C48.8 62.2 48.37 61.96 48.07 61.6C43.44 56.23 39.24 50.55 35.94 44.24C34.41 41.31 33.08 38.28 32.51 34.99C31.48 29.07 33.11 23.92 37.32 19.67C40.89 16.05 45.32 14.4 50.39 14.61C58.82 14.96 65.85 21.59 66.79 29.97C67.15 33.18 66.51 36.23 65.4 39.21C63.64 43.95 61.06 48.24 58.2 52.38C56.02 55.54 53.68 58.57 51.15 61.46C50.8 61.86 50.34 62.15 49.92 62.5C49.67 62.5 49.42 62.5 49.17 62.5ZM40.83 31.9401C40.83 36.7501 44.72 40.66 49.53 40.68C54.34 40.7 58.27 36.7701 58.27 31.9401C58.27 27.1301 54.37 23.22 49.57 23.21C44.75 23.19 40.83 27.1101 40.83 31.9401Z" fill="white"/>
          <path d="M3 0H0V77.09H3V0Z" fill="#333333"/>
          </svg>
      </div>
      <div class="col-12 col-md-3">
        <h3 class="text-distance-title"><b>Bank</b> of America and Burger King</h3>
        <p class="text-distance-subtitle">Within walking distance.</p>
      </div>
    </div>

  </div>
</Section>

<section>
  <div class="container">
    <h2 class="text-center p-3">Location on Google Map</h2>
    <iframe class="m-3" src="https://www.google.com/maps/d/u/1/embed?mid=1sA6k4zBw9zCOPz4-ALfP7m3plw6mRrJd" width="100%" height="480"></iframe>
  </div>
</section>

@endsection
