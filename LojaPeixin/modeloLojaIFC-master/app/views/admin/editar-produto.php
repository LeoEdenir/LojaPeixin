<?php

require_once "../../models/CrudProdutos.php";

$crud = new CrudProdutos();
$produto = $crud->getProduto($_GET['codigo']);

$codigo = filter_input(INPUT_GET, 'codigo', FILTER_VALIDATE_INT);

require_once "cabecalho.php"
?>


<!-- ## !!ADICIONE O CABECALHO E O RODAPE PARA A PAGINA -->

<h2>Editar Produtos</h2>
<form action="../../controllers/controladorProduto.php?acao=editar&codigo=<?= $produto->codigo ?>" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input value="<?= $produto->nome ?>" name="nome" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input value="<?= $produto->preco ?>" name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input value="<?= $produto->estoque ?>" name="quantidade" type="number" class="form-control" id="quantidade" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option <?php if ($produto->categoria == "Peixe"){echo "selected"; } ?> >Peixe</option>
            <option <?php if ($produto->categoria == "Asteroidea"){echo "selected"; } ?> >Asteroidea</option>
            <option <?php if ($produto->categoria == "Cephalopoda"){echo "selected"; } ?> >Cephalopoda</option>
            <option <?php if ($produto->categoria == "Reptil"){echo "selected"; } ?> >Reptil</option>
        </select>
    </div>



    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

<?php require_once "rodape.php" ?>
