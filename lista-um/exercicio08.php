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
        <button type="submit" name="soma_divisores">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['soma_divisores'])) { {
                $n = $_POST['numero'];
                echo ($n1 + $n2 + $n3) / 3;
                }

                echo "a média é: " . media(10, 20, 30) . "<br>";
            }
        }
    ?>

</body>

</html>