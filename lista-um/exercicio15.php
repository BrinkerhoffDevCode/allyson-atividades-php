<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = 'Allyson';
    $idade = '17';

    function informarPessoa ($nome,$idade) {
         $informacao = "Meu nome é $nome e tenho $idade anos.";
         return $informacao;
    }

    echo informarPessoa($nome, $idade);

    ?>
    
</body>
</html>