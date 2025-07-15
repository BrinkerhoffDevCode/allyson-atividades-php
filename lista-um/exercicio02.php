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
        <button type="submit" name="calcular_tabuada">Verificar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_tabuada'])) {
            $numero = $_POST['numero'];
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<br>";
                echo "$numero x $i = " . $resultado . "<br>";;
            }
        }
    }
    ?>

</body>

</html>