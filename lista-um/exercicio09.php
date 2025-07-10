<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $num1 = '9';
    $num2 = '6';

    function somaNumeros($num1, $num2){
        $soma = $num1 + $num2;
        return $soma;
    }

    $resultado = somaNumeros($num1, $num2);
    echo "A soma de $num1 e $num2 é: $resultado";
?>
    
</body>
</html>