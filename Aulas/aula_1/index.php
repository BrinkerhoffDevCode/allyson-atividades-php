    <?php

        $mensagem = 'Olá, mundo!';
        echo $mensagem;

        echo '<h2> Olá, mundo! </h2>';

        $nome = 'Allyson Schaedler Brinkerhoff';
        $idade = 17;
        $gosta_de_bolo = true;

        $resultado_ano = 2025 - $idade;

        echo $resultado_ano;

        echo '<br>';
        echo '<br>';

        $num = 37.5;

        echo $num; 

        $num2 = (int) $num;
        echo '<br>';
        echo $num2;

        $nota = 0;

        if($nota >= 7){
            echo '<p>Passou na Prova</p>';
        }else if ($nota == 10) {
            echo '<p>Como você fez isso</p>';
        } else{
            echo '<p>Não Passou na Prova</p>';
        }

        for($i = 0; $i <=5; $i++){

            //echo '<p> Contagem: '. $i .'</p>';

            echo "<p> Contagem: $i </p>";


        };

        $frutas = array('laranja','banana','tomate','bergamota');

        echo $frutas[2];

        echo '<br>';
        echo '<br>';

        function saudacao($nome){
            return "olá $nome ";

        };

        echo saudacao('Enrico');





    ?>