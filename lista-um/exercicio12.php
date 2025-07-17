<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="conversor">Verificar</button>
    </form>

    <?php

     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['conversor'])) {
            $celsius = $_POST['numero'];
            $fahrenheit = (($celsius * 9) / 5) + 32;
        };
        echo "A temperatura em Fahrenheit é: $fahrenheit <br>";

    }
    
    ?>
</body>
</html>