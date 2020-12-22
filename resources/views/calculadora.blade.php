@extends('layouts.app')

@section('title')
Calculadora - galpones     
@endsection


  
{{-- location  --}}
@section('breadcrumb')
<style type="text/css">
  .option_view {
    text-decoration: none;
  }

  .option_view:hover {
    text-decoration: none;
  }

  .option_view.hide {
    display: none;
  }

  .option_advance.hide {
    display: none;
  }
</style>
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
   <section class="container section">
   	<div class="row">
      <div class="col-md-11">
        <h1>Mortgage Calculator</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
      </div>
   		<div class="col-md-4">
   			<div class="form-group">
   				<h6>Home price</h6>
   				<input class="form-control" type="number" name="">
   			</div>
   			<div class="form-group">
   				<h6>Down Payment</h6>
   				<input class="form-control" type="number" name="">
   			</div>
   			<div class="form-group">
   				<h6>Loan program</h6>
   				<select class="form-control">
   					<option></option>
   				</select>
   			</div>
   			<div class="form-group">
   				<h6>Interes rate</h6>
   				<input class="form-control" type="number" name="">
   			</div>
        <div class="form-group">
          <a class="option_view" id="advanced_option" href="#">Advanced</a>
        </div>
        <div class="option_advance hide" id="advance">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="">
            <label class="form-check-label">Include PMI</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="">
            <label class="form-check-label">Include taxes/insurange</label>
          </div>
          <div class="form-group">
            <h6>Property tax</h6>
            <div class="d-flex">
              <div>
                <input class="form-control" type="number" name="">
              </div>
              <div>
                <input class="form-control" type="number" name="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <h6>Home isurance</h6>
            <input class="form-control" type="number" name="">
          </div>
          <div class="form-group">
            <h6>HOA dues</h6>
            <input class="form-control" type="number" name="">
          </div>
          <div class="form-group">
            <a class="option_view hide" id="simple_option" href="#">Simple</a>
          </div>
        </div>
   		</div>
   		<div class="col-lg-6">
   			
   		</div>
   	</div>
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
             <div class="col-md-4 mb-5">
               
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
                     Home Price
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     Enter the purchase price of the home you want to buy. You can also enter the amount that you think you will offer.
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>
             <div class="col-md-4">
               
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
                     Down Payment
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     Most home loans require a down payment of at least 3%. A higher down payment will lower your monthly payment.
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

             <div class="col-md-4">
               
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
                     Loan Program
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     Your loan program can affect your interest rate and monthly payments. Choose from 30-year fixed, 15-year fixed, and 5/1 ARM in the calculator.
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

             <div class="col-md-4">
               
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
                     Interest Rate
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     This is pre-filled with the current average mortgage rate. Your actual rate will vary based on factors like credit score and down payment.
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

             <div class="col-md-4">
               
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
                     Property Tax
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     The mortgage payment calculator includes estimated property taxes based on the home's value. You can edit this in the advanced options.
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

             <div class="col-md-4">
               
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
                     Home Insurance
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     Home insurance or homeowners insurance is typically required by lenders. You can edit this number in the mortgage calculator advanced options.
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

           </div> <!-- / .row -->

         </div>
       </div> <!-- / .row -->
     </div> <!-- / .container -->
   </section>

   <script type="text/javascript">

     function init(){

      function showAdvanceMenu(){
        advancedOption.classList.toggle('hide')
        simpleOption.classList.toggle('hide')
        menuAdvance.classList.toggle('hide')
      }

      const advancedOption = document.getElementById('advanced_option')
            simpleOption   = document.getElementById('simple_option')
            menuAdvance    = document.getElementById('advance')

      advancedOption.addEventListener('click', e => {
        e.preventDefault()
        showAdvanceMenu()
      })

      simpleOption.addEventListener('click', e => {
        e.preventDefault()
        showAdvanceMenu()
      })
     }  

     document.addEventListener('DOMContentLoaded', () => {
      init()
     })
   </script>
@endsection