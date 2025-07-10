<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
   $altura = '1.75';
   $peso = '70';

    function calcularIMC($peso, $altura) {
         $imc = $peso / ($altura * $altura);
         return round($imc, 2);
    }

    ?>
</body>
</html>