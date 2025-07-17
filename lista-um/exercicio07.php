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
        <button type="submit" name="verificar_numero_perfeito">Verificar</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar_numero_perfeito'])) { {
                $num1 = $_POST['numero'];
                $num2 = $_POST['numero']; {
                    $soma = $num1 + $num2;
                }
            }
        }
        echo "A soma é: " $resultado;
    }

    ?>


?>
    
</body>
</html>

