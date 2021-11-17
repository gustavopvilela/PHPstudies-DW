<html>
<head>
    <meta charset="UTF-8">
    <title>Exemplo da pág. 46 - If... else</title>
</head>
<body>
    <?php
        $semana = 5; // número de dias úteis na semana

        $mes = 4.5; // número médio de semanas em um mês

        $ano = 12; //número de meses em um ano

        $uteis = ($semana * $mes * $ano); //testa se o número de dias calculado é maior ou igual a 270

        if($uteis >= 270){
            echo "Eh galera, este ano a malhação será grande!";

            $diferenca = 365 - $uteis;

            echo "<br>E pelo visto, vamos ter apenas $diferenca dias de folga.";
        }
        else{
            echo "Este ano vamos ter moleza.";
        }
    ?>
</body>
</html>