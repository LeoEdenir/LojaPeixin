<?php


require_once __DIR__."/../models/Produto.php";
require_once __DIR__."/../models/CrudProdutos.php";






if ($_GET['acao'] == 'cadastrar'){

    $produto = new Produto($_POST['nome'], $_POST['nome_cient'], $_POST['preco'], $_POST['categoria'], $_POST['estoque']);

    $crud = new CrudProdutos();
    $crud->salvar($produto);


    header("location: ../views/admin/produtos.php");
}

//quando um valor da URL for igual a editar faça isso
if ($_GET['acao'] == 'editar'){



}

//quando um valor da URL for igual a excluir faça isso
if ($_GET['acao'] == 'excluir'){

    $crud = new CrudProdutos();
    $crud->excluir($_GET['codigo']);

    header("location: ../views/admin/produtos.php");
}