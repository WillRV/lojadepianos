<?php
    require "../conecta.php";
    include "../menu/index.php";

    $vendedor = "SELECT * FROM vendedor";
    $cliente = "SELECT * from clientes";
    $resultado_vendedor = mysqli_query($link, $vendedor);
    $resultado_cliente = mysqli_query($link, $cliente);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div id="cadastro" align="center">
        <h1>Cadastrar venda </h1>
        <form action="insert.php" method="post">
            <div class="form-group">
            <p>Data e hora da venda </p><input type="datetime-local" name="data">

            <p>Vendedor</p>
            <select name="vendedor">
                <option>Selecione</option>

                <?php while($array_vendedor = mysqli_fetch_array($resultado_vendedor)){ ?>
                <option value="<?php echo $array_vendedor['vend_id'] ?>  "><?php echo $array_vendedor['vend_nome'] ?></option>

                <?php } ?>
            </select>

            <p>Cliente</p>
            <select name="cliente">
                <option>Selecione</option>

                <?php while ($array_cliente = mysqli_fetch_array($resultado_cliente)){ ?>
                    <option value="<?php echo $array_cliente['cli_id'] ?>"><?php echo $array_cliente['cli_nome'] ?></option>
                <?php } ?>
            </select>

            <br> <br>
            <input type="reset" value="Limpar" class="btn btn-primary">
            <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>