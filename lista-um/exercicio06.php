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
        <button type="submit" name="divisores_numeros">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['divisores_numeros'])) { {
                $numero = $_POST['numero'];
                for ($i = '1'; $i <= $numero / '2'; $i++) {
                    if ($numero % $i === '0') {
                        $resultado .= "$i é divisor de $numero <br>";
                    }
                }

                echo "$resultado";
            }
        }
    }



    ?>

</body>

</html>