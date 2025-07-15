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
        <button type="submit" name="dois_numeros_amigo">Verificar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['dois_numeros_amigo'])) { {
                $num1= $_POST['numero'];
                for ($i = 1; $i < $num1; $i++) {
                    if ($num1 % $i === 0) {
                        $num1 += $i;
                    }
                }
                $num2= $_POST['numero'];
                for ($i = 1; $i < $num2; $i++) {
                    if ($num2 % $i === 0) {
                        $num2 += $i;
                    }
                }

                echo "$num1";
                echo "$num2";
            }
        }
    }
    ?>

</body>

</html>