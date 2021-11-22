<html>
<head>
    <meta charset="UTF-8">
    <title>Pág. 67 - exemplo 3</title>
</head>
<body>
    <?php
        function somaDosNumeros($numero){
            if($numero <= 0){
                return "Erro: o número deve ser maior que 0!";
            }

            $total = 0;

            for($i = 0; $i <= $numero; $i++){
                $total += $i;
            }

            return $total;
        }

        $n = 7;

    echo "Somatório de $n = ". somaDosNumeros($n);
    ?>
</body>
</html>