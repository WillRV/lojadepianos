<?php
    require '../conecta.php';

    $vendedor = $_POST['vendedor'];
    $cliente = $_POST['cliente'];
    $data = $_POST['data'];

    $situacao = isset($_GET['editar']);

    echo $situacao . "<br>";
    echo $codigo;

    //edito
    /*if($situacao == "1"){
        $sql = "UPDATE vendas
                SET vend_nome = '$nome' WHERE vend_id = '$codigo';
                ";
    }else{ //Insiro       */
        $sql = "INSERT INTO vendas (ven_data, vendedor_vend_id, clientes_cli_id)
        VALUES ('$data', '$vendedor', '$cliente');
        ";
    //}
    mysqli_query($link, $sql);

    header("location: index.php");
?>