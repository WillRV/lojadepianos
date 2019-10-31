<?php
    require '../conecta.php';

    $situacao = isset($_GET['editar']);
    $codigo = isset($_POST['id']);
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $cat_id = $_POST['cat_id'];
    $qtd = $_POST['qtd'];

    echo $situacao . "<br>";
    echo $codigo;

    //edito
    if($situacao == "1"){
        $sql = "UPDATE produto_estoque
                SET prod_nome = '$nome', prod_valor = '$valor', categorias_id = '$cat_id', qtd = '$qtd' WHERE prod_id = '$codigo';
                ";
    }else{ //Insiro
        $sql = "INSERT INTO produto_estoque (prod_nome, prod_valor, categorias_id, qtd)
        VALUES ('$nome', '$valor', '$cat_id', '$qtd');
        " or die ("Falha ao inserir produto no estoque");
    }
    mysqli_query($link, $sql);

    //header("location: index.php");
?>