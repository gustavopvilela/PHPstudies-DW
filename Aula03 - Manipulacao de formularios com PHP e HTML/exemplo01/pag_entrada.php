<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    Olá, <?php echo $_POST["ID"];?>!

    <br>

    Você nasceu em <?php echo $_POST["mes"];?>.

    <!-- Se é post, usa $_POST[], se é get, usa $_GET[] -->
</body>
</html>