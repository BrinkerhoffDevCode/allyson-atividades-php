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
        <button type="submit" name="calcular_fatorial">Verificar</button>
    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['calcular_fatorial'])) { {
             $numero = $_POST['numero'];
                if ($numero < 0) {
                    echo 'Fatorial não é definido para números negativos.';
                } else if ($numero === '0') {
                    echo 'O fatorial de 0 é 1.';
                } else {
                    $fatorial = 1;
                    for ($i = 1; $i <= $numero; $i++) {
                        $fatorial *= $i;
                    }
                    echo 'O fatorial de ' . $numero . ' é ' . $fatorial . '.';
                }
            }
        }
    }


    ?>

</body>

</html>