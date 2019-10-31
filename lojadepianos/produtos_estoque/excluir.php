<?php
    require '../conecta.php';

    $codigo = $_GET['codigo'];
    
    $sql = " DELETE from produto_estoque where prod_id = $codigo" or die ("Falha ao deletar");

    mysqli_query($link, $sql);

    header("location: index.php");
?>