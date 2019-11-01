<?php
    require "../conecta.php";

    $sql = "SELECT * FROM vendas";

    $consulta = mysqli_query($link, $sql) or die ("Falha ao consultar vendas");
    /*$nome_cliente = mysqli_query($link, "SELECT cli_nome from clientes where cli_id = '1'");
    $sql_nomeCliente = "SELECT cli_nome from clientes where cli_id = '1'";
    $sql_nomeVendedor = "SELECT vend_nome from vendedor where vend_id = '2'";
    $nome_vendedor = mysqli_query($link, "SELECT vend_nome from vendedor where vend_id = '2'");
    <td><?php echo $nome_cliente = mysqli_fetch_array(mysqli_query($link, "SELECT cli_nome from clientes where cli_id = '$dados['vendedor_vend_id']'")); //echo $dados["vendedor_vend_id"]; ?></td>*/
    include "../menu/index.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendas</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

    <h1 align="center">Vendas: </h1>
    <p align="center"> 
        <a href="cadastro.php">Cadastrar nova venda</a> 
    </p>
    <table border=1 class="table table">
        <tr>
            <th>Id da venda</th>
            <th>Data</th>
            <th>ID do Vendedor</th>
            <th>ID do Cliente</th>
            <th>Ação</th>
        </tr>
        <?php while($dados = mysqli_fetch_array($consulta)){  ?>

        <tr>
            <td><?php echo $dados["ven_id"]; ?></td>
            <td><?php echo $dados["ven_data"]; ?></td>
            <td><?php echo $dados['vendedor_vend_id'] ?></td>
            <td><?php echo $dados["clientes_cli_id"]; ?></td>
            <td>
                <a href="editar.php?codigo=<?php echo $dados['ven_id']?>">
                    <button class="fa fa-pencil"></button>
                </a>
                <a href="excluir.php?codigo=<?php echo $dados ['ven_id']?>"> 
                    <button class="fa fa-trash-o"></button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>