<html>
<head>
    <meta charset="UTF-8">
    
    <title>Descubra o que a função faz</title>
</head>
<body>
    <h3>Insira o valor das notas</h3>

    <form action="#" method="get">
        <table>
            <tr>
                <td>Nota 1: </td>
                <td><input type="text" name="n1" value=""></td>
            </tr>
            <tr>
                <td>Nota 2: </td>
                <td><input type="text" name="n2" value=""></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="submit" value="Calcular" name="btnAcao"></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
        </table>

        <?php
            $nota1 = null;
            $nota2 = null;

            /* A função está calculando a média de duas variáveis,
            que posteriormente virão a ser as notas */
            function calculo($var1, $var2){
                $total = ($var1 + $var2) / 2;

                return $total;
            }

            /* O if está verificando se o botão de ação foi
            "setado"/definido, se sim, o if definirá o valor
            para $nota1 e $nota2, se não, não fará nada. */
            if(isset($_GET["btnAcao"])){
                
                /* O $_GET[""] pega os nomes que definimos para
                aqueles inputs de anteriormente (ou qualquer outra coisa)
                e seu valor. Esse nome e valor aparecem na URL da
                página e podem ser utilizados para dar valores a
                variáveis, como abaixo. */
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
            }
        ?>

        Resultado<br>
        <hr align="left" width="40%">

        <table border="1" width="30%">
            <tr bgcolor="#7f7fa5" align="center">
                <td>Nota 1</td>
                <td>Nota 2</td>
                <td>Total</td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "$nota1";
                    ?>
                </td>
                <td>
                    <?php
                        echo "$nota2";
                    ?>
                </td>
                <td>
                    <?php
                        echo calculo($nota1, $nota2);
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>