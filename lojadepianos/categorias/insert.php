<?php
    require '../conecta.php';

    $id = isset($_POST['id']);
    $desc = $_POST['desc'];
    $situacao = isset($_GET['editar']);
    $num = $_POST['num'];

    echo $situacao . "<br>";
    echo $desc . "<br>";
    //edito
    if($situacao == "1"){
        $sql = "UPDATE categorias
                SET cat_id = '$id', cat_desc = '$desc'  WHERE cat_id = '$id';
                ";
    }else{ //Insiro
        $sql = "INSERT INTO categorias (cat_id, cat_desc, ativo)
        VALUES ('$num', '$desc', '1')";
    }
    mysqli_query($link, $sql);

   // header("location: index.php");
?>