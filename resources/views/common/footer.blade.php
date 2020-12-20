<!-- <footer class="bg-white">
    <h1>Pie de pagina</h1>
</footer> -->

<footer class="section bg-dark">

<!-- Triangles -->
<div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
<div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

<!--Content -->
<div class="container">
  <div class="row align-self-center">
    <div class="col-md-auto">

      <!-- Brand -->
        <p>
        <a class="navbar-brand py-0" href="index.html">
          <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo" height=60 width=80 class=py-0>
        </a>
      </p>
    </div>
    <div class="col-md">
  
      <!-- Links -->
      <ul class="list-unstyled list-inline text-md-right">
        <li class="list-inline-item mr-2">
          <a href="{{route('Gallery')}}" class="text-white">
            Gallery
          </a>
        </li>
        <li class="list-inline-item mr-2">
          <a href="{{route('blog')}}" class="text-white">
            Blog
          </a>
        </li>
        <li class="list-inline-item">
          <a href="{{route('contact')}}" class="text-white">
            Contact us
          </a>
        </li>
      </ul>

    </div>
  </div> <!-- / .row -->
  <div class="row align-items-center">
    <div class="col-md">
  
      <!-- Copyright -->
      <p class="text-white text-muted">
        <small>
          &copy; Copyright <span class="current-year"></span> Medley Business Park. All rights reserved.
        </small>
      </p>

    </div>
    <div class="col-md">
  
      <!-- Social links -->
      <ul class="list-inline list-unstyled text-md-right">
        <li class="list-inline-item">
          <a href="#">
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
        <li class="list-inline-item ml-3">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item ml-3">
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>
