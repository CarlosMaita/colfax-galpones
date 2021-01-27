<nav class="navbar navbar-expand-xl navbar-light  fixed-top">
<div class="container">
<!-- Brand -->
<a class="navbar-brand py-0" href="{{route('home')}}">
<img src="{{asset('assets/img/logo/logo.png')}}" alt="logo" height=60 width=80 class=py-0>
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
<li class="nav-item d-md-block d-none">
<a href="https://api.whatsapp.com/send?phone=+13053337899" class="nav-link" target="_black">
<i class="fab fa-whatsapp"></i> 
<span class="d-xl-none ml-2">
Whatsapp
</span>
</a>
</li>
<li class="nav-item d-md-block d-none">
<a href="https://twitter.com/medleybusiness" class="nav-link" target="_black">
<i class="fab fa-twitter"></i> 
<span class="d-xl-none ml-2">
Twitter
</span>
</a>
</li>
<li class="nav-item d-md-block d-none">
<a href="https://www.instagram.com/medleybusinesspark/" class="nav-link" target="_black">
<i class="fab fa-instagram"></i> 
<span class="d-xl-none ml-2">
Instagram
</span>
</a>
</li>
<li class="nav-item d-md-block d-none">
<a href="https://www.instagram.com/medleybusinesspark/" class="nav-link" target="_black">
<i class="fab fa-facebook"></i> 
<span class="d-xl-none ml-2">
Facebook
</span>
</a>
</li>
</ul>
<!-- Links -->
<ul class="navbar-nav ml-auto">
<li class="nav-item ">
<a href="{{route('home')}}" class="nav-link">
@lang('Home')
</a>
</li>
<li class="nav-item ">
<a href="{{route('location')}}" class="nav-link">
@lang('Location')
</a>
</li>
<li class="nav-item ">
<a href="{{route('floorplants')}}" class="nav-link">
@lang('Floorplants')
</a>
</li>
<li class="nav-item ">
<a href="{{route('gallery')}}" class="nav-link">
@lang('Gallery')
</a>
</li>
<li class="nav-item ">
<a href="{{route('calculator')}}" class="nav-link">
@lang('Calculator')
</a>
</li>
<li class="nav-item ">
<a href="{{route('blog')}}" class="nav-link">
Blog
</a>
</li>
<li class="nav-item ">
<a href="{{route('contact')}}" class="nav-link">
@lang('Contact')
</a>
</li>
<li class="nav-item-divider">
<span class="nav-link">
<span></span>
</span>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" id="navbarIdioma" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
@lang('lenguage')
</a>
<div class="dropdown-menu" aria-labelledby="navbarIdioma" style="min-width: 50px; width: 100px;">
<a class="dropdown-item" href="{{route('lang', 'en')}}">EN</a>
<a class="dropdown-item" href="{{route('lang', 'es')}}">ES</a>
</div>
</li>
</ul>
</div> <!-- / .navbar-collapse -->
</div> <!-- / .container -->    
</nav>

    
    