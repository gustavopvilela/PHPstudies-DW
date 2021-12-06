<?php
    include "conexao.php";

    // seleciona banco de dados
    mysqli_select_db($connect, $banco) or die("Erro na seleção do banco");

    // obtém os valores do formulário
    $login = $_GET["login"];
    $senha = $_GET["senha"];

    // verifica se há valores nos campos
    if(empty($senha) || empty($login)){
        echo
        "<script type='text/javascript'>
            alert('O campo login e senha devem ser preenchidos!');

            window.location.href='formulario.html';
        </script>";
    }

    // instrução SQL
    $query_select = "SELECT * FROM `pessoa` WHERE `login` LIKE '$login' AND `senha` LIKE '$senha'";

    // consulta u usuário já inserido no banco
    $select = mysqli_query($connect, $query_select);

    // retorna a quantidade de linhas encontradas
    $row = mysqli_num_rows($select);

    // emite mensagem caso o usuário tenha sido encontrado
    if($row == 1){
        echo
        "<script type='text/javascript'>
            alert('Login efetuado com sucesso!');

            location.href='formulario.html';
        </script>";
    }
    else{
        echo
        "<script type='text/javascript'>
            alert('Usuário/senha não cadastrados!');

            location.href='formulario.html';
        </script>";
    }

    mysqli_close($connect);
?>