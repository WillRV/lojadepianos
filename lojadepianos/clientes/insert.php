<?php
    require '../conecta.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $aniv = $_POST['aniv'];
    $situacao = isset($_GET['editar']);
    $codigo = $_POST['id'];

    echo $situacao . "<br>";
    echo $codigo;

    //edito
    if($situacao == "1"){
        $sql = "UPDATE clientes
                SET cli_nome = '$nome', cli_cpf = '$cpf', cli_aniv='$aniv' WHERE cli_id = '$codigo'
                ";
    }else{ //Insiro
        $sql = "INSERT INTO clientes (cli_nome, cli_cpf, cli_aniv)
        VALUES ('$nome', '$cpf', '$aniv');
        ";
    }
    mysqli_query($link, $sql);

    header("location: index.php");
?>