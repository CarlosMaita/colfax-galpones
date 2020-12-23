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
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Contact Us —  Tailor a space that suits all your needs.">
<meta property="twitter:description" content="Discover our office locations and different ways to contact us so that we can provide you with the necessary information to buy your warehouse space in the heart of Miami!">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
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
              Contact
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">Home</a>
            </span>
            <span class="breadcrumb-item active">
              Contact
            </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection

@section('content')

<!-- FORM
================================================== -->
<section class="section pb-0">

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
          Contact form and information
        </h6>
        
      </div>
      <div class="col-md-10">

        <!-- Heading -->
        <h3 class="mb-4">
          Have questions? Send us an <span class="text-primary">e-mail</span>
        </h3>

        <!-- Subheading -->
        <p class="text-muted mb-5">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis magnam, saepe est voluptas iste obcaecati cum odit alias minus ipsa fuga ratione tempora officia sint neque fugiat similique asperiores perferendis.**
        </p>

        <!-- Form -->
        <form action="{{route('lead.add')}}" method="POST">
        	@csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              
              <!-- Name -->
              <label>Full name</label>
              <div class="input-group">
                <input type="text" class="form-control order-1" required name="name">
                <div class="input-group-append order-0">
                  <div class="input-group-text">
                    <svg class="input-group-icon icon-offset icon icon-person" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <path transform="translate(3 3)" d="
                        M0 100 A 50 50 0 0 1 50 60 A 20 20 0 0 1 50 0 A 20 20 0 0 1 50 60 A 50 50 0 0 1 100 100">
                      </path>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="form-group col-md-6">
              
              <!-- Email -->
              <label>Email address</label>
              <div class="input-group">
                <input type="email" class="form-control order-1" required name="email">
                <div class="input-group-append order-0">
                  <div class="input-group-text">
                    <svg class="input-group-icon icon-offset icon icon-envelope" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <path transform="translate(3 3)" d="
                        M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                      </path>
                    </svg>
                  </div>
                </div>
              </div>

            </div>

            <div class="form-group col-md-12">
              
              <!-- Phone -->
              <label>Telefono </label>
              <div class="input-group">
                <input type="number" class="form-control  order-1" required name="telefono">
                <div class="input-group-append order-0">
                  <!-- AQUÍ VA EL ICONO -->
                  <div class="input-group-text">
                    <svg class="input-group-icon icon-offset icon icon-envelope" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <path transform="translate(3 3)" d="
                        M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                      </path>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
          </div> <!-- / .form-row -->
          <div class="form-row">
            <div class="form-group col-12">
              
              <!-- Message -->
              <label>Your comments</label>
              <textarea class="form-control" name="comentario" required rows="7"></textarea>
              
            </div>
          </div> <!-- / .form-row -->
          <div class="form-row">
            <div class="col-12">
              
              <!-- Submit -->
              <button type="submit" class="btn btn-outline-primary">
                Send message
              </button>

              <!-- Reset -->
              <button type="reset" class="btn btn-link">
                Reset form
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
          Our offices
        </h6>

      </div>
      <div class="col-md-10">

        <!-- Heading -->
        <h3 class="mb-4">
          Want to talk <span class="text-primary">in person</span>? Call us or visit us
        </h3>

        <!-- Subheading -->
        <p class="text-muted mb-5">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nam voluptatum facilis, atque officiis possimus totam placeat maiores at tempore nulla corporis rem aliquid iusto ab, distinctio, nostrum cumque asperiores!
        </p>
        
        <!-- Content -->
        <div class="row">
          <div class="col-md-6 col-lg-5">
            
            <!-- Heading -->
            <h5>
              Location:
            </h5>
            
            <!-- Address -->
            <p class="text-muted">
              1234 Altschul, New York, NY 10027-0000
            </p>

            <!-- Heading -->
            <h5>
              Email:
            </h5>
            
            <!-- Address -->
            <p class="text-muted">
              <a href="mailto:admin@domain.com">
                admin@domain.com
              </a>
            </p>

          </div>
          <div class="col-md-6 col-lg-5">

            <!-- Heading -->
            <h5>
              Call us:
            </h5>
            
            <!-- Phone -->
            <p class="text-muted">
              <a href="tel:1234567890">
                132-465-78-90
              </a>
            </p>

            <!-- Heading -->
            <h5>
              Skype:
            </h5>
            
            <!-- Phone -->
            <p class="text-muted">
              <a href="tel:1234567890">
                simpleqode.skype
              </a>
            </p>

          </div>
        </div>   <!-- / .row -->

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->

</section>

@endsection