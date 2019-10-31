<?php
    require '../conecta.php';

    $nome = $_POST['nome'];
    $situacao = isset($_GET['editar']);
    $codigo = $_POST['id'];

    echo $situacao . "<br>";
    echo $codigo;

    //edito
    if($situacao == "1"){
        $sql = "UPDATE vendedor
                SET vend_nome = '$nome' WHERE vend_id = '$codigo';
                ";
    }else{ //Insiro
        $sql = "INSERT INTO vendedor (vend_nome)
        VALUES ('$nome');
        ";
    }
    mysqli_query($link, $sql);

    header("location: index.php");
?>