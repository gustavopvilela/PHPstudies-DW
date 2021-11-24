<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 3</title>
</head>
<body>
    <?php
        function calculo($i){
            switch($i){
                case ($i < 10):
                    return "Sua idade é $i anos, então você pagará $100,00 mais o adicional de R$80,00, ou seja, <b>R$180,00</b>.";
                break;

                case($i >= 10 && $i < 40):
                    return "Sua idade é $i anos, então você pagará $100,00 mais o adicional de R$50,00, ou seja, <b>R$150,00</b>.";
                break;

                case($i >= 40 && $i <= 60):
                    return "Sua idade é $i anos, então você pagará $100,00 mais o adicional de R$95,00, ou seja, <b>R$195,00</b>.";
                break;

                case($i > 60):
                    return "Sua idade é $i anos, então você pagará $100,00 mais o adicional de R$130,00, ou seja, <b>R$230,00</b>.";
                break;

                default:
                    return "Idade inválida.";
            }
        }

        $idade = isset($_GET["idade"]) ? $_GET["idade"] : 0;

        echo calculo($idade);
    ?>
</body>
</html>