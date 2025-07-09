<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function verificarPalindromo($palavra) {
    $palavraInvertida = strrev($palavra);
    return $palavra === $palavraInvertida;
}

    echo (verificarPalindromo("arara")); // true
    echo (verificarPalindromo("carro")); // false
?>
    ?>
</body>
</html>