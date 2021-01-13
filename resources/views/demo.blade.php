<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script>
        function cuotas(interes_anual, anos, house_value, down_payment = 0){
            console.log(d)
            //vars
            let r = interes_anual/(100*12);
            let P =  house_value - down_payment;
            let N =  anos*12;
            //retorna la cuota mensual
            let cuota = r*P/( 1 - ( (1+r)**(-N)));
            cuota = cuota.toFixed(2);
            return cuota;
        }
    </script>
</head>
<body>

    <h1>Valor de cuota para, valor de casa 100.000 USD, 6% anual, primer pago por 0USD , 30 anos el prestamo</h1>
    <button onclick="res()">Ver resultado</button>
    <script>
       
        function res(){
            
            alert( cuotas(6, 30, 100000,0));
        }
    </script>


</body>
</html>