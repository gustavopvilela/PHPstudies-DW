<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="questao3.css">

    <title>Questão 3</title>
</head>
<body>
    <?php
        function calculo($i){
            switch($i){
                case ($i < 10):
                    return "Sua idade é $i ano(s), então você pagará R$100,00 mais o adicional de R$80,00, ou seja, R$180,00.";
                break;

                case($i >= 10 && $i <= 30):
                    return "Sua idade é $i anos, então você pagará R$100,00 mais o adicional de R$50,00, ou seja, R$150,00.";
                break;

                case($i >= 40 && $i <= 60):
                    return "Sua idade é $i anos, então você pagará R$100,00 mais o adicional de R$95,00, ou seja, R$195,00.";
                break;

                case($i > 60):
                    return "Sua idade é $i anos, então você pagará R$100,00 mais o adicional de R$130,00, ou seja, R$230,00.";
                break;

                default:
                    return "Idade inválida ou não há plano para a mesma.";
            }
        }

        $idade = isset($_GET["idade"]) ? $_GET["idade"] : 0;

        echo calculo($idade);
    ?>
</body>
</html>