<html>
<head>
    <meta charset="UTF-8">
    <title>Pág. 65 - exemplo 1</title>
</head>
<body>
    <?php
        function meusObjetos($obj){
            if($obj != ""){
                echo $obj. " é azul.<br>";
            }
            else{
                echo "Não foi informado o objeto!";
            }
        }

        $a = "O meu carro";
        meusObjetos($a);

        $a = "Minha casa";
        meusObjetos($a);

        $a = "Meu time";
        meusObjetos($a);
    ?>
</body>
</html>