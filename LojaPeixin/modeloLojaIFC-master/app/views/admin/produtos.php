<?php

require_once "../../../app/models/CrudProdutos.php";
require_once "../../../app/models/Produto.php";
$crud = new CrudProdutos();

$listaProdutos = $crud->getProdutos();

require_once "cabecalho.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://icon-icons.com/icons2/881/PNG/512/Fish_Food_icon-icons.com_68747.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/ifc-style-admin.css">


    <title>Area do admin</title>


</head>



<body>



<!--Barra de busca-->
<div class="row">
    <div class="col-md-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="digite o nome do produto" aria-describedby="basic-addon2">
            <button class="input-group-addon" id="basic-addon2">buscar</button>
        </div>
    </div>
</div>


<br>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>codigo</th>
        <th>Nome</th>
        <th>Nome científico</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        <tr>
        <?php foreach($listaProdutos as $prod): ?>
            <th scope="row"><?= $prod->codigo ?></th>
            <td><?= $prod->nome ?></td>
            <td><?= $prod->nome_cient ?></td>
            <td>R$<?= $prod->preco ?></td>
            <td><?= $prod->estoque ?></td>
            <td><?= $prod->categoria ?></td>

            <td><a href="editar-produto.php?codigo=<?= $prod->codigo ?>">Editar</a> |
                <a href="../../controllers/controladorProduto.php?acao=excluir&codigo=<?= $prod->codigo ?>">Excluir</a></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<?php require_once "rodape.php" ?>
</body>

</html>