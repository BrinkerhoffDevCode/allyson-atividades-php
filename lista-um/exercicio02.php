<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $numero = '1';

    function calcularTabuadaNumero($numero){
        $resultado = '';
        for ($i = 1; $i <= 10; $i++) {
            $resultado .= "$numero x $i = " .($numero *$i) ."<br>";
            return $resultado;
        }
        
    }


?>