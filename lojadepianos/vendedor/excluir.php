<?php
    require '../conecta.php';

    $codigo = $_GET['codigo'];
    
    $sql = " DELETE from vendedor where vend_id = $codigo";

    mysqli_query($link, $sql);

    header("location: index.php");
?>