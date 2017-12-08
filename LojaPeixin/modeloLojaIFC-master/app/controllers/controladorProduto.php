<?php


require_once __DIR__."/../models/Produto.php";
require_once __DIR__."/../models/CrudProdutos.php";



if ($_GET['acao'] == 'cadastrar'){

    $produto = new Produto($_POST['nome'], $_POST['nome_cient'], $_POST['preco'], $_POST['categoria'], $_POST['estoque']);

    $crud = new CrudProdutos();
    $crud->salvar($produto);


    header("location: ../views/admin/produtos.php");
}

if ($_GET['acao'] == 'editar'){

    $crud = new CrudProdutos();
    $produto = new Produto($_POST["nome"], $_POST["preco"], $_POST["categoria"], $_POST["estoque"], $_POST['codigo']);

    $crud->editarProduto($produto);

    header("location: ../views/admin/produtos.php");


}

if ($_GET['acao'] == 'excluir'){

    $crud = new CrudProdutos();
    $crud->excluir($_GET['codigo']);

    header("location: ../views/admin/produtos.php");
}