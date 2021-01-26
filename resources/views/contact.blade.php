@extends('layouts.app')

@section('metas')
<!-- Primary Meta Tags -->
<title>Contact Us —  Tailor a space that suits all your needs.</title>
<meta name="title" content="Contact Us —  Tailor a space that suits all your needs.">
<meta name="description" content="Discover our office locations and different ways to contact us so that we can provide you with the necessary information to buy your warehouse space in the heart of Miami!">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Contact Us —  Tailor a space that suits all your needs.">
<meta property="og:description" content="Discover our office locations and different ways to contact us so that we can provide you with the necessary information to buy your warehouse space in the heart of Miami!">
<meta property="og:image" content= "{{asset('image/front.png')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Contact Us —  Tailor a space that suits all your needs.">
<meta property="twitter:description" content="Discover our office locations and different ways to contact us so that we can provide you with the necessary information to buy your warehouse space in the heart of Miami!">
<meta property="twitter:image" content= "{{asset('image/front.png')}}">
@endsection


@section('title')
Contacto - galpones     
@endsection

@section('captcha')
    {!! htmlScriptTagJsApi([
        'action' => 'homepage'
    ]) !!}
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
              @lang('Contact')
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">@lang('Home')</a>
            </span>
            <span class="breadcrumb-item active">
            @lang('Contact')
            </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection

@section('content')

<style>
  .title{
    font-size: 1rem;
  }
</style>

<!-- MAP
================================================== -->
<section class="section m-2 p-5">

  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="header bg-cover" style="background-image: url({{ asset('image/banner-contacto.jpg') }});"></div>
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>


<!-- FORM
================================================== -->
<section class="section pt-0 pb-0">

  <!-- Content -->
  <div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif
    <div class="row">
      <div class="col-md-2">

        <!-- Title -->
        <h6 class="title">
          @lang('CONTACT FORM AND INFORMATION')
        </h6>
        
      </div>
      <div class="col-md-10">

        <!-- Heading -->
        <h3 class="mb-4">
          @lang('Do you want to contact us?')
        </h3>

        <!-- Subheading -->
        <p class="text-muted mb-5">
          @lang('text-contact-01')
        </p>

        <!-- Form -->
        <form action="{{route('lead.add')}}" method="POST">
        	@csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              
              <!-- Name -->
              <label>@lang('Full name')</label>
              <div class="input-group">
                <input type="text" class="form-control order-1" required name="name">
                <div class="input-group-append order-0">
                  <div class="input-group-text">
                    
                  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  </svg>


                  </div>
                </div>
              </div>

            </div>
            <div class="form-group col-md-6">
              
              <!-- Email -->
              <label>@lang('Email address')</label>
              <div class="input-group">
                <input type="email" class="form-control order-1" required name="email">
                <div class="input-group-append order-0">
                  <div class="input-group-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                  </svg>

                  </div>
                </div>
              </div>

            </div>

            <div class="form-group col-md-12">
              
              <!-- Phone -->
              <label>@lang('Telephone')</label>
              <div class="input-group">
                <input type="number" class="form-control  order-1" required name="telefono">
                <div class="input-group-append order-0">
                  <!-- AQUÍ VA EL ICONO -->
                  <div class="input-group-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                  </div>
                </div>
              </div>

            </div>
          </div> <!-- / .form-row -->
          <div class="form-row">
            <div class="form-group col-12">
              
              <!-- Message -->
              <label>@lang('Your comments')</label>
              <textarea class="form-control" name="comentario" required rows="7"></textarea>
              
            </div>
          </div> <!-- / .form-row -->
          <div class="form-row">
            <div class="col-12">
              
              <!-- Submit -->
              <button type="submit" class="btn btn-outline-primary">
              @lang('Send message')
              </button>

              <!-- Reset -->
              <button type="reset" class="btn btn-link">
              @lang('Reset form')
              </button>

            </div>
          </div>
        </form>
        
      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>

<!-- OFFICES
================================================== -->
<section class="section">

  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        
        <!-- Title -->
        <h6 class="title">
        @lang('Our offices')
        </h6>

      </div>
      <div class="col-md-10">

        <!-- Heading -->
        <h3 class="mb-4">
        @lang('Want to talk') <span class="text-primary">@lang('in person')</span>@lang('? Call us or visit us')
        </h3>

        <!-- Subheading -->
        <p class="text-muted mb-5">
          @lang('text-contact-02')
        </p>
        
        <!-- Content -->
        <div class="row">
          <div class="col-md-6 col-lg-5">
            
            <!-- Heading -->
            <h5>
            @lang('Location'):
            </h5>
            
            <!-- Address -->
            <p class="text-muted">
              7265 NW 74th Street Miami, Miami-Dade County, FL 33166
            </p>

            <!-- Heading -->
            <h5 class="mt-5">
            @lang('Email'):
            </h5>
            
            <!-- Address -->
            <p class="text-muted">
              <a href="mailto:admin@domain.com">
                cdejongh@colfaxrealty.com
              </a>
            </p>

          </div>
          <div class="col-md-6 col-lg-5">

            <!-- Heading -->
            <h5>
            @lang('Call us'):
            </h5>
            
            <!-- Phone -->
            <p class="text-muted m-0">
              <ul class="list-unstyled">

                <li>
                  <a href="tel:1234567890" class="text-sm">
                    (305) 677-9833
                  </a>
                </li>

                <li>
                <a href="tel:1234567890" class="text-sm">
                   (305) 333-7899
                  </a>
                </li>

                <li>
                  <a href="tel:1234567890" class="text-sm">
                  (786) 678-1052
                  </a>
                </li>

              </ul>






            </p>

            <!-- Heading -->
            <h5>
            @lang('Email'):
            </h5>
            
            <!-- Phone -->
            <p class="text-muted">
              <a href="tel:1234567890">
                troitman@colfaxrealty.com
              </a>
            </p>

          </div>
        </div>   <!-- / .row -->

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>

@endsection