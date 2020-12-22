@extends('layouts.app')

@section('title')
Reporte Calculadora - galpones     
@endsection


  
{{-- location  --}}
@section('breadcrumb')

<style type="text/css">
	th {
		text-transform: uppercase;
	}

	li {
		list-style: none;
	}

	.list-item:not(:last-of-type) {
		margin-bottom: 1rem;
	}

	a, a:hover{
		text-decoration: none;
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
   
 <!-- REPORTE
   ================================================== -->
   <section class="container section">
   		<div class="row">
   			<div class="col-md-9">
   				<div class="d-flex justify-content-between align-items-center">
   					<h1>Estimated payment</h1>
   					<span>$1,390 /mo</span>
   				</div>
   				<table class="table mb-3">
   					<tbody>
   						<tr>
   							<th>Loan amount</th>
   							<td class="text-right">$240,000</td>
   						</tr>
   						<tr>
   							<th>Down payment</th>
   							<td class="text-right">$60,000</td>
   						</tr>
   						<tr>
   							<th>Interest rate</th>
   							<td class="text-right">2.769%</td>
   						</tr>
   						<tr>
   							<th>Loan term</th>
   							<td class="text-right">30 years</td>
   						</tr>
   						<tr>
   							<th>Taxes & insurance included?</th>
   							<td class="text-right">years</td>
   						</tr>
   						<tr>
   							<th>Property tax</th>
   							<td class="text-right">1.2 %/yr</td>
   						</tr>
   						<tr>
   							<th>Homeowner's insurance</th>
   							<td class="text-right">$1,260/yr</td>
   						</tr>
   						<tr>
   							<th>Mortgage insurance</th>
   							<td class="text-right">$0/mo</td>
   						</tr>
   						<tr>
   							<th>HOA dues</th>
   							<td class="text-right">$0/mo</td>
   						</tr>

   					</tbody>
   				</table>
   				<div class="mb-5">
   					<h2>Payment Breakdown</h2>

   				</div>
   				<div>
   					<h2>Amortization</h2>

   				</div>
   			</div>
   			<aside class="col-md-3">
   				<div class="mb-5">
   					<h2>More Calculators</h2>
   					<ul class="m-0 pl-3">
   						<li class="list-item">
   							<a href="#">Affordability Calculator</a>
   						</li>
   						<li class="list-item">
   							<a href="#">Amortization Calculator</a>
   						</li>
   						<li class="list-item">
   							<a href="#">Debt-to-Income Calculator</a>
   						</li>
   						<li class="list-item">
   							<a href="#">Mortgage Calculator</a>
   						</li>
   						<li class="list-item">
   							<a href="#">Refinance Calculator</a>
   						</li>
   					</ul>
   				</div>
   				<div>
   					<h2>More Resources</h2>
   					<ul class="m-0 pl-3">
   						<li class="list-item">
   							<a href="#">Mortgage Learning Center</a>
   						</li>
   						<li class="list-item">
   							<a href="#">Why is 20% Down Ideal?</a>
   						</li>
   						<li class="list-item">
   							<a href="#">When to Lock in a Mortgage Rate</a>
   						</li>
   					</ul>
   				</div>
   			</aside>
   		</div>
   </section>
@endsection