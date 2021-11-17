<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para upload de arquivos (gravando o arquivo transferido)</title>
</head>
<body>
    <?php
        if((($_FILES["arq"]["type"] == "image/gif") ||
        ($_FILES["arq"]["type"] == "image/jpeg") ||
        ($_FILES["arq"]["type"] == "image/pjpeg") &&
        ($_FILES["arq"]["size"] < 20000))){
            if($_FILES["arq"]["error"] > 0){
                echo "Erro: ". $_FILES["arq"]["error"]. "<br>";
            }
            else{
                echo "Arquivo para upload: ". $_FILES["arq"]["name"]. "<br>";

                echo "Tipo: ". $_FILES["arq"]["type"]. "<br>";

                echo "Tamanho: ". round(($_FILES["arq"]["size"] / 1024), 2). "<br>";

                echo "Arquivo temporário: ". $_FILES["arq"]["tmp_name"]. "<br>";

                if(file_exists($_FILES["arq"]["name"])){
                    echo "<br>O arquivo: ". $_FILES["arq"]["name"]. "já existe.";
                }
                else{
                    move_uploaded_file($_FILES["arq"]["tmp_name"], $_FILES["arq"]["name"]);

                    echo "<br>Armazenado como: ". $_FILES["arq"]["name"];
                }
            }
        }
        else{
            echo "Arquivo inválido!";
        }
    ?>
</body>
</html>