<?php
    require '../conecta.php';

    $codigo = $_GET['codigo'];
    
    $sql = " DELETE from vendas where ven_id = '$codigo' ";

    mysqli_query($link, $sql);

    header("location: index.php");
?>