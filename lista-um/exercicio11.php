<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function verificarSinal($numero) {
    if ($numero > '0') {
        echo 'Positivo';
    } else if ($numero < '0') {
        echo 'Negativo';
    } else {
        echo 'Neutro';
    }
}
    ?>
    
</body>
</html>