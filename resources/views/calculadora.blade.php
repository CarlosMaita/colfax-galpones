@extends('layouts.app')

@section('title')
    Mortgage calculator - Medley Business Park
@endsection
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/chartjs/Chart.min.css') }}">


{{-- location --}}
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

        i {
            cursor: pointer;
        }

        li {
            list-style: none;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
        }

        .share-icon {
            position: relative;
            top: -1px;
            font-size: 1.6rem;
            margin-right: 1rem;
        }

        .fa-facebook-square {
            color: #3B5998;
        }

        .fa-twitter-square {
            color: #00ACEE;
        }

        .fa-linkedin {
            color: #0E76A8;
        }

        .chart {
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
                    <input class="form-control input-down-payment down_payment" id="home_price" type="number" name=""
                        value=225000>
                </div>
                <div class="form-group">
                    <div class="d-flex">
                        <h6 class="col-8 p-0">@lang('Down Payment (USD)')</h6>
                        <h6 class="col-4 p-0 text-right">%</h6>
                    </div>
                    <div class="d-flex">
                        <input class="form-control  input-down-payment col-8" id="down_payment" type="number" name=""
                            value=45000>
                        <input class="form-control  input-down-payment col-4" id="down_payment_percentage" type="number"
                            name="" step=1 value=20 min=0 max=100>
                    </div>
                </div>
                <div class="form-group">
                    <h6>@lang('Loan program (Years)')</h6>
                    <select class="form-control" id="loan_program">
                        <option value=30>@lang('30-year fixed')</option>
                        <option value=15>@lang('15-year fixed')</option>
                    </select>
                </div>
                <div class="form-group">
                    <h6>@lang('Interes rate (%)')</h6>
                    <input class="form-control input-number" id="Interes_rate" type="number" name="" value='5' step="0.01">
                </div>
                <div class="hideSection" id="calculatorAdvanceSection">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input checkInclude" type="checkbox" value="" id="pmi_include">
                            <label class="form-check-label" for="pmi_include">
                                @lang('Include PMI')
                                <i class="fas fa-question-circle"></i>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input checkInclude" type="checkbox" value="" id="tax_include">
                            <label class="form-check-label" for="tax_include">
                                @lang('Include Taxes/insurance')
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="d-flex">
                            <h6 class="col-8 p-0 ">
                                @lang('Property tax(USD/Year)')
                                {{-- <i class="fas fa-question-circle"></i> --}}
                            </h6>
                            <h6 class="col-4 p-0 text-right">%</h6>
                        </div>
                        <div class="d-flex">
                            <input type="number" id="propertyTax" class="form-control col-8 calculator_input" value=1800 disabled>
                            <input type="number" id="propertyTaxPercentage" class="form-control col-4 calculator_input"
                                value=1.8 step=0.1 min=0 max=100>
                        </div>
                    </div>

                    <div class="form-group">
                        <h6>
                            @lang('Home Insurance(USD/Year)')

                            {{-- <i class="fas fa-question-circle"></i> --}}
                        </h6>
                        <input type="number" id="homeInsurance" class="form-control calculator_input" value=420 step=0.1
                            min=0>
                    </div>

                    <div class="form-group">
                        <h6>
                            @lang('HOA dues(USD/month)')

                            {{-- <i title="@lang('Hoa dues')" class="fas fa-question-circle"></i> --}}
                        </h6>
                        <input type="number" id="hoa_dues" class="form-control calculator_input" value=0 step=0.1 min=0>
                    </div>
                </div>
                <div>
                    <a href="#" id="openCloseAdvanceOptions">@lang('Advance')</a>
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
                    {{-- Boton de compartir --}}
                    {{-- <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    </div> --}}
                </div>
                <hr>
                <div>
                    <canvas id="myChart-donut" class="chart"></canvas>
                    {{-- <canvas id="myChart-line" class="chart" ></canvas> --}}
                    <h5 class="text-center p-4 h2" id="">@lang('Your payment is') <span id="your_payment"></span></h5>
                </div>
            </div>
        </div>
    </section>

    <!-- LINKS  ================================================== -->
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

                        <div class="col-md-4 mb-3">

                            <!-- Card -->
                            <a href="#" class="card">

                                <!-- Body -->
                                <div class="card-body">


                                    <!-- Title -->
                                    <h5 class="card-title">
                                        @lang('Homeowner association(HOA)')
                                    </h5>

                                    <!-- Text -->
                                    <p class="card-text text-muted">
                                        @lang('Hoa dues')
                                    </p>

                                </div>

                            </a> <!-- / .card -->

                        </div>

                    </div> <!-- / .row -->

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <script type="text/javascript" src="{{ asset('vendor/chartjs/Chart.min.js') }}"></script>
    <script type="text/javascript">
        const donut = document.getElementById('myChart-donut');
        const data = {
            labels: [],
            datasets: [{
                label: 'Property Payment',
                data: [],
                backgroundColor: ['#AA947D', '#4D4E4E', '#343A40', '#8A7365', '#C2B2A3'],
                hoverOffset: 20
            }]
        };
        const config = {
            type: 'doughnut',
            data: data,
        };
        const myDoughnutChart = new Chart(donut, config);




        function updateData(chart, labels, data) {
            console.log(labels)
            chart.data.labels = labels;
            chart.data.datasets.forEach((dataset) => {
                dataset.data = data;
            });
            chart.update();
        }

        function removeData(chart) {
            chart.data.labels = []
            chart.data.datasets = []
            chart.update();
        }


        function showOrHideChart(type) {
            let line = document.getElementById('myChart-line');
            let donut = document.getElementById('myChart-donut');

            if (type === 'linechart') {

                line.style.display = 'block'
                donut.style.display = 'none'

            } else if (type === 'donutchart') {

                line.style.display = 'none'
                donut.style.display = 'block'

            }
        }


        //calcular payment
        function cuotas(interes_anual, anos, house_value, down_payment) {

            //vars
            let r = interes_anual / (100 * 12);
            let P = house_value - down_payment;
            let N = anos * 12;
            //retorna la cuota mensual
            let cuota = r * P / (1 - ((1 + r) ** (-N)));
            return cuota.toFixed(0);
        }

        function pagoTotal(pagoAndInterests, hoa_dues, propertyTax, homeInsurancePrice, pmi) {
            return (parseFloat(pagoAndInterests) + parseFloat(hoa_dues) + parseFloat(homeInsurancePrice) + parseFloat(
                propertyTax) + parseFloat(pmi)).toFixed(0);
        }

        function calcularPrecio() {

            const home_price = document.getElementById('home_price'),
                down_payment = document.getElementById('down_payment'),
                down_payment_percentage = document.getElementById('down_payment_percentage'),
                loan_program = document.getElementById('loan_program'),
                Interes_rate = document.getElementById('Interes_rate'),
                your_payment = document.getElementById('your_payment'),
                hoa_dues = document.getElementById('hoa_dues');
            const pmiInclude = document.getElementById('pmi_include');
            const taxInclude = document.getElementById('tax_include');
            const homeInsurance = document.getElementById('homeInsurance');
            //Elementos de la Grafica
            let labels = [];
            let grafico_values = [];

            if (home_price.value && Interes_rate.value && loan_program.value) {

                let home_price_number = parseFloat(home_price.value)
                down_payment_number = parseFloat(down_payment.value) >= 0 ? parseFloat(down_payment.value) : 0
                down_payment_percentage_number = parseFloat(down_payment_percentage.value) >= 0 ? parseFloat(
                    down_payment_percentage.value) : 0
                loan_program_number = parseFloat(loan_program.value)
                Interes_rate_number = parseFloat(Interes_rate.value)
                hoa_dues_number = parseFloat(hoa_dues.value) >= 0 ? parseFloat(hoa_dues.value) : 0

                let homeInsurancePrice = 0;

                //pago principal e intereses
                principalAndInterets = cuotas(Interes_rate_number, loan_program_number, home_price_number,
                    down_payment_number);
                labels.push('P & I');
                grafico_values.push(principalAndInterets);

                //impuestos y seguro 
                if (taxInclude) {
                    if (taxInclude.checked === true) {
                        propertyTax = calcularTax();
                        homeInsurancePrice = (parseFloat(homeInsurance.value) / 12).toFixed(0);
                        labels.push('Taxes');
                        grafico_values.push(propertyTax);
                        labels.push('Insurance');
                        grafico_values.push(homeInsurancePrice);
                    } else {
                        propertyTax = 0;
                        homeInsurancePrice = 0;
                    }
                }


                // pmi - se verifica el Check
                pmi = 0;
                if (pmiInclude) {
                    if (pmiInclude.checked === true) {
                      if (down_payment_percentage_number >= 15 && down_payment_percentage_number < 20){
                        pmi = ((0.385*home_price_number/100)/12).toFixed(0);
                      }else if(down_payment_percentage_number >= 10 && down_payment_percentage_number < 15){
                        pmi = ((0.542*home_price_number/100)/12).toFixed(0);
                    }else if(down_payment_percentage_number >= 5 && down_payment_percentage_number < 10){
                        pmi = ((0.725*home_price_number/100)/12).toFixed(0);
                    }else if(down_payment_percentage_number >= 0 && down_payment_percentage_number < 5){
                        pmi = ((0.975*home_price_number/100)/12).toFixed(0);
                    }
                      else{
                        pmi = 0;
                      }
                      
                      if (pmi > 0) {
                        labels.push('PMI');
                        grafico_values.push(pmi);
                      } 
                    }
                }

                // grafico_values = [pago_total, homeInsurancePrice, propertyTax, PMI, hoa_dues_number]

                // labels = [
                //     'Principal & Interest',
                //     'Home Insurance',
                //     'property Tax',
                //     'PMI',
                //     'HOA',
                // ]

                if (hoa_dues_number > 0) {
                    labels.push('HOA');
                    grafico_values.push(hoa_dues_number);
                }

                // pago total
                pago_total = pagoTotal(principalAndInterets, hoa_dues_number, propertyTax, homeInsurancePrice, pmi)
                pago_total = pago_total >= 0 ? pago_total : 0;

                your_payment.textContent = `
                  $ ${pago_total}
              `;


                // añadir la data para actualizar curva 
                updateData(myDoughnutChart, labels, grafico_values);

                return true;

            } else {
                console.log('vacio')
                return false
            }
        }

        function calcularPMI(home_price_number, down_payment_percentage_number) {

        }

        function calcularTax() {
            const home_price = document.getElementById('home_price');
            const propertyTax = document.getElementById('propertyTax');
            const propertyTaxPercentage = document.getElementById('propertyTaxPercentage');
            const valueTax = ((parseFloat(home_price.value) * parseFloat(propertyTaxPercentage.value)/100)) / 12;
            propertyTax.value = (valueTax*12).toFixed(0);
            return valueTax.toFixed(0);
        }

        function cargarPorcentaje() {
            const homePrice = document.getElementById('home_price')
            const downPayment = document.getElementById('down_payment')
            const downPaymentPercentage = document.getElementById('down_payment_percentage');

            let porcentaje = (downPayment.value * 100) / homePrice.value
            downPaymentPercentage.value = porcentaje;

        }

        function init() {

            function showAdvanceMenu() {
                const advanceMenu = document.getElementById('calculatorAdvanceSection');
                let text = 'Advanced';

                advanceMenu.classList.toggle('hideSection');

                if (!advanceMenu.classList.contains('hideSection')) {
                    text = 'Simple';
                }
                advanceButton.textContent = text;
            }

            const chartButtons = document.querySelectorAll('.chart_button')
            inputNumbers = document.querySelectorAll('.input-number')
            loanP = document.getElementById('loan_program')

            const advanceButton = document.getElementById('openCloseAdvanceOptions');

            const downPayment = document.querySelectorAll('.input-down-payment');
            const downPaymentInput = document.getElementById('down_payment'),
                downPaymentPorcentageInput = document.getElementById('down_payment_percentage'),
                homePriceInput = document.getElementById('home_price');

            const checkIncludes = document.querySelectorAll('.checkInclude');
            const calculatorInputs = document.querySelectorAll('.calculator_input');

            advanceButton.addEventListener('click', e => {
                e.preventDefault()
                showAdvanceMenu()
            })

            if (inputNumbers) {
                inputNumbers.forEach(input => {
                    input.addEventListener('keyup', (e) => {
                        calcularPrecio()
                    })
                })
            }

            loanP.addEventListener('change', () => {
                calcularPrecio()
            })

            if (chartButtons) {
                chartButtons.forEach(button => {
                    button.addEventListener('click', (e) => {
                        e.preventDefault()
                        showOrHideChart(e.target.dataset.chart)
                    })
                })
            }

            if (checkIncludes) {
                checkIncludes.forEach(check => {
                    check.addEventListener('change', (e) => {
                        calcularPrecio();
                    })
                })
            }

            if (calculatorInputs) {
                calculatorInputs.forEach(input => {
                    input.addEventListener('blur', (e) => {
                        calcularPrecio();
                    })
                })
            }

            if (downPayment) {
                downPayment.forEach(input => {

                    input.addEventListener('blur', (e) => {
                        console.log(e)
                        if (e.target === downPaymentInput) {
                            //cambiar porcentaje
                            let dp = e.target.value
                            let hp = homePriceInput.value
                            downPaymentPorcentageInput.value = dp * 100 / hp;

                        } else if ((e.target === downPaymentPorcentageInput)) {
                            //cambiar valor
                            let hp = homePriceInput.value
                            let pdp = e.target.value
                            downPaymentInput.value = hp * pdp / 100;
                        } else {
                            //cambiar valor
                            let hp = homePriceInput.value
                            let pdp = downPaymentPorcentageInput.value;
                            downPaymentInput.value = hp * pdp / 100;
                        }

                        calcularPrecio()
                    })
                })
            }

        }

        document.addEventListener('DOMContentLoaded', () => {
            init()
            calcularPrecio()
            cargarPorcentaje()
        })
    </script>
@endsection
