<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $numero;

    function VerificarPar($numero){
        if($numero % '2' === '0'){  
             echo 'par';
        }else{
            echo 'impar';
        };

    };

    VerificarPar('4');
    VerificarPar('10');


    ?>
</body>

</html>