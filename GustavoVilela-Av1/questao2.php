<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 2</title>
</head>
<body>
    <?php
        function calculo($s, $p){
            $porcento = ($p * 100) / $s;

            if($porcento <= 30){
                return "O empréstimo poderá ser concedido. Seu valor será R$". number_format($p, 2, ",", "."). ".";
            }
            else{
                return "O empréstimo não poderá ser concedido pois ultrapassa 30% do seu salário.";
            }
        }
        
        $salario = isset($_GET["salario"]) ? $_GET["salario"] : 0;

        $prestacao = isset($_GET["prestacao"]) ? $_GET["prestacao"] : 0;

        echo calculo($salario, $prestacao);
    ?>
</body>
</html>