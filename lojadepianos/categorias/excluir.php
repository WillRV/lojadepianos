<?php
    require '../conecta.php';

    $codigo = $_GET['codigo'];
    
    echo $codigo;
    $sql = "DELETE from categorias where cat_id = $codigo;"; //Depois arrumo o problema com chave 

    mysqli_query($link, $sql);

    header("location: index.php");
?>