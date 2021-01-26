@extends('layouts.app')

@section('metas')
<!-- Primary Meta Tags -->
<title>Blog | Articules</title>
<meta name="title" content="Blog articules">
<meta name="description" content="the best news and articles of medley business park.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Blog articules">
<meta property="og:description" content="the best news and articles of medley business park.">
<meta property="og:image" content="{{asset('image/front.png')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Blog articules">
<meta property="twitter:description" content="the best news and articles of medley business park.">
<meta property="twitter:image" content="{{asset('image/front.png')}}">
@endsection

@section('title')
	Blog | Articules
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
              Blog
            </h5>
          </div>
          <div class="col-auto d-flex">
             <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="{{route('home')}}">@lang('Home')</a>
            </span>
            <span class="breadcrumb-item active">
              Blog
            </span> 
          </div>

        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
@endsection

@section('content')
@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@endif

@if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@endif
<!-- HERO
    ================================================== -->
    @isset($recent_post)
    <section>
      <div class="container section pb-0 pt-4">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 offset-xl-1 order-md-2">
            
            <!-- Image -->
            <img src="{{asset('storage/'.$recent_post->picture)}}" alt="..." class="img-fluid img-incline-left mb-5 mb-md-0">

          </div>
          <div class="col-12 col-md-6 col-xl-5 order-md-1">

            <!-- Meta -->
            <div class="row align-items-center no-gutters mb-4">
              <div class="col">
                
                <p class="mb-0 text-xs text-muted">
                  @lang('by') <strong class="text-body">{{$recent_post->author->name}}</strong> {{$recent_post->created_at->diffForHumans()}}
                </p>

              </div>
            </div> <!-- / .row -->
            
            <!-- Heading -->
            <h1 class="mb-4 font-weight-bold">
              {{$recent_post->title}}
            </h1>

            <!-- Text -->
            <p class="mb-5 text-muted">
              @if(strlen($recent_post->content) < 66)
                {!!$recent_post->content!!}
              @else
                {!!substr($recent_post->content,0, 66)!!}
              @endif
            </p>

            <!-- Button -->
            <a href="{{route('blog.show', $recent_post->slug)}}" class="btn btn-outline-primary">
              @lang('Read more') <i class="fas fa-arrow-right ml-2"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
  @endisset

     <!-- FEATURED
    ================================================== -->
    <section>
      <div class="container section pb-0 pt-5">
        <div class="row align-items-stretch">
          @isset($posts)
              
          @foreach($posts as $post)
          <div class="col-12 col-lg-4 mb-3">
            <a class="card h-100" href="{{route('blog.show', $post->slug)}}">
              <div class="card-body">

                <!-- Meta -->
                <div class="row align-items-center no-gutters mb-4">
                  <div class="col">
                    
                    <p class="mb-0 text-xs text-muted">
                       <strong class="text-body">{{$post->author->name}}</strong> {{$post->created_at->diffForHumans()}}
                    </p>

                  </div>
                </div> <!-- / .row -->
                
                <!-- Heading -->
                <h4>
                   {{$post->title}}
                </h4>

                <!-- Text -->
                <p class="mb-0 text-sm text-muted">
                  @if(strlen($post->content) < 56)
                    {!!$post->content!!}
                  @else
                    {!!substr($post->content,0, 56)!!}
                  @endif
                </p>

              </div>
            </a>

          </div>
          @endforeach
          @endisset
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- LATEST
    ================================================== -->
    <section>
      <div class="container section pb-0">
        <div class="row">
          <div class="col-12 col-md-3 col-lg-2 order-md-2 pl-md-4 border-left">
            
            <!-- Title -->
            <h6 class="title">
              Categories
            </h6>

            <!-- Sidenav -->
            <nav class="sidenav d-flex flex-column mb-5 mb-md-0">
              @isset($categorias)
              @foreach($categorias as $categoria)
                <a class="text-uppercase text-xs mb-2" href="{{route('blog.category.show', $categoria->slug)}}" title="{{$categoria->description}}">
                  {{$categoria->name}}
                </a>
              @endforeach
              @endisset
            </nav>

          </div>
          <div class="col-12 col-md-9 col-lg-10 order-md-1">
            @isset($random_posts)
                
            @foreach($random_posts as $random_post)
              <a class="row align-items-center text-nounderline" href="{{route('blog.show', $random_post->slug)}}">
                <div class="col-12 col-md-3">
                  
                  <!-- Image -->
                  <img src="{{asset('storage/'.$random_post->picture)}}" alt="..." class="img-fluid mb-3 mb-md-0">

                </div>
                <div class="col-12 col-md-9">
                  
                  <!-- Meta -->
                  <p class="mb-2 text-xs text-muted">
                    by <strong class="text-body">{{$random_post->author->name}}</strong> {{$random_post->created_at->diffForHumans()}}
                  </p>
                  
                  <!-- Heading -->
                  <h4>
                    {{$random_post->title}}
                  </h4>

                  <!-- Text -->
                  <p class="mb-0 text-sm text-muted">
                    @if(strlen($random_post->content) < 56)
                      {!!$random_post->content!!}
                    @else
                      {!!substr($random_post->content,0, 56)!!}
                    @endif
                  </p>

                </div>
              </a>

              @if(!$loop->last)
                <hr class="my-4">
              @endif 
            @endforeach
            @endisset

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- NEWSLETTER
    ================================================== -->
    <section>
      <div class="container section">
        <div class="row align-items-center py-5 px-lg-5 bg-dark">
          <div class="col-auto">
            
            <!-- Icon -->
            <i class="icon icon-2x icon-at text-primary"></i>

          </div>
          <div class="col-12 col-md ml-md-n4">
            
            <!-- Heading -->
            <h3 class="mb-4 mb-md-0 text-white">
              @lang('text-newsletter')
            </h3>

          </div>
          <div class="col-12 col-md">
              
            <!-- Form -->
            <form class="form-mailchimp form-light validate" action="{{route('blog.newsletter')}}" method="POST" name="mc-embedded-subscribe-form" novalidate="">
              @csrf
              <div id="mc_embed_signup_scroll" class="form-row justify-content-end">
                <div class="input-group col-md mb-2 mb-md-0">
                  <input type="email" value="" name="correo" class="required email form-control order-1"  placeholder="@lang('Email')">
                  <div class="input-group-append order-0">
                    <div class="input-group-text">
                      <svg class="icon icon-envelope input-group-icon icon-offset" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path transform="translate(3 3)" d="
                          M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div id="mce-responses" class="clear">
                    <div class="response"></div>
                    <div class="response" id="mce-success-response"></div>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div aria-hidden="true" id="mce-hidden-input">
                    {{-- <input type="text" name="ahdjawdja" tabindex="-1" value=""> --}}
                  </div>
                </div>
                <div class="clear col-md-auto">
                  <button type="submit" class="btn btn-outline-primary text-white" >
                    @lang('sign up')
                  </button>
                </div>
              </div>
            </form>
            
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
@endsection