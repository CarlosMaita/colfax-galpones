@extends('layouts.app')

@section('title')
Mortgage calculator - Medley Business Park
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

  .hideSection {
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
            @lang('Mortgage Calculator')
           </h5>

         </div>
         <div class="col-auto">

           <!-- Breadcrumb -->
           <span class="breadcrumb-item">
             <a href="index.html">@lang('Home')</a>
           </span>
           <span class="breadcrumb-item active">
              @lang('Mortgage Calculator')
           </span>
         
         </div>
       </div> <!-- / .row -->
     </div> <!-- / .container -->
   </nav>
   
   @endsection

   @section('content')       
   <!-- CALCUADORA
   ================================================== -->
   <section class="container section p-5">
   	<div class="row">
      <div class="col-md-11">
        <h1>@lang('Mortgage Calculator')</h1>
        <p>
          @lang('Use our home loan calculator')
        </p>
      </div>
   		<div class="col-md-4">
   			<div class="form-group">
   				<h6>@lang('Home price (USD)')</h6>
   				<input class="form-control input-number" id="home_price" type="number" name="" value=100000>
   			</div>
   			<div class="form-group">
   				<h6>@lang('Down Payment (USD)')</h6>
   				<input class="form-control input-number" id="down_payment" type="number" name="" value=20000>
   				<input class="form-control input-number" id="down_payment_percentage" type="number" name="" step=0.1 value=50 min=0 max=100>
   			</div>
   			<div class="form-group">
   				<h6>@lang('Loan program (Years)')</h6>
   				<select class="form-control" id="loan_program">
            <option value=30 >@lang('30-year fixed')</option>
            <option value=15 >@lang('15-year fixed')</option>
   				</select>
   			</div>
   			<div class="form-group">
   				<h6>@lang('Interes rate (%)')</h6>
   				<input class="form-control input-number" id="Interes_rate" type="number" name="" value='3.5' step="0.01">
   			</div>
        <div class="hideSection" id="calculatorAdvanceSection" >
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Include PMI 
                <i class="fas fa-question-circle"></i>
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Include Taxes/insurance 
              </label>
            </div>
          </div>

          <div class="form-group">
            <h6>
              property tax
              <i class="fas fa-question-circle"></i>
            </h6>
            <div class="d-flex">
              <input type="number" class="form-control col-8">
              <input type="number" class="form-control col-4">
            </div>
          </div>

          <div class="form-group">
            <h6>
              Home insurance
              <i class="fas fa-question-circle"></i>
            </h6>
            <input type="text" class="form-control">
          </div>

          <div class="form-group">
            <h6>
              HOA dues
              <i title="@lang('Hoa dues')" class="fas fa-question-circle"></i>
            </h6>
            <input type="text" class="form-control">
          </div>
        </div>
        <div>
          <a href="#" id="openCloseAdvanceOptions">Advance</a> 
        </div>
   		</div>
   		<div class="col-md-7">
   			<div class="d-flex justify-content-between align-items-center">
          <ul class=" p-0 m-0 d-flex justify-content-around align-items-center">
            <li class="mr-4">
              <p class="m-0 p-0">
                {{-- <a href="#" class=" chart_button" data-chart="donutchart">@lang('Breakdown')</a> --}}
              </p>
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
              @lang('share')
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
                @lang('Email')
              </a>
            </div>
          </div>  
        </div>
        <hr>
        <div>
          <canvas id="myChart-donut" class="chart"></canvas>
          <canvas id="myChart-line" class="chart" style="display: none;"></canvas>
          <h5 class="text-center p-4 h2" id="">@lang('Your payment is') <span id="your_payment"></span></h5>
        </div>
   		</div>
   	</div>
   </section>

   <!-- LINKS
   ================================================== -->
   <section class="container section p-4">
     <div class="">
       <div class="row">
         <div class="col-md-2">
           
           <!-- Title -->
           <h6 class="title">
             @lang('Additional resources')
           </h6>

         </div>
         <div class="col-md-10">
           
           <!-- Heading -->
           <h3 class="mb-4">
             @lang('Still confused?')
           </h3>

           <!-- Subheading -->
           <p class="text-muted mb-5">
            @lang('Our mortgage payments calculator')
           </p>

           <!-- Items -->
           <div class="row">
             <div class="col-md-4 mb-3">
               
               <!-- Card -->
               <a href="#" class="card mb-3 mb-md-0">
                 
                 <!-- Body -->
                 <div class="card-body">

              
                   
                   <!-- Title -->
                   <h5 class="card-title">
                     @lang('Home Price')
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     @lang('Enter the purchase price')
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>
             <div class="col-md-4 mb-3">
               
               <!-- Card -->
               <a href="#" class="card">
                 
                 <!-- Body -->
                 <div class="card-body">

               
                   
                   <!-- Title -->
                   <h5 class="card-title">
                     @lang('Down Payment')
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                    @lang('Most home loans require')
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

             <div class="col-md-4 mb-3">
               
               <!-- Card -->
               <a href="#" class="card">
                 
                 <!-- Body -->
                 <div class="card-body">

                   
                   <!-- Title -->
                   <h5 class="card-title">
                     @lang('Loan Program')
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     @lang('Your loan program can affect')
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

             <div class="col-md-4 mb-3">
               
               <!-- Card -->
               <a href="#" class="card">
                 
                 <!-- Body -->
                 <div class="card-body">

          
                   <!-- Title -->
                   <h5 class="card-title">
                     @lang('Interest Rate')
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     @lang('This is pre-filled with the current')
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

             <div class="col-md-4 mb-3">
               
               <!-- Card -->
               <a href="#" class="card">
                 
                 <!-- Body -->
                 <div class="card-body">

                   <!-- Title -->
                   <h5 class="card-title">
                     @lang('Property Tax')
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     @lang('The mortgage payment calculator includes')
                   </p>
                 
                 </div>

               </a> <!-- / .card -->

             </div>

             <div class="col-md-4 mb-3">
               
               <!-- Card -->
               <a href="#" class="card">
                 
                 <!-- Body -->
                 <div class="card-body">

             
                   <!-- Title -->
                   <h5 class="card-title">
                     @lang('Home Insurance')
                   </h5>

                   <!-- Text -->
                   <p class="card-text text-muted">
                     @lang('Home insurance or homeowners')
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
                data: value ? [...value] : [1],
                backgroundColor: ['#ab967d'],
                borderWidth:['5'],
                weight: ['1'],
              }],
              
              labels: [
                  'Principal & Interest',
                  // 'Tax',
                  // 'Blue'
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
              pago_total = pago_total >= 0 ? pago_total : 0 ; 

              your_payment.textContent = `
                  $ ${pago_total}
              `
              grafico_value = [pago_total]
              donutChart(grafico_value)
            
          
          } else {
            console.log('vacio')
            return false;
          }
      }

     function init(){
      function showAdvanceMenu(){
        const advanceMenu = document.getElementById('calculatorAdvanceSection');
        let text= 'advanced';
        
        advanceMenu.classList.toggle('hideSection');

        if(!advanceMenu.classList.contains('hideSection')) {
          text= 'simple';
          console.log(text)
        }

        
        advanceButton.textContent = text;
      }

      const chartButtons   = document.querySelectorAll('.chart_button')
            inputNumbers   = document.querySelectorAll('.input-number')
            loanP          = document.getElementById('loan_program')
      
      const advanceButton = document.getElementById('openCloseAdvanceOptions');

      advanceButton.addEventListener('click', e => {
        e.preventDefault()
        showAdvanceMenu()
      })
      
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
      calcularPrecio()
     })
   </script>
@endsection