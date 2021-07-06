<!-- <footer class="bg-white">
    <h1>Pie de pagina</h1>
</footer> -->

<footer class="section bg-dark p-5">
<div class="bg-cover" style="background-image: url(image/footer.jpg)"></div>
<!-- Triangles -->


<!--Content -->

  <div class="container">
    <div class="row align-self-center">

        <!-- Brand -->
        <div class="col-12 text-center col-md-4 text-md-left">
          <p>
            <a class="navbar-brand py-0" href="{{route('home')}}">
              <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo" height=60 width=80 class=py-0>
             </a>
          </p>
        </div>

        <!-- Links -->
      <div class="col-12 text-center col-md-4">
        <ul class="list-unstyled list-inline text-md-center">
          <li class="list-inline-item mr-2">
            <a href="{{route('gallery')}}" class="text-white">
            @lang('Gallery')
            </a>
          </li>
          <li class="list-inline-item mr-2">
            <a href="{{route('blog')}}" class="text-white">
              Blog
            </a>
          </li>
          <li class="list-inline-item">
            <a href="{{route('contact')}}" class="text-white">
            @lang('Contact')
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
          <p class="text-white text-muted">
            <small>
              Tammy Roitman <br>
              +1 (786) 678-1052
            </small>
          </p>
      </div>

    </div> <!-- / .row -->
    <div class="row  align-items-center">
       {{-- direccion --}}
       <div class="order-4 col-12 text-center col-md-12 order-md-2">
        <p class="text-muted"><span>Address:</span> <br>
            7265 NW 74th Street Miami, Miami-Dade County, FL 33166
        </p>
      </div>
    </div>
    <div class="row align-items-center">

      <!-- Copyright -->
      <div class="order-5 col-12 text-center col-md-4 text-md-left order-md-1">
        <p class="text-white text-muted">
          <small>
            &copy; Copyright <span class="current-year"></span> Medley Business Park. @lang('All rights reserved.')
          </small>
        </p>
      </div>

     

      <!-- Social links -->
      <div class="order-3 col-12 text-center col-md-4 order-md-2">
        <ul class="list-inline list-unstyled text-md-center">
          <li class="list-inline-item">
            <a href="https://api.whatsapp.com/send?phone=+13053337899">
              <i class="fab fa-whatsapp"></i>
            </a>
          </li>
          <li class="list-inline-item ml-3">
            <a href="https://twitter.com/medleybusiness">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item ml-3">
            <a href="https://www.instagram.com/medleybusinesspark/">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item ml-3">
            <a href="https://www.facebook.com/Medleybusinesspark-105592124717036">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
        </ul>
      </div>

<!-- Contacto -->
     <div class="order-2 col-12 text-center col-md-4 order-md-3 text-md-right">
        <p class="text-white text-muted">
          <small>
            Administration <br>
            +(305) 677-9833
          </small>
        </p>
      </div>
     
    
    </div>
    


  </div> <!-- / .container -->
</footer>
