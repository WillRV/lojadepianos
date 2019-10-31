<?php
    require '../conecta.php';

    $codigo = $_GET['codigo'];
    
    $sql = " DELETE from clientes where cli_id = $codigo";

    mysqli_query($link, $sql);

    header("location: index.php");
?>