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
        <button type="submit" name="quantidade_vogais">Verificar</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['quantidade_vogais'])) { 
                $palavra = $_POST['numero']; {
                echo "A palavra digitada é: $palavra <br>"; 
                echo "A quantidade de vogais é: " . 


                }
        }
    }
    ?>
    
</body>
</html>
