@extends('layouts.app')

@section('title')
Calculadora - galpones     
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
             Help center
           </h5>

         </div>
         <div class="col-auto">

           <!-- Breadcrumb -->
           <span class="breadcrumb-item">
             <a href="index.html">Home</a>
           </span>
           <span class="breadcrumb-item active">
             Help center
           </span>
         
         </div>
       </div> <!-- / .row -->
     </div> <!-- / .container -->
   </nav>
   

   <!-- CALCUADORA
   ================================================== -->
   <section>
   	<div></div>
   </section>

   <!-- LINKS
   ================================================== -->
   <section class="section">
     <div class="container">
       <div class="row">
         <div class="col-md-2">
           
           <!-- Title -->
           <h6 class="title">
             Additional resources
           </h6>

         </div>
         <div class="col-md-10">
           
           <!-- Heading -->
           <h3 class="mb-4">
             Still confused?
           </h3>

           <!-- Subheading -->
           <p class="text-muted mb-5">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptas quos odio quidem, nesciunt est repudiandae quae libero voluptatem sit.
           </p>

           <!-- Items -->
           <div class="row">
             <div class="col-md-6">
               
               <!-- Card -->
               <a href="#" class="card mb-3 mb-md-0">
                 
                 <!-- Body -->
                 <div class="card-body">

                   <!-- Icon -->
                   <div class="card-icon text-primary">
                     <span class="icon icon-at"></span>
                   </div>
                   
                   <!-- Title -->
                   <h5 class="card-title">
                     Contact support
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit deserunt vero pariatur.
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>
             <div class="col-md-6">
               
               <!-- Card -->
               <a href="#" class="card">
                 
                 <!-- Body -->
                 <div class="card-body">

                   <!-- Icon -->
                   <div class="card-icon text-primary">
                     <span class="icon icon-edit"></span>
                   </div>
                   
                   <!-- Title -->
                   <h5 class="card-title">
                     Ask the forum
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit deserunt vero pariatur.
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>
           </div> <!-- / .row -->

         </div>
       </div> <!-- / .row -->
     </div> <!-- / .container -->
   </section>
@endsection