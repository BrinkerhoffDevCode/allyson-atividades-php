<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function inverterTexto() {
    $texto = prompt('digite uma palavra');
    return $texto.split('').reverse().join('');
}
    ?>
    
</body>
</html>