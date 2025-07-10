<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dia = '10';
    $mes = '07';
    $ano = '2025';
    
    function validarData($dia, $mes, $ano){
        if (checkdate($mes, $dia, $ano)){
            return "A data $dia/$mes/$ano é valida";
        } else {
            return "A data $dia/$mes/$ano é invalida";
        }
        
    }
    ?>
    
</body>
</html>