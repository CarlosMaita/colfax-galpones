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

        <!-- Brand -->
        <div class="col-12 text-center col-md-4 text-md-left">
          <p>
            <a class="navbar-brand py-0" href="index.html">
             <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo" height=60 width=80 class=py-0>
            </a>
          </p>
        </div>

        <!-- Links -->
      <div class="col-12 text-center col-md-4">
        <ul class="list-unstyled list-inline text-md-center">
          <li class="list-inline-item mr-2">
            <a href="{{route('gallery')}}" class="text-white">
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

      <!-- Contacto -->
      <div class="col-12 text-center col-md-4 text-md-right">
          <p class="text-white text-muted">
            <small>
              Carmen de Jongh <br>
              + (305) 333-7899
            </small>
          </p>
      </div>

    </div> <!-- / .row -->

    <div class="row align-items-center">

      <!-- Copyright -->
      <div class="order-4 col-12 text-center col-md-4 text-md-left order-md-1">
        <p class="text-white text-muted">
          <small>
            &copy; Copyright <span class="current-year"></span> Medley Business Park. All rights reserved.
          </small>
        </p>
      </div>

      <!-- Social links -->
      <div class="order-3 col-12 text-center col-md-4 order-md-2">
        <ul class="list-inline list-unstyled text-md-center">
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

      <!-- Contacto -->
      <div class="order-1 col-12 text-center col-md-4 text-md-right order-md-3">
        <p class="text-white text-muted">
          <small>
            Tammy Roitman <br>
            +1 (786) 678-1052
          </small>
        </p>
      </div>

    

     <!-- Contacto -->
     <div class="order-2 col-12 text-center col-md-12 order-md-3 text-md-right">
        <p class="text-white text-muted">
          <small>
            Administration <br>
            (305) 677-9833
          </small>
        </p>
      </div>
    
    </div>
    


  </div> <!-- / .container -->
</footer>
