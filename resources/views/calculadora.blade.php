@extends('layouts.app')

@section('title')
Calculadora - galpones     
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('vendor/chartjs/Chart.min.css')}}">

  
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

  i{
    cursor: pointer;
  }

  li {
    list-style: none;
  }

  .dropdown-item {
    display: flex;
    align-items: center;
  }

  .share-icon{
    position: relative;
    top: -1px;
    font-size: 1.6rem;
    margin-right: 1rem;
  }

  .fa-facebook-square{
    color: #3B5998;
  }

  .fa-twitter-square {
    color: #00ACEE;
  }

  .fa-linkedin {
    color: #0E76A8;
  }

  .chart{
    width: 60%;
    height: 100%;
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
   				<input class="form-control input-number" id="home_price" type="number" name="">
   			</div>
   			<div class="form-group">
   				<h6>Down Payment</h6>
   				<input class="form-control input-number" id="down_payment" type="number" name="">
   			</div>
   			<div class="form-group">
   				<h6>Loan program</h6>
   				<select class="form-control" id="loan_program">
            <option value=30>30-year fixed</option>
            <option value=15>15-year fixed</option>
   				</select>
   			</div>
   			<div class="form-group">
   				<h6>Interes rate</h6>
   				<input class="form-control input-number" id="Interes_rate" type="number" name="">
   			</div>
        <!-- <div class="form-group">
          <a class="option_view" id="advanced_option" href="#">Advanced</a>
        </div>
        <div class="option_advance hide" id="advance">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="">
            <label class="form-check-label">
              Include PMI 
              <i class="fas fa-question-circle" title="Private Mortgage Insurance
Mortgage insurance is required primarily for borrowers with a down payment of less than 20% of the home's purchase price. It protects lenders against some or most of the losses that can occur when a borrower defaults on a mortgage loan."></i>
            </label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="">
            <label class="form-check-label">Include taxes/insurange</label>
          </div>
          <div class="form-group">
            <h6>
              Property tax 
              <i class="fas fa-question-circle" title="Property Tax
The mortgage payment calculator includes estimated property taxes. The value represents an annual tax on homeowners' property and the tax amount is based on the home's value. To convert an annual property tax in dollars to a percentage, divide the property tax by your home value and then multiply by 100."></i>
            </h6>
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
            <h6>
              Home isurance 
              <i class="fas fa-question-circle" title="Homeowners Insurance
Commonly known as hazard insurance, most lenders require insurance to provide damage protection for your home and personal property from a variety of events, including fire, lightning, burglary, vandalism, storms, explosions, and more. All homeowner's insurance policies contain personal liability coverage, which protects against lawsuits involving injuries that occur on and off your property."></i>
            </h6>
            <input class="form-control" type="number" name="">
          </div>
          <div class="form-group">
            <h6>
              HOA dues 
              <i class="fas fa-question-circle" title="Homeowners Association Dues
Typically, owners of condos or townhomes are required to pay homeowners association dues (known as HOA fees), to cover common amenities or services within the property such as garbage collection, landscaping, snow removal, pool maintenance, and hazard insurance."></i>
            </h6>
            <input class="form-control" type="number" name="">
          </div>
          <div class="form-group">
            <a class="option_view hide" id="simple_option" href="#">Simple</a>
          </div> -->
        <!-- </div> -->
   		</div>
   		<div class="col-md-7">
   			<div class="d-flex justify-content-between align-items-center">
          <ul class=" p-0 m-0 d-flex justify-content-around align-items-center">
            <li class="mr-4">
              <a href="#" class=" chart_button" data-chart="donutchart">Breakdonw</a>
            </li>
            <!-- <li class="mr-4">
              <a href="#" class=" chart_button" data-chart="linechart" >Schedule</a>
            </li>
            <li>
              <a href="#">Full Report</a>
            </li> -->
          </ul>
          <div class="dropdown">
            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              share
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">
                <i class="fab share-icon fa-facebook-square"></i>
                Facebook
              </a>
              <a class="dropdown-item" href="#">
                <i class="fab share-icon fa-twitter-square"></i>
                Twitter
              </a>
              <a class="dropdown-item" href="#">
                <i class="fab share-icon fa-linkedin"></i>
                Linkedin
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas share-icon fa-envelope-square"></i>
                Email
              </a>
            </div>
          </div>  
        </div>
        <hr>
        <div>
          <canvas id="myChart-donut" class="chart"></canvas>
          <canvas id="myChart-line" class="chart" style="display: none;"></canvas>
          <h5 id="your_payment"></h5>
        </div>
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

   <script type="text/javascript" src="{{asset('vendor/chartjs/Chart.min.js')}}"></script>
   <script type="text/javascript">

      function donutChart(value){

        let donut = document.getElementById('myChart-donut');

        let myDoughnutChart = new Chart(donut, {
            type: 'doughnut',
            data: {
              datasets: [{
                data: value ? [...value] : [10, 6 , 8],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
              }],
              labels: [
                  'P&I',
                  'Yellow',
                  'Blue'
              ],
            },
        });
      }

      function lineChart(){

        let line = document.getElementById('myChart-line');

        let linechart = new Chart(line, {
            type: 'line',
            data: {
              datasets: [{
                data: [0, 59, 75, 20, 25],
                label: 'speed',
                borderColor: 'orange',
                fill: false,
              }],
              labels: [
                  '0s',
                  '50s',
                  '70s',
                  '30s',
                  '60s'
              ],
            },
        });
      }

      function showOrHideChart(type){
        let line = document.getElementById('myChart-line');
        let donut = document.getElementById('myChart-donut');
        
        if(type === 'linechart'){

          line.style.display = 'block'
          donut.style.display = 'none'

        }else if(type === 'donutchart'){

          line.style.display = 'none'
          donut.style.display = 'block'
          
        }
      }

     function loadCharts(){
        donutChart()
        lineChart()
      }

      //calcular payment
      function cuotas(interes_anual, anos, house_value, down_payment){
          //vars
          let r = interes_anual/(100*12);
          let P =  house_value - down_payment;
          let N =  anos*12;
          //retorna la cuota mensual
          let cuota = r*P/( 1 - ( (1+r)**(-N)));
          cuota = cuota.toFixed(2);
          return cuota;
      }

      function calcularPrecio() {
          
          const home_price    = document.getElementById('home_price'),
                down_payment  = document.getElementById('down_payment'),
                loan_program  = document.getElementById('loan_program'),
                Interes_rate  = document.getElementById('Interes_rate'),
                your_payment  = document.getElementById('your_payment')

          if(home_price.value  && Interes_rate.value && loan_program.value){

            let home_price_number  =       parseFloat(home_price.value)
              down_payment_number  =       parseFloat(down_payment.value) >= 0 ? parseFloat(down_payment.value) : 0
              loan_program_number  =       parseFloat(loan_program.value)
              Interes_rate_number  =       parseFloat(Interes_rate.value)
              
              pago_total = cuotas(Interes_rate_number, loan_program_number, home_price_number, down_payment_number);

              your_payment.textContent = `
                Your payment is : $ ${pago_total}
              `
              grafico_value = [pago_total]
              donutChart(grafico_value)
            
          
          } else {
            console.log('vacio')
            return false;
          }
      }

     function init(){

      // function showAdvanceMenu(){
      //   advancedOption.classList.toggle('hide')
      //   simpleOption.classList.toggle('hide')
      //   menuAdvance.classList.toggle('hide')
      // }

      const chartButtons   = document.querySelectorAll('.chart_button')
            inputNumbers   = document.querySelectorAll('.input-number')
            loanP          = document.getElementById('loan_program')

      // advancedOption.addEventListener('click', e => {
      //   e.preventDefault()
      //   showAdvanceMenu()
      // })

      // simpleOption.addEventListener('click', e => {
      //   e.preventDefault()
      //   showAdvanceMenu()
      // })
      
      if(inputNumbers) {
        inputNumbers.forEach(input => {
          input.addEventListener('keyup', (e) => {
            calcularPrecio()
          })
        })
      }

      loanP.addEventListener('change', () => {
        calcularPrecio()
      })
      
      chartButtons.forEach(button => {
        button.addEventListener('click', (e) => {
          e.preventDefault()
          showOrHideChart(e.target.dataset.chart)
        })
      })
     }  

     document.addEventListener('DOMContentLoaded', () => {
      init()
      loadCharts()
     })
   </script>
@endsection