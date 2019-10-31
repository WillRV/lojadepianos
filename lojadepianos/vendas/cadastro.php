<?php
    require "../conecta.php";
    include "../menu/index.php";

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
            <p>Data e hora da venda </p><input type="datetime-local" name="nome">
            <p>Id do vendedor</p>
            <select name="id_vendedor">
                <option value="vendedor 1">Volvo</option>
                <option value="vendedor 2">Saab</option>
                <option value="vendedor 3">Mercedes</option>
                <option value="vendedor 4">Audi</option>
            </select>

            <p>Id do cliente</p>
            <select name="id_cliente">
                <option value="vendedor 1">Volvo</option>
                <option value="vendedor 2">Saab</option>
                <option value="vendedor 3">Mercedes</option>
                <option value="vendedor 4">Audi</option>
            </select>

            <br> <br>
            <input type="reset" value="Limpar" class="btn btn-primary">
            <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>