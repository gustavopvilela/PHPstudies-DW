<html>
<head>
    <meta charset="UTF-8">
    <title>Exemplo da pág. 50 - Switch... case</title>
</head>
<body>
    <?php
        $valor = random_int(0, 10);
        # comando apenas para definir um valor para $valor e não dar indefinido no switch
        
        switch($valor){
            case 1:
                echo "O valor é igual a 1.";
            break;

            case 2:
                echo "O valor é igual a 2.";
            break;

            case 3:
                echo "O valor é igual a 3.";
            break;

            default:
                echo "O valor é diferente de 1, 2 e 3. <br>O valor é $valor.";
        }
    ?>
</body>
</html>