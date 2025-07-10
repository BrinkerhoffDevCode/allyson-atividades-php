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
    $numero = '10';

    function informaNumero($numero){
        if($numero > 0){
            return "O numero é positivo";
        } elseif($numero < 0){
            return "O numero é negativo";
        } else {
            return "O numero é zero";
        }
}

?>