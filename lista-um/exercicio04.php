<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$numero = '5';

function calcularFatorial($numero){
    if ($numero < 0){
        return 'Fatorial não é definido para números negativos.';
    } else if($numero === '0'){
        return 'O fatorial de 0 é 1.';
    } else {
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return 'O fatorial de ' . $numero . ' é ' . $fatorial . '.';
    }
}

?>
    
</body>
</html>

