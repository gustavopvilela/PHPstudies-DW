<html>
<head>
    <meta charset="UTF-8">
    <title>Pág. 66 - exemplo 2</title>
</head>
<body>
    <?php
        function areaRet($base, $altura){
            $area = ($base * $altura);
            # a linha acima é a fórumla para se calcular a área de um RETÂNGULO

            echo "O retângulo com base = $base e altura = $altura tem área ". $area. ".<br>";
        }

        areaRet(5, 4);
        areaRet(7, 3);
        areaRet(12.5, 6);
    ?>
</body>
</html>