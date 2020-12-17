  
      <!--  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    @if(isset($logo))
                        <img src="{{asset('storage/'.$logo->image)}}" width="40" height="40" alt="logo">
                    @else
                        LOGO
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                    <!-- Left Side Of Navbar --><!--
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{route('about-us')}}" class="nav-link">About us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('location')}}" class="nav-link">Location</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('floorplants')}}" class="nav-link">floorplants</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link">contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blog')}}" class="nav-link">Blog</a>
                        </li>
                        {{-- language  --}}
                        <li class="nav-item">
                            <a href="{{route('blog')}}" class="nav-link">Blog</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!--ul class="navbar-nav ml-auto"-->
                        <!-- Authentication Links -->
                        @guest
                            <!--li-- class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </!--li-->
                            @if (Route::has('register'))
                                <!--li-- class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </!--li-->
                            @endif
                        @else
                            <!--li-- class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <!--div-- class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </!--div-->
                            <!--/li-->
                        @endguest
                    <!--/ul--><!--
                </div>
            </div>
        </nav>-->
        
    <nav class="navbar navbar-expand-xl navbar-light  fixed-top">
      <div class="container">

        <!-- Brand -->
         <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('asset/img/logo/logo.png')}}" width="40" height="40" alt="logo">   
        </a>
  
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Social -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item-divider">
              <span class="nav-link">
                <span></span>
              </span>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fab fa-whatsapp"></i> 
                <span class="d-xl-none ml-2">
                  Whatsapp
                </span>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fab fa-twitter"></i> 
                <span class="d-xl-none ml-2">
                  Twitter
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fab fa-instagram"></i> 
                <span class="d-xl-none ml-2">
                  Instagram
                </span>
              </a>
            </li>
          </ul>

          <!-- Links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Home
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                <a class="dropdown-item " href="index.html">
                  Header: Image
                </a>
                <a class="dropdown-item " href="index-header-carousel.html">
                  Header: Carousel
                </a>
                <a class="dropdown-item " href="index-header-parallax.html">
                  Header: Parallax
                </a>
                <a class="dropdown-item " href="index-header-video.html">
                  Header: Video
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Location
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarLandings">
                <a class="dropdown-item " href="app.html">
                  App
                </a>
                <a class="dropdown-item " href="company.html">
                  Company
                </a>
                <a class="dropdown-item " href="fullpage.html">
                  Fullpage
                </a>
                <a class="dropdown-item " href="product.html">
                  Product
                </a>
                <a class="dropdown-item " href="real-estate.html">
                  Real estate
                </a>
                <a class="dropdown-item " href="restaurant.html">
                  Restaurant
                </a>
                <a class="dropdown-item " href="service.html">
                  Service
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Floorplants
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarPages">
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="pagesBlog" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog
                  </a>
                  <div class="dropdown-menu" aria-labelledby="pagesBlog">
                    <a class="dropdown-item " href="blog.html">
                      Blog
                    </a>
                    <a class="dropdown-item " href="blog-post.html">
                      Blog: Post
                    </a>
                  </div>
                </li>
                <li class="dropright">
                  <a class="dropdown-item dropdown-toggle" href="#" id="pagesShop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shop
                  </a>
                  <div class="dropdown-menu" aria-labelledby="pagesShop">
                    <a class="dropdown-item " href="shop.html">
                      Shop
                    </a>
                    <a class="dropdown-item " href="shop-item.html">
                      Shop: Item
                    </a>
                    <a class="dropdown-item " href="cart.html">
                      Shop: Cart
                    </a>
                    <a class="dropdown-item " href="checkout.html">
                      Shop: Checkout
                    </a>
                  </div>
                </li>
                <li>
                  <a class="dropdown-item " href="about.html">
                    About
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="contact.html">
                    Contact
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="faq.html">
                    FAQ
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="pricing.html">
                    Pricing
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="sign-in.html">
                    Sign In
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="sign-up.html">
                    Sign Up
                  </a>
                </li>
                <li>
                  <a class="dropdown-item " href="404.html">
                    404
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarComponents" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarComponents">
                <a class="dropdown-item  active " href="components-theme.html">
                  Theme
                </a>
                <a class="dropdown-item " href="components-bootstrap.html">
                  Bootstrap
                </a>
              </div>
            </li>
            
          </ul>

        </div> <!-- / .navbar-collapse -->
  
      </div> <!-- / .container -->    
    </nav>
    <nav class="breadcrumb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            
            <!-- Heading -->
            <h5 class="breadcrumb-heading">
              Theme components
            </h5>

          </div>
          <div class="col-auto">

            <!-- Breadcrumb -->
            <span class="breadcrumb-item">
              <a href="index.html">Home</a>
            </span>
            <span class="breadcrumb-item active">
              Theme components
            </span>
          
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </nav>
    